<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 10:30:40 2007" -->
<!-- isoreceived="20070509143040" -->
<!-- sent="Wed, 09 May 2007 09:30:36 -0500" -->
<!-- isosent="20070509143036" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM" -->
<!-- id="1178721042.0000_at_hypermail.dummy" -->
<!-- inreplyto="46415DFE.9030807_at_voltaire.com" -->
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
<strong>Date:</strong> 2007-05-09 10:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1499.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1497.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Maybe in reply to:</strong> <a href="1475.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-05-09 at 08:37 +0300, Or Gerlitz wrote:
<br>
<span class="quotelev1">&gt; Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; FWIW, yes, adding RDMA CM support has actually been on my to-do list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; for a while, but it keeps getting bumped by higher priority items.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; It would be *much* better if some iWARP companies got involved in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Open MPI...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hmm I'm interested.  I've already done some work switching over to RDMA 
</span><br>
<span class="quotelev2">&gt; &gt; CM for some research stuff I've been doing; it's not publicly accessible 
</span><br>
<span class="quotelev2">&gt; &gt; w/o the 3rd party agreement.  I can help answer questions on what 
</span><br>
<span class="quotelev2">&gt; &gt; exactly needs to change, and do some testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doing a bit of zoom out from the &quot;how to make ofed's udapl work for 
</span><br>
<span class="quotelev1">&gt; ompi&quot; thread, my thinking is that the ompi udapl btl enablement is 
</span><br>
<span class="quotelev1">&gt; actually only the first step, where for production/longterm/etc you want 
</span><br>
<span class="quotelev1">&gt; to have an rdmacm btl. Reasoning here is made of many arguments, among 
</span><br>
<span class="quotelev1">&gt; them the quickest i can make are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A) it seems that ompi would want to use not only RC but rather also UD 
</span><br>
<span class="quotelev1">&gt; multicast and unicast, which are not covered by udapl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; B) there's actually no real justification to maintain two APIs (namely 
</span><br>
<span class="quotelev1">&gt; udapl vs libibvers/librdmacm), so down the road, only one of them would 
</span><br>
<span class="quotelev1">&gt; survive (udapl is implemented ***over*** libibverbs/librdmacm so if the 
</span><br>
<span class="quotelev1">&gt; latteres dies same does udapl). Specifically, I hear here and there that 
</span><br>
<span class="quotelev1">&gt; the OFED stack is now on its way to be deployed all over the place, 
</span><br>
<span class="quotelev1">&gt; specifically in commercial Unix OSs (which want modern! code that 
</span><br>
<span class="quotelev1">&gt; supports IPoIB-CM,RDS,SRP,iSER, etc you named it) so eventually the 
</span><br>
<span class="quotelev1">&gt; rdmacm btl can be used also over Solaris et al.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Agreed.  enabling udapl will get OMPI over iwarp immediately (and
<br>
hopefully in ofed-1.2).  Post ofed-1.2, I think OMPI _should_ create a
<br>
rdma-cm btl.  That's the plan...
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1499.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1497.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Maybe in reply to:</strong> <a href="1475.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
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
