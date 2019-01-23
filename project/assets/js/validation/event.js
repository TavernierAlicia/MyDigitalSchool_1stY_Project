$('#event-ajouter').bootstrapValidator({
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
                    max: 100,
                    message: 'Le titre doit comporter plus de 6 caractères et moins de 100 caractères'
                },
            }
        },
        debut: {
            validators: {
                notEmpty: {
                    message: 'La date de début est obligatoire et ne peut pas être vide'
                }
            }
        },
        fin: {
            validators: {
                notEmpty: {
                    message: 'La date de fin est obligatoire et ne peut pas être vide'
                }
            }
        },
        lieu: {
            validators: {
                notEmpty: {
                    message: 'Le lieux est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    min: 6,
                    max: 200,
                    message: 'Le lieux doit comporter plus de 6 caractères et moins de 200 caractères'
                }
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
                    message: 'Le description doit comporter plus de 10 caractères et moins de 1000 caractères'
                }
            }
        }
    }
});

$('#event-modifier').bootstrapValidator({
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
        debut: {
            validators: {
                notEmpty: {
                    message: 'La date de début est obligatoire et ne peut pas être vide'
                }
            }
        },
        fin: {
            validators: {
                notEmpty: {
                    message: 'La date de fin est obligatoire et ne peut pas être vide'
                }
            }
        },
        lieu: {
            validators: {
                notEmpty: {
                    message: 'Le lieux est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    min: 6,
                    max: 200,
                    message: 'Le lieux doit comporter plus de 6 caractères et moins de 200 caractères'
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