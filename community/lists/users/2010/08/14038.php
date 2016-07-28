<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 12:07:39 2010" -->
<!-- isoreceived="20100816160739" -->
<!-- sent="Mon, 16 Aug 2010 09:08:59 -0700" -->
<!-- isosent="20100816160859" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="B63DF917-2345-49C0-8D7D-EB185ACBC480_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C61D9E3.8060209_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce on local machine<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 12:08:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14039.php">Jeff Squyres: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14037.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="13965.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2010, at 3:59 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for opening a ticket and taking care of this.
</span><br>
<p>Sorry -- I missed your inline questions when I first read this mail...
<br>
<p><span class="quotelev2">&gt; &gt; That being said, we didn't previously find any correctness
</span><br>
<span class="quotelev2">&gt; &gt; issues with using an alignment of 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it affect only the information
</span><br>
<span class="quotelev1">&gt; provided by ompi_info, as Martin Siegert suggested?
</span><br>
<p><span class="quotelev1">&gt; Or does it really affect the actual alignment of
</span><br>
<span class="quotelev1">&gt; MPI types when OpenMPI is compiled with Intel,
</span><br>
<span class="quotelev1">&gt; as Martin, Ake Sandgren, Hugo Gagnon, and myself
</span><br>
<span class="quotelev1">&gt; thought it might?
</span><br>
<p>It affects both: I do see the size and alignment of double precisions (as determined by configure) used in the OMPI datatype engine (and real8, etc.).  We had a copy-n-paste error in ompi_info such that some Fortran types were displaying the wrong sizes / alignments.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14039.php">Jeff Squyres: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14037.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="13965.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
