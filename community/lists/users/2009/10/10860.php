<?
$subject_val = "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 14:56:18 2009" -->
<!-- isoreceived="20091001185618" -->
<!-- sent="Thu, 01 Oct 2009 19:56:27 +0100" -->
<!-- isosent="20091001185627" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew" -->
<!-- id="1254423387.3883.12.camel_at_alpha" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1254421191.7098.2.camel_at_y-boda.ydc.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 14:56:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10861.php">Blosch, Edwin L: "[OMPI users] Are there ways to reduce the memory used by OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="10859.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10858.php">&#197;ke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10862.php">흆e Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10862.php">흆e Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10863.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10864.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simple malloc() returns pointers that are at least eight byte aligned
<br>
anyway, I'm not sure what the reason for calling memalign() with a value
<br>
of four would be be anyway.
<br>
<p>Ashley,
<br>
<p>On Thu, 2009-10-01 at 20:19 +0200, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; No it didn't. And memalign is obsolete according to the manpage.
</span><br>
<span class="quotelev1">&gt; posix_memalign is the one to use.
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21744">https://svn.open-mpi.org/trac/ompi/changeset/21744</a>
</span><br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10861.php">Blosch, Edwin L: "[OMPI users] Are there ways to reduce the memory used by OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="10859.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10858.php">&#197;ke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10862.php">흆e Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10862.php">흆e Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10863.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<li><strong>Reply:</strong> <a href="10864.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
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
