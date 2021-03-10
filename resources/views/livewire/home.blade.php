<div class="col-md-6 offset-md-3 mt-5">
    <!-- Application buttons -->
    <div class="card text-center">
        <div class="card-header">
            <h3 class="card-title">CADASTROS</h3>
        </div>
        <div class="card-body">
            <a  href="{{ route('user.create') }}"  class="btn btn-app bg-success">
                <span class="badge bg-purple">{{ $user->count() + 30}}</span>
                <i class="fas fa-users"></i> Pessoal
            </a>
            <a class="btn btn-app bg-secondary">
                <span class="badge bg-success">300</span>
                <i class="fas fa-user"></i>Usuário
            </a>
            <a class="btn btn-app bg-danger">
                <span class="badge bg-teal">67</span>
                <i class="fas fa-inbox"></i>Seções
            </a>
            <a class="btn btn-app bg-warning">
                <span class="badge bg-info">12</span>
                <i class="fas fa-cogs"></i>Funções
            </a>
        </div>
        <!-- /.card-body -->
    </div>
</div>
