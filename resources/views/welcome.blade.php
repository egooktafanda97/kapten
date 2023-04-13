<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Text Editor dengan Code Highlight.js</title>
    <link href="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-build-classic@27.4.0/build/ckeditor.css"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css" rel="stylesheet">
</head>

<body>
    <textarea id="editor"></textarea>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-build-classic@27.4.0/build/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/translations/id.js"></script>
    <script src="./highlight.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                    'code'],
                language: 'id',
                codeBlock: {
                    languages: [{
                            language: 'plaintext',
                            label: 'Plain text'
                        },
                        {
                            language: 'cpp',
                            label: 'C++'
                        },
                        {
                            language: 'css',
                            label: 'CSS'
                        },
                        {
                            language: 'html',
                            label: 'HTML'
                        },
                        {
                            language: 'java',
                            label: 'Java'
                        },
                        {
                            language: 'javascript',
                            label: 'JavaScript'
                        },
                        {
                            language: 'php',
                            label: 'PHP'
                        },
                        {
                            language: 'python',
                            label: 'Python'
                        },
                        {
                            language: 'ruby',
                            label: 'Ruby'
                        }
                    ]
                },
                highlight: {
                    init: highlightCode
                }
            })
            .catch(error => {
                console.error(error);
            });

        function highlightCode(elements) {
            elements.forEach(element => {
                hljs.highlightBlock(element);
            });
        }
    </script>
</body>

</html>
