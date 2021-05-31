<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RegEx Form</title>
        <link rel="stylesheet" href="{{url('css/styles.css')}}">
    </head>
    <body>
        <h1>New User Signup</h1>
        <form>

            <input type="text" name="username" placeholder="username">
            <p>Username must be  and contain 5 - 12 characters</p>

            <input type="text" name="email" placeholder="email">
            <p>Email must be a valid address, e.g. me@mydomain.com</p>

            <input type="password" name="password" placeholder="password">
            <p>Password must alphanumeric (@, _ and - are also allowed) and be 8 - 20 characters</p>

            <input type="text" name="telephone" placeholder="telephone">
            <p>Telephone must be a valid UK telephone number (11 digits)</p>

            <input type="text" name="slug" placeholder="profile slug">
            <p>Slug must contain only lowercase letters, numbers and hyphens and be 8 - 20 characters</p>
            <button type="submit">Submit</button>
        </form>
        <script type="text/javascript" src="{{url('js/validation.js')}}"></script>
    </body>
</html>
