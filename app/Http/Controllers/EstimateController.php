<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estimate;

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
        $estimate = Estimate::find($id); // Recherche un devis par son ID
        if (!$estimate) {
            return response()->json(['message' => 'Estimate non trouvé'], 404); // Si le devis n'est pas trouvé, retourne une réponse JSON avec un code de statut 404 (Non trouvé).
        }
        return response()->json($estimate, 200); // Si le devis est trouvé, retourne le devis en format JSON avec un code de statut 200 (OK).
    }

    // Méthode pour créer un nouveau devis
    public function store(Request $request)
    {
        $data = $request->all(); // Récupère toutes les données de la requête HTTP
        $estimate = Estimate::create($data); // Crée un nouveau devis en utilisant les données reçues
        return response()->json($estimate, 201); // Retourne le devis créé en format JSON avec un code de statut 201 (Créé avec succès).
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
}