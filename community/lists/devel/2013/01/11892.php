<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 15:57:42 2013" -->
<!-- isoreceived="20130104205742" -->
<!-- sent="Fri, 4 Jan 2013 21:57:31 +0100" -->
<!-- isosent="20130104205731" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows" -->
<!-- id="AD6F7B66-E241-4149-829B-E7B4395FBAA1_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130103215221.D7E6A160368_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 15:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11893.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="11891.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11895.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<li><strong>Reply:</strong> <a href="11895.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<li><strong>Reply:</strong> <a href="11899.php">Gutierrez, Samuel K: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk:	ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm	opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix	opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sam,
<br>
<p>This is a major change and would have deserved an RFC, as it impose a drastic/major non-scalable change (up to now the backend file creation was centralized, not in addition we exchange the data through the modex). A quick look highlight the fact that quite a lot of new modex entries have appeared after this patch. On a 4 proc (2x2) we got more than 20 entries each one of them up to 32 bytes (he list is attached at the end of this email).
<br>
<p>Clearly this new approach is significantly less scalable compared with the old one. In the past we had issues adding one single integer per process, I fail to understand how our standards changed so much that now few hundreds bytes per process become acceptable. Moreover, what is the benefit this change provides in exchange of this loss of scalability?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: The exhaustive list of new SM-related modex entries:
<br>
[dancer01:01049] [[50563,1],0] db:hash:store: storing key btl.sm.1.9-0-0[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer01:01049] [[50563,1],0] db:hash:store: storing key btl.sm.1.9-0-1[OPAL_STRING] for proc [[50563,1],0]
<br>
[dancer01:01049] [[50563,1],0] db:hash:store: storing key btl.sm.1.9-1-0[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer01:01049] [[50563,1],0] db:hash:store: storing key btl.sm.1.9-1-1[OPAL_STRING] for proc [[50563,1],0]
<br>
[dancer01:01049] [[50563,1],0] db:hash:store: storing key btl.sm.1.9-2[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer02:01720] [[50563,1],1] db:hash:store: storing key btl.sm.1.9-0-0[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer02:01720] [[50563,1],1] db:hash:store: storing key btl.sm.1.9-0-1[OPAL_STRING] for proc [[50563,1],1]
<br>
[dancer02:01720] [[50563,1],1] db:hash:store: storing key btl.sm.1.9-1-0[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer02:01720] [[50563,1],1] db:hash:store: storing key btl.sm.1.9-1-1[OPAL_STRING] for proc [[50563,1],1]
<br>
[dancer02:01720] [[50563,1],1] db:hash:store: storing key btl.sm.1.9-2[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer02:01720] [[50563,1],1] db:hash:store: storing pointer of key btl.sm.1.9-0-0[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer02:01720] [[50563,1],1] db:hash:store: storing pointer of key btl.sm.1.9-0-1[OPAL_STRING] for proc [[50563,1],0]
<br>
[dancer02:01720] [[50563,1],1] db:hash:store: storing pointer of key btl.sm.1.9-1-0[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer02:01720] [[50563,1],1] db:hash:store: storing pointer of key btl.sm.1.9-1-1[OPAL_STRING] for proc [[50563,1],0]
<br>
[dancer02:01720] [[50563,1],1] db:hash:store: storing pointer of key btl.sm.1.9-2[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer02:01721] [[50563,1],3] db:hash:store: storing pointer of key btl.sm.1.9-0-0[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer02:01721] [[50563,1],3] db:hash:store: storing pointer of key btl.sm.1.9-0-1[OPAL_STRING] for proc [[50563,1],0]
<br>
[dancer02:01721] [[50563,1],3] db:hash:store: storing pointer of key btl.sm.1.9-1-0[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer02:01721] [[50563,1],3] db:hash:store: storing pointer of key btl.sm.1.9-1-1[OPAL_STRING] for proc [[50563,1],0]
<br>
[dancer02:01721] [[50563,1],3] db:hash:store: storing pointer of key btl.sm.1.9-2[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer01:01050] [[50563,1],2] db:hash:store: storing pointer of key btl.sm.1.9-0-0[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer01:01050] [[50563,1],2] db:hash:store: storing pointer of key btl.sm.1.9-0-1[OPAL_STRING] for proc [[50563,1],0]
<br>
[dancer01:01050] [[50563,1],2] db:hash:store: storing pointer of key btl.sm.1.9-1-0[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer01:01050] [[50563,1],2] db:hash:store: storing pointer of key btl.sm.1.9-1-1[OPAL_STRING] for proc [[50563,1],0]
<br>
[dancer01:01050] [[50563,1],2] db:hash:store: storing pointer of key btl.sm.1.9-2[OPAL_BYTE_OBJECT] for proc [[50563,1],0]
<br>
[dancer01:01049] [[50563,1],0] db:hash:store: storing pointer of key btl.sm.1.9-0-0[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer01:01049] [[50563,1],0] db:hash:store: storing pointer of key btl.sm.1.9-0-1[OPAL_STRING] for proc [[50563,1],1]
<br>
[dancer01:01049] [[50563,1],0] db:hash:store: storing pointer of key btl.sm.1.9-1-0[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer01:01049] [[50563,1],0] db:hash:store: storing pointer of key btl.sm.1.9-1-1[OPAL_STRING] for proc [[50563,1],1]
<br>
[dancer01:01049] [[50563,1],0] db:hash:store: storing pointer of key btl.sm.1.9-2[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer02:01721] [[50563,1],3] db:hash:store: storing pointer of key btl.sm.1.9-0-0[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer02:01721] [[50563,1],3] db:hash:store: storing pointer of key btl.sm.1.9-0-1[OPAL_STRING] for proc [[50563,1],1]
<br>
[dancer02:01721] [[50563,1],3] db:hash:store: storing pointer of key btl.sm.1.9-1-0[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer02:01721] [[50563,1],3] db:hash:store: storing pointer of key btl.sm.1.9-1-1[OPAL_STRING] for proc [[50563,1],1]
<br>
[dancer02:01721] [[50563,1],3] db:hash:store: storing pointer of key btl.sm.1.9-2[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer01:01050] [[50563,1],2] db:hash:store: storing pointer of key btl.sm.1.9-0-0[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer01:01050] [[50563,1],2] db:hash:store: storing pointer of key btl.sm.1.9-0-1[OPAL_STRING] for proc [[50563,1],1]
<br>
[dancer01:01050] [[50563,1],2] db:hash:store: storing pointer of key btl.sm.1.9-1-0[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
[dancer01:01050] [[50563,1],2] db:hash:store: storing pointer of key btl.sm.1.9-1-1[OPAL_STRING] for proc [[50563,1],1]
<br>
[dancer01:01050] [[50563,1],2] db:hash:store: storing pointer of key btl.sm.1.9-2[OPAL_BYTE_OBJECT] for proc [[50563,1],1]
<br>
<p><p>On Jan 3, 2013, at 22:52 , svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: samuel (Samuel K. Gutierrez)
</span><br>
<span class="quotelev1">&gt; Date: 2013-01-03 16:52:20 EST (Thu, 03 Jan 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 27739
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27739">https://svn.open-mpi.org/trac/ompi/changeset/27739</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; sm BTL initialization via modex, as discussed at last year's meeting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/sm/btl_sm.c                      |   337 +++++++++++++++++++++--------          
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/sm/btl_sm.h                      |    60 +++++                                  
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/sm/btl_sm_component.c            |   444 ++++++++++++++++++++++++++++++++++++++-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/sm/help-mpi-btl-sm.txt           |     6                                        
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/common/sm/common_sm.c                |    92 +++++--                                
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/common/sm/common_sm.h                |    45 +++                                    
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mpool/sm/mpool_sm.h                  |    17                                        
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mpool/sm/mpool_sm_component.c        |   111 ++++-----                              
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/shmem/mmap/shmem_mmap_module.c       |     7                                        
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/shmem/posix/shmem_posix_module.c     |     9                                        
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/shmem/shmem_types.h                  |    36 ++                                     
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/shmem/sysv/shmem_sysv_module.c       |    11                                        
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/shmem/windows/shmem_windows_module.c |     7                                        
</span><br>
<span class="quotelev1">&gt;   13 files changed, 933 insertions(+), 249 deletions(-)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11893.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="11891.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11895.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<li><strong>Reply:</strong> <a href="11895.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<li><strong>Reply:</strong> <a href="11899.php">Gutierrez, Samuel K: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk:	ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm	opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix	opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
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
