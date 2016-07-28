<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 23 12:22:22 2005" -->
<!-- isoreceived="20050823172222" -->
<!-- sent="Tue, 23 Aug 2005 19:22:09 +0200" -->
<!-- isosent="20050823172209" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] how do you select which network/trasport to use at run-time?" -->
<!-- id="200508231922.15932.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="e4b22761af76d5d1e49816ae34020e51_at_open-mpi.org" -->
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
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-23 12:22:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0117.php">Galen M. Shipman: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Previous message:</strong> <a href="0115.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>In reply to:</strong> <a href="0115.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0117.php">Galen M. Shipman: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Reply:</strong> <a href="0117.php">Galen M. Shipman: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 23 August 2005 14.52, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Now I'd like to control over which channels/transports/networks the
</span><br>
<span class="quotelev2">&gt; &gt; data
</span><br>
<span class="quotelev2">&gt; &gt; flows... I configured and built ompi against mvapi (mellanox
</span><br>
<span class="quotelev2">&gt; &gt; ibgd-1.8.0) and
</span><br>
<span class="quotelev2">&gt; &gt; as far as I can tell it went well. Judging by the behaviour of the
</span><br>
<span class="quotelev2">&gt; &gt; tests I
</span><br>
<span class="quotelev2">&gt; &gt; have done it defaults to tcp (over ethernet in my case). How do I
</span><br>
<span class="quotelev2">&gt; &gt; select
</span><br>
<span class="quotelev2">&gt; &gt; mvapi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open MPI guys working on IB (from Los Alamos) are at the IB
</span><br>
<span class="quotelev1">&gt; workshop this week, and their responses may be a bit slow.  They're the
</span><br>
<span class="quotelev1">&gt; ones who can give the definitive answers, but I'll take a shot...
</span><br>
<p>That's ok, I was both interested in the general way to handle transport 
<br>
selection and specifically how to fix this one.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a little surprised that tcp was used -- OMPI should &quot;prefer&quot; the
</span><br>
<span class="quotelev1">&gt; low latency interconnects (such as mvapi) to tcp and automatically use
</span><br>
<span class="quotelev1">&gt; them.
</span><br>
<p>One main thing I'd like is a &quot;working&quot; --verbose (adding it to mpirun doesn't 
<br>
give me a single extra line of output) that would tell me something like:
<br>
..looking for transports, found: self, mvapi, tcp.
<br>
..testing trasnports: self ok, mvapi fail, tcp ok.
<br>
..assembeling final list of transports: self, tcp.
<br>
...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see from your ompi_info output that the 2 mvapi components were built
</span><br>
<span class="quotelev1">&gt; and installed properly, so that's good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 	mpirun --mca btl_base_include self,mvapi -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will tell OMPI that you want to use the &quot;self&quot; (i.e., loopback)
</span><br>
<span class="quotelev1">&gt; and &quot;mvapi&quot; BTLs, and no others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try this and see if you get better results.
</span><br>
<p>Nope, no errors, no extra output, but same ethernet-tcp-like performance (32 
<br>
us and 116 MiB/s).
<br>
<p>/Peter
<br>
<p><pre>
-- 
------------------------------------------------------------
  Peter Kjellstr&#246;m               |
  National Supercomputer Centre  |
  Sweden                         | <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0116/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0117.php">Galen M. Shipman: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Previous message:</strong> <a href="0115.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>In reply to:</strong> <a href="0115.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0117.php">Galen M. Shipman: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Reply:</strong> <a href="0117.php">Galen M. Shipman: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
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
