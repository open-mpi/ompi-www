<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 10:23:00 2016" -->
<!-- isoreceived="20160209152300" -->
<!-- sent="Tue, 09 Feb 2016 08:22:56 -0700" -->
<!-- isosent="20160209152256" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="87mvr99acv.fsf_at_jedbrown.org" -->
<!-- inreplyto="87ziva5a3j.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-09 10:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28477.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28475.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28472.php">Dave Love: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave Love &lt;d.love_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Jed Brown &lt;jed_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Isn't that entirely dependent on the Fortran compiler?  There is no
</span><br>
<span class="quotelev2">&gt;&gt; universal requirement that there be a relationship between Fortran
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER and C int, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case it's not generally obvious:  the compiler _and its options_.
</span><br>
<span class="quotelev1">&gt; You can typically change the width of real and double precision, as with
</span><br>
<span class="quotelev1">&gt; gfortran -default-real-8, and similarly for integer.  (It seems unKIND
</span><br>
<span class="quotelev1">&gt; if the MPI standard specifically enshrines double precision, but
</span><br>
<span class="quotelev1">&gt; anyhow...)
</span><br>
<p>Indeed.  (Though such options are an abomination.)
<br>
<p><span class="quotelev2">&gt;&gt; Feature tests are far more reliable, accurate, and lower maintenance
</span><br>
<span class="quotelev2">&gt;&gt; than platform/version tests.  When a package defines macros/symbols that
</span><br>
<span class="quotelev2">&gt;&gt; fail at run-time, it makes feature tests much more expensive.  Even more
</span><br>
<span class="quotelev2">&gt;&gt; so when cross-compiling, where run-time tests require batch submission.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, but isn't the existence of the compiler wrapper the appropriate
</span><br>
<span class="quotelev1">&gt; test for Fortran support, and don't you really need it to run
</span><br>
<span class="quotelev1">&gt; Fortran-related feature tests? 
</span><br>
<p>The wrapper might not exist.  It doesn't on many prominent platforms
<br>
today.
<br>
<p><span class="quotelev1">&gt; I have an &quot;integer*8&quot; build of OMPI, for instance.  It's a pain
</span><br>
<span class="quotelev1">&gt; generally when build systems for MPI stuff avoid compiler wrappers,
</span><br>
<span class="quotelev1">&gt; and I'd hope that using them could make possibly-unfortunate standards
</span><br>
<span class="quotelev1">&gt; requirements like this moot.  Would there be a problem with that in
</span><br>
<span class="quotelev1">&gt; this case?
</span><br>
<p>In the example of my other reply, my library would not need to call MPI
<br>
From Fortran, but needs to know whether it needs to compile support for
<br>
decoding Fortran datatypes.
<br>
<p>My personal opinion is that compiler wrappers are gross (they don't
<br>
compose), but systems like CMake that insist on circumventing compiler
<br>
wrappers in a yet more error-prone way are worse.
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28476/signature.asc">signature.asc</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28477.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28475.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28472.php">Dave Love: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
