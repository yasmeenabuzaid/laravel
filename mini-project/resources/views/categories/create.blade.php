<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
.form-container {
  width: 400px;
  /* background: linear-gradient(#212121, #212121) padding-box, */
              /* linear-gradient(145deg, transparent 35%,#e81cff, #40c9ff) border-box; */
              background-color: #fff
  border: 2px solid transparent;
  padding: 32px 24px;
  font-size: 14px;
  font-family: inherit;
  color: white;
  display: flex;
  flex-direction: column;
  gap: 20px;
  box-sizing: border-box;
  border-radius: 16px;
}

.form-container button:active {
  scale: 0.95;
}

.form-container .form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-container .form-group {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.form-container .form-group label {
  display: block;
  margin-bottom: 5px;
  color: #000000;
  font-weight: 600;
  font-size: 12px;
}

.form-container .form-group input {
  padding: 12px 16px;
  border-radius: 8px;
  color: #747474;
  font-family: inherit;
  background-color: transparent;
  border: 1px solid #414141;
}

.form-container .form-group textarea {
  padding: 12px 16px;
  border-radius: 8px;
  resize: none;
  color: #737272;
  height: 96px;
  border: 1px solid #414141;
  background-color: transparent;
  font-family: inherit;
}

.form-container .form-group input::placeholder {
  opacity: 0.5;
}

.form-container .form-group input:focus {
  outline: none;
  border-color: #e81cff;
}

.form-container .form-group textarea:focus {
  outline: none;
  border-color: #e81cff;
}

.form-container .form-submit-btn {
  display: flex;
  align-items: flex-start;
  justify-content: center;
  align-self: flex-start;
  font-family: inherit;
  color: #fffcfc;
  font-weight: 600;
  width: 40%;
  background: #313131;
  border: 1px solid #414141;
  padding: 12px 16px;
  font-size: inherit;
  gap: 8px;
  margin-top: 8px;
  cursor: pointer;
  border-radius: 6px;
}

.form-container .form-submit-btn:hover {
  background-color: #4e4d4d;
  
}




    </style>
</head>
<body>
<div class="form-container">
      <form class="form" action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="cat_name">Category name</label>
          <input type="text" id="cat_name" name="cat_name" placeholder="Category name" required>
        </div>
        <div class="form-group">
          <label for="cat_des">Category description</label>
          <textarea name="cat_des" id="cat_des" placeholder="description" rows="10" cols="50" required>          </textarea>
        </div>
        <button class="form-submit-btn" type="submit">add new category</button>
      </form>
    </div>
</body>
</html>