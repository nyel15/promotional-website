
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/palawan-logo.webp">
    <title>Its more fun in Palawan!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="styles/homepage.css">
</head>
<body>
<div class="content container">
    <div class="container commentsContainer">
        @foreach($comments as $comment)
        <div class="card m-auto my-3">
            <div class="card-body">
                <p>Comment:</p>
                <p class="card-text fw-bold">
                    {{ $comment->comment }}
                </p>
                <small class="text-body-secondary">
                <img src="img/profile.webp" class="profilePic">
                    <p>name: <em>{{ $comment->name }}</em> <br>created
                        at: {{ $comment->created_at->format('g:i a') }}</p>
                </small>
                <form action="{{ route('destroy', $comment->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete?')">
                    delete
                </button>
                </form> 
            </div>
        </div>
        @endforeach
    </div>
    <div>
        <h1 class="text-center fw-bold">comments and recommendations</h1>
        <form action="{{ route('comment') }}" method="post">
            @csrf
            <div class="m-auto text-center" style="max-width: 500px;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') validate @enderror" name="name" placeholder="name" value="{{ old('name') }}">
                </div>
                @error('name')
                <p class="validation">{{ $errors->first('name') }}</p>
                @enderror
                <input class="form-control @error('comment') validate @enderror" name=" comment" rows="3"
                    placeholder="insert comment..." value="{{ old('comment') }}" type="text"></input>
                @error('comment')
                <p class="validation">{{ $errors->first('comment') }}</p>
                @enderror
                <input type="submit" class="btn btn-success mt-3 col-6 btn-sm" name="submit">
            </div>
        </form>
    </div>
</div>
<div class="footer">
    <div>
        <img src="img/palawan-footer.png" class="img-fluid" style="width: 100px;">
        <img src="img/map1.png" class="img-fluid" style="width: 150px;">
    </div>
    <div class="text-center">
        <p><em>“Palawan: Every Island an Adventure”</em></p>
        <small><p>@2023 acaciasoft-corp. - All rights reserved</p></small>
    </div>
    <div>
        <h5>Pages</h5>
        <small><p>
            <a href="{{ route('overview') }}" class="pageLinks">Home</a> <br>
            <a href="{{ route('about') }}" class="pageLinks">About</a> <br> 
            <a href="{{ route('touristInfo') }}" class="pageLinks">Tourist Information</a> <br>
            <a href="{{ route('delicacies') }}" class="pageLinks">Gallery</a>
        </p></small>
    </div>
    <div>
        <h5>Reference</h5>
        <small><p>
            <a href="https://www.travel-palawan.com/cultural-heritage/history/" target="_blank" class="pageLinks">History</a><br>
            <a href="https://www.rappler.com/newsbreak/iq/236142-things-to-know-about-palawan/" target="_blank" class="pageLinks">Trivias</a><br>
            <a href="https://www.rappler.com/newsbreak/iq/236142-things-to-know-about-palawan/" target="_blank" class="pageLinks">Population</a><br>
            <a href="https://guidetothephilippines.ph/articles/what-to-experience/palawan-tourist-spots#21-historical-tour-in-culion" target="_blank" class="pageLinks">Tourist Spots</a><br>
            <a href="https://tasteoftheplace.com/8-local-delicacies-to-try-when-visiting-puerto-princesa-palawan/" target="_blank" class="pageLinks">Delicacies</a><br>
            <a href="https://www.travel-palawan.com/cultural-heritage/handicraft-and-souvenirs/" target="_blank" class="pageLinks">Products</a><br>
        </p></small>
    </div>
    <div class="text-justify">
        <h5>Contact</h5>
        <small><p>contact number : 0951 727 2240 <br> email : roniel.achas@acacia-soft.com</p></small>
        <a href="https://www.facebook.com/rroonniieell" target="_blank"><img src="img/facebook.png"
                class="img fluid mx-2" style="width: 24px"></a>
        <a href="https://www.instagram.com/nyel_achas/" target="_blank"><img src="img/instagram.png"
                class="img fluid mx-2" style="width: 24px"></a>
        <a href="https://github.com/nyel15"  target="_blank"><img src="img/github.png" class="img fluid mx-2" style="width: 24px"></a>
    </div>
</div>

</body>
</html>

