<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 18:11:42 2007" -->
<!-- isoreceived="20070202231142" -->
<!-- sent="Fri, 2 Feb 2007 18:11:37 -0500" -->
<!-- isosent="20070202231137" -->
<!-- name="Dennis McRitchie" -->
<!-- email="dmcr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler" -->
<!-- id="5927226A3D285F40AB95CA2A3D2369D4FEC585_at_EXCLUSTER.pu.win.princeton.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Can't run simple job with openmpi using the Intel compiler" -->
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
<strong>From:</strong> Dennis McRitchie (<em>dmcr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 18:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2596.php">Joe Griffin: "[OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Maybe in reply to:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2598.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intelcompiler"</a>
<li><strong>Reply:</strong> <a href="2598.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intelcompiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, I see mention in your FAQ about config.log. My openmpi does not
<br>
appear to be generating it, at least not anywhere in the install tree.
<br>
How can I enable the creation of the log file?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dennis
<br>
<p>-----Original Message-----
<br>
From: Dennis McRitchie 
<br>
Sent: Friday, February 02, 2007 6:08 PM
<br>
To: 'Open MPI Users'
<br>
Subject: Can't run simple job with openmpi using the Intel compiler
<br>
<p>When I submit a simple job (described below) using PBS, I always get one
<br>
of the following two errors:
<br>
1) [adroit-28:03945] [0,0,1]-[0,0,0] mca_oob_tcp_peer_recv_blocking:
<br>
recv() failed with errno=104
<br>
<p>2) [adroit-30:03770] [0,0,3]-[0,0,0] mca_oob_tcp_peer_complete_connect:
<br>
connection failed (errno=111) - retrying (pid=3770)
<br>
<p>The program does a uname and prints out results to standard out. The
<br>
only MPI calls it makes are MPI_Init, MPI_Comm_size, MPI_Comm_rank, and
<br>
MPI_Finalize. I have tried it with both openmpi v 1.1.2 and 1.1.4, built
<br>
with Intel C compiler 9.1.045, and get the same results. But if I build
<br>
the same versions of openmpi using gcc, the test program always works
<br>
fine. The app itself is built with mpicc.
<br>
<p>It runs successfully if run from the command line with &quot;mpiexec -n X
<br>
&lt;test-program-name&gt;&quot;, where X is 1 to 8, but if I wrap it in the
<br>
following qsub command file:
<br>
---------------------------------------------------
<br>
#PBS -l pmem=512mb,nodes=1:ppn=1,walltime=0:10:00
<br>
#PBS -m abe
<br>
# #PBS -o /home0/dmcr/my_mpi/curt/uname_test.gcc.stdout
<br>
# #PBS -e /home0/dmcr/my_mpi/curt/uname_test.gcc.stderr
<br>
<p>cd /home/dmcr/my_mpi/openmpi
<br>
echo &quot;About to call mpiexec&quot;
<br>
module list
<br>
mpiexec -n 1 uname_test.intel
<br>
echo &quot;After call to mpiexec&quot;
<br>
----------------------------------------------------
<br>
<p>it fails on any number of processors from 1 to 8, and the application
<br>
segfaults.
<br>
<p>The complete standard error of an 8-processsor job follows (note that
<br>
mpiexec ran on adroit-31, but usually there is no info about adroit-31
<br>
in standard error):
<br>
-------------------------
<br>
Currently Loaded Modulefiles:
<br>
&nbsp;&nbsp;1) intel/9.1/32/C/9.1.045         4) intel/9.1/32/default
<br>
&nbsp;&nbsp;2) intel/9.1/32/Fortran/9.1.040   5) openmpi/intel/1.1.2/32
<br>
&nbsp;&nbsp;3) intel/9.1/32/Iidb/9.1.045
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x5
<br>
[0] func:/usr/local/openmpi/1.1.4/intel/i386/lib/libopal.so.0 [0xb72c5b]
<br>
*** End of error message ***
<br>
^@[adroit-29:03934] [0,0,2]-[0,0,0] mca_oob_tcp_peer_recv_blocking:
<br>
recv() failed with errno=104
<br>
[adroit-28:03945] [0,0,1]-[0,0,0] mca_oob_tcp_peer_recv_blocking: recv()
<br>
failed with errno=104
<br>
[adroit-30:03770] [0,0,3]-[0,0,0] mca_oob_tcp_peer_complete_connect:
<br>
connection failed (errno=111) - retrying (pid=3770)
<br>
--------------------------
<br>
<p>The complete standard error of an 1-processsor job follows:
<br>
--------------------------
<br>
Currently Loaded Modulefiles:
<br>
&nbsp;&nbsp;1) intel/9.1/32/C/9.1.045         4) intel/9.1/32/default
<br>
&nbsp;&nbsp;2) intel/9.1/32/Fortran/9.1.040   5) openmpi/intel/1.1.2/32
<br>
&nbsp;&nbsp;3) intel/9.1/32/Iidb/9.1.045
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x2
<br>
[0] func:/usr/local/openmpi/1.1.2/intel/i386/lib/libopal.so.0 [0x27d847]
<br>
*** End of error message ***
<br>
^@[adroit-31:08840] [0,0,1]-[0,0,0] mca_oob_tcp_peer_complete_connect:
<br>
connection failed (errno=111) - retrying (pid=8840)
<br>
---------------------------
<br>
<p>Any thoughts as to why this might be failing?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dennis
<br>
<p>Dennis McRitchie
<br>
Computational Science and Engineering Support (CSES)
<br>
Academic Services Department
<br>
Office of Information Technology
<br>
Princeton University
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2596.php">Joe Griffin: "[OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Maybe in reply to:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2598.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intelcompiler"</a>
<li><strong>Reply:</strong> <a href="2598.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intelcompiler"</a>
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
