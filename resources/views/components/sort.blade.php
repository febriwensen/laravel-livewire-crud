@props(['sortDirection' => null, 'sortBy' => null, 'field' => null])

@if ($sortBy === $field)

    @if ($sortDirection === 'asc')
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="inline-flex text-purple-500 icon icon-tabler icons-tabler-outline icon-tabler-sort-ascending-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 9l3 -3l3 3" /><path d="M5 5m0 .5a.5 .5 0 0 1 .5 -.5h4a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-4a.5 .5 0 0 1 -.5 -.5z" /><path d="M5 14m0 .5a.5 .5 0 0 1 .5 -.5h4a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-4a.5 .5 0 0 1 -.5 -.5z" /><path d="M17 6v12" /></svg>
    @else
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="inline-flex text-purple-500 icon icon-tabler icons-tabler-outline icon-tabler-sort-descending-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 5m0 .5a.5 .5 0 0 1 .5 -.5h4a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-4a.5 .5 0 0 1 -.5 -.5z" /><path d="M5 14m0 .5a.5 .5 0 0 1 .5 -.5h4a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-4a.5 .5 0 0 1 -.5 -.5z" /><path d="M14 15l3 3l3 -3" /><path d="M17 18v-12" /></svg>
    @endif
    
@endif