<?
$subject_val = "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 15:20:49 2015" -->
<!-- isoreceived="20150429192049" -->
<!-- sent="Wed, 29 Apr 2015 15:20:41 -0400" -->
<!-- isosent="20150429192041" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1" -->
<!-- id="20150429192041.GB993_at_avicenna.ee.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="10e8241d1b4c4bb082fc58e3cbe7050a_at_HQMAIL102.nvidia.com" -->
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
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-29 15:20:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26814.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26812.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26810.php">Rolf vandeVaart: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Rolf vandeVaart on Wed, Apr 29, 2015 at 11:14:15AM EDT:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev2">&gt; &gt;Sent: Wednesday, April 29, 2015 10:54 AM
</span><br>
<span class="quotelev2">&gt; &gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;Subject: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute
</span><br>
<span class="quotelev2">&gt; &gt;path to libcuda.so.1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'm trying to build/package OpenMPI 1.8.4 with CUDA support enabled on Linux
</span><br>
<span class="quotelev2">&gt; &gt;x86_64 so that the compiled software can be downloaded/installed as one of
</span><br>
<span class="quotelev2">&gt; &gt;the dependencies of a project I'm working on with no further user
</span><br>
<span class="quotelev2">&gt; &gt;configuration.  I noticed that MPI programs built with the above will try to
</span><br>
<span class="quotelev2">&gt; &gt;access /usr/lib/i386-linux-gnu/libcuda.so.1 (and obviously complain about it
</span><br>
<span class="quotelev2">&gt; &gt;being the wrong ELF class) if /usr/lib/i386-linux-gnu precedes
</span><br>
<span class="quotelev2">&gt; &gt;/usr/lib/x86_64-linux-gnu in one's ld.so cache. While one can get around this
</span><br>
<span class="quotelev2">&gt; &gt;by modifying one's ld.so configuration (or tweaking LD_LIBRARY_PATH), is
</span><br>
<span class="quotelev2">&gt; &gt;there some way to compile OpenMPI such that programs built with it (on
</span><br>
<span class="quotelev2">&gt; &gt;x86_64) look for the full soname of libcuda.so.1 - i.e.,
</span><br>
<span class="quotelev2">&gt; &gt;/usr/lib/x86_64-linux-gnu/libcuda.so.1 - rather than fall back on ld.so? I
</span><br>
<span class="quotelev2">&gt; &gt;tried setting the rpath of MPI programs built with the above (by modifying
</span><br>
<span class="quotelev2">&gt; &gt;the OpenMPI compiler wrappers to include -Wl,-rpath -
</span><br>
<span class="quotelev2">&gt; &gt;Wl,/usr/lib/x86_64-linux-gnu), but that doesn't seem to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Lev:
</span><br>
<span class="quotelev1">&gt; Any chance you can try Open MPI 1.8.5rc3 and see if you see the same behavior?
</span><br>
<span class="quotelev1">&gt; That code has changed a bit from the 1.8.4 series and I am curious if you will
</span><br>
<span class="quotelev1">&gt; still see the same issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/downloads/openmpi-1.8.5rc3.tar.gz">http://www.open-mpi.org/software/ompi/v1.8/downloads/openmpi-1.8.5rc3.tar.gz</a>
</span><br>
<p>The issue does not occur with 1.8.5rc3 using the same configure options as used
<br>
with 1.8.4. Since 1.8.5 is almost ready for stable release, I'll switch over now.
<br>
<p>Thanks!
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26814.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26812.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26810.php">Rolf vandeVaart: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
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
