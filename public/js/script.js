// Calendar

// check leap year
// isLeapYear = (year) => {
//     return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) ||
//     (year % 100 === 0 && year % 400 === 0)
// }

// getFebDays = (year) => {
//     return isLeapYear(year) ? 29 : 28
// }

// let calendar = document.querySelector('.calendar')

// const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 
// 'July', 'August', 'September', 'October', 'November', 'December']

// let calendar_month = document.querySelector('#month')

// // generate calendar
// generateCalendar = (month, year) => {
//     let calendar_days = document.querySelector('.calendar-days')
//     calendar_days.innerHTML = ''

//     let calendar_year = document.querySelector('#year')
//     let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

//     let currDate = new Date()

//     calendar_month.innerHTML = month_names[month]
//     calendar_year.innerHTML = year

//     let first_day = new Date(month, year, 1)

//     for(let i = 0; i <= days_of_month[month] + first_day.getDate() - 1; i++) {
//         let day = document.createElement('div')
//         if(i >= first_day.getDay()) {
//             day.classList.add('calendar-day-hover')
//             day.innerHTML = i - first_day.getDay() + 1
//             day.innerHTML += '<span></span>'
//         }
//     }
// }
// End of Calendar