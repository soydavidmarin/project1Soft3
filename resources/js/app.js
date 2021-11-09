require('./bootstrap');
const ClassicEditor = require('@ckeditor/ckeditor5-build-classic');
ClassicEditor
/**El queryslector recibe el nombre del id del campo del textarea */
    .create(document.querySelector('#content_publication'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
/**Al finzalizar ejecutar: npm run dev */    