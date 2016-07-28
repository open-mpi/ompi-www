<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 12:07:38 2007" -->
<!-- isoreceived="20070806160738" -->
<!-- sent="Mon, 6 Aug 2007 10:07:28 -0600" -->
<!-- isosent="20070806160728" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)" -->
<!-- id="30090411-DF45-45F0-BE24-546028314E4D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070805210550.GB7677_at_ndfa" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 12:07:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2085.php">Ralph H Castain: "[OMPI devel] Trunk borked?"</a>
<li><strong>Previous message:</strong> <a href="2083.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>In reply to:</strong> <a href="2076.php">dispanser_at_[hidden]: "[OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2090.php">dispanser_at_[hidden]: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>Reply:</strong> <a href="2090.php">dispanser_at_[hidden]: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 5, 2007, at 3:05 PM, dispanser_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I fixed the problem by setting the peer_state to  
</span><br>
<span class="quotelev1">&gt; MCA_OOB_TCP_CONNECTING
</span><br>
<span class="quotelev1">&gt; after creating the socket, which works for me.  I'm not sure if  
</span><br>
<span class="quotelev1">&gt; this is
</span><br>
<span class="quotelev1">&gt; always correct, though.
</span><br>
<p>Can you try the attached patch?  It's pretty close to what you've  
<br>
suggested, but should eliminate one corner case that you could, in  
<br>
theory, run into with your solution.  You are using a nightly tarball  
<br>
from the trunk, correct?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2084/oob_ipv6.diff">oob_ipv6.diff</a>
</ul>
<!-- attachment="oob_ipv6.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2085.php">Ralph H Castain: "[OMPI devel] Trunk borked?"</a>
<li><strong>Previous message:</strong> <a href="2083.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>In reply to:</strong> <a href="2076.php">dispanser_at_[hidden]: "[OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2090.php">dispanser_at_[hidden]: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>Reply:</strong> <a href="2090.php">dispanser_at_[hidden]: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
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
