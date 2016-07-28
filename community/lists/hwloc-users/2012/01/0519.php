<?
$subject_val = "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 08:33:34 2012" -->
<!-- isoreceived="20120116133334" -->
<!-- sent="Mon, 16 Jan 2012 14:33:29 +0100" -->
<!-- isosent="20120116133329" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind" -->
<!-- id="20120116133329.GL4281_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1426430845.394790.1326718883391.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 08:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0520.php">Marc-André Hermanns: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Previous message:</strong> <a href="0518.php">Marc-Andr&#233; Hermanns: "[hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe in reply to:</strong> <a href="0518.php">Marc-Andr&#233; Hermanns: "[hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0520.php">Marc-André Hermanns: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Reply:</strong> <a href="0520.php">Marc-André Hermanns: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Marc-Andr&#233; Hermanns, le Mon 16 Jan 2012 14:01:23 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt;     hwloc_get_last_cpu_location(topology, cpuset, 0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I am at a total loss on what I should make of this. It seems I am  
</span><br>
<span class="quotelev1">&gt; doing something fundamentally wrong,
</span><br>
<p>You need to check the value returned by the function:
<br>
get_last_cpu_location is currently implemented only on Linux. I don't
<br>
think MacOS provides the information.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0520.php">Marc-André Hermanns: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Previous message:</strong> <a href="0518.php">Marc-Andr&#233; Hermanns: "[hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe in reply to:</strong> <a href="0518.php">Marc-Andr&#233; Hermanns: "[hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0520.php">Marc-André Hermanns: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Reply:</strong> <a href="0520.php">Marc-André Hermanns: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
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
