<?
$subject_val = "Re: [hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  8 16:16:12 2013" -->
<!-- isoreceived="20130508201612" -->
<!-- sent="Wed, 08 May 2013 22:16:06 +0200" -->
<!-- isosent="20130508201606" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="518AB286.1060603_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="19DB18C6-41C4-4AD7-A533-D89C2F596082_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc embedding vs libltdl<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-08 16:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3729.php">Jiri Hladky: "[hwloc-devel] Minor issue with the man page"</a>
<li><strong>Previous message:</strong> <a href="3727.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3726.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3731.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3731.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/05/2013 13:09, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; 2.  My thoughts were preventing hwloc from going thru some of the pain that OMPI went thru w embedding. Libibverbs has the same problem. If you have middleware that uses plugins that, in turn, uses plugins, it's a bit complicated to support fully static builds  properly (OMPI and hwloc do, but libibverbs doesn't easily, but still, it may require a rebuild of hwloc with enable-static). Also, the problem with opening DSOs in private namespaces still exists; there's no good solution for that (when both the middleware and hwloc use plugins).  
</span><br>
<p>But this issue is only in the embedders (OMPI), not in the embeddee
<br>
(hwloc), right?
<br>
<p>I can get plugins to work in tests/embedded by adding 2 lines to its
<br>
configure.ac (see the attached patch, which also removes your error
<br>
message and creates a shared lib containing libhwloc_embedded).
<br>
<p>In short, I don't really see what risk we would be taking on the hwloc
<br>
side if we keep embedding+plugins possible (and still don't enable
<br>
plugins by default).
<br>
<p><span class="quotelev1">&gt; 3. Open MPI also get flack for embedding lib ltdl and libevent. Although libltdl now has the built in options for using an external libltdl (which is what the distros use), why go down this road if we don't need to embed libltdl?
</span><br>
<p>OK
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3728/embedded_plugins.patch">embedded_plugins.patch</a>
</ul>
<!-- attachment="embedded_plugins.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3729.php">Jiri Hladky: "[hwloc-devel] Minor issue with the man page"</a>
<li><strong>Previous message:</strong> <a href="3727.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3726.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3731.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3731.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
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
