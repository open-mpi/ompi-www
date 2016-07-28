<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 16:25:47 2015" -->
<!-- isoreceived="20150304212547" -->
<!-- sent="Wed, 4 Mar 2015 13:25:01 -0800" -->
<!-- isosent="20150304212501" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node" -->
<!-- id="CAAvDA17A_komL77qfiXV2FEDOHxnfVx5KDDtSQ6GsxOrQZ4+Ow_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="781BB48C-38DB-477A-8D33-E5C51646931F_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-04 16:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17099.php">Paul Hargrove: "[OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<li><strong>Previous message:</strong> <a href="17097.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17097.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 4, 2015 at 1:04 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt;
<br>
wrote:
<br>
[...]
<br>
<p><span class="quotelev2">&gt; &gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev1">&gt; /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that warning is printed by libibverbs itself.  Are you 100% sure
</span><br>
<span class="quotelev1">&gt; there are no IB HCAs sitting in the head node?  If there are IB HCAs but
</span><br>
<span class="quotelev1">&gt; you don't want them to be used, you might want to ensure that the various
</span><br>
<span class="quotelev1">&gt; verbs kernel modules don't get loaded, which is one half of the mismatch
</span><br>
<span class="quotelev1">&gt; which confuses libibverbs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
[...]
<br>
<p>FWIW, I can confirm that these two lines are from libibverbs itself:
<br>
<p>$ strings /usr/lib64/libibverbs.a | grep -e 'no userspace' -e 'open config
<br>
directory'
<br>
libibverbs: Warning: no userspace device-specific driver found for %s
<br>
libibverbs: Warning: couldn't open config directory '%s'.
<br>
<p><p>As it happens, the login node *does* have an HCA installed and the kernel
<br>
modules appears to be loaded.  However, as the &quot;17th node&quot; in the cluster
<br>
it was never cabled to the 16-port switch and the package(s) that should
<br>
have created/populated /etc/libibverbs.d are *not* present (specifically
<br>
the login node has libipathverbs-devel installed but not libipathverbs).
<br>
<p>So, Dave, are you saying that what I describe in the previous paragraph
<br>
would be considered &quot;misconfiguration&quot;?  I am fine with dropping the
<br>
discussion of those first two lines if there is agreement that Open MPI
<br>
shouldn't be responsible for handling this case.
<br>
<p>Now the ibv_fork_init() warnings are another issue entirely.  Since
<br>
btl:verbs and mtl:psm both work (at least separately) perfectly fine on the
<br>
compute nodes, I don't believe that there are any configuration issues
<br>
there.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17099.php">Paul Hargrove: "[OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<li><strong>Previous message:</strong> <a href="17097.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17097.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
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
