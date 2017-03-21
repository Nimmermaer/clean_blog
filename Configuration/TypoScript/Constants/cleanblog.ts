plugin.tx_cleanblog_social {
    view {
        # cat=plugin.tx_cleanblog_social/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:clean_blog/Resources/Private/Templates/
        # cat=plugin.tx_cleanblog_social/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:clean_blog/Resources/Private/Partials/
        # cat=plugin.tx_cleanblog_social/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:clean_blog/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_cleanblog_social//a; type=string; label=Default storage PID
        storagePid =
    }
}
