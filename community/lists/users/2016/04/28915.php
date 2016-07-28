<?
$subject_val = "[OMPI users] What about MPI-3 shared memory features?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 11 11:51:50 2016" -->
<!-- isoreceived="20160411155150" -->
<!-- sent="Mon, 11 Apr 2016 08:46:40 -0700" -->
<!-- isosent="20160411154640" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] What about MPI-3 shared memory features?" -->
<!-- id="570BC6E0.1050904_at_reachone.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] What about MPI-3 shared memory features?<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-11 11:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28916.php">Jeff Hammond: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>Previous message:</strong> <a href="28914.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28916.php">Jeff Hammond: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>Reply:</strong> <a href="28916.php">Jeff Hammond: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have been looking into the MPI-3 extensions that added ways to do 
<br>
direct memory copying on multi-core 'nodes' that share memory. 
<br>
Architectures constructed from these nodes are universal now, so 
<br>
improved ways to exploit them are certainly needed.  However, it is my 
<br>
understanding that Open-MPI and other widely used MPI implementations, 
<br>
e.g. Intel, MPICH, use hardware locality to identify shared memory 
<br>
regions and do direct memory copies between processes in these cases, 
<br>
rather than network communication.  If this is the case, are there any 
<br>
additional advantages from explicit programming of memory copying using 
<br>
MPI-3 shared memory features?
<br>
<p>T. Rosmond
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28916.php">Jeff Hammond: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>Previous message:</strong> <a href="28914.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28916.php">Jeff Hammond: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>Reply:</strong> <a href="28916.php">Jeff Hammond: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
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
