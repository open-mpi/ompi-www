<?
$subject_val = "Re: [OMPI devel] libevent socket code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 13:05:25 2012" -->
<!-- isoreceived="20120425170525" -->
<!-- sent="Wed, 25 Apr 2012 11:05:13 -0600 (MDT)" -->
<!-- isosent="20120425170513" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libevent socket code" -->
<!-- id="alpine.OSX.2.00.1204251103340.25930_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="880E6F30-9EE2-45E5-9475-02E29DFC7B91_at_cisco.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 13:05:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10931.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10929.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>In reply to:</strong> <a href="10929.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10943.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Reply:</strong> <a href="10943.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me take a look. The code in question is in evutil.c and bufferevent_sock.c . If there is no option we might be able to get away with just removing these files from the Makefile.am.
<br>
<p>-Nathan
<br>
<p>On Wed, 25 Apr 2012, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 25, 2012, at 12:50 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can't it be done with configuring --without-libevent-sockets or some such thing? I really hate munging the code directly as it creates lots of support issues and makes it harder to upgrade.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there's a libevent configure option we should be using, we can probably set that to be enabled by default.  Let me know.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10931.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10929.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>In reply to:</strong> <a href="10929.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10943.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Reply:</strong> <a href="10943.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
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
