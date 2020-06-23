<div>
    <form wire:submit.prevent="store">
        <div class="card mb-2">
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <input wire:model="name" type="text" name="" id="" class="form-control" placeholder="Name">
                        </div>
                        <div class="col">
                            <input wire:model="phone" type="phone" name="" id="" class="form-control" placeholder="Phone">
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
