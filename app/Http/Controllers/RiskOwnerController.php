<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskOwnerController extends Controller
{
    public function dashboard() {
        return view('risk_owner.dashboard');
    }

    public function identifyRisk() {
        return view('risk_owner.identify');
    }

    public function analyzeRisk() {
        return view('risk_owner.analyze');
    }

    public function evaluateRisk() {
        return view('risk_owner.evaluate');
    }
}
