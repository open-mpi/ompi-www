<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 19:36:41 2011" -->
<!-- isoreceived="20110901233641" -->
<!-- sent="Thu, 1 Sep 2011 20:36:17 -0300" -->
<!-- isosent="20110901233617" -->
<!-- name="Marcelo Alaniz" -->
<!-- email="malaniz_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="20110901233617.GB5919_at_mhost" -->
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
<strong>From:</strong> Marcelo Alaniz (<em>malaniz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-01 19:36:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2346.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3738)"</a>
<li><strong>Previous message:</strong> <a href="2344.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2339.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2340.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On Thu, Sep 01, 2011 at 05:49:33PM +0200, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt;    Did you actually find many machines/distribs that don't have libxml2
</span><br>
<span class="quotelev1">&gt;    installed by default? There are literaly hundreds of packages that depend
</span><br>
<span class="quotelev1">&gt;    on libxml2 (at least in Debian) so I am not sure depending on it is really
</span><br>
<span class="quotelev1">&gt;    a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Also are there really some string space problems? Even when talking about
</span><br>
<span class="quotelev1">&gt;    1000 nodes transferring 100kB once at the beginning on the job, it doesn't
</span><br>
<span class="quotelev1">&gt;    look too bad to me (and these XMLs could be cached on the frontend as long
</span><br>
<span class="quotelev1">&gt;    as the compute nodes don't change).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Otherwise, implementing this is likely easy, especially if you find
</span><br>
<span class="quotelev1">&gt;    somebody to do it :) Start from the XML export, convert it into a text
</span><br>
<span class="quotelev1">&gt;    export, and write the corresponding import (starting from the XML import
</span><br>
<span class="quotelev1">&gt;    may be hard because it's recursive).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Would you need an export to a file or to a memory buffer or both?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Last but not least: what's the deadline?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Le 01/09/2011 17:30, Jeff Squyres a ecrit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  We're (finally) bringing full hwloc services up in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  One of the things we want to do is send server topologies from back-end compute nodes to the front-end node.  The XML export/import functionality would work for this, but a) it's a bit heavyweight, and b) it seems weird to require XML to build MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Is there any chance that a lighter-weight, simple string parsing module could be added to hwloc?  I'm guessing that we could save a modest amount of string space (SWAG: 20%?), but we wouldn't need a dependency on libxml, which would be good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I took a lstopo --no-io foo.xml output on an older xeon machine and, while sitting on a boring teleconf, I manually converted it in emacs to a (slightly) simpler text format.  I attached the two files.  There's a modest space savings (about 17%).  But libxml clearly would not be necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Do you think this would be easy to implement?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
what do you think about json?
<br>
i think is a lot better than xml ... and really easy to parse
<br>
<p>cheers
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;  hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p>- -- 
<br>
Degree Alaniz Marcelo
<br>
Frontend Development 
<br>
HPC PhD Student
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
<p>iEYEARECAAYFAk5gFvEACgkQ0bw3ME61/hLpkwCghHxkglf+YTtxUkQvyo9Mw0PH
<br>
ayQAnR8F0kXsejb1fdjQDRSg/3hRdFBn
<br>
=ofHV
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2346.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3738)"</a>
<li><strong>Previous message:</strong> <a href="2344.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2339.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2340.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
