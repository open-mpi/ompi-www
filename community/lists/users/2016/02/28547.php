<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 06:46:40 2016" -->
<!-- isoreceived="20160218114640" -->
<!-- sent="Thu, 18 Feb 2016 11:46:38 +0000" -->
<!-- isosent="20160218114638" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="etPan.56c5af1c.69c49ba9.cef3_at_JSQUYRES-M-H05C" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87mvr95c6j.fsf_at_jedbrown.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-18 06:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28548.php">Ben Menadue: "[OMPI users] mpirun hanging after MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="28546.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why"</a>
<li><strong>In reply to:</strong> <a href="28483.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28472.php">Dave Love: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George is correct that the Fortran bindings are optional, but the datatype declarations are not.
<br>

<br>
I've raised the question in the MPI Forum Fortran Working Group:
<br>

<br>
&#194;&#160; &#194;&#160;&#194;&#160;<a href="http://lists.mpi-forum.org/mpiwg-fortran/2016/02/1722.php">http://lists.mpi-forum.org/mpiwg-fortran/2016/02/1722.php</a>
<br>

<br>

<br>

<br>
-----Original Message-----
<br>
From:&#194;&#160;Jed Brown &lt;jed_at_[hidden]&gt;
<br>
Reply:&#194;&#160;Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:&#194;&#160;February 10, 2016 at 1:09:39 AM
<br>
To:&#194;&#160;Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject:&#194;&#160; Re: [OMPI users] OMPI users] Fortran vs C reductions
<br>

<br>
<span class="quotelev1">&gt; Gilles Gouaillardet writes:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implementation. Must I compile in support for being called with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_DOUBLE_COMPLEX?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; does that really matter ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Possibly. For example, if the library needed to define some static
</span><br>
<span class="quotelev1">&gt; data, its setup might involve communicating values before being called
</span><br>
<span class="quotelev1">&gt; with that particular type. That setup phase would fail if the Fortran
</span><br>
<span class="quotelev1">&gt; type is invalid.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; i assume your library and the user code are built with the same OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt; if there is no Fortran support, then you are compiling code that cannot
</span><br>
<span class="quotelev2">&gt; &gt; be invoked (e.g. dead code),
</span><br>
<span class="quotelev2">&gt; &gt; and though that is not the most elegant thing to do, that does not sound
</span><br>
<span class="quotelev2">&gt; &gt; like a showstopper to me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; so yes, compile in support for being called with Fortran predefined
</span><br>
<span class="quotelev2">&gt; &gt; datatypes,
</span><br>
<span class="quotelev2">&gt; &gt; worst case scenario is you generate broken dead code.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; No, worst case is that the library crashes at run-time, e.g., during
</span><br>
<span class="quotelev1">&gt; setup of some sort.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I don't have a specific library with this behavior, but I can fill in
</span><br>
<span class="quotelev1">&gt; the details to scientifically justify such a thing.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Anyway, my suggestion is to either make a compile-time error so that a
</span><br>
<span class="quotelev1">&gt; configure script can test its validity or make it possible to query at
</span><br>
<span class="quotelev1">&gt; run-time whether the type/object is valid. The latter would have the
</span><br>
<span class="quotelev1">&gt; advantage that you could rebuild MPI to add Fortran support and
</span><br>
<span class="quotelev1">&gt; dependent projects would not need to be rebuilt because they saw the
</span><br>
<span class="quotelev1">&gt; same environment. I think that would involve new function(s).
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28483.php">http://www.open-mpi.org/community/lists/users/2016/02/28483.php</a>  
</span><br>

<br>
--  
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]  
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28548.php">Ben Menadue: "[OMPI users] mpirun hanging after MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="28546.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why"</a>
<li><strong>In reply to:</strong> <a href="28483.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28472.php">Dave Love: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
