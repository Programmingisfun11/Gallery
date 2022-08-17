@extends('layouts.app')
@section('content')
    <main class="form-signin w-100 m-auto">


        <form method='post' action='{{ route('postImage') }}' enctype='multipart/form-data'>
            @csrf
            <div class="modal modal-sheet position-static d-block  py-5" tabindex="-1" role="dialog" id="modalSheet">
                <div class="modal-dialog" role="document">
                    <div class="modal-content rounded-4 shadow">
                        <div class="modal-header border-bottom-0">
                            <h5 class="modal-title">Add Image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body py-0">
                            <p>This is a modal sheet, a variation of the modal that docs itself to the bottom of the
                                viewport
                                like
                                the newer share sheets in iOS.</p>
                        </div>
                        <div class="modal-footer flex-column border-top-0">

                            <input type='file' name='Image'>
                            <button class="w-100 btn btn-lg btn-primary" type="submit" name='newArticle'>Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
