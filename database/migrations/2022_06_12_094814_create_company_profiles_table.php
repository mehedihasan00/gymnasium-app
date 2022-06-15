<?php
use App\Models\CompanyProfile;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('phone', 20);
            $table->string('email');
            $table->string('address');
            $table->text('about')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('logo')->nullable();
            $table->string('about_image')->nullable();
            $table->string('bg_image')->nullable();
            $table->string('fr_title1')->nullable();
            $table->string('fr_image1')->nullable();
            $table->string('fr_title2')->nullable();
            $table->string('fr_image2')->nullable();
            $table->string('fr_title3')->nullable();
            $table->string('fr_image3')->nullable();

            $table->timestamps();
        });
        // Create a default one 
        $company = new CompanyProfile();
        $company->name = 'Default name'; 
        $company->email = 'test@gmail.com'; 
        $company->phone = '0170000000*'; 
        $company->address = 'Default address'; 
        $company->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_profiles');
    }
}
