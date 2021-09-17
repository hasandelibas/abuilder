<?php 
$WebBuilder =  []; ;
$WebBuilder["Main"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div id="main-pen">';
echo '<div style="position:fixed;left:0px;top:0px;bottom:0px;z-index:1">';
echo "</div>";
echo '<div class="thema" id="main" style="margin-left:50px;margin-right:50px;" Test-View="">';
WebBuilder.Setup(Element);;
echo "</div>";
echo '<div id="RightMenuParent" style="position:fixed;right:0px;top:0px;bottom:0px;width:50px;background:#222">';
echo "</div>";
echo "</div>";
}
 ;
$WebBuilder["Modules"] =  []; ;
$WebBuilder["Modules"]["TopMenu"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
$Self["height"]=50;$Self["id"]="openable-menu-icon";;
echo '<div class="navbar" openable-top-menu="" top-menu="" style="color:inherit;background-color:inherit;">';
echo '<div class="brand">';
echo '<img alt="'. General()["websiteName"] .' Logo" src="'. General()["logo"] .'">';
echo "</img>";
global $PROPS;;
echo '<h1 style="display:none">';
echo ''. $PROPS[CurrentLanguage()]["title_short"] .'';
echo "</h1>";
echo "</div>";
echo '<div class="map-menu">';
{
$___iterators=RootPages();
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf29=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
echo '<div class="map-menu-item">';
echo '<a href="'.PageUrl($Self).'" hreflang="'.CurrentLanguage().'">';
echo ''.PageUrlTitle($Self).'';
echo "</a>";
if($Self["type"]!=1){
echo '<div class="child-map-menu">';
{
$___iterators=Pages($Self["id"]);
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf30=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
echo '<a href="'.PageUrl($Self).'" hreflang="'.CurrentLanguage().'">';
echo ''.PageUrlTitle($Self).'';
echo "</a>";
}
$Self=$___ReverseSelf30;
};
echo "</div>";
}echo "</div>";
}
$Self=$___ReverseSelf29;
};
echo "</div>";
if(count(Languages()) > 1){
echo '<div class="languages">';
echo '<div class="current-language">';
echo '<img src="/images/flags/4x3/'.CurrentLanguage().'.svg" alt="'.LanguageNameEnglish(CurrentLanguage()).' Flag">';
echo "</img>";
echo '<span class="text">';
echo ''. LanguageName( CurrentLanguage() ) .'';
echo "</span>";
echo '<span class="code">';
echo ''. strtoupper( CurrentLanguage() ) .'';
echo "</span>";
echo "</div>";
echo '<div class="language-list">';
{
$___iterators= Languages();
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf31=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
echo '<a class="language-link" href="'. LanguagePageUrl($Self) .'" hreflang="'.$Self.'">';
echo '<img src="/images/flags/4x3/'.$Self.'.svg" alt="'.LanguageNameEnglish($Self).' Flag">';
echo "</img>";
echo ''. LanguageName($Self) .'';
echo "</a>";
}
$Self=$___ReverseSelf31;
};
echo "</div>";
echo "</div>";
}echo '<div class="menu-icon">';
echo '<div class="bar1">';
echo "</div>";
echo '<div class="bar2">';
echo "</div>";
echo '<div class="bar3">';
echo "</div>";
echo "</div>";
echo '<div class="navbar-mobile-menu" menu="" style="color:inherit;background-color:'.$Global["display"]["backgroundColor"].';">';
echo '<img class="menu-logo" alt="'. General()["websiteName"] .' Logo" src="'.General()["logo"] .'">';
echo "</img>";
echo '<div class="map-menu-mobile">';
{
$___iterators=RootPages();
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf32=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
echo '<a class="li" href="'.PageUrl($Self).'" hreflang="'.CurrentLanguage().'">';
echo ''.PageUrlTitle($Self).'';
echo "</a>";
}
$Self=$___ReverseSelf32;
};
$Self["menus"] = array_filter( Modules() , function($d){ return $d["type"]=="Header" || $d["type"]=="Content"  ; } );;
{
$___iterators=$Self["menus"];
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf33=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
echo '<a class="li" href="#'.Seo(Language($Self["data"])["header"]).'">';
echo ''. Language($Self["data"])["header"] .'';
echo "</a>";
}
$Self=$___ReverseSelf33;
};
echo "</div>";
ViewModule("BasicModules.Social");;
echo "</div>";
echo "</div>";
}
 ;
