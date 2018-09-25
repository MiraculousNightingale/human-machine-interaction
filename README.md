Project structure:
-
- `src - source code`
- `dist - distributable`
- `styles - CSS files`
- `reports - LW reports`

**All .php files are located in root folder**

Setup
-
1. Clone the project
2. Run `npm install` or `npm i`

Additional (not required):
-
- Compiler that may be used in the project — https://babeljs.io/
- If using compiler, link .php files to dist/ folder instead of src/
- https://www.npmjs.com/get-npm
- use npm scripts to compile JS — `npm run scriptname`

**Current npm scripts:**
- `build` — compile all files in src to dist folder
- `watch` — watch all files in src and build when changed

Scripts line:

  "scripts": {
    "build": "babel src -d dist --presets=@babel/env",
    "watch": "babel src --watch -d dist --presets=@babel/env"
  },