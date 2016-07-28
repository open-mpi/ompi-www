<?
$subject_val = "[hwloc-users] hwloc set membind function";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 06:20:10 2011" -->
<!-- isoreceived="20110922102010" -->
<!-- sent="Thu, 22 Sep 2011 12:20:05 +0200" -->
<!-- isosent="20110922102005" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc set membind function" -->
<!-- id="CAJNPZUW5GKCQEaRhURhRc3BnMxZC0p1V8tywxfsiPp2oJ_AAJg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc set membind function<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 06:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0452.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0450.php">Brice Goglin: "[hwloc-users] multinode/network topology status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0452.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0452.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Maybe reply:</strong> <a href="0453.php">Samuel Thibault: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear hwloc users and developers,
<br>
<p>reading the manual about hwloc set membind() function:
<br>
<p><p>Set the default memory binding policy of the current process or thread to
<br>
prefer the
<br>
NUMA node(s) near the specified cpuset.
<br>
<p><p>What does   &quot;nodes near the specified cpuset&quot; means? The node wherethe
<br>
specified cpuset lives? Or others node?
<br>
<p>What this function does in particular?
<br>
<p>I'm calling hwloc_set_membind from two OpenMP threads passing
<br>
HWLOC_MEMBIND_BIND policy.
<br>
<p>The first thread allocates with a malloc an array. The second thread (bound
<br>
on other node) initialize the array.
<br>
<p>The free memory on the nodes decrease only on the node where the second
<br>
thread is. Is it rigth?
<br>
<p>&nbsp;hwloc_set_membind involves all future allocations?
<br>
<p>Thanks in forward.
<br>
<p><p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0452.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0450.php">Brice Goglin: "[hwloc-users] multinode/network topology status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0452.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0452.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Maybe reply:</strong> <a href="0453.php">Samuel Thibault: "Re: [hwloc-users] hwloc set membind function"</a>
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
