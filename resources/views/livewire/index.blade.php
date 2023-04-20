<div>
    <div class="col">
        <div class="col-md-3">
            <div class="card shadow bg-success" style="width: 100% list-group list-group-flush;">
                <div class="card-header">
                    <h5 class="text-left text-dark">Select Your Options</h5>
                    <div class="form-group mb-3">
                        <label for="search" class="text-dark">Search:</label>
                        <input type="text" placeholder="Search" class="form-control" wire:model.lazy="search" autocomplete>
                    </div>
                    <div class="form-group mb-3 text-dark">
                        <label for="genre">Genre</label>
                        <br>
                        <input type="checkbox" wire:model="checkGenre" value="Reggae" id="reggae">
                        <label for="reggae">Reggae</label>
                        <br>
                        <input type="checkbox" wire:model="checkGenre" value="Art Music"> Art Music<br>
                        <input type="checkbox" wire:model="checkGenre" value="K-Pop"> K-Pop<br>
                        <input type="checkbox" wire:model="checkGenre" value="Punk Rock"> Punk Rock<br>
                        <input type="checkbox" wire:model="checkGenre" value="Indie Rock"> Indie Rock<br>
                        <input type="checkbox" wire:model="checkGenre" value="Nostalgia"> Nostalgia<br>
                        <input type="checkbox" wire:model="checkGenre" value="Jazz"> Jazz<br>
                        <input type="checkbox" wire:model="checkGenre" value="Popular Music"> Popular Music<br>
                    </div>
                    <div class="form-group mb-3 text-dark">
                        <label for="location">Location:</label>
                        <select class="form-select" wire:model="selectLocation">
                            <option value="All">All</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Paris">Paris</option>
                            <option value="Canada">Canada</option>
                            <option value="Venice">Venice</option>
                            <option value="North America">North America</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Albania">Albania</option>
                        </select>
                    </div>

                    <div class="form-group mb-3 text-dark">
                        <label for="rating">Rating(s):</label>
                        <br>
                        <input type="checkbox" wire:model="checkRating" value="1">
                        @for ($i = 0; $i < 1; $i++)
                            <i class="fa fa-heart" style="color:red;"></i>
                        @endfor
                        <br>
                        <input type="checkbox" wire:model="checkRating" value="2">
                        @for ($i = 0; $i < 2; $i++)
                            <i class="fa fa-heart" style="color:red;"></i>
                        @endfor
                        <br>
                        <input type="checkbox" wire:model="checkRating" value="3">
                        @for ($i = 0; $i < 3; $i++)
                            <i class="fa fa-heart" style="color:red;"></i>
                        @endfor
                        <br>
                        <input type="checkbox" wire:model="checkRating" value="4">
                        @for ($i = 0; $i < 4; $i++)
                            <i class="fa fa-heart" style="color:red;"></i>
                        @endfor
                        <br>
                        <input type="checkbox" wire:model="checkRating" value="5">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fa fa-heart" style="color:red;"></i>
                        @endfor
                        <br>
                    </div>


                    <div class="form-group mb-3 text-dark">
                        <label for="sort">Sort By:</label>
                        <select wire:model="sort" class="form-select" id="sort">
                            <option value="low_to_high">Price: Low to High</option>
                            <option value="high_to_low">Price: High to Low</option>
                        </select>
                    </div>

                    <button class="btn btn-outline-light form-control text-dark" wire:click="resetFilters()">Reset Filters</button>

                </div>
            </div>
        </div>
        <div class="col md-8">
            <h3 class="text-dark">My Playlist</h3>
            @include('livewire.delete')
            @include('livewire.create')
            @include('livewire.edit')
            @include('livewire.view')
            <hr>
            <h6 class="text-dark"> <span class="badge badge-info">{{ $musicCount }}</span></h6>
            @if (session('message'))
                <div class="alert bg-success text-warning text-center">
                    <h6>{{ session('message') }}</h6>
                </div>
            @endif
            <a href="" class="btn btn-success fa fa-plus"data-toggle="modal"
                data-target="#addMusic">Add Playlist</a>
            <table class="table table-boardered table-hover bg-light" style="width:30%">
                <thead class="bg-danger">
                    <tr>
                        <th class="text-dark">
                            ID.
                        </th>
                        <th class="text-dark">
                            Picture
                        </th>
                        <th class="text-dark">
                            Song Title
                        </th>
                        <th class="text-dark">
                         Composer
                        </th>
                        <th class="text-dark">
                            Location
                        </th>
                        <th class="text-dark">
                            Price
                        </th>
                        <th class="text-dark">
                            Genre
                        </th>
                        {{--  <th class="text-dark">
                            Rating(s)
                        </th>  --}}
                        <th class="text-dark">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($musicPlaylists as $music)
                        <tr>
                            <td class="text-dark">
                                {{ $music->id }}
                            </td>
                            <td>
                                <img src="{{ Storage::url($music->image) }}"
                                    style="height: 300px; width: 300px; border-radius: 900px;" alt="{{ $music->title }}">
                            </td>
                            <td class="text-dark">
                                {{ $music->title }}
                            </td>
                            <td class="text-dark">
                                {{ $music->author }}
                            </td>
                            <td class="text-dark">
                                {{ $music->location }}
                            </td>
                            <td class="text-dark">
                                {{ number_format($music->price, 2) }}
                            </td>
                            <td class="text-dark">
                                {{ $music->genre }}
                            </td>
                            {{--  <td class="text-dark">
                                @for ($i = 0; $i < $music->rating; $i++)
                                    <i class="fa fa-heart" style="color:red; font-size: 8px;"></i>
                                @endfor
                            </td>  --}}
                            <td>
                                <a href="" class="btn btn-warning" data-toggle="modal"
                                    data-target="#viewMusic" wire:click="view({{ $music->id }})">Show Profile</a>
                                <a href="" class="btn btn-primary" data-toggle="modal"
                                    data-target="#updateMusic" wire:click="edit({{ $music->id }})">Update Profile</a>
                                <a href="" class="btn btn-danger" data-toggle="modal"
                                    data-target="#deleteMusic" wire:click="delete({{ $music->id }})">Delete Profile</a>
                            </td>
                        </tr>
                    @endforeach
                    @if ($musicPlaylists->count() === 0)
                        <td colspan="9" class="text-center text-warning">No data found</td>
                    @endif
                </tbody>
            </table>
        {{ $musicPlaylists->links() }}
        </div>
    </div>
</div>
