<?php 
function getMyDemon() {
  $id=53;
  return getDemonByID($id);
}

function getDemonByID($id) {
  $demon = [];
  $demon["id"]=$id;
  $demon["model"]=$id;

  // demon type
  $demon["name"]=getTypeName($demon["model"]);
  $demon["rarity"]=getRarity($demon["model"]);

  // stats
  $demon["level"]=12;
  $demon["attack"]=5;
  $demon["defense"]=22;
  $demon["hp"]=26;
  $demon["maxhp"]=100;

  return $demon;
}

function getRarity($i) {
  switch ($i%6) {
    case 1:
      return 'common';
      break;
    case 2:
      return 'uncommon';
      break;
    case 3:
      return 'rare';
      break;
    case 4:
      return 'epic';
      break;
    case 5:
      return 'legendary';
      break;
    case 0:
      return 'mythic';
      break;
    default:
      echo "unknown";
  }
}

function getTypeName($i) {
  switch (ceil($i/6)) {
    case 1:
      return "Boof Nitza";
    case 2:
      return "Gon G'ah";
    case 3:
      return "Ma'Zga";
    case 4:
      return "Tor Tza";
    case 5:
      return "Vi'Zel";
    case 6:
      return "Goh Loomb";
    case 7:
      return "Baobaw";
    case 8:
      return "Ko Pak";
    case 9:
      return "Chu Perk";
    case 10:
      return "Ba Be'aga";
    case 11:
      return "Vee Scol";
    default:
      return "Unknown";
  }
}
?>