// config for hyphenopoly
var Hyphenopoly = {
  require: {
      "fr": "FORCEHYPHENOPOLY"
  },
//   paths: {
//       patterndir: "./js/hyphens/patterns/",
//       maindir: "./js/hyphens/"
//   },
  setup: {
      dontHyphenateClass: "noHyphen",
      safeCopy: false,
      hide: "nothing",
      selectors: {
          "p": {
              hyphen: "\u00AD",
              //hyphen: "•",
              compound: "all",
              minWordLength: 7,
              leftmin: 3,
              rightmin: 3,
              orphanControl: 1,
              mixedCase: false
          },
          "li": {
              hyphen: "\u00AD",
              //hyphen: "•",
              compound: "all",
              minWordLength: 7,
              leftmin: 3,
              rightmin: 3,
              orphanControl: 1,
              mixedCase: false
          },
          "figcaption": {
              hyphen: "\u00AD",
              //hyphen: "•",
              compound: "all",
              minWordLength: 7,
              leftmin: 3,
              rightmin: 3,
              orphanControl: 1,
              mixedCase: false
          },
          "dd": {
              hyphen: "\u00AD",
              //hyphen: "•",
              compound: "all",
              minWordLength: 7,
              leftmin: 3,
              rightmin: 3,
              orphanControl: 1,
              mixedCase: false
          }
      }
  }
}
