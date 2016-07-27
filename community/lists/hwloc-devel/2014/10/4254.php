<?
$subject_val = "Re: [hwloc-devel] hwloc version number";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 20:59:27 2014" -->
<!-- isoreceived="20141002005927" -->
<!-- sent="Thu, 2 Oct 2014 00:59:25 +0000" -->
<!-- isosent="20141002005925" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc version number" -->
<!-- id="03EE6C47-B59D-415F-B451-890E57EA9372_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="124CB694-E0A7-42B2-84C3-662381557F95_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc version number<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-01 20:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4255.php">Brice Goglin: "Re: [hwloc-devel] hwloc version number"</a>
<li><strong>Previous message:</strong> <a href="4253.php">Jeff Squyres (jsquyres): "[hwloc-devel] hwloc version number"</a>
<li><strong>In reply to:</strong> <a href="4253.php">Jeff Squyres (jsquyres): "[hwloc-devel] hwloc version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4255.php">Brice Goglin: "Re: [hwloc-devel] hwloc version number"</a>
<li><strong>Reply:</strong> <a href="4255.php">Brice Goglin: "Re: [hwloc-devel] hwloc version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Errr... I got the patch slightly wrong.  The one added line should include the &quot;.$HWLOC_RELEASE_VERSION&quot; at the end.  You get the idea...
<br>
<p><p>On Oct 1, 2014, at 8:50 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We just changed the version numbering scheme over in OMPI to always be &quot;a.b.c&quot;, even if c==0.  Do we want the same thing in hwloc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now, hwloc uses the old OMPI versioning scheme -- it's &quot;a.b.c&quot;, except when c==0, and then the version is &quot;a.b&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a pretty simple change:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/config/hwloc_get_version.sh b/config/hwloc_get_version.sh
</span><br>
<span class="quotelev1">&gt; index 45139f4..4a3d201 100755
</span><br>
<span class="quotelev1">&gt; --- a/config/hwloc_get_version.sh
</span><br>
<span class="quotelev1">&gt; +++ b/config/hwloc_get_version.sh
</span><br>
<span class="quotelev1">&gt; @@ -43,12 +43,7 @@ else
</span><br>
<span class="quotelev1">&gt;        p&quot; &lt; &quot;$srcfile&quot;`
</span><br>
<span class="quotelev1">&gt;        eval &quot;$ompi_vers&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        # Only include the release version if it isn't 0
</span><br>
<span class="quotelev1">&gt; -        if test $HWLOC_RELEASE_VERSION -ne 0 ; then
</span><br>
<span class="quotelev1">&gt; -            HWLOC_VERSION=&quot;$HWLOC_MAJOR_VERSION.$HWLOC_MINOR_VERSION.$HWLOC_REL
</span><br>
<span class="quotelev1">&gt; -        else
</span><br>
<span class="quotelev1">&gt; -            HWLOC_VERSION=&quot;$HWLOC_MAJOR_VERSION.$HWLOC_MINOR_VERSION&quot;
</span><br>
<span class="quotelev1">&gt; -        fi
</span><br>
<span class="quotelev1">&gt; +        HWLOC_VERSION=&quot;$HWLOC_MAJOR_VERSION.$HWLOC_MINOR_VERSION&quot;
</span><br>
<span class="quotelev1">&gt;         HWLOC_VERSION=&quot;${HWLOC_VERSION}${HWLOC_GREEK_VERSION}&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         # If HWLOC_SNAPSHOT=1, then use HWLOC_SNAPSHOT_VERSION
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/index.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/index.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4255.php">Brice Goglin: "Re: [hwloc-devel] hwloc version number"</a>
<li><strong>Previous message:</strong> <a href="4253.php">Jeff Squyres (jsquyres): "[hwloc-devel] hwloc version number"</a>
<li><strong>In reply to:</strong> <a href="4253.php">Jeff Squyres (jsquyres): "[hwloc-devel] hwloc version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4255.php">Brice Goglin: "Re: [hwloc-devel] hwloc version number"</a>
<li><strong>Reply:</strong> <a href="4255.php">Brice Goglin: "Re: [hwloc-devel] hwloc version number"</a>
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
