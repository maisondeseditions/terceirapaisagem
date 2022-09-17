//to do change units BY LOOKING FOR THEM

class Booklet extends Paged.Handler {
  constructor(chunker, polisher, caller) {
    super(chunker, polisher, caller);
    this.pagedbooklet;
    this.sourceSize;
  }
  onAtPage(node, item, list) { }
  onDeclaration(declaration, dItem, dList, rule) {
    if (declaration.property == "--paged-layout") {
      if (declaration.value.value.includes("booklet")) {
        this.pagedbooklet = true;
      }
    }
  }
  afterRendered(pages) {
    if (this.pagedbooklet == true) {
      do_imposition();
    }
  }
}
Paged.registerHandlers(Booklet);


function do_imposition(){

  // pages
  let pages = document.querySelectorAll(".pagedjs_page");
  const number_of_pages = pages.length;
  
  // measures
  let format = document.querySelector(".pagedjs_page");
  let width = getCSSCustomProp("--pagedjs-width", format);
  let height = getCSSCustomProp("--pagedjs-height", format);

  var newSize = `
    @media print{
      @page{
        size: 297mm 210mm;
      }
      .pagedjs_page:nth-of-type(even){
          break-after: always;
      }
      .pagedjs_pages {
          width: auto;
          display: flex !important;
          flex-wrap: wrap;
          transform: none !important;
          height: 100% !important;
          min-height: 100%;
          max-height: 100%;
          overflow: visible;
      }
      .pagedjs_page {
          margin: 0;
          padding: 0;
          max-height: 100%;
          min-height: 100%;
          height: 100% !important;
      }

      .pagedjs_sheet {
          margin: 0;
          padding: 0;
          max-height: 100%;
          min-height: 100%;
          height: 100% !important;
      }

    }
    .pagedjs_first_page {
        margin-left: 0;
    }
    body{
        margin: 0
    }
  `;

  let style = document.createElement("style");
  style.id = "imposition";
  style.textContent = newSize;
  document.head.appendChild(style);

  // Create an array for pages
  var pages_array = [];

  // If the page count isn't a multiple of 4, we need to
  // pad the array with blank pages so we have the correct
  // number of pages for a booklet.
  //
  // ex. [1, 2, 3, 4, 5, 6, 7, 8, 9, blank, blank, blank]

  var additional_pages = number_of_pages % 2 == 0 ? 0 : 2 - (number_of_pages % 2);
  console.log(`additional_pages = ${additional_pages}`);
  
  for (i = 0; i < additional_pages; i++) {
    let added_page = document.createElement("div");
    const folio = number_of_pages + i + 1;
    added_page.classList.add("pagedjs_page", "pagedjs_added_page", folio % 2 == 0 ? "pagedjs_left_page" : "pagedjs_right_page");
    added_page.id = `page-${folio}`;
    document.querySelector(".pagedjs_pages").appendChild(added_page);
  }

  // special trick for using a regular page as back cover
  var bc = document.querySelector('.pagedjs_backcover_page');
  if(bc && additional_pages) {
    var last = document.querySelector(".pagedjs_added_page:last-of-type");
    var lastid= last.id;
    // swap last added page (might be the last in the booklet) and our backcover
    bc.after(last);
    bc.classList.replace("pagedjs_right_page", "pagedjs_left_page");
    document.querySelector(".pagedjs_pages").appendChild(bc);
    // swap IDs
    last.id=bc.id;
    bc.id = lastid;
  };



  var evt = new CustomEvent("paged_imposed", {detail: "Imposition done"});
  window.dispatchEvent(evt);

}



/**
 * Pass in an element and its CSS Custom Property that you want the value of.
 * Optionally, you can determine what datatype you get back.
 *
 * @param {String} propKey
 * @param {HTMLELement} element=document.documentElement
 * @param {String} castAs='string'
 * @returns {*}
 */
const getCSSCustomProp = (
  propKey,
  element = document.documentElement,
  castAs = "string"
) => {
  let response = getComputedStyle(element).getPropertyValue(propKey);

  // Tidy up the string if there's something to work with
  if (response.length) {
    response = response.replace(/\'|"/g, "").trim();
  }

  // Convert the response into a whatever type we wanted
  switch (castAs) {
    case "number":
    case "int":
      return parseInt(response, 10);
    case "float":
      return parseFloat(response, 10);
    case "boolean":
    case "bool":
      return response === "true" || response === "1";
  }

  // Return the string response by default
  return response;
};
