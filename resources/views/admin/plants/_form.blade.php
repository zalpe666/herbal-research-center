<style>
    .ck-editor {
        width: 100% !important;
        max-width: 100% !important;
    }

    .ck-editor__main {
        width: 100%;
    }

    .ck-editor__editable {
        min-height: 220px;
        padding-left: 10px !important;
        padding-right: 30px !important;
    }

    .ck-content ul,
    .ck-content ol {
        padding-left: 10px !important;
        margin-left: 0 !important;
    }

    .ck-content ul {
        list-style-type: disc;
    }

    .ck-content ol {
        list-style-type: decimal;
    }

    .ck-content li {
        margin-bottom: 4px;
    }
</style>
<div class="space-y-6">

    {{-- Nama --}}
    <div>
        <label class="mb-2 block text-sm font-medium text-gray-700">
            Nama Tanaman
        </label>

        <input type="text" name="name" value="{{ old('name', $plant->name ?? '') }}" required
            class="w-full rounded-xl border border-gray-300 px-4 py-3
                   focus:border-green-500 focus:ring-green-500"
            placeholder="Contoh: Kunyit">

        @error('name')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Nama Ilmiah --}}
    <div>
        <label class="mb-2 block text-sm font-medium text-gray-700">
            Nama Ilmiah
        </label>

        <input type="text" name="scientific_name" value="{{ old('scientific_name', $plant->scientific_name ?? '') }}"
            class="w-full rounded-xl border border-gray-300 px-4 py-3
                   focus:border-green-500 focus:ring-green-500"
            placeholder="Contoh: Curcuma longa">

        @error('scientific_name')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- Gambar --}}
    {{-- Gambar --}}
    <div>
        <label class="mb-2 block text-sm font-medium text-gray-700">
            Gambar Tanaman
        </label>

        {{-- Preview gambar --}}
        <div id="image-preview-container" class="mb-3 {{ isset($plant) && $plant->image ? '' : 'hidden' }}">
            <img id="image-preview" src="{{ isset($plant) && $plant->image ? asset('storage/' . $plant->image) : '' }}"
                alt="Preview Gambar" class="h-40 w-40 rounded-xl border border-gray-200 object-cover shadow-sm">
        </div>

        <input type="file" name="image" id="image-input" accept="image/jpeg,image/png,image/webp"
            class="w-full rounded-xl border border-gray-300 px-4 py-3
               file:mr-4 file:rounded-lg file:border-0
               file:bg-green-50 file:px-4 file:py-2
               file:text-sm file:font-medium file:text-green-700
               hover:file:bg-green-100">

        <p class="mt-1 text-xs text-gray-500">
            JPG, JPEG, PNG, WEBP. Maksimal 2MB.
        </p>

        @error('image')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>


    {{-- Kandungan Kimia --}}
    <div>
        <label class="mb-2 block text-sm font-medium text-gray-700">
            Kandungan Kimia
        </label>

        <textarea name="chemical_content" class="ckeditor w-full">{{ old('chemical_content', $plant->chemical_content ?? '') }}</textarea>
    </div>


    {{-- Khasiat --}}
    <div>
        <label class="mb-2 block text-sm font-medium text-gray-700">
            Khasiat
        </label>

        <textarea name="benefits" class="ckeditor w-full">{{ old('benefits', $plant->benefits ?? '') }}</textarea>
    </div>


    {{-- Cara Pemanfaatan --}}
    <div>
        <label class="mb-2 block text-sm font-medium text-gray-700">
            Cara Pemanfaatan
        </label>

        <textarea name="usage" class="ckeditor w-full">{{ old('usage', $plant->usage ?? '') }}</textarea>
    </div>


    {{-- Efek Samping --}}
    <div>
        <label class="mb-2 block text-sm font-medium text-gray-700">
            Efek Samping
        </label>

        <textarea name="side_effects" class="ckeditor w-full">{{ old('side_effects', $plant->side_effects ?? '') }}</textarea>
    </div>


    {{-- Referensi --}}
    <div>
        <label class="mb-2 block text-sm font-medium text-gray-700">
            Referensi
        </label>

        <textarea name="references" class="ckeditor w-full">{{ old('references', $plant->references ?? '') }}</textarea>
    </div>

</div>


{{-- CKEditor 5 --}}
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
    document.querySelectorAll('.ckeditor').forEach((element) => {

        ClassicEditor
            .create(element, {
                toolbar: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    '|',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'blockQuote',
                    'insertTable',
                    '|',
                    'undo',
                    'redo'
                ]
            })
            .catch(error => {
                console.error(error);
            });

    });
</script>
<script>
    const imageInput = document.getElementById('image-input');
    const imagePreview = document.getElementById('image-preview');
    const imagePreviewContainer = document.getElementById('image-preview-container');

    if (imageInput) {
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (!file) {
                return;
            }

            // Pastikan file adalah gambar
            if (!file.type.startsWith('image/')) {
                imageInput.value = '';
                imagePreviewContainer.classList.add('hidden');
                return;
            }

            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreviewContainer.classList.remove('hidden');
            };

            reader.readAsDataURL(file);
        });
    }
</script>
