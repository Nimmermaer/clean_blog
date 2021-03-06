plugin.tx_blog {
    persistence {
        storagePid = {$plugin.tx_blog.settings.storagePid}
    }
    view {
        templateRootPaths.10 = EXT:clean_blog/Resources/Private/Blog/Templates/
        partialRootPaths.10 = EXT:clean_blog/Resources/Private/Blog/Partials/
        layoutRootPaths.10 = EXT:clean_blog/Resources/Private/BlogLayouts/
     #   widget.TYPO3\CMS\Fluid\ViewHelpers\Widget\PaginateViewHelper.templateRootPath = EXT:blog/Resources/Private/Templates
    }
    settings {
        blogUid = {$plugin.tx_blog.settings.blogUid}
        authorUid  = {$plugin.tx_blog.settings.authorUid}
        categoryUid  = {$plugin.tx_blog.settings.categoryUid}
        tagUid  = {$plugin.tx_blog.settings.tagUid}
        archiveUid = {$plugin.tx_blog.settings.archiveUid}
        storagePid = {$plugin.tx_blog.settings.storagePid}
        sidebarWidgets {
            10 = tt_content.list.20.blog_recentpostswidget
            20 = tt_content.list.20.blog_categorywidget
            30 = tt_content.list.20.blog_tagwidget
            40 = tt_content.list.20.blog_commentswidget
            50 = tt_content.list.20.blog_archivewidget
            60 = tt_content.list.20.blog_feedwidget
        }
        # Lists related settings
        lists {
            posts {
                maximumDisplayedItems = {$plugin.tx_blog.settings.lists.posts.maximumDisplayedItems}
                dateFormat = %d.%m.%Y
            }
        }
        # Widget configuration section
        widgets {
            comments {
                limit = 5
            }
            tags {
                limit = 20
                # Minimum size in percent
                minSize = 100
                # Maximum size in percent
                maxSize = 200
            }
            archive {
                showCounter = 1
                groupByYear = 1
                groupByMonth = 1
                yearDateFormat = %Y
                monthDateFormat = %B
            }
        }
        # Comments related settings
        comments {
            # comments active in general or not
            active = 1
            # comments moderation mode, 0 = no moderation, 1 = moderation active
            moderation = 0
            # Respect post_language_id, 0 = show all comments also on translated posts, 1 = show only comments written in current language or language all (-1)
            respectPostLanguageId = 1
        }
        # Authors related settings
        authors {
            # Avatar settings
            avatar {
                # This settings depends on the configured AvatarProvider. The default is the GravatarProvider
                provider {
                    # Size in pixel
                    size = 64
                    # Default image
                    default = mm
                    # Gravatar rating
                    rating = g
                }
            }
        }
    }
    pageInfo.title = TEXT
    pageInfo.title {
        data = page:subtitle // page:nav_title // page:title
        stdWrap.wrap = <h1>|</h1>
        stdWrap.typolink.parameter.data = page:uid
    }
    pageInfo.sharingEnabled = TEXT
    pageInfo.sharingEnabled {
        data = page:sharing_enabled
    }
}

lib.blog.pageInfo < plugin.tx_blog.pageInfo

lib.blog.contentElementRendering = RECORDS
lib.blog.contentElementRendering {
    tables = tt_content
    source.current = 1
    dontCheckPid = 1
}

# You can change the typeNum, but don't change the object names!
# e.g. blog_rss_posts is a configuration key, don't change it
blog_rss_posts = PAGE
blog_rss_posts {
    typeNum = 200
    10 < tt_content.list.20.blog_posts

    config {
        disableAllHeaderCode = 1
        additionalHeaders {
            10 {
                header = Content-type: application/xml
            }
        }
        xhtml_cleaning = 0
        admPanel = 0
    }
}

blog_rss_category < blog_rss_posts
blog_rss_category.typeNum = 210
blog_rss_category.10 < tt_content.list.20.blog_category

blog_rss_tag < blog_rss_posts
blog_rss_tag.typeNum = 220
blog_rss_tag.10 < tt_content.list.20.blog_tag

blog_rss_archive < blog_rss_posts
blog_rss_archive.typeNum = 230
blog_rss_archive.10 < tt_content.list.20.blog_archive

blog_rss_comments < blog_rss_posts
blog_rss_comments.typeNum = 240
blog_rss_comments.10 < tt_content.list.20.blog_comments

blog_rss_author < blog_rss_posts
blog_rss_author.typeNum = 250
blog_rss_author.10 < tt_content.list.20.blog_authorposts
