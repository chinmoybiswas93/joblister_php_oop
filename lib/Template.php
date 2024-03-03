<?php 
class Template
{
    protected $template;
    protected $vars = array();

    public function __construct($template)
    {
        $this->template = $template;
    }

    public function __get($name)
    {
        return $this->vars[$name] ?? null;
    }

    public function __set($name, $value)
    {
        $this->vars[$name] = $value;
    }

    public function render()
    {
        if (!file_exists($this->template)) {
            // Handle missing template file
            return '';
        }

        // Start output buffering
        ob_start();

        // Extract variables into local scope
        extract($this->vars);

        // Include template file
        include $this->template;

        // Get the contents of the output buffer and clean it
        $output = ob_get_clean();

        return $output;
    }
}
?>
