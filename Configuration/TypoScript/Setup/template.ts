# Initiate template (used by page)
lib.templates.base = FLUIDTEMPLATE
lib.templates.base {
    partialRootPath = EXT:clean_blog/Resources/Private/Partials/
    layoutRootPath = EXT:clean_blog/Resources/Private/Layouts/
    dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        10 {
            references.fieldName = media
            as = files
        }

        30 = Mb\CleanBlog\DataProcessing\PageProcessor
        30 {
            partial = footer
            method = listSocialElements
            table = tx_cleanblog_domain_model_network
        }
    }

    variables {
        columnContent =< lib.contents.columns.main

        homePagePid = TEXT
        homePagePid {
            value = {$globals.homePageUid}
        }

        homePageTitle = TEXT
        homePageTitle {
            value = {$globals.homePageTitle}
        }

        copyright = TEXT
        copyright {
            data = date:U
            strftime = %Y
            wrap = &copy; &nbsp; | &nbsp; Blog
        }
    }
}

# Choose template file (based on backend_layout, respecting heredity)
lib.templates.base.file.stdWrap.cObject = CASE
lib.templates.base.file.stdWrap.cObject {
    key.field = backend_layout
    key.ifEmpty.data = levelfield : -1 , backend_layout_next_level, slide

    pagets__Blog = TEXT
    pagets__Blog.value = EXT:clean_blog/Resources/Private/Templates/Blog.html
}