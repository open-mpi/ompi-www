<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 17:46:33 2007" -->
<!-- isoreceived="20070509214633" -->
<!-- sent="Wed, 09 May 2007 17:46:12 -0700" -->
<!-- isosent="20070510004612" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened" -->
<!-- id="46426B54.3020105_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1EF1E44200D82B47BD5BA61171E8CE9D03C331A7_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
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
<strong>Date:</strong> 2007-05-09 20:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1518.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1516.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1512.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1518.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1518.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1520.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Therefore, the only truly safe thing for an iWARP btl to do (or a
</span><br>
<span class="quotelev1">&gt; udapl btl since that is also an iWARP btl) is to have the active
</span><br>
<span class="quotelev1">&gt; layer send an MPI Layer &quot;nop&quot; of some kind immediately after 
</span><br>
<span class="quotelev1">&gt; establishing the connection if there is nothing else to send.
</span><br>
<p>This is fine for an iWARP/RDMACM/whatever BTL (or anything else that 
<br>
uses the OFA verbs interface(s)), but my argument is that uDAPL is NOT 
<br>
specifically there to support just iWARP (though it may include it), and 
<br>
that OFED's uDAPL should be adjusted to handle this.  Again, uDAPL is a 
<br>
network *independent* abstraction, so requiring network-dependent 
<br>
behavior from the uDAPL consumer is wrong.
<br>
<p>A related question -- how does this 'connection initiator must send 
<br>
first' requirement relate to UD?
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1518.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1516.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1512.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1518.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1518.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1520.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
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
