<div class="max-w-sm overflow-hidden rounded-xl bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl">
    <a href="{{ route('event.show', $event->id) }}">
        @if ($event->hasMedia('image'))
        <img class="rounded-t-lg" src="{{ $event->getFirstMediaUrl('image') }}" alt=""/>
        @else
        <img class="rounded-t-lg" src="https://cdn.britannica.com/96/115096-050-5AFDAF5D/Bellagio-Hotel-Casino-Las-Vegas.jpg" alt=""/>
        @endif
    </a>
    <div class="p-5">
      <a href="">
        <h3 class="text-gray-700 font-semibold text-lg mb-2">{{ $event->event_name }}</h3>
    </a>
      <p class="text-sm text-gray-500 mb-3">
        <span class="text-gray-500 mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 inline-block">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
            <line x1="16" y1="2" x2="16" y2="6" />
            <line x1="8" y1="2" x2="8" y2="6" />
            <line x1="3" y1="10" x2="21" y2="10" />
          </svg>
        </span>
        Date: {{ $event->date }}
      </p>
      <p class="text-sm text-gray-500">
        <p class="text-sm text-gray-500 mb-3">
            <span class="text-gray-500 mr-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock h-4 w-4 inline-block">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
            </span>
            Time:  {{ $event->time }}
          </p>
      <p class="text-sm text-gray-500">
        <span class="text-gray-500 mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 inline-block">
            <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z" />
            <circle cx="12" cy="10" r="3" />
          </svg>
        </span>
        Location: {{ $event->venue }}
      </p>
      <div class="mt-4">
        <a href="{{route('event.show', $event->id)}}">
            <button class="w-full rounded-md bg-indigo-600 py-2 text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">View</button>
        </a>
    </div>
    </div>
</div>
