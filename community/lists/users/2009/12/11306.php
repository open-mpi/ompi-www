<?
$subject_val = "Re: [OMPI users] MPI Processes and Auto Vectorization";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 08:47:44 2009" -->
<!-- isoreceived="20091201134744" -->
<!-- sent="Tue, 01 Dec 2009 05:47:11 -0800" -->
<!-- isosent="20091201134711" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Processes and Auto Vectorization" -->
<!-- id="4B151E5F.8040005_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="428810f20912010500u2cecc120ldebc480bc2aacb5c_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 08:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11307.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11305.php">amjad ali: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>In reply to:</strong> <a href="11305.php">amjad ali: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11364.php">Terry Frankcombe: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Reply:</strong> <a href="11364.php">Terry Frankcombe: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
amjad ali wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; thanks T.Prince,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your saying:
</span><br>
<span class="quotelev1">&gt; &quot;I'll just mention that we are well into the era of 3 levels of 
</span><br>
<span class="quotelev1">&gt; programming parallelization:  vectorization, threaded parallel (e.g. 
</span><br>
<span class="quotelev1">&gt; OpenMP), and process parallel (e.g. MPI).&quot;  is a really great new 
</span><br>
<span class="quotelev1">&gt; learning for me. Now I can perceive better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you please explain a bit about:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot; This application gains significant benefit from cache blocking, so 
</span><br>
<span class="quotelev1">&gt; vectorization has more opportunity to gain than for applications which 
</span><br>
<span class="quotelev1">&gt; have less memory locality.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So now should I conclude from your reply that if we have single core 
</span><br>
<span class="quotelev1">&gt; processor in a PC, even than we can get benefit of Auto-Vectorization? 
</span><br>
<span class="quotelev1">&gt; And we do not need free cores for getting benefit of auto-vectorization?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
Yes, we were using auto-vectorization from before the beginnings of MPI 
<br>
back in the days of single core CPUs; in fact, it would often show a 
<br>
greater gain than it did on later multi-core CPUs.
<br>
The reason for greater effectiveness of auto-vectorization with cache 
<br>
blocking and possibly with single core CPUs would be less saturation of 
<br>
memory buss.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11307.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11305.php">amjad ali: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>In reply to:</strong> <a href="11305.php">amjad ali: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11364.php">Terry Frankcombe: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Reply:</strong> <a href="11364.php">Terry Frankcombe: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
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
