@extends('layouts.main')

@section('content')

<p><span class=" titulo-paginas font-weight-bold">Informações de Contato</span>
    <div class="row">   
       <div class="col-12">
             
           <ul class="list-unstyled"><li><span class="text-primary">Administração</span>
                   <ul class="style-none">
                       <li>Paulo Rogerio dos Santos - CRECI 163 496 F</li>
                       <li>Guilherme Contching, 2001 Sala 8 - Cep. 02113-017 </li>
                       <li>Vila Maria - Sâo Paulo</li>
                       <li>Tel: (11)2631-4959</li> 
                   </ul>
               </li>
           </ul>
           </div>
           <div class="col-12">
           <ul class="list-unstyled">
               <li><span class="text-primary">Negócios e Vendas no Guarujá</span>
                   <ul class="style-none">
                       <li>Andrea Possa</li>
                       <li>Av. dos Caiçaras, 31 - CEP: 11420-440 </li>
                           <li> Jardim Guaiúba - Guarujá</li>
                       <li>Telefone: (13) 3354-2278 / Celular: (13) 99779-1954</li>   
                   </ul>
               </li>
           </ul>          
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
        <textarea name="mensagem" cols="40" rows="3"  placeholder="Sua mensagem" class="form-control"></textarea>
        </div>
        <input type="submit" value="ENVIAR" class="btn btn-primary">
    </div>
    
    </form>
       </div>

@endsection
