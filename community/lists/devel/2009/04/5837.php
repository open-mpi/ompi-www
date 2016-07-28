<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 18:10:18 2009" -->
<!-- isoreceived="20090416221018" -->
<!-- sent="Thu, 16 Apr 2009 18:09:58 -0400" -->
<!-- isosent="20090416220958" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)" -->
<!-- id="20090416220958.GI26929_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081210212931.GJ240_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 18:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5838.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
<li><strong>Previous message:</strong> <a href="5836.php">Ralph Castain: "Re: [OMPI devel] 1.3.2 rc"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5033.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris malloc.h issue)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5838.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
<li><strong>Reply:</strong> <a href="5838.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think I have a better fix for this issue. It is to simply #include
<br>
&lt;malloc.h&gt; *before* ompi_config.h.
<br>
<p>&nbsp;&nbsp;--- ompi/mca/common/mx/common_mx.c
<br>
&nbsp;&nbsp;+++ ompi/mca/common/mx/common_mx.c
<br>
&nbsp;&nbsp;@@ -19,15 +19,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* $HEADER$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;+#ifdef HAVE_MALLOC_H
<br>
&nbsp;&nbsp;+#include &lt;malloc.h&gt;
<br>
&nbsp;&nbsp;+#endif
<br>
&nbsp;&nbsp;+
<br>
&nbsp;&nbsp;&nbsp;#include &quot;ompi_config.h&quot;
<br>
&nbsp;&nbsp;&nbsp;#include &quot;orte/util/show_help.h&quot;
<br>
&nbsp;&nbsp;&nbsp;#include &quot;ompi/constants.h&quot;
<br>
&nbsp;&nbsp;&nbsp;#include &quot;common_mx.h&quot;
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;#include &lt;errno.h&gt;
<br>
&nbsp;&nbsp;-#ifdef HAVE_MALLOC_H
<br>
&nbsp;&nbsp;-#include &lt;malloc.h&gt;
<br>
&nbsp;&nbsp;-#endif
<br>
&nbsp;&nbsp;&nbsp;#include &quot;opal/memoryhooks/memory.h&quot;
<br>
&nbsp;&nbsp;&nbsp;#include &quot;opal/mca/base/mca_base_param.h&quot;
<br>
&nbsp;&nbsp;&nbsp;#include &quot;ompi/runtime/params.h&quot;
<br>
<p>The reason for doing this is because ompi_config.h (which includes
<br>
ompi_config_bottom.h) #defines &quot;malloc&quot;, so we end up with OMPI code
<br>
getting spliced into the Solaris /usr/include/malloc.h code. 
<br>
<p>Is this fix okay?
<br>
<p>-Ethan
<br>
<p>On Wed, Dec/10/2008 04:29:31PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Hi Patrick,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r20003 seems to break MX support on Solaris.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ cd ompi/mca/common/mx
</span><br>
<span class="quotelev1">&gt;   $ make
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;   &quot;/usr/include/malloc.h&quot;, line 46: syntax error before or at: (
</span><br>
<span class="quotelev1">&gt;   &quot;/usr/include/malloc.h&quot;, line 47: syntax error before or at: (
</span><br>
<span class="quotelev1">&gt;   &quot;/usr/include/malloc.h&quot;, line 48: syntax error before or at: (
</span><br>
<span class="quotelev1">&gt;   &quot;/usr/include/malloc.h&quot;, line 48: cannot have void object: size_t
</span><br>
<span class="quotelev1">&gt;   &quot;/usr/include/malloc.h&quot;, line 48: identifier redeclared: size_t
</span><br>
<span class="quotelev1">&gt;   ... &lt;4000 more lines of compiler errors&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The below patch makes it so opal/util/malloc.h is used instead of
</span><br>
<span class="quotelev1">&gt; /usr/include/malloc.h and the compiler errors go away. (I also needed
</span><br>
<span class="quotelev1">&gt; to include errno.h.) Would this be okay to do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   diff -r 347f52a3713f ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev1">&gt;   --- ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev1">&gt;   +++ ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev1">&gt;   @@ -23,9 +23,8 @@
</span><br>
<span class="quotelev1">&gt;    #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev1">&gt;    #include &quot;common_mx.h&quot;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;   -#ifdef HAVE_MALLOC_H
</span><br>
<span class="quotelev1">&gt;   -#include &lt;malloc.h&gt;
</span><br>
<span class="quotelev1">&gt;   -#endif
</span><br>
<span class="quotelev1">&gt;   +#include &lt;errno.h&gt;
</span><br>
<span class="quotelev1">&gt;   +#include &quot;opal/util/malloc.h&quot;
</span><br>
<span class="quotelev1">&gt;    #include &quot;opal/memoryhooks/memory.h&quot;
</span><br>
<span class="quotelev1">&gt;    #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev1">&gt;    #include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested the above on Solaris and Linux with SunStudio.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Nov/14/2008 11:17:59PM, patrick_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: patrick
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2008-11-14 23:17:58 EST (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 20003
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20003">https://svn.open-mpi.org/trac/ompi/changeset/20003</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Define a &quot;fake&quot; mpool to provide a memory release callback for the 
</span><br>
<span class="quotelev2">&gt; &gt; memory hooks (munmap) and initialize the mallopt component, and 
</span><br>
<span class="quotelev2">&gt; &gt; nothing else.
</span><br>
<span class="quotelev2">&gt; &gt; Use this mpool in the MX common initialization, supporting both BTL 
</span><br>
<span class="quotelev2">&gt; &gt; and MTL. Automatically set the MX_RCACHE environment variable to 
</span><br>
<span class="quotelev2">&gt; &gt; enable registration cache in MX.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Tested with success for munmap() and large free().
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Added:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/mpool/fake/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/mpool/fake/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/mpool/fake/configure.params
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/mpool/fake/mpool_fake.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/mpool/fake/mpool_fake_component.c
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/mpool/fake/mpool_fake_module.c
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/common/mx/common_mx.c |    56 +++++++++++++++++++++++++++++++++++++++ 
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 55 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/common/mx/common_mx.c	(original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/common/mx/common_mx.c	2008-11-14 23:17:58 EST (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -9,6 +9,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;   * Copyright (c) 2004-2006 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt;   *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2008      Myricom. All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * 
</span><br>
<span class="quotelev2">&gt; &gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt;   *
</span><br>
<span class="quotelev2">&gt; &gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; @@ -21,11 +23,29 @@
</span><br>
<span class="quotelev2">&gt; &gt;  #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  #include &quot;common_mx.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef HAVE_MALLOC_H
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;malloc.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/memoryhooks/memory.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi/mca/mpool/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi/mca/mpool/fake/mpool_fake.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +int mx__regcache_clean(void *ptr, size_t size);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;  static int ompi_common_mx_initialize_ref_cnt = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +static mca_mpool_base_module_t *ompi_common_mx_fake_mpool = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;  int
</span><br>
<span class="quotelev2">&gt; &gt;  ompi_common_mx_initialize(void)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;      mx_return_t mx_return;
</span><br>
<span class="quotelev2">&gt; &gt; +    struct mca_mpool_base_resources_t mpool_resources;
</span><br>
<span class="quotelev2">&gt; &gt; +    int index, value;
</span><br>
<span class="quotelev2">&gt; &gt; +    
</span><br>
<span class="quotelev2">&gt; &gt;      ompi_common_mx_initialize_ref_cnt++;
</span><br>
<span class="quotelev2">&gt; &gt;      
</span><br>
<span class="quotelev2">&gt; &gt;      if(ompi_common_mx_initialize_ref_cnt == 1) { 
</span><br>
<span class="quotelev2">&gt; &gt; @@ -35,7 +55,37 @@
</span><br>
<span class="quotelev2">&gt; &gt;           * library does not exit the application.
</span><br>
<span class="quotelev2">&gt; &gt;           */
</span><br>
<span class="quotelev2">&gt; &gt;          mx_set_error_handler(MX_ERRORS_RETURN);
</span><br>
<span class="quotelev2">&gt; &gt; -        
</span><br>
<span class="quotelev2">&gt; &gt; +	
</span><br>
<span class="quotelev2">&gt; &gt; +	/* If we have a memory manager available, and
</span><br>
<span class="quotelev2">&gt; &gt; +	   mpi_leave_pinned == -1, then set mpi_leave_pinned to 1.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +	   We have a memory manager if:
</span><br>
<span class="quotelev2">&gt; &gt; +	   - we have both FREE and MUNMAP support
</span><br>
<span class="quotelev2">&gt; &gt; +	   - we have MUNMAP support and the linux mallopt */
</span><br>
<span class="quotelev2">&gt; &gt; +	value = opal_mem_hooks_support_level();
</span><br>
<span class="quotelev2">&gt; &gt; +	if (((value &amp; (OPAL_MEMORY_FREE_SUPPORT | OPAL_MEMORY_MUNMAP_SUPPORT))
</span><br>
<span class="quotelev2">&gt; &gt; +	     == (OPAL_MEMORY_FREE_SUPPORT | OPAL_MEMORY_MUNMAP_SUPPORT))
</span><br>
<span class="quotelev2">&gt; &gt; +	    || ((value &amp; OPAL_MEMORY_MUNMAP_SUPPORT) &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; +		OMPI_MPOOL_BASE_HAVE_LINUX_MALLOPT)) {
</span><br>
<span class="quotelev2">&gt; &gt; +	  index = mca_base_param_find(&quot;mpi&quot;, NULL, &quot;leave_pinned&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +	  if (index &gt;= 0)
</span><br>
<span class="quotelev2">&gt; &gt; +            if ((mca_base_param_lookup_int(index, &amp;value) == OPAL_SUCCESS) 
</span><br>
<span class="quotelev2">&gt; &gt; +		&amp;&amp; (value == -1)) {
</span><br>
<span class="quotelev2">&gt; &gt; +	      
</span><br>
<span class="quotelev2">&gt; &gt; +	      ompi_mpi_leave_pinned = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +	      setenv(&quot;MX_RCACHE&quot;, &quot;2&quot;, 1);
</span><br>
<span class="quotelev2">&gt; &gt; +	      mpool_resources.regcache_clean = mx__regcache_clean;
</span><br>
<span class="quotelev2">&gt; &gt; +	      ompi_common_mx_fake_mpool = 
</span><br>
<span class="quotelev2">&gt; &gt; +		mca_mpool_base_module_create(&quot;fake&quot;, NULL, &amp;mpool_resources);
</span><br>
<span class="quotelev2">&gt; &gt; +	      if (!ompi_common_mx_fake_mpool) {
</span><br>
<span class="quotelev2">&gt; &gt; +		ompi_mpi_leave_pinned = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +		setenv(&quot;MX_RCACHE&quot;, &quot;0&quot;, 1);
</span><br>
<span class="quotelev2">&gt; &gt; +		opal_output(0, &quot;Error creating fake mpool (error %s)\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +			    strerror(errno));
</span><br>
<span class="quotelev2">&gt; &gt; +	      }
</span><br>
<span class="quotelev2">&gt; &gt; +	    }
</span><br>
<span class="quotelev2">&gt; &gt; +	}
</span><br>
<span class="quotelev2">&gt; &gt; +	
</span><br>
<span class="quotelev2">&gt; &gt;          /* initialize the mx library */
</span><br>
<span class="quotelev2">&gt; &gt;          mx_return = mx_init(); 
</span><br>
<span class="quotelev2">&gt; &gt;          
</span><br>
<span class="quotelev2">&gt; &gt; @@ -57,6 +107,10 @@
</span><br>
<span class="quotelev2">&gt; &gt;      mx_return_t mx_return;
</span><br>
<span class="quotelev2">&gt; &gt;      ompi_common_mx_initialize_ref_cnt--;
</span><br>
<span class="quotelev2">&gt; &gt;      if( 0 == ompi_common_mx_initialize_ref_cnt ) { 
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        if (ompi_common_mx_fake_mpool) 
</span><br>
<span class="quotelev2">&gt; &gt; +	  mca_mpool_base_module_destroy(ompi_common_mx_fake_mpool);
</span><br>
<span class="quotelev2">&gt; &gt; +        
</span><br>
<span class="quotelev2">&gt; &gt;          mx_return = mx_finalize(); 
</span><br>
<span class="quotelev2">&gt; &gt;          if(mx_return != MX_SUCCESS){ 
</span><br>
<span class="quotelev2">&gt; &gt;              opal_output(0, &quot;Error in mx_finalize (error %s)\n&quot;, mx_strerror(mx_return));
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/ompi/mca/mpool/fake/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mpool/fake/Makefile.am	2008-11-14 23:17:58 EST (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,56 @@
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev2">&gt; &gt; +#                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt; &gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; +#                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; +#                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt; +#                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2008      Myricom.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +AM_CPPFLAGS = $(mpool_fake_CPPFLAGS)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +sources = \
</span><br>
<span class="quotelev2">&gt; &gt; +	mpool_fake_module.c \
</span><br>
<span class="quotelev2">&gt; &gt; +	mpool_fake_component.c
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +if WANT_INSTALL_HEADERS
</span><br>
<span class="quotelev2">&gt; &gt; +ompidir = $(includedir)/openmpi/ompi/mca/mpool/fake
</span><br>
<span class="quotelev2">&gt; &gt; +ompi_HEADERS = mpool_fake.h
</span><br>
<span class="quotelev2">&gt; &gt; +else
</span><br>
<span class="quotelev2">&gt; &gt; +ompidir = $(includedir)
</span><br>
<span class="quotelev2">&gt; &gt; +ompi_HEADERS =
</span><br>
<span class="quotelev2">&gt; &gt; +endif
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Make the output library in this directory, and name it either
</span><br>
<span class="quotelev2">&gt; &gt; +# mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
</span><br>
<span class="quotelev2">&gt; &gt; +# (for static builds).
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +if OMPI_BUILD_mpool_fake_DSO
</span><br>
<span class="quotelev2">&gt; &gt; +component_noinst =
</span><br>
<span class="quotelev2">&gt; &gt; +component_install = mca_mpool_fake.la
</span><br>
<span class="quotelev2">&gt; &gt; +else
</span><br>
<span class="quotelev2">&gt; &gt; +component_noinst = libmca_mpool_fake.la
</span><br>
<span class="quotelev2">&gt; &gt; +component_install =
</span><br>
<span class="quotelev2">&gt; &gt; +endif
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +mcacomponentdir = $(pkglibdir)
</span><br>
<span class="quotelev2">&gt; &gt; +mcacomponent_LTLIBRARIES = $(component_install)
</span><br>
<span class="quotelev2">&gt; &gt; +mca_mpool_fake_la_SOURCES = $(sources)
</span><br>
<span class="quotelev2">&gt; &gt; +mca_mpool_fake_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev2">&gt; &gt; +mca_mpool_fake_la_LIBADD = $(mpool_fake_LIBS)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +noinst_LTLIBRARIES = $(component_noinst)
</span><br>
<span class="quotelev2">&gt; &gt; +libmca_mpool_fake_la_SOURCES = $(sources)
</span><br>
<span class="quotelev2">&gt; &gt; +libmca_mpool_fake_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev2">&gt; &gt; +libmca_mpool_fake_la_LIBADD = $(mpool_fake_LIBS)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/ompi/mca/mpool/fake/configure.params
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mpool/fake/configure.params	2008-11-14 23:17:58 EST (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,24 @@
</span><br>
<span class="quotelev2">&gt; &gt; +# -*- shell-script -*-
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev2">&gt; &gt; +#                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt; &gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; +#                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; +#                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt; +#                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +# Copyright (c) 2008      Myricom. All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Specific to this module
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +PARAM_CONFIG_FILES=&quot;Makefile&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/ompi/mca/mpool/fake/mpool_fake.h
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mpool/fake/mpool_fake.h	2008-11-14 23:17:58 EST (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,74 @@
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2006 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt; &gt; + *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; + *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt; + *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2008      Myricom. All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +/**
</span><br>
<span class="quotelev2">&gt; &gt; + * @file
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#ifndef MCA_MPOOL_FAKE_H
</span><br>
<span class="quotelev2">&gt; &gt; +#define MCA_MPOOL_FAKE_H
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt; &gt; +extern &quot;C&quot; {
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +typedef struct mca_mpool_fake_component_t {
</span><br>
<span class="quotelev2">&gt; &gt; +  mca_mpool_base_component_t super;
</span><br>
<span class="quotelev2">&gt; &gt; +} mca_mpool_fake_component_t;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +OMPI_DECLSPEC extern mca_mpool_fake_component_t mca_mpool_fake_component;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +typedef struct mca_mpool_base_resources_t {
</span><br>
<span class="quotelev2">&gt; &gt; +  int (*regcache_clean)(void *ptr, size_t size);
</span><br>
<span class="quotelev2">&gt; &gt; +} mca_mpool_base_resources_t;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +typedef struct mca_mpool_fake_module_t {
</span><br>
<span class="quotelev2">&gt; &gt; +  mca_mpool_base_module_t super;
</span><br>
<span class="quotelev2">&gt; &gt; +  mca_mpool_base_resources_t resources;
</span><br>
<span class="quotelev2">&gt; &gt; +} mca_mpool_fake_module_t;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + *  Initializes the mpool module.
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +void mca_mpool_fake_module_init(mca_mpool_fake_module_t *mpool);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/**
</span><br>
<span class="quotelev2">&gt; &gt; + * unregister all registration covering the block of memory
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +int mca_mpool_fake_release_memory(mca_mpool_base_module_t* mpool, void *base,
</span><br>
<span class="quotelev2">&gt; &gt; +        size_t size);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/**
</span><br>
<span class="quotelev2">&gt; &gt; + * finalize mpool
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +void mca_mpool_fake_finalize(struct mca_mpool_base_module_t *mpool);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/**
</span><br>
<span class="quotelev2">&gt; &gt; + * Fault Tolerance Event Notification Function
</span><br>
<span class="quotelev2">&gt; &gt; + * @param state Checkpoint Stae
</span><br>
<span class="quotelev2">&gt; &gt; + * @return OMPI_SUCCESS or failure status
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +int mca_mpool_fake_ft_event(int state);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/ompi/mca/mpool/fake/mpool_fake_component.c
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mpool/fake/mpool_fake_component.c	2008-11-14 23:17:58 EST (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,87 @@
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt; &gt; + *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; + *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt; + *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2008      Myricom. All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#define OMPI_DISABLE_ENABLE_MEM_DEBUG 1
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;mpool_fake.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef HAVE_MALLOC_H
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;malloc.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Local functions
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +static int mca_mpool_fake_open(void);
</span><br>
<span class="quotelev2">&gt; &gt; +static mca_mpool_base_module_t* mca_mpool_fake_init(
</span><br>
<span class="quotelev2">&gt; &gt; +	struct mca_mpool_base_resources_t* resources);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +mca_mpool_fake_component_t mca_mpool_fake_component = {
</span><br>
<span class="quotelev2">&gt; &gt; +    {
</span><br>
<span class="quotelev2">&gt; &gt; +      /* First, the mca_base_component_t struct containing meta
</span><br>
<span class="quotelev2">&gt; &gt; +         information about the component itself */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +      {
</span><br>
<span class="quotelev2">&gt; &gt; +          MCA_MPOOL_BASE_VERSION_2_0_0,
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +          &quot;fake&quot;, /* MCA component name */
</span><br>
<span class="quotelev2">&gt; &gt; +          OMPI_MAJOR_VERSION,  /* MCA component major version */
</span><br>
<span class="quotelev2">&gt; &gt; +          OMPI_MINOR_VERSION,  /* MCA component minor version */
</span><br>
<span class="quotelev2">&gt; &gt; +          OMPI_RELEASE_VERSION,  /* MCA component release version */
</span><br>
<span class="quotelev2">&gt; &gt; +          mca_mpool_fake_open,  /* component open  */
</span><br>
<span class="quotelev2">&gt; &gt; +          NULL
</span><br>
<span class="quotelev2">&gt; &gt; +      },
</span><br>
<span class="quotelev2">&gt; &gt; +      {
</span><br>
<span class="quotelev2">&gt; &gt; +          /* The component is checkpoint ready */
</span><br>
<span class="quotelev2">&gt; &gt; +          MCA_BASE_METADATA_PARAM_CHECKPOINT
</span><br>
<span class="quotelev2">&gt; &gt; +      },
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +      mca_mpool_fake_init
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +};
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/**
</span><br>
<span class="quotelev2">&gt; &gt; +  * component open/close/init function
</span><br>
<span class="quotelev2">&gt; &gt; +  */
</span><br>
<span class="quotelev2">&gt; &gt; +static int mca_mpool_fake_open(void)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static mca_mpool_base_module_t* mca_mpool_fake_init(
</span><br>
<span class="quotelev2">&gt; &gt; +     struct mca_mpool_base_resources_t* resources)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_mpool_fake_module_t* mpool_module;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool_module = (mca_mpool_fake_module_t*)
</span><br>
<span class="quotelev2">&gt; &gt; +      malloc(sizeof(mca_mpool_fake_module_t));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool_module-&gt;resources = *resources;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_mpool_fake_module_init(mpool_module);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return &amp;mpool_module-&gt;super;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/ompi/mca/mpool/fake/mpool_fake_module.c
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mpool/fake/mpool_fake_module.c	2008-11-14 23:17:58 EST (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,72 @@
</span><br>
<span class="quotelev2">&gt; &gt; +/* -*- Mode: C; c-basic-offset:4 ; -*- */
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2007 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt; &gt; + *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; + *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt; &gt; + *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt; + *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2008      Myricom.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; + *
</span><br>
<span class="quotelev2">&gt; &gt; + * $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#define OMPI_DISABLE_ENABLE_MEM_DEBUG 1
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;opal/include/opal/align.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;mpool_fake.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;errno.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi/mca/mpool/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + *  Initializes the mpool module.
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +void mca_mpool_fake_module_init(mca_mpool_fake_module_t* mpool)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_component = &amp;mca_mpool_fake_component.super;
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_base = NULL; /* no base .. */
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_alloc = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_realloc = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_free = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_register = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_find = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_deregister = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_release_memory = mca_mpool_fake_release_memory;
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_finalize = mca_mpool_fake_finalize;
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool-&gt;super.mpool_ft_event = mca_mpool_fake_ft_event;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +int mca_mpool_fake_release_memory(struct mca_mpool_base_module_t *mpool,
</span><br>
<span class="quotelev2">&gt; &gt; +        void *base, size_t size)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_mpool_fake_module_t *mpool_module = (mca_mpool_fake_module_t*)mpool;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    mpool_module-&gt;resources.regcache_clean(base, size);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +void mca_mpool_fake_finalize(struct mca_mpool_base_module_t *mpool)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    ;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +int mca_mpool_fake_ft_event(int state)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="5838.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
<li><strong>Previous message:</strong> <a href="5836.php">Ralph Castain: "Re: [OMPI devel] 1.3.2 rc"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5033.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris malloc.h issue)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5838.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
<li><strong>Reply:</strong> <a href="5838.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
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
