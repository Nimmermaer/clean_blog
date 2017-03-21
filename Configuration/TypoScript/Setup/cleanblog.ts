
plugin.tx_cleanblog_social {
    view {
        templateRootPaths.0 = {$plugin.tx_cleanblog_social.view.templateRootPath}
        partialRootPaths.0 = {$plugin.tx_cleanblog_social.view.partialRootPath}
        layoutRootPaths.0 = {$plugin.tx_cleanblog_social.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_cleanblog_social.persistence.storagePid}
    }
}

plugin.tx_cleanblog._CSS_DEFAULT_STYLE (
	textarea.f3-form-error {
		background-color:#FF9F9F;
		border: 1px #FF0000 solid;
	}

	input.f3-form-error {
		background-color:#FF9F9F;
		border: 1px #FF0000 solid;
	}

	.tx-clean-blog table {
		border-collapse:separate;
		border-spacing:10px;
	}

	.tx-clean-blog table th {
		font-weight:bold;
	}

	.tx-clean-blog table td {
		vertical-align:top;
	}

	.typo3-messages .message-error {
		color:red;
	}

	.typo3-messages .message-ok {
		color:green;
	}

)
