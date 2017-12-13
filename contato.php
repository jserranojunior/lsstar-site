<?php include('header.php'); ?>



 <div class=" col-md-offset-1 col-md-10 col-xs-12">
     <form action="email.php" method="post">  
         
     <h3 class="text-center">Informações de contato</h3>
     <div class="col-xs-6">
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
         <textarea name="mensagem" cols="40" rows="7"  placeholder="Sua mensagem" class="form-control"></textarea>
         </div>
         <input type="submit" value="ENVIAR" class="btn btn-primary">
     </div>
     
     </form>

<div class="col-xs-6">
    <ul class="list-unstyled"><li><span class="text-primary">E-mail</span>
            <ul class="style-none">
                <li>lsstar@lsstar.com.br</li>
            </ul>
        </li>
    </ul>
    
    <ul class="list-unstyled"><li><span class="text-primary">Administração</span>
            <ul class="style-none">
                <li>Paulo Rogerio dos Santos - CRECI 163 496 F</li>
                <li>Rua Dr. Afonso Vergueiro 627 - Tel: (11)2631-4959</li>
                <li>Vila Maria - Sâo Paulo</li>
            </ul>
        </li>
    </ul>
    
    <ul class="list-unstyled">
        <li><span class="text-primary">Representação no Guarujá</span>
            <ul class="style-none">
                <li>Av. dos Caiçaras, 31 - Tel: (11)99971-2869</li>
                <li>Jardim Guaiúba - Guarujá</li>
            </ul>
        </li>
    </ul>
    
    <ul class="list-unstyled"><li><span class="text-primary">Negócios e Vendas no Guarujá</span>
            <ul class="style-none">
                <li>Silvio - Tel: (13)98177-5150</li>
                 <li>Acivaldo - Tel: (13)99607-9597</li>
             </ul>
        </li>
    </ul>
    
    <ul class="list-unstyled"><li><span class="text-primary">Construtora Associada</span>
            <ul class="style-none">
                 <li>J.A. Empreiteira ME - (13)99607-9597</li>
                <li>Vicente de Carvalho</li>
            </ul>
        </li>
    </ul>
    
</div>

</div>  
<?php include('footer.php'); ?>