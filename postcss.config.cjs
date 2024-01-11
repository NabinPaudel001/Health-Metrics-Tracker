module.exports = {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
    'postcss-preset-env': {
      stage: 3,
      features: {
        'custom-selectors': { preserve: true }
      }
    },
    cssnano: {
      preset: 'default',
    },
  },
};