$WebBuilder["Modules"]["Main"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="module-main container">';
echo '<h1>';
echo Language($Self)["title"];
echo "</h1>";
echo '<p>';
echo Language($Self)["desc"];
echo "</p>";
ViewModule("BasicModules.Social");;
echo "</div>";
}
 ;
$WebBuilder["Modules"]["Footer"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="module-footer">';
echo '<div class="container wall-3">';
echo '<div class="column">';
echo '<h3 class="header">';
echo Language($Self)["about"];
echo "</h3>";
echo '<p>';
echo Language($Self)["about_text"];
echo "</p>";
echo "</div>";
echo '<div class="column">';
echo '<h3 class="header">';
echo Language($Self)["contact"];
echo "</h3>";
echo '<p>';
echo Language($Self)["contact_text"];
echo "</p>";
echo "</div>";
echo '<div class="column">';
echo '<h3 class="header">';
echo Language($Self)["social"];
echo "</h3>";
ViewModule("BasicModules.Social");;
echo "</div>";
echo "</div>";
echo '<div class="copyright">';
echo '<p>';
echo Language($Self)["copyright"];
echo "</p>";
echo "</div>";
echo "</div>";
}
 ;
$WebBuilder["Modules"]["Content"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="module-content container">';
echo '<h2 id="'.Seo(Language($Self)["header"]).'">';
echo Language($Self)["header"];
echo "</h2>";
echo '<div>';
echo Language($Self)["text"];
echo "</div>";
echo "</div>";
}
 ;
$WebBuilder["Modules"]["Topic"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="module-topic container">';
echo '<h2 id="'.Seo(Language($Self)["header"]).'">';
echo Language($Self)["header"];
echo "</h2>";
echo '<p>';
echo Language($Self)["text"];
echo "</p>";
echo '<div class="tags">';
global $PROPS;;
$tags=new ArrayList(explode(",",Lang($PROPS)["keywords"]));;
{
$___iterators= $tags->Map(function($e){return trim($e);})->Filter(function($e){return $e!="";})->ToList();;
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf34=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
echo '<span>';
echo ''.$Self.'';
echo "</span>";
}
$Self=$___ReverseSelf34;
};
echo "</div>";
echo "</div>";
}
 ;
$WebBuilder["Modules"]["Partel"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="module-partel">';
ViewModule("Modules.Partel_Block",$Self);;
echo "</div>";
}
 ;
$WebBuilder["Modules"]["PartelSlider"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="module-slider module-partel" auto-animater="">';
echo '<button class="slider-right">';
echo '<i class="icon-right">';
echo "</i>";
echo "</button>";
echo '<button class="slider-left">';
echo '<i class="icon-right" style="transform-origin:center;transform:rotate(180deg)">';
echo "</i>";
echo "</button>";
echo '<div class="slider-navigation">';
{
$___iterators=$Self;
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf35=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
echo '<div class="slider-navigation-item">';
echo ''. $___lastForKey + 1 .'';
echo "</div>";
}
$Self=$___ReverseSelf35;
};
echo "</div>";
echo '<div class="slider" animater="slide">';
{
$___iterators=$Self;
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf36=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
echo '<div class="slide golden-box" state="'.( $___lastForKey==0 ? "show" : "hide" ).'" style="'. GetPreCssCode($Self["display"]) .'">';
echo '<div class="content">';
ViewModule("Modules.Partel_Block",$Self["data"]);;
echo "</div>";
if($Self["display"]["backgroundImage"]){
$img=DB::Single("Select * From files Where id=:id",array("id"=>$Self["display"]["backgroundImage"]));;
if($img){
echo '<picture background-picture="">';
print_image_source( [$img["alt"],$img["hash"],$img["ext"]] ,[480,1080]);;
echo '<filter>';
echo "</filter>";
echo "</picture>";
}}echo "</div>";
}
$Self=$___ReverseSelf36;
};
echo "</div>";
echo "</div>";
}
 ;
