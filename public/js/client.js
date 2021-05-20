function get_oil() {
    var select_oil = document.getElementById('oil').value;
    if (select_oil === 'dezil' || select_oil === 'benzin') {
        document.getElementById('spg').classList.add('show')
    } else {
        document.getElementById('spg').classList.remove('show')
    }
}