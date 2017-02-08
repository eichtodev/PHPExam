<?php
	SimpleXMLElement implements Traversable {
	/* Methods */
		final public __construct ( string $data [, int $options = 0 [, bool $data_is_url = false [, string $ns = "" [, bool $is_prefix = false ]]]] )
		public void addAttribute ( string $name [, string $value [, string $namespace ]] )
		public SimpleXMLElement addChild ( string $name [, string $value [, string $namespace ]] )
		public mixed asXML ([ string $filename ] )
		public SimpleXMLElement attributes ([ string $ns = NULL [, bool $is_prefix = false ]] )
		public SimpleXMLElement children ([ string $ns [, bool $is_prefix = false ]] )
		public int count ( void )
		public array getDocNamespaces ([ bool $recursive = false [, bool $from_root = true ]] )
		public string getName ( void )
		public array getNamespaces ([ bool $recursive = false ] )
		public bool registerXPathNamespace ( string $prefix , string $ns )
		public string __toString ( void )
		public array xpath ( string $path )
	}
?>