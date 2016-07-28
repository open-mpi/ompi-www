<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 11:17:31 2013" -->
<!-- isoreceived="20130322151731" -->
<!-- sent="Fri, 22 Mar 2013 08:17:24 -0700" -->
<!-- isosent="20130322151724" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux" -->
<!-- id="BF520435-5639-4968-925C-83833D4AE7E0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130321230554.4FF8B1604B6_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 11:17:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12212.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Previous message:</strong> <a href="12210.php">Sebastian Rinke: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12212.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Reply:</strong> <a href="12212.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Reply:</strong> <a href="12213.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid this still doesn't work for me - on my Centos box:
<br>
<p>../../../ompi/.libs/libmpi.so: undefined reference to `opal_memory_linux_malloc_init_hook'
<br>
<p>I tried it with a brand new checkout of the trunk. Any ideas?
<br>
<p>IIRC, we wound up here because we were trying to avoid rolling libopal into liborte into libmpi and instead having three completely separable libraries. Given that we haven't been able to make that work across platforms, is it time to give up and return to what worked?
<br>
<p><p>On Mar 21, 2013, at 4:05 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: brbarret (Brian Barrett)
</span><br>
<span class="quotelev1">&gt; Date: 2013-03-21 19:05:54 EDT (Thu, 21 Mar 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 28202
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28202">https://svn.open-mpi.org/trac/ompi/changeset/28202</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; * Fix issue with duplicate symbol for the initialize hook due to it existing in both libmpi and libopen-pal by removing the one for libopen-pal.  This won't work if we eventually need registration caching in opal/orte, but I'm hoping that by that point, OFED will have gotten off its butt and properly integrated ummunotify into the verbs layer so that this code can go away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the same time, fix a minor issue where the init hook was being called twice, once by the libc malloc and once by our malloc by removing the call from our malloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;  trunk/ompi/runtime/ompi_mpi_init.c  |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;  trunk/opal/mca/memory/linux/arena.c |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;  trunk/opal/mca/memory/linux/hooks.c |     5 -----                                   
</span><br>
<span class="quotelev1">&gt;  3 files changed, 4 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/runtime/ompi_mpi_init.c	Thu Mar 21 13:13:46 2013	(r28201)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/runtime/ompi_mpi_init.c	2013-03-21 19:05:54 EDT (Thu, 21 Mar 2013)	(r28202)
</span><br>
<span class="quotelev1">&gt; @@ -95,7 +95,7 @@
</span><br>
<span class="quotelev1">&gt;   implicity from libmpi, there are times when the malloc initialize
</span><br>
<span class="quotelev1">&gt;   hook in the memory component doesn't work.  So we have to do it
</span><br>
<span class="quotelev1">&gt;   from here, since any MPI code is going to call MPI_Init... */
</span><br>
<span class="quotelev1">&gt; -void (*__malloc_initialize_hook) (void) = 
</span><br>
<span class="quotelev1">&gt; +OPAL_DECLSPEC void (*__malloc_initialize_hook) (void) = 
</span><br>
<span class="quotelev1">&gt;    opal_memory_linux_malloc_init_hook;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/memory/linux/arena.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/memory/linux/arena.c	Thu Mar 21 13:13:46 2013	(r28201)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/memory/linux/arena.c	2013-03-21 19:05:54 EDT (Thu, 21 Mar 2013)	(r28202)
</span><br>
<span class="quotelev1">&gt; @@ -462,8 +462,11 @@
</span><br>
<span class="quotelev1">&gt;    if(s[0]) mALLOPt(M_CHECK_ACTION, (int)(s[0] - '0'));
</span><br>
<span class="quotelev1">&gt;    __malloc_check_init();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt; +  /* OMPI Change: Don't call the initialize hook; it was us. */
</span><br>
<span class="quotelev1">&gt;  if(__malloc_initialize_hook != NULL)
</span><br>
<span class="quotelev1">&gt;    (*__malloc_initialize_hook)();
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  __malloc_initialized = 1;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/memory/linux/hooks.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/memory/linux/hooks.c	Thu Mar 21 13:13:46 2013	(r28201)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/memory/linux/hooks.c	2013-03-21 19:05:54 EDT (Thu, 21 Mar 2013)	(r28202)
</span><br>
<span class="quotelev1">&gt; @@ -892,11 +892,6 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -/* OMPI change: This is the symbol to override to make the above
</span><br>
<span class="quotelev1">&gt; -   function get fired during malloc initialization time. */
</span><br>
<span class="quotelev1">&gt; -void (*__malloc_initialize_hook) (void) = 
</span><br>
<span class="quotelev1">&gt; -    opal_memory_linux_malloc_init_hook;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; * Local variables:
</span><br>
<span class="quotelev1">&gt; * c-basic-offset: 4
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
<li><strong>Next message:</strong> <a href="12212.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Previous message:</strong> <a href="12210.php">Sebastian Rinke: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12212.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Reply:</strong> <a href="12212.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Reply:</strong> <a href="12213.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
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
