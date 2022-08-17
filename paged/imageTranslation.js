class TranslationHandler extends Paged.Handler {
    constructor(chunker, polisher, caller) {
        super(chunker, polisher, caller);
    }

    beforeParsed(content) {
        // console.log(content);
        const images = content.querySelectorAll('img');
        images.forEach(image => {
          image.removeAttribute("loading")
          image.setAttribute("src", image.getAttribute('src').replace('images/', 'images-translated/') + "?" + Math.random());
          console.log(image);
        });
    }
}
Paged.registerHandlers(TranslationHandler);