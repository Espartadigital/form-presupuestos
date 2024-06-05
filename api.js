const sgMail = require('@sendgrid/mail');
sgMail.setApiKey(process.env.SENDGRID_API_KEY);

// Función para enviar correo
async function enviarCorreo() {
    const msg = {
        to: 'dev@espartadigital.com', // Dirección de correo del destinatario
        from: 'dev@espartadigital.com', // Dirección de correo del remitente
        subject: 'Nuevo presupuesto',
        text: 'Contenido del correo en texto plano',
        html: '<p>Contenido del correo en HTML</p>',
    };

    try {
        await sgMail.send(msg);
        console.log('Correo enviado correctamente.');
    } catch (error) {
        console.error('Error al enviar el correo:', error);
    }
}

// Llamada a la función para enviar correo
enviarCorreo();
