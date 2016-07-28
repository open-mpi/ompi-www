<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 20:05:59 2010" -->
<!-- isoreceived="20100311010559" -->
<!-- sent="Wed, 10 Mar 2010 17:07:57 -0800" -->
<!-- isosent="20100311010757" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="4B98426D.8040501_at_oracle.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B98304D.3060903_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] 3D domain decomposition with MPI<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 20:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12310.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12308.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12308.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12313.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12313.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Also, I wonder why you want to decompose on both X and Y (&quot;pencils&quot;),
</span><br>
<span class="quotelev1">&gt; and not only X (&quot;books&quot;),
</span><br>
<span class="quotelev1">&gt; which may give you a smaller/simpler domain decomposition
</span><br>
<span class="quotelev1">&gt; and communication footprint.
</span><br>
<span class="quotelev1">&gt; Whether you can or cannot do this way depends on your
</span><br>
<span class="quotelev1">&gt; computation, which I don't know about. 
</span><br>
<p>I'm not sure I'm following the entire thread, but higher-dimensional 
<br>
decompositions, though more complicated, can improve the 
<br>
communciation:computation ratio.  For example, say you have a 
<br>
100x100x100 grid to distribute over 100 processes.  Even if you have 
<br>
only one ghost cell at each surface, a 1d decomposition would place a 
<br>
1x100x100 &quot;book&quot; on each process with 2x100x100 ghost cells:  a 2:1 
<br>
ratio of ghost:real cells!  That's a lot.  In contrast, if you had 
<br>
10x10x100 pencils, there would be (4*10+4)x100 ghosts.  The ratio drops 
<br>
to 0.44.  This is an extreme case, but it illustrates the point.
<br>
<p>Indeed, maybe you could even drop to a 25x20x20 &quot;box&quot;.  Then the 
<br>
ghost:real ratio might be around 0.29 or so.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12310.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12308.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12308.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12313.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12313.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
