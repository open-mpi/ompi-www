<?
$subject_val = "[hwloc-users] hwloc error with &quot;node interleaving&quot; disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 06:06:38 2014" -->
<!-- isoreceived="20140905100638" -->
<!-- sent="Fri, 5 Sep 2014 12:06:37 +0200" -->
<!-- isosent="20140905100637" -->
<!-- name="Jean-Pierre Adam" -->
<!-- email="jean_pierre_adam_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc error with &amp;quot;node interleaving&amp;quot; disabled" -->
<!-- id="DUB114-W67834E51BE484BA764A2B4DFC20_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled<br>
<strong>From:</strong> Jean-Pierre Adam (<em>jean_pierre_adam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 06:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1071.php">Brice Goglin: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>Previous message:</strong> <a href="1069.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1071.php">Brice Goglin: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>Reply:</strong> <a href="1071.php">Brice Goglin: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello hwloc experts
<br>
<p>I encounter this bug when I'm using mpirun or hwloc directly :
<br>
<p>****************************************************************************
<br>
* hwloc has encountered what looks like an error from the operating system.
<br>
*
<br>
* L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset 0x0000003f) without inclusion!
<br>
* Error occurred in topology.c line 940
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with the output from the hwloc-gather-topology script.
<br>
****************************************************************************
<br>
<p>The output of hwloc-gather-topology is attached. The OS is Centos 7.
<br>
<p>The tool launched with mpirun runs as expected, still the message is a bit worrying...
<br>
<p>I was able to avoid this message by enabling &quot;node interleaving&quot; in the bios (basically disables NUMA). In my case, I got a 5% performance loss with that setting. It could be acceptable, but I would like to understant what is going on.
<br>
<p>So is my motherboard / BIOS / OS buggy ?
<br>
<p>Best regards
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1070/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1070/test.output.bz2">test.output.bz2</a>
</ul>
<!-- attachment="test.output.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1071.php">Brice Goglin: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>Previous message:</strong> <a href="1069.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1071.php">Brice Goglin: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>Reply:</strong> <a href="1071.php">Brice Goglin: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
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
