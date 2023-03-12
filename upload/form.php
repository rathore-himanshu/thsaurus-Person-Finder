<?php
	session_start();
	if(isset($_SESSION['name']))
	$nm=$_SESSION['name'];
	else
	{
		$_SESSION['msg']= "Please login first!!";
		header("Refresh:0.1; url=../login/login.php");
	}

?>

<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>thsaurus - Upload Details of Missing</title>
    <link rel="icon" type="x-icon/image" href="logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="css/font.css" rel='stylesheet' type='text/css' />

    <!-- font size switcher -->
    <link rel="alternate stylesheet" type="text/css" media="screen" title="small" href="css/css_small.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="bigger" href="css/css_bigger.css" />

    <link rel="alternate stylesheet" type="text/css" media="screen" title="fusiaBlack" href="css/fusiaBlack.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="yelBlack" href="css/yelBlack.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="yelBlue" href="css/yelBlue.css" />

    <link href="css/displaytag.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/smoothness/jquery-ui.css" />


    <script type="text/javascript" language="javascript" src="js/switcher.js"></script>

    <script src="js/jquery-css-transform.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>

    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/customJQuery.js"></script>
    <script type="text/javascript" src="js/userValidation.js"></script>
    <script type="text/javascript" src="js/missingSightingValidation.js"></script>
    <script type="text/javascript" src="js/tabs.js"></script>
    <script src="js/commonAjax.js" type="text/javascript"></script>

    <script type="text/javaScript">

        //Patch to fix the cache control in firefox (disable offline mode)
        function checkOffline() {

            var isOnline = navigator.onLine;
            var currentURL = document.URL;
            var isErrorPage = /error$/.test(currentURL);

            if (!isOnline && !isErrorPage) {

                //alert("Offline mode detected. Going to error page");
                window.location.assign("error");
            }
        }

    </script>

    <script language="javascript" type="text/javascript">
        //Loading animation during ajax events
        $(document).on({
            ajaxStart: function () { $("body").addClass("loading"); },
            ajaxStop: function () { $("body").removeClass("loading"); }
        });
    </script>

</head>

