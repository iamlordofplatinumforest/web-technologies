document.querySelectorAll('.delete').forEach(btn => {
    btn.addEventListener('click', function() {
        if (confirm('Delete this file?')) {
            fetch('/admin/action', {
                method: 'POST',
                body: new URLSearchParams({
                    action: 'delete',
                    file: this.dataset.file
                })
            }).then(() => location.reload());
        }
    });
});
