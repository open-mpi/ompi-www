<?
$subject_val = "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 04:17:56 2008" -->
<!-- isoreceived="20080110091756" -->
<!-- sent="Thu, 10 Jan 2008 11:17:48 +0200" -->
<!-- isosent="20080110091748" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement" -->
<!-- id="4785E2BC.3080104_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080109233754.GB30920_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 04:17:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2952.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Previous message:</strong> <a href="2950.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>In reply to:</strong> <a href="2950.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2952.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Reply:</strong> <a href="2952.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Reply:</strong> <a href="2955.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Reply:</strong> <a href="2963.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jon Mason wrote:
<br>
<span class="quotelev1">&gt; The new cpc selection framework is now in place.  The patch below allows
</span><br>
<span class="quotelev1">&gt; for dynamic selection of cpc methods based on what is available.  It
</span><br>
<span class="quotelev1">&gt; also allows for inclusion/exclusions of methods.  It even futher allows
</span><br>
<span class="quotelev1">&gt; for modifying the priorities of certain cpc methods to better determine
</span><br>
<span class="quotelev1">&gt; the optimal cpc method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This patch also contains XRC compile time disablement (per Jeff's
</span><br>
<span class="quotelev1">&gt; patch).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Need make sure that CM stuff will be disabled during compile tine if it 
<br>
is not installed on machine.
<br>
<span class="quotelev1">&gt; At a high level, the cpc selections works by walking through each cpc
</span><br>
<span class="quotelev1">&gt; and allowing it to test to see if it is permissable to run on this
</span><br>
<span class="quotelev1">&gt; mpirun.  It returns a priority if it is permissable or a -1 if not.  All
</span><br>
<span class="quotelev1">&gt; of the cpc names and priorities are rolled into a string.  This string
</span><br>
<span class="quotelev1">&gt; is then encapsulated in a message and passed around all the ompi
</span><br>
<span class="quotelev1">&gt; processes.  Once received and unpacked, the list received is compared
</span><br>
<span class="quotelev1">&gt; to a local copy of the list.  The connection method is chosen by
</span><br>
<span class="quotelev1">&gt; comparing the lists passed around to all nodes via modex with the list
</span><br>
<span class="quotelev1">&gt; generated locally.  Any non-negative number is a potentially valid
</span><br>
<span class="quotelev1">&gt; connection method.  The method below of determining the optimal
</span><br>
<span class="quotelev1">&gt; connection method is to take the cross-section of the two lists.  The
</span><br>
<span class="quotelev1">&gt; highest single value (and the other side being non-negative) is selected
</span><br>
<span class="quotelev1">&gt; as the cpc method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test it out.  The tree can be found at
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/openib-cpc/">https://svn.open-mpi.org/svn/ompi/tmp-public/openib-cpc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This patch has been tested with IB and iWARP adapters on a 2 node system
</span><br>
<span class="quotelev1">&gt; (with it correctly choosing to use oob and happily ignoring iWARP
</span><br>
<span class="quotelev1">&gt; adapters).  It needs XRC testing and testing of larger node systems.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Did you run MTT over all thess changes ?
<br>
I have few machines with connectX and i will try to run MTT on Sunday.
<br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2952.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Previous message:</strong> <a href="2950.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>In reply to:</strong> <a href="2950.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2952.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Reply:</strong> <a href="2952.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Reply:</strong> <a href="2955.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Reply:</strong> <a href="2963.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
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
