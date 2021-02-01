<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="">
        <h2>Contact</h2>
        <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="subject" name="subject" class="form-control" id="subject" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message" cols="20" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>