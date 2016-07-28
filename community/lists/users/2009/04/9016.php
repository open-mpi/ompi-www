<?
$subject_val = "[OMPI users] 100% CPU doing nothing!?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 22:20:05 2009" -->
<!-- isoreceived="20090422022005" -->
<!-- sent="Tue, 21 Apr 2009 19:19:53 -0700" -->
<!-- isosent="20090422021953" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="[OMPI users] 100% CPU doing nothing!?" -->
<!-- id="1240366793.9395.91.camel_at_corn.betterworld.us" -->
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
<strong>Subject:</strong> [OMPI users] 100% CPU doing nothing!?<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 22:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9017.php">Terry Frankcombe: "Re: [OMPI users] 100% CPU doing nothing!?"</a>
<li><strong>Previous message:</strong> <a href="9015.php">Jeff Squyres: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL willthe	connected processes use?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9017.php">Terry Frankcombe: "Re: [OMPI users] 100% CPU doing nothing!?"</a>
<li><strong>Reply:</strong> <a href="9017.php">Terry Frankcombe: "Re: [OMPI users] 100% CPU doing nothing!?"</a>
<li><strong>Reply:</strong> <a href="9024.php">Douglas Guptill: "[OMPI users]  100% CPU doing nothing!?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using Rmpi (a pretty thin wrapper around MPI for R) on Debian Lenny
<br>
(amd64).  My set up has a central calculator and a bunch of slaves to
<br>
wich work is distributed.
<br>
<p>The slaves wait like this:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi.send(as.double(0), doubleType, root, requestCode, comm=comm)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request &lt;- request+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cases &lt;- mpi.recv(cases, integerType, root, mpi.any.tag(),
<br>
comm=comm)
<br>
<p>I.e., they do a simple send and then a receive.
<br>
<p>It's possible there's no one to talk to, so it could be stuck at
<br>
mpi.send or mpi.recv.
<br>
<p>Are either of those operations that should chew up CPU?  At this point,
<br>
I'm just trying to figure out where to look for the source of the
<br>
problem.
<br>
<p>Running openmpi-bin 1.2.7~rc2-2
<br>
<p>Ross
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9017.php">Terry Frankcombe: "Re: [OMPI users] 100% CPU doing nothing!?"</a>
<li><strong>Previous message:</strong> <a href="9015.php">Jeff Squyres: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL willthe	connected processes use?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9017.php">Terry Frankcombe: "Re: [OMPI users] 100% CPU doing nothing!?"</a>
<li><strong>Reply:</strong> <a href="9017.php">Terry Frankcombe: "Re: [OMPI users] 100% CPU doing nothing!?"</a>
<li><strong>Reply:</strong> <a href="9024.php">Douglas Guptill: "[OMPI users]  100% CPU doing nothing!?"</a>
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
