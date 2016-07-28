<?
$subject_val = "[OMPI users] mpirun links wrong library with BLACS tester";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 21:11:27 2010" -->
<!-- isoreceived="20100128021127" -->
<!-- sent="Thu, 28 Jan 2010 03:11:21 +0100" -->
<!-- isosent="20100128021121" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun links wrong library with BLACS tester" -->
<!-- id="16A9B497-5B6B-4386-961C-53AA158CE21D_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] mpirun links wrong library with BLACS tester<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-27 21:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11905.php">jody: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Previous message:</strong> <a href="11903.php">Terry Frankcombe: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11906.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Maybe reply:</strong> <a href="11906.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have installed openmpi 1.4.1 locally for one user on a cluster,  
<br>
where some other mpi were installed.
<br>
<p>when I try to run an executable through mpirun (I am running the BLACS  
<br>
tester) I get
<br>
xFbtest_MPI-LINUX-0: error while loading shared libraries: liblam.so. 
<br>
0: cannot open shared object file: No such file or directory
<br>
<p>if I run the executable it works
<br>
ldd always shows the correct libraries (even when run in mpirun) and  
<br>
no liblam
<br>
also the environment looks normal in both cases (both PATH and  
<br>
LD_RUN_PATH have the installation as first path).
<br>
I did try to  set -rpath to */lib and */lib/openmpi, and generally  
<br>
reduce the environment to a basic one, and use that in all the shells  
<br>
both when compiling and running, but to no avail.
<br>
The examples in the openmpi directory seem to work without problems.
<br>
I did manage to run the blacs tester, but in no reproducible way (I  
<br>
really don't know what I did to make it work and it stopped working  
<br>
really fast (the same binary)).
<br>
The same setup works in another machine (and I think BLACS flags are ok)
<br>
<p>I am getting really crazy, any pointer at what else I could try would  
<br>
be greatly appreciated.
<br>
<p>gcc (GCC) 4.1.2 20071124 (Red Hat 4.1.2-42)
<br>
G95 (GCC 4.0.3 (g95 0.92!) Jun 24 2009)
<br>
<p>thanks
<br>
Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11905.php">jody: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Previous message:</strong> <a href="11903.php">Terry Frankcombe: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11906.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Maybe reply:</strong> <a href="11906.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
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
