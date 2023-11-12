<p class="h4 text-center text-danger">BIỂU ĐỒ THỐNG KÊ</p>
<div class="row">
    <div class="col-6">
        <div
                id="myChart" style="width:100%; max-width:1200px; height:500px;">
        </div>

        <script>
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const data = google.visualization.arrayToDataTable([
                    ['Contry', 'Mhl'],
                    <?php
                    $tongdm = count($listThongKe);
                    $i=1;
                    foreach ($listThongKe as $thongke) {
                        extract($thongke);
                        if($i == $tongdm) {
                            $dauphay = "";
                        } else {
                            $dauphay = ",";
                        }
                        echo "['".$thongke['tendm']."', ".$thongke['countsp']."]". $dauphay;
                        $i+=1;
                    }
                    ?>
                ]);

                const options = {
                    title:'Thống kê sản phẩm theo danh mục'
                };

                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);

            }
        </script>
    </div>
    <div class="col-6">
        <div
                id="Chart" style="width:100%; max-width:1200px; height:500px;">
        </div>

        <script>
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const data = google.visualization.arrayToDataTable([
                    ['Contry', 'Mhl'],
                    <?php
                    $tongdm = count($listSanPham);
                    $i=1;
                    foreach ($listSanPham as $sanpham) {
                        extract($sanpham);
                        if($i == $tongdm) {
                            $dauphay = "";
                        } else {
                            $dauphay = ",";
                        }
                        echo "['".$sanpham['name']."', ".$sanpham['soBinhLuan']."]". $dauphay;
                        $i+=1;
                    }
                    ?>
                ]);

                const options = {
                    title:'Thống kê bình luận theo sản phẩm'
                };

                const chart = new google.visualization.PieChart(document.getElementById('Chart'));
                chart.draw(data, options);

            }
        </script>
    </div>
</div>
