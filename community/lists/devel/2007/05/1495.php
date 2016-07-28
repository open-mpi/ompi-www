<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 07:51:23 2007" -->
<!-- isoreceived="20070509115123" -->
<!-- sent="Wed, 9 May 2007 07:51:07 -0400" -->
<!-- isosent="20070509115107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM" -->
<!-- id="1178711486.0000_at_hypermail.dummy" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 07:51:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1496.php">Steve Wise: "[OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1494.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Maybe in reply to:</strong> <a href="1475.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1497.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 9, 2007, at 1:37 AM, Or Gerlitz wrote:
<br>
<p><span class="quotelev1">&gt; Doing a bit of zoom out from the &quot;how to make ofed's udapl work for  
</span><br>
<span class="quotelev1">&gt; ompi&quot; thread, my thinking is that the ompi udapl btl enablement is  
</span><br>
<span class="quotelev1">&gt; actually only the first step, where for production/longterm/etc you  
</span><br>
<span class="quotelev1">&gt; want to have an rdmacm btl.
</span><br>
<p>I think this is a bit of a misunderstanding.  The &quot;BTL&quot; in Open MPI  
<br>
is a byte transfer layer; it is a point-to-point abstraction for  
<br>
moving bytes between two processes.  BTL components (read: plugins)  
<br>
are typically distinguished by the underlying protocols used.  For  
<br>
example, we have an RC verbs-based BTL and we have a separate uDAPL- 
<br>
based BTL.  Andrew is also working on a research-quality UD verbs- 
<br>
based BTL.
<br>
<p>Hence, how a particular BTL component makes connections between  
<br>
process peers is really a side-effect of moving bytes around, and not  
<br>
the focus of the BTL.  So having a &quot;rdmacm&quot; BTL doesn't really make  
<br>
sense.  If both the RC and UD verbs-based BTLs someday use the RDMA  
<br>
CM for connections, we might abstract the connection management out  
<br>
to a common piece of code between the two.  But that's a different  
<br>
issue.  If we end up having a mixed BTL someday that uses both RC and  
<br>
UD, then the need for the common code may go away.  But that's in the  
<br>
future.
<br>
<p><span class="quotelev1">&gt; Reasoning here is made of many arguments, among them the quickest i  
</span><br>
<span class="quotelev1">&gt; can make are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) it seems that ompi would want to use not only RC but rather also  
</span><br>
<span class="quotelev1">&gt; UD multicast and unicast, which are not covered by udapl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B) there's actually no real justification to maintain two APIs  
</span><br>
<span class="quotelev1">&gt; (namely udapl vs libibvers/librdmacm), so down the road, only one  
</span><br>
<span class="quotelev1">&gt; of them would survive (udapl is implemented ***over*** libibverbs/ 
</span><br>
<span class="quotelev1">&gt; librdmacm so if the latteres dies same does udapl). Specifically, I  
</span><br>
<span class="quotelev1">&gt; hear here and there that the OFED stack is now on its way to be  
</span><br>
<span class="quotelev1">&gt; deployed all over the place, specifically in commercial Unix OSs  
</span><br>
<span class="quotelev1">&gt; (which want modern! code that supports IPoIB-CM,RDS,SRP,iSER, etc  
</span><br>
<span class="quotelev1">&gt; you named it) so eventually the rdmacm btl can be used also over  
</span><br>
<span class="quotelev1">&gt; Solaris et al.
</span><br>
<p>I think that's not quite the point.
<br>
<p>1. A piece of history: the uDAPL BTL was originally developed by a  
<br>
grad student just as an excuse to learn the BTL interface and OMPI  
<br>
internals.  We already had an RC verbs-based BTL at the time.
<br>
<p>2. When Sun joined Open MPI, they took over the development and  
<br>
maintenance of the uDAPL BTL because uDAPL is the only high  
<br>
performance stack on Solaris.
<br>
<p>3. It's fine that Sun will someday support the same verbs interface  
<br>
that OFED does.  But *today*, they don't.  So for their current  
<br>
customers, they need to support uDAPL.  As such, we have done little/ 
<br>
no testing of uDAPL on OFED since Sun took over the uDAPL BTL -- all  
<br>
testing since that point has been on Solaris uDAPL.  All of our Linux/ 
<br>
OFED efforts have been on the verbs interface.
<br>
<p>4. The Open MPI focus on uDAPL over OFED at the moment is simply to  
<br>
jump-start iWARP testing.  Both NetEffect and Chelsio have chimed in  
<br>
to say that they will do the RDMA CM work for Open MPI, but uDAPL can  
<br>
be used as a temporary workaround that can be used [effectively]  
<br>
immediately while they get up to speed on the Open MPI code base and  
<br>
do the RDMA CM work.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1496.php">Steve Wise: "[OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1494.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Maybe in reply to:</strong> <a href="1475.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1497.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
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
