<?
$subject_val = "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 08:48:43 2013" -->
<!-- isoreceived="20131202134843" -->
<!-- sent="Mon, 2 Dec 2013 05:48:40 -0800" -->
<!-- isosent="20131202134840" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3600856200A_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="529C8B23.2070106_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-02 08:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23114.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23112.php">Peter Zaspel: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="23112.php">Peter Zaspel: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Peter:
<br>
The reason behind not having the reduction support (I believe) was just the complexity of adding it to the code.  I will at least submit a ticket so we can look at it again.
<br>
<p>Here is a link to FAQ which lists the APIs which are CUDA-aware.  
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpi-cuda-support">http://www.open-mpi.org/faq/?category=running#mpi-cuda-support</a>
<br>
<p>Regards,
<br>
Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Peter Zaspel
</span><br>
<span class="quotelev1">&gt;Sent: Monday, December 02, 2013 8:29 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* PGP Signed by an unknown key
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;OK, I didn't know that. Sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes, it would be a pretty important feature in cases when you are doing
</span><br>
<span class="quotelev1">&gt;reduction operations on many, many entries in parallel. Therefore, each
</span><br>
<span class="quotelev1">&gt;reduction is not very complex or time-consuming but potentially hundreds of
</span><br>
<span class="quotelev1">&gt;thousands reductions are done at the same time. This is definitely a point
</span><br>
<span class="quotelev1">&gt;where a CUDA-aware implementation can give some performance
</span><br>
<span class="quotelev1">&gt;improvements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm curious: Rather complex operations like allgatherv are CUDA-aware, but a
</span><br>
<span class="quotelev1">&gt;reduction is not. Is there a reasoning for this? Is there some documentation,
</span><br>
<span class="quotelev1">&gt;which MPI calls are CUDA-aware and which not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 12/02/2013 02:18 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the report.  CUDA-aware Open MPI does not currently support
</span><br>
<span class="quotelev1">&gt;doing reduction operations on GPU memory.
</span><br>
<span class="quotelev2">&gt;&gt; Is this a feature you would be interested in?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Peter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Zaspel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, November 29, 2013 11:24 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi users list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to report a bug in the CUDA-aware OpenMPI 1.7.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation. I'm using CUDA 5.0 and Ubuntu 12.04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached, you will find an example code file, to reproduce the bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The point is that MPI_Reduce with normal CPU memory fully works but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the use of GPU memory leads to a segfault. (GPU memory is used when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defining USE_GPU).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The segfault looks like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [peak64g-36:25527] *** Process received signal *** [peak64g-36:25527]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Signal: Segmentation fault (11) [peak64g-36:25527] Signal code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Invalid permissions (2) [peak64g-36:25527] Failing at address:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x600100200 [peak64g- 36:25527] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x364a0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7ff2abdb24a0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [peak64g-36:25527] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /data/zaspel/openmpi-1.7.3_build/lib/libmpi.so.1(+0x7d410)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7ff2ac4b9410] [peak64g-36:25527] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /data/zaspel/openmpi-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;1.7.3_build/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_reduce_intr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basic_linear+0x371)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7ff2a5987531]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [peak64g-36:25527] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /data/zaspel/openmpi-1.7.3_build/lib/libmpi.so.1(MPI_Reduce+0x135)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7ff2ac499d55]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [peak64g-36:25527] [ 4] /home/zaspel/testMPI/test_reduction()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x400ca0] [peak64g-36:25527] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7ff2abd9d76d] [peak64g-36:25527] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/zaspel/testMPI/test_reduction() [0x400af9] [peak64g-36:25527]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- mpirun noticed that process rank 0 with PID 25527 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; peak64g-36 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Peter
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev2">&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev2">&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Dipl.-Inform. Peter Zaspel
</span><br>
<span class="quotelev1">&gt;Institut fuer Numerische Simulation, Universitaet Bonn Wegelerstr.6, 53115
</span><br>
<span class="quotelev1">&gt;Bonn, Germany
</span><br>
<span class="quotelev1">&gt;tel: +49 228 73-2748   mailto:zaspel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;fax: +49 228 73-7527   <a href="http://wissrech.ins.uni-bonn.de/people/zaspel.html">http://wissrech.ins.uni-bonn.de/people/zaspel.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* Unknown Key
</span><br>
<span class="quotelev1">&gt;* 0x8611E59B(L)
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23114.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23112.php">Peter Zaspel: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="23112.php">Peter Zaspel: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
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
