<?php

class Ceesenco_Maattabel_Model_Observer extends Mage_Core_Model_Abstract
{ 

    public function __construct() { }
    
	public function putsettings($observer) {
		
		$event = $observer->getEvent(); 
		
		$post = "user=".Mage::getStoreConfig('ceesenco_maattabel/configuration/username')."&password=".Mage::getStoreConfig('ceesenco_maattabel/configuration/password')."&opmaak=";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/algemeen_lettertype')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/algemeen_tekstkleur')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/algemeen_hoverkleur')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/algemeen_achtergrondkleur')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/pagina_achtergrond')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/koptekst_tekst')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/koptekst_link')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/menu_tekst')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/menu_teksthover')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/menu_achtergrond')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/lint_tekst')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/lint_achtergrond')."|";
		$post = $post.Mage::getStoreConfig('ceesenco_maattabel/opmaak/help_stijl');
		$post = $post."&groepen=";
		$post = $post."1|".Mage::getStoreConfig('ceesenco_maattabel/groepen/hoofdgroepen_heren').";";
		$post = $post."2|".Mage::getStoreConfig('ceesenco_maattabel/groepen/hoofdgroepen_dames').";";
		$post = $post."3|".Mage::getStoreConfig('ceesenco_maattabel/groepen/hoofdgroepen_jongens').";";
		$post = $post."5|".Mage::getStoreConfig('ceesenco_maattabel/groepen/heren_jeans').";";
		$post = $post."10|".Mage::getStoreConfig('ceesenco_maattabel/groepen/dames_bh').";";
		$post = $post."15|".Mage::getStoreConfig('ceesenco_maattabel/groepen/heren_truien').";";
		$post = $post."16|".Mage::getStoreConfig('ceesenco_maattabel/groepen/heren_shirts').";";
		$post = $post."19|".Mage::getStoreConfig('ceesenco_maattabel/groepen/heren_ondermode').";";
		$post = $post."20|".Mage::getStoreConfig('ceesenco_maattabel/groepen/heren_riemen').";";
		$post = $post."21|".Mage::getStoreConfig('ceesenco_maattabel/groepen/heren_schoenen').";";
		$post = $post."22|".Mage::getStoreConfig('ceesenco_maattabel/groepen/dames_slips').";";
		$post = $post."23|".Mage::getStoreConfig('ceesenco_maattabel/groepen/dames_tops').";";
		$post = $post."24|".Mage::getStoreConfig('ceesenco_maattabel/groepen/dames_jurken').";";
		$post = $post."25|".Mage::getStoreConfig('ceesenco_maattabel/groepen/dames_rokken').";";
		$post = $post."26|".Mage::getStoreConfig('ceesenco_maattabel/groepen/dames_broeken').";";
		$post = $post."27|".Mage::getStoreConfig('ceesenco_maattabel/groepen/dames_riemen').";";
		$post = $post."28|".Mage::getStoreConfig('ceesenco_maattabel/groepen/dames_schoenen').";";
		$post = $post."33|".Mage::getStoreConfig('ceesenco_maattabel/groepen/heren_broeken').";";
		$post = $post."35|".Mage::getStoreConfig('ceesenco_maattabel/groepen/hoofdgroepen_meisjes').";";
		$post = $post."36|".Mage::getStoreConfig('ceesenco_maattabel/groepen/hoofdgroepen_kinderen').";";
		$post = $post."37|".Mage::getStoreConfig('ceesenco_maattabel/groepen/jongens_ondermode').";";
		$post = $post."38|".Mage::getStoreConfig('ceesenco_maattabel/groepen/jongens_truien').";";
		$post = $post."39|".Mage::getStoreConfig('ceesenco_maattabel/groepen/jongens_shirts').";";
		$post = $post."40|".Mage::getStoreConfig('ceesenco_maattabel/groepen/jongens_jeans').";";
		$post = $post."41|".Mage::getStoreConfig('ceesenco_maattabel/groepen/jongens_broeken').";";
		$post = $post."42|".Mage::getStoreConfig('ceesenco_maattabel/groepen/jongens_schoenen').";";
		$post = $post."43|".Mage::getStoreConfig('ceesenco_maattabel/groepen/jongens_riemen').";";
		$post = $post."44|".Mage::getStoreConfig('ceesenco_maattabel/groepen/meisjes_rokken').";";
		$post = $post."45|".Mage::getStoreConfig('ceesenco_maattabel/groepen/meisjes_broeken').";";
		$post = $post."46|".Mage::getStoreConfig('ceesenco_maattabel/groepen/meisjes_tops').";";
		$post = $post."47|".Mage::getStoreConfig('ceesenco_maattabel/groepen/meisjes_schoenen').";";
		$post = $post."48|".Mage::getStoreConfig('ceesenco_maattabel/groepen/meisjes_handschoenen').";";
		$post = $post."49|".Mage::getStoreConfig('ceesenco_maattabel/groepen/kinderen_ondermode').";";
		$post = $post."50|".Mage::getStoreConfig('ceesenco_maattabel/groepen/kinderen_truien').";";
		$post = $post."51|".Mage::getStoreConfig('ceesenco_maattabel/groepen/kinderen_shirts').";";
		$post = $post."52|".Mage::getStoreConfig('ceesenco_maattabel/groepen/kinderen_jeans').";";
		$post = $post."53|".Mage::getStoreConfig('ceesenco_maattabel/groepen/kinderen_broeken').";";
		$post = $post."54|".Mage::getStoreConfig('ceesenco_maattabel/groepen/kinderen_schoenen').";";
		$post = $post."55|".Mage::getStoreConfig('ceesenco_maattabel/groepen/kinderen_riemen').";";
		$post = $post."56|".Mage::getStoreConfig('ceesenco_maattabel/groepen/kinderen_handschoenen').";";
		$post = $post."57|".Mage::getStoreConfig('ceesenco_maattabel/groepen/meisjes_bh').";";
		$post = $post."58|".Mage::getStoreConfig('ceesenco_maattabel/groepen/meisjes_slips').";";
		$post = $post."59|".Mage::getStoreConfig('ceesenco_maattabel/groepen/meisjes_truien').";";
		$post = $post."61|".Mage::getStoreConfig('ceesenco_maattabel/groepen/heren_handschoenen').";";
		$post = $post."62|".Mage::getStoreConfig('ceesenco_maattabel/groepen/dames_jeans').";";
		$post = $post."63|".Mage::getStoreConfig('ceesenco_maattabel/groepen/meisjes_jeans').";";
		$post = $post."64|".Mage::getStoreConfig('ceesenco_maattabel/groepen/dames_handschoenen').";";
		$post = $post."65|".Mage::getStoreConfig('ceesenco_maattabel/groepen/jongens_handschoenen');
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://maattabel.ceesenco.com/magento/save.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
		
		$result = curl_exec($ch);
		curl_close($ch); 
#		Mage::getSingleton('core/session')->addSuccess($post); 
	}

}
?>
