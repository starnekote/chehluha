document.addEventListener("DOMContentLoaded", () => {
    const burger = document.querySelector(".burger");
    const sidebar = document.querySelector(".header-widget-area");
    const overlay = document.querySelector(".header-widget-overlay");
    const closeButton = document.querySelector(".header-widget-area__close");

    if (!burger || !sidebar || !overlay) {
        return;
    }

    const openMenu = () => {
        sidebar.classList.add("is-open");
        overlay.classList.add("is-open");

        document.body.classList.add("menu-open");

        burger.setAttribute("aria-expanded", "true");
        sidebar.setAttribute("aria-hidden", "false");
    };

    const closeMenu = () => {
        sidebar.classList.remove("is-open");
        overlay.classList.remove("is-open");

        document.body.classList.remove("menu-open");

        burger.setAttribute("aria-expanded", "false");
        sidebar.setAttribute("aria-hidden", "true");
    };

    const toggleMenu = () => {
        const isOpen = sidebar.classList.contains("is-open");

        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    };


    /* Burger */

    burger.addEventListener("click", (event) => {
        event.preventDefault();

        toggleMenu();
    });


    /* Close button */

    if (closeButton) {
        closeButton.addEventListener("click", () => {
            closeMenu();
        });
    }


    /* Overlay */

    overlay.addEventListener("click", () => {
        closeMenu();
    });


    /* ESC */

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            closeMenu();
        }
    });
});