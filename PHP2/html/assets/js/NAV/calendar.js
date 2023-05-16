
// 모달 버튼을 클릭하면 모달 열기
document.querySelectorAll(".modal-btn").forEach(function(button) {
  button.addEventListener("click", function() {
    document.querySelector(".modal").style.display = "block";
  });
});

// 모달 닫기 버튼을 클릭하면 모달 닫기
document.querySelector(".close").addEventListener("click", function() {
  document.querySelector(".modal").style.display = "none";
});

// 모달 외부를 클릭하면 모달 닫기
window.addEventListener("click", function(event) {
  if (event.target == document.querySelector(".modal")) {
    document.querySelector(".modal").style.display = "none";
  }
});

function calendarInit() {

// 날짜 정보 가져오기
let date = new Date(); // 현재 날짜(로컬 기준) 가져오기
let utc = date.getTime() + (date.getTimezoneOffset() * 60 * 1000); // uct 표준시 도출
let kstGap = 9 * 60 * 60 * 1000; // 한국 kst 기준시간 더하기
let today = new Date(utc + kstGap); // 한국 시간으로 date 객체 만들기(오늘)

let thisMonth = new Date(today.getFullYear(), today.getMonth(), today.getDate());
// 달력에서 표기하는 날짜 객체


let currentYear = thisMonth.getFullYear(); // 달력에서 표기하는 연
let currentMonth = thisMonth.getMonth(); // 달력에서 표기하는 월
let currentDate = thisMonth.getDate(); // 달력에서 표기하는 일

// kst 기준 현재시간
// console.log(thisMonth);

// 캘린더 렌더링
renderCalender(thisMonth);

function renderCalender(thisMonth) {

    // 렌더링을 위한 데이터 정리
    currentYear = thisMonth.getFullYear();
    currentMonth = thisMonth.getMonth();
    currentDate = thisMonth.getDate();

    // 이전 달의 마지막 날 날짜와 요일 구하기
    let startDay = new Date(currentYear, currentMonth, 0);
    let prevDate = startDay.getDate();
    let prevDay = startDay.getDay();

    // 이번 달의 마지막날 날짜와 요일 구하기
    let endDay = new Date(currentYear, currentMonth + 1, 0);
    let nextDate = endDay.getDate();
    let nextDay = endDay.getDay();

    // console.log(prevDate, prevDay, nextDate, nextDay);

    // 현재 월 표기
    $('.year-month').text(currentYear + '.' + (currentMonth + 1));

    // 렌더링 html 요소 생성
    calendar = document.querySelector('.dates')
    calendar.innerHTML = '';
    
    // 지난달
    for (let i = prevDate - prevDay + 1; i <= prevDate; i++) {
        calendar.innerHTML = calendar.innerHTML + '<div class="day prev disable">' + i + '</div>'
    }
    // 이번달
    for (let i = 1; i <= nextDate; i++) {
        calendar.innerHTML = calendar.innerHTML + '<div class="day current">' + i + '</div>'
    }
    // 다음달
    for (let i = 1; i <= (7 - nextDay == 7 ? 0 : 7 - nextDay); i++) {
        calendar.innerHTML = calendar.innerHTML + '<div class="day next disable">' + i + '</div>'
    }
    // 오늘 날짜 표기
    if (today.getMonth() == currentMonth) {
        todayDate = today.getDate();
        var currentMonthDate = document.querySelectorAll('.modal-btn');
        currentMonthDate[todayDate -1].classList.add('today');
    }
        // 오늘 날짜 표기
        if (today.getMonth() == currentMonth) {
        todayDate = today.getDate();
        var currentMonthDate = document.querySelectorAll('.modal-btn');
        currentMonthDate[todayDate -1].classList.add('today');
    }
}
        }