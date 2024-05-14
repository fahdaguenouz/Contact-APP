{{--A l'appel de cette vue , il est imperatif de lui passer une liste
de compagnies $companies--}}
<form method="get" action="{{ route('contacts') }}" id="formfilter">
    <select id="selectfilter" name="company_id">
        <option value="0">Selectionner compagnie</option>
        @foreach($companies as $company)
            <option value="{{ $company['id'] }}">{{ $company['Name'] }}</option>
        @endforeach
    </select>
</form>
<script>
    document.getElementById('selectfilter').addEventListener(
        'change',function (){
        document.getElementById('formfilter').submit()
    })
</script>

