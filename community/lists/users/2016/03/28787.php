<?
$subject_val = "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 06:40:18 2016" -->
<!-- isoreceived="20160322104018" -->
<!-- sent="Tue, 22 Mar 2016 11:40:00 +0100" -->
<!-- isosent="20160322104000" -->
<!-- name="Rainer Koenig" -->
<!-- email="Rainer.Koenig_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine" -->
<!-- id="56F12100.4030200_at_ts.fujitsu.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3017814D-FF3A-4379-9EF2-69D011CBC411_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine<br>
<strong>From:</strong> Rainer Koenig (<em>Rainer.Koenig_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-22 06:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28788.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Previous message:</strong> <a href="28786.php">Sreenidhi Bharathkar Ramesh: "[OMPI users] ARMv8 support"</a>
<li><strong>In reply to:</strong> <a href="28724.php">Ralph Castain: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28788.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28788.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 17.03.2016 um 10:40 schrieb Ralph Castain:
<br>
<span class="quotelev1">&gt; Just some thoughts offhand:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * what version of OMPI are you using?
</span><br>
<p>dpkg -l openmpi-bin says 1.6.5-8 from Ubuntu 14.04.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * are you saying that after the warm reboot, all 48 procs are running on a subset of cores?
</span><br>
<p>Yes. After a cold boot all 48 processses are spread over all 48 cores
<br>
and all cores show up as almost 100% in the htop cpu meter.
<br>
<p>After a warm boot, the 48 processes are just spread over a few cores and
<br>
the rest of the system is idling.
<br>
<p><span class="quotelev1">&gt; * it sounds like some of the cores have been marked as &#226;&#128;&#156;offline&#226;&#128;&#157; for some reason. Make sure you have hwloc installed on the machine, and run &#226;&#128;&#156;lstopo&#226;&#128;&#157; and see if that is the case
</span><br>
<p>I tried with lstopo, but the graphics that I got look almost similar.
<br>
The visible difference is in the sort of topology for the graphics
<br>
adapter and the LAN cards. The path to the graphics shows 2 times the
<br>
numbers 4,0 above the lines and the path to the eth0 shows 2 times the
<br>
numbers 0,2 above the lines. lstopo for the warm boot looks identical,
<br>
but those small numbers are missing now.
<br>
<p>I also tried with hwloc-gather-topology and diff'd the 2 results. There
<br>
is nothing special to see. Differneces in /proc/stats/ and
<br>
/proc/cpuinfo, but nothing special, just ohter values.
<br>
<p>Something is obviously wrong on a low level, but I'm still struggling to
<br>
find it. :-/
<br>
<p>Rainer
<br>
<pre>
-- 
Dipl.-Inf. (FH) Rainer Koenig
Project Manager Linux Clients
Dept. PDG WPS R&amp;D SW OSE
Fujitsu Technology Solutions
B&#195;&#188;rgermeister-Ullrich-Str. 100
86199 Augsburg
Germany
Telephone: +49-821-804-3321
Telefax:   +49-821-804-2131
Mail:      mailto:Rainer.Koenig_at_[hidden]
Internet         ts.fujtsu.com
Company Details  ts.fujitsu.com/imprint.html
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28788.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Previous message:</strong> <a href="28786.php">Sreenidhi Bharathkar Ramesh: "[OMPI users] ARMv8 support"</a>
<li><strong>In reply to:</strong> <a href="28724.php">Ralph Castain: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28788.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28788.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
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
