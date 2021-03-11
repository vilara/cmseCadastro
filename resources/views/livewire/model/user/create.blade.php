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
                        <input type="text" wire:model="user.name" class="form-control form-control-sm" placeholder="">
                        @error('user.name') <span class="error text-red text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col md 4">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" wire:model="user.email" class="form-control form-control-sm" placeholder="">
                        @error('user.email') <span class="error text-red text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col md 4">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" id="cpf" wire:model="user.cpf" class="form-control form-control-sm"
                            placeholder="">
                        @error('user.cpf') <span class="error text-red text-sm">{{ $message }}</span> @enderror
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
                        <input type="text" wire:model="detail.nome_completo" class="form-control form-control-sm"
                            placeholder="Sem abreviaturas">
                        @error('detail.nome_completo') <span class="error text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col md 4">
                    <div class="form-group">
                        <label>Identidade</label>
                        <input type="text" wire:model="detail.idt" class="form-control form-control-sm"
                            placeholder="somente números">
                        @error('detail.idt') <span class="error text-red text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- radio sexo-->
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <div class="border pt-1 pl-3 mb-0">
                            <label class="radio-inline mr-3"><input wire:model="detail.sexo" type="radio"
                                    class="form-radio-input" id="sexo1" value="masculino"> Masculino</label>
                            <label class="radio-inline"><input wire:model="detail.sexo" type="radio"
                                    class="form-radio-input" id="sexo2" value="feminino"> Feminino</label>
                        </div>
                        @error('detail.sexo') <span class="error text-red text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="form row">
                <div class="col-md-2">
                    <!-- select om -->
                    <div class="form-group">
                        <label>OM</label>
                        <select class="form-control form-control-sm" wire:model='detail.om_id'>
                            <option>Selecione...</option>
                            @foreach ($oms as $index => $om)
                                <option value="{{ $om->id }}">{{ $om->siglaOm }}</option>

                            @endforeach
                        </select>
                        @error('detail.om_id') <span class="error text-red text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- select cargo -->
                    <div class="form-group">
                        <label>Seção</label>
                        <select class="form-control form-control-sm" wire:model='detail.section_id'>
                            <option>Selecione...</option>
                            @foreach ($sections as $index => $section)
                                <option value="{{ $section->id }}">{{ $section->siglaSecao }}</option>

                            @endforeach
                        </select>
                        @error('detail.section_id') <span class="error text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- select cargo -->
                    <div class="form-group">
                        <label>Função</label>
                        <select class="form-control form-control-sm" wire:model='detail.cargo_id'>
                            <option>Selecione...</option>
                            @foreach ($cargos as $index => $cargo)
                                <option value="{{ $cargo->id }}">{{ $cargo->siglaCg }}</option>

                            @endforeach
                        </select>
                        @error('detail.cargo_id') <span class="error text-red text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="col md 3">
                        <label>Data de nascimento</label>
                        <input type="date" wire:model="detail.dtNasc" class="form-control  form-control-sm">
                    </div>
                    @error('detail.dtNasc') <span class="error text-red text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

        </div>
    </div>
    <button wire:click.prevent="$set('show', true)">Mostrar</button>
    <button wire:click.prevent="$set('show', false)">Esconder</button>
    @if ($show)
    @livewire('model.militar.create')
    @endif


</form>
