<?php

class __Mustache_2cb9d011a16cff22f9b2792a914995a7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="tag-condition-container" data-region="tag-condition-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="form-group">
';
        $buffer .= $indent . '        <select multiple name="qtagids[]" class="form-control invisible" size="3" data-region="tag-select">
';
        $value = $context->find('tagoptions');
        $buffer .= $this->section904b61d61ed84bf3f4ddc33b3e77cb8b($context, $indent, $value);
        $buffer .= $indent . '        </select>
';
        $buffer .= $indent . '        ';
        if ($parent = $this->mustache->loadPartial('core/overlay_loading')) {
            $context->pushBlockContext(array(
                'hiddenclass' => array($this, 'blockD41d8cd98f00b204e9800998ecf8427e'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section93605be98fa61d7052fa54a4ac2cc849($context, $indent, $value);

        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section904b61d61ed84bf3f4ddc33b3e77cb8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option {{#selected}}selected{{/selected}} value="{{id}}">{{name}}</option>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <option ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= ' value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE42b927454f5df86d5f93d79d4bde85f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' filterbytags, core_question ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' filterbytags, core_question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e9c9ae5b7fa83e76ed1ba3f3ffaa9d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} filterbytags, core_question {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionE42b927454f5df86d5f93d79d4bde85f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20fadba90e39fe4efffb75b9395ebf07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notagfiltersapplied, core_question ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notagfiltersapplied, core_question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBaa7a5c704ba2dbb20f19285c96c2600(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} notagfiltersapplied, core_question {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section20fadba90e39fe4efffb75b9395ebf07($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93605be98fa61d7052fa54a4ac2cc849(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
    \'core/form-autocomplete\'
],
function(
    $,
    AutoComplete
) {
    var root = $(\'[data-region="tag-condition-container-{{uniqid}}"]\');
    var selectElement = root.find(\'[data-region="tag-select"]\');
    var loadingContainer = root.find(\'[data-region="overlay-icon-container"]\');
    var placeholderText = {{#quote}}{{#str}} filterbytags, core_question {{/str}}{{/quote}};
    var noSelectionText = {{#quote}}{{#str}} notagfiltersapplied, core_question {{/str}}{{/quote}};

    AutoComplete.enhance(
        selectElement, // Element to enhance.
        false, // Don\'t allow support for creating new tags.
        false, // Don\'t allow AMD module to handle loading new tags.
        placeholderText, // Placeholder text.
        false, // Make search case insensitive.
        true, // Show suggestions for tags.
        noSelectionText // Text when no tags are selected.
    ).always(function() {
        // Hide the loading icon once the autocomplete has initialised.
        loadingContainer.addClass(\'hidden\');
    });

    // We need to trigger a form submission because of how the question bank
    // page handles reloading the questions when an option changes.
    selectElement.on(\'change\', function() {
        selectElement.closest(\'form\').submit();
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core/form-autocomplete\'
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    AutoComplete
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var root = $(\'[data-region="tag-condition-container-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"]\');
';
                $buffer .= $indent . '    var selectElement = root.find(\'[data-region="tag-select"]\');
';
                $buffer .= $indent . '    var loadingContainer = root.find(\'[data-region="overlay-icon-container"]\');
';
                $buffer .= $indent . '    var placeholderText = ';
                $value = $context->find('quote');
                $buffer .= $this->section3e9c9ae5b7fa83e76ed1ba3f3ffaa9d2($context, $indent, $value);
                $buffer .= ';
';
                $buffer .= $indent . '    var noSelectionText = ';
                $value = $context->find('quote');
                $buffer .= $this->sectionBaa7a5c704ba2dbb20f19285c96c2600($context, $indent, $value);
                $buffer .= ';
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    AutoComplete.enhance(
';
                $buffer .= $indent . '        selectElement, // Element to enhance.
';
                $buffer .= $indent . '        false, // Don\'t allow support for creating new tags.
';
                $buffer .= $indent . '        false, // Don\'t allow AMD module to handle loading new tags.
';
                $buffer .= $indent . '        placeholderText, // Placeholder text.
';
                $buffer .= $indent . '        false, // Make search case insensitive.
';
                $buffer .= $indent . '        true, // Show suggestions for tags.
';
                $buffer .= $indent . '        noSelectionText // Text when no tags are selected.
';
                $buffer .= $indent . '    ).always(function() {
';
                $buffer .= $indent . '        // Hide the loading icon once the autocomplete has initialised.
';
                $buffer .= $indent . '        loadingContainer.addClass(\'hidden\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    // We need to trigger a form submission because of how the question bank
';
                $buffer .= $indent . '    // page handles reloading the questions when an option changes.
';
                $buffer .= $indent . '    selectElement.on(\'change\', function() {
';
                $buffer .= $indent . '        selectElement.closest(\'form\').submit();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockD41d8cd98f00b204e9800998ecf8427e($context)
    {
        $indent = $buffer = '';
    
        return $buffer;
    }
}
