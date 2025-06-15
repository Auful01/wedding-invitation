@extends('app.layout')

@section('content')

    <div style="margin-top: 100px;">
        <div class="row justify-content-between">
            <div class="col-auto">
                <h1>Guest List</h1>
            </div>
            <div class="col-auto my-auto">
                <button class="btn btn-primary " id="addGuestButton">Add Guest</button>
            </div>
        </div>
        <div class="card border-0 rounded-xl mt-3">
            <div class="card-body">
                <table class="table table-striped ">
                    <thead >
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>Address</th>
                            <th>Gift</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guests as $guest)
                            <tr>
                                <td>{{ $guest->name }}</td>
                                <td>{{ $guest->phone }}</td>
                                <td>{{ $guest->position }}</td>
                                <td>{{ $guest->address }}</td>
                                <td>{{ $guest->gift }}</td>
                                <td>{{ $guest->status }}</td>
                                <td>
                                    {{-- Copy Invitation --}}
                                    <button class="btn btn-secondary btn-sm" onclick="copyInvitation('{{ $guest->id }}')">Copy</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                    <div>
                        {{ $guests->links() }}
                    </div>
                </table>
            </div>
        </div>
    </div>


    {{-- Modal --}}
    <div class="modal fade text-black" id="addGuestModal" tabindex="-1" aria-labelledby="addGuestModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addGuestModalLabel">Add Guest</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <form id="addGuestForm"> --}}
                        <div class="mb-3">
                            <label for="guestName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="guestName" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="guestPhone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="guestPhone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="guestPosition" class="form-label">Position</label>
                            <input type="text" class="form-control" id="guestPosition" name="position">
                        </div>
                        <div class="mb-3">
                            <label for="guestAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="guestAddress" name="address">
                        </div>
                        <button type="button" class="btn btn-primary" id="submitGuestButton">Add Guest</button>
                    {{-- </form> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#addGuestButton').on('click', function() {
                // Logic to add a new guest
                $('#addGuestModal').modal('show');
            });

            $('#submitGuestButton').on('click', function(e) {
                e.preventDefault();
                const name = $('#guestName').val();
                const phone = $('#guestPhone').val();
                const position = $('#guestPosition').val();
                const address = $('#guestAddress').val();


                $.ajax({
                    url: '/api/guests',
                    method: 'POST',
                    data: {
                       "name": name,
                       "phone": phone,
                       "position": position,
                       "address": address,
                    },
                    success: function(response) {
                        alert('Guest added successfully!');
                        // Optionally, you can update the guest list without refreshing the page
                    },
                    error: function(xhr) {
                        alert('Error adding guest: ' + xhr.responseText);
                    }
                });

                // Reset form and close modal
                $(this).trigger('reset');
                $('#addGuestModal').modal('hide');
                window.location.reload(); // Reload the page to see the new guest
            });
        });

        function copyInvitation(guestId) {
            const invitationUrl = window.location.origin + '?guestId=' + guestId;
            navigator.clipboard.writeText(invitationUrl).then(() => {
                alert('Invitation link copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }

    </script>
</push>
