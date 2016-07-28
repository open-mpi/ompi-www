<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk:	ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm	opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix	opal/mca/shmem/sysv opal/mca/shmem/windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 17:39:51 2013" -->
<!-- isoreceived="20130104223951" -->
<!-- sent="Fri, 4 Jan 2013 22:39:46 +0000" -->
<!-- isosent="20130104223946" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk:	ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm	opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix	opal/mca/shmem/sysv opal/mca/shmem/windows" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B18626EBD_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AD6F7B66-E241-4149-829B-E7B4395FBAA1_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk:	ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm	opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix	opal/mca/shmem/sysv opal/mca/shmem/windows<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 17:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11900.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="11898.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="11892.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>Agreed -- I should have referenced the RFC that I sent out last year. Sorry about not reposting/explicitly mentioning the old RFC from about 5 months ago.
<br>
<p>I'm willing to sit down with you and others so we can chat further about the change.
<br>
<p>Ralph is correct -- the plan is to have only one rank per node send the information required for sm initialization and have the rest consume them.
<br>
<p>If required, I'm willing to backout the commit until a better way is formulated.
<br>
<p>Thanks,
<br>
<p>Sam
<br>
<p>________________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of George Bosilca [bosilca_at_[hidden]]
<br>
Sent: Friday, January 04, 2013 1:57 PM
<br>
To: devel_at_[hidden]
<br>
Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk:       ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm    opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows
<br>
<p>Sam,
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
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11900.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="11898.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="11892.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
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
