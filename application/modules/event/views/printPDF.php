<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
                @media print {
                    .table tbody tr {
                        background-color: green !important;
                        -webkit-print-color-adjust: exact;
                    }
                }
            </style>
        <style>
            html {
                 -webkit-print-color-adjust: exact;
            }
            
            .table .thead-dark th { 
                        color: #fff;
                        background-color: #343a40;
                        border-color: #454d55;
            } 
            @media print {
                .table .thead-dark th { 
                        color: #fff !important;
                        background-color: #343a40 !important;
                        border-color: #454d55 !important;
                } 
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    </head>
    <body>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo lang('time'); ?></th>
                    <th scope="col"><?php echo lang('event'); ?></th>
                    <th scope="col"><?php echo lang('location'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                <?php foreach($schedules as $schedule) {
                    $time2 = date("g:i a",$schedule->start_time) . ' - ' . date("g:i a",$schedule->end_time);
                    $name = $schedule->name;
                    $location = $this->db->get_where('location',array('id' => $schedule->location))->row()->name;
                    $font_color = $this->db->get_where('event_types',array('id' => $schedule->event_type))->row()->font_color;  
                ?>
                <tr class="<?php echo "tr_".$count; ?>" style="background-color: <?php echo $schedule->color; ?>;">
                    <td><?php echo $time2; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $location; ?></td>
                </tr>
            
                <?php $count++; } ?>
            </tbody>
        </table>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
