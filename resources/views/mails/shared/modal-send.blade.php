<!-- Modal -->
<div class="modal fade" id="modalSend" tabindex="-1" role="dialog" aria-labelledby="modalSendLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSendLabel">Send Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you want Send this email?
            </div>
            <input value="" name="mailId" type="hidden">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnConfirmSend">Send Email</button>
            </div>
        </div>
    </div>
</div>


@section('js')

    <script>
        $(document).ready(function () {
            var idSelected;

            $(".btnSend").on('click', function () {
                $("#modalSend").modal('show');
                idSelected = $(this).closest("tr").find("td:first-child").text();
            });

            $("#btnConfirmSend").on('click', () => {
                sendEmail(idSelected);

            })

        });

        function sendEmail(id) {
            let BASE_URL = '{!! URL::to('') !!}';
            axios.get(`${BASE_URL}/api/mails/${id}/send`)
                .then(res => {
                    $("#modalSend").modal('hide');
                    $("#mailSentMessage").show();
                })
                .catch(err =>
                    alert(err.toString())
                );
        }

    </script>

@endsection
