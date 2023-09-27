// script.js
const calendarContainer = document.getElementById('calendar');
const bookingDateInput = document.getElementById('booking-date');
const bookButton = document.getElementById('book-button');

// Sample data: Available dates for booking
const availableDates = ['2023-08-15', '2023-08-20', '2023-08-25'];

function renderCalendar() {
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth();
    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

    calendarContainer.innerHTML = '';

    for (let day = 1; day <= daysInMonth; day++) {
        const date = new Date(currentYear, currentMonth, day);
        const dateString = date.toISOString().split('T')[0];

        const dayElement = document.createElement('div');
        dayElement.classList.add('day');
        dayElement.textContent = day;
        
        if (availableDates.includes(dateString)) {
            dayElement.classList.add('available');
            dayElement.addEventListener('click', () => {
                bookingDateInput.value = dateString;
            });
        } else {
            dayElement.classList.add('unavailable');
            dayElement.title = 'Not available for booking';
        }

        calendarContainer.appendChild(dayElement);
    }
}

renderCalendar();

bookButton.addEventListener('click', () => {
    const selectedDate = bookingDateInput.value;
    if (availableDates.includes(selectedDate)) {
        alert(`Booking confirmed for ${selectedDate}`);
    } else {
        alert('Selected date is not available for booking.');
    }
});

const header=document.querySelector("header");

window.addEventListener("scroll",function(){
  header.classList.toggle("sticky",window.scrollY > 0);
});