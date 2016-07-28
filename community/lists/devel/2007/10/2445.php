<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 12:38:36 2007" -->
<!-- isoreceived="20071015163836" -->
<!-- sent="Mon, 15 Oct 2007 12:38:25 -0400" -->
<!-- isosent="20071015163825" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16443" -->
<!-- id="6B1540D6-5BE3-4993-A992-15A87399E1F3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200710151310.l9FDALCx018572_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-15 12:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2446.php">Richard Graham: "[OMPI devel] FW: [devel-core] [RFC] Proposed changes to ompi_free_list"</a>
<li><strong>Previous message:</strong> <a href="2444.php">Jeff Squyres: "[OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf --
<br>
<p>I didn't object to this RFC, but I didn't understand that you were  
<br>
going to *always* have a valid output stream for mca_btl_base_output  
<br>
(vs. being -1 when verbosity was not enabled).
<br>
<p>Is this what you meant to do?  It enabled some output from the openib  
<br>
btl (on the trunk) when running with no parameters because we were  
<br>
doing the following:
<br>
<p>&nbsp;&nbsp;&nbsp;opal_output(mca_btl_base_output, &quot;foo&quot;);
<br>
<p>with no conditionals; relying on mca_btl_base_output to be -1 if  
<br>
verbosity was not enabled.
<br>
<p>Are we supposed to now be using BTL_DEBUG / BTL_VERBOSE for this kind  
<br>
of stuff now?
<br>
<p><p>On Oct 15, 2007, at 9:10 AM, rolfv_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rolfv
</span><br>
<span class="quotelev1">&gt; Date: 2007-10-15 09:10:20 EDT (Mon, 15 Oct 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16443
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16443">https://svn.open-mpi.org/trac/ompi/changeset/16443</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Remove the --mca btl_base_debug flag and clean up
</span><br>
<span class="quotelev1">&gt; the use of the --mca btl_base_verbose flag.  The
</span><br>
<span class="quotelev1">&gt; btl framework now matches all the other frameworks.
</span><br>
<span class="quotelev1">&gt; Slightly modify error messages for clarity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/base/btl_base_error.c  |     4 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/base/btl_base_error.h  |    21 ++++ 
</span><br>
<span class="quotelev1">&gt; +----------------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/base/btl_base_open.c   |    27 +++++++++++ 
</span><br>
<span class="quotelev1">&gt; +---------------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/base/btl_base_select.c |    10 +++++++---
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c |     3 ++-
</span><br>
<span class="quotelev1">&gt;    5 files changed, 28 insertions(+), 37 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/base/btl_base_error.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/base/btl_base_error.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/base/btl_base_error.c	2007-10-15 09:10:20  
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 15 Oct 2007)
</span><br>
<span class="quotelev1">&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2006      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2006-2007 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -28,7 +28,7 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/util/sys_info.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/mca/ns/ns_types.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -int mca_btl_base_debug;
</span><br>
<span class="quotelev1">&gt; +int mca_btl_base_verbose;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int mca_btl_base_err(const char* fmt, ...)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/base/btl_base_error.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/base/btl_base_error.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/base/btl_base_error.h	2007-10-15 09:10:20  
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 15 Oct 2007)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -29,7 +30,7 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/util/sys_info.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/mca/ns/ns_types.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -OMPI_DECLSPEC extern int mca_btl_base_debug;
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern int mca_btl_base_verbose;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  OMPI_DECLSPEC extern int mca_btl_base_err(const char*, ...);
</span><br>
<span class="quotelev1">&gt;  extern int mca_btl_base_out(const char*, ...);
</span><br>
<span class="quotelev1">&gt; @@ -70,30 +71,18 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; -#define BTL_DEBUG(args)                                      \
</span><br>
<span class="quotelev1">&gt; -do {                                                         \
</span><br>
<span class="quotelev1">&gt; -   if(mca_btl_base_debug) {                                  \
</span><br>
<span class="quotelev1">&gt; -        mca_btl_base_err(&quot;[%s]%s[%s:%d:%s] &quot;,     \
</span><br>
<span class="quotelev1">&gt; -                orte_system_info.nodename,                   \
</span><br>
<span class="quotelev1">&gt; -                ORTE_NAME_PRINT(orte_process_info.my_name),   \
</span><br>
<span class="quotelev1">&gt; -                __FILE__, __LINE__, __func__);               \
</span><br>
<span class="quotelev1">&gt; -        mca_btl_base_err args;                               \
</span><br>
<span class="quotelev1">&gt; -        mca_btl_base_err(&quot;\n&quot;);                              \
</span><br>
<span class="quotelev1">&gt; -   }                                                         \
</span><br>
<span class="quotelev1">&gt; -} while(0);
</span><br>
<span class="quotelev1">&gt;  #define BTL_VERBOSE(args)                                    \
</span><br>
<span class="quotelev1">&gt;  do {                                                         \
</span><br>
<span class="quotelev1">&gt; -   if(mca_btl_base_debug &gt; 1) {                              \
</span><br>
<span class="quotelev1">&gt; -        mca_btl_base_err(&quot;[%s]%s[%s:%d:%s] &quot;,     \
</span><br>
<span class="quotelev1">&gt; +   if(mca_btl_base_verbose &gt; 0) {                            \
</span><br>
<span class="quotelev1">&gt; +        mca_btl_base_err(&quot;[%s]%s[%s:%d:%s] &quot;,                \
</span><br>
<span class="quotelev1">&gt;                  orte_system_info.nodename,                   \
</span><br>
<span class="quotelev1">&gt; -                ORTE_NAME_PRINT(orte_process_info.my_name),   \
</span><br>
<span class="quotelev1">&gt; +                ORTE_NAME_PRINT(orte_process_info.my_name),  \
</span><br>
<span class="quotelev1">&gt;                  __FILE__, __LINE__, __func__);               \
</span><br>
<span class="quotelev1">&gt;          mca_btl_base_err args;                               \
</span><br>
<span class="quotelev1">&gt;          mca_btl_base_err(&quot;\n&quot;);                              \
</span><br>
<span class="quotelev1">&gt;     }                                                         \
</span><br>
<span class="quotelev1">&gt;  } while(0);
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt; -#define BTL_DEBUG(args)
</span><br>
<span class="quotelev1">&gt;  #define BTL_VERBOSE(args)
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/base/btl_base_open.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/base/btl_base_open.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/base/btl_base_open.c	2007-10-15 09:10:20 EDT  
</span><br>
<span class="quotelev1">&gt; (Mon, 15 Oct 2007)
</span><br>
<span class="quotelev1">&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2006      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2006-2007 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -84,24 +84,21 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      if( ++already_opened &gt; 1 ) return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    mca_base_param_reg_int_name( &quot;btl&quot;,
</span><br>
<span class="quotelev1">&gt; -                                 &quot;base_debug&quot;,
</span><br>
<span class="quotelev1">&gt; -                                 &quot;If btl_base_debug is 1 standard  
</span><br>
<span class="quotelev1">&gt; debug is output, if &gt; 1 verbose debug is output&quot;,
</span><br>
<span class="quotelev1">&gt; -                                 false, false,
</span><br>
<span class="quotelev1">&gt; -                                 0,
</span><br>
<span class="quotelev1">&gt; -                                 &amp;mca_btl_base_debug );
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if( mca_btl_base_debug &gt; 0 ) {
</span><br>
<span class="quotelev1">&gt; -        mca_btl_base_output = opal_output_open(NULL);
</span><br>
<span class="quotelev1">&gt; -        opal_output_set_verbosity(mca_btl_base_output,  
</span><br>
<span class="quotelev1">&gt; mca_btl_base_debug);
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        mca_btl_base_output = -1;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    /* Verbose output */
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int_name(&quot;btl&quot;,
</span><br>
<span class="quotelev1">&gt; +                                &quot;base_verbose&quot;,
</span><br>
<span class="quotelev1">&gt; +                                &quot;Verbosity level of the BTL  
</span><br>
<span class="quotelev1">&gt; framework&quot;,
</span><br>
<span class="quotelev1">&gt; +                                false, false,
</span><br>
<span class="quotelev1">&gt; +                                0,
</span><br>
<span class="quotelev1">&gt; +                                &amp;mca_btl_base_verbose);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mca_btl_base_output = opal_output_open(NULL);
</span><br>
<span class="quotelev1">&gt; +    opal_output_set_verbosity(mca_btl_base_output,  
</span><br>
<span class="quotelev1">&gt; mca_btl_base_verbose);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* Open up all available components */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev1">&gt; -      mca_base_components_open(&quot;btl&quot;, 0,  
</span><br>
<span class="quotelev1">&gt; mca_btl_base_static_components,
</span><br>
<span class="quotelev1">&gt; +      mca_base_components_open(&quot;btl&quot;, mca_btl_base_output,  
</span><br>
<span class="quotelev1">&gt; mca_btl_base_static_components,
</span><br>
<span class="quotelev1">&gt;                                 &amp;mca_btl_base_components_opened,  
</span><br>
<span class="quotelev1">&gt; true)) {
</span><br>
<span class="quotelev1">&gt;      return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/base/btl_base_select.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/base/btl_base_select.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/base/btl_base_select.c	2007-10-15 09:10:20  
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 15 Oct 2007)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -104,7 +105,8 @@
</span><br>
<span class="quotelev1">&gt;                              component- 
</span><br>
<span class="quotelev2">&gt; &gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev1">&gt;          if (NULL == component-&gt;btl_init) {
</span><br>
<span class="quotelev1">&gt;              opal_output_verbose(10, mca_btl_base_output,
</span><br>
<span class="quotelev1">&gt; -                                &quot;select: no init function;  
</span><br>
<span class="quotelev1">&gt; ignoring component&quot;);
</span><br>
<span class="quotelev1">&gt; +                                &quot;select: no init function;  
</span><br>
<span class="quotelev1">&gt; ignoring component %s&quot;,
</span><br>
<span class="quotelev1">&gt; +                                component- 
</span><br>
<span class="quotelev2">&gt; &gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              modules = component-&gt;btl_init(&amp;num_btls,  
</span><br>
<span class="quotelev1">&gt; enable_progress_threads,
</span><br>
<span class="quotelev1">&gt;                                            enable_mpi_threads);
</span><br>
<span class="quotelev1">&gt; @@ -114,7 +116,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              if (NULL == modules) {
</span><br>
<span class="quotelev1">&gt;                  opal_output_verbose(10, mca_btl_base_output,
</span><br>
<span class="quotelev1">&gt; -                                    &quot;select: init returned failure&quot;);
</span><br>
<span class="quotelev1">&gt; +                                    &quot;select: init of component %s  
</span><br>
<span class="quotelev1">&gt; returned failure&quot;,
</span><br>
<span class="quotelev1">&gt; +                                    component- 
</span><br>
<span class="quotelev2">&gt; &gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev1">&gt;                  opal_output_verbose(10, mca_btl_base_output,
</span><br>
<span class="quotelev1">&gt;                                      &quot;select: module %s unloaded&quot;,
</span><br>
<span class="quotelev1">&gt;                                      component- 
</span><br>
<span class="quotelev2">&gt; &gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev1">&gt; @@ -127,7 +130,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              else {
</span><br>
<span class="quotelev1">&gt;                  opal_output_verbose(10, mca_btl_base_output,
</span><br>
<span class="quotelev1">&gt; -                                    &quot;select: init returned success&quot;);
</span><br>
<span class="quotelev1">&gt; +                                    &quot;select: init of component %s  
</span><br>
<span class="quotelev1">&gt; returned success&quot;,
</span><br>
<span class="quotelev1">&gt; +                                    component- 
</span><br>
<span class="quotelev2">&gt; &gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  for (i = 0; i &lt; num_btls; ++i) {
</span><br>
<span class="quotelev1">&gt;                      sm = OBJ_NEW(mca_btl_base_selected_module_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	2007-10-15 09:10:20  
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 15 Oct 2007)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -194,7 +195,7 @@
</span><br>
<span class="quotelev1">&gt;      nodelay = 0;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    BTL_DEBUG((&quot;%s: %s - %s nodelay %d sndbuf %d rcvbuf %d flags % 
</span><br>
<span class="quotelev1">&gt; 08x&quot;,
</span><br>
<span class="quotelev1">&gt; +    BTL_VERBOSE((&quot;%s: %s - %s nodelay %d sndbuf %d rcvbuf %d flags  
</span><br>
<span class="quotelev1">&gt; %08x&quot;,
</span><br>
<span class="quotelev1">&gt;          msg, src, dst, nodelay, sndbuf, rcvbuf, flags));
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2446.php">Richard Graham: "[OMPI devel] FW: [devel-core] [RFC] Proposed changes to ompi_free_list"</a>
<li><strong>Previous message:</strong> <a href="2444.php">Jeff Squyres: "[OMPI devel] RFC: versioning OMPI libraries"</a>
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
