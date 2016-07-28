<?
$subject_val = "[OMPI users] Hang in MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 11:49:07 2016" -->
<!-- isoreceived="20160630154907" -->
<!-- sent="Thu, 30 Jun 2016 09:49:04 -0600" -->
<!-- isosent="20160630154904" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI users] Hang in MPI_Abort" -->
<!-- id="57753F70.8030002_at_cora.nwra.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Hang in MPI_Abort<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-30 11:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29574.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="29572.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29574.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="29574.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="29575.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm seeing hangs when MPI_Abort is called.  This is with openmpi 1.10.3.  e.g:
<br>
<p>program output:
<br>
<p>Testing  -- big dataset test (bigdset)
<br>
Proc 3: *** Parallel ERROR ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
<br>
aborting MPI processes
<br>
Testing  -- big dataset test (bigdset)
<br>
Proc 0: *** Parallel ERROR ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
<br>
aborting MPI processes
<br>
Testing  -- big dataset test (bigdset)
<br>
Proc 2: *** Parallel ERROR ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
<br>
--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 3 in communicator MPI_COMM_WORLD
<br>
with errorcode 1.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
Testing  -- big dataset test (bigdset)
<br>
Proc 5: *** Parallel ERROR ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
<br>
aborting MPI processes
<br>
aborting MPI processes
<br>
Testing  -- big dataset test (bigdset)
<br>
Proc 1: *** Parallel ERROR ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
<br>
aborting MPI processes
<br>
Testing  -- big dataset test (bigdset)
<br>
Proc 4: *** Parallel ERROR ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;VRFY (sizeof(MPI_Offset)&gt;4) failed at line  479 in ../../testpar/t_mdset.c
<br>
aborting MPI processes
<br>
<p><p>strace of mpiexec process:
<br>
<p>poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, events=POLLIN},
<br>
{fd=14, events=POLLIN}], 4, -1
<br>
<p>mpiexec 21511 orion    1w      REG        8,3    10547 17696145
<br>
/var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root/builddir/build/BUILD/hdf5-1.8.17/openmpi/testpar/testphdf5.chklog
<br>
mpiexec 21511 orion    2w      REG        8,3    10547 17696145
<br>
/var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root/builddir/build/BUILD/hdf5-1.8.17/openmpi/testpar/testphdf5.chklog
<br>
mpiexec 21511 orion    3u     unix 0xdaedbc80      0t0  4818918 type=STREAM
<br>
mpiexec 21511 orion    4u     unix 0xdaed8000      0t0  4818919 type=STREAM
<br>
mpiexec 21511 orion    5u  a_inode       0,11        0     8731 [eventfd]
<br>
mpiexec 21511 orion    6u      REG       0,38        0  4818921
<br>
/var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root/dev/shm/open_mpi.0000
<br>
(deleted)
<br>
mpiexec 21511 orion    7r     FIFO       0,10      0t0  4818922 pipe
<br>
mpiexec 21511 orion    8w     FIFO       0,10      0t0  4818922 pipe
<br>
mpiexec 21511 orion    9r      DIR        8,3     4096 15471703
<br>
/var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root
<br>
mpiexec 21511 orion   10r      DIR       0,16        0       82
<br>
/var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root/sys/firmware/devicetree/base/cpus
<br>
mpiexec 21511 orion   11u     IPv4    4818926      0t0      TCP *:39619 (LISTEN)
<br>
mpiexec 21511 orion   12r     FIFO       0,10      0t0  4818927 pipe
<br>
mpiexec 21511 orion   13w     FIFO       0,10      0t0  4818927 pipe
<br>
mpiexec 21511 orion   14r     FIFO        8,3      0t0 17965730
<br>
/var/lib/mock/fedora-rawhide-armhfp--orion-hdf5/root/tmp/openmpi-sessions-mockbuild_at_arm03-packager00_0/46622/0/debugger_attach_fifo
<br>
<p>Any suggestions on what to look for?  FWIW, it was a 6 process run on a 4 core
<br>
machine.
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29574.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="29572.php">Saliya Ekanayake: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29574.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="29574.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="29575.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
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
