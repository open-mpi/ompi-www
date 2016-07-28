<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 22:25:53 2010" -->
<!-- isoreceived="20100311032553" -->
<!-- sent="Wed, 10 Mar 2010 22:25:43 -0500" -->
<!-- isosent="20100311032543" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="4B9862B7.5020402_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B98426D.8040501_at_oracle.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 22:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12314.php">Ralph Castain: "Re: [OMPI users] MPI and DRMAA"</a>
<li><strong>Previous message:</strong> <a href="12312.php">Brian Smith: "[OMPI users] MPI and DRMAA"</a>
<li><strong>In reply to:</strong> <a href="12309.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12316.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12316.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12317.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene
<br>
<p>Your argument is correct.
<br>
<p>I would cast the conclusion slightly different, though:
<br>
The &quot;pencil&quot; decomposition scales better with the number of
<br>
processors than the &quot;book&quot; decomposition.
<br>
<p>Your example shows this well for the extreme case
<br>
where the number of processes
<br>
is equal to the array dimension that is being decomposed.
<br>
For, say, 4 processes, the difference is not so large.
<br>
<p>Actually, &quot;cell&quot;/&quot;chunk&quot; XYZ 3D decompositions
<br>
probably scale even better than &quot;books&quot; and &quot;pencils&quot;,
<br>
and one can extend the idea to N dimensions.
<br>
It is a general &quot;surface-to-interior&quot;/&quot;area-to-volume&quot;
<br>
ratio that governs this, I suppose.
<br>
<p>In your example, &quot;pencils&quot;
<br>
wouldn't do well if using 10,000 processes,
<br>
yielding a 4:1  ghost to real cell ratio. :(
<br>
And 10,000 processes/processors is no longer out of reach today.
<br>
OTOH, 10,000 chunks of, say, 5x5x4 size, would
<br>
give a ghost-to-real-cell ratio of 13:10 (1.3)
<br>
Not stellar, but much better than the pencils' 4:1 (4) ratio.
<br>
<p>However, the more dimensions that take part in the decomposition,
<br>
the more complex the code gets.
<br>
And here is where a simpler decomposition may become attractive,
<br>
despite some loss of efficiency/scaling.
<br>
<p>The choice of decomposition may depend
<br>
a bit also on the algorithm employed,
<br>
along with the level of complexity one is willing to put in the code.
<br>
For instance, if you are solving the wave equation using the
<br>
pseudo-spectral method, the algorithm is somewhat simpler
<br>
if you use serial FFTs (rather than parallel ones),
<br>
and decompose a 3D domain in &quot;books&quot;, rather than &quot;pencils&quot;.
<br>
Atmosphere dynamics spectral code is normally
<br>
decomposed in &quot;books&quot; (along latitudinal stripes),
<br>
for similar reasons, I would guess.
<br>
By contrast, for finite-difference solvers,
<br>
the code complexity may be similar for &quot;book&quot; or &quot;pencil&quot;,
<br>
thus, choosing the &quot;pencil&quot; decomposition may be an obvious choice,
<br>
to get better scaling.
<br>
Ocean dynamics equations, at least in the codes I've seen,
<br>
normally use &quot;pencil&quot; decomposition, and are probably harder to
<br>
handle using 3D &quot;chunk&quot; decomposition (due to the asymmetry imposed by
<br>
gravity).
<br>
Hence pencil rules in the oceans,
<br>
but not necessarily in the atmosphere, where books are more popular.
<br>
<p>In any case, given that Derek's 3D C arrays can be naturally
<br>
decomposed in YZ &quot;books&quot; (X decomposition),
<br>
and that this decomposition may not require any the use of MPI types
<br>
for halo/ghost/overlap exchange (the YZ array sections could be
<br>
directly used by the MPI functions)
<br>
this may be a reasonable choice for Derek.
<br>
(I assume that his algorithm is compatible with &quot;book&quot; decomposition,
<br>
but it may not be.)
<br>
<p>For somebody who says to be new to MPI,
<br>
reducing code complexity may be important.
<br>
He should be aware of the price paid in scaling/performance,
<br>
of course.
<br>
<p>Pencil decomposition is certainly too hard to code in C,
<br>
but will require a bit more of effort than books, I suppose.
<br>
(Perhaps using of  MPI type vector, with stride, etc.)
<br>
And if Derek has 10,000+ processors, a huge 3D domain size,
<br>
and is crazy about scaling/performance,
<br>
he may want to start thinking of decomposing the domain in chunks.  :)
<br>
<p>I am not an MPI expert, just a user/programmer,
<br>
so I may be dead wrong in what I wrote.
<br>
Please, correct me if I am wrong.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, I wonder why you want to decompose on both X and Y (&quot;pencils&quot;),
</span><br>
<span class="quotelev2">&gt;&gt; and not only X (&quot;books&quot;),
</span><br>
<span class="quotelev2">&gt;&gt; which may give you a smaller/simpler domain decomposition
</span><br>
<span class="quotelev2">&gt;&gt; and communication footprint.
</span><br>
<span class="quotelev2">&gt;&gt; Whether you can or cannot do this way depends on your
</span><br>
<span class="quotelev2">&gt;&gt; computation, which I don't know about. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I'm following the entire thread, but higher-dimensional 
</span><br>
<span class="quotelev1">&gt; decompositions, though more complicated, can improve the 
</span><br>
<span class="quotelev1">&gt; communciation:computation ratio.  For example, say you have a 
</span><br>
<span class="quotelev1">&gt; 100x100x100 grid to distribute over 100 processes.  Even if you have 
</span><br>
<span class="quotelev1">&gt; only one ghost cell at each surface, a 1d decomposition would place a 
</span><br>
<span class="quotelev1">&gt; 1x100x100 &quot;book&quot; on each process with 2x100x100 ghost cells:  a 2:1 
</span><br>
<span class="quotelev1">&gt; ratio of ghost:real cells!  That's a lot.  In contrast, if you had 
</span><br>
<span class="quotelev1">&gt; 10x10x100 pencils, there would be (4*10+4)x100 ghosts.  The ratio drops 
</span><br>
<span class="quotelev1">&gt; to 0.44.  This is an extreme case, but it illustrates the point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, maybe you could even drop to a 25x20x20 &quot;box&quot;.  Then the 
</span><br>
<span class="quotelev1">&gt; ghost:real ratio might be around 0.29 or so.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12314.php">Ralph Castain: "Re: [OMPI users] MPI and DRMAA"</a>
<li><strong>Previous message:</strong> <a href="12312.php">Brian Smith: "[OMPI users] MPI and DRMAA"</a>
<li><strong>In reply to:</strong> <a href="12309.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12316.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12316.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12317.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
