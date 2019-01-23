$('#modifier-profile').bootstrapValidator({
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-times',
        validating: 'fas fa-sync'
    },
    fields: {
        nom: {
            validators: {
                notEmpty: {
                    message: 'Le nom de famille est requis et ne peut pas être vide'
                },
                stringLength: {
                    min: 3,
                    max: 50,
                    message: 'Le nom de famille doit comporter plus de 3 caractères et moins de 50 caractères'
                },
            }
        },
        prenom: {
            validators: {
                notEmpty: {
                    message: 'Le prénom est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    min: 3,
                    max: 50,
                    message: 'Le prénom doit comporter plus de 3 caractères et moins de 50 caractères'
                },
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
            },
        },
        adresse: {
            validators: {
                notEmpty: {
                    message: 'L\'adresse est obligatoire et ne peut pas être vide'
                }
            }
        },
        naissance: {
            validators: {
                notEmpty: {
                    message: 'La date de naissance est obligatoire et ne peut pas être vide'
                }
            }
        },
        bio: {
            validators: {
                notEmpty: {
                    message: 'La bio est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    max: 1000,
                    min: 10,
                    message: 'La bio doit avoir plus de 10 caractères et moins de 1000 caractères'
                }
            }
        }
    }
});