$WebBuilder["Modules"]["Partel_Block"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
{
$___iterators= $Self;
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf37=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
if($Self["prim"]=="area"){
ViewModule("AreaModules.".$Self["type"],$Self);;
}if($Self["prim"]=="item"){
ViewModule("BasicModules.".$Self["type"],$Self);;
}}
$Self=$___ReverseSelf37;
};
}
 ;
$WebBuilder["AreaModules"]["Box"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div style="'.DisplayCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
ViewModule("Modules.Partel_Block",$Self["datas"]["0"]);;
echo "</div>";
}
 ;
$WebBuilder["AreaModules"]["GoldenBox"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="golden-box" style="'.DisplayCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
ViewModule("Modules.Partel_Block",$Self["datas"]["0"]);;
echo "</div>";
}
 ;
$WebBuilder["AreaModules"]["Container"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="container" style="'.DisplayCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
ViewModule("Modules.Partel_Block",$Self["datas"]["0"]);;
echo "</div>";
}
 ;
$WebBuilder["AreaModules"]["Column2"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="wall-2 gap-0" style="'.DisplayCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';

			if(!isset($Self["datas"][0])) $Self["datas"][0] = array();
			if(!isset($Self["datas"][1])) $Self["datas"][1] = array();
;
echo '<div>';
ViewModule("Modules.Partel_Block",$Self["datas"][0]);;
echo "</div>";
echo '<div>';
ViewModule("Modules.Partel_Block",$Self["datas"][1]);;
echo "</div>";
echo "</div>";
}
 ;
$WebBuilder["AreaModules"]["Column3"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="wall-3 gap-0" style="'.DisplayCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';

			if(!isset($Self["datas"][0])) $Self["datas"][0] = array();
			if(!isset($Self["datas"][1])) $Self["datas"][1] = array();
			if(!isset($Self["datas"][2])) $Self["datas"][2] = array();
;
echo '<div>';
ViewModule("Modules.Partel_Block",$Self["datas"][0]);;
echo "</div>";
echo '<div>';
ViewModule("Modules.Partel_Block",$Self["datas"][1]);;
echo "</div>";
echo '<div>';
ViewModule("Modules.Partel_Block",$Self["datas"][2]);;
echo "</div>";
echo "</div>";
}
 ;
$WebBuilder["AreaModules"]["Column4_8"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="row auto flex-group" style="'.DisplayCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo '<div class="col-4">';
ViewModule("Modules.Partel_Block",$Self["datas"]["0"]);;
echo "</div>";
echo '<div class="col-8">';
ViewModule("Modules.Partel_Block",$Self["datas"]["1"]);;
echo "</div>";
echo "</div>";
}
 ;
$WebBuilder["AreaModules"]["Column8_4"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="row auto flex-group" style="'.DisplayCss($Self["display"]).';display:flex;" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo '<div class="col-8">';
ViewModule("Modules.Partel_Block",$Self["datas"]["0"]);;
echo "</div>";
echo '<div class="col-4">';
ViewModule("Modules.Partel_Block",$Self["datas"]["1"]);;
echo "</div>";
echo "</div>";
}
 ;
$WebBuilder["AreaModules"]["ButtonRow"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div class="button-row" style="'.DisplayCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
ViewModule("Modules.Partel_Block",$Self["datas"]["0"]);;
echo "</div>";
}
 ;
$WebBuilder["BasicModules"] =  []; ;
$WebBuilder["BasicModules"]["Social"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
if(!isset($Self["display"])){$Self["display"]=array();};;
echo '<div class="social-links" style="'.DisplayCss($Self["display"]).''.ItemCss($Self["display"]).'" animate-scroll="'. Cval($Self,["display","animation"],"null") .'" animate-scroll="'. Cval($Self,["display","animationDirection"],"enter") .'">';
{
$___iterators= General()["social"] ;
if(!isset($___iterators))$___iterators=array();
$___forKeyName='social';
$___ReverseSelf38=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
if($Self){
echo '<a href="'.$Self.'" class="icon-'.$___lastForKey.'" target="_blank" rel="noreferrer">';
echo "</a>";
}}
$Self=$___ReverseSelf38;
};
echo "</div>";
}
 ;
