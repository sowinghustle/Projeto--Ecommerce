<?php

/** @var BookController $this */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/index.css" />
    <title>
        <?php echo $this->view->title ?>
    </title>
</head>

<body>
    <h1 class="text-center">
        <?php echo $this->view->title ?>
    </h1>

    <div class="container">
        <div class="mb-2 d-flex justify-content-center">
            <span class="text-danger">
                <?php echo $this->view->errorMsg ?>
            </span>

            <span class="text-success">
                <?php echo $this->view->successMsg ?>
            </span>
        </div>

        <div class="main d-flex flex-column align-items-center justify-content-center mt-4">
            <div class="mb-5 w-100 d-flex flex-column align-items-center">
                <label for="search" class="form-label">Pesquisa</label>
                <input id="search" name="search" type="text" class="form-control" value="<?php echo $this->view->search ?>" style="max-width:450px;width:100%;" />
                <button id="btn-search" class="btn btn-primary mt-2" style="max-width:450px;width:100%;">pesquisar</button>
                <a href="../" class="mt-4">Ir para a Home</a>
            </div>

            <section>
                <?php
                $books = $this->view->bookList->getBooks();

                if (empty($books)) { ?>
                    <span>Nenhum livro foi encontrado!</span>
                <?php }

                foreach ($books as $book) {
                ?>
                    <div class="card mb-4" style="width:420px;">
                        <img src="<?php echo $book->getImageSource() ?>" class="card-img-top" style="height:200px;">

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">Nome do Livro</label>
                                <input name="title" type="text" class="form-control" value="<?php echo $book->getTitle() ?>" readonly />
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label">Autor do livro</label>
                                <input name="author" type="text" class="form-control" value="<?php echo $book->getAuthor() ?>" readonly />
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Descrição do livro</label>
                                <input name="description" type="text" class="form-control" value="<?php echo $book->getDescription() ?>" readonly />
                            </div>

                            <div class="mb-3">
                                <label for="categories" class="form-label">Categorias do livro</label>
                                <input name="categories" type="text" class="form-control" value="<?php echo $book->getRawCategories() ?>" readonly />
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Valor do livro</label>
                                <input name="price" type="number" step="0.01" min="0.01" class="form-control" value="<?php echo $book->getPrice() ?>" readonly />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Vendedor</label>
                                <input class="form-control" type="text" value="<?php echo $book->fetchOwnerUsername() ?>" readonly />
                            </div>

                            <div class="mt-3">
                                <input type="button" class="btn btn-primary" value="Visualizar" onclick="window.location.href = '../books/view?id=<?php echo $book->getId() ?>'" />
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        const inputSearch = document.getElementById("search");
        const btnSearch = document.getElementById("btn-search");

        function search(value) {
            window.location.href = "../books?search=" + value;
        }

        inputSearch.addEventListener("keyup", ev => {
            if (ev.key === "Enter" || ev.keyCode === 13) {
                search(inputSearch.value);
            }
        });

        btnSearch.addEventListener("click", ev => {
            search(inputSearch.value);
        });
    </script>
</body>

</html>
