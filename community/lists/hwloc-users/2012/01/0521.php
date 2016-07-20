<?
$subject_val = "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 06:00:17 2012" -->
<!-- isoreceived="20120117110017" -->
<!-- sent="Tue, 17 Jan 2012 11:59:59 +0100" -->
<!-- isosent="20120117105959" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind" -->
<!-- id="20120117105959.GK4320_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="462849258.411336.1326797263126.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2012-01-17 05:59:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0522.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Previous message:</strong> <a href="0520.php">Marc-Andr&#233; Hermanns: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe in reply to:</strong> <a href="0518.php">Marc-Andr&#233; Hermanns: "[hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0522.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marc-Andr&#233; Hermanns, le Tue 17 Jan 2012 11:47:43 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; It seems now that it has the whole system in the cpuset. How can I 
</span><br>
<span class="quotelev1">&gt; really infer the PU this process was run on? I would have expected the 
</span><br>
<span class="quotelev1">&gt; cpuset to have only 1 element per level to indicate the path from 
</span><br>
<span class="quotelev1">&gt; machine to PU.
</span><br>
<p>That is what is expected, yes (though only at the PU level, since
<br>
only that one is completely included in the cpuset, you would need
<br>
&quot;intersects&quot; to get the path). and that's what I get on my machine:
<br>
<p>&#164; ./test 
<br>
This system has 7 levels
<br>
Cpuset: 0x00000040
<br>
Number of objects at depth 0: 0
<br>
Number of objects at depth 1: 0
<br>
Number of objects at depth 2: 0
<br>
Number of objects at depth 3: 0
<br>
Number of objects at depth 4: 0
<br>
Number of objects at depth 5: 0
<br>
Number of objects at depth 6: 1
<br>
<p><span class="quotelev1">&gt; Evidently my understanding of this functionality is still
</span><br>
<span class="quotelev1">&gt; not correct.
</span><br>
<p>No, it's completely correct, it just seems there's an odd thing
<br>
somewhere. Could you run through strace so we can check what the kernel
<br>
returns?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0522.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Previous message:</strong> <a href="0520.php">Marc-Andr&#233; Hermanns: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe in reply to:</strong> <a href="0518.php">Marc-Andr&#233; Hermanns: "[hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0522.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
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
