<div class="col-md-12">
    {{ Form::hidden('seller_id', $stock->farmer_id) }}
    {{ Form::hidden('item_id', $stock->item_id) }}
    {{ Form::hidden('qty', $stock->quantity) }}  
    <div class="form-group">
        {{ Form::label('Quantity', 'Quantity:')}}
        {{                                              Form::text('Quantity',$pro->Quantity, ['class' => 'form-control border-input'])}}

        
       
    </div>
    <div class="form-group">
        {{ Form::label('cprice', 'Price You want to offer:')}}
        {{                                              Form::text('cprice',$pro->cprice, ['class' => 'form-control border-input'])}}

        
       
    </div>

   
  