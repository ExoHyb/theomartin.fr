<?php
class eventManager {
    private $events=array();

    function __construct(){
        $this->events['success'] = array();
        $this->events['warning'] = array();
        $this->events['danger'] = array();
    }

    /**
     * add en event to the list of the manager
     *
     * @param string $title: title of the event
     * @param string $text: text of the event
     * @param string $type: type of the event (success, warning, danger)
     *
     * @return array: return the added event
     */

    function addEvent($title, $text, $type="success", $links = false){
        $this->events[$type][] = [$title, $text, $links];
    }


    function dumpEvents(){
        echo '<pre>';
        print_r($this->events);
        echo '</pre>';
    }


    /**
     * print the events
     *
     * @param string $type: type of the events to print (success, warning, danger; Default:all)
     */
    function printEvents($type="all"){
        if (!empty($this->events['success']) && $type == 'success' || $type == 'all') {
            foreach ($this->events['success'] as $event) {
                ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> <?php echo $event[0]; ?></h4>
                    <?php
                    echo $event[1];
                    if($event[2]){
                        echo '<div class="pull-right">';
                        foreach($event[2] as $link){
                            echo $link;
                            echo '&nbsp;';
                        }
                        echo '</div><br/>';
                    }
                    ?>
                </div>
            <?php
            }
        }

        if (!empty($this->events['warning']) && $type == 'warning' || $type == 'all') {
            foreach ($this->events['warning'] as $event) {
                ?>
                <div class="alert alert-warning">
                    <h4><i class="icon fa fa-ban"></i> <?php echo $event[0]; ?></h4>
                    <?php
                    echo $event[1];
                    if($event[2]){
                        echo '<div class="pull-right">';
                        foreach($event[2] as $link){
                            echo $link;
                            echo '&nbsp;';
                        }
                        echo '</div><br/><br/>';
                    }
                    ?>
                </div>
            <?php
            }
        }

        if (!empty($this->events['danger']) && $type == 'danger' || $type == 'all') {
            foreach ($this->events['danger'] as $event) {
                ?>
                <div class="alert alert-danger">
                    <h4><i class="icon fa fa-ban"></i> <?php echo $event[0]; ?></h4>
                    <?php
                    echo $event[1];
                    if($event[2]){
                        echo '<div class="pull-right">';
                        foreach($event[2] as $link){
                            echo $link;
                            echo '&nbsp;';
                        }
                        echo '</div><br/><br/>';
                    }
                    ?>
                </div>
            <?php
            }
        }
    }

} 