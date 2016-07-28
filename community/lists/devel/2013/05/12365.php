<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 09:19:22 2013" -->
<!-- isoreceived="20130507131922" -->
<!-- sent="Tue, 7 May 2013 13:19:02 +0000" -->
<!-- isosent="20130507131902" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F60A98F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6AA86100-C35B-4401-B405-E9695346F70E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 09:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12366.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Q: project based MCA param files"</a>
<li><strong>Previous message:</strong> <a href="12364.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<li><strong>In reply to:</strong> <a href="12364.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12367.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<li><strong>Reply:</strong> <a href="12367.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 6, 2013, at 10:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Could someone help me out a bit here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * I'm unaware of any mechanism for &quot;ignoring&quot; an entire framework. Was something added for that purpose?
</span><br>
<p>It's been in autogen.pl for a while -- check out the end of mca_process_framework() in autogen.pl.
<br>
<p><span class="quotelev1">&gt; * What &quot;non-MCA&quot; projects are in our repository? Everything appears to be based on MCA plugins.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Looking at Trac, we eliminated all project/config directories when we did the OMPI-RTE abstraction. So what are we looping across at the end of autogen?
</span><br>
<p>Yes, we did.  ORNL specifically asked me/Nathan off-list if they could add this loop in, because they have some off-trunk repos (e.g., STCI) that both still use the config/ directory stuff and have non-MCA projects.  I didn't see any harm in these things; e.g., the loop only adds -I if the directory exists.  I.e., I saw it as being an attempt to be friendly to those who are trying to use our lower laters (ORTE and/or OPAL) with non-OMPI projects.  I thought this fit in well with the move-the-BTLs-down-to-OPAL philosophy.
<br>
<p>That being said, if others disagree -- e.g., Ralph has a valid point: this is to help projects that are outside of our trunk -- let's discuss.  This will probably be a useful topic to discuss today on the teleconf.
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
<li><strong>Next message:</strong> <a href="12366.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Q: project based MCA param files"</a>
<li><strong>Previous message:</strong> <a href="12364.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<li><strong>In reply to:</strong> <a href="12364.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12367.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<li><strong>Reply:</strong> <a href="12367.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
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
