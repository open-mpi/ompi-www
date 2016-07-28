<?
$subject_val = "[OMPI devel] openib fragment alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 16:34:15 2013" -->
<!-- isoreceived="20130220213415" -->
<!-- sent="Wed, 20 Feb 2013 21:34:10 +0000" -->
<!-- isosent="20130220213410" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib fragment alignment" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F4E222_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="042.036e85eb51c1df12a2d2f219e4cf63ed_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] openib fragment alignment<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 16:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12145.php">Joshua Ladd: "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Previous message:</strong> <a href="12143.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12145.php">Joshua Ladd: "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Reply:</strong> <a href="12145.php">Joshua Ladd: "Re: [OMPI devel] openib fragment alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arrgh.  I think you're going to make me eat my words (<a href="http://www.open-mpi.org/community/lists/devel/2013/02/12143.php">http://www.open-mpi.org/community/lists/devel/2013/02/12143.php</a>).  
<br>
<p>I just recently lost my access to InfiniBand test gear, so I can't test this myself.  Hypothetically, it should be fine.  But throwing in an untested change literally right before a release without IB vendor say-so really, really gives me pause...
<br>
<p>Mellanox?
<br>
<p><p>On Feb 20, 2013, at 4:27 PM, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; #3519: Move r28083 to v1.6 branch
</span><br>
<span class="quotelev1">&gt; -----------------------------------+--------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  hjelmn                  |      Owner:  hjelmn
</span><br>
<span class="quotelev1">&gt;    Type:  changeset move request  |     Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  major                   |  Milestone:  Open MPI 1.6
</span><br>
<span class="quotelev1">&gt; Version:  trunk                   |
</span><br>
<span class="quotelev1">&gt; -----------------------------------+--------------------------
</span><br>
<span class="quotelev1">&gt; (In [28083]) btl/openib: don't align fragments on 2 byte boundaries
</span><br>
<span class="quotelev1">&gt; (changed to 8)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr:v1.6,v1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3519">https://svn.open-mpi.org/trac/ompi/ticket/3519</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; bugs mailing list
</span><br>
<span class="quotelev1">&gt; bugs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
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
<li><strong>Next message:</strong> <a href="12145.php">Joshua Ladd: "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Previous message:</strong> <a href="12143.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12145.php">Joshua Ladd: "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Reply:</strong> <a href="12145.php">Joshua Ladd: "Re: [OMPI devel] openib fragment alignment"</a>
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
