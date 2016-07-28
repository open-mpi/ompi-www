<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 17:56:50 2007" -->
<!-- isoreceived="20070509215650" -->
<!-- sent="Wed, 09 May 2007 16:56:46 -0500" -->
<!-- isosent="20070509215646" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened" -->
<!-- id="1178747806.382.128.camel_at_stevo-desktop" -->
<!-- inreplyto="46426B54.3020105_at_open-mpi.org" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 17:56:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1521.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1519.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-05-09 at 17:46 -0700, Andrew Friedley wrote:
<br>
<span class="quotelev2">&gt; &gt; Therefore, the only truly safe thing for an iWARP btl to do (or a
</span><br>
<span class="quotelev2">&gt; &gt; udapl btl since that is also an iWARP btl) is to have the active
</span><br>
<span class="quotelev2">&gt; &gt; layer send an MPI Layer &quot;nop&quot; of some kind immediately after 
</span><br>
<span class="quotelev2">&gt; &gt; establishing the connection if there is nothing else to send.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is fine for an iWARP/RDMACM/whatever BTL (or anything else that 
</span><br>
<span class="quotelev1">&gt; uses the OFA verbs interface(s)), but my argument is that uDAPL is NOT 
</span><br>
<span class="quotelev1">&gt; specifically there to support just iWARP (though it may include it), and 
</span><br>
<span class="quotelev1">&gt; that OFED's uDAPL should be adjusted to handle this.  Again, uDAPL is a 
</span><br>
<span class="quotelev1">&gt; network *independent* abstraction, so requiring network-dependent 
</span><br>
<span class="quotelev1">&gt; behavior from the uDAPL consumer is wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A related question -- how does this 'connection initiator must send 
</span><br>
<span class="quotelev1">&gt; first' requirement relate to UD?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It doesn't.  UD isn't supported in IWARP.  
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1521.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1519.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
