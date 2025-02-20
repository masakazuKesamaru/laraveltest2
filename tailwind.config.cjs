/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php", // Blade テンプレート全般
      "./resources/**/*.js",          // JavaScript ファイル（必要に応じて）
      "./resources/**/*.vue",         // Vue コンポーネント（利用する場合）
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }