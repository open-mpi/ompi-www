<?
$subject_val = "[OMPI users] Open-mx issue with ompi 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 17:05:10 2012" -->
<!-- isoreceived="20120906210510" -->
<!-- sent="Thu, 6 Sep 2012 17:04:52 -0400" -->
<!-- isosent="20120906210452" -->
<!-- name="Douglas Eadline" -->
<!-- email="deadline_at_[hidden]" -->
<!-- subject="[OMPI users] Open-mx issue with ompi 1.6.1" -->
<!-- id="76a9c1cc60d4bdb7fac80f5c8cfb3f85.squirrel_at_mail.eadline.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADEJBEUp-L0E-0tipNvBrzka0SA4JQ+YKu7B49ML58938DG=Ww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Open-mx issue with ompi 1.6.1<br>
<strong>From:</strong> Douglas Eadline (<em>deadline_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 17:04:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20146.php">Reuti: "Re: [OMPI users] [gridengine users] h_vmem in jobs with mixture of openmpi and openmp"</a>
<li><strong>Previous message:</strong> <a href="20144.php">Yong Qin: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20144.php">Yong Qin: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20179.php">Douglas Eadline: "Re: [OMPI users] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20179.php">Douglas Eadline: "Re: [OMPI users] Open-mx issue with ompi 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I built open-mpi 1.6.1 using the open-mx libraries.
<br>
This worked previously and now I get the following
<br>
error. Here is my system:
<br>
<p>kernel:  2.6.32-279.5.1.el6.x86_64
<br>
open-mx: 1.5.2
<br>
<p>BTW, open-mx worked previously with open-mpi and the current
<br>
version works with mpich2
<br>
<p><p>$  mpiexec -np 8 -machinefile machines cpi
<br>
Process 0 on limulus
<br>
FatalError: Failed to lookup peer by addr, driver replied Bad file descriptor
<br>
cpi: ../omx_misc.c:89: omx__ioctl_errno_to_return_checked: Assertion `0'
<br>
failed.
<br>
[limulus:04448] *** Process received signal ***
<br>
[limulus:04448] Signal: Aborted (6)
<br>
[limulus:04448] Signal code:  (-6)
<br>
[limulus:04448] [ 0] /lib64/libpthread.so.0() [0x3324e0f500]
<br>
[limulus:04448] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x33246328a5]
<br>
[limulus:04448] [ 2] /lib64/libc.so.6(abort+0x175) [0x3324634085]
<br>
[limulus:04448] [ 3] /lib64/libc.so.6() [0x332462ba1e]
<br>
[limulus:04448] [ 4] /lib64/libc.so.6(__assert_perror_fail+0) [0x332462bae0]
<br>
[limulus:04448] [ 5]
<br>
/usr/open-mx/lib/libopen-mx.so.0(omx__ioctl_errno_to_return_checked+0x197)
<br>
[0x7fb587418b37]
<br>
[limulus:04448] [ 6]
<br>
/usr/open-mx/lib/libopen-mx.so.0(omx__peer_addr_to_index+0x55)
<br>
[0x7fb58741a5d5]
<br>
[limulus:04448] [ 7] /usr/open-mx/lib/libopen-mx.so.0(+0xdc7a)
<br>
[0x7fb587419c7a]
<br>
[limulus:04448] [ 8] /usr/open-mx/lib/libopen-mx.so.0(omx_connect+0x8c)
<br>
[0x7fb58741a27c]
<br>
[limulus:04448] [ 9] /usr/open-mx/lib/libopen-mx.so.0(mx_connect+0x15)
<br>
[0x7fb587425865]
<br>
[limulus:04448] [10]
<br>
/opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_btl_mx_proc_connect+0x5e)
<br>
[0x7fb5876fe40e]
<br>
[limulus:04448] [11]
<br>
/opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_btl_mx_send+0x2d4)
<br>
[0x7fb5876fbd94]
<br>
[limulus:04448] [12]
<br>
/opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_pml_ob1_send_request_start_prepare+0xcb)
<br>
[0x7fb58777d6fb]
<br>
[limulus:04448] [13]
<br>
/opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_pml_ob1_isend+0x4cb)
<br>
[0x7fb58777509b]
<br>
[limulus:04448] [14]
<br>
/opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_generic+0x37b)
<br>
[0x7fb58770b55b]
<br>
[limulus:04448] [15]
<br>
/opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_binomial+0xd8)
<br>
[0x7fb58770b8b8]
<br>
[limulus:04448] [16]
<br>
/opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(ompi_coll_tuned_bcast_intra_dec_fixed+0xcc)
<br>
[0x7fb587702d8c]
<br>
[limulus:04448] [17]
<br>
/opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(mca_coll_sync_bcast+0x78)
<br>
[0x7fb587712e88]
<br>
[limulus:04448] [18]
<br>
/opt/mpi/openmpi-gnu4/lib64/libmpi.so.1(MPI_Bcast+0x130) [0x7fb5876ce1b0]
<br>
[limulus:04448] [19] cpi(main+0x10b) [0x400cc4]
<br>
[limulus:04448] [20] /lib64/libc.so.6(__libc_start_main+0xfd) [0x332461ecdd]
<br>
[limulus:04448] [21] cpi() [0x400ac9]
<br>
[limulus:04448] *** End of error message ***
<br>
Process 2 on limulus
<br>
Process 4 on limulus
<br>
Process 6 on limulus
<br>
Process 1 on n0
<br>
Process 7 on n0
<br>
Process 3 on n0
<br>
Process 5 on n0
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 4448 on node limulus exited
<br>
on signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><pre>
-- 
Doug
-- 
Mailscanner: Clean
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20146.php">Reuti: "Re: [OMPI users] [gridengine users] h_vmem in jobs with mixture of openmpi and openmp"</a>
<li><strong>Previous message:</strong> <a href="20144.php">Yong Qin: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20144.php">Yong Qin: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20179.php">Douglas Eadline: "Re: [OMPI users] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20179.php">Douglas Eadline: "Re: [OMPI users] Open-mx issue with ompi 1.6.1"</a>
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
