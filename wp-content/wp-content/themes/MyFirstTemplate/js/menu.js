
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.getElementById("mobileMenu");

    menuToggle.addEventListener("click", function () {
        mobileMenu.classList.toggle("active");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".fixed-menu");
    const body = document.body;

    if (!header) {
        console.error("Element .fixed-menu nie został znaleziony!");
        return;
    }

    function updatePadding() {
        const adminBarHeight = document.getElementById('wpadminbar') ? document.getElementById('wpadminbar').offsetHeight : 0;
        header.style.top = `${adminBarHeight}px`; // Ustawia górną pozycję menu na wysokość paska administracyjnego
        const headerHeight = header.offsetHeight;
        body.style.paddingTop = `${headerHeight}px`; // Dodaje odstęp równy wysokości menu
        
    }
    updatePadding(); 

    function updateOpacity()
    {
        const headerHeight = header.offsetHeight;
        if(window.scrollY > 2*headerHeight)
        { header.style.opacity = "0.85"; }
        else
        { header.style.opacity = "1.0"; }
    }
    updateOpacity();
    
    window.addEventListener("resize", updatePadding); // Obsługa zmiany rozmiaru okna
    window.addEventListener("scroll", updateOpacity); // Obsługa zmiany rozmiaru okna
});


