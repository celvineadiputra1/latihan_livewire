<div>
    <form wire:submit.prevent="udpate">
        <div class="card mb-2">
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <input type="hidden" name="contactId" wire:model="contactId">
                            <input wire:model="name" type="text" name="" id="" class="form-control @error('name')
                                is-invalid
                            @enderror" placeholder="Name">
                            @error('name')
                                <span class="invalidate-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <input wire:model="phone" type="phone" name="" id="" class="form-control @error('phone')
                                is-invalid
                            @enderror" placeholder="Phone">
                        @error('phone')
                            <span class="invalidate-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-small btn-primary">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
