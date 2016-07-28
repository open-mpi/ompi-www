<?
$subject_val = "Re: [OMPI users] parallelising ADI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 17:50:38 2012" -->
<!-- isoreceived="20120306225038" -->
<!-- sent="Tue, 6 Mar 2012 16:50:33 -0600" -->
<!-- isosent="20120306225033" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallelising ADI" -->
<!-- id="CAM9tzSnw9LbYN-zuO6ewz-_XHv8FgP6nUBSZN-a4vnXnDGTv=Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F568E6E.4020905_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] parallelising ADI<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 17:50:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18708.php">Jed Brown: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Previous message:</strong> <a href="18706.php">Tim Prince: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="18706.php">Tim Prince: "Re: [OMPI users] parallelising ADI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18712.php">Kharche, Sanjay: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Reply:</strong> <a href="18712.php">Kharche, Sanjay: "Re: [OMPI users] parallelising ADI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 6, 2012 at 16:23, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  On 03/06/2012 03:59 PM, Kharche, Sanjay wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working on a 3D ADI solver for the heat equation. I have implemented
</span><br>
<span class="quotelev2">&gt;&gt; it as serial. Would anybody be able to indicate the best and more
</span><br>
<span class="quotelev2">&gt;&gt; straightforward way to parallelise it. Apologies if this is going to the
</span><br>
<span class="quotelev2">&gt;&gt; wrong forum.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If it's to be implemented in parallelizable fashion (not SSOR style
</span><br>
<span class="quotelev1">&gt; where each line uses updates from the previous line), it should be feasible
</span><br>
<span class="quotelev1">&gt; to divide the outer loop into an appropriate number of blocks, or decompose
</span><br>
<span class="quotelev1">&gt; the physical domain and perform ADI on individual blocks, then update and
</span><br>
<span class="quotelev1">&gt; repeat.
</span><br>
<p><p>True ADI has inherently high communication cost because a lot of data
<br>
movement is needed to make the _fundamentally sequential_ tridiagonal
<br>
solves local enough that latency doesn't kill you trying to keep those
<br>
solves distributed. This also applies (albeit to a lesser degree) in serial
<br>
due to way memory works.
<br>
<p>If you only do non-overlapping subdomain solves, you must use a Krylov
<br>
method just to ensure convergence. You can add overlap, but the Krylov
<br>
method is still necessary for any practical convergence rate. The method
<br>
will also require an iteration count proportional to the number of
<br>
subdomains across the global domain times the square root of the number of
<br>
elements across a subdomain. The constants may not be small and this
<br>
asymptotic result is independent of what the subdomain solver is. You need
<br>
a coarse level to improve this scaling.
<br>
<p>Sanjay, as Matt and I recommended when you asked the same question on the
<br>
PETSc list this morning, unless this is a homework assignment, you should
<br>
solve your problem with multigrid instead of ADI. We pointed you to simple
<br>
example code that scales well to many thousands of processes.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18707/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18708.php">Jed Brown: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Previous message:</strong> <a href="18706.php">Tim Prince: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="18706.php">Tim Prince: "Re: [OMPI users] parallelising ADI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18712.php">Kharche, Sanjay: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Reply:</strong> <a href="18712.php">Kharche, Sanjay: "Re: [OMPI users] parallelising ADI"</a>
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
