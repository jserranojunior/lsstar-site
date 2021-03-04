@extends('layouts.main')

@section('content')

<p><span class=" titulo-paginas font-weight-bold">Informações de Contato</span>
    <div class="row">   
        <div class="col-12">
            <ul class="list-unstyled">
               <li><span class="text-primary">Vendas</span>
                   <ul class="style-none">
                   <li>Paulo Rogerio dos Santos - CRECI 163 496 F</li>
                       <li>Av .General Rondon,179 - Lj 24 - CEP: 11420-030</li>
                           <li>Asturias - Guarujá - SP</li>
                       <li>Telefone: (13) 99779-1954</li>   
                   </ul>
               </li>
            </ul>          
            
        </div>
        <div class="col-12">             
           <ul class="list-unstyled"><li><span class="text-primary">Adm</span>
                   <ul class="style-none">
                       <li>Paulo Rogerio dos Santos - CRECI 163 496 F</li>
                       <li>Av. dos Caiçaras, 31 - CEP: 11420-440</li>
                       <li>Jardim Guaiúba - Guarujá - SP </li>
                       <li>Tel: (13) 3354-2278</li> 
                   </ul>
               </li>
            </ul>
        </div>
        <div class="col-12">        
        <ul class="list-unstyled"><li><span class="text-primary">E-mail</span>
                    <ul class="style-none">
                        <li>lsstar@lsstar.com.br</li>
                    </ul>
                </li>
            </ul>  
        </div>
    </div>
    <div class="row">
     
    <div class="col">
    <form action="{{url('/send')}}" method="post">
        <div class="form-group">
        <input type="text"  class="form-control" placeholder="Seu nome" name="nome"/>
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" id="telefone" placeholder="Seu telefone" name="telefone"/>
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Seu e-mail" name="email"/>
        </div>
        
        <div class="form-group">
        <textarea name="mensagem" cols="40" rows="2"  placeholder="Sua mensagem" class="form-control"></textarea>
        </div>
        <input type="submit" value="ENVIAR" class="btn btn-primary">
    </div>
    
    </form>
       </div>
<style>
.form-group {
    margin-bottom: 0.3rem! important;
}
</style>
@endsection
