<?php
class Stanze {
  protected $room_number;
  protected $floor;
  protected $beds;
  protected $created_at;
  protected $updated_at;

  public function __construct($room_number, $floor, $beds, $created_at, $updated_at){
    $this->room_number = $room_number;
    $this->floor = $floor;
    $this->beds = $beds;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
  }

  public function getStanze(){
    return [
      'room_number' => $this->room_number,
      'floor' => $this->floor,
      'beds' => $this->beds,
      'created_at' => $this->created_at,
      'updated_at' => $this->updated_at,
    ];
  }
}
?>
