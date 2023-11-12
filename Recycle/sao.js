const stars = document.querySelectorAll('.rating');
const result = document.getElementById('result');

stars.forEach((star, index) => {
    star.addEventListener('click', () => {
        result.innerHTML = `Bạn đã đánh giá ${index + 1} sao.`;

        // Đánh giá các sao
        for (let i = 0; i <= index; i++) {
            stars[i].innerHTML = '&#9733;'; // Đánh giá sao đã chọn
        }
        for (let i = index + 1; i < stars.length; i++) {
            stars[i].innerHTML = '&#9734;'; // Đánh giá sao chưa chọn
        }
    });
});