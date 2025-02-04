<?php

namespace LivewireFilemanager\Filemanager\Http\Components;

use Illuminate\View\Component;

class BladeFilemanagerComponent extends Component
{
    public $model_type;

    public $model_id;

    public function __construct(string|null $model_type = null, int|null $model_id = null)
    {
        $this->model_type = $model_type;

        $this->model_id = $model_id;
    }

    public function render()
    {
        return view('livewire-filemanager::components.livewire-filemanager', [
            'model_type' => $this->model_type,
            'model_id' => $this->model_id
        ]);
    }
}
