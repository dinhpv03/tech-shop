<main class="catalog  mb ">
    <div class="boxleft">
        <div class="h5 text-center">
            <p>CHÀO MỪNG ĐẾN VỚI SIÊU THỊ TRỰC TUYẾN</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Liên Hệ</h2>
                <form action="process_contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Họ và Tên:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Nội dung liên hệ:</label>
                        <textarea class="form-control" id="message" name="message" rows="8" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</main>
