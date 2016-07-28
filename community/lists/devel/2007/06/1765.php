<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 10:46:13 2007" -->
<!-- isoreceived="20070626144613" -->
<!-- sent="Tue, 26 Jun 2007 07:46:09 -0700" -->
<!-- isosent="20070626144609" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] send/recv during initialization" -->
<!-- id="468126B1.8000508_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4680EDA3.3010603_at_lfbs.rwth-aachen.de" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 10:46:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1766.php">Georg Wassen: "[OMPI devel]  problem with openib, was: send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1764.php">Peter Drakenberg: "[OMPI devel] Allgatherv performance anomaly"</a>
<li><strong>In reply to:</strong> <a href="1763.php">Georg Wassen: "[OMPI devel] send/recv during initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1775.php">Georg Wassen: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>Reply:</strong> <a href="1775.php">Georg Wassen: "Re: [OMPI devel] send/recv during initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume you mean something like mca_coll_foo_init_query() for your 
<br>
initialization function.  And I'm guessing you're exchanging some sort 
<br>
of address information for your network here?
<br>
<p>What I actually did in my collective component was use PML's modex 
<br>
(module exchange) facility, defined in 
<br>
ompi/mca/pml/base/pml_base_module_exchange.h.  I think all of the BTLs 
<br>
use this, so look there if you would like to see examples.
<br>
<p>The fact that this is associated with the PML is a bit of a historical 
<br>
artifact; it is perfectly reasonable to use the modex stuff from a coll 
<br>
component.
<br>
<p>Another facility you might be interested in is ORTE's DSS (data 
<br>
pack/unpack) and RML (remote messaging).  The BTLs tend to use this for 
<br>
out-of-band communication necessary for lazy connection establishment. 
<br>
The headers you want are orte/dss/dss.h and orte/mca/rml/rml.h.  Again, 
<br>
many of the BTLs use this, so look there for examples.
<br>
<p>Hope this helps!
<br>
<p>Andrew
<br>
<p>Georg Wassen wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working on a collective component and need point-to-point 
</span><br>
<span class="quotelev1">&gt; communication during module-initialization.
</span><br>
<span class="quotelev1">&gt; As BTL is initialized prior to the collectives, I tried to use send and 
</span><br>
<span class="quotelev1">&gt; recv like MPI_Send/_Recv do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; err = MCA_PML_CALL(send(buf, size, MPI_CHAR, to_id,
</span><br>
<span class="quotelev1">&gt;         COLL_SCI_TAG,  MCA_PML_BASE_SEND_STANDARD, comm));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This works for a total of 32 Bytes (8 times 4 Bytes) to each receiver. 
</span><br>
<span class="quotelev1">&gt; If I increase the number of processes, recv just doesn't return after 8 
</span><br>
<span class="quotelev1">&gt; recv-calls. (Further, this communication is extremely slow.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try to use MPI_Send/_Recv themselves, an error &quot;MPI not yet 
</span><br>
<span class="quotelev1">&gt; initialized&quot; occurs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Long story short: is there a way to communicate during 
</span><br>
<span class="quotelev1">&gt; mca_coll_*_module_init between different processes?
</span><br>
<span class="quotelev1">&gt; (I don't want to use TCP/IP-sockets while Open MPI should be able to do 
</span><br>
<span class="quotelev1">&gt; this more portable.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Georg Wassen.
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
<li><strong>Next message:</strong> <a href="1766.php">Georg Wassen: "[OMPI devel]  problem with openib, was: send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1764.php">Peter Drakenberg: "[OMPI devel] Allgatherv performance anomaly"</a>
<li><strong>In reply to:</strong> <a href="1763.php">Georg Wassen: "[OMPI devel] send/recv during initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1775.php">Georg Wassen: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>Reply:</strong> <a href="1775.php">Georg Wassen: "Re: [OMPI devel] send/recv during initialization"</a>
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
