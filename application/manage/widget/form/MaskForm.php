<?php

namespace app\manage\widget\form;


class MaskForm
{
    protected $default = [
        'title' => '',
        'name' => '',
        'value' => '',
        'class' => '',
        'style' => '',
        'attr' => '',
        'option' => ''
    ];

    /**
     * 渲染
     *
     * @param array $data
     * @return string
     */
    public function fetch($data)
    {
        $data = array_merge($this->default, $data);

        // 配置
        $data['option'] = is_array($data['option']) ? json_encode($data['option']) : $data['option'];

        $html = '<div class="form-group"><label>' . $data['title'] . '</label>';
        $html .= '<input type="text" name="' . $data['name'] . '" value="' . $data['value'] . '" class="form-control nd-mask ' . $data['class'] . '" style=" ' . $data['style'] . '" ' . $data['attr'] . ' data-option=\'' . $data['option'] . '\' />';
        $html .= '</div>';
        return $html;
    }
}