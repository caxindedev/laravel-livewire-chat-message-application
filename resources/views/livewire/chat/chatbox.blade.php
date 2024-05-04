<div>
    {{-- Stop trying to control. --}}

    @if ($selectedConversation)
        <div class="chatbox_header">

            <div class="return">
                <i class="bi bi-arrow-left"></i>
            </div>

            <div class="img_container">
                <img src="https://ui-avatars.com/api/?name={{ $receiverInstance->name }}" alt="">

            </div>


            <div class="name">
                {{ $receiverInstance->name }}
            </div>


            <div class="info">

                <div class="info_item">
                    <i class="bi bi-telephone-fill"></i>
                </div>

                <div class="info_item">
                    <i class="bi bi-image"></i>
                </div>

                <div class="info_item">
                    <i class="bi bi-info-circle-fill"></i>
                </div>
            </div>
        </div>

        <div class="chatbox_body">
            @foreach ($messages as $message)
                {{-- inicio --}}
                <li class="chat-list {{ auth()->id() == $message->sender_id ? 'left' : 'right' }}" id="1">
                    <div class="conversation-list">
                        <div class="chat-avatar">
                            <img src="assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-chat-content">
                            <div class="ctext-wrap">
                                <div class="ctext-wrap-content" id="1">
                                    <p class="mb-0 ctext-content"> {{ $message->body }}</p>
                                </div>
                                <div class="dropdown align-self-start message-box-drop">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"> <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item copy-message" href="#"><i
                                                class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                        <a class="dropdown-item delete-item" href="#"><i
                                                class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="conversation-name"><span class="d-none name">Frank
                                    Thomas</span><small
                                    class="text-muted time">{{ $message->created_at->format('m: i a') }}</small>
                                @php
                                    if ($message->user->id === auth()->id()) {
                                        if ($message->read == 0) {
                                            echo '<i class="bi bi-check2 status_tick "></i> ';
                                        } else {
                                            echo "<span class='text-success check-message-icon'>"+
                                                    "<i class='bx bx-check-double'></i>"+
                                                "</span><i class='bi bi-check2-all text-primary'></i>";
                                        }
                                    }
                                @endphp
                                
                            </div>

                        </div>
                    </div>
                </li>
                {{-- termina --}}
{{-- 
                <div class="msg_body  {{ auth()->id() == $message->sender_id ? 'msg_body_me' : 'msg_body_receiver' }}"
                    style="width:80%;max-width:80%;max-width:max-content">

                    {{ $message->body }}
                    <div class="msg_body_footer">
                        <div class="date">
                            {{ $message->created_at->format('m: i a') }}
                        </div>

                        <div class="read">
                            @php

                                if ($message->user->id === auth()->id()) {
                                    if ($message->read == 0) {
                                        echo '<i class="bi bi-check2 status_tick "></i> ';
                                    } else {
                                        echo '<i class="bi bi-check2-all text-primary  "></i> ';
                                    }
                                }

                            @endphp


                        </div>
                    </div>
                </div> --}}
            @endforeach

        </div>


        <script>
            $(".chatbox_body").on('scroll', function() {
                // alert('aahsd');
                var top = $('.chatbox_body').scrollTop();
                //   alert('aasd');
                if (top == 0) {

                    window.livewire.emit('loadmore');
                }

            });
        </script>


        <script>
            window.addEventListener('updatedHeight', event => {

                let old = event.detail.height;
                let newHeight = $('.chatbox_body')[0].scrollHeight;

                let height = $('.chatbox_body').scrollTop(newHeight - old);


                window.livewire.emit('updateHeight', {
                    height: height,
                });


            });
        </script>
    @else
        <div class="fs-4 text-center text-primary mt-5">
            no conversasion selected
        </div>




    @endif


    <script>
        window.addEventListener('rowChatToBottom', event => {

            $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight);

        });
    </script>


    <script>
        $(document).on('click', '.return', function() {


            window.livewire.emit('resetComponent');

        });
    </script>


    <script>
        window.addEventListener('markMessageAsRead', event => {
            var value = document.querySelectorAll('.status_tick');

            value.array.forEach(element, index => {


                element.classList.remove('bi bi-check2');
                element.classList.add('bi bi-check2-all', 'text-primary');
            });

        });
    </script>
</div>
