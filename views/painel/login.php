<!-- <form method="POST">
	<input type="email" name="email" placeholder="Nome" /><br /><br />
	<input type="password" name="senha" placeholder="Senha" /><br /><br />
	<input type="submit" value = "Acessar" /><br /><br />
</form> -->



    <div class="col-md-6 col-md-offset-3">
        <div class="jumbotron">
        <div class="panel panel-primary">
            <div class="panel-heading">Login 132</div>
            <div class="panel-body">
            
            <!-- Login Form -->
            <form method="POST">
            
            <!-- Username Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                    <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Email:</label>
                        <div class="input-group">
                            <input class="form-control" id="email" type="text" name="email" placeholder="Email" required/>
                            <span class="input-group-btn">
<label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                           
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Content Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="senha"><span class="text-danger" style="margin-right:5px;">*</span>Senha:</label>
                        <div class="input-group">
                            <input class="form-control" id="senha" type="password" name="senha" placeholder="Senha" required/>
<span class="input-group-btn"> 
    <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label></span>
                        </div>
                       
                    </div>
                </div>
                
                <!-- Login Button -->
                <div class="row">
                    <div class="form-group col-xs-4">
                        <button class="btn btn-primary" type="submit">Acessar</button>
                    </div>
                </div>
                
            </form>
            <!-- End of Login Form -->
            
        </div>
    </div>
</div>
</div>