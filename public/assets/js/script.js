

document.addEventListener("DOMContentLoaded", () => {
    
    // =============================================================
    // 1. RESERVATION DATE PICKER SYNC LOGIC
    // =============================================================
    const chips = document.querySelectorAll('.chip');
    const dateInput = document.getElementById('reservationDate');
    const calendarLink = document.getElementById('open-calendar');

    function syncActiveChip(currentValue) {
        chips.forEach(chip => {
            if (chip.getAttribute('data-date') === currentValue) {
                chip.classList.add('active');
            } else {
                chip.classList.remove('active');
            }
        });
    }

    chips.forEach(chip => {
        chip.addEventListener('click', () => {
            const selectedDate = chip.getAttribute('data-date');
            dateInput.value = selectedDate; 
            chips.forEach(c => c.classList.remove('active'));
            chip.classList.add('active');
        });
    });

    if (dateInput) {
        dateInput.addEventListener('change', (e) => {
            syncActiveChip(e.target.value);
        });
    }

    if (calendarLink && dateInput) {
        calendarLink.addEventListener('click', () => {
            dateInput.showPicker(); 
        });
    }

    // =============================================================
    // 2. RESERVATION TIME CHIP SELECTION
    // =============================================================
    const timeChips = document.querySelectorAll('.time-chip');
    const hiddenTimeInput = document.getElementById('selectedTime');

    timeChips.forEach(chip => {
        chip.addEventListener('click', () => {
            timeChips.forEach(c => c.classList.remove('active'));
            chip.classList.add('active');
            hiddenTimeInput.value = chip.getAttribute('data-time');
        });
    });

    // =============================================================
    // 3. GUEST COUNTER INCREMENT/DECREMENT WIDGET
    // =============================================================
    const decreaseBtn = document.getElementById('decreaseGuests');
    const increaseBtn = document.getElementById('increaseGuests');
    const guestDisplayLabel = document.getElementById('guestCountDisplay');
    const guestsInput = document.getElementById('guestsInput');
    let currentGuests = 6; // Initial state value tracking

    if (decreaseBtn && increaseBtn) {
        decreaseBtn.addEventListener('click', () => {
            if (currentGuests > 1) {
                currentGuests--;
                guestDisplayLabel.textContent = `${currentGuests} guests`;
                guestsInput.value = currentGuests;
            }
        });

        increaseBtn.addEventListener('click', () => {
            if (currentGuests < 9) {
                currentGuests++;
                guestDisplayLabel.textContent = `${currentGuests} guests`;
                guestsInput.value = currentGuests;
            }
        });
    }

    // =============================================================
    // 4. PREFERRED SEATING CHOICE INTERACTION
    // =============================================================
    const seatingChips = document.querySelectorAll('.seating-chip');
    const seatingInput = document.getElementById('seatingInput');

    seatingChips.forEach(chip => {
        chip.addEventListener('click', () => {
            seatingChips.forEach(c => c.classList.remove('active'));
            chip.classList.add('active');
            seatingInput.value = chip.getAttribute('data-seating');
        });
    });

    // =============================================================
    // 5. SPECIAL REQUEST TEXTAREA STRING CHARACTER COUNTER
    // =============================================================
    const textarea = document.getElementById('specialRequests');
    const charCounterDisplay = document.getElementById('currentCharCount');
    const clearFormBtn = document.getElementById('clearFormBtn');
    const reservationForm = document.getElementById('reservationForm');

    if (textarea && charCounterDisplay) {
        textarea.addEventListener('input', () => {
            charCounterDisplay.textContent = textarea.value.length;
        });
    }

    // =============================================================
    // 6. DEEP RESET CLEAR BUTTON INTERACTION LOGIC
    // =============================================================
    if (clearFormBtn && reservationForm) {
        clearFormBtn.addEventListener('click', () => {
            // A. Reset default native text input fields
            reservationForm.reset();
            
            // B. Clear textarea character count display back to zero
            if (charCounterDisplay) charCounterDisplay.textContent = "0"; 

            // C. Reset custom internal guest counter variables back to 6
            currentGuests = 6;
            if (guestDisplayLabel) guestDisplayLabel.textContent = "6 guests";
            if (guestsInput) guestsInput.value = 6;

            // D. Restore Date highlight layout variables back to original first index chip
            chips.forEach((c, idx) => {
                if (idx === 0) c.classList.add('active');
                else c.classList.remove('active');
            });
            if (dateInput) dateInput.value = "2026-10-24"; // Re-sync base value parameter

            // E. Clean and uncheck time-grid active highlights
            timeChips.forEach(c => c.classList.remove('active'));
            if (hiddenTimeInput) hiddenTimeInput.value = "";

            // F. Reset preferred seating chip choice back to Family Hall
            seatingChips.forEach(c => {
                if (c.getAttribute('data-seating') === "Family hall") c.classList.add('active');
                else c.classList.remove('active');
            });
            if (seatingInput) seatingInput.value = "Family hall";
        });
    }
});
