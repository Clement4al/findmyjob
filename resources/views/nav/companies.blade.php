<x-layout>
   <div class="space-y-10">
    <section class="text-center pt-6">
        <h1 class="font-bold text-3xl">Companies Partnership</h1>
        
        <x-forms.form action="/search" class="mt-6">
            <x-forms.input :label="false" name="q" placeholder="Web developer..."/>
        </x-forms.form>
    </section>
        <section class="pt-10">
            <x-section-heading>Featured </x-section-heading>
                    <div class="grid lg:grid-cols-3 gap-8 mt-6">
                        @foreach ($employers as $employer)
                            <x-employer-card :$employer/>
                        @endforeach
                    </div>
        </section>

    </div>
</x-layout>

