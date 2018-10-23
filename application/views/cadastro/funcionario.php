    <div style="display:flex; margin:auto; width:1000px; justify-content: center;">
        <form class="cadastro_funcionario" method="POST" action="cadastrar/funcionario">

            Nome:
            <input type="text" name="nome" /><br />
            Data de Nascimento:
            <input type="date" name="data_nascimento" /><br />
            CPF:
            <input type="number" class="form-control" name="cpf" /><br />
            Cargo:
            <select name="cargo">
                <option value="0">
                    Selecione
                </option>

            </select><br />
            Celular:
            <input type="text" name="celular" /><br />
            E-mail:
            <input type="email" name="email" /><br />
            Telefone:
            <input type="text" name="telefone" /><br />
            Estado:
            <select name="estado">
                <option value="0">
                    Selecione
                </option>
            </select><br />
            Cidade:
            <input type="text" name="cidade" /><br />
            Rua:
            <input type="text" name="rua" /><br />
            Bairro:
            <input type="text" name="bairro" /><br />
            Complemento:
            <input type="text" name="complemento" /><br />
            Número:
            <input type="text" name="numero" /><br />


            <button>Cadastrar</button>

        </form>

    </div>