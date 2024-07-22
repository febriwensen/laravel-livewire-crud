<div
    x-data="{open: false}"
    x-show="open"
    @notify.window="Toastify({
        text: $event.detail.message,
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: 'top',
        position: 'right',
        stopOnFocus: true,
        style: {
            background: ($event.detail.title === 'success') ? 'linear-gradient(to right, #00b09b, #96c93d)' : 'linear-gradient(to right, #3D0C11, #D80032)',
        },
    }).showToast();"
    >
</div>