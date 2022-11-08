/** @type {import('tailwindcss').Config} */
module.exports = {
  prefix: 'tw-',

  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/views/components/banners/*.blade.php',
  ],
  prefix: 'tw-',

  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito', 'sans'],
      },
    },
  },

  plugins: [require('@tailwindcss/forms')],
};

 