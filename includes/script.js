// for nav and footer components

class Nav extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <nav>
        <button type="button" onclick="switchNav()">Click here to navigate! Click here to navigate! Haga clic aquí para navegar! 點擊這裡導航！ नेविगेट करने के लिए यहां क्लिक करें! انقر هنا للتنقل! 点击这里导航! Cliquez ici pour naviguer! ለማሰስ እዚህ ጠቅ ያድርጉ!</button>
        <div id="nav">
        <ul>
            <li><a href="/web-folio.html">web</a></li>
            <li><a href="/photography/index.html">photo</a></li>
            <li><a href="/writing/web-dev/">writing</a></li>
            <li><a href="/links.html">links</a></li>
        </ul></div>
      </nav>
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

// for opening nav menu

function switchNav() {
    let navEl = document.getElementById("nav");
    if (navEl.style.display == "block") {
      navEl.style.display = "none";
    } else {
      navEl.style.display = "block";
    }
}

