<?
$subject_val = "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 11:50:28 2008" -->
<!-- isoreceived="20080110165028" -->
<!-- sent="Thu, 10 Jan 2008 10:50:22 -0600" -->
<!-- isosent="20080110165022" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement" -->
<!-- id="20080110165022.GE30920_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4785E2BC.3080104_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 11:50:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2956.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Previous message:</strong> <a href="2954.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2969.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Reply:</strong> <a href="2969.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 10, 2008 at 11:17:48AM +0200, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The new cpc selection framework is now in place.  The patch below allows
</span><br>
<span class="quotelev2">&gt; &gt; for dynamic selection of cpc methods based on what is available.  It
</span><br>
<span class="quotelev2">&gt; &gt; also allows for inclusion/exclusions of methods.  It even futher allows
</span><br>
<span class="quotelev2">&gt; &gt; for modifying the priorities of certain cpc methods to better determine
</span><br>
<span class="quotelev2">&gt; &gt; the optimal cpc method.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This patch also contains XRC compile time disablement (per Jeff's
</span><br>
<span class="quotelev2">&gt; &gt; patch).
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; Need make sure that CM stuff will be disabled during compile tine if it 
</span><br>
<span class="quotelev1">&gt; is not installed on machine.
</span><br>
<p>Oh, xoob doesn't show up at all for me.  So I'd say it is working. :-)
<br>
<p><span class="quotelev2">&gt; &gt; At a high level, the cpc selections works by walking through each cpc
</span><br>
<span class="quotelev2">&gt; &gt; and allowing it to test to see if it is permissable to run on this
</span><br>
<span class="quotelev2">&gt; &gt; mpirun.  It returns a priority if it is permissable or a -1 if not.  All
</span><br>
<span class="quotelev2">&gt; &gt; of the cpc names and priorities are rolled into a string.  This string
</span><br>
<span class="quotelev2">&gt; &gt; is then encapsulated in a message and passed around all the ompi
</span><br>
<span class="quotelev2">&gt; &gt; processes.  Once received and unpacked, the list received is compared
</span><br>
<span class="quotelev2">&gt; &gt; to a local copy of the list.  The connection method is chosen by
</span><br>
<span class="quotelev2">&gt; &gt; comparing the lists passed around to all nodes via modex with the list
</span><br>
<span class="quotelev2">&gt; &gt; generated locally.  Any non-negative number is a potentially valid
</span><br>
<span class="quotelev2">&gt; &gt; connection method.  The method below of determining the optimal
</span><br>
<span class="quotelev2">&gt; &gt; connection method is to take the cross-section of the two lists.  The
</span><br>
<span class="quotelev2">&gt; &gt; highest single value (and the other side being non-negative) is selected
</span><br>
<span class="quotelev2">&gt; &gt; as the cpc method.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please test it out.  The tree can be found at
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/openib-cpc/">https://svn.open-mpi.org/svn/ompi/tmp-public/openib-cpc/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This patch has been tested with IB and iWARP adapters on a 2 node system
</span><br>
<span class="quotelev2">&gt; &gt; (with it correctly choosing to use oob and happily ignoring iWARP
</span><br>
<span class="quotelev2">&gt; &gt; adapters).  It needs XRC testing and testing of larger node systems.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; Did you run MTT over all thess changes ?
</span><br>
<p>No I did not.  My thinking was that since this is just setting up the
<br>
connections, it'll either work or not.  Since MTT is more functional
<br>
testing, it wouldn't really stress it.  But it could be false reasoning
<br>
on my part.  My main test was running the full IMB suite on it.
<br>
<p>Of course, as soon as I get rdma cm in a working state, I'll be running
<br>
MTT to stress that.
<br>
<p><span class="quotelev1">&gt; I have few machines with connectX and i will try to run MTT on Sunday.
</span><br>
<p>Awesome!  I appreciate it.
<br>
<p>Thanks,
<br>
Jon
<br>
<p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2956.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Previous message:</strong> <a href="2954.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2969.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Reply:</strong> <a href="2969.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
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
