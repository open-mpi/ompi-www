<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 21 19:50:28 2006" -->
<!-- isoreceived="20061122005028" -->
<!-- sent="Tue, 21 Nov 2006 16:49:20 -0800" -->
<!-- isosent="20061122004920" -->
<!-- name="Adam Moody" -->
<!-- email="moody20_at_[hidden]" -->
<!-- subject="[OMPI users] Build OpenMPI for SHM only" -->
<!-- id="45639E90.6090107_at_llnl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Adam Moody (<em>moody20_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-21 19:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2206.php">Brian W. Barrett: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Previous message:</strong> <a href="2204.php">Patrick Jessee: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared	libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2206.php">Brian W. Barrett: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Reply:</strong> <a href="2206.php">Brian W. Barrett: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Reply:</strong> <a href="2207.php">Tim Prins: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
We have some clusters which consist of a large pool of 8-way nodes 
<br>
connected via ethernet.  On these particular machines, we'd like our 
<br>
users to be able to run 8-way MPI jobs on node, but we *don't* want them 
<br>
to run MPI jobs across nodes via the ethernet.  Thus, I'd like to 
<br>
configure and build OpenMPI to provide shared memory support (or TCP 
<br>
loopback) but disable general TCP support.
<br>
<p>I realize that you can run without tcp via something like &quot;mpirun --mca 
<br>
btl ^tcp&quot;, but this is up to the user's discretion.  I need a way to 
<br>
disable it systematically.  Is there a way to configure it out at build 
<br>
time or is there some runtime configuration file I can modify to turn it 
<br>
off?  Also, when we configure &quot;--without-tcp&quot;, the configure script 
<br>
doesn't complain, but TCP support is added anyway.
<br>
<p>Thanks,
<br>
-Adam Moody
<br>
MPI Support @ LLNL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2206.php">Brian W. Barrett: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Previous message:</strong> <a href="2204.php">Patrick Jessee: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared	libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2206.php">Brian W. Barrett: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Reply:</strong> <a href="2206.php">Brian W. Barrett: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Reply:</strong> <a href="2207.php">Tim Prins: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
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
