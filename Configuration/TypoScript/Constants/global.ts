globals {
    # customcategory=cleanblog=CleanBlog
    #cat=cleanblog/color/browser; type=color; label=Choose browser color for chrome
    browser-color =

    page {
        #cat=cleanblog/page/title; type=string; label=Page title
        title =
        #cat=cleanblog/page/email; type=string; label=Page email
        email =
        #cat=cleanblog/page/phone; type=string; label=Page phone_number
        phone_number =
        #cat=cleanblog/page/admins; type=string; label=Page admins
        admins =
        #cat=cleanblog/page/type; type=string; label=Page type
        type =
        #cat=cleanblog/page/country-name; type=string; label=Page country-name
        country-name =
    }

    # cat=cleanblog/template/mainmenu; type=int; label= Pid for Mainmenu
    homePageUid =

    # cat=cleanblog/template/title; type=string; label= Title for Page
    homePageTitle =
    # cat=cleanblog/template/detail; type=int; label= Detail Page
    detailPid =

    formhandler {
        # cat=formhandler/template/toemail; type=string; label=Reciver for Contact form
        to_email = mi.blunck@gmail.com
        # cat=formhandler/template/toname; type=string; label= Title for Page
        to_name = Blogmail
        # cat=formhandler/template/subject; type=string; label= Title for Page
        subject = Kontaktformular
        # cat=formhandler/template/sendermail; type=string; label= Title for Page
        sender_email = email
        # cat=formhandler/template/redirectAfterMail; type=string; label= Title for Page
        redirectAfterMail =
    }
}

#plugin.tx_blog {
#    settings {
#        blogUid = 19
#        categoryUid = 19
#        authorUid = 19
#        tagUid = 19
#        archiveUid = 36
#    }
#
#    persistence {
#        storagePid = 37
#    }
#}
