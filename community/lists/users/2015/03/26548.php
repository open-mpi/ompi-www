<?
$subject_val = "Re: [OMPI users] issue with openmpi + CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 21:07:36 2015" -->
<!-- isoreceived="20150327010736" -->
<!-- sent="Fri, 27 Mar 2015 09:07:30 +0800" -->
<!-- isosent="20150327010730" -->
<!-- name="Zhisong Fu" -->
<!-- email="fuzhisong_at_[hidden]" -->
<!-- subject="Re: [OMPI users] issue with openmpi + CUDA" -->
<!-- id="BLU437-SMTP13BCDE4897868CD6B4FCAFB2090_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="35f2e31e68ab49d68f69db544bcd8396_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] issue with openmpi + CUDA<br>
<strong>From:</strong> Zhisong Fu (<em>fuzhisong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 21:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26549.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26547.php">Hammond, Simon David (-EXP): "[OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>In reply to:</strong> <a href="26543.php">Rolf vandeVaart: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Rolf,
<br>
<p>Thanks a lot for the reply. You are right that the libcuda.so I found in the /user/local/cuda/lib64/stubs is not correct. I am still not sure why there is a libcuda.so here though.
<br>
I have linked the correct version of libcuda, and now the error is gone.
<br>
My linux is Red Hat Enterprise Linux Server release 6.2 (Santiago)
<br>
<p>Jason
<br>
I
<br>
<span class="quotelev1">&gt; On Mar 26, 2015, at 8:46 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jason:
</span><br>
<span class="quotelev1">&gt; The issue is that Open MPI is (presumably) a 64 bit application and it is trying to load up a 64-bit libcuda.so.1 but not finding one.  Making the link as you did will not fix the problem (as you saw).  In all my installations, I also have a 64-bit driver installed in /usr/lib64/libcuda.so.1 and everything works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me investigate some more and get back to you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Zhisong Fu
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, March 25, 2015 10:31 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] issue with openmpi + CUDA
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just started to use openmpi and am trying to run a MPI/GPU code. My code
</span><br>
<span class="quotelev2">&gt;&gt; compiles but when I run, I get this error:
</span><br>
<span class="quotelev2">&gt;&gt; The library attempted to open the following supporting CUDA libraries, but
</span><br>
<span class="quotelev2">&gt;&gt; each of them failed.  CUDA-aware support is disabled.
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/libcuda.so.1: wrong ELF class: ELFCLASS32
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/libcuda.so.1: wrong ELF class: ELFCLASS32 If you are not interested in
</span><br>
<span class="quotelev2">&gt;&gt; CUDA-aware support, then run with --mca mpi_cuda_support 0 to suppress
</span><br>
<span class="quotelev2">&gt;&gt; this message.  If you are interested in CUDA-aware support, then try setting
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH to the location of libcuda.so.1 to get passed this issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I could not find a libcuda.so.1 in my system but I do find libcuda.so in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/lib64/stubs. Why is openmpi looking for libcuda.so.1 instead
</span><br>
<span class="quotelev2">&gt;&gt; of libcuda.so?
</span><br>
<span class="quotelev2">&gt;&gt; I created a symbolic link to libcuda.so, now I get CUDA error 35: CUDA driver
</span><br>
<span class="quotelev2">&gt;&gt; version is insufficient for CUDA runtime version.
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure if this is related to libcuda.so or the driver since I could run this
</span><br>
<span class="quotelev2">&gt;&gt; code using mvapich.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any input on the issue is really appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; My openmpi version is 1.8.4, my cuda version is 6.5, driver version is 340.65.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Jason
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/users/2015/03/26537.php
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26543.php">http://www.open-mpi.org/community/lists/users/2015/03/26543.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26549.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26547.php">Hammond, Simon David (-EXP): "[OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>In reply to:</strong> <a href="26543.php">Rolf vandeVaart: "Re: [OMPI users] issue with openmpi + CUDA"</a>
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
