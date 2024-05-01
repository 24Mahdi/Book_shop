<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- fonts.googleapis -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria&display=swap" rel="stylesheet">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="Books/style-add.never.css">
    <link rel="stylesheet" href="Books/style_add_book.css">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">




    <link rel="modulepreload" href="https://tailwindui.com/build/assets/iframe-react-c4e05fce.js">
    <link rel="modulepreload" href="https://tailwindui.com/build/assets/index-0c85f979.js">
    <link rel="modulepreload" href="https://tailwindui.com/build/assets/iframe-a81dc9a8.js">
    <link rel="modulepreload" href="https://tailwindui.com/build/assets/_commonjsHelpers-87174ba5.js">
    <script type="module" src="https://tailwindui.com/build/assets/iframe-react-c4e05fce.js"></script>


    <title>إدارة المتجر</title>



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

        *,
        ::before,
        ::after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
        }

        ::before,
        ::after {
            --tw-content: '';
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-feature-settings: normal;
            font-variation-settings: normal;
        }

        body {
            margin: 0;
            line-height: inherit;
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px;
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }


        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        table {
            text-indent: 0;
            /* 1 */
            border-color: inherit;
            /* 2 */
            border-collapse: collapse;
            /* 3 */
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none;
        }

        :-moz-focusring {
            outline: auto;
        }

        :-moz-ui-invalid {
            box-shadow: none;
        }

        progress {
            vertical-align: baseline;
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }


        [type='search'] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        summary {
            display: list-item;
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        legend {
            padding: 0;
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        dialog {
            padding: 0;
        }

        textarea {
            resize: vertical;
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        button,
        [role="button"] {
            cursor: pointer;
        }

        :disabled {
            cursor: default;
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            vertical-align: middle;
        }

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        [hidden] {
            display: none;
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        .fixed {
            position: fixed;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .sticky {
            position: sticky;
        }

        .left-0 {
            left: 0px;
        }

        .left-4 {
            left: 1rem;
        }

        .top-0 {
            top: 0px;
        }

        .top-1\/2 {
            top: 50%;
        }

        .z-30 {
            z-index: 30;
        }

        .z-40 {
            z-index: 40;
        }

        .z-50 {
            z-index: 50;
        }

        .my-2 {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .-ml-3 {
            margin-left: -0.75rem;
        }

        .mb-0 {
            margin-bottom: 0px;
        }

        .mb-0\.5 {
            margin-bottom: 0.125rem;
        }

        .mb-1 {
            margin-bottom: 0.25rem;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mb-6 {
            margin-bottom: 1.5rem;
        }

        .ml-1 {
            margin-left: 0.25rem;
        }

        .ml-2 {
            margin-left: 0.5rem;
        }

        .ml-3 {
            margin-left: 0.75rem;
        }

        .ml-4 {
            margin-left: 1rem;
        }

        .ml-auto {
            margin-left: auto;
        }

        .mr-1 {
            margin-right: 0.25rem;
        }

        .mr-2 {
            margin-right: 0.5rem;
        }

        .mr-3 {
            margin-right: 0.75rem;
        }

        .mr-4 {
            margin-right: 1rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mt-3 {
            margin-top: 0.75rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .block {
            display: block;
        }

        .inline-block {
            display: inline-block;
        }

        .flex {
            display: flex;
        }

        .table {
            display: table;
        }

        .grid {
            display: grid;
        }

        .hidden {
            display: none;
        }

        .h-2 {
            height: 0.5rem;
        }

        .h-4 {
            height: 1rem;
        }

        .h-6 {
            height: 1.5rem;
        }

        .h-8 {
            height: 2rem;
        }

        .h-full {
            height: 100%;
        }

        .max-h-64 {
            max-height: 16rem;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .w-2 {
            width: 0.5rem;
        }

        .w-6 {
            width: 1.5rem;
        }

        .w-64 {
            width: 16rem;
        }

        .w-8 {
            width: 2rem;
        }

        .w-full {
            width: 100%;
        }

        .min-w-\[460px\] {
            min-width: 460px;
        }

        .min-w-\[540px\] {
            min-width: 540px;
        }

        .max-w-\[140px\] {
            max-width: 140px;
        }

        .max-w-xs {
            max-width: 20rem;
        }

        .-translate-x-full {
            --tw-translate-x: -100%;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .-translate-y-1\/2 {
            --tw-translate-y: -50%;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .appearance-none {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .items-start {
            align-items: flex-start;
        }

        .items-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .gap-4 {
            gap: 1rem;
        }

        .gap-6 {
            gap: 1.5rem;
        }

        .overflow-x-auto {
            overflow-x: auto;
        }

        .overflow-y-auto {
            overflow-y: auto;
        }

        .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .rounded {
            border-radius: 0.25rem;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .rounded-md {
            border-radius: 0.375rem;
        }

        .rounded-bl-md {
            border-bottom-left-radius: 0.375rem;
        }

        .rounded-br-md {
            border-bottom-right-radius: 0.375rem;
        }

        .rounded-tl-md {
            border-top-left-radius: 0.375rem;
        }

        .rounded-tr-md {
            border-top-right-radius: 0.375rem;
        }

        .border {
            border-width: 1px;
        }

        .border-b {
            border-bottom-width: 1px;
        }

        .border-b-2 {
            border-bottom-width: 2px;
        }

        .border-dashed {
            border-style: dashed;
        }

        .border-gray-100 {
            --tw-border-opacity: 1;
            border-color: rgb(243 244 246 / var(--tw-border-opacity));
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity));
        }

        .border-b-gray-100 {
            --tw-border-opacity: 1;
            border-bottom-color: rgb(243 244 246 / var(--tw-border-opacity));
        }

        .border-b-gray-50 {
            --tw-border-opacity: 1;
            border-bottom-color: rgb(249 250 251 / var(--tw-border-opacity));
        }

        .border-b-gray-800 {
            --tw-border-opacity: 1;
            border-bottom-color: rgb(31 41 55 / var(--tw-border-opacity));
        }

        .border-b-transparent {
            border-bottom-color: transparent;
        }

        .bg-black\/50 {
            background-color: rgb(0 0 0 / 0.5);
        }

        .bg-blue-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(59 130 246 / var(--tw-bg-opacity));
        }

        .bg-blue-500\/10 {
            background-color: rgb(59 130 246 / 0.1);
        }

        .bg-emerald-500\/10 {
            background-color: rgb(16 185 129 / 0.1);
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
        }

        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
        }

        .bg-gray-900 {
            --tw-bg-opacity: 1;
            background-color: rgb(17 24 39 / var(--tw-bg-opacity));
        }

        .bg-rose-500\/10 {
            background-color: rgb(244 63 94 / 0.1);
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .bg-select-arrow {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+PHBhdGggZD0iTTExLjk5OTcgMTMuMTcxNEwxNi45NDk1IDguMjIxNjhMMTguMzYzNyA5LjYzNTg5TDExLjk5OTcgMTUuOTk5OUw1LjYzNTc0IDkuNjM1ODlMNy4wNDk5NiA4LjIyMTY4TDExLjk5OTcgMTMuMTcxNFoiIGZpbGw9InJnYmEoMTU2LDE2MywxNzUsMSkiPjwvcGF0aD48L3N2Zz4=");
        }

        .bg-\[length\:16px_16px\] {
            background-size: 16px 16px;
        }

        .bg-\[right_16px_center\] {
            background-position: right 16px center;
        }

        .bg-no-repeat {
            background-repeat: no-repeat;
        }

        .object-cover {
            -o-object-fit: cover;
            object-fit: cover;
        }

        .p-1 {
            padding: 0.25rem;
        }

        .p-4 {
            padding: 1rem;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .py-1 {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }

        .py-1\.5 {
            padding-top: 0.375rem;
            padding-bottom: 0.375rem;
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .pb-1 {
            padding-bottom: 0.25rem;
        }

        .pb-4 {
            padding-bottom: 1rem;
        }

        .pl-10 {
            padding-left: 2.5rem;
        }

        .pl-4 {
            padding-left: 1rem;
        }

        .pl-7 {
            padding-left: 1.75rem;
        }

        .pr-10 {
            padding-right: 2.5rem;
        }

        .pr-4 {
            padding-right: 1rem;
        }

        .pt-4 {
            padding-top: 1rem;
        }

        .text-left {
            text-align: left;
        }

        .align-top {
            vertical-align: top;
        }

        .align-middle {
            vertical-align: middle;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }

        .text-\[11px\] {
            font-size: 11px;
        }

        .text-\[12px\] {
            font-size: 12px;
        }

        .text-\[13px\] {
            font-size: 13px;
        }

        .text-base {
            font-size: 1rem;
            line-height: 1.5rem;
        }

        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .font-medium {
            font-weight: 500;
        }

        .font-normal {
            font-weight: 400;
        }

        .font-semibold {
            font-weight: 600;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .leading-none {
            line-height: 1;
        }

        .tracking-wide {
            letter-spacing: 0.025em;
        }

        .text-blue-500 {
            --tw-text-opacity: 1;
            color: rgb(59 130 246 / var(--tw-text-opacity));
        }

        .text-emerald-500 {
            --tw-text-opacity: 1;
            color: rgb(16 185 129 / var(--tw-text-opacity));
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity));
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity));
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity));
        }

        .text-gray-800 {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
        }

        .text-rose-500 {
            --tw-text-opacity: 1;
            color: rgb(244 63 94 / var(--tw-text-opacity));
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-black\/10 {
            --tw-shadow-color: rgb(0 0 0 / 0.1);
            --tw-shadow: var(--tw-shadow-colored);
        }

        .shadow-black\/5 {
            --tw-shadow-color: rgb(0 0 0 / 0.05);
            --tw-shadow: var(--tw-shadow-colored);
        }

        .outline-none {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .transition-transform {
            transition-property: transform;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .notification-tab>.active {
            --tw-border-opacity: 1;
            border-bottom-color: rgb(59 130 246 / var(--tw-border-opacity));
            --tw-text-opacity: 1;
            color: rgb(59 130 246 / var(--tw-text-opacity));
        }

        .notification-tab>.active:hover {
            --tw-text-opacity: 1;
            color: rgb(59 130 246 / var(--tw-text-opacity));
        }

        .order-tab>.active {
            --tw-bg-opacity: 1;
            background-color: rgb(59 130 246 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .order-tab>.active:hover {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        @media (min-width: 768px) {
            .main.active {
                margin-left: 0px;
                width: 100%;
            }
        }

        .before\:mr-3::before {
            content: var(--tw-content);
            margin-right: 0.75rem;
        }

        .before\:h-1::before {
            content: var(--tw-content);
            height: 0.25rem;
        }

        .before\:w-1::before {
            content: var(--tw-content);
            width: 0.25rem;
        }

        .before\:rounded-full::before {
            content: var(--tw-content);
            border-radius: 9999px;
        }

        .before\:bg-gray-300::before {
            content: var(--tw-content);
            --tw-bg-opacity: 1;
            background-color: rgb(209 213 219 / var(--tw-bg-opacity));
        }

        .hover\:bg-gray-50:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
        }

        .hover\:bg-gray-950:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(3 7 18 / var(--tw-bg-opacity));
        }

        .hover\:text-blue-500:hover {
            --tw-text-opacity: 1;
            color: rgb(59 130 246 / var(--tw-text-opacity));
        }

        .hover\:text-blue-600:hover {
            --tw-text-opacity: 1;
            color: rgb(37 99 235 / var(--tw-text-opacity));
        }

        .hover\:text-gray-100:hover {
            --tw-text-opacity: 1;
            color: rgb(243 244 246 / var(--tw-text-opacity));
        }

        .hover\:text-gray-600:hover {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity));
        }

        .focus\:border-blue-500:focus {
            --tw-border-opacity: 1;
            border-color: rgb(59 130 246 / var(--tw-border-opacity));
        }

        .group:hover .group-hover\:text-blue-500 {
            --tw-text-opacity: 1;
            color: rgb(59 130 246 / var(--tw-text-opacity));
        }

        .group.selected .group-\[\.selected\]\:block {
            display: block;
        }

        .group.selected .group-\[\.selected\]\:rotate-90 {
            --tw-rotate: 90deg;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .group.active .group-\[\.active\]\:bg-gray-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(31 41 55 / var(--tw-bg-opacity));
        }

        .group.selected .group-\[\.selected\]\:bg-gray-950 {
            --tw-bg-opacity: 1;
            background-color: rgb(3 7 18 / var(--tw-bg-opacity));
        }

        .group.active .group-\[\.active\]\:text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .group.selected .group-\[\.selected\]\:text-gray-100 {
            --tw-text-opacity: 1;
            color: rgb(243 244 246 / var(--tw-text-opacity));
        }

        @media (min-width: 768px) {
            .md\:ml-64 {
                margin-left: 16rem;
            }

            .md\:hidden {
                display: none;
            }

            .md\:w-\[calc\(100\%-256px\)\] {
                width: calc(100% - 256px);
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-span-2 {
                grid-column: span 2 / span 2;
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        .icon:hover box-icon {
            color: white;
        }
    </style>
</head>

<body class="text-gray-800 font-inter" style="overflow-x: hidden;">
    <!--sidenav -->
    <div class="fixed left-0 top-0 w-64 h-full bg-[#f2fcf6] p-4 z-50 sidebar-menu transition-transform">
        <a href="{{ route('index') }}" class="flex items-center pb-4 border-b border-b-gray-800">

            <h2 class="font-bold text-3xl">مكتبة <span class="bg-[#16a34a] text-white px-2 rounded-md text-3xl"
                    style="padding-bottom: 0.5rem;">إلكترونية</span></h2>
        </a>
        <ul class="mt-4" style="direction: ltr;">
            <span class="text-gray-400 font-bold " style="font-size: 1.4rem;">إدارة المتجر</span>
            <li class="mb-1 group">
                <a href="{{ route('Dashboard') }}"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm" style="font-size: 1.3rem;">المنتجات</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ route('categryindex') }}"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class='bx bx-list-ul mr-3 text-lg'></i>
                    <span class="text-sm" style="font-size: 1.3rem;">أقسام الكتب</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href=""
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <ion-icon name="library-outline" style="margin-right: 1rem;font-size: 1.2rem;"></ion-icon>
                    <span class="text-sm" style="font-size: 1.3rem;">الكتب</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>

                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="{{ route('product.create') }}"
                            class="text-gray-900 text-xl flex items-center hover:text-[#16a34a] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3 font-bold">أضافة
                            كتب</a>
                    </li>

                    <li class="mb-4">
                        <a href="{{ route('categry.create') }}"
                            class="text-gray-900 text-xl flex items-center hover:text-[#16a34a] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3 font-bold">تصنيف
                            الكتب</a>
                    </li>
                </ul>
            </li>
            </li>
            <span class="text-gray-400 font-bold" style="font-size: 1.4rem;">المبيعات</span>
            <li class=" mb-1 group">
            </li>
            <li class="mb-1 group">
                <a href="{{ route('sales.archive') }}"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class='bx bx-archive mr-3 text-lg'></i>
                    <span class="text-sm" style="font-size: 1.3rem;">أرشيف المبيعات</span>
                </a>
            </li>
            <span class="text-gray-400 font-bold" style="font-size: 1.4rem;">خدمة الزبائن</span>

            <li class=" mb-1 group">
                <a href="{{ route('Customer.Requests') }}"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class='bx bx-envelope mr-3 text-lg'></i>
                    <span class="text-sm" style="font-size: 1.3rem;">الطلبات</span>
                    <span
                        class=" md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-green-600 bg-green-200 rounded-full">2
                        New</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
    <!-- end sidenav -->

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        <div class="py-2 px-6 bg-[#f2fcf6] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>

            <ul class="ml-auto flex items-center">
                <li class="mr-1 dropdown">
                    <button type="button"
                        class="dropdown-toggle text-gray-400 mr-4 w-8 h-8 rounded flex items-center justify-center  hover:text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            class="hover:bg-gray-100 rounded-full" viewBox="0 0 24 24" style="fill: gray;">
                            <path
                                d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md border border-gray-100">
                        <form action="" class="p-4 border-b border-b-gray-100">
                            <div class="relative w-full">
                                <input type="text"
                                    class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500"
                                    placeholder="Search...">
                                <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-900"></i>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="dropdown">
                    <button type="button"
                        class="dropdown-toggle text-gray-400 mr-4 w-8 h-8 rounded flex items-center justify-center  hover:text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            class="hover:bg-gray-100 rounded-full" viewBox="0 0 24 24" style="fill: gray;">
                            <path
                                d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md border border-gray-100">
                        <div class="flex items-center px-4 pt-4 border-b border-b-gray-100 notification-tab">
                            <button type="button" data-tab="notification" data-tab-page="notifications"
                                class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1 active">Notifications</button>
                            <button type="button" data-tab="notification" data-tab-page="messages"
                                class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1">Messages</button>
                        </div>
                        <div class="my-2">
                            <ul class="max-h-64 overflow-y-auto" data-tab-for="notification"
                                data-page="notifications">
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt=""
                                            class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                New order</div>
                                            <div class="text-[11px] text-gray-400">from a user</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt=""
                                            class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                New order</div>
                                            <div class="text-[11px] text-gray-400">from a user</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt=""
                                            class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                New order</div>
                                            <div class="text-[11px] text-gray-400">from a user</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt=""
                                            class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                New order</div>
                                            <div class="text-[11px] text-gray-400">from a user</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt=""
                                            class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                New order</div>
                                            <div class="text-[11px] text-gray-400">from a user</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="max-h-64 overflow-y-auto hidden" data-tab-for="notification"
                                data-page="messages">
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt=""
                                            class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                John Doe</div>
                                            <div class="text-[11px] text-gray-400">Hello there!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt=""
                                            class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                John Doe</div>
                                            <div class="text-[11px] text-gray-400">Hello there!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt=""
                                            class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                John Doe</div>
                                            <div class="text-[11px] text-gray-400">Hello there!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt=""
                                            class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                John Doe</div>
                                            <div class="text-[11px] text-gray-400">Hello there!</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img src="https://placehold.co/32x32" alt=""
                                            class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                John Doe</div>
                                            <div class="text-[11px] text-gray-400">Hello there!</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="dropdown ml-3">
                    <button type="button" class="dropdown-toggle flex items-center">
                        <div class="flex-shrink-0 w-10 h-10 relative">
                            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://laravelui.spruko.com/tailwind/ynex/build/assets/images/faces/9.jpg"
                                    alt="" />

                            </div>
                        </div>
                        <div class="p-2 md:block text-left">
                            <h2 class="text-sm font-semibold text-gray-800">John Doe</h2>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>
                    </button>
                    <ul
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#16a34a] hover:bg-gray-50"
                                style="font-weight: bold;font-size: 1rem;font-family: 'remixicon';">الملف الشخصي</a>
                        </li>
                        <li>
                            <form method="POST" action="">
                                <a style="font-weight: bold;font-size: 1rem;font-family: 'remixicon';" role="menuitem"
                                    class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#16a34a] hover:bg-gray-50 cursor-pointer"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    تسجيل خروج
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Content -->
        <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
            @foreach ($products as $product)
                <div class="flex justify-start item-start space-y-2 flex-col" style="direction: rtl;">
                    <h1
                        class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">
                        طلب
                        #{{ $product->id }}</h1>
                    <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600">
                        {{ $product->created_at }}
                    </p>
                </div>
                <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0 "
                    style="direction: rtl;">
                    <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                        <div
                            class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                            <p
                                class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">
                                طلبات الزبون</p>
                            <div
                                class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                                <div class="pb-6 md:pb-8 w-full md:w-40">
                                    <img style="width: 40% !important;" class="w-full hidden md:block"
                                        src="{{ asset('public/image/' . $product->image) }}" alt="dress" />
                                    <img style="width: 15% !important;" class="w-9full md:hidden"
                                        src="{{ asset('public/image/' . $product->image) }}" alt="dress" />
                                </div>
                                <div
                                    class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                                    <div class="w-full flex flex-col justify-start items-start space-y-8">
                                        <h3 class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800"
                                            style="padding-right: 0.1rem;">{{ $product->book_name }}</h3>

                                    </div>
                                    <div class="flex justify-between space-x-8 items-start w-full">
                                        <p class="text-base dark:text-white xl:text-lg leading-6">
                                            IQ{{ $product->price }}
                                        </p>
                                        <p class="text-base dark:text-white xl:text-lg leading-6 text-gray-800"
                                            style="padding-right: 1rem;">{{ $product->quantity }}</p>
                                        <p
                                            class="text-base dark:text-white xl:text-lg font-semibold leading-6 text-gray-800">
                                            IQ{{ $product->total }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                            <div
                                class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                                <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">المجموع</h3>
                                <div
                                    class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                                    <div class="flex justify-between w-full">
                                        <p class="text-base dark:text-white leading-4 text-gray-800">رسوم الطلب</p>
                                        <p class="text-base dark:text-gray-300 leading-4 text-gray-600">
                                            {{ $product->total }}IQ</p>
                                    </div>

                                    <div class="flex justify-between items-center w-full">
                                        <p class="text-base dark:text-white leading-4 text-gray-800">رسوم الشحن</p>
                                        <p class="text-base dark:text-gray-300 leading-4 text-gray-600">8,000IQ</p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6"
                                style="margin-right: 0.4rem;">
                                <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">الشحن</h3>
                                <div class="flex justify-between items-start w-full">
                                    <div class="flex justify-center items-center space-x-4">
                                        <div class="w-8 h-8">
                                            <img class="w-full h-full" alt="logo"
                                                src="https://i.ibb.co/L8KSdNQ/image-3.png" />
                                        </div>
                                        <div class="flex flex-col justify-start items-center"
                                            style="padding-right: 1rem;">
                                            <p class="text-lg leading-6 dark:text-white font-semibold text-gray-800">
                                                تسليم
                                                الطلب<br /><span class="font-normal">خلال 24 ساعة</span></p>
                                        </div>
                                    </div>
                                    <p class="text-lg font-semibold leading-6 dark:text-white text-gray-800">8,000IQ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col "
                        style="margin-right: 0.4rem;">
                        <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">الزبون</h3>
                        <div
                            class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
                            <div class="flex flex-col justify-start items-start flex-shrink-0">
                                <div
                                    class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-b border-gray-200">
                                    <img style="padding-left: 1rem;" src="https://i.ibb.co/5TSg7f6/Rectangle-18.png"
                                        alt="avatar" />

                                </div>

                                <div
                                    class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                                    <i style="margin-left: 0.5rem;color: #696969;" class="fa-solid fa-phone"></i>
                                    <p class="cursor-pointer text-sm leading-5 ">{{ $product->phone }}</p>
                                </div>
                            </div>
                            <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
                                <div
                                    class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
                                    <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8"
                                        style="direction: rtl;">
                                        <p
                                            class="text-base dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">
                                            عنوان الشحن</p>
                                        <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600"
                                            style="text-align: right;font-size: 1.1rem;">{{ $product->governorate }}
                                        </p>
                                    </div>
            @endforeach
        </div>
        <div class="flex w-full justify-center items-center md:justify-start md:items-start"
            style="padding-right: 2rem;">

            @if (isset($product))
                <button style="width: 75%;margin-right: 1rem;"
                    class="mt-6 md:mt-0 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent dark:text-white py-5 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-medium w-96 2xl:w-full text-base font-medium leading-4 text-gray-800">
                    <a href="{{ route('shipping.product', $product->id) }}" class="shipping btn-delete"
                        data-id="{{ $product->id }}">توصيل الطلب</a>
                </button>
                <button style="width: 75%;margin-right: 1rem;"
                    class="mt-6 md:mt-0 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent dark:text-white py-5 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-medium w-96 2xl:w-full text-base font-medium leading-4 text-gray-800">
                    <a href="{{ route('delete.product', $product->id) }}" class="delete btn-delete"
                        data-id="{{ $product->id }}">حذف الطلب</a>
                </button>
            @else
                <p style="margin: auto;font-size: 3rem;font-family: none;text-align: center;">لا توجد طلبات</p>
            @endif
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div style="margin: auto;text-align: center;padding: 1rem;background: #f2f2f2;">
            {{ $products->links() }}
        </div>
        <script>
            $(document).on('click', '.delete', function(e) {
                e.preventDefault();
                var productId = $(this).data('id');
                if (confirm("هل أنت متأكد من حذف هذا الطلب؟")) {
                    window.location.href = $(this).attr('href');
                }
            });
            $(document).on('click', '.shipping', function(e) {
                e.preventDefault();
                var productId = $(this).data('id');
                if (confirm("هل أنت متأكد توصيل هذا الطلب؟")) {
                    window.location.href = $(this).attr('href');
                }
            });
        </script>

        <script>
            function applyEffect() {
                var btn = document.getElementById('btnorder');
                btn.style.background =
                    "linear-gradient(to right, rgba(39, 174, 96, 0.2) 50%, transparent 50%), radial-gradient(rgba(33, 145, 80, 0.808) 30%)";
                btn.style.backgroundColor = "#16a34a";
                btn.style.backgroundSize = "200% 100%, auto";
                btn.style.border = "none";
                btn.style.padding = "12px 30px";
                btn.style.fontSize = "21px";
                btn.style.color = "white";
                btn.style.cursor = "pointer";
                btn.style.outline = "none";
                btn.style.transition = "background-position 0.1s, opacity 0.1s, color 0.1s";
                btn.style.fontWeight = "bold";


            }
        </script>
    </main>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // start: Sidebar
        const sidebarToggle = document.querySelector('.sidebar-toggle')
        const sidebarOverlay = document.querySelector('.sidebar-overlay')
        const sidebarMenu = document.querySelector('.sidebar-menu')
        const main = document.querySelector('.main')
        sidebarToggle.addEventListener('click', function(e) {
            e.preventDefault()
            main.classList.toggle('active')
            sidebarOverlay.classList.toggle('hidden')
            sidebarMenu.classList.toggle('-translate-x-full')
        })
        sidebarOverlay.addEventListener('click', function(e) {
            e.preventDefault()
            main.classList.add('active')
            sidebarOverlay.classList.add('hidden')
            sidebarMenu.classList.add('-translate-x-full')
        })
        document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault()
                const parent = item.closest('.group')
                if (parent.classList.contains('selected')) {
                    parent.classList.remove('selected')
                } else {
                    document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function(i) {
                        i.closest('.group').classList.remove('selected')
                    })
                    parent.classList.add('selected')
                }
            })
        })
        // end: Sidebar



        // start: Popper
        const popperInstance = {}
        document.querySelectorAll('.dropdown').forEach(function(item, index) {
            const popperId = 'popper-' + index
            const toggle = item.querySelector('.dropdown-toggle')
            const menu = item.querySelector('.dropdown-menu')
            menu.dataset.popperId = popperId
            popperInstance[popperId] = Popper.createPopper(toggle, menu, {
                modifiers: [{
                        name: 'offset',
                        options: {
                            offset: [0, 8],
                        },
                    },
                    {
                        name: 'preventOverflow',
                        options: {
                            padding: 24,
                        },
                    },
                ],
                placement: 'bottom-end'
            });
        })
        document.addEventListener('click', function(e) {
            const toggle = e.target.closest('.dropdown-toggle')
            const menu = e.target.closest('.dropdown-menu')
            if (toggle) {
                const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
                const popperId = menuEl.dataset.popperId
                if (menuEl.classList.contains('hidden')) {
                    hideDropdown()
                    menuEl.classList.remove('hidden')
                    showPopper(popperId)
                } else {
                    menuEl.classList.add('hidden')
                    hidePopper(popperId)
                }
            } else if (!menu) {
                hideDropdown()
            }
        })

        function hideDropdown() {
            document.querySelectorAll('.dropdown-menu').forEach(function(item) {
                item.classList.add('hidden')
            })
        }

        function showPopper(popperId) {
            popperInstance[popperId].setOptions(function(options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        {
                            name: 'eventListeners',
                            enabled: true
                        },
                    ],
                }
            });
            popperInstance[popperId].update();
        }

        function hidePopper(popperId) {
            popperInstance[popperId].setOptions(function(options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        {
                            name: 'eventListeners',
                            enabled: false
                        },
                    ],
                }
            });
        }
        // end: Popper



        // start: Tab
        document.querySelectorAll('[data-tab]').forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault()
                const tab = item.dataset.tab
                const page = item.dataset.tabPage
                const target = document.querySelector('[data-tab-for="' + tab + '"][data-page="' + page +
                    '"]')
                document.querySelectorAll('[data-tab="' + tab + '"]').forEach(function(i) {
                    i.classList.remove('active')
                })
                document.querySelectorAll('[data-tab-for="' + tab + '"]').forEach(function(i) {
                    i.classList.add('hidden')
                })
                item.classList.add('active')
                target.classList.remove('hidden')
            })
        })
        // end: Tab



        // start: Chart
        new Chart(document.getElementById('order-chart'), {
            type: 'line',
            data: {
                labels: generateNDays(7),
                datasets: [{
                        label: 'Active',
                        data: generateRandomData(7),
                        borderWidth: 1,
                        fill: true,
                        pointBackgroundColor: 'rgb(59, 130, 246)',
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgb(59 130 246 / .05)',
                        tension: .2
                    },
                    {
                        label: 'Completed',
                        data: generateRandomData(7),
                        borderWidth: 1,
                        fill: true,
                        pointBackgroundColor: 'rgb(16, 185, 129)',
                        borderColor: 'rgb(16, 185, 129)',
                        backgroundColor: 'rgb(16 185 129 / .05)',
                        tension: .2
                    },
                    {
                        label: 'Canceled',
                        data: generateRandomData(7),
                        borderWidth: 1,
                        fill: true,
                        pointBackgroundColor: 'rgb(244, 63, 94)',
                        borderColor: 'rgb(244, 63, 94)',
                        backgroundColor: 'rgb(244 63 94 / .05)',
                        tension: .2
                    },
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        function generateNDays(n) {
            const data = []
            for (let i = 0; i < n; i++) {
                const date = new Date()
                date.setDate(date.getDate() - i)
                data.push(date.toLocaleString('en-US', {
                    month: 'short',
                    day: 'numeric'
                }))
            }
            return data
        }

        function generateRandomData(n) {
            const data = []
            for (let i = 0; i < n; i++) {
                data.push(Math.round(Math.random() * 10))
            }
            return data
        }
        // end: Chart
    </script>

</body>

</html>
