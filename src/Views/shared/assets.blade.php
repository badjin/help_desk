{{--<link rel="StyleSheet" href="{{asset('vendor/panichd/bootstrap/bootstrap-' . PanicHD\PanicHD\Helpers\Cdn::Bootstrap . '.min.css')}}">--}}
<link rel="StyleSheet" href="{{asset('vendor/panichd/font-awesome/css/all-' . PanicHD\PanicHD\Helpers\Cdn::FontAwesome . '.min.css')}}">
<link rel="StyleSheet" href="{{asset('vendor/panichd/select2/select2-' . PanicHD\PanicHD\Helpers\Cdn::Select2 . '.min.css')}}">
<style type="text/css">
.select2-selection__choice {
	background-color: #cfe2f3 !important;
	border-color: #6fa8dc !important;
}

.select2-selection__choice, .select2-selection__choice__remove {
	color: #0b5394 !important;
}

</style>

{{--<link href="{{ asset('/vendor/panichd/css/panichd.css?v=20191001') }}" rel="stylesheet">--}}
{{--<link href="{{ asset('/vendor/panichd/css/mdb.min.css') }}" rel="stylesheet">--}}


<style>
	/* Webfont: Lato-Light */@font-face {
		font-family: 'LatoWeb';
		src: url('fonts/Lato-Light.eot'); /* IE9 Compat Modes */
		src: url('fonts/Lato-Light.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
		url('fonts/Lato-Light-1.woff2') format('woff2'), /* Modern Browsers */
		url('fonts/Lato-Light.woff') format('woff'), /* Modern Browsers */
		url('fonts/Lato-Light.ttf') format('truetype');
		font-style: normal;
		font-weight: 300;
		text-rendering: optimizeLegibility;
		unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
	}

	/* Webfont: Lato-Light */@font-face {
		font-family: 'LatoWeb';
		src: url('fonts/Lato-Light.eot'); /* IE9 Compat Modes */
		src: url('fonts/Lato-Light.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
		url('fonts/Lato-Light-2.woff2') format('woff2'), /* Modern Browsers */
		url('fonts/Lato-Light.woff') format('woff'), /* Modern Browsers */
		url('fonts/Lato-Light.ttf') format('truetype');
		font-style: normal;
		font-weight: 300;
		text-rendering: optimizeLegibility;
		unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
	}

	/*body {*/
	/*	background-color: #f2f2f2;*/
	/*	font-family: "LatoWeb", Helvetica, sans-serif;*/
	/*	font-weight: 300;*/
	/*	font-size: 16px;*/
	/*	color: black;*/
	/*	!*padding-top: 3.8em;*!*/
	/*	-webkit-font-smoothing: antialiased;*/
	/*	-webkit-overflow-scrolling: touch;*/
	/*}*/

	/* Webfont: Raleway-Light */@font-face {
		font-family: 'Raleway';
		font-style: normal;
		font-weight: 300;
		src: local('Raleway Light'), local('Raleway-Light'), url('fonts/Raleway-Light-1.woff2') format('woff2');
		unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
	}

	/* Webfont: Raleway-Light */@font-face {
		font-family: 'Raleway';
		font-style: normal;
		font-weight: 300;
		src: local('Raleway Light'), local('Raleway-Light'), url('fonts/Raleway-Light-2.woff2') format('woff2');
		unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
	}

	/* Titles */
	/*h1, h2, h3, h4, h5, h6 {*/
	/*	font-family: "Raleway", Helvetica, sans-serif;*/
	/*	font-weight: 300;*/
	/*	color: #636363;*/
	/*}*/

	.btn-xs {
		padding  : .4rem;
		font-size  : .9rem;
		line-height  : .5rem;
		border-radius : .2rem;
	}

	.form-group .fa {
		color: gray;
	}

	/* Hihglight a form group. This is used in ticket search form for filled fields */
	.form-group.row.bg-info {
		padding: 0.5em 0em;
	}

	.form-group.row.bg-info label.col-form-label {
		font-weight: bold;
	}
	.form-group.row.bg-info label {
		color: white;
	}

	/* Filter panel */
	#filter_panel {
		/*margin: 0em 0em 0.8em 0em;*/
	}

	#filter_panel .btn-light .badge {
		background-color: #bbb ;
	}

	#filter_panel .card-body {
		padding: 0.5rem;
	}

	#filter_panel .title {
		display: inline-block;
		color: #aaa;
		margin: 0em 0.2em 0em 1em;
	}

	#filter_panel .title.pov {
		margin: 0em 0.2em 0em 0em;
	}

	#filter_panel .dropdown-toggle {
		color: #555;
		font-weight: bold;
	}

	#filter_panel .btn.pov-link, #filter_panel .btn.agent-link, #filter_panel .btn.agent-current {
		padding: 0.3em 0.6em;
	}

	#filter_panel .btn.pov-link {
		margin: 0em 0.5em 0em 0em;
	}

	#filter_panel .removeall-link, #filter_panel .btn.pov-link, #filter_panel .btn.agent-link {
		border: none;
	}

	#filter_panel .btn.agent-link {
		color: #aaa;
	}

	#filter_panel .btn.agent-link .badge {
		background: #ccc;
	}

	#filter_panel .btn.agent-current {
		color: #666;
		font-weight: bold;
		background: white;
		border: none;
	}

	#filter_panel .btn.agent-current .badge {
		color: white;
		background: #666;
	}

	#filter_panel .select2-selection {
		background-color: #f8f9fa;
	}

	/* Mark as read / unread button */
	#tickets-table .unread_toggle {
		background-color: transparent;
		border-color: transparent;
	}
	#tickets-table .unread_toggle .fa-user {
		color: #ccc;
	}

	/* Unread ticket highlighted text style */
	.unread_ticket_text {
		font-weight: bold;
	}

	/* Unread comment highlighted card header */
	.unread_comment .card-header {
		background-color: #777;
	}

	/*
     * Used in Ticket card. Style from Bootstrap 3
    */
	.btn.btn-default {
		color: black;
		background-color: white;
		border-color: #ccc;
	}

	.btn.btn-default:hover, .btn.btn-default:active {
		background-color: #ddd;
	}


	/*
     * General Select2 styles
    */
	#panichd_content .select2-selection {
		min-height: 34px !important;
		border-color: #ccc !important;
	}

	#panichd_content .select2-selection--single {
		padding: 2px 6px;
	}

	#panichd_content .select2-selection__arrow {
		top: 3px !important;
	}

	#panichd_content .select2-container *:focus {
		outline: none;
	}

	#panichd_content .select2-selection--single .select2-search input {
		border: 1px solid #ccc !important;
	}

	#panichd_content .select2-results__option[aria-selected=true] {
		color: #555;
		font-weight: bold;
		background: white !important;
	}
	#panichd_content .select2-results__option--highlighted {
		color: black !important;
		background: #eee !important;
	}


	/*
     * Agent filter menu with select2 script
    */
	#panichd_content .select2_filter {
		display: inline-block;
		font-size: 0.8em;
	}
	#panichd_content #select_agent {
		display: none; /* don't show select until it is rendered */
	}
	#panichd_content .select2_filter #select2-select_agent-container {
		border-radius: 4px;
	}
	#panichd_content .select2_filter * {
		outline: none;
	}
	#panichd_content .select2_filter .select2-selection--single {
		color: #666;
		font-weight: bold;
		border-color: transparent !important;
	}

	#panichd_content .select2_filter .select2-selection--single:hover {
		background-color: #e6e6e6;
	}

	#panichd_content #select2-select_agent-results {
		font-size: 0.9em;
	}

	/*
     * Summernote Editor appearance
    */
	.summernote-text-wrapper p {
		line-height: 22px;
		margin-bottom: 15px;
	}

	.summernote-text-wrapper .summernote_thumbnail_link {
		display: inline-block;
		border: 1px solid #eee;
		padding: 4px;
		border-radius: 5px;
		width: 60px;
		height: 60px;
	}

	/*
     * Datatable styles
    */
	.table-hover tbody tr:hover td, .table-hover tbody tr.hover td {
		background-color: #ddd; /*lightorange: #FFE2B3*/
	}

	/*
     * Tickets table
    */

	#tickets-table .fa.attachment, #tickets-table .fa.comment, #tickets-table .fa.tickethidden {
		color: #999;
	}

	#tickets-table .jquery_ticket_text_toggle {
		color: #999;
		border-color: transparent;
		background-color: transparent;
	}

	#tickets-table .jquery_ticket_text_toggle:hover {
		background-color: #eee;
	}

	/*
     * Ticket show
    */
	/* sm and up */
	@media screen and (min-width: 1200px){
		#ticket-body .row.row-eq-height {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
		}

		#ticket-body .row-ticket-attachments {
			margin: 15px -15px 5px -30px;
		}
	}


	@media screen and (max-width: 1999px){
		#ticket-body .row-ticket-attachments {
			margin: 15px -15px 5px -1px;
		}
	}

	/* Tags */
	.btn.btn-tag {
		border: transparent;
	}
	.btn-tag.btn-xs {
		line-height: 0.9rem;
	}

	.card-highlight {
		border-color: #FFE171;
	}

	.card-highlight > .card-header {
		background-color: #FFE171;
	}

	.card-highlight > .card-body {
		background-color: lightyellow;
	}

	.comment_deleteit {
		margin: -5px -10px 0px 0px;
	}

	/* Grouped check list check / uncheck styles : Deletion list style */
	.grouped_check_list .check_button, .grouped_check_list .check_button:visited {
		color: #777;
	}

	.grouped_check_list.deletion_list .check_parent.unchecked .fa-check, .grouped_check_list.deletion_list .check_parent.checked .fa-times {
		display: none;
	}
	.grouped_check_list.deletion_list .check_parent.checked .fa-check, .grouped_check_list.deletion_list .check_parent.unchecked .fa-times {
		display: inline !important;
	}

	.grouped_check_list.deletion_list .check_parent.checked .check_info {
		text-decoration: line-through;
		color: black !important;
		background-color: #ff9999 !important;
	}

	.grouped_check_list.deletion_list .check_parent.checked.check_related_text, .grouped_check_list.deletion_list .check_parent.checked .check_related_text {
		text-decoration: line-through;
		color: black !important;
	}

	.grouped_check_list.deletion_list .check_parent.checked.check_related_bg, .grouped_check_list.deletion_list .check_parent.checked .check_related_bg {
		background-color: #ff9999 !important;
	}

	/* Grouped check list - Style: no-border */
	.grouped_check_list.no-border .btn {
		border: transparent;
	}

	/* Grouped check list - Style: Coloured btn elements by default */
	.grouped_check_list.coloured-list .check_parent {
		margin: 0px 25px 10px 0px;
	}

	.grouped_check_list.coloured-list .check_parent.unchecked .btn-light {
		color: gray;
	}
	.grouped_check_list.coloured-list .check_parent.unchecked .check_info {
		background: white;
	}

	.grouped_check_list.coloured-list .check_parent.checked a.btn-light {
		color: #00e600;
	}
	.grouped_check_list.coloured-list .check_parent.checked .check_info {
		color: black;
	}
	.grouped_check_list.coloured-list .check_parent.checked .check_info {
		background: #f2ffe6;
	}


	/* Common elements */
	.form-control {
		font-size: 16px;
	}


	.tooltip-wrap-15 .tooltip {
		width: 15em;
	}

	.tooltip-info {
		cursor: help;
	}

	.tooltip-info .fa-question-circle {
		color: #bbb;
	}

	/* priority and agent change */
	.popover .popover-title button {
		border: none;
		outline: none;
		background: transparent;
		font-size: 2em;
		margin: -8px -8px 0px 0px;
	}

	/* Ticket field error */
	.jquery_error_text {
		display: none;
	}

	.note-editor.panel {
		margin-bottom: 0px;
	}

	.jquery_error .form-control, .jquery_error .note-editor, .jquery_error .jquery_attachment_block {
		border: 1px solid red !important;
	}
	.jquery_error .jquery_error_text {
		display: block;
		color: red;
		font-weight: bold;
	}

	/* Ticket attachments */
	.attached_list .card {
		margin: 0em 0.5em 0.5em 0em;
	}

	.attached_list .card-body {
		padding: 8px;
	}

	.attached_list .media-left a, .attached_list .media-left a:visited {
		color: #bbb;
	}

	.attached_list .media-left a.image:hover, .attached_list .media-left a.image:active {
		color: #ff3385;
	}

	.attached_list .media-left a.pdf:hover, .attached_list .media-left a.pdf:active {
		color: red;
	}

	.attached_list .media-left a.msword:hover, .attached_list .media-left a.msword:active {
		color: #549ee8;
	}

	.attached_list .media-left a.msexcel:hover, .attached_list .media-left a.msexcel:active {
		color: #77DD77;
	}

	.attached_list .media-left a.compressed:hover, .attached_list .media-left a.compressed:active {
		color: #FFC125;
	}

	.attached_list .media-left a.default:hover, .attached_list .media-left a.default:active {
		color: orange;
	}
</style>

