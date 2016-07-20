<?
$subject_val = "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 17:23:04 2012" -->
<!-- isoreceived="20121105222304" -->
<!-- sent="Mon, 05 Nov 2012 23:22:58 +0100" -->
<!-- isosent="20121105222258" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups" -->
<!-- id="50983C42.80706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A5FB9DE-990E-4A81-9EDB-FBC007C65615_at_umich.edu" -->
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
<strong>Date:</strong> 2012-11-05 17:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0762.php">Samuel Thibault: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Previous message:</strong> <a href="0760.php">Brock Palen: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>In reply to:</strong> <a href="0760.php">Brock Palen: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0762.php">Samuel Thibault: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Reply:</strong> <a href="0762.php">Samuel Thibault: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/11/2012 22:57, Brock Palen a &#233;crit :
<br>
<span class="quotelev1">&gt; Ok more information (had to build newer hwloc)  My job today only 2 processes are running at half speed and they indeed are sharing the same core:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_nyx7000 ~]# for x in `cat /tmp/pids `; do echo -n &quot;$x  &quot;; hwloc-bind --get-last-cpu-location --pid $x; done | sort -k 2
</span><br>
<span class="quotelev1">&gt; 1164  0x00000001,0x0
</span><br>
<span class="quotelev1">&gt; 1158  0x00000010,0x0
</span><br>
<span class="quotelev1">&gt; 1165  0x00000010,0x0
</span><br>
<span class="quotelev1">&gt; 1167  0x00000020
</span><br>
<span class="quotelev1">&gt; 1157  0x00000200
</span><br>
<span class="quotelev1">&gt; 1159  0x00000400
</span><br>
<span class="quotelev1">&gt; 1160  0x00002000
</span><br>
<span class="quotelev1">&gt; 1163  0x00004000
</span><br>
<span class="quotelev1">&gt; 1166  0x00020000
</span><br>
<span class="quotelev1">&gt; 1161  0x00040000
</span><br>
<span class="quotelev1">&gt; 1168  0x00200000
</span><br>
<span class="quotelev1">&gt; 1162  0x00400000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1157 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   9:49.55 stream                           
</span><br>
<span class="quotelev1">&gt;  1159 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   8:10.91 stream                           
</span><br>
<span class="quotelev1">&gt;  1161 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   9:49.55 stream                           
</span><br>
<span class="quotelev1">&gt;  1162 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   9:49.54 stream                           
</span><br>
<span class="quotelev1">&gt;  1163 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   9:49.55 stream                           
</span><br>
<span class="quotelev1">&gt;  1164 brockp    20   0 1885m 1.8g  456 R 99.6  0.2   9:49.53 stream                           
</span><br>
<span class="quotelev1">&gt;  1160 brockp    20   0 1885m 1.8g  456 R 97.7  0.2   9:49.54 stream                           
</span><br>
<span class="quotelev1">&gt;  1166 brockp    20   0 1885m 1.8g  456 R 97.7  0.2   9:49.53 stream                           
</span><br>
<span class="quotelev1">&gt;  1167 brockp    20   0 1885m 1.8g  456 R 97.7  0.2   9:49.46 stream                           
</span><br>
<span class="quotelev1">&gt;  1168 brockp    20   0 1885m 1.8g  456 R 97.7  0.2   8:10.86 stream                           
</span><br>
<span class="quotelev1">&gt;  1158 brockp    20   0 1885m 1.8g  456 R 48.9  0.2   4:54.78 stream                           
</span><br>
<span class="quotelev1">&gt;  1165 brockp    20   0 1885m 1.8g  456 R 48.9  0.2   4:54.76 stream                           
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is very strange. Is there a way to ask hwloc to show me all processes that are using a given cpu?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No there's no easy way to do that.
<br>
You should first check whether this given cpu is idle or not. Running
<br>
top and pressing 1 will show one line per CPU (yours should be the
<br>
second CPU line).
<br>
<p>top can also sort by the last used CPU. Type f to enter the config menu,
<br>
hilight the &quot;last cpu&quot; line, and hit 's' to make it the sort column.
<br>
Assuming your top version isn't too different from mine, you should be
<br>
able to quickly see if any process used your given cpu recently.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0762.php">Samuel Thibault: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Previous message:</strong> <a href="0760.php">Brock Palen: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>In reply to:</strong> <a href="0760.php">Brock Palen: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0762.php">Samuel Thibault: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Reply:</strong> <a href="0762.php">Samuel Thibault: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
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
