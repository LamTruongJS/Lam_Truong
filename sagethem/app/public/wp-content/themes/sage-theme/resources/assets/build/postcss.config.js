/* eslint-disable */

const cssnanoConfig = {
  preset: ['default', { discardComments: { removeAll: true } }]
};

module.exports = ({ file, options }) => {
  return {
    parser: options.enabled.optimize ? 'postcss-safe-parser' : undefined,
    plugins: {
      cssnano: options.enabled.optimize ? cssnanoConfig : false,
      tailwindcss: `${options.paths.assets}/styles/tailwind.js`,
      autoprefixer: true
    },
  };
};
