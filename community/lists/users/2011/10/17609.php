<?
$subject_val = "Re: [OMPI users] exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 25 09:54:14 2011" -->
<!-- isoreceived="20111025135414" -->
<!-- sent="Tue, 25 Oct 2011 15:53:58 +0200" -->
<!-- isosent="20111025135358" -->
<!-- name="Mouhamad Al-Sayed-Ali" -->
<!-- email="Mouhamad.Al-Sayed-Ali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exited on signal 11 (Segmentation fault)." -->
<!-- id="20111025155358.19806rnx6p2gxu8s_at_webmail.u-bourgogne.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111025153617.650271kaj7qdddog_at_webmail.u-bourgogne.fr" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] exited on signal 11 (Segmentation fault).<br>
<strong>From:</strong> Mouhamad Al-Sayed-Ali (<em>Mouhamad.Al-Sayed-Ali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-25 09:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17610.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Previous message:</strong> <a href="17608.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="17608.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17611.php">TERRY DONTJE: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17611.php">TERRY DONTJE: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17613.php">Ralph Castain: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>&nbsp;&nbsp;This is exactly the error I have:
<br>
<p><pre>
----
taskid: 0 hostname: part034.u-bourgogne.fr
[part034:21443] *** Process received signal ***
[part034:21443] Signal: Segmentation fault (11)
[part034:21443] Signal code: Address not mapped (1)
[part034:21443] Failing at address: 0xfffffffe01eeb340
[part034:21443] [ 0] /lib64/libpthread.so.0 [0x3612c0de70]
[part034:21443] [ 1] wrf.exe(__module_ra_rrtm_MOD_taugb3+0x418) [0x11cc9d8]
[part034:21443] [ 2] wrf.exe(__module_ra_rrtm_MOD_gasabs+0x260) [0x11cfca0]
[part034:21443] [ 3] wrf.exe(__module_ra_rrtm_MOD_rrtm+0xb31) [0x11e6e41]
[part034:21443] [ 4] wrf.exe(__module_ra_rrtm_MOD_rrtmlwrad+0x25ec)  
[0x11e9bcc]
[part034:21443] [ 5]  
wrf.exe(__module_radiation_driver_MOD_radiation_driver+0xe573)  
[0xcc4ed3]
[part034:21443] [ 6]  
wrf.exe(__module_first_rk_step_part1_MOD_first_rk_step_part1+0x40c5)  
[0xe0e4f5]
[part034:21443] [ 7] wrf.exe(solve_em_+0x22e58) [0x9b45c8]
[part034:21443] [ 8] wrf.exe(solve_interface_+0x80a) [0x902dda]
[part034:21443] [ 9] wrf.exe(__module_integrate_MOD_integrate+0x236)  
[0x4b2c4a]
[part034:21443] [10] wrf.exe(__module_wrf_top_MOD_wrf_run+0x24) [0x47a924]
[part034:21443] [11] wrf.exe(main+0x41) [0x4794d1]
[part034:21443] [12] /lib64/libc.so.6(__libc_start_main+0xf4) [0x361201d8b4]
[part034:21443] [13] wrf.exe [0x4793c9]
[part034:21443] *** End of error message ***
-------
Mouhamad
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17610.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Previous message:</strong> <a href="17608.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="17608.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17611.php">TERRY DONTJE: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17611.php">TERRY DONTJE: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17613.php">Ralph Castain: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
