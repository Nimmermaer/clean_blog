temp.typo3searchWrap = <!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end-->
# Column configuration
lib {
    contents {
        columns {
            main = COA
            main {
                20 < styles.content.get
                20.select.where = colPos = 0
                20.wrap < temp.typo3searchWrap
            }
        }
    }
}
