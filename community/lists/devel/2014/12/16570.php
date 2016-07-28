<?
$subject_val = "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 19:37:37 2014" -->
<!-- isoreceived="20141213003737" -->
<!-- sent="Fri, 12 Dec 2014 16:37:34 -0800" -->
<!-- isosent="20141213003734" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host" -->
<!-- id="BEBD0979-203E-47A0-A498-BF537EBE8A47_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AEF460B6-5F8A-4F82-B6DD-99A0AA9DD7ED_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 19:37:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16571.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Previous message:</strong> <a href="16569.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>In reply to:</strong> <a href="16569.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16571.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Reply:</strong> <a href="16571.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Would you be open to a patch you can test instead of me rolling an rc? I&#146;d be happy to send one in a while
<br>
<p><span class="quotelev1">&gt; On Dec 12, 2014, at 4:34 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m hoping it will fix it. The timeout code was the only change from 1.8.3 besides the loopback warning, so it should restore the prior behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 12, 2014, at 4:32 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Dec 12, 2014 at 4:29 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; All right - I&#146;ll surrender and remove the timeout. Will release rc4 later tonight.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for putting you thru this Paul - for some reason, these problems aren&#146;t showing up elsewhere.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Even at a 300s timeout I don't get a connection.
</span><br>
<span class="quotelev2">&gt;&gt; Is rc4 expected to fix that, or are we still &quot;fishing&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16568.php">http://www.open-mpi.org/community/lists/devel/2014/12/16568.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16570/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16571.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Previous message:</strong> <a href="16569.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>In reply to:</strong> <a href="16569.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16571.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Reply:</strong> <a href="16571.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
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
