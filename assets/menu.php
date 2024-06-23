<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="../views/indexs.php">SISMESC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active d-flex align-items-center" aria-current="page" href="../views/docentes.view.php"><i class="bi bi-book me-2"></i>DOCENTES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="../views/padres.view.php"><i class="bi bi-people-fill me-2"></i>PADRES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="../views/estudiantes.view.php"><i class="bi bi-people me-2"></i>ESTUDIANTE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="../views/productos.view.php"><i class="bi bi-cart me-2"></i>PRODUCTOS MERIENDA</a>
                </li>
            </ul>
            
            <!-- User Options aligned to the right -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-gear me-2"></i>
                 

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="bi bi-eye me-2"></i>Ver Datos</a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="../assets/logout.php"><i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>