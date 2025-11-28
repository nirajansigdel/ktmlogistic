<style>
    
.teamcard {
    background: white;
    box-shadow: 0 4px 10px -12px rgba(0, 0, 0, .66);
    transition: box-shadow 0.2s ease, transform 0.2s ease;
    padding: 20px 20px;
    /* height: 370px; */
}


/* Team Page */
.team_card {
  width: 100%;
  overflow: hidden;
  text-align: center;
  border: none !important;
background-color:var(--bs-yellow);
color: rgba(255, 255, 255, 0.885);


}

.team_card .image {
  height: 250px;
  width: 100%;
  object-fit: contain;
  /* object-position: ; */
}
.team_card i {
  font-size: 30px !important;
  margin: 0.6rem;
  color: white;
}
.team_name {
  font-size: 20px;
  font-weight: 700;
  text-transform: capitalize

}


.team_position {
  font-size: 16px;
  font-weight: 500;
  text-transform: uppercase;
}

.team_email {
  font-size: 15px;
  font-weight: 500;
}

.team_contact {
  font-size: 15px;
  font-weight: 500;
}

.team_card .card-body{
    height: 100px;
}


</style>
<section class="team-members py-2">
    <div class="container">
        <h2 class="text-center section_title">Advisory Team</h2>

        @if ($advisorsPosts->isNotEmpty())
            <section class="multi_post">

                <div class="multi_poster row justify-content-center forpadding">


                 
                    @foreach ($advisorsPosts as $member)
                    <?php 
                    $content = preg_replace('/<p[^>]*><\\/p[^>]*>/', '', $member->description);
               ?>
                        <div class="teamcard col-md-3">
                            {{-- <a href="#"> --}}
                                <div class="multi_post_image">
                                    @if ($member->image)
                                        <img src="{{ asset('uploads/post/' . $member->image) }}" class="card-img-top"
                                            alt="{{ $member->title }}">
                                    @else
                                        <img src="https://via.placeholder.com/500" class="card-img-top"
                                            alt="Team Member Image">
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $member->title }}</h5>
                                    {!! $content !!}

                                </div>
                            {{-- </a> --}}
                        </div>
                    @endforeach
                </div>

            </div>
            </section>
        @else
            <p class="alert alert-warning">No Advisury Team members found.</p>
        @endif

     