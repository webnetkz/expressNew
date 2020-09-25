export function darkMod() {
    let darkStyles = document.createElement('style');
    darkStyles.innerText = ':root {filter: invert(100%)}';
    document.body.appendChild(darkStyles)
}