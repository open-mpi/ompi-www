<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 17:52:20 2015" -->
<!-- isoreceived="20151020215220" -->
<!-- sent="Tue, 20 Oct 2015 21:51:57 +0000" -->
<!-- isosent="20151020215157" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)" -->
<!-- id="832333CA-B292-4A25-A5F6-28ACBBD48123_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA147MqBuVvv5rN2mARfo-mEXHQO7o86+QNTzog4-f_kxWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 17:51:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18216.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18215.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2015, at 5:26 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think heterogeneous multirail is still pretty uncommon.  It might still be ok to force users (or better yet, their admins -- via the global mca-params.conf file) to use level 3 to precisely specify which network / OMPI API to use (e.g., BTL, MTL, ...etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think a reasonable fraction of IB-connected clusters also have an Ethernet network plus have IPoIB enabled (thus two IP networks).
</span><br>
<span class="quotelev1">&gt; So, I don't agree that heterogenous multirail is &quot;pretty uncommon&quot;.
</span><br>
<p>(just addressing this one point)
<br>
<p>Sure, but in that case, it's pretty clear that OMPI should exclusively use some kinda of &quot;native&quot; IB API to use the IB -- not the Ethernet network, and not IPoIB.  That's what OMPI has been doing for years.
<br>
<p>Perhaps I should clarify: the &quot;heterogeneous multirail&quot; I was referring to is when you have multiple high-speed/HPC-oriented networks.  I'm not counting your scenario because 1G Ethernet is not generally used for MPI traffic unless that's your only network.  IPoIB is not generally used for MPI traffic because it just adds latency and decreases bandwidth compared to native IB transports.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18216.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18215.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
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
