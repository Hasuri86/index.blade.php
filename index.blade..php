php artisan make:migration create_inboxes_table
public function up()
{
    Schema::create('inboxes', function (Blueprint $table) {
        $table->id();
        $table->string('name', 255);
        $table->string('phone', 255);
        $table->longText('message');
        $table->timestamps();
        $table->primary('id');
    });
}
php artisan migrate
php artisan make:model Inbox
php artisan make:controller InboxController --resource
use App\Http\Controllers\InboxController;
Route::resource('inboxes', InboxController::class);
php artisan serve