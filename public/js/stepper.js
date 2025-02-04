class Stepper {
    constructor(t) {
        this.wrapper = t, this.nav = t.querySelector(".stepper-nav"), this.content = t.querySelector(".stepper-content"), this.button = t.querySelector(".stepper-Button"), this.nextBtn = t.querySelector(".stepper-button .stepper-next"), this.prevBtn = t.querySelector(".stepper-button .stepper-prev"), this.navLength = this.nav.querySelectorAll(":scope > *").length, this.toggleBtnDisplay(), this.nextBtn.addEventListener("click", () => this.handleBtn("next")), this.prevBtn.addEventListener("click", () => this.handleBtn("prev"))
    }

    getActiveIndex() {
        const t = this.content.querySelectorAll(":scope > *"), e = this.content.querySelector(".active");
        return Array.from(t).findIndex(s => s === e)
    }

    toggleBtnDisplay() {
        const t = this.getActiveIndex();
        this.prevBtn.style.display = t === 0 ? "none" : "", this.nextBtn.style.display = t === this.navLength - 1 ? "none" : ""
    }

    handleBtn(t) {
        this.wrapper.dispatchEvent(new Event(`stepper.${t}`))
    }

    go(t) {
        const e = this.nav.querySelector(".active").parentNode,
            s = t === "next" ? e.nextElementSibling : e.previousElementSibling;
        if (s) {
            const n = s.querySelector("button"), i = this.content.querySelector(".active"),
                r = t === "next" ? i.nextElementSibling.id : i.previousElementSibling.id;
            n.setAttribute("data-bs-toggle", "tab"), n.setAttribute("data-bs-target", "#" + r), n.click(), n.removeAttribute("data-bs-toggle"), n.removeAttribute("data-bs-target"), this.toggleBtnDisplay()
        }
    }

    on(t, e) {
        this.wrapper.addEventListener(t, e)
    }
}
