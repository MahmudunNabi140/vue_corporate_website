<template>
	<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>

	<body>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Login</h2>

					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-5">
						<div class="login-wrap p-4 p-md-5">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-user-o"></span>
							</div>
							<h3 class="text-center mb-4">Have an account?</h3>
							<ul>
								<li v-for="(d, i) in errors" :key="i">{{ d[0] }}</li>
							</ul>
							<form action="#" class="login-form">
								<div class="form-group">
									<input type="text" class="form-control rounded-left" placeholder="Email" required
										v-model="email">
								</div>
								<div class="form-group d-flex">
									<input type="password" class="form-control rounded-left" placeholder="Password" required
										v-model="password">
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50">
										<label class="checkbox-wrap checkbox-primary">Remember Me
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
								</div>
								<div class="form-group">
									<button class="btn btn-primary rounded submit p-3 px-5" @click="singin"
										:disabled="processing">{{ (processing) ? 'Please wait...' : 'Login' }}</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>



	</body>

	</html>
</template>
<script>
import { mapActions } from 'vuex';

export default {
	name: 'Login',
	data() {
		return {
			email: '',
			password: '',
			errors: {},
			processing: false
		}
	},
    
	methods: {
		...mapActions({
			login: 'auth/login'
		}),
		async singin() {
			this.processing = true
			await axios.get('/sanctum/csrf-cookie')
			await axios.post('/login', { email: this.email, password: this.password }, { headers: { "Accept": "application/json" } })
				.then(({ data }) => {
					this.login()
				})
				.catch(({ response }) => {
					if (response.status == 422) {
						this.errors = response.data.errors
					} else {
						alert(response.data.message)
					}
				})
				.finally(() => {
					this.processing = false
				})
		}
	}
}
</script>
