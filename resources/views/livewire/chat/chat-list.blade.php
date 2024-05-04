<div>
    <div class="p-3 user-chat-topbar">
        <div class="row align-items-center">
            <div class="col-sm-4 col-8">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 d-block d-lg-none me-3">
                        <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1">
                            <i class="ri-arrow-left-s-line align-bottom"></i>
                        </a>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                <img src="{{ auth()->user()->fotografia ?? 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name='+auth()->user()->name }}" alt="{{auth()->user()->name}}" class="rounded-circle avatar-xs">
                                <span class="user-status"></span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username" data-bs-toggle="offcanvas" href="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">
                                        {{ auth()->user()->name }}</a></h5>
                                <p class="text-truncate text-muted fs-14 mb-0 userStatus">
                                    <small>Online</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-4">
                <ul class="list-inline user-chat-nav text-end mb-0">
                    <li class="list-inline-item m-0">
                        <div class="dropdown">
                            <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search icon-sm">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </button>
                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                <div class="p-2">
                                    <div class="search-box">
                                        <input type="text" class="form-control bg-light border-light" placeholder="Search here..." onkeyup="searchMessages()" id="searchMessage">
                                        <i class="ri-search-2-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="list-inline-item d-none d-lg-inline-block m-0">
                        <button type="button" class="btn btn-ghost-secondary btn-icon" data-bs-toggle="offcanvas" data-bs-target="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info icon-sm">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg>
                        </button>
                    </li>

                    <li class="list-inline-item m-0">
                        <div class="dropdown">
                            <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-sm">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item d-block d-lg-none user-profile-show" href="#"><i class="ri-user-2-fill align-bottom text-muted me-2"></i>
                                    View Profile</a>
                                <a class="dropdown-item" href="#"><i class="ri-inbox-archive-line align-bottom text-muted me-2"></i>
                                    Archive</a>
                                <a class="dropdown-item" href="#"><i class="ri-mic-off-line align-bottom text-muted me-2"></i>
                                    Muted</a>
                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="chatlist_body">

        @if (count($conversations) > 0)
            @foreach ($conversations as $conversation)
                <div class="chatlist_item " wire:key='{{$conversation->id}}' wire:click="$emit('chatUserSelected', {{$conversation}},{{$this->getChatUserInstance($conversation, $name = 'id') }})">
                    <div class="chatlist_img_container">
                        <img src="https://ui-avatars.com/api/?name={{$this->getChatUserInstance($conversation, $name = 'name')}}"
                            alt="">
                    </div>

                    <div class="chatlist_info">
                        <div class="top_row">
                            <div class="list_username">{{ $this->getChatUserInstance($conversation, $name = 'name') }}
                            </div>
                            <span class="date">
                                {{ $conversation->messages->last()?->created_at->shortAbsoluteDiffForHumans() }}</span>
                        </div>

                        <div class="bottom_row">

                            <div class="message_body text-truncate">
                                {{ $conversation->messages->last()->body }}
                            </div>
                 
                            @php
                                if(count($conversation->messages->where('read',0)->where('receiver_id',Auth()->user()->id))){

                             echo ' <div class="unread_count badge rounded-pill text-light bg-danger">  '
                                 . count($conversation->messages->where('read',0)->where('receiver_id',Auth()->user()->id)) .'</div> ';

                                }

                            @endphp

                        </div>
                    </div>
                </div>



            @endforeach


        @else
            you have no conversations
        @endif

    </div>
</div>
