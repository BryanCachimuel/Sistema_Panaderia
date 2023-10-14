<?php

Route::get("/", ControladorUsuarios::class);
Route::get("/listar_usuarios", ControladorUsuarios::class);
Route::get("/usuarios/form/crear", ControladorUsuarios::class."@formCrearUsuario");
Route::get("/usuarios/form/edicion/:id", ControladorUsuarios::class."@formEdicionUsuario");

Route::post("/usuarios/registrar", ControladorUsuarios::class."@insertarUsuario");