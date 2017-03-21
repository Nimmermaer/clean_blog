plugin.Tx_Formhandler.settings.predef.default >
plugin.Tx_Formhandler.settings.predef.contact {
    templateFile = EXT:clean_blog/Resources/Private/Extensions/Formhandler/Contact.html
   langFile = EXT:clean_blog/Resources/Private/Extensions/Formhandler/formhandler_locallang.xml
    formValuesPrefix = formhandler
    name = Kontakt
    #debug = 1
    validators.1.class = Validator\DefaultValidator
    validators.1.config.fieldConf {
        mail_name.errorCheck.1 = required
        email.errorCheck.1 = required
        email.errorCheck.2 = email
    }

    addErrorAnchors = 1
    singleErrorTemplate {
        totalWrap = |
        singleWrap = <p class="bg-danger">|</p>
    }

    errorListTemplate {
        totalWrap = <div style="color: red;">Es sind folgende Fehler aufgetreten: <ul>|</ul></div>
        singleWrap = <li>|</li>
    }

    loggers {
        1.class = Logger\DB
        1.config {
            pid = 1070
        }
    }

    saveInterceptors {
        10.class = Interceptor\AntiSpamFormTime
        10.config {
            # ID of a page to redirect SPAM bots to
            redirectPage = 971
            minTime.value = 3
            minTime.unit = seconds
        }
    }

    finishers {
        1 {
            class = Typoheads\Formhandler\Finisher\Mail
            config {
                mailer.class = Typoheads\Formhandler\Mailer\TYPO3Mailer
                admin {
                    templateFile = EXT:clean_blog/Resources/Private/Extensions/Formhandler/Admin.html
                    to_email = mi.blunck@gmail.com
                    to_name = admin
                    subject = koNTAKTMAIL
                    sender_email = email
                }
            }
        }

        2 {
            class = Typoheads\Formhandler\Finisher\Redirect
            config.redirectPage = 43
        }
    }
}