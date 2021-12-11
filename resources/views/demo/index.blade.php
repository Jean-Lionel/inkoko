@extends('layouts.app')
@section('content')
<style type="text/css">
	@media print {
		.noPrint{
			display:none;
		}
	}
</style>
<div class="container-fluid">
	<h5 class="text-center">stimulation</h5>
	<form action="" class="noPrint">
		<div class="row">
			<div class="col-md-2">
				<div class="form-group {{ $errors->has('nombre_poule') ? 'has-error' : ''}}">
					<label for="nombre_poule" class="control-label">Nombre de Volaille</label>
					<input class="form-control" name="nombre_poule" type="number" id="nombre_poule" value="{{ isset($fournisseur->nombre_poule) ? $fournisseur->nombre_poule : ''}}" >
					{!! $errors->first('nombre_poule', '<p class="help-block">:message</p>') !!}
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group {{ $errors->has('prix_medicament') ? 'has-error' : ''}}">
					<label for="prix_medicament" class="control-label">P.U medicament </label>
					<input class="form-control" name="prix_medicament" type="number" id="prix_medicament" value="1000" >
					{!! $errors->first('prix_medicament', '<p class="help-block">:message</p>') !!}
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group {{ $errors->has('prix_vitamine') ? 'has-error' : ''}}">
					<label for="prix_vitamine" class="control-label">P.U Vitamine</label>
					<input class= "form-control" name="prix_vitamine" type="number" id="prix_vitamine" value="1000" >
					{!! $errors->first('prix_vitamine', '<p class="help-block">:message</p>') !!}
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group {{ $errors->has('periode') ? 'has-error' : ''}}">
					<label for="periode" class="control-label">{{ 'Periode en mois' }}</label>
					<input class="form-control" name="periode" type="number" id="periode" value="{{ isset($fournisseur->periode) ? $fournisseur->periode : ''}}" >
					{!! $errors->first('periode', '<p class="help-block">:message</p>') !!}
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group {{ $errors->has('qte_journalier') ? 'has-error' : ''}}">
					<label for="qte_journalier" class="control-label">Qté Journalière / 1 volaille ( en g) </label>
					<input class="form-control" name="qte_journalier" type="number" id="qte_journalier" value="30" >
					{!! $errors->first('qte_journalier', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group {{ $errors->has('qte_journalier') ? 'has-error' : ''}}">
					<label for="qte_journalier" class="control-label"> P.U Aliment/(Kg) </label>
					<input class="form-control" name="prix_aliment" type="number" id="prix_aliment" value="{{ isset($fournisseur->prix_aliment) ? $fournisseur->prix_aliment : ''}}" >
					{!! $errors->first('qte_journalier', '<p class="help-block">:message</p>') !!}
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group {{ $errors->has('date_debut') ? 'has-error' : ''}}">
					<label for="date_debut" class="control-label">{{ 'date_debut' }}</label>
					<input class="form-control" name="date_debut" type="date" id="date_debut" value="{{ isset($fournisseur->date_debut) ? $fournisseur->date_debut : ''}}" >
					{!! $errors->first('date_debut', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group {{ $errors->has('montant_oeuf') ? 'has-error' : ''}}">
					<label for="montant_oeuf" class="control-label">
						Montant / Oeuf
					</label>
					<input class="form-control" name="montant_oeuf" type="number" id="montant_oeuf" value="{{ isset($fournisseur->montant_oeuf) ? $fournisseur->montant_oeuf : ''}}" >
					{!! $errors->first('montant_oeuf', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
			<div class="col-md-2 mt-2">
				<div class="form-group">
					<label></label>
					<button type="submit" id="vaildate_btn" class="btn btn-primary">Valider</button>
				</div>
			</div>
		</div>
	</form>
	<div id="information">
	</div>
</div>

@stop
@section("javascript")
<script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

<script type="text/javascript">
	function sumTotalConsome(array){
		let sum = 0;
		for(let i =0; i < array.length ; i++ ){
			//console.log(array[i])
			sum += Number(array[i].qte_consome * 7)
		}
		return sum;
	}
	document.getElementById("vaildate_btn").addEventListener("click",function(e){
		e.preventDefault();
		const nombre_poule = $("#nombre_poule").val();
		const prix_medicament = $("#prix_medicament").val();
		const prix_vitamine = $("#prix_vitamine").val();
		const periode = $("#periode").val();
		const qte_journalier = $("#qte_journalier").val();
		const date_debut = $("#date_debut").val();
		const prix_aliment = $("#prix_aliment").val();
		const montant_oeuf = $("#montant_oeuf").val();
		if(Number(periode) < 0 || periode > 18){
			$("#periode").addClass('has-error')
			alert("Periode doit être entre 0 ET 18 Mais vous avez saisit : " + periode )
			return;
		}
		let data = extractData(nombre_poule, prix_medicament, prix_vitamine, periode,qte_journalier,date_debut, prix_aliment, montant_oeuf);
		showData(data)		
	})

	function showData(data){

		let totalConsome = data.map(o => (o.qte_consome * 7 * o.nombre_poule )).reduce((a, c) => { return a + c });

		let prix_kg = data[0].prix_aliment
		let prix_medicament = data[0].prix_medicament
		let montant_total_medicament = data[0].prix_medicament *
		 data[0].nombre_poule * data[0].periode
		let prix_total_vitamine = data[0].prix_vitamine * data[0].nombre_poule * data[0].periode

		let last_elemet = data.slice(-1)[0]




		let table = `
		<div class="row">
		<div><p><button onclick="window.print();" class="noPrint">Imprimer</button></p></div>
		<div class="col-md-4">
		<p>
			Total des Poules : ${data[0].nombre_poule}
		</p>
		<p>
		 Prix Medicament / 1 /moins : <b>${prix_medicament} </b>
		</p>

		<p>
			Montant Total des Medicaments : ${montant_total_medicament}<b> </b>
		</p>
		<p>
			Montant Total des Vitamines : <b> ${prix_total_vitamine}</b>
		</p>
		</div> 
		<div class="col-md-4">
		<p>
		Periode : ${data[0].periode} Mois
		</p>
		<p>
		Qté Journalière/ 1 : ${data[0].qte_consome} g
		</p>
		<p>
		Qté Total en Kg : 
		<b> ${convertToKg(totalConsome)} </b> 
		</p>

		<p>
			Prix par Kg : ${prix_kg} /Kg <b> TOTAL : ${convertToKg(totalConsome) * prix_kg }</b>
		</p>
		</div> 
		<div class="col-md-4">
		<p>Montant Total obtenue des oeufs : <b> ${
			last_elemet.montat_Totaloeuf}</b> </p>
			<h5></h5>
			</div> 
			</div>
			<table class="table table-responsive  table-responsive"> 
			<tr>
			<th> Semaine </th>
			<th> Date </th>
			<th> Nombre de poule </th>
			<th> Qté en g </th>
			<th> Qté total en Kg </th>
			<th> Qté Consomer en Kg </th>
			<th> Oeufs / Jours </th>
			<th> Montant Journalière </th>
			<th> Montant déjà obtenue </h>
			</tr>`
			let tr = "";
			let d_c = 0;
			let montat_ouef = 0;
			for(var i = 0, length1 = data.length; i < length1; i++){
				d_c += (data[i].qte_consome * 7);
				montat_ouef += (data[i].montat_ouef) * 7;

				tr += `
				<tr>
				<td class="text-right"> ${data[i].semanaine_numero} </td>
				<td class="text-right"> ${data[i].semanaine_details} </td>
				<td class="text-right"> ${data[i].nombre_poule} </td>
				<td class="text-right"> ${data[i].qte_consome} </td>
				<td class="text-right"> ${convertToKg(data[i].qte_consome * data[i].nombre_poule)} </td>
				<td class="text-right"> ${convertToKg(d_c)} </td>
				<td class="text-right"> ${data[i].nombreOeuf != 0 ? data[i].nombreOeuf : '' } </td>

				<td class="text-right"> ${data[i].montat_ouef != 0 ? data[i].montat_ouef : '' } </td>
				<td class="text-right"> ${montat_ouef != 0 ? montat_ouef : '' } </td>
				<tr>
				`
			}
			table += tr + '</table>'
			$("#information").html(table)
		}

		function convertToKg(el){
			return el/1000
		}
		function formatDate(d){
			return d.getDate() + "-" + (d.getMonth() + 1) +"-" + d.getFullYear();
		}
// nombre_poule=&prix_medicament=&prix_vitamine=&periode=&qte_journalier=&date_debut=
function extractData(nombre_poule, prix_medicament, prix_vitamine, periode,qte_journalier,date_debut, prix_aliment , montant_oeuf){
	let data = []
	const s_date = new Date(date_debut);
	var e_date = new Date(new Date(s_date).setMonth(s_date.getMonth()+ (periode * 1)));
	const Difference_In_Time = e_date.getTime() - s_date.getTime();
	const Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
	const nombre_semaine = Math.ceil( Difference_In_Days / 7);
	let alimentation = 0;
	let start_date = new Date(date_debut);
	let nombreOeuf = 0;
	let montat_Totaloeuf = 0;

	for(var i = 1; i <= nombre_semaine; i++){
			//console.log(i)
			let qte_consome = parseInt(qte_journalier)
			alimentation += parseInt(qte_consome)
			if(qte_journalier < 90)
				qte_journalier = (parseInt(qte_journalier) + (5 *1) )
			var s_df = formatDate(start_date)
			let date_fin = new Date(start_date.setDate(start_date.getDate() + 7));
			//var d_debut = start_date;
			var d_f = formatDate(date_fin);

			nombreOeuf = 0;
			if(i >25){
				nombreOeuf  =  Math.ceil(nombre_poule * 0.8)
				montat_Totaloeuf += (nombreOeuf * montant_oeuf ) * 7
			}

			let semaine = {
				semanaine_numero : i,
				semanaine_details : `${s_df} au ${d_f}`,
				qte_consome : qte_consome,
				nombre_poule : nombre_poule,
				nombreOeuf : nombreOeuf,
				prix_aliment : prix_aliment,
				prix_medicament : prix_medicament,
				prix_vitamine : prix_vitamine,
				montant_oeuf : montant_oeuf,
				periode : periode,
				montat_ouef : (nombreOeuf * montant_oeuf)  ,
				montat_Totaloeuf : montat_Totaloeuf
			}
			start_date = date_fin;

			data.push(semaine)
			//console.log(semaine)

		}
		//let montant_consome = alimentation * prix_aliment;
		//console.log(nombre_poule, prix_medicament, prix_vitamine, periode,qte_journalier,date_debut, prix_aliment)

		return data;

	}
	
</script>

@stop