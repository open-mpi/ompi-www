<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 21 20:08:27 2006" -->
<!-- isoreceived="20061122010827" -->
<!-- sent="Tue, 21 Nov 2006 18:08:00 -0700" -->
<!-- isosent="20061122010800" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build OpenMPI for SHM only" -->
<!-- id="7B6F8479-3DF1-4553-9DDA-06043DDFD9CF_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45639E90.6090107_at_llnl.gov" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-21 20:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2207.php">Tim Prins: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Previous message:</strong> <a href="2205.php">Adam Moody: "[OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>In reply to:</strong> <a href="2205.php">Adam Moody: "[OMPI users] Build OpenMPI for SHM only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2207.php">Tim Prins: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 21, 2006, at 5:49 PM, Adam Moody wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; We have some clusters which consist of a large pool of 8-way nodes
</span><br>
<span class="quotelev1">&gt; connected via ethernet.  On these particular machines, we'd like our
</span><br>
<span class="quotelev1">&gt; users to be able to run 8-way MPI jobs on node, but we *don't* want  
</span><br>
<span class="quotelev1">&gt; them
</span><br>
<span class="quotelev1">&gt; to run MPI jobs across nodes via the ethernet.  Thus, I'd like to
</span><br>
<span class="quotelev1">&gt; configure and build OpenMPI to provide shared memory support (or TCP
</span><br>
<span class="quotelev1">&gt; loopback) but disable general TCP support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I realize that you can run without tcp via something like &quot;mpirun -- 
</span><br>
<span class="quotelev1">&gt; mca
</span><br>
<span class="quotelev1">&gt; btl ^tcp&quot;, but this is up to the user's discretion.  I need a way to
</span><br>
<span class="quotelev1">&gt; disable it systematically.  Is there a way to configure it out at  
</span><br>
<span class="quotelev1">&gt; build
</span><br>
<span class="quotelev1">&gt; time or is there some runtime configuration file I can modify to  
</span><br>
<span class="quotelev1">&gt; turn it
</span><br>
<span class="quotelev1">&gt; off?  Also, when we configure &quot;--without-tcp&quot;, the configure script
</span><br>
<span class="quotelev1">&gt; doesn't complain, but TCP support is added anyway.
</span><br>
<p>Try adding --enable-mca-no-build=btl-tcp to the configure line.   
<br>
Autoconf is a bit odd -- it doesn't complain about --with or --enable  
<br>
arguments that it doesn't know about.  The reason for this is to make  
<br>
it easier to support packages that run sub-configure scripts, but it  
<br>
does make argument checking significantly more difficult...
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2207.php">Tim Prins: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Previous message:</strong> <a href="2205.php">Adam Moody: "[OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>In reply to:</strong> <a href="2205.php">Adam Moody: "[OMPI users] Build OpenMPI for SHM only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2207.php">Tim Prins: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
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
