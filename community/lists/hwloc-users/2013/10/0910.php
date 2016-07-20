<?
$subject_val = "[hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 20:45:17 2013" -->
<!-- isoreceived="20131005004517" -->
<!-- sent="Fri, 4 Oct 2013 20:45:15 -0400" -->
<!-- isosent="20131005004515" -->
<!-- name="Vlad" -->
<!-- email="vlad_at_[hidden]" -->
<!-- subject="[hwloc-users] meaning of &amp;quot;physical CPU&amp;quot; for get_last_cpu_location()" -->
<!-- id="260923FC-3A5F-4D1F-B613-2D83483EAC70_at_demoninsight.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()<br>
<strong>From:</strong> Vlad (<em>vlad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 20:45:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0911.php">Brice Goglin: "Re: [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
<li><strong>Previous message:</strong> <a href="0909.php">Brice Goglin: "[hwloc-users] switch to git"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0911.php">Brice Goglin: "Re: [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
<li><strong>Reply:</strong> <a href="0911.php">Brice Goglin: "Re: [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've been a user for a while and have just noticed an area where the API documentation is either unclear or the version I am using (1.7 on Fedora 17) returns a wrong topology object type. Specifically, I took the &quot;physical CPU&quot; wording to mean HWLOC_OBJ_CORE but on a machine that has hyperthreading enabled the above method appears to return HWLOC_OBJ_PU).
<br>
<p>Most likely, all is well (returning the smallest processing element of hardware kind of makes more sense) and I'd misunderstood the API all along (I work mostly on machines with HT disabled), but it would be useful to confirm.
<br>
<p>Thanks in advance,
<br>
Vlad
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0911.php">Brice Goglin: "Re: [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
<li><strong>Previous message:</strong> <a href="0909.php">Brice Goglin: "[hwloc-users] switch to git"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0911.php">Brice Goglin: "Re: [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
<li><strong>Reply:</strong> <a href="0911.php">Brice Goglin: "Re: [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
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
