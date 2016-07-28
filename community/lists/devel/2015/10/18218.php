<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 18:01:12 2015" -->
<!-- isoreceived="20151020220112" -->
<!-- sent="Tue, 20 Oct 2015 22:00:49 +0000" -->
<!-- isosent="20151020220049" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)" -->
<!-- id="D18F5ACD-9165-4A06-A9BF-8550F420BF87_at_cisco.com" -->
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
<strong>Date:</strong> 2015-10-20 18:00:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18219.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Previous message:</strong> <a href="18217.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18215.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18219.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18219.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2015, at 5:26 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have multiple ports of the same type, lets say a dual-port Mellanox HCA, and just want to disable one of them (reserving it for Luster perhaps).
</span><br>
<span class="quotelev1">&gt; If OMPI is hiding from me the details of the API selection, how do I enable/disable specific ports?
</span><br>
<span class="quotelev1">&gt; Right now I believe that I need two distinct MCA params to instruct ibv and mxm both to exclude a given IB port.
</span><br>
<span class="quotelev1">&gt; I assume I will need two more params to tell ofi and ucx not to use the port either, right?
</span><br>
<span class="quotelev1">&gt; Now lets assume I've got the portals4 reference implementation (over verbs) installed too.
</span><br>
<span class="quotelev1">&gt; Now that makes no less than 5 MCA params I might need to pass to tell 5 different components to keep their hands off the reserved port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I didn't know the HCA model/vendor, I might need a sixth and seventh MCA param to tell psm and psm2 not to use the port.
</span><br>
<span class="quotelev1">&gt; However, if the port name is something like &quot;mlx4_0.0&quot; or &quot;ipath0.0&quot; then we can at least know if mxm or psm* are even possible.
</span><br>
<p>I don't think it gets up to 7 MCA params to guarantee a specific API path is used to get to a specific network / port, but your overall point is fair.  I think it reduces to:
<br>
<p>Should a &quot;higher-level abstraction&quot; CLI set of options include the option to select a specific network interface?
<br>
<p>I don't know the answer to that.  One could argue that the &quot;expert&quot; layer will already let you do that, and that it will be difficult enough to create this new set of &quot;higher abstraction&quot; CLI options without *also* allowing the specification of interface+port.  But one could also argue -- and I think you are :-) -- that without allowing the specification of interface+port, the &quot;higher abstraction&quot; CLI options are significantly less useful.
<br>
<p><span class="quotelev1">&gt; I don't suggest that OMPI should magically discover &quot;aliases&quot; for a port but if I have IPoIB the problem grows:
</span><br>
<span class="quotelev1">&gt; I need yet more MCA params to tell tcp, ofi (and maybe ucx?) not to use the corresponding ibN interface.
</span><br>
<span class="quotelev1">&gt; And don't forget about oob_tcp_if_exclude.
</span><br>
<p>I'm not sure you're adding up MCA params correctly.  To guarantee that I use a specific IB interface (and not MXM and not PSM and not TCP/IPoIB and not ...), for example, you only need three:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca pml ob1 --mca btl openib,vader,self --mca btl_openib_if_include mlx4_0:0 ...
<br>
<p>(but don't get me wrong -- I acknowledge that you need to be an OMPI expert to know/figure that out, and that's not desirable)
<br>
<p>Are there other cases where the MCA param count really does explode to 10 or more?
<br>
<p><span class="quotelev1">&gt; To ensure that Jeff doesn't dodge the issue, lets assume this desire to disable one port is a *transient* need/desire by an end-user.
</span><br>
<span class="quotelev1">&gt; In other words, I don't accept &quot;admin should place all 11 MCA params in the global config file&quot; as a valid solution.
</span><br>
<p>Yes -- same point above: you're arguing that without allowing specifying interface+port, the higher-abstraction CLI options aren't as useful.
<br>
<p>You might be right.
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
<li><strong>Next message:</strong> <a href="18219.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Previous message:</strong> <a href="18217.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18215.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18219.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18219.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
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
