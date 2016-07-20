<?
$subject_val = "[hwloc-users] hwloc problem on SGI machine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 18:27:33 2014" -->
<!-- isoreceived="20140110232733" -->
<!-- sent="Fri, 10 Jan 2014 23:27:16 +0000" -->
<!-- isosent="20140110232716" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc problem on SGI machine" -->
<!-- id="DDF6AA89-55F9-49E9-9EF0-D0176BB9237B_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc problem on SGI machine<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 18:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0945.php">Brice Goglin: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>Previous message:</strong> <a href="0943.php">Brice Goglin: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0945.php">Brice Goglin: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>Reply:</strong> <a href="0945.php">Brice Goglin: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>Reply:</strong> <a href="0946.php">Chris Samuel: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Becker (CC'ed) reported to me a failure with hwloc 1.7.2 (in OMPI trunk).  I had him verify this with a standalone hwloc 1.7.2, and then had him try standalone hwloc 1.8 as well -- all got the same failure.
<br>
<p>Here's what he's seeing in 1.7.2:
<br>
<p>$ lstopo
<br>
Different OS indexes
<br>
lstopo: topology-linux.c:2731: look_sysfsnode: Assertion `node == res_obj' failed.
<br>
Aborted (core dumped)
<br>
<p>In 1.8, the issue is the same, but a different line number (2741).
<br>
<p>It's an SGI x86_64 server, running SLES 11.
<br>
<p>Is this an hwloc issue, or a hardware issue?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0945.php">Brice Goglin: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>Previous message:</strong> <a href="0943.php">Brice Goglin: "Re: [hwloc-users] [windows] build from source using visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0945.php">Brice Goglin: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>Reply:</strong> <a href="0945.php">Brice Goglin: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>Reply:</strong> <a href="0946.php">Chris Samuel: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
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
