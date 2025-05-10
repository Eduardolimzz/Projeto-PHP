<?php require_once"../shared/header.php";?>

<section class="car">
    <div class="container">
        <div class="box-6 mg-t-6">
            <form action="" method="POST">
                <table class="car-table">
                    <thead>
                        <tr>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Código</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Produto</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Quantidade</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Preço</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Imagem</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Sub-total</th>
                            <th class="pd-10 bg-p2-azul fonte12 fnc-branco">Ação</th>
                        </tr>
                    </thead>
                    <!-- table data -->
                     <tbody>
                        <tr class="zebra">
                            <td class="fonte12 pd-5 txt-c">1</td>
                            <td class="fonte12 pd-5 txt-c">Notebook</td>
                            <td class="fonte12 pd-5 txt-c">2</td>
                            <td class="fonte12 pd-5 txt-c">000.00</td>
                            <td class="fonte12 pd-5 txt-c">
                                <img src="../../lib/img/notebook.png" alt="" class="logo-60 mg-auto">
                            </td>
                            <td  class="fonte12 pd-5 txt-c">000.00</td>
                            <td>
                                <a href="" class="txt-c flex justify-center iten-centro">
                                <i class="fa-solid fa-trash-can fonte22 fnc-error"></i>
                                </a>    
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <label for="">Selecionar Clientes</label>
                                <select name="cliente" id="" class="mg-b-2">
                                    <option value="">Selecione um cliente</option>
                                    <option value="">Ciclano</option>
                                    <option value="">Fulano</option>
                                </select>
                                <label for="">Selecionar Pagamento</label>
                                <select name="cliente" id="">
                                    <option value="">Selecionar pagamento</option>
                                    <option value="">Boleto</option>
                                    <option value="">Pay pal</option>
                                    <option value="">Cartão de crédito</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <a href="" class="btn-100 bg-p1-verde  mg-b-1 fnc-branco fonte14 fw-800">Comprar Mais</a>
                                <input type="submit" value="Finalizar" class="btn-100  bg-p1-amarelo fnc-branco">
                            </td>
                        </tr>
                     </tbody>
                </table>
            </form>
        </div>
    </div>
</section>

<?php require_once"../shared/footer.php";?>