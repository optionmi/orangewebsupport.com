<style>
    .series-select:disabled {
        appearance: none;
    }

    .series-select {
        border-bottom: none;
        border-radius: 5px 5px 0 0;
    }

    .series-classes-container-new {
        background-color: #FFFFFF;
        border: 2px solid #ced4da;
        border-top: none;
        border-radius: 0 0 5px 5px;
        color: #495057;
        font-size: 15px;
        min-height: 42px;
    }

    .series-classes-container {
        border: 2px solid #ced4da;
        border-top: none;
        border-radius: 0 0 5px 5px;
        color: #495057;
        background: #E9ECEF;
        font-size: 15px;
        min-height: 42px;
    }
</style>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><?= $page ?></li>
            <li class="breadcrumb-item"><a href="<?= base_url('superadmin/dashboard') ?>"><i class="fa fa-home fa-lg"></i> Home</a></li>
        </ul>
    </div>
    <?php foreach ($info as $infor) : ?>
        <form id="update-teacher" class="smooth-submit" method="post" action="<?= base_url('admin_master/update_webteacher') ?>" <div class="form-body">
            <div class="p-2 m-0 row">
                <div class="p-2 col-lg-6">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control d-none" value="<?= $infor->id ?>" id="user_id" name="id">
                        <input type="text" class="form-control" value="<?= $infor->fullname ?>" id="getname" name="name" required="true">
                    </div>
                </div>

                <div class="p-2 col-lg-6">
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" value="<?= $infor->mobile ?>" class="form-control" id="getmobile" name="mobile" required="true">
                    </div>
                </div>
                <div class="p-2 col-lg-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" value="<?= $infor->email ?>" id="getemail" name="email" required="true">
                    </div>
                </div>
                <div class="p-2 col-lg-6">
                    <div class="form-group">
                        <label for="pin">Pincode</label>
                        <input type="text" class="form-control" value="<?= $infor->pin ?>" id="getpin" name="pin" required="true">
                    </div>
                </div>

                <div class="p-2 col-lg-6">
                    <div class="form-group">
                        <label for="board">Board *</label>
                        <select class="form-control" name="board" id="board" required="true">
                            <option value="">Select</option>
                            <?php foreach ($board as $cou) : ?>
                                <option value="<?= $cou->name ?>" <?php if ($infor->board_name == $cou->name) {
                                                                        echo 'selected';
                                                                    } else {
                                                                        echo '';
                                                                    } ?>><?= $cou->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- <div class="p-2 col-lg-12">
                    <div class="form-group">
                        <label>Series *</label>
                        <div class="row" id="ser_section">
                        <p class="text-danger">Select board</p>
                        </div>
                    </div>
                </div>


                <div class="p-2 col-lg-2">
                    <span>Classes:</span>
                </div>
                <div class="p-2 col-lg-10">
                    <div class="row">
                        <?php /*
                        $permid_array = explode(',', $infor->classes);
                        foreach ($classes as $key => $class) :
                        ?>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input type="checkbox" <?= (in_array($class->id, $permid_array)) ? 'checked' : '' ?> class="form-control-custom" id="<?= $class->name ?>" name="class[]" value="<?= $class->id ?>"> 
                                    <label class="form-check-label" for="<?= $class->name ?>">
                                        <?= $class->name ?>
                                    </label>
                                </div>
                            </div>
                        <?php endforeach; */ ?>
                    </div>
                </div> -->

            </div>

            <div id="seriesClassesContainer" class="p-2 m-0 row">
                <div class="p-2 col-lg-12">
                    <select class="form-control series-select" id="series">
                        <option value="" disabled selected>+ Add more series</option>
                        <?php foreach ($all_series_of_selected_board as $series) : ?>
                            <!-- show not selected options only -->
                            <?php if (!in_array($series->id, $teacher_series_arr)) : ?>
                                <option value="<?= $series->id ?>"><?= $series->name ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php foreach ($teacher_series_details as $teacher_series) : ?>
                    <div class="p-2 col-lg-6">
                        <input type="hidden" name="series[]" value="<?= $teacher_series->id ?>">
                        <select class="form-control series-select" disabled>
                            <option value="<?= $teacher_series->id ?>" disabled selected><?= $teacher_series->name ?></option>
                        </select>
                        <div class="pb-2 m-0 row series-classes-container">
                            <?php foreach ($series_with_all_classes[$teacher_series->id] as $class) : ?>
                                <span class="col-md-3"><input class="m-1" type="checkbox" name="<?= $teacher_series->id ?>Classes[]" value="<?= $class ?>" <?php if ($series_classes[$teacher_series->id]) : ?> <?= (in_array($class, $series_classes[$teacher_series->id])) ?  'checked' : '' ?> <?php else : ?> <?= in_array($class, $teacher_classes) ? 'checked' : '' ?> <?php endif; ?>><label class="m-1">Class <?= $class ?></label></span>
                            <?php endforeach; ?>
                            <div style="margin: 2rem 1.5rem 0 auto;"><span class="px-3 btn btn-sm btn-danger removeSeries" data-seriesValue="${seriesValue}" data-seriesName="${seriesName}" data-clasesName="${seriesValue}Classes[]">Remove</span></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="modal-footer">
                <a class="float-right btn btn-danger" href="<?= base_url() ?>superadmin/web_user_teacher">Cancel</a>
                <button class="float-right btn btn-primary">Save</button>
            </div>

        </form>
    <?php endforeach; ?>
