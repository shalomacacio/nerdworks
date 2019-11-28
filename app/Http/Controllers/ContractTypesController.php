<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ContractTypeCreateRequest;
use App\Http\Requests\ContractTypeUpdateRequest;
use App\Repositories\ContractTypeRepository;
use App\Validators\ContractTypeValidator;

/**
 * Class ContractTypesController.
 *
 * @package namespace App\Http\Controllers;
 */
class ContractTypesController extends Controller
{
    /**
     * @var ContractTypeRepository
     */
    protected $repository;

    /**
     * @var ContractTypeValidator
     */
    protected $validator;

    /**
     * ContractTypesController constructor.
     *
     * @param ContractTypeRepository $repository
     * @param ContractTypeValidator $validator
     */
    public function __construct(ContractTypeRepository $repository, ContractTypeValidator $validator)
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
        $contractTypes = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $contractTypes,
            ]);
        }

        return view('contractTypes.index', compact('contractTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContractTypeCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ContractTypeCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $contractType = $this->repository->create($request->all());

            $response = [
                'message' => 'ContractType created.',
                'data'    => $contractType->toArray(),
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
        $contractType = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $contractType,
            ]);
        }

        return view('contractTypes.show', compact('contractType'));
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
        $contractType = $this->repository->find($id);

        return view('contractTypes.edit', compact('contractType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ContractTypeUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ContractTypeUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $contractType = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ContractType updated.',
                'data'    => $contractType->toArray(),
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
                'message' => 'ContractType deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ContractType deleted.');
    }
}
