
            <div class="container-fluid">
                <table class="table table-striped">
                    <h2 class="center">Productos ingresados</h2>
                    <a href="?c=productos"><i class="fa fa-reply fa-2x" aria-hidden="true"></i></a>
                    <thead>
                        <tr>
                            <th data-field="codigo_pro">#</th>
                            <th data-field="pro_nom">Nombre del producto</th>
                            <th data-field="pro_desc">Descripciòn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($this->Pmodel-> readProductos() as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row["produ_codigo"]; ?></td>
                                    <td><?php echo $row["produ_nombre"]; ?></td>
                                    <td><?php echo $row["produ_descripcion"]; ?></td>
                                    <td>
                                        <a href="?c=productos&a=update&rcode=<?php echo $row['produ_codigo'];?>">
                                            <i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
                                        </a>

                                        <a href="?c=productos&a=delete&rcode=<?php echo $row['produ_codigo'];?>"onclick="return confirm('¿Estás seguro de eliminar?')">
                                  <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
                                        </a>

                                    </td>

                                </tr>
                            <?php
                            }
                            ?>

                    </tbody>
                </table>
            </div>
