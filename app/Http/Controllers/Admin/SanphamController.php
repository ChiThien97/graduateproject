<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Sanpham\BulkDestroySanpham;
use App\Http\Requests\Admin\Sanpham\DestroySanpham;
use App\Http\Requests\Admin\Sanpham\IndexSanpham;
use App\Http\Requests\Admin\Sanpham\StoreSanpham;
use App\Http\Requests\Admin\Sanpham\UpdateSanpham;
use App\Models\Sanpham;
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

class SanphamController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSanpham $request
     * @return array|Factory|View
     */
    public function index(IndexSanpham $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Sanpham::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'tensanpham', 'gia', 'gia_km', 'hinhanh', 'baohanh', 'ngaytao', 'enabled'],

            // set columns to searchIn
            ['id', 'tensanpham', 'slug', 'mota', 'hinhanh', 'baohanh', 'thongso']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.sanpham.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.sanpham.create');

        return view('admin.sanpham.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSanpham $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSanpham $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Sanpham
        $sanpham = Sanpham::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/sanphams'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/sanphams');
    }

    /**
     * Display the specified resource.
     *
     * @param Sanpham $sanpham
     * @throws AuthorizationException
     * @return void
     */
    public function show(Sanpham $sanpham)
    {
        $this->authorize('admin.sanpham.show', $sanpham);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Sanpham $sanpham
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Sanpham $sanpham)
    {
        $this->authorize('admin.sanpham.edit', $sanpham);


        return view('admin.sanpham.edit', [
            'sanpham' => $sanpham,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSanpham $request
     * @param Sanpham $sanpham
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSanpham $request, Sanpham $sanpham)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Sanpham
        $sanpham->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/sanphams'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/sanphams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySanpham $request
     * @param Sanpham $sanpham
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySanpham $request, Sanpham $sanpham)
    {
        $sanpham->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySanpham $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySanpham $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Sanpham::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
