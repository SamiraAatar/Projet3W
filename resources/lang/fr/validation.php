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

    'accepted' => 'L´attribut :attribute doit "ê"tre accept"é".',
    'accepted_if' => 'L´attribut :attribute doit "ê"tre accept"é" si :other est :value.',
    'active_url' => 'L´attribut :attribute n"´"est pas un URL valide.',
    'after' => 'L´attribut :attribute doit "ê"tre une date apr"è"s :date.',
    'after_or_equal' => 'L´attribut :attribute doit "ê"tre une date post"é"rieure ou "é"gale "à"  :date.',
    'alpha' => 'L´attribut :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'L´attribut :attribute ne doit contenir que des lettres, des chiffres, des tirets et des caract"è"res de soulignement.',
    'alpha_num' => 'L´attribut :attribute ne doit contenir que des lettres et des chiffres.',
    'array' => 'L´attribut :attribute doit "ê"tre un tableau.',
    'before' => 'L´attribut :attribute doit "ê"tre une date ant"é"rieure "à" :date.',
    'before_or_equal' => 'L´attribut :attribute doit "ê"tre une date ant"é"rieure ou "é"gale "à" :date.',
    'between' => [
        'numeric' => 'L´attribut :attribute doit "ê"tre entre :min et :max.',
        'file' => 'L´attribut :attribute doit "ê"tre entre :min et :max kilobytes.',
        'string' => 'L´attribut :attribute doit "ê"tre entre :min et :max characters.',
        'array' => 'L´attribut :attribute doit "ê"tre entre :min et :max items.',
    ],
    'boolean' => 'Le champ de L´attribut :attribute  doit "ê"tre vrai ou faux.',
    'confirmed' => 'La confirmation deL´attribut :attribute ne concorde pas.',
    'current_password' => 'Le mot de passe est erron"é".',
    'date' => 'L´attribut :attribute est une date non valide.',
    'date_equals' => 'L´attribut :attribute doit "ê"tre une date "é"gale "à" :date.',
    'date_format' => 'L´attribut :attribute ne correspond pas au format :format.',
    'declined' => 'L´attribut :attribute doit "ê"tre refus"é".',
    'declined_if' => 'L´attribut :attribute doit "ê"tre d"é"clin"é" lorsque :other est :value.',
    'different' => 'L´attribut :attribute et :other doivent "ê"tre diff"é"rents.',
    'digits' => 'L´attribut :attribute doit "ê"tre :digits chiffres.',
    'digits_between' => 'L´attribut :attribute doit "ê"tre entre :min et :max digits.',
    'dimensions' => 'L´attribut :attribute a des dimensions d\'image invalides.',
    'distinct' => 'Le champ de L´attribut :attribute a une valeur en double.',
    'email' => 'L´attribut :attribute doit "ê"tre une adresse email valide.',
    'ends_with' => 'L´attribut :attribute doit se terminer par l\'un des "é"l"é"ments suivants: :values.',
    'enum' => 'L´attribut :attribute s"é"lectionn"é" est non valide.',
    'exists' => 'L´attribut :attribute s"é"lectionn"é" est non valide.',
    'file' => 'L´attribut :attribute doit "ê"tre un fichier.',
    'filled' => 'Le champ de L´attribut :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'L´attribut :attribute doit "ê"tre sup"é"rieur "à" :value.',
        'file' => 'L´attribut :attribute doit "ê"tre sup"é"rieur "à" :value kilobytes.',
        'string' => 'L´attribut :attribute doit "ê"tre sup"é"rieur "à" :value characters.',
        'array' => 'L´attribut :attribute doit avoir plus d\"é"l"é"ments :value .',
    ],
    'gte' => [
        'numeric' => 'L´attribut :attribute doit "ê"tre sup"é"rieur ou "é"gal "à" :value.',
        'file' => 'L´attribut :attribute doit "ê"tre sup"é"rieur ou "é"gal "à" :value kilobytes.',
        'string' => 'L´attribut :attribute doit "ê"tre sup"é"rieur ou "é"gal aux caract"è"res :value .',
        'array' => 'Le champ de L´attribut :attribute doit avoir des "é"l"é"ments :value  ou plus.',
    ],
    'image' => 'L´attribut :attribute doit "ê"tre une image.',
    'in' => 'L´attribut :attribute s"é"lectionn"é" est non valide.',
    'in_array' => 'Le champ de L´attribut :attribute n\'existe pas dans :other.',
    'integer' => 'L´attribut :attribute doit "ê"tre un nombre entier.',
    'ip' => 'L´attribut :attribute doit "ê"tre  une adresse IP valide.',
    'ipv4' => 'L´attribut :attribute doit "ê"tre une adresse IPv4 valide.',
    'ipv6' => 'L´attribut :attribute doit "ê"tre une adresse IPv6 valide.',
    'mac_address' => 'L´attribut :attribute doit "ê"tre une adresse MAC valide.',
    'json' => 'L´attribut :attribute doit "ê"tre un string JSON valide.',
    'lt' => [
        'numeric' => 'L´attribut :attribute doit "ê"tre inf"é"rieur "à" :value.',
        'file' => 'L´attribut :attribute doit "ê"tre inf"é"rieur "à" :value kilobytes.',
        'string' => 'L´attribut :attribute doit "ê"tre inf"é"rieur aux caract"è"res  :value .',
        'array' => 'L´attribut :attribute doit avoir moins d\´ "é"l"é"ments :value .',
    ],
    'lte' => [
        'numeric' => 'L´attribut :attribute doit "ê"tre inf"é"rieur ou "é"gal "à"  :value.',
        'file' => 'L´attribut :attribute doit "ê"tre inf"é"rieur ou "é"gal à :value kilobytes.',
        'string' => 'L´attribut :attribute doit "ê"tre inf"é"rieur ou "é"gal aux caract"è"res :value .',
        'array' => 'L´attribut :attribute ne doit pas avoir plus d\´ "é"l"é"ments :value .',
    ],
    'max' => [
        'numeric' => 'L´attribut :attribute ne doit pas "ê"tre sup"é"rieur "à" :max.',
        'file' => 'L´attribut :attribute ne doit pas "ê"tre  sup"é"rieur "à" :max kilobytes.',
        'string' => 'L´attribut :attribute doit "ê"tre sup"é"rieur aux caract"è"res :max .',
        'array' => 'L´attribut :attribute ne doit pas avoir plus d\´ "é"l"é"ments :max items.',
    ],
    'mimes' => 'L´attribut :attribute doit "ê"tre un fichier de type: :values.',
    'mimetypes' => 'L´attribut :attribute doit "ê"tre un fichier de type: :values.',
    'min' => [
        'numeric' => 'L´attribut :attribute doit "ê"tre au moins :min.',
        'file' => 'L´attribut :attribute doit "ê"tre au moins :min kilobytes.',
        'string' => 'L´attribut :attribute doit "ê"tre au moins :min caract"è"res.',
        'array' => 'L´attribut :attribute must have at least :min items :min éléments.',
    ],
    'multiple_of' => 'L´attribut :attribute doit "ê"tre un multiple de :value.',
    'not_in' => 'L´attribut :attribute s"é"lectionn"é" est non valide.',
    'not_regex' => 'Le format de L´attribut :attribute est non valide.',
    'numeric' => 'L´attribut :attribute doit "ê"tre un nombre.',
    'password' => 'Le mot de passe est erron"é".',
    'present' => 'Le champ de L´attribut :attribute doit "ê"tre pr"é"sent.',
    'prohibited' => 'Le champ de L´attribut :attribute est interdit.',
    'prohibited_if' => 'Le champ de L´attribut :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ de L´attribut :attribute est interdit sauf si :other est dans :values.',
    'prohibits' => 'Le champ de L´attribut :attribute interdit "à"  :other from d\'"ê"tre présent.',
    'regex' => 'Le format de L´attribut  :attribute est non valide.',
    'required' => 'Le champ de L´attribut :attribute est obligatoire.',
    'required_if' => 'Le champ de L´attribut :attribute est obligatoire lorsque :other est :value.',
    'required_unless' => 'Le champ de L´attribut :attribute est obligatoire,si :other est dans :values.',
    'required_with' => 'Le champ de L´attribut :attribute est obligatoire lorsque :values est présent.',
    'required_with_all' => 'L´attribut :attribute field is required when :values are present.',
    'required_without' => 'L´attribut :attribute field is required when :values is not present.',
    'required_without_all' => 'L´attribut :attribute field is required when none of :values are présent.',
    'same' => 'L´attribut :attribute and :other must match.',
    'size' => [
        'numeric' => 'L´attribut :attribute doit "ê"tre :size.',
        'file' => 'L´attribut :attribute doit "ê"tre :size kilobytes.',
        'string' => 'L´attribut :attribute doit "ê"tre :size caractères.',
        'array' => 'L´attribut :attribute doit contenir des "é"l"é"ments :size .',
    ],
    'starts_with' => 'L´attribut :attribute doit commencer par l\'un des "é"l"é"ments suivants: :values.',
    'string' => 'L´attribut :attribute doit "ê"tre une cha"î"ne de caract"è"res.',
    'timezone' => 'L´attribut :attribute doit "ê"tre un fuseau horaire valide.',
    'unique' => 'L´attribut :attribute a d"é"j"à" "é"t"é" utilis"é".',
    'uploaded' => 'L´attribut :attribute n\'a pas pu  t"é"l"é"charg"é".',
    'url' => 'L´attribut :attribute doit "ê"tre une URL valide.',
    'uuid' => 'L´attribut :attribute doit "ê"tre un UUID valide.',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
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

    'attributes' => [],

];
