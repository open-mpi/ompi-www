<?
$subject_val = "Re: [OMPI users] parallelising ADI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  7 04:19:59 2012" -->
<!-- isoreceived="20120307091959" -->
<!-- sent="Wed, 7 Mar 2012 09:19:54 +0000" -->
<!-- isosent="20120307091954" -->
<!-- name="Kharche, Sanjay" -->
<!-- email="Sanjay.Kharche_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallelising ADI" -->
<!-- id="04649ABFF695C94F8E6CF3BBBA9B16650F3273DB_at_BHEXMBX1.livad.liv.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAM9tzSnw9LbYN-zuO6ewz-_XHv8FgP6nUBSZN-a4vnXnDGTv=Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Kharche, Sanjay (<em>Sanjay.Kharche_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-07 04:19:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18713.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18711.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>In reply to:</strong> <a href="18707.php">Jed Brown: "Re: [OMPI users] parallelising ADI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jed, All
<br>
<p>Many thanks to your informative replies on this and the PetSc list. I will make a decision based on your advice.
<br>
<p>thanks
<br>
Sanjay
<br>
<p><p><p>________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jed Brown [jed_at_[hidden]]
<br>
Sent: 06 March 2012 22:50
<br>
To: tprince_at_[hidden]; Open MPI Users
<br>
Subject: Re: [OMPI users] parallelising ADI
<br>
<p>On Tue, Mar 6, 2012 at 16:23, Tim Prince &lt;n8tm_at_[hidden]&lt;mailto:n8tm_at_[hidden]&gt;&gt; wrote:
<br>
&nbsp;On 03/06/2012 03:59 PM, Kharche, Sanjay wrote:
<br>
Hi
<br>
<p>I am working on a 3D ADI solver for the heat equation. I have implemented it as serial. Would anybody be able to indicate the best and more straightforward way to parallelise it. Apologies if this is going to the wrong forum.
<br>
<p><p>If it's to be implemented in parallelizable fashion (not SSOR style where each line uses updates from the previous line), it should be feasible to divide the outer loop into an appropriate number of blocks, or decompose the physical domain and perform ADI on individual blocks, then update and repeat.
<br>
<p>True ADI has inherently high communication cost because a lot of data movement is needed to make the _fundamentally sequential_ tridiagonal solves local enough that latency doesn't kill you trying to keep those solves distributed. This also applies (albeit to a lesser degree) in serial due to way memory works.
<br>
<p>If you only do non-overlapping subdomain solves, you must use a Krylov method just to ensure convergence. You can add overlap, but the Krylov method is still necessary for any practical convergence rate. The method will also require an iteration count proportional to the number of subdomains across the global domain times the square root of the number of elements across a subdomain. The constants may not be small and this asymptotic result is independent of what the subdomain solver is. You need a coarse level to improve this scaling.
<br>
<p>Sanjay, as Matt and I recommended when you asked the same question on the PETSc list this morning, unless this is a homework assignment, you should solve your problem with multigrid instead of ADI. We pointed you to simple example code that scales well to many thousands of processes.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18712/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18713.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18711.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>In reply to:</strong> <a href="18707.php">Jed Brown: "Re: [OMPI users] parallelising ADI"</a>
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
