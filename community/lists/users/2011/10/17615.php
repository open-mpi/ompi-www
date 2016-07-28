<?
$subject_val = "Re: [OMPI users] exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 25 11:06:58 2011" -->
<!-- isoreceived="20111025150658" -->
<!-- sent="Tue, 25 Oct 2011 17:06:47 +0200" -->
<!-- isosent="20111025150647" -->
<!-- name="Mouhamad Al-Sayed-Ali" -->
<!-- email="Mouhamad.Al-Sayed-Ali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exited on signal 11 (Segmentation fault)." -->
<!-- id="20111025170647.81764dwe934gloqo_at_webmail.u-bourgogne.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EA6CD2D.2080601_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-10-25 11:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17616.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17614.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="17614.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17616.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17616.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I've checked the &quot;limits.conf&quot;, and it contains theses lines
<br>
<p><p># Jcb 29.06.2007 : pbs wrf (Siji)
<br>
#*      hard    stack   1000000
<br>
#*      soft    stack   1000000
<br>
<p># Dr 14.02.2008 : pour voltaire mpi
<br>
*      hard    memlock unlimited
<br>
*      soft    memlock unlimited
<br>
<p><p><p>Many thanks for your help
<br>
Mouhamad
<br>
<p>Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi Mouhamad, Ralph, Terry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Very often big programs like wrf crash with segfault because they
</span><br>
<span class="quotelev1">&gt; can't allocate memory on the stack, and assume the system doesn't
</span><br>
<span class="quotelev1">&gt; impose any limits for it.  This has nothing to do with MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mouhamad:  Check if your stack size is set to unlimited on all compute
</span><br>
<span class="quotelev1">&gt; nodes.  The easy way to get it done
</span><br>
<span class="quotelev1">&gt; is to change /etc/security/limits.conf,
</span><br>
<span class="quotelev1">&gt; where you or your system administrator could add these lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *   -   memlock     -1
</span><br>
<span class="quotelev1">&gt; *   -   stack       -1
</span><br>
<span class="quotelev1">&gt; *   -   nofile      4096
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Looks like you are crashing in wrf - have you asked them for help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 25, 2011, at 7:53 AM, Mouhamad Al-Sayed-Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is exactly the error I have:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; taskid: 0 hostname: part034.u-bourgogne.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] Failing at address: 0xfffffffe01eeb340
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [ 0] /lib64/libpthread.so.0 [0x3612c0de70]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [ 1] wrf.exe(__module_ra_rrtm_MOD_taugb3+0x418) [0x11cc9d8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [ 2] wrf.exe(__module_ra_rrtm_MOD_gasabs+0x260) [0x11cfca0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [ 3] wrf.exe(__module_ra_rrtm_MOD_rrtm+0xb31) [0x11e6e41]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [ 4]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrf.exe(__module_ra_rrtm_MOD_rrtmlwrad+0x25ec) [0x11e9bcc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [ 5]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrf.exe(__module_radiation_driver_MOD_radiation_driver+0xe573)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xcc4ed3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [ 6]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrf.exe(__module_first_rk_step_part1_MOD_first_rk_step_part1+0x40c5)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xe0e4f5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [ 7] wrf.exe(solve_em_+0x22e58) [0x9b45c8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [ 8] wrf.exe(solve_interface_+0x80a) [0x902dda]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [ 9]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrf.exe(__module_integrate_MOD_integrate+0x236) [0x4b2c4a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [10] wrf.exe(__module_wrf_top_MOD_wrf_run+0x24) [0x47a924]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [11] wrf.exe(main+0x41) [0x4794d1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [12] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x361201d8b4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] [13] wrf.exe [0x4793c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [part034:21443] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mouhamad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17616.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17614.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="17614.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17616.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17616.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
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
