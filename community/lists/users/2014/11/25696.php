<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 05:37:31 2014" -->
<!-- isoreceived="20141106103731" -->
<!-- sent="Thu, 6 Nov 2014 10:37:28 +0000" -->
<!-- isosent="20141106103728" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="8337B490252F0944BF1D38541059627E1737100D_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="60AC4E71-E11D-4A5B-8FF7-AACF75DA9AE6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OPENMPI-1.8.3:%20missing%20fortran%20bindings%20for%20MPI_SIZEOF"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-11-06 05:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25695.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>In reply to:</strong> <a href="25690.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Mr. Squyres,
<br>
<p>a) When looking in your  mpi_sizeof_mpifh.f90  test program I found a little thing:  You may (but need not) change the name of the integer variable  size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to e.g.   isize  , because   size   is just an intrinsic function in Fortran (you may see it already, if you have an editor with Fortran-highlighting).
<br>
&nbsp;&nbsp;&nbsp;Although your type declaration overrides the intrinsic function, a renaming would make the coding unambiguous. 
<br>
<p>b)  My idea was, that OPENMPI should provide always an declaration (interface) for each MPI-routine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(and that's what the MPI-3.0 Standard document (Sept.21, 2012) prescribes (p. 599+601+603)),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;independent whether you have already a test program in your suite for an MPI-routine or not.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Because:  If all the interfaces are present, you a priory will avoid &quot;2-step&quot; User messages: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;first the User complains about a missing MPI-routine, and when the MPI-routine is made available, possibly later about a bug in that MPI-routine.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So bugs in MPI-routines will be detected and removed faster in the course of the OPENMPI development. Good for all.
<br>
<p>Greetings 
<br>
&nbsp;Michael Rachner 
<br>
<p><p><p><p><p>-----Urspr&#252;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff Squyres (jsquyres)
<br>
Gesendet: Mittwoch, 5. November 2014 16:48
<br>
An: Open MPI User's List
<br>
Betreff: Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF
<br>
<p>Meh.  I forgot to attach the test.  :-)
<br>
<p>Here it is.
<br>
<p>On Nov 5, 2014, at 10:46 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 5, 2014, at 9:59 AM, &lt;Michael.Rachner_at_[hidden]&gt; &lt;Michael.Rachner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my   sharedmemtest.f90  coding   just sent to you,
</span><br>
<span class="quotelev2">&gt;&gt; I have added a call of MPI_SIZEOF (at present it is deactivated, because of the missing Ftn-binding in OPENMPI-1.8.3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I attached one of the tests I put in our test suite for SIZEOF issues after the last bug was found.  I have that same test replicated essentially three times:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - once for mpif.h
</span><br>
<span class="quotelev1">&gt; - once for &quot;use mpi&quot;
</span><br>
<span class="quotelev1">&gt; - ones for &quot;use mpi_f08&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I suggest, that you may activate the 2 respective statements in the 
</span><br>
<span class="quotelev2">&gt;&gt; coding , and use yourself the program for testing whether MPI_SIZEOF works now in the upcoming 1.8.4-version.
</span><br>
<span class="quotelev2">&gt;&gt; For me, the installation of a tarball version is not so easy to do as 
</span><br>
<span class="quotelev2">&gt;&gt; for you, and the problem with the missing Ftn-bindings is not limited to a special machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right; it was a larger problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you tell me, from which OPENMPI-version on  the bug will be removed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.8.4 will contain the fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To generalize the problem with the Ftn-bindings:
</span><br>
<span class="quotelev2">&gt;&gt;  I think OPENMPI-development should go the whole hog,  and check, 
</span><br>
<span class="quotelev2">&gt;&gt; whether for all MPI-routines the Ftn-bindings exist.
</span><br>
<span class="quotelev2">&gt;&gt; This not so much a complicated task, but a somewhat time-consuming task.
</span><br>
<span class="quotelev2">&gt;&gt; But otherwise, over a long time more or less angry Users will write emails on missing FTN-bindings and grumble on &quot;that buggy OPENMPI&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; And you will have to write the answers on and on... .
</span><br>
<span class="quotelev2">&gt;&gt; This will finally take more time for developers and users then doing that work now once-for-all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We do have a bunch of fortran tests, but I admit that our coverage is 
</span><br>
<span class="quotelev1">&gt; not complete.  SIZEOF was not tested at all, for example, until 
</span><br>
<span class="quotelev1">&gt; recently.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SIZEOF is also a bit of a special case in the MPI API because it *must* be polymorphic (I don't think any other MPI API is) -- even for mpif.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25689.php">http://www.open-mpi.org/community/lists/users/2014/11/25689.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25695.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>In reply to:</strong> <a href="25690.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
