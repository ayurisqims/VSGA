// Memilih dan mengadd
var total = 0;
function test(item){ // method bawaan js
    
    if(item.className){
        total -= parseInt(item.value);
    } else {
        total += parseInt(item.value);
        console.log(total);
    } document.getElementById('tot_harga').innerHTML = "Rp. " + total;
}
//memilih list menu
var list = document.querySelector('ul');
list.addEventListener('click', function(ev){
    if (ev.target.tagName == 'LI') {
        ev.target.classList.toggle('checked');
    }
}, false);
