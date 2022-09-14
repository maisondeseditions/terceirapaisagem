

  // clone nav
  var nav= document.querySelector("#index ul");
  var clone = nav.cloneNode(true);
  clone.id = "nav";
  document.body.appendChild(clone);

  // footnotes 
  var sections = document.querySelectorAll('section');
  var notes_index = 1;
  var ndt_index = ["III", "II", "I"];
  sections.forEach( (section) => {
    var fns = section.querySelectorAll('.fn, .ndt');
    if(fns.length){
      var fns_container = document.createElement('div');
      fns_container.className = "fns_container";
      section.appendChild(fns_container);
      fns.forEach( (fn) => {
        var fn_call = document.createElement('a');
        fn_call.className = "fn_call";
        if(fn.classList.contains('ndt')){
          var ndtindex = ndt_index.pop();
          fn_call.textContent = "NdT " + ndtindex;
          var id = "ndt-" + ndtindex;
        } else {
          fn_call.textContent =  notes_index;
          var id = "fn-" + notes_index;
          notes_index ++;
        }
        fn_call.href = "#" + id;
        fn_call.id = "fn_call-" + id;
        fn.parentElement.insertBefore(fn_call, fn);
        var fn_ref = document.createElement('div');
        fn_ref.className = "fn_ref";
        fn_ref.id = id;
        fn_ref.innerHTML = `<span class='fn_ref_number'>${fn_call.textContent}</span>` + fn.innerHTML + ` <a class="fn-back" href="#fn_call-${id}">&#8617;&#xfe0e;</a>`;
        fns_container.appendChild(fn_ref)
      })
    }
    
  })

  // highlight cloned nav links on scroll
  window.addEventListener('DOMContentLoaded', () => {

    // Fonction exécutée au redimensionnement
    function resize() {
      var result = document.getElementById('result');
      if("matchMedia" in window) { // Détection
        if(window.matchMedia("(min-width:600px)").matches) {
          const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
              const id = entry.target.getAttribute('id');      
              if (entry.intersectionRatio > 0) {
                const a = document.querySelector(`#nav li a[href="#${id}"]`);
                if(a) a.parentElement.classList.add('active');
              } else {
                const a = document.querySelector(`#nav li a[href="#${id}"]`);
                if(a) a.parentElement.classList.remove('active');
              }
            });
          });
      
          // Track all sections that have an `id` applied
          document.querySelectorAll('.text[id]').forEach((section) => {
            observer.observe(section);
          });
      
          const contentobserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
              if (entry.intersectionRatio > 0) {
                clone.classList.add('visible');
              } else {
                clone.classList.remove('visible');
              }
            });
          });
      
          // Track all sections that have an `id` applied
          const content = document.querySelector('#content');
          if(content){
            contentobserver.observe(content);
          }
        } 
      }
    }
    window.addEventListener('resize', resize, false);
    resize()
  
  });

    


const menulink = document.querySelector('#menulink');
const tools = document.querySelector('#tools');
menulink.addEventListener('click', function(){
  tools.classList.toggle('visible');
})

tools.addEventListener('click', function(e){
  if(e.target.matches('a'))
  tools.classList.toggle('visible');
})