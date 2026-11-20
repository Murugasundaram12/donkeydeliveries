<?php

namespace App\Http\Middleware;

use Closure;
use Throwable;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\SiteView;

class TrackSiteViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ignore API routes or non-GET requests if desired
        if ($request->isMethod('get')) {
            try {
                $siteView = SiteView::first();
                if ($siteView) {
                    $siteView->increment('count');
                } else {
                    SiteView::create(['count' => 53289]);
                }
            } catch (Throwable $e) {
                // Visitor tracking should never block normal page requests.
            }
        }

        return $next($request);
    }
}
