<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 04:42:46 2006" -->
<!-- isoreceived="20060104094246" -->
<!-- sent="Wed, 4 Jan 2006 10:42:44 +0100 (MET)" -->
<!-- isosent="20060104094244" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.OSF.4.58.0601041023590.243404_at_gwdu70.gwdg.de" -->
<!-- charset="X-UNKNOWN" -->
<!-- inreplyto="200601040858.35568.cap_at_nsc.liu.se" -->
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
<strong>Date:</strong> 2006-01-04 04:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0468.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0466.php">Peter Kjellstr&#246;m: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0466.php">Peter Kjellstr&#246;m: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0469.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Peter,
<br>
<p>We have HP ProCurve 2848 GigE switches here (48 port). The problem is more
<br>
severe the more nodes (=ports) are involved. It starts to show up at 16
<br>
ports for a limited range of message sizes and gets really bad for 32
<br>
nodes. The switch has a 96 Gbit/s backplane and should therefore be
<br>
able to forward the in and out traffic of all 48 ports simultaneously, as
<br>
long as not two nodes send to one receiver. The ordered communication pattern
<br>
takes care about the latter (e.g. having only pairs communicate at the
<br>
same time). Maybe the switch gets problems when switching from one pair to
<br>
another? I will try if I can get another switch for testing.
<br>
<p>Thanks!
<br>
&nbsp;&nbsp;Carsten
<br>
<p><p><p>On Wed, 4 Jan 2006, Peter [iso-8859-1] Kjellstr&#246;m wrote:
<br>
<p><span class="quotelev1">&gt; Hello Carsten,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you considered the possibility that this is the effect of a non-optimal
</span><br>
<span class="quotelev1">&gt; ethernet switch? I don't know how many nodes you need to reproduce it on or
</span><br>
<span class="quotelev1">&gt; if you even have physical access (and opportunity) but popping in another
</span><br>
<span class="quotelev1">&gt; decent 16-port switch for a testrun might be interesting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just my .02 euros,
</span><br>
<span class="quotelev1">&gt;  Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 03 January 2006 18:45, Carsten Kutzner wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 3 Jan 2006, Graham E Fagg wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you have any tools such as Vampir (or its Intel equivalent) available
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to get a time line graph ? (even jumpshot of one of the bad cases such as
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the 128/32 for 256 floats below would help).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Graham,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have attached an slog file of an all-to-all run for 1024 floats (ompi
</span><br>
<span class="quotelev2">&gt; &gt; tuned alltoall). I could not get clog files for &gt;32 processes - is this
</span><br>
<span class="quotelev2">&gt; &gt; perhaps a limitation of MPE? So I decided to take the case 32 CPUs on
</span><br>
<span class="quotelev2">&gt; &gt; 32 nodes which is performance-critical as well. From the run output you
</span><br>
<span class="quotelev2">&gt; &gt; can see that 2 of the 5 tries yield a fast execution while the others
</span><br>
<span class="quotelev2">&gt; &gt; are slow (see below).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Carsten
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ckutzne_at_node001:~/mpe&gt; mpirun -hostfile ./bhost1 -np 32 ./phas_mpe.x
</span><br>
<span class="quotelev2">&gt; &gt; Alltoall Test on 32 CPUs. 5 repetitions.
</span><br>
<span class="quotelev2">&gt; &gt; --- New category (first test not counted) ---
</span><br>
<span class="quotelev2">&gt; &gt; MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1
</span><br>
<span class="quotelev2">&gt; &gt; times) took ...    0.00690 seconds
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; MPI: sending    1024 floats (    4096 bytes) to 32 processes (      1
</span><br>
<span class="quotelev2">&gt; &gt; times) took ...    0.00320 seconds MPI: sending    1024 floats (    4096
</span><br>
<span class="quotelev2">&gt; &gt; bytes) to 32 processes (      1 times) took ...    0.26392 seconds ! MPI:
</span><br>
<span class="quotelev2">&gt; &gt; sending    1024 floats (    4096 bytes) to 32 processes (      1 times)
</span><br>
<span class="quotelev2">&gt; &gt; took ...    0.26868 seconds ! MPI: sending    1024 floats (    4096 bytes)
</span><br>
<span class="quotelev2">&gt; &gt; to 32 processes (      1 times) took ...    0.26398 seconds ! MPI: sending
</span><br>
<span class="quotelev2">&gt; &gt;   1024 floats (    4096 bytes) to 32 processes (      1 times) took ...
</span><br>
<span class="quotelev2">&gt; &gt; 0.00339 seconds Summary (5-run average, timer resolution 0.000001):
</span><br>
<span class="quotelev2">&gt; &gt;       1024 floats took 0.160632 (0.143644) seconds. Min: 0.003200  max:
</span><br>
<span class="quotelev2">&gt; &gt; 0.268681 Writing logfile....
</span><br>
<span class="quotelev2">&gt; &gt; Finished writing logfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   Peter Kjellstr&#246;m               |
</span><br>
<span class="quotelev1">&gt;   National Supercomputer Centre  |
</span><br>
<span class="quotelev1">&gt;   Sweden                         | <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>---------------------------------------------------
<br>
Dr. Carsten Kutzner
<br>
Max Planck Institute for Biophysical Chemistry
<br>
Theoretical and Computational Biophysics Department
<br>
Am Fassberg 11
<br>
37077 Goettingen, Germany
<br>
Tel. +49-551-2012313, Fax: +49-551-2012302
<br>
eMail ckutzne_at_[hidden]
<br>
<a href="http://www.gwdg.de/~ckutzne">http://www.gwdg.de/~ckutzne</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0468.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0466.php">Peter Kjellstr&#246;m: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0466.php">Peter Kjellstr&#246;m: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0469.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
