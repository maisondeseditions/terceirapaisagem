// class HyphenopolyHandler extends Paged.Handler {
//     constructor(chunker, polisher, caller) {
//         super(chunker, polisher, caller);
//     }

//     beforeParsed(content) {
//         // console.log(content);
//         Hyphenopoly.config({
//           require: {
//               "la": "honorificabilitudinitas",
//               "de": "Silbentrennungsalgorithmus",
//               "en-us": "Supercalifragilisticexpialidocious"
//           },
//           setup: {
//               selectors: {
//                   ".text": {}
//               }
//           }
//       });
//     }
// }
// Paged.registerHandlers(HyphenopolyHandler);