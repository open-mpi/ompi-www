<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 17:15:16 2007" -->
<!-- isoreceived="20070509211516" -->
<!-- sent="Wed, 9 May 2007 14:11:59 -0700" -->
<!-- isosent="20070509211159" -->
<!-- name="Caitlin Bestler" -->
<!-- email="caitlinb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened" -->
<!-- id="1EF1E44200D82B47BD5BA61171E8CE9D03C331A7_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1178740498.382.97.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Caitlin Bestler (<em>caitlinb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 17:11:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1513.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1511.php">Donald Kerr: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened"</a>
<li><strong>In reply to:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) OMPI is not adhering to the iwarp protocol requirement
</span><br>
<span class="quotelev1">&gt; that the ULP,
</span><br>
<span class="quotelev1">&gt; in this case OMPI, initiating the iwarp connection (the side
</span><br>
<span class="quotelev1">&gt; issuing the
</span><br>
<span class="quotelev1">&gt; dat_ep_connect() or rdma_connect()) _MUST_ be the first to
</span><br>
<span class="quotelev1">&gt; send an RDMA
</span><br>
<span class="quotelev1">&gt; message.  So if a OMPI process _accepts_ an rdma connection, then it
</span><br>
<span class="quotelev1">&gt; cannot send on that connection until it receives some sort of rdma
</span><br>
<span class="quotelev1">&gt; operation from the client process.  It appears the current OMPI
</span><br>
<span class="quotelev1">&gt; connection setup model doesn't enforce this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This is actually an MPA requirement, and accoring to *protocol* specs
<br>
having the active side send a zero length RDMA Write should be able
<br>
to fix the problem. However there is language in the RDMAC verbs that
<br>
clearly implies that the active side must Send something, and that an
<br>
RDMA Write is insufficient.
<br>
<p>Therefore, the only truly safe thing for an iWARP btl to do (or a
<br>
udapl btl since that is also an iWARP btl) is to have the active
<br>
layer send an MPI Layer &quot;nop&quot; of some kind immediately after 
<br>
establishing the connection if there is nothing else to send.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1513.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1511.php">Donald Kerr: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened"</a>
<li><strong>In reply to:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
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
