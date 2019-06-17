@extends('layout.app')
@section('content')
  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Post-->
      <section class="mt-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Featured Image-->
            <div class="card mb-4 wow fadeIn">

              <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(144).jpg" class="img-fluid" alt="">

            </div>
            <!--/.Featured Image-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header font-weight-bold">
                <span>Posts</span>
                {{-- <span class="pull-right">
                  <a href="">
                    <i class="fab fa-facebook-f mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-twitter mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-instagram mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-linkedin-in mr-2"></i>
                  </a>
                </span> --}}
              </div>

              <!--Card content-->
              @if (!empty($getposts))
              	
              @foreach ($getposts as $getpost)
              	 <div class="card-body">

                <div class="media d-block d-md-flex mt-3">
                  <a href="#">
                  	<img class="d-flex mb-3 mx-auto z-depth-1" src="http://localhost/blog/{{($getpost->image)}}"
                    alt="Generic placeholder image" style="width: 100px;">
                  </a>
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <a href="#">
                    	<h5 class="mt-0 font-weight-bold">{{$getpost->title}}
                    </h5>
                    </a>
                    {{$getpost->description}}
                  </div>
                </div>

              </div>
              @endforeach
              @else

              <div class="card-body">

                <div class="media d-block d-md-flex mt-3">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">No Any Posts</h5>
                  </div>
                </div>

              </div>
              @endif
              {{$getposts->links()}}
            </div>
            <!--/.Card-->

            <!--Card-->
            {{-- <div class="card mb-4 wow fadeIn">

              <!--Card content-->
              <div class="card-body">

                <p class="h5 my-4">That's a very long heading </p>


                <blockquote class="blockquote">
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <footer class="blockquote-footer">Someone famous in
                    <cite title="Source Title">Source Title</cite>
                  </footer>
                </blockquote>

                <p class="h5 my-4">That's a very long heading </p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                  ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                  consequuntur maiores sed eligendi.</p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                  ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                  consequuntur maiores sed eligendi.</p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                  ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                  consequuntur maiores sed eligendi.</p>

              </div>

            </div> --}}
            <!--/.Card-->

            <!--Card-->
            {{-- <div class="card mb-4 wow fadeIn">

              <div class="card-header font-weight-bold">
                <span>About author</span>
                <span class="pull-right">
                  <a href="">
                    <i class="fab fa-facebook-f mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-twitter mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-instagram mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-linkedin-in mr-2"></i>
                  </a>
                </span>
              </div>

              <!--Card content-->
              <div class="card-body">

                <div class="media d-block d-md-flex mt-3">
                  <img class="d-flex mb-3 mx-auto z-depth-1" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg"
                    alt="Generic placeholder image" style="width: 100px;">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Caroline Horwitz
                    </h5>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti
                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                    similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                    fuga.
                  </div>
                </div>

              </div>

            </div> --}}
            <!--/.Card-->

            <!--Comments-->
            {{-- <div class="card card-comments mb-3 wow fadeIn">
              <div class="card-header font-weight-bold">3 comments</div>
              <div class="card-body">

                <div class="media d-block d-md-flex mt-4">
                  <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" alt="Generic placeholder image">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Miley Steward
                      <a href="" class="pull-right">
                        <i class="fas fa-reply"></i>
                      </a>
                    </h5>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    <div class="media d-block d-md-flex mt-3">
                      <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg"
                        alt="Generic placeholder image">
                      <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="mt-0 font-weight-bold">Tommy Smith
                          <a href="" class="pull-right">
                            <i class="fas fa-reply"></i>
                          </a>
                        </h5>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque
                        ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                        sunt explicabo.
                      </div>
                    </div>

                    <!-- Quick Reply -->
                    <div class="form-group mt-4">
                      <label for="quickReplyFormComment">Your comment</label>
                      <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>

                      <div class="text-center">
                        <button class="btn btn-info btn-sm" type="submit">Post</button>
                      </div>
                    </div>


                    <div class="media d-block d-md-flex mt-3">
                      <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg"
                        alt="Generic placeholder image">
                      <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="mt-0 font-weight-bold">Sylvester the Cat
                          <a href="" class="pull-right">
                            <i class="fas fa-reply"></i>
                          </a>
                        </h5>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi
                        tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media d-block d-md-flex mt-3">
                  <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="Generic placeholder image">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Caroline Horwitz
                      <a href="" class="pull-right">
                        <i class="fas fa-reply"></i>
                      </a>
                    </h5>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti
                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                    similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                    fuga.
                  </div>
                </div>

              </div>
            </div> --}}
            <!--/.Comments-->

            <!--Reply-->
            <div class="card mb-3 wow fadeIn">
              <div class="card-header font-weight-bold">Leave a reply</div>
              <div class="card-body">
              	@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
              	@if (session('status'))
				    <div class="alert alert-success">
						<strong>Success!</strong> Good<br><br>
						<ul>{{ session('status') }}</ul>
					</div>
				@endif 

                <!-- Default form reply -->
                <form action="{{ route('comment.store') }}" method="post" enctype= multipart/form-data id="myform" >
                	@csrf
                  <!-- Comment -->
                  <div class="form-group">
                    <label for="replyFormComment">Your comment</label>
                    <textarea class="form-control" name="comment" id="comment" rows="5"></textarea>
                  </div>

                  <!-- Name -->
                  <label for="replyFormName">Your name</label>
                  <input type="text" id="name" name="name" class="form-control">

                  <br>

                  <!-- Email -->
                  <label for="replyFormEmail">Your e-mail</label>
                  <input type="text" id="email" name="email" class="form-control">
                  <br>
                  <!-- Email -->
                  <label for="image">Image</label>
                  <input type="file" id="image" name="image" class="form-control">


                  <div class="text-center mt-4">
                    <button class="btn btn-info btn-md" name="submit" type="submit">Post</button>
                  </div>
                </form>
                <!-- Default form reply -->



              </div>
            </div>
            <!--/.Reply-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!--Card: Jumbotron-->
            <div class="card blue-gradient mb-4 wow fadeIn">

              <!-- Content -->
              <div class="card-body text-white text-center">

                <h4 class="mb-4">
                  <strong>Learn Bootstrap 4 with MDB</strong>
                </h4>
                <p>
                  <strong>Best & free guide of responsive web design</strong>
                </p>
                <p class="mb-4">
                  <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video
                    and written versions available. Create your own, stunning website.</strong>
                </p>
                <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-md">Start
                  free tutorial
                  <i class="fas fa-graduation-cap ml-2"></i>
                </a>

              </div>
              <!-- Content -->
            </div>
            <!--Card: Jumbotron-->

            <!--Card : Dynamic content wrapper-->
            <div class="card mb-4 text-center wow fadeIn">

              <div class="card-header">Do you want to get informed about new articles?</div>

              <!--Card content-->
              <div class="card-body">

                <!-- Default form login -->
                <form>

                  <!-- Default input email -->
                  <label for="defaultFormEmailEx" class="grey-text">Your email</label>
                  <input type="email" id="defaultFormLoginEmailEx" class="form-control">

                  <br>

                  <!-- Default input password -->
                  <label for="defaultFormNameEx" class="grey-text">Your name</label>
                  <input type="text" id="defaultFormNameEx" class="form-control">

                  <div class="text-center mt-4">
                    <button class="btn btn-info btn-md" type="submit">Sign up</button>
                  </div>
                </form>
                <!-- Default form login -->

              </div>

            </div>
            <!--/.Card : Dynamic content wrapper-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header">Related articles</div>

              <!--Card content-->
              <div class="card-body">
              	@if (!empty($getRecentPosts))
              		@foreach ($getRecentPosts as $getRecentPost)
	                <ul class="list-unstyled">
	                  <li class="media">
	                    <img class="d-flex mr-3" src="http://localhost/blog/{{($getRecentPost->image)}}" alt="Generic placeholder image" style="width: 100px" >
	                    <div class="media-body">
	                      <a href="">
	                        <h5 class="mt-0 mb-1 font-weight-bold">{{$getRecentPost->title}}</h5>
	                      </a>
	                      {{$getRecentPost->description}}
	                    </div>
	                  </li>
	                </ul>              			
              		@endforeach
              	@endif

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Post-->

    </div>
  </main>
  <!--Main layout-->
@endsection