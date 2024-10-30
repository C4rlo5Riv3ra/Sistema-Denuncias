<?php include 'views/layout/header.php'; ?>

<!-- Main Content Area -->
<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Denuncias</h2>
        <a href="?action=create" class="btn btn-nuevo"><i class="fas fa-plus"></i> Nuevo</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <form action="index.php" method="GET" class="form-inline">
                    <input type="hidden" name="action" value="search">
                    <div class="input-group w-100">
                        <input type="text" name="keyword" class="form-control" placeholder="Buscar..." value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i> Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Ubicación</th>
                            <th>Ciudadano</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                            <tr>
                                <td>
                                    <div class="action-buttons">
                                        <a href="?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar esta denuncia?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo htmlspecialchars($row['titulo']); ?></td>
                                <td><?php echo htmlspecialchars($row['descripcion']); ?></td>
                                <td><?php echo htmlspecialchars($row['ubicacion']); ?></td>
                                <td><?php echo htmlspecialchars($row['ciudadano']); ?></td>
                                <td><?php echo date('d/m/Y', strtotime($row['fecha'])); ?></td>
                                <td>
                                    <span class="status-<?php echo strtolower(str_replace(' ', '', $row['estado'])); ?>">
                                        <?php echo $row['estado']; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<?php include 'views/layout/footer.php'; ?>