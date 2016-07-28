<?
$subject_val = "[OMPI users] Pathscale compiler and C++ bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 16:49:53 2008" -->
<!-- isoreceived="20080731204953" -->
<!-- sent="Thu, 31 Jul 2008 13:49:38 -0700" -->
<!-- isosent="20080731204938" -->
<!-- name="Scott Beardsley" -->
<!-- email="scott_at_[hidden]" -->
<!-- subject="[OMPI users] Pathscale compiler and C++ bindings" -->
<!-- id="48922562.2090200_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> [OMPI users] Pathscale compiler and C++ bindings<br>
<strong>From:</strong> Scott Beardsley (<em>scott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 16:49:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6243.php">Jeff Squyres: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="6241.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6243.php">Jeff Squyres: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Reply:</strong> <a href="6243.php">Jeff Squyres: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I saw your comment regarding Pathscale compiled OMPI and thought I'd 
<br>
bring discussion over here. I'm attempting to reproduce the bug 
<br>
described in ticket 1326[1]. Using 1.2.6 (plus the MPI_CART_GET patch) 
<br>
with the 3.2 compiler. I'm using a hello++.cc actually written by Jeff 
<br>
and co.
<br>
<p>It seems to run OK for me...
<br>
<p>$ mpiCC -showme
<br>
pathCC -I/share/apps/openmpi-1.2.6/pathscale-3.2/include -pthread 
<br>
-L/share/apps/openmpi-1.2.6/pathscale-3.2/lib64 -lmpi_cxx -lmpi 
<br>
-lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
$ mpiCC -Wno-deprecated -o hello++ hello++.cc
<br>
$ ./hello++
<br>
Hello World! I am 0 of 1
<br>
$
<br>
<p>Perhaps I'm doing something that you aren't? The bug doesn't mention 
<br>
only happening under certain circumstances.
<br>
<p>Scott
<br>
-------
<br>
[1] <a href="https://svn.open-mpi.org/trac/ompi/ticket/1326">https://svn.open-mpi.org/trac/ompi/ticket/1326</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6243.php">Jeff Squyres: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="6241.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6243.php">Jeff Squyres: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Reply:</strong> <a href="6243.php">Jeff Squyres: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
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
