(function () {
    let ajaxForms = Array.from(document.querySelectorAll('.ajax-form'));
    
    if (ajaxForms) {
        ajaxForms.forEach(form => {
            let button = form.querySelector('button');
            if (button) { button.addEventListener('click', () => { executeSaveDataForm(form); }); }
        });
    }

    function executeSaveDataForm(form) { console.log('qqq');
        $.ajax({
            type: 'POST',
            url: '/assets/templates/v2/save-to-bd.php',
            data: $(form).serialize()
        });
    }
})(); 