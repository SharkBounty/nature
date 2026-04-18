document.addEventListener('DOMContentLoaded', () => {
    // Container for notifications
    const container = document.createElement('div');
    container.className = 'social-notification-container';
    document.body.appendChild(container);

    // Data for notifications
    const names = [
        "Carlos M.", "Juan P.", "Miguel A.", "Andrés R.", "Fernando T.",
        "Roberto S.", "Luis G.", "Jorge L.", "Ricardo B.", "Manuel O.",
        "Alejandro V.", "Gabriel C.", "Pedro D.", "Javier H."
    ];

    const actions = [
        "acaba de comprar el Protocolo",
        "inició el programa con éxito",
        "obtuvo acceso completo",
        "realizó su inscripción",
        "se unió al Protocolo",
        "acaba de aprovechar la oferta"
    ];

    const times = [
        "hace instantes", "hace 2 minutos", "hace 5 minutos",
        "recién ahora", "hace 1 minuto", "hace 4 minutos"
    ];

    function getRandomItem(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }

    function createNotification() {
        const name = getRandomItem(names);
        const action = getRandomItem(actions);
        const time = getRandomItem(times);

        const card = document.createElement('div');
        card.className = 'social-card';
        // Green checkmark icon
        card.innerHTML = `
            <div class="icon-box">✓</div>
            <div class="content-box">
                <span class="name-action">${name} ${action}</span>
                <span class="time-ago">${time}</span>
            </div>
        `;

        container.appendChild(card);

        // Animate in
        requestAnimationFrame(() => {
            card.classList.add('active');
        });

        // Remove after 5 seconds
        setTimeout(() => {
            card.classList.remove('active');
            setTimeout(() => {
                if (card.parentNode) {
                    card.parentNode.removeChild(card);
                }
            }, 500); // Wait for transition out
        }, 5000);
    }

    // Scheduling logic
    // Start showing notifications after 3 seconds
    // Then show one every 8-15 seconds

    setTimeout(() => {
        createNotification(); // First one
        startLoop();
    }, 3000);

    function startLoop() {
        const interval = Math.random() * (15000 - 8000) + 8000; // Random between 8s and 15s
        setTimeout(() => {
            createNotification();
            startLoop();
        }, interval);
    }
});
