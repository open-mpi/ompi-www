<?
$subject_val = "[OMPI devel] Update to usnic BTL / libfabric";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 09:30:13 2014" -->
<!-- isoreceived="20141209143013" -->
<!-- sent="Tue, 9 Dec 2014 14:29:54 +0000" -->
<!-- isosent="20141209142954" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Update to usnic BTL / libfabric" -->
<!-- id="0D8CC2FA-1123-478C-9F0F-785918662FE7_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Update to usnic BTL / libfabric<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 09:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16469.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1"</a>
<li><strong>Previous message:</strong> <a href="16467.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16480.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Reply:</strong> <a href="16480.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I mentioned on the call a week ago, the usnic BTL has been updated to use libfabric (instead of verbs).
<br>
<p>What is libfabric?
<br>
--&gt; Think of it as a &quot;next generation verbs&quot; -- it's OS-bypass networking for a wide range of network hardware, and libfabric contains many more capabilities than the verbs API.  libfabric is being developed by most the same people who initially developed verbs; it's not in competition with verbs -- it's a true &quot;next generation&quot; effort.  See <a href="http://ofiwg.github.io/libfabric/">http://ofiwg.github.io/libfabric/</a> for more detail.
<br>
<p>Why should anyone care?
<br>
--&gt; The usnic BTL has been updated to use libfabric.  I have therefore removed all usnic-specific code from the verbs parts of the OMPI code base (e.g., opal/mca/common).  Additionally, there will shortly be another commit that introduces another OMPI network device that uses libfabric.
<br>
<p>Did you really just embed libfabric in opal/common/libfabric?
<br>
--&gt; Yes -- but this is temporary.  libfabric isn't v1.0 yet -- there aren't libfabric tarballs being distributed.  Hence, other than git-cloning the libfabric github repo, you can't easily build OMPI against libfabric.  So we are temporarily embedding a copy of libfabric in OMPI, partly for convenience, and partly because the libfabric API is still changing slightly -- we need a stable libfabric stake in the ground against which to build the usnic and other components.  We'll update the embedded libfabric periodically to keep up with its development (e.g., I just did, earlier this morning).  We anticipate removing the embedded copy of libfabric at some point in the future.
<br>
<p>Whoa; I'm getting a slew of -pedantic warnings when compiling libfabric!
<br>
--&gt; Yeah, sorry about that.  :-(  I added a pragma this morning that should remove some of them, but there's still a bunch of -pedantic warnings when you compile opal/mca/common/libfabric.  We're working with libfabric upstream to get them fixed.  Stay tuned.
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
<li><strong>Next message:</strong> <a href="16469.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1"</a>
<li><strong>Previous message:</strong> <a href="16467.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16480.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Reply:</strong> <a href="16480.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
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
