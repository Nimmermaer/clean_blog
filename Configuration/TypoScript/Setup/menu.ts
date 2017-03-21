lib {
    mainmenu = HMENU
    mainmenu {
        special = directory
        special.value = {$globals.homePageUid}
        1 = TMENU
        1 {
            expAll = 1
            noBlur = 1
            NO = 1
            NO {
                wrapItemAndSub = <li> |</li>
                wrapItemAndSub.insertData = 1
                linkWrap = <span>|</span>
                ATagBeforeWrap = 1
                stdWrap.htmlSpecialChars = 1
            }

            ACT < .NO
            ACT {
                wrapItemAndSub = <li> |</li>
            }
        }
    }
}