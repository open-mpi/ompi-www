<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 25 23:31:44 2007" -->
<!-- isoreceived="20070526033144" -->
<!-- sent="Fri, 25 May 2007 21:31:33 -0600" -->
<!-- isosent="20070526033133" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="96E1AA23-E03A-4824-95FA-1AB192225030_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F9E065DE-B849-4215-90F6-A2A9BF9003A9_at_cs.utk.edu" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-25 23:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1577.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1577.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2007, at 2:48 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I see the problem this patch try to solve, but I fail to correctly  
</span><br>
<span class="quotelev1">&gt; understand the implementation. The patch affect all PML and BTL in  
</span><br>
<span class="quotelev1">&gt; the code base by adding one more argument to some of the most often  
</span><br>
<span class="quotelev1">&gt; called functions. And there is only one BTL (openib) who seems to  
</span><br>
<span class="quotelev1">&gt; use it while all others completely ignore it. Moreover, there seems  
</span><br>
<span class="quotelev1">&gt; to be already a very similar mechanism based on the  
</span><br>
<span class="quotelev1">&gt; MCA_BTL_DES_FLAGS_PRIORITY flag, which can be set by the PML level  
</span><br>
<span class="quotelev1">&gt; into the btl_descriptor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So what's the difference between the additional argument and a  
</span><br>
<span class="quotelev1">&gt; correct usage of the MCA_BTL_DES_FLAGS_PRIORITY flag ?
</span><br>
<p><p>The problem is that MCA_BTL_DES_FLAGS_PRIORITY  was meant to indicate  
<br>
that the fragment was higher priority, but the fragment isn't higher  
<br>
priority. It simply needs to be ordered w.r.t. a previous fragment,  
<br>
an RDMA in this case.
<br>
This being said, we could have just added an rdma fin flag, but this  
<br>
would mix protocol a bit too much between the BTL and the PML in my  
<br>
opinion.
<br>
What we have with this fix is that the BTL can assign an order tag to  
<br>
any descriptor if it wishes, this order tag is only valid after a  
<br>
call to btl_send or btl_put/get. This order tag can then be used to  
<br>
request another descriptor later that will enforce ordering. The  
<br>
semantics here are clear, and the BTL doesn't have to do anything if  
<br>
it doesn't wish (w.r.t. assigning a valid order tag). So this was the  
<br>
clearest semantics I could come up with that allowed for numerous  
<br>
implementations at the BTL level. For example, even specifying an  
<br>
rdma fin flag directly to the BTL would restrict the BTL further than  
<br>
these semantics because then all RDMA's must be sent on the same  
<br>
endpoint/QP as all the PML would be able to indicate is that a FIN is  
<br>
being sent, and the BTL wouldn't have the context to know which RDMA  
<br>
the FIN belonged to and hence couldn't enforce ordering easily.
<br>
<p>The only reason OpenIB is the only one to use this new functionality  
<br>
is because I haven't had a chance to fix up udapl, which I plan to do  
<br>
next week.
<br>
Note that GM semantics expose a similar problem (ordering is only  
<br>
guaranteed for messages of the same priority), but myrinet doesn't  
<br>
buffer like some of the IB/IWARP stuff can so we won't see it there.
<br>
<p>There are also a number of optimizations that these semantics allow,  
<br>
for example, the BTL doesn't have to give local completion callback  
<br>
on an RDMA anymore, as the fin message can be used for local  
<br>
completion of both.
<br>
<p>I am also looking at adding a BTL_PUT_IMMEDIATE which provides remote  
<br>
completion via an active message tag callback along with 64 bits of  
<br>
data, this would allow us to bypass the FIN entirely if the network  
<br>
supports it, this would be useful for MX as an example. OpenIB also  
<br>
supports a similar mechanism but there are problems that would need  
<br>
to be addressed as OpenIB only delivers 32 bits with the remote  
<br>
completion.
<br>
<p><p>- Galen
<br>
<p><p><p><p><p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 24, 2007, at 3:51 PM, gshipman_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: gshipman
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-05-24 15:51:26 EDT (Thu, 24 May 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 14768
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14768">https://svn.open-mpi.org/trac/ompi/changeset/14768</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Add optional ordering to the BTL interface.
</span><br>
<span class="quotelev2">&gt;&gt; This is required to tighten up the BTL semantics. Ordering is not  
</span><br>
<span class="quotelev2">&gt;&gt; guaranteed,
</span><br>
<span class="quotelev2">&gt;&gt; but, if the BTL returns a order tag in a descriptor (other than
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BTL_NO_ORDER) then we may request another descriptor that will  
</span><br>
<span class="quotelev2">&gt;&gt; obey
</span><br>
<span class="quotelev2">&gt;&gt; ordering w.r.t. to the other descriptor.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will allow sane behavior for RDMA networks, where local  
</span><br>
<span class="quotelev2">&gt;&gt; completion of an
</span><br>
<span class="quotelev2">&gt;&gt; RDMA operation on the active side does not imply remote completion  
</span><br>
<span class="quotelev2">&gt;&gt; on the
</span><br>
<span class="quotelev2">&gt;&gt; passive side. If we send a FIN message after local completion and  
</span><br>
<span class="quotelev2">&gt;&gt; the FIN is
</span><br>
<span class="quotelev2">&gt;&gt; not ordered w.r.t. the RDMA operation then badness may occur as  
</span><br>
<span class="quotelev2">&gt;&gt; the passive
</span><br>
<span class="quotelev2">&gt;&gt; side may now try to deregister the memory and the RDMA operation  
</span><br>
<span class="quotelev2">&gt;&gt; may still be
</span><br>
<span class="quotelev2">&gt;&gt; pending on the passive side.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that this has no impact on networks that don't suffer from this
</span><br>
<span class="quotelev2">&gt;&gt; limitation as the ORDER tag can simply always be specified as
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BTL_NO_ORDER.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/bml/bml.h                             |    29 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++++++--------
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/btl.h                             |    10 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; +++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/gm/btl_gm.c                       |     8 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; +++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/gm/btl_gm.h                       |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/mx/btl_mx.c                       |     8 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; +++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/mx/btl_mx.h                       |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/openib/btl_openib.c               |    49 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; +++++++++++++++++++++++++++++++++++-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/openib/btl_openib.h               |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/openib/btl_openib_endpoint.c      |     7 +++--
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/openib/btl_openib_frag.c          |     7 +++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/portals/btl_portals.c             |     8 ++++-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/portals/btl_portals.h             |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/self/btl_self.c                   |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/self/btl_self.h                   |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/sm/btl_sm.c                       |     2 +
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/sm/btl_sm.h                       |     2 +
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/tcp/btl_tcp.c                     |     6 ++++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/tcp/btl_tcp.h                     |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/template/btl_template.c           |     8 ++++-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/template/btl_template.h           |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/template/btl_template_component.c |    10 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; +---
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/udapl/btl_udapl.c                 |    11 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; +++--
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/udapl/btl_udapl.h                 |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/udapl/btl_udapl_component.c       |    17 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; +++++----
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/osc/rdma/osc_rdma_data_move.c         |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/dr/pml_dr.h                       |     6 ++--
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/dr/pml_dr_sendreq.c               |    12 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; +++++-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/dr/pml_dr_sendreq.h               |     3 +
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/ob1/pml_ob1.c                     |    17 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; +++++-----
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/ob1/pml_ob1.h                     |    44 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; ++------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c             |    14 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; ++++----
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c             |    28 +++ 
</span><br>
<span class="quotelev2">&gt;&gt; +++++++++++++------
</span><br>
<span class="quotelev2">&gt;&gt;    32 files changed, 241 insertions(+), 95 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diff not shown due to size (53504 bytes).
</span><br>
<span class="quotelev2">&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	svn diff -r 14767:14768 --no-diff-deleted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<li><strong>Next message:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1577.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1577.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
