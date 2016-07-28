<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 15:11:41 2011" -->
<!-- isoreceived="20111215201141" -->
<!-- sent="Thu, 15 Dec 2011 15:11:36 -0500" -->
<!-- isosent="20111215201136" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661" -->
<!-- id="61316116-450E-46FF-BB49-2188C2BFADDA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6C0C07F1-8F9B-4B8A-A1BA-551F0CD049A5_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 15:11:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10141.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="10139.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661"</a>
<li><strong>In reply to:</strong> <a href="10139.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2011, at 2:51 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This patch is not correct. All these variables have been moved into the ORTE layer (they are declared in orte/mca/debugger/base/base.h), so they should be in fact removed from the MPI level files. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While I don't think moving them all in the ORTE was a good choice, changing their definition in these files will not help. Now these symbols are defined twice, once as ORTE_DECLSPEC and once as OMPI_DECLSPEC.
</span><br>
<p>Ah -- if they're all actually declared elsewhere, then I agree: the declarations can be removed from these OMPI files.  Is that the case?
<br>
<p>OMPI_DECLSPEC and ORTE_DECLSPEC resolve to the same underlying value, so the change I made had no effect from that perspective.  I was just trying to keep the DECLSPEC's in the OMPI layer as OMPI_DECLSPEC (that's what I thought was implied by the &quot;oh, that's a typo...&quot;-like comment in a thread from yesterday/today).
<br>
<p><p><span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2011, at 13:40 , jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-12-15 13:40:25 EST (Thu, 15 Dec 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 25661
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25661">https://svn.open-mpi.org/trac/ompi/changeset/25661</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fix typos: these should be OMPI_DECLSPEC, not ORTE_DECLSPEC.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/debuggers/debuggers.h      |     4 ++--                                    
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/debuggers/ompi_debuggers.c |     6 +++---                                  
</span><br>
<span class="quotelev2">&gt;&gt;  2 files changed, 5 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/debuggers/debuggers.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/debuggers/debuggers.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/debuggers/debuggers.h	2011-12-15 13:40:25 EST (Thu, 15 Dec 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2007-2011 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt; * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -44,7 +44,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; /**
</span><br>
<span class="quotelev2">&gt;&gt; * Breakpoint function for parallel debuggers.
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; -ORTE_DECLSPEC extern void MPIR_Breakpoint(void);
</span><br>
<span class="quotelev2">&gt;&gt; +OMPI_DECLSPEC extern void MPIR_Breakpoint(void);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; END_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/debuggers/ompi_debuggers.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/debuggers/ompi_debuggers.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/debuggers/ompi_debuggers.c	2011-12-15 13:40:25 EST (Thu, 15 Dec 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -10,7 +10,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2007-2011 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt; * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -126,8 +126,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC ompi_datatype_t* ompi_datatype_t_type_force_inclusion = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC volatile int MPIR_debug_gate = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -ORTE_DECLSPEC extern volatile int MPIR_being_debugged;
</span><br>
<span class="quotelev2">&gt;&gt; -ORTE_DECLSPEC extern volatile int MPIR_debug_state;
</span><br>
<span class="quotelev2">&gt;&gt; +OMPI_DECLSPEC extern volatile int MPIR_being_debugged;
</span><br>
<span class="quotelev2">&gt;&gt; +OMPI_DECLSPEC extern volatile int MPIR_debug_state;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC char *MPIR_debug_abort_string = &quot;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* Check for a file in few direct ways for portability */
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10141.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="10139.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661"</a>
<li><strong>In reply to:</strong> <a href="10139.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661"</a>
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
