<?php include 'inc/header.php' ?>

<?php
$feedback = [
  [
    'id' => '1',
    'name' => 'Tom Rom',
    'email' => 'tom@email.com',
    'body' => 'Im a goofy goober yeah'
  ],
  [
    'id' => '2',
    'name' => 'Flom Rom',
    'email' => 'flom@email.com',
    'body' => 'You dont need a licence to drive a sandwich'
  ],
  [
    'id' => '3',
    'name' => 'Clom Rom',
    'email' => 'clom@email.com',
    'body' => 'My eyes! i cant feel my eyes!'
  ],
];
?>

<h2>Past Feedback</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt3"> There is no feedback </p>
<?php endif; ?>

<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt-2">
        By <?php echo $item['name']; ?>
      </div>
    </div>
  </div>
<?php endforeach ?>
<?php include 'inc/footer.php' ?>
