
    <form action="/submit-form" method="POST" style="text-align: center;">
        @csrf
        <input type="checkbox" id="{{ $checkboxId }}" onclick="saveCheckboxState('{{ $checkboxId }}')">
        <script>
            function saveCheckboxState(checkboxId) {
                var checkbox = document.getElementById(checkboxId);
                localStorage.setItem(checkboxId, checkbox.checked);
            }

            window.onload = function() {
                var checkboxes = document.querySelectorAll('input[type=checkbox]');
                checkboxes.forEach(function(checkbox) {
                    var checked = JSON.parse(localStorage.getItem(checkbox.id));
                    checkbox.checked = checked;
                });
            };
        </script>
     <span>Selesai</span>
    </form>



