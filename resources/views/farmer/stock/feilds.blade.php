<div class="col-md-12">
    <div class="form-group">
        {{ Form::label('item', 'Name:')}}
        {{                                              Form::text('item',$pro->item, ['class' => 'form-control border-input'])}}
    </div>

    <div class="form-group">
        {{ Form::label('Amount', 'Amount:')}}
        {{                                              Form::text('amount',$pro->amount, ['class' => 'form-control border-input'])}}

        
       
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Product Description:')}}
        {{                                              Form::textarea('description',$pro->description, ['class' => 'form-control border-input','cols'=>'30' ,'rows'=>'10','placeholder'=>'Product Description'])}}

        
    </div>

    <div class="form-group">
        {{ Form::label('quantity', 'quantity:')}}
        {{                                              Form::text('quantity',$pro->quantity, ['class' => 'form-control border-input'])}}

        
       
    </div>

   
    <div class="form-group">
        {{ Form::label('date till', 'Date_till:')}}
         {{-- {{                                              Form::file('image', ['class' => 'form-control border-input'])}} --}}
        {{Form::date('available_till', \Carbon\Carbon::now(),['class' => 'form-control border-input'])}}
       

</div>
