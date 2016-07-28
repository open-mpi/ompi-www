<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 18:18:04 2007" -->
<!-- isoreceived="20070509221804" -->
<!-- sent="Wed, 09 May 2007 17:18:00 -0500" -->
<!-- isosent="20070509221800" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened" -->
<!-- id="1178749080.382.148.camel_at_stevo-desktop" -->
<!-- inreplyto="464244A8.4070406_at_ichips.intel.com" -->
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
<strong>Date:</strong> 2007-05-09 18:18:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1524.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Maybe in reply to:</strong> <a href="1508.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1512.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-05-09 at 15:01 -0700, Sean Hefty wrote:
<br>
<span class="quotelev2">&gt; &gt; The reason it is hard or impossible to solve this in the DAPL layer is
</span><br>
<span class="quotelev2">&gt; &gt; that any rdma operation on the QP affects the state of that QP and the
</span><br>
<span class="quotelev2">&gt; &gt; associate CQs.  In addition, if you use an RDMA send to enforce this you
</span><br>
<span class="quotelev2">&gt; &gt; impact the other side by consuming a RECV buffer. So its hard if not
</span><br>
<span class="quotelev2">&gt; &gt; impossible to do this under the covers without affecting the
</span><br>
<span class="quotelev2">&gt; &gt; application's resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that this is hard, but I don't believe that it's impossible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also, the DAPL specification had a goal to not impose any additional
</span><br>
<span class="quotelev2">&gt; &gt; protocol on the wire.  If you add this under the covers, then you add
</span><br>
<span class="quotelev2">&gt; &gt; such a &quot;protocol&quot; and break interoperability between a connection
</span><br>
<span class="quotelev2">&gt; &gt; accessed via DAPL on one end and some other API on the other end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMO, this is a unrealized dream.  DAPL does generate wire protocol.  For 
</span><br>
<span class="quotelev1">&gt; example, when running over IB, DAPL's selection of a service ID and CM protocol 
</span><br>
<span class="quotelev1">&gt; is visible on the wire.  A DAPL that establishes connections using the RDMA CM 
</span><br>
<span class="quotelev1">&gt; will likely have a different wire protocol than a version of DAPL that 
</span><br>
<span class="quotelev1">&gt; establishes connections talking directly to the IB CM.  The two DAPLs will not 
</span><br>
<span class="quotelev1">&gt; interoperate unless they agree on how they will map to service IDs and, in the 
</span><br>
<span class="quotelev1">&gt; case of using the RDMA CM, the format of the private data carried in the CM 
</span><br>
<span class="quotelev1">&gt; messages.
</span><br>
<p>I wasn't aware of this.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even in the case of iWarp, DAPL's selection of a local port number affects the 
</span><br>
<span class="quotelev1">&gt; data visible on the wire.  TO communicate, a remote end point must know how this 
</span><br>
<span class="quotelev1">&gt; mapping occurs.
</span><br>
<p>You mean the local port on the active side?  The remote end point
<br>
doesn't need to know this at all...
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1524.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Maybe in reply to:</strong> <a href="1508.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1512.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
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
