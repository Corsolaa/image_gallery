const copy_buttons = document.querySelectorAll(".fa-link");

copy_buttons.forEach((but) => {
    const parent = but.parentElement.parentElement;

    but.addEventListener("click", () => {
        const link = parent.querySelector("a").textContent;

        parent.querySelector("span").classList.add("spin-ani");
        setTimeout(() => {
            but.setAttribute("class", "fa-solid fa-square-check");
        }, 200)
        setTimeout(() => {
            parent.querySelector("span").classList.remove("spin-ani");
        }, 300)

        const copyContent = async () => {
            try {
                await navigator.clipboard.writeText(link);
            } catch (err) {
                console.error('Failed to copy: ', err);
            }
        }
        void copyContent();
    });


    parent.addEventListener("mouseleave", () => {
        if (but.classList.contains("fa-square-check")) {
            but.setAttribute("class", "fa-solid fa-link");
        }
    });

});
