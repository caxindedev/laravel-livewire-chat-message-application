<div>
    @if ($selectedConversation)
        <div class="chat-input-section p-3 p-lg-4">
            <form  wire:submit.prevent='sendMessage' id="chat-form" enctype="multipart/form-data">
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

                    {{-- inicio da caixa de mensagem --}}
                    <div class="col">
                        <div class="chat-input-feedback">
                            Please Enter a Message
                        </div>
                        <input type="text" wire:model='body'
                            class="form-control chat-input bg-light border-light" id="sendMessage"
                            placeholder="Escreva a sua mensagem..." autocomplete="off">
                    </div>
                    <!-- fim caixa de mensagem -->

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
        </div>
    @endif

</div>
