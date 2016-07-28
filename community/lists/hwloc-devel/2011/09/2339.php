<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 11:49:40 2011" -->
<!-- isoreceived="20110901154940" -->
<!-- sent="Thu, 01 Sep 2011 17:49:33 +0200" -->
<!-- isosent="20110901154933" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="4E5FA98D.1080007_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2D9D4DEF-6800-4379-9907-E35875A06831_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-01 11:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2340.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2338.php">Jeff Squyres: "[hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2338.php">Jeff Squyres: "[hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2341.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2341.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2345.php">Marcelo Alaniz: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you actually find many machines/distribs that don't have libxml2
<br>
installed by default? There are literaly hundreds of packages that
<br>
depend on libxml2 (at least in Debian) so I am not sure depending on it
<br>
is really a problem.
<br>
<p>Also are there really some string space problems? Even when talking
<br>
about 1000 nodes transferring 100kB once at the beginning on the job, it
<br>
doesn't look too bad to me (and these XMLs could be cached on the
<br>
frontend as long as the compute nodes don't change).
<br>
<p>Otherwise, implementing this is likely easy, especially if you find
<br>
somebody to do it :) Start from the XML export, convert it into a text
<br>
export, and write the corresponding import (starting from the XML import
<br>
may be hard because it's recursive).
<br>
<p>Would you need an export to a file or to a memory buffer or both?
<br>
<p>Last but not least: what's the deadline?
<br>
<p>Brice
<br>
<p><p><p>Le 01/09/2011 17:30, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; We're (finally) bringing full hwloc services up in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of the things we want to do is send server topologies from back-end compute nodes to the front-end node.  The XML export/import functionality would work for this, but a) it's a bit heavyweight, and b) it seems weird to require XML to build MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any chance that a lighter-weight, simple string parsing module could be added to hwloc?  I'm guessing that we could save a modest amount of string space (SWAG: 20%?), but we wouldn't need a dependency on libxml, which would be good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I took a lstopo --no-io foo.xml output on an older xeon machine and, while sitting on a boring teleconf, I manually converted it in emacs to a (slightly) simpler text format.  I attached the two files.  There's a modest space savings (about 17%).  But libxml clearly would not be necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you think this would be easy to implement?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2339/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2340.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2338.php">Jeff Squyres: "[hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2338.php">Jeff Squyres: "[hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2341.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2341.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2345.php">Marcelo Alaniz: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
