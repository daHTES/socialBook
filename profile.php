<?php

include 'connect/login.php';
include 'core/load.php';

if (Login::isLoggedIn()){

   $userid = Login::isLoggedIn();
} else {
    header('Location: sign.php');
}

if (isset($_GET['username']) == true && empty($_GET['username']) == false) {

    $username = $loadFromUser->checkInput($_GET['username']);
    $profileId = $loadFromUser->userIdByUserName($username);
    $profileData = $loadFromUser->userData($profileId);
    $userData = $loadFromUser->userData($userid);
}

?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/dist/emojionearea.min.css">
    <title>Profile Alex</title>
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="top-left-part">
                <div class="profile-logo"><img src="assets/image/logo.jpg" alt=""></div>
                <div class="search-wrap">
                    <input type="text" name="main-search" id="main-search">
                    <div class="s-icon top-icon top-css">
                        <img src="assets/image/icons8-search-36.png" alt="">
                    </div>
                </div>
                <div id="search-show">
                    <div class="search-result">

                    </div>
                </div>
            </div>
            <div class="top-right-part">
                <div class="top-pic-name-wrap">
                    <a href="profile.php?username=<?php echo $userData->userLink;?>" class="top-pic-name">
                        <div class="top-pic"><img src="<?php echo $userData->profilePic; ?>" alt=""></div>
                        <span class="top-name top-css border-left">
                            <?php echo $userData->firstName?>
                        </span>
                    </a>
                </div>
                <a href="index.php">
                    <span class="top-home top-css border-left">Home</span>
                </a>
                <div class="top-request top-css top-icon border-left">
                    <div class="request-count"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="request-svg" viewBox="0 0 15.8 13.63" style="height: 20px; width: 20px">
                        <script xmlns=""/><defs><style>.cls-1{fill:#1a2947;}</style></defs>
                        <title>request</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1" d="M13.2,7.77a7.64,7.64,0,0,0-1.94-.45,7.64,7.64,0,0,0-1.93.45,3.78,3.78,0,0,0-2.6,3.55.7.7,0,0,0,.45.71,12.65,12.65,0,0,0,4.08.59A12.7,12.7,0,0,0,15.35,12a.71.71,0,0,0,.45-.71A3.79,3.79,0,0,0,13.2,7.77Z"/><ellipse class="cls-1" cx="11.34" cy="4.03" rx="2.48" ry="2.9"/><path class="cls-1" d="M7.68,7.88a9,9,0,0,0-2.3-.54,8.81,8.81,0,0,0-2.29.54A4.5,4.5,0,0,0,0,12.09a.87.87,0,0,0,.53.85,15.28,15.28,0,0,0,4.85.68,15.25,15.25,0,0,0,4.85-.68.87.87,0,0,0,.53-.85A4.49,4.49,0,0,0,7.68,7.88Z"/><ellipse class="cls-1" cx="5.47" cy="3.44" rx="2.94" ry="3.44"/></g></g><script xmlns=""/></svg>
                </div>
                <a href="messenger.php">
                    <div class="top-messenger top-css top-icon border-left">
                        <div class="message-count"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="message-svg" viewBox="0 0 12.64 13.64" style="height: 20px; width: 20px">
                            <script xmlns=""/><defs><style>.cls-1{fill:#1a2947;}</style></defs>
                            <title>message</title>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path class="cls-1" d="M6.32,0A6.32,6.32,0,0,0,1.94,10.87c.34.33-.32,2.51.09,2.75s1.79-1.48,2.21-1.33a6.22,6.22,0,0,0,2.08.35A6.32,6.32,0,0,0,6.32,0Zm.21,8.08L5.72,6.74l-2.43,1,2.4-3,.84,1.53,2.82-.71Z"/></g></g><script xmlns=""/></svg>
                    </div>
                </a>
                <div class="top-notification top-css top-icon border-left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="notification-svg" viewBox="0 0 12.06 13.92" style="height: 20px; width: 20px">
                        <script xmlns=""/><defs>
                            <style>.cls-1{fill:#1a2947;}.cls-2{fill:none;stroke:#1a2947;stroke-miterlimit:10;}</style>
                        </defs>
                        <title>notification</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1" d="M11.32,9A10.07,10.07,0,0,0,7.65,2.1,2.42,2.42,0,0,0,4.8,2,9.66,9.66,0,0,0,.74,9a2,2,0,0,0-.25,2.81H11.57A2,2,0,0,0,11.32,9Z"/><path class="cls-1" d="M8.07,12.32a1.86,1.86,0,0,1-2,1.6,1.86,1.86,0,0,1-2-1.6"/><ellipse class="cls-2" cx="6.17" cy="1.82" rx="1.21" ry="1.32"/></g></g><script xmlns=""/></svg>
                    <div class="notification-list-wrap">
                        <ul>

                        </ul>
                    </div>
                </div>
                <div class="top-help top-css top-icon border-left">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="help-svg" viewBox="0 0 13.69 13.69" style="height: 20px; width: 20px">
                        <script xmlns=""/><defs>
                            <style>.cls-1{fill:#1a2947;}</style>
                        </defs>
                        <title>help</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1" d="M6.85,0a6.85,6.85,0,1,0,6.84,6.85A6.85,6.85,0,0,0,6.85,0ZM7.4,10.44a.77.77,0,0,1-.19.28.75.75,0,0,1-.28.18,1,1,0,0,1-.35.07,1,1,0,0,1-.35-.07.79.79,0,0,1-.29-.18.92.92,0,0,1-.19-.28,1,1,0,0,1-.06-.34,1,1,0,0,1,.06-.35,1.07,1.07,0,0,1,.19-.28,1,1,0,0,1,.64-.25.84.84,0,0,1,.35.07.75.75,0,0,1,.28.18.87.87,0,0,1,.19.28.81.81,0,0,1,.07.35A.8.8,0,0,1,7.4,10.44Zm1.48-5a1.93,1.93,0,0,1-.3.53,2.4,2.4,0,0,1-.39.39l-.41.31c-.12.09-.23.19-.33.28a.6.6,0,0,0-.17.31l-.14.78h-1L6,7.19a.76.76,0,0,1,.07-.46,1.35,1.35,0,0,1,.28-.36c.12-.1.25-.21.39-.31l.41-.32a1.9,1.9,0,0,0,.31-.39,1,1,0,0,0,.13-.51.72.72,0,0,0-.25-.58,1,1,0,0,0-.66-.21,1.75,1.75,0,0,0-.5.06l-.36.15-.25.14a.32.32,0,0,1-.2.07.34.34,0,0,1-.31-.18l-.4-.63a3.65,3.65,0,0,1,.43-.31,2.54,2.54,0,0,1,.49-.26,3.43,3.43,0,0,1,.57-.17,2.87,2.87,0,0,1,.67-.07A2.72,2.72,0,0,1,7.71,3a2.09,2.09,0,0,1,.69.38,1.86,1.86,0,0,1,.44.6A2,2,0,0,1,9,4.75,2.18,2.18,0,0,1,8.88,5.47Z"/></g></g><script xmlns=""/></svg>
                </div>
                <div class="top-more top-css top-icon border-left">
                    <div class="watchmore-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg"  class="more-svg" viewBox="0 0 14.54 6.57" style="height: 20px; width: 20px">
                            <script xmlns=""/><defs>
                                <style>.cls-1{fill:#1a2947;}</style></defs>
                            <title>more</title>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <polygon class="cls-1" points="0 0 14.54 0 7.27 6.57 0 0"/></g></g><script xmlns=""/></svg>
                    </div>
                    <div class="setting-logout-wrap">

                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="main-area">
            <div class="profile-left-wrap">
                <div class="profile-cover-wrap" style="background-image: url(<?php $profileData->coverPic ?>)">
                    <div class="upload-cov-opt-wrap">
                        <?php if ($profileId == $userid) { ?>
                        <div class="add-cover-photo">
                            <img src="assets/image/profile/uploadCoverPhoto.JPG" alt="">
                            <div class="add-cover-text">Add a cover photo</div>
                        </div>
                        <?php } else { ?>
                    <div class="dont-add-cover-photo">

                    </div>
                      <?php  }?>
                        <div class="add-cover-opt">
                            <div class="select-cover-photo">Select Photo</div>
                            <div class="file-upload">
                                <label for="cover-upload" class="file-upload-label">Upload Photo</label>
                                <input type="file" name="file-upload" id="cover-upload" class="file-upload-input">
                            </div>
                        </div>
                    </div>
                    <div class="cover-photo-rest-wrap">
                        <div class="profile-pic-name">
                            <div class="profile-pic">
                                <?php if ($profileId == $userid) {
                                    ?>
                                    <div class="profile-pic-upload">
                                        <div class="add-pro">
                                            <img src="assets/image/profile/uploadCoverPhoto.JPG" alt="">
                                            <div>Update</div>
                                        </div>
                                    </div>
                                <?php

                                } ?>
                                <img src="<?php echo $profileData->profilePic; ?>" alt="" class="profile-pic-me">
                            </div>
                            <div class="profile-name">
                                <?php echo ''.$profileData->first_name.' '.$profileData->last_name.''?>
                            </div>
                        </div>
                    </div>
                    <div class="cover-bottom-part">
                        <div class="timeline-button align-middle cover-but-css"
                             data-userid="<?php echo $userid; ?>"
                             data-profileid="<?php echo $profileId; ?>">
                            TimeLine
                        </div>
                        <div class="about-button align-middle cover-but-css"
                             data-userid="<?php echo $userid; ?>"
                             data-profileid="<?php echo $profileId; ?>">
                            About
                        </div>
                        <div class="friends-button align-middle cover-but-css"
                             data-userid="<?php echo $userid; ?>"
                             data-profileid="<?php echo $profileId; ?>">
                            Friends
                        </div>
                        <div class="photos-button align-middle cover-but-css"
                             data-userid="<?php echo $userid; ?>"
                             data-profileid="<?php echo $profileId; ?>">
                            Photos
                        </div>
                    </div>
                    <div class="bio-timeline">
                        <div class="bio-wrap">
                            <div class="bio-intro">
                                <div class="intro-wrap">
                                    <img src="assets/image/profile/intro.JPG" alt="">
                                    <div>Intro</div>
                                </div>
                                <div class="intro-icon-text">
                                    <img src="assets/image/profile/addBio.JPG" alt="">
                                    <div class="add-bio-text">Add a short BIO to the all people</div>
                                    <div class="add-bio-click"><a href="">Add Bio</a></div>
                                </div>
                                <div class="bio-details">
                                    <div class="bio-1">
                                        <img src="assets/image/profile/livesIn.JPG" alt="">
                                        <div class="live-text">Lives in <span class="live-text-css blue">Kiev</span></div>
                                    </div>
                                    <div class="bio-2">
                                        <img src="assets/image/profile/followedBy.JPG" alt="">
                                        <div class="live-text">Followed by <span class="followed-text-css blue">65 people</span></div>
                                    </div>
                                </div>
                                <div class="bio-feature">
                                    <img src="assets/image/profile/feature.JPG" alt="">
                                    <div class="feat-text">
                                        Showcase what's important to you by adding people, pages, groups and more on your public
                                    </div>
                                    <div class="add-feature blue">Add to Feature</div>
                                    <div class="add-feature-link blue">
                                        <div class="link-plus">+</div>
                                        <div>Add Instagram, Website, Other Links</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="status-timeline-wrap">
                            <?php if($profileId == $userid){ ?>

                                <div class="profile-status-write">
                                    <div class="status-wrap">
                                        <div class="status-top-wrap">
                                            <div class="status-top">
                                                Create Post
                                            </div>
                                        </div>

                                        <div class="status-med">
                                            <div class="status-prof">
                                                <div class="top-pic"><img src="<?php echo $userData->profilePic;  ?>" alt=""></div>
                                            </div>
                                            <div class="status-prof-textarea" style="position:relative;">
                                                <textarea name="textStatus" id="statusEmoji" cols="5" rows="5" class="status align-middle" placeholder="What's going on your mind?"></textarea>
                                                <ul class="hash-men-holder" style="position:absolute;"></ul>
                                            </div>
                                        </div>
                                        <div class="status-bot">
                                            <div class="file-upload-remIm input-restore">

                                                <label for="multiple_files" class="file-upload-label">
                                                    <div class="status-bot-1">
                                                        <img src="assets/image/photo.JPG" alt="">
                                                        <div class="status-bot-text">Photo/Video</div>
                                                    </div>
                                                </label>
                                                <input type="file" name="post-file-upload" id="multiple_files" class="file-upload-input postImage" data-multiple-caption="{count} files selected" multiple="">

                                            </div>
                                            <div class="status-bot-1">
                                                <img src="assets/image/tag.JPG" alt="">
                                                <div class="status-bot-text">Tag Friends</div>
                                            </div>
                                            <div class="status-bot-1">
                                                <img src="assets/image/activities.JPG" alt="">
                                                <div class="status-bot-text">Feeling/Activities</div>
                                            </div>
                                            <div class="status-bot-1 dott">...</div>
                                        </div>
                                        <ul id="sortable">

                                        </ul>
                                        <div class="status-share-button-wrap">
                                        <div class="status-share-button">
                                            <div class="newsFeed-privacy">
                                            <div class="newsFeed">
                                                <div class="right-sign-icon">
                                                    <img src="assets/image/profile/rightSign.JPG" alt="">
                                                </div>
                                                <div class="newsfeed-icon align-middle">
                                                    <img src="assets/image/profile/newsFeed.JPG" alt="">
                                                </div>
                                                <div class="newsfee-text">
                                                    News Feed
                                                </div>
                                            </div>
                                            <div class="status-privacy-wrap">
                                                <div class="status-privacy">
                                                    <div class="privacy-icon align-middle">
                                                        <img src="assets/image/profile/publicIcon.JPG" alt="">
                                                    </div>
                                                    <div class="privacy-text">Public</div>
                                                    <div class="privacy-downarrow-icon align-middle">
                                                        <img src="assets/image/downarrow.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="status-privacy-option">

                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="seemore-sharebutton">
                                            <div class="share-seemore-option">
                                                <div class="privacy-downarrow-icon align-middle">
                                                    <img src="assets/image/downarrow.png" alt="">
                                                    <span class="status-seemore">See More</span>
                                                </div>
                                            </div>
                                            <div class="status-share-button align-middle">
                                                Share
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="ptaf-wrap">
                                <?php $loadFromPost->posts($userid, $profileId, 20); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-right-wrap"></div>
        </div>
        <div class="top-box-show"></div>
        <div id="adv_dem"></div>
    </main>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/dist/emojionearea.min.js"></script>
<script>
    $(function () {
    $('.profile-pic-upload').on('click', function () {
            $('.top-box-show').html('<div class="top-box align-vertical-middle profile-dialog-show"> <div class="profile-pic-upload-action"> <div class="pro-pic-up"> <div class="file-upload"> <label for="profile-upload" class="file-upload-lable"> <snap class="upload-plus-text align-middle"><snap class="upload-plus-sign">+</snap>Upload Photo</snap> </label> <input type="file" name="file-upload" id="profile-upload" class="file-upload-input"> </div> </div> <div class="pro-pic-choose"></div> </div></div>')
    })

        $(document).on('change', '#profile-upload', function () {
                var name = $('#profile-upload').val().split('\\').pop();
                var file_data = $('#profile-upload').prop('files')[0];
                var file_size = file_data['size'];
                var file_type = file_data['type'].split('/').pop();
                var userid = <?php echo $userid; ?>;
                var imgName = 'user/' + userid + '/profilePhoto/' + name + '';
                var form_data = new FormData();
                form_data.append('file', file_data);

                if(name != '') {
                    $.post('http://socialnetworkcopyfacebook/core/ajax/profilePhoto.php', {
                        imgName: imgName,
                        userid: userid
                    }, function (data) {
                        // $('#adv_dem').html(/data);
                    })



                    $.ajax({
                        url: 'http://socialnetworkcopyfacebook/core/ajax/profilePhoto.php',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (data) {
                                        $('.profile-pic-me').attr('src', ""+data+"");
                                        $('.profile-dialog-show').hide();
                        }
                    })
                }
        })

        $('.add-cover-photo').on('click', function () {

            $('.add-cov-opt').toggle();
        })


        $(document).mouseup(function (e) {

            var container = new Array();
            container.push($('.add-cover-opt'));
            container.push($('.profile-dialog-show'));

            $.each(container, function (key, value) {
                if (!$(value).is(e.target) && $(value).has(e.target).length === 0) {
                    $(value).hide();
                }
            })

            $(document).mouseup(function (e) {
                        var container = new Array();
                        container.push($('.profile-status-write'));
                        $.each(container, function (key, value) {
                                        if(!$(value).is(e.target) && $(value).has(e.target).length === 0) {
                                            $('.status-share-button-wrap').hide('');
                                        }
                        })
            })

            $(document).mouseup(function (e) {
                var container = new Array();
                container.push($('.post-img-wrap'));
                $.each(container, function (key, value) {
                    if(!$(value).is(e.target) && $(value).has(e.target).length === 0) {
                        $('.top-box-show').empty();
                    }
                })
            })

            $(document).mouseup(function (e) {
                var container = new Array();
                container.push($('.post-option-details-container'));
                container.push($('.top-box-show'));

                $.each(container, function (key, value) {
                    if(!$(value).is(e.target) && $(value).has(e.target).length === 0) {
                       $(value).empty();
                    }
                })
            })
        })

        //**Post Option Start**//
        $(document).on('click', '.post-option', function () {
                    $('.post-option').removeAttr('id');
                    $(this).attr('id', 'opt-click');
                    var postid = $(this).data('postid');
                    var userid = $(this).data('userid');
                    var postDetails = $(this).siblings('.post-option-details-container');
                    $(postDetails).show().html('<div class="post-option-details"><ul><li class="post-edit" data-postid="'+postid+'" data-userid="'+userid+'">Edit</li><li class="post-delete" data-postid="'+postid+'" data-userid="'+userid+'">Delete</li><li class="post-privacy" data-postid="'+postid+'" data-userid="'+userid+'">Privacy</li></ul></div>')

        })

        $(document).on('click', 'li.post-edit', function () {
                    var statusTextContainer = $(this).parents('.nf-1').siblings('.nf-2').find('.nf-2-text');
                    var addId = $(statusTextContainer).attr('id', 'editPostPut');
                    var getPostText1 = $(statusTextContainer).text();
                    var postid = $(statusTextContainer).data('postid');
                    var userid = $(statusTextContainer).data('userid');
                    var getPostImg = $(this).parents('.nf-1').siblings('.nf-2').find('.nf-2-img');
                    var thiss = $(this).parents('.nf-1').siblings('.nf-2').find('.nf-2-img');
                    var profilePic = $(statusTextContainer).data('profilePic');
                    var getPostText = getPostText1.replace(/\s+/g, "").trim();

                    $('.top-box-show').html('<div class="top-box profile-dialog-show" style="top:12.5%:left: 22.5%;width: 55%;"> <div class="edit-post-header align-middle " style="justify-content: space-between; padding: 10px; height: 20px; background-color: lightgray; font-size: 14px; font-weight: 600; "> <div class="edit-post-text"?Edit Post</div> <div class="edit-post-close" style="padding: 5px; color: gray; cursor: pointer;">x</div> </div> <div class="edit-post-value" style="border-bottom: 1px solid lightgray;"> <div class="status-med"> <div class="status-prof"><div class="top-pic"><img src="'+profilePic+'" alt=""></div></div> <div class="status-prof-textarea"><textarea data-autoresize rows="5" columns="5" placeholder="" name="textStatus" class="editStatus align-middle" style="font-family:sens-serif; font-weight:400; padding: 5px;">'+getPostText1+'</textarea></div></div></div><div class="edit-post-submit" style="position: absolute; right:0; bottom: 0; display: flex; align-items: center; margin: 10px;"><div class=status-privacy-wrap><div class="status-privacy"><div class="privacy-icon align-middle"><img src="assets/images/profile/publicIcon.JPG" alt=""></div> <div class="primary-text">Public</div> <div class="privacy-downarrow-icon align-middle"><img src="assets/images/watchnewsfeed.JPG"></div></div><div class="padding: 3px 15px; background-color: #4267bc; color: white; font-size: 14px; margin-left: 5px; cursor: pointer;" data-postid="'+postid+'" data-userid="'+userid+'" data-tag="'+thiss+'">Save</div></div></div>');
        })

        $(document).on('click', '.edit-post-save', function () {
                    var postid = $(this).data('postid');
                    var userid = $(this).data('userid');
                    var editedText = $(this).parents('.edit-post-submit').siblings('.edit-post-value').find('.editStatus');
                    var editedTextVal = $(editedText).val();

                    $.post('http://socialnetworkcopyfacebook/core/ajax/editPost.php', {
                        editedTextVal: editedTextVal,
                        postid: postid,
                        userid: userid

                    }, function (data) {
                        $('#editPostPut').html(data).removeAttr('id');
                      $('.top-box-show').empty();
                    })
        })

        $(document).on('click', '.post-delete', function () {
                var postid = $(this).data('postid');
                var userid = $(this).data('userid');
                var postContainer = $(this).parents('.profile-timeline');
                var r = confirm("Do you want to delete the post?")
            if (r == true){
                $.post('http://socialnetworkcopyfacebook/core/ajax/editPost.php', {
                    deletePost: postid,
                    userid: userid
                }, function (data) {
                        $(postContainer).empty();
                })
            }
        })
        //**Post Option End**//

        //*React Main*//

        $(document).on('click', '.like-action', function () {
            var likeActionIcon = $(this).find('.like-action-icon img');
            var likeReactParent = $(this).parents('.like-action-wrap');
            var nf4 = $(likeReactParent).parent('.nf-4');
            var nf_3 = $(nf4).siblings('.nf-3').find('.react-count-wrap');
            var reactCount = $(nf4).siblings('.nf-3').find('.nf-3-react-username');
            var reactNumText = $(reactCount).text();
            var postId = $(likeReactParent).data('postid');
            var userId = $(likeReactParent).data('userid');
            var typeText = $(this).find('.like-action-text span');
            var typeR = $(typeText).text();
            var spanClass = $(this).find('.like-action-text').find('span');

            if($(spanClass).attr('class') !== undefined){
                if($(likeActionIcon).attr('src') == 'assets/image/likeAction.JPG'){
                    (spanClass).addClass('like-color');
                    $(likeActionIcon).attr('src', 'assets/image/react/like.png').addClass('reactIconSize');
                    spanClass.text('like');
                    mainReactSubmit(typeR, postId, userId, nf_3);
                }else{
                    $(likeActionIcon).attr('src', 'assets/image/likeAction.JPG');
                    spanClass.removeClass();
                    spanClass.text('Like');
                    mainReactDelete(typeR, postId, userId, nf_3);
                }
            }else if($(spanClass).attr('class') !== undefined){
                (spanClass).addClass('like-color');
                $(likeActionIcon).attr('src', 'assets/image/react/like.png').addClass('reactIconSize');
                spanClass.text('like');
                mainReactSubmit(typeR, postId, userId, nf_3);
            }else{
                (spanClass).addClass('like-color');
                $(likeActionIcon).attr('src', 'assets/image/react/like.png').addClass('reactIconSize');
                spanClass.text('like');
                mainReactSubmit(typeR, postId, userId, nf_3);
            }
        })

        function mainReactSubmit(typeR, postId, userId, nf_3){
                    var profileid = "<?php echo $profileId; ?>";
                    $.post('http://socialnetworkcopyfacebook/core/ajax/react.php', {
                        reactType: typeR,
                        postId: postId,
                        userId: userId,
                        profileid: profileid
                    }, function (data) {
                            $(nf_3).empty().html(data);
                    })
        }
        
        function mainReactDelete(typeR, postId, userId, nf_3) {
            var profileid = "<?php echo $profileId; ?>";
            $.post('http://socialnetworkcopyfacebook/core/ajax/react.php', {
                deleteReactType: typeR,
                postId: postId,
                userId: userId,
                profileid: profileid
            }, function (data) {
                $(nf_3).empty().html(data);
            })
        }

        $('.like-action-wrap').hover(function () {
                var mainReact = $(this).find('.react-bundle-wrap');
                $(mainReact).html('<div class="react-bundle align-middle" style="position:absolute;margin-top:-43px;margin-left:25px;display:flex;background-color:white;padding: 0 2px;border-radius:25px;box-shadow:0px 0px 5px black; height:45px; width:270px; justify-content:space-around; transition:0.3s"><div class="like-react-click align-middle"><img class="main-icon-css" src="<?php echo " " . BASE_URL . "assets/image/react/like.png" ?>" alt=""></div><div class="love-react-click align-middle"><img class="main-icon-css" src="<?php echo " " . BASE_URL . "assets/image/react/love.png"; ?>" alt=""></div><div class="haha-react-click align-middle"><img class="main-icon-css" src="<?php echo " " . BASE_URL . "assets/image/react/haha.png"; ?>" alt=""></div><div class="wow-react-click align-middle"><img class="main-icon-css" src="<?php echo " " . BASE_URL . "assets/image/react/wow.png"; ?>" alt=""></div><div class="sad-react-click align-middle"><img class="main-icon-css" src="<?php echo " " . BASE_URL . "assets/image/react/sad.png"; ?>" alt=""></div><div class="angry-react-click align-middle"><img class="main-icon-css" src="<?php echo " " . BASE_URL . "assets/image/react/angry.png"; ?>" alt=""></div></div>');
        }, function () {
            var mainReact = $(this).find('.react-bundle-wrap');
            $(mainReact).html('');
        })

        $(document).on('click', '.main-icon-css', function () {
                    var  likeReact = $(this).parent();
                    reactReply(likeReact);
        })
        
        function reactReply(sClass) {
        if($(sClass).hasClass('like-react-click')){
            mainReactSub('like', 'blue');
        } else if($(sClass).hasClass('love-react-click')){
            mainReactSub('love', 'red');
        }else if($(sClass).hasClass('haha-react-click')){
            mainReactSub('haha', 'yello');
        }else if($(sClass).hasClass('wow-react-click')){
            mainReactSub('wow', 'yello');
        }else if($(sClass).hasClass('sad-react-click')){
            mainReactSub('sad', 'red');
        }else if($(sClass).hasClass('angry-react-click')){
            mainReactSub('angry', 'red');
        }else{
            console.log('Not found');
        }

        }
        
        function mainReactSub(typeR, color) {
                var reactColor = ''+typeR+'-color';
                var pClass = $('.'+typeR+'-react-click.align-middle');
                var likeReactParent = $(pClass).parents('.like-action-wrap');
                var nf4 = $(likeReactParent).parents('.nf-4');
                var nf_3 = $(nf4).siblings('.nf-3').find('.react-count-wrap');
                var reactCount = $(nf4).siblings('.nf-3').find('.nf-3-react-username');
                var reactNumText = $(reactCount).text();

                var postId = $(likeReactParent).data('postid');
                var userId = $(likeReactParent).data('userid');
                var likeAction = $(likeReactParent).find('.like-action');
                var likeActionIcon = $(likeAction).find('.like-action-icon img');
                var spanClass = $(likeAction).find('.like-action-text').find('span');

                if($(spanClass).hasClass(reactColor)){
                    $(spanClass).removeClass();
                    spanClass.text('Like');
                    $(likeActionIcon).attr('src', 'assets/image/likeAction.JPG');
                    mainReactDelete(typeR, postId, userId, nf_3);
                }else if($(spanClass).attr('class') !== undefined){
                    $(spanClass).removeClass().addClass(reactColor);
                    spanClass.text(typeR);
                    $(likeActionIcon).removeAttr('src').attr('src', 'assets/image/react/'+typeR+'.png').addClass('reactIconSize');
                }else{
                    $(spanClass).addClass(reactColor);
                    $(likeActionIcon).attr('src', 'assets/image/react/'+typeR+'.png').addClass('reactIconSize');
                    spanClass.text(typeR);
                    $(likeActionIcon).removeAttr('src').attr('src', 'assets/image/react/'+typeR+'.png').addClass('reactIconSize');
                    mainReactSubmit(typeR, postId, userId, nf_3);
                }
        }

        //*React End*//

        //*Comment start*//
        $(document).on('click', '.comment-action', function () {

            $(this).parents('.nf-4').siblings('.nf-5').find('input.comment-input-style.comment-submit').focus();

            $('.comment-submit').keyup(function (e) {
                    if(e.keyCode == 13){
                        var inputNull = $(this);
                        var comment = $(this).val();
                        var postid = $(this).data('postid');
                        var userid = $(this).data('userid');
                        var profileid = "<?php echo $profileId;?>";
                        var commentPlaceholder = $(this).parents('.nf-5').find('ul.add-comment');

                        if(comment == ''){
                            alert("Please Enter some Text");
                        }else{
                            $.ajax({
                                type: "POST",
                                url: "http://socialnetworkcopyfacebook/core/ajax/comment.php",
                                data: {
                                    comment: comment,
                                    userid: userid,
                                    postid: postid,
                                    profileid: profileid
                                },
                                cache: false,
                                success: function (html) {
                                        $(commentPlaceholder).append(html);
                                        $(inputNull).val('');
                                        commentHover();
                                }
                            })
                        }
                    }
            })

        })

        //*Comment end*//


        var fileCollection = new Array();
        $(document).on("change", "#multiple_files", function (e) {
                            var count = 0;
                            var files = e.target.files;
                            $(this).removeData();
                            var text = "";

                            $.each(files, function (i, file) {
                                    fileCollection.push(file);
                                    var reader = new FileReader();

                                    reader.readAsDataURL(file);
                                    reader.onload = function (e) {
                                            var name = document.getElementById("multiple_files").files[i].name;
                                            var template = '<li class="ui-state-default del" style="position:relative;"><img id="'+name+'" style="width: 60px; height: 60px" src="'+e.target.result+'"></li>';
                                            $("#sortable").append(template);
                                    }
                            })

                            $("#sortable").append('<div class="remImg" style="position:absolute; top:0; right: 0; cursor: pointer; display: flex; justify-content: center; align-items: center; background-color: white; border-radius: 50%; height: 1rem; width: 1rem; font-size: 0.69rem">X</div>')
                        })

        $('.status-share-button').on('click', function () {
                        var statusText = $('.emojionearea-editor').html();
                        var formData = new FormData();
                        var storeImage = [];
                        var error_images = [];
                        var files = $('#multiple_files')[0].files;

                        if (files.length != 0) {
                            if(files.length > 10){
                                error_images += 'You can\'t not select more 10 images';
                            } else {
                                for (var i = 0; i < files.length; i++){

                                    var name = document.getElementById('multiple_files').files[i].name;

                                    storeImage += '{\"imageName\":\"user/'+<?php echo $userid; ?> + '/postImage/'+name+'\"}';

                                    var ext = name.split('.').pop().toLowerCase();

                                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1){
                                        error_images += '<p>Invalid '+i+' File </p>'
                                    }

                                    var ofReader = new FileReader();

                                    ofReader.readAsDataURL(document.getElementById('multiple_files').files[i]);

                                    var f = document.getElementById('multiple_files').files[i];

                                    var fsize = f.size || f.fileSize;

                                    if (fsize > 20000000){
                                        error_images += '<p>'+i+' FIle SIze is very big</p>';
                                    } else {
                                        formData.append('file[]', document.getElementById('multiple_files').files[i]);
                                    }
                                }
                            }

                            if (files.length < 1){

                            } else {
                                var str = storeImage.replace(/,\s*$/, "");

                                var stIm = '[' + str + ']';
                            }
                            if (error_images == '') {
                                $.ajax({
                                    url: 'http://socialnetworkcopyfacebook/core/ajax/uploadPostImage.php',
                                    method: "POST",
                                    data: formData,
                                    contentType: false,
                                    cache: false,
                                    processData: false,
                                    beforeSend: function() {
                                        $('#error_multiple_files').html('<br/><label> Uploading....</label>');
                                    },
                                    success: function (data) {
                                            $('#error_multiple_files').html(data);
                                            $('#sortable').empty();
                                    }
                                })
                            } else {
                                $('#multiple_files').val('');
                                $('#error_multiple_files').html("<span> "+ error_images +"</span>");
                                return false;
                            }
                        } else {
                            var stIm = '';
                        }
                        if (stIm == ''){
                            $.post('http://socialnetworkcopyfacebook/core/ajax/postSubmit.php', {
                                onlyStatusText: statusText
                            }, function (data) {
                                        $('#adv_dem').html(data);
                                        location.reload;
                            })
                        } else {
                            $.post('http://socialnetworkcopyfacebook/core/ajax/postSubmit.php', {
                                stIm: stIm,
                                statusText: statusText
                            }, function (data) {
                                $('#adv_dem').html(data);
                                location.reload();
                            })
                        }
                    })

        $(document).on('click', '.postImage', function () {
                var userid = $(this).data('userid');
                var postid = $(this).data('postid');
                var profileId = $(this).data('profileid');
                var imageSrc = $(this).attr('src');
                $.post('http://socialnetworkcopyfacebook/core/ajax/imgFetchShow.php', {
                    fetchImgInfo: userid,
                    postid: postid,
                    imageSrc: imageSrc
                }, function (data) {
                    $('.top-box-show').html(data);
                })
        })


        $('#statusEmoji').emojioneArea({
            pickerPosition: "right",
            spellcheck: true
        });

        $(document).on('click', '.emojionearea-editor', function () {
                $('.status-share-button-wrap').show('0.5');
        })

        $(document).on('click', '.status-bot', function () {
                $('.status-share-button-wrap').show('0.5');
        })

        $('#cover-upload').on('change', function () {
            var name = $('#cover-upload').val().split('\\').pop();
            var file_data = $('#cover-upload').prop('files')[0];
            var file_size = file_data['size '];
            var file_type = file_data['type'].split('/').pop();

            var userid = '<?php echo $userid; ?>';
            var imgName = 'user/' + userid + '/coverphoto/' + name + '';

            var form_data = new FormData();

            form_data.append('file', file_data);
            if (name != '') {
                $.post('http://socialnetworkcopyfacebook/core/ajax/profile.php', {
                    imgName: imgName,
                    userid: userid
                }, function (data) {
                    //                            alert(data);

                })
            }

            $.ajax({
                url: 'http://socialnetworkcopyfacebook/core/ajax/profile.php',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (data) {
                    $('.profile-cover-wrap').css('background-image', 'url(' + data + ')');
                    $('.add-cov-opt').hide();
                }

            })
        });
    })
</script>
</body>
</html>
