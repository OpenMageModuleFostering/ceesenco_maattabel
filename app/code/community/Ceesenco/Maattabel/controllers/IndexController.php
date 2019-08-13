<?php
class Ceesenco_Maattabel_IndexController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Return some checking result
     *
     * @return void
     */
    public function getopmaakAction()
    {
			$post = "user=".Mage::getStoreConfig('ceesenco_maattabel/configuration/username')."&password=".Mage::getStoreConfig('ceesenco_maattabel/configuration/password');
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "http://maattabel.ceesenco.com/magento/getopmaak.php");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			
			$result = curl_exec($ch);
			curl_close($ch);
			
			$onderdelen = explode("|", $result);

			$text_type = $onderdelen[0];
			$text_color = $onderdelen[1];
			$highlight_color = $onderdelen[2];
			$object_table_bg = $onderdelen[3];
			$page_bg_color = $onderdelen[4];
			$header_text_color = $onderdelen[5];
			$header_link_color = $onderdelen[6];
			$menu_text_color = $onderdelen[7];
			$menu_highlight_text_color = $onderdelen[8];
			$menu_bg_color = $onderdelen[9];
			$ribbon_text_color = $onderdelen[10];
			$ribbon_background_color = $onderdelen[11];
			$help_tooltip = $onderdelen[12];

			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/algemeen_lettertype', $text_type );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/algemeen_tekstkleur', $text_color );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/algemeen_hoverkleur', $highlight_color );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/algemeen_achtergrondkleur', $object_table_bg );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/pagina_achtergrond', $page_bg_color );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/koptekst_tekst', $header_text_color );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/koptekst_link', $header_link_color );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/menu_tekst', $menu_text_color );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/menu_teksthover', $menu_highlight_text_color );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/menu_achtergrond', $menu_bg_color );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/lint_tekst', $ribbon_text_color );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/lint_achtergrond', $ribbon_background_color );    	
			Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/opmaak/help_stijl', $help_tooltip );    	
			Mage::getSingleton('core/session')->addSuccess(Mage::helper('maattabel')->__('Layout retrieved and saved')); 
    }

    public function getgroepenAction()
    {
			$post = "user=".Mage::getStoreConfig('ceesenco_maattabel/configuration/username')."&password=".Mage::getStoreConfig('ceesenco_maattabel/configuration/password');
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "http://maattabel.ceesenco.com/magento/getgroepen.php");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			
			$result = curl_exec($ch);
			curl_close($ch);
			
			$onderdelen = explode("\n", $result);
			
			foreach ($onderdelen as $onderdeel) {
				$waarden = explode("|", $onderdeel);
				
				$groep = $waarden[0];
				$zichtbaar = $waarden[1];
				$veld = "";
				
				switch ($groep) {
					case "1": $veld = "hoofdgroepen_heren"; break;
					case "2": $veld = "hoofdgroepen_dames"; break;
					case "3": $veld = "hoofdgroepen_jongens"; break;
					case "5": $veld = "heren_jeans"; break;
					case "10": $veld = "dames_bh"; break;
					case "15": $veld = "heren_truien"; break;
					case "16": $veld = "heren_shirts"; break;
					case "19": $veld = "heren_ondermode"; break;
					case "20": $veld = "heren_riemen"; break;
					case "21": $veld = "heren_schoenen"; break;
					case "22": $veld = "dames_slips"; break;
					case "23": $veld = "dames_tops"; break;
					case "24": $veld = "dames_jurken"; break;
					case "25": $veld = "dames_rokken"; break;
					case "26": $veld = "dames_broeken"; break;
					case "27": $veld = "dames_riemen"; break;
					case "28": $veld = "dames_schoenen"; break;
					case "33": $veld = "heren_broeken"; break;
					case "35": $veld = "hoofdgroepen_meisjes"; break;
					case "36": $veld = "hoofdgroepen_kinderen"; break;
					case "37": $veld = "jongens_ondermode"; break;
					case "38": $veld = "jongens_truien"; break;
					case "39": $veld = "jongens_shirts"; break;
					case "40": $veld = "jongens_jeans"; break;
					case "41": $veld = "jongens_broeken"; break;
					case "42": $veld = "jongens_schoenen"; break;
					case "43": $veld = "jongens_riemen"; break;
					case "44": $veld = "meisjes_rokken"; break;
					case "45": $veld = "meisjes_broeken"; break;
					case "46": $veld = "meisjes_tops"; break;
					case "47": $veld = "meisjes_schoenen"; break;
					case "48": $veld = "meisjes_handschoenen"; break;
					case "49": $veld = "kinderen_ondermode"; break;
					case "50": $veld = "kinderen_truien"; break;
					case "51": $veld = "kinderen_shirts"; break;
					case "52": $veld = "kinderen_jeans"; break;
					case "53": $veld = "kinderen_broeken"; break;
					case "54": $veld = "kinderen_schoenen"; break;
					case "55": $veld = "kinderen_riemen"; break;
					case "56": $veld = "kinderen_handschoenen"; break;
					case "57": $veld = "meisjes_bh"; break;
					case "58": $veld = "meisjes_slips"; break;
					case "59": $veld = "meisjes_truien"; break;
					case "61": $veld = "heren_handschoenen"; break;
					case "62": $veld = "dames_jeans"; break;
					case "63": $veld = "meisjes_jeans"; break;
					case "64": $veld = "dames_handschoenen"; break;
					case "65": $veld = "jongens_handschoenen"; break;
				}
				if ($veld != "") {
					Mage::getModel('core/config')->saveConfig('ceesenco_maattabel/groepen/'.$veld, $zichtbaar );    	
				}
			}
			Mage::getSingleton('core/session')->addSuccess(Mage::helper('maattabel')->__('Groupsettings retrieved and saved')); 
    }
}
?>