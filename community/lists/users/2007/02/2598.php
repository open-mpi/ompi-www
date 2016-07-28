<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb  3 14:41:55 2007" -->
<!-- isoreceived="20070203194155" -->
<!-- sent="Sat, 3 Feb 2007 14:41:45 -0500" -->
<!-- isosent="20070203194145" -->
<!-- name="Dennis McRitchie" -->
<!-- email="dmcr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't run simple job with openmpi using the Intelcompiler" -->
<!-- id="5927226A3D285F40AB95CA2A3D2369D4FEC5DF_at_EXCLUSTER.pu.win.princeton.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5927226A3D285F40AB95CA2A3D2369D4FEC585_at_EXCLUSTER.pu.win.princeton.edu" -->
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
<strong>Date:</strong> 2007-02-03 14:41:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2599.php">Bo Peng: "[OMPI users] Choices on how to implement a python module in MPI."</a>
<li><strong>Previous message:</strong> <a href="2597.php">Audet, Martin: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>In reply to:</strong> <a href="2595.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2596.php">Joe Griffin: "[OMPI users] -prefix not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry. I just realized that you must mean the log file created by the
<br>
configure script. I was looking for a OpenMPI runtime log file. Is there
<br>
such a thing?
<br>
<p>Dennis
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Dennis McRitchie
</span><br>
<span class="quotelev1">&gt; Sent: Friday, February 02, 2007 6:12 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can't run simple job with openmpi 
</span><br>
<span class="quotelev1">&gt; using the Intelcompiler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I see mention in your FAQ about config.log. My openmpi does not
</span><br>
<span class="quotelev1">&gt; appear to be generating it, at least not anywhere in the install tree.
</span><br>
<span class="quotelev1">&gt; How can I enable the creation of the log file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;        Dennis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Dennis McRitchie 
</span><br>
<span class="quotelev1">&gt; Sent: Friday, February 02, 2007 6:08 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Can't run simple job with openmpi using the Intel compiler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I submit a simple job (described below) using PBS, I 
</span><br>
<span class="quotelev1">&gt; always get one
</span><br>
<span class="quotelev1">&gt; of the following two errors:
</span><br>
<span class="quotelev1">&gt; 1) [adroit-28:03945] [0,0,1]-[0,0,0] mca_oob_tcp_peer_recv_blocking:
</span><br>
<span class="quotelev1">&gt; recv() failed with errno=104
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) [adroit-30:03770] [0,0,3]-[0,0,0] 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed (errno=111) - retrying (pid=3770)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program does a uname and prints out results to standard out. The
</span><br>
<span class="quotelev1">&gt; only MPI calls it makes are MPI_Init, MPI_Comm_size, 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank, and
</span><br>
<span class="quotelev1">&gt; MPI_Finalize. I have tried it with both openmpi v 1.1.2 and 
</span><br>
<span class="quotelev1">&gt; 1.1.4, built
</span><br>
<span class="quotelev1">&gt; with Intel C compiler 9.1.045, and get the same results. But 
</span><br>
<span class="quotelev1">&gt; if I build
</span><br>
<span class="quotelev1">&gt; the same versions of openmpi using gcc, the test program always works
</span><br>
<span class="quotelev1">&gt; fine. The app itself is built with mpicc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It runs successfully if run from the command line with &quot;mpiexec -n X
</span><br>
<span class="quotelev1">&gt; &lt;test-program-name&gt;&quot;, where X is 1 to 8, but if I wrap it in the
</span><br>
<span class="quotelev1">&gt; following qsub command file:
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #PBS -l pmem=512mb,nodes=1:ppn=1,walltime=0:10:00
</span><br>
<span class="quotelev1">&gt; #PBS -m abe
</span><br>
<span class="quotelev1">&gt; # #PBS -o /home0/dmcr/my_mpi/curt/uname_test.gcc.stdout
</span><br>
<span class="quotelev1">&gt; # #PBS -e /home0/dmcr/my_mpi/curt/uname_test.gcc.stderr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd /home/dmcr/my_mpi/openmpi
</span><br>
<span class="quotelev1">&gt; echo &quot;About to call mpiexec&quot;
</span><br>
<span class="quotelev1">&gt; module list
</span><br>
<span class="quotelev1">&gt; mpiexec -n 1 uname_test.intel
</span><br>
<span class="quotelev1">&gt; echo &quot;After call to mpiexec&quot;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it fails on any number of processors from 1 to 8, and the application
</span><br>
<span class="quotelev1">&gt; segfaults.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The complete standard error of an 8-processsor job follows (note that
</span><br>
<span class="quotelev1">&gt; mpiexec ran on adroit-31, but usually there is no info about adroit-31
</span><br>
<span class="quotelev1">&gt; in standard error):
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; Currently Loaded Modulefiles:
</span><br>
<span class="quotelev1">&gt;   1) intel/9.1/32/C/9.1.045         4) intel/9.1/32/default
</span><br>
<span class="quotelev1">&gt;   2) intel/9.1/32/Fortran/9.1.040   5) openmpi/intel/1.1.2/32
</span><br>
<span class="quotelev1">&gt;   3) intel/9.1/32/Iidb/9.1.045
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x5
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/openmpi/1.1.4/intel/i386/lib/libopal.so.0 
</span><br>
<span class="quotelev1">&gt; [0xb72c5b]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ^@[adroit-29:03934] [0,0,2]-[0,0,0] mca_oob_tcp_peer_recv_blocking:
</span><br>
<span class="quotelev1">&gt; recv() failed with errno=104
</span><br>
<span class="quotelev1">&gt; [adroit-28:03945] [0,0,1]-[0,0,0] 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_peer_recv_blocking: recv()
</span><br>
<span class="quotelev1">&gt; failed with errno=104
</span><br>
<span class="quotelev1">&gt; [adroit-30:03770] [0,0,3]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed (errno=111) - retrying (pid=3770)
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The complete standard error of an 1-processsor job follows:
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; Currently Loaded Modulefiles:
</span><br>
<span class="quotelev1">&gt;   1) intel/9.1/32/C/9.1.045         4) intel/9.1/32/default
</span><br>
<span class="quotelev1">&gt;   2) intel/9.1/32/Fortran/9.1.040   5) openmpi/intel/1.1.2/32
</span><br>
<span class="quotelev1">&gt;   3) intel/9.1/32/Iidb/9.1.045
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x2
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/openmpi/1.1.2/intel/i386/lib/libopal.so.0 
</span><br>
<span class="quotelev1">&gt; [0x27d847]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ^@[adroit-31:08840] [0,0,1]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed (errno=111) - retrying (pid=8840)
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts as to why this might be failing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;        Dennis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dennis McRitchie
</span><br>
<span class="quotelev1">&gt; Computational Science and Engineering Support (CSES)
</span><br>
<span class="quotelev1">&gt; Academic Services Department
</span><br>
<span class="quotelev1">&gt; Office of Information Technology
</span><br>
<span class="quotelev1">&gt; Princeton University
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2599.php">Bo Peng: "[OMPI users] Choices on how to implement a python module in MPI."</a>
<li><strong>Previous message:</strong> <a href="2597.php">Audet, Martin: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>In reply to:</strong> <a href="2595.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2596.php">Joe Griffin: "[OMPI users] -prefix not working"</a>
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
