<?php
/**
 * LibreCMS - Copyright (C) Diemen Design 2019
 *
 * Administration - Tracker Preferences
 *
 * pref-tracker.php version 2.0.2
 *
 * LICENSE: This source file may be modifired and distributed under the terms of
 * the MIT license that is available through the world-wide-web at the following
 * URI: http://opensource.org/licenses/MIT.  If you did not receive a copy of
 * the MIT License and are unable to obtain it through the web, please
 * check the root folder of the project for a copy.
 *
 * @category   Administration - Preferences - Tracker
 * @package    core/layout/pref_tracker.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    2.0.2
 * @link       https://github.com/DiemenDesign/LibreCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 * @changes    v2.0.2 Add i18n.
 * @changes    v2.0.2 Fix ARIA Attributes.
 */?>
<main id="content" class="main">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo URL.$settings['system']['admin'].'/preferences';?>"><?php echo localize('Preferences');?></a></li>
    <li class="breadcrumb-item active"><?php echo localize('Tracker');?></li>
    <li class="breadcrumb-menu">
      <div class="btn-group" role="group">
        <?php if($help['tracker_text']!='')echo'<a target="_blank" class="btn btn-ghost-normal info" href="'.$help['tracker_text'].'" data-tooltip="tooltip" data-placement="left" title="'.localize('Help').'" savefrom_lm="false" role="button" aria-label="'.localize('aria_view_texthelp').'">'.svg2('libre-gui-help').'</a>';
        if($help['tracker_video']!='')echo'<a href="#" class="btn btn-ghost-normal info" data-toggle="modal" data-frame="iframe" data-target="#videoModal" data-video="'.$help['tracker_video'].'" data-tooltip="tooltip" data-placement="left" title="'.localize('Watch Video Help').'" savefrom_lm="false" role="button" aria-label="'.localize('aria_view_videohelp').'">'.svg2('libre-gui-video').'</a>';?>
      </div>
    </li>
  </ol>
  <div class="container-fluid">
    <noscript><div class="alert alert-danger" role="alert"><?php echo localize('alert_all_danger_noscript');?></div></noscript>
    <div class="alert alert-warning d-sm-block d-md-none" role="alert"><?php echo localize('alert_all_warning_smallscreen');?></div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <div class="table">
                <table class="table-striped table-hover" role="table">
                  <thead>
                    <tr role="row">
                      <th class="" style="min-width:150px;max-width:200px;"><?php echo localize('Page');?></th>
                      <th class="" style="min-width:150px;max-width:200px;"><?php echo localize('Origin');?></th>
                      <th class="text-center"><?php echo localize('IP');?></th>
                      <th class="text-center"><?php echo localize('Browser');?></th>
                      <th class="text-center"><?php echo localize('System');?></th>
                      <th class="text-center"><?php echo localize('Date');?></th>
                      <th><div class="btn-group float-right" data-tooltip="tooltip" data-placement="left" title="<?php echo localize('Purge All');?>"><button class="btn btn-secondary btn-sm trash" onclick="purge('0','tracker');return false;" role="button" aria-label="<?php echo localize('aria_purge');?>"><?php svg('libre-gui-purge');?></button></th>
                    </tr>
                  </thead>
                  <tbody id="l_tracker">
<?php  $s=$db->prepare("SELECT * FROM `".$prefix."tracker` ORDER BY ti DESC LIMIT 20");
$s->execute();
while($r=$s->fetch(PDO::FETCH_ASSOC)){?>
                    <tr id="l_<?php echo$r['id'];?>" data-ip="<?php echo$r['ip'];?>" class="small">
                      <td class="text-wrap align-middle" style="min-width:200px;max-width:250px;"><?php echo trim($r['urlDest']);?></td>
                      <td class="text-wrap align-middle" style="min-width:200px;max-width:250px;"><?php echo trim($r['urlFrom']);?></td>
                      <td class="text-center align-middle">
                        <a target="_blank" href="http://www.ipaddress-finder.com/?ip=<?php echo$r['ip'];?>"><?php echo$r['ip'];?></a>
                        <button class="btn btn-secondary btn-sm trash" data-tooltip="tooltip" title="Remove all of this IP" onclick="purge('<?php echo$r['ip'];?>','clearip')" aria-label="Remove all of this IP"><?php svg('libre-gui-eraser');?></button>
                      </td>
                      <td class="text-center align-middle"><?php echo ucfirst($r['browser']);?></td>
                      <td class="text-center align-middle"><?php echo ucfirst($r['os']);?></td>
                      <td class="text-center align-middle"><?php echo date($config['dateFormat'],$r['ti']);?></td>
                      <td class="align-middle">
                        <div class="btn-group float-right">
                          <button class="btn btn-secondary pathviewer" data-tooltip="tooltip" title="<?php echo localize('View Visitor Path');?>" data-toggle="popover" data-dbid="<?php echo$r['id'];?>" aria-label="<?php echo localize('aria_view');?>"><?php svg('libre-seo-path');?></button>
<?php if($config['php_options']{0}==1){?>
                          <button class="btn btn-secondary phpviewer" data-tooltip="tooltip" title="<?php echo localize('Check IP with Project Honey Pot');?>" data-toggle="popover" data-dbid="<?php echo$r['id'];?>" data-dbt="tracker" aria-label="<?php echo localize('aria_check');?>"><?php svg('libre-brand-projecthoneypot');?></button>
<?php }?>
                          <button class="btn btn-secondary trash" onclick="purge('<?php echo$r['id'];?>','tracker')" data-tooltip="tooltip" title="<?php echo localize('Delete');?>" role="button" aria-label="<?php echo localize('aria_delete');?>"><?php svg('libre-gui-trash');?></button>
                        </div>
                      </td>
                    </tr>
<?php }?>
                    <tr id="more_20">
                      <td colspan="7">
                        <div class="form-group">
                          <div class="input-group">
                            <button class="btn btn-secondary btn-block" onclick="more('tracker','20');">More</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
