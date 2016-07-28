<?
$subject_val = "Re: [OMPI users] exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 12:21:24 2011" -->
<!-- isoreceived="20111026162124" -->
<!-- sent="Wed, 26 Oct 2011 12:21:10 -0400" -->
<!-- isosent="20111026162110" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exited on signal 11 (Segmentation fault)." -->
<!-- id="4EA83376.1030505_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111026095738.119675e8nwvpxhss_at_webmail.u-bourgogne.fr" -->
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
<strong>Date:</strong> 2011-10-26 12:21:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17630.php">devendra rai: "[OMPI users] Solved:  Visual debugging on the cluster"</a>
<li><strong>Previous message:</strong> <a href="17628.php">Patrick Begou: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>In reply to:</strong> <a href="17622.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17632.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17632.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mouhamad
<br>
<p>Stack of 10240kB is probably the Linux default,
<br>
not necessarily good for HPC and number crunching.
<br>
I'd suggest that you change it to unlimited,
<br>
unless your system administrator has a very good reason not to do
<br>
so.
<br>
We've seen many atmosphre/ocean/climate models crash because
<br>
they couldn't allocate memory on the stack [automatic arrays
<br>
in subroutines, etc].
<br>
<p>This has nothing to do with MPI,
<br>
the programs can fail even when they run in serial mode
<br>
because of this.
<br>
<p>You can just append this line to /etc/security/limits.conf:
<br>
<p>*   -   stack       -1
<br>
<p><p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>Mouhamad Al-Sayed-Ali wrote:
<br>
<span class="quotelev1">&gt; Hi Gus Correa,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  the output of ulimit -a     is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; file(blocks)         unlimited
</span><br>
<span class="quotelev1">&gt; coredump(blocks)     2048
</span><br>
<span class="quotelev1">&gt; data(kbytes)         unlimited
</span><br>
<span class="quotelev1">&gt; stack(kbytes)        10240
</span><br>
<span class="quotelev1">&gt; lockedmem(kbytes)    unlimited
</span><br>
<span class="quotelev1">&gt; memory(kbytes)       unlimited
</span><br>
<span class="quotelev1">&gt; nofiles(descriptors) 1024
</span><br>
<span class="quotelev1">&gt; processes            256
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mouhamad
</span><br>
<span class="quotelev1">&gt; Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Mouhamad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The locked memory is set to unlimited, but the lines
</span><br>
<span class="quotelev2">&gt;&gt; about the stack are commented out.
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried to add this line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *   -   stack       -1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then run wrf again? [Note no &quot;#&quot; hash character]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, if you login to the compute nodes,
</span><br>
<span class="quotelev2">&gt;&gt; what is the output of 'limit' [csh,tcsh] or 'ulimit -a' [sh,bash]?
</span><br>
<span class="quotelev2">&gt;&gt; This should tell you what limits are actually set.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mouhamad Al-Sayed-Ali wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I've checked the &quot;limits.conf&quot;, and it contains theses lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Jcb 29.06.2007 : pbs wrf (Siji)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #*      hard    stack   1000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #*      soft    stack   1000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Dr 14.02.2008 : pour voltaire mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *      hard    memlock unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *      soft    memlock unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many thanks for your help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mouhamad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Mouhamad, Ralph, Terry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Very often big programs like wrf crash with segfault because they
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can't allocate memory on the stack, and assume the system doesn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; impose any limits for it.  This has nothing to do with MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mouhamad:  Check if your stack size is set to unlimited on all compute
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes.  The easy way to get it done
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is to change /etc/security/limits.conf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where you or your system administrator could add these lines:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *   -   memlock     -1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *   -   stack       -1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *   -   nofile      4096
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My two cents,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looks like you are crashing in wrf - have you asked them for help?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 25, 2011, at 7:53 AM, Mouhamad Al-Sayed-Ali wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is exactly the error I have:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; taskid: 0 hostname: part034.u-bourgogne.fr
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] Failing at address: 0xfffffffe01eeb340
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 0] /lib64/libpthread.so.0 [0x3612c0de70]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 1] wrf.exe(__module_ra_rrtm_MOD_taugb3+0x418) 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x11cc9d8]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 2] wrf.exe(__module_ra_rrtm_MOD_gasabs+0x260) 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x11cfca0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 3] wrf.exe(__module_ra_rrtm_MOD_rrtm+0xb31) 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x11e6e41]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 4] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_ra_rrtm_MOD_rrtmlwrad+0x25ec) [0x11e9bcc]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 5] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_radiation_driver_MOD_radiation_driver+0xe573) 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0xcc4ed3]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 6] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_first_rk_step_part1_MOD_first_rk_step_part1+0x40c5) 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0xe0e4f5]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 7] wrf.exe(solve_em_+0x22e58) [0x9b45c8]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 8] wrf.exe(solve_interface_+0x80a) [0x902dda]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 9] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_integrate_MOD_integrate+0x236) [0x4b2c4a]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [10] wrf.exe(__module_wrf_top_MOD_wrf_run+0x24) 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x47a924]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [11] wrf.exe(main+0x41) [0x4794d1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [12] /lib64/libc.so.6(__libc_start_main+0xf4) 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x361201d8b4]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [13] wrf.exe [0x4793c9]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mouhamad
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17630.php">devendra rai: "[OMPI users] Solved:  Visual debugging on the cluster"</a>
<li><strong>Previous message:</strong> <a href="17628.php">Patrick Begou: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>In reply to:</strong> <a href="17622.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17632.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17632.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
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
