@if ($create)
    <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px; background-color: #3490dc; color: #ffffff;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #f6993f;">
                    <h4 class="modal-title">Tambah User</h4>
                    <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
                        <span aria-hidden="true">&times;</span>
                    </span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama" style="color: #ffffff;">Nama</label>
                        <input wire:model="name" type="text" class="form-control" id="nama">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" style="color: #ffffff;">Email</label>
                        <input wire:model="email" type="email" class="form-control" id="email">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" style="color: #ffffff;">Password</label>
                        <input wire:model="password" type="password" class="form-control" id="password">
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="form-group">
                        <label for="ulangi_password" style="color: #ffffff;">Ulangi Password</label>
                        <input wire:model="password_confirmation" type="password" class="form-control" id="ulangi_password">
                        @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between" style="background-color: #f6993f;">
                    <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal" style="color: #ffffff;">Batal</span>
                    <span type="button" wire:click="store" class="btn btn-success" style="color: #ffffff; background-color: #17c671;">Simpan</span>
                </div>
            </div>
        </div>
    </div>
@endif
