<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  3 12:45:32 2006" -->
<!-- isoreceived="20060103174532" -->
<!-- sent="Tue, 3 Jan 2006 18:45:25 +0100 (MET)" -->
<!-- isosent="20060103174525" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.OSF.4.58.0601031835220.208730_at_gwdu70.gwdg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.62.0601030914000.24586_at_enterprise" -->
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
<strong>From:</strong> Carsten Kutzner (<em>ckutzne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-03 12:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0464.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="0462.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>In reply to:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0465.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0465.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0466.php">Peter Kjellström: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 3 Jan 2006, Graham E Fagg wrote:
<br>
<p><span class="quotelev1">&gt; Do you have any tools such as Vampir (or its Intel equivalent) available
</span><br>
<span class="quotelev1">&gt; to get a time line graph ? (even jumpshot of one of the bad cases such as
</span><br>
<span class="quotelev1">&gt; the 128/32 for 256 floats below would help).
</span><br>
<p>Hi Graham,
<br>
<p>I have attached an slog file of an all-to-all run for 1024 floats (ompi
<br>
tuned alltoall). I could not get clog files for &gt;32 processes - is this
<br>
perhaps a limitation of MPE? So I decided to take the case 32 CPUs on
<br>
32 nodes which is performance-critical as well. From the run output you
<br>
can see that 2 of the 5 tries yield a fast execution while the others
<br>
are slow (see below).
<br>
<p>Carsten
<br>
<p><p><p>ckutzne_at_node001:~/mpe&gt; mpirun -hostfile ./bhost1 -np 32 ./phas_mpe.x
<br>
Alltoall Test on 32 CPUs. 5 repetitions.
<br>
--- New category (first test not counted) ---
<br>
MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.00690 seconds
<br>
---------------------------------------------
<br>
MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.00320 seconds
<br>
MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.26392 seconds !
<br>
MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.26868 seconds !
<br>
MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.26398 seconds !
<br>
MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.00339 seconds
<br>
Summary (5-run average, timer resolution 0.000001):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024 floats took 0.160632 (0.143644) seconds. Min: 0.003200  max: 0.268681
<br>
Writing logfile....
<br>
Finished writing logfile.
<br>
<p><p>
<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0463/phas_mpe.x.slog2">phas_mpe.x.slog2</a>
</ul>
<!-- attachment="phas_mpe.x.slog2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0464.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="0462.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>In reply to:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0465.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0465.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0466.php">Peter Kjellström: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
