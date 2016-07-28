<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 10:46:41 2014" -->
<!-- isoreceived="20141105154641" -->
<!-- sent="Wed, 5 Nov 2014 15:46:40 +0000" -->
<!-- isosent="20141105154640" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="12831BF1-8E68-4737-8616-873C48EED2A7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8337B490252F0944BF1D38541059627E17370F60_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 10:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25690.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25688.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25688.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25690.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25690.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2014, at 9:59 AM, &lt;Michael.Rachner_at_[hidden]&gt; &lt;Michael.Rachner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In my   sharedmemtest.f90  coding   just sent to you,
</span><br>
<span class="quotelev1">&gt; I have added a call of MPI_SIZEOF (at present it is deactivated, because of the missing Ftn-binding in OPENMPI-1.8.3).
</span><br>
<p>FWIW, I attached one of the tests I put in our test suite for SIZEOF issues after the last bug was found.  I have that same test replicated essentially three times:
<br>
<p>- once for mpif.h
<br>
- once for &quot;use mpi&quot;
<br>
- ones for &quot;use mpi_f08&quot;
<br>
<p><span class="quotelev1">&gt; I suggest, that you may activate the 2 respective statements in the coding ,
</span><br>
<span class="quotelev1">&gt; and use yourself the program for testing whether MPI_SIZEOF works now in the upcoming 1.8.4-version.
</span><br>
<span class="quotelev1">&gt; For me, the installation of a tarball version is not so easy to do as for you, 
</span><br>
<span class="quotelev1">&gt; and the problem with the missing Ftn-bindings is not limited to a special machine.
</span><br>
<p>Right; it was a larger problem.
<br>
<p><span class="quotelev1">&gt; Can you tell me, from which OPENMPI-version on  the bug will be removed?
</span><br>
<p>1.8.4 will contain the fix.
<br>
<p><span class="quotelev1">&gt; To generalize the problem with the Ftn-bindings:
</span><br>
<span class="quotelev1">&gt;   I think OPENMPI-development should go the whole hog,  
</span><br>
<span class="quotelev1">&gt;   and check, whether for all MPI-routines the Ftn-bindings exist.
</span><br>
<span class="quotelev1">&gt;  This not so much a complicated task, but a somewhat time-consuming task.
</span><br>
<span class="quotelev1">&gt;  But otherwise, over a long time more or less angry Users will write emails on missing FTN-bindings and grumble on &quot;that buggy OPENMPI&quot;.
</span><br>
<span class="quotelev1">&gt;  And you will have to write the answers on and on... .
</span><br>
<span class="quotelev1">&gt;  This will finally take more time for developers and users then doing that work now once-for-all.
</span><br>
<p>We do have a bunch of fortran tests, but I admit that our coverage is not complete.  SIZEOF was not tested at all, for example, until recently.  :-(
<br>
<p>SIZEOF is also a bit of a special case in the MPI API because it *must* be polymorphic (I don't think any other MPI API is) -- even for mpif.h.
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
<li><strong>Next message:</strong> <a href="25690.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25688.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25688.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25690.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25690.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
