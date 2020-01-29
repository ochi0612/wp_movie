
// ヘッダーニューボタン

function menuAction() {
    var listBtn = document.querySelector('.menu-trigger');
    var nav = document.querySelector('.head-nav');

    listBtn.classList.toggle('active');
    nav.classList.toggle('close');
}
