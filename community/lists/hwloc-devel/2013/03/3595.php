<?
$subject_val = "[hwloc-devel] Solaris chiptype / rename.h";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 11:57:01 2013" -->
<!-- isoreceived="20130326155701" -->
<!-- sent="Tue, 26 Mar 2013 15:56:55 +0000" -->
<!-- isosent="20130326155655" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Solaris chiptype / rename.h" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC6572_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Solaris chiptype / rename.h<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 11:56:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3596.php">Brice Goglin: "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>Previous message:</strong> <a href="3594.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5509)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3596.php">Brice Goglin: "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>Reply:</strong> <a href="3596.php">Brice Goglin: "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice --
<br>
<p>I just committed <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5513">https://svn.open-mpi.org/trac/hwloc/changeset/5513</a> on the v1.5 branch, which ensures that the symbols in topology-solaris-chiptype.c are subject to &lt;hwloc/rename.h&gt;.  We discovered this problem on the OMPI SVN trunk, which embeds hwloc 1.5.2.
<br>
<p>On the hwloc trunk, I see that  #include &lt;hwloc/autogen/config.h&gt; was added to chiptype.c.
<br>
<p>Just to be sure before I commit (and because I don't have a Solaris machine with which to test), this will *not* include &lt;hwloc/rename.h&gt;, and therefore merging over r5513 to the trunk is still a good idea (i.e., include &lt;hwloc.h&gt;).
<br>
<p>Is that right?
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
<li><strong>Next message:</strong> <a href="3596.php">Brice Goglin: "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>Previous message:</strong> <a href="3594.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5509)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3596.php">Brice Goglin: "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>Reply:</strong> <a href="3596.php">Brice Goglin: "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
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
