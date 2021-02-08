window.onload = function () {
    try {
        let reg = document.querySelector("#registro");
        let form = reg.children[0];

        let nome = form.children[2];
        let sobrenome = form.children[3];
        let email = form.children[4];
        let senha = form.children[5];
        let repeat = form.children[6];

        listeners_keyup(nome, sobrenome, email, senha, repeat);
        listeners_submit(form, nome, sobrenome, email, senha, repeat);
    } catch (err) {
        //ignore o erro
    }
};

function listeners_submit(form, nome, sobrenome, email, senha, repeat) {
    let color_err = "1px solid #f02424";
    let op_err = [];
    form.addEventListener('submit', function (event) {
        if (nome.value.length <= 0) {
            nome.style.border = color_err;
            op_err.push("Insira seu nome!");
        }
        if (sobrenome.value.length <= 0) {
            sobrenome.style.border = color_err;
            op_err.push("Insira seu sobrenome!");
        }
        if (email.value.length <= 0 || !email.value.includes("@")) {
            email.style.border = color_err;
            op_err.push("Seu email é invalido!");
        }
        if (repeat.value != senha.value) {
            repeat.style.border = color_err;
            senha.style.border = color_err;
            op_err.push("Suas senhas não correspondem");
        }
        if (repeat.value.length < 8 || senha.value.length < 8) {
            repeat.style.border = color_err;
            senha.style.border = color_err;
            op_err.push("Sua senha possui menos de 8 caracteres");
        }
        if (op_err.length >= 1) {
            event.preventDefault();
            let reg_err = document.querySelector('#err_reg');
            reg_err.innerHTML = op_err[0];
            reg_err.style.display = "block";
            for (let i = 0; i <= op_err.length; i++) {
                op_err.pop();
            }
            op_err.pop();
        };

    })
};

function listeners_keyup(nome, sobrenome, email, senha, repeat) {
    nome.addEventListener('keyup', function (event) {
        if (nome.value.length > 0) {
            nome.style.border = "3px solid black";
        }
    })
    sobrenome.addEventListener('keyup', function (event) {
        if (sobrenome.value.length > 0) {
            sobrenome.style.border = "3px solid black";
        }
    })
    email.addEventListener('keyup', function (event) {
        if (email.value.length > 0 && email.value.includes("@")) {
            email.style.border = "3px solid black";
        }
    })
    senha.addEventListener('keyup', function (event) {
        repeat.addEventListener('keyup', function (event) {
            if (repeat.value == senha.value && repeat.value.length >= 8) {
                repeat.style.border = color_err;
                senha.style.border = color_err;
            }
        })
    })

}
