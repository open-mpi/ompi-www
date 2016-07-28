<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 13:08:35 2006" -->
<!-- isoreceived="20061128180835" -->
<!-- sent="Tue, 28 Nov 2006 13:08:05 -0500" -->
<!-- isosent="20061128180805" -->
<!-- name="Tony Ladd" -->
<!-- email="ladd_at_[hidden]" -->
<!-- subject="[OMPI users] Parallel application performance tests" -->
<!-- id="011c01c71318$269573a0$656ce30a_at_ladd02" -->
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
<strong>From:</strong> Tony Ladd (<em>ladd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-28 13:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2234.php">George Bosilca: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have recently completed a number of performance tests on a Beowulf
<br>
cluster, using up to 48 dual-core P4D nodes, connected by an Extreme
<br>
Networks Gigabit edge switch. The tests consist of single and multi-node
<br>
application benchmarks, including DLPOLY, GROMACS, and VASP, as well as
<br>
specific tests of network cards and switches. I used TCP sockets with
<br>
OpenMPI v1.2 and MPI/GAMMA over Gigabit ethernet. MPI/GAMMA leads to
<br>
significantly better scaling than OpenMPI/TCP in both network tests and in
<br>
application benchmarks. The overall performance of the MPI/GAMMA cluster on
<br>
a per cpu basis was found to be comparable to a dual-core Opteron cluster
<br>
with an Infiniband interconnect. The DLPoly benchmark showed similar scaling
<br>
to those reported for an IBM p690. The performance using TCP was typically a
<br>
factor of 2 less in these same tests. A detailed write up can be found at:
<br>
<a href="http://ladd.che.ufl.edu/research/beoclus/beoclus.htm">http://ladd.che.ufl.edu/research/beoclus/beoclus.htm</a>
<br>
<p>Tony Ladd
<br>
Chemical Engineering
<br>
University of Florida
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2234.php">George Bosilca: "Re: [OMPI users] myirnet problems on OSX"</a>
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
