<div class="container-xl">
    <h3 class="pl-5 pt-5 d-inline-block">전화번호</h3>
    <p class="float-right pr-5 pt-5">홈 > 무형문화재관리원 > 전화번호</p>
    <hr class="m-2">
    <ul class="nav nav-pills justify-content-center my-p-3" id="phone-pills">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" onclick="selectDeptNm(this)">전체</a>
        </li>
    </ul>
    <div class="phone-contents my-3">
    </div>
</div>

<script>
    //페이지가 로드 되면 페이지 업데이트
    $("html").ready(function() {
        updateLayout();
    });

    //부서 선택시 해당 부서만 보이기
    function selectDeptNm(obj){
        let str = $(obj).text();

        if(str == "전체") {
            $.each($(".phone-pane h4"), function (i, v) { 
                $(v).parent().show();
            });

            return;
        }

        $.each($(".phone-pane h4"), function (i, v) { 
            v = $(v);
            
            let currentStr = v.text();

            if(str == currentStr){
                v.parent().show();
            }
            else {
                v.parent().hide();
            }
        });
    }

    //데이터를 받아와 페이지 구성
    function updateLayout(){
        $.ajax({
            type: "POST",
            url: "restAPI/phone.php",
            dataType: "json",
            cache: false,
            async: false,
            success: function (response) {
                if(response.statusCd != 200){
                    alert(response.statusMsg);

                    location.href = "/";
                }

                response.items.forEach(e => {
                    let parent;

                    $.each($(".phone-pane h4"), function (i, v) { 
                        v = $(v);

                        if(v.text() == e.deptNm){
                            parent = v.parent();
                        }
                    });

                    if(!parent){
                        parent = $("#phone-pills");

                        let is_firstItem = false;

                        if(!parent.find("li").html()){
                            is_firstItem = true;
                        }

                        let obj = $(`
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" onclick="selectDeptNm(this)">${ e.deptNm }</a>
                        </li>
                        `);

                        if(is_firstItem){
                            obj.find("a").addClass("active");
                        }

                        parent.append(obj);

                        parent = $(".phone-contents");

                        obj= $(`
                        <div class="phone-pane my-3">
                            <h4 class="border-bottom border-primary p-3 m-3">${ e.deptNm }</h4>
                            <div class="row">
                            </div>
                        </div>
                        `);

                        parent.append(obj);
                    }

                    $.each($(".phone-pane h4"), function (i, v) { 
                        v = $(v);

                        if(v.text() == e.deptNm){
                            parent = v.parent();
                        }
                    });

                    parent = parent.find(".row");

                    let obj = $(`
                    <div class="col-2 my-3">
                        <div class="card text-center">
                            <div class="card-body py-2 px-3">
                                <h5 class="card-title border-bottom pb-1 mb-1">${ e.name }</h5>
                                <p class="card-text">${ e.telNo }</p>
                            </div>
                        </div>
                    </div>
                    `);

                    parent.append(obj);
                });
            }
        });
    }
</script>