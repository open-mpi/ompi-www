<?
$subject_val = "Re: [OMPI devel] 1.7rc8 is posted";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  1 11:36:11 2013" -->
<!-- isoreceived="20130301163611" -->
<!-- sent="Fri, 01 Mar 2013 17:36:01 +0100" -->
<!-- isosent="20130301163601" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7rc8 is posted" -->
<!-- id="1801599.BFd41PMjyg_at_yaydoe" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F60FE7_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7rc8 is posted<br>
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-01 11:36:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12183.php">Jeff Squyres (jsquyres): "[OMPI devel] openshmem comments"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12181.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12171.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 27 February 2013 17:52:42 Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The goal is to release 1.7 (final) by the end of this week.  New rc posted
</span><br>
<p>Built on CentOS-6.3 + MLNXOFED-1.5.3-310 using intel-13.1.0: OK
<br>
Built with cma: OK
<br>
Built with mxm (1.5.0eb2be5): OK
<br>
Built with slurm: ok
<br>
<p>Launch correctness: OK
<br>
IMB on 32 and 128 ranks all combos of mxm, verbs, cma, no cma: OK(*)
<br>
<p>(*) of course there are lots of spots-o-performance-sucking
<br>
<p>Good luck with 1.7 final,
<br>
&nbsp;Peter
<br>
<p><span class="quotelev1">&gt; with fairly small changes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Fix wrong header file / compilation error in bcol
</span><br>
<span class="quotelev1">&gt; - Support MXM STREAM for isend and irecv
</span><br>
<span class="quotelev1">&gt; - Make sure &quot;mpirun &lt;dirname&gt;&quot; fails with $status!=0
</span><br>
<span class="quotelev1">&gt; - Bunches of cygwin minor fixes
</span><br>
<span class="quotelev1">&gt; - Make sure the fortran compiler supports BIND(C) with LOGICAL for the F08
</span><br>
<span class="quotelev1">&gt; bindings - Fix --disable-mpi-io with the F08 bindings
</span><br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12182/signature.asc">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12183.php">Jeff Squyres (jsquyres): "[OMPI devel] openshmem comments"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12181.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/02/12171.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7rc8 is posted"</a>
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
