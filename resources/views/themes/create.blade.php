<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Креирај Наставну Тему') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Унеси број наставне теме и име наставне теме") }}
        </p>
    </header>

    <form method="post" action="{{ route('theme.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="theme_number" />
            <x-text-input id="theme_number" name="theme_number" type="number" class="mt-1 block w-full" placeholder="Унеси редни број наставне теме"/>
            <x-input-error :messages="$errors->get('theme_number')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="theme_name"/>
            <x-text-input id="theme_name" name="theme_name" type="text" class="mt-1 block w-full" placeholder="Унеси име наставне теме"/>
            <x-input-error :messages="$errors->get('theme_name')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Сачувај') }}</x-primary-button>
        </div>
    </form>
</section>