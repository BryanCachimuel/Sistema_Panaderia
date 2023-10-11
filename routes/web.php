<?php

Route::get("/", ControladorUsuarios::class);
Route::get("/listar_usuarios", ControladorUsuarios::class);
Route::get("/usuarios/form/crear", ControladorUsuarios::class."@formCrearUsuario");

Route::post("/usuarios/registrar", ControladorUsuarios::class."@insertarUsuario");