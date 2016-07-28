<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  3 13:57:12 2006" -->
<!-- isoreceived="20060103185712" -->
<!-- sent="Tue, 3 Jan 2006 12:57:05 -0600 (CST)" -->
<!-- isosent="20060103185705" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.LNX.4.58.0601031250400.4735_at_schwinn.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-03 13:57:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0466.php">Peter Kjellström: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0464.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0468.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0468.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 3 Jan 2006, Carsten Kutzner wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 3 Jan 2006, Graham E Fagg wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; perhaps a limitation of MPE?
</span><br>
<p>MPE/MPE2 logging (or clog/clog2) does not impose any limitation on the
<br>
number of processes.  Could you explain what difficulty or error
<br>
message you encountered when using &gt;32 processes ?
<br>
<p>BTW, the version of MPE that you are using seems old. You may want to
<br>
downaload the latest version of MPE from <a href="http://www.mcs.anl.gov/perfvis">http://www.mcs.anl.gov/perfvis</a>.
<br>
<p>A.Chan
<br>
<p><span class="quotelev1">&gt; So I decided to take the case 32 CPUs on
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
<span class="quotelev1">&gt; MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.00690 seconds
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.00320 seconds
</span><br>
<span class="quotelev1">&gt; MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.26392 seconds !
</span><br>
<span class="quotelev1">&gt; MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.26868 seconds !
</span><br>
<span class="quotelev1">&gt; MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.26398 seconds !
</span><br>
<span class="quotelev1">&gt; MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1 times) took ...    0.00339 seconds
</span><br>
<span class="quotelev1">&gt; Summary (5-run average, timer resolution 0.000001):
</span><br>
<span class="quotelev1">&gt;       1024 floats took 0.160632 (0.143644) seconds. Min: 0.003200  max: 0.268681
</span><br>
<span class="quotelev1">&gt; Writing logfile....
</span><br>
<span class="quotelev1">&gt; Finished writing logfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0466.php">Peter Kjellström: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0464.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0468.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0468.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
