<?php

class __Mustache_bbc0bdf6ca2db51dee6394b64f2865e4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template-inline')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'blockE26c50e369b8afbf12d96b7c3ea9af5b'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $value = $context->find('js');
        $buffer .= $this->section78e62d0eba809eb06623bf1ad0b36903($context, $indent, $value);

        return $buffer;
    }

    private function section7713fb9bb0a8d8b8319336ba7f44185c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'btn-secondary';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'btn-secondary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23ce7dc23500e90c16e1d0ec5df66d6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' btn-danger ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' btn-danger ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA705d205bcb5268df4999a420bf6f67d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{element.customclassoverride}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->findDot('element.customclassoverride'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78e62d0eba809eb06623bf1ad0b36903(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^element.frozen}}
        require([\'core_form/submit\'], function(Submit) {
            Submit.init("{{ element.id }}");
        });
    {{/element.frozen}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('element.frozen');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        require([\'core_form/submit\'], function(Submit) {
';
                    $buffer .= $indent . '            Submit.init("';
                    $value = $this->resolveValue($context->findDot('element.id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '");
';
                    $buffer .= $indent . '        });
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockE26c50e369b8afbf12d96b7c3ea9af5b($context)
    {
        $indent = $buffer = '';
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '        <input type="submit"
';
            $buffer .= $indent . '                class="btn
';
            $value = $context->findDot('element.customclassoverride');
            if (empty($value)) {
                
                $buffer .= $indent . '                        ';
                $value = $context->findDot('element.secondary');
                if (empty($value)) {
                    
                    $buffer .= 'btn-primary';
                }
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $context->findDot('element.secondary');
                $buffer .= $this->section7713fb9bb0a8d8b8319336ba7f44185c($context, $indent, $value);
                $buffer .= '
';
            }
            $buffer .= $indent . '                    ';
            $value = $context->find('error');
            $buffer .= $this->section23ce7dc23500e90c16e1d0ec5df66d6b($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    ';
            $value = $context->findDot('element.customclassoverride');
            $buffer .= $this->sectionA705d205bcb5268df4999a420bf6f67d($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '                name="';
            $value = $this->resolveValue($context->findDot('element.name'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '                id="';
            $value = $this->resolveValue($context->findDot('element.id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '                value="';
            $value = $this->resolveValue($context->findDot('element.value'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('element.attributes'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= ' >
';
        }
    
        return $buffer;
    }
}
