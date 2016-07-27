<?
$subject_val = "Re: [hwloc-devel] lstopo --top";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 11:32:52 2013" -->
<!-- isoreceived="20130618153252" -->
<!-- sent="Tue, 18 Jun 2013 17:32:48 +0200" -->
<!-- isosent="20130618153248" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo --top" -->
<!-- id="20130618153248.GE7095_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CALT_uBR4D0+2v3_tHevbJgKr=vOZNRSNpC+p+UnLvQT8nBK63A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo --top<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 11:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3809.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi"</a>
<li><strong>Previous message:</strong> <a href="3807.php">Jiri Hladky: "[hwloc-devel] lstopo --top"</a>
<li><strong>In reply to:</strong> <a href="3807.php">Jiri Hladky: "[hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3812.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3812.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Jiri Hladky, le Tue 18 Jun 2013 17:18:15 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I would like to check the possibilities to visualize the results to the output
</span><br>
<span class="quotelev1">&gt; similar to&#160;lstopo --top (see the attachment). I would like to write a simple
</span><br>
<span class="quotelev1">&gt; utility which will
</span><br>
<span class="quotelev1">&gt; &#160;* parse the above file
</span><br>
<span class="quotelev1">&gt; &#160;* foreach timestep create an output similar to&#160;lstopo --top output showing,
</span><br>
<span class="quotelev1">&gt; where each job was running
</span><br>
<p>It should be easy to do: create a program which
<br>
<p>- detects the topology as usual
<br>
- for each of these lines:
<br>
PID #CPU #CPU #CPU #CPU
<br>
PID #CPU #CPU #CPU
<br>
call hwloc_topology_insert_misc_object_by_cpuset(topology, cpuset, PID)
<br>
- export the topology as xml file.
<br>
<p>and then for each job output, run it and run lstopo on the generated xml
<br>
file.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3809.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi"</a>
<li><strong>Previous message:</strong> <a href="3807.php">Jiri Hladky: "[hwloc-devel] lstopo --top"</a>
<li><strong>In reply to:</strong> <a href="3807.php">Jiri Hladky: "[hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3812.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3812.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
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
