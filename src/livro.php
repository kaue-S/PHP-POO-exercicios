<?php

    class livro {
        private string $titulo;
        private string $autor;
        private int $paginas;

        //Métodos getter/setters

        public function setTitulo(string $titulo) : void {
            $this->titulo = $titulo;
        }
        
        public function setAutor(string $autor) : void {
            $this->autor = $autor;
        }

        public function setPaginas(int $paginas) : void {
            $this->paginas = $paginas;
        }

        public function getTitulo() : string {
            return $this->titulo;
        }

        public function getAutor() : string {
            return $this->autor;
        }

        public function getPaginas() : int {
            return $this->paginas;
        }

        
    }