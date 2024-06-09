<div>
    <input type="text" placeholder="User ID" class="me-3" wire:model='userId'>
    <input type="text" placeholder="Zone ID" class="me-3" wire:model='zoneId'>
    <button wire:click='submit' wire:loading.attr='disabled'>Check</button>
    <div id="nickname"
        class="alert alert-success alert-dismissible fade @if ($nickname) show @endif mt-3"
        role="alert">
        Nickname : {{ $nickname }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @script
        <script>
            $wire.on('error', (data) => {
                Toastify({
                    text: data,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "bottom", // `top` or `bottom`
                    position: "center", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "red",
                    }
                }).showToast();
            });
        </script>
    @endscript
</div>
