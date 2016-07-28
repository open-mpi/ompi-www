<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 10:12:34 2009" -->
<!-- isoreceived="20090420141234" -->
<!-- sent="Mon, 20 Apr 2009 10:12:25 -0400" -->
<!-- isosent="20090420141225" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)" -->
<!-- id="20090420141225.GJ26929_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CED69245-A2AD-4FCA-BA91-6DCF9654668A_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-04-20 10:12:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5846.php">Roberto Ammendola: "[OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Previous message:</strong> <a href="5844.php">Jeff Squyres: "Re: [OMPI devel] FAQ updates"</a>
<li><strong>In reply to:</strong> <a href="5838.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr/16/2009 06:18:27PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I don't think this is correct. We are not supposed to include
</span><br>
<span class="quotelev1">&gt; anything before the ompi_config.h. Moreover, in the case we redefine
</span><br>
<span class="quotelev1">&gt; what malloc is, this will be the only piece of code that will use
</span><br>
<span class="quotelev1">&gt; the real malloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder why we need to include malloc.h there? We don't allocate
</span><br>
<span class="quotelev1">&gt; any memory in this file ...
</span><br>
<p>Any objections to removing the #include &lt;malloc.h&gt; line?
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 16, 2009, at 18:09 , Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I have a better fix for this issue. It is to simply #include
</span><br>
<span class="quotelev2">&gt;&gt; &lt;malloc.h&gt; *before* ompi_config.h.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --- ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev2">&gt;&gt;  +++ ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev2">&gt;&gt;  @@ -19,15 +19,16 @@
</span><br>
<span class="quotelev2">&gt;&gt;    * $HEADER$
</span><br>
<span class="quotelev2">&gt;&gt;    */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  +#ifdef HAVE_MALLOC_H
</span><br>
<span class="quotelev2">&gt;&gt;  +#include &lt;malloc.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  +#endif
</span><br>
<span class="quotelev2">&gt;&gt;  +
</span><br>
<span class="quotelev2">&gt;&gt;   #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   #include &quot;common_mx.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   #include &lt;errno.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -#ifdef HAVE_MALLOC_H
</span><br>
<span class="quotelev2">&gt;&gt;  -#include &lt;malloc.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -#endif
</span><br>
<span class="quotelev2">&gt;&gt;   #include &quot;opal/memoryhooks/memory.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   #include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason for doing this is because ompi_config.h (which includes
</span><br>
<span class="quotelev2">&gt;&gt; ompi_config_bottom.h) #defines &quot;malloc&quot;, so we end up with OMPI code
</span><br>
<span class="quotelev2">&gt;&gt; getting spliced into the Solaris /usr/include/malloc.h code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this fix okay?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec/10/2008 04:29:31PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Patrick,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r20003 seems to break MX support on Solaris.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ cd ompi/mca/common/mx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &quot;/usr/include/malloc.h&quot;, line 46: syntax error before or at: (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &quot;/usr/include/malloc.h&quot;, line 47: syntax error before or at: (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &quot;/usr/include/malloc.h&quot;, line 48: syntax error before or at: (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &quot;/usr/include/malloc.h&quot;, line 48: cannot have void object: size_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &quot;/usr/include/malloc.h&quot;, line 48: identifier redeclared: size_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ... &lt;4000 more lines of compiler errors&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The below patch makes it so opal/util/malloc.h is used instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/malloc.h and the compiler errors go away. (I also needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to include errno.h.) Would this be okay to do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  diff -r 347f52a3713f ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --- ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  +++ ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  @@ -23,9 +23,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   #include &quot;common_mx.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -#ifdef HAVE_MALLOC_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -#include &lt;malloc.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  +#include &lt;errno.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  +#include &quot;opal/util/malloc.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   #include &quot;opal/memoryhooks/memory.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   #include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tested the above on Solaris and Linux with SunStudio.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Nov/14/2008 11:17:59PM, patrick_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: patrick
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2008-11-14 23:17:58 EST (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 20003
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20003">https://svn.open-mpi.org/trac/ompi/changeset/20003</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Define a &quot;fake&quot; mpool to provide a memory release callback for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory hooks (munmap) and initialize the mallopt component, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nothing else.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Use this mpool in the MX common initialization, supporting both BTL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and MTL. Automatically set the MX_RCACHE environment variable to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enable registration cache in MX.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tested with success for munmap() and large free().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   trunk/ompi/mca/mpool/fake/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   trunk/ompi/mca/mpool/fake/Makefile.am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   trunk/ompi/mca/mpool/fake/configure.params
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   trunk/ompi/mca/mpool/fake/mpool_fake.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   trunk/ompi/mca/mpool/fake/mpool_fake_component.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   trunk/ompi/mca/mpool/fake/mpool_fake_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   trunk/ompi/mca/common/mx/common_mx.c |    56 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   1 files changed, 55 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/common/mx/common_mx.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mca/common/mx/common_mx.c	(original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/common/mx/common_mx.c	2008-11-14 23:17:58 EST (Fri, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 14 Nov 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -9,6 +9,8 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  *                         University of Stuttgart.  All rights 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  * Copyright (c) 2004-2006 The Regents of the University of California.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2008      Myricom. All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -21,11 +23,29 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &quot;common_mx.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#ifdef HAVE_MALLOC_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &lt;malloc.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;opal/memoryhooks/memory.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;ompi/mca/mpool/base/base.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;ompi/mca/mpool/fake/mpool_fake.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +int mx__regcache_clean(void *ptr, size_t size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; static int ompi_common_mx_initialize_ref_cnt = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +static mca_mpool_base_module_t *ompi_common_mx_fake_mpool = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_common_mx_initialize(void)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mx_return_t mx_return;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    struct mca_mpool_base_resources_t mpool_resources;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    int index, value;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ompi_common_mx_initialize_ref_cnt++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if(ompi_common_mx_initialize_ref_cnt == 1) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -35,7 +55,37 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          * library does not exit the application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         mx_set_error_handler(MX_ERRORS_RETURN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	/* If we have a memory manager available, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	   mpi_leave_pinned == -1, then set mpi_leave_pinned to 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	   We have a memory manager if:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	   - we have both FREE and MUNMAP support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	   - we have MUNMAP support and the linux mallopt */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	value = opal_mem_hooks_support_level();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	if (((value &amp; (OPAL_MEMORY_FREE_SUPPORT | OPAL_MEMORY_MUNMAP_SUPPORT))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	     == (OPAL_MEMORY_FREE_SUPPORT | OPAL_MEMORY_MUNMAP_SUPPORT))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	    || ((value &amp; OPAL_MEMORY_MUNMAP_SUPPORT) &amp;&amp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		OMPI_MPOOL_BASE_HAVE_LINUX_MALLOPT)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	  index = mca_base_param_find(&quot;mpi&quot;, NULL, &quot;leave_pinned&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	  if (index &gt;= 0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            if ((mca_base_param_lookup_int(index, &amp;value) == 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL_SUCCESS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		&amp;&amp; (value == -1)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	      ompi_mpi_leave_pinned = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	      setenv(&quot;MX_RCACHE&quot;, &quot;2&quot;, 1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	      mpool_resources.regcache_clean = mx__regcache_clean;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	      ompi_common_mx_fake_mpool =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		mca_mpool_base_module_create(&quot;fake&quot;, NULL, &amp;mpool_resources);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	      if (!ompi_common_mx_fake_mpool) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		ompi_mpi_leave_pinned = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		setenv(&quot;MX_RCACHE&quot;, &quot;0&quot;, 1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		opal_output(0, &quot;Error creating fake mpool (error %s)\n&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +			    strerror(errno));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         /* initialize the mx library */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         mx_return = mx_init();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -57,6 +107,10 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mx_return_t mx_return;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ompi_common_mx_initialize_ref_cnt--;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if( 0 == ompi_common_mx_initialize_ref_cnt ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        if (ompi_common_mx_fake_mpool)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	  mca_mpool_base_module_destroy(ompi_common_mx_fake_mpool);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         mx_return = mx_finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         if(mx_return != MX_SUCCESS){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             opal_output(0, &quot;Error in mx_finalize (error %s)\n&quot;, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mx_strerror(mx_return));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added: trunk/ompi/mca/mpool/fake/Makefile.am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/mpool/fake/Makefile.am	2008-11-14 23:17:58 EST (Fri, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 14 Nov 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -0,0 +1,56 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Indiana
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         University Research and Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 The University of Tennessee and The 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         University of Stuttgart.  All rights 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2008      Myricom.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# $HEADER$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +AM_CPPFLAGS = $(mpool_fake_CPPFLAGS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +sources = \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	mpool_fake_module.c \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	mpool_fake_component.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +if WANT_INSTALL_HEADERS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +ompidir = $(includedir)/openmpi/ompi/mca/mpool/fake
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +ompi_HEADERS = mpool_fake.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +ompidir = $(includedir)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +ompi_HEADERS =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Make the output library in this directory, and name it either
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# (for static builds).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +if OMPI_BUILD_mpool_fake_DSO
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +component_noinst =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +component_install = mca_mpool_fake.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +component_noinst = libmca_mpool_fake.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +component_install =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +mcacomponentdir = $(pkglibdir)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +mcacomponent_LTLIBRARIES = $(component_install)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +mca_mpool_fake_la_SOURCES = $(sources)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +mca_mpool_fake_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +mca_mpool_fake_la_LIBADD = $(mpool_fake_LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +noinst_LTLIBRARIES = $(component_noinst)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +libmca_mpool_fake_la_SOURCES = $(sources)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +libmca_mpool_fake_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +libmca_mpool_fake_la_LIBADD = $(mpool_fake_LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added: trunk/ompi/mca/mpool/fake/configure.params
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/mpool/fake/configure.params	2008-11-14 23:17:58 EST 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -0,0 +1,24 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# -*- shell-script -*-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Indiana
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         University Research and Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 The University of Tennessee and The 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         University of Stuttgart.  All rights 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2008      Myricom. All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# $HEADER$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Specific to this module
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +PARAM_CONFIG_FILES=&quot;Makefile&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added: trunk/ompi/mca/mpool/fake/mpool_fake.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/mpool/fake/mpool_fake.h	2008-11-14 23:17:58 EST (Fri, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 14 Nov 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -0,0 +1,74 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Indiana
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         University Research and Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2006 The University of Tennessee and The 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         of Tennessee Research Foundation.  All 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rights
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         University of Stuttgart.  All rights 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2008      Myricom. All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * $HEADER$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * @file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#ifndef MCA_MPOOL_FAKE_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#define MCA_MPOOL_FAKE_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +extern &quot;C&quot; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +typedef struct mca_mpool_fake_component_t {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  mca_mpool_base_component_t super;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +} mca_mpool_fake_component_t;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +OMPI_DECLSPEC extern mca_mpool_fake_component_t 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_mpool_fake_component;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +typedef struct mca_mpool_base_resources_t {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  int (*regcache_clean)(void *ptr, size_t size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +} mca_mpool_base_resources_t;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +typedef struct mca_mpool_fake_module_t {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  mca_mpool_base_module_t super;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  mca_mpool_base_resources_t resources;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +} mca_mpool_fake_module_t;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *  Initializes the mpool module.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +void mca_mpool_fake_module_init(mca_mpool_fake_module_t *mpool);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * unregister all registration covering the block of memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +int mca_mpool_fake_release_memory(mca_mpool_base_module_t* mpool, void 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *base,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        size_t size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * finalize mpool
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +void mca_mpool_fake_finalize(struct mca_mpool_base_module_t *mpool);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Fault Tolerance Event Notification Function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * @param state Checkpoint Stae
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * @return OMPI_SUCCESS or failure status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +int mca_mpool_fake_ft_event(int state);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added: trunk/ompi/mca/mpool/fake/mpool_fake_component.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/mpool/fake/mpool_fake_component.c	2008-11-14 23:17:58 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; EST (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -0,0 +1,87 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Indiana
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         University Research and Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2005 The University of Tennessee and The 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         of Tennessee Research Foundation.  All 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rights
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         University of Stuttgart.  All rights 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2008      Myricom. All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * $HEADER$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#define OMPI_DISABLE_ENABLE_MEM_DEBUG 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;mpool_fake.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &lt;unistd.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#ifdef HAVE_MALLOC_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &lt;malloc.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Local functions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +static int mca_mpool_fake_open(void);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +static mca_mpool_base_module_t* mca_mpool_fake_init(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	struct mca_mpool_base_resources_t* resources);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +mca_mpool_fake_component_t mca_mpool_fake_component = {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      /* First, the mca_base_component_t struct containing meta
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +         information about the component itself */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          MCA_MPOOL_BASE_VERSION_2_0_0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          &quot;fake&quot;, /* MCA component name */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          OMPI_MAJOR_VERSION,  /* MCA component major version */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          OMPI_MINOR_VERSION,  /* MCA component minor version */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          OMPI_RELEASE_VERSION,  /* MCA component release version */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          mca_mpool_fake_open,  /* component open  */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      },
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          /* The component is checkpoint ready */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          MCA_BASE_METADATA_PARAM_CHECKPOINT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      },
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      mca_mpool_fake_init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +};
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  * component open/close/init function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +static int mca_mpool_fake_open(void)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +static mca_mpool_base_module_t* mca_mpool_fake_init(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +     struct mca_mpool_base_resources_t* resources)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mca_mpool_fake_module_t* mpool_module;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool_module = (mca_mpool_fake_module_t*)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      malloc(sizeof(mca_mpool_fake_module_t));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool_module-&gt;resources = *resources;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mca_mpool_fake_module_init(mpool_module);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    return &amp;mpool_module-&gt;super;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added: trunk/ompi/mca/mpool/fake/mpool_fake_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/mpool/fake/mpool_fake_module.c	2008-11-14 23:17:58 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; EST (Fri, 14 Nov 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -0,0 +1,72 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/* -*- Mode: C; c-basic-offset:4 ; -*- */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Indiana
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         University Research and Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2007 The University of Tennessee and The 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         of Tennessee Research Foundation.  All 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rights
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         University of Stuttgart.  All rights 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2008      Myricom.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * $HEADER$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#define OMPI_DISABLE_ENABLE_MEM_DEBUG 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;opal/include/opal/align.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;mpool_fake.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &lt;errno.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &lt;string.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;ompi/mca/mpool/base/base.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + *  Initializes the mpool module.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +void mca_mpool_fake_module_init(mca_mpool_fake_module_t* mpool)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_component = &amp;mca_mpool_fake_component.super;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_base = NULL; /* no base .. */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_alloc = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_realloc = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_free = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_register = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_find = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_deregister = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_release_memory = mca_mpool_fake_release_memory;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_finalize = mca_mpool_fake_finalize;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool-&gt;super.mpool_ft_event = mca_mpool_fake_ft_event;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +int mca_mpool_fake_release_memory(struct mca_mpool_base_module_t 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *mpool,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        void *base, size_t size)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mca_mpool_fake_module_t *mpool_module = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mca_mpool_fake_module_t*)mpool;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    mpool_module-&gt;resources.regcache_clean(base, size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +void mca_mpool_fake_finalize(struct mca_mpool_base_module_t *mpool)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +int mca_mpool_fake_ft_event(int state)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5846.php">Roberto Ammendola: "[OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Previous message:</strong> <a href="5844.php">Jeff Squyres: "Re: [OMPI devel] FAQ updates"</a>
<li><strong>In reply to:</strong> <a href="5838.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris	malloc.h issue)"</a>
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
