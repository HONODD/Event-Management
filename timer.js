// timer.js

let timerInterval;
let timeLeft = 3.5 * 60 * 60; // 3.5 hours in seconds

function formatTime(seconds) {
    const hours = Math.floor(seconds / 3600);
    const minutes = Math.floor((seconds % 3600) / 60);
    const remainingSeconds = seconds % 60;

    const paddedHours = String(hours).padStart(2, '0');
    const paddedMinutes = String(minutes).padStart(2, '0');
    const paddedSeconds = String(remainingSeconds).padStart(2, '0');

    return `${paddedHours}:${paddedMinutes}:${paddedSeconds}`;
}

function updateTimerDisplay() {
    const timerDisplay = document.getElementById('session-timer-display');
    const fullscreenTimerDisplayModal = document.getElementById('fullscreen-timer-display-modal');

    if (timerDisplay) {
        timerDisplay.textContent = formatTime(timeLeft);
    }
    if (fullscreenTimerDisplayModal && !document.getElementById('fullscreen-timer-modal').classList.contains('hidden')) {
        fullscreenTimerDisplayModal.textContent = formatTime(timeLeft);
    }
}

function startSprintTimer() {
    const timerDisplay = document.getElementById('session-timer-display');
    if (timerDisplay) {
        timerDisplay.textContent = formatTime(timeLeft);
    }
}

function startSprintTimer() {
    const startButton = document.getElementById('start-sprint-timer');
    if (startButton) {
        startButton.disabled = true;
        startButton.classList.add('opacity-50', 'cursor-not-allowed');
    }

    updateTimerDisplay(); // Initial display

    timerInterval = setInterval(() => {
        if (timeLeft > 0) {
            timeLeft--;
            updateTimerDisplay();
        } else {
            clearInterval(timerInterval);
            if (timerDisplay) {
                timerDisplay.textContent = "Time's up!";
            }
            // Optionally re-enable the button or show a message
        }
    }, 1000);
}

// Add event listener for when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    const startButton = document.getElementById('start-sprint-timer');
    if (startButton) {
        startButton.addEventListener('click', startSprintTimer);
    }

    const fullscreenTimerBtn = document.getElementById('fullscreen-timer-btn');
    const closeFullscreenTimerBtn = document.getElementById('close-fullscreen-timer-btn');
    const fullscreenTimerModal = document.getElementById('fullscreen-timer-modal');
    const sessionTimerDisplay = document.getElementById('session-timer-display');
    const fullscreenTimerDisplayModal = document.getElementById('fullscreen-timer-display-modal');

    if (fullscreenTimerBtn && fullscreenTimerModal && sessionTimerDisplay && fullscreenTimerDisplayModal) {
        fullscreenTimerBtn.addEventListener('click', () => {
            // Transfer current time to modal and show it
            fullscreenTimerDisplayModal.textContent = sessionTimerDisplay.textContent;
            fullscreenTimerModal.classList.remove('hidden');
            fullscreenTimerModal.style.opacity = '1';
            // Ensure timer updates in modal if it's already running
            // We can simply update the display here, or re-route updateTimerDisplay to handle both.
            // For now, we'll just set the initial text and assume the interval continues.
        });
    }

    if (closeFullscreenTimerBtn && fullscreenTimerModal) {
        closeFullscreenTimerBtn.addEventListener('click', () => {
            fullscreenTimerModal.classList.add('hidden');
            fullscreenTimerModal.style.opacity = '0';
        });
    }

    // Update the main display
    updateTimerDisplay(); // Show initial 3.5 hours on load
});

// Ensure the initial display is set if the page loads while timer is running (e.g., from cache)
// For this implementation, we assume it starts from 3.5 hours and the button click initiates it.
// If you wanted it to run on page load, you'd call startSprintTimer() here directly.

document.addEventListener('DOMContentLoaded', () => {
    const startButton = document.getElementById('start-sprint-timer');
    if (startButton) {
        startButton.addEventListener('click', startSprintTimer);
    }

    // Ensure the initial display is set if the page loads while timer is running (e.g., from cache)
    // For this implementation, we assume it starts from 3.5 hours and the button click initiates it.
    // If you wanted it to run on page load, you'd call startSprintTimer() here directly.
    updateTimerDisplay(); // Show initial 3.5 hours on load
});
