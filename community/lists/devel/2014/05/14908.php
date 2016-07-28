<?
$subject_val = "[OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 11:11:10 2014" -->
<!-- isoreceived="20140529151110" -->
<!-- sent="Thu, 29 May 2014 08:11:07 -0700" -->
<!-- isosent="20140529151107" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3604568B15E_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Intermittent hangs when exiting with error<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 11:11:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14909.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14907.php">Joshua Ladd: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14941.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14941.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph:
<br>
I am seeing cases where mpirun seems to hang when one of the applications exits with non-zero.  For example, the intel test MPI_Cart_get_c will exit that way if there are not enough processes to run the test.  In most cases, mpirun seems to return fine with the error code, but sometimes it just hangs.   I first started noticing this in my mtt runs.  It seems (but not conclusive) that I see this when both the usnic and openib are built, even though I am only using the openib (as I have no usnic hardware).
<br>
<p>Anyone else seeing something like this?  Note that I see this on both 1.8 and trunk, but I show trunk here.
<br>
<p><p>PASS:
<br>
[rvandevaart_at_drossetti-ivy0 src]$ mpirun --mca btl self,sm,usnic,openib --host drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 -np 4 --mca btl_openib_warn_default_gid_prefix 0 MPI_Cart_get_c
<br>
MPITEST skip (1): WARNING --  nodes =   4   Need   6 nodes to run test
<br>
MPITEST info  (0): Starting MPI_Cart_get  test
<br>
MPITEST skip (0): WARNING --  nodes =   4   Need   6 nodes to run test
<br>
MPITEST skip (3): WARNING --  nodes =   4   Need   6 nodes to run test
<br>
MPITEST skip (2): WARNING --  nodes =   4   Need   6 nodes to run test
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status, thus causing the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[45854,1],1]
<br>
&nbsp;&nbsp;Exit code:    77
<br>
--------------------------------------------------------------------------
<br>
<p>FAIL:
<br>
[rvandevaart_at_drossetti-ivy0 src]$ mpirun --mca btl self,sm,usnic,openib --host drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 -np 4 --mca btl_openib_warn_default_gid_prefix 0 MPI_Cart_get_c
<br>
MPITEST skip (1): WARNING --  nodes =   4   Need   6 nodes to run test
<br>
MPITEST info  (0): Starting MPI_Cart_get  test
<br>
MPITEST skip (0): WARNING --  nodes =   4   Need   6 nodes to run test
<br>
MPITEST skip (3): WARNING --  nodes =   4   Need   6 nodes to run test
<br>
MPITEST skip (2): WARNING --  nodes =   4   Need   6 nodes to run test
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
[...now we are hung...]
<br>
<p>LOCAL mpirun:
<br>
[rvandevaart_at_drossetti-ivy0 64-mtt-nocuda]$ pstack 27705 Thread 2 (Thread 0x7fe0c8c47700 (LWP 27706)):
<br>
#0  0x00007fe0ca578533 in select () from /lib64/libc.so.6
<br>
#1  0x00007fe0c8c5591e in listen_thread () from /geppetto/home/rvandevaart/ompi/ompi-trunk-reduction-new/64-mtt-nocuda/lib/openmpi/mca_oob_tcp.so
<br>
#2  0x00007fe0ca831851 in start_thread () from /lib64/libpthread.so.0
<br>
#3  0x00007fe0ca57f94d in clone () from /lib64/libc.so.6 Thread 1 (Thread 0x7fe0cbcdd700 (LWP 27705)):
<br>
#0  0x00007fe0ca576293 in poll () from /lib64/libc.so.6
<br>
#1  0x00007fe0cb589575 in poll_dispatch () from /geppetto/home/rvandevaart/ompi/ompi-trunk-reduction-new/64-mtt-nocuda/lib/libopen-pal.so.0
<br>
#2  0x00007fe0cb57df8c in opal_libevent2021_event_base_loop () from /geppetto/home/rvandevaart/ompi/ompi-trunk-reduction-new/64-mtt-nocuda/lib/libopen-pal.so.0
<br>
#3  0x0000000000405572 in orterun ()
<br>
#4  0x0000000000403904 in main ()
<br>
[rvandevaart_at_drossetti-ivy0 64-mtt-nocuda]$
<br>
<p>REMOTE ORTED:
<br>
[rvandevaart_at_drossetti-ivy1 ~]$ pstack 10241
<br>
#0  0x00007fbdcba7c258 in poll () from /lib64/libc.so.6
<br>
#1  0x00007fbdcca8f575 in poll_dispatch () from /geppetto/home/rvandevaart/ompi/ompi-trunk-reduction-new/64-mtt-nocuda/lib/libopen-pal.so.0
<br>
#2  0x00007fbdcca83f8c in opal_libevent2021_event_base_loop () from /geppetto/home/rvandevaart/ompi/ompi-trunk-reduction-new/64-mtt-nocuda/lib/libopen-pal.so.0
<br>
#3  0x00007fbdccd572cc in orte_daemon () from /geppetto/home/rvandevaart/ompi/ompi-trunk-reduction-new/64-mtt-nocuda/lib/libopen-rte.so.0
<br>
#4  0x000000000040094a in main ()
<br>
[rvandevaart_at_drossetti-ivy1 ~]$
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14908/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14909.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14907.php">Joshua Ladd: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14941.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14941.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
