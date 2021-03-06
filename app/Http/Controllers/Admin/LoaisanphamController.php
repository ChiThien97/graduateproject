<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Loaisanpham\BulkDestroyLoaisanpham;
use App\Http\Requests\Admin\Loaisanpham\DestroyLoaisanpham;
use App\Http\Requests\Admin\Loaisanpham\IndexLoaisanpham;
use App\Http\Requests\Admin\Loaisanpham\StoreLoaisanpham;
use App\Http\Requests\Admin\Loaisanpham\UpdateLoaisanpham;
use App\Models\Loaisanpham;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LoaisanphamController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexLoaisanpham $request
     * @return array|Factory|View
     */
    public function index(IndexLoaisanpham $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Loaisanpham::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'tenloai', 'ngaytao', 'enabled'],

            // set columns to searchIn
            ['id', 'tenloai', 'slug', 'mota']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.loaisanpham.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.loaisanpham.create');

        return view('admin.loaisanpham.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreLoaisanpham $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreLoaisanpham $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Loaisanpham
        $loaisanpham = Loaisanpham::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/loaisanphams'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/loaisanphams');
    }

    /**
     * Display the specified resource.
     *
     * @param Loaisanpham $loaisanpham
     * @throws AuthorizationException
     * @return void
     */
    public function show(Loaisanpham $loaisanpham)
    {
        $this->authorize('admin.loaisanpham.show', $loaisanpham);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Loaisanpham $loaisanpham
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Loaisanpham $loaisanpham)
    {
        $this->authorize('admin.loaisanpham.edit', $loaisanpham);


        return view('admin.loaisanpham.edit', [
            'loaisanpham' => $loaisanpham,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateLoaisanpham $request
     * @param Loaisanpham $loaisanpham
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateLoaisanpham $request, Loaisanpham $loaisanpham)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Loaisanpham
        $loaisanpham->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/loaisanphams'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/loaisanphams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyLoaisanpham $request
     * @param Loaisanpham $loaisanpham
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyLoaisanpham $request, Loaisanpham $loaisanpham)
    {
        $loaisanpham->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyLoaisanpham $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyLoaisanpham $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Loaisanpham::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
