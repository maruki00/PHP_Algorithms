<?php



class Bubble{
    public function __construct(
        private array $items 
    ){}

    
    public final function sort(): array
    {
        
        for($i=1; $i<count($this->items); $i++){
            for($j=$i; $j>0; $j--){
                if($this->items[$j-1] > $this->items[$j]){
                    $tmp = $this->items[$j];
                    $this->items[$j] = $this->items[$j-1];
                    $this->items[$j-1] = $tmp;
                }
            }
        }
        return $this->items;
    }
}

$b = new Bubble([1,5,3,7,4,7,8,3,5,67,7,4,5]);
print_r($b->sort());