
document.addEventListener("DOMContentLoaded", function() {
    const spans = document.querySelectorAll("#div1 span");

    function moveSpanToDiv2(span, delay) {
        setTimeout(() => {
        const newSpan = span.cloneNode(true);
        document.getElementById("div2").appendChild(newSpan);
        span.style.opacity = "0";
        }, delay);
    }

    spans.forEach((span, index) => {
        const delay = index % 2 === 0 ? (index * 1000) + 5000 : (index * 1000) + 4000;
        moveSpanToDiv2(span, delay);
    });
});
