@if ($paginator->hasPages())
    <div class="dataTables_info">Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} entries</div>
    <div class="dataTables_paginate paging_simple_numbers">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="paginate_button previous disabled">Previous</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="paginate_button previous">Previous</a>
        @endif
        <span>
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="paginate_button current">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="paginate_button">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        </span>
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="paginate_button next">Next</a>
        @else
            <a class="paginate_button next disabled">Next</a>
        @endif
    </div>
@endif
