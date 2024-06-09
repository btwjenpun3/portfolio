<?php

namespace App\Livewire\Api;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class GameNicknameCheckerForm extends Component
{
    public $userId, $zoneId;

    public $nickname;

    public function submit()
    {
        try {
            $this->validate([
                'userId' => 'required|numeric',
                'zoneId' => 'required|numeric'
            ]);

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'x-rapidapi-host' => env('RAPIDAPI_HOST'),
                'x-rapidapi-key' => env('RAPIDAPI_API_KEY')
            ])->get(env('RAPIDAPI_URL') . '?userId=' . $this->userId . '&zoneId=' . $this->zoneId);

            $result = $response->json();

            if ($result['code'] === 200) {
                $this->nickname = $result['nickname'];

                $this->dispatch('nickname');

            } elseif ($result['code'] === 404) {
                $this->dispatch('error', 'Nickname not found. Are you sure your data is correct ?');                
            } else {
                throw new \Exception('Something error');
            }

        } catch (\Exception $e) {
            $this->dispatch('error', $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.api.game-nickname-checker-form');
    }
}
