$('#send-mail').bootstrapValidator({
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-times',
        validating: 'fas fa-sync'
    },
    fields: {
        nom: {
            validators: {
                notEmpty: {
                    message: 'le nom complete est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    min: 6,
                    max: 100,
                    message: 'Le nom complete doit avoir plus de 6 caractères et moins de 100 caractères'
                }
            }
        },
        email: {
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
            }
        },
        sujet: {
            validators: {
                notEmpty: {
                    message: 'le sujet est obligatoire et ne peut pas être vide'
                }
            }
        },
        contenu: {
            validators: {
                notEmpty: {
                    message: 'Le message est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    max: 1000,
                    min: 10,
                    message: 'Le message doit comporter plus de 10 caractères et moins de 1000 caractères'
                }
            }
        }
    }
});
