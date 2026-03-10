from google import genai

# masukkan api key di dalam client
clients = genai.Client(api_key="AIzaSyBj8AYOXDOoUI009Bq7ekLNU_qlNljLMJo")

# ambil dari pertanyaan
masukkan = input("Mau tanya apa? ")

# pengolahan respon dari AI nya
response = clients.models.generate_content(
    models = "gemini-2.0-flash",
    content = masukkan
)

print(response.text)