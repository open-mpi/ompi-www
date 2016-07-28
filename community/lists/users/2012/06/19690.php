<?
$subject_val = "Re: [OMPI users] MPI_Allreduce hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 14:30:16 2012" -->
<!-- isoreceived="20120627183016" -->
<!-- sent="Wed, 27 Jun 2012 14:30:11 -0400" -->
<!-- isosent="20120627183011" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce hangs" -->
<!-- id="2B49AEE7-4CEE-4D1F-97DD-6253FD9CA5E8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120627182545.GC7598_at_stikine.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce hangs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 14:30:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19691.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19689.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19689.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19696.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="19696.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 27, 2012, at 2:25 PM, Martin Siegert wrote:
<br>
<p><span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6.1ticket3131r26612M.tar.bz2">http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6.1ticket3131r26612M.tar.bz2</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks! I tried this and, indeed, the program (I tested quantum espresso,
</span><br>
<span class="quotelev1">&gt; pw.x, so far) no longer hangs.
</span><br>
<p>Good!  We're doing a bit more definitive testing here (took a little while to figure out how to do that, but we're in process of doing that now...) before we let this go out into the wild.
<br>
<p><span class="quotelev1">&gt; Then I went one step further and benchmarked the following three cases:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) pw.x compiled with openmpi-1.3.3
</span><br>
<span class="quotelev1">&gt; 2) pw.x compiled with openmpi-1.4.3 and
</span><br>
<span class="quotelev1">&gt;   btl_openib_flags = 305
</span><br>
<span class="quotelev1">&gt;   btl_openib_eager_limit = 65536
</span><br>
<span class="quotelev1">&gt;   in etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; 3) pw.x compiled with openmpi-1.6.1ticket3131r26612M
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are the results time (in seconds) per iteration - smaller is better:
</span><br>
<span class="quotelev1">&gt; 1) 33.11
</span><br>
<span class="quotelev1">&gt; 2) 28.23
</span><br>
<span class="quotelev1">&gt; 3) 34.81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's rather disappointing, isn't it?
</span><br>
<p><p>Yes, it is.  But #2 is not really comparable with #1 and #3.  It's quite possible that with newer IB hardware, the eager limit should be bumped up by default.
<br>
<p>I leave this to Mellanox to figure out...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19691.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19689.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19689.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19696.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="19696.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
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
