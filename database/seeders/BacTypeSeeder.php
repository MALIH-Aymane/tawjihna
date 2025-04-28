<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BacType;

class BacTypeSeeder extends Seeder
{
    public function run(): void
    {
        $bacTypes = [
            // 🎓 Filière Sciences Mathématiques
            ['name_fr' => 'Sciences Mathématiques - Option A', 'name_ar' => 'العلوم الرياضية - خيار أ'],
            ['name_fr' => 'Sciences Mathématiques - Option B', 'name_ar' => 'العلوم الرياضية - خيار ب'],

            // 🔬 Filière Sciences Expérimentales
            ['name_fr' => 'Sciences Expérimentales - Option Sciences Physiques', 'name_ar' => 'العلوم التجريبية - خيار العلوم الفيزيائية'],
            ['name_fr' => 'Sciences Expérimentales - Option Sciences de la Vie et de la Terre', 'name_ar' => 'العلوم التجريبية - خيار علوم الحياة والأرض'],

            // 🌿 Filière Sciences Agronomiques
            ['name_fr' => 'Sciences Agronomiques', 'name_ar' => 'العلوم الزراعية'],

            // 📊 Filière Sciences Économiques et Gestion
            ['name_fr' => 'Sciences Économiques', 'name_ar' => 'العلوم الاقتصادية'],
            ['name_fr' => 'Sciences de Gestion et Comptabilité', 'name_ar' => 'علوم التدبير المحاسباتي'],

            // 📝 Filière Lettres et Sciences Humaines
            ['name_fr' => 'Lettres et Sciences Humaines - Option Lettres', 'name_ar' => 'الآداب والعلوم الإنسانية - خيار الآداب'],
            ['name_fr' => 'Lettres et Sciences Humaines - Option Sciences Humaines', 'name_ar' => 'الآداب والعلوم الإنسانية - خيار العلوم الإنسانية'],

            // 🎨 Filière Arts Appliqués
            ['name_fr' => 'Arts Appliqués', 'name_ar' => 'الفنون التطبيقية'],

            // ⚙️ Filière Sciences et Technologies
            ['name_fr' => 'Sciences et Technologies Mécaniques', 'name_ar' => 'العلوم والتكنولوجيات الميكانيكية'],
            ['name_fr' => 'Sciences et Technologies Électriques', 'name_ar' => 'العلوم والتكنولوجيات الكهربائية'],

            // 🛠️ Filière Baccalauréat Professionnel
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Gestion Administrative', 'name_ar' => 'البكالوريا المهنية - مهن التدبير الإداري'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de l’Hôtellerie et de la Restauration', 'name_ar' => 'البكالوريا المهنية - مهن الفندقة والمطعمة'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Maintenance des Véhicules', 'name_ar' => 'البكالوريا المهنية - مهن صيانة المركبات'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de l’Électricité', 'name_ar' => 'البكالوريا المهنية - مهن الكهرباء'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Mécanique', 'name_ar' => 'البكالوريا المهنية - مهن الميكانيك'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Construction Métallique', 'name_ar' => 'البكالوريا المهنية - مهن البناء المعدني'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Menuiserie Aluminium-Verre', 'name_ar' => 'البكالوريا المهنية - مهن النجارة الألومنيوم والزجاج'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Coiffure et de l’Esthétique', 'name_ar' => 'البكالوريا المهنية - مهن الحلاقة والتجميل'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Couture', 'name_ar' => 'البكالوريا المهنية - مهن الخياطة'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Pâtisserie', 'name_ar' => 'البكالوريا المهنية - مهن الحلويات'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Boulangerie', 'name_ar' => 'البكالوريا المهنية - مهن المخبزة'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Pêche Maritime', 'name_ar' => 'البكالوريا المهنية - مهن الصيد البحري'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de l’Agriculture', 'name_ar' => 'البكالوريا المهنية - مهن الفلاحة'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Mécanisation Agricole', 'name_ar' => 'البكالوريا المهنية - مهن الميكنة الزراعية'],
            ['name_fr' => 'Baccalauréat Professionnel - Métiers de la Maintenance des Installations Sanitaires et Thermiques', 'name_ar' => 'البكالوريا المهنية - مهن صيانة التجهيزات الصحية والحرارية'],
        ];

        foreach ($bacTypes as $type) {
            BacType::create($type);
        }
    }
}
