<?
$subject_val = "Re: [OMPI devel] openib fragment alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 16:51:48 2013" -->
<!-- isoreceived="20130220215148" -->
<!-- sent="Wed, 20 Feb 2013 14:51:43 -0700" -->
<!-- isosent="20130220215143" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib fragment alignment" -->
<!-- id="20130220215143.GC96894_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A016E8C49_at_MTIDAG02.mtl.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 16:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Previous message:</strong> <a href="12145.php">Joshua Ladd: "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>In reply to:</strong> <a href="12145.php">Joshua Ladd: "Re: [OMPI devel] openib fragment alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Reply:</strong> <a href="12147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Reply:</strong> <a href="12148.php">Paul Hargrove: "Re: [OMPI devel] openib fragment alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I talked to Pasha about the change. He suggests fragments are 2-byte aligned to save space. I suspect that on 64-bit platforms the fragment size is already a multiple of 8 bytes so this change will likely only affect 32-bit systems (which is where the bus error is occurring).
<br>
<p>-Nathan
<br>
<p>On Wed, Feb 20, 2013 at 09:39:09PM +0000, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt; I would hold off, if possible, until I can investigate the issue. I don't, off-hand, know why the 2-byte alignment, although I would suspect it's for performance reasons.   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, February 20, 2013 4:35 PM
</span><br>
<span class="quotelev1">&gt; To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] openib fragment alignment
</span><br>
<span class="quotelev1">&gt; Importance: High
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Arrgh.  I think you're going to make me eat my words (<a href="http://www.open-mpi.org/community/lists/devel/2013/02/12143.php">http://www.open-mpi.org/community/lists/devel/2013/02/12143.php</a>).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just recently lost my access to InfiniBand test gear, so I can't test this myself.  Hypothetically, it should be fine.  But throwing in an untested change literally right before a release without IB vendor say-so really, really gives me pause...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mellanox?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2013, at 4:27 PM, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #3519: Move r28083 to v1.6 branch
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------+--------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Reporter:  hjelmn                  |      Owner:  hjelmn
</span><br>
<span class="quotelev2">&gt; &gt;    Type:  changeset move request  |     Status:  new
</span><br>
<span class="quotelev2">&gt; &gt; Priority:  major                   |  Milestone:  Open MPI 1.6
</span><br>
<span class="quotelev2">&gt; &gt; Version:  trunk                   |
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------+--------------------------
</span><br>
<span class="quotelev2">&gt; &gt; (In [28083]) btl/openib: don't align fragments on 2 byte boundaries 
</span><br>
<span class="quotelev2">&gt; &gt; (changed to 8)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; cmr:v1.6,v1.7
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3519">https://svn.open-mpi.org/trac/ompi/ticket/3519</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; bugs mailing list
</span><br>
<span class="quotelev2">&gt; &gt; bugs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Previous message:</strong> <a href="12145.php">Joshua Ladd: "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>In reply to:</strong> <a href="12145.php">Joshua Ladd: "Re: [OMPI devel] openib fragment alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Reply:</strong> <a href="12147.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib fragment alignment"</a>
<li><strong>Reply:</strong> <a href="12148.php">Paul Hargrove: "Re: [OMPI devel] openib fragment alignment"</a>
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
