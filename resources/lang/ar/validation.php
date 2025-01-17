<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => ':attribute رابط غير صحيح',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => ':attribute يجب أن تختار واحدة على الأقل',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => ':attribute غير صحيح',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => ':attribute يجب أن يكون عنوان صالح',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => ':attribute يجب أن يكون ملف',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ':attribute يجب أن يكون صورة',
    'in' => 'القيمة المدخلة :attribute غير صحيحة.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => ':attribute يجب أن يكون رقما.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ' :attribute حجم الملف لا يجوز أن يتعدى :max.',
        'file' => ':attribute حجم الملف لا يجوز أن يتعدى  :max kilobytes.',
        'string' => ':attribute لا يجب أن يتعدى :max حروف.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => ':attribute يجب أن تكون ملف من نوع :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => ' :attribute حجم الملف لا يجوز أن يقل عن:min kilobytes.',
        'string' => ':attribute يجب أن لا يقل عن :min حروف.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ':attribute يجب أن يكون رقم',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => ':attribute يجب أن يكون رابط يوتيوب صحيح',
    'r-regex' => ':attribute يجب أن يكون باللغة الإنجليزية',
    'm-regex' => ':attribute يجب أن يكون أرقام',
    'mark-regex' => ':attribute يجب أن يكون رقم أو رقمين',
    'arabic' => ':attribute يجب أن يكون باللغة العربية',
    'required' => ':attribute مطلوب',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => ' :attribute مطلوب في حال لم يتم إضافته من قبل',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => ':attribute يجب أن يكون :size كيلوبايت.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'رابط الاختبار :attribute يجب أن يبدأ بـ: :values.',
    'string' => ':attribute يجب أن يكون نصاً.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => ':attribute موجود مسبقاً',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'صيغة :attribute غير صحيحة',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'status' => [
            'required'=> ':attribute مطلوبة',
        ],
        'name' => [
            'required'=> ':attribute مطلوب',
            'string'=> ':attribute يجب أن يكون نص'
        ],
        'email' => [
            'required'=> ':attribute مطلوب',
            'email'=> ':attribute يجب أن يكون عنوان صالح',
            'unique'=> ':attribute موجود مسبقاً'
        ],
        'password' => [
            'min'=> ':attribute لا تقل عن 8 حروف',
            'confirmed'=> 'الرجاء تأكيد :attribute '
        ],
        'slug' => [
            'required'=> ':attribute مطلوب',
            'unique'=> ':attribute موجود مسبقاً'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name'=> 'الاسم',
        'email'=> 'البريد الإلكتروني',
        'password'=> 'كلمة المرور',
        'status'=> 'الحالة',
        'site_name_ar'=> 'اسم الموقع بالعربية',
        'site_name_en'=> 'اسم الموقع بالإنجليزية',
        'address_ar'=> 'العنوان بالعربية',
        'address_en'=> 'العنوان بالإنجليزية',
        'language_id'=> 'اللغة',
        'favicon'=> 'أيقونة الموقع',
        'logo'=> 'الشعار',
        'mobile'=> 'الجوال',
        'phone'=> 'الهاتف',
        'url'=> 'الرابط',
        'icon'=> 'الأيقونة',
        'information_id'=> 'معلومات الموقع',
        'level_id'=> 'المرحلة الدراسية',
        'grade_id'=> 'الصف الدراسي',
        'classs'=> 'الصف الدراسي',
        'subject_id'=> 'المبحث',
        'subject'=> 'المبحث',
        'description'=> 'الوصف',
        'file'=> 'رابط الملف',
        'release_date'=> 'تاريخ الإصدار',
        'semester_id'=> 'الفصل الدراسي',
        'semester'=> 'الفصل الدراسي',
        'unit_id'=> 'الوحدة',
        'authors'=> 'المؤلفون',
        'sort' => 'الترتيب',
        'max_size' => 'أقصى حجم للملف',
        'extension' => 'امتداد الملف',
        'file_category_id' => 'تصنيف الملف',
        'file_extension_id' => 'امتداد الملف',
        'lesson_id' => 'الدرس',
        'prepared_by' => 'صفة الإعداد',
        'youtube_url' => 'الرابط',
        'externalLink' => 'الرابط',
        'type' => 'نوع المرفقات',
        'file_note' => 'الملاحظة على الملف',
        'first_name' => 'الاسم الأول',
        'second_name' => 'اسم الأب',
        'third_name' => 'اسم الجد',
        'last_name' => 'اسم العائلة',
        'birth_date' => 'تاريخ الميلاد',
        'identity_no' => 'رقم الهوية',
        'gender' => 'الجنس',
        'directorate_id' => 'اسم المديرية',
        'school_id' => 'اسم المدرسة',
        'ar_name' => 'الاسم بالعربي',
        'name_ar' => 'الاسم بالعربي',
        'en_name' => 'الاسم بالإنجليزي',
        'name_en' => 'الاسم بالإنجليزي',
        'permissions' => 'الصلاحيات',
        'direction' => 'اتجاه اللغة',
        'abbr' => 'اختصار اللغة',
        'geoPlace_id' => 'المنطقة الجغرافية',
        'grades' => 'الصف الدراسي',
        'unit_category_id' => 'تصنيف الوحدة',
        'semesters' => 'الفصل الدراسي',
        'identity' => 'رقم الهوية',
        'rawafed_email' => 'بريد روافد',
        'problem' => 'المشكلة التي تواجهك',
        'geo_place_id' => 'المنطقة الجغرافية',
        'google_form_description.*' => 'وصف الاختبار',
        'old_google_form_description.*' => 'وصف الاختبار',
        'google_form_url.*' => 'رابط الاختبار',
        'description_ar' => 'الوصف بالعربي',
        'description_en' => 'الوصف بالانجليزية',
        'video_type_id' => 'تصنيف الدرس المصور',
        'first_name_ar' => 'الاسم الأول بالعربي',
        'second_name_ar' => 'اسم الأب بالعربي',
        'third_name_ar' => 'اسم الجد بالعربي',
        'last_name_ar' => 'اسم العائلة بالعربي',
        'first_name_en' => 'الاسم الأول بالانجليزيي',
        'second_name_en' => 'اسم الأب بالانجليزيي',
        'third_name_en' => 'اسم الجد بالانجليزيي',
        'last_name_en' => 'اسم العائلة بالانجليزيي',
        'new_file.*' => 'رابط الملف',
        'new_file_description.*' => 'وصف الملف',
        'youtube_description.*' => 'وصف الفيديو',
        'youtube_url.*' => 'رابط الفيديو',
        'link_description.*' => 'وصف الرابط',
        'link_url.*' => 'الرابط',
        'title' => 'العنوان',
        'title_ar' => 'عنوان الصفحة بالعربية',
        'title_en' => 'عنوان الصفحة بالإنجليزية',
        'body_ar' => 'محتوى الصفحة بالعربية',
        'body_en' => 'محتوى الصفحة بالعربية',
        'mark.*' => 'الدرجة',
        'stages' => 'المراحل الدراسية',
        'subjects' => 'المباحث الدراسية',
        'exp_description' => 'وصف التجربة',
        'tools' => 'أدوات التجربة',
        'watch' => 'مشاهدات التجربة',
        'result' => 'نتائج التجربة',
        'video_url' => 'رابط فيديو التجربة',
        'exp_link' => 'رابط التجربة الخارجي',
        'exp_images.*' => 'صور التجربة',
        'concepts' => 'المفاهيم العلمية',
        'lab_category_id' => 'تصنيف المكتبة',
        'app_description' => 'وصف التطبيق',
        'app_link' => 'رابط التطبيق',
        'app_image' => 'صورة التطبيق',
        'image' => 'الصورة',
        'organization' => 'المؤسسة',
        'from' => 'الفترة من',
        'to' => 'الفترة إلى',
    ],
];
