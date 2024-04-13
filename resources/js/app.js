//import './bootstrap';

// Получаем элементы header
const categoryElement = document.querySelector("#category"); // Замени #category на  селектор элемента Category
const coursesElement = document.querySelector("#courses"); // Замени #courses на  селектор элемента Courses
const contactElement = document.querySelector("#contact"); // Замени #contact на  селектор элемента Contact
const infoBlock = document.querySelector("#info-block"); // Замени #info-block на  селектор блока с информативными колонками

// Функция для вывода координат мыши
function logMouseCoordinates(event) {
    console.log(`(${event.clientX}, ${event.clientY})`);
}

// Обработчик клика на Category
categoryElement.addEventListener("click", function (event) {
    console.log("Open category: 42");
    logMouseCoordinates(event);
});

// Обработчик наведения на Courses
coursesElement.addEventListener("mousemove", logMouseCoordinates);

// Обработчик клика на Contact
contactElement.addEventListener("click", function (event) {
    event.preventDefault(); // Отмена стандартного поведения
    infoBlock.innerHTML = "г. Москва, ул. Примерная 1, email: example@mail.ru";
});