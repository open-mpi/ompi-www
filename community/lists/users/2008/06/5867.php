<?
$subject_val = "[OMPI users] parallel AMBER &amp; PBS issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 11:52:38 2008" -->
<!-- isoreceived="20080612155238" -->
<!-- sent="Thu, 12 Jun 2008 10:52:30 -0500" -->
<!-- isosent="20080612155230" -->
<!-- name="Arturas Ziemys" -->
<!-- email="arturas.ziemys_at_[hidden]" -->
<!-- subject="[OMPI users] parallel AMBER &amp;amp; PBS issue" -->
<!-- id="4851463E.6090801_at_uth.tmc.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] parallel AMBER &amp; PBS issue<br>
<strong>From:</strong> Arturas Ziemys (<em>arturas.ziemys_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-12 11:52:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5868.php">Rainer Keller: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Previous message:</strong> <a href="5866.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5955.php">Jeff Squyres: "Re: [OMPI users] parallel AMBER &amp; PBS issue"</a>
<li><strong>Reply:</strong> <a href="5955.php">Jeff Squyres: "Re: [OMPI users] parallel AMBER &amp; PBS issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We have Xeon dual cpu cluster on redhat. I have compiled openMPI 1.2.6 
<br>
with g95 and AMBER (scientific program doing parallel molecular 
<br>
simulations; Fortran 77&amp;90). Both compilation seems to be fine. However, 
<br>
AMBER runs from command prompt &quot;mpiexec -np x &lt;exe ...&gt;&quot; successfully, 
<br>
but using PBS batch system fails to run in parallel and runs only using 
<br>
single CPU. I get errors like:
<br>
<p>[Morpheus06:02155] *** Process received signal ***
<br>
[Morpheus06:02155] Signal: Segmentation fault (11)
<br>
[Morpheus06:02155] Signal code: Address not mapped (1)
<br>
[Morpheus06:02155] Failing at address: 0x39000000
<br>
[Morpheus06:02155] [ 0] /lib/tls/libpthread.so.0 [0x401ad610]
<br>
[Morpheus06:02155] [ 1] /lib/tls/libc.so.6 [0x420eb85e]
<br>
[Morpheus06:02155] [ 2] /lib/tls/libc.so.6(__cxa_finalize+0x7e) 
<br>
[0x42029eae]
<br>
[Morpheus06:02155] [ 3] /home/aziemys/bin/openmpi/lib/libmpi_f90.so.0 
<br>
[0x40018325]
<br>
[Morpheus06:02155] [ 4] /home/aziemys/bin/openmpi/lib/libmpi_f90.so.0 
<br>
[0x400190f6]
<br>
[Morpheus06:02155] [ 5] /lib/ld-linux.so.2 [0x4000c894]
<br>
[Morpheus06:02155] [ 6] /lib/tls/libc.so.6(exit+0x70) [0x42029c20]
<br>
[Morpheus06:02155] [ 7] /home/aziemys/bin/amber9/exe/sander.MPI [0x82beb63]
<br>
[Morpheus06:02155] [ 8] 
<br>
/home/aziemys/bin/amber9/exe/sander.MPI(_g95_exit_4+0x2c) [0x82bd648]
<br>
[Morpheus06:02155] [ 9] 
<br>
/home/aziemys/bin/amber9/exe/sander.MPI(mexit_+0x9f) [0x817cd03]
<br>
[Morpheus06:02155] [10] 
<br>
/home/aziemys/bin/amber9/exe/sander.MPI(MAIN_+0x3639) [0x80e8e51]
<br>
[Morpheus06:02155] [11] 
<br>
/home/aziemys/bin/amber9/exe/sander.MPI(main+0x2d) [0x82bb471]
<br>
[Morpheus06:02155] [12] /lib/tls/libc.so.6(__libc_start_main+0xe4) 
<br>
[0x42015574]
<br>
[Morpheus06:02155] [13] 
<br>
/home/aziemys/bin/amber9/exe/sander.MPI(sinh+0x49) [0x80697a1]
<br>
[Morpheus06:02155] *** End of error message ***
<br>
mpiexec noticed that job rank 0 with PID 2150 on node Morpheus06 exited 
<br>
on signal 11 (Segmentation fault).
<br>
5 additional processes aborted (not shown)
<br>
<p>If I decide to supply machine file ($PBS_NODEFILE), it fails with :
<br>
<p>Host key verification failed.
<br>
Host key verification failed.
<br>
[Morpheus06:02107] ERROR: A daemon on node Morpheus09 failed to start as 
<br>
expected.
<br>
[Morpheus06:02107] ERROR: There may be more information available from
<br>
[Morpheus06:02107] ERROR: the remote shell (see above).
<br>
[Morpheus06:02107] ERROR: The daemon exited unexpectedly with status 255.
<br>
[Morpheus06:02107] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[Morpheus06:02107] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
pls_rsh_module.c at line 1166
<br>
[Morpheus06:02107] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c 
<br>
at line 90
<br>
[Morpheus06:02107] ERROR: A daemon on node Morpheus07 failed to start as 
<br>
expected.
<br>
[Morpheus06:02107] ERROR: There may be more information available from
<br>
[Morpheus06:02107] ERROR: the remote shell (see above).
<br>
[Morpheus06:02107] ERROR: The daemon exited unexpectedly with status 255.
<br>
[Morpheus06:02107] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[Morpheus06:02107] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
pls_rsh_module.c at line 1198
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to cleanly terminate the daemons for this job. 
<br>
Returned value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>Help, please.
<br>
<p><pre>
-- 
Arturas Ziemys, PhD
  School of Health Information Sciences
  University of Texas Health Science Center at Houston
  7000 Fannin, Suit 880
  Houston, TX 77030
  Phone: (713) 500-3975
  Fax:   (713) 500-3929  
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5868.php">Rainer Keller: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Previous message:</strong> <a href="5866.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5955.php">Jeff Squyres: "Re: [OMPI users] parallel AMBER &amp; PBS issue"</a>
<li><strong>Reply:</strong> <a href="5955.php">Jeff Squyres: "Re: [OMPI users] parallel AMBER &amp; PBS issue"</a>
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
