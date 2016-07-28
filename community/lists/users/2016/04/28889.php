<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 10:53:16 2016" -->
<!-- isoreceived="20160405145316" -->
<!-- sent="Tue, 5 Apr 2016 16:53:12 +0200" -->
<!-- isosent="20160405145312" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="32879D39-0CB0-44ED-B33B-61E3B0E72FB5_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CC082DBB-C76A-4C9C-B9A8-8211F18F1CB5_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] resolution of MPI_Wtime<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-05 10:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28890.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28888.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28888.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28890.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On 05 Apr 2016, at 16:46 , Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Open MPI uses clock_gettime when it is available, and defaults to gettimeofday only when this better option can't be found. Check that your system has clock_gettime and the resolution of this timer. 
</span><br>
<p>Depending on what you mean, I don't this is universally true, as I recently ran into this issue in another part of the code.
<br>
AFAIK, some parts of the code have a macro that check for clock_gettime and use it, but in other places there is just direct usage of gettimeofday.
<br>
<p>If you commented on MPI_Wtime specifically, then I don't know :-)
<br>
<p>Mark<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28890.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28888.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28888.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28890.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
