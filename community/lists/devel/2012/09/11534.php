<?
$subject_val = "Re: [OMPI devel] making Fortran MPI_Status components public";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 04:00:41 2012" -->
<!-- isoreceived="20120927080041" -->
<!-- sent="Thu, 27 Sep 2012 08:00:30 +0000" -->
<!-- isosent="20120927080030" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] making Fortran MPI_Status components public" -->
<!-- id="3BD8FE0B-B308-4319-B18D-4168C21F4D2B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Prayer.1.3.5.1209270847300.24903_at_hermes-1.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] making Fortran MPI_Status components public<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 04:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11535.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11533.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11533.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11535.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11535.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fwiw, we have put in many hours of engineering to &quot;that obscene hack&quot; *because* compilers all have differing degrees of compatibility suck. It's going to be years before compilers fully support f08, for example, so we have no choice but to test for various compiler characteristics at configure time. 
<br>
<p>I don't remember which ones offhand didn't support private (and I'm not near a computer to check), but we had to put that check in because there were problems. 
<br>
<p>In short, the compilers themselves aren't providing fully portable behavior. So we have to check. 
<br>
<p>And I would *much* rather prevent users from accidentally using the private status members in the status then have them ask us why &lt;foo&gt; status member works in MPICH but doesn't work in OMPI. If its marked as private, it's obvious that the user should not touch it. Yes, users should know that there are only 3 public fields in the status, but plenty of users don't read the spec and just read the header files instead. 
<br>
<p>So I'm ok propagating &quot;that obscene hack&quot; when it protects users and prevents wasting time on mailing list questions. 
<br>
<p>Case closed. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Sep 27, 2012, at 9:48 AM, &quot;N.M. Maclaren&quot; &lt;nmm1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 27 2012, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 27, 2012, at 7:30 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PUBLIC should be a standard part of F95 (no configure probe required).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the presence of &quot;OMPI_PRIVATE&quot; suggests you already have a configure probe for the &quot;PRIVATE&quot; keyword.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, we do, because not all compilers support it (yet?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All serious compilers do, and have for a long time.  I should be interested
</span><br>
<span class="quotelev1">&gt; to know which ones are actually used that don't.  There are a couple of
</span><br>
<span class="quotelev1">&gt; Fortran compilers around that aren't really maintained and haven't been
</span><br>
<span class="quotelev1">&gt; upgraded in a decade, but it is ridiculous to attempt to support such
</span><br>
<span class="quotelev1">&gt; things.  It's like attempting to support K&amp;R C compilers!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a high chance that these portability problems are actually
</span><br>
<span class="quotelev1">&gt; caused by the configuration mechanism - indeed, I would give three to
</span><br>
<span class="quotelev1">&gt; one on that being the cause.  I use PUBLIC and PRIVATE in my course,
</span><br>
<span class="quotelev1">&gt; and I am pretty sure that I tested with Sun ONE Studio, so Oracle
</span><br>
<span class="quotelev1">&gt; Studio is probably OK :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A VERY strong recommendation for portability is to minimise the use of
</span><br>
<span class="quotelev1">&gt; that obscene hack (by which I mean configure).  OpenMPI probably can't
</span><br>
<span class="quotelev1">&gt; avoid using it, but its use should be minimised - it is FAR better to
</span><br>
<span class="quotelev1">&gt; clean up code and make it fully portable than to use it to hack around
</span><br>
<span class="quotelev1">&gt; a problem.  And far too few configuration scripts get the software
</span><br>
<span class="quotelev1">&gt; engineering and maintenance that they need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here, for example, there is absolutely NO point in supporting anything
</span><br>
<span class="quotelev1">&gt; beyond the pure Fortran 77 interfaces for any compiler that isn't a
</span><br>
<span class="quotelev1">&gt; full Fortran 95 one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11535.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11533.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11533.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11535.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11535.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
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
