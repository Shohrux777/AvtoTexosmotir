function get_oil() {
    var select_oil = document.getElementById('oil').value;
    if (select_oil === 'spg' || select_oil === 'smg') {
        document.getElementById('spg').classList.remove('show')
    } else {
        document.getElementById('spg').classList.add('show')
    }
}