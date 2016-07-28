<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 10:48:11 2014" -->
<!-- isoreceived="20141105154811" -->
<!-- sent="Wed, 5 Nov 2014 15:48:10 +0000" -->
<!-- isosent="20141105154810" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="60AC4E71-E11D-4A5B-8FF7-AACF75DA9AE6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="12831BF1-8E68-4737-8616-873C48EED2A7_at_cisco.com" -->
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
<strong>Date:</strong> 2014-11-05 10:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25691.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Previous message:</strong> <a href="25689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25696.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25696.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Meh.  I forgot to attach the test.  :-)
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
<span class="quotelev2">&gt;&gt; I suggest, that you may activate the 2 respective statements in the coding ,
</span><br>
<span class="quotelev2">&gt;&gt; and use yourself the program for testing whether MPI_SIZEOF works now in the upcoming 1.8.4-version.
</span><br>
<span class="quotelev2">&gt;&gt; For me, the installation of a tarball version is not so easy to do as for you, 
</span><br>
<span class="quotelev2">&gt;&gt; and the problem with the missing Ftn-bindings is not limited to a special machine.
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
<span class="quotelev2">&gt;&gt;  I think OPENMPI-development should go the whole hog,  
</span><br>
<span class="quotelev2">&gt;&gt;  and check, whether for all MPI-routines the Ftn-bindings exist.
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
<span class="quotelev1">&gt; We do have a bunch of fortran tests, but I admit that our coverage is not complete.  SIZEOF was not tested at all, for example, until recently.  :-(
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25689.php">http://www.open-mpi.org/community/lists/users/2014/11/25689.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25690/mpi_sizeof_mpifh.f90">mpi_sizeof_mpifh.f90</a>
</ul>
<!-- attachment="mpi_sizeof_mpifh.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25691.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Previous message:</strong> <a href="25689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25696.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25696.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
