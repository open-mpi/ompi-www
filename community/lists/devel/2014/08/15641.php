<?
$subject_val = "Re: [OMPI devel] trunk hang when nodes have similar but private network";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 17:06:11 2014" -->
<!-- isoreceived="20140813210611" -->
<!-- sent="Wed, 13 Aug 2014 17:06:10 -0400" -->
<!-- isosent="20140813210610" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hang when nodes have similar but private network" -->
<!-- id="CAMJJpkVRh4QhfdXBdFg1X9BMbD-J4hD9weQ_NHO92wH4txWtMw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E615A533-3522-4C84-86DC-A6DA4F2FAF0C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hang when nodes have similar but private network<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 17:06:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15642.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Previous message:</strong> <a href="15640.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15636.php">Paul Hargrove: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The trunk is [almost] right. It has nice error handling, and a bunch of
<br>
other features.
<br>
<p>However, part of this bug report is troubling. We might want to check why
<br>
it doesn't exhaust all possible addressed before giving up on an endpoint.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>PS: I'm not saying that we should back-port this in the 1.8 ...
<br>
<p><p>On Wed, Aug 13, 2014 at 3:33 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Aug 13, 2014, at 12:52 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are many differences between the trunk and 1.8 regarding the TCP
</span><br>
<span class="quotelev1">&gt; BTL. The major I remember about is that the TCP in the trunk is reporting
</span><br>
<span class="quotelev1">&gt; errors to the upper level via the callbacks attached to fragments, while
</span><br>
<span class="quotelev1">&gt; the 1.8 TCP BTL doesn't.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, I guess that once a connection to a particular endpoint fails, the
</span><br>
<span class="quotelev1">&gt; trunk is getting the errors reported via the cb and then takes some drastic
</span><br>
<span class="quotelev1">&gt; measure. In the 1.8 we might fallback and try another IP address before
</span><br>
<span class="quotelev1">&gt; giving up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that has any effect on performance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e., should we bring this change to v1.8?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, put simply: which way is Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15638.php">http://www.open-mpi.org/community/lists/devel/2014/08/15638.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15641/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15642.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Previous message:</strong> <a href="15640.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="15638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15636.php">Paul Hargrove: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
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
