<?
$subject_val = "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 11:14:20 2015" -->
<!-- isoreceived="20150429151420" -->
<!-- sent="Wed, 29 Apr 2015 15:14:15 +0000" -->
<!-- isosent="20150429151415" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1" -->
<!-- id="10e8241d1b4c4bb082fc58e3cbe7050a_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150429145418.GU22930_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-29 11:14:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26811.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26809.php">Lev Givon: "[OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>In reply to:</strong> <a href="26809.php">Lev Givon: "[OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26813.php">Lev Givon: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>Reply:</strong> <a href="26813.php">Lev Givon: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lev:
<br>
Any chance you can try Open MPI 1.8.5rc3 and see if you see the same behavior?  That code has changed a bit from the 1.8.4 series and I am curious if you will still see the same issue.  
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.8/downloads/openmpi-1.8.5rc3.tar.gz">http://www.open-mpi.org/software/ompi/v1.8/downloads/openmpi-1.8.5rc3.tar.gz</a>
<br>
<p>Thanks,
<br>
Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, April 29, 2015 10:54 AM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute
</span><br>
<span class="quotelev1">&gt;path to libcuda.so.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm trying to build/package OpenMPI 1.8.4 with CUDA support enabled on
</span><br>
<span class="quotelev1">&gt;Linux
</span><br>
<span class="quotelev1">&gt;x86_64 so that the compiled software can be downloaded/installed as one of
</span><br>
<span class="quotelev1">&gt;the dependencies of a project I'm working on with no further user
</span><br>
<span class="quotelev1">&gt;configuration.  I noticed that MPI programs built with the above will try to
</span><br>
<span class="quotelev1">&gt;access
</span><br>
<span class="quotelev1">&gt;/usr/lib/i386-linux-gnu/libcuda.so.1 (and obviously complain about it being the
</span><br>
<span class="quotelev1">&gt;wrong ELF class) if /usr/lib/i386-linux-gnu precedes /usr/lib/x86_64-linux-gnu
</span><br>
<span class="quotelev1">&gt;in one's ld.so cache. While one can get around this by modifying one's ld.so
</span><br>
<span class="quotelev1">&gt;configuration (or tweaking LD_LIBRARY_PATH), is there some way to compile
</span><br>
<span class="quotelev1">&gt;OpenMPI such that programs built with it (on x86_64) look for the full soname
</span><br>
<span class="quotelev1">&gt;of
</span><br>
<span class="quotelev1">&gt;libcuda.so.1 - i.e., /usr/lib/x86_64-linux-gnu/libcuda.so.1 - rather than fall back
</span><br>
<span class="quotelev1">&gt;on ld.so? I tried setting the rpath of MPI programs built with the above (by
</span><br>
<span class="quotelev1">&gt;modifying the OpenMPI compiler wrappers to include -Wl,-rpath -
</span><br>
<span class="quotelev1">&gt;Wl,/usr/lib/x86_64-linux-gnu), but that doesn't seem to help.
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Lev Givon
</span><br>
<span class="quotelev1">&gt;Bionet Group | Neurokernel Project
</span><br>
<span class="quotelev1">&gt;<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
</span><br>
<span class="quotelev1">&gt;<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
</span><br>
<span class="quotelev1">&gt;<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
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
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/04/26809.php
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
<li><strong>Next message:</strong> <a href="26811.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26809.php">Lev Givon: "[OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>In reply to:</strong> <a href="26809.php">Lev Givon: "[OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26813.php">Lev Givon: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>Reply:</strong> <a href="26813.php">Lev Givon: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
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
