<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 03:56:19 2007" -->
<!-- isoreceived="20070627075619" -->
<!-- sent="Wed, 27 Jun 2007 09:54:55 +0200" -->
<!-- isosent="20070627075455" -->
<!-- name="Georg Wassen" -->
<!-- email="wassen_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] send/recv during initialization" -->
<!-- id="468217CF.70407_at_lfbs.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="468126B1.8000508_at_open-mpi.org" -->
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
<strong>From:</strong> Georg Wassen (<em>wassen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-27 03:54:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1776.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="1774.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1765.php">Andrew Friedley: "Re: [OMPI devel] send/recv during initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1766.php">Georg Wassen: "[OMPI devel]  problem with openib, was: send/recv during initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; I assume you mean something like mca_coll_foo_init_query() for your 
</span><br>
<span class="quotelev1">&gt; initialization function.  And I'm guessing you're exchanging some sort 
</span><br>
<span class="quotelev1">&gt; of address information for your network here?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
correct.
<br>
<p><span class="quotelev1">&gt; What I actually did in my collective component was use PML's modex 
</span><br>
<span class="quotelev1">&gt; (module exchange) facility, defined in 
</span><br>
<span class="quotelev1">&gt; ompi/mca/pml/base/pml_base_module_exchange.h.  I think all of the BTLs 
</span><br>
<span class="quotelev1">&gt; use this, so look there if you would like to see examples.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fact that this is associated with the PML is a bit of a historical 
</span><br>
<span class="quotelev1">&gt; artifact; it is perfectly reasonable to use the modex stuff from a coll 
</span><br>
<span class="quotelev1">&gt; component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another facility you might be interested in is ORTE's DSS (data 
</span><br>
<span class="quotelev1">&gt; pack/unpack) and RML (remote messaging).  The BTLs tend to use this for 
</span><br>
<span class="quotelev1">&gt; out-of-band communication necessary for lazy connection establishment. 
</span><br>
<span class="quotelev1">&gt; The headers you want are orte/dss/dss.h and orte/mca/rml/rml.h.  Again, 
</span><br>
<span class="quotelev1">&gt; many of the BTLs use this, so look there for examples.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps!
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Thank's a lot! I'll look into these.
<br>
<p>Best regards,
<br>
Georg.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1776.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="1774.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1765.php">Andrew Friedley: "Re: [OMPI devel] send/recv during initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1766.php">Georg Wassen: "[OMPI devel]  problem with openib, was: send/recv during initialization"</a>
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
