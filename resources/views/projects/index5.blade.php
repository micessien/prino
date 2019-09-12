@extends('layouts.user')


@section('style')
	<style type="text/css">
		body{
			margin-top:40px;
		}

		.stepwizard-step p {
			margin-top: 10px;
		}

		.stepwizard-row {
			display: table-row;
		}

		.stepwizard {
			display: table;
			width: 100%;
			position: relative;
		}

		.stepwizard-step button[disabled] {
			opacity: 1 !important;
			filter: alpha(opacity=100) !important;
		}

		.stepwizard-row:before {
			top: 14px;
			bottom: 0;
			position: absolute;
			content: " ";
			width: 100%;
			height: 1px;
			background-color: #ccc;
			z-order: 0;

		}

		.stepwizard-step {
			display: table-cell;
			text-align: center;
			position: relative;
		}

		.btn-circle {
			width: 30px;
			height: 30px;
			text-align: center;
			padding: 6px 0;
			font-size: 12px;
			line-height: 1.428571429;
			border-radius: 15px;
		}
	</style>
@endsection
@section('content')
	<section>
		<div class="container">
			<div class="stepwizard">
				<div class="stepwizard-row setup-panel">
					<div class="stepwizard-step">
						<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
						<p>Etape 1</p>
					</div>
					<div class="stepwizard-step">
						<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
						<p>Etape 2</p>
					</div>
					<div class="stepwizard-step">
						<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
						<p>Etape 3</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 center no-padding">
					<form class="form-transparent-grey"
								method="POST" action="{{action('TonController@method')}}" enctype="multipart/form-data">
						<div class="row setup-content" id="step-1">
							<div class="row">
								<div class="col-lg-12">
									<h3>Etape 1</h3>
								</div>

								{{ csrf_field() }}

								<div class="col-lg-12 form-group">
									<label class="sr-only">Nom & Prénoms</label>
									<input type="text" name="fullname"  placeholder="Nom et prénoms"
										   required="required" class="form-control">
								</div>
								<div class="col-lg-6 form-group">
									<label class="sr-only">Occupation</label>
									<input type="text" name="profession"  placeholder="Occupation" class="form-control">
								</div>
								<div class="col-lg-6 form-group">
									<label class="sr-only">Phone</label>
									<input type="text" name="contact"  placeholder="Phone" class="form-control">
								</div>
								<div class="col-lg-6 form-group">
									<label class="sr-only">Email</label>
									<input type="text" name="email"  placeholder="Email" class="form-control">
								</div>
								<div class="col-lg-6 form-group">
									<label class="sr-only">Mot de passe</label>
									<input type="password" name="password"  placeholder="*****" class="form-control">
								</div>
								<div class="col-lg-6 form-group">
									<label class="sr-only">Pays</label>
									<input type="text" name="country"  placeholder="Côte d'ivoire"
																				required="required" class="form-control">
								</div>
								<div class="col-lg-12 form-group">
									<button class="btn btn-primary nextBtn pull-right" type="button" >Etape suivante</button>
								</div>
							</div>
						</div>

						<div class="row setup-content" id="step-2">
							<div class="row">
								<div class="col-lg-12">
									<h3>Etape 2</h3>
								</div>
								<div class="col-lg-12 form-group">
									<label class="sr-only">Biographie</label>
									<textarea name="biographie" class="form-control" placeholder="Biographie"></textarea>
								</div>
								<div class="col-lg-6 form-group">
									<label class="sr-only">Slogan</label>
									<input type="text" name="slogan"  placeholder="Slogan" class="form-control">
								</div>
								</div>
								<div class="col-lg-6 form-group">
									<label class="sr-only">Photo</label>
									<input type="file" name="media"  class="form-control">
								</div>
								<div class="col-lg-12 form-group">
									<button class="btn btn-primary nextBtn pull-right" type="button" >Etape suivante</button>
								</div>
							</div>
						</div>

						<div class="row setup-content" id="step-3">

							<div class="row">
								<div class="col-lg-12">
									<h3>Vie social</h3>
								</div>
								<div class="col-lg-6 form-group">
									<label class="sr-only">Profil facebook</label>
									<input type="text"  name="fb_link" placeholder="Lien vers votre profil ou page facebook" class="form-control">
								</div>
								<div class="col-lg-6 form-group">
									<label class="sr-only">Profil Twitter</label>
									<input type="text"  name="tw_link" placeholder="Lien vers votre profil twitter" class="form-control">
								</div>
								<div class="col-lg-6 form-group">
									<label class="sr-only">Instagram</label>
									 <input type="text"  name="instagram_link" placeholder="Lien vers votre compte instagram" class="form-control">
								</div>
								<div class="col-lg-12 form-group">
									<h4>Choix de categorie</h4>
									<fieldset id="group1">
										@foreach($tags as $tag)
											<div class="form-check">
												<input class="form-check-input" name="tags[]" value="{{$tag->id}}" id="defaultCheck1" type="checkbox">
												<label class="form-check-label" for="defaultCheck1">
													{{$tag->name}}
												</label>
											</div>
										@endforeach
									</fieldset>
								</div>
								<div class="col-lg-6 form-group">
									<div class="form-check">
										<input class="form-check-input" name="isAcceptGCU" value="1" checked="" id="defaultCheck1" type="checkbox">
										<label class="form-check-label" for="defaultCheck1">
											Je suis d'accord avec <a href="#" class="text-blue">les conditions d'utilisations</a>
										</label>
									</div>
								</div>
								<div class="col-lg-12 form-group">
									<button class="btn btn-success pull-right" type="submit" >Envoyer</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('script')
	<script type="text/javascript">
		$(document).ready(function () {

			var navListItems = $('div.setup-panel div a'),
				allWells = $('.setup-content'),
				allNextBtn = $('.nextBtn');

			allWells.hide();

			navListItems.click(function (e) {
				e.preventDefault();
				var $target = $($(this).attr('href')),
					$item = $(this);

				if (!$item.hasClass('disabled')) {
					navListItems.removeClass('btn-primary').addClass('btn-default');
					$item.addClass('btn-primary');
					allWells.hide();
					$target.show();
					$target.find('input:eq(0)').focus();
				}
			});

			allNextBtn.click(function(){
				var curStep = $(this).closest(".setup-content"),
					curStepBtn = curStep.attr("id"),
					nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
					curInputs = curStep.find("input[type='text'],input[type='url']"),
					isValid = true;

				$(".form-group").removeClass("has-error");
				for(var i=0; i<curInputs.length; i++){
					if (!curInputs[i].validity.valid){
						isValid = false;
						$(curInputs[i]).closest(".form-group").addClass("has-error");
					}
				}

				if (isValid)
					nextStepWizard.removeAttr('disabled').trigger('click');
			});

			$('div.setup-panel div a.btn-primary').trigger('click');
		});
	</script>
@endsection

