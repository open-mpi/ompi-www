<?
$subject_val = "Re: [hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 06:43:54 2013" -->
<!-- isoreceived="20130509104354" -->
<!-- sent="Thu, 9 May 2013 10:43:49 +0000" -->
<!-- isosent="20130509104349" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F611E21_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="518AB286.1060603_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-09 06:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3732.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3730.php">Brice Goglin: "Re: [hwloc-devel] Minor issue with the man page"</a>
<li><strong>In reply to:</strong> <a href="3728.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3732.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3732.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2013, at 4:16 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; But this issue is only in the embedders (OMPI), not in the embeddee
</span><br>
<span class="quotelev1">&gt; (hwloc), right?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; I can get plugins to work in tests/embedded by adding 2 lines to its
</span><br>
<span class="quotelev1">&gt; configure.ac (see the attached patch, which also removes your error
</span><br>
<span class="quotelev1">&gt; message and creates a shared lib containing libhwloc_embedded).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In short, I don't really see what risk we would be taking on the hwloc
</span><br>
<span class="quotelev1">&gt; side if we keep embedding+plugins possible (and still don't enable
</span><br>
<span class="quotelev1">&gt; plugins by default).
</span><br>
<p>Ok.  It's probably worth documenting, though.  In the OMPI case, for example, OMPI cannot be opened in a private namespace (e.g., as a python plugin) and then have hwloc also opened in a private namespace; hwloc must be opened in a public namespace.  This has caused unhappiness in certain cases where upper-layer application authors were trying to open all plugins in private namespaces but couldn't.  The same will be true with hwloc: those who embed hwloc should be *strongly advised* to not use libltdl (even though it's not the default) because of the private/public namespace issue.
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
<li><strong>Next message:</strong> <a href="3732.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3730.php">Brice Goglin: "Re: [hwloc-devel] Minor issue with the man page"</a>
<li><strong>In reply to:</strong> <a href="3728.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3732.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3732.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
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
