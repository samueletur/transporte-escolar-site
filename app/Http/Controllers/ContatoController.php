<?php

namespace App\Http\Controllers;

use App\Library\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // Validação dos dados
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'celular' => 'required|string|max:20',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2'
        ], [
            'nome.required' => 'O nome é obrigatório.',
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'O email deve ser um endereço válido.',
            'celular.required' => 'O celular é obrigatório.',
            'cidade.required' => 'A cidade é obrigatória.',
            'estado.required' => 'O estado é obrigatório.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            Mail::send('emails.contato', $request->all(), function ($message) use ($request) {
                $message->to('contato@vanconfiavel.com.br')
                        ->subject('Novo contato - Van Confiável')
                        ->from($request->email, $request->nome);
            });

            Telegram::send('Cadastro Site Van Confiavel', [
                'message' => $request->except('_token')
            ]);            

            // Por enquanto, vamos apenas simular o sucesso
            return response()->json([
                'success' => true,
                'message' => 'Obrigado pelo seu interesse! Entraremos em contato em breve.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocorreu um erro ao enviar o formulário. Tente novamente. Erro: '.$e->getMessage()
            ], 500);
        }
    }
}
