<div>
    <form autocomplete='off' class='form' wire:submit="login">
        <div class='control'>
            <h1>
                Sign In
            </h1>
            @if (session('error'))
            <p style="color: red">Username atau password salah</p>
            @endif
        </div>
        <div class='control block-cube block-input'>
            <input name='username' wire:model="username" placeholder='Username' type='text' required>
            <div class='bg-top'>
                <div class='bg-inner'></div>
            </div>
            <div class='bg-right'>
                <div class='bg-inner'></div>
            </div>
            <div class='bg'>
                <div class='bg-inner'></div>
            </div>
        </div>
        <div class='control block-cube block-input'>
            <input name='password' wire:model="password" placeholder='Password' type='password' required>
            <div class='bg-top'>
                <div class='bg-inner'></div>
            </div>
            <div class='bg-right'>
                <div class='bg-inner'></div>
            </div>
            <div class='bg'>
                <div class='bg-inner'></div>
            </div>
        </div>
        <button class='btn block-cube block-cube-hover' type='submit'>
            <div class='bg-top'>
                <div class='bg-inner'></div>
            </div>
            <div class='bg-right'>
                <div class='bg-inner'></div>
            </div>
            <div class='bg'>
                <div class='bg-inner'></div>
            </div>
            <div class='text'>
                Log In
            </div>

        </button>
        <a href="/" wire:navigate style="color: white;">Main Menu</a>
    </form>



</div>
