<?php

function generateModalForm($modal_id, $modal_name, $modal_form_action, $modal_form_body) {
    echo '<div id="'.$modal_id.'" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">'.$modal_name.'</h5>
                    </div>

                    <form action="'.$modal_form_action.'" method="POST">
                        <div class="modal-body">

                            '.$modal_form_body.'

                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-info"></input>
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>';
}

function generateModalFormWithId($modal_id, $modal_name, $modal_form_id, $modal_form_action, $modal_form_body) {
    echo '<div id="'.$modal_id.'" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">'.$modal_name.'</h5>
                    </div>

                    <form action="'.$modal_form_action.'" id="'.$modal_form_id.'" method="POST">
                        <div class="modal-body">

                            '.$modal_form_body.'

                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-info"></input>
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>';
}

function generateLargeModalForm($modal_id, $modal_name, $modal_form_action, $modal_form_body) {
    echo '<div id="'.$modal_id.'" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">'.$modal_name.'</h5>
                    </div>

                    <form action="'.$modal_form_action.'" method="POST">
                        <div class="modal-body">

                            '.$modal_form_body.'

                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-info"></input>
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>';
}

function generateDeletePrompt($modal_id, $modal_name, $modal_form_action, $modal_form_body) {
    echo '<div id="'.$modal_id.'" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">'.$modal_name.'</h5>
                    </div>

                    <form action="'.$modal_form_action.'" method="POST">
                        <div class="modal-body">

                            <p style="color: red;">Are you sure you want to delete this record?</p>

                            '.$modal_form_body.'

                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-danger" value="Yes"></input>
                            <button type="button" class="btn btn-dark" data-dismiss="modal">No</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>';
}

function whereClauseTrim($clause) {
    return preg_replace('/\W\w+\s*(\W*)$/', '$1', $clause);
}

?>