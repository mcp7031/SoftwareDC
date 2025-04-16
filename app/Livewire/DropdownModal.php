<?php

namespace App\Livewire;

use Livewire\Component;

class DropdownModal extends Component
{
    public $items = ['About', 'WebDev', 'SecureFM'];
    public $selectedItem = null;
    public $showModal = false;
    public $modalText = '';
    public $modalButtons = [];
    public $pdfUrl = '';

    protected $modalTextMapping = [
        'About' => "My name is David C. Allen.  I am the principle developer and CEO of SoftwareDC. I am working on becoming a ML Specialist Solutions Architect in order to foster the growth of my enterprise software project SecureFM. To find out more about me, click on Continue.",
        'WebDev' => "Our favourite tools for website development are Tailwinds, Alpine JS, Laravel and Livewire (TALL stack). Equally impressive are Vue JS, Inertia JS, Laravel and TailwindCSS (VILT stack). To find out more click on Continue.",
        'SecureFM' => "SecureFM (FM for Facilities Management) is the name of one of the most ambitious projects for managing commercial real estate environmements.  There is nothing like it in the world. To find out more click on Continue."
    ];

    protected $modalButtonsMapping = [
        'About' => [
            ['label' => 'Cancel', 'action' => 'closeModal'],
            ['label' => 'Continue', 'action' => 'continueAction']
        ],
        'WebDev' => [
            ['label' => 'Cancel', 'action' => 'closeModal'],
            ['label' => 'Edit', 'action' => 'editAction'],
            ['label' => 'Continue', 'action' => 'continueAction']
        ],
        'SecureFM' => [
            ['label' => 'Close', 'action' => 'closeModal'],
            ['label' => 'Continue', 'action' => 'continueAction']
        ]
    ];

    protected $pdfUrlMapping = [
        'About' => '/public/docs/myStory.pdf',
        'WebDev' => '/docs/webdev.pdf'
    ];

    public function selectItem($item)
    {
        $this->selectedItem = $item;
        $this->modalText = $this->modalTextMapping[$item] ?? 'You have selected an item.';
        $this->modalButtons = $this->modalButtonsMapping[$item] ?? [
            ['label' => 'Close', 'action' => 'closeModal']
        ];
        $this->pdfUrl = $this->pdfUrlMapping[$item] ?? '';
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function continueAction()
    {
        // Define what happens when the continue button is clicked
        if ($this->selectedItem === "About") {
           $this->dispatch('openPdf', $this->pdfUrl);
        }
        $this->closeModal();

    }

    public function editAction()
    {
        // Define what happens when the edit button is clicked
        // For now, just close the modal
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.dropdown-modal');
    }
}
