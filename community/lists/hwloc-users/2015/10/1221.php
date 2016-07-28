<?
$subject_val = "Re: [hwloc-users] Assembling multiple node XMLs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 14:08:04 2015" -->
<!-- isoreceived="20151030180804" -->
<!-- sent="Fri, 30 Oct 2015 19:07:58 +0100" -->
<!-- isosent="20151030180758" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Assembling multiple node XMLs" -->
<!-- id="20151030180758.GA16391_at_var.home" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20151030133539.1160f101_at_antares" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Assembling multiple node XMLs<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 14:07:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/11/1222.php">Brice Goglin: "[hwloc-users] anybody has Opteron 41xx, 42xx or 43xx processors?"</a>
<li><strong>Previous message:</strong> <a href="1220.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1220.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrej Prsa, on Fri 30 Oct 2015 13:35:39 -0400, wrote:
<br>
<span class="quotelev1">&gt; Thanks for the suggestion. I tried:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/openmpi-1.10.0 --hostfile node1 -np 44 sh -c
</span><br>
<span class="quotelev1">&gt; &quot;/usr/bin/env HWLOC_XMLFILE=/etc/hwloc_\${hostname}.xml python
</span><br>
<span class="quotelev1">&gt; testmpi.py&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/openmpi-1.10.0 --hostfile node1 -np 44 sh -c
</span><br>
<span class="quotelev1">&gt; &quot;/usr/bin/env HWLOC_XMLFILE=/etc/hwloc_`hostname`.xml python testmpi.py&quot;
</span><br>
<p>Ah, sorry, hostname was supposed to be an environment variable that
<br>
contains the hostname, but there is no such thing :)
<br>
<p>However, this could work:
<br>
<p>mpirun --prefix /opt/openmpi-1.10.0 --hostfile node1 -np 44 sh -c
<br>
&quot;/usr/bin/env HWLOC_XMLFILE=/etc/hwloc_\`hostname\`.xml python testmpi.py&quot;
<br>
<p>so that hostname gets execute by the remote shell, not the local shell.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/11/1222.php">Brice Goglin: "[hwloc-users] anybody has Opteron 41xx, 42xx or 43xx processors?"</a>
<li><strong>Previous message:</strong> <a href="1220.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1220.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
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
