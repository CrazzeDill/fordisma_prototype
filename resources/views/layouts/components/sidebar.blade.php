<div class="col-2 sidebar-left sticky-top">
    <div class="feeds">
        <p>Feeds</p>
        <div class="sl-items" data-link="/home">
            <div class="rounded-circle d-flex align-items-center justify-content-center">
                <img src="/logos/house-solid.svg">
            </div>
            <span>Home</span>
        </div>
        <div class="sl-items" data-link="/popular">
            <div class="rounded-circle d-flex align-items-center justify-content-center">
                <img src="/logos/trendingup.svg">
            </div>
            <span>Popular</span>
        </div>
        <div class="sl-items" data-link="/all">
            <div class="rounded-circle d-flex align-items-center justify-content-center">
                <img src="/logos/allthread.svg">
            </div>
            <span>All</span>
        </div>
        <p class="mt-5">Followed topics</p>
        @foreach ($topiks as $topik)
        <div class="sl-items" data-link="/t/{{str_replace(' ','_',$topik['name']) }}">
            <div class="rounded-circle d-flex align-items-center justify-content-center" style="background-color: #B7B7B7;">
            </div>
            <span>{{$topik['name']}}</span>
        </div>
        @endforeach
        
    </div>
</div>