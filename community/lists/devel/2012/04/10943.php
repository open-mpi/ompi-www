<?
$subject_val = "Re: [OMPI devel] libevent socket code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 30 16:55:31 2012" -->
<!-- isoreceived="20120430205531" -->
<!-- sent="Mon, 30 Apr 2012 14:55:23 -0600" -->
<!-- isosent="20120430205523" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libevent socket code" -->
<!-- id="AB385AD8-C4FF-40F6-BF8C-31E5D3B44CDA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1204251103340.25930_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libevent socket code<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-30 16:55:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10942.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10930.php">Nathan Hjelm: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10946.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10946.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send me a copy of the warnings, or tell me which machine at LANL is generating them? I'm working on libevent now (found a bug they are helping with) and can take a look at it.
<br>
<p><p>On Apr 25, 2012, at 11:05 AM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Let me take a look. The code in question is in evutil.c and bufferevent_sock.c . If there is no option we might be able to get away with just removing these files from the Makefile.am.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 25 Apr 2012, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2012, at 12:50 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can't it be done with configuring --without-libevent-sockets or some such thing? I really hate munging the code directly as it creates lots of support issues and makes it harder to upgrade.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If there's a libevent configure option we should be using, we can probably set that to be enabled by default.  Let me know.
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10942.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10930.php">Nathan Hjelm: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10946.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10946.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
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
