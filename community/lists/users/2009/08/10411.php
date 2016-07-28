<?
$subject_val = "Re: [OMPI users] very bad parallel scaling of vasp using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 13:34:15 2009" -->
<!-- isoreceived="20090818173415" -->
<!-- sent="Tue, 18 Aug 2009 13:34:04 -0400" -->
<!-- isosent="20090818173404" -->
<!-- name="Craig Plaisance" -->
<!-- email="cpp6f_at_[hidden]" -->
<!-- subject="Re: [OMPI users] very bad parallel scaling of vasp using openmpi" -->
<!-- id="4A8AE60C.608_at_virginia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] very bad parallel scaling of vasp using openmpi" -->
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
<strong>Subject:</strong> Re: [OMPI users] very bad parallel scaling of vasp using openmpi<br>
<strong>From:</strong> Craig Plaisance (<em>cpp6f_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 13:34:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10412.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10410.php">Jean Potsam: "[OMPI users] OPEN MPI with self"</a>
<li><strong>Maybe in reply to:</strong> <a href="10394.php">Craig Plaisance: "[OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10412.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Reply:</strong> <a href="10412.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Reply:</strong> <a href="10426.php">Gus Correa: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran a test of tcp using NetPIPE and got throughput of 850 Mb/s at 
<br>
message sizes of 128 Kb.  The latency was 50 us.  At message sizes above 
<br>
1000 Kb, the throughput oscillated wildly between 850 Mb/s and values as 
<br>
low as 200 Mb/s.  This test was done with no other network traffic.  I 
<br>
then ran four tests simultaneously between different pairs of compute 
<br>
nodes and saw a drastic decrease in performance.  The highest stable 
<br>
(non-oscillating) throughput was about 500 Mb/s at a message size of 16 
<br>
Kb.  The throughput then oscillated wildly, with the maximum value 
<br>
climbing to 850 Mb/s at a message size greater than 128 Kb and dropping 
<br>
to values as low as 100 Mb/s.  The code I am using (VASP) has 100 to 
<br>
1000 double complex (16 byte) arrays containing 100,000 to 1,000,000 
<br>
elements each.  Typically, the arrays are distributed among the nodes.  
<br>
The most communication intensive part involves executing an MPI_alltoall 
<br>
to redistribute the arrays so that node i contains the ith block of each 
<br>
array.  The default message size is 1000 elements (128 Kb), so according 
<br>
to the NetPIPE test, I should be getting very good throughput when there 
<br>
is no other network traffic.  I will run a NetPIPE test with openmpi and 
<br>
mpich2 now and post the results.  So, does anyone know what causes the 
<br>
wild oscillations in the throughput at larger message sizes and higher 
<br>
network traffic?  Thanks!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10412.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10410.php">Jean Potsam: "[OMPI users] OPEN MPI with self"</a>
<li><strong>Maybe in reply to:</strong> <a href="10394.php">Craig Plaisance: "[OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10412.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Reply:</strong> <a href="10412.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Reply:</strong> <a href="10426.php">Gus Correa: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
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
