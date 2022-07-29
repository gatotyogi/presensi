<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="deletemodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Delete data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="content"></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-sm" onclick="setAccept();" data-dismiss="modal">Delete <i class="fas fa-trash"></i></button>
                <button class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel <i class="fas fa-window-close"></i></button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    let dataTarget;
    let functionName;
    let formSelector;

    function setAccept() {
        // Set if javascript delete function set
        if (functionName !== null) {
            // Execute javascript delete function
            window[functionName]();
        } else {
            // Check if datatarget available
            if (dataTarget !== null) {
                $(`${formSelector}[data-target=${dataTarget}]`).submit();
            } else {
                $(`${formSelector}`).submit();
            }
        }
    }

    function showModal(content, selector = '.delete-form', target = null, functionDelete = null) {
        // Prevent event default
        event.preventDefault();
        // Set the selector
        formSelector = selector;
        // Set data target
        dataTarget = target;
        // Set javascript function
        functionName = functionDelete;
        // Change modal content
        $('#content').text(content);
        // Trigger modal show
        $('#deletemodal').modal('show');
    }
</script>
@endpush