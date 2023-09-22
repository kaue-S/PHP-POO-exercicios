<?php

    class Livro {
        private string $titulo;
        private string $autor;
        private int $paginas = 0;

        //gerador de getters e setters

        public function getTitulo(): string
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @param string $titulo
         *
         * @return self
         */
        public function setTitulo(string $titulo): self
        {
                $this->titulo = $titulo;

                return $this;
        }
    }