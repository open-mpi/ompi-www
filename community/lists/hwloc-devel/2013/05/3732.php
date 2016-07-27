<?
$subject_val = "Re: [hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 08:55:08 2013" -->
<!-- isoreceived="20130509125508" -->
<!-- sent="Thu, 09 May 2013 14:55:00 +0200" -->
<!-- isosent="20130509125500" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="518B9CA4.9010900_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F611E21_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-05-09 08:55:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3733.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>Previous message:</strong> <a href="3731.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3731.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3734.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3734.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/05/2013 12:43, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On May 8, 2013, at 4:16 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But this issue is only in the embedders (OMPI), not in the embeddee
</span><br>
<span class="quotelev2">&gt;&gt; (hwloc), right?
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can get plugins to work in tests/embedded by adding 2 lines to its
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac (see the attached patch, which also removes your error
</span><br>
<span class="quotelev2">&gt;&gt; message and creates a shared lib containing libhwloc_embedded).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In short, I don't really see what risk we would be taking on the hwloc
</span><br>
<span class="quotelev2">&gt;&gt; side if we keep embedding+plugins possible (and still don't enable
</span><br>
<span class="quotelev2">&gt;&gt; plugins by default).
</span><br>
<span class="quotelev1">&gt; Ok.  It's probably worth documenting, though.  In the OMPI case, for example, OMPI cannot be opened in a private namespace (e.g., as a python plugin) and then have hwloc also opened in a private namespace; hwloc must be opened in a public namespace.  This has caused unhappiness in certain cases where upper-layer application authors were trying to open all plugins in private namespaces but couldn't.  The same will be true with hwloc: those who embed hwloc should be *strongly advised* to not use libltdl (even though it's not the default) because of the private/public namespace issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Something like this?
<br>
<p>--- a/doc/hwloc.doxy
<br>
+++ b/doc/hwloc.doxy
<br>
@@ -2147,6 +2147,9 @@ is registered to the hwloc core.
<br>
&nbsp;Components are then only enabled if the topology configuration
<br>
&nbsp;requests it, as explained in the previous sections.
<br>
&nbsp;
<br>
+Also note that plugins should carefully be enabled and used when
<br>
+embedding hwloc in another project, see \ref embed for details.
<br>
+
<br>
&nbsp;\section plugins_adding Adding new discovery components and plugins
<br>
&nbsp;
<br>
&nbsp;The types and functions cited below are declared in the hwloc/plugins.h header.
<br>
@@ -2338,6 +2341,14 @@ you can directly integrate hwloc's m4 configure macro into your
<br>
&nbsp;configure script.  You can then invoke hwloc's configuration tests and
<br>
&nbsp;build setup by calling an m4 macro (see below).
<br>
&nbsp;
<br>
+Although hwloc plugins may be used in embedded mode, the embedder
<br>
+project will have to manually setup libltdl in its build system so
<br>
+that hwloc can load its plugins.
<br>
+Also, embedders should avoid using their own plugins and hwloc plugins
<br>
+simultaneously because of possible issues with public and private
<br>
+namespaces when using libltdl.
<br>
+The embedder project is strongly advised not to use libltdl.
<br>
+
<br>
&nbsp;\section embedding_m4 Using hwloc's M4 Embedding Capabilities
<br>
&nbsp;
<br>
&nbsp;Every project is different, and there are many different ways of
<br>
<p><p><p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3733.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>Previous message:</strong> <a href="3731.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3731.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3734.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3734.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
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
