<?php
namespace StudentApp;
class Student{
    private $class;
    private $name;
    private $surname;
    private $grades;

    public function __construct($class,$name,$surname,$grades=array()){
        $this->class=$class;
        $this->code=rand(0,100);
        $this->name=$name;
        $this->surname=$surname;
        $this->grades=$grades;
        $this->date=date('Y-m-d H:i:s');
        $this->average=$this->average();
    }
    public function average(){
        $sum=0;
        foreach ($this->grades as $grade){
            $sum+=$grade;
        }
        return round($sum/count($this->grades),1);
    }
    public function showList(){
        return [$this->class,$this->code,$this->name,$this->surname,$this->average,$this->date];
    }
}
