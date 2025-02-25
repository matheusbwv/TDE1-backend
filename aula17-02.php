<?php

  class User {
    protected string $nome;
    protected string $email;

    public function __construct(string $nome , string $email){
      $this->nome = $nome;
      $this->email = $email;

    }
    public function getNome(): string {
      return $this->nome;
    }
    public function exibirInfo(): void {
      echo "Nome: $this->nome\n<br> - Email: $this->email\n<br>";
    }

  }

  class Admin extends User {
    private string $nivel;
    
    public function __construct(string $nome, string $email, string $nivel) {
      parent::__construct($nome,$email);
      $this->nivel = $nivel;
    }

    public function exibirInfo(): void {
      echo "Admin: {$this->nome}\n<br> - Email: {$this->email}\n<br> - Nivel: {$this->email} * admin <br>";
    }

    public function getNivel(): string {
      return $this->nivel;
    }

  }

  // criando objetos

  $user1 = new User("Matheus","matheus.wenes@gmail.com");
  $User2 = new Admin("Wenes","matheus.wenes3@gmail.com", "Admin Super");

  //exibir info

  $user1 -> exibirInfo();
  $User2 ->exibirInfo();


?>