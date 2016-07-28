<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 08:30:12 2011" -->
<!-- isoreceived="20110216133012" -->
<!-- sent="Wed, 16 Feb 2011 08:29:45 -0500" -->
<!-- isosent="20110216132945" -->
<!-- name="Don Kerr" -->
<!-- email="don.kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395" -->
<!-- id="4D5BD149.5040501_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44692353-69ED-4BED-94E3-1B2542FD371C_at_cisco.com" -->
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
<strong>From:</strong> Don Kerr (<em>don.kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-16 08:29:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8997.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Previous message:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>In reply to:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8997.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Reply:</strong> <a href="8997.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes this is Solaris only. OFED has not bought back the IBV_ACCESS_SO 
<br>
flag. Not sure they ever will.
<br>
<p>On 02/16/11 08:15, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Oracle --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this really only specific to Solaris?  More comments below about configure.m4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 16, 2011, at 12:37 AM, dkerr_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: dkerr
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-02-16 00:37:22 EST (Wed, 16 Feb 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 24395
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24395">https://svn.open-mpi.org/trac/ompi/changeset/24395</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; on Solaris, when IBV_ACCESS_SO is available, use strong ordered memory region for eager rdma connection
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/openib/btl_openib_component.c |    13 ++++++++++---                           
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/openib/btl_openib_endpoint.c  |    19 +++++++++++++++++--                     
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/openib/configure.m4           |    16 +++++++++++++++-                        
</span><br>
<span class="quotelev2">&gt;&gt;   3 files changed, 42 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c	2011-02-16 00:37:22 EST (Wed, 16 Feb 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -15,7 +15,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev2">&gt;&gt;  *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2007 Voltaire All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2009-2010 Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2009-2011 Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;  *
</span><br>
<span class="quotelev2">&gt;&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -527,9 +527,16 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_openib_device_t *device = (mca_btl_openib_device_t*)reg_data;
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_openib_reg_t *openib_reg = (mca_btl_openib_reg_t*)reg;
</span><br>
<span class="quotelev2">&gt;&gt; +    enum ibv_access_flags access_flag = IBV_ACCESS_LOCAL_WRITE |
</span><br>
<span class="quotelev2">&gt;&gt; +        IBV_ACCESS_REMOTE_WRITE | IBV_ACCESS_REMOTE_READ;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    openib_reg-&gt;mr = ibv_reg_mr(device-&gt;ib_pd, base, size, IBV_ACCESS_LOCAL_WRITE |
</span><br>
<span class="quotelev2">&gt;&gt; -            IBV_ACCESS_REMOTE_WRITE | IBV_ACCESS_REMOTE_READ);
</span><br>
<span class="quotelev2">&gt;&gt; +#if defined(HAVE_IBV_ACCESS_SO)
</span><br>
<span class="quotelev2">&gt;&gt; +    if (reg-&gt;flags &amp; MCA_MPOOL_FLAGS_SO_MEM) {
</span><br>
<span class="quotelev2">&gt;&gt; +        access_flag |= IBV_ACCESS_SO;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    openib_reg-&gt;mr = ibv_reg_mr(device-&gt;ib_pd, base, size, access_flag);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if (NULL == openib_reg-&gt;mr) {
</span><br>
<span class="quotelev2">&gt;&gt;         return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_endpoint.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_endpoint.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_endpoint.c	2011-02-16 00:37:22 EST (Wed, 16 Feb 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -16,7 +16,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2007 Voltaire All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2009 Mellanox Technologies, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2010      IBM Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2010      Oracle and/or its affiliates.  All rights reserved
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2010-2011 Oracle and/or its affiliates.  All rights reserved
</span><br>
<span class="quotelev2">&gt;&gt;  *
</span><br>
<span class="quotelev2">&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;  *
</span><br>
<span class="quotelev2">&gt;&gt; @@ -911,6 +911,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     char *buf;
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_openib_recv_frag_t *headers_buf;
</span><br>
<span class="quotelev2">&gt;&gt;     int i;
</span><br>
<span class="quotelev2">&gt;&gt; +    uint32_t flag = MCA_MPOOL_FLAGS_CACHE_BYPASS;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /* Set local rdma pointer to 1 temporarily so other threads will not try
</span><br>
<span class="quotelev2">&gt;&gt;      * to enter the function */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -925,11 +926,25 @@
</span><br>
<span class="quotelev2">&gt;&gt;     if(NULL == headers_buf)
</span><br>
<span class="quotelev2">&gt;&gt;        goto unlock_rdma_local;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#if defined(HAVE_IBV_ACCESS_SO)
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Solaris implements the Relaxed Ordering feature defined in the
</span><br>
<span class="quotelev2">&gt;&gt; +       PCI Specification. With this in mind any memory region which
</span><br>
<span class="quotelev2">&gt;&gt; +       relies on a buffer being written in a specific order, for
</span><br>
<span class="quotelev2">&gt;&gt; +       example the eager rdma connections created in this routinue,
</span><br>
<span class="quotelev2">&gt;&gt; +       must set a strong order flag when registering the memory for
</span><br>
<span class="quotelev2">&gt;&gt; +       rdma operations.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +       The following flag will be interpreted and the appropriate
</span><br>
<span class="quotelev2">&gt;&gt; +       steps will be taken when the memory is registered in
</span><br>
<span class="quotelev2">&gt;&gt; +       openib_reg_mr(). */
</span><br>
<span class="quotelev2">&gt;&gt; +    flag |= MCA_MPOOL_FLAGS_SO_MEM;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     buf = (char *) openib_btl-&gt;super.btl_mpool-&gt;mpool_alloc(openib_btl-&gt;super.btl_mpool,
</span><br>
<span class="quotelev2">&gt;&gt;             openib_btl-&gt;eager_rdma_frag_size *
</span><br>
<span class="quotelev2">&gt;&gt;             mca_btl_openib_component.eager_rdma_num,
</span><br>
<span class="quotelev2">&gt;&gt;             mca_btl_openib_component.buffer_alignment,
</span><br>
<span class="quotelev2">&gt;&gt; -            MCA_MPOOL_FLAGS_CACHE_BYPASS,
</span><br>
<span class="quotelev2">&gt;&gt; +            flag,
</span><br>
<span class="quotelev2">&gt;&gt;             (mca_mpool_base_registration_t**)&amp;endpoint-&gt;eager_rdma_local.reg);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if(!buf)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/configure.m4	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/configure.m4	2011-02-16 00:37:22 EST (Wed, 16 Feb 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -12,6 +12,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2007-2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2008      Mellanox Technologies.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2011      Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; # Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -34,7 +35,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; AC_DEFUN([MCA_ompi_btl_openib_CONFIG],[
</span><br>
<span class="quotelev2">&gt;&gt;     AC_CONFIG_FILES([ompi/mca/btl/openib/Makefile])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    OPAL_VAR_SCOPE_PUSH([cpcs have_threads])
</span><br>
<span class="quotelev2">&gt;&gt; +    OPAL_VAR_SCOPE_PUSH([cpcs have_threads have_ibv_access_so])
</span><br>
<span class="quotelev2">&gt;&gt;     cpcs=&quot;oob&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     OMPI_CHECK_OPENIB([btl_openib],
</span><br>
<span class="quotelev2">&gt;&gt; @@ -78,6 +79,19 @@
</span><br>
<span class="quotelev2">&gt;&gt;           AC_MSG_CHECKING([which openib btl cpcs will be built])
</span><br>
<span class="quotelev2">&gt;&gt;           AC_MSG_RESULT([$cpcs])])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    # check for Solaris specific memory access flag
</span><br>
<span class="quotelev2">&gt;&gt; +    AS_IF([test &quot;$btl_openib_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; +          [if test &quot;`echo $build_os | $GREP solaris`&quot;; then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, the above could be a single AS_IF:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AS_IF([test &quot;$btl_openib_happy&quot; = &quot;yes&quot; -a -n &quot;echo $build_os | $GREP solaris&quot; ],
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +              AC_TRY_COMPILE([#include &lt;infiniband/verbs.h&gt;],
</span><br>
<span class="quotelev2">&gt;&gt; +                  [int flag = IBV_ACCESS_SO;],
</span><br>
<span class="quotelev2">&gt;&gt; +                  [have_ibv_access_so=&quot;yes&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +                      AC_DEFINE_UNQUOTED([HAVE_IBV_ACCESS_SO],
</span><br>
<span class="quotelev2">&gt;&gt; +                      1,[openib define HAVE_IBV_ACCESS_SO])],
</span><br>
<span class="quotelev2">&gt;&gt; +                  [have_ibv_access_so=&quot;no&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; +              AC_MSG_CHECKING([for IBV_ACCESS_SO in Solaris])
</span><br>
<span class="quotelev2">&gt;&gt; +              AC_MSG_RESULT([$have_ibv_access_so])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I *believe* you should be able to replace the entire above section with an AC_CHECK_DECLS.  Check elsewhere in ompi_check_openib.m4 for uses of AC_CHECK_DECLS looking for the presence of various IBV_* constants.  See:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/software/hello/manual/autoconf/Generic-Declarations.html">http://www.gnu.org/software/hello/manual/autoconf/Generic-Declarations.html</a>
</span><br>
<p>I'll check.
<br>
<p>-DON
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +          fi])
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     # Enable openib device failover.  It is disabled by default.
</span><br>
<span class="quotelev2">&gt;&gt;     AC_ARG_ENABLE([btl-openib-failover],
</span><br>
<span class="quotelev2">&gt;&gt;        [AC_HELP_STRING([--enable-btl-openib-failover],
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8997.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Previous message:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>In reply to:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8997.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Reply:</strong> <a href="8997.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
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
