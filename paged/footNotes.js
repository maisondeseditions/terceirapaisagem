class fnHandler extends Paged.Handler {
    constructor(chunker, polisher, caller) {
        super(chunker, polisher, caller);
    }


    beforeParsed(content) {
        // console.log(content);
        // inline footnotes
        const fns = content.querySelectorAll(".fn");        
        fns.forEach( (note, index) => {
            note.setAttribute("data-counter", index + 1);
        })
        const ndts = content.querySelectorAll(".ndt");        
        ndts.forEach( (note, index) => {
            note.setAttribute("data-counter", romanize(index + 1));         
        })
    }
    afterPageLayout(pageElement, page, breakToken){
        
        const notes = pageElement.querySelectorAll("a.ndt, a.fn");  
        notes.forEach((n) => {
            const note = pageElement.querySelector(n.getAttribute("href"));
            n.dataset.counter = note.dataset.counter;
        });
    }
}
Paged.registerHandlers(fnHandler);

function romanize (num) {
    if (isNaN(num))
        return NaN;
    var digits = String(+num).split(""),
        key = ["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM","","X","XX","XXX","XL","L","LX","LXX","LXXX","XC","","I","II","III","IV","V","VI","VII","VIII","IX"],
        roman = "",
        i = 3;
    while (i--)
        roman = (key[+digits.pop() + (i * 10)] || "") + roman;
    return Array(+digits.join("") + 1).join("M") + roman;
}