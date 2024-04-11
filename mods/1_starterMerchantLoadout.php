<?php

function GeneralMerchantsStartingLoadout(){
    say("\n\nExecuting Mod: Starting Merchants Sell Good Shit\n", 1);
    $itemsForSaleArray=array_merge(
        TIER_0_POTIONS,
        TIER_0_BASIC_WEAPONS,
        TIER_0_BASIC_ARMOR,
        TIER_1_POTIONS,
        TIER_1_RARE_EQUIPMENT,
        TIER_2_POTIONS,
        // TIER_2_RARE_EQUIPMENT,
        TIER_3_POTIONS,
        //TIER_3_RARE_EQUIPMENT,
        TIER_4_POTIONS,
        //TIER_4_RARE_EQUIPMENT,
        TIER_5_POTIONS,
        //TIER_5_RARE_EQUIPMENT
    );
    $ALL_GENERAL_SUPPLY_VENDORS = array_merge(
        GENERAL_SUPPLY_VENDORS_HORDE,
        GENERAL_SUPPLY_VENDORS_ALLIANCE,
        GENERAL_SUPPLY_VENDORS_NEUTRAL
    );


    /*      INCREASE COST OF BOE Rare and Epic EQUIPMENT FROM VENDOR       */
    /*
    $increaseBOEPriceQuery.='
    UPDATE '.ITEM_TEMPLATE_TABLE.'
SET '.BUY_PRICE_FIELD.' = '.BUY_PRICE_FIELD.' * '.UNCOMMON_LOOT_VENDOR_COST_MULTIPLE.' WHERE '.ITEM_BONDING_FIELD.'= '.
        BIND_ON_EQUIP.' AND '.ITEM_QUALITY_FIELD.' IN ( '.LOOT_QUALITY_LEVEL['UNCOMMON'].' )
AND '.CLASS_FIELD_NAME.' NOT IN (1);

UPDATE '.ITEM_TEMPLATE_TABLE.'
SET '.SELL_PRICE_FIELD.' = '.SELL_PRICE_FIELD.' * '.UNCOMMON_LOOT_VENDOR_COST_MULTIPLE.' WHERE '.ITEM_BONDING_FIELD.'= '.
        BIND_ON_EQUIP.' AND '.ITEM_QUALITY_FIELD.' IN ( '.LOOT_QUALITY_LEVEL['UNCOMMON'].' )
AND '.CLASS_FIELD_NAME.' NOT IN (1);';
    */
      $increaseBOEPriceQuery='
  
    UPDATE '.ITEM_TEMPLATE_TABLE.' 
SET '.BUY_PRICE_FIELD.' = '.BUY_PRICE_FIELD.' * '.RARE_LOOT_VENDOR_COST_MULTIPLE.' WHERE '.ITEM_BONDING_FIELD.'= '.
        BIND_ON_EQUIP.' AND '.ITEM_QUALITY_FIELD.' IN ( '.LOOT_QUALITY_LEVEL['RARE'].' ,'.LOOT_QUALITY_LEVEL['EPIC'].' )
AND '.CLASS_FIELD_NAME.' NOT IN (1);

UPDATE '.ITEM_TEMPLATE_TABLE.' 
SET '.SELL_PRICE_FIELD.' = '.SELL_PRICE_FIELD.' * '.RARE_LOOT_VENDOR_COST_MULTIPLE.' WHERE '.ITEM_BONDING_FIELD.'= '.
        BIND_ON_EQUIP.' AND '.ITEM_QUALITY_FIELD.' IN ( '.LOOT_QUALITY_LEVEL['RARE'].' ,'.LOOT_QUALITY_LEVEL['EPIC'].' )
AND '.CLASS_FIELD_NAME.' NOT IN (1);
';



    $queries['Increase BOE Item Vendor Costs']= $increaseBOEPriceQuery;

    /*      ADD ITEMS TO VENDORS       */


    foreach ($ALL_GENERAL_SUPPLY_VENDORS as $vendorName => $vendorId) {
        $i=0;
        foreach ($itemsForSaleArray as $itemName=>$itemData ){
            $i++;
            $queries['Merchants now sell good stuff'] .=  '
        DELETE FROM ' . NPC_VENDOR_TABLE . ' WHERE ' . ENTRY_FIELD_NAME . ' = ' . $vendorId . ' AND ' . ITEM_FIELD_NAME . ' = ' . $itemData['id'] . ';
        DELETE FROM ' . NPC_VENDOR_TEMPLATE_TABLE . ' WHERE ' . ENTRY_FIELD_NAME . ' = ' . $vendorId . ' AND ' . ITEM_FIELD_NAME . ' = ' . $itemData['id'] . ';
        
        INSERT INTO ' . NPC_VENDOR_TABLE . ' (' . ENTRY_FIELD_NAME . ',' . SLOT_FIELD_NAME . ',' . ITEM_FIELD_NAME . ',' . MAXCOUNT_FIELD_NAME . ',' . INCR_TIME_FIELD_NAME . ',' . CONDITION_ID_FIELD_NAME . ') 
        VALUES (' . $vendorId . ',' . GENERAL_SUPPLY_VENDOR_MOUNT_INVENTORY_SLOT +$i. ',' . $itemData['id'] . ',0,0,0);
        
        INSERT INTO ' . NPC_VENDOR_TEMPLATE_TABLE . ' (' . ENTRY_FIELD_NAME . ',' . SLOT_FIELD_NAME . ',' . ITEM_FIELD_NAME . ',' . MAXCOUNT_FIELD_NAME . ',' . INCR_TIME_FIELD_NAME . ',' . CONDITION_ID_FIELD_NAME . ') 
        VALUES (' . $vendorId . ',' . GENERAL_SUPPLY_VENDOR_MOUNT_INVENTORY_SLOT +$i. ',' . $itemData['id'] . ',0,0,0);';

        }
    }

    /*  Execute all queries */
    executeQueryBatch($queries);
    return true;
}

GeneralMerchantsStartingLoadout();