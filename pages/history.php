<div class="container-xl">
    <h3 class="pl-5 pt-5 d-inline-block">연혁</h3>
    <p class="float-right pr-5 pt-5">홈 > 일반현황 > 연혁</p>
    <hr class="m-2">
    <button class="btn btn-primary float-right m-3" type="button" onclick="historyInsertModal()">연혁 추가</button>
    <ul class="nav nav-pills nav-justified w-100 my-3" id="history-pills">
    </ul>
    <div class="tab-content" id="history-contents">
    </div>
</div>

<div id="history-insert-modal" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="history-insert-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="history-insert-modal-title">연혁 추가</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="history-insert-title">내용</label>
                    <input id="history-insert-title" class="form-control" type="text" name="history-insert-title">
                </div>
                <div class="form-group">
                    <label for="history-insert-date">날짜</label>
                    <input id="history-insert-date" class="form-control" type="date" name="history-insert-date">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" onclick="historyInsertModal()">취소</button>
                <button class="btn btn-primary" type="button" onclick="historyInsert()">추가</button>
            </div>
        </div>
    </div>
</div>

<div id="history-update-modal" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="history-update-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="history-update-modal-title">연혁 수정</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="history-update-id" type="hidden" name="history-update-id" value="-1">
                <div class="form-group">
                    <label for="history-update-title">내용</label>
                    <input id="history-update-title" class="form-control" type="text" name="history-update-title">
                </div>
                <div class="form-group">
                    <label for="history-update-date">날짜</label>
                    <input id="history-update-date" class="form-control" type="date" name="history-update-date">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" onclick="historyUpdateModal()">취소</button>
                <button class="btn btn-primary" type="button" onclick="historyUpdate()">수정</button>
            </div>
        </div>
    </div>
</div>

<script>
</script>