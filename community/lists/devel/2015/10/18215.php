<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 17:26:22 2015" -->
<!-- isoreceived="20151020212622" -->
<!-- sent="Tue, 20 Oct 2015 14:26:17 -0700" -->
<!-- isosent="20151020212617" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)" -->
<!-- id="CAAvDA147MqBuVvv5rN2mARfo-mEXHQO7o86+QNTzog4-f_kxWA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E34F649-3EE4-46D1-B86A-223A0EAC13B9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 17:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18216.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18214.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18211.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18217.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18217.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct 20, 2015 at 1:47 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Oct 20, 2015, at 4:35 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As an example, I might have two ethernet cards, one of which is a Cisco
</span><br>
<span class="quotelev1">&gt; VNIC.
</span><br>
<span class="quotelev2">&gt; &gt; I would want be able to control which BTL or MTL is used on those NICs
</span><br>
<span class="quotelev1">&gt; independently, including the option to disable use of one or the other.
</span><br>
<span class="quotelev2">&gt; &gt; I do not want to learn distinct include/exclude MCA params for every BTL
</span><br>
<span class="quotelev1">&gt; and MTL to accomplish that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think heterogeneous multirail is still pretty uncommon.  It might still
</span><br>
<span class="quotelev1">&gt; be ok to force users (or better yet, their admins -- via the global
</span><br>
<span class="quotelev1">&gt; mca-params.conf file) to use level 3 to precisely specify which network /
</span><br>
<span class="quotelev1">&gt; OMPI API to use (e.g., BTL, MTL, ...etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
I think a reasonable fraction of IB-connected clusters also have an
<br>
Ethernet network plus have IPoIB enabled (thus two IP networks).
<br>
So, I don't agree that heterogenous multirail is &quot;pretty uncommon&quot;.
<br>
Regardless, lets ignore heterogenous multirail for a moment and consider a
<br>
related problem in a homogenous case.
<br>
<p>I have multiple ports of the same type, lets say a dual-port Mellanox HCA,
<br>
and just want to disable one of them (reserving it for Luster perhaps).
<br>
If OMPI is hiding from me the details of the API selection, how do I
<br>
enable/disable specific ports?
<br>
Right now I believe that I need two distinct MCA params to instruct ibv and
<br>
mxm both to exclude a given IB port.
<br>
I assume I will need two more params to tell ofi and ucx not to use the
<br>
port either, right?
<br>
Now lets assume I've got the portals4 reference implementation (over verbs)
<br>
installed too.
<br>
Now that makes no less than 5 MCA params I might need to pass to tell 5
<br>
different components to keep their hands off the reserved port.
<br>
<p>If I didn't know the HCA model/vendor, I might need a sixth and seventh MCA
<br>
param to tell psm and psm2 not to use the port.
<br>
However, if the port name is something like &quot;mlx4_0.0&quot; or &quot;ipath0.0&quot; then
<br>
we can at least know if mxm or psm* are even possible.
<br>
<p>I don't suggest that OMPI should magically discover &quot;aliases&quot; for a port
<br>
but if I have IPoIB the problem grows:
<br>
I need yet more MCA params to tell tcp, ofi (and maybe ucx?) not to use the
<br>
corresponding ibN interface.
<br>
And don't forget about oob_tcp_if_exclude.
<br>
<p>To ensure that Jeff doesn't dodge the issue, lets assume this desire to
<br>
disable one port is a *transient* need/desire by an end-user.
<br>
In other words, I don't accept &quot;admin should place all 11 MCA params in the
<br>
global config file&quot; as a valid solution.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18215/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18216.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18214.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18211.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18217.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18217.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
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
