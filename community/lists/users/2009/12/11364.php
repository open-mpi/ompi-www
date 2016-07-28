<?
$subject_val = "Re: [OMPI users] MPI Processes and Auto Vectorization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 01:24:50 2009" -->
<!-- isoreceived="20091202062450" -->
<!-- sent="Wed, 02 Dec 2009 17:24:38 +1100" -->
<!-- isosent="20091202062438" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Processes and Auto Vectorization" -->
<!-- id="1259735078.29665.37.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="4B151E5F.8040005_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Processes and Auto Vectorization<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 01:24:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11365.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Previous message:</strong> <a href="11363.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11306.php">Tim Prince: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-12-01 at 05:47 -0800, Tim Prince wrote:
<br>
<span class="quotelev1">&gt; amjad ali wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; thanks T.Prince,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Your saying:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;I'll just mention that we are well into the era of 3 levels of 
</span><br>
<span class="quotelev2">&gt; &gt; programming parallelization:  vectorization, threaded parallel (e.g. 
</span><br>
<span class="quotelev2">&gt; &gt; OpenMP), and process parallel (e.g. MPI).&quot;  is a really great new 
</span><br>
<span class="quotelev2">&gt; &gt; learning for me. Now I can perceive better.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can you please explain a bit about:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot; This application gains significant benefit from cache blocking, so 
</span><br>
<span class="quotelev2">&gt; &gt; vectorization has more opportunity to gain than for applications which 
</span><br>
<span class="quotelev2">&gt; &gt; have less memory locality.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So now should I conclude from your reply that if we have single core 
</span><br>
<span class="quotelev2">&gt; &gt; processor in a PC, even than we can get benefit of Auto-Vectorization? 
</span><br>
<span class="quotelev2">&gt; &gt; And we do not need free cores for getting benefit of auto-vectorization?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; Yes, we were using auto-vectorization from before the beginnings of MPI 
</span><br>
<span class="quotelev1">&gt; back in the days of single core CPUs; in fact, it would often show a 
</span><br>
<span class="quotelev1">&gt; greater gain than it did on later multi-core CPUs.
</span><br>
<span class="quotelev1">&gt; The reason for greater effectiveness of auto-vectorization with cache 
</span><br>
<span class="quotelev1">&gt; blocking and possibly with single core CPUs would be less saturation of 
</span><br>
<span class="quotelev1">&gt; memory buss.
</span><br>
<p>Just for the record, there's a huge difference between &quot;back in the days
<br>
of single core CPUs&quot; and &quot;before the beginnings of MPI&quot;.  They're
<br>
separated by a decade or two.
<br>
<p>Vectorisation (automatic or otherwise) is useful on pipeline
<br>
architectures.  Pipeline architectures do go back a long way, at least
<br>
to the 80s.  They do predate MPI I think, but not parallel programming
<br>
and message passing in general.  Multi-core chips are
<br>
Johnny-come-latelys.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11365.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Previous message:</strong> <a href="11363.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11306.php">Tim Prince: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
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
