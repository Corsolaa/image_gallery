const copy_buttons = document.querySelectorAll(".fa-copy");

copy_buttons.forEach((but) => {
    but.addEventListener("click", () => {
        const parent = but.parentElement.parentElement;
        const link = parent.querySelector("a").textContent;

        const copyContent = async () => {
            try {
                await navigator.clipboard.writeText(link);
                console.log('Content copied to clipboard');
            } catch (err) {
                console.error('Failed to copy: ', err);
            }
        }
        void copyContent();
    });
});
