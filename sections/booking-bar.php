<div class="booking-bar">
		    <form
    action="<?php echo $be_step2_action; ?>" 
    method="post" name="myform" id="myform" target="_blank" 
    style="margin:0px; padding:0px;" 
    onsubmit="javascript:invia_form();" 
>
    <input name="gg" id="gg" value="" type="hidden">
    <input name="mm" id="mm" value="" type="hidden">
    <input name="aa" id="aa" value="" type="hidden">
    <input name="ggf" id="ggf" value="" type="hidden">
    <input name="mmf" id="mmf" value="" type="hidden">
    <input name="aaf" id="aaf" value="" type="hidden">

    <!-- PARAMETERS TO CUSTOMIZE -->
    
        <input name="id_albergo" value="<?php echo $id; ?>" type="hidden">
        <input name="dc" value="<?php echo $dc; ?>" type="hidden">
    
    <input name="lingua_int" value="<?php echo $lng; ?>" type="hidden">
    <input name="id_stile" value="<?php echo $style; ?>" type="hidden">

    <!-- END PARAMETERS TO CUSTOMIZE -->
    <input name="countryCode" class="country_code" value="" type="hidden"/>
    <input name="gps_latitude" class="gps_latitude" value=""  type="hidden"/>
    <input name="gps_longitude" class="gps_longitude" value="" type="hidden"/>
    <input name="headvar" value="ok" type="hidden">


    <div id="arrival_date" class="blocco">
    	<div class="label"><span>Check In</span> <span><i class="far fa-calendar-alt"></i></span></div>
        <div class="tendina">
            <input id="from" type="text" value="Arrival date" placeholder="Arrival Date">
        </div>
    </div>
    <div id="departure_date" class="blocco">
    	<div class="label"><span>Check Out</span> <span><i class="far fa-calendar-alt"></i></span></div>
        <div class="tendina">
            <input id="to" type="text" value="Departure date" placeholder="Departure date" >
        </div>
    </div>
    <div id="rooms" class="blocco">
    	<div class="label"><span>Rooms</span> <span>&#xfe40;</span></div>
    	<div class="tendina">
            <select class="select" name="tot_camere">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>
    <div id="adults" class="blocco">
        <div class="label"><span>Adults</span> <span>&#xfe40;</span></div>
        <div class="tendina">
            <select class="select" name="tot_adulti">
                        <option value="1">1</option>
                <option value="2" selected="selected">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>
    <div id="children" class="blocco">
        <div class="label"><span>Children</span> <span>&#xfe40;</span></div>
        <div class="tendina">
            <select class="select" name="tot_bambini" >
                <option value="0" selected >0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
            </select>
        </div>
    </div>
    <div id="search" class="blocco">
        <input id="button" class="button" type="submit" value="CHECK AVAILABILITY"/>

    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {

// aggiornamento calendari
        $("#from").datepicker({
            defaultDate: "+1w",
            numberOfMonths: 1,
            onSelect: function (selectedDate) {
                const a = selectedDate.split("/")
                var giorno_dopo = movePickerDate(a[1]+"/"+a[0]+"/"+a[2], 1);
                const na = giorno_dopo.split("/")
                $("#to").datepicker("option", "minDate", na[1]+"/"+na[0]+"/"+na[2]);
                aggiustaInizio();
                aggiustaFine();
            }
        });

        $("#to").datepicker({
            defaultDate: "+1w",
            numberOfMonths: 1,
            onSelect: function (selectedDate) {
                aggiustaInizio();
                aggiustaFine();
            }
        });

        var now = new Date();
        var today = now.getDate() + '/' + (now.getMonth() + 1) + '/' + now.getFullYear();
        $('#from').val(today);
        $('#from').datepicker("option", "minDate", today);
        $('#from').datepicker("option", "dateFormat", 'mm/dd/yy');

        var tomorrow = movePickerDate(today, 1);
        $('#to').val(tomorrow);
        $('#to').datepicker("option", "dateFormat", 'mm/dd/yy');


//date inizio e fine
        aggiustaFine();
        aggiustaInizio();
    });



    function aggiustaInizio()
    {
        var datai = $("#from").val();

        datai = datai.split('/');

        $('#gg').val(datai[1]);
        $('#mm').val(datai[0]);
        $('#aa').val(datai[2]);
    }

    function aggiustaFine() {
        var dataf = $("#to").val();

        dataf = dataf.split('/');

        $('#ggf').val(dataf[1]);
        $('#mmf').val(dataf[0]);
        $('#aaf').val(dataf[2]);
    }

    function movePickerDate(selectedDate, amount) {
        var a = selectedDate.split("/");
        var data = new Date(parseInt(a[2], 10), (parseInt(a[1], 10) - 1), parseInt(a[0], 10), 12, 0, 0);
        var giorno_data = AddDays(data, amount);
        return giorno_data.getDate() + '/' + (giorno_data.getMonth() + 1) + '/' + giorno_data.getFullYear();
    }



    function AddDays(date, amount)
    {
        var tzOff = date.getTimezoneOffset() * 60 * 1000;

        var t = date.getTime();
        t += (1000 * 60 * 60 * 24) * amount;
        var d = new Date();
        d.setTime(t);
        var tzOff2 = d.getTimezoneOffset() * 60 * 1000;

        if (tzOff !== tzOff2)
        {
            var diff = tzOff2 - tzOff;
            t += diff;
            d.setTime(t);
        }

        return d;
    }
</script>
	    </div>