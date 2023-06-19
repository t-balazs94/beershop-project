document.querySelectorAll('form div').forEach(function(div) {
    var span = document.createElement('span');
    span.classList.add('errorMsg');
    div.appendChild(span);
});

function regFormValidation() {
    var MAILFORMAT = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    var hiba = false;

    var input = document.forms['regForm']['veznev'];
    input.value = input.value.trim();
    input.errorMsg = input.nextElementSibling;
    if (input.value === '') {
        input.errorMsg.innerHTML = 'Ezt a mezőt ki kell tölteni!';
        hiba = true;
    } else
    if (input.value.length < 3) {
        input.errorMsg.innerHTML = 'A név túl rövid!';
        hiba = true;
    } else
      if (input.value.length > 15) {
        input.errorMsg.innerHTML = 'A név túl hosszú!';
        hiba = true;
    } else {
        input.errorMsg.innerHTML = '';
    }
    
    var input = document.forms['regForm']['kernev'];
    input.value = input.value.trim();
    input.errorMsg = input.nextElementSibling;
    if (input.value === '') {
        input.errorMsg.innerHTML = 'Ezt a mezőt ki kell tölteni!';
        hiba = true;
    } else
    if (input.value.length < 3) {
        input.errorMsg.innerHTML = 'A név túl rövid!';
        hiba = true;
    } else
      if (input.value.length > 15) {
        input.errorMsg.innerHTML = 'A név túl hosszú!';
        hiba = true;
    } else {
        input.errorMsg.innerHTML = '';
    }
    
    var input = document.forms['regForm']['felnev'];
    input.value = input.value.trim();
    input.errorMsg = input.nextElementSibling;
    if (input.value === '') {
        input.errorMsg.innerHTML = 'Ezt a mezőt ki kell tölteni!';
        hiba = true;
    } else
    if (input.value.length < 5) {
        input.errorMsg.innerHTML = 'A név túl rövid!';
        hiba = true;
    } else
      if (input.value.length > 15) {
        input.errorMsg.innerHTML = 'A név túl hosszú!';
        hiba = true;
    } else {
        input.errorMsg.innerHTML = '';
    }
    
    var input = document.forms['regForm']['email'];
    input.value = input.value.trim();
    input.message = input.nextElementSibling;
    if (input.value === '') {
        input.message.innerHTML = 'Ezt a mezőt ki kell tölteni!';
        hiba = true;
    } else
    if (!input.value.match(MAILFORMAT)) {
        input.message.innerHTML = 'Hibás e-mail cím!';
        hiba = true;
    } else {
        input.message.innerHTML = '';
    }
    
    
    var input = document.forms['regForm']['telephone'];
    input.value = input.value.trim();
    input.errorMsg = input.nextElementSibling;
    if (input.value === '') {
        input.errorMsg.innerHTML = 'Ezt a mezőt ki kell tölteni!';
        hiba = true;
    } else {
        input.errorMsg.innerHTML = '';
    }

    var input1 = document.forms['regForm']['jelszo'];
    input1.value = input1.value.trim();
    input1.errorMsg = input1.nextElementSibling;
    var input2 = document.forms['regForm']['jelszo2'];
    input2.value = input2.value.trim();
    input2.errorMsg = input2.nextElementSibling;
    if (input1.value === '') {
        input1.errorMsg.innerHTML = 'Ezt a mezőt ki kell tölteni!';
        hiba = true;
    } else {
        input1.errorMsg.innerHTML = '';
    }

    if (input2.value === '') {
        input2.errorMsg.innerHTML = 'Ezt a mezőt ki kell tölteni!';
        hiba = true;
    } else {
        input2.errorMsg.innerHTML = '';
    }

    if (input1.value !== input2.value) {
        if (input1.errorMsg.innerHTML === '') {
            input1.errorMsg.innerHTML = 'A két jelszónak meg kell egyeznie!';
        }
        if (input2.errorMsg.innerHTML === '') {
            input2.errorMsg.innerHTML = 'A két jelszónak meg kell egyeznie!';
        }
        hiba = true;
    }
        
    return !hiba;
}