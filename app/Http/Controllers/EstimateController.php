<?php

namespace App\Http\Controllers; // Définit le namespace pour ce contrôleur

use Illuminate\Http\Request; // Importe la classe Request de Laravel
use App\Models\Estimate; // Importe le modèle Estimate
use Illuminate\Support\Facades\Log; // Importe la classe Log de Laravel

use Illuminate\Support\Facades\Mail;


class EstimateController extends Controller
{
    // Méthode pour récupérer tous les devis
    public function index()
    {
        $estimates = Estimate::all(); // Récupère tous les enregistrements de la table "Estimate"
        return response()->json($estimates, 200); // Retourne la liste des devis en format JSON avec un code 200(traitée avec succès).
    }

    // Méthode pour afficher un devis spécifique en fonction de son ID
    public function show($id) 
    {
        $estimate = Estimate::find($id); // find est utilisé pour recherche un devis par son ID 
        if (!$estimate) {
            return response()->json(['message' => 'Estimate non trouvé'], 404); // Si le devis n'est pas trouvé, retourne une réponse JSON avec un code de statut 404 (Non trouvé).
        }
        return response()->json($estimate, 200); // Si le devis est trouvé, retourne le devis en format JSON avec un code de statut 200 (OK).
    }

    // Méthode pour créer un nouveau devis NEW
    public function store(Request $request)
    {
        Log::debug($request);
        Log::debug($request->input('other_text'));
        $data = $request->only([ // Méthode only inclut uniquement les données spécifiés dans le tableau (first_name, etc...)
            'first_name',
            'last_name',
            'company_name',
            'email',
            'phone_number',
            'website_url',
            'project_description',
            'project_type',
            'services_requests',
            'other_text',
        ]);
        $data['project_type'] = $request->input('project_type', ''); // La valeur 'project_type' de la requête à $data['project_type'], avec une valeur par défaut vide 
        $data['services_requests'] = $request->input('services_requests', ''); // Récupérez la valeur de 'services_requests' depuis la requête
        $data['other_text'] = $request->input('other_text', ''); // Récupérez la valeur de 'other_text' depuis la requête
    
        $estimate = Estimate::create($data); // Crée un nouvel objet Estimate avec les données extraites   // Envoi d'un e-mail de confirmation
        return response()->json($estimate, 201); // Renvoie une réponse JSON avec l'objet Estimate et un code de statut HTTP 201 (Créé)
    }

    // Méthode pour mettre à jour un devis existant en fonction de son ID
    public function update(Request $request, $id)
    {
        $estimate = Estimate::find($id); // Recherche un devis par son ID
        if (!$estimate) {
            return response()->json(['message' => 'Estimate non trouvé'], 404); // Si le devis n'est pas trouvé, retourne une réponse JSON avec un code de statut 404 (Non trouvé).
        }
        $estimate->update($request->all()); // Met à jour les données du devis avec les nouvelles données reçues dans la requête
        return response()->json($estimate, 200); // Retourne le devis mis à jour en format JSON avec un code de statut 200 (OK).
    }

    // Méthode pour supprimer un devis en fonction de son ID
    public function destroy($id)
    {
        $estimate = Estimate::find($id); // Recherche un devis par son ID
        if (!$estimate) {
            return response()->json(['message' => 'Estimate non trouvé'], 404); // Si le devis n'est pas trouvé, retourne une réponse JSON avec un code de statut 404 (Non trouvé).
        }
        $estimate->delete(); // Supprime le devis de la base de données
        return response()->json(['message' => 'Estimate supprimé'], 204); // Retourne une réponse JSON avec un code de statut 204 (Pas de contenu) pour indiquer que le devis a été supprimé avec succès.
    }
    

    // contient une méthode pour générer un jeton CSRF (Cross-Site Request Forgery) pour la SECURITE

    // Vérification du jeton CSRF (Cross-Site Request Forgery)
    public function verifierJeton(Request $request)
    {
    // Générer un jeton CSRF (token) pour la protection contre les attaques CSRF
    $jeton = csrf_token();

    // Renvoyer la vue 'verifier-jeton' en passant le jeton comme variable
    return view('verifier-jeton', compact('jeton'));
    }

}