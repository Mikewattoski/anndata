<div class="col-md-12">
    <div class="form-group">
        {{ Form::label('Company name', 'Company Name:')}}
        {{                                              Form::text('name',$pro->name, ['class' => 'form-control border-input'])}}

        
    </div>

    <div class="form-group">
        {{ Form::label('Comppany no', 'Company no:')}}
        {{                                              Form::text('number',$pro->no, ['class' => 'form-control border-input'])}}

        
       
    </div>
    <div class="form-group">
        {{ Form::label('Phone no', 'Phone No:')}}
        {{                                              Form::text('Phone no',$pro->phone, ['class' => 'form-control border-input'])}}

        
       
    </div>

   
    <div class="form-group">
        {{ Form::label('file', 'File:')}}
         {{                                              Form::file('image', ['class' => 'form-control border-input'])}}
        
       

</div>
