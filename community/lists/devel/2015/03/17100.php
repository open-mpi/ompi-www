<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 16:40:07 2015" -->
<!-- isoreceived="20150304214007" -->
<!-- sent="Wed, 4 Mar 2015 21:40:05 +0000" -->
<!-- isosent="20150304214005" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node" -->
<!-- id="7366A387-B6FE-426C-9470-89FC9A991D3C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17A_komL77qfiXV2FEDOHxnfVx5KDDtSQ6GsxOrQZ4+Ow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-04 16:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17101.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17099.php">Paul Hargrove: "[OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<li><strong>In reply to:</strong> <a href="17098.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17101.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17101.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 4, 2015, at 3:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Mar 4, 2015 at 1:04 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that warning is printed by libibverbs itself.  Are you 100% sure there are no IB HCAs sitting in the head node?  If there are IB HCAs but you don't want them to be used, you might want to ensure that the various verbs kernel modules don't get loaded, which is one half of the mismatch which confuses libibverbs.
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; FWIW, I can confirm that these two lines are from libibverbs itself:
</span><br>
<span class="quotelev1">&gt; $ strings /usr/lib64/libibverbs.a | grep -e 'no userspace' -e 'open config directory'
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for %s
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: couldn't open config directory '%s'.
</span><br>
<p>Yes, I think you'd also see the same message if you run &quot;ibv_devices&quot; or &quot;ibv_devinfo&quot; on the head node.
<br>
<p><span class="quotelev1">&gt; As it happens, the login node *does* have an HCA installed and the kernel modules appears to be loaded.  However, as the &quot;17th node&quot; in the cluster it was never cabled to the 16-port switch and the package(s) that should have created/populated /etc/libibverbs.d are *not* present (specifically the login node has libipathverbs-devel installed but not libipathverbs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, Dave, are you saying that what I describe in the previous paragraph would be considered &quot;misconfiguration&quot;?  I am fine with dropping the discussion of those first two lines if there is agreement that Open MPI shouldn't be responsible for handling this case.
</span><br>
<p>I would consider that to be a lesser misconfiguration, which is only really an issue because of libibverbs deficiencies.  Either the hardware could be removed from the head node or the kernel modules could be unloaded / prevented from loading on the head node.
<br>
<p><span class="quotelev1">&gt; Now the ibv_fork_init() warnings are another issue entirely.  Since btl:verbs and mtl:psm both work (at least separately) perfectly fine on the compute nodes, I don't believe that there are any configuration issues there.
</span><br>
<p>Agreed, something needs to be improved there.  I assume that Mike D. or someone from his team will take a look.  I don't have any bandwidth to look at this myself.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17101.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17099.php">Paul Hargrove: "[OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<li><strong>In reply to:</strong> <a href="17098.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17101.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17101.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
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
