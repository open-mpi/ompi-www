<?
$subject_val = "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 11:56:06 2016" -->
<!-- isoreceived="20160215165606" -->
<!-- sent="Mon, 15 Feb 2016 16:56:03 +0000" -->
<!-- isosent="20160215165603" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program" -->
<!-- id="etPan.56c20323.7c658e2b.7e1e_at_JSQUYRES-M-H05C" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87oabhzzle.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-15 11:56:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28534.php">JR Cary: "[OMPI users] readv failed How to debug?"</a>
<li><strong>Previous message:</strong> <a href="28532.php">Dave Love: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>In reply to:</strong> <a href="28532.php">Dave Love: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, that is correct: the Open MPI libraries used by all components (to include mpirun and all the individual MPI processes) must be compatible. &#194;&#160;We usually advise users to use the same version across the board, and that will make things work.
<br>

<br>
More specifically: it's not enough to statically link your MPI application; you would also need to statically link mpirun and the orteds, too (and/or distribute binaries for the entire Open MPI install, even if they're dynamically linked).&#194;&#160;
<br>

<br>

<br>

<br>
On February 15, 2016 at 11:51:39 AM, Dave Love (d.love_at_[hidden]) wrote:
<br>
<span class="quotelev1">&gt; Jeff Hammond writes:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; You can rely upon e.g. <a href="https://www.mpich.org/abi/">https://www.mpich.org/abi/</a> when redistributing MPI
</span><br>
<span class="quotelev2">&gt; &gt; binaries built with MPICH, but a better option would be to wrap all of your
</span><br>
<span class="quotelev2">&gt; &gt; MPI code in an implementation-agnostic wrapper and then ship a binary that
</span><br>
<span class="quotelev2">&gt; &gt; can dlopen a different version wrapper depending on which MPI
</span><br>
<span class="quotelev2">&gt; &gt; implementation the user has. That would allow you to ship a single binary
</span><br>
<span class="quotelev2">&gt; &gt; that could use both MPICH and OpenMPI.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I don't know how it works with MPICH, but in OMPI don't you need all of
</span><br>
<span class="quotelev1">&gt; the submitting orterun, the linked libraries, and the target ORTE to be
</span><br>
<span class="quotelev1">&gt; compatible, which a wrapper would need to know? [How is the Fortran ABI
</span><br>
<span class="quotelev1">&gt; fixed anyhow?]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I don't think there's a check on that currently, which would be useful
</span><br>
<span class="quotelev1">&gt; if the info can be propagated. There have been issues on the list due
</span><br>
<span class="quotelev1">&gt; to host and target ORTE being different, and I've seen them locally.
</span><br>
<span class="quotelev1">&gt; Producing a clear error with incompatible components (to the extent it's
</span><br>
<span class="quotelev1">&gt; possible) could save confusion.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28532.php">http://www.open-mpi.org/community/lists/users/2016/02/28532.php</a>  
</span><br>
<span class="quotelev1">&gt;  
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
<li><strong>Next message:</strong> <a href="28534.php">JR Cary: "[OMPI users] readv failed How to debug?"</a>
<li><strong>Previous message:</strong> <a href="28532.php">Dave Love: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>In reply to:</strong> <a href="28532.php">Dave Love: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
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
