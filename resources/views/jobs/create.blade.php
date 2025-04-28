<x-layout>
    <h1>Create Job</h1>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Warsaw" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="php, js, laravel" />

        <x-forms.button>Add</x-forms.button>

    </x-forms.form>

</x-layout>
