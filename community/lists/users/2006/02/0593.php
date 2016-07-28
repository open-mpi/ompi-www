<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  7 10:22:39 2006" -->
<!-- isoreceived="20060207152239" -->
<!-- sent="Tue, 7 Feb 2006 16:21:04 +0100" -->
<!-- isosent="20060207152104" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun with make" -->
<!-- id="200602071621.05042.Keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="43E897BD.7060304_at_ecofinance.com" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-07 10:21:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0594.php">Konstantin Kudin: "[O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<li><strong>Previous message:</strong> <a href="0592.php">Brian Barrett: "Re: [O-MPI users] OpenMPI and Xgrid"</a>
<li><strong>In reply to:</strong> <a href="0590.php">Andreas Fladischer: "[O-MPI users] mpirun with make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0594.php">Konstantin Kudin: "[O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<li><strong>Reply:</strong> <a href="0594.php">Konstantin Kudin: "[O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello dear Andreas,
<br>
On Tuesday 07 February 2006 13:51, Andreas Fladischer wrote:
<br>
<span class="quotelev1">&gt; i have a question to the parallel mpirun!i have a small cluster (for
</span><br>
<span class="quotelev1">&gt; testing purpose one headnode and one node) which running fedora core 3!
</span><br>
<span class="quotelev1">&gt; i installed openmpi on both nodes and created a user with the same uid
</span><br>
<span class="quotelev1">&gt; on both nodes; now i try to build the glibc tools from the headnode but
</span><br>
<span class="quotelev1">&gt; there couldn't be a connection to the second node;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; time mpirun -np 2 --hostfile /mnt/wolf/lamhosts make
</span><br>
You don't really want to run a parallel make on a distributed set of computers 
<br>
using MPI.
<br>
<p>There is a Distributed Make for fast parallel building of large projects, but 
<br>
they analyse the Makefile and distribute directories to be compiled 
<br>
concurrently.
<br>
Your standard &quot;make&quot; doesn't do that, so You'd run in all kinds of troubles 
<br>
(e.g. each make writes the same output object files on Your NFS-shared 
<br>
directory to name the least).
<br>
<p>If, however, Your MPI-parallel Program (featuring at least an MPI_Init and 
<br>
MPI_Finalize) is not running, then we have a case...
<br>
(hint: You must be able to at least log in to Your node (ssh or rsh), without 
<br>
having to enter the password).
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
  High Performance Computing     Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)        Fax: ++49 (0)711-685 5832
  POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  ACTUAL:Allmandring 30, R. O.030      AIM:rusraink
  70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0594.php">Konstantin Kudin: "[O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<li><strong>Previous message:</strong> <a href="0592.php">Brian Barrett: "Re: [O-MPI users] OpenMPI and Xgrid"</a>
<li><strong>In reply to:</strong> <a href="0590.php">Andreas Fladischer: "[O-MPI users] mpirun with make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0594.php">Konstantin Kudin: "[O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<li><strong>Reply:</strong> <a href="0594.php">Konstantin Kudin: "[O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
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
