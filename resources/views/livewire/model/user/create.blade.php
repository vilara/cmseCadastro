<form method="POST" wire:submit.prevent="cadastrar" action="{{ route('registrar') }}">
    @csrf
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Cadastro Geral</h3>
        </div>
        <div class="card-body">
            <div class="form row">
                <div class="col md 4">
                    <div class="form-group">
                        <label>Nome completo</label>
                        <input type="text" name="name" wire:model="name" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col md 4">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" wire:model="email" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col md 4">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" name="cpf" wire:model="cpf" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
       
    </div>


    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Informações Gerais</h3>
        </div>
        <div class="card-body">
            <div class="form row">
                <div class="col md 4">
                    <div class="form-group">
                        <label>Nome completo</label>
                        <input type="text" wire:model="name" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col md 4">
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" wire:model="email" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col md 4">
                    <div class="form-group">
                        <label>cpf</label>
                        <input type="text" wire:model="cpf" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-info">Cadastrar</button>
        {{-- <button type="submit" class="btn btn-default float-right">Cancelar</button> --}}
    </div>
</form>
