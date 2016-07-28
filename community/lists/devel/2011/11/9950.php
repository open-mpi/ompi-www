<?
$subject_val = "Re: [OMPI devel] debugger changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 17:18:44 2011" -->
<!-- isoreceived="20111108221844" -->
<!-- sent="Tue, 8 Nov 2011 17:18:31 -0500" -->
<!-- isosent="20111108221831" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debugger changes" -->
<!-- id="942C85FB-6056-4270-A090-C3F1ADED19A3_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8FD9F60A-283A-4FEE-A1BE-A729A5CA3E50_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debugger changes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 17:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9951.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9949.php">George Bosilca: "[OMPI devel] Open MPI BOF"</a>
<li><strong>In reply to:</strong> <a href="9940.php">Jeff Squyres: "[OMPI devel] debugger changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9953.php">Ashley Pittman: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Reply:</strong> <a href="9953.php">Ashley Pittman: "Re: [OMPI devel] debugger changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPIR_Breakpoint, as the name indicates, it is just a breakpoint used by the startup process or the MPI application to signal changes to the debugger. No return value, nothing more than a breakpoint.
<br>
<p>I wonder how the volatile got there, there is no such requirement on variables that cannot be changed during execution.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 8, 2011, at 08:36 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think the only possible controversial change in this commit is changing MPIR_Breakpoint() to return (void) instead of (void*).  Oddly, I see that MPICH2 has 2 different prototypes for MPIR_Breakpoint -- one returns (void*), another returns (int).  Assuming that MPICH2 works fine with the debuggers, this suggests that the return is ignored by the tools -- as it should be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't check the volatile removals; I'm assuming that George got them right. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll bet that this change does not cause any problems, but it might be worth checking with the big 3+1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - DDT
</span><br>
<span class="quotelev1">&gt; - Totalview
</span><br>
<span class="quotelev1">&gt; - padb
</span><br>
<span class="quotelev1">&gt; - stat
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2011, at 8:24 PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-11-07 20:24:16 EST (Mon, 07 Nov 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 25456
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25456">https://svn.open-mpi.org/trac/ompi/changeset/25456</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Put the interface of our MPIR support in sync with the document accepted by the MPI
</span><br>
<span class="quotelev2">&gt;&gt; Forum (<a href="http://www.mpi-forum.org/docs/mpir-specification-10-11-2010.pdf">http://www.mpi-forum.org/docs/mpir-specification-10-11-2010.pdf</a>).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/debuggers/debuggers.h                  |    28 ++++++++++++++--------------            
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/debugger/base/base.h               |    10 +++++-----                              
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/debugger/base/debugger_base_fns.c  |     6 +++---                                  
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/debugger/base/debugger_base_open.c |     6 +++---                                  
</span><br>
<span class="quotelev2">&gt;&gt;  4 files changed, 25 insertions(+), 25 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/debuggers/debuggers.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/debuggers/debuggers.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/debuggers/debuggers.h	2011-11-07 20:24:16 EST (Mon, 07 Nov 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -31,20 +31,20 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    /**
</span><br>
<span class="quotelev2">&gt;&gt; -     * Wait for a debugger if asked.
</span><br>
<span class="quotelev2">&gt;&gt; -     */
</span><br>
<span class="quotelev2">&gt;&gt; -    extern void ompi_wait_for_debugger(void);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /**
</span><br>
<span class="quotelev2">&gt;&gt; -     * Notify a debugger that we're about to abort
</span><br>
<span class="quotelev2">&gt;&gt; -     */
</span><br>
<span class="quotelev2">&gt;&gt; -    extern void ompi_debugger_notify_abort(char *string);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /**
</span><br>
<span class="quotelev2">&gt;&gt; -     * Breakpoint function for parallel debuggers.
</span><br>
<span class="quotelev2">&gt;&gt; -     */
</span><br>
<span class="quotelev2">&gt;&gt; -    ORTE_DECLSPEC extern void *MPIR_Breakpoint(void);
</span><br>
<span class="quotelev2">&gt;&gt; +/**
</span><br>
<span class="quotelev2">&gt;&gt; + * Wait for a debugger if asked.
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +extern void ompi_wait_for_debugger(void);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/**
</span><br>
<span class="quotelev2">&gt;&gt; + * Notify a debugger that we're about to abort
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +extern void ompi_debugger_notify_abort(char *string);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/**
</span><br>
<span class="quotelev2">&gt;&gt; + * Breakpoint function for parallel debuggers.
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC extern void MPIR_Breakpoint(void);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; END_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/debugger/base/base.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/debugger/base/base.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/debugger/base/base.h	2011-11-07 20:24:16 EST (Mon, 07 Nov 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -61,18 +61,18 @@
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC extern int MPIR_proctable_size;
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC extern volatile int MPIR_being_debugged;
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC extern volatile int MPIR_debug_state;
</span><br>
<span class="quotelev2">&gt;&gt; -ORTE_DECLSPEC extern volatile int MPIR_i_am_starter;
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC extern int MPIR_i_am_starter;
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC extern int MPIR_partial_attach_ok;
</span><br>
<span class="quotelev2">&gt;&gt; -ORTE_DECLSPEC extern volatile char MPIR_executable_path[MPIR_MAX_PATH_LENGTH];
</span><br>
<span class="quotelev2">&gt;&gt; -ORTE_DECLSPEC extern volatile char MPIR_server_arguments[MPIR_MAX_ARG_LENGTH];
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC extern char MPIR_executable_path[MPIR_MAX_PATH_LENGTH];
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC extern char MPIR_server_arguments[MPIR_MAX_ARG_LENGTH];
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC extern volatile int MPIR_forward_output;
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC extern volatile int MPIR_forward_comm;
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC extern char MPIR_attach_fifo[MPIR_MAX_PATH_LENGTH];
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC extern int MPIR_force_to_main;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -typedef void* (*orte_debugger_breakpoint_fn_t)(void);
</span><br>
<span class="quotelev2">&gt;&gt; +typedef void (*orte_debugger_breakpoint_fn_t)(void);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -ORTE_DECLSPEC void* MPIR_Breakpoint(void);
</span><br>
<span class="quotelev2">&gt;&gt; +ORTE_DECLSPEC void MPIR_Breakpoint(void);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* --- end MPICH/TotalView std debugger interface definitions */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/debugger/base/debugger_base_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/debugger/base/debugger_base_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/debugger/base/debugger_base_fns.c	2011-11-07 20:24:16 EST (Mon, 07 Nov 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -168,7 +168,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;         */
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_PROGRESSED_WAIT(false, jdata-&gt;num_reported, jdata-&gt;num_procs);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -        (void) MPIR_Breakpoint();
</span><br>
<span class="quotelev2">&gt;&gt; +        MPIR_Breakpoint();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /* send a message to rank=0 to release it */
</span><br>
<span class="quotelev2">&gt;&gt;        OBJ_CONSTRUCT(&amp;buf, opal_buffer_t); /* don't need anything in this */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -186,7 +186,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Breakpoint function for parallel debuggers
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; -void *MPIR_Breakpoint(void)
</span><br>
<span class="quotelev2">&gt;&gt; +void MPIR_Breakpoint(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -    return NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    return;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/debugger/base/debugger_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/debugger/base/debugger_base_open.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/debugger/base/debugger_base_open.c	2011-11-07 20:24:16 EST (Mon, 07 Nov 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -43,10 +43,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; int MPIR_proctable_size = 0;
</span><br>
<span class="quotelev2">&gt;&gt; volatile int MPIR_being_debugged = 0;
</span><br>
<span class="quotelev2">&gt;&gt; volatile int MPIR_debug_state = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -volatile int MPIR_i_am_starter = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +int MPIR_i_am_starter = 0;
</span><br>
<span class="quotelev2">&gt;&gt; int MPIR_partial_attach_ok = 1;
</span><br>
<span class="quotelev2">&gt;&gt; -volatile char MPIR_executable_path[MPIR_MAX_PATH_LENGTH];
</span><br>
<span class="quotelev2">&gt;&gt; -volatile char MPIR_server_arguments[MPIR_MAX_ARG_LENGTH];
</span><br>
<span class="quotelev2">&gt;&gt; +char MPIR_executable_path[MPIR_MAX_PATH_LENGTH];
</span><br>
<span class="quotelev2">&gt;&gt; +char MPIR_server_arguments[MPIR_MAX_ARG_LENGTH];
</span><br>
<span class="quotelev2">&gt;&gt; volatile int MPIR_forward_output = 0;
</span><br>
<span class="quotelev2">&gt;&gt; volatile int MPIR_forward_comm = 0;
</span><br>
<span class="quotelev2">&gt;&gt; char MPIR_attach_fifo[MPIR_MAX_PATH_LENGTH];
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="9951.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9949.php">George Bosilca: "[OMPI devel] Open MPI BOF"</a>
<li><strong>In reply to:</strong> <a href="9940.php">Jeff Squyres: "[OMPI devel] debugger changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9953.php">Ashley Pittman: "Re: [OMPI devel] debugger changes"</a>
<li><strong>Reply:</strong> <a href="9953.php">Ashley Pittman: "Re: [OMPI devel] debugger changes"</a>
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
