<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 14:51:58 2011" -->
<!-- isoreceived="20111215195158" -->
<!-- sent="Thu, 15 Dec 2011 14:51:56 -0500" -->
<!-- isosent="20111215195156" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661" -->
<!-- id="6C0C07F1-8F9B-4B8A-A1BA-551F0CD049A5_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201112151840.pBFIeQWR007580_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 14:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10140.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661"</a>
<li><strong>Previous message:</strong> <a href="10138.php">Ashley Pittman: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10140.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661"</a>
<li><strong>Reply:</strong> <a href="10140.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch is not correct. All these variables have been moved into the ORTE layer (they are declared in orte/mca/debugger/base/base.h), so they should be in fact removed from the MPI level files. 
<br>
<p>While I don't think moving them all in the ORTE was a good choice, changing their definition in these files will not help. Now these symbols are defined twice, once as ORTE_DECLSPEC and once as OMPI_DECLSPEC.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 15, 2011, at 13:40 , jsquyres_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2011-12-15 13:40:25 EST (Thu, 15 Dec 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25661
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25661">https://svn.open-mpi.org/trac/ompi/changeset/25661</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix typos: these should be OMPI_DECLSPEC, not ORTE_DECLSPEC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/debuggers/debuggers.h      |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/debuggers/ompi_debuggers.c |     6 +++---                                  
</span><br>
<span class="quotelev1">&gt;   2 files changed, 5 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/debuggers/debuggers.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/debuggers/debuggers.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/debuggers/debuggers.h	2011-12-15 13:40:25 EST (Thu, 15 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev1">&gt;  *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007-2011 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -44,7 +44,7 @@
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Breakpoint function for parallel debuggers.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -ORTE_DECLSPEC extern void MPIR_Breakpoint(void);
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern void MPIR_Breakpoint(void);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; END_C_DECLS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/debuggers/ompi_debuggers.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/debuggers/ompi_debuggers.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/debuggers/ompi_debuggers.c	2011-12-15 13:40:25 EST (Thu, 15 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -10,7 +10,7 @@
</span><br>
<span class="quotelev1">&gt;  *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007-2011 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -126,8 +126,8 @@
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC ompi_datatype_t* ompi_datatype_t_type_force_inclusion = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC volatile int MPIR_debug_gate = 0;
</span><br>
<span class="quotelev1">&gt; -ORTE_DECLSPEC extern volatile int MPIR_being_debugged;
</span><br>
<span class="quotelev1">&gt; -ORTE_DECLSPEC extern volatile int MPIR_debug_state;
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern volatile int MPIR_being_debugged;
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern volatile int MPIR_debug_state;
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC char *MPIR_debug_abort_string = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Check for a file in few direct ways for portability */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10140.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661"</a>
<li><strong>Previous message:</strong> <a href="10138.php">Ashley Pittman: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10140.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661"</a>
<li><strong>Reply:</strong> <a href="10140.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25661"</a>
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
