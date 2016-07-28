<?
$subject_val = "Re: [OMPI users] Hang in MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 11:58:38 2016" -->
<!-- isoreceived="20160630155838" -->
<!-- sent="Thu, 30 Jun 2016 08:58:35 -0700" -->
<!-- isosent="20160630155835" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hang in MPI_Abort" -->
<!-- id="34186454-17A0-4473-A65B-D7956F83615C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="57753F70.8030002_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hang in MPI_Abort<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-30 11:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29576.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The ompi/mca/cool/sm will not be used on	multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29574.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="29573.php">Orion Poplawski: "[OMPI users] Hang in MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29577.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="29577.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are the procs still alive? Is this on a single node?
<br>
<p><span class="quotelev1">&gt; On Jun 30, 2016, at 8:49 AM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing hangs when MPI_Abort is called.  This is with openmpi 1.10.3.  e.g:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Testing  -- big dataset test (bigdset)
</span><br>
<span class="quotelev1">&gt; Proc 3: *** Parallel ERROR ***
</span><br>
<span class="quotelev1">&gt;    VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
</span><br>
<span class="quotelev1">&gt; aborting MPI processes
</span><br>
<span class="quotelev1">&gt; Testing  -- big dataset test (bigdset)
</span><br>
<span class="quotelev1">&gt; Proc 0: *** Parallel ERROR ***
</span><br>
<span class="quotelev1">&gt;    VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
</span><br>
<span class="quotelev1">&gt; aborting MPI processes
</span><br>
<span class="quotelev1">&gt; Testing  -- big dataset test (bigdset)
</span><br>
<span class="quotelev1">&gt; Proc 2: *** Parallel ERROR ***
</span><br>
<span class="quotelev1">&gt;    VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 3 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Testing  -- big dataset test (bigdset)
</span><br>
<span class="quotelev1">&gt; Proc 5: *** Parallel ERROR ***
</span><br>
<span class="quotelev1">&gt;    VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
</span><br>
<span class="quotelev1">&gt; aborting MPI processes
</span><br>
<span class="quotelev1">&gt; aborting MPI processes
</span><br>
<span class="quotelev1">&gt; Testing  -- big dataset test (bigdset)
</span><br>
<span class="quotelev1">&gt; Proc 1: *** Parallel ERROR ***
</span><br>
<span class="quotelev1">&gt;    VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
</span><br>
<span class="quotelev1">&gt; aborting MPI processes
</span><br>
<span class="quotelev1">&gt; Testing  -- big dataset test (bigdset)
</span><br>
<span class="quotelev1">&gt; Proc 4: *** Parallel ERROR ***
</span><br>
<span class="quotelev1">&gt;    VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
</span><br>
<span class="quotelev1">&gt; aborting MPI processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; strace of mpiexec process:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, events=POLLIN},
</span><br>
<span class="quotelev1">&gt; {fd=14, events=POLLIN}], 4, -1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion    1w      REG        8,3    10547 17696145
</span><br>
<span class="quotelev1">&gt; /var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root/builddir/build/BUILD/hdf5-1.8.17/openmpi/testpar/testphdf5.chklog
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion    2w      REG        8,3    10547 17696145
</span><br>
<span class="quotelev1">&gt; /var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root/builddir/build/BUILD/hdf5-1.8.17/openmpi/testpar/testphdf5.chklog
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion    3u     unix 0xdaedbc80      0t0  4818918 type=STREAM
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion    4u     unix 0xdaed8000      0t0  4818919 type=STREAM
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion    5u  a_inode       0,11        0     8731 [eventfd]
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion    6u      REG       0,38        0  4818921
</span><br>
<span class="quotelev1">&gt; /var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root/dev/shm/open_mpi.0000
</span><br>
<span class="quotelev1">&gt; (deleted)
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion    7r     FIFO       0,10      0t0  4818922 pipe
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion    8w     FIFO       0,10      0t0  4818922 pipe
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion    9r      DIR        8,3     4096 15471703
</span><br>
<span class="quotelev1">&gt; /var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion   10r      DIR       0,16        0       82
</span><br>
<span class="quotelev1">&gt; /var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root/sys/firmware/devicetree/base/cpus
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion   11u     IPv4    4818926      0t0      TCP *:39619 (LISTEN)
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion   12r     FIFO       0,10      0t0  4818927 pipe
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion   13w     FIFO       0,10      0t0  4818927 pipe
</span><br>
<span class="quotelev1">&gt; mpiexec 21511 orion   14r     FIFO        8,3      0t0 17965730
</span><br>
<span class="quotelev1">&gt; /var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root/tmp/openmpi-sessions-mockbuild_at_arm03-packager00_0/46622/0/debugger_attach_fifo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions on what to look for?  FWIW, it was a 6 process run on a 4 core
</span><br>
<span class="quotelev1">&gt; machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29573.php">http://www.open-mpi.org/community/lists/users/2016/06/29573.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29576.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The ompi/mca/cool/sm will not be used on	multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29574.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="29573.php">Orion Poplawski: "[OMPI users] Hang in MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29577.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="29577.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
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
