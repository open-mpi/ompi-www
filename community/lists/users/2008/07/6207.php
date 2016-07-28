<?
$subject_val = "Re: [OMPI users] Segmentation fault: Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 08:31:44 2008" -->
<!-- isoreceived="20080730123144" -->
<!-- sent="Wed, 30 Jul 2008 13:31:37 +0100" -->
<!-- isosent="20080730123137" -->
<!-- name="James Philbin" -->
<!-- email="james_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault: Address not mapped" -->
<!-- id="2b1c8c4f0807300531q38bb6adbl552cf80410362639_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2b1c8c4f0807291802h2b9de7eel98fec637cf7a19b3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault: Address not mapped<br>
<strong>From:</strong> James Philbin (<em>james_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 08:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6208.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6206.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6204.php">James Philbin: "[OMPI users] Segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6247.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6247.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>OK, to answer my own question, I recompiled OpenMPI appending
<br>
'--with-memory-manager=none' to configure and now things seem to run
<br>
fine. I'm not sure how this might affect performance, but at least
<br>
it's working now. Maybe this can be put in the FAQ?
<br>
<p>James
<br>
<p>On Wed, Jul 30, 2008 at 2:02 AM, James Philbin &lt;james_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running an mpi module in python (pypar), but I believe (after
</span><br>
<span class="quotelev1">&gt; googling) that this might be a problem with openmpi.
</span><br>
<span class="quotelev1">&gt; When I run: 'python -c &quot;import pypar&quot;', I get:
</span><br>
<span class="quotelev1">&gt; [titus:21965] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [titus:21965] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [titus:21965] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [titus:21965] Failing at address: 0x837a004
</span><br>
<span class="quotelev1">&gt; [titus:21965] [ 0] /lib/i686/libpthread.so.0 [0x40035f93]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [ 1] python [0x42029180]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [ 2] /users/james/lib/libopen-pal.so.0(free+0xbc) [0x40e112fc]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [ 3]
</span><br>
<span class="quotelev1">&gt; /users/james/lib/libopen-pal.so.0(mca_base_components_open+0x83)
</span><br>
<span class="quotelev1">&gt; [0x40dff9b3]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [ 4]
</span><br>
<span class="quotelev1">&gt; /users/james/lib/libmpi.so.0(mca_allocator_base_open+0x46)
</span><br>
<span class="quotelev1">&gt; [0x40cb03b6]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [ 5] /users/james/lib/libmpi.so.0(ompi_mpi_init+0x3dd)
</span><br>
<span class="quotelev1">&gt; [0x40c7b7dd]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [ 6] /users/james/lib/libmpi.so.0(MPI_Init+0xef) [0x40c9fb1f]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [ 7]
</span><br>
<span class="quotelev1">&gt; /users/james/lib/python2.5/site-packages/pypar/mpiext.so [0x40576613]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [ 8] python(PyCFunction_Call+0x5a) [0x810c9ea]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [ 9] python [0x80bb2fb]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [10] python(PyEval_EvalFrameEx+0x22d2) [0x80b97a2]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [11] python(PyEval_EvalCodeEx+0x376) [0x80ba0b6]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [12] python(PyEval_EvalCode+0x57) [0x80bcfe7]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [13] python(PyImport_ExecCodeModuleEx+0x13a) [0x80d0b9a]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [14] python [0x80d3eeb]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [15] python [0x80d180e]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [16] python [0x80d27b6]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [17] python [0x80d2309]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [18] python [0x80d45bf]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [19] python(PyImport_ImportModuleLevel+0x90) [0x80d3a40]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [20] python [0x80b3dda]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [21] python(PyCFunction_Call+0xce) [0x810ca5e]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [22] python(PyObject_Call+0x29) [0x805eca9]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [23] python(PyEval_CallObjectWithKeywords+0x75) [0x80bae95]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [24] python(PyEval_EvalFrameEx+0x2041) [0x80b9511]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [25] python(PyEval_EvalCodeEx+0x376) [0x80ba0b6]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [26] python(PyEval_EvalCode+0x57) [0x80bcfe7]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [27] python(PyImport_ExecCodeModuleEx+0x13a) [0x80d0b9a]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [28] python [0x80d3eeb]
</span><br>
<span class="quotelev1">&gt; [titus:21965] [29] python [0x80d180e]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've built openmpi from the 1.2.6 sources with the following configure
</span><br>
<span class="quotelev1">&gt; flag: './configure --disable-dlopen --prefix=/users/james'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pypar seems to work fine on my ubuntu system also with openmpi
</span><br>
<span class="quotelev1">&gt; (installed from repositories). I'm tearing my hair out trying to solve
</span><br>
<span class="quotelev1">&gt; this, so any advice would be very welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; James
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6208.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6206.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6204.php">James Philbin: "[OMPI users] Segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6247.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6247.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
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
