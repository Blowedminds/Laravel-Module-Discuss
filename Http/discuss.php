<?php

Route::get('rooms', 'RoomController@getRooms');
Route::get('room/{article_slug}/messages', 'RoomController@getMessages');
Route::put('room/{article_slug}/message', 'RoomController@putMessage');
Route::post('message/{message_id}', 'RoomController@postMessage');
Route::delete('message/{message_id}', 'RoomController@deleteMessage');