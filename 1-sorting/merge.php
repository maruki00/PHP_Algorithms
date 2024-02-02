<?php


class Merge
{
    public function __construct(
        private array $items1,
        private array $items2,
    ){}
    
    public final function sort(): array
    {
        $out = [];
        $i = count($this->items1);
        $j = count($this->items2);
        $i1 =0 ; $i2= 0;
        while($i>0 && $j>0){
            if($this->items1[$i1] < $this->items2[$i2]){
                $out[]=$this->items1[$i1];
                $i--;
            }else{
                $out[]=$this->items2[$i2++]; 
                $j--;
            }
        }
        while($i-->0){
            $out[] = $this->items1[$i1++];
        }
        while($j-->0){
            $out[] = $this->items2[$i2++];
        }
        return $out;
    } 

}

$m = new Merge([2,5,6,44,64],[3, 5,6, 7,8,44,67,87,97]);
print_r($m->sort());