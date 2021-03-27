const path = require("path");

module.exports = {
  entry: {
    main: ["./src/main.js", "./src/main.scss"],
  },
  output: {
    filename: "[name].js",
    path: path.resolve(__dirname, "dist"),
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].css",
            },
          },
          "sass-loader", // compiles Sass to CSS, using Node Sass by default
        ],
      },
    ],
  },
};
