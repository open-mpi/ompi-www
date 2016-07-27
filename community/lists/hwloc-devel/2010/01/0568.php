<?
$subject_val = "[hwloc-devel] sometimes unused params";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 12:11:34 2010" -->
<!-- isoreceived="20100108171134" -->
<!-- sent="Fri, 8 Jan 2010 12:11:29 -0500" -->
<!-- isosent="20100108171129" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] sometimes unused params" -->
<!-- id="4F4E101D-7943-4627-AF1C-E9C3460BD1B9_at_cisco.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [hwloc-devel] sometimes unused params<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-08 12:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0569.php">Samuel Thibault: "Re: [hwloc-devel] sometimes unused params"</a>
<li><strong>Previous message:</strong> <a href="0567.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0569.php">Samuel Thibault: "Re: [hwloc-devel] sometimes unused params"</a>
<li><strong>Reply:</strong> <a href="0569.php">Samuel Thibault: "Re: [hwloc-devel] sometimes unused params"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How do you guys want to handle params that are *sometimes* unused?
<br>
<p>For example, topology.c:1450 is:
<br>
<p>-----
<br>
int
<br>
hwloc_topology_set_fsroot(struct hwloc_topology *topology, const char *fsroot_path)
<br>
{
<br>
&nbsp;&nbsp;/* cleanup existing backend */
<br>
&nbsp;&nbsp;hwloc_backend_exit(topology);
<br>
<p>#ifdef HWLOC_LINUX_SYS
<br>
&nbsp;&nbsp;if (hwloc_backend_sysfs_init(topology, fsroot_path) &lt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
#endif /* HWLOC_LINUX_SYS */
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
-----
<br>
<p>On OS X, I get
<br>
<p>-----
<br>
topology.c:1451: warning: unused parameter &#145;fsroot_path&#146;
<br>
<pre>
----
(and a few others like this)
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0569.php">Samuel Thibault: "Re: [hwloc-devel] sometimes unused params"</a>
<li><strong>Previous message:</strong> <a href="0567.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0569.php">Samuel Thibault: "Re: [hwloc-devel] sometimes unused params"</a>
<li><strong>Reply:</strong> <a href="0569.php">Samuel Thibault: "Re: [hwloc-devel] sometimes unused params"</a>
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
