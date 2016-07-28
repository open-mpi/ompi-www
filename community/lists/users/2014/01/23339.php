<?
$subject_val = "Re: [OMPI users] Regression: Fortran derived types with newer MPI module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 20:17:49 2014" -->
<!-- isoreceived="20140109011749" -->
<!-- sent="Wed, 08 Jan 2014 18:17:46 -0700" -->
<!-- isosent="20140109011746" -->
<!-- name="Jed Brown" -->
<!-- email="jedbrown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regression: Fortran derived types with newer MPI module" -->
<!-- id="8761pueyx1.fsf_at_jedbrown.org" -->
<!-- inreplyto="C0F72D82-6EF0-47DD-95BE-9C74D19644A6_at_cisco.com" -->
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
<strong>From:</strong> Jed Brown (<em>jedbrown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 20:17:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23340.php">Jeff Squyres (jsquyres): "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)"</a>
<li><strong>Previous message:</strong> <a href="23338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="23338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23340.php">Jeff Squyres (jsquyres): "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)"</a>
<li><strong>Reply:</strong> <a href="23340.php">Jeff Squyres (jsquyres): "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; As I mentioned Craig and I debated long and hard to change that
</span><br>
<span class="quotelev1">&gt; default, but, in summary, we apparently missed this clause on p610.
</span><br>
<span class="quotelev1">&gt; I'll change it back.
</span><br>
<p>Okay, thanks.
<br>
<p><span class="quotelev1">&gt; I'll be happy when gfortran 4.9 is released that supports ignore TKR
</span><br>
<span class="quotelev1">&gt; and you'll get proper interfaces. :-)
</span><br>
<p>Better for everyone.
<br>
<p><span class="quotelev2">&gt;&gt; I don't call MPI from Fortran, but someone on a Fortran project that I
</span><br>
<span class="quotelev2">&gt;&gt; watch mentioned that the compiler would complain about such and such a
</span><br>
<span class="quotelev2">&gt;&gt; use (actually relating to types for MPI_Status in MPI_Recv rather than
</span><br>
<span class="quotelev2">&gt;&gt; buffer types).  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you provide more details here?  Choice buffer issues aside, I'm
</span><br>
<span class="quotelev1">&gt; failing to think of a scenario where you should get a compile mismatch
</span><br>
<span class="quotelev1">&gt; for the MPI status dummy argument in MPI_Recv...
</span><br>
<p>Totally superficial, just passing &quot;status(1)&quot; instead of &quot;status&quot; or
<br>
&quot;status(1:MPI_STATUS_SIZE)&quot;.  I extrapolated: how can they provide an
<br>
explicit interface to MPI_Recv in &quot;use mpi&quot;, given portability
<br>
constraints/existing language standards?
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23339/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23340.php">Jeff Squyres (jsquyres): "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)"</a>
<li><strong>Previous message:</strong> <a href="23338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="23338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23340.php">Jeff Squyres (jsquyres): "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)"</a>
<li><strong>Reply:</strong> <a href="23340.php">Jeff Squyres (jsquyres): "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)"</a>
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
