<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class FeedbackController extends Controller
{
    public function store(StoreFeedbackRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Log::info('Feedback Received', [
            'ip_address' => $request->ip(),
            'message_content' => $validated['message'],
        ]);
        return back()->with('status', 'Thank you! Your feedback! has been sent.');
    }
}
