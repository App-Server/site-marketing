function validateNumbers(input) {
    // Remove tudo o que não for número
    input.value = input.value.replace(/\D/g, '');

    // Limita o número de caracteres para cada tipo de input
    if (input.name === 'cpf' && input.value.length > 11) {
        input.value = input.value.slice(0, 11);  // Limita a 11 dígitos para CPF
    } else if (input.name === 'cnpj' && input.value.length > 14) {
        input.value = input.value.slice(0, 14);  // Limita a 14 dígitos para CNPJ
    } else if (input.name === 'whatsapp' && input.value.length > 15) {
        input.value = input.value.slice(0, 15);  // Limita a 15 dígitos para WhatsApp
    }
}
