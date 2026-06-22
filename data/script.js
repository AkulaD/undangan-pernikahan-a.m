document.addEventListener("DOMContentLoaded", function() {
    const loader = document.getElementById("loader");
    const btnBuka = document.getElementById("btn-buka");
    const welcomeScreen = document.getElementById("welcome-screen");
    const mainContent = document.getElementById("main-content");
    const bgMusic = document.getElementById("bg-music");
    const musicControl = document.getElementById("music-control");
    const musicIcon = document.getElementById("music-icon");

    window.addEventListener("load", function() {
        setTimeout(function() {
            loader.classList.add("fade-out");
        }, 1500);
    });

    btnBuka.addEventListener("click", function() {
        welcomeScreen.classList.add("d-none");
        mainContent.classList.remove("d-none");
        musicControl.classList.remove("d-none");
        
        bgMusic.play().catch(function(error) {
            console.log(error);
        });
    });

    musicControl.addEventListener("click", function() {
        if (bgMusic.paused) {
            bgMusic.play();
            musicIcon.classList.remove("bi-music-note-slash");
            musicIcon.classList.add("bi-music-note-beamed");
        } else {
            bgMusic.pause();
            musicIcon.classList.remove("bi-music-note-beamed");
            musicIcon.classList.add("bi-music-note-slash");
        }
    });
});

const targetDate = new Date("July 4, 2026 08:00:00").getTime();

const countdownInterval = setInterval(function() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    // Menghitung waktu
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("hari").innerText = days < 10 ? "0" + days : days;
    document.getElementById("jam").innerText = hours < 10 ? "0" + hours : hours;
    document.getElementById("menit").innerText = minutes < 10 ? "0" + minutes : minutes;
    document.getElementById("detik").innerText = seconds < 10 ? "0" + seconds : seconds;

    if (distance < 0) {
        clearInterval(countdownInterval);
        document.getElementById("hari").innerText = "00";
        document.getElementById("jam").innerText = "00";
        document.getElementById("menit").innerText = "00";
        document.getElementById("detik").innerText = "00";
    }
}, 1000);

window.copyText = function(textToCopy, buttonId) {
    const btnElement = document.getElementById(buttonId);
    const originalHTML = btnElement.innerHTML;

    function ubahTeksTombol() {
        btnElement.innerHTML = '<i class="bi bi-check2-circle text-success me-1"></i> Tersalin!';
        setTimeout(function() {
            btnElement.innerHTML = originalHTML;
        }, 2500);
    }

    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(textToCopy).then(function() {
            ubahTeksTombol();
        }).catch(function() {
            salinPakeCaraLama(textToCopy);
        });
    } else {
        salinPakeCaraLama(textToCopy);
    }

    function salinPakeCaraLama(teks) {
        const tArea = document.createElement("textarea");
        tArea.value = teks;
        tArea.style.position = "fixed";
        tArea.style.left = "-9999px";
        tArea.style.top = "0px";
        document.body.appendChild(tArea);
        tArea.focus();
        tArea.select();
        tArea.setSelectionRange(0, 99999);
        
        try {
            document.execCommand('copy');
            ubahTeksTombol();
        } catch (err) {
            console.error(err);
        }
        
        document.body.removeChild(tArea);
    }
};