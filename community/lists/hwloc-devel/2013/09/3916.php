<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 29 17:16:22 2013" -->
<!-- isoreceived="20130929211622" -->
<!-- sent="Sun, 29 Sep 2013 14:16:17 -0700" -->
<!-- isosent="20130929211617" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="CAAvDA15a-74xzrCsohbQ8g-PKBJ2gvxqLVmA+h-_J+H4R5j_Tg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9064CB_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] git / nightly builds<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-29 17:16:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3917.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-21-g94ecd43)"</a>
<li><strong>Previous message:</strong> <a href="3915.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3914.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Sep 29, 2013 at 5:20 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p>[snip]
<br>
<p><span class="quotelev1">&gt; The only branch that didn't have any tags at all was master, so I just
</span><br>
<span class="quotelev1">&gt; created a &quot;dev&quot; tag on master, and that was sufficient.
</span><br>
<p><p>Right, we plan to use the gitflow model in which master contains released
<br>
code and a &quot;develop&quot; branch serves the role of the svn trunk or cvs head as
<br>
the target for 99% of commits.  Since as I understand it, &quot;git describe&quot;
<br>
counts from the most recent tag, if we used git describe for tarballs we
<br>
probably apply a tag to the develop branch which names the upcoming
<br>
release.  Perhaps &quot;v1.7.3devel&quot;.
<br>
Even if master is your development branch, applying a more descriptive tag
<br>
is something you might consider.
<br>
<p>[snip]
<br>
<p><span class="quotelev1">&gt; That being said, when we tell users to get a nightly tarball (e.g., to get
</span><br>
<span class="quotelev1">&gt; a bug fix), my experience is that they don't know/care about the nightly
</span><br>
<span class="quotelev1">&gt; tarball numbering scheme: they always just get the most recent version.
</span><br>
<p><p><p>The advantage isn't only for the user.
<br>
When somebody reports &quot;I found a bug when trying nightly tarball
<br>
&lt;whatever&gt;.tar.gz&quot; it seems useful to me to (without leaving my email
<br>
client) know &quot;that was 8 days ago and I *know* we fixed &lt;blah&gt; since then&quot;.
<br>
&nbsp;With just a hash I am likely to defer my response until I have a moment to
<br>
correlate the hash to a date.  This is NOT a big deal, just an observation
<br>
that having the date in the filename makes talking about &quot;it&quot; more
<br>
meaningful.
<br>
<p>Who knows, maybe we'll just end up using git describe for its simplicity.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3917.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-21-g94ecd43)"</a>
<li><strong>Previous message:</strong> <a href="3915.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3914.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
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
