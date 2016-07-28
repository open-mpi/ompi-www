<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 16:49:00 2007" -->
<!-- isoreceived="20070524204900" -->
<!-- sent="Thu, 24 May 2007 16:48:42 -0400" -->
<!-- isosent="20070524204842" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="F9E065DE-B849-4215-90F6-A2A9BF9003A9_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200705241951.l4OJpQix020637_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 16:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1578.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1576.php">Jeff Squyres: "[OMPI devel] jnysal-openib-wireup branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1578.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1578.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the problem this patch try to solve, but I fail to correctly  
<br>
understand the implementation. The patch affect all PML and BTL in  
<br>
the code base by adding one more argument to some of the most often  
<br>
called functions. And there is only one BTL (openib) who seems to use  
<br>
it while all others completely ignore it. Moreover, there seems to be  
<br>
already a very similar mechanism based on the  
<br>
MCA_BTL_DES_FLAGS_PRIORITY flag, which can be set by the PML level  
<br>
into the btl_descriptor.
<br>
<p>So what's the difference between the additional argument and a  
<br>
correct usage of the MCA_BTL_DES_FLAGS_PRIORITY flag ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 24, 2007, at 3:51 PM, gshipman_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: gshipman
</span><br>
<span class="quotelev1">&gt; Date: 2007-05-24 15:51:26 EDT (Thu, 24 May 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 14768
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14768">https://svn.open-mpi.org/trac/ompi/changeset/14768</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add optional ordering to the BTL interface.
</span><br>
<span class="quotelev1">&gt; This is required to tighten up the BTL semantics. Ordering is not  
</span><br>
<span class="quotelev1">&gt; guaranteed,
</span><br>
<span class="quotelev1">&gt; but, if the BTL returns a order tag in a descriptor (other than
</span><br>
<span class="quotelev1">&gt; MCA_BTL_NO_ORDER) then we may request another descriptor that will  
</span><br>
<span class="quotelev1">&gt; obey
</span><br>
<span class="quotelev1">&gt; ordering w.r.t. to the other descriptor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will allow sane behavior for RDMA networks, where local  
</span><br>
<span class="quotelev1">&gt; completion of an
</span><br>
<span class="quotelev1">&gt; RDMA operation on the active side does not imply remote completion  
</span><br>
<span class="quotelev1">&gt; on the
</span><br>
<span class="quotelev1">&gt; passive side. If we send a FIN message after local completion and  
</span><br>
<span class="quotelev1">&gt; the FIN is
</span><br>
<span class="quotelev1">&gt; not ordered w.r.t. the RDMA operation then badness may occur as the  
</span><br>
<span class="quotelev1">&gt; passive
</span><br>
<span class="quotelev1">&gt; side may now try to deregister the memory and the RDMA operation  
</span><br>
<span class="quotelev1">&gt; may still be
</span><br>
<span class="quotelev1">&gt; pending on the passive side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this has no impact on networks that don't suffer from this
</span><br>
<span class="quotelev1">&gt; limitation as the ORDER tag can simply always be specified as
</span><br>
<span class="quotelev1">&gt; MCA_BTL_NO_ORDER.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/bml/bml.h                             |    29 ++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++--------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/btl.h                             |    10 ++++ 
</span><br>
<span class="quotelev1">&gt; ++++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/gm/btl_gm.c                       |     8 ++++++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/gm/btl_gm.h                       |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mx/btl_mx.c                       |     8 ++++++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mx/btl_mx.h                       |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib.c               |    49 ++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++++++++++++++++-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib.h               |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib_endpoint.c      |     7 +++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib_frag.c          |     7 +++++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/portals/btl_portals.c             |     8 ++++-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/portals/btl_portals.h             |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/self/btl_self.c                   |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/self/btl_self.h                   |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sm/btl_sm.c                       |     2 +
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sm/btl_sm.h                       |     2 +
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp.c                     |     6 ++++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp.h                     |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/template/btl_template.c           |     8 ++++-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/template/btl_template.h           |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/template/btl_template_component.c |    10 +++ 
</span><br>
<span class="quotelev1">&gt; +---
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/udapl/btl_udapl.c                 |    11 ++++ 
</span><br>
<span class="quotelev1">&gt; ++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/udapl/btl_udapl.h                 |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/udapl/btl_udapl_component.c       |    17 ++++ 
</span><br>
<span class="quotelev1">&gt; ++++----
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/osc/rdma/osc_rdma_data_move.c         |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/dr/pml_dr.h                       |     6 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/dr/pml_dr_sendreq.c               |    12 ++++ 
</span><br>
<span class="quotelev1">&gt; ++++-
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/dr/pml_dr_sendreq.h               |     3 +
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/ob1/pml_ob1.c                     |    17 ++++ 
</span><br>
<span class="quotelev1">&gt; ++++-----
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/ob1/pml_ob1.h                     |    44 ++++ 
</span><br>
<span class="quotelev1">&gt; +------------------------------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c             |    14 ++++ 
</span><br>
<span class="quotelev1">&gt; +++----
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.c             |    28 ++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++++++------
</span><br>
<span class="quotelev1">&gt;    32 files changed, 241 insertions(+), 95 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (53504 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 14767:14768 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1577/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1578.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1576.php">Jeff Squyres: "[OMPI devel] jnysal-openib-wireup branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1578.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1578.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
