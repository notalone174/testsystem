<div class="col-md-6">
    <form action="admin.php?do=save" method="post">
        <div class="card mt-4">
            <div class="card-header">
                <h2 class="text-center">Добавление теста</h2>
            </div>

            <div class="card-body">
                <div>
                    <label for="title" class="form-label">Название теста</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mt-5 text-center">
                    <h4>Добавление вопросов</h4>
                </div>
                <div class="questions">
                    <div class="question-items">
                        <div class="mt-4">
                            <label for="question_1" class="form-label">Вопрос #1</label>
                            <input type="text" name="question_1" id="question_1" class="form-control">
                            <div class="answers">
                                <div class="answer-items">
                                    <div>
                                        <label for="answer_text_1_1" class="form-label">Ответ #1</label>
                                        <input type="text" name="answer_text_1_1" id="answer_text_1_1" class="form-control">
                                    </div>
                                    <div class="mt-2">
                                        <label for="answer_score_1_1" class="form-label">Балл за ответ #1</label>
                                        <input type="text" name="answer_score_1_1" id="answer_score_1_1" class="form-control">
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="button" class="btn btn-light border addAnswer" data-question="1" data-answer="1">Добавить вариант ответа</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary addQuestion">Добавить вопрос</button>
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <h4>Добавление результатов</h4>
                </div>
                <div class="results">
                    <div class="result-items">
                        <div class="mt-4">
                            <div class="">
                                <label for="result_1" class="form-label">Результат #1</label>
                                <textarea name="result_1" id="result_1" class="form-control"></textarea>
                            </div>
                            <div class="mt-2">
                                <label for="result_score_min_1" class="form-label">Балл (от) #1</label>
                                <input type="text" name="result_score_min_1" id="result_score_min_1" class="form-control">
                            </div>
                            <div class="mt-2">
                                <label for="result_score_max_1" class="form-label">Балл (до) #1</label>
                                <input type="text" name="result_score_max_1" id="result_score_max_1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary addResult" >Добавить результат</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4 mb-4">
            <div class="card-body text-center">
                <button type="submit" class="btn btn-success">Сохранить</button>
            </div>
        </div>
    </form>
</div>