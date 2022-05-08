<?php
include 'components/crud/config.php';
?>
<section id="hero" class='animate__animated animate__fadeIn animate__slow containerc'>
  <div>
    <h1>ToDo List</h1>
    <form action="components/crud/insert.php" method="POST">
      <input type="text" name="list" class="input-get-started" placeholder='Enter your todo' minlength="1" maxlength="50"><br>
    </form>
  </div>


  <div id="todobox">
    <table>
      <tr>
        <ol>
          <?php foreach($todoList as $todo):?>
             <li id="<?= $todo->_id; ?>" class="todo<?= $todo->status; ?>"><?= $todo->description; ?></li><a class="btn-check" href="components/crud/update.php?id=<?= $todo->_id; ?>" >C</a><a class="btn-del" href="components/crud/delete.php?id=<?= $todo->_id; ?>">D</a><hr>
            <?php endforeach; ?>
        </ol>
      </tr>
    </table>
  </div>
</section>

<!-- https://www.slimframework.com/docs/v4/ -->