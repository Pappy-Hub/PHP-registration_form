<!DOCTYPE html>
<html lang="en">
<head>
        <title>Registration Form</title>
</head>
<body>

<form method="POST" action="user_data.php"> 
        <div>
            <label for="name">
                Name: <input type="text" name="name">
            </label>
        </div>

        <div>
            <label for="email">
                Email: <input type="email" name="email">
            </label>
        </div>
        <div>
            <label for="dob">
                Date of Birth: <input type="dob" name="dob" placeholder=" Example 12/12/2022">
            </label>
        </div>
        <div>
            <label for="gender">
                Gender: <input type="text" name="gender">
            </label>
        </div>
        <div>
            <label for="country">
                Country: <input type="text" name="country">
            </label>
        </div>

        <div>
            <button type="submit" >Submit</button>
        </div>
    </form>


    





</body>
</html>