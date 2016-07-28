<?
$subject_val = "Re: [OMPI users] Poor performance on Amazon EC2 with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 09:39:47 2016" -->
<!-- isoreceived="20160308143947" -->
<!-- sent="Tue, 8 Mar 2016 23:39:46 +0900" -->
<!-- isosent="20160308143946" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Poor performance on Amazon EC2 with TCP" -->
<!-- id="CAAkFZ5upRnACrpu9Xw68Lqv5VFeSi3sf7QH65RaQSNQR1wOXjw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D30446F8.27B05%Gary.Jackson_at_jhuapl.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Poor performance on Amazon EC2 with TCP<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-08 09:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28661.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>Previous message:</strong> <a href="28659.php">Jackson, Gary L.: "[OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>In reply to:</strong> <a href="28659.php">Jackson, Gary L.: "[OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28663.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28663.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jason,
<br>
<p>how many Ethernet interfaces are there ?
<br>
if several, can you try again with one only
<br>
mpirun --mca btl_tcp_if_include eth0 ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, March 8, 2016, Jackson, Gary L. &lt;Gary.Jackson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've built OpenMPI 1.10.1 on Amazon EC2. Using NetPIPE, I'm seeing about
</span><br>
<span class="quotelev1">&gt; half the performance for MPI over TCP as I do with raw TCP. Before I start
</span><br>
<span class="quotelev1">&gt; digging in to this more deeply, does anyone know what might cause that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For what it's worth, I see the same issues with MPICH, but I do not see it
</span><br>
<span class="quotelev1">&gt; with Intel MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gary Jackson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28660/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28661.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>Previous message:</strong> <a href="28659.php">Jackson, Gary L.: "[OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>In reply to:</strong> <a href="28659.php">Jackson, Gary L.: "[OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28663.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28663.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
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
