<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Тексеру тіліндегі жолдар
    |--------------------------------------------------------------------------
    |
    | Бұл жолдар валидатор класы қолданатын әдепкі қате хабарламаларын қамтиды.
    | Кейбір ережелердің бірнеше нұсқалары бар, мысалы, өлшем ережелері.
    | Бұл хабарламаларды қалауыңызша өзгерте аласыз.
    |
    */

    'accepted' => ':attribute өрісі қабылдануы керек.',
    'accepted_if' => ':other :value болғанда :attribute өрісі қабылдануы керек.',
    'active_url' => ':attribute өрісі жарамды URL болуы керек.',
    'after' => ':attribute өрісі :date күнінен кейінгі күн болуы керек.',
    'after_or_equal' => ':attribute өрісі :date күнінен кейін немесе тең күн болуы керек.',
    'alpha' => ':attribute өрісі тек әріптерден тұруы керек.',
    'alpha_dash' => ':attribute өрісі тек әріптерден, сандардан, сызықшалардан және асты сызулардан тұруы керек.',
    'alpha_num' => ':attribute өрісі тек әріптер мен сандардан тұруы керек.',
    'array' => ':attribute өрісі массив болуы керек.',
    'ascii' => ':attribute өрісі тек бір байттық таңбалар мен символдардан тұруы керек.',
    'before' => ':attribute өрісі :date күнінен бұрынғы күн болуы керек.',
    'before_or_equal' => ':attribute өрісі :date күнінен бұрын немесе тең күн болуы керек.',
    'between' => [
        'array' => ':attribute өрісінде :min мен :max элементтер болуы керек.',
        'file' => ':attribute өрісі :min мен :max килобайт арасында болуы керек.',
        'numeric' => ':attribute өрісі :min мен :max арасында болуы керек.',
        'string' => ':attribute өрісі :min мен :max таңба арасында болуы керек.',
    ],
    'boolean' => ':attribute өрісі true немесе false болуы керек.',
    'can' => ':attribute өрісінде рұқсат етілмеген мән бар.',
    'confirmed' => ':attribute өрісінің растауы сәйкес келмейді.',
    'current_password' => 'Құпиясөз қате.',
    'date' => ':attribute өрісі жарамды күн болуы керек.',
    'date_equals' => ':attribute өрісі :date күніне тең күн болуы керек.',
    'date_format' => ':attribute өрісі :format форматына сәйкес келуі керек.',
    'decimal' => ':attribute өрісінде :decimal ондық таңба болуы керек.',
    'declined' => ':attribute өрісі қабылданбауы керек.',
    'declined_if' => ':other :value болғанда :attribute өрісі қабылданбауы керек.',
    'different' => ':attribute және :other өрістері әртүрлі болуы керек.',
    'digits' => ':attribute өрісі :digits саннан тұруы керек.',
    'digits_between' => ':attribute өрісі :min мен :max сан аралығында болуы керек.',
    'dimensions' => ':attribute өрісінде сурет өлшемдері дұрыс емес.',
    'distinct' => ':attribute өрісінде қайталанатын мән бар.',
    'doesnt_end_with' => ':attribute өрісі келесі мәндердің біреуімен аяқталмауы керек: :values.',
    'doesnt_start_with' => ':attribute өрісі келесі мәндердің біреуімен басталмауы керек: :values.',
    'email' => ':attribute өрісі жарамды электрондық пошта болуы керек.',
    'ends_with' => ':attribute өрісі келесі мәндердің біреуімен аяқталуы керек: :values.',
    'enum' => 'Таңдалған :attribute жарамсыз.',
    'exists' => 'Таңдалған :attribute жарамсыз.',
    'file' => ':attribute өрісі файл болуы керек.',
    'filled' => ':attribute өрісінде мән болуы керек.',
    'gt' => [
        'array' => ':attribute өрісінде :value элементтен көп болуы керек.',
        'file' => ':attribute өрісі :value килобайттан үлкен болуы керек.',
        'numeric' => ':attribute өрісі :value-ден үлкен болуы керек.',
        'string' => ':attribute өрісі :value таңбадан үлкен болуы керек.',
    ],
    'gte' => [
        'array' => ':attribute өрісінде кемінде :value элемент болуы керек.',
        'file' => ':attribute өрісі :value килобайттан үлкен немесе тең болуы керек.',
        'numeric' => ':attribute өрісі :value-ден үлкен немесе тең болуы керек.',
        'string' => ':attribute өрісі :value таңбадан үлкен немесе тең болуы керек.',
    ],
    'image' => ':attribute өрісі сурет болуы керек.',
    'in' => 'Таңдалған :attribute жарамсыз.',
    'in_array' => ':attribute өрісі :other ішінде болуы керек.',
    'integer' => ':attribute өрісі бүтін сан болуы керек.',
    'ip' => ':attribute өрісі жарамды IP мекенжайы болуы керек.',
    'ipv4' => ':attribute өрісі жарамды IPv4 мекенжайы болуы керек.',
    'ipv6' => ':attribute өрісі жарамды IPv6 мекенжайы болуы керек.',
    'json' => ':attribute өрісі жарамды JSON жолы болуы керек.',
    'lowercase' => ':attribute өрісі кіші әріптерден тұруы керек.',
    'lt' => [
        'array' => ':attribute өрісінде :value элементтен аз болуы керек.',
        'file' => ':attribute өрісі :value килобайттан аз болуы керек.',
        'numeric' => ':attribute өрісі :value-ден аз болуы керек.',
        'string' => ':attribute өрісі :value таңбадан аз болуы керек.',
    ],
    'lte' => [
        'array' => ':attribute өрісінде :value элементтен көп болмауы керек.',
        'file' => ':attribute өрісі :value килобайттан аз немесе тең болуы керек.',
        'numeric' => ':attribute өрісі :value-ден аз немесе тең болуы керек.',
        'string' => ':attribute өрісі :value таңбадан аз немесе тең болуы керек.',
    ],
    'mac_address' => ':attribute өрісі жарамды MAC мекенжайы болуы керек.',
    'max' => [
        'array' => ':attribute өрісінде :max элементтен көп болмауы керек.',
        'file' => ':attribute өрісі :max килобайттан үлкен болмауы керек.',
        'numeric' => ':attribute өрісі :max-дан үлкен болмауы керек.',
        'string' => ':attribute өрісі :max таңбадан үлкен болмауы керек.',
    ],
    'max_digits' => ':attribute өрісінде :max саннан көп болмауы керек.',
    'mimes' => ':attribute өрісі келесі типтегі файл болуы керек: :values.',
    'mimetypes' => ':attribute өрісі келесі типтегі файл болуы керек: :values.',
    'min' => [
        'array' => ':attribute өрісінде кемінде :min элемент болуы керек.',
        'file' => ':attribute өрісі кемінде :min килобайт болуы керек.',
        'numeric' => ':attribute өрісі кемінде :min болуы керек.',
        'string' => ':attribute өрісі кемінде :min таңба болуы керек.',
    ],
    'min_digits' => ':attribute өрісінде кемінде :min сан болуы керек.',
    'missing' => ':attribute өрісі болмауы керек.',
    'missing_if' => ':other :value болғанда :attribute өрісі болмауы керек.',
    'missing_unless' => ':other :value болмаса :attribute өрісі болмауы керек.',
    'missing_with' => ':values болғанда :attribute өрісі болмауы керек.',
    'missing_with_all' => ':values болғанда :attribute өрісі болмауы керек.',
    'multiple_of' => ':attribute өрісі :value еселігі болуы керек.',
    'not_in' => 'Таңдалған :attribute жарамсыз.',
    'not_regex' => ':attribute өрісінің форматы дұрыс емес.',
    'numeric' => ':attribute өрісі сан болуы керек.',
    'password' => [
        'letters' => ':attribute өрісінде кемінде бір әріп болуы керек.',
        'mixed' => ':attribute өрісінде кемінде бір бас және бір кіші әріп болуы керек.',
        'numbers' => ':attribute өрісінде кемінде бір сан болуы керек.',
        'symbols' => ':attribute өрісінде кемінде бір символ болуы керек.',
        'uncompromised' => 'Көрсетілген :attribute деректердің ағып кетуінде табылды. Басқа :attribute таңдаңыз.',
    ],
    'present' => ':attribute өрісі болуы керек.',
    'prohibited' => ':attribute өрісіне рұқсат етілмейді.',
    'prohibited_if' => ':other :value болғанда :attribute өрісіне рұқсат етілмейді.',
    'prohibited_unless' => ':other :values ішінде болмаса :attribute өрісіне рұқсат етілмейді.',
    'prohibits' => ':attribute өрісі :other өрісінің болуына тыйым салады.',
    'regex' => ':attribute өрісінің форматы дұрыс емес.',
    'required' => ':attribute өрісі міндетті.',
    'required_array_keys' => ':attribute өрісінде келесі жазбалар болуы керек: :values.',
    'required_if' => ':other :value болғанда :attribute өрісі міндетті.',
    'required_if_accepted' => ':other қабылданғанда :attribute өрісі міндетті.',
    'required_unless' => ':other :values ішінде болмаса :attribute өрісі міндетті.',
    'required_with' => ':values болғанда :attribute өрісі міндетті.',
    'required_with_all' => ':values болғанда :attribute өрісі міндетті.',
    'required_without' => ':values болмаған кезде :attribute өрісі міндетті.',
    'required_without_all' => ':values-дың ешқайсысы болмаған кезде :attribute өрісі міндетті.',
    'same' => ':attribute өрісі :other өрісімен сәйкес келуі керек.',
    'size' => [
        'array' => ':attribute өрісінде :size элемент болуы керек.',
        'file' => ':attribute өрісі :size килобайт болуы керек.',
        'numeric' => ':attribute өрісі :size болуы керек.',
        'string' => ':attribute өрісі :size таңба болуы керек.',
    ],
    'starts_with' => ':attribute өрісі келесі мәндердің біреуімен басталуы керек: :values.',
    'string' => ':attribute өрісі жол болуы керек.',
    'timezone' => ':attribute өрісі жарамды уақыт белдеуі болуы керек.',
    'unique' => ':attribute бұрыннан бар.',
    'uploaded' => ':attribute жүктеу сәтсіз аяқталды.',
    'uppercase' => ':attribute өрісі бас әріптерден тұруы керек.',
    'url' => ':attribute өрісі жарамды URL болуы керек.',
    'ulid' => ':attribute өрісі жарамды ULID болуы керек.',
    'uuid' => ':attribute өрісі жарамды UUID болуы керек.',

    /*
    |--------------------------------------------------------------------------
    | Арнайы тексеру тіліндегі жолдар
    |--------------------------------------------------------------------------
    |
    | Мұнда сіз атрибуттар үшін арнайы тексеру хабарламаларын көрсете аласыз.
    | "attribute.rule" конвенциясын қолданыңыз.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'арнайы-хабарлама',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Арнайы тексеру атрибуттары
    |--------------------------------------------------------------------------
    |
    | Бұл жолдар атрибуттың орнын оқырманға ыңғайлы етіп ауыстыру үшін қолданылады,
    | мысалы, "email" орнына "Электрондық пошта мекенжайы".
    |
    */

    'attributes' => [],

];
