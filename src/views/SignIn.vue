<script setup>
    
</script>

<template>
    <div class="main">
        <main class="form-signin w-100 m-auto shadow-sm rounded">
            <form action="registro.php" method="POST">
                <img class="rounded mx-auto d-block" src="../assets/logo.svg" alt="" width="72" height="57">
                <h1 class="h3 my-3 fw-normal text-center">Please sign in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required> 
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
        </main>
    </div>
</template>

<style scoped>
.main {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-signin {
    max-width: 330px;
    padding: 15px;
}

.form-signin .form-floating:focus-within {
    z-index: 2;
}

.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
</style>
