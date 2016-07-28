<?
$subject_val = "Re: [OMPI users] exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 25 10:52:44 2011" -->
<!-- isoreceived="20111025145244" -->
<!-- sent="Tue, 25 Oct 2011 10:52:29 -0400" -->
<!-- isosent="20111025145229" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exited on signal 11 (Segmentation fault)." -->
<!-- id="4EA6CD2D.2080601_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A047F6B-F51D-4EA7-B67B-FC02418812ED_at_open-mpi.org" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-25 10:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17615.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17613.php">Ralph Castain: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="17613.php">Ralph Castain: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17615.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17615.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mouhamad, Ralph, Terry
<br>
<p>Very often big programs like wrf crash with segfault because they
<br>
can't allocate memory on the stack, and assume the system doesn't
<br>
impose any limits for it.  This has nothing to do with MPI.
<br>
<p>Mouhamad:  Check if your stack size is set to unlimited on all compute
<br>
nodes.  The easy way to get it done
<br>
is to change /etc/security/limits.conf,
<br>
where you or your system administrator could add these lines:
<br>
<p>*   -   memlock     -1
<br>
*   -   stack       -1
<br>
*   -   nofile      4096
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Looks like you are crashing in wrf - have you asked them for help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2011, at 7:53 AM, Mouhamad Al-Sayed-Ali wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi again,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is exactly the error I have:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; taskid: 0 hostname: part034.u-bourgogne.fr
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] Failing at address: 0xfffffffe01eeb340
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [ 0] /lib64/libpthread.so.0 [0x3612c0de70]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [ 1] wrf.exe(__module_ra_rrtm_MOD_taugb3+0x418) [0x11cc9d8]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [ 2] wrf.exe(__module_ra_rrtm_MOD_gasabs+0x260) [0x11cfca0]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [ 3] wrf.exe(__module_ra_rrtm_MOD_rrtm+0xb31) [0x11e6e41]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [ 4] wrf.exe(__module_ra_rrtm_MOD_rrtmlwrad+0x25ec) [0x11e9bcc]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [ 5] wrf.exe(__module_radiation_driver_MOD_radiation_driver+0xe573) [0xcc4ed3]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [ 6] wrf.exe(__module_first_rk_step_part1_MOD_first_rk_step_part1+0x40c5) [0xe0e4f5]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [ 7] wrf.exe(solve_em_+0x22e58) [0x9b45c8]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [ 8] wrf.exe(solve_interface_+0x80a) [0x902dda]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [ 9] wrf.exe(__module_integrate_MOD_integrate+0x236) [0x4b2c4a]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [10] wrf.exe(__module_wrf_top_MOD_wrf_run+0x24) [0x47a924]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [11] wrf.exe(main+0x41) [0x4794d1]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [12] /lib64/libc.so.6(__libc_start_main+0xf4) [0x361201d8b4]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] [13] wrf.exe [0x4793c9]
</span><br>
<span class="quotelev2">&gt;&gt; [part034:21443] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; -------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mouhamad
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17615.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17613.php">Ralph Castain: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="17613.php">Ralph Castain: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17615.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17615.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
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
