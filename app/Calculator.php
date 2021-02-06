<?php

namespace App;

use App\Models\Operations as OperationsModel;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Exception;
use App\Enums\HttpResponses;
use App\OperationHandler as OperationHandler;
use Ramsey\Collection\Exception\ValueExtractionException;

class Calculator
{
    public function __construct(
        private OperationHandler $operation
    )
    {
        $this->operation = new OperationHandler();
    }

    public function index(OperationsModel $operationModel): JsonResponse
    {
        try {
            $operations = $this->operation->getMostRecentOperations($operationModel);

            return response()->json($operations, HttpResponses::HTTP_RESPONSE_OK);
        } catch (Exception $exception) {
            $response = [ 'error' => $exception->getMessage() ];

            return response()->json($response, HttpResponses::HTTP_RESPONSE_BAD_REQUEST);
        }
    }

    public function create(): View
    {
        return view('index');
    }

    public function store(Request $request, OperationsModel $operationModel): JsonResponse
    {
        try {
            $response = $this->operation->storeAnOperation($request, $operationModel);

            return response()->json($response, HttpResponses::HTTP_RESPONSE_CREATED);
        } catch (ValueExtractionException $exception) {
            $response = [
                'error' => 'Operation not allowed',
                'exception' => $exception->getMessage(),
                'operation' => $request->get('operation'),
            ];

            return response()->json($response, HttpResponses::HTTP_RESPONSE_BAD_REQUEST);
        } catch (Exception $exception) {
            $response = [
                'error' => 'Calculation Error',
                'exception' => $exception->getMessage(),
                'operation' => $request->get('operation'),
            ];

            return response()->json($response, HttpResponses::HTTP_RESPONSE_BAD_REQUEST);
        }
    }

    public function delete(OperationsModel $operationModel): JsonResponse
    {
        try {
            $response = $this->operation->deleteAnOperation($operationModel);

            return response()->json($response, HttpResponses::HTTP_RESPONSE_OK);
        } catch (Exception $exception) {
            $response = [ 'result' => $exception->getMessage() ];

            return response()->json($response, HttpResponses::HTTP_RESPONSE_BAD_REQUEST);
        }
    }

    public function destroy(OperationsModel $operationsModel): JsonResponse
    {
        try {
            $response = $this->operation->destroyAllOperations($operationsModel);

            return response()->json($response, HttpResponses::HTTP_RESPONSE_OK);
        } catch (ModelNotFoundException $exception) {
            $response = [ 'result' => $exception->getMessage() ];

            return response()->json($response, HttpResponses::HTTP_RESPONSE_NOT_FOUND);
        } catch (Exception $exception) {
            $response = [ 'result' => $exception->getMessage() ];

            return response()->json($response, HttpResponses::HTTP_RESPONSE_BAD_REQUEST);
        }
    }
}
