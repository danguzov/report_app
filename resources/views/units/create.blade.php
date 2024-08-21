<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Креирај Наставну Јединицу') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Унеси број и име наставне јединице") }}
        </p>
    </header>

    <form method="post" action="{{ route('unit.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="unit_number" />
            <x-text-input id="unit_number" name="unit_number" type="number" class="mt-1 block w-full" placeholder="Унеси редни број наставне јединице"/>
            <x-input-error :messages="$errors->get('unit_number')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="unit_name"/>
            <x-text-input id="unit_name" name="unit_name" type="text" class="mt-1 block w-full" placeholder="Унеси назив наставне јединице"/>
            <x-input-error :messages="$errors->get('unit_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="theme_id" value="Изабери тему" />
            <select id="theme_id" name="theme_id" class="mt-1 block w-full">
                @foreach ($themes as $theme)
                    <option value="{{ $theme->id }}">{{ $theme->theme_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('theme_id')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Сачувај') }}</x-primary-button>
        </div>
    </form>

</section>