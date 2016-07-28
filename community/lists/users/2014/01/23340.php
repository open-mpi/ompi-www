<?
$subject_val = "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 20:52:38 2014" -->
<!-- isoreceived="20140109015238" -->
<!-- sent="Thu, 9 Jan 2014 01:52:37 +0000" -->
<!-- isosent="20140109015237" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)" -->
<!-- id="0158CBCE-7045-4FD7-8A20-05B89FF16A39_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8761pueyx1.fsf_at_jedbrown.org" -->
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
<strong>Subject:</strong> [OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 20:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23341.php">Jed Brown: "Re: [OMPI users] MPI stats argument in Fortran mpi module"</a>
<li><strong>Previous message:</strong> <a href="23339.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="23339.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23341.php">Jed Brown: "Re: [OMPI users] MPI stats argument in Fortran mpi module"</a>
<li><strong>Reply:</strong> <a href="23341.php">Jed Brown: "Re: [OMPI users] MPI stats argument in Fortran mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 8, 2014, at 8:17 PM, Jed Brown &lt;jedbrown_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I don't call MPI from Fortran, but someone on a Fortran project that I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; watch mentioned that the compiler would complain about such and such a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use (actually relating to types for MPI_Status in MPI_Recv rather than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer types).  
</span><br>
<p>(changed subject to reflect a different thread)
<br>
<p><span class="quotelev2">&gt;&gt; Can you provide more details here? 
</span><br>
<p><span class="quotelev1">&gt; Totally superficial, just passing &quot;status(1)&quot; instead of &quot;status&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;status(1:MPI_STATUS_SIZE)&quot;.  
</span><br>
<p>That's a different type (INTEGER scalar vs. INTEGER array).  So the compiler complaining about that is actually correct.
<br>
<p>Under the covers, Fortran will (most likely) pass both by reference, so they'll both actually (most likely) *work* if you build with an MPI that doesn't provide an interface for MPI_Recv, but passing status(1) is actually incorrect Fortran.
<br>
<p><span class="quotelev1">&gt; I extrapolated: how can they provide an
</span><br>
<span class="quotelev1">&gt; explicit interface to MPI_Recv in &quot;use mpi&quot;, given portability
</span><br>
<span class="quotelev1">&gt; constraints/existing language standards?
</span><br>
<p><p>I think you're saying that you agree with my above statements about the different types, and you're just detailing how you got to asking about WTF we were providing an MPI_Recv interface in the first place.  Kumbaya.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23341.php">Jed Brown: "Re: [OMPI users] MPI stats argument in Fortran mpi module"</a>
<li><strong>Previous message:</strong> <a href="23339.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="23339.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23341.php">Jed Brown: "Re: [OMPI users] MPI stats argument in Fortran mpi module"</a>
<li><strong>Reply:</strong> <a href="23341.php">Jed Brown: "Re: [OMPI users] MPI stats argument in Fortran mpi module"</a>
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