<style>
	@charset "UTF-8";

	/*!
 * Material Design for Bootstrap 4
 *   Version: MDB FREE 4.12.0
 *
 *
 *   Copyright: Material Design for Bootstrap
 *   https://mdbootstrap.com/
 *
 *   Read the license: https://mdbootstrap.com/general/license/
 *
 *
 *   Documentation: https://mdbootstrap.com/
 *
 *   Getting started: https://mdbootstrap.com/docs/jquery/getting-started/download/
 *
 *   Tutorials: https://mdbootstrap.com/education/bootstrap/
 *
 *   Templates: https://mdbootstrap.com/templates/
 *
 *   Support: https://mdbootstrap.com/support/
 *
 *   Contact: office@mdbootstrap.com
 *
 *   Attribution: Animate CSS, Twitter Bootstrap, Materialize CSS, Normalize CSS, Waves JS, WOW JS, Toastr, Chart.js
 */
	.mdb-color.lighten-5 {
		background-color: #d0d6e2 !important
	}

	.mdb-color.lighten-4 {
		background-color: #b1bace !important
	}

	.mdb-color.lighten-3 {
		background-color: #929fba !important
	}

	.mdb-color.lighten-2 {
		background-color: #7283a7 !important
	}

	.mdb-color.lighten-1 {
		background-color: #59698d !important
	}

	.mdb-color {
		background-color: #45526e !important
	}

	.mdb-color-text {
		color: #45526e !important
	}

	.rgba-mdb-color-slight,
	.rgba-mdb-color-slight:after {
		background-color: rgba(69, 82, 110, 0.1)
	}

	.rgba-mdb-color-light,
	.rgba-mdb-color-light:after {
		background-color: rgba(69, 82, 110, 0.3)
	}

	.rgba-mdb-color-strong,
	.rgba-mdb-color-strong:after {
		background-color: rgba(69, 82, 110, 0.7)
	}

	.mdb-color.darken-1 {
		background-color: #3b465e !important
	}

	.mdb-color.darken-2 {
		background-color: #2e3951 !important
	}

	.mdb-color.darken-3 {
		background-color: #1c2a48 !important
	}

	.mdb-color.darken-4 {
		background-color: #1c2331 !important
	}

	.red.lighten-5 {
		background-color: #ffebee !important
	}

	.red.lighten-4 {
		background-color: #ffcdd2 !important
	}

	.red.lighten-3 {
		background-color: #ef9a9a !important
	}

	.red.lighten-2 {
		background-color: #e57373 !important
	}

	.red.lighten-1 {
		background-color: #ef5350 !important
	}

	.red {
		background-color: #f44336 !important
	}

	.red-text {
		color: #f44336 !important
	}

	.rgba-red-slight,
	.rgba-red-slight:after {
		background-color: rgba(244, 67, 54, 0.1)
	}

	.rgba-red-light,
	.rgba-red-light:after {
		background-color: rgba(244, 67, 54, 0.3)
	}

	.rgba-red-strong,
	.rgba-red-strong:after {
		background-color: rgba(244, 67, 54, 0.7)
	}

	.red.darken-1 {
		background-color: #e53935 !important
	}

	.red.darken-2 {
		background-color: #d32f2f !important
	}

	.red.darken-3 {
		background-color: #c62828 !important
	}

	.red.darken-4 {
		background-color: #b71c1c !important
	}

	.red.accent-1 {
		background-color: #ff8a80 !important
	}

	.red.accent-2 {
		background-color: #ff5252 !important
	}

	.red.accent-3 {
		background-color: #ff1744 !important
	}

	.red.accent-4 {
		background-color: #d50000 !important
	}

	.pink.lighten-5 {
		background-color: #fce4ec !important
	}

	.pink.lighten-4 {
		background-color: #f8bbd0 !important
	}

	.pink.lighten-3 {
		background-color: #f48fb1 !important
	}

	.pink.lighten-2 {
		background-color: #f06292 !important
	}

	.pink.lighten-1 {
		background-color: #ec407a !important
	}

	.pink {
		background-color: #e91e63 !important
	}

	.pink-text {
		color: #e91e63 !important
	}

	.rgba-pink-slight,
	.rgba-pink-slight:after {
		background-color: rgba(233, 30, 99, 0.1)
	}

	.rgba-pink-light,
	.rgba-pink-light:after {
		background-color: rgba(233, 30, 99, 0.3)
	}

	.rgba-pink-strong,
	.rgba-pink-strong:after {
		background-color: rgba(233, 30, 99, 0.7)
	}

	.pink.darken-1 {
		background-color: #d81b60 !important
	}

	.pink.darken-2 {
		background-color: #c2185b !important
	}

	.pink.darken-3 {
		background-color: #ad1457 !important
	}

	.pink.darken-4 {
		background-color: #880e4f !important
	}

	.pink.accent-1 {
		background-color: #ff80ab !important
	}

	.pink.accent-2 {
		background-color: #ff4081 !important
	}

	.pink.accent-3 {
		background-color: #f50057 !important
	}

	.pink.accent-4 {
		background-color: #c51162 !important
	}

	.purple.lighten-5 {
		background-color: #f3e5f5 !important
	}

	.purple.lighten-4 {
		background-color: #e1bee7 !important
	}

	.purple.lighten-3 {
		background-color: #ce93d8 !important
	}

	.purple.lighten-2 {
		background-color: #ba68c8 !important
	}

	.purple.lighten-1 {
		background-color: #ab47bc !important
	}

	.purple {
		background-color: #9c27b0 !important
	}

	.purple-text {
		color: #9c27b0 !important
	}

	.rgba-purple-slight,
	.rgba-purple-slight:after {
		background-color: rgba(156, 39, 176, 0.1)
	}

	.rgba-purple-light,
	.rgba-purple-light:after {
		background-color: rgba(156, 39, 176, 0.3)
	}

	.rgba-purple-strong,
	.rgba-purple-strong:after {
		background-color: rgba(156, 39, 176, 0.7)
	}

	.purple.darken-1 {
		background-color: #8e24aa !important
	}

	.purple.darken-2 {
		background-color: #7b1fa2 !important
	}

	.purple.darken-3 {
		background-color: #6a1b9a !important
	}

	.purple.darken-4 {
		background-color: #4a148c !important
	}

	.purple.accent-1 {
		background-color: #ea80fc !important
	}

	.purple.accent-2 {
		background-color: #e040fb !important
	}

	.purple.accent-3 {
		background-color: #d500f9 !important
	}

	.purple.accent-4 {
		background-color: #a0f !important
	}

	.deep-purple.lighten-5 {
		background-color: #ede7f6 !important
	}

	.deep-purple.lighten-4 {
		background-color: #d1c4e9 !important
	}

	.deep-purple.lighten-3 {
		background-color: #b39ddb !important
	}

	.deep-purple.lighten-2 {
		background-color: #9575cd !important
	}

	.deep-purple.lighten-1 {
		background-color: #7e57c2 !important
	}

	.deep-purple {
		background-color: #673ab7 !important
	}

	.deep-purple-text {
		color: #673ab7 !important
	}

	.rgba-deep-purple-slight,
	.rgba-deep-purple-slight:after {
		background-color: rgba(103, 58, 183, 0.1)
	}

	.rgba-deep-purple-light,
	.rgba-deep-purple-light:after {
		background-color: rgba(103, 58, 183, 0.3)
	}

	.rgba-deep-purple-strong,
	.rgba-deep-purple-strong:after {
		background-color: rgba(103, 58, 183, 0.7)
	}

	.deep-purple.darken-1 {
		background-color: #5e35b1 !important
	}

	.deep-purple.darken-2 {
		background-color: #512da8 !important
	}

	.deep-purple.darken-3 {
		background-color: #4527a0 !important
	}

	.deep-purple.darken-4 {
		background-color: #311b92 !important
	}

	.deep-purple.accent-1 {
		background-color: #b388ff !important
	}

	.deep-purple.accent-2 {
		background-color: #7c4dff !important
	}

	.deep-purple.accent-3 {
		background-color: #651fff !important
	}

	.deep-purple.accent-4 {
		background-color: #6200ea !important
	}

	.indigo.lighten-5 {
		background-color: #e8eaf6 !important
	}

	.indigo.lighten-4 {
		background-color: #c5cae9 !important
	}

	.indigo.lighten-3 {
		background-color: #9fa8da !important
	}

	.indigo.lighten-2 {
		background-color: #7986cb !important
	}

	.indigo.lighten-1 {
		background-color: #5c6bc0 !important
	}

	.indigo {
		background-color: #3f51b5 !important
	}

	.indigo-text {
		color: #3f51b5 !important
	}

	.rgba-indigo-slight,
	.rgba-indigo-slight:after {
		background-color: rgba(63, 81, 181, 0.1)
	}

	.rgba-indigo-light,
	.rgba-indigo-light:after {
		background-color: rgba(63, 81, 181, 0.3)
	}

	.rgba-indigo-strong,
	.rgba-indigo-strong:after {
		background-color: rgba(63, 81, 181, 0.7)
	}

	.indigo.darken-1 {
		background-color: #3949ab !important
	}

	.indigo.darken-2 {
		background-color: #303f9f !important
	}

	.indigo.darken-3 {
		background-color: #283593 !important
	}

	.indigo.darken-4 {
		background-color: #1a237e !important
	}

	.indigo.accent-1 {
		background-color: #8c9eff !important
	}

	.indigo.accent-2 {
		background-color: #536dfe !important
	}

	.indigo.accent-3 {
		background-color: #3d5afe !important
	}

	.indigo.accent-4 {
		background-color: #304ffe !important
	}

	.blue.lighten-5 {
		background-color: #e3f2fd !important
	}

	.blue.lighten-4 {
		background-color: #bbdefb !important
	}

	.blue.lighten-3 {
		background-color: #90caf9 !important
	}

	.blue.lighten-2 {
		background-color: #64b5f6 !important
	}

	.blue.lighten-1 {
		background-color: #42a5f5 !important
	}

	.blue {
		background-color: #2196f3 !important
	}

	.blue-text {
		color: #2196f3 !important
	}

	.rgba-blue-slight,
	.rgba-blue-slight:after {
		background-color: rgba(33, 150, 243, 0.1)
	}

	.rgba-blue-light,
	.rgba-blue-light:after {
		background-color: rgba(33, 150, 243, 0.3)
	}

	.rgba-blue-strong,
	.rgba-blue-strong:after {
		background-color: rgba(33, 150, 243, 0.7)
	}

	.blue.darken-1 {
		background-color: #1e88e5 !important
	}

	.blue.darken-2 {
		background-color: #1976d2 !important
	}

	.blue.darken-3 {
		background-color: #1565c0 !important
	}

	.blue.darken-4 {
		background-color: #0d47a1 !important
	}

	.blue.accent-1 {
		background-color: #82b1ff !important
	}

	.blue.accent-2 {
		background-color: #448aff !important
	}

	.blue.accent-3 {
		background-color: #2979ff !important
	}

	.blue.accent-4 {
		background-color: #2962ff !important
	}

	.light-blue.lighten-5 {
		background-color: #e1f5fe !important
	}

	.light-blue.lighten-4 {
		background-color: #b3e5fc !important
	}

	.light-blue.lighten-3 {
		background-color: #81d4fa !important
	}

	.light-blue.lighten-2 {
		background-color: #4fc3f7 !important
	}

	.light-blue.lighten-1 {
		background-color: #29b6f6 !important
	}

	.light-blue {
		background-color: #03a9f4 !important
	}

	.light-blue-text {
		color: #03a9f4 !important
	}

	.rgba-light-blue-slight,
	.rgba-light-blue-slight:after {
		background-color: rgba(3, 169, 244, 0.1)
	}

	.rgba-light-blue-light,
	.rgba-light-blue-light:after {
		background-color: rgba(3, 169, 244, 0.3)
	}

	.rgba-light-blue-strong,
	.rgba-light-blue-strong:after {
		background-color: rgba(3, 169, 244, 0.7)
	}

	.light-blue.darken-1 {
		background-color: #039be5 !important
	}

	.light-blue.darken-2 {
		background-color: #0288d1 !important
	}

	.light-blue.darken-3 {
		background-color: #0277bd !important
	}

	.light-blue.darken-4 {
		background-color: #01579b !important
	}

	.light-blue.accent-1 {
		background-color: #80d8ff !important
	}

	.light-blue.accent-2 {
		background-color: #40c4ff !important
	}

	.light-blue.accent-3 {
		background-color: #00b0ff !important
	}

	.light-blue.accent-4 {
		background-color: #0091ea !important
	}

	.cyan.lighten-5 {
		background-color: #e0f7fa !important
	}

	.cyan.lighten-4 {
		background-color: #b2ebf2 !important
	}

	.cyan.lighten-3 {
		background-color: #80deea !important
	}

	.cyan.lighten-2 {
		background-color: #4dd0e1 !important
	}

	.cyan.lighten-1 {
		background-color: #26c6da !important
	}

	.cyan {
		background-color: #00bcd4 !important
	}

	.cyan-text {
		color: #00bcd4 !important
	}

	.rgba-cyan-slight,
	.rgba-cyan-slight:after {
		background-color: rgba(0, 188, 212, 0.1)
	}

	.rgba-cyan-light,
	.rgba-cyan-light:after {
		background-color: rgba(0, 188, 212, 0.3)
	}

	.rgba-cyan-strong,
	.rgba-cyan-strong:after {
		background-color: rgba(0, 188, 212, 0.7)
	}

	.cyan.darken-1 {
		background-color: #00acc1 !important
	}

	.cyan.darken-2 {
		background-color: #0097a7 !important
	}

	.cyan.darken-3 {
		background-color: #00838f !important
	}

	.cyan.darken-4 {
		background-color: #006064 !important
	}

	.cyan.accent-1 {
		background-color: #84ffff !important
	}

	.cyan.accent-2 {
		background-color: #18ffff !important
	}

	.cyan.accent-3 {
		background-color: #00e5ff !important
	}

	.cyan.accent-4 {
		background-color: #00b8d4 !important
	}

	.teal.lighten-5 {
		background-color: #e0f2f1 !important
	}

	.teal.lighten-4 {
		background-color: #b2dfdb !important
	}

	.teal.lighten-3 {
		background-color: #80cbc4 !important
	}

	.teal.lighten-2 {
		background-color: #4db6ac !important
	}

	.teal.lighten-1 {
		background-color: #26a69a !important
	}

	.teal {
		background-color: #009688 !important
	}

	.teal-text {
		color: #009688 !important
	}

	.rgba-teal-slight,
	.rgba-teal-slight:after {
		background-color: rgba(0, 150, 136, 0.1)
	}

	.rgba-teal-light,
	.rgba-teal-light:after {
		background-color: rgba(0, 150, 136, 0.3)
	}

	.rgba-teal-strong,
	.rgba-teal-strong:after {
		background-color: rgba(0, 150, 136, 0.7)
	}

	.teal.darken-1 {
		background-color: #00897b !important
	}

	.teal.darken-2 {
		background-color: #00796b !important
	}

	.teal.darken-3 {
		background-color: #00695c !important
	}

	.teal.darken-4 {
		background-color: #004d40 !important
	}

	.teal.accent-1 {
		background-color: #a7ffeb !important
	}

	.teal.accent-2 {
		background-color: #64ffda !important
	}

	.teal.accent-3 {
		background-color: #1de9b6 !important
	}

	.teal.accent-4 {
		background-color: #00bfa5 !important
	}

	.green.lighten-5 {
		background-color: #e8f5e9 !important
	}

	.green.lighten-4 {
		background-color: #c8e6c9 !important
	}

	.green.lighten-3 {
		background-color: #a5d6a7 !important
	}

	.green.lighten-2 {
		background-color: #81c784 !important
	}

	.green.lighten-1 {
		background-color: #66bb6a !important
	}

	.green {
		background-color: #4caf50 !important
	}

	.green-text {
		color: #4caf50 !important
	}

	.rgba-green-slight,
	.rgba-green-slight:after {
		background-color: rgba(76, 175, 80, 0.1)
	}

	.rgba-green-light,
	.rgba-green-light:after {
		background-color: rgba(76, 175, 80, 0.3)
	}

	.rgba-green-strong,
	.rgba-green-strong:after {
		background-color: rgba(76, 175, 80, 0.7)
	}

	.green.darken-1 {
		background-color: #43a047 !important
	}

	.green.darken-2 {
		background-color: #388e3c !important
	}

	.green.darken-3 {
		background-color: #2e7d32 !important
	}

	.green.darken-4 {
		background-color: #1b5e20 !important
	}

	.green.accent-1 {
		background-color: #b9f6ca !important
	}

	.green.accent-2 {
		background-color: #69f0ae !important
	}

	.green.accent-3 {
		background-color: #00e676 !important
	}

	.green.accent-4 {
		background-color: #00c853 !important
	}

	.light-green.lighten-5 {
		background-color: #f1f8e9 !important
	}

	.light-green.lighten-4 {
		background-color: #dcedc8 !important
	}

	.light-green.lighten-3 {
		background-color: #c5e1a5 !important
	}

	.light-green.lighten-2 {
		background-color: #aed581 !important
	}

	.light-green.lighten-1 {
		background-color: #9ccc65 !important
	}

	.light-green {
		background-color: #8bc34a !important
	}

	.light-green-text {
		color: #8bc34a !important
	}

	.rgba-light-green-slight,
	.rgba-light-green-slight:after {
		background-color: rgba(139, 195, 74, 0.1)
	}

	.rgba-light-green-light,
	.rgba-light-green-light:after {
		background-color: rgba(139, 195, 74, 0.3)
	}

	.rgba-light-green-strong,
	.rgba-light-green-strong:after {
		background-color: rgba(139, 195, 74, 0.7)
	}

	.light-green.darken-1 {
		background-color: #7cb342 !important
	}

	.light-green.darken-2 {
		background-color: #689f38 !important
	}

	.light-green.darken-3 {
		background-color: #558b2f !important
	}

	.light-green.darken-4 {
		background-color: #33691e !important
	}

	.light-green.accent-1 {
		background-color: #ccff90 !important
	}

	.light-green.accent-2 {
		background-color: #b2ff59 !important
	}

	.light-green.accent-3 {
		background-color: #76ff03 !important
	}

	.light-green.accent-4 {
		background-color: #64dd17 !important
	}

	.lime.lighten-5 {
		background-color: #f9fbe7 !important
	}

	.lime.lighten-4 {
		background-color: #f0f4c3 !important
	}

	.lime.lighten-3 {
		background-color: #e6ee9c !important
	}

	.lime.lighten-2 {
		background-color: #dce775 !important
	}

	.lime.lighten-1 {
		background-color: #d4e157 !important
	}

	.lime {
		background-color: #cddc39 !important
	}

	.lime-text {
		color: #cddc39 !important
	}

	.rgba-lime-slight,
	.rgba-lime-slight:after {
		background-color: rgba(205, 220, 57, 0.1)
	}

	.rgba-lime-light,
	.rgba-lime-light:after {
		background-color: rgba(205, 220, 57, 0.3)
	}

	.rgba-lime-strong,
	.rgba-lime-strong:after {
		background-color: rgba(205, 220, 57, 0.7)
	}

	.lime.darken-1 {
		background-color: #c0ca33 !important
	}

	.lime.darken-2 {
		background-color: #afb42b !important
	}

	.lime.darken-3 {
		background-color: #9e9d24 !important
	}

	.lime.darken-4 {
		background-color: #827717 !important
	}

	.lime.accent-1 {
		background-color: #f4ff81 !important
	}

	.lime.accent-2 {
		background-color: #eeff41 !important
	}

	.lime.accent-3 {
		background-color: #c6ff00 !important
	}

	.lime.accent-4 {
		background-color: #aeea00 !important
	}

	.yellow.lighten-5 {
		background-color: #fffde7 !important
	}

	.yellow.lighten-4 {
		background-color: #fff9c4 !important
	}

	.yellow.lighten-3 {
		background-color: #fff59d !important
	}

	.yellow.lighten-2 {
		background-color: #fff176 !important
	}

	.yellow.lighten-1 {
		background-color: #ffee58 !important
	}

	.yellow {
		background-color: #ffeb3b !important
	}

	.yellow-text {
		color: #ffeb3b !important
	}

	.rgba-yellow-slight,
	.rgba-yellow-slight:after {
		background-color: rgba(255, 235, 59, 0.1)
	}

	.rgba-yellow-light,
	.rgba-yellow-light:after {
		background-color: rgba(255, 235, 59, 0.3)
	}

	.rgba-yellow-strong,
	.rgba-yellow-strong:after {
		background-color: rgba(255, 235, 59, 0.7)
	}

	.yellow.darken-1 {
		background-color: #fdd835 !important
	}

	.yellow.darken-2 {
		background-color: #fbc02d !important
	}

	.yellow.darken-3 {
		background-color: #f9a825 !important
	}

	.yellow.darken-4 {
		background-color: #f57f17 !important
	}

	.yellow.accent-1 {
		background-color: #ffff8d !important
	}

	.yellow.accent-2 {
		background-color: #ff0 !important
	}

	.yellow.accent-3 {
		background-color: #ffea00 !important
	}

	.yellow.accent-4 {
		background-color: #ffd600 !important
	}

	.amber.lighten-5 {
		background-color: #fff8e1 !important
	}

	.amber.lighten-4 {
		background-color: #ffecb3 !important
	}

	.amber.lighten-3 {
		background-color: #ffe082 !important
	}

	.amber.lighten-2 {
		background-color: #ffd54f !important
	}

	.amber.lighten-1 {
		background-color: #ffca28 !important
	}

	.amber {
		background-color: #ffc107 !important
	}

	.amber-text {
		color: #ffc107 !important
	}

	.rgba-amber-slight,
	.rgba-amber-slight:after {
		background-color: rgba(255, 193, 7, 0.1)
	}

	.rgba-amber-light,
	.rgba-amber-light:after {
		background-color: rgba(255, 193, 7, 0.3)
	}

	.rgba-amber-strong,
	.rgba-amber-strong:after {
		background-color: rgba(255, 193, 7, 0.7)
	}

	.amber.darken-1 {
		background-color: #ffb300 !important
	}

	.amber.darken-2 {
		background-color: #ffa000 !important
	}

	.amber.darken-3 {
		background-color: #ff8f00 !important
	}

	.amber.darken-4 {
		background-color: #ff6f00 !important
	}

	.amber.accent-1 {
		background-color: #ffe57f !important
	}

	.amber.accent-2 {
		background-color: #ffd740 !important
	}

	.amber.accent-3 {
		background-color: #ffc400 !important
	}

	.amber.accent-4 {
		background-color: #ffab00 !important
	}

	.orange.lighten-5 {
		background-color: #fff3e0 !important
	}

	.orange.lighten-4 {
		background-color: #ffe0b2 !important
	}

	.orange.lighten-3 {
		background-color: #ffcc80 !important
	}

	.orange.lighten-2 {
		background-color: #ffb74d !important
	}

	.orange.lighten-1 {
		background-color: #ffa726 !important
	}

	.orange {
		background-color: #ff9800 !important
	}

	.orange-text {
		color: #ff9800 !important
	}

	.rgba-orange-slight,
	.rgba-orange-slight:after {
		background-color: rgba(255, 152, 0, 0.1)
	}

	.rgba-orange-light,
	.rgba-orange-light:after {
		background-color: rgba(255, 152, 0, 0.3)
	}

	.rgba-orange-strong,
	.rgba-orange-strong:after {
		background-color: rgba(255, 152, 0, 0.7)
	}

	.orange.darken-1 {
		background-color: #fb8c00 !important
	}

	.orange.darken-2 {
		background-color: #f57c00 !important
	}

	.orange.darken-3 {
		background-color: #ef6c00 !important
	}

	.orange.darken-4 {
		background-color: #e65100 !important
	}

	.orange.accent-1 {
		background-color: #ffd180 !important
	}

	.orange.accent-2 {
		background-color: #ffab40 !important
	}

	.orange.accent-3 {
		background-color: #ff9100 !important
	}

	.orange.accent-4 {
		background-color: #ff6d00 !important
	}

	.deep-orange.lighten-5 {
		background-color: #fbe9e7 !important
	}

	.deep-orange.lighten-4 {
		background-color: #ffccbc !important
	}

	.deep-orange.lighten-3 {
		background-color: #ffab91 !important
	}

	.deep-orange.lighten-2 {
		background-color: #ff8a65 !important
	}

	.deep-orange.lighten-1 {
		background-color: #ff7043 !important
	}

	.deep-orange {
		background-color: #ff5722 !important
	}

	.deep-orange-text {
		color: #ff5722 !important
	}

	.rgba-deep-orange-slight,
	.rgba-deep-orange-slight:after {
		background-color: rgba(255, 87, 34, 0.1)
	}

	.rgba-deep-orange-light,
	.rgba-deep-orange-light:after {
		background-color: rgba(255, 87, 34, 0.3)
	}

	.rgba-deep-orange-strong,
	.rgba-deep-orange-strong:after {
		background-color: rgba(255, 87, 34, 0.7)
	}

	.deep-orange.darken-1 {
		background-color: #f4511e !important
	}

	.deep-orange.darken-2 {
		background-color: #e64a19 !important
	}

	.deep-orange.darken-3 {
		background-color: #d84315 !important
	}

	.deep-orange.darken-4 {
		background-color: #bf360c !important
	}

	.deep-orange.accent-1 {
		background-color: #ff9e80 !important
	}

	.deep-orange.accent-2 {
		background-color: #ff6e40 !important
	}

	.deep-orange.accent-3 {
		background-color: #ff3d00 !important
	}

	.deep-orange.accent-4 {
		background-color: #dd2c00 !important
	}

	.brown.lighten-5 {
		background-color: #efebe9 !important
	}

	.brown.lighten-4 {
		background-color: #d7ccc8 !important
	}

	.brown.lighten-3 {
		background-color: #bcaaa4 !important
	}

	.brown.lighten-2 {
		background-color: #a1887f !important
	}

	.brown.lighten-1 {
		background-color: #8d6e63 !important
	}

	.brown {
		background-color: #795548 !important
	}

	.brown-text {
		color: #795548 !important
	}

	.rgba-brown-slight,
	.rgba-brown-slight:after {
		background-color: rgba(121, 85, 72, 0.1)
	}

	.rgba-brown-light,
	.rgba-brown-light:after {
		background-color: rgba(121, 85, 72, 0.3)
	}

	.rgba-brown-strong,
	.rgba-brown-strong:after {
		background-color: rgba(121, 85, 72, 0.7)
	}

	.brown.darken-1 {
		background-color: #6d4c41 !important
	}

	.brown.darken-2 {
		background-color: #5d4037 !important
	}

	.brown.darken-3 {
		background-color: #4e342e !important
	}

	.brown.darken-4 {
		background-color: #3e2723 !important
	}

	.blue-grey.lighten-5 {
		background-color: #eceff1 !important
	}

	.blue-grey.lighten-4 {
		background-color: #cfd8dc !important
	}

	.blue-grey.lighten-3 {
		background-color: #b0bec5 !important
	}

	.blue-grey.lighten-2 {
		background-color: #90a4ae !important
	}

	.blue-grey.lighten-1 {
		background-color: #78909c !important
	}

	.blue-grey {
		background-color: #607d8b !important
	}

	.blue-grey-text {
		color: #607d8b !important
	}

	.rgba-blue-grey-slight,
	.rgba-blue-grey-slight:after {
		background-color: rgba(96, 125, 139, 0.1)
	}

	.rgba-blue-grey-light,
	.rgba-blue-grey-light:after {
		background-color: rgba(96, 125, 139, 0.3)
	}

	.rgba-blue-grey-strong,
	.rgba-blue-grey-strong:after {
		background-color: rgba(96, 125, 139, 0.7)
	}

	.blue-grey.darken-1 {
		background-color: #546e7a !important
	}

	.blue-grey.darken-2 {
		background-color: #455a64 !important
	}

	.blue-grey.darken-3 {
		background-color: #37474f !important
	}

	.blue-grey.darken-4 {
		background-color: #263238 !important
	}

	.grey.lighten-5 {
		background-color: #fafafa !important
	}

	.grey.lighten-4 {
		background-color: #f5f5f5 !important
	}

	.grey.lighten-3 {
		background-color: #eee !important
	}

	.grey.lighten-2 {
		background-color: #e0e0e0 !important
	}

	.grey.lighten-1 {
		background-color: #bdbdbd !important
	}

	.grey {
		background-color: #9e9e9e !important
	}

	.grey-text {
		color: #9e9e9e !important
	}

	.rgba-grey-slight,
	.rgba-grey-slight:after {
		background-color: rgba(158, 158, 158, 0.1)
	}

	.rgba-grey-light,
	.rgba-grey-light:after {
		background-color: rgba(158, 158, 158, 0.3)
	}

	.rgba-grey-strong,
	.rgba-grey-strong:after {
		background-color: rgba(158, 158, 158, 0.7)
	}

	.grey.darken-1 {
		background-color: #757575 !important
	}

	.grey.darken-2 {
		background-color: #616161 !important
	}

	.grey.darken-3 {
		background-color: #424242 !important
	}

	.grey.darken-4 {
		background-color: #212121 !important
	}

	.black {
		background-color: #000 !important
	}

	.black-text {
		color: #000 !important
	}

	.rgba-black-slight,
	.rgba-black-slight:after {
		background-color: rgba(0, 0, 0, 0.1)
	}

	.rgba-black-light,
	.rgba-black-light:after {
		background-color: rgba(0, 0, 0, 0.3)
	}

	.rgba-black-strong,
	.rgba-black-strong:after {
		background-color: rgba(0, 0, 0, 0.7)
	}

	.white {
		background-color: #fff !important
	}

	.white-text {
		color: #fff !important
	}

	.rgba-white-slight,
	.rgba-white-slight:after {
		background-color: rgba(255, 255, 255, 0.1)
	}

	.rgba-white-light,
	.rgba-white-light:after {
		background-color: rgba(255, 255, 255, 0.3)
	}

	.rgba-white-strong,
	.rgba-white-strong:after {
		background-color: rgba(255, 255, 255, 0.7)
	}

	.rgba-stylish-slight {
		background-color: rgba(62, 69, 81, 0.1)
	}

	.rgba-stylish-light {
		background-color: rgba(62, 69, 81, 0.3)
	}

	.rgba-stylish-strong {
		background-color: rgba(62, 69, 81, 0.7)
	}

	.primary-color,
	ul.stepper li.active a .circle,
	ul.stepper li.completed a .circle {
		background-color: #4285f4 !important
	}

	.primary-color-dark {
		background-color: #0d47a1 !important
	}

	.secondary-color {
		background-color: #a6c !important
	}

	.secondary-color-dark {
		background-color: #93c !important
	}

	.default-color {
		background-color: #2bbbad !important
	}

	.default-color-dark {
		background-color: #00695c !important
	}

	.info-color {
		background-color: #33b5e5 !important
	}

	.info-color-dark {
		background-color: #09c !important
	}

	.success-color {
		background-color: #00c851 !important
	}

	.success-color-dark {
		background-color: #007e33 !important
	}

	.warning-color {
		background-color: #fb3 !important
	}

	.warning-color-dark {
		background-color: #f80 !important
	}

	.danger-color,
	ul.stepper li.warning a .circle {
		background-color: #ff3547 !important
	}

	.danger-color-dark {
		background-color: #c00 !important
	}

	.elegant-color {
		background-color: #2e2e2e !important
	}

	.elegant-color-dark {
		background-color: #212121 !important
	}

	.stylish-color {
		background-color: #4b515d !important
	}

	.stylish-color-dark {
		background-color: #3e4551 !important
	}

	.unique-color {
		background-color: #3f729b !important
	}

	.unique-color-dark {
		background-color: #1c2331 !important
	}

	.special-color {
		background-color: #37474f !important
	}

	.special-color-dark {
		background-color: #263238 !important
	}

	.purple-gradient {
		background: linear-gradient(40deg, #ff6ec4, #7873f5) !important
	}

	.peach-gradient {
		background: linear-gradient(40deg, #ffd86f, #fc6262) !important
	}

	.aqua-gradient {
		background: linear-gradient(40deg, #2096ff, #05ffa3) !important
	}

	.blue-gradient {
		background: linear-gradient(40deg, #45cafc, #303f9f) !important
	}

	.purple-gradient-rgba {
		background: linear-gradient(40deg, rgba(255, 110, 196, 0.9), rgba(120, 115, 245, 0.9)) !important
	}

	.peach-gradient-rgba {
		background: linear-gradient(40deg, rgba(255, 216, 111, 0.9), rgba(252, 98, 98, 0.9)) !important
	}

	.aqua-gradient-rgba {
		background: linear-gradient(40deg, rgba(32, 150, 255, 0.9), rgba(5, 255, 163, 0.9)) !important
	}

	.blue-gradient-rgba {
		background: linear-gradient(40deg, rgba(69, 202, 252, 0.9), rgba(48, 63, 159, 0.9)) !important
	}

	.dark-grey-text {
		color: #4f4f4f !important
	}

	.dark-grey-text:hover,
	.dark-grey-text:focus {
		color: #4f4f4f !important
	}

	.hoverable {
		-webkit-box-shadow: none;
		box-shadow: none;
		-webkit-transition: all 0.55s ease-in-out;
		transition: all 0.55s ease-in-out
	}

	.hoverable:hover {
		-webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		-webkit-transition: all 0.55s ease-in-out;
		transition: all 0.55s ease-in-out
	}

	.z-depth-0 {
		-webkit-box-shadow: none !important;
		box-shadow: none !important
	}

	.z-depth-1 {
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important
	}

	.z-depth-1-half {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15) !important;
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15) !important
	}

	.z-depth-2 {
		-webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
		box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important
	}

	.z-depth-3 {
		-webkit-box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19) !important;
		box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19) !important
	}

	.z-depth-4 {
		-webkit-box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.22), 0 25px 55px 0 rgba(0, 0, 0, 0.21) !important;
		box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.22), 0 25px 55px 0 rgba(0, 0, 0, 0.21) !important
	}

	.z-depth-5 {
		-webkit-box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22) !important;
		box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22) !important
	}

	.disabled,
	:disabled {
		pointer-events: none !important
	}

	a {
		color: #007bff;
		text-decoration: none;
		cursor: pointer;
		-webkit-transition: all 0.2s ease-in-out;
		transition: all 0.2s ease-in-out
	}

	a:hover {
		color: #0056b3;
		text-decoration: none;
		-webkit-transition: all 0.2s ease-in-out;
		transition: all 0.2s ease-in-out
	}

	a.disabled:hover,
	a:disabled:hover {
		color: #007bff
	}

	a:not([href]):not([tabindex]),
	a:not([href]):not([tabindex]):focus,
	a:not([href]):not([tabindex]):hover {
		color: inherit;
		text-decoration: none
	}

	.divider-new {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-orient: horizontal;
		-webkit-box-direction: normal;
		-ms-flex-direction: row;
		flex-direction: row;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
		margin-top: 2.8rem;
		margin-bottom: 2.8rem
	}

	.divider-new>h1,
	.divider-new h2,
	.divider-new h3,
	.divider-new h4,
	.divider-new h5,
	.divider-new h6 {
		margin-bottom: 0
	}

	.divider-new:before,
	.divider-new:after {
		-webkit-box-flex: 1;
		-ms-flex: 1;
		flex: 1;
		height: 1.5px;
		height: 2px;
		content: "";
		background: #c6c6c6
	}

	.divider-new:before {
		margin: 0 .5rem 0 0
	}

	.divider-new:after {
		margin: 0 0 0 .5rem
	}

	.img-fluid,
	.modal-dialog.cascading-modal.modal-avatar .modal-header,
	.video-fluid {
		max-width: 100%;
		height: auto
	}

	.flex-center {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
		height: 100%
	}

	.flex-center p {
		margin: 0
	}

	.flex-center ul {
		text-align: center
	}

	.flex-center ul li {
		margin-bottom: 1rem
	}

	.flex-center ul li:last-of-type {
		margin-bottom: 0
	}

	.hr-light {
		border-top: 1px solid #fff
	}

	.hr-dark {
		border-top: 1px solid #666
	}

	.w-responsive {
		width: 75%
	}

	@media (max-width: 740px) {
		.w-responsive {
			width: 100%
		}
	}

	.w-header {
		width: 3.2rem
	}

	.collapsible-body {
		display: none
	}

	.jumbotron {
		background-color: #fff;
		border-radius: .125rem;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.bg-primary {
		background-color: #4285f4 !important
	}

	a.bg-primary:hover,
	a.bg-primary:focus,
	button.bg-primary:hover,
	button.bg-primary:focus {
		background-color: #1266f1 !important
	}

	.border-primary {
		border-color: #4285f4 !important
	}

	.bg-danger {
		background-color: #ff3547 !important
	}

	a.bg-danger:hover,
	a.bg-danger:focus,
	button.bg-danger:hover,
	button.bg-danger:focus {
		background-color: #ff0219 !important
	}

	.border-danger {
		border-color: #ff3547 !important
	}

	.bg-warning {
		background-color: #fb3 !important
	}

	a.bg-warning:hover,
	a.bg-warning:focus,
	button.bg-warning:hover,
	button.bg-warning:focus {
		background-color: #fa0 !important
	}

	.border-warning {
		border-color: #fb3 !important
	}

	.bg-success {
		background-color: #00c851 !important
	}

	a.bg-success:hover,
	a.bg-success:focus,
	button.bg-success:hover,
	button.bg-success:focus {
		background-color: #00953c !important
	}

	.border-success {
		border-color: #00c851 !important
	}

	.bg-info {
		background-color: #33b5e5 !important
	}

	a.bg-info:hover,
	a.bg-info:focus,
	button.bg-info:hover,
	button.bg-info:focus {
		background-color: #1a9bcb !important
	}

	.border-info {
		border-color: #33b5e5 !important
	}

	.bg-default {
		background-color: #2bbbad !important
	}

	a.bg-default:hover,
	a.bg-default:focus,
	button.bg-default:hover,
	button.bg-default:focus {
		background-color: #219287 !important
	}

	.border-default {
		border-color: #2bbbad !important
	}

	.bg-secondary {
		background-color: #a6c !important
	}

	a.bg-secondary:hover,
	a.bg-secondary:focus,
	button.bg-secondary:hover,
	button.bg-secondary:focus {
		background-color: #9540bf !important
	}

	.border-secondary {
		border-color: #a6c !important
	}

	.bg-dark {
		background-color: #212121 !important
	}

	a.bg-dark:hover,
	a.bg-dark:focus,
	button.bg-dark:hover,
	button.bg-dark:focus {
		background-color: #080808 !important
	}

	.border-dark {
		border-color: #212121 !important
	}

	.bg-light {
		background-color: #e0e0e0 !important
	}

	a.bg-light:hover,
	a.bg-light:focus,
	button.bg-light:hover,
	button.bg-light:focus {
		background-color: #c7c7c7 !important
	}

	.border-light {
		border-color: #e0e0e0 !important
	}

	.card-img-100 {
		width: 100px;
		height: 100px
	}

	.card-img-64 {
		width: 64px;
		height: 64px
	}

	.mml-1 {
		margin-left: -0.25rem !important
	}

	.flex-1 {
		-webkit-box-flex: 1;
		-ms-flex: 1;
		flex: 1
	}

	/*body {*/
	/*	font-family: "Roboto", sans-serif;*/
	/*	font-weight: 300*/
	/*}*/

	/*h1,*/
	/*h2,*/
	/*h3,*/
	/*h4,*/
	/*h5,*/
	/*h6 {*/
	/*	font-weight: 300*/
	/*}*/

	.blockquote {
		padding: .5rem 1rem;
		border-left: .25rem solid #eceeef
	}

	.blockquote.text-right {
		border-right: .25rem solid #eceeef;
		border-left: none
	}

	.blockquote .bq-title {
		margin-bottom: 0;
		font-size: 1.5rem;
		font-weight: 400
	}

	.blockquote p {
		padding: 1rem 0;
		font-size: 1.1rem
	}

	.bq-primary {
		border-left: 3px solid #4285f4 !important
	}

	.bq-primary .bq-title {
		color: #4285f4 !important
	}

	.bq-danger {
		border-left: 3px solid #ff3547 !important
	}

	.bq-danger .bq-title {
		color: #ff3547 !important
	}

	.bq-warning {
		border-left: 3px solid #fb3 !important
	}

	.bq-warning .bq-title {
		color: #fb3 !important
	}

	.bq-success {
		border-left: 3px solid #00c851 !important
	}

	.bq-success .bq-title {
		color: #00c851 !important
	}

	.bq-info {
		border-left: 3px solid #33b5e5 !important
	}

	.bq-info .bq-title {
		color: #33b5e5 !important
	}

	.h1-responsive {
		font-size: 150%
	}

	.h2-responsive {
		font-size: 145%
	}

	.h3-responsive {
		font-size: 135%
	}

	.h4-responsive {
		font-size: 135%
	}

	.h5-responsive {
		font-size: 135%
	}

	@media (min-width: 576px) {
		.h1-responsive {
			font-size: 170%
		}

		.h2-responsive {
			font-size: 140%
		}

		.h3-responsive {
			font-size: 125%
		}

		.h4-responsive {
			font-size: 125%
		}

		.h5-responsive {
			font-size: 125%
		}
	}

	@media (min-width: 768px) {
		.h1-responsive {
			font-size: 200%
		}

		.h2-responsive {
			font-size: 170%
		}

		.h3-responsive {
			font-size: 140%
		}

		.h4-responsive {
			font-size: 125%
		}

		.h5-responsive {
			font-size: 125%
		}
	}

	@media (min-width: 992px) {
		.h1-responsive {
			font-size: 200%
		}

		.h2-responsive {
			font-size: 170%
		}

		.h3-responsive {
			font-size: 140%
		}

		.h4-responsive {
			font-size: 125%
		}

		.h5-responsive {
			font-size: 125%
		}
	}

	@media (min-width: 1200px) {
		.h1-responsive {
			font-size: 250%
		}

		.h2-responsive {
			font-size: 200%
		}

		.h3-responsive {
			font-size: 170%
		}

		.h4-responsive {
			font-size: 140%
		}

		.h5-responsive {
			font-size: 125%
		}
	}

	.text-primary {
		color: #4285f4 !important
	}

	a.text-primary:hover,
	a.text-primary:focus {
		color: #1266f1 !important
	}

	.text-danger {
		color: #ff3547 !important
	}

	a.text-danger:hover,
	a.text-danger:focus {
		color: #ff0219 !important
	}

	.text-warning {
		color: #fb3 !important
	}

	a.text-warning:hover,
	a.text-warning:focus {
		color: #fa0 !important
	}

	.text-success {
		color: #00c851 !important
	}

	a.text-success:hover,
	a.text-success:focus {
		color: #00953c !important
	}

	.text-info {
		color: #33b5e5 !important
	}

	a.text-info:hover,
	a.text-info:focus {
		color: #1a9bcb !important
	}

	.text-default {
		color: #2bbbad !important
	}

	a.text-default:hover,
	a.text-default:focus {
		color: #219287 !important
	}

	.text-secondary {
		color: #a6c !important
	}

	a.text-secondary:hover,
	a.text-secondary:focus {
		color: #9540bf !important
	}

	.text-dark {
		color: #212121 !important
	}

	a.text-dark:hover,
	a.text-dark:focus {
		color: #080808 !important
	}

	.text-light {
		color: #e0e0e0 !important
	}

	a.text-light:hover,
	a.text-light:focus {
		color: #c7c7c7 !important
	}

	.font-small {
		font-size: .9rem
	}

	strong {
		font-weight: 500
	}

	.view {
		position: relative;
		overflow: hidden;
		cursor: default
	}

	.view .mask {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 100%;
		overflow: hidden;
		background-attachment: fixed
	}

	.view img,
	.view video {
		position: relative;
		display: block
	}

	.view video.video-intro {
		top: 50%;
		left: 50%;
		z-index: -100;
		width: auto;
		min-width: 100%;
		height: auto;
		min-height: 100%;
		-webkit-transition: 1s opacity;
		transition: 1s opacity;
		-webkit-transform: translateX(-50%) translateY(-50%);
		transform: translateX(-50%) translateY(-50%)
	}

	.overlay .mask {
		opacity: 0;
		-webkit-transition: all 0.4s ease-in-out;
		transition: all 0.4s ease-in-out
	}

	.overlay .mask:hover {
		opacity: 1
	}

	.zoom img,
	.zoom video {
		-webkit-transition: all 0.2s linear;
		transition: all 0.2s linear
	}

	.zoom:hover img,
	.zoom:hover video {
		-webkit-transform: scale(1.1);
		transform: scale(1.1)
	}

	.pattern-1 {
		background: url(../img/overlays/01.png);
		background-attachment: fixed
	}

	.pattern-2 {
		background: url(../img/overlays/02.png);
		background-attachment: fixed
	}

	.pattern-3 {
		background: url(../img/overlays/03.png);
		background-attachment: fixed
	}

	.pattern-4 {
		background: url(../img/overlays/04.png);
		background-attachment: fixed
	}

	.pattern-5 {
		background: url(../img/overlays/05.png);
		background-attachment: fixed
	}

	.pattern-6 {
		background: url(../img/overlays/06.png);
		background-attachment: fixed
	}

	.pattern-7 {
		background: url(../img/overlays/07.png);
		background-attachment: fixed
	}

	.pattern-8 {
		background: url(../img/overlays/08.png);
		background-attachment: fixed
	}

	.pattern-9 {
		background: url(../img/overlays/09.png);
		background-attachment: fixed
	}

	/*!
 * Waves v0.7.6
 * http://fian.my.id/Waves
 *
 * Copyright 2014-2018 Alfiana E. Sibuea and other contributors
 * Released under the MIT license
 * https://github.com/fians/Waves/blob/master/LICENSE */
	.waves-effect {
		position: relative;
		overflow: hidden;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		-webkit-tap-highlight-color: transparent
	}

	.waves-effect .waves-ripple {
		position: absolute;
		width: 100px;
		height: 100px;
		margin-top: -50px;
		margin-left: -50px;
		pointer-events: none;
		background: rgba(0, 0, 0, 0.2);
		background: radial-gradient(rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
		border-radius: 50%;
		opacity: 0;
		-webkit-transition-property: -webkit-transform, opacity;
		-webkit-transition-property: opacity, -webkit-transform;
		transition-property: opacity, -webkit-transform;
		transition-property: transform, opacity;
		transition-property: transform, opacity, -webkit-transform;
		-webkit-transition: all 0.5s ease-out;
		transition: all 0.5s ease-out;
		-webkit-transform: scale(0) translate(0, 0);
		transform: scale(0) translate(0, 0)
	}

	.waves-effect.waves-light .waves-ripple {
		background: rgba(255, 255, 255, 0.4);
		background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
	}

	.waves-effect.waves-classic .waves-ripple {
		background: rgba(0, 0, 0, 0.2)
	}

	.waves-effect.waves-classic.waves-light .waves-ripple {
		background: rgba(255, 255, 255, 0.4)
	}

	.waves-notransition {
		-webkit-transition: none !important;
		transition: none !important
	}

	.waves-button,
	.waves-circle {
		-webkit-transform: translateZ(0);
		transform: translateZ(0);
		-webkit-mask-image: -webkit-radial-gradient(circle, #fff 100%, #000 100%)
	}

	.waves-button,
	.waves-button:hover,
	.waves-button:visited,
	.waves-button-input {
		z-index: 1;
		font-size: 1em;
		line-height: 1em;
		color: inherit;
		text-align: center;
		text-decoration: none;
		white-space: nowrap;
		vertical-align: middle;
		cursor: pointer;
		background-color: rgba(0, 0, 0, 0);
		border: none;
		outline: none
	}

	.waves-button {
		padding: .85em 1.1em;
		border-radius: .2em
	}

	.waves-button-input {
		padding: .85em 1.1em;
		margin: 0
	}

	.waves-input-wrapper {
		position: relative;
		display: inline-block;
		vertical-align: middle;
		border-radius: .2em
	}

	.waves-input-wrapper.waves-button {
		padding: 0
	}

	.waves-input-wrapper .waves-button-input {
		position: relative;
		top: 0;
		left: 0;
		z-index: 1
	}

	.waves-circle {
		width: 2.5em;
		height: 2.5em;
		line-height: 2.5em;
		text-align: center;
		border-radius: 50%
	}

	.waves-float {
		-webkit-mask-image: none;
		-webkit-box-shadow: 0 1px 1.5px 1px rgba(0, 0, 0, 0.12);
		box-shadow: 0 1px 1.5px 1px rgba(0, 0, 0, 0.12);
		-webkit-transition: all 300ms;
		transition: all 300ms
	}

	.waves-float:active {
		-webkit-box-shadow: 0 8px 20px 1px rgba(0, 0, 0, 0.3);
		box-shadow: 0 8px 20px 1px rgba(0, 0, 0, 0.3)
	}

	.waves-block {
		display: block
	}

	a.waves-effect,
	a.waves-light {
		display: inline-block
	}

	/*!
 * animate.css -http://daneden.me/animate
 * Version - 3.7.0
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2018 Daniel Eden
 */
	.animated {
		-webkit-animation-duration: 1s;
		animation-duration: 1s;
		-webkit-animation-fill-mode: both;
		animation-fill-mode: both
	}

	.animated.infinite {
		-webkit-animation-iteration-count: infinite;
		animation-iteration-count: infinite
	}

	.animated.delay-1s {
		-webkit-animation-delay: 1s;
		animation-delay: 1s
	}

	.animated.delay-2s {
		-webkit-animation-delay: 2s;
		animation-delay: 2s
	}

	.animated.delay-3s {
		-webkit-animation-delay: 3s;
		animation-delay: 3s
	}

	.animated.delay-4s {
		-webkit-animation-delay: 4s;
		animation-delay: 4s
	}

	.animated.delay-5s {
		-webkit-animation-delay: 5s;
		animation-delay: 5s
	}

	.animated.fast {
		-webkit-animation-duration: 800ms;
		animation-duration: 800ms
	}

	.animated.faster {
		-webkit-animation-duration: 500ms;
		animation-duration: 500ms
	}

	.animated.slow {
		-webkit-animation-duration: 2s;
		animation-duration: 2s
	}

	.animated.slower {
		-webkit-animation-duration: 3s;
		animation-duration: 3s
	}

	@media (prefers-reduced-motion) {
		.animated {
			-webkit-transition: none !important;
			transition: none !important;
			-webkit-animation: unset !important;
			animation: unset !important
		}
	}

	@-webkit-keyframes fadeIn {
		from {
			opacity: 0
		}

		to {
			opacity: 1
		}
	}

	@keyframes fadeIn {
		from {
			opacity: 0
		}

		to {
			opacity: 1
		}
	}

	.fadeIn {
		-webkit-animation-name: fadeIn;
		animation-name: fadeIn
	}

	@-webkit-keyframes fadeInDown {
		from {
			opacity: 0;
			-webkit-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes fadeInDown {
		from {
			opacity: 0;
			-webkit-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.fadeInDown {
		-webkit-animation-name: fadeInDown;
		animation-name: fadeInDown
	}

	@-webkit-keyframes fadeInLeft {
		from {
			opacity: 0;
			-webkit-transform: translate3d(-100%, 0, 0);
			transform: translate3d(-100%, 0, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes fadeInLeft {
		from {
			opacity: 0;
			-webkit-transform: translate3d(-100%, 0, 0);
			transform: translate3d(-100%, 0, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.fadeInLeft {
		-webkit-animation-name: fadeInLeft;
		animation-name: fadeInLeft
	}

	@-webkit-keyframes fadeInRight {
		from {
			opacity: 0;
			-webkit-transform: translate3d(100%, 0, 0);
			transform: translate3d(100%, 0, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes fadeInRight {
		from {
			opacity: 0;
			-webkit-transform: translate3d(100%, 0, 0);
			transform: translate3d(100%, 0, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.fadeInRight {
		-webkit-animation-name: fadeInRight;
		animation-name: fadeInRight
	}

	@-webkit-keyframes fadeInUp {
		from {
			opacity: 0;
			-webkit-transform: translate3d(0, 100%, 0);
			transform: translate3d(0, 100%, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes fadeInUp {
		from {
			opacity: 0;
			-webkit-transform: translate3d(0, 100%, 0);
			transform: translate3d(0, 100%, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.fadeInUp {
		-webkit-animation-name: fadeInUp;
		animation-name: fadeInUp
	}

	@-webkit-keyframes fadeOut {
		from {
			opacity: 1
		}

		to {
			opacity: 0
		}
	}

	@keyframes fadeOut {
		from {
			opacity: 1
		}

		to {
			opacity: 0
		}
	}

	.fadeOut {
		-webkit-animation-name: fadeOut;
		animation-name: fadeOut
	}

	@-webkit-keyframes fadeOutDown {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, 100%, 0);
			transform: translate3d(0, 100%, 0)
		}
	}

	@keyframes fadeOutDown {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, 100%, 0);
			transform: translate3d(0, 100%, 0)
		}
	}

	.fadeOutDown {
		-webkit-animation-name: fadeOutDown;
		animation-name: fadeOutDown
	}

	@-webkit-keyframes fadeOutLeft {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(-100%, 0, 0);
			transform: translate3d(-100%, 0, 0)
		}
	}

	@keyframes fadeOutLeft {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(-100%, 0, 0);
			transform: translate3d(-100%, 0, 0)
		}
	}

	.fadeOutLeft {
		-webkit-animation-name: fadeOutLeft;
		animation-name: fadeOutLeft
	}

	@-webkit-keyframes fadeOutRight {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(100%, 0, 0);
			transform: translate3d(100%, 0, 0)
		}
	}

	@keyframes fadeOutRight {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(100%, 0, 0);
			transform: translate3d(100%, 0, 0)
		}
	}

	.fadeOutRight {
		-webkit-animation-name: fadeOutRight;
		animation-name: fadeOutRight
	}

	@-webkit-keyframes fadeOutUp {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0)
		}
	}

	@keyframes fadeOutUp {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0)
		}
	}

	.fadeOutUp {
		-webkit-animation-name: fadeOutUp;
		animation-name: fadeOutUp
	}

	/*!
 * animate.css -http://daneden.me/animate
 * Version - 3.7.0
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2018 Daniel Eden
 */
	@-webkit-keyframes bounce {

		from,
		20%,
		53%,
		80%,
		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		40%,
		43% {
			-webkit-transform: translate3d(0, -30px, 0);
			transform: translate3d(0, -30px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
			animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06)
		}

		70% {
			-webkit-transform: translate3d(0, -15px, 0);
			transform: translate3d(0, -15px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
			animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06)
		}

		90% {
			-webkit-transform: translate3d(0, -4px, 0);
			transform: translate3d(0, -4px, 0)
		}
	}

	@keyframes bounce {

		from,
		20%,
		53%,
		80%,
		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		40%,
		43% {
			-webkit-transform: translate3d(0, -30px, 0);
			transform: translate3d(0, -30px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
			animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06)
		}

		70% {
			-webkit-transform: translate3d(0, -15px, 0);
			transform: translate3d(0, -15px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
			animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06)
		}

		90% {
			-webkit-transform: translate3d(0, -4px, 0);
			transform: translate3d(0, -4px, 0)
		}
	}

	.bounce {
		-webkit-transform-origin: center bottom;
		transform-origin: center bottom;
		-webkit-animation-name: bounce;
		animation-name: bounce
	}

	@-webkit-keyframes flash {

		from,
		50%,
		to {
			opacity: 1
		}

		25%,
		75% {
			opacity: 0
		}
	}

	@keyframes flash {

		from,
		50%,
		to {
			opacity: 1
		}

		25%,
		75% {
			opacity: 0
		}
	}

	.flash {
		-webkit-animation-name: flash;
		animation-name: flash
	}

	@-webkit-keyframes pulse {
		from {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}

		50% {
			-webkit-transform: scale3d(1.05, 1.05, 1.05);
			transform: scale3d(1.05, 1.05, 1.05)
		}

		to {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}
	}

	@keyframes pulse {
		from {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}

		50% {
			-webkit-transform: scale3d(1.05, 1.05, 1.05);
			transform: scale3d(1.05, 1.05, 1.05)
		}

		to {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}
	}

	.pulse {
		-webkit-animation-name: pulse;
		animation-name: pulse
	}

	@-webkit-keyframes rubberBand {
		from {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}

		30% {
			-webkit-transform: scale3d(1.25, 0.75, 1);
			transform: scale3d(1.25, 0.75, 1)
		}

		40% {
			-webkit-transform: scale3d(0.75, 1.25, 1);
			transform: scale3d(0.75, 1.25, 1)
		}

		50% {
			-webkit-transform: scale3d(1.15, 0.85, 1);
			transform: scale3d(1.15, 0.85, 1)
		}

		65% {
			-webkit-transform: scale3d(0.95, 1.05, 1);
			transform: scale3d(0.95, 1.05, 1)
		}

		75% {
			-webkit-transform: scale3d(1.05, 0.95, 1);
			transform: scale3d(1.05, 0.95, 1)
		}

		to {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}
	}

	@keyframes rubberBand {
		from {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}

		30% {
			-webkit-transform: scale3d(1.25, 0.75, 1);
			transform: scale3d(1.25, 0.75, 1)
		}

		40% {
			-webkit-transform: scale3d(0.75, 1.25, 1);
			transform: scale3d(0.75, 1.25, 1)
		}

		50% {
			-webkit-transform: scale3d(1.15, 0.85, 1);
			transform: scale3d(1.15, 0.85, 1)
		}

		65% {
			-webkit-transform: scale3d(0.95, 1.05, 1);
			transform: scale3d(0.95, 1.05, 1)
		}

		75% {
			-webkit-transform: scale3d(1.05, 0.95, 1);
			transform: scale3d(1.05, 0.95, 1)
		}

		to {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}
	}

	.rubberBand {
		-webkit-animation-name: rubberBand;
		animation-name: rubberBand
	}

	@-webkit-keyframes shake {

		from,
		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		10%,
		30%,
		50%,
		70%,
		90% {
			-webkit-transform: translate3d(-10px, 0, 0);
			transform: translate3d(-10px, 0, 0)
		}

		20%,
		40%,
		60%,
		80% {
			-webkit-transform: translate3d(10px, 0, 0);
			transform: translate3d(10px, 0, 0)
		}
	}

	@keyframes shake {

		from,
		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		10%,
		30%,
		50%,
		70%,
		90% {
			-webkit-transform: translate3d(-10px, 0, 0);
			transform: translate3d(-10px, 0, 0)
		}

		20%,
		40%,
		60%,
		80% {
			-webkit-transform: translate3d(10px, 0, 0);
			transform: translate3d(10px, 0, 0)
		}
	}

	.shake {
		-webkit-animation-name: shake;
		animation-name: shake
	}

	@-webkit-keyframes headShake {
		0% {
			-webkit-transform: translateX(0);
			transform: translateX(0)
		}

		6.5% {
			-webkit-transform: translateX(-6px) rotateY(-9deg);
			transform: translateX(-6px) rotateY(-9deg)
		}

		18.5% {
			-webkit-transform: translateX(5px) rotateY(7deg);
			transform: translateX(5px) rotateY(7deg)
		}

		31.5% {
			-webkit-transform: translateX(-3px) rotateY(-5deg);
			transform: translateX(-3px) rotateY(-5deg)
		}

		43.5% {
			-webkit-transform: translateX(2px) rotateY(3deg);
			transform: translateX(2px) rotateY(3deg)
		}

		50% {
			-webkit-transform: translateX(0);
			transform: translateX(0)
		}
	}

	@keyframes headShake {
		0% {
			-webkit-transform: translateX(0);
			transform: translateX(0)
		}

		6.5% {
			-webkit-transform: translateX(-6px) rotateY(-9deg);
			transform: translateX(-6px) rotateY(-9deg)
		}

		18.5% {
			-webkit-transform: translateX(5px) rotateY(7deg);
			transform: translateX(5px) rotateY(7deg)
		}

		31.5% {
			-webkit-transform: translateX(-3px) rotateY(-5deg);
			transform: translateX(-3px) rotateY(-5deg)
		}

		43.5% {
			-webkit-transform: translateX(2px) rotateY(3deg);
			transform: translateX(2px) rotateY(3deg)
		}

		50% {
			-webkit-transform: translateX(0);
			transform: translateX(0)
		}
	}

	.headShake {
		-webkit-animation-name: headShake;
		animation-name: headShake;
		-webkit-animation-timing-function: ease-in-out;
		animation-timing-function: ease-in-out
	}

	@-webkit-keyframes swing {
		20% {
			-webkit-transform: rotate3d(0, 0, 1, 15deg);
			transform: rotate3d(0, 0, 1, 15deg)
		}

		40% {
			-webkit-transform: rotate3d(0, 0, 1, -10deg);
			transform: rotate3d(0, 0, 1, -10deg)
		}

		60% {
			-webkit-transform: rotate3d(0, 0, 1, 5deg);
			transform: rotate3d(0, 0, 1, 5deg)
		}

		80% {
			-webkit-transform: rotate3d(0, 0, 1, -5deg);
			transform: rotate3d(0, 0, 1, -5deg)
		}

		to {
			-webkit-transform: rotate3d(0, 0, 1, 0deg);
			transform: rotate3d(0, 0, 1, 0deg)
		}
	}

	@keyframes swing {
		20% {
			-webkit-transform: rotate3d(0, 0, 1, 15deg);
			transform: rotate3d(0, 0, 1, 15deg)
		}

		40% {
			-webkit-transform: rotate3d(0, 0, 1, -10deg);
			transform: rotate3d(0, 0, 1, -10deg)
		}

		60% {
			-webkit-transform: rotate3d(0, 0, 1, 5deg);
			transform: rotate3d(0, 0, 1, 5deg)
		}

		80% {
			-webkit-transform: rotate3d(0, 0, 1, -5deg);
			transform: rotate3d(0, 0, 1, -5deg)
		}

		to {
			-webkit-transform: rotate3d(0, 0, 1, 0deg);
			transform: rotate3d(0, 0, 1, 0deg)
		}
	}

	.swing {
		-webkit-transform-origin: top center;
		transform-origin: top center;
		-webkit-animation-name: swing;
		animation-name: swing
	}

	@-webkit-keyframes tada {
		from {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}

		10%,
		20% {
			-webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
			transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg)
		}

		30%,
		50%,
		70%,
		90% {
			-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
			transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
		}

		40%,
		60%,
		80% {
			-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
			transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
		}

		to {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}
	}

	@keyframes tada {
		from {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}

		10%,
		20% {
			-webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
			transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg)
		}

		30%,
		50%,
		70%,
		90% {
			-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
			transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
		}

		40%,
		60%,
		80% {
			-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
			transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
		}

		to {
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}
	}

	.tada {
		-webkit-animation-name: tada;
		animation-name: tada
	}

	@-webkit-keyframes wobble {
		from {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		15% {
			-webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
			transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
		}

		30% {
			-webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
			transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
		}

		45% {
			-webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
			transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
		}

		60% {
			-webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
			transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
		}

		75% {
			-webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
			transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes wobble {
		from {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		15% {
			-webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
			transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
		}

		30% {
			-webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
			transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
		}

		45% {
			-webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
			transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
		}

		60% {
			-webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
			transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
		}

		75% {
			-webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
			transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.wobble {
		-webkit-animation-name: wobble;
		animation-name: wobble
	}

	@-webkit-keyframes jello {

		from,
		11.1%,
		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		22.2% {
			-webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
			transform: skewX(-12.5deg) skewY(-12.5deg)
		}

		33.3% {
			-webkit-transform: skewX(6.25deg) skewY(6.25deg);
			transform: skewX(6.25deg) skewY(6.25deg)
		}

		44.4% {
			-webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
			transform: skewX(-3.125deg) skewY(-3.125deg)
		}

		55.5% {
			-webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
			transform: skewX(1.5625deg) skewY(1.5625deg)
		}

		66.6% {
			-webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
			transform: skewX(-0.78125deg) skewY(-0.78125deg)
		}

		77.7% {
			-webkit-transform: skewX(0.39063deg) skewY(0.39063deg);
			transform: skewX(0.39063deg) skewY(0.39063deg)
		}

		88.8% {
			-webkit-transform: skewX(-0.19531deg) skewY(-0.19531deg);
			transform: skewX(-0.19531deg) skewY(-0.19531deg)
		}
	}

	@keyframes jello {

		from,
		11.1%,
		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		22.2% {
			-webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
			transform: skewX(-12.5deg) skewY(-12.5deg)
		}

		33.3% {
			-webkit-transform: skewX(6.25deg) skewY(6.25deg);
			transform: skewX(6.25deg) skewY(6.25deg)
		}

		44.4% {
			-webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
			transform: skewX(-3.125deg) skewY(-3.125deg)
		}

		55.5% {
			-webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
			transform: skewX(1.5625deg) skewY(1.5625deg)
		}

		66.6% {
			-webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
			transform: skewX(-0.78125deg) skewY(-0.78125deg)
		}

		77.7% {
			-webkit-transform: skewX(0.39063deg) skewY(0.39063deg);
			transform: skewX(0.39063deg) skewY(0.39063deg)
		}

		88.8% {
			-webkit-transform: skewX(-0.19531deg) skewY(-0.19531deg);
			transform: skewX(-0.19531deg) skewY(-0.19531deg)
		}
	}

	.jello {
		-webkit-transform-origin: center;
		transform-origin: center;
		-webkit-animation-name: jello;
		animation-name: jello
	}

	@-webkit-keyframes heartBeat {
		0% {
			-webkit-transform: scale(1);
			transform: scale(1)
		}

		14% {
			-webkit-transform: scale(1.3);
			transform: scale(1.3)
		}

		28% {
			-webkit-transform: scale(1);
			transform: scale(1)
		}

		42% {
			-webkit-transform: scale(1.3);
			transform: scale(1.3)
		}

		70% {
			-webkit-transform: scale(1);
			transform: scale(1)
		}
	}

	@keyframes heartBeat {
		0% {
			-webkit-transform: scale(1);
			transform: scale(1)
		}

		14% {
			-webkit-transform: scale(1.3);
			transform: scale(1.3)
		}

		28% {
			-webkit-transform: scale(1);
			transform: scale(1)
		}

		42% {
			-webkit-transform: scale(1.3);
			transform: scale(1.3)
		}

		70% {
			-webkit-transform: scale(1);
			transform: scale(1)
		}
	}

	.heartBeat {
		-webkit-animation-name: heartBeat;
		animation-name: heartBeat;
		-webkit-animation-duration: 1.3s;
		animation-duration: 1.3s;
		-webkit-animation-timing-function: ease-in-out;
		animation-timing-function: ease-in-out
	}

	@-webkit-keyframes bounceIn {

		from,
		20%,
		40%,
		60%,
		80%,
		to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		0% {
			opacity: 0;
			-webkit-transform: scale3d(0.3, 0.3, 0.3);
			transform: scale3d(0.3, 0.3, 0.3)
		}

		20% {
			-webkit-transform: scale3d(1.1, 1.1, 1.1);
			transform: scale3d(1.1, 1.1, 1.1)
		}

		40% {
			-webkit-transform: scale3d(0.9, 0.9, 0.9);
			transform: scale3d(0.9, 0.9, 0.9)
		}

		60% {
			opacity: 1;
			-webkit-transform: scale3d(1.03, 1.03, 1.03);
			transform: scale3d(1.03, 1.03, 1.03)
		}

		80% {
			-webkit-transform: scale3d(0.97, 0.97, 0.97);
			transform: scale3d(0.97, 0.97, 0.97)
		}

		to {
			opacity: 1;
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}
	}

	@keyframes bounceIn {

		from,
		20%,
		40%,
		60%,
		80%,
		to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		0% {
			opacity: 0;
			-webkit-transform: scale3d(0.3, 0.3, 0.3);
			transform: scale3d(0.3, 0.3, 0.3)
		}

		20% {
			-webkit-transform: scale3d(1.1, 1.1, 1.1);
			transform: scale3d(1.1, 1.1, 1.1)
		}

		40% {
			-webkit-transform: scale3d(0.9, 0.9, 0.9);
			transform: scale3d(0.9, 0.9, 0.9)
		}

		60% {
			opacity: 1;
			-webkit-transform: scale3d(1.03, 1.03, 1.03);
			transform: scale3d(1.03, 1.03, 1.03)
		}

		80% {
			-webkit-transform: scale3d(0.97, 0.97, 0.97);
			transform: scale3d(0.97, 0.97, 0.97)
		}

		to {
			opacity: 1;
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1)
		}
	}

	.bounceIn {
		-webkit-animation-name: bounceIn;
		animation-name: bounceIn;
		-webkit-animation-duration: .75s;
		animation-duration: .75s
	}

	@-webkit-keyframes bounceInDown {

		from,
		60%,
		75%,
		90%,
		to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		0% {
			opacity: 0;
			-webkit-transform: translate3d(0, -3000px, 0);
			transform: translate3d(0, -3000px, 0)
		}

		60% {
			opacity: 1;
			-webkit-transform: translate3d(0, 25px, 0);
			transform: translate3d(0, 25px, 0)
		}

		75% {
			-webkit-transform: translate3d(0, -10px, 0);
			transform: translate3d(0, -10px, 0)
		}

		90% {
			-webkit-transform: translate3d(0, 5px, 0);
			transform: translate3d(0, 5px, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes bounceInDown {

		from,
		60%,
		75%,
		90%,
		to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		0% {
			opacity: 0;
			-webkit-transform: translate3d(0, -3000px, 0);
			transform: translate3d(0, -3000px, 0)
		}

		60% {
			opacity: 1;
			-webkit-transform: translate3d(0, 25px, 0);
			transform: translate3d(0, 25px, 0)
		}

		75% {
			-webkit-transform: translate3d(0, -10px, 0);
			transform: translate3d(0, -10px, 0)
		}

		90% {
			-webkit-transform: translate3d(0, 5px, 0);
			transform: translate3d(0, 5px, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.bounceInDown {
		-webkit-animation-name: bounceInDown;
		animation-name: bounceInDown
	}

	@-webkit-keyframes bounceInLeft {

		from,
		60%,
		75%,
		90%,
		to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		0% {
			opacity: 0;
			-webkit-transform: translate3d(-3000px, 0, 0);
			transform: translate3d(-3000px, 0, 0)
		}

		60% {
			opacity: 1;
			-webkit-transform: translate3d(25px, 0, 0);
			transform: translate3d(25px, 0, 0)
		}

		75% {
			-webkit-transform: translate3d(-10px, 0, 0);
			transform: translate3d(-10px, 0, 0)
		}

		90% {
			-webkit-transform: translate3d(5px, 0, 0);
			transform: translate3d(5px, 0, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes bounceInLeft {

		from,
		60%,
		75%,
		90%,
		to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		0% {
			opacity: 0;
			-webkit-transform: translate3d(-3000px, 0, 0);
			transform: translate3d(-3000px, 0, 0)
		}

		60% {
			opacity: 1;
			-webkit-transform: translate3d(25px, 0, 0);
			transform: translate3d(25px, 0, 0)
		}

		75% {
			-webkit-transform: translate3d(-10px, 0, 0);
			transform: translate3d(-10px, 0, 0)
		}

		90% {
			-webkit-transform: translate3d(5px, 0, 0);
			transform: translate3d(5px, 0, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.bounceInLeft {
		-webkit-animation-name: bounceInLeft;
		animation-name: bounceInLeft
	}

	@-webkit-keyframes bounceInRight {

		from,
		60%,
		75%,
		90%,
		to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		from {
			opacity: 0;
			-webkit-transform: translate3d(3000px, 0, 0);
			transform: translate3d(3000px, 0, 0)
		}

		60% {
			opacity: 1;
			-webkit-transform: translate3d(-25px, 0, 0);
			transform: translate3d(-25px, 0, 0)
		}

		75% {
			-webkit-transform: translate3d(10px, 0, 0);
			transform: translate3d(10px, 0, 0)
		}

		90% {
			-webkit-transform: translate3d(-5px, 0, 0);
			transform: translate3d(-5px, 0, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes bounceInRight {

		from,
		60%,
		75%,
		90%,
		to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		from {
			opacity: 0;
			-webkit-transform: translate3d(3000px, 0, 0);
			transform: translate3d(3000px, 0, 0)
		}

		60% {
			opacity: 1;
			-webkit-transform: translate3d(-25px, 0, 0);
			transform: translate3d(-25px, 0, 0)
		}

		75% {
			-webkit-transform: translate3d(10px, 0, 0);
			transform: translate3d(10px, 0, 0)
		}

		90% {
			-webkit-transform: translate3d(-5px, 0, 0);
			transform: translate3d(-5px, 0, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.bounceInRight {
		-webkit-animation-name: bounceInRight;
		animation-name: bounceInRight
	}

	@-webkit-keyframes bounceInUp {

		from,
		60%,
		75%,
		90%,
		to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		from {
			opacity: 0;
			-webkit-transform: translate3d(0, 3000px, 0);
			transform: translate3d(0, 3000px, 0)
		}

		60% {
			opacity: 1;
			-webkit-transform: translate3d(0, -20px, 0);
			transform: translate3d(0, -20px, 0)
		}

		75% {
			-webkit-transform: translate3d(0, 10px, 0);
			transform: translate3d(0, 10px, 0)
		}

		90% {
			-webkit-transform: translate3d(0, -5px, 0);
			transform: translate3d(0, -5px, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes bounceInUp {

		from,
		60%,
		75%,
		90%,
		to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
		}

		from {
			opacity: 0;
			-webkit-transform: translate3d(0, 3000px, 0);
			transform: translate3d(0, 3000px, 0)
		}

		60% {
			opacity: 1;
			-webkit-transform: translate3d(0, -20px, 0);
			transform: translate3d(0, -20px, 0)
		}

		75% {
			-webkit-transform: translate3d(0, 10px, 0);
			transform: translate3d(0, 10px, 0)
		}

		90% {
			-webkit-transform: translate3d(0, -5px, 0);
			transform: translate3d(0, -5px, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.bounceInUp {
		-webkit-animation-name: bounceInUp;
		animation-name: bounceInUp
	}

	@-webkit-keyframes bounceOut {
		20% {
			-webkit-transform: scale3d(0.9, 0.9, 0.9);
			transform: scale3d(0.9, 0.9, 0.9)
		}

		50%,
		55% {
			opacity: 1;
			-webkit-transform: scale3d(1.1, 1.1, 1.1);
			transform: scale3d(1.1, 1.1, 1.1)
		}

		to {
			opacity: 0;
			-webkit-transform: scale3d(0.3, 0.3, 0.3);
			transform: scale3d(0.3, 0.3, 0.3)
		}
	}

	@keyframes bounceOut {
		20% {
			-webkit-transform: scale3d(0.9, 0.9, 0.9);
			transform: scale3d(0.9, 0.9, 0.9)
		}

		50%,
		55% {
			opacity: 1;
			-webkit-transform: scale3d(1.1, 1.1, 1.1);
			transform: scale3d(1.1, 1.1, 1.1)
		}

		to {
			opacity: 0;
			-webkit-transform: scale3d(0.3, 0.3, 0.3);
			transform: scale3d(0.3, 0.3, 0.3)
		}
	}

	.bounceOut {
		-webkit-animation-name: bounceOut;
		animation-name: bounceOut;
		-webkit-animation-duration: .75s;
		animation-duration: .75s
	}

	@-webkit-keyframes bounceOutDown {
		20% {
			-webkit-transform: translate3d(0, 10px, 0);
			transform: translate3d(0, 10px, 0)
		}

		40%,
		45% {
			opacity: 1;
			-webkit-transform: translate3d(0, -20px, 0);
			transform: translate3d(0, -20px, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, 2000px, 0);
			transform: translate3d(0, 2000px, 0)
		}
	}

	@keyframes bounceOutDown {
		20% {
			-webkit-transform: translate3d(0, 10px, 0);
			transform: translate3d(0, 10px, 0)
		}

		40%,
		45% {
			opacity: 1;
			-webkit-transform: translate3d(0, -20px, 0);
			transform: translate3d(0, -20px, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, 2000px, 0);
			transform: translate3d(0, 2000px, 0)
		}
	}

	.bounceOutDown {
		-webkit-animation-name: bounceOutDown;
		animation-name: bounceOutDown
	}

	@-webkit-keyframes bounceOutLeft {
		20% {
			opacity: 1;
			-webkit-transform: translate3d(20px, 0, 0);
			transform: translate3d(20px, 0, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(-2000px, 0, 0);
			transform: translate3d(-2000px, 0, 0)
		}
	}

	@keyframes bounceOutLeft {
		20% {
			opacity: 1;
			-webkit-transform: translate3d(20px, 0, 0);
			transform: translate3d(20px, 0, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(-2000px, 0, 0);
			transform: translate3d(-2000px, 0, 0)
		}
	}

	.bounceOutLeft {
		-webkit-animation-name: bounceOutLeft;
		animation-name: bounceOutLeft
	}

	@-webkit-keyframes bounceOutRight {
		20% {
			opacity: 1;
			-webkit-transform: translate3d(-20px, 0, 0);
			transform: translate3d(-20px, 0, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(2000px, 0, 0);
			transform: translate3d(2000px, 0, 0)
		}
	}

	@keyframes bounceOutRight {
		20% {
			opacity: 1;
			-webkit-transform: translate3d(-20px, 0, 0);
			transform: translate3d(-20px, 0, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(2000px, 0, 0);
			transform: translate3d(2000px, 0, 0)
		}
	}

	.bounceOutRight {
		-webkit-animation-name: bounceOutRight;
		animation-name: bounceOutRight
	}

	@-webkit-keyframes bounceOutUp {
		20% {
			-webkit-transform: translate3d(0, -10px, 0);
			transform: translate3d(0, -10px, 0)
		}

		40%,
		45% {
			opacity: 1;
			-webkit-transform: translate3d(0, 20px, 0);
			transform: translate3d(0, 20px, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, -2000px, 0);
			transform: translate3d(0, -2000px, 0)
		}
	}

	@keyframes bounceOutUp {
		20% {
			-webkit-transform: translate3d(0, -10px, 0);
			transform: translate3d(0, -10px, 0)
		}

		40%,
		45% {
			opacity: 1;
			-webkit-transform: translate3d(0, 20px, 0);
			transform: translate3d(0, 20px, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, -2000px, 0);
			transform: translate3d(0, -2000px, 0)
		}
	}

	.bounceOutUp {
		-webkit-animation-name: bounceOutUp;
		animation-name: bounceOutUp
	}

	@-webkit-keyframes fadeInDownBig {
		from {
			opacity: 0;
			-webkit-transform: translate3d(0, -2000px, 0);
			transform: translate3d(0, -2000px, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes fadeInDownBig {
		from {
			opacity: 0;
			-webkit-transform: translate3d(0, -2000px, 0);
			transform: translate3d(0, -2000px, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.fadeInDownBig {
		-webkit-animation-name: fadeInDownBig;
		animation-name: fadeInDownBig
	}

	@-webkit-keyframes fadeInLeftBig {
		from {
			opacity: 0;
			-webkit-transform: translate3d(-2000px, 0, 0);
			transform: translate3d(-2000px, 0, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes fadeInLeftBig {
		from {
			opacity: 0;
			-webkit-transform: translate3d(-2000px, 0, 0);
			transform: translate3d(-2000px, 0, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.fadeInLeftBig {
		-webkit-animation-name: fadeInLeftBig;
		animation-name: fadeInLeftBig
	}

	@-webkit-keyframes fadeInRightBig {
		from {
			opacity: 0;
			-webkit-transform: translate3d(2000px, 0, 0);
			transform: translate3d(2000px, 0, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes fadeInRightBig {
		from {
			opacity: 0;
			-webkit-transform: translate3d(2000px, 0, 0);
			transform: translate3d(2000px, 0, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.fadeInRightBig {
		-webkit-animation-name: fadeInRightBig;
		animation-name: fadeInRightBig
	}

	@-webkit-keyframes fadeInUpBig {
		from {
			opacity: 0;
			-webkit-transform: translate3d(0, 2000px, 0);
			transform: translate3d(0, 2000px, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes fadeInUpBig {
		from {
			opacity: 0;
			-webkit-transform: translate3d(0, 2000px, 0);
			transform: translate3d(0, 2000px, 0)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.fadeInUpBig {
		-webkit-animation-name: fadeInUpBig;
		animation-name: fadeInUpBig
	}

	@-webkit-keyframes fadeOutDownBig {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, 2000px, 0);
			transform: translate3d(0, 2000px, 0)
		}
	}

	@keyframes fadeOutDownBig {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, 2000px, 0);
			transform: translate3d(0, 2000px, 0)
		}
	}

	.fadeOutDownBig {
		-webkit-animation-name: fadeOutDownBig;
		animation-name: fadeOutDownBig
	}

	@-webkit-keyframes fadeOutLeftBig {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(-2000px, 0, 0);
			transform: translate3d(-2000px, 0, 0)
		}
	}

	@keyframes fadeOutLeftBig {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(-2000px, 0, 0);
			transform: translate3d(-2000px, 0, 0)
		}
	}

	.fadeOutLeftBig {
		-webkit-animation-name: fadeOutLeftBig;
		animation-name: fadeOutLeftBig
	}

	@-webkit-keyframes fadeOutRightBig {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(2000px, 0, 0);
			transform: translate3d(2000px, 0, 0)
		}
	}

	@keyframes fadeOutRightBig {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(2000px, 0, 0);
			transform: translate3d(2000px, 0, 0)
		}
	}

	.fadeOutRightBig {
		-webkit-animation-name: fadeOutRightBig;
		animation-name: fadeOutRightBig
	}

	@-webkit-keyframes fadeOutUpBig {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, -2000px, 0);
			transform: translate3d(0, -2000px, 0)
		}
	}

	@keyframes fadeOutUpBig {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, -2000px, 0);
			transform: translate3d(0, -2000px, 0)
		}
	}

	.fadeOutUpBig {
		-webkit-animation-name: fadeOutUpBig;
		animation-name: fadeOutUpBig
	}

	@-webkit-keyframes flip {
		from {
			-webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
			transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
			-webkit-animation-timing-function: ease-out;
			animation-timing-function: ease-out
		}

		40% {
			-webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
			transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
			-webkit-animation-timing-function: ease-out;
			animation-timing-function: ease-out
		}

		50% {
			-webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
			transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		80% {
			-webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
			transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		to {
			-webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
			transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}
	}

	@keyframes flip {
		from {
			-webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
			transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
			-webkit-animation-timing-function: ease-out;
			animation-timing-function: ease-out
		}

		40% {
			-webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
			transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
			-webkit-animation-timing-function: ease-out;
			animation-timing-function: ease-out
		}

		50% {
			-webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
			transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		80% {
			-webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
			transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		to {
			-webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
			transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}
	}

	.flip {
		-webkit-backface-visibility: visible;
		backface-visibility: visible;
		-webkit-animation-name: flip;
		animation-name: flip
	}

	@-webkit-keyframes flipInX {
		from {
			opacity: 0;
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
			transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		40% {
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
			transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		60% {
			opacity: 1;
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
			transform: perspective(400px) rotate3d(1, 0, 0, 10deg)
		}

		80% {
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
			transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
		}

		to {
			-webkit-transform: perspective(400px);
			transform: perspective(400px)
		}
	}

	@keyframes flipInX {
		from {
			opacity: 0;
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
			transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		40% {
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
			transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		60% {
			opacity: 1;
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
			transform: perspective(400px) rotate3d(1, 0, 0, 10deg)
		}

		80% {
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
			transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
		}

		to {
			-webkit-transform: perspective(400px);
			transform: perspective(400px)
		}
	}

	.flipInX {
		-webkit-backface-visibility: visible;
		backface-visibility: visible;
		-webkit-animation-name: flipInX;
		animation-name: flipInX
	}

	@-webkit-keyframes flipInY {
		from {
			opacity: 0;
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
			transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		40% {
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
			transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		60% {
			opacity: 1;
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
			transform: perspective(400px) rotate3d(0, 1, 0, 10deg)
		}

		80% {
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
			transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
		}

		to {
			-webkit-transform: perspective(400px);
			transform: perspective(400px)
		}
	}

	@keyframes flipInY {
		from {
			opacity: 0;
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
			transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		40% {
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
			transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		60% {
			opacity: 1;
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
			transform: perspective(400px) rotate3d(0, 1, 0, 10deg)
		}

		80% {
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
			transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
		}

		to {
			-webkit-transform: perspective(400px);
			transform: perspective(400px)
		}
	}

	.flipInY {
		-webkit-backface-visibility: visible;
		backface-visibility: visible;
		-webkit-animation-name: flipInY;
		animation-name: flipInY
	}

	@-webkit-keyframes flipOutX {
		from {
			-webkit-transform: perspective(400px);
			transform: perspective(400px)
		}

		30% {
			opacity: 1;
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
			transform: perspective(400px) rotate3d(1, 0, 0, -20deg)
		}

		to {
			opacity: 0;
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
			transform: perspective(400px) rotate3d(1, 0, 0, 90deg)
		}
	}

	@keyframes flipOutX {
		from {
			-webkit-transform: perspective(400px);
			transform: perspective(400px)
		}

		30% {
			opacity: 1;
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
			transform: perspective(400px) rotate3d(1, 0, 0, -20deg)
		}

		to {
			opacity: 0;
			-webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
			transform: perspective(400px) rotate3d(1, 0, 0, 90deg)
		}
	}

	.flipOutX {
		-webkit-animation-name: flipOutX;
		animation-name: flipOutX;
		-webkit-animation-duration: .75s;
		animation-duration: .75s;
		-webkit-backface-visibility: visible;
		backface-visibility: visible
	}

	@-webkit-keyframes flipOutY {
		from {
			-webkit-transform: perspective(400px);
			transform: perspective(400px)
		}

		30% {
			opacity: 1;
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
			transform: perspective(400px) rotate3d(0, 1, 0, -15deg)
		}

		to {
			opacity: 0;
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
			transform: perspective(400px) rotate3d(0, 1, 0, 90deg)
		}
	}

	@keyframes flipOutY {
		from {
			-webkit-transform: perspective(400px);
			transform: perspective(400px)
		}

		30% {
			opacity: 1;
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
			transform: perspective(400px) rotate3d(0, 1, 0, -15deg)
		}

		to {
			opacity: 0;
			-webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
			transform: perspective(400px) rotate3d(0, 1, 0, 90deg)
		}
	}

	.flipOutY {
		-webkit-animation-name: flipOutY;
		animation-name: flipOutY;
		-webkit-animation-duration: .75s;
		animation-duration: .75s;
		-webkit-backface-visibility: visible;
		backface-visibility: visible
	}

	@-webkit-keyframes lightSpeedIn {
		from {
			opacity: 0;
			-webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
			transform: translate3d(100%, 0, 0) skewX(-30deg)
		}

		60% {
			opacity: 1;
			-webkit-transform: skewX(20deg);
			transform: skewX(20deg)
		}

		80% {
			-webkit-transform: skewX(-5deg);
			transform: skewX(-5deg)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes lightSpeedIn {
		from {
			opacity: 0;
			-webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
			transform: translate3d(100%, 0, 0) skewX(-30deg)
		}

		60% {
			opacity: 1;
			-webkit-transform: skewX(20deg);
			transform: skewX(20deg)
		}

		80% {
			-webkit-transform: skewX(-5deg);
			transform: skewX(-5deg)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.lightSpeedIn {
		-webkit-animation-name: lightSpeedIn;
		animation-name: lightSpeedIn;
		-webkit-animation-timing-function: ease-out;
		animation-timing-function: ease-out
	}

	@-webkit-keyframes lightSpeedOut {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
			transform: translate3d(100%, 0, 0) skewX(30deg)
		}
	}

	@keyframes lightSpeedOut {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
			transform: translate3d(100%, 0, 0) skewX(30deg)
		}
	}

	.lightSpeedOut {
		-webkit-animation-name: lightSpeedOut;
		animation-name: lightSpeedOut;
		-webkit-animation-timing-function: ease-in;
		animation-timing-function: ease-in
	}

	@-webkit-keyframes rotateIn {
		from {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, -200deg);
			transform: rotate3d(0, 0, 1, -200deg);
			-webkit-transform-origin: center;
			transform-origin: center
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-transform-origin: center;
			transform-origin: center
		}
	}

	@keyframes rotateIn {
		from {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, -200deg);
			transform: rotate3d(0, 0, 1, -200deg);
			-webkit-transform-origin: center;
			transform-origin: center
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-transform-origin: center;
			transform-origin: center
		}
	}

	.rotateIn {
		-webkit-animation-name: rotateIn;
		animation-name: rotateIn
	}

	@-webkit-keyframes rotateInDownLeft {
		from {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, -45deg);
			transform: rotate3d(0, 0, 1, -45deg);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}
	}

	@keyframes rotateInDownLeft {
		from {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, -45deg);
			transform: rotate3d(0, 0, 1, -45deg);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}
	}

	.rotateInDownLeft {
		-webkit-animation-name: rotateInDownLeft;
		animation-name: rotateInDownLeft
	}

	@-webkit-keyframes rotateInDownRight {
		from {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, 45deg);
			transform: rotate3d(0, 0, 1, 45deg);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}
	}

	@keyframes rotateInDownRight {
		from {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, 45deg);
			transform: rotate3d(0, 0, 1, 45deg);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}
	}

	.rotateInDownRight {
		-webkit-animation-name: rotateInDownRight;
		animation-name: rotateInDownRight
	}

	@-webkit-keyframes rotateInUpLeft {
		from {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, 45deg);
			transform: rotate3d(0, 0, 1, 45deg);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}
	}

	@keyframes rotateInUpLeft {
		from {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, 45deg);
			transform: rotate3d(0, 0, 1, 45deg);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}
	}

	.rotateInUpLeft {
		-webkit-animation-name: rotateInUpLeft;
		animation-name: rotateInUpLeft
	}

	@-webkit-keyframes rotateInUpRight {
		from {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, -90deg);
			transform: rotate3d(0, 0, 1, -90deg);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}
	}

	@keyframes rotateInUpRight {
		from {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, -90deg);
			transform: rotate3d(0, 0, 1, -90deg);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}
	}

	.rotateInUpRight {
		-webkit-animation-name: rotateInUpRight;
		animation-name: rotateInUpRight
	}

	@-webkit-keyframes rotateOut {
		from {
			opacity: 1;
			-webkit-transform-origin: center;
			transform-origin: center
		}

		to {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, 200deg);
			transform: rotate3d(0, 0, 1, 200deg);
			-webkit-transform-origin: center;
			transform-origin: center
		}
	}

	@keyframes rotateOut {
		from {
			opacity: 1;
			-webkit-transform-origin: center;
			transform-origin: center
		}

		to {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, 200deg);
			transform: rotate3d(0, 0, 1, 200deg);
			-webkit-transform-origin: center;
			transform-origin: center
		}
	}

	.rotateOut {
		-webkit-animation-name: rotateOut;
		animation-name: rotateOut
	}

	@-webkit-keyframes rotateOutDownLeft {
		from {
			opacity: 1;
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}

		to {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, 45deg);
			transform: rotate3d(0, 0, 1, 45deg);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}
	}

	@keyframes rotateOutDownLeft {
		from {
			opacity: 1;
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}

		to {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, 45deg);
			transform: rotate3d(0, 0, 1, 45deg);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}
	}

	.rotateOutDownLeft {
		-webkit-animation-name: rotateOutDownLeft;
		animation-name: rotateOutDownLeft
	}

	@-webkit-keyframes rotateOutDownRight {
		from {
			opacity: 1;
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}

		to {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, -45deg);
			transform: rotate3d(0, 0, 1, -45deg);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}
	}

	@keyframes rotateOutDownRight {
		from {
			opacity: 1;
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}

		to {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, -45deg);
			transform: rotate3d(0, 0, 1, -45deg);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}
	}

	.rotateOutDownRight {
		-webkit-animation-name: rotateOutDownRight;
		animation-name: rotateOutDownRight
	}

	@-webkit-keyframes rotateOutUpLeft {
		from {
			opacity: 1;
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}

		to {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, -45deg);
			transform: rotate3d(0, 0, 1, -45deg);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}
	}

	@keyframes rotateOutUpLeft {
		from {
			opacity: 1;
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}

		to {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, -45deg);
			transform: rotate3d(0, 0, 1, -45deg);
			-webkit-transform-origin: left bottom;
			transform-origin: left bottom
		}
	}

	.rotateOutUpLeft {
		-webkit-animation-name: rotateOutUpLeft;
		animation-name: rotateOutUpLeft
	}

	@-webkit-keyframes rotateOutUpRight {
		from {
			opacity: 1;
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}

		to {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, 90deg);
			transform: rotate3d(0, 0, 1, 90deg);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}
	}

	@keyframes rotateOutUpRight {
		from {
			opacity: 1;
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}

		to {
			opacity: 0;
			-webkit-transform: rotate3d(0, 0, 1, 90deg);
			transform: rotate3d(0, 0, 1, 90deg);
			-webkit-transform-origin: right bottom;
			transform-origin: right bottom
		}
	}

	.rotateOutUpRight {
		-webkit-animation-name: rotateOutUpRight;
		animation-name: rotateOutUpRight
	}

	@-webkit-keyframes hinge {
		0% {
			-webkit-transform-origin: top left;
			transform-origin: top left;
			-webkit-animation-timing-function: ease-in-out;
			animation-timing-function: ease-in-out
		}

		20%,
		60% {
			-webkit-transform: rotate3d(0, 0, 1, 80deg);
			transform: rotate3d(0, 0, 1, 80deg);
			-webkit-transform-origin: top left;
			transform-origin: top left;
			-webkit-animation-timing-function: ease-in-out;
			animation-timing-function: ease-in-out
		}

		40%,
		80% {
			opacity: 1;
			-webkit-transform: rotate3d(0, 0, 1, 60deg);
			transform: rotate3d(0, 0, 1, 60deg);
			-webkit-transform-origin: top left;
			transform-origin: top left;
			-webkit-animation-timing-function: ease-in-out;
			animation-timing-function: ease-in-out
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, 700px, 0);
			transform: translate3d(0, 700px, 0)
		}
	}

	@keyframes hinge {
		0% {
			-webkit-transform-origin: top left;
			transform-origin: top left;
			-webkit-animation-timing-function: ease-in-out;
			animation-timing-function: ease-in-out
		}

		20%,
		60% {
			-webkit-transform: rotate3d(0, 0, 1, 80deg);
			transform: rotate3d(0, 0, 1, 80deg);
			-webkit-transform-origin: top left;
			transform-origin: top left;
			-webkit-animation-timing-function: ease-in-out;
			animation-timing-function: ease-in-out
		}

		40%,
		80% {
			opacity: 1;
			-webkit-transform: rotate3d(0, 0, 1, 60deg);
			transform: rotate3d(0, 0, 1, 60deg);
			-webkit-transform-origin: top left;
			transform-origin: top left;
			-webkit-animation-timing-function: ease-in-out;
			animation-timing-function: ease-in-out
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(0, 700px, 0);
			transform: translate3d(0, 700px, 0)
		}
	}

	.hinge {
		-webkit-animation-name: hinge;
		animation-name: hinge;
		-webkit-animation-duration: 2s;
		animation-duration: 2s
	}

	@-webkit-keyframes jackInTheBox {
		from {
			opacity: 0;
			-webkit-transform: scale(0.1) rotate(30deg);
			transform: scale(0.1) rotate(30deg);
			-webkit-transform-origin: center bottom;
			transform-origin: center bottom
		}

		50% {
			-webkit-transform: rotate(-10deg);
			transform: rotate(-10deg)
		}

		70% {
			-webkit-transform: rotate(3deg);
			transform: rotate(3deg)
		}

		to {
			opacity: 1;
			-webkit-transform: scale(1);
			transform: scale(1)
		}
	}

	@keyframes jackInTheBox {
		from {
			opacity: 0;
			-webkit-transform: scale(0.1) rotate(30deg);
			transform: scale(0.1) rotate(30deg);
			-webkit-transform-origin: center bottom;
			transform-origin: center bottom
		}

		50% {
			-webkit-transform: rotate(-10deg);
			transform: rotate(-10deg)
		}

		70% {
			-webkit-transform: rotate(3deg);
			transform: rotate(3deg)
		}

		to {
			opacity: 1;
			-webkit-transform: scale(1);
			transform: scale(1)
		}
	}

	.jackInTheBox {
		-webkit-animation-name: jackInTheBox;
		animation-name: jackInTheBox
	}

	@-webkit-keyframes rollIn {
		from {
			opacity: 0;
			-webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
			transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes rollIn {
		from {
			opacity: 0;
			-webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
			transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
		}

		to {
			opacity: 1;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.rollIn {
		-webkit-animation-name: rollIn;
		animation-name: rollIn
	}

	@-webkit-keyframes rollOut {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
			transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
		}
	}

	@keyframes rollOut {
		from {
			opacity: 1
		}

		to {
			opacity: 0;
			-webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
			transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
		}
	}

	.rollOut {
		-webkit-animation-name: rollOut;
		animation-name: rollOut
	}

	@-webkit-keyframes zoomIn {
		from {
			opacity: 0;
			-webkit-transform: scale3d(0.3, 0.3, 0.3);
			transform: scale3d(0.3, 0.3, 0.3)
		}

		50% {
			opacity: 1
		}
	}

	@keyframes zoomIn {
		from {
			opacity: 0;
			-webkit-transform: scale3d(0.3, 0.3, 0.3);
			transform: scale3d(0.3, 0.3, 0.3)
		}

		50% {
			opacity: 1
		}
	}

	.zoomIn {
		-webkit-animation-name: zoomIn;
		animation-name: zoomIn
	}

	@-webkit-keyframes zoomInDown {
		from {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		60% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	@keyframes zoomInDown {
		from {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		60% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	.zoomInDown {
		-webkit-animation-name: zoomInDown;
		animation-name: zoomInDown
	}

	@-webkit-keyframes zoomInLeft {
		from {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		60% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	@keyframes zoomInLeft {
		from {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		60% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	.zoomInLeft {
		-webkit-animation-name: zoomInLeft;
		animation-name: zoomInLeft
	}

	@-webkit-keyframes zoomInRight {
		from {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		60% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	@keyframes zoomInRight {
		from {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		60% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	.zoomInRight {
		-webkit-animation-name: zoomInRight;
		animation-name: zoomInRight
	}

	@-webkit-keyframes zoomInUp {
		from {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		60% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	@keyframes zoomInUp {
		from {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		60% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	.zoomInUp {
		-webkit-animation-name: zoomInUp;
		animation-name: zoomInUp
	}

	@-webkit-keyframes zoomOut {
		from {
			opacity: 1
		}

		50% {
			opacity: 0;
			-webkit-transform: scale3d(0.3, 0.3, 0.3);
			transform: scale3d(0.3, 0.3, 0.3)
		}

		to {
			opacity: 0
		}
	}

	@keyframes zoomOut {
		from {
			opacity: 1
		}

		50% {
			opacity: 0;
			-webkit-transform: scale3d(0.3, 0.3, 0.3);
			transform: scale3d(0.3, 0.3, 0.3)
		}

		to {
			opacity: 0
		}
	}

	.zoomOut {
		-webkit-animation-name: zoomOut;
		animation-name: zoomOut
	}

	@-webkit-keyframes zoomOutDown {
		40% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		to {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
			-webkit-transform-origin: center bottom;
			transform-origin: center bottom;
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	@keyframes zoomOutDown {
		40% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		to {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
			-webkit-transform-origin: center bottom;
			transform-origin: center bottom;
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	.zoomOutDown {
		-webkit-animation-name: zoomOutDown;
		animation-name: zoomOutDown
	}

	@-webkit-keyframes zoomOutLeft {
		40% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
			transform: scale(0.1) translate3d(-2000px, 0, 0);
			-webkit-transform-origin: left center;
			transform-origin: left center
		}
	}

	@keyframes zoomOutLeft {
		40% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
			transform: scale(0.1) translate3d(-2000px, 0, 0);
			-webkit-transform-origin: left center;
			transform-origin: left center
		}
	}

	.zoomOutLeft {
		-webkit-animation-name: zoomOutLeft;
		animation-name: zoomOutLeft
	}

	@-webkit-keyframes zoomOutRight {
		40% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
			transform: scale(0.1) translate3d(2000px, 0, 0);
			-webkit-transform-origin: right center;
			transform-origin: right center
		}
	}

	@keyframes zoomOutRight {
		40% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0)
		}

		to {
			opacity: 0;
			-webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
			transform: scale(0.1) translate3d(2000px, 0, 0);
			-webkit-transform-origin: right center;
			transform-origin: right center
		}
	}

	.zoomOutRight {
		-webkit-animation-name: zoomOutRight;
		animation-name: zoomOutRight
	}

	@-webkit-keyframes zoomOutUp {
		40% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		to {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
			-webkit-transform-origin: center bottom;
			transform-origin: center bottom;
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	@keyframes zoomOutUp {
		40% {
			opacity: 1;
			-webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
			transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
			-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
			animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
		}

		to {
			opacity: 0;
			-webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
			transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
			-webkit-transform-origin: center bottom;
			transform-origin: center bottom;
			-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
			animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
		}
	}

	.zoomOutUp {
		-webkit-animation-name: zoomOutUp;
		animation-name: zoomOutUp
	}

	@-webkit-keyframes slideInDown {
		from {
			visibility: visible;
			-webkit-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes slideInDown {
		from {
			visibility: visible;
			-webkit-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.slideInDown {
		-webkit-animation-name: slideInDown;
		animation-name: slideInDown
	}

	@-webkit-keyframes slideInLeft {
		from {
			visibility: visible;
			-webkit-transform: translate3d(-100%, 0, 0);
			transform: translate3d(-100%, 0, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes slideInLeft {
		from {
			visibility: visible;
			-webkit-transform: translate3d(-100%, 0, 0);
			transform: translate3d(-100%, 0, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.slideInLeft {
		-webkit-animation-name: slideInLeft;
		animation-name: slideInLeft
	}

	@-webkit-keyframes slideInRight {
		from {
			visibility: visible;
			-webkit-transform: translate3d(100%, 0, 0);
			transform: translate3d(100%, 0, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes slideInRight {
		from {
			visibility: visible;
			-webkit-transform: translate3d(100%, 0, 0);
			transform: translate3d(100%, 0, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.slideInRight {
		-webkit-animation-name: slideInRight;
		animation-name: slideInRight
	}

	@-webkit-keyframes slideInUp {
		from {
			visibility: visible;
			-webkit-transform: translate3d(0, 100%, 0);
			transform: translate3d(0, 100%, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	@keyframes slideInUp {
		from {
			visibility: visible;
			-webkit-transform: translate3d(0, 100%, 0);
			transform: translate3d(0, 100%, 0)
		}

		to {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.slideInUp {
		-webkit-animation-name: slideInUp;
		animation-name: slideInUp
	}

	@-webkit-keyframes slideOutDown {
		from {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		to {
			visibility: hidden;
			-webkit-transform: translate3d(0, 100%, 0);
			transform: translate3d(0, 100%, 0)
		}
	}

	@keyframes slideOutDown {
		from {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		to {
			visibility: hidden;
			-webkit-transform: translate3d(0, 100%, 0);
			transform: translate3d(0, 100%, 0)
		}
	}

	.slideOutDown {
		-webkit-animation-name: slideOutDown;
		animation-name: slideOutDown
	}

	@-webkit-keyframes slideOutLeft {
		from {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		to {
			visibility: hidden;
			-webkit-transform: translate3d(-100%, 0, 0);
			transform: translate3d(-100%, 0, 0)
		}
	}

	@keyframes slideOutLeft {
		from {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		to {
			visibility: hidden;
			-webkit-transform: translate3d(-100%, 0, 0);
			transform: translate3d(-100%, 0, 0)
		}
	}

	.slideOutLeft {
		-webkit-animation-name: slideOutLeft;
		animation-name: slideOutLeft
	}

	@-webkit-keyframes slideOutRight {
		from {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		to {
			visibility: hidden;
			-webkit-transform: translate3d(100%, 0, 0);
			transform: translate3d(100%, 0, 0)
		}
	}

	@keyframes slideOutRight {
		from {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		to {
			visibility: hidden;
			-webkit-transform: translate3d(100%, 0, 0);
			transform: translate3d(100%, 0, 0)
		}
	}

	.slideOutRight {
		-webkit-animation-name: slideOutRight;
		animation-name: slideOutRight
	}

	@-webkit-keyframes slideOutUp {
		from {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		to {
			visibility: hidden;
			-webkit-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0)
		}
	}

	@keyframes slideOutUp {
		from {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		to {
			visibility: hidden;
			-webkit-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0)
		}
	}

	.slideOutUp {
		-webkit-animation-name: slideOutUp;
		animation-name: slideOutUp
	}

	.btn {
		margin: .375rem;
		color: inherit;
		text-transform: uppercase;
		word-wrap: break-word;
		white-space: normal;
		cursor: pointer;
		border: 0;
		border-radius: .125rem;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		-webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
		transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
		transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
		padding: .84rem 2.14rem;
		font-size: .81rem
	}

	.btn:hover,
	.btn:focus,
	.btn:active {
		outline: 0;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn.btn-block {
		margin: inherit
	}

	.btn .fas.right,
	.btn .fab.right,
	.btn .far.right {
		margin-left: .3rem
	}

	.btn .fas.left,
	.btn .fab.left,
	.btn .far.left {
		margin-right: .3rem
	}

	.btn.btn-lg {
		padding: 1rem 2.4rem;
		font-size: .94rem
	}

	.btn.btn-md {
		padding: .7rem 1.6rem;
		font-size: .7rem
	}

	.btn.btn-sm {
		padding: .5rem 1.6rem;
		font-size: .64rem
	}

	.btn.disabled:hover,
	.btn.disabled:focus,
	.btn.disabled:active,
	.btn:disabled:hover,
	.btn:disabled:focus,
	.btn:disabled:active {
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.btn[class*="btn-outline-"] {
		padding-top: .7rem;
		padding-bottom: .7rem
	}

	.btn[class*="btn-outline-"].btn-lg {
		padding-top: .88rem;
		padding-bottom: .88rem
	}

	.btn[class*="btn-outline-"].btn-md {
		padding-top: .58rem;
		padding-bottom: .58rem
	}

	.btn[class*="btn-outline-"].btn-sm {
		padding-top: .38rem;
		padding-bottom: .38rem
	}

	.btn-link {
		color: #000;
		background-color: transparent;
		-webkit-box-shadow: none;
		box-shadow: none
	}

	.btn-link:hover,
	.btn-link:focus,
	.btn-link:active {
		color: #000;
		background-color: transparent;
		-webkit-box-shadow: none;
		box-shadow: none
	}

	.btn-group>.btn:not(:first-child),
	.btn-group>.btn-group:not(:first-child) {
		margin-left: -.375rem
	}

	.btn-primary {
		color: #fff;
		background-color: #4285f4 !important
	}

	.btn-primary:hover {
		color: #fff;
		background-color: #5a95f5
	}

	.btn-primary:focus,
	.btn-primary.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-primary:focus,
	.btn-primary:active,
	.btn-primary.active {
		background-color: #0b51c5
	}

	.btn-primary.dropdown-toggle {
		background-color: #4285f4 !important
	}

	.btn-primary.dropdown-toggle:hover,
	.btn-primary.dropdown-toggle:focus {
		background-color: #5a95f5 !important
	}

	.btn-primary:not([disabled]):not(.disabled):active,
	.btn-primary:not([disabled]):not(.disabled).active,
	.show>.btn-primary.dropdown-toggle {
		background-color: #0b51c5 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-primary:not([disabled]):not(.disabled):active:focus,
	.btn-primary:not([disabled]):not(.disabled).active:focus,
	.show>.btn-primary.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.primary-ic {
		color: #4285f4 !important
	}

	.primary-ic:hover,
	.primary-ic:focus {
		color: #4285f4
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-primary {
		color: #fff
	}

	.btn-outline-primary {
		color: #4285f4 !important;
		background-color: transparent !important;
		border: 2px solid #4285f4 !important
	}

	.btn-outline-primary:hover,
	.btn-outline-primary:focus,
	.btn-outline-primary:active,
	.btn-outline-primary:active:focus,
	.btn-outline-primary.active {
		color: #4285f4 !important;
		background-color: transparent !important;
		border-color: #4285f4 !important
	}

	.btn-outline-primary:not([disabled]):not(.disabled):active,
	.btn-outline-primary:not([disabled]):not(.disabled).active,
	.show>.btn-outline-primary.dropdown-toggle {
		background-color: transparent !important;
		border-color: #4285f4 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-primary:not([disabled]):not(.disabled):active:focus,
	.btn-outline-primary:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-primary.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-danger {
		color: #fff;
		background-color: #ff3547 !important
	}

	.btn-danger:hover {
		color: #fff;
		background-color: #ff4f5e
	}

	.btn-danger:focus,
	.btn-danger.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-danger:focus,
	.btn-danger:active,
	.btn-danger.active {
		background-color: #ce0012
	}

	.btn-danger.dropdown-toggle {
		background-color: #ff3547 !important
	}

	.btn-danger.dropdown-toggle:hover,
	.btn-danger.dropdown-toggle:focus {
		background-color: #ff4f5e !important
	}

	.btn-danger:not([disabled]):not(.disabled):active,
	.btn-danger:not([disabled]):not(.disabled).active,
	.show>.btn-danger.dropdown-toggle {
		background-color: #ce0012 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-danger:not([disabled]):not(.disabled):active:focus,
	.btn-danger:not([disabled]):not(.disabled).active:focus,
	.show>.btn-danger.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.danger-ic {
		color: #ff3547 !important
	}

	.danger-ic:hover,
	.danger-ic:focus {
		color: #ff3547
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-danger {
		color: #fff
	}

	.btn-outline-danger {
		color: #ff3547 !important;
		background-color: transparent !important;
		border: 2px solid #ff3547 !important
	}

	.btn-outline-danger:hover,
	.btn-outline-danger:focus,
	.btn-outline-danger:active,
	.btn-outline-danger:active:focus,
	.btn-outline-danger.active {
		color: #ff3547 !important;
		background-color: transparent !important;
		border-color: #ff3547 !important
	}

	.btn-outline-danger:not([disabled]):not(.disabled):active,
	.btn-outline-danger:not([disabled]):not(.disabled).active,
	.show>.btn-outline-danger.dropdown-toggle {
		background-color: transparent !important;
		border-color: #ff3547 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-danger:not([disabled]):not(.disabled):active:focus,
	.btn-outline-danger:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-danger.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-warning {
		color: #fff;
		background-color: #fb3 !important
	}

	.btn-warning:hover {
		color: #fff;
		background-color: #ffc44d
	}

	.btn-warning:focus,
	.btn-warning.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-warning:focus,
	.btn-warning:active,
	.btn-warning.active {
		background-color: #c80
	}

	.btn-warning.dropdown-toggle {
		background-color: #fb3 !important
	}

	.btn-warning.dropdown-toggle:hover,
	.btn-warning.dropdown-toggle:focus {
		background-color: #ffc44d !important
	}

	.btn-warning:not([disabled]):not(.disabled):active,
	.btn-warning:not([disabled]):not(.disabled).active,
	.show>.btn-warning.dropdown-toggle {
		background-color: #c80 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-warning:not([disabled]):not(.disabled):active:focus,
	.btn-warning:not([disabled]):not(.disabled).active:focus,
	.show>.btn-warning.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.warning-ic {
		color: #fb3 !important
	}

	.warning-ic:hover,
	.warning-ic:focus {
		color: #fb3
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-warning {
		color: #fff
	}

	.btn-outline-warning {
		color: #fb3 !important;
		background-color: transparent !important;
		border: 2px solid #fb3 !important
	}

	.btn-outline-warning:hover,
	.btn-outline-warning:focus,
	.btn-outline-warning:active,
	.btn-outline-warning:active:focus,
	.btn-outline-warning.active {
		color: #fb3 !important;
		background-color: transparent !important;
		border-color: #fb3 !important
	}

	.btn-outline-warning:not([disabled]):not(.disabled):active,
	.btn-outline-warning:not([disabled]):not(.disabled).active,
	.show>.btn-outline-warning.dropdown-toggle {
		background-color: transparent !important;
		border-color: #fb3 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-warning:not([disabled]):not(.disabled):active:focus,
	.btn-outline-warning:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-warning.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-success {
		color: #fff;
		background-color: #00c851 !important
	}

	.btn-success:hover {
		color: #fff;
		background-color: #00e25b
	}

	.btn-success:focus,
	.btn-success.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-success:focus,
	.btn-success:active,
	.btn-success.active {
		background-color: #006228
	}

	.btn-success.dropdown-toggle {
		background-color: #00c851 !important
	}

	.btn-success.dropdown-toggle:hover,
	.btn-success.dropdown-toggle:focus {
		background-color: #00e25b !important
	}

	.btn-success:not([disabled]):not(.disabled):active,
	.btn-success:not([disabled]):not(.disabled).active,
	.show>.btn-success.dropdown-toggle {
		background-color: #006228 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-success:not([disabled]):not(.disabled):active:focus,
	.btn-success:not([disabled]):not(.disabled).active:focus,
	.show>.btn-success.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.success-ic {
		color: #00c851 !important
	}

	.success-ic:hover,
	.success-ic:focus {
		color: #00c851
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-success {
		color: #fff
	}

	.btn-outline-success {
		color: #00c851 !important;
		background-color: transparent !important;
		border: 2px solid #00c851 !important
	}

	.btn-outline-success:hover,
	.btn-outline-success:focus,
	.btn-outline-success:active,
	.btn-outline-success:active:focus,
	.btn-outline-success.active {
		color: #00c851 !important;
		background-color: transparent !important;
		border-color: #00c851 !important
	}

	.btn-outline-success:not([disabled]):not(.disabled):active,
	.btn-outline-success:not([disabled]):not(.disabled).active,
	.show>.btn-outline-success.dropdown-toggle {
		background-color: transparent !important;
		border-color: #00c851 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-success:not([disabled]):not(.disabled):active:focus,
	.btn-outline-success:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-success.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-info {
		color: #fff;
		background-color: #33b5e5 !important
	}

	.btn-info:hover {
		color: #fff;
		background-color: #4abde8
	}

	.btn-info:focus,
	.btn-info.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-info:focus,
	.btn-info:active,
	.btn-info.active {
		background-color: #14799e
	}

	.btn-info.dropdown-toggle {
		background-color: #33b5e5 !important
	}

	.btn-info.dropdown-toggle:hover,
	.btn-info.dropdown-toggle:focus {
		background-color: #4abde8 !important
	}

	.btn-info:not([disabled]):not(.disabled):active,
	.btn-info:not([disabled]):not(.disabled).active,
	.show>.btn-info.dropdown-toggle {
		background-color: #14799e !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-info:not([disabled]):not(.disabled):active:focus,
	.btn-info:not([disabled]):not(.disabled).active:focus,
	.show>.btn-info.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.info-ic {
		color: #33b5e5 !important
	}

	.info-ic:hover,
	.info-ic:focus {
		color: #33b5e5
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-info {
		color: #fff
	}

	.btn-outline-info {
		color: #33b5e5 !important;
		background-color: transparent !important;
		border: 2px solid #33b5e5 !important
	}

	.btn-outline-info:hover,
	.btn-outline-info:focus,
	.btn-outline-info:active,
	.btn-outline-info:active:focus,
	.btn-outline-info.active {
		color: #33b5e5 !important;
		background-color: transparent !important;
		border-color: #33b5e5 !important
	}

	.btn-outline-info:not([disabled]):not(.disabled):active,
	.btn-outline-info:not([disabled]):not(.disabled).active,
	.show>.btn-outline-info.dropdown-toggle {
		background-color: transparent !important;
		border-color: #33b5e5 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-info:not([disabled]):not(.disabled):active:focus,
	.btn-outline-info:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-info.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-default {
		color: #fff;
		background-color: #2bbbad !important
	}

	.btn-default:hover {
		color: #fff;
		background-color: #30cfc0
	}

	.btn-default:focus,
	.btn-default.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-default:focus,
	.btn-default:active,
	.btn-default.active {
		background-color: #186860
	}

	.btn-default.dropdown-toggle {
		background-color: #2bbbad !important
	}

	.btn-default.dropdown-toggle:hover,
	.btn-default.dropdown-toggle:focus {
		background-color: #30cfc0 !important
	}

	.btn-default:not([disabled]):not(.disabled):active,
	.btn-default:not([disabled]):not(.disabled).active,
	.show>.btn-default.dropdown-toggle {
		background-color: #186860 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-default:not([disabled]):not(.disabled):active:focus,
	.btn-default:not([disabled]):not(.disabled).active:focus,
	.show>.btn-default.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.default-ic {
		color: #2bbbad !important
	}

	.default-ic:hover,
	.default-ic:focus {
		color: #2bbbad
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-default {
		color: #fff
	}

	.btn-outline-default {
		color: #2bbbad !important;
		background-color: transparent !important;
		border: 2px solid #2bbbad !important
	}

	.btn-outline-default:hover,
	.btn-outline-default:focus,
	.btn-outline-default:active,
	.btn-outline-default:active:focus,
	.btn-outline-default.active {
		color: #2bbbad !important;
		background-color: transparent !important;
		border-color: #2bbbad !important
	}

	.btn-outline-default:not([disabled]):not(.disabled):active,
	.btn-outline-default:not([disabled]):not(.disabled).active,
	.show>.btn-outline-default.dropdown-toggle {
		background-color: transparent !important;
		border-color: #2bbbad !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-default:not([disabled]):not(.disabled):active:focus,
	.btn-outline-default:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-default.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-secondary {
		color: #fff;
		background-color: #a6c !important
	}

	.btn-secondary:hover {
		color: #fff;
		background-color: #b579d2
	}

	.btn-secondary:focus,
	.btn-secondary.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-secondary:focus,
	.btn-secondary:active,
	.btn-secondary.active {
		background-color: #739
	}

	.btn-secondary.dropdown-toggle {
		background-color: #a6c !important
	}

	.btn-secondary.dropdown-toggle:hover,
	.btn-secondary.dropdown-toggle:focus {
		background-color: #b579d2 !important
	}

	.btn-secondary:not([disabled]):not(.disabled):active,
	.btn-secondary:not([disabled]):not(.disabled).active,
	.show>.btn-secondary.dropdown-toggle {
		background-color: #739 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-secondary:not([disabled]):not(.disabled):active:focus,
	.btn-secondary:not([disabled]):not(.disabled).active:focus,
	.show>.btn-secondary.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.secondary-ic {
		color: #a6c !important
	}

	.secondary-ic:hover,
	.secondary-ic:focus {
		color: #a6c
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-secondary {
		color: #fff
	}

	.btn-outline-secondary {
		color: #a6c !important;
		background-color: transparent !important;
		border: 2px solid #a6c !important
	}

	.btn-outline-secondary:hover,
	.btn-outline-secondary:focus,
	.btn-outline-secondary:active,
	.btn-outline-secondary:active:focus,
	.btn-outline-secondary.active {
		color: #a6c !important;
		background-color: transparent !important;
		border-color: #a6c !important
	}

	.btn-outline-secondary:not([disabled]):not(.disabled):active,
	.btn-outline-secondary:not([disabled]):not(.disabled).active,
	.show>.btn-outline-secondary.dropdown-toggle {
		background-color: transparent !important;
		border-color: #a6c !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-secondary:not([disabled]):not(.disabled):active:focus,
	.btn-outline-secondary:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-secondary.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-elegant {
		color: #fff;
		background-color: #2e2e2e !important
	}

	.btn-elegant:hover {
		color: #fff;
		background-color: #3b3b3b
	}

	.btn-elegant:focus,
	.btn-elegant.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-elegant:focus,
	.btn-elegant:active,
	.btn-elegant.active {
		background-color: #000
	}

	.btn-elegant.dropdown-toggle {
		background-color: #2e2e2e !important
	}

	.btn-elegant.dropdown-toggle:hover,
	.btn-elegant.dropdown-toggle:focus {
		background-color: #3b3b3b !important
	}

	.btn-elegant:not([disabled]):not(.disabled):active,
	.btn-elegant:not([disabled]):not(.disabled).active,
	.show>.btn-elegant.dropdown-toggle {
		background-color: #000 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-elegant:not([disabled]):not(.disabled):active:focus,
	.btn-elegant:not([disabled]):not(.disabled).active:focus,
	.show>.btn-elegant.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.elegant-ic {
		color: #2e2e2e !important
	}

	.elegant-ic:hover,
	.elegant-ic:focus {
		color: #2e2e2e
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-elegant {
		color: #fff
	}

	.btn-outline-elegant {
		color: #2e2e2e !important;
		background-color: transparent !important;
		border: 2px solid #2e2e2e !important
	}

	.btn-outline-elegant:hover,
	.btn-outline-elegant:focus,
	.btn-outline-elegant:active,
	.btn-outline-elegant:active:focus,
	.btn-outline-elegant.active {
		color: #2e2e2e !important;
		background-color: transparent !important;
		border-color: #2e2e2e !important
	}

	.btn-outline-elegant:not([disabled]):not(.disabled):active,
	.btn-outline-elegant:not([disabled]):not(.disabled).active,
	.show>.btn-outline-elegant.dropdown-toggle {
		background-color: transparent !important;
		border-color: #2e2e2e !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-elegant:not([disabled]):not(.disabled):active:focus,
	.btn-outline-elegant:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-elegant.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-unique {
		color: #fff;
		background-color: #880e4f !important
	}

	.btn-unique:hover {
		color: #fff;
		background-color: #9f105c
	}

	.btn-unique:focus,
	.btn-unique.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-unique:focus,
	.btn-unique:active,
	.btn-unique.active {
		background-color: #2c0419
	}

	.btn-unique.dropdown-toggle {
		background-color: #880e4f !important
	}

	.btn-unique.dropdown-toggle:hover,
	.btn-unique.dropdown-toggle:focus {
		background-color: #9f105c !important
	}

	.btn-unique:not([disabled]):not(.disabled):active,
	.btn-unique:not([disabled]):not(.disabled).active,
	.show>.btn-unique.dropdown-toggle {
		background-color: #2c0419 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-unique:not([disabled]):not(.disabled):active:focus,
	.btn-unique:not([disabled]):not(.disabled).active:focus,
	.show>.btn-unique.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.unique-ic {
		color: #880e4f !important
	}

	.unique-ic:hover,
	.unique-ic:focus {
		color: #880e4f
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-unique {
		color: #fff
	}

	.btn-outline-unique {
		color: #880e4f !important;
		background-color: transparent !important;
		border: 2px solid #880e4f !important
	}

	.btn-outline-unique:hover,
	.btn-outline-unique:focus,
	.btn-outline-unique:active,
	.btn-outline-unique:active:focus,
	.btn-outline-unique.active {
		color: #880e4f !important;
		background-color: transparent !important;
		border-color: #880e4f !important
	}

	.btn-outline-unique:not([disabled]):not(.disabled):active,
	.btn-outline-unique:not([disabled]):not(.disabled).active,
	.show>.btn-outline-unique.dropdown-toggle {
		background-color: transparent !important;
		border-color: #880e4f !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-unique:not([disabled]):not(.disabled):active:focus,
	.btn-outline-unique:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-unique.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark-green {
		color: #fff;
		background-color: #388e3c !important
	}

	.btn-dark-green:hover {
		color: #fff;
		background-color: #3fa044
	}

	.btn-dark-green:focus,
	.btn-dark-green.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark-green:focus,
	.btn-dark-green:active,
	.btn-dark-green.active {
		background-color: #1b451d
	}

	.btn-dark-green.dropdown-toggle {
		background-color: #388e3c !important
	}

	.btn-dark-green.dropdown-toggle:hover,
	.btn-dark-green.dropdown-toggle:focus {
		background-color: #3fa044 !important
	}

	.btn-dark-green:not([disabled]):not(.disabled):active,
	.btn-dark-green:not([disabled]):not(.disabled).active,
	.show>.btn-dark-green.dropdown-toggle {
		background-color: #1b451d !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark-green:not([disabled]):not(.disabled):active:focus,
	.btn-dark-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-dark-green.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.dark-green-ic {
		color: #388e3c !important
	}

	.dark-green-ic:hover,
	.dark-green-ic:focus {
		color: #388e3c
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-dark-green {
		color: #fff
	}

	.btn-outline-dark-green {
		color: #388e3c !important;
		background-color: transparent !important;
		border: 2px solid #388e3c !important
	}

	.btn-outline-dark-green:hover,
	.btn-outline-dark-green:focus,
	.btn-outline-dark-green:active,
	.btn-outline-dark-green:active:focus,
	.btn-outline-dark-green.active {
		color: #388e3c !important;
		background-color: transparent !important;
		border-color: #388e3c !important
	}

	.btn-outline-dark-green:not([disabled]):not(.disabled):active,
	.btn-outline-dark-green:not([disabled]):not(.disabled).active,
	.show>.btn-outline-dark-green.dropdown-toggle {
		background-color: transparent !important;
		border-color: #388e3c !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-dark-green:not([disabled]):not(.disabled):active:focus,
	.btn-outline-dark-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-dark-green.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-mdb-color {
		color: #fff;
		background-color: #59698d !important
	}

	.btn-mdb-color:hover {
		color: #fff;
		background-color: #63759d
	}

	.btn-mdb-color:focus,
	.btn-mdb-color.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-mdb-color:focus,
	.btn-mdb-color:active,
	.btn-mdb-color.active {
		background-color: #323a4e
	}

	.btn-mdb-color.dropdown-toggle {
		background-color: #59698d !important
	}

	.btn-mdb-color.dropdown-toggle:hover,
	.btn-mdb-color.dropdown-toggle:focus {
		background-color: #63759d !important
	}

	.btn-mdb-color:not([disabled]):not(.disabled):active,
	.btn-mdb-color:not([disabled]):not(.disabled).active,
	.show>.btn-mdb-color.dropdown-toggle {
		background-color: #323a4e !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-mdb-color:not([disabled]):not(.disabled):active:focus,
	.btn-mdb-color:not([disabled]):not(.disabled).active:focus,
	.show>.btn-mdb-color.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.mdb-color-ic {
		color: #59698d !important
	}

	.mdb-color-ic:hover,
	.mdb-color-ic:focus {
		color: #59698d
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-mdb-color {
		color: #fff
	}

	.btn-outline-mdb-color {
		color: #59698d !important;
		background-color: transparent !important;
		border: 2px solid #59698d !important
	}

	.btn-outline-mdb-color:hover,
	.btn-outline-mdb-color:focus,
	.btn-outline-mdb-color:active,
	.btn-outline-mdb-color:active:focus,
	.btn-outline-mdb-color.active {
		color: #59698d !important;
		background-color: transparent !important;
		border-color: #59698d !important
	}

	.btn-outline-mdb-color:not([disabled]):not(.disabled):active,
	.btn-outline-mdb-color:not([disabled]):not(.disabled).active,
	.show>.btn-outline-mdb-color.dropdown-toggle {
		background-color: transparent !important;
		border-color: #59698d !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-mdb-color:not([disabled]):not(.disabled):active:focus,
	.btn-outline-mdb-color:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-mdb-color.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-red {
		color: #fff;
		background-color: #d32f2f !important
	}

	.btn-red:hover {
		color: #fff;
		background-color: #d74444
	}

	.btn-red:focus,
	.btn-red.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-red:focus,
	.btn-red:active,
	.btn-red.active {
		background-color: #811b1b
	}

	.btn-red.dropdown-toggle {
		background-color: #d32f2f !important
	}

	.btn-red.dropdown-toggle:hover,
	.btn-red.dropdown-toggle:focus {
		background-color: #d74444 !important
	}

	.btn-red:not([disabled]):not(.disabled):active,
	.btn-red:not([disabled]):not(.disabled).active,
	.show>.btn-red.dropdown-toggle {
		background-color: #811b1b !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-red:not([disabled]):not(.disabled):active:focus,
	.btn-red:not([disabled]):not(.disabled).active:focus,
	.show>.btn-red.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.red-ic {
		color: #d32f2f !important
	}

	.red-ic:hover,
	.red-ic:focus {
		color: #d32f2f
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-red {
		color: #fff
	}

	.btn-outline-red {
		color: #d32f2f !important;
		background-color: transparent !important;
		border: 2px solid #d32f2f !important
	}

	.btn-outline-red:hover,
	.btn-outline-red:focus,
	.btn-outline-red:active,
	.btn-outline-red:active:focus,
	.btn-outline-red.active {
		color: #d32f2f !important;
		background-color: transparent !important;
		border-color: #d32f2f !important
	}

	.btn-outline-red:not([disabled]):not(.disabled):active,
	.btn-outline-red:not([disabled]):not(.disabled).active,
	.show>.btn-outline-red.dropdown-toggle {
		background-color: transparent !important;
		border-color: #d32f2f !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-red:not([disabled]):not(.disabled):active:focus,
	.btn-outline-red:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-red.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-pink {
		color: #fff;
		background-color: #ec407a !important
	}

	.btn-pink:hover {
		color: #fff;
		background-color: #ee578a
	}

	.btn-pink:focus,
	.btn-pink.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-pink:focus,
	.btn-pink:active,
	.btn-pink.active {
		background-color: #b41249
	}

	.btn-pink.dropdown-toggle {
		background-color: #ec407a !important
	}

	.btn-pink.dropdown-toggle:hover,
	.btn-pink.dropdown-toggle:focus {
		background-color: #ee578a !important
	}

	.btn-pink:not([disabled]):not(.disabled):active,
	.btn-pink:not([disabled]):not(.disabled).active,
	.show>.btn-pink.dropdown-toggle {
		background-color: #b41249 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-pink:not([disabled]):not(.disabled):active:focus,
	.btn-pink:not([disabled]):not(.disabled).active:focus,
	.show>.btn-pink.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.pink-ic {
		color: #ec407a !important
	}

	.pink-ic:hover,
	.pink-ic:focus {
		color: #ec407a
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-pink {
		color: #fff
	}

	.btn-outline-pink {
		color: #ec407a !important;
		background-color: transparent !important;
		border: 2px solid #ec407a !important
	}

	.btn-outline-pink:hover,
	.btn-outline-pink:focus,
	.btn-outline-pink:active,
	.btn-outline-pink:active:focus,
	.btn-outline-pink.active {
		color: #ec407a !important;
		background-color: transparent !important;
		border-color: #ec407a !important
	}

	.btn-outline-pink:not([disabled]):not(.disabled):active,
	.btn-outline-pink:not([disabled]):not(.disabled).active,
	.show>.btn-outline-pink.dropdown-toggle {
		background-color: transparent !important;
		border-color: #ec407a !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-pink:not([disabled]):not(.disabled):active:focus,
	.btn-outline-pink:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-pink.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-purple {
		color: #fff;
		background-color: #8e24aa !important
	}

	.btn-purple:hover {
		color: #fff;
		background-color: #a028bf
	}

	.btn-purple:focus,
	.btn-purple.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-purple:focus,
	.btn-purple:active,
	.btn-purple.active {
		background-color: #481256
	}

	.btn-purple.dropdown-toggle {
		background-color: #8e24aa !important
	}

	.btn-purple.dropdown-toggle:hover,
	.btn-purple.dropdown-toggle:focus {
		background-color: #a028bf !important
	}

	.btn-purple:not([disabled]):not(.disabled):active,
	.btn-purple:not([disabled]):not(.disabled).active,
	.show>.btn-purple.dropdown-toggle {
		background-color: #481256 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-purple:not([disabled]):not(.disabled):active:focus,
	.btn-purple:not([disabled]):not(.disabled).active:focus,
	.show>.btn-purple.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.purple-ic {
		color: #8e24aa !important
	}

	.purple-ic:hover,
	.purple-ic:focus {
		color: #8e24aa
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-purple {
		color: #fff
	}

	.btn-outline-purple {
		color: #8e24aa !important;
		background-color: transparent !important;
		border: 2px solid #8e24aa !important
	}

	.btn-outline-purple:hover,
	.btn-outline-purple:focus,
	.btn-outline-purple:active,
	.btn-outline-purple:active:focus,
	.btn-outline-purple.active {
		color: #8e24aa !important;
		background-color: transparent !important;
		border-color: #8e24aa !important
	}

	.btn-outline-purple:not([disabled]):not(.disabled):active,
	.btn-outline-purple:not([disabled]):not(.disabled).active,
	.show>.btn-outline-purple.dropdown-toggle {
		background-color: transparent !important;
		border-color: #8e24aa !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-purple:not([disabled]):not(.disabled):active:focus,
	.btn-outline-purple:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-purple.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-purple {
		color: #fff;
		background-color: #512da8 !important
	}

	.btn-deep-purple:hover {
		color: #fff;
		background-color: #5b32bc
	}

	.btn-deep-purple:focus,
	.btn-deep-purple.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-purple:focus,
	.btn-deep-purple:active,
	.btn-deep-purple.active {
		background-color: #2a1758
	}

	.btn-deep-purple.dropdown-toggle {
		background-color: #512da8 !important
	}

	.btn-deep-purple.dropdown-toggle:hover,
	.btn-deep-purple.dropdown-toggle:focus {
		background-color: #5b32bc !important
	}

	.btn-deep-purple:not([disabled]):not(.disabled):active,
	.btn-deep-purple:not([disabled]):not(.disabled).active,
	.show>.btn-deep-purple.dropdown-toggle {
		background-color: #2a1758 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-purple:not([disabled]):not(.disabled):active:focus,
	.btn-deep-purple:not([disabled]):not(.disabled).active:focus,
	.show>.btn-deep-purple.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.deep-purple-ic {
		color: #512da8 !important
	}

	.deep-purple-ic:hover,
	.deep-purple-ic:focus {
		color: #512da8
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-deep-purple {
		color: #fff
	}

	.btn-outline-deep-purple {
		color: #512da8 !important;
		background-color: transparent !important;
		border: 2px solid #512da8 !important
	}

	.btn-outline-deep-purple:hover,
	.btn-outline-deep-purple:focus,
	.btn-outline-deep-purple:active,
	.btn-outline-deep-purple:active:focus,
	.btn-outline-deep-purple.active {
		color: #512da8 !important;
		background-color: transparent !important;
		border-color: #512da8 !important
	}

	.btn-outline-deep-purple:not([disabled]):not(.disabled):active,
	.btn-outline-deep-purple:not([disabled]):not(.disabled).active,
	.show>.btn-outline-deep-purple.dropdown-toggle {
		background-color: transparent !important;
		border-color: #512da8 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-deep-purple:not([disabled]):not(.disabled):active:focus,
	.btn-outline-deep-purple:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-deep-purple.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-indigo {
		color: #fff;
		background-color: #3f51b5 !important
	}

	.btn-indigo:hover {
		color: #fff;
		background-color: #4d5ec1
	}

	.btn-indigo:focus,
	.btn-indigo.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-indigo:focus,
	.btn-indigo:active,
	.btn-indigo.active {
		background-color: #252f69
	}

	.btn-indigo.dropdown-toggle {
		background-color: #3f51b5 !important
	}

	.btn-indigo.dropdown-toggle:hover,
	.btn-indigo.dropdown-toggle:focus {
		background-color: #4d5ec1 !important
	}

	.btn-indigo:not([disabled]):not(.disabled):active,
	.btn-indigo:not([disabled]):not(.disabled).active,
	.show>.btn-indigo.dropdown-toggle {
		background-color: #252f69 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-indigo:not([disabled]):not(.disabled):active:focus,
	.btn-indigo:not([disabled]):not(.disabled).active:focus,
	.show>.btn-indigo.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.indigo-ic {
		color: #3f51b5 !important
	}

	.indigo-ic:hover,
	.indigo-ic:focus {
		color: #3f51b5
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-indigo {
		color: #fff
	}

	.btn-outline-indigo {
		color: #3f51b5 !important;
		background-color: transparent !important;
		border: 2px solid #3f51b5 !important
	}

	.btn-outline-indigo:hover,
	.btn-outline-indigo:focus,
	.btn-outline-indigo:active,
	.btn-outline-indigo:active:focus,
	.btn-outline-indigo.active {
		color: #3f51b5 !important;
		background-color: transparent !important;
		border-color: #3f51b5 !important
	}

	.btn-outline-indigo:not([disabled]):not(.disabled):active,
	.btn-outline-indigo:not([disabled]):not(.disabled).active,
	.show>.btn-outline-indigo.dropdown-toggle {
		background-color: transparent !important;
		border-color: #3f51b5 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-indigo:not([disabled]):not(.disabled):active:focus,
	.btn-outline-indigo:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-indigo.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue {
		color: #fff;
		background-color: #1976d2 !important
	}

	.btn-blue:hover {
		color: #fff;
		background-color: #2083e4
	}

	.btn-blue:focus,
	.btn-blue.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue:focus,
	.btn-blue:active,
	.btn-blue.active {
		background-color: #0e4377
	}

	.btn-blue.dropdown-toggle {
		background-color: #1976d2 !important
	}

	.btn-blue.dropdown-toggle:hover,
	.btn-blue.dropdown-toggle:focus {
		background-color: #2083e4 !important
	}

	.btn-blue:not([disabled]):not(.disabled):active,
	.btn-blue:not([disabled]):not(.disabled).active,
	.show>.btn-blue.dropdown-toggle {
		background-color: #0e4377 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue:not([disabled]):not(.disabled):active:focus,
	.btn-blue:not([disabled]):not(.disabled).active:focus,
	.show>.btn-blue.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.blue-ic {
		color: #1976d2 !important
	}

	.blue-ic:hover,
	.blue-ic:focus {
		color: #1976d2
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-blue {
		color: #fff
	}

	.btn-outline-blue {
		color: #1976d2 !important;
		background-color: transparent !important;
		border: 2px solid #1976d2 !important
	}

	.btn-outline-blue:hover,
	.btn-outline-blue:focus,
	.btn-outline-blue:active,
	.btn-outline-blue:active:focus,
	.btn-outline-blue.active {
		color: #1976d2 !important;
		background-color: transparent !important;
		border-color: #1976d2 !important
	}

	.btn-outline-blue:not([disabled]):not(.disabled):active,
	.btn-outline-blue:not([disabled]):not(.disabled).active,
	.show>.btn-outline-blue.dropdown-toggle {
		background-color: transparent !important;
		border-color: #1976d2 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-blue:not([disabled]):not(.disabled):active:focus,
	.btn-outline-blue:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-blue.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-blue {
		color: #fff;
		background-color: #82b1ff !important
	}

	.btn-light-blue:hover {
		color: #fff;
		background-color: #9cc1ff
	}

	.btn-light-blue:focus,
	.btn-light-blue.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-blue:focus,
	.btn-light-blue:active,
	.btn-light-blue.active {
		background-color: #1c71ff
	}

	.btn-light-blue.dropdown-toggle {
		background-color: #82b1ff !important
	}

	.btn-light-blue.dropdown-toggle:hover,
	.btn-light-blue.dropdown-toggle:focus {
		background-color: #9cc1ff !important
	}

	.btn-light-blue:not([disabled]):not(.disabled):active,
	.btn-light-blue:not([disabled]):not(.disabled).active,
	.show>.btn-light-blue.dropdown-toggle {
		background-color: #1c71ff !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-blue:not([disabled]):not(.disabled):active:focus,
	.btn-light-blue:not([disabled]):not(.disabled).active:focus,
	.show>.btn-light-blue.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.light-blue-ic {
		color: #82b1ff !important
	}

	.light-blue-ic:hover,
	.light-blue-ic:focus {
		color: #82b1ff
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-light-blue {
		color: #fff
	}

	.btn-outline-light-blue {
		color: #82b1ff !important;
		background-color: transparent !important;
		border: 2px solid #82b1ff !important
	}

	.btn-outline-light-blue:hover,
	.btn-outline-light-blue:focus,
	.btn-outline-light-blue:active,
	.btn-outline-light-blue:active:focus,
	.btn-outline-light-blue.active {
		color: #82b1ff !important;
		background-color: transparent !important;
		border-color: #82b1ff !important
	}

	.btn-outline-light-blue:not([disabled]):not(.disabled):active,
	.btn-outline-light-blue:not([disabled]):not(.disabled).active,
	.show>.btn-outline-light-blue.dropdown-toggle {
		background-color: transparent !important;
		border-color: #82b1ff !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-light-blue:not([disabled]):not(.disabled):active:focus,
	.btn-outline-light-blue:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-light-blue.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-cyan {
		color: #fff;
		background-color: #00bcd4 !important
	}

	.btn-cyan:hover {
		color: #fff;
		background-color: #00d3ee
	}

	.btn-cyan:focus,
	.btn-cyan.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-cyan:focus,
	.btn-cyan:active,
	.btn-cyan.active {
		background-color: #00626e
	}

	.btn-cyan.dropdown-toggle {
		background-color: #00bcd4 !important
	}

	.btn-cyan.dropdown-toggle:hover,
	.btn-cyan.dropdown-toggle:focus {
		background-color: #00d3ee !important
	}

	.btn-cyan:not([disabled]):not(.disabled):active,
	.btn-cyan:not([disabled]):not(.disabled).active,
	.show>.btn-cyan.dropdown-toggle {
		background-color: #00626e !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-cyan:not([disabled]):not(.disabled):active:focus,
	.btn-cyan:not([disabled]):not(.disabled).active:focus,
	.show>.btn-cyan.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.cyan-ic {
		color: #00bcd4 !important
	}

	.cyan-ic:hover,
	.cyan-ic:focus {
		color: #00bcd4
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-cyan {
		color: #fff
	}

	.btn-outline-cyan {
		color: #00bcd4 !important;
		background-color: transparent !important;
		border: 2px solid #00bcd4 !important
	}

	.btn-outline-cyan:hover,
	.btn-outline-cyan:focus,
	.btn-outline-cyan:active,
	.btn-outline-cyan:active:focus,
	.btn-outline-cyan.active {
		color: #00bcd4 !important;
		background-color: transparent !important;
		border-color: #00bcd4 !important
	}

	.btn-outline-cyan:not([disabled]):not(.disabled):active,
	.btn-outline-cyan:not([disabled]):not(.disabled).active,
	.show>.btn-outline-cyan.dropdown-toggle {
		background-color: transparent !important;
		border-color: #00bcd4 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-cyan:not([disabled]):not(.disabled):active:focus,
	.btn-outline-cyan:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-cyan.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-teal {
		color: #fff;
		background-color: #00796b !important
	}

	.btn-teal:hover {
		color: #fff;
		background-color: #009382
	}

	.btn-teal:focus,
	.btn-teal.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-teal:focus,
	.btn-teal:active,
	.btn-teal.active {
		background-color: #001311
	}

	.btn-teal.dropdown-toggle {
		background-color: #00796b !important
	}

	.btn-teal.dropdown-toggle:hover,
	.btn-teal.dropdown-toggle:focus {
		background-color: #009382 !important
	}

	.btn-teal:not([disabled]):not(.disabled):active,
	.btn-teal:not([disabled]):not(.disabled).active,
	.show>.btn-teal.dropdown-toggle {
		background-color: #001311 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-teal:not([disabled]):not(.disabled):active:focus,
	.btn-teal:not([disabled]):not(.disabled).active:focus,
	.show>.btn-teal.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.teal-ic {
		color: #00796b !important
	}

	.teal-ic:hover,
	.teal-ic:focus {
		color: #00796b
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-teal {
		color: #fff
	}

	.btn-outline-teal {
		color: #00796b !important;
		background-color: transparent !important;
		border: 2px solid #00796b !important
	}

	.btn-outline-teal:hover,
	.btn-outline-teal:focus,
	.btn-outline-teal:active,
	.btn-outline-teal:active:focus,
	.btn-outline-teal.active {
		color: #00796b !important;
		background-color: transparent !important;
		border-color: #00796b !important
	}

	.btn-outline-teal:not([disabled]):not(.disabled):active,
	.btn-outline-teal:not([disabled]):not(.disabled).active,
	.show>.btn-outline-teal.dropdown-toggle {
		background-color: transparent !important;
		border-color: #00796b !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-teal:not([disabled]):not(.disabled):active:focus,
	.btn-outline-teal:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-teal.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-green {
		color: #fff;
		background-color: #388e3c !important
	}

	.btn-green:hover {
		color: #fff;
		background-color: #3fa044
	}

	.btn-green:focus,
	.btn-green.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-green:focus,
	.btn-green:active,
	.btn-green.active {
		background-color: #1b451d
	}

	.btn-green.dropdown-toggle {
		background-color: #388e3c !important
	}

	.btn-green.dropdown-toggle:hover,
	.btn-green.dropdown-toggle:focus {
		background-color: #3fa044 !important
	}

	.btn-green:not([disabled]):not(.disabled):active,
	.btn-green:not([disabled]):not(.disabled).active,
	.show>.btn-green.dropdown-toggle {
		background-color: #1b451d !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-green:not([disabled]):not(.disabled):active:focus,
	.btn-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-green.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.green-ic {
		color: #388e3c !important
	}

	.green-ic:hover,
	.green-ic:focus {
		color: #388e3c
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-green {
		color: #fff
	}

	.btn-outline-green {
		color: #388e3c !important;
		background-color: transparent !important;
		border: 2px solid #388e3c !important
	}

	.btn-outline-green:hover,
	.btn-outline-green:focus,
	.btn-outline-green:active,
	.btn-outline-green:active:focus,
	.btn-outline-green.active {
		color: #388e3c !important;
		background-color: transparent !important;
		border-color: #388e3c !important
	}

	.btn-outline-green:not([disabled]):not(.disabled):active,
	.btn-outline-green:not([disabled]):not(.disabled).active,
	.show>.btn-outline-green.dropdown-toggle {
		background-color: transparent !important;
		border-color: #388e3c !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-green:not([disabled]):not(.disabled):active:focus,
	.btn-outline-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-green.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-green {
		color: #fff;
		background-color: #8bc34a !important
	}

	.btn-light-green:hover {
		color: #fff;
		background-color: #97c95d
	}

	.btn-light-green:focus,
	.btn-light-green.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-green:focus,
	.btn-light-green:active,
	.btn-light-green.active {
		background-color: #577d2a
	}

	.btn-light-green.dropdown-toggle {
		background-color: #8bc34a !important
	}

	.btn-light-green.dropdown-toggle:hover,
	.btn-light-green.dropdown-toggle:focus {
		background-color: #97c95d !important
	}

	.btn-light-green:not([disabled]):not(.disabled):active,
	.btn-light-green:not([disabled]):not(.disabled).active,
	.show>.btn-light-green.dropdown-toggle {
		background-color: #577d2a !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-green:not([disabled]):not(.disabled):active:focus,
	.btn-light-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-light-green.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.light-green-ic {
		color: #8bc34a !important
	}

	.light-green-ic:hover,
	.light-green-ic:focus {
		color: #8bc34a
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-light-green {
		color: #fff
	}

	.btn-outline-light-green {
		color: #8bc34a !important;
		background-color: transparent !important;
		border: 2px solid #8bc34a !important
	}

	.btn-outline-light-green:hover,
	.btn-outline-light-green:focus,
	.btn-outline-light-green:active,
	.btn-outline-light-green:active:focus,
	.btn-outline-light-green.active {
		color: #8bc34a !important;
		background-color: transparent !important;
		border-color: #8bc34a !important
	}

	.btn-outline-light-green:not([disabled]):not(.disabled):active,
	.btn-outline-light-green:not([disabled]):not(.disabled).active,
	.show>.btn-outline-light-green.dropdown-toggle {
		background-color: transparent !important;
		border-color: #8bc34a !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-light-green:not([disabled]):not(.disabled):active:focus,
	.btn-outline-light-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-light-green.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-lime {
		color: #fff;
		background-color: #afb42b !important
	}

	.btn-lime:hover {
		color: #fff;
		background-color: #c3c930
	}

	.btn-lime:focus,
	.btn-lime.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-lime:focus,
	.btn-lime:active,
	.btn-lime.active {
		background-color: #5f6217
	}

	.btn-lime.dropdown-toggle {
		background-color: #afb42b !important
	}

	.btn-lime.dropdown-toggle:hover,
	.btn-lime.dropdown-toggle:focus {
		background-color: #c3c930 !important
	}

	.btn-lime:not([disabled]):not(.disabled):active,
	.btn-lime:not([disabled]):not(.disabled).active,
	.show>.btn-lime.dropdown-toggle {
		background-color: #5f6217 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-lime:not([disabled]):not(.disabled):active:focus,
	.btn-lime:not([disabled]):not(.disabled).active:focus,
	.show>.btn-lime.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.lime-ic {
		color: #afb42b !important
	}

	.lime-ic:hover,
	.lime-ic:focus {
		color: #afb42b
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-lime {
		color: #fff
	}

	.btn-outline-lime {
		color: #afb42b !important;
		background-color: transparent !important;
		border: 2px solid #afb42b !important
	}

	.btn-outline-lime:hover,
	.btn-outline-lime:focus,
	.btn-outline-lime:active,
	.btn-outline-lime:active:focus,
	.btn-outline-lime.active {
		color: #afb42b !important;
		background-color: transparent !important;
		border-color: #afb42b !important
	}

	.btn-outline-lime:not([disabled]):not(.disabled):active,
	.btn-outline-lime:not([disabled]):not(.disabled).active,
	.show>.btn-outline-lime.dropdown-toggle {
		background-color: transparent !important;
		border-color: #afb42b !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-lime:not([disabled]):not(.disabled):active:focus,
	.btn-outline-lime:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-lime.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-yellow {
		color: #fff;
		background-color: #fbc02d !important
	}

	.btn-yellow:hover {
		color: #fff;
		background-color: #fbc846
	}

	.btn-yellow:focus,
	.btn-yellow.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-yellow:focus,
	.btn-yellow:active,
	.btn-yellow.active {
		background-color: #be8904
	}

	.btn-yellow.dropdown-toggle {
		background-color: #fbc02d !important
	}

	.btn-yellow.dropdown-toggle:hover,
	.btn-yellow.dropdown-toggle:focus {
		background-color: #fbc846 !important
	}

	.btn-yellow:not([disabled]):not(.disabled):active,
	.btn-yellow:not([disabled]):not(.disabled).active,
	.show>.btn-yellow.dropdown-toggle {
		background-color: #be8904 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-yellow:not([disabled]):not(.disabled):active:focus,
	.btn-yellow:not([disabled]):not(.disabled).active:focus,
	.show>.btn-yellow.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.yellow-ic {
		color: #fbc02d !important
	}

	.yellow-ic:hover,
	.yellow-ic:focus {
		color: #fbc02d
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-yellow {
		color: #fff
	}

	.btn-outline-yellow {
		color: #fbc02d !important;
		background-color: transparent !important;
		border: 2px solid #fbc02d !important
	}

	.btn-outline-yellow:hover,
	.btn-outline-yellow:focus,
	.btn-outline-yellow:active,
	.btn-outline-yellow:active:focus,
	.btn-outline-yellow.active {
		color: #fbc02d !important;
		background-color: transparent !important;
		border-color: #fbc02d !important
	}

	.btn-outline-yellow:not([disabled]):not(.disabled):active,
	.btn-outline-yellow:not([disabled]):not(.disabled).active,
	.show>.btn-outline-yellow.dropdown-toggle {
		background-color: transparent !important;
		border-color: #fbc02d !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-yellow:not([disabled]):not(.disabled):active:focus,
	.btn-outline-yellow:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-yellow.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-amber {
		color: #fff;
		background-color: #ffa000 !important
	}

	.btn-amber:hover {
		color: #fff;
		background-color: #ffaa1a
	}

	.btn-amber:focus,
	.btn-amber.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-amber:focus,
	.btn-amber:active,
	.btn-amber.active {
		background-color: #996000
	}

	.btn-amber.dropdown-toggle {
		background-color: #ffa000 !important
	}

	.btn-amber.dropdown-toggle:hover,
	.btn-amber.dropdown-toggle:focus {
		background-color: #ffaa1a !important
	}

	.btn-amber:not([disabled]):not(.disabled):active,
	.btn-amber:not([disabled]):not(.disabled).active,
	.show>.btn-amber.dropdown-toggle {
		background-color: #996000 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-amber:not([disabled]):not(.disabled):active:focus,
	.btn-amber:not([disabled]):not(.disabled).active:focus,
	.show>.btn-amber.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.amber-ic {
		color: #ffa000 !important
	}

	.amber-ic:hover,
	.amber-ic:focus {
		color: #ffa000
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-amber {
		color: #fff
	}

	.btn-outline-amber {
		color: #ffa000 !important;
		background-color: transparent !important;
		border: 2px solid #ffa000 !important
	}

	.btn-outline-amber:hover,
	.btn-outline-amber:focus,
	.btn-outline-amber:active,
	.btn-outline-amber:active:focus,
	.btn-outline-amber.active {
		color: #ffa000 !important;
		background-color: transparent !important;
		border-color: #ffa000 !important
	}

	.btn-outline-amber:not([disabled]):not(.disabled):active,
	.btn-outline-amber:not([disabled]):not(.disabled).active,
	.show>.btn-outline-amber.dropdown-toggle {
		background-color: transparent !important;
		border-color: #ffa000 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-amber:not([disabled]):not(.disabled):active:focus,
	.btn-outline-amber:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-amber.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-orange {
		color: #fff;
		background-color: #f57c00 !important
	}

	.btn-orange:hover {
		color: #fff;
		background-color: #ff8910
	}

	.btn-orange:focus,
	.btn-orange.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-orange:focus,
	.btn-orange:active,
	.btn-orange.active {
		background-color: #8f4800
	}

	.btn-orange.dropdown-toggle {
		background-color: #f57c00 !important
	}

	.btn-orange.dropdown-toggle:hover,
	.btn-orange.dropdown-toggle:focus {
		background-color: #ff8910 !important
	}

	.btn-orange:not([disabled]):not(.disabled):active,
	.btn-orange:not([disabled]):not(.disabled).active,
	.show>.btn-orange.dropdown-toggle {
		background-color: #8f4800 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-orange:not([disabled]):not(.disabled):active:focus,
	.btn-orange:not([disabled]):not(.disabled).active:focus,
	.show>.btn-orange.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.orange-ic {
		color: #f57c00 !important
	}

	.orange-ic:hover,
	.orange-ic:focus {
		color: #f57c00
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-orange {
		color: #fff
	}

	.btn-outline-orange {
		color: #f57c00 !important;
		background-color: transparent !important;
		border: 2px solid #f57c00 !important
	}

	.btn-outline-orange:hover,
	.btn-outline-orange:focus,
	.btn-outline-orange:active,
	.btn-outline-orange:active:focus,
	.btn-outline-orange.active {
		color: #f57c00 !important;
		background-color: transparent !important;
		border-color: #f57c00 !important
	}

	.btn-outline-orange:not([disabled]):not(.disabled):active,
	.btn-outline-orange:not([disabled]):not(.disabled).active,
	.show>.btn-outline-orange.dropdown-toggle {
		background-color: transparent !important;
		border-color: #f57c00 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-orange:not([disabled]):not(.disabled):active:focus,
	.btn-outline-orange:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-orange.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-orange {
		color: #fff;
		background-color: #ff7043 !important
	}

	.btn-deep-orange:hover {
		color: #fff;
		background-color: #ff835d
	}

	.btn-deep-orange:focus,
	.btn-deep-orange.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-orange:focus,
	.btn-deep-orange:active,
	.btn-deep-orange.active {
		background-color: #dc3500
	}

	.btn-deep-orange.dropdown-toggle {
		background-color: #ff7043 !important
	}

	.btn-deep-orange.dropdown-toggle:hover,
	.btn-deep-orange.dropdown-toggle:focus {
		background-color: #ff835d !important
	}

	.btn-deep-orange:not([disabled]):not(.disabled):active,
	.btn-deep-orange:not([disabled]):not(.disabled).active,
	.show>.btn-deep-orange.dropdown-toggle {
		background-color: #dc3500 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-orange:not([disabled]):not(.disabled):active:focus,
	.btn-deep-orange:not([disabled]):not(.disabled).active:focus,
	.show>.btn-deep-orange.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.deep-orange-ic {
		color: #ff7043 !important
	}

	.deep-orange-ic:hover,
	.deep-orange-ic:focus {
		color: #ff7043
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-deep-orange {
		color: #fff
	}

	.btn-outline-deep-orange {
		color: #ff7043 !important;
		background-color: transparent !important;
		border: 2px solid #ff7043 !important
	}

	.btn-outline-deep-orange:hover,
	.btn-outline-deep-orange:focus,
	.btn-outline-deep-orange:active,
	.btn-outline-deep-orange:active:focus,
	.btn-outline-deep-orange.active {
		color: #ff7043 !important;
		background-color: transparent !important;
		border-color: #ff7043 !important
	}

	.btn-outline-deep-orange:not([disabled]):not(.disabled):active,
	.btn-outline-deep-orange:not([disabled]):not(.disabled).active,
	.show>.btn-outline-deep-orange.dropdown-toggle {
		background-color: transparent !important;
		border-color: #ff7043 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-deep-orange:not([disabled]):not(.disabled):active:focus,
	.btn-outline-deep-orange:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-deep-orange.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-brown {
		color: #fff;
		background-color: #795548 !important
	}

	.btn-brown:hover {
		color: #fff;
		background-color: #896052
	}

	.btn-brown:focus,
	.btn-brown.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-brown:focus,
	.btn-brown:active,
	.btn-brown.active {
		background-color: #392822
	}

	.btn-brown.dropdown-toggle {
		background-color: #795548 !important
	}

	.btn-brown.dropdown-toggle:hover,
	.btn-brown.dropdown-toggle:focus {
		background-color: #896052 !important
	}

	.btn-brown:not([disabled]):not(.disabled):active,
	.btn-brown:not([disabled]):not(.disabled).active,
	.show>.btn-brown.dropdown-toggle {
		background-color: #392822 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-brown:not([disabled]):not(.disabled):active:focus,
	.btn-brown:not([disabled]):not(.disabled).active:focus,
	.show>.btn-brown.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.brown-ic {
		color: #795548 !important
	}

	.brown-ic:hover,
	.brown-ic:focus {
		color: #795548
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-brown {
		color: #fff
	}

	.btn-outline-brown {
		color: #795548 !important;
		background-color: transparent !important;
		border: 2px solid #795548 !important
	}

	.btn-outline-brown:hover,
	.btn-outline-brown:focus,
	.btn-outline-brown:active,
	.btn-outline-brown:active:focus,
	.btn-outline-brown.active {
		color: #795548 !important;
		background-color: transparent !important;
		border-color: #795548 !important
	}

	.btn-outline-brown:not([disabled]):not(.disabled):active,
	.btn-outline-brown:not([disabled]):not(.disabled).active,
	.show>.btn-outline-brown.dropdown-toggle {
		background-color: transparent !important;
		border-color: #795548 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-brown:not([disabled]):not(.disabled):active:focus,
	.btn-outline-brown:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-brown.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-grey {
		color: #fff;
		background-color: #616161 !important
	}

	.btn-grey:hover {
		color: #fff;
		background-color: #6e6e6e
	}

	.btn-grey:focus,
	.btn-grey.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-grey:focus,
	.btn-grey:active,
	.btn-grey.active {
		background-color: #2e2e2e
	}

	.btn-grey.dropdown-toggle {
		background-color: #616161 !important
	}

	.btn-grey.dropdown-toggle:hover,
	.btn-grey.dropdown-toggle:focus {
		background-color: #6e6e6e !important
	}

	.btn-grey:not([disabled]):not(.disabled):active,
	.btn-grey:not([disabled]):not(.disabled).active,
	.show>.btn-grey.dropdown-toggle {
		background-color: #2e2e2e !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-grey:not([disabled]):not(.disabled):active:focus,
	.btn-grey:not([disabled]):not(.disabled).active:focus,
	.show>.btn-grey.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.grey-ic {
		color: #616161 !important
	}

	.grey-ic:hover,
	.grey-ic:focus {
		color: #616161
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-grey {
		color: #fff
	}

	.btn-outline-grey {
		color: #616161 !important;
		background-color: transparent !important;
		border: 2px solid #616161 !important
	}

	.btn-outline-grey:hover,
	.btn-outline-grey:focus,
	.btn-outline-grey:active,
	.btn-outline-grey:active:focus,
	.btn-outline-grey.active {
		color: #616161 !important;
		background-color: transparent !important;
		border-color: #616161 !important
	}

	.btn-outline-grey:not([disabled]):not(.disabled):active,
	.btn-outline-grey:not([disabled]):not(.disabled).active,
	.show>.btn-outline-grey.dropdown-toggle {
		background-color: transparent !important;
		border-color: #616161 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-grey:not([disabled]):not(.disabled):active:focus,
	.btn-outline-grey:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-grey.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue-grey {
		color: #fff;
		background-color: #78909c !important
	}

	.btn-blue-grey:hover {
		color: #fff;
		background-color: #879ca7
	}

	.btn-blue-grey:focus,
	.btn-blue-grey.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue-grey:focus,
	.btn-blue-grey:active,
	.btn-blue-grey.active {
		background-color: #4a5b64
	}

	.btn-blue-grey.dropdown-toggle {
		background-color: #78909c !important
	}

	.btn-blue-grey.dropdown-toggle:hover,
	.btn-blue-grey.dropdown-toggle:focus {
		background-color: #879ca7 !important
	}

	.btn-blue-grey:not([disabled]):not(.disabled):active,
	.btn-blue-grey:not([disabled]):not(.disabled).active,
	.show>.btn-blue-grey.dropdown-toggle {
		background-color: #4a5b64 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue-grey:not([disabled]):not(.disabled):active:focus,
	.btn-blue-grey:not([disabled]):not(.disabled).active:focus,
	.show>.btn-blue-grey.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.blue-grey-ic {
		color: #78909c !important
	}

	.blue-grey-ic:hover,
	.blue-grey-ic:focus {
		color: #78909c
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-blue-grey {
		color: #fff
	}

	.btn-outline-blue-grey {
		color: #78909c !important;
		background-color: transparent !important;
		border: 2px solid #78909c !important
	}

	.btn-outline-blue-grey:hover,
	.btn-outline-blue-grey:focus,
	.btn-outline-blue-grey:active,
	.btn-outline-blue-grey:active:focus,
	.btn-outline-blue-grey.active {
		color: #78909c !important;
		background-color: transparent !important;
		border-color: #78909c !important
	}

	.btn-outline-blue-grey:not([disabled]):not(.disabled):active,
	.btn-outline-blue-grey:not([disabled]):not(.disabled).active,
	.show>.btn-outline-blue-grey.dropdown-toggle {
		background-color: transparent !important;
		border-color: #78909c !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-blue-grey:not([disabled]):not(.disabled):active:focus,
	.btn-outline-blue-grey:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-blue-grey.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark {
		color: #fff;
		background-color: #212121 !important
	}

	.btn-dark:hover {
		color: #fff;
		background-color: #2e2e2e
	}

	.btn-dark:focus,
	.btn-dark.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark:focus,
	.btn-dark:active,
	.btn-dark.active {
		background-color: #000
	}

	.btn-dark.dropdown-toggle {
		background-color: #212121 !important
	}

	.btn-dark.dropdown-toggle:hover,
	.btn-dark.dropdown-toggle:focus {
		background-color: #2e2e2e !important
	}

	.btn-dark:not([disabled]):not(.disabled):active,
	.btn-dark:not([disabled]):not(.disabled).active,
	.show>.btn-dark.dropdown-toggle {
		background-color: #000 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark:not([disabled]):not(.disabled):active:focus,
	.btn-dark:not([disabled]):not(.disabled).active:focus,
	.show>.btn-dark.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.dark-ic {
		color: #212121 !important
	}

	.dark-ic:hover,
	.dark-ic:focus {
		color: #212121
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-dark {
		color: #fff
	}

	.btn-outline-dark {
		color: #212121 !important;
		background-color: transparent !important;
		border: 2px solid #212121 !important
	}

	.btn-outline-dark:hover,
	.btn-outline-dark:focus,
	.btn-outline-dark:active,
	.btn-outline-dark:active:focus,
	.btn-outline-dark.active {
		color: #212121 !important;
		background-color: transparent !important;
		border-color: #212121 !important
	}

	.btn-outline-dark:not([disabled]):not(.disabled):active,
	.btn-outline-dark:not([disabled]):not(.disabled).active,
	.show>.btn-outline-dark.dropdown-toggle {
		background-color: transparent !important;
		border-color: #212121 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-dark:not([disabled]):not(.disabled):active:focus,
	.btn-outline-dark:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-dark.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light {
		color: #000;
		background-color: #e0e0e0 !important
	}

	.btn-light:hover {
		color: #000;
		background-color: #ededed
	}

	.btn-light:focus,
	.btn-light.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light:focus,
	.btn-light:active,
	.btn-light.active {
		background-color: #adadad
	}

	.btn-light.dropdown-toggle {
		background-color: #e0e0e0 !important
	}

	.btn-light.dropdown-toggle:hover,
	.btn-light.dropdown-toggle:focus {
		background-color: #ededed !important
	}

	.btn-light:not([disabled]):not(.disabled):active,
	.btn-light:not([disabled]):not(.disabled).active,
	.show>.btn-light.dropdown-toggle {
		background-color: #adadad !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light:not([disabled]):not(.disabled):active:focus,
	.btn-light:not([disabled]):not(.disabled).active:focus,
	.show>.btn-light.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.light-ic {
		color: #e0e0e0 !important
	}

	.light-ic:hover,
	.light-ic:focus {
		color: #e0e0e0
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #000
	}

	table.table a.btn.btn-light {
		color: #000
	}

	.btn-outline-light {
		color: #e0e0e0 !important;
		background-color: transparent !important;
		border: 2px solid #e0e0e0 !important
	}

	.btn-outline-light:hover,
	.btn-outline-light:focus,
	.btn-outline-light:active,
	.btn-outline-light:active:focus,
	.btn-outline-light.active {
		color: #e0e0e0 !important;
		background-color: transparent !important;
		border-color: #e0e0e0 !important
	}

	.btn-outline-light:not([disabled]):not(.disabled):active,
	.btn-outline-light:not([disabled]):not(.disabled).active,
	.show>.btn-outline-light.dropdown-toggle {
		background-color: transparent !important;
		border-color: #e0e0e0 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-light:not([disabled]):not(.disabled):active:focus,
	.btn-outline-light:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-light.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-white {
		color: #000;
		background-color: #fff !important
	}

	.btn-white:hover {
		color: #000;
		background-color: #fff
	}

	.btn-white:focus,
	.btn-white.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-white:focus,
	.btn-white:active,
	.btn-white.active {
		background-color: #ccc
	}

	.btn-white.dropdown-toggle {
		background-color: #fff !important
	}

	.btn-white.dropdown-toggle:hover,
	.btn-white.dropdown-toggle:focus {
		background-color: #fff !important
	}

	.btn-white:not([disabled]):not(.disabled):active,
	.btn-white:not([disabled]):not(.disabled).active,
	.show>.btn-white.dropdown-toggle {
		background-color: #ccc !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-white:not([disabled]):not(.disabled):active:focus,
	.btn-white:not([disabled]):not(.disabled).active:focus,
	.show>.btn-white.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.white-ic {
		color: #fff !important
	}

	.white-ic:hover,
	.white-ic:focus {
		color: #fff
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #000
	}

	table.table a.btn.btn-white {
		color: #000
	}

	.btn-outline-white {
		color: #fff !important;
		background-color: transparent !important;
		border: 2px solid #fff !important
	}

	.btn-outline-white:hover,
	.btn-outline-white:focus,
	.btn-outline-white:active,
	.btn-outline-white:active:focus,
	.btn-outline-white.active {
		color: #fff !important;
		background-color: transparent !important;
		border-color: #fff !important
	}

	.btn-outline-white:not([disabled]):not(.disabled):active,
	.btn-outline-white:not([disabled]):not(.disabled).active,
	.show>.btn-outline-white.dropdown-toggle {
		background-color: transparent !important;
		border-color: #fff !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-white:not([disabled]):not(.disabled):active:focus,
	.btn-outline-white:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-white.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-black {
		color: #fff;
		background-color: #000 !important
	}

	.btn-black:hover {
		color: #fff;
		background-color: #0d0d0d
	}

	.btn-black:focus,
	.btn-black.focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-black:focus,
	.btn-black:active,
	.btn-black.active {
		background-color: #000
	}

	.btn-black.dropdown-toggle {
		background-color: #000 !important
	}

	.btn-black.dropdown-toggle:hover,
	.btn-black.dropdown-toggle:focus {
		background-color: #0d0d0d !important
	}

	.btn-black:not([disabled]):not(.disabled):active,
	.btn-black:not([disabled]):not(.disabled).active,
	.show>.btn-black.dropdown-toggle {
		background-color: #000 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-black:not([disabled]):not(.disabled):active:focus,
	.btn-black:not([disabled]):not(.disabled).active:focus,
	.show>.btn-black.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.black-ic {
		color: #000 !important
	}

	.black-ic:hover,
	.black-ic:focus {
		color: #000
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
		color: #fff
	}

	table.table a.btn.btn-black {
		color: #fff
	}

	.btn-outline-black {
		color: #000 !important;
		background-color: transparent !important;
		border: 2px solid #000 !important
	}

	.btn-outline-black:hover,
	.btn-outline-black:focus,
	.btn-outline-black:active,
	.btn-outline-black:active:focus,
	.btn-outline-black.active {
		color: #000 !important;
		background-color: transparent !important;
		border-color: #000 !important
	}

	.btn-outline-black:not([disabled]):not(.disabled):active,
	.btn-outline-black:not([disabled]):not(.disabled).active,
	.show>.btn-outline-black.dropdown-toggle {
		background-color: transparent !important;
		border-color: #000 !important;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-black:not([disabled]):not(.disabled):active:focus,
	.btn-outline-black:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-black.dropdown-toggle:focus {
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn.purple-gradient {
		color: #fff;
		-webkit-transition: .5s ease;
		transition: .5s ease
	}

	.btn.purple-gradient:hover,
	.btn.purple-gradient:focus,
	.btn.purple-gradient:active,
	.btn.purple-gradient:active:focus .btn.purple-gradient.active {
		background: -webkit-gradient(linear, left top, left bottom, from(#ff88ce), to(#8f8bf7));
		background: linear-gradient(#ff88ce, #8f8bf7)
	}

	.btn.peach-gradient {
		color: #fff;
		-webkit-transition: .5s ease;
		transition: .5s ease
	}

	.btn.peach-gradient:hover,
	.btn.peach-gradient:focus,
	.btn.peach-gradient:active,
	.btn.peach-gradient:active:focus .btn.peach-gradient.active {
		background: -webkit-gradient(linear, left top, left bottom, from(#ffdf89), to(#fc7b7b));
		background: linear-gradient(#ffdf89, #fc7b7b)
	}

	.btn.aqua-gradient {
		color: #fff;
		-webkit-transition: .5s ease;
		transition: .5s ease
	}

	.btn.aqua-gradient:hover,
	.btn.aqua-gradient:focus,
	.btn.aqua-gradient:active,
	.btn.aqua-gradient:active:focus .btn.aqua-gradient.active {
		background: -webkit-gradient(linear, left top, left bottom, from(#3aa2ff), to(#1fffac));
		background: linear-gradient(#3aa2ff, #1fffac)
	}

	.btn.blue-gradient {
		color: #fff;
		-webkit-transition: .5s ease;
		transition: .5s ease
	}

	.btn.blue-gradient:hover,
	.btn.blue-gradient:focus,
	.btn.blue-gradient:active,
	.btn.blue-gradient:active:focus .btn.blue-gradient.active {
		background: -webkit-gradient(linear, left top, left bottom, from(#5ed1fc), to(#3647b3));
		background: linear-gradient(#5ed1fc, #3647b3)
	}

	.btn-warning:not(:disabled):not(.disabled).active,
	.btn-warning:not(:disabled):not(.disabled):active,
	.show>.btn-warning.dropdown-toggle {
		color: #fff
	}

	.card {
		font-weight: 400;
		border: 0;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.card[class*="border"] {
		border: 1px solid #9e9e9e;
		-webkit-box-shadow: none;
		box-shadow: none
	}

	.card .card-body h1,
	.card .card-body h2,
	.card .card-body h3,
	.card .card-body h4,
	.card .card-body h5,
	.card .card-body h6 {
		font-weight: 400
	}

	.card .card-body .card-title a {
		-webkit-transition: 0.2s ease-in-out;
		transition: 0.2s ease-in-out
	}

	.card .card-body .card-title a:hover {
		-webkit-transition: 0.2s ease-in-out;
		transition: 0.2s ease-in-out
	}

	.card .card-body .card-text {
		font-size: .9rem;
		font-weight: 400;
		color: #747373
	}

	.card .md-form label {
		font-weight: 300
	}

	.dropdown .dropdown-menu .dropdown-item:active {
		background-color: #757575
	}

	.md-form.input-group label {
		top: 0;
		margin-bottom: 0
	}

	.md-form.input-group .input-group-text {
		background-color: #e0e0e0
	}

	.md-form.input-group .input-group-text.md-addon {
		font-weight: 500;
		background-color: transparent;
		border: none
	}

	.md-form.input-group .form-control {
		padding: .375rem .75rem;
		margin: 0
	}

	.navbar {
		font-weight: 300;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.navbar form .md-form input {
		margin: 0 5px 1px 8px
	}

	.navbar .breadcrumb {
		padding: .3rem 0 0 1rem;
		margin: 0;
		font-size: 15px;
		font-weight: 300;
		background-color: inherit
	}

	.navbar .breadcrumb .breadcrumb-item {
		color: #fff
	}

	.navbar .breadcrumb .breadcrumb-item.active {
		color: rgba(255, 255, 255, 0.65)
	}

	.navbar .breadcrumb .breadcrumb-item:before {
		color: rgba(255, 255, 255, 0.65)
	}

	.navbar .navbar-toggler {
		border-width: 0;
		outline: 0
	}

	.navbar .nav-flex-icons {
		-webkit-box-orient: horizontal;
		-webkit-box-direction: normal;
		-ms-flex-direction: row;
		flex-direction: row
	}

	@media (max-width: 992px) {
		.navbar .container {
			width: 100%
		}

		.navbar .container .navbar-toggler-right {
			right: 0
		}
	}

	.navbar .nav-item .nav-link {
		display: block
	}

	.navbar .nav-item .nav-link.disabled:active {
		pointer-events: none
	}

	.navbar .nav-item .nav-link .fas,
	.navbar .nav-item .nav-link .fab,
	.navbar .nav-item .nav-link .far {
		padding-right: 3px;
		padding-left: 3px
	}

	@media (max-width: 992px) {
		.navbar .nav-item .nav-link {
			padding-right: 6px;
			padding-left: 6px
		}
	}

	.navbar .dropdown-menu {
		position: absolute !important;
		margin-top: 0
	}

	.navbar .dropdown-menu a {
		padding: 10px;
		font-size: .9375rem;
		font-weight: 300
	}

	.navbar .dropdown-menu a:not(.active) {
		color: #000
	}

	@media (max-width: 600px) {
		.navbar .dropdown-menu form {
			width: 17rem
		}
	}

	@media (min-width: 600px) {
		.navbar .dropdown-menu form {
			width: 22rem
		}
	}

	.navbar.navbar-light .navbar-nav .nav-item .nav-link.disbled {
		color: rgba(0, 0, 0, 0.3)
	}

	.navbar.navbar-light .navbar-nav .nav-item .nav-link.disbled:hover {
		color: rgba(0, 0, 0, 0.3)
	}

	.navbar.navbar-light .navbar-toggler-icon {
		cursor: pointer;
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E")
	}

	.navbar.navbar-light .breadcrumb .nav-item .nav-link,
	.navbar.navbar-light .navbar-nav .nav-item .nav-link {
		color: #000;
		-webkit-transition: .35s;
		transition: .35s
	}

	.navbar.navbar-light .breadcrumb .nav-item .nav-link:hover,
	.navbar.navbar-light .navbar-nav .nav-item .nav-link:hover {
		color: rgba(181, 69, 57, 0.7)
	}

	.navbar.navbar-light .breadcrumb .nav-item.active>.nav-link,
	.navbar.navbar-light .navbar-nav .nav-item.active>.nav-link {
		background-color: rgba(85, 106, 204, 0.1)
	}

	.navbar.navbar-light .breadcrumb .nav-item.active>.nav-link:hover,
	.navbar.navbar-light .navbar-nav .nav-item.active>.nav-link:hover {
		color: #000
	}

	.navbar.navbar-light .navbar-toggler {
		color: #000
	}

	.navbar.navbar-light form .md-form input {
		border-bottom: 1px solid #000
	}

	.navbar.navbar-light form .md-form input:focus:not([readonly]) {
		border-color: #4285f4
	}

	.navbar.navbar-light form .md-form .form-control {
		color: #000
	}

	.navbar.navbar-light form .md-form .form-control::-webkit-input-placeholder {
		font-weight: 300;
		color: #000
	}

	.navbar.navbar-light form .md-form .form-control::-moz-placeholder {
		font-weight: 300;
		color: #000
	}

	.navbar.navbar-light form .md-form .form-control:-ms-input-placeholder {
		font-weight: 300;
		color: #000
	}

	.navbar.navbar-light form .md-form .form-control::-ms-input-placeholder {
		font-weight: 300;
		color: #000
	}

	.navbar.navbar-light form .md-form .form-control::placeholder {
		font-weight: 300;
		color: #000
	}

	.navbar.navbar-dark .navbar-nav .nav-item .nav-link.disbled {
		color: rgba(255, 255, 255, 0.25)
	}

	.navbar.navbar-dark .navbar-nav .nav-item .nav-link.disbled:hover {
		color: rgba(255, 255, 255, 0.25)
	}

	.navbar.navbar-dark .navbar-toggler-icon {
		cursor: pointer;
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E")
	}

	.navbar.navbar-dark .breadcrumb .nav-item .nav-link,
	.navbar.navbar-dark .navbar-nav .nav-item .nav-link {
		color: #fff;
		-webkit-transition: .35s;
		transition: .35s
	}

	.navbar.navbar-dark .breadcrumb .nav-item .nav-link:hover,
	.navbar.navbar-dark .navbar-nav .nav-item .nav-link:hover {
		color: rgba(255, 255, 255, 0.75)
	}

	.navbar.navbar-dark .breadcrumb .nav-item.active>.nav-link,
	.navbar.navbar-dark .navbar-nav .nav-item.active>.nav-link {
		background-color: rgba(255, 255, 255, 0.1)
	}

	.navbar.navbar-dark .breadcrumb .nav-item.active>.nav-link:hover,
	.navbar.navbar-dark .navbar-nav .nav-item.active>.nav-link:hover {
		color: #fff
	}

	.navbar.navbar-dark .navbar-toggler {
		color: #fff
	}

	.navbar.navbar-dark form .md-form input {
		border-bottom: 1px solid #fff
	}

	.navbar.navbar-dark form .md-form input:focus:not([readonly]) {
		border-color: #4285f4
	}

	.navbar.navbar-dark form .md-form .form-control {
		color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::-webkit-input-placeholder {
		font-weight: 300;
		color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::-moz-placeholder {
		font-weight: 300;
		color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control:-ms-input-placeholder {
		font-weight: 300;
		color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::-ms-input-placeholder {
		font-weight: 300;
		color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::placeholder {
		font-weight: 300;
		color: #fff
	}

	@media (min-width: 600px) {
		.navbar.scrolling-navbar {
			padding-top: 12px;
			padding-bottom: 12px;
			-webkit-transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
			transition: background 0.5s ease-in-out, padding 0.5s ease-in-out
		}

		.navbar.scrolling-navbar .navbar-nav>li {
			-webkit-transition-duration: 1s;
			transition-duration: 1s
		}

		.navbar.scrolling-navbar.top-nav-collapse {
			padding-top: 5px;
			padding-bottom: 5px
		}
	}

	.pagination .page-item.active .page-link {
		color: #fff;
		background-color: #4285f4;
		border-radius: .125rem;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		-webkit-transition: all 0.2s linear;
		transition: all 0.2s linear
	}

	.pagination .page-item.active .page-link:hover {
		background-color: #4285f4
	}

	.pagination .page-item.disabled .page-link {
		color: #868e96
	}

	.pagination .page-item .page-link {
		font-size: .9rem;
		color: #212529;
		background-color: transparent;
		border: 0;
		outline: 0;
		-webkit-transition: all 0.3s linear;
		transition: all 0.3s linear
	}

	.pagination .page-item .page-link:hover {
		background-color: #eee;
		border-radius: .125rem;
		-webkit-transition: all 0.3s linear;
		transition: all 0.3s linear
	}

	.pagination .page-item .page-link:focus {
		background-color: transparent;
		-webkit-box-shadow: none;
		box-shadow: none
	}

	.pagination.pagination-lg .page-item .page-link {
		font-size: 1rem
	}

	.pagination.pagination-sm .page-item .page-link {
		font-size: .8rem
	}

	.pagination.pagination-circle .page-item .page-link {
		margin-right: 2px;
		margin-left: 2px;
		border-radius: 50%
	}

	.pagination.pagination-circle .page-item .page-link:hover {
		border-radius: 50%
	}

	.pagination.pagination-circle .page-item.active .page-link {
		border-radius: 50%
	}

	.pagination.pg-blue .page-item.active .page-link {
		background-color: #4285f4
	}

	.pagination.pg-blue .page-item.active .page-link:hover {
		background-color: #4285f4
	}

	.pagination.pg-red .page-item.active .page-link {
		background-color: #ff3547
	}

	.pagination.pg-red .page-item.active .page-link:hover {
		background-color: #ff3547
	}

	.pagination.pg-teal .page-item.active .page-link {
		background-color: #2bbbad
	}

	.pagination.pg-teal .page-item.active .page-link:hover {
		background-color: #2bbbad
	}

	.pagination.pg-dark-grey .page-item.active .page-link {
		background-color: #37474f
	}

	.pagination.pg-dark-grey .page-item.active .page-link:hover {
		background-color: #37474f
	}

	.pagination.pg-dark .page-item.active .page-link {
		background-color: #2e2e2e
	}

	.pagination.pg-dark .page-item.active .page-link:hover {
		background-color: #2e2e2e
	}

	.pagination.pg-blue-grey .page-item.active .page-link {
		background-color: #3f729b
	}

	.pagination.pg-blue-grey .page-item.active .page-link:hover {
		background-color: #3f729b
	}

	.pagination.pg-amber .page-item.active .page-link {
		background-color: #ff6f00
	}

	.pagination.pg-amber .page-item.active .page-link:hover {
		background-color: #ff6f00
	}

	.pagination.pg-purple .page-item.active .page-link {
		background-color: #5e35b1
	}

	.pagination.pg-purple .page-item.active .page-link:hover {
		background-color: #5e35b1
	}

	.badge {
		color: #fff !important;
		border-radius: .125rem;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.badge-pill {
		padding-right: .6em;
		padding-left: .6em;
		border-radius: 10rem
	}

	.badge-primary {
		color: #fff !important;
		background-color: #4285f4 !important
	}

	.badge-danger {
		color: #fff !important;
		background-color: #ff3547 !important
	}

	.badge-warning {
		color: #fff !important;
		background-color: #fb3 !important
	}

	.badge-success {
		color: #fff !important;
		background-color: #00c851 !important
	}

	.badge-info {
		color: #fff !important;
		background-color: #33b5e5 !important
	}

	.badge-default {
		color: #fff !important;
		background-color: #2bbbad !important
	}

	.badge-secondary {
		color: #fff !important;
		background-color: #a6c !important
	}

	.badge-dark {
		color: #fff !important;
		background-color: #212121 !important
	}

	.badge-light {
		color: #000 !important;
		background-color: #e0e0e0 !important
	}

	body.modal-open {
		padding-right: 0 !important;
		overflow: auto
	}

	body.scrollable {
		overflow-y: auto
	}

	.modal-dialog .modal-content {
		border: 0;
		border-radius: .125rem;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.modal-dialog .modal-content .modal-header {
		border-top-left-radius: .125rem;
		border-top-right-radius: .125rem
	}

	.modal-dialog.cascading-modal {
		margin-top: 10%
	}

	.modal-dialog.cascading-modal .close {
		color: #fff;
		text-shadow: none;
		outline: 0;
		opacity: 1
	}

	.modal-dialog.cascading-modal .modal-header {
		padding: 1.5rem;
		margin: -2rem 1rem 1rem 1rem;
		text-align: center;
		border: none;
		border-radius: .125rem;
		-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
		box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.modal-dialog.cascading-modal .modal-header .close {
		margin-right: 1rem
	}

	.modal-dialog.cascading-modal .modal-header .title {
		width: 100%;
		margin-bottom: 0;
		font-size: 1.25rem
	}

	.modal-dialog.cascading-modal .modal-header .title .fas,
	.modal-dialog.cascading-modal .modal-header .title .fab,
	.modal-dialog.cascading-modal .modal-header .title .far {
		margin-right: 9px
	}

	.modal-dialog.cascading-modal .modal-header .social-buttons {
		margin-top: 1.5rem
	}

	.modal-dialog.cascading-modal .modal-header .social-buttons a {
		font-size: 1rem
	}

	.modal-dialog.cascading-modal .modal-c-tabs .md-tabs {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		margin: -1.5rem 1rem 0 1rem;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.modal-dialog.cascading-modal .modal-c-tabs .md-tabs li {
		-webkit-box-flex: 1;
		-ms-flex: 1;
		flex: 1
	}

	.modal-dialog.cascading-modal .modal-c-tabs .md-tabs li a {
		text-align: center
	}

	.modal-dialog.cascading-modal .modal-c-tabs .tab-content {
		padding: 1.7rem 0 0 0
	}

	.modal-dialog.cascading-modal .modal-body,
	.modal-dialog.cascading-modal .modal-footer {
		padding-right: 2rem;
		padding-left: 2rem;
		color: #616161
	}

	.modal-dialog.cascading-modal .modal-body .additional-option,
	.modal-dialog.cascading-modal .modal-footer .additional-option {
		margin-top: 1rem;
		text-align: center
	}

	.modal-dialog.cascading-modal.modal-avatar {
		margin-top: 6rem
	}

	.modal-dialog.cascading-modal.modal-avatar .modal-header {
		margin: -6rem 0 -1rem;
		-webkit-box-shadow: none;
		box-shadow: none
	}

	.modal-dialog.cascading-modal.modal-avatar .modal-header img {
		width: 130px;
		margin-right: auto;
		margin-left: auto;
		-webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
	}

	.modal-dialog.modal-notify .heading {
		padding: .3rem;
		margin: 0;
		font-size: 1.15rem;
		color: #fff
	}

	.modal-dialog.modal-notify .modal-header {
		border: 0;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.modal-dialog.modal-notify .close {
		opacity: 1
	}

	.modal-dialog.modal-notify .modal-body {
		padding: 1.5rem;
		color: #616161
	}

	.modal-dialog.modal-notify.modal-primary .modal-header {
		background-color: #4285f4
	}

	.modal-dialog.modal-notify.modal-primary .fas,
	.modal-dialog.modal-notify.modal-primary .fab,
	.modal-dialog.modal-notify.modal-primary .far {
		color: #4285f4
	}

	.modal-dialog.modal-notify.modal-primary .badge {
		background-color: #4285f4
	}

	.modal-dialog.modal-notify.modal-primary .btn .fas,
	.modal-dialog.modal-notify.modal-primary .btn .fab,
	.modal-dialog.modal-notify.modal-primary .btn .far {
		color: #fff
	}

	.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fas,
	.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fab,
	.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .far {
		color: #4285f4
	}

	.modal-dialog.modal-notify.modal-danger .modal-header {
		background-color: #ff3547
	}

	.modal-dialog.modal-notify.modal-danger .fas,
	.modal-dialog.modal-notify.modal-danger .fab,
	.modal-dialog.modal-notify.modal-danger .far {
		color: #ff3547
	}

	.modal-dialog.modal-notify.modal-danger .badge {
		background-color: #ff3547
	}

	.modal-dialog.modal-notify.modal-danger .btn .fas,
	.modal-dialog.modal-notify.modal-danger .btn .fab,
	.modal-dialog.modal-notify.modal-danger .btn .far {
		color: #fff
	}

	.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .fas,
	.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .fab,
	.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .far {
		color: #ff3547
	}

	.modal-dialog.modal-notify.modal-warning .modal-header {
		background-color: #fb3
	}

	.modal-dialog.modal-notify.modal-warning .fas,
	.modal-dialog.modal-notify.modal-warning .fab,
	.modal-dialog.modal-notify.modal-warning .far {
		color: #fb3
	}

	.modal-dialog.modal-notify.modal-warning .badge {
		background-color: #fb3
	}

	.modal-dialog.modal-notify.modal-warning .btn .fas,
	.modal-dialog.modal-notify.modal-warning .btn .fab,
	.modal-dialog.modal-notify.modal-warning .btn .far {
		color: #fff
	}

	.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .fas,
	.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .fab,
	.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .far {
		color: #fb3
	}

	.modal-dialog.modal-notify.modal-success .modal-header {
		background-color: #00c851
	}

	.modal-dialog.modal-notify.modal-success .fas,
	.modal-dialog.modal-notify.modal-success .fab,
	.modal-dialog.modal-notify.modal-success .far {
		color: #00c851
	}

	.modal-dialog.modal-notify.modal-success .badge {
		background-color: #00c851
	}

	.modal-dialog.modal-notify.modal-success .btn .fas,
	.modal-dialog.modal-notify.modal-success .btn .fab,
	.modal-dialog.modal-notify.modal-success .btn .far {
		color: #fff
	}

	.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .fas,
	.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .fab,
	.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .far {
		color: #00c851
	}

	.modal-dialog.modal-notify.modal-info .modal-header {
		background-color: #33b5e5
	}

	.modal-dialog.modal-notify.modal-info .fas,
	.modal-dialog.modal-notify.modal-info .fab,
	.modal-dialog.modal-notify.modal-info .far {
		color: #33b5e5
	}

	.modal-dialog.modal-notify.modal-info .badge {
		background-color: #33b5e5
	}

	.modal-dialog.modal-notify.modal-info .btn .fas,
	.modal-dialog.modal-notify.modal-info .btn .fab,
	.modal-dialog.modal-notify.modal-info .btn .far {
		color: #fff
	}

	.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .fas,
	.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .fab,
	.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .far {
		color: #33b5e5
	}

	.modal {
		padding-right: 0 !important
	}

	@media (min-width: 768px) {
		.modal .modal-dialog.modal-top {
			top: 0
		}

		.modal .modal-dialog.modal-left {
			left: 0
		}

		.modal .modal-dialog.modal-right {
			right: 0
		}

		.modal .modal-dialog.modal-bottom {
			bottom: 0
		}

		.modal .modal-dialog.modal-top-left {
			top: 10px;
			left: 10px
		}

		.modal .modal-dialog.modal-top-right {
			top: 10px;
			right: 10px
		}

		.modal .modal-dialog.modal-bottom-left {
			bottom: 10px;
			left: 10px
		}

		.modal .modal-dialog.modal-bottom-right {
			right: 10px;
			bottom: 10px
		}
	}

	.modal.fade.top:not(.show) .modal-dialog {
		-webkit-transform: translate3d(0, -25%, 0);
		transform: translate3d(0, -25%, 0)
	}

	.modal.fade.left:not(.show) .modal-dialog {
		-webkit-transform: translate3d(-25%, 0, 0);
		transform: translate3d(-25%, 0, 0)
	}

	.modal.fade.right:not(.show) .modal-dialog {
		-webkit-transform: translate3d(25%, 0, 0);
		transform: translate3d(25%, 0, 0)
	}

	.modal.fade.bottom:not(.show) .modal-dialog {
		-webkit-transform: translate3d(0, 25%, 0);
		transform: translate3d(0, 25%, 0)
	}

	@media (min-width: 992px) {
		.modal.modal-scrolling {
			position: relative
		}

		.modal.modal-scrolling .modal-dialog {
			position: fixed;
			z-index: 1050
		}

		.modal.modal-content-clickable {
			top: auto;
			bottom: auto
		}

		.modal.modal-content-clickable .modal-dialog {
			position: fixed
		}

		.modal .modal-fluid {
			width: 100%;
			max-width: 100%
		}

		.modal .modal-fluid .modal-content {
			width: 100%
		}

		.modal .modal-frame {
			position: absolute;
			width: 100%;
			max-width: 100% !important;
			margin: 0 !important
		}

		.modal .modal-frame.modal-bottom {
			bottom: 0
		}

		.modal .modal-full-height {
			position: absolute;
			top: 0;
			right: 0;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			width: 400px;
			height: auto;
			min-height: 100%;
			margin: 0
		}

		.modal .modal-full-height.modal-top,
		.modal .modal-full-height.modal-bottom {
			display: block;
			width: 100%;
			max-width: 100%;
			height: auto
		}

		.modal .modal-full-height.modal-top {
			bottom: auto
		}

		.modal .modal-full-height.modal-bottom {
			top: auto;
			min-height: 0
		}

		.modal .modal-full-height .modal-content {
			width: 100%
		}

		.modal .modal-full-height.modal-lg {
			width: 90%;
			max-width: 90%
		}
	}

	@media (min-width: 992px) and (min-width: 992px) {
		.modal .modal-full-height.modal-lg {
			width: 800px;
			max-width: 800px
		}
	}

	@media (min-width: 992px) and (min-width: 1200px) {
		.modal .modal-full-height.modal-lg {
			width: 1000px;
			max-width: 1000px
		}
	}

	@media (min-width: 992px) {
		.modal .modal-side {
			position: absolute;
			right: 10px;
			bottom: 10px;
			width: 400px;
			margin: 0
		}
	}

	.carousel .carousel-control-prev-icon,
	.carousel .carousel-control-next-icon {
		width: 20px;
		height: 20px
	}

	.carousel .carousel-control-prev-icon {
		background-image: url(../img/svg/arrow_left.svg)
	}

	.carousel .carousel-control-next-icon {
		background-image: url(../img/svg/arrow_right.svg)
	}

	.carousel .carousel-indicators li {
		width: .625rem;
		height: .625rem;
		cursor: pointer;
		border-radius: 50%
	}

	.carousel-fade .carousel-item {
		opacity: 0;
		-webkit-transition-duration: .6s;
		transition-duration: .6s;
		-webkit-transition-property: opacity;
		transition-property: opacity
	}

	.carousel-fade .carousel-item.active,
	.carousel-fade .carousel-item-next.carousel-item-left,
	.carousel-fade .carousel-item-prev.carousel-item-right {
		opacity: 1
	}

	.carousel-fade .carousel-item-left.active,
	.carousel-fade .carousel-item-right.active {
		opacity: 0
	}

	.carousel-fade .carousel-item-next,
	.carousel-fade .carousel-item-prev,
	.carousel-fade .carousel-item.active,
	.carousel-fade .carousel-item-left.active,
	.carousel-fade .carousel-item-prev.active {
		-webkit-transform: translateX(0);
		transform: translateX(0)
	}

	@supports (transform-style: preserve-3d) {

		.carousel-fade .carousel-item-next,
		.carousel-fade .carousel-item-prev,
		.carousel-fade .carousel-item.active,
		.carousel-fade .carousel-item-left.active,
		.carousel-fade .carousel-item-prev.active {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.md-form {
		position: relative;
		margin-top: 1.5rem;
		margin-bottom: 1.5rem
	}

	.md-form input:not([type]),
	.md-form input[type="text"]:not(.browser-default),
	.md-form input[type="password"]:not(.browser-default),
	.md-form input[type="email"]:not(.browser-default),
	.md-form input[type="url"]:not(.browser-default),
	.md-form input[type="time"]:not(.browser-default),
	.md-form input[type="date"]:not(.browser-default),
	.md-form input[type="datetime"]:not(.browser-default),
	.md-form input[type="datetime-local"]:not(.browser-default),
	.md-form input[type="tel"]:not(.browser-default),
	.md-form input[type="number"]:not(.browser-default),
	.md-form input[type="search"]:not(.browser-default),
	.md-form input[type="search-md"],
	.md-form textarea.md-textarea {
		-webkit-box-sizing: content-box;
		box-sizing: content-box;
		background-color: transparent;
		border: none;
		border-bottom: 1px solid #ced4da;
		border-radius: 0;
		outline: none;
		-webkit-box-shadow: none;
		box-shadow: none;
		-webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
		transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
		transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out
	}

	.md-form input:not([type]):focus:not([readonly]),
	.md-form input[type="text"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="password"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="email"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="url"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="time"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="date"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="datetime"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="datetime-local"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="tel"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="number"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="search"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="search-md"]:focus:not([readonly]),
	.md-form textarea.md-textarea:focus:not([readonly]) {
		border-bottom: 1px solid #4285f4;
		-webkit-box-shadow: 0 1px 0 0 #4285f4;
		box-shadow: 0 1px 0 0 #4285f4
	}

	.md-form input:not([type]):focus:not([readonly])+label,
	.md-form input[type="text"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="password"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="email"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="url"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="time"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="date"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="datetime"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="datetime-local"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="tel"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="number"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="search"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="search-md"]:focus:not([readonly])+label,
	.md-form textarea.md-textarea:focus:not([readonly])+label {
		color: #4285f4
	}

	.md-form input:not([type])+label::after,
	.md-form input[type="text"]:not(.browser-default)+label::after,
	.md-form input[type="password"]:not(.browser-default)+label::after,
	.md-form input[type="email"]:not(.browser-default)+label::after,
	.md-form input[type="url"]:not(.browser-default)+label::after,
	.md-form input[type="time"]:not(.browser-default)+label::after,
	.md-form input[type="date"]:not(.browser-default)+label::after,
	.md-form input[type="datetime"]:not(.browser-default)+label::after,
	.md-form input[type="datetime-local"]:not(.browser-default)+label::after,
	.md-form input[type="tel"]:not(.browser-default)+label::after,
	.md-form input[type="number"]:not(.browser-default)+label::after,
	.md-form input[type="search"]:not(.browser-default)+label::after,
	.md-form input[type="search-md"]+label::after,
	.md-form textarea.md-textarea+label::after {
		position: absolute;
		top: 65px;
		display: block;
		content: "";
		opacity: 0;
		-webkit-transition: 0.2s opacity ease-out, 0.2s color ease-out;
		transition: 0.2s opacity ease-out, 0.2s color ease-out
	}

	.md-form input:not([type]).valid,
	.md-form input:not([type]):focus.valid,
	.md-form input[type="text"]:not(.browser-default).valid,
	.md-form input[type="text"]:not(.browser-default):focus.valid,
	.md-form input[type="password"]:not(.browser-default).valid,
	.md-form input[type="password"]:not(.browser-default):focus.valid,
	.md-form input[type="email"]:not(.browser-default).valid,
	.md-form input[type="email"]:not(.browser-default):focus.valid,
	.md-form input[type="url"]:not(.browser-default).valid,
	.md-form input[type="url"]:not(.browser-default):focus.valid,
	.md-form input[type="time"]:not(.browser-default).valid,
	.md-form input[type="time"]:not(.browser-default):focus.valid,
	.md-form input[type="date"]:not(.browser-default).valid,
	.md-form input[type="date"]:not(.browser-default):focus.valid,
	.md-form input[type="datetime"]:not(.browser-default).valid,
	.md-form input[type="datetime"]:not(.browser-default):focus.valid,
	.md-form input[type="datetime-local"]:not(.browser-default).valid,
	.md-form input[type="datetime-local"]:not(.browser-default):focus.valid,
	.md-form input[type="tel"]:not(.browser-default).valid,
	.md-form input[type="tel"]:not(.browser-default):focus.valid,
	.md-form input[type="number"]:not(.browser-default).valid,
	.md-form input[type="number"]:not(.browser-default):focus.valid,
	.md-form input[type="search"]:not(.browser-default).valid,
	.md-form input[type="search"]:not(.browser-default):focus.valid,
	.md-form input[type="search-md"].valid,
	.md-form input[type="search-md"]:focus.valid,
	.md-form textarea.md-textarea.valid,
	.md-form textarea.md-textarea:focus.valid {
		border-bottom: 1px solid #00c851;
		-webkit-box-shadow: 0 1px 0 0 #00c851;
		box-shadow: 0 1px 0 0 #00c851
	}

	.md-form input:not([type]).valid+label:after,
	.md-form input:not([type]):focus.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).valid+label:after,
	.md-form input[type="text"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).valid+label:after,
	.md-form input[type="password"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).valid+label:after,
	.md-form input[type="email"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).valid+label:after,
	.md-form input[type="url"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).valid+label:after,
	.md-form input[type="time"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).valid+label:after,
	.md-form input[type="date"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).valid+label:after,
	.md-form input[type="tel"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).valid+label:after,
	.md-form input[type="number"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).valid+label:after,
	.md-form input[type="search"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="search-md"].valid+label:after,
	.md-form input[type="search-md"]:focus.valid+label:after,
	.md-form textarea.md-textarea.valid+label:after,
	.md-form textarea.md-textarea:focus.valid+label:after {
		color: #00c851;
		content: attr(data-success);
		opacity: 1
	}

	.md-form input:not([type]).invalid,
	.md-form input:not([type]):focus.invalid,
	.md-form input[type="text"]:not(.browser-default).invalid,
	.md-form input[type="text"]:not(.browser-default):focus.invalid,
	.md-form input[type="password"]:not(.browser-default).invalid,
	.md-form input[type="password"]:not(.browser-default):focus.invalid,
	.md-form input[type="email"]:not(.browser-default).invalid,
	.md-form input[type="email"]:not(.browser-default):focus.invalid,
	.md-form input[type="url"]:not(.browser-default).invalid,
	.md-form input[type="url"]:not(.browser-default):focus.invalid,
	.md-form input[type="time"]:not(.browser-default).invalid,
	.md-form input[type="time"]:not(.browser-default):focus.invalid,
	.md-form input[type="date"]:not(.browser-default).invalid,
	.md-form input[type="date"]:not(.browser-default):focus.invalid,
	.md-form input[type="datetime"]:not(.browser-default).invalid,
	.md-form input[type="datetime"]:not(.browser-default):focus.invalid,
	.md-form input[type="datetime-local"]:not(.browser-default).invalid,
	.md-form input[type="datetime-local"]:not(.browser-default):focus.invalid,
	.md-form input[type="tel"]:not(.browser-default).invalid,
	.md-form input[type="tel"]:not(.browser-default):focus.invalid,
	.md-form input[type="number"]:not(.browser-default).invalid,
	.md-form input[type="number"]:not(.browser-default):focus.invalid,
	.md-form input[type="search"]:not(.browser-default).invalid,
	.md-form input[type="search"]:not(.browser-default):focus.invalid,
	.md-form input[type="search-md"].invalid,
	.md-form input[type="search-md"]:focus.invalid,
	.md-form textarea.md-textarea.invalid,
	.md-form textarea.md-textarea:focus.invalid {
		border-bottom: 1px solid #f44336;
		-webkit-box-shadow: 0 1px 0 0 #f44336;
		box-shadow: 0 1px 0 0 #f44336
	}

	.md-form input:not([type]).invalid+label:after,
	.md-form input:not([type]):focus.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).invalid+label:after,
	.md-form input[type="text"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).invalid+label:after,
	.md-form input[type="password"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).invalid+label:after,
	.md-form input[type="email"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).invalid+label:after,
	.md-form input[type="url"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).invalid+label:after,
	.md-form input[type="time"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).invalid+label:after,
	.md-form input[type="date"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).invalid+label:after,
	.md-form input[type="number"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).invalid+label:after,
	.md-form input[type="search"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="search-md"].invalid+label:after,
	.md-form input[type="search-md"]:focus.invalid+label:after,
	.md-form textarea.md-textarea.invalid+label:after,
	.md-form textarea.md-textarea:focus.invalid+label:after {
		color: #f44336;
		content: attr(data-error);
		opacity: 1
	}

	.md-form input:not([type]).form-control.valid+label:after,
	.md-form input:not([type]).form-control:focus.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="search-md"].form-control.valid+label:after,
	.md-form input[type="search-md"].form-control:focus.valid+label:after,
	.md-form textarea.md-textarea.form-control.valid+label:after,
	.md-form textarea.md-textarea.form-control:focus.valid+label:after {
		top: 4.1rem
	}

	.md-form input:not([type]).form-control.invalid+label:after,
	.md-form input:not([type]).form-control:focus.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="search-md"].form-control.invalid+label:after,
	.md-form input[type="search-md"].form-control:focus.invalid+label:after,
	.md-form textarea.md-textarea.form-control.invalid+label:after,
	.md-form textarea.md-textarea.form-control:focus.invalid+label:after {
		top: 4rem
	}

	.md-form input:not([type]).form-control-lg.valid+label:after,
	.md-form input:not([type]).form-control-lg:focus.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="search-md"].form-control-lg.valid+label:after,
	.md-form input[type="search-md"].form-control-lg:focus.valid+label:after,
	.md-form textarea.md-textarea.form-control-lg.valid+label:after,
	.md-form textarea.md-textarea.form-control-lg:focus.valid+label:after {
		top: 4.6rem
	}

	.md-form input:not([type]).form-control-lg.invalid+label:after,
	.md-form input:not([type]).form-control-lg:focus.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="search-md"].form-control-lg.invalid+label:after,
	.md-form input[type="search-md"].form-control-lg:focus.invalid+label:after,
	.md-form textarea.md-textarea.form-control-lg.invalid+label:after,
	.md-form textarea.md-textarea.form-control-lg:focus.invalid+label:after {
		top: 4.6rem
	}

	.md-form input:not([type]).form-control-sm.valid+label:after,
	.md-form input:not([type]).form-control-sm:focus.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="search-md"].form-control-sm.valid+label:after,
	.md-form input[type="search-md"].form-control-sm:focus.valid+label:after,
	.md-form textarea.md-textarea.form-control-sm.valid+label:after,
	.md-form textarea.md-textarea.form-control-sm:focus.valid+label:after {
		top: 3.7rem
	}

	.md-form input:not([type]).form-control-sm.invalid+label:after,
	.md-form input:not([type]).form-control-sm:focus.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="search-md"].form-control-sm.invalid+label:after,
	.md-form input[type="search-md"].form-control-sm:focus.invalid+label:after,
	.md-form textarea.md-textarea.form-control-sm.invalid+label:after,
	.md-form textarea.md-textarea.form-control-sm:focus.invalid+label:after {
		top: 3.6rem
	}

	.md-form>input[type="date"]:not(.browser-default)+label {
		-webkit-transform: translateY(-27px) scale(0.8);
		transform: translateY(-27px) scale(0.8);
		-webkit-transform-origin: 0 0;
		transform-origin: 0 0
	}

	.md-form>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label,
	.md-form>input[type="time"]:not(.browser-default)+label {
		font-size: .8rem;
		-webkit-transform: translateY(-25px);
		transform: translateY(-25px);
		-webkit-transform-origin: 0 0;
		transform-origin: 0 0
	}

	.md-form .was-validated input[type="text"]:valid+label {
		color: #00c851 !important
	}

	.md-form .was-validated input[type="text"]:invalid+label {
		color: #f44336 !important
	}

	.md-form .was-validated .form-control:valid:focus {
		-webkit-box-shadow: 0 1px 0 0 #00c851 !important;
		box-shadow: 0 1px 0 0 #00c851 !important
	}

	.md-form .was-validated .form-control:valid {
		border-color: #00c851 !important
	}

	.md-form .was-validated .form-control:invalid:focus {
		-webkit-box-shadow: 0 1px 0 0 #f44336 !important;
		box-shadow: 0 1px 0 0 #f44336 !important
	}

	.md-form .was-validated .form-control:invalid {
		border-color: #f44336 !important
	}

	.md-form .form-control {
		height: auto;
		padding: .6rem 0 .4rem 0;
		margin: 0 0 .5rem 0;
		background-color: transparent;
		border-radius: 0
	}

	.md-form .form-control:focus {
		-webkit-box-shadow: none;
		box-shadow: none
	}

	.md-form .form-control:disabled,
	.md-form .form-control[readonly] {
		background-color: transparent;
		border-bottom: 1px solid #bdbdbd
	}

	.md-form .form-control.is-valid {
		border-color: #00c851
	}

	.md-form .form-control.is-valid:focus {
		border-color: #00c851 !important;
		-webkit-box-shadow: 0 1px 0 0 #00c851 !important;
		box-shadow: 0 1px 0 0 #00c851 !important
	}

	.md-form .form-control.is-invalid {
		border-color: #f44336
	}

	.md-form .form-control.is-invalid:focus {
		border-color: #f44336 !important;
		-webkit-box-shadow: 0 1px 0 0 #f44336 !important;
		box-shadow: 0 1px 0 0 #f44336 !important
	}

	.md-form .form-control.is-valid,
	.md-form .form-control.is-invalid {
		background-position: center right !important
	}

	.md-form .validate {
		margin-bottom: 2.5rem
	}

	.md-form label {
		font-size: 1rem
	}

	.md-form label.active {
		font-size: 1rem
	}

	.md-form .prefix {
		top: .25rem;
		font-size: 1.75rem
	}

	.md-form .prefix~input,
	.md-form .prefix~textarea {
		width: calc(100% - 2.5rem);
		margin-left: 2.5rem
	}

	.md-form .prefix~label {
		margin-left: 2.5rem
	}

	.md-form .prefix~.form-text {
		margin-left: 2.6rem
	}

	.md-form label {
		position: absolute;
		top: 0;
		left: 0;
		font-size: 1rem;
		color: #757575;
		cursor: text;
		-webkit-transition: color .2s ease-out, -webkit-transform .2s ease-out;
		transition: color .2s ease-out, -webkit-transform .2s ease-out;
		transition: transform .2s ease-out, color .2s ease-out;
		transition: transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;
		-webkit-transform: translateY(12px);
		transform: translateY(12px);
		-webkit-transform-origin: 0% 100%;
		transform-origin: 0% 100%
	}

	.md-form label.active {
		-webkit-transform: translateY(-14px) scale(0.8);
		transform: translateY(-14px) scale(0.8)
	}

	.md-form .prefix {
		position: absolute;
		-webkit-transition: color 0.2s;
		transition: color 0.2s
	}

	.md-form .prefix.active {
		color: #4285f4
	}

	.md-form.form-lg .validate {
		margin-bottom: 2.8rem
	}

	.md-form.form-lg label {
		font-size: 1.25rem
	}

	.md-form.form-lg label.active {
		font-size: 1.15rem
	}

	.md-form.form-lg .prefix {
		top: .4rem;
		font-size: 2rem
	}

	.md-form.form-lg .prefix~input,
	.md-form.form-lg .prefix~textarea {
		width: calc(100% - 3rem);
		margin-left: 3rem
	}

	.md-form.form-lg .prefix~label {
		margin-left: 3rem
	}

	.md-form.form-lg .prefix~.form-text {
		margin-left: 3.1rem
	}

	.md-form.form-sm .validate {
		margin-bottom: 2.3rem
	}

	.md-form.form-sm label {
		font-size: .875rem
	}

	.md-form.form-sm label.active {
		font-size: .95rem
	}

	.md-form.form-sm .prefix {
		top: .35rem;
		font-size: 1.5rem
	}

	.md-form.form-sm .prefix~input,
	.md-form.form-sm .prefix~textarea {
		width: calc(100% - 2rem);
		margin-left: 2rem
	}

	.md-form.form-sm .prefix~label {
		margin-left: 2rem
	}

	.md-form.form-sm .prefix~.form-text {
		margin-left: 2rem
	}

	.md-form textarea.md-textarea {
		padding: 1.5rem 0;
		overflow-y: hidden
	}

	.md-form textarea.md-textarea-auto {
		padding: 0;
		padding-top: 1.5rem
	}

	.md-form.md-outline {
		position: relative;
		margin-top: 1.5rem;
		margin-bottom: 1.5rem
	}

	.md-form.md-outline input[type="text"],
	.md-form.md-outline input[type="password"],
	.md-form.md-outline input[type="email"],
	.md-form.md-outline input[type="url"],
	.md-form.md-outline input[type="time"],
	.md-form.md-outline input[type="date"],
	.md-form.md-outline input[type="datetime-local"],
	.md-form.md-outline input[type="tel"],
	.md-form.md-outline input[type="number"],
	.md-form.md-outline input[type="search-md"],
	.md-form.md-outline input[type="search"],
	.md-form.md-outline textarea.md-textarea {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		background-color: transparent;
		border: 1px solid #dadce0;
		border-radius: 4px;
		outline: none;
		-webkit-box-shadow: none;
		box-shadow: none;
		-webkit-transition: all .3s;
		transition: all .3s
	}

	.md-form.md-outline input[type="text"]:focus:not([readonly]),
	.md-form.md-outline input[type="password"]:focus:not([readonly]),
	.md-form.md-outline input[type="email"]:focus:not([readonly]),
	.md-form.md-outline input[type="url"]:focus:not([readonly]),
	.md-form.md-outline input[type="time"]:focus:not([readonly]),
	.md-form.md-outline input[type="date"]:focus:not([readonly]),
	.md-form.md-outline input[type="datetime-local"]:focus:not([readonly]),
	.md-form.md-outline input[type="tel"]:focus:not([readonly]),
	.md-form.md-outline input[type="number"]:focus:not([readonly]),
	.md-form.md-outline input[type="search-md"]:focus:not([readonly]),
	.md-form.md-outline input[type="search"]:focus:not([readonly]),
	.md-form.md-outline textarea.md-textarea:focus:not([readonly]) {
		border-color: #4285f4;
		-webkit-box-shadow: inset 0 0 0 1px #4285f4;
		box-shadow: inset 0 0 0 1px #4285f4
	}

	.md-form.md-outline input[type="text"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="password"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="email"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="url"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="time"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="date"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="datetime-local"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="tel"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="number"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="search-md"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="search"]:focus:not([readonly])+label,
	.md-form.md-outline textarea.md-textarea:focus:not([readonly])+label {
		color: #4285f4
	}

	.md-form.md-outline input[type="text"].valid,
	.md-form.md-outline input[type="text"]:focus.valid,
	.md-form.md-outline input[type="password"].valid,
	.md-form.md-outline input[type="password"]:focus.valid,
	.md-form.md-outline input[type="email"].valid,
	.md-form.md-outline input[type="email"]:focus.valid,
	.md-form.md-outline input[type="url"].valid,
	.md-form.md-outline input[type="url"]:focus.valid,
	.md-form.md-outline input[type="time"].valid,
	.md-form.md-outline input[type="time"]:focus.valid,
	.md-form.md-outline input[type="date"].valid,
	.md-form.md-outline input[type="date"]:focus.valid,
	.md-form.md-outline input[type="datetime-local"].valid,
	.md-form.md-outline input[type="datetime-local"]:focus.valid,
	.md-form.md-outline input[type="tel"].valid,
	.md-form.md-outline input[type="tel"]:focus.valid,
	.md-form.md-outline input[type="number"].valid,
	.md-form.md-outline input[type="number"]:focus.valid,
	.md-form.md-outline input[type="search-md"].valid,
	.md-form.md-outline input[type="search-md"]:focus.valid,
	.md-form.md-outline input[type="search"].valid,
	.md-form.md-outline input[type="search"]:focus.valid,
	.md-form.md-outline textarea.md-textarea.valid,
	.md-form.md-outline textarea.md-textarea:focus.valid {
		border-color: #00c851;
		-webkit-box-shadow: inset 0 0 0 1px #00c851;
		box-shadow: inset 0 0 0 1px #00c851
	}

	.md-form.md-outline input[type="text"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="text"].valid+label:after,
	.md-form.md-outline input[type="text"]:focus.valid+label:after,
	.md-form.md-outline input[type="password"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="password"].valid+label:after,
	.md-form.md-outline input[type="password"]:focus.valid+label:after,
	.md-form.md-outline input[type="email"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="email"].valid+label:after,
	.md-form.md-outline input[type="email"]:focus.valid+label:after,
	.md-form.md-outline input[type="url"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="url"].valid+label:after,
	.md-form.md-outline input[type="url"]:focus.valid+label:after,
	.md-form.md-outline input[type="time"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="time"].valid+label:after,
	.md-form.md-outline input[type="time"]:focus.valid+label:after,
	.md-form.md-outline input[type="date"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="date"].valid+label:after,
	.md-form.md-outline input[type="date"]:focus.valid+label:after,
	.md-form.md-outline input[type="datetime-local"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="datetime-local"].valid+label:after,
	.md-form.md-outline input[type="datetime-local"]:focus.valid+label:after,
	.md-form.md-outline input[type="tel"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="tel"].valid+label:after,
	.md-form.md-outline input[type="tel"]:focus.valid+label:after,
	.md-form.md-outline input[type="number"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="number"].valid+label:after,
	.md-form.md-outline input[type="number"]:focus.valid+label:after,
	.md-form.md-outline input[type="search-md"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="search-md"].valid+label:after,
	.md-form.md-outline input[type="search-md"]:focus.valid+label:after,
	.md-form.md-outline input[type="search"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="search"].valid+label:after,
	.md-form.md-outline input[type="search"]:focus.valid+label:after,
	.md-form.md-outline textarea.md-textarea:focus:not([readonly]).valid+label,
	.md-form.md-outline textarea.md-textarea.valid+label:after,
	.md-form.md-outline textarea.md-textarea:focus.valid+label:after {
		color: #00c851;
		content: attr(data-success);
		opacity: 1
	}

	.md-form.md-outline input[type="text"].invalid,
	.md-form.md-outline input[type="text"]:focus.invalid,
	.md-form.md-outline input[type="password"].invalid,
	.md-form.md-outline input[type="password"]:focus.invalid,
	.md-form.md-outline input[type="email"].invalid,
	.md-form.md-outline input[type="email"]:focus.invalid,
	.md-form.md-outline input[type="url"].invalid,
	.md-form.md-outline input[type="url"]:focus.invalid,
	.md-form.md-outline input[type="time"].invalid,
	.md-form.md-outline input[type="time"]:focus.invalid,
	.md-form.md-outline input[type="date"].invalid,
	.md-form.md-outline input[type="date"]:focus.invalid,
	.md-form.md-outline input[type="datetime-local"].invalid,
	.md-form.md-outline input[type="datetime-local"]:focus.invalid,
	.md-form.md-outline input[type="tel"].invalid,
	.md-form.md-outline input[type="tel"]:focus.invalid,
	.md-form.md-outline input[type="number"].invalid,
	.md-form.md-outline input[type="number"]:focus.invalid,
	.md-form.md-outline input[type="search-md"].invalid,
	.md-form.md-outline input[type="search-md"]:focus.invalid,
	.md-form.md-outline input[type="search"].invalid,
	.md-form.md-outline input[type="search"]:focus.invalid,
	.md-form.md-outline textarea.md-textarea.invalid,
	.md-form.md-outline textarea.md-textarea:focus.invalid {
		border-color: #f44336;
		-webkit-box-shadow: inset 0 0 0 1px #f44336;
		box-shadow: inset 0 0 0 1px #f44336
	}

	.md-form.md-outline input[type="text"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="text"].invalid+label:after,
	.md-form.md-outline input[type="text"]:focus.invalid+label:after,
	.md-form.md-outline input[type="password"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="password"].invalid+label:after,
	.md-form.md-outline input[type="password"]:focus.invalid+label:after,
	.md-form.md-outline input[type="email"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="email"].invalid+label:after,
	.md-form.md-outline input[type="email"]:focus.invalid+label:after,
	.md-form.md-outline input[type="url"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="url"].invalid+label:after,
	.md-form.md-outline input[type="url"]:focus.invalid+label:after,
	.md-form.md-outline input[type="time"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="time"].invalid+label:after,
	.md-form.md-outline input[type="time"]:focus.invalid+label:after,
	.md-form.md-outline input[type="date"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="date"].invalid+label:after,
	.md-form.md-outline input[type="date"]:focus.invalid+label:after,
	.md-form.md-outline input[type="datetime-local"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="datetime-local"].invalid+label:after,
	.md-form.md-outline input[type="datetime-local"]:focus.invalid+label:after,
	.md-form.md-outline input[type="tel"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="tel"].invalid+label:after,
	.md-form.md-outline input[type="tel"]:focus.invalid+label:after,
	.md-form.md-outline input[type="number"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="number"].invalid+label:after,
	.md-form.md-outline input[type="number"]:focus.invalid+label:after,
	.md-form.md-outline input[type="search-md"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="search-md"].invalid+label:after,
	.md-form.md-outline input[type="search-md"]:focus.invalid+label:after,
	.md-form.md-outline input[type="search"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="search"].invalid+label:after,
	.md-form.md-outline input[type="search"]:focus.invalid+label:after,
	.md-form.md-outline textarea.md-textarea:focus:not([readonly]).invalid+label,
	.md-form.md-outline textarea.md-textarea.invalid+label:after,
	.md-form.md-outline textarea.md-textarea:focus.invalid+label:after {
		color: #f44336;
		content: attr(data-error);
		opacity: 1
	}

	.md-form.md-outline input[type="text"].form-control.valid+label:after,
	.md-form.md-outline input[type="text"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="password"].form-control.valid+label:after,
	.md-form.md-outline input[type="password"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="email"].form-control.valid+label:after,
	.md-form.md-outline input[type="email"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="url"].form-control.valid+label:after,
	.md-form.md-outline input[type="url"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="time"].form-control.valid+label:after,
	.md-form.md-outline input[type="time"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="date"].form-control.valid+label:after,
	.md-form.md-outline input[type="date"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="datetime-local"].form-control.valid+label:after,
	.md-form.md-outline input[type="datetime-local"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="tel"].form-control.valid+label:after,
	.md-form.md-outline input[type="tel"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="number"].form-control.valid+label:after,
	.md-form.md-outline input[type="number"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="search-md"].form-control.valid+label:after,
	.md-form.md-outline input[type="search-md"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="search"].form-control.valid+label:after,
	.md-form.md-outline input[type="search"].form-control:focus.valid+label:after,
	.md-form.md-outline textarea.md-textarea.form-control.valid+label:after,
	.md-form.md-outline textarea.md-textarea.form-control:focus.valid+label:after {
		position: absolute;
		top: 4rem;
		left: 0
	}

	.md-form.md-outline input[type="text"].form-control.invalid+label:after,
	.md-form.md-outline input[type="text"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="password"].form-control.invalid+label:after,
	.md-form.md-outline input[type="password"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="email"].form-control.invalid+label:after,
	.md-form.md-outline input[type="email"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="url"].form-control.invalid+label:after,
	.md-form.md-outline input[type="url"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="time"].form-control.invalid+label:after,
	.md-form.md-outline input[type="time"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="date"].form-control.invalid+label:after,
	.md-form.md-outline input[type="date"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="datetime-local"].form-control.invalid+label:after,
	.md-form.md-outline input[type="datetime-local"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="tel"].form-control.invalid+label:after,
	.md-form.md-outline input[type="tel"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="number"].form-control.invalid+label:after,
	.md-form.md-outline input[type="number"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="search-md"].form-control.invalid+label:after,
	.md-form.md-outline input[type="search-md"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="search"].form-control.invalid+label:after,
	.md-form.md-outline input[type="search"].form-control:focus.invalid+label:after,
	.md-form.md-outline textarea.md-textarea.form-control.invalid+label:after,
	.md-form.md-outline textarea.md-textarea.form-control:focus.invalid+label:after {
		position: absolute;
		top: 4rem;
		left: 0
	}

	.md-form.md-outline>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label,
	.md-form.md-outline>input[type="time"]:not(.browser-default)+label {
		left: 8px;
		padding-right: 5px;
		padding-left: 5px;
		font-size: 1rem;
		font-weight: 500;
		background: #fff;
		-webkit-transform: translateY(-9px) scale(0.8);
		transform: translateY(-9px) scale(0.8);
		-webkit-transform-origin: 0 0;
		transform-origin: 0 0
	}

	.md-form.md-outline>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label.active,
	.md-form.md-outline>input[type="time"]:not(.browser-default)+label.active {
		-webkit-transform: translateY(-9px) scale(0.8);
		transform: translateY(-9px) scale(0.8);
		-webkit-transform-origin: 0 0;
		transform-origin: 0 0
	}

	@-webkit-keyframes autofill {
		to {
			color: #495057;
			background: transparent
		}
	}

	@keyframes autofill {
		to {
			color: #495057;
			background: transparent
		}
	}

	.md-form.md-outline input:-webkit-autofill {
		-webkit-animation-name: autofill;
		animation-name: autofill;
		-webkit-animation-fill-mode: both;
		animation-fill-mode: both
	}

	.md-form.md-outline .form-control {
		padding: .375rem .75rem
	}

	.md-form.md-outline label {
		position: absolute;
		top: 0;
		left: 0;
		padding-left: 10px;
		font-size: 1rem;
		color: #757575;
		cursor: text;
		-webkit-transition: color .2s ease-out, -webkit-transform .2s ease-out;
		transition: color .2s ease-out, -webkit-transform .2s ease-out;
		transition: transform .2s ease-out, color .2s ease-out;
		transition: transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;
		-webkit-transform: translateY(9px);
		transform: translateY(9px);
		-webkit-transform-origin: 0% 100%;
		transform-origin: 0% 100%
	}

	.md-form.md-outline label.active {
		left: 8px;
		padding-right: 5px;
		padding-left: 5px;
		font-weight: 500;
		background: #fff;
		-webkit-transform: translateY(-13px) scale(0.8);
		transform: translateY(-13px) scale(0.8)
	}

	.md-form.md-outline.form-lg .form-control.form-control-lg {
		padding: .5rem .725rem
	}

	.md-form.md-outline.form-lg label {
		font-size: 1.25rem;
		-webkit-transform: translateY(10px);
		transform: translateY(10px)
	}

	.md-form.md-outline.form-lg label.active {
		font-size: 1.1rem;
		-webkit-transform: translateY(-14px) scale(0.8);
		transform: translateY(-14px) scale(0.8)
	}

	.md-form.md-outline.form-lg .prefix {
		top: .65rem;
		font-size: 25px
	}

	.md-form.md-outline.form-lg .prefix~input,
	.md-form.md-outline.form-lg .prefix~textarea {
		width: calc(100% - 2.2rem);
		margin-left: 2.2rem
	}

	.md-form.md-outline.form-lg .prefix~label {
		margin-left: 2.2rem
	}

	.md-form.md-outline.form-lg .prefix~.form-text {
		margin-left: 2.3rem
	}

	.md-form.md-outline.form-sm .form-control.form-control-sm {
		padding: .25rem .625rem
	}

	.md-form.md-outline.form-sm label {
		font-size: .8rem;
		-webkit-transform: translateY(8px);
		transform: translateY(8px)
	}

	.md-form.md-outline.form-sm label.active {
		font-size: .85rem;
		-webkit-transform: translateY(-12px) scale(0.8);
		transform: translateY(-12px) scale(0.8)
	}

	.md-form.md-outline.form-sm .prefix {
		top: .5rem;
		font-size: 15px
	}

	.md-form.md-outline.form-sm .prefix~input,
	.md-form.md-outline.form-sm .prefix~textarea {
		width: calc(100% - 1.6rem);
		margin-left: 1.6rem
	}

	.md-form.md-outline.form-sm .prefix~label {
		margin-left: 1.6rem
	}

	.md-form.md-outline.form-sm .prefix~.form-text {
		margin-left: 1.7rem
	}

	.md-form.md-outline .prefix {
		position: absolute;
		top: .6rem;
		font-size: 20px;
		-webkit-transition: color .2s;
		transition: color .2s
	}

	.md-form.md-outline .prefix:focus {
		color: #4285f4
	}

	.md-form.md-outline .prefix~input,
	.md-form.md-outline .prefix~textarea {
		width: calc(100% - 2rem);
		margin-left: 2rem
	}

	.md-form.md-outline .prefix~label {
		margin-left: 2rem
	}

	.md-form.md-outline .prefix~.form-text {
		margin-left: 2.1rem
	}

	.md-form.md-outline .character-counter {
		margin-top: -.5rem
	}

	.md-form.md-bg input[type="text"],
	.md-form.md-bg input[type="password"],
	.md-form.md-bg input[type="email"],
	.md-form.md-bg input[type="url"],
	.md-form.md-bg input[type="time"],
	.md-form.md-bg input[type="date"],
	.md-form.md-bg input[type="datetime-local"],
	.md-form.md-bg input[type="tel"],
	.md-form.md-bg input[type="number"],
	.md-form.md-bg input[type="search-md"],
	.md-form.md-bg input[type="search"],
	.md-form.md-bg textarea.md-textarea {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		padding: 10px 5px;
		background: #f5f5f5 no-repeat;
		background-image: -webkit-gradient(linear, left top, left bottom, from(#4285f4), to(#4285f4)), -webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));
		background-image: linear-gradient(to bottom, #4285f4, #4285f4), linear-gradient(to bottom, #ced4da, #ced4da);
		background-position: 50% 100%, 50% 100%;
		background-size: 0 2px, 100% 1px;
		border: 0;
		border-top-left-radius: .3rem;
		border-top-right-radius: .3rem;
		-webkit-transition: background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
		transition: background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1)
	}

	.md-form.md-bg input[type="text"]:focus:not([readonly]),
	.md-form.md-bg input[type="password"]:focus:not([readonly]),
	.md-form.md-bg input[type="email"]:focus:not([readonly]),
	.md-form.md-bg input[type="url"]:focus:not([readonly]),
	.md-form.md-bg input[type="time"]:focus:not([readonly]),
	.md-form.md-bg input[type="date"]:focus:not([readonly]),
	.md-form.md-bg input[type="datetime-local"]:focus:not([readonly]),
	.md-form.md-bg input[type="tel"]:focus:not([readonly]),
	.md-form.md-bg input[type="number"]:focus:not([readonly]),
	.md-form.md-bg input[type="search-md"]:focus:not([readonly]),
	.md-form.md-bg input[type="search"]:focus:not([readonly]),
	.md-form.md-bg textarea.md-textarea:focus:not([readonly]) {
		border-bottom: none;
		-webkit-box-shadow: none;
		box-shadow: none
	}

	.md-form.md-bg input[type="text"]:focus,
	.md-form.md-bg input[type="password"]:focus,
	.md-form.md-bg input[type="email"]:focus,
	.md-form.md-bg input[type="url"]:focus,
	.md-form.md-bg input[type="time"]:focus,
	.md-form.md-bg input[type="date"]:focus,
	.md-form.md-bg input[type="datetime-local"]:focus,
	.md-form.md-bg input[type="tel"]:focus,
	.md-form.md-bg input[type="number"]:focus,
	.md-form.md-bg input[type="search-md"]:focus,
	.md-form.md-bg input[type="search"]:focus,
	.md-form.md-bg textarea.md-textarea:focus {
		background-color: #dcdcdc;
		background-size: 100% 2px, 100% 1px;
		outline: none
	}

	.md-form.md-bg>input[type="date"]:not(.browser-default)+label {
		-webkit-transform: translateY(-12px) scale(0.8);
		transform: translateY(-12px) scale(0.8);
		-webkit-transform-origin: 0 0;
		transform-origin: 0 0
	}

	.md-form.md-bg>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label,
	.md-form.md-bg>input[type="time"]:not(.browser-default)+label {
		font-size: .8rem;
		-webkit-transform: translateY(-12px);
		transform: translateY(-12px);
		-webkit-transform-origin: 0 0;
		transform-origin: 0 0
	}

	.md-form.md-bg .form-control {
		padding: 1.1rem .7rem .4rem !important
	}

	.md-form.md-bg label {
		top: 0;
		padding-left: .7rem;
		font-size: 1rem;
		-webkit-transition: color .2s ease-out, -webkit-transform .2s ease-out;
		transition: color .2s ease-out, -webkit-transform .2s ease-out;
		transition: transform .2s ease-out, color .2s ease-out;
		transition: transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;
		-webkit-transform: translateY(13px);
		transform: translateY(13px);
		-webkit-transform-origin: 0% 100%;
		transform-origin: 0% 100%
	}

	.md-form.md-bg label.active {
		padding-left: .75rem;
		font-weight: 500;
		-webkit-transform: translateY(-3px) scale(0.8);
		transform: translateY(-3px) scale(0.8)
	}

	.md-form.md-bg.form-lg label {
		-webkit-transform: translateY(16px);
		transform: translateY(16px)
	}

	.md-form.md-bg.form-lg label.active {
		-webkit-transform: translateY(-4px) scale(0.8);
		transform: translateY(-4px) scale(0.8)
	}

	.md-form.md-bg.form-sm label {
		-webkit-transform: translateY(11px);
		transform: translateY(11px)
	}

	.md-form.md-bg.form-sm label.active {
		-webkit-transform: translateY(-2px) scale(0.8);
		transform: translateY(-2px) scale(0.8)
	}

	.md-form .form-control.is-invalid,
	.was-validated .md-form .form-control:invalid {
		padding-right: 0
	}

	.md-form .form-control.is-valid,
	.was-validated .md-form .form-control:valid {
		padding-right: 0
	}

	.needs-validation .md-form label {
		left: .3rem
	}

	.custom-file-input:lang(es)~.custom-file-label::after {
		content: "Elegir"
	}

	.custom-file-input:lang(pl-pl)~.custom-file-label::after {
		content: "Wybierz"
	}

	.custom-file-input:lang(fr)~.custom-file-label::after {
		content: "Choisir"
	}

	.custom-file-input:lang(in)~.custom-file-label::after {
		content: "Pilih"
	}

	.custom-file-input:lang(zh)~.custom-file-label::after {
		content: "選擇"
	}

	.custom-file-input:lang(de)~.custom-file-label::after {
		content: "Wählen"
	}

	.custom-file-input:lang(ru)~.custom-file-label::after {
		content: "выбирать"
	}

	.edge-header {
		display: block;
		height: 278px;
		background-color: #ccc
	}

	.free-bird {
		margin-top: -100px
	}

	.juicy-peach-gradient {
		background-image: -webkit-gradient(linear, left top, right top, from(#ffecd2), to(#fcb69f));
		background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%)
	}

	.young-passion-gradient {
		background-image: -webkit-gradient(linear, left top, right top, from(#ff8177), color-stop(0%, #ff867a), color-stop(21%, #ff8c7f), color-stop(52%, #f99185), color-stop(78%, #cf556c), to(#b12a5b));
		background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%)
	}

	.lady-lips-gradient {
		background-image: -webkit-gradient(linear, left bottom, left top, from(#ff9a9e), color-stop(99%, #fecfef), to(#fecfef));
		background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%)
	}

	.sunny-morning-gradient {
		background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%)
	}

	.rainy-ashville-gradient {
		background-image: -webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a6c1ee));
		background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%)
	}

	.frozen-dreams-gradient {
		background-image: -webkit-gradient(linear, left bottom, left top, from(#fdcbf1), color-stop(1%, #fdcbf1), to(#e6dee9));
		background-image: linear-gradient(to top, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%)
	}

	.warm-flame-gradient {
		background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%)
	}

	.night-fade-gradient {
		background-image: -webkit-gradient(linear, left bottom, left top, from(#a18cd1), to(#fbc2eb));
		background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%)
	}

	.spring-warmth-gradient {
		background-image: -webkit-gradient(linear, left bottom, left top, from(#fad0c4), to(#ffd1ff));
		background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%)
	}

	.winter-neva-gradient {
		background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%)
	}

	.dusty-grass-gradient {
		background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%)
	}

	.tempting-azure-gradient {
		background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)
	}

	.heavy-rain-gradient {
		background-image: -webkit-gradient(linear, left bottom, left top, from(#cfd9df), to(#e2ebf0));
		background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%)
	}

	.amy-crisp-gradient {
		background-image: linear-gradient(120deg, #a6c0fe 0%, #f68084 100%)
	}

	.mean-fruit-gradient {
		background-image: linear-gradient(120deg, #fccb90 0%, #d57eeb 100%)
	}

	.deep-blue-gradient {
		background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%)
	}

	.ripe-malinka-gradient {
		background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%)
	}

	.cloudy-knoxville-gradient {
		background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%)
	}

	.morpheus-den-gradient {
		background-image: -webkit-gradient(linear, left bottom, left top, from(#30cfd0), to(#330867));
		background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%)
	}

	.rare-wind-gradient {
		background-image: -webkit-gradient(linear, left bottom, left top, from(#a8edea), to(#fed6e3));
		background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%)
	}

	.near-moon-gradient {
		background-image: -webkit-gradient(linear, left bottom, left top, from(#5ee7df), to(#b490ca));
		background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%)
	}

	.schedule-list .hr-bold {
		border-top: 2px solid #212529
	}

	.schedule-list .font-smaller {
		font-size: .8rem
	}

	.note {
		padding: 10px;
		border-left: 6px solid;
		border-radius: 5px
	}

	.note strong {
		font-weight: 600
	}

	.note p {
		font-weight: 500
	}

	.note-primary {
		background-color: #dfeefd;
		border-color: #176ac4
	}

	.note-secondary {
		background-color: #e2e3e5;
		border-color: #58595a
	}

	.note-success {
		background-color: #e2f0e5;
		border-color: #49a75f
	}

	.note-danger {
		background-color: #fae7e8;
		border-color: #e45460
	}

	.note-warning {
		background-color: #faf4e0;
		border-color: #c2a442
	}

	.note-info {
		background-color: #e4f2f5;
		border-color: #2492a5
	}

	.note-light {
		background-color: #fefefe;
		border-color: #0f0f0f
	}

	footer.page-footer {
		bottom: 0;
		color: #fff
	}

	footer.page-footer .container-fluid {
		width: auto
	}

	footer.page-footer .footer-copyright {
		overflow: hidden;
		color: rgba(255, 255, 255, 0.6);
		background-color: rgba(0, 0, 0, 0.2)
	}

	footer.page-footer a {
		color: #fff
	}

	.media .media-left {
		padding: 0 10px 10px 0
	}

	.media .media-left img {
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.list-group .list-group-item:first-child {
		border-top-left-radius: .125rem;
		border-top-right-radius: .125rem
	}

	.list-group .list-group-item:last-child {
		border-bottom-right-radius: .125rem;
		border-bottom-left-radius: .125rem
	}

	.list-group a,
	.list-group button {
		-webkit-transition: .5s;
		transition: .5s
	}

	.list-group a:hover,
	.list-group button:hover {
		-webkit-transition: .5s;
		transition: .5s
	}

	table th {
		font-size: .9rem;
		font-weight: 400
	}

	table td {
		font-size: .9rem;
		font-weight: 300
	}

	table.table thead th {
		border-top: none
	}

	table.table th,
	table.table td {
		padding-top: 1.1rem;
		padding-bottom: 1rem
	}

	table.table a {
		margin: 0;
		color: #212529
	}

	table.table .label-table {
		height: .94rem;
		padding: 0;
		margin: 0;
		line-height: .94rem
	}

	table.table.btn-table td {
		vertical-align: middle
	}

	table.table-hover tbody tr:hover {
		background-color: rgba(0, 0, 0, 0.075);
		-webkit-transition: .5s;
		transition: .5s
	}

	table .th-lg {
		min-width: 9rem
	}

	table .th-sm {
		min-width: 6rem
	}

	table.table-sm th,
	table.table-sm td {
		padding-top: .6rem;
		padding-bottom: .6rem
	}

	.table-scroll-vertical {
		max-height: 300px;
		overflow-y: auto
	}

	.table-fixed {
		table-layout: fixed
	}

	.table-responsive>.table-bordered,
	.table-responsive-sm>.table-bordered,
	.table-responsive-md>.table-bordered,
	.table-responsive-lg>.table-bordered,
	.table-responsive-xl>.table-bordered {
		border-top: 1px solid #dee2e6
	}

	ul.stepper {
		padding: 0 1.5rem;
		padding: 1.5rem;
		margin: 1em -1.5rem;
		overflow-x: hidden;
		overflow-y: auto;
		counter-reset: section
	}

	ul.stepper li a {
		padding: 1.5rem;
		text-align: center
	}

	ul.stepper li a .circle {
		display: inline-block;
		width: 1.75rem;
		height: 1.75rem;
		margin-right: .5rem;
		line-height: 1.7rem;
		color: #fff;
		text-align: center;
		background: rgba(0, 0, 0, 0.38);
		border-radius: 50%
	}

	ul.stepper li a .label {
		display: inline-block;
		color: rgba(0, 0, 0, 0.38)
	}

	ul.stepper li.active a .label,
	ul.stepper li.completed a .label {
		font-weight: 600;
		color: rgba(0, 0, 0, 0.87)
	}

	.stepper-horizontal {
		position: relative;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-pack: justify;
		-ms-flex-pack: justify;
		justify-content: space-between
	}

	.stepper-horizontal li {
		position: relative;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-flex: 1;
		-ms-flex: 1;
		flex: 1;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-transition: .5s;
		transition: .5s
	}

	.stepper-horizontal li a .label {
		margin-top: .63rem
	}

	.stepper-horizontal li:not(:last-child):after {
		position: relative;
		-webkit-box-flex: 1;
		-ms-flex: 1;
		flex: 1;
		height: 1px;
		margin: .5rem 0 0 0;
		content: "";
		background-color: rgba(0, 0, 0, 0.1)
	}

	.stepper-horizontal li:not(:first-child):before {
		position: relative;
		-webkit-box-flex: 1;
		-ms-flex: 1;
		flex: 1;
		height: 1px;
		margin: .5rem 0 0 0;
		content: "";
		background-color: rgba(0, 0, 0, 0.1)
	}

	.stepper-horizontal li:hover {
		background-color: rgba(0, 0, 0, 0.06)
	}

	@media (max-width: 47.9375rem) {
		.stepper-horizontal {
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column
		}

		.stepper-horizontal li {
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
			-webkit-box-align: start;
			-ms-flex-align: start;
			align-items: flex-start
		}

		.stepper-horizontal li a .label {
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-flow: column nowrap;
			flex-flow: column nowrap;
			-webkit-box-ordinal-group: 3;
			-ms-flex-order: 2;
			order: 2;
			margin-top: .2rem
		}

		.stepper-horizontal li:not(:last-child):after {
			position: absolute;
			top: 3.75rem;
			left: 2.19rem;
			width: 1px;
			height: calc(100% - 40px);
			content: ""
		}
	}

	.stepper-horizontal>li:not(:last-of-type) {
		margin-bottom: 0 !important
	}

	.stepper-vertical {
		position: relative;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-ms-flex-direction: column;
		flex-direction: column;
		-webkit-box-pack: justify;
		-ms-flex-pack: justify;
		justify-content: space-between
	}

	.stepper-vertical li {
		position: relative;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-flex: 1;
		-ms-flex: 1;
		flex: 1;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-ms-flex-direction: column;
		flex-direction: column;
		-webkit-box-align: start;
		-ms-flex-align: start;
		align-items: flex-start
	}

	.stepper-vertical li a {
		position: relative;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-item-align: start;
		align-self: flex-start
	}

	.stepper-vertical li a .circle {
		-webkit-box-ordinal-group: 2;
		-ms-flex-order: 1;
		order: 1
	}

	.stepper-vertical li a .label {
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-ms-flex-flow: column nowrap;
		flex-flow: column nowrap;
		-webkit-box-ordinal-group: 3;
		-ms-flex-order: 2;
		order: 2;
		margin-top: .2rem
	}

	.stepper-vertical li.completed a .label {
		font-weight: 500
	}

	.stepper-vertical li .step-content {
		display: block;
		padding: .94rem;
		margin-top: 0;
		margin-left: 3.13rem
	}

	.stepper-vertical li .step-content p {
		font-size: .88rem
	}

	.stepper-vertical li:not(:last-child):after {
		position: absolute;
		top: 3.44rem;
		left: 2.19rem;
		width: 1px;
		height: calc(100% - 40px);
		content: "";
		background-color: rgba(0, 0, 0, 0.1)
	}

	.fast.spinner-border {
		-webkit-animation: spinner-border 0.4s linear infinite;
		animation: spinner-border 0.4s linear infinite
	}

	.fast.spinner-grow {
		-webkit-animation: spinner-grow 0.4s linear infinite;
		animation: spinner-grow 0.4s linear infinite
	}

	.treeview.w-20 {
		width: 20rem
	}

	.treeview .rotate {
		margin-top: .2rem;
		font-size: .8rem;
		vertical-align: text-top;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		-webkit-transition: all .1s linear;
		transition: all .1s linear
	}

	.treeview .rotate.down {
		-webkit-transform: rotate(90deg);
		transform: rotate(90deg)
	}

	.treeview .nested {
		display: none
	}

	.treeview .active {
		display: block
	}

	.treeview ul {
		list-style-type: none
	}

	.treeview .ic-w {
		width: 1.3rem
	}

	.treeview-animated.w-20 {
		width: 20rem
	}

	.treeview-animated ul {
		position: relative;
		padding-left: 1em;
		list-style: none
	}

	.treeview-animated .treeview-animated-list li {
		padding: .2em 0 0 .2em
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .nested::before {
		position: absolute;
		left: 5px;
		display: block;
		width: 5px;
		height: 100%;
		content: "";
		background-color: #808080
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .closed {
		display: block;
		padding: .2em .2em .2em .4em;
		margin-right: 0;
		border-top-left-radius: .3em;
		border-bottom-left-radius: .3em
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .closed:hover {
		background-color: #8cb9ff
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .closed .fa-angle-right {
		font-size: .8rem;
		-webkit-transition: all .1s linear;
		transition: all .1s linear
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .closed .fa-angle-right.down {
		position: relative;
		color: #f8f9fa;
		-webkit-transform: rotate(90deg);
		transform: rotate(90deg)
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .open {
		background-color: #32a0ff;
		-webkit-transition: all .1s linear;
		transition: all .1s linear
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .open:hover {
		color: #f8f9fa;
		background-color: #32a0ff
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .open span {
		color: #f8f9fa
	}

	.treeview-animated .treeview-animated-list .treeview-animated-element {
		padding: .2em .2em .2em .6em;
		cursor: pointer;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
		-webkit-transition: all .1s linear;
		transition: all .1s linear
	}

	.treeview-animated .treeview-animated-list .treeview-animated-element:hover {
		background-color: #8cb9ff
	}

	.treeview-animated .treeview-animated-list .treeview-animated-element.opened {
		color: #f8f9fa;
		background-color: #32a0ff
	}

	.treeview-animated .treeview-animated-list .treeview-animated-element.opened:hover {
		color: #f8f9fa;
		background-color: #32a0ff
	}

	.treeview-colorful {
		font-size: 16px;
		font-weight: 400;
		background: rgba(224, 127, 178, 0.2)
	}

	.treeview-colorful.w-20 {
		width: 20rem
	}

	.treeview-colorful hr {
		border-color: #a2127a
	}

	.treeview-colorful h6 {
		font-size: 1.4em;
		font-weight: 500;
		color: #a2127a
	}

	.treeview-colorful ul {
		position: relative;
		padding-left: 0;
		list-style: none
	}

	.treeview-colorful .treeview-colorful-list ul {
		padding-left: 1em;
		margin-top: .1em;
		background: rgba(224, 127, 178, 0.2)
	}

	.treeview-colorful .treeview-colorful-element {
		padding: .2em .2em .2em 1em;
		cursor: pointer;
		border: 2px solid transparent;
		border-right: 0 solid transparent;
		-webkit-transition: all .1s linear;
		transition: all .1s linear
	}

	.treeview-colorful .treeview-colorful-element:hover {
		background-color: #e07fb2
	}

	.treeview-colorful .treeview-colorful-element.opened {
		color: #ffac47;
		background-color: #a2127a;
		border: 2px solid #ffac47;
		border-right: 0 solid transparent
	}

	.treeview-colorful .treeview-colorful-element.opened:hover {
		color: #ffac47;
		background-color: #a2127a
	}

	.treeview-colorful .treeview-colorful-items-header {
		display: block;
		padding: .4em;
		margin-right: 0;
		border-bottom: 2px solid transparent;
		-webkit-transition: all .1s linear;
		transition: all .1s linear
	}

	.treeview-colorful .treeview-colorful-items-header:hover {
		background-color: #e07fb2
	}

	.treeview-colorful .treeview-colorful-items-header.open {
		background-color: #a2127a;
		border-bottom: 2px solid #ffac47;
		-webkit-transition: all .1s linear;
		transition: all .1s linear
	}

	.treeview-colorful .treeview-colorful-items-header.open span {
		color: #ffac47
	}

	.treeview-colorful .treeview-colorful-items-header.open:hover {
		color: #ffac47;
		background-color: #a2127a
	}

	.treeview-colorful .treeview-colorful-items-header.open div:hover {
		background-color: #a2127a
	}

	.treeview-colorful .treeview-colorful-items-header .fa-angle-right {
		font-size: .8rem;
		-webkit-transition: all .2s linear;
		transition: all .2s linear
	}

	.treeview-colorful .treeview-colorful-items-header .fas {
		position: relative;
		color: #ffac47;
		-webkit-transition: all .2s linear;
		transition: all .2s linear;
		-webkit-transform: rotate(90deg);
		transform: rotate(90deg)
	}

	.treeview-colorful .treeview-colorful-items-header .fa-minus-circle {
		position: relative;
		color: #ffac47;
		-webkit-transition: all .2s linear;
		transition: all .2s linear;
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg)
	}
</style>


<script type="text/javascript" src="{{asset('vendor/panichd/js/jQuery/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/panichd/js/jQuery/jquery-ui-1.12.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/panichd/bootstrap/bootstrap-' . PanicHD\PanicHD\Helpers\Cdn::Bootstrap . '.bundle.min.js')}}"></script>

<script type="text/javascript" src="{{asset('vendor/panichd/select2/select2-' . PanicHD\PanicHD\Helpers\Cdn::Select2 . '.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/panichd/select2/i18n/'.App::getLocale().'.js')}}"></script>

<script type="text/javascript" src="{{asset('vendor/panichd/js/mdb.min.js')}}"></script>

