<?
$subject_val = "Re: [OMPI users] exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 25 10:24:54 2011" -->
<!-- isoreceived="20111025142454" -->
<!-- sent="Tue, 25 Oct 2011 10:24:42 -0400" -->
<!-- isosent="20111025142442" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exited on signal 11 (Segmentation fault)." -->
<!-- id="4EA6C6AA.9040708_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111025155358.19806rnx6p2gxu8s_at_webmail.u-bourgogne.fr" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-25 10:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17612.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Previous message:</strong> <a href="17610.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>In reply to:</strong> <a href="17609.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17613.php">Ralph Castain: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks more like a seg fault in wrf and not OMPI.
<br>
<p>Sorry not much I can do here to help you.
<br>
<p>--td
<br>
<p>On 10/25/2011 9:53 AM, Mouhamad Al-Sayed-Ali wrote:
<br>
<span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is exactly the error I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; taskid: 0 hostname: part034.u-bourgogne.fr
</span><br>
<span class="quotelev1">&gt; [part034:21443] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [part034:21443] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [part034:21443] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [part034:21443] Failing at address: 0xfffffffe01eeb340
</span><br>
<span class="quotelev1">&gt; [part034:21443] [ 0] /lib64/libpthread.so.0 [0x3612c0de70]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [ 1] wrf.exe(__module_ra_rrtm_MOD_taugb3+0x418) 
</span><br>
<span class="quotelev1">&gt; [0x11cc9d8]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [ 2] wrf.exe(__module_ra_rrtm_MOD_gasabs+0x260) 
</span><br>
<span class="quotelev1">&gt; [0x11cfca0]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [ 3] wrf.exe(__module_ra_rrtm_MOD_rrtm+0xb31) [0x11e6e41]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [ 4] wrf.exe(__module_ra_rrtm_MOD_rrtmlwrad+0x25ec) 
</span><br>
<span class="quotelev1">&gt; [0x11e9bcc]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [ 5] 
</span><br>
<span class="quotelev1">&gt; wrf.exe(__module_radiation_driver_MOD_radiation_driver+0xe573) [0xcc4ed3]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [ 6] 
</span><br>
<span class="quotelev1">&gt; wrf.exe(__module_first_rk_step_part1_MOD_first_rk_step_part1+0x40c5) 
</span><br>
<span class="quotelev1">&gt; [0xe0e4f5]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [ 7] wrf.exe(solve_em_+0x22e58) [0x9b45c8]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [ 8] wrf.exe(solve_interface_+0x80a) [0x902dda]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [ 9] wrf.exe(__module_integrate_MOD_integrate+0x236) 
</span><br>
<span class="quotelev1">&gt; [0x4b2c4a]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [10] wrf.exe(__module_wrf_top_MOD_wrf_run+0x24) 
</span><br>
<span class="quotelev1">&gt; [0x47a924]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [11] wrf.exe(main+0x41) [0x4794d1]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [12] /lib64/libc.so.6(__libc_start_main+0xf4) 
</span><br>
<span class="quotelev1">&gt; [0x361201d8b4]
</span><br>
<span class="quotelev1">&gt; [part034:21443] [13] wrf.exe [0x4793c9]
</span><br>
<span class="quotelev1">&gt; [part034:21443] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mouhamad
</span><br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17611/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-17611/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17612.php">Ralph Castain: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Previous message:</strong> <a href="17610.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>In reply to:</strong> <a href="17609.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17613.php">Ralph Castain: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
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
