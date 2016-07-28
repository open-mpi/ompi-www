<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 16:19:12 2012" -->
<!-- isoreceived="20120209211912" -->
<!-- sent="Thu, 9 Feb 2012 22:19:00 +0100" -->
<!-- isosent="20120209211900" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="0BA4B1E5-3D6C-4C21-834B-FA8E9C56A07A_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB5858BB.12B5D%tombry_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 16:19:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18428.php">Jeff Squyres: "Re: [OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<li><strong>Previous message:</strong> <a href="18426.php">Andrew Senin: "[OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<li><strong>In reply to:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18432.php">Jeff Squyres: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18432.php">Jeff Squyres: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 08.02.2012 um 22:52 schrieb Tom Bryan:
<br>
<p><span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this should work across multiple machines. And it's using `qrsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -inherit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...` so it's failing somewhere in Open MPI - is it working with 1.4.4?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure.  We no longer have our 1.4 test environment, so I'm in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process of building that now.  I'll let you know once I have a chance to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that experiment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You said that both of these cases worked for you in 1.4.  Were you running a
</span><br>
<span class="quotelev1">&gt; modified version that did not use THREAD_MULTIPLE?  I ask because I'm
</span><br>
<span class="quotelev1">&gt; getting worse errors in 1.4.  I'm using the same code that was working (in
</span><br>
<span class="quotelev1">&gt; some cases) with 1.5.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I built 1.4.4 with (among other option)
</span><br>
<span class="quotelev1">&gt; --with-threads=posix --enable-mpi-threads
</span><br>
<p>./configure --prefix=$HOME/local/openmpi-1.4.4-default-thread --with-sge --with-threads=posix --enable-mpi-threads
<br>
<p>No problems even with THREAD_MULTIPLE.
<br>
<p>Only as stated in singleton mode one or more additional line (looks like one per slave host, but not always - race condition?):
<br>
<p>[pc15370:31390] [[24201,0],1] routed:binomial: Connection to lifeline [[24201,0],0] lost
<br>
<p><span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of
</span><br>
<span class="quotelev1">&gt; &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init_thread() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<p>Interesting error message, as it's not true to be disallowed.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18428.php">Jeff Squyres: "Re: [OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<li><strong>Previous message:</strong> <a href="18426.php">Andrew Senin: "[OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<li><strong>In reply to:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18432.php">Jeff Squyres: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18432.php">Jeff Squyres: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
