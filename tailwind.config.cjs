/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php", // Blade テンプレート全般
      "./resources/**/*.js",          // JavaScript ファイル（必要に応じて）
      "./resources/**/*.vue",         // Vue コンポーネント（利用する場合）
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {},
    },
    plugins: [
      require('flowbite/plugin')  // Flowbite のプラグインを読み込む
    ],
  }