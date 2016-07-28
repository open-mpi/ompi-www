<?
$subject_val = "[OMPI users] IO performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 13:46:20 2012" -->
<!-- isoreceived="20120203184620" -->
<!-- sent="Fri, 03 Feb 2012 10:46:21 -0800" -->
<!-- isosent="20120203184621" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] IO performance" -->
<!-- id="1328294781.4280.32.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] IO performance<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 13:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18388.php">Mateus Augusto: "[OMPI users] How to join intercommunicators?"</a>
<li><strong>Previous message:</strong> <a href="18386.php">James Torossian: "[OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18392.php">John Hearns: "Re: [OMPI users] IO performance"</a>
<li><strong>Reply:</strong> <a href="18392.php">John Hearns: "Re: [OMPI users] IO performance"</a>
<li><strong>Reply:</strong> <a href="18394.php">Joe Landman: "Re: [OMPI users] IO performance"</a>
<li><strong>Reply:</strong> <a href="18403.php">Rob Latham: "Re: [OMPI users] IO performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Recently the organization I work for bought a modest sized Linux cluster
<br>
for running large atmospheric data assimilation systems.  In my
<br>
experience a glaring problem with systems of this kind is poor IO
<br>
performance.  Typically they have 2 types of network: 1) A high speed,
<br>
low latency, e.g. Infiniband, network dedicated to MPI communications,
<br>
and, 2) A lower speed network, e.g 1Gb or 10Gb ethernet, for IO.  On
<br>
clusters this second network is usually the basis for a global parallel
<br>
file system (GPFS), through which nearly all IO traffic must pass.  So
<br>
the IO performance of applications such as ours is completely dependent
<br>
on the speed of the GPFS, and therefore on the network hardware it uses.
<br>
<p>We have seen that a cluster with a GPFS based on a 1Gb network is
<br>
painfully slow for our applications, and of course with a 10Gb network
<br>
is much better.  Therefore we are making the case to the IT staff that
<br>
all our systems should have GPFS running on 10Gb networks.  Some of them
<br>
have a hard time accepting this, since they don't really understand the
<br>
requirements of our applications.
<br>
<p>With all of this, here is my MPI related question.  I recently added an
<br>
option to use MPI-IO to do the heavy IO lifting in our applications.  I
<br>
would like to know what the relative importance of the dedicated MPI
<br>
network vis-a-vis the GPFS network for typical MPIIO collective reads
<br>
and writes.  I assume there must be some hand-off of data between the
<br>
networks during the process, but how is it done, and are there any rules
<br>
to help understand it.  Any insights would be welcome.
<br>
<p>T. Rosmond
<br>
<p>P.S.  I am running with Open-mpi 1.4.2.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18388.php">Mateus Augusto: "[OMPI users] How to join intercommunicators?"</a>
<li><strong>Previous message:</strong> <a href="18386.php">James Torossian: "[OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18392.php">John Hearns: "Re: [OMPI users] IO performance"</a>
<li><strong>Reply:</strong> <a href="18392.php">John Hearns: "Re: [OMPI users] IO performance"</a>
<li><strong>Reply:</strong> <a href="18394.php">Joe Landman: "Re: [OMPI users] IO performance"</a>
<li><strong>Reply:</strong> <a href="18403.php">Rob Latham: "Re: [OMPI users] IO performance"</a>
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
