<?
$subject_val = "Re: [OMPI users] Regression: Fortran derived types with newer MPI module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 20:04:44 2014" -->
<!-- isoreceived="20140109010444" -->
<!-- sent="Thu, 9 Jan 2014 01:04:42 +0000" -->
<!-- isosent="20140109010442" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regression: Fortran derived types with newer MPI module" -->
<!-- id="C0F72D82-6EF0-47DD-95BE-9C74D19644A6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8761pvje4v.fsf_at_jedbrown.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regression: Fortran derived types with newer MPI module<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 20:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23339.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Previous message:</strong> <a href="23337.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>In reply to:</strong> <a href="23330.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23339.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Reply:</strong> <a href="23339.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2014, at 11:23 PM, Jed Brown &lt;jedbrown_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On page 610, I see text disallowing the explicit interfaces in
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/use-mpi-tkr:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  In S2 and S3: [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why did OMPI decide that this (presumably non-normative) text in the
</span><br>
<span class="quotelev1">&gt; standard was not worth following?  (Rejecting something in the standard
</span><br>
<span class="quotelev1">&gt; indicates stronger convictions than would be independently weighing the
</span><br>
<span class="quotelev1">&gt; benefits of each approach.)
</span><br>
<p>I thought a lot about this before answering.
<br>
<p>The short answer probably is: we were (are) wrong, and should probably change the default back to &quot;small&quot; (i.e., no interfaces for MPI subroutines with choice buffers) when ignore TKR is not supported.
<br>
<p>As I mentioned Craig and I debated long and hard to change that default, but, in summary, we apparently missed this clause on p610.  I'll change it back.
<br>
<p>I'll be happy when gfortran 4.9 is released that supports ignore TKR and you'll get proper interfaces. :-)
<br>
<p><span class="quotelev1">&gt; I don't call MPI from Fortran, but someone on a Fortran project that I
</span><br>
<span class="quotelev1">&gt; watch mentioned that the compiler would complain about such and such a
</span><br>
<span class="quotelev1">&gt; use (actually relating to types for MPI_Status in MPI_Recv rather than
</span><br>
<span class="quotelev1">&gt; buffer types).  
</span><br>
<p>Can you provide more details here?  Choice buffer issues aside, I'm failing to think of a scenario where you should get a compile mismatch for the MPI status dummy argument in MPI_Recv...
<br>
<p><span class="quotelev1">&gt; It's nice to know that after 60 years (when Fortran 201x is released,
</span><br>
<span class="quotelev1">&gt; including TS 29113), there will be a Fortran standard with an analogue
</span><br>
<span class="quotelev1">&gt; of void*.
</span><br>
<p>It actually took quite a lot of coordination between the MPI Forum and the J3 Fortran standards body to make that happen.  :-)
<br>
<p><span class="quotelev2">&gt;&gt; - very few codes use the &quot;mpi&quot; module
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I've noticed a few projects transition to it in the last few years.
</span><br>
<p>Good to know.
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
<li><strong>Next message:</strong> <a href="23339.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Previous message:</strong> <a href="23337.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>In reply to:</strong> <a href="23330.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23339.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Reply:</strong> <a href="23339.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
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
