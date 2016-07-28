<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 20:50:37 2012" -->
<!-- isoreceived="20120323005037" -->
<!-- sent="Thu, 22 Mar 2012 18:50:30 -0600" -->
<!-- isosent="20120323005030" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180" -->
<!-- id="732F86DB-0DE3-4AC2-A951-0E18F46A033E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="03CE6C86-449B-49F3-A54E-A62689072D8A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 20:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10765.php">Pavel Mezentsev: "[OMPI devel] barrier problem"</a>
<li><strong>Previous message:</strong> <a href="10763.php">Larry Baker: "[OMPI devel] Clam AntiVirus"</a>
<li><strong>In reply to:</strong> <a href="10762.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10768.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Reply:</strong> <a href="10768.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r26180"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>On Mar 22, 2012, at 6:12 PM, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; From the context of the code, I'm assuming it's supposed to be MPI_SOURCE.  I'll commit shortly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2012, at 7:54 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yo Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe you have an error in this commit:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pml_ob1_iprobe.c:113: error: 'ompi_status_public_t' has no member named 'MPI_STATUS'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I checked the definition of that struct, and the error is correct - there is no such member. What should it be?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 22, 2012, at 4:55 PM, brbarret_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: brbarret
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2012-03-22 18:55:59 EDT (Thu, 22 Mar 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 26180
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26180">https://svn.open-mpi.org/trac/ompi/changeset/26180</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Implement matched probe for the CM PML.  Required adding a peer field to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the ompi_message_t structure to properly initialize convertor (the peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is available in the request in OB1, and wasn't needed when I did the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; original implementation).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Implement matched probe for the Portals4 MTL and add NULL function pointers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the other MTLs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Add add_comm and del_comm functions to portals4 MTL so that direct call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; almost works again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Add NEWS item that we've implemented matched probe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/portals4/mtl_portals4_message.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/portals4/mtl_portals4_message.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/NEWS                                           |     4 +                                       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/mtl.h                             |    16 ++++++                                  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/mx/mtl_mx.c                       |     6 +                                       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/mxm/mtl_mxm.c                     |     2                                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/portals/mtl_portals.c             |     2                                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/portals4/Makefile.am              |     4 +                                       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/portals4/mtl_portals4.c           |    24 ++++++++-                               
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/portals4/mtl_portals4.h           |    24 ++++++++                                
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/portals4/mtl_portals4_component.c |    13 ++++                                    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/portals4/mtl_portals4_probe.c     |   105 ++++++++++++++++++++++++++++++++++++++- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/portals4/mtl_portals4_recv.c      |    44 ++++++++++++++++                        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/portals4/mtl_portals4_request.h   |     4 +                                       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/mtl/psm/mtl_psm.c                     |     4 +                                       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/pml/cm/pml_cm_cancel.c                |     3                                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/pml/cm/pml_cm_probe.c                 |    28 +++++++++-                              
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/pml/cm/pml_cm_recv.c                  |    65 +++++++++++++++++++++++-                
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/pml/cm/pml_cm_recvreq.h               |    23 ++++++++                                
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/pml/ob1/pml_ob1_iprobe.c              |     3                                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/message/message.h                         |    18 +++---                                  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 19 files changed, 352 insertions(+), 40 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Diff not shown due to size (33150 bytes).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	svn diff -r 26179:26180 --no-diff-deleted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="10765.php">Pavel Mezentsev: "[OMPI devel] barrier problem"</a>
<li><strong>Previous message:</strong> <a href="10763.php">Larry Baker: "[OMPI devel] Clam AntiVirus"</a>
<li><strong>In reply to:</strong> <a href="10762.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10768.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Reply:</strong> <a href="10768.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r26180"</a>
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