</main>
<script>
    $('#board').on('change', function(e) {
        $('#seriesClassesContainer').html(`<div class="p-2 col-lg-12"><select class="form-control series-select" id="series"><option value="" disabled selected>+ Add more series</option></select></div>`);
        // $('#series').html('<option value="" disabled selected>Select Series</option>');
        var valueSelected = this.value;
        const url = '<?= base_url(); ?>' + 'admin_master/get_series_mod/' + valueSelected;
        fetch(url).then(res => res.json()).then(data => {
            // seriesOfSelectedBoard = data;
            // seriesCount = data.length;
            // console.log(seriesCount);
            data.forEach((item, index, arr) => {
                let options = `<option value="${item.id}">${item.name}</option>`;
                $('#series').append(options);
            });
        });
        checkedClasses = [];
    });

    // Classes on selection of Series
    $('#seriesClassesContainer').on('change', 'div select', function(e) {
        var valueSelected = this.value;
        var classesContainerID = valueSelected + 'ClassesContainer';
        $(this).next('div').remove();
        $(this).parent().append(`<div class="pb-2 m-0 row series-classes-container-new justify-content-center" id="${classesContainerID}">Loading Classes...</div>`);
        const url = '<?= base_url(); ?>' + 'admin_master/get_series_classes/' + valueSelected;
        fetch(url).then(res => res.json()).then(data => {
            let classesCheckBox = '';
            data.forEach((item, index, arr) => {
                // if (!checkedClasses.includes(item.class)) {
                classesCheckBox += `<span class="col-md-2"><input class="m-1 ${valueSelected}classes" type="checkbox" id="${valueSelected+item.id}" value="${item.id}"><label for="${valueSelected+item.id}" class="m-1">${item.name}</label></span>`;
                // }
            });
            classesCheckBox += '<div style="margin: 2rem 1.5rem 0 auto;"><span class="px-3 btn btn-sm btn-dark" id="addSeries">Add</span></div>';
            $('#' + classesContainerID).html(classesCheckBox);
            // console.log($('#' + classesContainerID + ' span').length);
            if ($('#' + classesContainerID + ' span').length == 1) {
                $('#' + classesContainerID).html('<p class="text-center text-danger">You have already selected available classes with other series, please remove your current selection and reload the page if you want to select this title.</p>');
            };
            // $('#addSeries').off('click');
        });
    });
    $('#seriesClassesContainer').on('click', 'div #addSeries', () => {
        // $('#addSeries').on('click', () => { #will not work because it is a dynamic element
        let seriesValue = $('#series').val();
        let seriesName = $('#series').find(':selected').text();
        // $(this).parent().parent().children('')
        // let isClassChecked = Boolean($(this).parent().parent().children().children().children("input:checkbox:checked").length);
        let isClassChecked = Boolean($(`.${seriesValue}classes:checked`).length);

        // console.log(isClassChecked);
        // console.log($(`input[name='${seriesValue}Classes[]']:checked`));
        if (!isClassChecked) return;
        let allSeriesClasses = $(`.${seriesValue}classes`).map(function() {
            return $(this).val();
        }).get();
        let currCheckedClasses = $(`.${seriesValue}classes:checked`).map(function() {
            return $(this).val();
        }).get();
        let seriesClassesElement = `<div class="p-2 col-lg-6"><input type="hidden" name="series[]" value="${seriesValue}"><select class="form-control series-select" name="series[]" required="true" disabled><option value="${seriesValue}" selected>${seriesName}</option></select><div class="pb-2 m-0 row series-classes-container">`;
        allSeriesClasses.forEach(currClass => {
            seriesClassesElement += `<span class="col-md-3"><input class="m-1" type="checkbox" name="${seriesValue}Classes[]" value="${currClass}" ${currCheckedClasses.includes(currClass) ? 'checked':''}><label class="m-1">Class ${currClass}</label></span>`;
        })
        seriesClassesElement += `<div style="margin: 2rem 1.5rem 0 auto;"><span class="px-3 btn btn-sm btn-danger removeSeries" data-seriesValue="${seriesValue}" data-seriesName="${seriesName}" data-clasesName="${seriesValue}Classes[]">Remove</span></div></div></div>`;
        $('#seriesClassesContainer').append(seriesClassesElement);
        $('#series').find(':selected').remove(); // remove selected option from select
        $('#series').prop('selectedIndex', 0); // reset select input
        $(`#${seriesValue}ClassesContainer`).remove(); // remove class container
        // remove checked checkboxes
        // $(`.${seriesValue}classes:checked`).parent().remove();
    });

    $('#seriesClassesContainer').on('click', '.removeSeries', function(e) {
        // let nameOfSeriesClasses = $(this).attr('data-clasesName');
        let seriesValue = $(this).attr('data-seriesValue');
        let seriesName = $(this).attr('data-seriesName');
        // console.log(nameOfSeriesClasses);
        // let currCheckedClasses = $(`input[name="${nameOfSeriesClasses}"]:checked`).map(function() {
        //     return $(this).val();
        // }).get();
        // console.log(checkedClasses);
        // console.log(currCheckedClasses);
        // console.log(checkedClasses.filter(n => !currCheckedClasses.includes(n)));

        // make series selectable again
        $('#series').append(`<option value="${seriesValue}">${seriesName}</option>`);
        // remove classes from checkedClasses array
        // checkedClasses = checkedClasses.filter(n => !currCheckedClasses.includes(n));
        // remove the element from DOM
        $(this).parent().parent().parent().remove();
    });
</script>