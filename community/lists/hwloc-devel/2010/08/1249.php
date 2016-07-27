<?
$subject_val = "[hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  6 09:51:19 2010" -->
<!-- isoreceived="20100806135119" -->
<!-- sent="Fri, 06 Aug 2010 15:50:53 +0200" -->
<!-- isosent="20100806135053" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints" -->
<!-- id="1281102653.12957.519.camel_at_kallies.zib.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-06 09:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1250.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1248.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1250.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1250.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Maybe reply:</strong> <a href="1254.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo,
<br>
<p>when I create a cpuset manually according to cpuset(7), configuring a
<br>
subset of cpus and mems of the machine for it, bind the current shell to
<br>
this cpuset, and execute lstopo, then I expect that the listed topology
<br>
shows only the resources of the cpuset. This corresponds to the default
<br>
setting of flags of the topology context (without
<br>
HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM).
<br>
<p>This works as expected on a machine running SLES10SP3.
<br>
<p>Repeating the same procedure on a similar machine running SLES11SP1
<br>
fails. lstopo always lists the resources of the whole machine, and
<br>
ignores the cpuset constraint. Other things like e.g. numatools report
<br>
the expected constraint.
<br>
<p>Please let me know how I can assist you in alayzing the problem.
<br>
<p>Sincerely BK
<br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1250.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1248.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1250.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1250.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Maybe reply:</strong> <a href="1254.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
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
