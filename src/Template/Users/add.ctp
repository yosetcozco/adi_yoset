<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?= $this->form->create($user) ?>
        <fieldset>
              <legend><?= __('Add User') ?></legend>
            <?php
            echo $this->Form->input('email',['placeholder'=>'Email','label'=>false]);
            echo $this->Form->input('password',['placeholder'=>'password','label'=>false]);
            echo $this->Form->input('name',['placeholder'=>'name','label'=>false]);
            echo $this->Form->input('dni',['placeholder'=>'dni','label'=>false]);
            echo $this->Form->input('college_id',['options'=> $colleges]);
            echo $this->Form->input('role_id', ['options' => $roles]);
            echo $this->Form->input('status',['type'=>'checkbox']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Create'),['class'=>'btn btn-sm btn-primary']) ?>
         <?= $this->Form->end() ?>
    </div>
</div>
