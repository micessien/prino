@extends('layouts.user')


@section('style')
<style type="text/css">
	body {
		margin-top: 40px;
	}

	ul.list-inline li {
		margin-bottom: 14px;
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
		<div class="row">
			<div class="col-md-12 text-center" style="margin-top: 25% !important">
				<p>Merci d&#39;avoir postulé au Prix Innovation du Ministère du Pétrole, de l’Energie et des Energies Renouvelables #PIMPEER édition 2019.</p>
				<p>Votre candidature a bien été prise en compte par notre système et sera traitée prochainement.</p>
				<p>Vous recevrez le 9 décembre 2019 la notification des finalistes au cas ou votre candidature est retenue.</p>
				<ul class="list-inline">
					<li style="margin-bottom: 14px"><a href="/home">Allez à mon tableau de bord</a></li>
					<li><a href="{{ url('/') }}">Allez au site web</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function() {

		var navListItems = $('div.setup-panel div a'),
			allWells = $('.setup-content'),
			allNextBtn = $('.nextBtn');

		allWells.hide();

		navListItems.click(function(e) {
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

		allNextBtn.click(function() {
			var curStep = $(this).closest(".setup-content"),
				curStepBtn = curStep.attr("id"),
				nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
				curInputs = curStep.find("input[type='text'],input[type='url']"),
				isValid = true;

			$(".form-group").removeClass("has-error");
			for (var i = 0; i < curInputs.length; i++) {
				if (!curInputs[i].validity.valid) {
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