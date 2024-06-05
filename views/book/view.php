<?php

/** @var BookController $this */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/book.css" />
    <title>
        <?php echo $this->view->title ?>
    </title>
</head>

<body>
    <h1 class="text-center">
        <?php echo $this->view->title ?>
    </h1>

    <div class="container">
        <div class="main d-flex flex-column align-items-center justify-content-center mt-4">
            <div class="card text-start h-75 w-50">
                <div class="card-body">
                    <form>
                        <div class="mb-2">
                            <span class="text-danger">
                                <?php echo $this->view->errorMsg ?>
                            </span>
                            <span class="text-success">
                                <?php echo $this->view->successMsg ?>
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Nome do Livro</label>
                            <input name="title" type="text" class="form-control" value="<?php echo $this->view->book->getTitle() ?>" readonly />
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Autor do livro</label>
                            <input name="author" type="text" class="form-control" value="<?php echo $this->view->book->getAuthor() ?>" readonly />
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição do livro</label>
                            <input name="description" type="text" class="form-control" value="<?php echo $this->view->book->getDescription() ?>" readonly />
                        </div>

                        <div class="mb-3">
                            <label for="categories" class="form-label">Categorias do livro</label>
                            <input name="categories" type="text" class="form-control" value="<?php echo $this->view->book->getRawCategories() ?>" readonly />
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Valor do livro</label>
                            <input name="price" type="number" step="0.01" min="0.01" class="form-control" value="<?php echo $this->view->book->getPrice() ?>" readonly />
                        </div>

                        <div class="mb-3">
                            <input type="button" class="btn btn-primary" value="Comprar" />
                        </div>
                    </form>
                </div>
            </div>

            <a href="../books" class="mt-4">Voltar para a listagem de livros</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>