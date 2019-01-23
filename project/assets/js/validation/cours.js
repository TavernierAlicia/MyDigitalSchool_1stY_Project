$('#cours-ajouter').bootstrapValidator({
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-times',
        validating: 'fas fa-sync'
    },
    fields: {
        titre: {
            validators: {
                notEmpty: {
                    message: 'Le titre est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    min: 6,
                    max: 30,
                    message: 'Le titre doit comporter plus de 6 caractères et moins de 30 caractères'
                },
            }
        },
        cours: {
            validators: {
                notEmpty: {
                    message: 'L\'image est obligatoire et ne peut pas être vide'
                }
            }
        },
        description: {
            validators: {
                notEmpty: {
                    message: 'Le description est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    max: 1000,
                    min: 10,
                    message: 'TLe description doit comporter plus de 10 caractères et moins de 1000 caractères'
                }
            }
        }
    }
});

$('#cours-modifier').bootstrapValidator({
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-times',
        validating: 'fas fa-sync'
    },
    fields: {
        titre: {
            validators: {
                notEmpty: {
                    message: 'Le titre est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    min: 6,
                    max: 30,
                    message: 'Le titre doit comporter plus de 6 caractères et moins de 30 caractères'
                },
            }
        },
        description: {
            validators: {
                notEmpty: {
                    message: 'Le description est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    max: 1000,
                    min: 10,
                    message: 'TLe description doit comporter plus de 10 caractères et moins de 1000 caractères'
                }
            }
        }
    }
});