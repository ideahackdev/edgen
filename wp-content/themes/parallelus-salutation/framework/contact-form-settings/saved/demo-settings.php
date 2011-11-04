<?php 
add_filter('contact_form_saved', 'contact_form_saved_contact_fields');
function contact_form_saved_contact_fields ($d) {$d['contact_fields'] = maybe_unserialize('a:9:{s:4:"name";a:16:{s:5:"label";s:4:"Name";s:3:"key";s:4:"name";s:7:"caption";s:0:"";s:10:"field_type";s:4:"text";s:6:"values";s:0:"";s:8:"required";s:1:"1";s:14:"error_required";s:23:"Please enter your name.";s:9:"minlength";s:0:"";s:9:"maxlength";s:0:"";s:10:"validation";s:0:"";s:16:"error_validation";s:0:"";s:5:"index";s:4:"name";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_siv0z3euzegzmptog";s:10:"import_key";s:0:"";s:4:"size";a:2:{s:5:"width";s:0:"";s:6:"height";s:0:"";}}s:5:"email";a:16:{s:5:"label";s:5:"Email";s:3:"key";s:5:"email";s:7:"caption";s:0:"";s:10:"field_type";s:4:"text";s:6:"values";s:0:"";s:8:"required";s:1:"1";s:14:"error_required";s:32:"Please enter your email address.";s:9:"minlength";s:0:"";s:9:"maxlength";s:0:"";s:10:"validation";s:5:"email";s:16:"error_validation";s:27:"Please enter a valid email.";s:5:"index";s:5:"email";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_s1a7u4k5oja0m9h4w";s:10:"import_key";s:0:"";s:4:"size";a:2:{s:5:"width";s:0:"";s:6:"height";s:0:"";}}s:12:"phone-number";a:16:{s:5:"label";s:5:"Phone";s:3:"key";s:12:"phone-number";s:7:"caption";s:0:"";s:10:"field_type";s:4:"text";s:6:"values";s:0:"";s:8:"required";s:1:"0";s:14:"error_required";s:0:"";s:9:"minlength";s:0:"";s:9:"maxlength";s:0:"";s:10:"validation";s:0:"";s:16:"error_validation";s:0:"";s:5:"index";s:12:"phone-number";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_t7xed20ks55bu4stc";s:10:"import_key";s:0:"";s:4:"size";a:2:{s:5:"width";s:3:"150";s:6:"height";s:0:"";}}s:8:"comments";a:16:{s:5:"label";s:8:"Comments";s:3:"key";s:8:"comments";s:7:"caption";s:0:"";s:10:"field_type";s:8:"textarea";s:6:"values";s:0:"";s:8:"required";s:1:"1";s:14:"error_required";s:23:"Please enter a comment.";s:9:"minlength";s:0:"";s:9:"maxlength";s:0:"";s:10:"validation";s:0:"";s:16:"error_validation";s:0:"";s:5:"index";s:8:"comments";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_r7qeo17wvn5yxy4o0";s:10:"import_key";s:0:"";s:4:"size";a:2:{s:5:"width";s:0:"";s:6:"height";s:0:"";}}s:10:"first-name";a:16:{s:5:"label";s:10:"First Name";s:3:"key";s:10:"first-name";s:7:"caption";s:0:"";s:10:"field_type";s:4:"text";s:6:"values";s:0:"";s:8:"required";s:1:"0";s:14:"error_required";s:0:"";s:9:"minlength";s:0:"";s:9:"maxlength";s:0:"";s:10:"validation";s:0:"";s:16:"error_validation";s:0:"";s:5:"index";s:10:"first-name";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_y4kdi1h0sxccu5e80";s:10:"import_key";s:0:"";s:4:"size";a:2:{s:5:"width";s:3:"190";s:6:"height";s:0:"";}}s:9:"last-name";a:16:{s:5:"label";s:9:"Last Name";s:3:"key";s:9:"last-name";s:7:"caption";s:133:"The name fields above are optional, but if you could provide this information it helps us keep our records better up to date. Thanks.";s:10:"field_type";s:4:"text";s:6:"values";s:0:"";s:8:"required";s:1:"0";s:14:"error_required";s:0:"";s:9:"minlength";s:0:"";s:9:"maxlength";s:0:"";s:10:"validation";s:0:"";s:16:"error_validation";s:0:"";s:5:"index";s:9:"last-name";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_u99ku54t56fk3450c";s:10:"import_key";s:0:"";s:4:"size";a:2:{s:5:"width";s:3:"190";s:6:"height";s:0:"";}}s:12:"organization";a:16:{s:5:"label";s:12:"Organization";s:3:"key";s:12:"organization";s:7:"caption";s:0:"";s:10:"field_type";s:4:"text";s:6:"values";s:0:"";s:8:"required";s:1:"0";s:14:"error_required";s:0:"";s:9:"minlength";s:0:"";s:9:"maxlength";s:0:"";s:10:"validation";s:0:"";s:16:"error_validation";s:0:"";s:5:"index";s:12:"organization";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_un6lv654p2sddtisc";s:10:"import_key";s:0:"";s:4:"size";a:2:{s:5:"width";s:0:"";s:6:"height";s:0:"";}}s:14:"contact-method";a:16:{s:5:"label";s:14:"Contact method";s:3:"key";s:14:"contact-method";s:7:"caption";s:46:"What is the best way to get in touch with you?";s:10:"field_type";s:5:"radio";s:6:"values";s:46:"Email, Postal mail, Phone, Text message, Other";s:8:"required";s:1:"1";s:14:"error_required";s:45:"Please select the best method to contact you.";s:9:"minlength";s:0:"";s:9:"maxlength";s:0:"";s:10:"validation";s:0:"";s:16:"error_validation";s:0:"";s:5:"index";s:14:"contact-method";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_lbeha786bi20oy1s0";s:10:"import_key";s:0:"";s:4:"size";a:2:{s:5:"width";s:0:"";s:6:"height";s:0:"";}}s:10:"other-info";a:16:{s:5:"label";s:17:"Other Information";s:3:"key";s:10:"other-info";s:7:"caption";s:52:"Is there is anything else you would like us to know?";s:10:"field_type";s:8:"textarea";s:6:"values";s:0:"";s:8:"required";s:1:"0";s:14:"error_required";s:0:"";s:9:"minlength";s:0:"";s:9:"maxlength";s:0:"";s:10:"validation";s:0:"";s:16:"error_validation";s:0:"";s:5:"index";s:10:"other-info";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_jfwpc1z1ngo8k12as";s:10:"import_key";s:0:"";s:4:"size";a:2:{s:5:"width";s:0:"";s:6:"height";s:0:"";}}}', true); return $d; }
?>