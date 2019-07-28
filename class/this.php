$this is available when a method is called from within an object context.
$this is a reference to the calling object (usually the object to which the method belongs, but possibly another object, if the method is called statically from the context of a secondary object). As of PHP 7.0.0 calling a non-static method statically from an incompatible context results in $this being undefined inside the method.
$this este o referință la obiectul apelant (de obicei obiectul la care aparține metoda, dar eventual un alt obiect, dacă metoda se numește static din contextul unui obiect secundar).
