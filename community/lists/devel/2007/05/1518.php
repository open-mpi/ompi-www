<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 17:55:32 2007" -->
<!-- isoreceived="20070509215532" -->
<!-- sent="Wed, 9 May 2007 14:54:53 -0700" -->
<!-- isosent="20070509215453" -->
<!-- name="Caitlin Bestler" -->
<!-- email="caitlinb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened" -->
<!-- id="1EF1E44200D82B47BD5BA61171E8CE9D03C331F4_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Caitlin Bestler (<em>caitlinb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 17:54:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1519.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1520.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
general-bounces_at_[hidden] wrote:
<br>
<span class="quotelev2">&gt;&gt; Therefore, the only truly safe thing for an iWARP btl to do (or a
</span><br>
<span class="quotelev2">&gt;&gt; udapl btl since that is also an iWARP btl) is to have the active
</span><br>
<span class="quotelev2">&gt;&gt; layer send an MPI Layer &quot;nop&quot; of some kind immediately after
</span><br>
<span class="quotelev2">&gt;&gt; establishing the connection if there is nothing else to send.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is fine for an iWARP/RDMACM/whatever BTL (or anything
</span><br>
<span class="quotelev1">&gt; else that uses the OFA verbs interface(s)), but my argument
</span><br>
<span class="quotelev1">&gt; is that uDAPL is NOT specifically there to support just iWARP
</span><br>
<span class="quotelev1">&gt; (though it may include it), and that OFED's uDAPL should be
</span><br>
<span class="quotelev1">&gt; adjusted to handle this.  Again, uDAPL is a network
</span><br>
<span class="quotelev1">&gt; *independent* abstraction, so requiring network-dependent
</span><br>
<span class="quotelev1">&gt; behavior from the uDAPL consumer is wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>DAPL strives to define network independent solutions. In this
<br>
case the network independent solution is that the active side
<br>
*always* sends the first message. This works for both iWARP
<br>
and InfiniBand. And away from the HPC market it is almost a
<br>
non-requirement (which is why the RDMAC managed to goof on
<br>
this in its specification. A zero-length RDMA Write is enough
<br>
to deal with the wire protocol problem, but people implemented
<br>
to the RDMAC verbs.)
<br>
<p>&nbsp;
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A related question -- how does this 'connection initiator
</span><br>
<span class="quotelev1">&gt; must send first' requirement relate to UD?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>iWARP UD is called UDP. It has nothing to do with MPA
<br>
or RDMA. An API that mapped to either IB UD or UDP is
<br>
definitely feasible, but hasn't been important enough
<br>
to anyone to draft as of yet.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1519.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1520.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
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
