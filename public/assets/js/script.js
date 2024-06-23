
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('submitForm').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default form submission

        if (validateForm()) {
            document.getElementById('addEmployeeForm').submit();
        }
    });

    function validateForm() {
        var name = document.getElementById('name').value.trim();
        var email = document.getElementById('email').value.trim();
        var phone_number = document.getElementById('phone_number').value.trim();
        var alamat = document.getElementById('alamat').value.trim();
        var domisili = document.getElementById('domisili').value;

        if (name === '') {
            alert('Nama harus diisi');
            return false;
        }

        if (email === '') {
            alert('Email harus diisi');
            return false;
        } else if (!isValidEmail(email)) {
            alert('Format email tidak valid');
            return false;
        }

        if (phone_number === '') {
            alert('Nomor HP harus diisi');
            return false;
        } else if (!isValidPhoneNumber(phone_number)) {
            alert('Nomor HP tidak valid');
            return false;
        }

        if (alamat === '') {
            alert('Alamat harus diisi');
            return false;
        }

        if (domisili === '') {
            alert('Domisili harus dipilih');
            return false;
        }

        return true;
    }

    function isValidEmail(email) {
        var regex = /\S+@\S+\.\S+/;
        return regex.test(email);
    }

    function isValidPhoneNumber(phone_number) {
        var regex = /^[0-9]{10,}$/;
        return regex.test(phone_number);
    }
});


var texts = [
    "Smart",
    "Inovatif",
    "Professional"
];


var index = 0;
var charIndex = 0;

function autoType() {
    var textElement = document.getElementById('text' + (index + 1));
    var text = texts[index];

    if (charIndex < text.length) {
        textElement.textContent += text.charAt(charIndex);
        charIndex++;
        setTimeout(autoType, 100);
    } else {
        charIndex = 0;
        setTimeout(function() {
            textElement.textContent = '';
            index = (index + 1) % texts.length;
            autoType();
        }, 1000);
    }
}

autoType();


$(document).ready(function() {
    $('#myTable').DataTable({
        "dom": '<"d-flex justify-content-between"lf>tip',
        "language": {
            "search": '<div class="input-group px-2"><label class="me-2">Search:</label><input type="search" class="form-control form-control-sm border" placeholder="Search" aria-controls="myTable"></div>',
            "lengthMenu": '<div class="input-group px-2"><label class="me-2">Show:</label><select class="custom-select custom-select-sm form-control form-control-sm border">' +
                '<option value="10">10</option>' +
                '<option value="25">25</option>' +
                '<option value="50">50</option>' +
                '<option value="100">100</option>' +
                '</select> records per page</div>'
        }
    });
});