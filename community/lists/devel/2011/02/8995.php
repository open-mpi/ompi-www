<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 08:16:01 2011" -->
<!-- isoreceived="20110216131601" -->
<!-- sent="Wed, 16 Feb 2011 08:15:55 -0500" -->
<!-- isosent="20110216131555" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395" -->
<!-- id="44692353-69ED-4BED-94E3-1B2542FD371C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201102160537.p1G5bO91009243_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-16 08:15:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8996.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Previous message:</strong> <a href="8994.php">Eugene Loh: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8996.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Reply:</strong> <a href="8996.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oracle --
<br>
<p>Is this really only specific to Solaris?  More comments below about configure.m4.
<br>
<p><p>On Feb 16, 2011, at 12:37 AM, dkerr_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: dkerr
</span><br>
<span class="quotelev1">&gt; Date: 2011-02-16 00:37:22 EST (Wed, 16 Feb 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24395
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24395">https://svn.open-mpi.org/trac/ompi/changeset/24395</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; on Solaris, when IBV_ACCESS_SO is available, use strong ordered memory region for eager rdma connection
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_component.c |    13 ++++++++++---                           
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_endpoint.c  |    19 +++++++++++++++++--                     
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/configure.m4           |    16 +++++++++++++++-                        
</span><br>
<span class="quotelev1">&gt;   3 files changed, 42 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c	2011-02-16 00:37:22 EST (Wed, 16 Feb 2011)
</span><br>
<span class="quotelev1">&gt; @@ -15,7 +15,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2006-2007 Voltaire All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2009-2010 Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009-2011 Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -527,9 +527,16 @@
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_device_t *device = (mca_btl_openib_device_t*)reg_data;
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_reg_t *openib_reg = (mca_btl_openib_reg_t*)reg;
</span><br>
<span class="quotelev1">&gt; +    enum ibv_access_flags access_flag = IBV_ACCESS_LOCAL_WRITE |
</span><br>
<span class="quotelev1">&gt; +        IBV_ACCESS_REMOTE_WRITE | IBV_ACCESS_REMOTE_READ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    openib_reg-&gt;mr = ibv_reg_mr(device-&gt;ib_pd, base, size, IBV_ACCESS_LOCAL_WRITE |
</span><br>
<span class="quotelev1">&gt; -            IBV_ACCESS_REMOTE_WRITE | IBV_ACCESS_REMOTE_READ);
</span><br>
<span class="quotelev1">&gt; +#if defined(HAVE_IBV_ACCESS_SO)
</span><br>
<span class="quotelev1">&gt; +    if (reg-&gt;flags &amp; MCA_MPOOL_FLAGS_SO_MEM) {
</span><br>
<span class="quotelev1">&gt; +        access_flag |= IBV_ACCESS_SO;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    openib_reg-&gt;mr = ibv_reg_mr(device-&gt;ib_pd, base, size, access_flag);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (NULL == openib_reg-&gt;mr) {
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_endpoint.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_endpoint.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_endpoint.c	2011-02-16 00:37:22 EST (Wed, 16 Feb 2011)
</span><br>
<span class="quotelev1">&gt; @@ -16,7 +16,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2006-2007 Voltaire All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2006-2009 Mellanox Technologies, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2010      IBM Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2010      Oracle and/or its affiliates.  All rights reserved
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2010-2011 Oracle and/or its affiliates.  All rights reserved
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt; @@ -911,6 +911,7 @@
</span><br>
<span class="quotelev1">&gt;     char *buf;
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_recv_frag_t *headers_buf;
</span><br>
<span class="quotelev1">&gt;     int i;
</span><br>
<span class="quotelev1">&gt; +    uint32_t flag = MCA_MPOOL_FLAGS_CACHE_BYPASS;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Set local rdma pointer to 1 temporarily so other threads will not try
</span><br>
<span class="quotelev1">&gt;      * to enter the function */
</span><br>
<span class="quotelev1">&gt; @@ -925,11 +926,25 @@
</span><br>
<span class="quotelev1">&gt;     if(NULL == headers_buf)
</span><br>
<span class="quotelev1">&gt;        goto unlock_rdma_local;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#if defined(HAVE_IBV_ACCESS_SO)
</span><br>
<span class="quotelev1">&gt; +    /* Solaris implements the Relaxed Ordering feature defined in the
</span><br>
<span class="quotelev1">&gt; +       PCI Specification. With this in mind any memory region which
</span><br>
<span class="quotelev1">&gt; +       relies on a buffer being written in a specific order, for
</span><br>
<span class="quotelev1">&gt; +       example the eager rdma connections created in this routinue,
</span><br>
<span class="quotelev1">&gt; +       must set a strong order flag when registering the memory for
</span><br>
<span class="quotelev1">&gt; +       rdma operations.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       The following flag will be interpreted and the appropriate
</span><br>
<span class="quotelev1">&gt; +       steps will be taken when the memory is registered in
</span><br>
<span class="quotelev1">&gt; +       openib_reg_mr(). */
</span><br>
<span class="quotelev1">&gt; +    flag |= MCA_MPOOL_FLAGS_SO_MEM;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     buf = (char *) openib_btl-&gt;super.btl_mpool-&gt;mpool_alloc(openib_btl-&gt;super.btl_mpool,
</span><br>
<span class="quotelev1">&gt;             openib_btl-&gt;eager_rdma_frag_size *
</span><br>
<span class="quotelev1">&gt;             mca_btl_openib_component.eager_rdma_num,
</span><br>
<span class="quotelev1">&gt;             mca_btl_openib_component.buffer_alignment,
</span><br>
<span class="quotelev1">&gt; -            MCA_MPOOL_FLAGS_CACHE_BYPASS,
</span><br>
<span class="quotelev1">&gt; +            flag,
</span><br>
<span class="quotelev1">&gt;             (mca_mpool_base_registration_t**)&amp;endpoint-&gt;eager_rdma_local.reg);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if(!buf)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/configure.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/configure.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/configure.m4	2011-02-16 00:37:22 EST (Wed, 16 Feb 2011)
</span><br>
<span class="quotelev1">&gt; @@ -12,6 +12,7 @@
</span><br>
<span class="quotelev1">&gt; #                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2007-2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2008      Mellanox Technologies.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2011      Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; # Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -34,7 +35,7 @@
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([MCA_ompi_btl_openib_CONFIG],[
</span><br>
<span class="quotelev1">&gt;     AC_CONFIG_FILES([ompi/mca/btl/openib/Makefile])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    OPAL_VAR_SCOPE_PUSH([cpcs have_threads])
</span><br>
<span class="quotelev1">&gt; +    OPAL_VAR_SCOPE_PUSH([cpcs have_threads have_ibv_access_so])
</span><br>
<span class="quotelev1">&gt;     cpcs=&quot;oob&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OMPI_CHECK_OPENIB([btl_openib],
</span><br>
<span class="quotelev1">&gt; @@ -78,6 +79,19 @@
</span><br>
<span class="quotelev1">&gt;           AC_MSG_CHECKING([which openib btl cpcs will be built])
</span><br>
<span class="quotelev1">&gt;           AC_MSG_RESULT([$cpcs])])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    # check for Solaris specific memory access flag
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$btl_openib_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +          [if test &quot;`echo $build_os | $GREP solaris`&quot;; then
</span><br>
<p>FWIW, the above could be a single AS_IF:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$btl_openib_happy&quot; = &quot;yes&quot; -a -n &quot;echo $build_os | $GREP solaris&quot; ],
<br>
<p><span class="quotelev1">&gt; +              AC_TRY_COMPILE([#include &lt;infiniband/verbs.h&gt;],
</span><br>
<span class="quotelev1">&gt; +                  [int flag = IBV_ACCESS_SO;],
</span><br>
<span class="quotelev1">&gt; +                  [have_ibv_access_so=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt; +                      AC_DEFINE_UNQUOTED([HAVE_IBV_ACCESS_SO],
</span><br>
<span class="quotelev1">&gt; +                      1,[openib define HAVE_IBV_ACCESS_SO])],
</span><br>
<span class="quotelev1">&gt; +                  [have_ibv_access_so=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; +              AC_MSG_CHECKING([for IBV_ACCESS_SO in Solaris])
</span><br>
<span class="quotelev1">&gt; +              AC_MSG_RESULT([$have_ibv_access_so])
</span><br>
<p>I *believe* you should be able to replace the entire above section with an AC_CHECK_DECLS.  Check elsewhere in ompi_check_openib.m4 for uses of AC_CHECK_DECLS looking for the presence of various IBV_* constants.  See:
<br>
<p><a href="http://www.gnu.org/software/hello/manual/autoconf/Generic-Declarations.html">http://www.gnu.org/software/hello/manual/autoconf/Generic-Declarations.html</a>
<br>
<p><p><span class="quotelev1">&gt; +          fi])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     # Enable openib device failover.  It is disabled by default.
</span><br>
<span class="quotelev1">&gt;     AC_ARG_ENABLE([btl-openib-failover],
</span><br>
<span class="quotelev1">&gt;        [AC_HELP_STRING([--enable-btl-openib-failover],
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8996.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Previous message:</strong> <a href="8994.php">Eugene Loh: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8996.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Reply:</strong> <a href="8996.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
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
