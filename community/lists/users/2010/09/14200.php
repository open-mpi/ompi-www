<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 12:39:37 2010" -->
<!-- isoreceived="20100909163937" -->
<!-- sent="Thu, 09 Sep 2010 09:38:21 -0700" -->
<!-- isosent="20100909163821" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="4C890D7D.2080706_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C89049C.5050904_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 12:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14201.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14201.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14201.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; More often than not some components lag behind (regardless of how
</span><br>
<span class="quotelev1">&gt; much you tune the number of processors assigned to each component),
</span><br>
<span class="quotelev1">&gt; slowing down the whole scheme.
</span><br>
<span class="quotelev1">&gt; The coupler must sit and wait for that late component,
</span><br>
<span class="quotelev1">&gt; the other components must sit and wait for the coupler,
</span><br>
<span class="quotelev1">&gt; and the (vicious) &quot;positive feedback&quot; cycle that
</span><br>
<span class="quotelev1">&gt; Ashley mentioned goes on and on.
</span><br>
<p>I think &quot;sit and wait&quot; is the &quot;typical&quot; scenario that Dick mentions.  
<br>
Someone lags, so someone else has to wait.
<br>
<p>In contrast, the &quot;feedback&quot; cycle Ashley mentions is where someone lags 
<br>
and someone else keeps racing ahead, pumping even more data at the 
<br>
laggard, forcing the laggard ever further behind.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14201.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14201.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14201.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
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
