<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 12:57:38 2010" -->
<!-- isoreceived="20100311175738" -->
<!-- sent="Thu, 11 Mar 2010 19:00:17 +0100" -->
<!-- isosent="20100311180017" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="87bpeu3fim.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="063591A1FD6A8143ACC2CA38F4C1B5EF85069E4F_at_HVXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 3D domain decomposition with MPI<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 13:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12331.php">Hammad Siddiqi: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12329.php">Brock Palen: "[OMPI users] psm plm failure when infinipathlibs installed but no psm device present"</a>
<li><strong>In reply to:</strong> <a href="12328.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12332.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12332.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 11 Mar 2010 12:44:01 -0500, &quot;Cole, Derek E&quot; &lt;derek.e.cole_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I am replying to this via the daily-digest message I got. Sorry it
</span><br>
<span class="quotelev1">&gt; wasn't sooner... I didn't realize I was getting replies until I got
</span><br>
<span class="quotelev1">&gt; the digest. Does anyone know how to change it so I get the emails as
</span><br>
<span class="quotelev1">&gt; you all send them?
</span><br>
<p>Log in at the bottom and edit options:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><span class="quotelev1">&gt; I am doing a Red-black Gauss-Seidel algorithm.
</span><br>
<p>Note that red-black Guss-Seidel is a terrible algorithm on cache-based
<br>
hardware, it only makes sense on vector hardware.  The reason for this
<br>
is that the whole point is to approximate a dense action (the inverse of
<br>
a matrix), but the red-black ordering causes this action to be purely
<br>
local.  A sequential ordering, on the other hand, is like a dense
<br>
lower-triangular operation, which tends to be much closer to a real
<br>
inverse.  In parallel, you do these sequential sweeps on each process,
<br>
and communicate when you're done.  The memory performance will be twice
<br>
as good, and the algorithm will converge in fewer iterations.
<br>
<p><span class="quotelev1">&gt; The ghost points are what I was trying to figure for moving this into
</span><br>
<span class="quotelev1">&gt; the 3rd dimension. Thanks for adding some concrete-ness to my idea of
</span><br>
<span class="quotelev1">&gt; exactly how much overhead is involved. The test domains I am computing
</span><br>
<span class="quotelev1">&gt; on are on the order of 100*50*50 or so. This is why I am trying to
</span><br>
<span class="quotelev1">&gt; limit the overhead of the MPI communication. I am in the process of
</span><br>
<span class="quotelev1">&gt; finding out exactly how big the domains may become, so that I can
</span><br>
<span class="quotelev1">&gt; adjust the algorithm accordingly.
</span><br>
<p>The difficulty is for small subdomains.  If you have large subdomains,
<br>
then parallel overhead will almost always be small.
<br>
<p><span class="quotelev1">&gt; If I understand what you mean by pencils versus books, I don't think
</span><br>
<span class="quotelev1">&gt; that will work for these types of calculations will it? Maybe a better
</span><br>
<span class="quotelev1">&gt; explanation of what you mean by a pencil versus a book. If I was going
</span><br>
<span class="quotelev1">&gt; to solve a sub-matrix of the XY plane for all Z-values, what is that
</span><br>
<span class="quotelev1">&gt; considered?
</span><br>
<p>That would be a &quot;book&quot; or &quot;slab&quot;.
<br>
<p>I still recommend using PETSc rather than reproducing standard code to
<br>
call MPI directly for this, it will handle all the decomposition and
<br>
updates, and has the advantage that you'll be able to use much better
<br>
algorithms than Gauss-Seidel.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12331.php">Hammad Siddiqi: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12329.php">Brock Palen: "[OMPI users] psm plm failure when infinipathlibs installed but no psm device present"</a>
<li><strong>In reply to:</strong> <a href="12328.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12332.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12332.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
