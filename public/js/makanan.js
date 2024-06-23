function showMenu(category) {
    const categories = ['maincourse', 'pasta', 'bowl-series', 'french-fries-series', 'finger-food', 'sweet'];
    categories.forEach(cat => {
        const element = document.getElementById(cat);
        if (element) {
            element.style.display = 'none';
            document.querySelector(`.menu-tab[data-tab="${cat}"]`).classList.remove('selected');
        }
    });
    const selectedElement = document.getElementById(category);
    if (selectedElement) {
        selectedElement.style.display = 'block';
        document.querySelector(`.menu-tab[data-tab="${category}"]`).classList.add('selected');
    }
}

// Tampilkan kategori pertama secara default
document.addEventListener("DOMContentLoaded", function() {
    showMenu('maincourse');
});


// Search
function searchMenu() {
    let input = document.getElementById('search-input').value.toLowerCase();
    let menuItems = document.querySelectorAll('.menu-item');
    let categoryTabs = document.querySelectorAll('.category-tab');
    let categoryDescriptions = document.querySelectorAll('.cat-description');

    if (input === '') {
        let selectedCategory = document.querySelector('.menu-tab.selected').getAttribute('data-tab');
        categoryTabs.forEach(tab => {
            tab.style.display = 'none';
        });
        document.getElementById(selectedCategory).style.display = 'block';
        menuItems.forEach(item => {
            if (item.closest('.category-tab').id === selectedCategory) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
        categoryDescriptions.forEach(description => {
            description.style.display = 'inline';
        });
        return;
    }

    categoryTabs.forEach(tab => {
        tab.style.display = 'none';
    });

    menuItems.forEach(item => {
        let itemName = item.querySelector('h3').innerText.toLowerCase();
        if (itemName.includes(input)) {
            item.style.display = 'block';
            item.closest('.category-tab').style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });

    categoryDescriptions.forEach(description => {
        description.style.display = 'none';
    });

    document.querySelectorAll('.menu-tab').forEach(tab => {
        tab.classList.remove('selected');
    });
}

function showMenu(category) {
    document.querySelectorAll('.category-tab').forEach(tab => {
        tab.style.display = 'none';
    });

    document.querySelectorAll('.menu-tab').forEach(tab => {
        tab.classList.remove('selected');
    });

    document.getElementById(category).style.display = 'block';
    document.querySelector(`[data-tab="${category}"]`).classList.add('selected');
    searchMenu();
}