<?
$subject_val = "Re: [hwloc-devel] hwloc version number";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 01:11:48 2014" -->
<!-- isoreceived="20141002051148" -->
<!-- sent="Thu, 02 Oct 2014 07:11:46 +0200" -->
<!-- isosent="20141002051146" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc version number" -->
<!-- id="542CDE92.1020706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="03EE6C47-B59D-415F-B451-890E57EA9372_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 01:11:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4256.php">Brice Goglin: "[hwloc-devel] Bring over netloc functionality (#117)"</a>
<li><strong>Previous message:</strong> <a href="4254.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc version number"</a>
<li><strong>In reply to:</strong> <a href="4254.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc version number"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes I want this, and even for the upcoming v1.10.0 :)
<br>
Brice
<br>
<p><p><p>Le 02/10/2014 02:59, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Errr... I got the patch slightly wrong.  The one added line should include the &quot;.$HWLOC_RELEASE_VERSION&quot; at the end.  You get the idea...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 1, 2014, at 8:50 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We just changed the version numbering scheme over in OMPI to always be &quot;a.b.c&quot;, even if c==0.  Do we want the same thing in hwloc?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right now, hwloc uses the old OMPI versioning scheme -- it's &quot;a.b.c&quot;, except when c==0, and then the version is &quot;a.b&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's a pretty simple change:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/config/hwloc_get_version.sh b/config/hwloc_get_version.sh
</span><br>
<span class="quotelev2">&gt;&gt; index 45139f4..4a3d201 100755
</span><br>
<span class="quotelev2">&gt;&gt; --- a/config/hwloc_get_version.sh
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/config/hwloc_get_version.sh
</span><br>
<span class="quotelev2">&gt;&gt; @@ -43,12 +43,7 @@ else
</span><br>
<span class="quotelev2">&gt;&gt;        p&quot; &lt; &quot;$srcfile&quot;`
</span><br>
<span class="quotelev2">&gt;&gt;        eval &quot;$ompi_vers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -        # Only include the release version if it isn't 0
</span><br>
<span class="quotelev2">&gt;&gt; -        if test $HWLOC_RELEASE_VERSION -ne 0 ; then
</span><br>
<span class="quotelev2">&gt;&gt; -            HWLOC_VERSION=&quot;$HWLOC_MAJOR_VERSION.$HWLOC_MINOR_VERSION.$HWLOC_REL
</span><br>
<span class="quotelev2">&gt;&gt; -        else
</span><br>
<span class="quotelev2">&gt;&gt; -            HWLOC_VERSION=&quot;$HWLOC_MAJOR_VERSION.$HWLOC_MINOR_VERSION&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -        fi
</span><br>
<span class="quotelev2">&gt;&gt; +        HWLOC_VERSION=&quot;$HWLOC_MAJOR_VERSION.$HWLOC_MINOR_VERSION&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         HWLOC_VERSION=&quot;${HWLOC_VERSION}${HWLOC_GREEK_VERSION}&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         # If HWLOC_SNAPSHOT=1, then use HWLOC_SNAPSHOT_VERSION
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/index.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/index.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4256.php">Brice Goglin: "[hwloc-devel] Bring over netloc functionality (#117)"</a>
<li><strong>Previous message:</strong> <a href="4254.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc version number"</a>
<li><strong>In reply to:</strong> <a href="4254.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc version number"</a>
<!-- nextthread="start" -->
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
