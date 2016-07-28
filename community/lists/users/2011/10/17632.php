<?
$subject_val = "Re: [OMPI users] exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 14:44:48 2011" -->
<!-- isoreceived="20111026184448" -->
<!-- sent="Wed, 26 Oct 2011 20:44:36 +0200" -->
<!-- isosent="20111026184436" -->
<!-- name="Mouhamad Al-Sayed-Ali" -->
<!-- email="Mouhamad.Al-Sayed-Ali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exited on signal 11 (Segmentation fault)." -->
<!-- id="20111026204436.15792i3yrczm0w84_at_webmail.u-bourgogne.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EA83376.1030505_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-10-26 14:44:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17633.php">Yue Guan: "[OMPI users] successful story of building openmpi on cygwin?"</a>
<li><strong>Previous message:</strong> <a href="17631.php">Mudassar Majeed: "[OMPI users] Want to find LogGP parameters. Please help"</a>
<li><strong>In reply to:</strong> <a href="17629.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus;
<br>
<p>&nbsp;&nbsp;&nbsp;I have done as uou suggest me but it always doesn't work!
<br>
<p>Many thanks for your help
<br>
<p><p>Mouhamad
<br>
Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit&#160;:
<br>
<p><span class="quotelev1">&gt; Hi Mouhamad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stack of 10240kB is probably the Linux default,
</span><br>
<span class="quotelev1">&gt; not necessarily good for HPC and number crunching.
</span><br>
<span class="quotelev1">&gt; I'd suggest that you change it to unlimited,
</span><br>
<span class="quotelev1">&gt; unless your system administrator has a very good reason not to do
</span><br>
<span class="quotelev1">&gt; so.
</span><br>
<span class="quotelev1">&gt; We've seen many atmosphre/ocean/climate models crash because
</span><br>
<span class="quotelev1">&gt; they couldn't allocate memory on the stack [automatic arrays
</span><br>
<span class="quotelev1">&gt; in subroutines, etc].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This has nothing to do with MPI,
</span><br>
<span class="quotelev1">&gt; the programs can fail even when they run in serial mode
</span><br>
<span class="quotelev1">&gt; because of this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can just append this line to /etc/security/limits.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *   -   stack       -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mouhamad Al-Sayed-Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus Correa,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the output of ulimit -a     is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; file(blocks)         unlimited
</span><br>
<span class="quotelev2">&gt;&gt; coredump(blocks)     2048
</span><br>
<span class="quotelev2">&gt;&gt; data(kbytes)         unlimited
</span><br>
<span class="quotelev2">&gt;&gt; stack(kbytes)        10240
</span><br>
<span class="quotelev2">&gt;&gt; lockedmem(kbytes)    unlimited
</span><br>
<span class="quotelev2">&gt;&gt; memory(kbytes)       unlimited
</span><br>
<span class="quotelev2">&gt;&gt; nofiles(descriptors) 1024
</span><br>
<span class="quotelev2">&gt;&gt; processes            256
</span><br>
<span class="quotelev2">&gt;&gt; --------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mouhamad
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Mouhamad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The locked memory is set to unlimited, but the lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about the stack are commented out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you tried to add this line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *   -   stack       -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then run wrf again? [Note no &quot;#&quot; hash character]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, if you login to the compute nodes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what is the output of 'limit' [csh,tcsh] or 'ulimit -a' [sh,bash]?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should tell you what limits are actually set.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mouhamad Al-Sayed-Ali wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I've checked the &quot;limits.conf&quot;, and it contains theses lines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Jcb 29.06.2007 : pbs wrf (Siji)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #*      hard    stack   1000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #*      soft    stack   1000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Dr 14.02.2008 : pour voltaire mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *      hard    memlock unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *      soft    memlock unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Many thanks for your help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mouhamad
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Mouhamad, Ralph, Terry
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Very often big programs like wrf crash with segfault because they
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can't allocate memory on the stack, and assume the system doesn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; impose any limits for it.  This has nothing to do with MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mouhamad:  Check if your stack size is set to unlimited on all compute
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes.  The easy way to get it done
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is to change /etc/security/limits.conf,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where you or your system administrator could add these lines:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *   -   memlock     -1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *   -   stack       -1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *   -   nofile      4096
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My two cents,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Looks like you are crashing in wrf - have you asked them for help?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 25, 2011, at 7:53 AM, Mouhamad Al-Sayed-Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is exactly the error I have:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; taskid: 0 hostname: part034.u-bourgogne.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] Failing at address: 0xfffffffe01eeb340
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 0] /lib64/libpthread.so.0 [0x3612c0de70]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 1]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_ra_rrtm_MOD_taugb3+0x418) [0x11cc9d8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 2]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_ra_rrtm_MOD_gasabs+0x260) [0x11cfca0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 3] wrf.exe(__module_ra_rrtm_MOD_rrtm+0xb31)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x11e6e41]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 4]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_ra_rrtm_MOD_rrtmlwrad+0x25ec) [0x11e9bcc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 5]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_radiation_driver_MOD_radiation_driver+0xe573)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0xcc4ed3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 6]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_first_rk_step_part1_MOD_first_rk_step_part1+0x40c5)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0xe0e4f5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 7] wrf.exe(solve_em_+0x22e58) [0x9b45c8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 8] wrf.exe(solve_interface_+0x80a) [0x902dda]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 9]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_integrate_MOD_integrate+0x236) [0x4b2c4a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [10]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_wrf_top_MOD_wrf_run+0x24) [0x47a924]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [11] wrf.exe(main+0x41) [0x4794d1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [12] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0x361201d8b4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] [13] wrf.exe [0x4793c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [part034:21443] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mouhamad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="17633.php">Yue Guan: "[OMPI users] successful story of building openmpi on cygwin?"</a>
<li><strong>Previous message:</strong> <a href="17631.php">Mudassar Majeed: "[OMPI users] Want to find LogGP parameters. Please help"</a>
<li><strong>In reply to:</strong> <a href="17629.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
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
