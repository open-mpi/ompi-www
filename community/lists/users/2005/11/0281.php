<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  4 18:46:32 2005" -->
<!-- isoreceived="20051104234632" -->
<!-- sent="Fri, 04 Nov 2005 16:45:59 -0700" -->
<!-- isosent="20051104234559" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[O-MPI users] OpenMPI Scaling on mvapi interface:" -->
<!-- id="op.szqpmx2pies9li_at_rygel.lnxi.com" -->
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
<strong>Date:</strong> 2005-11-04 18:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0282.php">Troy Telford: "Re: [O-MPI users] OpenMPI Scaling on mvapi interface:"</a>
<li><strong>Previous message:</strong> <a href="0280.php">Charles Williams: "[O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0282.php">Troy Telford: "Re: [O-MPI users] OpenMPI Scaling on mvapi interface:"</a>
<li><strong>Reply:</strong> <a href="0282.php">Troy Telford: "Re: [O-MPI users] OpenMPI Scaling on mvapi interface:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Using svn 'trunk' revision 7927 of OpenMPI):
<br>
<p>I've found an interesting issue with OpenMPI and the mvapi btl mca:  Most  
<br>
of the benchmarks I've tried (HPL, HPCC, Presta, IMB), do not seem to run  
<br>
properly when the number of processes is sufficiently large (the barrier  
<br>
seems to be at 65 processes in any case; more than 65 and things seem to  
<br>
get stuck):
<br>
<p>IMB:		Wedges itself before finishing its first test (PingPong, 0 bytes, 2  
<br>
processes).  Even when the number of processes is small enough to run, it  
<br>
may not finish (error message in attatchment).
<br>
HPCC:		Wedges itself after starting the PTRANS section of the benchmark  
<br>
(but before obtaining any results).
<br>
HPL:		Behaves similarly to IMB and HPCC; doesn't even finish the smallest  
<br>
of problem sizes.
<br>
<p>Presta:	the 'com' test almost completes; it only fails when matching rank  
<br>
id pairs (and only then with number of processes greater than 65)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the 'allred' test behaves like IMB, HPCC, and HPL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the 'laten' test partially works (misbehavior is similar to 'com')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the 'globalop' test was a dog on 4 nodes (some odd 360 times slower on  
<br>
mvapi than on mx); it'll take a while to verify whether it tickles the  
<br>
65-process issue or not.
<br>
<p>Note:  The cluster I am testing it on is of Dual-Opteron nodes; for  
<br>
purposes of comparision, I modified the machines file to start one process  
<br>
per node (total of 50 nodes).  This ran with no complications.  So the  
<br>
problem seems to be related to the process count, and not the node count.
<br>
<p>Note part zwei:  the config.log is for a slightly newer version of openMPI  
<br>
(7998; the difference to the trunk is about 4-5 files; none of them having  
<br>
to do with mvapi.  I really need to start reaping the config.log before  
<br>
blasting it into oblivion.)
<br>
<p>Unfortunately, I don't have enough myrinet hardware to test any more than  
<br>
4 nodes with GM or MX; sorry.
<br>

<br><p>
<p><hr>
<ul>
<li>application/bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0281/results.tar.bz2">results.tar.bz2</a>
</ul>
<!-- attachment="results.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0282.php">Troy Telford: "Re: [O-MPI users] OpenMPI Scaling on mvapi interface:"</a>
<li><strong>Previous message:</strong> <a href="0280.php">Charles Williams: "[O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0282.php">Troy Telford: "Re: [O-MPI users] OpenMPI Scaling on mvapi interface:"</a>
<li><strong>Reply:</strong> <a href="0282.php">Troy Telford: "Re: [O-MPI users] OpenMPI Scaling on mvapi interface:"</a>
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
