$('#ajout-etudiant').bootstrapValidator({
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-times',
        validating: 'fas fa-sync'
    },
    fields: {
        nom: {
            validators: {
                notEmpty: {
                    message: 'le nom est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    min: 3,
                    max: 30,
                    message: 'Le nom doit avoir plus de 3 caractères et moins de 30 caractères'
                }
            }
        },
        prenom: {
            validators: {
                notEmpty: {
                    message: 'The picture is required and cannot be empty'
                }
            },
            stringLength: {
                min: 3,
                max: 30,
                message: 'Le prenom doit avoir plus de 3 caractères et moins de 30 caractères'
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
        password: {
            validators: {
                notEmpty: {
                    message: 'Le mot de passe est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    min: 6,
                    message: 'Le mot de passe doit comporter plus de 6 caractères'
                },
                identical: {
                    field: 'confirmPassword',
                    message: 'Le mot de passe et sa confirmation ne sont pas les mêmes'
                }
            }
        },
        confirmPassword: {
            validators: {
                notEmpty: {
                    message: 'Le mot de passe de confirmation est obligatoire et ne peut pas être vide'
                },
                identical: {
                    field: 'password',
                    message: 'Le mot de passe de confirmation et son mot de passe ne sont pas les mêmes'
                }
            }
        }
    }
});

$('#ajout-profession').bootstrapValidator({
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-times',
        validating: 'fas fa-sync'
    },
    fields: {
        nom: {
            validators: {
                notEmpty: {
                    message: 'le nom est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    min: 3,
                    max: 30,
                    message: 'Le nom doit avoir plus de 3 caractères et moins de 30 caractères'
                }
            }
        },
        prenom: {
            validators: {
                notEmpty: {
                    message: 'The picture is required and cannot be empty'
                }
            },
            stringLength: {
                min: 3,
                max: 30,
                message: 'Le prenom doit avoir plus de 3 caractères et moins de 30 caractères'
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
        password: {
            validators: {
                notEmpty: {
                    message: 'Le mot de passe est obligatoire et ne peut pas être vide'
                },
                stringLength: {
                    min: 6,
                    message: 'Le mot de passe doit comporter plus de 6 caractères'
                },
                identical: {
                    field: 'confirmPassword',
                    message: 'Le mot de passe et sa confirmation ne sont pas les mêmes'
                }
            }
        },
        confirmPassword: {
            validators: {
                notEmpty: {
                    message: 'Le mot de passe de confirmation est obligatoire et ne peut pas être vide'
                },
                identical: {
                    field: 'password',
                    message: 'Le mot de passe de confirmation et son mot de passe ne sont pas les mêmes'
                }
            }
        }
    }
});