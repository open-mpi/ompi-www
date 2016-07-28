<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 16:04:40 2015" -->
<!-- isoreceived="20150304210440" -->
<!-- sent="Wed, 4 Mar 2015 21:04:39 +0000" -->
<!-- isosent="20150304210439" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node" -->
<!-- id="781BB48C-38DB-477A-8D33-E5C51646931F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16mYUXz3KUhBWKc3xQezZUxd=PWWb6FV+grfcnHCLz9Lg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-04 16:04:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17098.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17096.php">Paul Hargrove: "Re: [OMPI devel] master tarball broken"</a>
<li><strong>In reply to:</strong> <a href="17093.php">Paul Hargrove: "[OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17098.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17098.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 4, 2015, at 11:56 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a system with InifniPath HCAs, where I've historically tested mtl:psm.
</span><br>
<span class="quotelev1">&gt; For some reason, that appears to have ceased working some time in the past 4 months.
</span><br>
<span class="quotelev1">&gt; However, this report is about something else.
</span><br>
<span class="quotelev1">&gt; I am using the current master tarball: openmpi-dev-1203-g171d674.tar.bz2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I ran configure, verbs support was found even though it was not my intent to use it.
</span><br>
<span class="quotelev1">&gt; So, I am running with an explicit blt list that omits verbs and am disabling the broken mtl:psm and mtl:ofi as well.
</span><br>
<span class="quotelev1">&gt; However, I am getting complaints from some verbs-related code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self,tcp -mca mtl ^psm,ofi -np 2 -host n15,n16  examples/ring_c
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0
</span><br>
<p>I think that warning is printed by libibverbs itself.  Are you 100% sure there are no IB HCAs sitting in the head node?  If there are IB HCAs but you don't want them to be used, you might want to ensure that the various verbs kernel modules don't get loaded, which is one half of the mismatch which confuses libibverbs.
<br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hostname:    n16
</span><br>
<span class="quotelev1">&gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hostname:    n15
</span><br>
<span class="quotelev1">&gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hostname:    n16
</span><br>
<span class="quotelev1">&gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hostname:    n15
</span><br>
<span class="quotelev1">&gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>Hmm... I don't know enough about how show_help works, but I thought that would have at least de-duped some of this.  It looks like the fork check is run once per device, so show_help may not be able to de-dupe everything.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17098.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17096.php">Paul Hargrove: "Re: [OMPI devel] master tarball broken"</a>
<li><strong>In reply to:</strong> <a href="17093.php">Paul Hargrove: "[OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17098.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17098.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
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
