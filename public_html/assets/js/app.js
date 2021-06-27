function changeLang(lang)
{
    window.location.replace(window.location.pathname + '?lang=' + lang);
}

function navCollapse() {
    var nav = document.getElementById("nav");
    if (nav.className === "nav") {
        nav.className += " responsive";
    } else {
        nav.className = "nav";
    }
}

function sendForm() {
    var form = document.getElementById("contact-form")
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var subject = document.getElementById("subject");
    var message = document.getElementById("message");
    var privacy = document.getElementById("privacy");
    var checkmark = document.getElementById("checkmark");

    if(name.value.length > 0) {
        if(email.value.length > 0) {
            if(validateEmail(email.value)) {
                if(subject.value.length > 0) {
                    if(message.value.length > 0) {
                        if(privacy.checked) {
                            form.submit();
                        }else{
                            checkmark.style = "background-color: red"
                        }
                    }else{
                        message.style = "background-color: red"
                    }
                }else{
                    subject.style = "background-color: red"
                }
            }else{
                email.style = "background-color: red"
            }
        }else{
            email.style = "background-color: red"
        }
    }else{
        name.style = "background-color: red"
    }
}

function clearStyle(control) {
    control.style = "";
    var checkmark = document.getElementById("checkmark");
    checkmark.style = "";
}

function hideDialog() {
    var dialog = document.getElementById("dialog");
    dialog.className += " hide";
}

function goUp() {
    var up = setInterval(function() {
        if(document.body.scrollTop >= 10 || document.documentElement.scrollTop >= 10) {
            document.body.scrollTop -= 10;
            document.documentElement.scrollTop -= 10;
        }else{
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            clearInterval(up);
        }
    }, 1);
}

function hideCookie() {
    var cookie = document.getElementById('cookie');
    cookie.style = 'display:none';
    localStorage.setItem('webvers_cookie', '0');
}

window.onload = function () {
    if(localStorage.getItem('webvers_cookie') != '0') {
        var cookie = document.getElementById('cookie');
        cookie.style = '';
    }

    var loadTime = window.performance.timing.domContentLoadedEventEnd-window.performance.timing.navigationStart; 
    loadTime = (loadTime / 1000).toPrecision(2);
    console.log('Page load time is '+ loadTime);
    document.getElementById('loading-time').innerHTML += (loadTime + 's');
}

window.onscroll = function(ev) {
    var scrollTop = document.getElementById('scrollTop');
    if (window.scrollY < 100) {
        if(scrollTop.className === 'scrollTop') {
            scrollTop.className += ' invisible';
        }
    }else{
        if(scrollTop.className !== 'scrollTop') {
            scrollTop.className = 'scrollTop';
        }
    }
};

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}