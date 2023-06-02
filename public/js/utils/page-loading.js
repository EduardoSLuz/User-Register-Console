// Enable dashboard menu link
let url_actual = window.location.href.split('/')[3] || 'dashboard';
$(`.dashmenu-link[href='/${url_actual}']`).addClass('active text-primary');
