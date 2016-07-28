<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 02:58:45 2006" -->
<!-- isoreceived="20060104075845" -->
<!-- sent="Wed, 4 Jan 2006 08:58:26 +0100" -->
<!-- isosent="20060104075826" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="200601040858.35568.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.OSF.4.58.0601031835220.208730_at_gwdu70.gwdg.de" -->
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
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-04 02:58:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0467.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0465.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0467.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0467.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Carsten,
<br>
<p>Have you considered the possibility that this is the effect of a non-optimal 
<br>
ethernet switch? I don't know how many nodes you need to reproduce it on or 
<br>
if you even have physical access (and opportunity) but popping in another 
<br>
decent 16-port switch for a testrun might be interesting.
<br>
<p>just my .02 euros,
<br>
&nbsp;Peter 
<br>
<p>On Tuesday 03 January 2006 18:45, Carsten Kutzner wrote:
<br>
<span class="quotelev1">&gt; On Tue, 3 Jan 2006, Graham E Fagg wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Do you have any tools such as Vampir (or its Intel equivalent) available
</span><br>
<span class="quotelev2">&gt; &gt; to get a time line graph ? (even jumpshot of one of the bad cases such as
</span><br>
<span class="quotelev2">&gt; &gt; the 128/32 for 256 floats below would help).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Graham,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached an slog file of an all-to-all run for 1024 floats (ompi
</span><br>
<span class="quotelev1">&gt; tuned alltoall). I could not get clog files for &gt;32 processes - is this
</span><br>
<span class="quotelev1">&gt; perhaps a limitation of MPE? So I decided to take the case 32 CPUs on
</span><br>
<span class="quotelev1">&gt; 32 nodes which is performance-critical as well. From the run output you
</span><br>
<span class="quotelev1">&gt; can see that 2 of the 5 tries yield a fast execution while the others
</span><br>
<span class="quotelev1">&gt; are slow (see below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Carsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ckutzne_at_node001:~/mpe&gt; mpirun -hostfile ./bhost1 -np 32 ./phas_mpe.x
</span><br>
<span class="quotelev1">&gt; Alltoall Test on 32 CPUs. 5 repetitions.
</span><br>
<span class="quotelev1">&gt; --- New category (first test not counted) ---
</span><br>
<span class="quotelev1">&gt; MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1
</span><br>
<span class="quotelev1">&gt; times) took ...    0.00690 seconds
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1
</span><br>
<span class="quotelev1">&gt; times) took ...    0.00320 seconds MPI: sending    1024 floats (    4096
</span><br>
<span class="quotelev1">&gt; bytes) to 32 processes (      1 times) took ...    0.26392 seconds ! MPI:
</span><br>
<span class="quotelev1">&gt; sending    1024 floats (    4096 bytes) to 32 processes (      1 times)
</span><br>
<span class="quotelev1">&gt; took ...    0.26868 seconds ! MPI: sending    1024 floats (    4096 bytes)
</span><br>
<span class="quotelev1">&gt; to 32 processes (      1 times) took ...    0.26398 seconds ! MPI: sending 
</span><br>
<span class="quotelev1">&gt;   1024 floats (    4096 bytes) to 32 processes (      1 times) took ...   
</span><br>
<span class="quotelev1">&gt; 0.00339 seconds Summary (5-run average, timer resolution 0.000001):
</span><br>
<span class="quotelev1">&gt;       1024 floats took 0.160632 (0.143644) seconds. Min: 0.003200  max:
</span><br>
<span class="quotelev1">&gt; 0.268681 Writing logfile....
</span><br>
<span class="quotelev1">&gt; Finished writing logfile.
</span><br>
<p><pre>
-- 
------------------------------------------------------------
  Peter Kjellstr&#246;m               |
  National Supercomputer Centre  |
  Sweden                         | <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0466/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0467.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0465.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0467.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0467.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
