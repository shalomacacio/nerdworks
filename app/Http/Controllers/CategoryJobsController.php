<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CategoryJobCreateRequest;
use App\Http\Requests\CategoryJobUpdateRequest;
use App\Repositories\CategoryJobRepository;
use App\Validators\CategoryJobValidator;

/**
 * Class CategoryJobsController.
 *
 * @package namespace App\Http\Controllers;
 */
class CategoryJobsController extends Controller
{
    /**
     * @var CategoryJobRepository
     */
    protected $repository;

    /**
     * @var CategoryJobValidator
     */
    protected $validator;

    /**
     * CategoryJobsController constructor.
     *
     * @param CategoryJobRepository $repository
     * @param CategoryJobValidator $validator
     */
    public function __construct(CategoryJobRepository $repository, CategoryJobValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $categoryJobs = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $categoryJobs,
            ]);
        }

        return view('categoryJobs.index', compact('categoryJobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryJobCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CategoryJobCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $categoryJob = $this->repository->create($request->all());

            $response = [
                'message' => 'CategoryJob created.',
                'data'    => $categoryJob->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoryJob = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $categoryJob,
            ]);
        }

        return view('categoryJobs.show', compact('categoryJob'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryJob = $this->repository->find($id);

        return view('categoryJobs.edit', compact('categoryJob'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryJobUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CategoryJobUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $categoryJob = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'CategoryJob updated.',
                'data'    => $categoryJob->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'CategoryJob deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'CategoryJob deleted.');
    }
}
