<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container" style="margin-top: 15%; margin-bottom:10%;">
    <h3 class="text-center">Ketersedian Kamar</h3>
    <div id="button-container" class="d-flex flex-wrap justify-content-center mt-3">
        <script>
            for (let i = 0; i < 11; i++) {
                document.write(`<button id="btn-${i}" class="btn btn-success m-1" onclick="showInputForm(${i})" data-toggle="tooltip" data-placement="top" title="Kamar masih kosong">Kamar ${i + 1}</button>`);
            }
        </script>
    </div>
</div>

<div id="timeInputForm" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Atur Waktu dan Deskripsi</h5>
                <button type="button" class="close" onclick="closeForm()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="description">Deskripsi:</label>
                <input type="text" id="description" class="form-control mb-3" placeholder="Masukkan deskripsi">
                <label for="startTime">Waktu CheckIn:</label>
                <input type="time" id="startTime" class="form-control mb-3">
                <label for="endTime">Waktu CheckOut:</label>
                <input type="time" id="endTime" class="form-control mb-3">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="setTimer()">Atur Waktu</button>
            </div>
        </div>
    </div>
</div>

<script>
    let currentButtonId = null;

    function showInputForm(buttonId) {
        currentButtonId = buttonId;
        document.getElementById('timeInputForm').style.display = 'block';
    }

    function closeForm() {
        document.getElementById('timeInputForm').style.display = 'none';
    }

    function setTimer() {
        const description = document.getElementById('description').value;
        const startTime = document.getElementById('startTime').value;
        const endTime = document.getElementById('endTime').value;

        if (!startTime || !endTime || !description) {
            alert("Masukkan deskripsi, waktu mulai, dan waktu akhir yang valid.");
            return;
        }

        const [startHour, startMinute] = startTime.split(':');
        const [endHour, endMinute] = endTime.split(':');

        const startMinutes = parseInt(startHour) * 60 + parseInt(startMinute);
        const endMinutes = parseInt(endHour) * 60 + parseInt(endMinute);

        let durationMinutes;
        if (endMinutes >= startMinutes) {
            durationMinutes = endMinutes - startMinutes;
        } else {
            durationMinutes = (24 * 60 - startMinutes) + endMinutes;
        }

        const button = document.getElementById(`btn-${currentButtonId}`);
        button.classList.remove("btn-success");
        button.classList.add("btn-warning");

        button.setAttribute("title", `${description}\n Waktu: ${startTime} - ${endTime}`);
        $(button).tooltip('dispose');
        $(button).tooltip();

        setTimeout(() => {
            button.classList.remove("btn-warning");
            button.classList.add("btn-success");
            button.setAttribute("title", "kamar masih kosong");
            $(button).tooltip('dispose');
            $(button).tooltip();
        }, durationMinutes * 60 * 1000);

        closeForm();
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialize tooltip Bootstrap
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<?= $this->include('layout/footer') ?>