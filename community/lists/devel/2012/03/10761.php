<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 19:54:25 2012" -->
<!-- isoreceived="20120322235425" -->
<!-- sent="Thu, 22 Mar 2012 17:54:17 -0600" -->
<!-- isosent="20120322235417" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180" -->
<!-- id="D13C39E9-7379-4086-AECD-D6A6E56CE54F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201203222255.q2MMtxKf031337_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2012-03-22 19:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10762.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Previous message:</strong> <a href="10760.php">Nathan Hjelm: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10762.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Reply:</strong> <a href="10762.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Brian
<br>
<p>I believe you have an error in this commit:
<br>
<p>pml_ob1_iprobe.c:113: error: 'ompi_status_public_t' has no member named 'MPI_STATUS'
<br>
<p>I checked the definition of that struct, and the error is correct - there is no such member. What should it be?
<br>
<p>Ralph
<br>
<p><p>On Mar 22, 2012, at 4:55 PM, brbarret_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: brbarret
</span><br>
<span class="quotelev1">&gt; Date: 2012-03-22 18:55:59 EDT (Thu, 22 Mar 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26180
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26180">https://svn.open-mpi.org/trac/ompi/changeset/26180</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; * Implement matched probe for the CM PML.  Required adding a peer field to
</span><br>
<span class="quotelev1">&gt;  the ompi_message_t structure to properly initialize convertor (the peer
</span><br>
<span class="quotelev1">&gt;  is available in the request in OB1, and wasn't needed when I did the
</span><br>
<span class="quotelev1">&gt;  original implementation).
</span><br>
<span class="quotelev1">&gt; * Implement matched probe for the Portals4 MTL and add NULL function pointers
</span><br>
<span class="quotelev1">&gt;  for the other MTLs.
</span><br>
<span class="quotelev1">&gt; * Add add_comm and del_comm functions to portals4 MTL so that direct call
</span><br>
<span class="quotelev1">&gt;  almost works again.
</span><br>
<span class="quotelev1">&gt; * Add NEWS item that we've implemented matched probe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/portals4/mtl_portals4_message.c
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/portals4/mtl_portals4_message.h
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/NEWS                                           |     4 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mtl.h                             |    16 ++++++                                  
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mx/mtl_mx.c                       |     6 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm.c                     |     2                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/portals/mtl_portals.c             |     2                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/portals4/Makefile.am              |     4 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/portals4/mtl_portals4.c           |    24 ++++++++-                               
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/portals4/mtl_portals4.h           |    24 ++++++++                                
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/portals4/mtl_portals4_component.c |    13 ++++                                    
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/portals4/mtl_portals4_probe.c     |   105 ++++++++++++++++++++++++++++++++++++++- 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/portals4/mtl_portals4_recv.c      |    44 ++++++++++++++++                        
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/portals4/mtl_portals4_request.h   |     4 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/psm/mtl_psm.c                     |     4 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/cm/pml_cm_cancel.c                |     3                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/cm/pml_cm_probe.c                 |    28 +++++++++-                              
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/cm/pml_cm_recv.c                  |    65 +++++++++++++++++++++++-                
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/cm/pml_cm_recvreq.h               |    23 ++++++++                                
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_iprobe.c              |     3                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/message/message.h                         |    18 +++---                                  
</span><br>
<span class="quotelev1">&gt;   19 files changed, 352 insertions(+), 40 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (33150 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 26179:26180 --no-diff-deleted
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10762.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Previous message:</strong> <a href="10760.php">Nathan Hjelm: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10762.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Reply:</strong> <a href="10762.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
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
