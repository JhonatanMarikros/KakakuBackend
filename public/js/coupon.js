function generateRandomCode() {
    var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    var segments = [];
    for (var i = 0; i < 4; i++) {
        var segment = '';
        for (var j = 0; j < 4; j++) {
            segment += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        segments.push(segment);
    }
    return segments.join('-');
}

$(document).ready(function () {
    $('.claim-btn').on('click', function (e) {
        e.preventDefault();
        var couponName = $(this).data('coupon');
        var isClaimed = $(this).data('claimed');
        var referralCode = generateRandomCode();

        if (isClaimed) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: `Anda sudah klaim coupon ${couponName}`
            });
        } else {
            Swal.fire({
                icon: 'success',
                title: 'Selamat!',
                html: `Selamat anda mendapatkan coupon ${couponName}.<br>Tukarkan coupon nya ke Offline Store.<br><br>Redeem Code: <strong>${referralCode}</strong>`
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#claimForm' + $(this).closest('form').attr('id').replace('claimForm', '')).submit();
                }
            });
        }
    });
});