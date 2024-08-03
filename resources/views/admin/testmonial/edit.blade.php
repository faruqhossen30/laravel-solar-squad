@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="testminial" class="py-2" pageoneRoute="{{ route('testmonial.index') }}" pagetwo="Edit" />
@endsection

@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">
                    <form action="{{ route('testmonial.update', $testmonial->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('Put')
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-12 bg-white  p-4 rounded-lg">
                                <div class="py-2">
                                    <select id="" name="review"
                                        class=" py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <option value="">Select Rating</option>
                                        <option value="1" @if ($testmonial->review == 1) selected @endif>One Star</option>
                                        <option value="2" @if ($testmonial->review == 2) selected @endif>Two Star</option>
                                        <option value="3" @if ($testmonial->review == 3) selected @endif>Three Star</option>
                                        <option value="4" @if ($testmonial->review == 4) selected @endif>Four Star</option>
                                        <option value="5" @if ($testmonial->review == 5) selected @endif>Five Star</option>
                                    </select>
                                </div>
                                <x-form.input label=" Name" name="name" value="{{ $testmonial->name }}" />
                                <x-form.input label=" Address" name="address" value="{{ $testmonial->address }}" />
                                <x-form.textarea label="Project Description" name="description" value="{{ $testmonial->description }}" />
                                <div class="col-span-12 lg:col-span-4 bg-white  p-4 rounded-lg">
                                    <label for="myDropify" class="text-gray-500 capitalize dark:text-gray-200 text-sm font-medium mb-2 "> Image size must be (300 * 300)</label>
                                    <input class="dropify" type="file" id="myDropify" name="thumbnail" data-default-file="{{ asset('storage/' . $testmonial->thumbnail) }}">
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
