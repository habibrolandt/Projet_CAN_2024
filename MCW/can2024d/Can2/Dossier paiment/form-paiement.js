function changeBorderColor(element) {
    // Réinitialiser la bordure de toutes les images
    var images = document.getElementsByClassName('clickable-image');
    for (var i = 0; i < images.length; i++) {
        images[i].style.border = '2px solid transparent';
    }

    // Mettre en surbrillance la bordure de l'image cliquée
    element.style.border = '2px solid orange '; // Vous pouvez changer 'red' à la couleur souhaitée
}



