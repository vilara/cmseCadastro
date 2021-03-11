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
                        <label>Login</label>
                        <input type="text" name="name" wire:model="name" class="form-control" placeholder="">
                        @error('name') <span class="error text-red text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col md 4">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" wire:model="email" class="form-control" placeholder="">
                        @error('email') <span class="error text-red text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col md 4">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" id="cpf" name="cpf" wire:model="cpf" class="form-control" placeholder="">
                        @error('cpf') <span class="error text-red text-sm">{{ $message }}</span> @enderror
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
                        <input type="text" wire:model="nome_completo" class="form-control"
                            placeholder="Sem abreviaturas">
                        @error('nome_completo') <span class="error text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col md 4">
                    <div class="form-group">
                        <label>Identidade</label>
                        <input type="text" wire:model="idt" class="form-control" placeholder="somente números">
                        @error('idt') <span class="error text-red text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- radio sexo-->
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <div class="border pt-1 pl-3 mb-0">
                            <label class="radio-inline mr-3"><input wire:model="sexo" type="radio"
                                    class="form-radio-input" name="sexo" id="sexo1" value="masculino"> Masculino</label>
                            <label class="radio-inline"><input wire:model="sexo" type="radio" class="form-radio-input"
                                    name="sexo" id="sexo2" value="feminino"> Feminino</label>
                        </div>
                        @error('sexo') <span class="error text-red text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="form row">
                <div class="col-md-2">
                    <!-- select om -->
                    <div class="form-group">
                        <label>OM</label>
                        <select class="form-control form-control-sm" name="om_id" id="om_id">
                            <option></option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Cadastrar</button>
                {{-- <button type="submit" class="btn btn-default float-right">Cancelar</button> --}}
            </div>
</form>
