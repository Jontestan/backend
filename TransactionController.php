class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'wallet_id' => 'required|exists:wallets,id',
            'type' => 'required|in:income,expense',
            'amount' => 'required|numeric|min:0.01',
            'description' => 'nullable|string'
        ]);

        $transaction = Transaction::create($validated);

        return response()->json($transaction, 201);
    }
}
