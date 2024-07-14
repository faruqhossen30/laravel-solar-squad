@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="service" class="py-2" pageoneRoute="{{ route('service.index') }}" pagetwo="Edit" />
@endsection

@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">
                    <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('Put')
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-12 bg-white  p-4 rounded-lg">
                                <x-form.input label=" Title" name="title" value="{{ $service->title }}" />
                                <x-form.textarea label="Description" name="description" value="{{ $service->description }}" />
                                <div class="col-span-12 lg:col-span-4 bg-white p-6 rounded-lg">
                                    <input class="dropify" type="file" id="myDropify" name="thumbnail" data-default-file="{{ asset('storage/'.$service->thumbnail) }}">
                                </div>
                            </div>
                        </div>
                        <x-form.submit-button title="update" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }
    </style>
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });

        });
    </script>
@endpush
