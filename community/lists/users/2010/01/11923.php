<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 20:42:08 2010" -->
<!-- isoreceived="20100129014208" -->
<!-- sent="Fri, 29 Jan 2010 12:41:57 +1100" -->
<!-- isosent="20100129014157" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="1264729317.5851.155.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="891118.26442.qm_at_web63107.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] speed up this problem by MPI<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 20:41:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11924.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11922.php">Natarajan CS: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11925.php">Gus Correa: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-01-28 at 17:05 -0800, Tim wrote:
<br>
<span class="quotelev1">&gt; Also I only need the loop that computes every element of the array to
</span><br>
<span class="quotelev1">&gt; be parallelized. Someone said that the parallel part begins with
</span><br>
<span class="quotelev1">&gt; MPI_Init and ends with MPI_Finilize, and one can do any serial
</span><br>
<span class="quotelev1">&gt; computations before and/or after these calls. But I have wrote some
</span><br>
<span class="quotelev1">&gt; MPI programs, and found that the parallel part is not restricted
</span><br>
<span class="quotelev1">&gt; between MPI_Init and MPI_Finilize, but instead the whole program. If
</span><br>
<span class="quotelev1">&gt; the rest part of the code has to be wrapped for process with ID 0, I
</span><br>
<span class="quotelev1">&gt; have little idea about how to apply that to my case since the rest
</span><br>
<span class="quotelev1">&gt; part would be the parts before and after the loop in the function and
</span><br>
<span class="quotelev1">&gt; the whole in main().
</span><br>
<p>I think you're being polluted by your OpenMP experience!  ;-)
<br>
<p>Unlike in OpenMP, there is no concept of &quot;parallel region&quot; when using
<br>
MPI.  MPI allows you to pass data between processes.  That's all.  It's
<br>
up to you to write your code in such a way that the data is used allow
<br>
parallel computation.
<br>
<p>Often MPI_Init and MPI_Finilize are amongst the first and last things
<br>
done in a parallel code, respectively.  They effectively say &quot;set up
<br>
stuff so I can pass messages effectively&quot; and &quot;clean that up&quot;.  Each
<br>
process runs from start to finish &quot;independently&quot;.
<br>
<p>As an aside, using MPI is much more invasive than OpenMP.  Parallelising
<br>
an existing serial code can be hard with MPI.  But if you start from
<br>
scratch you usually end up with a better code with MPI than with OpenMP
<br>
(e.g. MPI makes you think about data locality, whereas you can ignore
<br>
all the bad things bad locality does and still have a working code with
<br>
OpenMP.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11924.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11922.php">Natarajan CS: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11925.php">Gus Correa: "Re: [OMPI users] speed up this problem by MPI"</a>
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
