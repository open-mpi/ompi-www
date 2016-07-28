<?
$subject_val = "Re: [OMPI users] issue with openmpi + CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 08:46:29 2015" -->
<!-- isoreceived="20150326124629" -->
<!-- sent="Thu, 26 Mar 2015 12:46:09 +0000" -->
<!-- isosent="20150326124609" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] issue with openmpi + CUDA" -->
<!-- id="35f2e31e68ab49d68f69db544bcd8396_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BLU436-SMTP913C629187BEBF91C7C382B2080_at_phx.gbl" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 08:46:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26544.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26542.php">Brice Goglin: "[OMPI users] EuroMPI 2015 Call for Papers"</a>
<li><strong>In reply to:</strong> <a href="26537.php">Zhisong Fu: "[OMPI users] issue with openmpi + CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26548.php">Zhisong Fu: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<li><strong>Reply:</strong> <a href="26548.php">Zhisong Fu: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jason:
<br>
The issue is that Open MPI is (presumably) a 64 bit application and it is trying to load up a 64-bit libcuda.so.1 but not finding one.  Making the link as you did will not fix the problem (as you saw).  In all my installations, I also have a 64-bit driver installed in /usr/lib64/libcuda.so.1 and everything works fine.
<br>
<p>Let me investigate some more and get back to you.
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Zhisong Fu
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, March 25, 2015 10:31 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] issue with openmpi + CUDA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I just started to use openmpi and am trying to run a MPI/GPU code. My code
</span><br>
<span class="quotelev1">&gt;compiles but when I run, I get this error:
</span><br>
<span class="quotelev1">&gt;The library attempted to open the following supporting CUDA libraries, but
</span><br>
<span class="quotelev1">&gt;each of them failed.  CUDA-aware support is disabled.
</span><br>
<span class="quotelev1">&gt;/usr/lib/libcuda.so.1: wrong ELF class: ELFCLASS32
</span><br>
<span class="quotelev1">&gt;/usr/lib/libcuda.so.1: wrong ELF class: ELFCLASS32 If you are not interested in
</span><br>
<span class="quotelev1">&gt;CUDA-aware support, then run with --mca mpi_cuda_support 0 to suppress
</span><br>
<span class="quotelev1">&gt;this message.  If you are interested in CUDA-aware support, then try setting
</span><br>
<span class="quotelev1">&gt;LD_LIBRARY_PATH to the location of libcuda.so.1 to get passed this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I could not find a libcuda.so.1 in my system but I do find libcuda.so in
</span><br>
<span class="quotelev1">&gt;/usr/local/cuda/lib64/stubs. Why is openmpi looking for libcuda.so.1 instead
</span><br>
<span class="quotelev1">&gt;of libcuda.so?
</span><br>
<span class="quotelev1">&gt;I created a symbolic link to libcuda.so, now I get CUDA error 35: CUDA driver
</span><br>
<span class="quotelev1">&gt;version is insufficient for CUDA runtime version.
</span><br>
<span class="quotelev1">&gt;I am not sure if this is related to libcuda.so or the driver since I could run this
</span><br>
<span class="quotelev1">&gt;code using mvapich.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any input on the issue is really appreciated.
</span><br>
<span class="quotelev1">&gt;My openmpi version is 1.8.4, my cuda version is 6.5, driver version is 340.65.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks.
</span><br>
<span class="quotelev1">&gt;Jason
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/03/26537.php
</span><br>
-----------------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26544.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26542.php">Brice Goglin: "[OMPI users] EuroMPI 2015 Call for Papers"</a>
<li><strong>In reply to:</strong> <a href="26537.php">Zhisong Fu: "[OMPI users] issue with openmpi + CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26548.php">Zhisong Fu: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<li><strong>Reply:</strong> <a href="26548.php">Zhisong Fu: "Re: [OMPI users] issue with openmpi + CUDA"</a>
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
