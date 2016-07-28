<?
$subject_val = "Re: [OMPI users] MPI stats argument in Fortran mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 21:08:43 2014" -->
<!-- isoreceived="20140109020843" -->
<!-- sent="Wed, 08 Jan 2014 19:08:41 -0700" -->
<!-- isosent="20140109020841" -->
<!-- name="Jed Brown" -->
<!-- email="jedbrown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI stats argument in Fortran mpi module" -->
<!-- id="87zjn5ewk6.fsf_at_jedbrown.org" -->
<!-- inreplyto="0158CBCE-7045-4FD7-8A20-05B89FF16A39_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI stats argument in Fortran mpi module<br>
<strong>From:</strong> Jed Brown (<em>jedbrown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 21:08:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23342.php">John Hearns: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Previous message:</strong> <a href="23340.php">Jeff Squyres (jsquyres): "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)"</a>
<li><strong>In reply to:</strong> <a href="23340.php">Jeff Squyres (jsquyres): "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<span class="quotelev2">&gt;&gt; Totally superficial, just passing &quot;status(1)&quot; instead of &quot;status&quot; or
</span><br>
<span class="quotelev2">&gt;&gt; &quot;status(1:MPI_STATUS_SIZE)&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a different type (INTEGER scalar vs. INTEGER array).  So the
</span><br>
<span class="quotelev1">&gt; compiler complaining about that is actually correct.
</span><br>
<p>Yes, exactly.
<br>
<p><span class="quotelev1">&gt; Under the covers, Fortran will (most likely) pass both by reference,
</span><br>
<span class="quotelev1">&gt; so they'll both actually (most likely) *work* if you build with an MPI
</span><br>
<span class="quotelev1">&gt; that doesn't provide an interface for MPI_Recv, but passing status(1)
</span><br>
<span class="quotelev1">&gt; is actually incorrect Fortran.
</span><br>
<p>Prior to slice notation, this would be the only way to build an array of
<br>
statuses.  I.e., receives go into status(1:MPI_STATUS_SIZE),
<br>
status(1+MPI_STATUS_SIZE:2*MPI_STATUS_SIZE), etc.  Due to
<br>
pass-by-reference semantics, I think this will always work, despite not
<br>
type-checking with explicit interfaces.  I don't know what the language
<br>
standard says about backward-compatibility of such constructs, but
<br>
presumably we need to know the dialect to understand whether it's
<br>
acceptable.  (I actually don't know if the Fortran 77 standard defines
<br>
the behavior when passing status(1), status(1+MPI_STATUS_SIZE), etc., or
<br>
whether it works only as a consequence of the only reasonable
<br>
implementation.
<br>
<p><span class="quotelev1">&gt; I think you're saying that you agree with my above statements about
</span><br>
<span class="quotelev1">&gt; the different types, and you're just detailing how you got to asking
</span><br>
<span class="quotelev1">&gt; about WTF we were providing an MPI_Recv interface in the first place.
</span><br>
<span class="quotelev1">&gt; Kumbaya.  :-)
</span><br>
<p>Indeed.
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23341/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23342.php">John Hearns: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Previous message:</strong> <a href="23340.php">Jeff Squyres (jsquyres): "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)"</a>
<li><strong>In reply to:</strong> <a href="23340.php">Jeff Squyres (jsquyres): "[OMPI users] MPI stats argument in Fortran mpi module (was Regression: Fortran derived types with newer MPI module)"</a>
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
