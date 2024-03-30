<form class="md:w-1/2 space-y-5" novalidate>
    @csrf
    <h1 class="font-bold text-lg mb-3 text-center">Formulario de Reservación</h1>
    <div>
        <x-input-label for="email" :value="__('Correo Electrónico')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" wire:model="email" :value="$user_email"
            placeholder="Correo electrónico para mandar la confirmación de la reservación" disabled />
    </div>
    <div>
        <x-input-label for="room" :value="__('Seleccione una sala')" />
        <select wire:model="room" id="room"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 w-full">
            <option disabled selected>-- Seleccione una sala --</option>
            @foreach ($rooms as $room)
            <option value="{{ $room->id }}">{{ $room->rooms_name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="date_in" :value="__('Seleccione una Fecha de Inicio')" />
        <x-text-input id="date_in" class="block mt-1 w-full" type="date" wire:model="date_in" :value="old('date_in')" />
    </div>
    <div>
        <x-input-label for="date_out" :value="__('Seleccione una Fecha de Fin')" />
        <x-text-input id="date_out" class="block mt-1 w-full" type="date" wire:model="date_out"
            :value="old('date_out')" />
    </div>
    <div>
        <x-input-label for="accommodation" :value="__('Seleccione el acomodo de sillas')" />
        <select wire:model="accommodation" id="accommodation"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 w-full">
            <option disabled selected>-- Seleccione un acomodo --</option>
            @foreach ($accommodations as $accommodation)
            <option value="{{ $accommodation->id }}">{{ $accommodation->accommodation_name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="reasons" :value="__('Especificaciones extras')" />
        <textarea wire:model="reasons" id="reasons" cols="30" rows="10"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 w-full"
            placeholder="Especificaciones extras para añadir a la sala (Limpieza, más sillas y/o mesas, etc..)"></textarea>
    </div>
    <x-primary-button>
        {{ __('Enviar Solicitud') }}
    </x-primary-button>
</form>