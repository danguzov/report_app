<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Креирај Исход часа') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Унеси текст исхода за одговарајући час") }}
        </p>
    </header>

    <form method="post" action="{{ route('outcome.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="description" />
            <x-textarea id="description" name="description" class="mt-1 block w-full" placeholder="Унеси исход часа" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Сачувај') }}</x-primary-button>
        </div>
    </form>

</section>