<?php

//tables
const ITEM_TEMPLATE_TABLE = "item_template";
const NPC_VENDOR_TABLE = "npc_vendor";
CONST NPC_VENDOR_TEMPLATE_TABLE = "npc_vendor_template";
const SPELL_TEMPLATE_TABLE = "spell_template";
const CREATURE_LOOT_TEMPLATE_TABLE = "creature_loot_template";
const GAMEOBJECT_LOOT_TEMPLATE_TABLE = "gameobject_loot_template";
const NPC_TRAINER_TEMPLATE_TABLE = "npc_trainer_template";
const NPC_TRAINER_TABLE = "npc_trainer";
const MOUNT_ITEM_IDS_TABLE = "mount_item_Ids";
const CREATURE_TEMPLATE_TABLE = "creature_template";
const DROPRATE_CREATURE_TABLE = "droprate_buff_creature_loot_entrys";
const DROPRATE_GAMEOBJECT_TABLE = "droprate_buff_gameobject_loot_entrys";


//fields
const SPELLCATEGORY_ONE_FIELD = "spellcategory_1";
const REQUIRED_LEVEL_FIELD = "RequiredLevel";
const ITEM_QUALITY_FIELD = "Quality";
const SPELLID_ONE_FIELD = "Spellid_1";
const CASTING_TIME_INDEX_FIELD = "CastingTimeIndex";
const REQUIRED_SKILL_FIELD = "RequiredSkill";
const REQUIRED_SKILL_RANK_FIELD = "RequiredSkillRank";
const REQUIRED_HONOR_RANK_FIELD = "RequiredHonorRank";
const REQUIRED_CITY_RANK_FIELD = "RequiredCityRank";
const REQUIRED_REPUTATION_RANK_FIELD = "RequiredReputationRank";
const REQUIRED_REPUTATION_FACTION_FIELD = "RequiredReputationFaction";
const SELL_PRICE_FIELD = "SellPrice";
const BUY_PRICE_FIELD = "BuyPrice";

const ENTRY_FIELD_NAME = "entry";
const ID_FIELD_NAME = "Id";
const SLOT_FIELD_NAME = "slot";
const ITEM_FIELD_NAME = "item";
const MAXCOUNT_FIELD_NAME = "maxcount";
//REMOVED const IN_STOCK_FIELD_NAME = "InStock";
const INCR_TIME_FIELD_NAME = "incrtime";
const CONDITION_ID_FIELD_NAME = "condition_id";
const CHANCE_FIELD_NAME = "ChanceOrQuestChance";
const INVENTORY_TYPE_FIELD_NAME = "InventoryType";
const SPELLCOST_FIELD_NAME = "SpellCost";
const SPELL_NAME_FIELD_NAME = "SpellName";
const MINCOUNT_FIELD_NAME = "mincountOrRef";
const STACKABLE_FIELD_NAME = "stackable";
const SUBCLASS_FIELD_NAME = "subclass";
const CLASS_FIELD_NAME = "class";
const ITEM_BONDING_FIELD = "bonding";
const MOUNT_SPELL_CATEGORY = "330";
const MANA_COST_FIELD = 'ManaCost';

//const CONJURE_ITEM_SPELL_CATEGORY = "-1"; //todo: buffs to conjured items
const LOOT_QUALITY_LEVEL = [
    "POOR" => "0",
    "COMMON" => "1",
    "UNCOMMON" => "2",
    "RARE" => "3",
    "EPIC" => "4",
    "LEGENDARY" => "5",
    "ARTIFACT" => "6",
    "HEIRLOOM" => "7"
];
const GRAY_WORLD_DROP_PROXY_ITEMS = [60000,60001,60002,60003,60004,60005,60006,60007,60008];
const BIND_ON_EQUIP = 2;
/*
DROP DATABASE classicmangos;
DROP DATABASE classiclogs;
DROP DATABASE classiccharacters;
DROP DATABASE classicrealmd;
 */

/*
SELECT entry AS id, name FROM item_template WHERE bonding = 2
AND quality IN (3,4)
AND RequiredLevel <=19
AND RequiredLevel >= 1
AND class !=1
AND flags!=16
*/

/*
  $creatureQuery = 'CREATE TEMPORARY TABLE IF NOT EXISTS TempTable_A	SELECT C.' . ITEM_FIELD_NAME . ' FROM ' . CREATURE_LOOT_TEMPLATE_TABLE . ' C
  JOIN ' . ITEM_TEMPLATE_TABLE . ' I ON C.' . ITEM_FIELD_NAME . ' = I.' . ENTRY_FIELD_NAME . ' WHERE C.' . ITEM_FIELD_NAME . ' IN
  ( SELECT ' . ENTRY_FIELD_NAME . ' FROM ' . ITEM_TEMPLATE_TABLE . ' WHERE ' . ITEM_QUALITY_FIELD . ' > 0)
  AND I.' . INVENTORY_TYPE_FIELD_NAME . ' NOT IN ( 0 )
  AND C.' . CHANCE_FIELD_NAME . ' < ' . LOOT_BOOST_THRESHOLD . '
  AND C.' . CHANCE_FIELD_NAME . ' > 0
  ;

UPDATE ' . CREATURE_LOOT_TEMPLATE_TABLE . ' SET ' . CHANCE_FIELD_NAME . ' = ' . CHANCE_FIELD_NAME . ' * ' . LOOT_MULTIPLIER . '
WHERE ' . ITEM_FIELD_NAME . ' IN ( select ' . ENTRY_FIELD_NAME . ' from TempTable_A);

drop table if EXISTS TempTable_A;';

  $gameobjectQuery = '    CREATE TEMPORARY TABLE IF NOT EXISTS TempTable_A	SELECT C.' . ITEM_FIELD_NAME . ' FROM ' . GAMEOBJECT_LOOT_TEMPLATE_TABLE . ' C
  JOIN ' . ITEM_TEMPLATE_TABLE . ' I ON C.' . ITEM_FIELD_NAME . ' = I.' . ENTRY_FIELD_NAME . ' WHERE C.' . ITEM_FIELD_NAME . ' IN
  ( SELECT ' . ENTRY_FIELD_NAME . ' FROM ' . ITEM_TEMPLATE_TABLE . ' WHERE ' . ITEM_QUALITY_FIELD . ' > 0)
  AND I.' . INVENTORY_TYPE_FIELD_NAME . ' NOT IN ( 0 )
  AND C.' . CHANCE_FIELD_NAME . ' < ' . LOOT_BOOST_THRESHOLD . '
  AND C.' . CHANCE_FIELD_NAME . ' > 0
  ;

UPDATE ' . GAMEOBJECT_LOOT_TEMPLATE_TABLE . ' SET ' . CHANCE_FIELD_NAME . ' = ' . CHANCE_FIELD_NAME . ' * ' . LOOT_MULTIPLIER . '
WHERE ' . ITEM_FIELD_NAME . ' IN ( select ' . ENTRY_FIELD_NAME . ' from TempTable_A);

drop table if EXISTS TempTable_A;';
*/