$WebBuilder["BasicModules"]["SocialSpecial"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
if(!isset($Self["display"])){$Self["display"]=array();};;
echo '<div class="social-links" style="'.DisplayCss($Self["display"]).''.ItemCss($Self["display"]).'" animate-scroll="'. Cval($Self,["display","animation"],"null") .'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
{
$___iterators= $Self["socials"];
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf39=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
if($___lastForKey=="phone"){
echo '<a href="tel:+'.$Self.'" class="icon-'.$___lastForKey.'" target="_blank" rel="noreferrer">';
echo "</a>";
}else if($___lastForKey=="mail"){
echo '<a href="mailto:'.$Self.'" class="icon-'.$___lastForKey.'" target="_blank" rel="noreferrer">';
echo "</a>";
}else if($___lastForKey=="whatsapp"){
echo '<a href="https://wa.me/'. preg_replace("/[^0-9]/","",$Self) .'" class="icon-'.$___lastForKey.'" target="_blank" rel="noreferrer">';
echo "</a>";
}else{
echo '<a href="'.$Self.'" class="icon-'.$___lastForKey.'" target="_blank" rel="noreferrer">';
echo "</a>";
}}
$Self=$___ReverseSelf39;
};
echo "</div>";
}
 ;
$WebBuilder["BasicModules"]["Header"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<h2 id="'.Seo(Language($Self)).'" style="'.DisplayCss($Self["display"]).''.ItemCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo Language($Self);
echo "</h2>";
}
 ;
$WebBuilder["BasicModules"]["Header2"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<h3 style="'.DisplayCss($Self["display"]).''.ItemCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo Language($Self);
echo "</h3>";
}
 ;
$WebBuilder["BasicModules"]["Paragraph"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<section style="'.DisplayCss($Self["display"]).''.ItemCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo Language($Self);
echo "</section>";
}
 ;
$WebBuilder["BasicModules"]["BannerText"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<h3 class="banner-text" style="'.DisplayCss($Self["display"]).''.ItemCss($Self["display"]).'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo Language($Self);
echo "</h3>";
}
 ;
$WebBuilder["BasicModules"]["Image"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
$img=DB::single("Select * From files Where id=:id",array("id"=>$Self["id"]));;
if($img["ext"]!="svg"){
echo '<picture style="height:'.$Self["height"].'" type="'.$Self["imageType"].'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo '<span class="top-text">';
echo ' '. $Self["topText"][CurrentLanguage()] .'';
echo "</span>";
echo '<span class="bottom-text">';
echo ' '. $Self["bottomText"][CurrentLanguage()] .'';
echo "</span>";
{
$___iterators= [1920,1400,1080,720,480];
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf40=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
echo '<source type="image/webp" data-size="'.$Self.'" srcset="'.ImagePath($img,$Self,"webp").' '.$Self.'w" media="(min-width:'.($Self-100).'px)">';
echo "</source>";
echo '<source type="image/x-jp2" data-size="'.$Self.'" srcset="'.ImagePath($img,$Self,"jp2").' '.$Self.'w" media="(min-width:'.($Self-100).'px)">';
echo "</source>";
echo '<source type="'.Response::MimeContentType(".".$img['ext']).'" data-size="'.$Self.'" srcset="'.ImagePath($img,$Self).' '.$Self.'w" media="(min-width:'.($Self-100).'px)">';
echo "</source>";
}
$Self=$___ReverseSelf40;
};
echo '<img style="'.EchoCss("object-fit",$Self["objectFit"]).'" src="'.ImagePath($img,"480").'" alt="'.$img["alt"].'">';
echo "</img>";
echo "</picture>";
}else{
echo '<picture style="height:'.$Self["height"].'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo '<img style="'.EchoCss("object-fit",$Self["objectFit"]).'" src="'.ImagePath($img,"480").'" alt="'.$img["alt"].'">';
echo "</img>";
echo "</picture>";
}}
 ;
$WebBuilder["BasicModules"]["HTML"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<div animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo ''.$Self["data"].'';
echo "</div>";
}
 ;
$WebBuilder["BasicModules"]["Button-WebSite"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
if(startsWith($Self["value"],"/")){
echo '<a class="button" href="'.$Self["value"].'" rel="nofollow" button-type="'.$Self["display"]["buttonType"].'" button-size="'.$Self["display"]["buttonSize"].'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'" hreflang="'.CurrentLanguage().'">';
echo Language($Self);
echo "</a>";
}else{
echo '<a class="button" href="'.$Self["value"].'" rel="nofollow" button-type="'.$Self["display"]["buttonType"].'" button-size="'.$Self["display"]["buttonSize"].'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'" hreflang="'.CurrentLanguage().'">';
echo Language($Self);
echo "</a>";
}}
 ;
