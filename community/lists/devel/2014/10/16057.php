<?
$subject_val = "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 09:23:23 2014" -->
<!-- isoreceived="20141017132323" -->
<!-- sent="Fri, 17 Oct 2014 13:23:21 +0000" -->
<!-- isosent="20141017132321" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?" -->
<!-- id="1CC0D610-6E7C-41B6-9AEA-48C25D1B100D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87egu6kfrw.fsf_at_jedbrown.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 09:23:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16056.php">Jed Brown: "[OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16056.php">Jed Brown: "[OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 17, 2014, at 6:05 AM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You can get them locally by fetching from open-mpi/ompi-release, but the
</span><br>
<span class="quotelev1">&gt; only tag in open-mpi/ompi is called &quot;dev&quot; and on a seemingly arbitrary
</span><br>
<span class="quotelev1">&gt; commit.  Isn't that awkward already, and more so with each passing year?
</span><br>
<span class="quotelev1">&gt; Release tags in the development repository are useful to determine which
</span><br>
<span class="quotelev1">&gt; released versions have a feature or bug.
</span><br>
<p>I'm not sure what you're asking.
<br>
<p>Releases are cut from the release branches, which are in the ompi-release repo.  They are tagged appropriately for each release.
<br>
<p>The ompi repo only contains the master branch.  Releases are not made from master, and therefore it doesn't make sense to tag it with release tags.  master is therefore not (directly) related to any given release.
<br>
<p>The &quot;dev&quot; tag is there so that we can make nightly tarballs with a logical sequence (via &quot;git describe&quot;).  The &quot;dev&quot; tag is basically there as the point at which we converted to git.  We could have put it back at the beginning of time (i.e., equivalent to SVN r1 (i.e., the first CVS commit!)), but it didn't really matter, so we just opted for a dev that resulted in a smaller &quot;git describe&quot; number.
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
<li><strong>Next message:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16056.php">Jed Brown: "[OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16056.php">Jed Brown: "[OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
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
