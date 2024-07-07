<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Registration Form</title>
		<style>
			body {
				font-family: Arial, sans-serif;
				background-color: #f3f3f3;
				margin: 0;
				padding: 0;
				display: flex;
				justify-content: center;
				align-items: center;
				height: 100vh;
			}

			.main {
				background-color: #fff;
				border-radius: 15px;
				box-shadow: 0 0 20px
					rgba(0, 0, 0, 0.2);
				padding: 20px;
				width: 300px;
			}

			.main h2 {
				color: #4caf50;
				margin-bottom: 20px;
			}

			label {
				display: block;
				margin-bottom: 5px;
				color: #555;
				font-weight: bold;
			}

			input[type="text"],
			input[type="email"],
			input[type="password"],
			select {
				width: 100%;
				margin-bottom: 15px;
				padding: 10px;
				box-sizing: border-box;
				border: 1px solid #ddd;
				border-radius: 5px;
			}

			button[type="submit"] {
				padding: 15px;
				border-radius: 10px;
				border: none;
				background-color: #4caf50;
				color: white;
				cursor: pointer;
				width: 100%;
				font-size: 16px;
			}
		</style>
	</head>

	<body>
		<div class="main">
		@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
			<h2>Registration Form</h2>
			<form action="{{route('registersignup')}}" method="POST">
			@csrf <!-- Add this to include a CSRF token for security -->
    
				<label for="first"
					>Name:</label
				>
				<input
					type="text"
					id="name"
					name="name"
					required
				/>

				

				<label for="email">Email:</label>
				<input
					type="email"
					id="email"
					name="email"
					required
				/>

				<label for="password"
					>Password:</label
				>
				<input
					type="password"
					id="password"
					name="password"
					pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$"
					title="Password must contain at least one number, 
						one alphabet, one symbol, and be at 
						least 8 characters long"
					required
				/>

				<label for="password_confirmation"
					>Re-type Password:</label
				>
				<input
					type="password"
					id="password_confirmation"
					name="password_confirmation"
					required
				/>

				

				

				<button type="submit">
					Submit
				</button>
			</form>
		</div>
	</body>
</html>

