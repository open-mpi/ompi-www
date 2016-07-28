<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 20:12:16 2012" -->
<!-- isoreceived="20120323001216" -->
<!-- sent="Thu, 22 Mar 2012 20:12:10 -0400" -->
<!-- isosent="20120323001210" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180" -->
<!-- id="03CE6C86-449B-49F3-A54E-A62689072D8A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D13C39E9-7379-4086-AECD-D6A6E56CE54F_at_open-mpi.org" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 20:12:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10763.php">Larry Baker: "[OMPI devel] Clam AntiVirus"</a>
<li><strong>Previous message:</strong> <a href="10761.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>In reply to:</strong> <a href="10761.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10764.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Reply:</strong> <a href="10764.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From the context of the code, I'm assuming it's supposed to be MPI_SOURCE.  I'll commit shortly.
</span><br>
<p><p>On Mar 22, 2012, at 7:54 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe you have an error in this commit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pml_ob1_iprobe.c:113: error: 'ompi_status_public_t' has no member named 'MPI_STATUS'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked the definition of that struct, and the error is correct - there is no such member. What should it be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2012, at 4:55 PM, brbarret_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: brbarret
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-03-22 18:55:59 EDT (Thu, 22 Mar 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 26180
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26180">https://svn.open-mpi.org/trac/ompi/changeset/26180</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; * Implement matched probe for the CM PML.  Required adding a peer field to
</span><br>
<span class="quotelev2">&gt;&gt; the ompi_message_t structure to properly initialize convertor (the peer
</span><br>
<span class="quotelev2">&gt;&gt; is available in the request in OB1, and wasn't needed when I did the
</span><br>
<span class="quotelev2">&gt;&gt; original implementation).
</span><br>
<span class="quotelev2">&gt;&gt; * Implement matched probe for the Portals4 MTL and add NULL function pointers
</span><br>
<span class="quotelev2">&gt;&gt; for the other MTLs.
</span><br>
<span class="quotelev2">&gt;&gt; * Add add_comm and del_comm functions to portals4 MTL so that direct call
</span><br>
<span class="quotelev2">&gt;&gt; almost works again.
</span><br>
<span class="quotelev2">&gt;&gt; * Add NEWS item that we've implemented matched probe
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals4/mtl_portals4_message.c
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals4/mtl_portals4_message.h
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/NEWS                                           |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/mtl.h                             |    16 ++++++                                  
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/mx/mtl_mx.c                       |     6 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/mxm/mtl_mxm.c                     |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals/mtl_portals.c             |     2                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals4/Makefile.am              |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals4/mtl_portals4.c           |    24 ++++++++-                               
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals4/mtl_portals4.h           |    24 ++++++++                                
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals4/mtl_portals4_component.c |    13 ++++                                    
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals4/mtl_portals4_probe.c     |   105 ++++++++++++++++++++++++++++++++++++++- 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals4/mtl_portals4_recv.c      |    44 ++++++++++++++++                        
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/portals4/mtl_portals4_request.h   |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/mtl/psm/mtl_psm.c                     |     4 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/cm/pml_cm_cancel.c                |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/cm/pml_cm_probe.c                 |    28 +++++++++-                              
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/cm/pml_cm_recv.c                  |    65 +++++++++++++++++++++++-                
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/cm/pml_cm_recvreq.h               |    23 ++++++++                                
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_iprobe.c              |     3                                         
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/message/message.h                         |    18 +++---                                  
</span><br>
<span class="quotelev2">&gt;&gt;  19 files changed, 352 insertions(+), 40 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Diff not shown due to size (33150 bytes).
</span><br>
<span class="quotelev2">&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	svn diff -r 26179:26180 --no-diff-deleted
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10763.php">Larry Baker: "[OMPI devel] Clam AntiVirus"</a>
<li><strong>Previous message:</strong> <a href="10761.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>In reply to:</strong> <a href="10761.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10764.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Reply:</strong> <a href="10764.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
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
