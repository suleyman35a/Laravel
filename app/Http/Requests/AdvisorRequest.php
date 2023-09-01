<?php

namespace App\Http\Requests;

use Illuminate\Support\Facedes\Storage;
use Illuminate\Foundation\Http\FormRequest;

class AdvisorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function uploadImage(Request $request)
{
    // Gelen isteği doğrulayın (isteğe bağlı)

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();

        // Resmi saklamak için seçilen sürücüyü (disk) seçin
        // 'public' burada sürücünün adıdır, config/filesystems.php dosyasında tanımlanmış olmalıdır
        // Örnek olarak 'public', resimleri genel olarak erişilebilir bir yere saklamak için kullanılabilir
        Storage::disk('public')->put($imageName, file_get_contents($image));

        // Resmin dosya adını veritabanına kaydetme işlemini burada yapabilirsiniz
        // Örnek olarak:
        // YourModel::create(['image' => $imageName]);

        return 'Resim başarıyla yüklendi!';
    }

    return 'Yüklenecek bir resim bulunamadı.';
}
}
