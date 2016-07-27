<?
$subject_val = "[hwloc-devel] hwloc + OMPI issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 12 16:56:21 2011" -->
<!-- isoreceived="20111012205621" -->
<!-- sent="Wed, 12 Oct 2011 16:56:16 -0400" -->
<!-- isosent="20111012205616" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc + OMPI issue" -->
<!-- id="FCF5B69A-1D00-40C8-A42C-AA7B5B709B6B_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc + OMPI issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-12 16:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2509.php">Brice Goglin: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Previous message:</strong> <a href="2507.php">Brice Goglin: "[hwloc-devel] beyond v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2509.php">Brice Goglin: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Reply:</strong> <a href="2509.php">Brice Goglin: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One of the OMPI devs found a problem when I upgraded the OMPI SVN trunk to the hwloc 1.2.2ompi version last week that I think I am just now beginning to understand.
<br>
<p>Brief reminder of our strategy:
<br>
<p>- on each compute node, OMPI launches a local &quot;orted&quot; helper daemon
<br>
- this orted fork/exec's the local MPI processes
<br>
<p>To avoid the penalty of each MPI process invoking hwloc discovery more-or-less simultaneously upon startup (which, as we've see on this list before, can be painful when core counts are large), we have the orted do the hwloc discovery, serialize this into XML, and send it to each of its local processes.  The local processes receive this XML and then load it into hwloc and run from there.
<br>
<p>However, it looks like the resulting loaded-from-XML topology-&gt;is_thissystem is set to 0, and therefore functions like hwloc_get_cpubind() actually get wired up to dontget_thisproc_cpubind() (instead of the proper Linux backend, for example).
<br>
<p>How do we avoid this?  We need working hwloc functions after loading up an XML topology string.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2509.php">Brice Goglin: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Previous message:</strong> <a href="2507.php">Brice Goglin: "[hwloc-devel] beyond v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2509.php">Brice Goglin: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Reply:</strong> <a href="2509.php">Brice Goglin: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
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
