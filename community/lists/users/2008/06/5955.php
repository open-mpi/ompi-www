<?
$subject_val = "Re: [OMPI users] parallel AMBER &amp; PBS issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 09:16:01 2008" -->
<!-- isoreceived="20080621131601" -->
<!-- sent="Sat, 21 Jun 2008 09:14:51 -0400" -->
<!-- isosent="20080621131451" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel AMBER &amp;amp; PBS issue" -->
<!-- id="DE3E9429-31BF-467E-BF0D-B7C0DAC86498_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4851463E.6090801_at_uth.tmc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] parallel AMBER &amp; PBS issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 09:14:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5956.php">Jeff Squyres: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Previous message:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5867.php">Arturas Ziemys: "[OMPI users] parallel AMBER &amp; PBS issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying -- I was on vacation for a week and  
<br>
all the mail piled up...
<br>
<p>That is a very weird stack trace.  Is the application finishing and  
<br>
then crashing during the shutdown?
<br>
<p>I'd be surprised if the problem is actually related to PBS (the stack  
<br>
trace would be quite different).  I wonder if the real problem was  
<br>
that it only started one process, and Amber was unable to handle that  
<br>
nicely...?
<br>
<p>Are you sure that you have PBS support compiled in Open MPI properly?   
<br>
Check ompi_info | grep tm.  You should see a line like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: tm (MCA v1.0, API v1.0.1, Component v1.2.6)
<br>
<p>If you don't see a &quot;pls: tm&quot; line, then your OMPI was not configured  
<br>
with PBS support, and mpiexec may have only started one copy of  
<br>
Amber...?
<br>
<p>As for trying to use a hostfile, I think the real errors are here:
<br>
<p><span class="quotelev1">&gt; Host key verification failed.
</span><br>
<span class="quotelev1">&gt; Host key verification failed.
</span><br>
<p>It seems that you ssh is not setup properly...?
<br>
<p><p><p>On Jun 12, 2008, at 11:52 AM, Arturas Ziemys wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have Xeon dual cpu cluster on redhat. I have compiled openMPI 1.2.6
</span><br>
<span class="quotelev1">&gt; with g95 and AMBER (scientific program doing parallel molecular
</span><br>
<span class="quotelev1">&gt; simulations; Fortran 77&amp;90). Both compilation seems to be fine.  
</span><br>
<span class="quotelev1">&gt; However,
</span><br>
<span class="quotelev1">&gt; AMBER runs from command prompt &quot;mpiexec -np x &lt;exe ...&gt;&quot; successfully,
</span><br>
<span class="quotelev1">&gt; but using PBS batch system fails to run in parallel and runs only  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; single CPU. I get errors like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] Failing at address: 0x39000000
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [ 0] /lib/tls/libpthread.so.0 [0x401ad610]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [ 1] /lib/tls/libc.so.6 [0x420eb85e]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [ 2] /lib/tls/libc.so.6(__cxa_finalize+0x7e)
</span><br>
<span class="quotelev1">&gt; [0x42029eae]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [ 3] /home/aziemys/bin/openmpi/lib/libmpi_f90.so.0
</span><br>
<span class="quotelev1">&gt; [0x40018325]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [ 4] /home/aziemys/bin/openmpi/lib/libmpi_f90.so.0
</span><br>
<span class="quotelev1">&gt; [0x400190f6]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [ 5] /lib/ld-linux.so.2 [0x4000c894]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [ 6] /lib/tls/libc.so.6(exit+0x70) [0x42029c20]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [ 7] /home/aziemys/bin/amber9/exe/sander.MPI  
</span><br>
<span class="quotelev1">&gt; [0x82beb63]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/aziemys/bin/amber9/exe/sander.MPI(_g95_exit_4+0x2c) [0x82bd648]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [ 9]
</span><br>
<span class="quotelev1">&gt; /home/aziemys/bin/amber9/exe/sander.MPI(mexit_+0x9f) [0x817cd03]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [10]
</span><br>
<span class="quotelev1">&gt; /home/aziemys/bin/amber9/exe/sander.MPI(MAIN_+0x3639) [0x80e8e51]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [11]
</span><br>
<span class="quotelev1">&gt; /home/aziemys/bin/amber9/exe/sander.MPI(main+0x2d) [0x82bb471]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [12] /lib/tls/libc.so.6(__libc_start_main+0xe4)
</span><br>
<span class="quotelev1">&gt; [0x42015574]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] [13]
</span><br>
<span class="quotelev1">&gt; /home/aziemys/bin/amber9/exe/sander.MPI(sinh+0x49) [0x80697a1]
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02155] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 0 with PID 2150 on node Morpheus06  
</span><br>
<span class="quotelev1">&gt; exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 5 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I decide to supply machine file ($PBS_NODEFILE), it fails with :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host key verification failed.
</span><br>
<span class="quotelev1">&gt; Host key verification failed.
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] ERROR: A daemon on node Morpheus09 failed to  
</span><br>
<span class="quotelev1">&gt; start as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] ERROR: The daemon exited unexpectedly with status  
</span><br>
<span class="quotelev1">&gt; 255.
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c
</span><br>
<span class="quotelev1">&gt; at line 90
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] ERROR: A daemon on node Morpheus07 failed to  
</span><br>
<span class="quotelev1">&gt; start as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] ERROR: The daemon exited unexpectedly with status  
</span><br>
<span class="quotelev1">&gt; 255.
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [Morpheus06:02107] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Help, please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Arturas Ziemys, PhD
</span><br>
<span class="quotelev1">&gt;  School of Health Information Sciences
</span><br>
<span class="quotelev1">&gt;  University of Texas Health Science Center at Houston
</span><br>
<span class="quotelev1">&gt;  7000 Fannin, Suit 880
</span><br>
<span class="quotelev1">&gt;  Houston, TX 77030
</span><br>
<span class="quotelev1">&gt;  Phone: (713) 500-3975
</span><br>
<span class="quotelev1">&gt;  Fax:   (713) 500-3929
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5956.php">Jeff Squyres: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Previous message:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5867.php">Arturas Ziemys: "[OMPI users] parallel AMBER &amp; PBS issue"</a>
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
