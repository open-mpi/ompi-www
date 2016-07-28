<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 17:29:30 2007" -->
<!-- isoreceived="20070321212930" -->
<!-- sent="Wed, 21 Mar 2007 17:29:13 -0400" -->
<!-- isosent="20070321212913" -->
<!-- name="David Burns" -->
<!-- email="3db14_at_[hidden]" -->
<!-- subject="Re: [OMPI users] threading" -->
<!-- id="4601A3A9.1050008_at_qlink.queensu.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="faa2718c0703210929h3a9b4436wa255e863f1478bd9_at_mail.gmail.com" -->
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
<strong>From:</strong> David Burns (<em>3db14_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-21 17:29:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2867.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="2865.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2858.php">Sam Adams: "[OMPI users] threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2872.php">Jeff Squyres: "Re: [OMPI users] threading"</a>
<li><strong>Reply:</strong> <a href="2872.php">Jeff Squyres: "Re: [OMPI users] threading"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have used POSIX threading and Open MPI without problems on our Opteron 
<br>
2216 Cluster (4 cores per node). Moving to core-level parallelization 
<br>
with multi threading resulted in significant performance gains.
<br>
<p>Sam Adams wrote:
<br>
<span class="quotelev1">&gt; I have been looking, but I haven't really found a good answer about
</span><br>
<span class="quotelev1">&gt; system level threading.  We are about to get a new cluster of
</span><br>
<span class="quotelev1">&gt; dual-processor quad-core nodes or 8 cores per node.  Traditionally I
</span><br>
<span class="quotelev1">&gt; would just tell MPI to launch two processes per dual processor single
</span><br>
<span class="quotelev1">&gt; core node, but with eight cores on a node, having 8 processes seems
</span><br>
<span class="quotelev1">&gt; inefficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is this: does OpenMPI sense that there are multiple cores
</span><br>
<span class="quotelev1">&gt; on a node and use something like pthreads instead of creating new
</span><br>
<span class="quotelev1">&gt; processes automatically when I request 8 processes for a node, or
</span><br>
<span class="quotelev1">&gt; should I run a single process per node and use OpenMP or pthreads
</span><br>
<span class="quotelev1">&gt; explicitly to get better performance on a per node basis?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2867.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="2865.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2858.php">Sam Adams: "[OMPI users] threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2872.php">Jeff Squyres: "Re: [OMPI users] threading"</a>
<li><strong>Reply:</strong> <a href="2872.php">Jeff Squyres: "Re: [OMPI users] threading"</a>
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
