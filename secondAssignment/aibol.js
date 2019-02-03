var elementsArray = document.querySelectorAll('.card');
elementsArray.forEach(function(elem) {
    elem.addEventListener("click", function(e) {
        var name = this.querySelector('.name').innerHTML;
        var src = this.querySelector('.photo').querySelector('img').src;
        var price = this.querySelector('.price').innerHTML;
        var info = document.getElementById("info");
        info.style.display = "block";
        console.log(info);
        info.querySelector('.hoverme').querySelector('img').src = src
        info.querySelector('.infoContent').querySelector('.name_info').innerHTML = name
        info.querySelector('.infoContent').querySelector('.price_info').innerHTML = price
        
    });
});
function sort(){
    var selected = document.getElementById("selectedSort");
    var sortType = selected.options[selected.selectedIndex].text;
    return sortType;
}