<!DOCTYPE html>
<html>

<head>
      <title>HTML Login Form</title>
      <link rel="stylesheet" href="style.css">
</head>
<style>
/*style.css*/
body {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    line-height: 1.5;
    min-height: 100vh;
    background: #f3f3f3;
    flex-direction: column;
    margin: 0;
}

.main {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    padding: 10px 20px;
    transition: transform 0.2s;
    width: 500px;
    text-align: center;
}

h1 {
    color: #4CAF50;
}

label {
    display: block;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: left;
    color: #555;
    font-weight: bold;
}


input {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #4CAF50;
    width: 100%;
    font-size: 16px;
}

.wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}
    </style>
<body>
      <div class="main">
      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

            <h1>Login</h1>
            <h3>Enter your login credentials</h3>
            <form action="{{route('check')}}" method="POST">
            @csrf <!-- Add this to include a CSRF token for security -->
                  <label for="email">
                        Email:
                  </label>
                  <input type="email" 
                         id="email" 
                         name="email" 
                         placeholder="Enter your Email" required>

                  <label for="password">
                        Password:
                  </label>
                  <input type="password"
                         id="password" 
                         name="password"
                         placeholder="Enter your Password" required>

                  <div class="wrap">
                        
                  <button type="submit">
					Submit
				</button>
                  </div>
            </form>
            <p>Not registered?
                  <a href="{{route('reg')}}"
                     style="text-decoration: none;">
                        Create an account
                  </a>
            </p>
      </div>
</body>

</html>