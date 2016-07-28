<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 16 05:01:25 2007" -->
<!-- isoreceived="20071216100125" -->
<!-- sent="Sun, 16 Dec 2007 12:01:16 +0200" -->
<!-- isosent="20071216100116" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959" -->
<!-- id="4764F76C.5060308_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A884A083-0937-4CDD-B2AD-37736BB3AAD6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-16 05:01:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2864.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Previous message:</strong> <a href="2862.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<li><strong>In reply to:</strong> <a href="2853.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2864.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Reply:</strong> <a href="2864.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will try it.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This commit does what we previously discussed: it only compiles the  
</span><br>
<span class="quotelev1">&gt; XOOB openib CPC if XRC support is actually present (vs. having a stub  
</span><br>
<span class="quotelev1">&gt; XOOB when XRC is not present).  This is on the /tmp-public/openib-cpc  
</span><br>
<span class="quotelev1">&gt; branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have some hermon hca's, but due to dumb issues, I don't have XRC- 
</span><br>
<span class="quotelev1">&gt; capable OFED on those nodes yet.  It'll probably take me a few more  
</span><br>
<span class="quotelev1">&gt; days before I have that ready.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could someone try the openib-cpc tmp branch and ensure I didn't break  
</span><br>
<span class="quotelev1">&gt; the case where XRC support is available?  It is easy to tell if the  
</span><br>
<span class="quotelev1">&gt; XOOB CPC compiled in -- run this command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl openib --parsable | grep xoob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the output is empty, then XOOB was not compiled in.  If you see  
</span><br>
<span class="quotelev1">&gt; output, then XOOB was compiled in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: December 14, 2007 12:10:24 PM EST
</span><br>
<span class="quotelev2">&gt;&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI svn-full] svn:open-mpi r16959
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-12-14 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 16959
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16959">https://svn.open-mpi.org/trac/ompi/changeset/16959</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Only compile in the XOOB CPC if a) configure found that we have XRC
</span><br>
<span class="quotelev2">&gt;&gt; support available and b) the user didn't disable connectx support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   tmp-public/openib-cpc/config/ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_check_openib.m4                           |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;   tmp-public/openib-cpc/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.am                       |     8 ++++++--
</span><br>
<span class="quotelev2">&gt;&gt;   tmp-public/openib-cpc/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev2">&gt;&gt; configure.m4                      |     8 ++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_base.c |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;   tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_xoob.c |    23 -----------------------
</span><br>
<span class="quotelev2">&gt;&gt;   5 files changed, 18 insertions(+), 26 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: tmp-public/openib-cpc/config/ompi_check_openib.m4
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- tmp-public/openib-cpc/config/ompi_check_openib.m4	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ tmp-public/openib-cpc/config/ompi_check_openib.m4	2007-12-14  
</span><br>
<span class="quotelev2">&gt;&gt; 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -102,7 +102,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;     AS_IF([test &quot;$ompi_check_openib_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;           [AC_CHECK_DECLS([IBV_EVENT_CLIENT_REREGISTER], [], [],
</span><br>
<span class="quotelev2">&gt;&gt;                           [#include &lt;infiniband/verbs.h&gt;])
</span><br>
<span class="quotelev2">&gt;&gt; -           AC_CHECK_FUNCS([ibv_get_device_list ibv_resize_cq  
</span><br>
<span class="quotelev2">&gt;&gt; ibv_open_xrc_domain])])
</span><br>
<span class="quotelev2">&gt;&gt; +           AC_CHECK_FUNCS([ibv_get_device_list ibv_resize_cq])
</span><br>
<span class="quotelev2">&gt;&gt; +           AC_CHECK_FUNCS([ibv_open_xrc_domain], [$1_have_xrc=1])])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     CPPFLAGS=&quot;$ompi_check_openib_$1_save_CPPFLAGS&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     LDFLAGS=&quot;$ompi_check_openib_$1_save_LDFLAGS&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: tmp-public/openib-cpc/ompi/mca/btl/openib/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- tmp-public/openib-cpc/ompi/mca/btl/openib/Makefile.am	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ tmp-public/openib-cpc/ompi/mca/btl/openib/Makefile.am	2007-12-14  
</span><br>
<span class="quotelev2">&gt;&gt; 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -55,14 +55,18 @@
</span><br>
<span class="quotelev2">&gt;&gt;     connect/btl_openib_connect_base.c \
</span><br>
<span class="quotelev2">&gt;&gt;     connect/btl_openib_connect_oob.c \
</span><br>
<span class="quotelev2">&gt;&gt;     connect/btl_openib_connect_oob.h \
</span><br>
<span class="quotelev2">&gt;&gt; -    connect/btl_openib_connect_xoob.c \
</span><br>
<span class="quotelev2">&gt;&gt; -    connect/btl_openib_connect_xoob.h \
</span><br>
<span class="quotelev2">&gt;&gt;     connect/btl_openib_connect_rdma_cm.c \
</span><br>
<span class="quotelev2">&gt;&gt;     connect/btl_openib_connect_rdma_cm.h \
</span><br>
<span class="quotelev2">&gt;&gt;     connect/btl_openib_connect_ibcm.c \
</span><br>
<span class="quotelev2">&gt;&gt;     connect/btl_openib_connect_ibcm.h \
</span><br>
<span class="quotelev2">&gt;&gt;     connect/connect.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +if MCA_btl_openib_have_xrc
</span><br>
<span class="quotelev2">&gt;&gt; +sources += \
</span><br>
<span class="quotelev2">&gt;&gt; +    connect/btl_openib_connect_xoob.c \
</span><br>
<span class="quotelev2">&gt;&gt; +    connect/btl_openib_connect_xoob.h
</span><br>
<span class="quotelev2">&gt;&gt; +endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; # Make the output library in this directory, and name it either
</span><br>
<span class="quotelev2">&gt;&gt; # mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
</span><br>
<span class="quotelev2">&gt;&gt; # (for static builds).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: tmp-public/openib-cpc/ompi/mca/btl/openib/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- tmp-public/openib-cpc/ompi/mca/btl/openib/configure.m4	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ tmp-public/openib-cpc/ompi/mca/btl/openib/configure.m4	 
</span><br>
<span class="quotelev2">&gt;&gt; 2007-12-14 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -18,6 +18,14 @@
</span><br>
<span class="quotelev2">&gt;&gt; # $HEADER$
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +# MCA_btl_openib_POST_CONFIG([should_build])
</span><br>
<span class="quotelev2">&gt;&gt; +# ------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; +AC_DEFUN([MCA_btl_openib_POST_CONFIG], [
</span><br>
<span class="quotelev2">&gt;&gt; +    AS_IF([test $1 -eq 0 -a &quot;$enable_dist&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; +          [AC_MSG_ERROR([BTL openib is disabled but --enable-dist  
</span><br>
<span class="quotelev2">&gt;&gt; specifed.  This will result in a bad tarball.  Aborting configure.])])
</span><br>
<span class="quotelev2">&gt;&gt; +    AM_CONDITIONAL([MCA_btl_openib_have_xrc], [test $1 -eq 1 -a &quot;x 
</span><br>
<span class="quotelev2">&gt;&gt; $btl_openib_have_xrc&quot; = &quot;x1&quot; -a &quot;x$ompi_want_connectx_xrc&quot; = &quot;x1&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; +])
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # MCA_btl_openib_CONFIG([action-if-can-compile],
</span><br>
<span class="quotelev2">&gt;&gt; #                      [action-if-cant-compile])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_base.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_base.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_base.c	2007-12-14 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -34,7 +34,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt; static ompi_btl_openib_connect_base_funcs_t *all[] = {
</span><br>
<span class="quotelev2">&gt;&gt;     &amp;ompi_btl_openib_connect_oob,
</span><br>
<span class="quotelev2">&gt;&gt; +#if HAVE_XRC
</span><br>
<span class="quotelev2">&gt;&gt;     &amp;ompi_btl_openib_connect_xoob,
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;     &amp;ompi_btl_openib_connect_rdma_cm,
</span><br>
<span class="quotelev2">&gt;&gt;     &amp;ompi_btl_openib_connect_ibcm,
</span><br>
<span class="quotelev2">&gt;&gt;     NULL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_xoob.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_xoob.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_connect_xoob.c	2007-12-14 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -42,8 +42,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;     xoob_finalize,
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#if HAVE_XRC
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; typedef enum {
</span><br>
<span class="quotelev2">&gt;&gt;     SEND,
</span><br>
<span class="quotelev2">&gt;&gt;     RECV
</span><br>
<span class="quotelev2">&gt;&gt; @@ -831,24 +829,3 @@
</span><br>
<span class="quotelev2">&gt;&gt;         free(rem_info-&gt;rem_srqs);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -#else
</span><br>
<span class="quotelev2">&gt;&gt; -/* In case if the XRC was disabled during compilation we will print  
</span><br>
<span class="quotelev2">&gt;&gt; message and return error */
</span><br>
<span class="quotelev2">&gt;&gt; -static int xoob_init(void)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    printf(&quot;xoob init\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -static int xoob_start_connect(mca_btl_base_endpoint_t *e)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    printf(&quot;xoob start connect\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -static int xoob_finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    printf(&quot;xoob finalize\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2864.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Previous message:</strong> <a href="2862.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<li><strong>In reply to:</strong> <a href="2853.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2864.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Reply:</strong> <a href="2864.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
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
