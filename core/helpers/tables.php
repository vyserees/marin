<?php

class Tables {
    public $header = array();
    
    public function inittable(){
        $str = '<table class="table table-bordered"><tr>';
        foreach($this->header as $key=>$value){
            $str .= '<th width="'.$value.'">'.$key.'</th>';
        }
        $str .= '</tr>';
        echo $str;
    }
    public function addrow($values,$colspan=null){
        $str .= '<tr>';
        $c = 1;
        if(null!==$colspan){$cs = explode(':', $colspan);}else{$cs = array('');}
        foreach($values as $val){
            $str .= '<td';
            if($cs[0]!==''&&$cs[0]==$c){
                $str .= ' colspan="'.$cs[1].'">';
            }else{
                $str .= '>';
            }
            $str .= $val.'</td>';
            $c++;
        }
        $str .= '</tr>';
        echo $str;
    }
    public function closetable(){
        echo '</table>';
    }
}