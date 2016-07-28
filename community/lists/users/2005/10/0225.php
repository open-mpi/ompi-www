<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 18:04:21 2005" -->
<!-- isoreceived="20051021230421" -->
<!-- sent="Fri, 21 Oct 2005 17:03:56 -0600" -->
<!-- isosent="20051021230356" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[O-MPI users] HPL &amp;amp; HPCC: Wedged" -->
<!-- id="op.sy0qcunyies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 18:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0226.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0224.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0231.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Reply:</strong> <a href="0231.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been trying out the RC4 builds of OpenMPI; I've been using Myrinet  
<br>
(gm), Infiniband (mvapi), and TCP.
<br>
<p>When running a benchmark such as IMB (formerly PALLAS, IIRC), or even a  
<br>
simple hello world, there are no problems.
<br>
<p>However, when running HPL (and HPCC, which is a superset of HPL), I have  
<br>
run into a problem:  When running HPL (or when the execution reaches the  
<br>
HPL portion of HPCC), the process seems to get wedged...
<br>
<p>I have no problems compiling and building HPL and HPCC for MPICH variants  
<br>
( including MVAPICH, MPICH-GM/MX) and LAM; no problems with the gcc,  
<br>
Intel, PGI, or Pathscale compilers.
<br>
<p>The HPL.dat (and hpccinf.txt) can be identical across the machines.  The  
<br>
machines are identically configured (except for the interconnect).
<br>
<p>However, when running the HPL code (on OpenMPI), HPL will peg the CPUs,  
<br>
and run until I feel like killing it..  If the 'N' size is larger than a  
<br>
fraction of a percent of free system memory (0.1% of free memory; system  
<br>
has 2 GB/CPU, in my case), HPL and HPCC will not finish computing that  
<br>
problem size.  (Case in point -- a N size that is small enough that it  
<br>
takes 1-2 seconds with MPICH, MPICH-GM, MVAPICH, or LAM -- doesn't  
<br>
complete after several minutes on OpenMPI)
<br>
<p>I'm therefore, somewhat confused; I've seen posts from people who claim to  
<br>
have run HPL with OpenMPI.  I've had no issues running other benchmarks on  
<br>
OpenMPI; but HPL-based code seems to wedge itself...  The behavior is  
<br>
consistent when I use Myrinet, Infiniband, or Ethernet.
<br>
<p>I am running OpenMPI on Linux (SuSE Enterprise 9, SP2, x86_64).
<br>
Dual-Opteron 248; 2 GB/CPU
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0226.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0224.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0231.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Reply:</strong> <a href="0231.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
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
