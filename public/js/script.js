(function () {
    let e = window.innerHeight * .01;
    document.documentElement.style.setProperty("--vh", `${e}px`), window.addEventListener("resize", () => {
        let o = window.innerHeight * .01;
        document.documentElement.style.setProperty("--vh", `${o}px`)
    }), document.addEventListener("click", function (o) {
        if (o.target.closest("[data-toggle]")) {
            const t = o.target.closest("[data-toggle]");
            switch (t.dataset.toggle) {
                case"fixed-navbar":
                case"fixed-footer":
                case"fixed-sidebar":
                case"mini-sidebar":
                    document.querySelector("#wrapper").classList.toggle(t.dataset.toggle), window.dispatchEvent(new Event("resize")), t.tagName === "A" && o.preventDefault();
                    break;
                case"inner-sidebar-collapse":
                case"inner-sidebar-expand":
                    document.querySelector("#inner-wrapper").classList.toggle(t.dataset.toggle), t.tagName === "A" && o.preventDefault();
                    break
            }
        }
    }), window.addEventListener("load", () => {
        document.body.classList && document.body.classList.contains("preloading") && setTimeout(() => {
            document.body.classList.remove("preloading")
        }, 200)
    }), ["shown.bs.modal", "shown.bs.dropdown"].forEach(o => {
        document.addEventListener(o, t => {
            let n = null;
            t.target.hasAttribute("data-bs-toggle") && t.target.getAttribute("data-bs-toggle") === "dropdown" ? n = t.target.nextElementSibling.querySelector("[autofocus]") : n = t.target.querySelector("[autofocus]"), n && n.focus()
        })
    }), document.addEventListener("show.bs.collapse", o => {
        const t = o.target.parentElement;
        t.classList.contains("accordion-item") && t.classList.add("active")
    }), document.addEventListener("hide.bs.collapse", o => {
        const t = o.target.parentElement;
        t.classList.contains("accordion-item") && t.classList.remove("active")
    })
})();

function dropdownHover() {
    document.querySelectorAll("[data-dropdown-hover]").forEach(e => {
        const o = e.nextElementSibling;
        e.addEventListener("mouseenter", t => {
            o.classList.contains("show") || e.click()
        }), e.addEventListener("mouseleave", t => {
            t.relatedTarget.closest(".dropdown-menu") != o && o.classList.contains("show") && (e.click(), e.blur())
        }), o.addEventListener("mouseleave", t => {
            t.relatedTarget != e && (e.click(), e.blur())
        })
    })
}

function summernoteStyle() {
    (function (e) {
        e.fn.replaceClass = function (o, t) {
            return this.removeClass(o).addClass(t)
        }
    })(jQuery), $(".summernote, .summernote-air").on("summernote.init", function () {
        const e = $(this).next();
        e.find(".dropdown-toggle").addClass("no-caret").removeAttr("data-toggle"), e.find(".note-btn-group").addClass("btn-group"), e.find(".note-btn").replaceClass("note-btn", "btn btn-sm btn-light shadow-none"), e.find(".note-modal-header").replaceClass("note-modal-header", "modal-header flex-row-reverse"), e.find(".note-modal-footer").replaceClass("note-modal-footer", "modal-footer"), e.find(".note-modal-title").replaceClass("note-modal-title", "modal-title"), e.find(".note-modal-body").replaceClass("note-modal-body", "modal-body").css("overflow-x", "hidden"), e.find(".note-dropdown-item").addClass("dropdown-item"), e.find(".note-dropdown-menu").addClass("dropdown-menu"), e.find('input[type="checkbox"]').addClass("form-check-input me-2"), e.find(".note-form-label").replaceClass("note-form-label", "form-label"), e.find(".note-input").addClass("form-control-sm"), e.find(".btn-primary").removeClass("note-btn-primary btn-sm"), e.find(".note-image-input").addClass("form-control")
    }), $(document).on("summernote.focus", ".summernote", function () {
        $(this).next().addClass("focus")
    }).on("summernote.blur", ".summernote", function () {
        $(this).next().removeClass("focus")
    })
}

document.querySelectorAll('[data-bs-toggle="popover"]').forEach(e => new bootstrap.Popover(e)), document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(e => new bootstrap.Tooltip(e)), document.querySelectorAll('[data-bs-toggle="dropdown"]').forEach(e => {
    const o = e.dataset.dropdownHover !== void 0 ? {display: "static"} : {};
    new bootstrap.Dropdown(e, o)
});

void (function () {
    document.querySelectorAll('.needs-validation').forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        })
    })
});
document.addEventListener('DOMContentLoaded', function() {
    var togglePassword = document.getElementById('toggleCurrentPassword');
    var passwordInput = document.getElementById('current_password');

    togglePassword.addEventListener('click', function() {
        // Check the current type of the password input
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var togglePassword = document.getElementById('toggleNewPassword');
    var passwordInput = document.getElementById('new_password');

    togglePassword.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const dateInput = document.getElementById('date-input');
    const today = new Date();
    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    dateInput.setAttribute('max', formatDate(today));
    dateInput.addEventListener('input', () => {
        const selectedDate = new Date(dateInput.value);
        if (selectedDate > today) {
            dateInput.value = '';
        }
    });
});








