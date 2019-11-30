<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\VacancyCreateRequest;
use App\Http\Requests\VacancyUpdateRequest;
use App\Repositories\VacancyRepository;
use App\Validators\VacancyValidator;
use Illuminate\Support\Facades\Auth;
use DB;

/**
 * Class VacanciesController.
 *
 * @package namespace App\Http\Controllers;
 */
class VacanciesController extends Controller
{
    /**
     * @var VacancyRepository
     */
    protected $repository;

    /**
     * @var VacancyValidator
     */
    protected $validator;



    /**
     * VacanciesController constructor.
     *
     * @param VacancyRepository $repository
     * @param VacancyValidator $validator
     */
    public function __construct(VacancyRepository $repository, VacancyValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $categories = DB::table('category_jobs')->get();
        // $company = DB::table('companies')->where('id', Auth::user()->id)->get();
        $cities = DB::table('cities')->get();
        $vacancies = $this->repository->paginate(10);
        $cities = DB::table('cities')->get();

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $vacancies,
            ]);
        }

        return view('vacancies.index', compact('vacancies', 'cities', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  VacancyCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(VacancyCreateRequest $request)
    {
        try {

            // return dd($request);

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $vacancy = $this->repository->create($request->all());

            $response = [
                'message' => 'Vacancy created.',
                'data'    => $vacancy->toArray(),
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
        $vacancy = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $vacancy ,
            ]);
        }

        return view('vacancies.show', compact('vacancy'));
    }

    public function create()
    {
        $categories = DB::table('category_jobs')->get();
        $cities = DB::table('cities')->get();
        $contracts= DB::table('contract_types')->get();
        return view('vacancies.create', compact('categories', 'cities', 'contracts'));
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
        $vacancy  = $this->repository->find($id);

        return view('vacancies.edit', compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  VacancyVacancyUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(VacancyUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $vacancy  = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Vacancy updated.',
                'data'    => $vacancy ->toArray(),
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
                'message' => 'Vacancy deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Vacancy deleted.');
    }
}
