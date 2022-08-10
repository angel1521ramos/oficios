"use strict";

// Class definition
var KTWizard2 = function () {
	// Base elements
	var _wizardEl = KTUtil.getById('kt_wizard');
	var _formEl = KTUtil.getById('kt_form');
	var _wizardObj;
	var _validations = [];

	var _initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					folio: {
						validators: {
							notEmpty: {
								message: 'El folio es requerido'
							}
						}
					},
					fecha: {
						validators: {
							notEmpty: {
								message: 'La fecha es requerida'
							}
						}
					},
					hora: {
						validators: {
							notEmpty: {
								message: 'La hora es requerida'
							}
						}
					},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

		// Step 2
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					noOficio: {
						validators: {
							notEmpty: {
								message: 'El numero de oficio es requerido'
							}
						}
					},
					telefono: {
						validators: {
							notEmpty: {
								message: 'El telefono es requerido'
							}
						}
					},
					remitente: {
						validators: {
							notEmpty: {
								message: 'El remitente es requerido'
							}
						}
					},
					dependencia: {
						validators: {
							notEmpty: {
								message: 'La dependencia es requerida'
							}
						}
					},
					asunto: {
						validators: {
							notEmpty: {
								message: 'El asunto es requerido'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

		// Step 3
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					observacion: {
						validators: {
							notEmpty: {
								message: 'La observacion es requerida'
							}
						}
					},
					recibe: {
						validators: {
							notEmpty: {
								message: 'Los datos de quien recibe es requerido'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

	}

	// Private functions
	var _initWizard = () => {
		// Initialize form wizard
		_wizardObj = new KTWizard(_wizardEl, {
			startStep: 1, // initial active step number
			clickableSteps: false // to make steps clickable this set value true and add data-wizard-clickable="true" in HTML for class="wizard" element
		});

		// Validation before going to next page
		_wizardObj.on('change', function (wizard) {
			if (wizard.getStep() > wizard.getNewStep()) {
				return; // Skip if stepped back
			}

			// Validate form before change wizard step
			var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					if (status == 'Valid') {
						wizard.goTo(wizard.getNewStep());

						KTUtil.scrollTop();
					} else {
						Swal.fire({
							text: "Disculpe, parece que se han detectado algunos errores, inténtalo de nuevo.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "¡Ok lo tengo!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light"
							}
						}).then(function () {
							KTUtil.scrollTop();
						});
					}
				});
			}

			return false;  // Do not change wizard step, further action will be handled by he validator
		});

		// Change event
		_wizardObj.on('changed', function (wizard) {
			KTUtil.scrollTop();
		});

		// Submit event
		_wizardObj.on('submit', function (wizard) {

			Swal.fire({
				text: "¿Todo esta bien? Por favor, confirme el envío del formulario.",
				icon: "success",
				showCancelButton: true,
				buttonsStyling: false,
				confirmButtonText: "si, envialo!",
				cancelButtonText: "No, cancelalo",
				customClass: {
					confirmButton: "btn font-weight-bold btn-primary",
					cancelButton: "btn font-weight-bold btn-default"
				}
			}).then((result) => {
				if (result.isConfirmed) {
					_formEl.submit(); // Submit form
				} else if (result.dismiss === 'cancel') {
					Swal.fire({
						text: "Su formulario no ha sido enviado!.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "¡Ok lo tengo!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-primary",
						}
					});
				}
			});
			
		});
	}

	return {
		// public functions
		init: function () {

			_initValidation();
			_initWizard();
		}
	};
}();

jQuery(document).ready(function () {
	KTWizard2.init();
});

