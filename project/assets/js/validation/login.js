$('#connexion').bootstrapValidator({
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-times',
        validating: 'fas fa-sync'
    },
    fields: {
        email: {
            validators: {
                notEmpty: {
                    message: 'L\'email est obligatoire et ne peut pas être vide'
                },
                emailAddress: {
                    message: 'La valeur n\'est pas une adresse e-mail valide'
                },
                regexp: {
                    regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                    message: 'La valeur n\'est pas une adresse e-mail valide'
                }
            }
        },
        password: {
            validators: {
                notEmpty: {
                    message: 'Le mot de passe est obligatoire et ne peut pas être vide'
                }
            }
        }
    }
});