<body onload="checkOffline()">

    <div id="mainContainer">



        <script src="js/modernizr.custom.js"></script>
        <link type="text/css" rel="stylesheet" href="css/popModal.css">
        <link type="text/css" rel="stylesheet" href="css/base.css">
        <link type="text/css" rel="stylesheet" href="css/lightboxzoom.css">
        <script src="js/popModal.js"></script>
        <script>
            $(function () {
                $('#popModal_ex1').click(function () {
                    $('#popModal_ex1').popModal({
                        html: $('#content'),
                        placement: 'bottomLeft',
                        showCloseBut: false,
                        onDocumentClickClose: true,
                        onDocumentClickClosePrevent: '',
                        overflowContent: false,
                        inline: true,
                        beforeLoadingContent: 'Please, waiting...',
                        onOkBut: function () { },
                        onCancelBut: function () { },
                        onLoad: function () { },
                        onClose: function () { }
                    });
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('label.animate').click(function (e) {
                    $('ul.animate').toggle();
                    e.stopPropagation();
                });
                $(document).click(function (e) {
                    $('ul.animate').hide();
                });
            });
        </script>
        <!-- Header Start -->

        <div class="clear"></div>

        <div class="wrapper section">
            <div id="content">


                <link rel="stylesheet" type="text/css" href="css/horizontal-scroll.css" />
                <link rel="stylesheet" type="text/css" href="css/jquery.datepick.css" />
                <script type="text/javascript" src="js/jquery.plugin.js"></script>

                <script type="text/javascript" src="js/jquery.datepick.js"></script>


                <script>
                    $(function () {
                        $('.popupDatepicker').datepick();
                        $('#inlineDatepicker').datepick({ onSelect: showDate });
                    });

                    function showDate(date) {
                        alert('The date chosen is ' + date);
                    }
                </script>

                <script type="text/javascript" language="javascript">

                    google.load("elements", "1", {
                        packages: "transliteration"
                    });

                    function onLoad() {

                        var options = {

                            sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
                            destinationLanguage: [google.elements.transliteration.LanguageCode.HINDI],
                            shortcutKey: 'ctrl+g',
                            transliterationEnabled: true
                        };

                        var control = new google.elements.transliteration.TransliterationControl(options);

                        var ids = ["name", "description", "disability", "identification", "fathername", "mothername", "address"];
                        control.makeTransliteratable(ids);
                    }

                    google.setOnLoadCallback(onLoad);
                </script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#sub").attr('disabled', true);
                        $('input[name=confirm]').on('change', function () {
                            if (this.checked) {
                                $("#sub").attr('disabled', false);
                                $("#sub").removeClass("disable-btn").addClass("basic-btn");
                            }
                            else {
                                $("#sub").attr('disabled', true);
                                $("#sub").removeClass("basic-btn").addClass("disable-btn");
                            }
                        });
                    });
                </script>

                <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
                <script>
                    (function ($) {
                        $(window).load(function () {

                            $("#img-content").mCustomScrollbar({
                                axis: "x",
                                theme: "light-3",
                                advanced: { autoExpandHorizontalScroll: true }
                            });

                            $("#video-content").mCustomScrollbar({
                                axis: "x",
                                theme: "light-3",
                                advanced: { autoExpandHorizontalScroll: true }
                            });
                        });
                    })(jQuery);
                </script>
                <style type="text/css">
                    .pocsoPopupStyle {
                        min-height: 20px;
                        padding: 19px;
                        margin-bottom: 20px;
                        background-color: #f5f5f5;
                        border: 1px solid #e3e3e3;
                        border-radius: 4px;
                        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
                        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
                        width: 400px;
                    }

                        .pocsoPopupStyle h4 {
                            text-align: center;
                            margin: 0 0 10px 0;
                            font-weight: 500;
                        }

                        .pocsoPopupStyle p {
                            text-align: justify;
                        }

                    #pocsoPopup {
                        -webkit-transform: scale(0.8);
                        -moz-transform: scale(0.8);
                        -ms-transform: scale(0.8);
                        transform: scale(0.8);
                    }

                    .popup_visible #pocsoPopup {
                        -webkit-transform: scale(1);
                        -moz-transform: scale(1);
                        -ms-transform: scale(1);
                        transform: scale(1);
                    }

                    input[type=checkbox] {
                        visibility: hidden;
                    }

                    .ui-widget .ui-widget {
                        padding: 3px 10px
                    }
                </style>
                <script type="text/javascript" src="js/jquery.popupoverlay.js"></script>
                <script>


                    $(document).ready(function () {

                        //Display the first tab
                        var tabsRow = document.getElementById("tabsRow");
                        var firstTab = tabsRow.firstChild;
                        while (firstTab.nodeType != 1) {
                            firstTab = firstTab.nextSibling;
                        }
                        activateTab(firstTab.getAttribute('id'));
                        //Add more photos and videos
                        var max_fields = 5; //maximum input boxes allowed
                        var max_fieldsV = 5; //maximum input boxes allowed for Videos
                        var photoWrapper = $("#photoUploadDiv"); //Fields wrapper
                        var videoWrapper = $("#videoUploadDiv"); //Fields wrapper
                        var addPhotoButton = $("#addPhotoButton"); //Add button ID
                        var addVideoButton = $("#addVideoButton"); //Add button ID

                        var x = 1; //initlal text box count
                        var y = 1; //initlal text box count for Videos

                        $(addPhotoButton).click(function (e) { //on add input button click
                            var photoUploaded = 0;
                            e.preventDefault();
                            if (x + photoUploaded < max_fields) { //max input box allowed
                                x++; //text box increment
                                $(photoWrapper).append('<div style="text-align: left; margin-bottom:5px;"><input type="file" name="photoFiles"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
                            }
                        });
                        $(addVideoButton).click(function (e) { //on add input button click
                            var videoUploaded = 0;
                            e.preventDefault();
                            if (y + videoUploaded < max_fieldsV) { //max input box allowed
                                y++; //text box increment
                                $(videoWrapper).append('<div style="text-align: left; margin-bottom:5px;"><input type="file" name="videoFiles"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
                            }

                        });

                        $(photoWrapper).on("click", ".remove_field", function (e) { //user click on remove text

                            e.preventDefault(); $(this).parent('div').remove();
                            x--;
                        });

                        $(videoWrapper).on("click", ".remove_field", function (e) { //user click on remove text

                            e.preventDefault(); $(this).parent('div').remove();
                            y--;
                        });

                        var displayPOCSOPopup = true;

                        if (displayPOCSOPopup != null && displayPOCSOPopup == true) {

                            //Display the POCSO Popup
                            $('#pocsoPopup').popup({
                                autoopen: true,
                                transition: 'all 0.3s'
                            });
                        }
                    });
                    function activateTab(tab) {
                        //Reset the old active tab
                        $(".activeTab").each(function () {

                            $(this).removeClass("activeTab").addClass("tab");
                        });

                        //Set the selected tab as active
                        $("#" + tab).removeClass("tab").addClass("activeTab");

                        //Hide all content
                        $(".tabContent").each(function () {

                            $(this).hide();
                        });
                        //Show active content
                        $("#" + tab + "Content").show();
                    }
                </script>
                <script type="text/javascript">

                    $(document).ready(function () {
                        if (document.getElementById('policestationlocation').value != '-1') {
                            document.getElementById('firdt').disabled = false;
                        } else {
                            document.getElementById('firdt').disabled = true;
                        }


                        if ($("#disability-yestrue").attr("checked") == "checked") {
                            $("#detail-txt").show();

                            $("#detail-txtarea").show();
                        }

                        $('input[type="radio"]').click(function () {

                            if ($(this).attr("id") == "disability-yestrue") {
                                $("#detail-txt").show();

                                $("#detail-txtarea").show();
                            }

                            if ($(this).attr("id") == "disability-yesfalse") {
                                $("#detail-txt").hide();

                                $("#detail-txtarea").hide();

                            }

                        });

                    });
                </script>

                <div style="width: 100%;text-align: center; margin-top:10px;">
                    <h2 class="heading" style="text-align:left;">Upload Details of Missing</h2>



                    <div class="missingTabs">
                        <div id="tabsRow" class="tabsRow">
                            <div id="basic" class="activeTab" onclick="activateTab('basic')">
                                <a href="#" class="tabsLink">Basic Details</a>
                            </div>
                            <div id="facial" class="tab" onclick="activateTab('facial')">
                                <a href="#" class="tabsLink">Facial Attributes</a>
                            </div>
                            <div id="physical" class="tab" onclick="activateTab('physical')">
                                <a href="#" class="tabsLink">Physical Attributes</a>
                            </div>
                            <div id="family" class="tab" onclick="activateTab('family')">
                                <a href="#" class="tabsLink">Family Details</a>
                            </div>
                            <div id="location" class="tab" onclick="activateTab('location')">
                                <a href="#" class="tabsLink">Location Details</a>
                            </div>
                            <div id="upload" class="tab" onclick="activateTab('upload')">
                                <a href="#" class="tabsLink">Upload Media</a>
                            </div>
                            <div id="fir" class="tab" onclick="activateTab('fir')">
                                <a href="#" class="tabsLink">FIR Detail</a>
                            </div>
                            <div id="confirmation" class="tab"
                                 onclick="activateTab('confirmation')">
                                <a href="#" class="tabsLink">Confirmation</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <fieldset style="min-height:300px;">
                        <form id="missingEntry" name="missingEntry" action="upload.php" method="post" enctype="multipart/form-data">

                            <div id="basicContent" class="tabContent">
                                <span style="font-size:1.8em;">Please enter the attributes as at the time of missing.</span>
                                <br />
                                <br />
                                <input type="hidden" name="profile.id" value="" id="missingEntry_profile_id" />
                                <table class="formTable" style="width: 100%;">
                                    <tr>
                                        <td width="15%">Name</td>
                                        <td width="35%">
                                            <div id="wwgrp_name" class="wwgrp">
                                                <div id="wwctrl_name" class="wwctrl">

                                                    <input type="text" name="profileTextualDetail.name" maxlength="99" value="" id="name" placeholder="Missing Name" />
                                                </div>
                                            </div>
                                        </td>
                                        <td width="15%"><span style="color: red;">*</span>Gender</td>
                                        <td width="35%">
                                            <div id="wwgrp_gender" class="wwgrp">
                                                <div id="wwctrl_gender" class="wwctrl">

                                                    <select name="profile.gender.id" id="gender" class="required">
                                                        <option value="-">
                                                            -- Select --
                                                        </option>
                                                        <option value="F">Female</option>
                                                        <option value="M">Male</option>
                                                        <option value="T">Transgender</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Age at the time of missing</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_ageYrs" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_ageYrs" class="wwctrl">

                                                    <select name="profile.ageYrs" id="missingEntry_profile_ageYrs" style="min-width:105px; margin-right:13px; float:left;">
                                                        <option value="-1">
                                                            -- Year --
                                                        </option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option>
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option>
                                                        <option value="48">48</option>
                                                        <option value="49">49</option>
                                                        <option value="50">50</option>
                                                        <option value="51">51</option>
                                                        <option value="52">52</option>
                                                        <option value="53">53</option>
                                                        <option value="54">54</option>
                                                        <option value="55">55</option>
                                                        <option value="56">56</option>
                                                        <option value="57">57</option>
                                                        <option value="58">58</option>
                                                        <option value="59">59</option>
                                                        <option value="60">60</option>
                                                        <option value="61">61</option>
                                                        <option value="62">62</option>
                                                        <option value="63">63</option>
                                                        <option value="64">64</option>
                                                        <option value="65">65</option>
                                                        <option value="66">66</option>
                                                        <option value="67">67</option>
                                                        <option value="68">68</option>
                                                        <option value="69">69</option>
                                                        <option value="70">70</option>
                                                        <option value="71">71</option>
                                                        <option value="72">72</option>
                                                        <option value="73">73</option>
                                                        <option value="74">74</option>
                                                        <option value="75">75</option>
                                                        <option value="76">76</option>
                                                        <option value="77">77</option>
                                                        <option value="78">78</option>
                                                        <option value="79">79</option>
                                                        <option value="80">80</option>
                                                        <option value="81">81</option>
                                                        <option value="82">82</option>
                                                        <option value="83">83</option>
                                                        <option value="84">84</option>
                                                        <option value="85">85</option>
                                                        <option value="86">86</option>
                                                        <option value="87">87</option>
                                                        <option value="88">88</option>
                                                        <option value="89">89</option>

                                                    </select>

                                                </div>
                                            </div>
                                            <div id="wwgrp_missingEntry_profile_ageMonths" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_ageMonths" class="wwctrl">

                                                    <select name="profile.ageMonths" id="missingEntry_profile_ageMonths" style="min-width:105px; float:left;">
                                                        <option value="-1">
                                                            -- Month --
                                                        </option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Height</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_heightFeet" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_heightFeet" class="wwctrl">

                                                    <select name="profile.heightFeet" id="missingEntry_profile_heightFeet" style="min-width:105px; margin-right:13px; float:left;">
                                                        <option value="-1">
                                                            -- Feet --
                                                        </option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>


                                                    </select>

                                                </div>
                                            </div>
                                            <div id="wwgrp_missingEntry_profile_heightInches" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_heightInches" class="wwctrl">

                                                    <select name="profile.heightInches" id="missingEntry_profile_heightInches" style="min-width:105px; float:left;">
                                                        <option value="-1">
                                                            -- Inches --
                                                        </option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Date of Missing </td>
                                        <td>
                                            <div id="wwgrp_popup_container" class="wwgrp">
                                                <div id="wwctrl_popup_container" class="wwctrl">

                                                    <input type="text" name="eventDate" size="10" maxlength="10" value="" readonly="readonly" id="popup_container" class="popupDatepicker" placeholder="Enter the date of Missing" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span style="color: red;">*</span>Relationship</td>
                                        <td>
                                            <div id="wwgrp_relationship" class="wwgrp">
                                                <div id="wwctrl_relationship" class="wwctrl">

                                                    <select name="profile.relationship.id" id="relationship" maxlength="1">
                                                        <option value="-">
                                                            -- Select --
                                                        </option>
                                                        <option value="P">Parent</option>
                                                        <option value="G">Legal Guardian</option>
                                                        <option value="O">Other</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_dateOfBirth" class="wwgrp">
                                                <div id="wwctrl_missingEntry_dateOfBirth" class="wwctrl">

                                                    <input type="text" name="dateOfBirth" size="10" maxlength="10" value="" readonly="readonly" id="missingEntry_dateOfBirth" class="popupDatepicker" placeholder="Enter the date of Birth" />
                                                </div>
                                            </div>
                                        </td>
                                        <td>Differently Abled(Physical/Mental) </td>
                                        <td>
                                            <div id="wwgrp_disability-yes" class="wwgrp">
                                                <div id="wwctrl_disability-yes" class="wwctrl">

                                                    <input type="radio" name="profile.physicalDisability" id="disability-yestrue" value="true" /><label for="disability-yestrue">Yes</label>
                                                    <input type="radio" name="profile.physicalDisability" id="disability-yesfalse" value="false" /><label for="disability-yesfalse">No</label>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>
                                            <div id="wwgrp_description" class="wwgrp">
                                                <div id="wwctrl_description" class="wwctrl">

                                                    <textarea name="profileTextualDetail.description" cols="35" rows="3" id="description" maxlength="999" placeholder="Describe how the Missing was lost"></textarea>
                                                </div>
                                            </div>
                                            <span style="margin-top:5px; color:#7d7d7d; display:inline-block;">Only "," "." and Alphanumaric Characters are Allowed</span>
                                            <div id="wwgrp_lab" class="wwgrp">
                                                <div id="wwctrl_lab" class="wwctrl">

                                                    <label id="lab">
                                                        &nbsp;
                                                    </label>
                                                </div>
                                            </div>
                                        </td>

                                        <td id="detail-txt" style="display: none;">Disability Details   </td>
                                        <td id="detail-txtarea" style="display: none;">
                                            <div id="wwgrp_disability" class="wwgrp">
                                                <div id="wwctrl_disability" class="wwctrl">

<textarea name="profileTextualDetail.disabilityDetails" cols="30" rows="3" id="disability" maxlength="999" placeholder="Describe the disabilities"></textarea>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Mentally ill </td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_mentalDisability" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_mentalDisability" class="wwctrl">

                                                    <input type="radio" name="profile.mentalDisability" id="missingEntry_profile_mentalDisabilitytrue" value="true" /><label for="missingEntry_profile_mentalDisabilitytrue">Yes</label>
                                                    <input type="radio" name="profile.mentalDisability" id="missingEntry_profile_mentalDisabilityfalse" value="false" /><label for="missingEntry_profile_mentalDisabilityfalse">No</label>
                                                </div>
                                            </div>

                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align: center;">
                                            <a href="#" style="padding:" class="basic-btn" onclick="activateTab('facial')">Next</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="facialContent" class="tabContent">
                                <span style="font-size:1.8em;">Please enter the attributes as at the time of missing.   </span>
                                <br />
                                <br />
                                <table class="formTable" style="width: 100%;">
                                    <tr>
                                    <tr>
                                        <td>Hair Length</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_hairSize_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_hairSize_id" class="wwctrl">

                                                    <select name="profile.hairSize.id" id="missingEntry_profile_hairSize_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Short</option>
                                                        <option value="2">Medium</option>
                                                        <option value="3">Long</option>
                                                        <option value="4">No Hair</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Hair Color</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_hairColor_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_hairColor_id" class="wwctrl">

                                                    <select name="profile.hairColor.id" id="missingEntry_profile_hairColor_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Black</option>
                                                        <option value="2">Brown</option>
                                                        <option value="3">Gray</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Eye Type</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_eyesType_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_eyesType_id" class="wwctrl">

                                                    <select name="profile.eyesType.id" id="missingEntry_profile_eyesType_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Left Artificial</option>
                                                        <option value="2">Right Artificial</option>
                                                        <option value="3">Left Squint</option>
                                                        <option value="4">Right Squint</option>
                                                        <option value="5">Others</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Eye Color </td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_eyeColor_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_eyeColor_id" class="wwctrl">

                                                    <select name="profile.eyeColor.id" id="missingEntry_profile_eyeColor_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Black</option>
                                                        <option value="2">Brown</option>
                                                        <option value="3">Blue</option>
                                                        <option value="4">Reddish</option>
                                                        <option value="5">Other</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ears Type</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_earsType_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_earsType_id" class="wwctrl">

                                                    <select name="profile.earsType.id" id="missingEntry_profile_earsType_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Folded</option>
                                                        <option value="2">Other</option>
                                                        <option value="3">Normal</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Ears Size</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_earsSize_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_earsSize_id" class="wwctrl">

                                                    <select name="profile.earsSize.id" id="missingEntry_profile_earsSize_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Large</option>
                                                        <option value="2">Small</option>
                                                        <option value="3">Normal</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lips Type   </td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_lipsType_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_lipsType_id" class="wwctrl">

                                                    <select name="profile.lipsType.id" id="missingEntry_profile_lipsType_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Wrinkled</option>
                                                        <option value="2">Drooping</option>
                                                        <option value="3">Thin</option>
                                                        <option value="4">Uneven</option>
                                                        <option value="5">Flat Upper lip</option>
                                                        <option value="6">Full Lips</option>
                                                        <option value="7">Cleft Lip</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Lips Color </td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_lipsColor_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_lipsColor_id" class="wwctrl">

                                                    <select name="profile.lipsColor.id" id="missingEntry_profile_lipsColor_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Pink</option>
                                                        <option value="2">Purple</option>
                                                        <option value="3">Red</option>
                                                        <option value="4">Black</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Front Teeth   </td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_frontTeeth_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_frontTeeth_id" class="wwctrl">

                                                    <select name="profile.frontTeeth.id" id="missingEntry_profile_frontTeeth_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Normal</option>
                                                        <option value="2">Broken</option>
                                                        <option value="3">One Missing</option>
                                                        <option value="4">Two Missing</option>
                                                        <option value="5">No Teeth</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Spectacles Type   </td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_spectaclesType_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_spectaclesType_id" class="wwctrl">

                                                    <select name="profile.spectaclesType.id" id="missingEntry_profile_spectaclesType_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Round Frame</option>
                                                        <option value="2">Rectange Frame</option>
                                                        <option value="3">No Spectacles</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Spectacles Color</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_spectaclesColor_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_spectaclesColor_id" class="wwctrl">

                                                    <select name="profile.spectaclesColor.id" id="missingEntry_profile_spectaclesColor_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Black</option>
                                                        <option value="2">Blue</option>
                                                        <option value="3">Brown</option>
                                                        <option value="4">Cyan</option>
                                                        <option value="5">Gray</option>
                                                        <option value="6">Green</option>
                                                        <option value="7">Magenta</option>
                                                        <option value="8">Orange</option>
                                                        <option value="9">Pink</option>
                                                        <option value="10">Purple</option>
                                                        <option value="11">Red</option>
                                                        <option value="12">Violet</option>
                                                        <option value="13">White</option>
                                                        <option value="14">Yellow</option>
                                                        <option value="15">Other</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align: center;">
                                            <a href="#" class="basic-btn" onclick="activateTab('physical')">Next</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="physicalContent" class="tabContent">
                                <span style="font-size:1.8em;">Please enter the attributes as at the time of missing.</span>
                                <br />
                                <br />
                                <table class="formTable" style="width: 100%;">
                                    <tr>
                                        <td>Complexion  </td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_complexion_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_complexion_id" class="wwctrl">

                                                    <select name="profile.complexion.id" id="missingEntry_profile_complexion_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Fair</option>
                                                        <option value="2">Wheatish</option>
                                                        <option value="3">Dark</option>
                                                        <option value="4">Very Fair</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Build</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_build_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_build_id" class="wwctrl">

                                                    <select name="profile.build.id" id="missingEntry_profile_build_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Heavy</option>
                                                        <option value="2">Normal</option>
                                                        <option value="3">Thin</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>Neck Type </td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_neckType_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_neckType_id" class="wwctrl">

                                                    <select name="profile.neckType.id" id="missingEntry_profile_neckType_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Thin</option>
                                                        <option value="2">Thick</option>
                                                        <option value="3">Normal</option>
                                                        <option value="4">Short</option>
                                                        <option value="5">Long</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Top Wear</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_topWear_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_topWear_id" class="wwctrl">

                                                    <select name="profile.topWear.id" id="missingEntry_profile_topWear_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Shirt</option>
                                                        <option value="2">Top</option>
                                                        <option value="3">T shirt</option>
                                                        <option value="4">Vest</option>
                                                        <option value="5">Kurta</option>
                                                        <option value="6">Kurti</option>
                                                        <option value="7">Nothing</option>
                                                        <option value="8">School Uniform</option>
                                                        <option value="9">Saree</option>
                                                        <option value="10">Half Saree</option>
                                                        <option value="11">Frock</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Top Wear Color</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_topWearColor_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_topWearColor_id" class="wwctrl">

                                                    <select name="profile.topWearColor.id" id="missingEntry_profile_topWearColor_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Black</option>
                                                        <option value="2">Blue</option>
                                                        <option value="3">Brown</option>
                                                        <option value="4">Cyan</option>
                                                        <option value="5">Gray</option>
                                                        <option value="6">Green</option>
                                                        <option value="7">Magenta</option>
                                                        <option value="8">Orange</option>
                                                        <option value="9">Pink</option>
                                                        <option value="10">Purple</option>
                                                        <option value="11">Red</option>
                                                        <option value="12">Violet</option>
                                                        <option value="13">White</option>
                                                        <option value="14">Yellow</option>
                                                        <option value="15">Other</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bottom Wear</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_bottomWear_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_bottomWear_id" class="wwctrl">

                                                    <select name="profile.bottomWear.id" id="missingEntry_profile_bottomWear_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Capry</option>
                                                        <option value="2">Cargos</option>
                                                        <option value="3">Half Pants</option>
                                                        <option value="4">Jeans</option>
                                                        <option value="5">Jeggings</option>
                                                        <option value="6">Lower</option>
                                                        <option value="7">Skirt</option>
                                                        <option value="8">Trouser/Full Pants</option>
                                                        <option value="9">School Uniform</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Bottom Wear Color</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_bottomWearColor_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_bottomWearColor_id" class="wwctrl">

                                                    <select name="profile.bottomWearColor.id" id="missingEntry_profile_bottomWearColor_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Black</option>
                                                        <option value="2">Blue</option>
                                                        <option value="3">Brown</option>
                                                        <option value="4">Cyan</option>
                                                        <option value="5">Gray</option>
                                                        <option value="6">Green</option>
                                                        <option value="7">Magenta</option>
                                                        <option value="8">Orange</option>
                                                        <option value="9">Pink</option>
                                                        <option value="10">Purple</option>
                                                        <option value="11">Red</option>
                                                        <option value="12">Violet</option>
                                                        <option value="13">White</option>
                                                        <option value="14">Yellow</option>
                                                        <option value="15">Other</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Foot Wear</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_footWear_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_footWear_id" class="wwctrl">

                                                    <select name="profile.footWear.id" id="missingEntry_profile_footWear_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Shoes</option>
                                                        <option value="2">Belly</option>
                                                        <option value="3">Sandals</option>
                                                        <option value="4">Slippers</option>
                                                        <option value="5">Barefoot</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Foot Wear Color</td>
                                        <td>
                                            <div id="wwgrp_missingEntry_profile_footWearColor_id" class="wwgrp">
                                                <div id="wwctrl_missingEntry_profile_footWearColor_id" class="wwctrl">

                                                    <select name="profile.footWearColor.id" id="missingEntry_profile_footWearColor_id">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="1">Black</option>
                                                        <option value="2">Blue</option>
                                                        <option value="3">Brown</option>
                                                        <option value="4">Cyan</option>
                                                        <option value="5">Gray</option>
                                                        <option value="6">Green</option>
                                                        <option value="7">Magenta</option>
                                                        <option value="8">Orange</option>
                                                        <option value="9">Pink</option>
                                                        <option value="10">Purple</option>
                                                        <option value="11">Red</option>
                                                        <option value="12">Violet</option>
                                                        <option value="13">White</option>
                                                        <option value="14">Yellow</option>
                                                        <option value="15">Other</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Identification Marks</td>
                                        <td colspan="3">
                                            <div id="wwgrp_identification" class="wwgrp">
                                                <div id="wwctrl_identification" class="wwctrl">

<textarea name="profileTextualDetail.identificationMarks" cols="50" rows="2" id="identification" maxlength="100" placeholder="Any Identification mark on Missing?"></textarea>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align: center;">
                                            <a href="#" class="basic-btn" onclick="activateTab('family')">Next</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="familyContent" class="tabContent">
                                <table class="formTable" style="width: 100%; margin-bottom: 10px;">
                                    <tr>
                                        <td colspan="2"><h4 style="font-size: 1.6em; font-weight:400;" class="heading">Father Details  </h4></td>
                                        <td colspan="2"><h4 style="font-size: 1.6em; font-weight:400;" class="heading">Mother Details</h4></td>
                                    </tr>
                                    <tr>
                                        <td>Father Name  </td>
                                        <td>
                                            <div id="wwgrp_fathername" class="wwgrp">
                                                <div id="wwctrl_fathername" class="wwctrl">

                                                    <input type="text" name="profileTextualDetail.fatherName" size="35" maxlength="50" value="" id="fathername" placeholder="Missing's Father Name" />
                                                </div>
                                            </div>
                                        </td>
                                        <td>Mother Name </td>
                                        <td>
                                            <div id="wwgrp_mothername" class="wwgrp">
                                                <div id="wwctrl_mothername" class="wwctrl">

                                                    <input type="text" name="profileTextualDetail.motherName" size="35" maxlength="50" value="" id="mothername" placeholder="Missing's Mother Name" />
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Father Email  </td>
                                        <td>
                                            <div id="wwgrp_fatheremail" class="wwgrp">
                                                <div id="wwctrl_fatheremail" class="wwctrl">

                                                    <input type="text" name="profile.fatherEmail" size="35" maxlength="254" value="" id="fatheremail" placeholder="Missing's Father Email" />
                                                </div>
                                            </div>
                                        </td>
                                        <td>Mother Email  </td>
                                        <td>
                                            <div id="wwgrp_motheremail" class="wwgrp">
                                                <div id="wwctrl_motheremail" class="wwctrl">

                                                    <input type="text" name="profile.motherEmail" size="35" maxlength="254" value="" id="motheremail" placeholder="Missing's Mother Email" />
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Father Mobile Number</td>
                                        <td>
                                            <span style="float:left; margin-top:6px; margin-left:-22px;">+91</span><div id="wwgrp_fathernumber" class="wwgrp">
                                                <div id="wwctrl_fathernumber" class="wwctrl">

                                                    <input type="text" name="profile.fatherNumber" maxlength="10" value="" id="fathernumber" placeholder="Missing's Father Mobile" />
                                                </div>
                                            </div>
                                        </td>
                                        <td>Mother Mobile Number</td>
                                        <td>
                                            <span style="float:left; margin-top:6px; margin-left:-22px;">+91</span><div id="wwgrp_mothernumber" class="wwgrp">
                                                <div id="wwctrl_mothernumber" class="wwctrl">

                                                    <input type="text" name="profile.motherNumber" maxlength="10" value="" id="mothernumber" placeholder="Missing's Mother Mobile" />
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table class="formTable" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td colspan="4">
                                                <h4 style="font-size: 1.6em; font-weight:400;" class="heading">Missing Details</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="18%">Primary Language </td>
                                            <td>
                                                <div id="wwgrp_missingEntry_profile_primaryLanguage_id" class="wwgrp">
                                                    <div id="wwctrl_missingEntry_profile_primaryLanguage_id" class="wwctrl">

                                                        <select name="profile.primaryLanguage.id" id="missingEntry_profile_primaryLanguage_id">
                                                            <option value="-1">
                                                                -- Select --
                                                            </option>
                                                            <option value="1">Assamese</option>
                                                            <option value="2">Bengali</option>
                                                            <option value="3">Bodo</option>
                                                            <option value="4">Dogri</option>
                                                            <option value="5">English</option>
                                                            <option value="6">Gujarati</option>
                                                            <option value="7">Hindi</option>
                                                            <option value="8">Kannada</option>
                                                            <option value="9">Kashmiri</option>
                                                            <option value="10">Konkani</option>
                                                            <option value="11">Maithili</option>
                                                            <option value="12">Malayalam</option>
                                                            <option value="13">Manipuri</option>
                                                            <option value="14">Marathi</option>
                                                            <option value="15">Nepali</option>
                                                            <option value="16">Odia</option>
                                                            <option value="17">Punjabi</option>
                                                            <option value="18">Sanskrit</option>
                                                            <option value="19">Santali</option>
                                                            <option value="20">Sindhi</option>
                                                            <option value="21">Tamil</option>
                                                            <option value="22">Telugu</option>
                                                            <option value="23">Urdu</option>
                                                            <option value="24">Cannot Speak</option>


                                                        </select>

                                                    </div>
                                                </div>
                                            </td>
                                            <td width="18%">Other Languages </td>
                                            <td>
                                                <div id="wwgrp_missingEntry_profile_otherKnownLanguages_id" class="wwgrp">
                                                    <div id="wwctrl_missingEntry_profile_otherKnownLanguages_id" class="wwctrl">

                                                        <select name="profile.otherKnownLanguages.id" id="missingEntry_profile_otherKnownLanguages_id">
                                                            <option value="-1">
                                                                -- Select --
                                                            </option>
                                                            <option value="1">Assamese</option>
                                                            <option value="2">Bengali</option>
                                                            <option value="3">Bodo</option>
                                                            <option value="4">Dogri</option>
                                                            <option value="5">English</option>
                                                            <option value="6">Gujarati</option>
                                                            <option value="7">Hindi</option>
                                                            <option value="8">Kannada</option>
                                                            <option value="9">Kashmiri</option>
                                                            <option value="10">Konkani</option>
                                                            <option value="11">Maithili</option>
                                                            <option value="12">Malayalam</option>
                                                            <option value="13">Manipuri</option>
                                                            <option value="14">Marathi</option>
                                                            <option value="15">Nepali</option>
                                                            <option value="16">Odia</option>
                                                            <option value="17">Punjabi</option>
                                                            <option value="18">Sanskrit</option>
                                                            <option value="19">Santali</option>
                                                            <option value="20">Sindhi</option>
                                                            <option value="21">Tamil</option>
                                                            <option value="22">Telugu</option>
                                                            <option value="23">Urdu</option>
                                                            <option value="24">Cannot Speak</option>


                                                        </select>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Missing's Aadhaar No. </td>
                                            <td>
                                                <div id="wwgrp_aadhaar" class="wwgrp">
                                                    <div id="wwctrl_aadhaar" class="wwctrl">

                                                        <input type="text" name="profile.aadhaarNo" maxlength="12" value="" id="aadhaar" placeholder="Enter aadhar number" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="text-align: center;">
                                                <a href="#" class="basic-btn" onclick="activateTab('location')">Next</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="locationContent" class="tabContent">
                                <span style="font-size:1.8em;">Please enter the attributes as at the time of missing.   </span>
                                <br />
                                <br />
                                <table class="formTable" style="width: 100%;">
                                    <!-- district -->
                                    <tr>
                                        <td>State</td>
                                        <td>
                                            <div id="wwgrp_state" class="wwgrp">
                                                <div id="wwctrl_state" class="wwctrl">

                                                    <select name="profile.state.id" id="state" onchange="readDistrict(this.value, '-- Select --')">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="35">Andaman &amp; Nicobar Islands</option>
                                                        <option value="28">Andhra Pradesh</option>
                                                        <option value="12">Arunachal Pradesh</option>
                                                        <option value="18">Assam</option>
                                                        <option value="10">Bihar</option>
                                                        <option value="04">Chandigarh</option>
                                                        <option value="22">Chhatisgarh</option>
                                                        <option value="26">Dadra &amp; Nagar Haveli</option>
                                                        <option value="25">Daman &amp; Diu</option>
                                                        <option value="07">Delhi</option>
                                                        <option value="30">Goa</option>
                                                        <option value="24">Gujarat</option>
                                                        <option value="06">Haryana</option>
                                                        <option value="02">Himachal Pradesh</option>
                                                        <option value="01">Jammu and Kashmir</option>
                                                        <option value="20">Jharkhand</option>
                                                        <option value="29">Karnataka</option>
                                                        <option value="32">Kerala</option>
                                                        <option value="31">Lakshadweep</option>
                                                        <option value="23">Madhya Pradesh</option>
                                                        <option value="27">Maharashtra</option>
                                                        <option value="14">Manipur</option>
                                                        <option value="17">Meghalaya</option>
                                                        <option value="15">Mizoram</option>
                                                        <option value="13">Nagaland</option>
                                                        <option value="21">Odisha</option>
                                                        <option value="34">Puducherry</option>
                                                        <option value="03">Punjab</option>
                                                        <option value="08">Rajasthan</option>
                                                        <option value="11">Sikkim</option>
                                                        <option value="33">Tamil Nadu</option>
                                                        <option value="36">Telangana</option>
                                                        <option value="16">Tripura</option>
                                                        <option value="09">Uttar Pradesh</option>
                                                        <option value="05">Uttrakhand</option>
                                                        <option value="19">West Bengal</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>District  </td>
                                        <td>
                                            <div id="wwgrp_district" class="wwgrp">
                                                <div id="wwctrl_district" class="wwctrl">

                                                    <select name="profile.district.id" id="district">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Address / Locality</td>
                                        <td>
                                            <div id="wwgrp_address" class="wwgrp">
                                                <div id="wwctrl_address" class="wwctrl">

<textarea name="profileTextualDetail.address" cols="50" rows="3" id="address" maxlength="149" placeholder="Missing was lost from? / Last Seen"></textarea>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>PIN Code</td>
                                        <td>
                                            <div id="wwgrp_pincode" class="wwgrp">
                                                <div id="wwctrl_pincode" class="wwctrl">

                                                    <input type="text" name="profile.pinCode" maxlength="6" value="" id="pincode" placeholder="Enter PIN Code" />
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align: center;">
                                            <a href="#" class="basic-btn" onclick="activateTab('upload')">Next</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="uploadContent" class="tabContent">
                                <div class="missing-box" style="width: 47%; float: left;">
                                    <h6 class="upload-heading heading">Photos</h6>
                                    <div class="alert-box notice">Upload JPG PNG or GIF images under 2 MB.</div>






                                    <div id="photoUploadDiv">
                                        <div style="text-align: left; margin-bottom: 5px;">
                                            <div id="wwgrp_photoFiles" class="wwgrp">
                                                <div id="wwctrl_photoFiles" class="wwctrl">

                                                    <input type="file" name="photoFiles" id="photoFiles" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <button id="addPhotoButton" class="basic-btn">Add More</button>




                                </div>
                                <div class="missing-box" style="width: 47%; float: right;">
                                    <h6 class="upload-heading heading">Videos</h6>
                                    <div class="alert-box notice">Upload MP4 MPEG AVI or FLV videos under 20 MB.</div>



                                    <div id="videoUploadDiv">
                                        <div style="text-align: left; margin-bottom: 5px;">
                                            <div id="wwgrp_missingEntry_videoFiles" class="wwgrp">
                                                <div id="wwctrl_missingEntry_videoFiles" class="wwctrl">

                                                    <input type="file" name="videoFiles" id="missingEntry_videoFiles" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <br />
                                    <button id="addVideoButton" class="basic-btn">Add More</button>



                                </div>
                                <div class="clear"></div>
                                <br />
                                <div style="text-align: center;">
                                    <a href="#" class="basic-btn" style="padding:7px 15px; font-size:1.4em;" onclick="activateTab('fir')">Next</a>
                                    <br /><br />
                                </div>
                            </div>
                            <div id="firContent" class="tabContent">
                                <span style="font-size:1.8em;">Please enter the attributes as at the time of missing.   </span>
                                <br />
                                <br />

                                <table class="formTable" style="width: 100%;">
                                    <!-- district -->
                                    <tr>
                                        <td>State</td>
                                        <td>
                                            <div id="wwgrp_statefir" class="wwgrp">
                                                <div id="wwctrl_statefir" class="wwctrl">

                                                    <select name="profile.refNcrbState.ncrbStateId" id="statefir" onchange="readCommon(this.value, 'districtfir', 'readFirDistrict', '-- Select --')">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>
                                                        <option value="01">ANDAMAN &amp; NICOBAR</option>
                                                        <option value="02">ANDHRA  PRADESH</option>
                                                        <option value="03">ARUNACHAL PRADESH</option>
                                                        <option value="04">ASSAM</option>
                                                        <option value="05">BIHAR</option>
                                                        <option value="06">CHANDIGARH</option>
                                                        <option value="33">CHATTISGARH</option>
                                                        <option value="09">DADRA &amp; NAGAR HAVELI</option>
                                                        <option value="07">DAMAN &amp; DIU</option>
                                                        <option value="08">DELHI</option>
                                                        <option value="10">GOA</option>
                                                        <option value="11">GUJARAT</option>
                                                        <option value="13">HARYANA</option>
                                                        <option value="12">HIMACHAL PRADESH</option>
                                                        <option value="14">JAMMU &amp; KASHMIR</option>
                                                        <option value="34">JHARKHAND</option>
                                                        <option value="16">KARNATAKA</option>
                                                        <option value="15">KERALA</option>
                                                        <option value="17">LAKSHADWEEP</option>
                                                        <option value="21">MADHYA PRADESH</option>
                                                        <option value="19">MAHARASHTRA</option>
                                                        <option value="20">MANIPUR</option>
                                                        <option value="18">MEGHALAYA</option>
                                                        <option value="22">MIZORAM</option>
                                                        <option value="23">NAGALAND</option>
                                                        <option value="24">ODISHA</option>
                                                        <option value="26">PONDICHERRY</option>
                                                        <option value="25">PUNJAB</option>
                                                        <option value="27">RAJASTHAN</option>
                                                        <option value="28">SIKKIM</option>
                                                        <option value="29">TAMILNADU</option>
                                                        <option value="36">TELANGANA</option>
                                                        <option value="30">TRIPURA</option>
                                                        <option value="31">UTTAR PRADESH</option>
                                                        <option value="35">UTTRANCHAL</option>
                                                        <option value="32">WEST BENGAL</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td>Police Station Location </td>
                                        <td>
                                            <div id="wwgrp_policestationlocation" class="wwgrp">
                                                <div id="wwctrl_policestationlocation" class="wwctrl">

                                                    <input type="text" name="profile.refNcrbPoliceStation.ncrbPoliceStationId" id="policestationlocation" onchange="inActivefld()">

                                                    </input>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>District  </td>
                                        <td>
                                            <div id="wwgrp_districtfir" class="wwgrp">
                                                <div id="wwctrl_districtfir" class="wwctrl">

                                                    <select name="profile.refNcrbDistrict.ncrbDistrictId" id="districtfir" onchange="readCommon(this.value, 'policestationlocation', 'readPolicestation', '-- Select --')">
                                                        <option value="-1">
                                                            -- Select --
                                                        </option>


                                                    </select>

                                                </div>
                                            </div>
                                        </td>

                                        <td>FIR No.</td>
                                        <td>
                                            <div id="wwgrp_firno" class="wwgrp">
                                                <div id="wwctrl_firno" class="wwctrl">

                                                    <input type="text" name="profile.firnumber" maxlength="99" value="" disabled="disabled" id="firno" placeholder="FIR No." />
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>

                                        <td>FIR Date </td>
                                        <td>
                                            <div id="wwgrp_firdt" class="wwgrp">
                                                <div id="wwctrl_firdt" class="wwctrl">

                                                    <input type="text" name="firDate" size="10" maxlength="10" value="" id="firdt" class="popupDatepicker" placeholder="Enter the date of FIR" />
                                                </div>
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="4" style="text-align: center;">
                                            <a href="#" class="basic-btn" onclick="activateTab('confirmation')">Next</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="confirmationContent" class="tabContent">
                                <table class="formTable" style="width: 100%;">
                                    <tr>
                                        <td>
                                            <h6 style="text-align: center; font-size:1.6em; font-weight:400;">Usage Terms and Conditions</h6> <br />
                                            <br /><br />
                                            <p style="font-size:1.1em; font-weight:400;">PLEASE READ THESE PORTAL USAGE TERMS AND CONDITIONS CAREFULLY BEFORE USING THIS PORTAL.</p>
                                            <p style="margin-bottom: 5px;">1.Uploading of Missing Missing Information (Parent/Legal Guardian)</p>
                                            <ul class="terms-listing">
                                                <li>The information entered is provided in good faith and is correct to the best of my knowledge and belief.</li>
                                                <li>I understand that the information provided by me shall be scrutinized by a moderator of the portal before it is published/uploaded in the website.</li>
                                                <li>Contact information entered can be made available to law enforcement agencies if required.</li>
                                                <li>It is my responsibility to share the information of the recovery of the Missing as soon as possible with the (Administrators of the portal for due closure).</li>
                                                <li>I understand that uploading any obscene or indecent picture/video will attract serious criminal liability.</li>
                                            </ul>
                                            <p style="margin-bottom: 5px;">2.Uploading of Missing Missing Information (Other than Parent/Legal Guardian)</p>
                                            <ul class="terms-listing">
                                                <li>The information entered is provided in good faith and is correct to the best of my knowledge and belief.</li>
                                                <li>I have ensured that the details of parents/legal guardian entered by me are correct.</li>
                                                <li>Contact information entered can be made available to law enforcement agencies if required.</li>
                                                <li>I understand that uploading any obscene or indecent picture/video/unlawful information will attract serious criminal liability</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                                <table class="formTable" style="width: 60%;">
                                    <tr>
                                        <td>
                                            <span class="squaredFour">
                                                <input type="checkbox" value="true" id="squaredFour" name="confirm" />
                                                <label for="squaredFour"></label>
                                            </span>
                                        </td>
                                        <td style="text-align: left;"><span style="color: red;">*</span>I accept the.<a href="termsConditions" target="_blank">Terms and Conditions</a> as mentioned on this portal</td>
                                    </tr>
                                </table>
                                <table class="formTable" style="width: 100%;">
                                    <tr>
                                        <td style="text-align: right">
                                            <div class="formButton" id="wwctrl_sub">
                                                <input type="submit" value="Submit" id="sub" class="disable-btn" />
                                            </div>
                                            <div id="dialog" title="Basic Details"></div>
                                            <div id="dialog1" title="Upload Media"></div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <input type="hidden" name="struts.token.name" value="token" />
                            <input type="hidden" name="token" value="F9FRYB5ADPZERR53VDORFC24SULUFWWX" />
                        </form>



                    </fieldset>
                    <br /> <br />
                </div>

            </div>
        </div>

    </div>
    <div class="modal"></div>
</body>
</html>