$WebBuilder["BasicModules"]["Button-Link"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<a class="button" href="'.PageUrlFromId($Self["value"]).'" button-type="'.$Self["display"]["buttonType"].'" button-size="'.$Self["display"]["buttonSize"].'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo Language($Self);
echo "</a>";
}
 ;
$WebBuilder["BasicModules"]["Button-Phone"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<a class="button" href="tel:'.$Self["value"].'" button-type="'.$Self["display"]["buttonType"].'" button-size="'.$Self["display"]["buttonSize"].'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo '<i class="icon-phone">';
echo "</i>";
echo Language($Self);
echo "</a>";
}
 ;
$WebBuilder["BasicModules"]["Button-Email"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;
echo '<a class="button" href="mailto:'.$Self["value"].'" button-type="'.$Self["display"]["buttonType"].'" button-size="'.$Self["display"]["buttonSize"].'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo '<i class="icon-mail">';
echo "</i>";
echo Language($Self);
echo "</a>";
}
 ;
$WebBuilder["BasicModules"]["Button-Download"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;

	$file=DB::single("Select * From files Where id=:id",array("id"=>$Self["value"]));
	$download=$file["hash"].".".$file["ext"];
	if(endsWith($file["alt"],".".$file["ext"])) $download=$file["alt"];
;
echo '<a class="button" href="/uploads/'.$file["hash"].".".$file["ext"].'" target="_blank" download="'.$download.'" button-type="'.$Self["display"]["buttonType"].'" button-size="'.$Self["display"]["buttonSize"].'" animate-scroll="'.$Self["display"]["animation"].'" animate-scroll-direction="'.$Self["display"]["animationDirection"].'">';
echo '<i class="icon-download">';
echo "</i>";
echo Language($Self);
echo "</a>";
}
 ;
$WebBuilder["BasicModules"]["PageList"] = function ($Self,$Global=null){
if($Global==null) $Global=$Self;$Keys=array();
$___lastForKey=null;

	$pages=DB::Select("SELECT props,files.alt as 'alt',files.hash as 'hash',files.ext as 'ext' FROM pages LEFT JOIN files ON files.id=REPLACE(JSON_EXTRACT(pages.props,'$.image') ,'\"','') WHERE pages.parent=:id",
			array("id"=>$Self["pageId"]));
;
echo '<div class="page-list">';
{
$___iterators=$pages;
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf41=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
$Self["props"] = $props = Json::Parse($Self["props"]);;
echo '<div class="page-list-item">';
echo '<div class="page-list-text">';
echo '<a href="'.PageUrl($Self).'" hreflang="'.CurrentLanguage().'">';
echo '<h3>';
echo ''. Lang($props)["title"] .'';
echo "</h3>";
echo "</a>";
echo '<p>';
echo ''. Lang($props)["description"] .'';
echo "</p>";
echo '<div class="tags">';
$tags=new ArrayList(explode(",",Lang($props)["keywords"]));;
{
$___iterators= $tags->Map(function($e){return trim($e);})->Filter(function($e){return $e!="";})->ToList();;
if(!isset($___iterators))$___iterators=array();
$___forKeyName='';
$___ReverseSelf42=$Self;
foreach($___iterators as $___lastForKey => $___Self){
$Keys[$___forKeyName]=$___lastForKey;
$Self=$___Self;
echo '<span>';
echo ''.$Self.'';
echo "</span>";
}
$Self=$___ReverseSelf42;
};
echo "</div>";
echo "</div>";
echo '<a class="page-list-picture" href="'.PageUrl($Self).'" hreflang="'.CurrentLanguage().'">';
echo '<picture>';
echo '<filter>';
echo "</filter>";
print_image( [$Self["alt"],$Self["hash"],$Self["ext"]] ,[480,1080]);;
echo "</picture>";
echo "</a>";
echo "</div>";
}
$Self=$___ReverseSelf41;
};
echo "</div>";
}
 ;
