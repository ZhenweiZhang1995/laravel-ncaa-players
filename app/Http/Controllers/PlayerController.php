<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PlayerController extends Controller
{
  public function index ()
  {

    $players = Player::all();
    return Response::json($players);
  }

  public function create (Request $request)
  {
    // POST /games
    // create new game
    Player::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    $player =Player:: find($id);
    return Response::json($game);

  }

  public function update (Request $request, $id)
  {
    $player = Player::find($id);

    $player-> update($request->all());
    return Response::json(['updated' => true]);

  }

  public function destroy ($id)
  {
    $player = Player::find($id);
    $player ->delete();
    return Response::json(['updated' => true]);

  }
}
