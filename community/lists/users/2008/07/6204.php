<?
$subject_val = "[OMPI users] Segmentation fault: Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 21:02:05 2008" -->
<!-- isoreceived="20080730010205" -->
<!-- sent="Wed, 30 Jul 2008 02:02:01 +0100" -->
<!-- isosent="20080730010201" -->
<!-- name="James Philbin" -->
<!-- email="james_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault: Address not mapped" -->
<!-- id="2b1c8c4f0807291802h2b9de7eel98fec637cf7a19b3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault: Address not mapped<br>
<strong>From:</strong> James Philbin (<em>james_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 21:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6205.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6203.php">Matt Hughes: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6207.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Reply:</strong> <a href="6207.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6249.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm running an mpi module in python (pypar), but I believe (after
<br>
googling) that this might be a problem with openmpi.
<br>
When I run: 'python -c &quot;import pypar&quot;', I get:
<br>
[titus:21965] *** Process received signal ***
<br>
[titus:21965] Signal: Segmentation fault (11)
<br>
[titus:21965] Signal code: Address not mapped (1)
<br>
[titus:21965] Failing at address: 0x837a004
<br>
[titus:21965] [ 0] /lib/i686/libpthread.so.0 [0x40035f93]
<br>
[titus:21965] [ 1] python [0x42029180]
<br>
[titus:21965] [ 2] /users/james/lib/libopen-pal.so.0(free+0xbc) [0x40e112fc]
<br>
[titus:21965] [ 3]
<br>
/users/james/lib/libopen-pal.so.0(mca_base_components_open+0x83)
<br>
[0x40dff9b3]
<br>
[titus:21965] [ 4]
<br>
/users/james/lib/libmpi.so.0(mca_allocator_base_open+0x46)
<br>
[0x40cb03b6]
<br>
[titus:21965] [ 5] /users/james/lib/libmpi.so.0(ompi_mpi_init+0x3dd)
<br>
[0x40c7b7dd]
<br>
[titus:21965] [ 6] /users/james/lib/libmpi.so.0(MPI_Init+0xef) [0x40c9fb1f]
<br>
[titus:21965] [ 7]
<br>
/users/james/lib/python2.5/site-packages/pypar/mpiext.so [0x40576613]
<br>
[titus:21965] [ 8] python(PyCFunction_Call+0x5a) [0x810c9ea]
<br>
[titus:21965] [ 9] python [0x80bb2fb]
<br>
[titus:21965] [10] python(PyEval_EvalFrameEx+0x22d2) [0x80b97a2]
<br>
[titus:21965] [11] python(PyEval_EvalCodeEx+0x376) [0x80ba0b6]
<br>
[titus:21965] [12] python(PyEval_EvalCode+0x57) [0x80bcfe7]
<br>
[titus:21965] [13] python(PyImport_ExecCodeModuleEx+0x13a) [0x80d0b9a]
<br>
[titus:21965] [14] python [0x80d3eeb]
<br>
[titus:21965] [15] python [0x80d180e]
<br>
[titus:21965] [16] python [0x80d27b6]
<br>
[titus:21965] [17] python [0x80d2309]
<br>
[titus:21965] [18] python [0x80d45bf]
<br>
[titus:21965] [19] python(PyImport_ImportModuleLevel+0x90) [0x80d3a40]
<br>
[titus:21965] [20] python [0x80b3dda]
<br>
[titus:21965] [21] python(PyCFunction_Call+0xce) [0x810ca5e]
<br>
[titus:21965] [22] python(PyObject_Call+0x29) [0x805eca9]
<br>
[titus:21965] [23] python(PyEval_CallObjectWithKeywords+0x75) [0x80bae95]
<br>
[titus:21965] [24] python(PyEval_EvalFrameEx+0x2041) [0x80b9511]
<br>
[titus:21965] [25] python(PyEval_EvalCodeEx+0x376) [0x80ba0b6]
<br>
[titus:21965] [26] python(PyEval_EvalCode+0x57) [0x80bcfe7]
<br>
[titus:21965] [27] python(PyImport_ExecCodeModuleEx+0x13a) [0x80d0b9a]
<br>
[titus:21965] [28] python [0x80d3eeb]
<br>
[titus:21965] [29] python [0x80d180e]
<br>
<p>I've built openmpi from the 1.2.6 sources with the following configure
<br>
flag: './configure --disable-dlopen --prefix=/users/james'.
<br>
<p>pypar seems to work fine on my ubuntu system also with openmpi
<br>
(installed from repositories). I'm tearing my hair out trying to solve
<br>
this, so any advice would be very welcome.
<br>
<p>Thanks,
<br>
James
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6205.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6203.php">Matt Hughes: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6207.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Reply:</strong> <a href="6207.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6249.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
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
