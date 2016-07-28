<?
$subject_val = "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 06:39:09 2011" -->
<!-- isoreceived="20110316103909" -->
<!-- sent="Wed, 16 Mar 2011 06:38:54 -0400" -->
<!-- isosent="20110316103854" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c" -->
<!-- id="89309CBB-E0BF-4B7C-901F-D9DE8AB2F266_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4D809230.7010407_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 06:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9078.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Previous message:</strong> <a href="9076.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9076.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9078.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Reply:</strong> <a href="9078.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
K. When Ralph and I removed that code, it was on he educated guess that no one was using it (because it hasn't compiled right in a while). If we were wrong, it can be put back, but someone will need to update it and Ralph and I don't have access to machines to test that behavior. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Mar 16, 2011, at 6:32 AM, &quot;Terry Dontje&quot; &lt;terry.dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 03/16/2011 06:21 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 16, 2011, at 5:51 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've seen this with the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RH 4.6 / OFED 1.3.6
</span><br>
<span class="quotelev2">&gt;&gt; Errr... did you look at <a href="http://www.open-mpi.org/community/lists/devel/2011/03/9068.php">http://www.open-mpi.org/community/lists/devel/2011/03/9068.php</a>?
</span><br>
<span class="quotelev1">&gt; Yes I did, and I will be talking with my group about this, this afternoon.  We might be able to remove that dependency.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CentOS 5.2 / OFED 1.3.6 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLES 10.1 /  OFED 1.3.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know the above is pretty darn old but it would be nice to know what is the oldest s/w we can be using?  Note things have been building up until now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, I am now trying to compile on a system with ofed 1.4.4.
</span><br>
<span class="quotelev2">&gt;&gt; I'll look at my MTT runs later this morning.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9077/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9078.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Previous message:</strong> <a href="9076.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9076.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9078.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Reply:</strong> <a href="9078.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
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
