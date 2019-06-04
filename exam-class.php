<?php
    class exam {
        
        private function printBHUT($n) {
            $r = $n % 3;
            $r == 0 ? $r = 'BHUT' : $r = null;
            return $r;
        }

        private function printIT($n) {
            $r = $n % 5;
            $r == 0 ? $r = 'IT' : $r = null;
            return $r;
        }

        public function result() {
            $r = '';

            for ($i = 1; $i <=100; $i++ ) {
                $r .= $i .' ';
                $r .= $this->printBHUT($i);
                $r .= ' ';
                $r .= $this->printIT($i);
                $r .= '<br>';
            }

            return $r;
        }

    }
?>