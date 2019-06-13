<div class="col-md-4">
        <div class="card mb-4 shadow-sm">

          <img src="{{ $postItem->img_url }}" alt="Bildes nav!">

          <video width="400" controls>
                <source src="{{ $postItem->video }}" type="">
                {{-- <source src="mov_bbb.ogg" type="video/ogg" vai type="video/mp4"> --}}
              </video>

          <div class="card-body">
            <p class="card-text">{{ $postItem->excerpt }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">

                {{-- slīpsvītra nozīmē, ka jāsāk no nulles, reizēm gadās aizmirst --}}
                {{-- atkarībā no tā, kādu bloga ierakstu gribu atvērt, tādam id tur ir jābūt --}}
                <a href="/blog/{{ $postItem->id }}">Lasīt, link</a>

                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>                
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
