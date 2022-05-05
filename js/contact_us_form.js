//CLIENT SIDE VERIFICATION

//constraints for form input
const constraints = {
    first_name: {
        presence: { allowEmpty: false }
    },
    last_name: {
        presence: { allowEmpty: false }
    },
    email_add: {
        presence: { allowEmpty: false },
        email: true
    },
    subject: {
        presence: { allowEmpty: false }
    },
    contact_msg: {
        presence: { allowEmpty: true }
    }
};

const form = document.getElementById("contact_form");

form.addEventListener('submit', function(event) {
    //input from form stored as json 
    const formValues = {
        first_name: form.elements.first_name.value,
        last_name: form.elements.last_name.value,
        email_add: form.elements.email_add.value,
        subject: form.elements.subject.value,
        contact_msg: form.elements.contact_msg.value
    };

    const errors = validate(formValues, constraints);

    if (errors) {
        event.preventDefault();
        const errorMessage = Object
            .values(errors)
            .map(function (fieldValues) { return fieldValues.join(', ')})
            .join("\n");
 
        alert(errorMessage);
      }
    }, false);