<?
$subject_val = "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 08:29:17 2013" -->
<!-- isoreceived="20131202132917" -->
<!-- sent="Mon, 02 Dec 2013 14:29:07 +0100" -->
<!-- isosent="20131202132907" -->
<!-- name="Peter Zaspel" -->
<!-- email="zaspel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI" -->
<!-- id="529C8B23.2070106_at_ins.uni-bonn.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36008562003_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Peter Zaspel (<em>zaspel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-02 08:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23113.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="23111.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="23111.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23113.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="23113.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi Rolf,
<br>
<p>OK, I didn't know that. Sorry.
<br>
<p>Yes, it would be a pretty important feature in cases when you are doing
<br>
reduction operations on many, many entries in parallel. Therefore, each
<br>
reduction is not very complex or time-consuming but potentially hundreds
<br>
of thousands reductions are done at the same time. This is definitely a
<br>
point where a CUDA-aware implementation can give some performance
<br>
improvements.
<br>
<p>I'm curious: Rather complex operations like allgatherv are CUDA-aware,
<br>
but a reduction is not. Is there a reasoning for this? Is there some
<br>
documentation, which MPI calls are CUDA-aware and which not?
<br>
<p>Best regards
<br>
<p>Peter
<br>
<p><p><p>On 12/02/2013 02:18 PM, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; Thanks for the report.  CUDA-aware Open MPI does not currently support doing reduction operations on GPU memory.
</span><br>
<span class="quotelev1">&gt; Is this a feature you would be interested in?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Peter Zaspel
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, November 29, 2013 11:24 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi users list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to report a bug in the CUDA-aware OpenMPI 1.7.3
</span><br>
<span class="quotelev2">&gt;&gt; implementation. I'm using CUDA 5.0 and Ubuntu 12.04.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached, you will find an example code file, to reproduce the bug.
</span><br>
<span class="quotelev2">&gt;&gt; The point is that MPI_Reduce with normal CPU memory fully works but the
</span><br>
<span class="quotelev2">&gt;&gt; use of GPU memory leads to a segfault. (GPU memory is used when defining
</span><br>
<span class="quotelev2">&gt;&gt; USE_GPU).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The segfault looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [peak64g-36:25527] *** Process received signal *** [peak64g-36:25527]
</span><br>
<span class="quotelev2">&gt;&gt; Signal: Segmentation fault (11) [peak64g-36:25527] Signal code: Invalid
</span><br>
<span class="quotelev2">&gt;&gt; permissions (2) [peak64g-36:25527] Failing at address: 0x600100200 [peak64g-
</span><br>
<span class="quotelev2">&gt;&gt; 36:25527] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7ff2abdb24a0]
</span><br>
<span class="quotelev2">&gt;&gt; [peak64g-36:25527] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /data/zaspel/openmpi-1.7.3_build/lib/libmpi.so.1(+0x7d410)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7ff2ac4b9410] [peak64g-36:25527] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /data/zaspel/openmpi-
</span><br>
<span class="quotelev2">&gt;&gt; 1.7.3_build/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_reduce_intra_
</span><br>
<span class="quotelev2">&gt;&gt; basic_linear+0x371)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7ff2a5987531]
</span><br>
<span class="quotelev2">&gt;&gt; [peak64g-36:25527] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /data/zaspel/openmpi-1.7.3_build/lib/libmpi.so.1(MPI_Reduce+0x135)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7ff2ac499d55]
</span><br>
<span class="quotelev2">&gt;&gt; [peak64g-36:25527] [ 4] /home/zaspel/testMPI/test_reduction() [0x400ca0]
</span><br>
<span class="quotelev2">&gt;&gt; [peak64g-36:25527] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7ff2abd9d76d]
</span><br>
<span class="quotelev2">&gt;&gt; [peak64g-36:25527] [ 6] /home/zaspel/testMPI/test_reduction() [0x400af9]
</span><br>
<span class="quotelev2">&gt;&gt; [peak64g-36:25527] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 25527 on node peak64g-36 exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Peter
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
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
<p><p>- -- 
<br>
Dipl.-Inform. Peter Zaspel
<br>
Institut fuer Numerische Simulation, Universitaet Bonn
<br>
Wegelerstr.6, 53115 Bonn, Germany
<br>
tel: +49 228 73-2748   mailto:zaspel_at_[hidden]
<br>
fax: +49 228 73-7527   <a href="http://wissrech.ins.uni-bonn.de/people/zaspel.html">http://wissrech.ins.uni-bonn.de/people/zaspel.html</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iQIcBAEBAgAGBQJSnIsjAAoJEKPU5iaGEeWb8P4P/iJBmdEev/jK0wpTkM0Fi1Dt
<br>
BXaJjDKUOaNVxrvQXJPtY1g6AZUWphndi26Y5SP4T7JyvF2isHtjwJq6KiCBJ4KW
<br>
KYEga3y8m8o1hocqoW465EkVaibo5zHqXcX7yzVGqkWb/1LwZJh9zjrGBhjPoFzT
<br>
JwuEaw7rq1DSn9QeQQPB+CnQsCrKuef5MqDQCfNcBFSoifYks32cdj2l5+Ye/Ltx
<br>
vaxPi7VeQuWGcPlvAIE4rdgQVjV3IS+1WcxiMSpUoj2D1IgLDveXWdUlRFjxwEu8
<br>
gmRxKMAH4A4WfvpppQYGV9h49kim8EZHfVtHf7c+jRRPDJEDLPdmOltkAlfENL5e
<br>
GroMx5PFUqWRpBYoFPh51XqBak9uqai3tD/R2YdBITufRC/UvrfIq0nYyKsnOLUc
<br>
0VXejoRJRMuRrJbjHJMtT+EZsln0jaoRuNERbikCwlFvkNevSpcHnC+SNIN73KUY
<br>
99g+hwtxdk4oIH4W+YmRlzbKPRBxiTTw9VjufIwo0EcFoI9JfiVbFpXGDTZfUu6x
<br>
Z088fu3hCA/q5UoXS1NsDHWUywzkrWsnANSQHXIKXK8jMnounX1kGZ7NH1eA3rrF
<br>
IX+EqBybTyrbUQb+XDy3cltBeXFiMxTfN0f4KN8yATol7qeSIpxeeYf5NMT/eBn/
<br>
uEWxs9hiQW1IYJ4q3F1S
<br>
=Wr/G
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23113.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="23111.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="23111.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23113.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="23113.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
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
