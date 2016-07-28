<?
$subject_val = "Re: [OMPI devel] openib fragment alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 16:39:15 2013" -->
<!-- isoreceived="20130220213915" -->
<!-- sent="Wed, 20 Feb 2013 21:39:09 +0000" -->
<!-- isosent="20130220213909" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib fragment alignment" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A016E8C49_at_MTIDAG02.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F4E222_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib fragment alignment<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 16:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12146.php">Nathan Hjelm: "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Previous message:</strong> <a href="12144.php">Jeff Squyres (jsquyres): "[OMPI devel] openib fragment alignment"</a>
<li><strong>In reply to:</strong> <a href="12144.php">Jeff Squyres (jsquyres): "[OMPI devel] openib fragment alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12146.php">Nathan Hjelm: "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Reply:</strong> <a href="12146.php">Nathan Hjelm: "Re: [OMPI devel] openib fragment alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would hold off, if possible, until I can investigate the issue. I don't, off-hand, know why the 2-byte alignment, although I would suspect it's for performance reasons.   
<br>
<p><p>Josh
<br>
<p><p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Wednesday, February 20, 2013 4:35 PM
<br>
To: &lt;devel_at_[hidden]&gt;
<br>
Subject: [OMPI devel] openib fragment alignment
<br>
Importance: High
<br>
<p>Arrgh.  I think you're going to make me eat my words (<a href="http://www.open-mpi.org/community/lists/devel/2013/02/12143.php">http://www.open-mpi.org/community/lists/devel/2013/02/12143.php</a>).  
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
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12146.php">Nathan Hjelm: "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Previous message:</strong> <a href="12144.php">Jeff Squyres (jsquyres): "[OMPI devel] openib fragment alignment"</a>
<li><strong>In reply to:</strong> <a href="12144.php">Jeff Squyres (jsquyres): "[OMPI devel] openib fragment alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12146.php">Nathan Hjelm: "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Reply:</strong> <a href="12146.php">Nathan Hjelm: "Re: [OMPI devel] openib fragment alignment"</a>
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
