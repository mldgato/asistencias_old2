<?php

namespace App\Http\Livewire\Admin\Insurances;

use Livewire\Component;
use App\Models\Insurance;

class ShowInsurance extends Component
{
    public $policy, $insuredLastName, $insuredFirstName, $vehicleBrand, $vehicleLine, $vehicleType, $vehicleYear, $vehicleColor, $vehiclePlate;
    public $search;
    public $readyToLoad = false;

    public function render()
    {
        if ($this->search != "") {
            $insurance = Insurance::where('policy', 'LIKE', '%' . $this->search . '%')
                ->orWhere('vehiclePlate', 'LIKE', '%' . $this->search . '%')->first();
            $this->policy = $insurance->policy;
            $this->insuredLastName = $insurance->insuredLastName;
            $this->insuredFirstName = $insurance->insuredFirstName;
            $this->vehicleBrand = $insurance->vehicleBrand;
            $this->vehicleLine = $insurance->vehicleLine;
            $this->vehicleType = $insurance->vehicleType;
            $this->vehicleYear = $insurance->vehicleYear;
            $this->vehicleColor = $insurance->vehicleColor;
            $this->vehiclePlate = $insurance->vehiclePlate;
        } else {
            $this->policy = "";
            $this->insuredLastName = "";
            $this->insuredFirstName = "";
            $this->vehicleBrand = "";
            $this->vehicleLine = "";
            $this->vehicleType = "";
            $this->vehicleYear = "";
            $this->vehicleColor = "";
            $this->vehiclePlate = "";
        }
        return view('livewire.admin.insurances.show-insurance');
    }

    public function loadInsurance()
    {
        $this->readyToLoad = true;
    }
}
