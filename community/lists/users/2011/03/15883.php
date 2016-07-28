<?
$subject_val = "[OMPI users] MPI_AllReduce() deadlock on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 11:27:12 2011" -->
<!-- isoreceived="20110316152712" -->
<!-- sent="Wed, 16 Mar 2011 11:27:06 -0400" -->
<!-- isosent="20110316152706" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_AllReduce() deadlock on IB" -->
<!-- id="CE635A09-26AA-4539-AB19-F158590BA2F8_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_AllReduce() deadlock on IB<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 11:27:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15884.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15882.php">Damien: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15887.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>Reply:</strong> <a href="15887.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a user whos code when ran on ethernet performs fine. When ran on verbs based IB the code deadlocks in an MPI_AllReduce() call.
<br>
<p>We are using openmpi/1.4.3  with the intel compilers.
<br>
<p>I poked at the running code with padb and I get the following:
<br>
<p>0....5....1....5....2....5....3....5....4....5....
<br>
,,---,-,-,----,--,--,,-,RRRRRRRR,---,----,,--,-,-,
<br>
,,-,-,,,-,,--,-,,-,-,-,-RRRRRRRR-,-,---,,,--,,---,
<br>
,,---,-,,,,-,-,,-,-,----RRRRRRRR,----,-,--,,-----,
<br>
--,,-,-,,,,-,,------,,--RRRRRRRR,,----,,--,------,
<br>
<p><p>For multiple runs which ranks are stuck in AllReduce() changes, 
<br>
Is there any open bugs?  I found one but only on shared memory and our version should be new enough (from what I could tell) to avoid it.
<br>
<p>Thanks,  what should I look for to diagnose the issue?
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15884.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15882.php">Damien: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15887.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>Reply:</strong> <a href="15887.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
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
