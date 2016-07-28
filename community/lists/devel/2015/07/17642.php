<?
$subject_val = "Re: [OMPI devel] RFC: kill alpha asm support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 16:06:20 2015" -->
<!-- isoreceived="20150714200620" -->
<!-- sent="Tue, 14 Jul 2015 13:06:15 -0700" -->
<!-- isosent="20150714200615" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: kill alpha asm support" -->
<!-- id="CB1ACDFC-104B-4F24-A168-8EFDBDD02443_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150714193527.GB76483_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: kill alpha asm support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-14 16:06:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17643.php">Christopher Samuel: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17641.php">Nathan Hjelm: "Re: [OMPI devel] RFC: kill alpha asm support"</a>
<li><strong>In reply to:</strong> <a href="17641.php">Nathan Hjelm: "Re: [OMPI devel] RFC: kill alpha asm support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: kill alpha asm support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: kill alpha asm support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p><span class="quotelev1">&gt; On Jul 14, 2015, at 12:35 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That last sentence got mucked up somehow. Should read
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone still interested in alpha support can use the gcc sync atomics or
</span><br>
<span class="quotelev1">&gt; sitck with 1.10 and earlier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, it looks like a Chinese company makes an alpha derivative called
</span><br>
<span class="quotelev1">&gt; ShenWei (<a href="https://en.wikipedia.org/wiki/ShenWei">https://en.wikipedia.org/wiki/ShenWei</a>). It is not in widespread
</span><br>
<span class="quotelev1">&gt; use so its existence should not save the alpha asm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 14, 2015 at 01:29:28PM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would like to kill the alpha assembly support in Open MPI in 2.x and
</span><br>
<span class="quotelev2">&gt;&gt; master. alpha processors have not been available since 2007. Anyone
</span><br>
<span class="quotelev2">&gt;&gt; still interested in alpha support can use the gcc sync atomics are stick
</span><br>
<span class="quotelev2">&gt;&gt; with 1.10 or earlier?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any objections?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17640.php">http://www.open-mpi.org/community/lists/devel/2015/07/17640.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17641.php">http://www.open-mpi.org/community/lists/devel/2015/07/17641.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17643.php">Christopher Samuel: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17641.php">Nathan Hjelm: "Re: [OMPI devel] RFC: kill alpha asm support"</a>
<li><strong>In reply to:</strong> <a href="17641.php">Nathan Hjelm: "Re: [OMPI devel] RFC: kill alpha asm support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: kill alpha asm support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: kill alpha asm support"</a>
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
