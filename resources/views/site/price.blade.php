<x-navbarsite title="Planos" />
<div class="container">
    <h3 style="margin-top: 30px">Conheça nossos planos</h3>
    <alert />
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            <h5>✅ {{ session('success') }}</h5>
        </div>
    @endif

    <div class="row" style="margin-top: 30px">
        <!-- Plano VIP -->
        <div class="col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Plano VIP</h5>
                    <p class="card-text">✅ Cadastro comum na plataforma sem taxa de comissão 0%</p>
                    <h4 class="text-primary">R$ 89,90/mês</h4><br>
                    <div class="d-grid gap-2">
                        <a href="https://buy.stripe.com/00g5nP5qa1jL8y44gi" class="btn btn-primary">Assinar</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Plano Primmum -->
        <div class="col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Plano Prime</h5>
                    <p class="card-text">✅ Aparece no topo do ranking sem taxa de comissão 0%</p>
                    <h4 class="text-primary">R$ 129,90/mês</h4><br>
                    <div class="d-grid gap-2">
                        <a href="https://buy.stripe.com/9AQ9E52dYfaBbKg003" class="btn btn-success">Assinar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Plano Master Class -->
        <div class="col-md-4 mb-3">
            <div class="card text-center border-warning">
                <div class="card-body">
                    <h5 class="card-title">Plano Master Class ⭐</h5>
                    <p class="card-text">✅ Topo do ranking + Selo de verificação + Destaque sem taxa de comissão 0%</p>
                    <h4 class="text-warning">R$ 249,90/mês</h4><br>
                    <div class="d-grid gap-2">
                        <a href="https://buy.stripe.com/5kAcQh8Cm3rT4hO8wA" class="btn btn-warning text-white pulse-button">Assinar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footersite />

<!-- CSS para efeito de brilho pulsante -->
<style>
    .pulse-button {
        position: relative;
        font-weight: bold;
        transition: 0.3s;
        box-shadow: 0 0 10px rgba(255, 193, 7, 0.8);
        animation: pulse 1.5s infinite alternate;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 10px rgba(255, 193, 7, 0.8);
        }
        100% {
            box-shadow: 0 0 20px rgba(255, 193, 7, 1), 0 0 30px rgba(255, 193, 7, 0.8);
        }
    }
</style>