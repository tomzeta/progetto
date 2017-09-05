document.costob.onclick = function () {
    var price = 35;
    var radVal = document.costob.num_b.value;
    result.innerHTML = 'Prezzo: ' + (radVal * price);
};