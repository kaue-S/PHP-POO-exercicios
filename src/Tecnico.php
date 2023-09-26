<?php
    require_once "src/Livro.php";

    class Tecnico extends Livro {
        private array $formato = ["digital", "fisico"];

        public function getFormato(): array
        {
                return $this->formato;
        }

        public function setFormato(array $formato): self
        {
                $this->formato = $formato;

                return $this;
        }
    }
?>