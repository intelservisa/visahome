function showPopup(a){jQuery("#"+a).modal("show")}function showSecurePopup(a){$("#"+a).modal({keyboard:false,backdrop:"static"})}function closePopup(a){jQuery("#"+a).modal("hide");$(".modal-backdrop").remove()}function tabClick(a){$("#"+a).siblings().removeClass("tab-active");$("#"+a).siblings().addClass("tab-inactive");$("#"+a).removeClass("tab-inactive");$("#"+a).addClass("tab-active")}function blockContent(a){switch(a.status){case"begin":jQuery(".blockable-content").block({css:{border:"none",padding:"7px 0px",backgroundColor:"#000","-webkit-border-radius":"7px","-moz-border-radius":"7px",opacity:1,color:"#fff",width:"25%"},message:$("#blockingDiv")});break;case"complete":jQuery(".blockable-content").unblock();break;case"success":jQuery(".blockable-content").unblock();break}}function oncomplete(data,doBlockContent,callBack){if(doBlockContent=="true"){blockContent(data)}if(callBack!=null){switch(data.status){case"complete":case"begin":break;case"success":var callBackAsFunction=function(){eval(callBack)};if(typeof callBackAsFunction!=="function")throw"You didn't pass me a function!";callBackAsFunction();break}}}function menuClicked(a,b){document.getElementById("menuFrm:menuItem").value=a;document.getElementById("menuFrm:menuItemLink").click();document.getElementById("cardContent").style.display="none";document.getElementById("actionsContent").style.display="none";var c=$('.submenu');for(var d=0;d<c.length;d++){c[d].style.display="none"}$("#submenu_"+b).hide().fadeIn("slow");return false}function menuVacClicked(a,b){document.getElementById("menuFrm:menuItem").value=a;$(".mVac_"+a).click();document.getElementById("cardContent").style.display="none";document.getElementById("actionsContent").style.display="none";var c=$('.submenu');for(var d=0;d<c.length;d++){c[d].style.display="none"}$("#submenu_"+b).hide().fadeIn("slow");return false}function closeSelectors(){document.getElementById("cardContent").style.display="none";document.getElementById("actionsContent").style.display="none";return false}function hideAllSubMenus(){var a=document.getElementsByClassName("submenu");for(var b=0;b<a.length;b++){a[b].style.display="none"}}jQuery(function(){function a(){jQuery("#cardContent").slideToggle("normal");jQuery("#cardsDropDown").toggleClass("selected")}jQuery("#cardsDropDown").click(function(){a();return false})});jQuery(function(){function a(){$("#actionsContent").slideToggle("normal");$("#actionsDropDown").toggleClass("selected")}$("#actionsDropDown").click(function(){a();return false})})