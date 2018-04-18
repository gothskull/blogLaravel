[
  { "keys": ["shift+f5"], "command": "expand_fqcn" },
  { "keys": ["shift+f6"], "command": "find_use" },
  { "keys": ["shift+f4"], "command": "import_namespace" },
  { "keys": ["shift+f12"], "command": "goto_definition_scope" },
  { "keys": ["shift+f7"], "command": "insert_php_constructor_property" }
]
find_use: permite importar la sentencia use en la cabecera del archivo con el namespace correcto.

expand_fqcn: permite obtener el nombre completo de la clase seleccionada.

goto_definition_scope: permite buscar el archivo donde esta definida la clase seleccionada.

import_namespace: permite agregar la definición del namespace basado en el nombre del archivo donde se encuentre el cursor.

insert_php_constructor_property: permite agregar una propiedad al constructor de la clase donde se encuentre el cursor, si  el constructor no existe, se crea automáticamente y en caso de que exista, simplemente actualiza el código agregando la nueva propiedad.