<?
$subject_val = "Re: [OMPI users] exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 03:57:50 2011" -->
<!-- isoreceived="20111026075750" -->
<!-- sent="Wed, 26 Oct 2011 09:57:38 +0200" -->
<!-- isosent="20111026075738" -->
<!-- name="Mouhamad Al-Sayed-Ali" -->
<!-- email="Mouhamad.Al-Sayed-Ali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exited on signal 11 (Segmentation fault)." -->
<!-- id="20111026095738.119675e8nwvpxhss_at_webmail.u-bourgogne.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EA6D493.7010909_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-10-26 03:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17623.php">Patrick Begou: "[OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>Previous message:</strong> <a href="17621.php">Nguyen Toan: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>In reply to:</strong> <a href="17616.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17629.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17629.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus Correa,
<br>
<p>&nbsp;&nbsp;the output of ulimit -a     is
<br>
<p><p><pre>
----
file(blocks)         unlimited
coredump(blocks)     2048
data(kbytes)         unlimited
stack(kbytes)        10240
lockedmem(kbytes)    unlimited
memory(kbytes)       unlimited
nofiles(descriptors) 1024
processes            256
--------
Thanks
Mouhamad
Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit&#160;:
&gt; Hi Mouhamad
&gt;
&gt; The locked memory is set to unlimited, but the lines
&gt; about the stack are commented out.
&gt; Have you tried to add this line:
&gt;
&gt; *   -   stack       -1
&gt;
&gt; then run wrf again? [Note no &quot;#&quot; hash character]
&gt;
&gt; Also, if you login to the compute nodes,
&gt; what is the output of 'limit' [csh,tcsh] or 'ulimit -a' [sh,bash]?
&gt; This should tell you what limits are actually set.
&gt;
&gt; I hope this helps,
&gt; Gus Correa
&gt;
&gt; Mouhamad Al-Sayed-Ali wrote:
&gt;&gt; Hi all,
&gt;&gt;
&gt;&gt;   I've checked the &quot;limits.conf&quot;, and it contains theses lines
&gt;&gt;
&gt;&gt;
&gt;&gt; # Jcb 29.06.2007 : pbs wrf (Siji)
&gt;&gt; #*      hard    stack   1000000
&gt;&gt; #*      soft    stack   1000000
&gt;&gt;
&gt;&gt; # Dr 14.02.2008 : pour voltaire mpi
&gt;&gt; *      hard    memlock unlimited
&gt;&gt; *      soft    memlock unlimited
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; Many thanks for your help
&gt;&gt; Mouhamad
&gt;&gt;
&gt;&gt; Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit :
&gt;&gt;
&gt;&gt;&gt; Hi Mouhamad, Ralph, Terry
&gt;&gt;&gt;
&gt;&gt;&gt; Very often big programs like wrf crash with segfault because they
&gt;&gt;&gt; can't allocate memory on the stack, and assume the system doesn't
&gt;&gt;&gt; impose any limits for it.  This has nothing to do with MPI.
&gt;&gt;&gt;
&gt;&gt;&gt; Mouhamad:  Check if your stack size is set to unlimited on all compute
&gt;&gt;&gt; nodes.  The easy way to get it done
&gt;&gt;&gt; is to change /etc/security/limits.conf,
&gt;&gt;&gt; where you or your system administrator could add these lines:
&gt;&gt;&gt;
&gt;&gt;&gt; *   -   memlock     -1
&gt;&gt;&gt; *   -   stack       -1
&gt;&gt;&gt; *   -   nofile      4096
&gt;&gt;&gt;
&gt;&gt;&gt; My two cents,
&gt;&gt;&gt; Gus Correa
&gt;&gt;&gt;
&gt;&gt;&gt; Ralph Castain wrote:
&gt;&gt;&gt;&gt; Looks like you are crashing in wrf - have you asked them for help?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Oct 25, 2011, at 7:53 AM, Mouhamad Al-Sayed-Ali wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Hi again,
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; This is exactly the error I have:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; ----
&gt;&gt;&gt;&gt;&gt; taskid: 0 hostname: part034.u-bourgogne.fr
&gt;&gt;&gt;&gt;&gt; [part034:21443] *** Process received signal ***
&gt;&gt;&gt;&gt;&gt; [part034:21443] Signal: Segmentation fault (11)
&gt;&gt;&gt;&gt;&gt; [part034:21443] Signal code: Address not mapped (1)
&gt;&gt;&gt;&gt;&gt; [part034:21443] Failing at address: 0xfffffffe01eeb340
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 0] /lib64/libpthread.so.0 [0x3612c0de70]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 1] wrf.exe(__module_ra_rrtm_MOD_taugb3+0x418)  
&gt;&gt;&gt;&gt;&gt; [0x11cc9d8]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 2] wrf.exe(__module_ra_rrtm_MOD_gasabs+0x260)  
&gt;&gt;&gt;&gt;&gt; [0x11cfca0]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 3] wrf.exe(__module_ra_rrtm_MOD_rrtm+0xb31) [0x11e6e41]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 4]  
&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_ra_rrtm_MOD_rrtmlwrad+0x25ec) [0x11e9bcc]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 5]  
&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_radiation_driver_MOD_radiation_driver+0xe573)  
&gt;&gt;&gt;&gt;&gt; [0xcc4ed3]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 6]  
&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_first_rk_step_part1_MOD_first_rk_step_part1+0x40c5)  
&gt;&gt;&gt;&gt;&gt; [0xe0e4f5]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 7] wrf.exe(solve_em_+0x22e58) [0x9b45c8]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 8] wrf.exe(solve_interface_+0x80a) [0x902dda]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 9]  
&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_integrate_MOD_integrate+0x236) [0x4b2c4a]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [10] wrf.exe(__module_wrf_top_MOD_wrf_run+0x24)  
&gt;&gt;&gt;&gt;&gt; [0x47a924]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [11] wrf.exe(main+0x41) [0x4794d1]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [12] /lib64/libc.so.6(__libc_start_main+0xf4)  
&gt;&gt;&gt;&gt;&gt; [0x361201d8b4]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [13] wrf.exe [0x4793c9]
&gt;&gt;&gt;&gt;&gt; [part034:21443] *** End of error message ***
&gt;&gt;&gt;&gt;&gt; -------
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Mouhamad
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17623.php">Patrick Begou: "[OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>Previous message:</strong> <a href="17621.php">Nguyen Toan: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>In reply to:</strong> <a href="17616.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17629.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="17629.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
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
