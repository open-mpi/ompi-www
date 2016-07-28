<?
$subject_val = "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 16:57:29 2012" -->
<!-- isoreceived="20121105215729" -->
<!-- sent="Mon, 5 Nov 2012 16:57:23 -0500" -->
<!-- isosent="20121105215723" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups" -->
<!-- id="9A5FB9DE-990E-4A81-9EDB-FBC007C65615_at_umich.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50942D81.1040503_at_inria.fr" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 16:57:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0761.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Previous message:</strong> <a href="0759.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>In reply to:</strong> <a href="0759.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0761.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Reply:</strong> <a href="0761.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Reply:</strong> <a href="0763.php">Christopher Samuel: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok more information (had to build newer hwloc)  My job today only 2 processes are running at half speed and they indeed are sharing the same core:
<br>
<p>[root_at_nyx7000 ~]# for x in `cat /tmp/pids `; do echo -n &quot;$x  &quot;; hwloc-bind --get-last-cpu-location --pid $x; done | sort -k 2
<br>
1164  0x00000001,0x0
<br>
1158  0x00000010,0x0
<br>
1165  0x00000010,0x0
<br>
1167  0x00000020
<br>
1157  0x00000200
<br>
1159  0x00000400
<br>
1160  0x00002000
<br>
1163  0x00004000
<br>
1166  0x00020000
<br>
1161  0x00040000
<br>
1168  0x00200000
<br>
1162  0x00400000
<br>
<p>&nbsp;1157 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   9:49.55 stream                           
<br>
&nbsp;1159 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   8:10.91 stream                           
<br>
&nbsp;1161 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   9:49.55 stream                           
<br>
&nbsp;1162 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   9:49.54 stream                           
<br>
&nbsp;1163 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   9:49.55 stream                           
<br>
&nbsp;1164 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   9:49.53 stream                           
<br>
&nbsp;1160 brockp    20   0 1885m 1.8g  456 R 97.7  0.2   9:49.54 stream                           
<br>
&nbsp;1166 brockp    20   0 1885m 1.8g  456 R 97.7  0.2   9:49.53 stream                           
<br>
&nbsp;1167 brockp    20   0 1885m 1.8g  456 R 97.7  0.2   9:49.46 stream                           
<br>
&nbsp;1168 brockp    20   0 1885m 1.8g  456 R 97.7  0.2   8:10.86 stream                           
<br>
&nbsp;1158 brockp    20   0 1885m 1.8g  456 R 48.9  0.2   4:54.78 stream                           
<br>
&nbsp;1165 brockp    20   0 1885m 1.8g  456 R 48.9  0.2   4:54.76 stream                           
<br>
<p><p>This is very strange. Is there a way to ask hwloc to show me all processes that are using a given cpu?
<br>
<p><p><p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Nov 2, 2012, at 4:30 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 02/11/2012 21:22, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-bind --get-last-cpu-location --pid &lt;pid&gt; should give the same
</span><br>
<span class="quotelev2">&gt;&gt; info but it seems broken on my machine right now, going to debug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, that works fine once you try it on a non-multithreaded program
</span><br>
<span class="quotelev1">&gt; that uses all cores :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you can use top or hwloc-bind --get-last-cpu-location --pid &lt;pid&gt; to
</span><br>
<span class="quotelev1">&gt; find out where each process runs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0761.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Previous message:</strong> <a href="0759.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>In reply to:</strong> <a href="0759.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0761.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Reply:</strong> <a href="0761.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Reply:</strong> <a href="0763.php">Christopher Samuel: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
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
