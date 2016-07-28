<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 12:01:10 2011" -->
<!-- isoreceived="20110901160110" -->
<!-- sent="Thu, 1 Sep 2011 12:01:05 -0400" -->
<!-- isosent="20110901160105" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="8D9EA89A-DFB5-457D-A013-078CFA701E6B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E5FA98D.1080007_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-01 12:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2342.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2340.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2339.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2342.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2342.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2350.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2011, at 11:49 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Did you actually find many machines/distribs that don't have libxml2 installed by default? There are literaly hundreds of packages that depend on libxml2 (at least in Debian) so I am not sure depending on it is really a problem.
</span><br>
<p>Cray, for sure.  Josh told me off-list that it's a real PITA for them to build/support libxml on the ORNL Crays.
<br>
<p>Blue Gene?  Windows?
<br>
<p><span class="quotelev1">&gt; Also are there really some string space problems?
</span><br>
<p>No.  The space savings is a minor benefit; I only included it for completeness.
<br>
<p><span class="quotelev1">&gt; Otherwise, implementing this is likely easy, especially if you find somebody to do it :) Start from the XML export, convert it into a text export, and write the corresponding import (starting from the XML import may be hard because it's recursive).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would you need an export to a file or to a memory buffer or both?
</span><br>
<p>Memory buffer would be most preferable, because we're going to generate it on the back end node, pack it to a network buffer, send it, receive it on the head node, unpack it from the network buffer, and slurp it into a hwloc topology.
<br>
<p><span class="quotelev1">&gt; Last but not least: what's the deadline?
</span><br>
<p>Ralph is actively working on code for the RFC I sent around yesterday:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2011/08/9737.php">http://www.open-mpi.org/community/lists/devel/2011/08/9737.php</a>
<br>
<p>We'll probably use XML just to get it going, but it would be good to not equate &quot;libxmpi&quot; with &quot;hwloc&quot; in OMPI developers' brains.  :-)  So -- &quot;sometime soon&quot; would be nice.
<br>
<p>I could *probably* write this, but I'm guessing you guys could write it much faster than I could...
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
<li><strong>Next message:</strong> <a href="2342.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2340.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2339.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2342.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2342.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2350.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
