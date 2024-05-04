<div class="messenger-sendCard">
    <form id="message-form" method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">
        @csrf
        <label><span class="fas fa-plus-circle"></span><input disabled='disabled' type="file" class="upload-attachment" name="file" accept=".{{implode(', .',config('chatify.attachments.allowed_images'))}}, .{{implode(', .',config('chatify.attachments.allowed_files'))}}" /></label>
        <button class="emoji-button"></span><span class="fas fa-smile"></button>
        <textarea readonly='readonly' name="message" class="m-send app-scroll" placeholder="Type a message.."></textarea>
        <button disabled='disabled' class="send-button"><span class="fas fa-paper-plane"></span></button>
    </form>
</div>
{{-- 
<div class="chat-input-section p-3 p-lg-4">

    <form id="chat-form" enctype="multipart/form-data">
        <div class="row g-0 align-items-center">
            <div class="col-auto">
                <div class="chat-input-links me-2">
                    <div class="links-list-item">
                        <button type="button"
                            class="btn btn-link text-decoration-none emoji-btn"
                            id="emoji-btn">
                            <i class="bx bx-smile align-middle"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="chat-input-feedback">
                    Please Enter a Message
                </div>
                <input type="text" class="form-control chat-input bg-light border-light"
                    id="chat-input" placeholder="Escreva a sua mensagem..."
                    autocomplete="off">
            </div>
            <div class="col-auto">
                <div class="chat-input-links ms-2">
                    <div class="links-list-item">
                        <button type="submit"
                            class="btn btn-info chat-send waves-effect waves-light">
                            <i class="ri-send-plane-2-fill align-bottom"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div> --}}