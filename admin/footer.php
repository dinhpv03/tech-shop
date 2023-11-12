            &copy; Copyright
            <div class="h5 text-center">
                <p>Dashboard</p>
            </div>
        </div>
    </body>
    <script>
    document.getElementById('selectAll').addEventListener('click', function () {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = true;
        });
    });

    document.getElementById('deselectAll').addEventListener('click', function () {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = false;
        });
    });
</script>
</html>
