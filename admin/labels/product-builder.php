<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( !class_exists('FPD_Labels_Product_Builder') ) {

	class FPD_Labels_Product_Builder {

		public static function get_labels() {

			return apply_filters('fpd_admin_labels_product_builder', array(
				'saveView' => __( 'Save View', 'radykal' ),
				'viewOptions' => __( 'View Options', 'radykal' ),
				'selectedView' => __( 'Selected View', 'radykal' ),
				'toggleSidebar' => __( 'Toggle Sidebar', 'radykal' ),
				'dockLeft' => __( 'Dock To Left', 'radykal' ),
				'dockRight' => __( 'Dock To Right', 'radykal' ),
				'enterElementTitle' => __( 'Enter an element title', 'radykal' ),
				'noEmptyElementTitle' => __( 'The element title can not be empty!', 'radykal' ),
				'deleteElement' => __( 'Delete Element', 'radykal' ),
				'deleteElementText' => __( 'Are you sure to delete the element?', 'radykal' ),
				'layers' => __( 'Layers', 'radykal' ),
				'add' => __( 'Add', 'radykal' ),
				'image' => __( 'Image', 'radykal' ),
				'text' => __( 'Text', 'radykal' ),
				'curvedText' => __( 'Curved Text', 'radykal' ),
				'textBox' => __( 'Text Box', 'radykal' ),
				'uploadZone' => __( 'Upload Zone', 'radykal' ),
				'replaceImage' => __( 'Replace Image', 'radykal' ),
				'lockElement' => __( 'Lock Element', 'radykal' ),
				'unlockElement' => __( 'Unlock Element', 'radykal' ),
				'onlySvgMask' => __( 'Only SVG images can be used as masks!', 'radykal' ),
				'svgSinglePath' => __( 'Use a SVG with a single path', 'radykal' ),
				'centerHor' => __( 'Center Horizontal', 'radykal' ),
				'centerVer' => __( 'Center Vertical', 'radykal' ),
				'widthInput' => __( 'Width', 'radykal' ),
				'heightInput' => __( 'Height', 'radykal' ),
				'printingBox' => __( 'Printing Box', 'radykal' ),
				'undo' => __( 'Undo', 'radykal' ),
				'redo' => __( 'Redo', 'radykal' ),
				'toggleRuler' => __( 'Ruler', 'radykal' ),
				'toggleSnapObjects' => __( 'Snap To Objects', 'radykal' ),
				'editMask' => __( 'Edit Mask', 'radykal' ),
				'editPrintingBox' => __( 'Edit Printing Box', 'radykal' ),
				'previewMobile' => __( 'Preview: Mobile Phone', 'radykal' ),
				'previewTablet' => __( 'Preview: Tablet', 'radykal' ),
				'previewFitContainer' => __( 'Preview: Fit Into Container', 'radykal' ),
				'definePrintSize' => __( 'Please define a print size!', 'radykal' ),
				'prHeader' => __( 'Print-Ready Export', 'radykal' ),
				'prHeader_desc' => __( 'Define the necessary information for the print-ready export. Setting a print size, will add a rectangular box with the same aspect-ratio to the canvas. When exporting the order with the print-ready export, only the content in the rectangular box will be visible in the exported file!', 'radykal' ),
				'output_format' => __( 'Print Size', 'radykal' ),
				'output_format_desc' => __( 'Select from predefined print sizes or enter a custom size.', 'radykal' ),
				'output_width' => __( 'Width in MM', 'radykal' ),
				'output_height' => __( 'Height in MM', 'radykal' ),
				'bleed' => __( 'Bleed in MM', 'radykal' ),
				'bleed_desc' => __( 'The print size will be increased by the bleed.', 'radykal' ),
				'printing_box_visibility' => __( 'Show Printing Box', 'radykal' ),
				'printing_box_visibility_desc' => __( 'Show printing box to customers in frontend.', 'radykal' ),
				'use_printing_box_as_bounding_box' => __( 'Printing Box as Bounding Box', 'radykal' ),
				'use_printing_box_as_bounding_box_desc' => __( 'When an element does not have an individual bounding box, the printing box will be used as bounding box.', 'radykal' ),
				'canvasSizeHeader' => __( 'Canvas Size', 'radykal' ),
				'stageWidth' => __( 'Canvas Width', 'radykal' ),
				'stageWidth_desc' => __( 'For the best performance keep it under 4000px.', 'radykal' ),
				'stageHeight' => __( 'Canvas Height', 'radykal' ),
				'stageHeight_desc' => __( 'For the best performance keep it under 4000px.', 'radykal' ),
				'auto_calc_canvas_size' => __( 'Auto-Calc Size By Print Size', 'radykal' ),
				'auto_calc_canvas_size_desc' => __( 'Calculates a proper canvas size by the print size, so the printing box covers the whole canvas in order to export the whole canvas content.', 'radykal' ),
				'miscHeader' => __( 'Miscellanous', 'radykal' ),
				'designs_parameter_price' => __( 'Custom Image Price', 'radykal' ),
				'designs_parameter_price_desc' => __( 'This price will be used for custom added images.', 'radykal' ),
				'custom_texts_parameter_price' => __( 'Custom Text Price', 'radykal' ),
				'custom_texts_parameter_price_desc' => __( 'This price will be used for custom added texts.', 'radykal' ),
				'max_price' => __( 'Maximum View Price', 'radykal' ),
				'max_price_desc' => __( 'The maximum price that will be charged for the view. -1 will disable this option.', 'radykal' ),
				'design_categories' => __( 'Design Categories', 'radykal' ),
				'design_categories_desc' => __( 'You can choose specific design categories for this view.', 'radykal' ),
				'disable_image_upload' => __( 'Disable Image Module', 'radykal' ),
				'disable_custom_text' => __( 'Disable Text Module', 'radykal' ),
				'disable_designs' => __( 'Disable Designs Module', 'radykal' ),
				'optional_view' => __( 'Optional View', 'radykal' ),
				'optional_view_desc' => __( 'The view is optional, the user must unlock the view and the prices for all element will be added to the total product price.', 'radykal' ),
				'general_tab' => __( 'General', 'radykal' ),
				'colors_tab' => __( 'Colors', 'radykal' ),
				'custom-props_tab' => __( 'Customizable Properties', 'radykal' ),
				'text_tab' => __( 'Text', 'radykal' ),
				'bounding-box_tab' => __( 'Bounding Box', 'radykal' ),
				'upload-zone_tab' => __( 'Upload Zone', 'radykal' ),
				'left' => __( 'Left', 'radykal' ),
				'top' => __( 'Top', 'radykal' ),
				'width' => __( 'Width', 'radykal' ),
				'height' => __( 'Height', 'radykal' ),
				'originX' => __( 'X-Origin', 'radykal' ),
				'originY' => __( 'Y-Origin', 'radykal' ),
				'price' => __( 'Price', 'radykal' ),
				'price_desc' => __( 'Always use a dot as the decimal separator!', 'radykal' ),
				'replace' => __( 'Replace', 'radykal' ),
				'replace_desc' => __( 'Elements with the same replace value are replaced by each other.', 'radykal' ),
				'topped' => __( 'Stay On Top', 'radykal' ),
				'autoSelect' => __( 'Auto-Select', 'radykal' ),
				'locked' => __( 'Locked', 'radykal' ),
				'locked_desc' => __( 'The user needs to unlock the element in Layers module to edit it.', 'radykal' ),
				'excludeFromExport' => __( 'Exclude In Export', 'radykal' ),
				'excludeFromExport_desc' => __( 'Excludes the layer from export.', 'radykal' ),
				'showInColorSelection' => __( 'Show in Color Selection', 'radykal' ),
				'showInColorSelection_desc' => __( 'Shows the elements colors in the color selection panel.', 'radykal' ),
				'_hexColors' => __( 'Colors', 'radykal' ),
				'_hexColors_desc' => __( 'One color value: Colorpicker, Multiple color values: Fixed color palette', 'radykal' ),
				'colors' => __( 'Color Picker per path', 'radykal' ),
				'colors_desc' => __( 'Every path in the SVG gets an own color picker.', 'radykal' ),
				'colorLinkGroup' => __( 'Color Link Group', 'radykal' ),
				'colorLinkGroup_desc' => __( 'You can set color links between elements.', 'radykal' ),
				'uzHeader_desc' => __( 'These properties will be applied to the element, that is added into the upload zone.', 'radykal' ),
				'draggable' => __( 'Movable', 'radykal' ),
				'resizable' => __( 'Scalable', 'radykal' ),
				'rotatable' => __( 'Rotatable', 'radykal' ),
				'removable' => __( 'Removable', 'radykal' ),
				'zChangeable' => __( 'Layer Depth Changeable', 'radykal' ),
				'uniScalingUnlockable' => __( 'Allow Unproportional Scaling', 'radykal' ),
				'advancedEditing' => __( 'Advanced Editing', 'radykal' ),
				'curvable' => __( 'Curvable', 'radykal' ),
				'curvable_desc' => __( 'Allow customer to switch between curvable and normal text.', 'radykal' ),
				'minFontSize' => __( 'Min. Font Size', 'radykal' ),
				'maxFontSize' => __( 'Max. Font Size', 'radykal' ),
				'widthFontSize' => __( 'Font Size To Width', 'radykal' ),
				'widthFontSize_desc' => __( 'The font size will be automatically adjusted, so the text fits into the defined width.', 'radykal' ),
				'textLinkGroup' => __( 'Text Link Group', 'radykal' ),
				'textLinkGroup_desc' => __( 'Link the text content between elements.', 'radykal' ),
				'maxLength' => __( 'Max. Characters', 'radykal' ),
				'maxLines' => __( 'Max. Lines', 'radykal' ),
				'editable' => __( 'Editable', 'radykal' ),
				'chargeAfterEditing' => __( 'Charge After Editing', 'radykal' ),
				'chargeAfterEditing_desc' => __( 'If the text has price, it will be charged first after the text has been edited.', 'radykal' ),
				'textNumberPlaceholder' => __( 'Text/Number Placeholder', 'radykal' ),
				'textNumberPlaceholder_desc' => __( 'Enable the text element as a text or number placeholder to use it with the Names & Numbers module.', 'radykal' ),
				'numberPlaceholderMin' => __( 'Min. Number', 'radykal' ),
				'numberPlaceholderMax' => __( 'Max. Number', 'radykal' ),
				'bounding_box_control' => __( 'Use another element as bounding box', 'radykal' ),
				'bounding_box_by_other' => __( 'Define Bounding Box', 'radykal' ),
				'bounding_box_by_other_desc' => __( 'Title of an image layer in the same view.', 'radykal' ),
				'bounding_box_x' => __( 'Left', 'radykal' ),
				'bounding_box_y' => __( 'Top', 'radykal' ),
				'bounding_box_width' => __( 'Width', 'radykal' ),
				'bounding_box_height' => __( 'Height', 'radykal' ),
				'boundingBoxMode' => __( 'Mode', 'radykal' ),
				'adds_uploads' => __( 'Image Uploads', 'radykal' ),
				'adds_texts' => __( 'Custom Texts', 'radykal' ),
				'adds_designs' => __( 'Designs', 'radykal' ),
				'uploadZoneMovable' => __( 'Movable', 'radykal' ),
				'uploadZoneMovable_desc' => __( 'The user can move the upload zone.', 'radykal' ),
				'uploadZoneRemovable' => __( 'Removable', 'radykal' ),
				'uploadZoneRemovable_desc' => __( 'The user can remove the upload zone.', 'radykal' ),
				'scaleMode' => __( 'Scale Mode', 'radykal' ),
				'designCategories' => __( 'Design Categories', 'radykal' ),
				'uzImageRescHeader_desc' => __( 'Define restrictions for uploaded images.', 'radykal' ),
				'minW' => __( 'Min. Width (px)', 'radykal' ),
				'minH' => __( 'Min. Height (px)', 'radykal' ),
				'maxW' => __( 'Max. Width (px)', 'radykal' ),
				'maxH' => __( 'Max. Height (px)', 'radykal' ),
				'bounding_box_borderRadius' => __( 'Border Radius', 'radykal' ),
				'custom_texts_parameter_fill' => __( 'Custom Text Default Color', 'radykal' ),
				'custom_texts_parameter_fill_desc' => __( 'The default color when customer adds a new text.', 'radykal' ),

				//container
				'loadingView' => __( 'Loading View...', 'radykal' ),
				'updatingView' => __( 'Updating View...', 'radykal' ),
				'selectImage' => __( 'Select Image', 'radykal' ),
				'noProducts' => __( 'No products or views created yet! Please create a product and add at least one view in the Products dashboard first.', 'radykal' ),
			));

		}
	}

}

?>