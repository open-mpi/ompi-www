<?
$subject_val = "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 15:17:22 2009" -->
<!-- isoreceived="20091001191722" -->
<!-- sent="Thu, 01 Oct 2009 15:17:18 -0400" -->
<!-- isosent="20091001191718" -->
<!-- name="Peter Thompson" -->
<!-- email="peter.thompson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew" -->
<!-- id="4AC5003E.6000804_at_totalviewtech.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1254423387.3883.12.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew<br>
<strong>From:</strong> Peter Thompson (<em>peter.thompson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 15:17:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10865.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10863.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10860.php">Ashley Pittman: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10865.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The value of 4 might be invalid (though maybe on a 32b machine, it would be 
<br>
okay?) but it's enough to allow TotalView to continue on without raising a 
<br>
memory event, so I'm okay with it ;-)
<br>
<p>PeterT
<br>
<p>Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; Simple malloc() returns pointers that are at least eight byte aligned
</span><br>
<span class="quotelev1">&gt; anyway, I'm not sure what the reason for calling memalign() with a value
</span><br>
<span class="quotelev1">&gt; of four would be be anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 2009-10-01 at 20:19 +0200, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev2">&gt;&gt; No it didn't. And memalign is obsolete according to the manpage.
</span><br>
<span class="quotelev2">&gt;&gt; posix_memalign is the one to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21744">https://svn.open-mpi.org/trac/ompi/changeset/21744</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10865.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10863.php">Samuel K. Gutierrez: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10860.php">Ashley Pittman: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10865.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew"</a>
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
