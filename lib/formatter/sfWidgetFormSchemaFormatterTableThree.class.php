<?php

class sfWidgetFormSchemaFormatterTableThree extends sfWidgetFormSchemaFormatter
{
  protected
    $rowFormat       = "<tr class=\"form_row%row_class%\">\n  <td class=\"form_label\">%label%</td>\n  <td class=\"form_field\">%field%%hidden_fields%</td>\n  <td class=\"form_error\">%error%%help%</td></tr>\n",
    $errorRowFormat  = "<tr><td colspan=\"3\">\n%errors%</td></tr>\n",
    $helpFormat      = '<div class="form_help">%help%</div>',
    $decoratorFormat = "<table>\n  %content%</table>",
    $errorListFormatInARow     = "  <div class=\"form_error_list\">\n%errors%  </div>\n",
    $errorRowFormatInARow      = "    <div>%error%</div>\n",
    $namedErrorRowFormatInARow = "    <div>%name%: %error%</div>\n";
 
  public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
  {
    $row = parent::formatRow(
      $label,
      $field,
      $errors,
      $help,
      $hiddenFields
    );
 
    return strtr($row, array(
      '%row_class%' => (count($errors) > 0) ? ' form_row_error' : '',
    ));
  }
}
