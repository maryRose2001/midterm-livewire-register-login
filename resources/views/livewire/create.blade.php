<div>
    <!-- Modal Add Music-->
    <div wire:ignore.self class="modal fade" id="addMusic" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-color: darkblue; color: white;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Music</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="title">Profile Image:</label>
                            <input type="file" class="form-control" id="image" wire:model="image" required>
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" style="width: 120px;" class="mt-1">
                            @endif
                            @error('image')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-between">
                        <div class="col-md-5 text-white">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="Title"
                                wire:model="title" required>
                            @error('title')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="author">Author:</label>
                            <input type="text" class="form-control" placeholder="Author" id="author"
                                wire:model="author" required>
                            @error('author')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                          </div>
                        <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" placeholder="Description" rows="3" wire:model="description"
                                required></textarea>
                            @error('description')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                         </div>
                        <div class="form-group d-flex justify-content-between">
                        <div class="col -md-5">
                            <label for="location">Location:</label>
                            <select class="form-control" id="location" wire:model="location" required>
                                <option selected hidden="true">Choose Location</option>
                                <option disabled>Choose Location</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Paris">Paris</option>
                                <option value="Canada">Canada</option>
                                <option value="Venice">Venice</option>
                                <option value="North America">North America</option>
                                <option value="Agentina">Argentina</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Albania">Albania</option>
                            </select>
                            @error('location')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="genre">Genre:</label>
                            <select class="form-control" id="genre" wire:model="genre" required>
                                <option selected hidden="true">Choose Genre</option>
                                <option disabled>Choose Genre</option>
                                <option value="Reggae">Reggae</option>
                                <option value="Art Music">Art Music</option>
                                <option value="K-Pop">K-Pop</option>
                                <option value="Punk Rock">Punk Rock</option>
                                <option value="Indie Rock">Indie Rock</option>
                                <option value="Nostalgia">Nostalgia</option>
                                <option value="Jazz">Jazz</option>
                                <option value="Popular Music">Popular Music</option>
                            </select>
                            @error('genre')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                         </div>
                        <div class="form-group d-flex justify-content-between">
                         <div class="col -md-5">
                            <label for="price">Price:</label>
                            <input type="range" class="form-range" max="10000" min="1" step="1"
                                id="price" placeholder="Price" wire:model="price" required>
                            <div class="input-group-append">
                                <span class="input-group-text">₱ {{ number_format($price, 2) }}</span>
                            </div>
                            @error('price')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                    
                        <div class="col-md-6">
                            <label for="rating">Rating(s): {{ $rating }}</label>
                            <input type="range" class="form-range" max="5" min="0" step="1"
                                id="rating" placeholder="Rating" wire:model="rating" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    Rating(s):&nbsp;
                                    @for ($i = 0; $i < $rating; $i++)
                                        <i class="fa fa-heart" style="color: red;"></i>
                                    @endfor
                                </span>
                            </div>
                            @error('rating')
                                <span class="text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                           </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" wire:click="addMusic()">Add to Music
                        Playlist</button>
                    <button class="btn btn-outline-warning" wire:click="resetInputs()">Reset Inputs</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
