<?php

use Muradsaifi\Bulkemailtool\Controllers\BulkController;


Route::get('bulk_email_view/{id}', [BulkController::class, 'view'])->name('bulk_email_view');

Route::post('bulk_email_tool', [BulkController::class, 'submit'])->name('bulk_email_tool.submit');

Route::get('bulk_email_tool', [BulkController::class, 'send'])->name('bulk_email_tool.send');
Route::get('bulk_email_recent', [BulkController::class, 'bulk_email_recent'])->name('bulk_email_recent');
