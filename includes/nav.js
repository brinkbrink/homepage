class Nav extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
            <nav>
            <ul>
                <li><a href="/web-folio.html">web portfolio</a></li>
                <li><a href="/photography.html">photo portfolio</a></li>
                <li><a href="/writing/">writings about</a></li>
                <li><a href="/links.html">links of interest</a></li>
            </ul></nav>
            `;
    }
}


customElements.define("nav-comp", Nav);

class Footer extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <footer>
        <p>&#10166; &#10165; &#10164; Copyright &copy; E. Brink 2022 &#9996;</p>
        </footer>
            `;
    }
}


customElements.define("footer-comp", Footer);