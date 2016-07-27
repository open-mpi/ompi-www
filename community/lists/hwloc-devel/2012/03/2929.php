<?
$subject_val = "[hwloc-devel] topology-x86.c warning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 21:04:16 2012" -->
<!-- isoreceived="20120316010416" -->
<!-- sent="Thu, 15 Mar 2012 18:04:04 -0700" -->
<!-- isosent="20120316010404" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] topology-x86.c warning" -->
<!-- id="BC33A8F7-0B7A-4BE7-8B7C-75C5525FF177_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] topology-x86.c warning<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 21:04:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2930.php">Samuel Thibault: "Re: [hwloc-devel] topology-x86.c warning"</a>
<li><strong>Previous message:</strong> <a href="2928.php">Brice Goglin: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2930.php">Samuel Thibault: "Re: [hwloc-devel] topology-x86.c warning"</a>
<li><strong>Maybe reply:</strong> <a href="2930.php">Samuel Thibault: "Re: [hwloc-devel] topology-x86.c warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found this warning in OMPI 1.5:
<br>
<p>&nbsp;&nbsp;CC     topology-x86.lo
<br>
topology-x86.c: In function 'look_proc':
<br>
topology-x86.c:189: warning: 'ways' may be used uninitialized in this function
<br>
<p>On the hwloc trunk, the ways variable is not initialized, and there's an &quot;if&quot; block where one of the branches initializes it and the other does not.  Then below this conditional assignment, it has a comment:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cache-&gt;size = linesize * linepart * ways * sets; /* FIXME: what if ways == -1 ? */
<br>
<p>Which is somewhat amusing because ways was never set to -1.  :-)  
<br>
<p>Should it be initialized to -1, or set to -1 in the &quot;if&quot; block right above it?  And what to do if it is -1 in the cache-&gt;size assignment?
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
<li><strong>Next message:</strong> <a href="2930.php">Samuel Thibault: "Re: [hwloc-devel] topology-x86.c warning"</a>
<li><strong>Previous message:</strong> <a href="2928.php">Brice Goglin: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2930.php">Samuel Thibault: "Re: [hwloc-devel] topology-x86.c warning"</a>
<li><strong>Maybe reply:</strong> <a href="2930.php">Samuel Thibault: "Re: [hwloc-devel] topology-x86.c warning"</a>
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
