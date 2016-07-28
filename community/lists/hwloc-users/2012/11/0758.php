<?
$subject_val = "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 16:22:35 2012" -->
<!-- isoreceived="20121102202235" -->
<!-- sent="Fri, 02 Nov 2012 21:22:29 +0100" -->
<!-- isosent="20121102202229" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups" -->
<!-- id="50942B85.9010409_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="703325E2-5FC4-454F-B3B6-8881C52DF132_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 16:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0759.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Previous message:</strong> <a href="0757.php">Brock Palen: "[hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>In reply to:</strong> <a href="0757.php">Brock Palen: "[hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0759.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Reply:</strong> <a href="0759.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 02/11/2012 21:03, Brock Palen a &#233;crit :
<br>
<span class="quotelev1">&gt; This isn't a hwloc problem exactly, but maybe you can shed some insight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have some 4 socket 10 core = 40 core nodes, HT off:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; depth 0:	1 Machine (type #1)
</span><br>
<span class="quotelev1">&gt;  depth 1:	4 NUMANodes (type #2)
</span><br>
<span class="quotelev1">&gt;   depth 2:	4 Sockets (type #3)
</span><br>
<span class="quotelev1">&gt;    depth 3:	4 Caches (type #4)
</span><br>
<span class="quotelev1">&gt;     depth 4:	40 Caches (type #4)
</span><br>
<span class="quotelev1">&gt;      depth 5:	40 Caches (type #4)
</span><br>
<span class="quotelev1">&gt;       depth 6:	40 Cores (type #5)
</span><br>
<span class="quotelev1">&gt;        depth 7:	40 PUs (type #6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We run rhel 6.3  we use torque to create cgroups for jobs.  I get the following cgroup for this job  all 12 cores for the job are on one node:
</span><br>
<span class="quotelev1">&gt; cat /dev/cpuset/torque/8845236.nyx.engin.umich.edu/cpus 
</span><br>
<span class="quotelev1">&gt; 0-1,4-5,8,12,16,20,24,28,32,36
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not all nicely spaced, but 12 cores
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then start a code, even a simple serial code with openmpi 1.6.0 on all 12 cores:
</span><br>
<span class="quotelev1">&gt; mpirun ./stream
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 45521 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   4:02.72 stream             
</span><br>
<span class="quotelev1">&gt; 45522 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   1:46.08 stream             
</span><br>
<span class="quotelev1">&gt; 45525 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   4:02.72 stream             
</span><br>
<span class="quotelev1">&gt; 45526 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   1:46.07 stream             
</span><br>
<span class="quotelev1">&gt; 45527 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   4:02.71 stream             
</span><br>
<span class="quotelev1">&gt; 45528 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   4:02.71 stream             
</span><br>
<span class="quotelev1">&gt; 45532 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   1:46.05 stream             
</span><br>
<span class="quotelev1">&gt; 45529 brockp    20   0 1885m 1.8g  456 R 99.2  0.2   4:02.70 stream              
</span><br>
<span class="quotelev1">&gt; 45530 brockp    20   0 1885m 1.8g  456 R 99.2  0.2   4:02.70 stream              
</span><br>
<span class="quotelev1">&gt; 45531 brockp    20   0 1885m 1.8g  456 R 33.6  0.2   1:20.89 stream              
</span><br>
<span class="quotelev1">&gt; 45523 brockp    20   0 1885m 1.8g  456 R 32.8  0.2   1:20.90 stream              
</span><br>
<span class="quotelev1">&gt; 45524 brockp    20   0 1885m 1.8g  456 R 32.8  0.2   1:20.89 stream   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note the processes that are not running at 100% cpu, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-bind  --get --pid 45523
</span><br>
<span class="quotelev1">&gt; 0x00000011,0x11111133
</span><br>
<span class="quotelev1">&gt; &lt;the same mask is reported for all 12 processes&gt;
</span><br>
<p>Hello Brock,
<br>
<p>I don't see any helpful to answer here :/
<br>
<p>Do you know which core is overloaded and which (two?) cores are idle?
<br>
Does that change during one run or from one run to another?
<br>
Pressing 1 in top should give that information in the very first lines.
<br>
Then, you can try to binding another process to one of the idle cores,
<br>
to see if the kernel accepts that.
<br>
<p>You can also press &quot;f&quot; and &quot;j&quot; (or &quot;f&quot; and use arrows and space to
<br>
select &quot;last used cpu&quot;) to add a &quot;P&quot; line which tells you the last CPU
<br>
used by each process.
<br>
hwloc-bind --get-last-cpu-location --pid &lt;pid&gt; should give the same info
<br>
but it seems broken on my machine right now, going to debug.
<br>
<p>One thing to check would be to run more than 12 cores and check where
<br>
the kernel puts them. If it keeps ignoring two cores, that would be funny :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0759.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Previous message:</strong> <a href="0757.php">Brock Palen: "[hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>In reply to:</strong> <a href="0757.php">Brock Palen: "[hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0759.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Reply:</strong> <a href="0759.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
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
