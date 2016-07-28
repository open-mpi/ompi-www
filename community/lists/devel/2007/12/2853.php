<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 12:17:53 2007" -->
<!-- isoreceived="20071214171753" -->
<!-- sent="Fri, 14 Dec 2007 12:17:34 -0500" -->
<!-- isosent="20071214171734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959" -->
<!-- id="A884A083-0937-4CDD-B2AD-37736BB3AAD6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200712141710.lBEHAOKB009804_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-14 12:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2854.php">Jeff Squyres: "[OMPI devel] Gnu #ident"</a>
<li><strong>Previous message:</strong> <a href="2852.php">Brian W. Barrett: "Re: [OMPI devel] IPv4 mapped IPv6 addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2863.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Reply:</strong> <a href="2863.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit does what we previously discussed: it only compiles the  
<br>
XOOB openib CPC if XRC support is actually present (vs. having a stub  
<br>
XOOB when XRC is not present).  This is on the /tmp-public/openib-cpc  
<br>
branch.
<br>
<p>I have some hermon hca's, but due to dumb issues, I don't have XRC- 
<br>
capable OFED on those nodes yet.  It'll probably take me a few more  
<br>
days before I have that ready.
<br>
<p>Could someone try the openib-cpc tmp branch and ensure I didn't break  
<br>
the case where XRC support is available?  It is easy to tell if the  
<br>
XOOB CPC compiled in -- run this command:
<br>
<p>ompi_info --param btl openib --parsable | grep xoob
<br>
<p>If the output is empty, then XOOB was not compiled in.  If you see  
<br>
output, then XOOB was compiled in.
<br>
<p>Thanks!
<br>
<p><p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: December 14, 2007 12:10:24 PM EST
</span><br>
<span class="quotelev1">&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r16959
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2007-12-14 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16959
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16959">https://svn.open-mpi.org/trac/ompi/changeset/16959</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Only compile in the XOOB CPC if a) configure found that we have XRC
</span><br>
<span class="quotelev1">&gt; support available and b) the user didn't disable connectx support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   tmp-public/openib-cpc/config/ 
</span><br>
<span class="quotelev1">&gt; ompi_check_openib.m4                           |     3 ++-
</span><br>
<span class="quotelev1">&gt;   tmp-public/openib-cpc/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev1">&gt; Makefile.am                       |     8 ++++++--
</span><br>
<span class="quotelev1">&gt;   tmp-public/openib-cpc/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev1">&gt; configure.m4                      |     8 ++++++++
</span><br>
<span class="quotelev1">&gt;   tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_base.c |     2 ++
</span><br>
<span class="quotelev1">&gt;   tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_xoob.c |    23 -----------------------
</span><br>
<span class="quotelev1">&gt;   5 files changed, 18 insertions(+), 26 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp-public/openib-cpc/config/ompi_check_openib.m4
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp-public/openib-cpc/config/ompi_check_openib.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp-public/openib-cpc/config/ompi_check_openib.m4	2007-12-14  
</span><br>
<span class="quotelev1">&gt; 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev1">&gt; @@ -102,7 +102,8 @@
</span><br>
<span class="quotelev1">&gt;     AS_IF([test &quot;$ompi_check_openib_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;           [AC_CHECK_DECLS([IBV_EVENT_CLIENT_REREGISTER], [], [],
</span><br>
<span class="quotelev1">&gt;                           [#include &lt;infiniband/verbs.h&gt;])
</span><br>
<span class="quotelev1">&gt; -           AC_CHECK_FUNCS([ibv_get_device_list ibv_resize_cq  
</span><br>
<span class="quotelev1">&gt; ibv_open_xrc_domain])])
</span><br>
<span class="quotelev1">&gt; +           AC_CHECK_FUNCS([ibv_get_device_list ibv_resize_cq])
</span><br>
<span class="quotelev1">&gt; +           AC_CHECK_FUNCS([ibv_open_xrc_domain], [$1_have_xrc=1])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CPPFLAGS=&quot;$ompi_check_openib_$1_save_CPPFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;     LDFLAGS=&quot;$ompi_check_openib_$1_save_LDFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp-public/openib-cpc/ompi/mca/btl/openib/Makefile.am
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp-public/openib-cpc/ompi/mca/btl/openib/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp-public/openib-cpc/ompi/mca/btl/openib/Makefile.am	2007-12-14  
</span><br>
<span class="quotelev1">&gt; 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev1">&gt; @@ -55,14 +55,18 @@
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_base.c \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_oob.c \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_oob.h \
</span><br>
<span class="quotelev1">&gt; -    connect/btl_openib_connect_xoob.c \
</span><br>
<span class="quotelev1">&gt; -    connect/btl_openib_connect_xoob.h \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_rdma_cm.c \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_rdma_cm.h \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_ibcm.c \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_ibcm.h \
</span><br>
<span class="quotelev1">&gt;     connect/connect.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +if MCA_btl_openib_have_xrc
</span><br>
<span class="quotelev1">&gt; +sources += \
</span><br>
<span class="quotelev1">&gt; +    connect/btl_openib_connect_xoob.c \
</span><br>
<span class="quotelev1">&gt; +    connect/btl_openib_connect_xoob.h
</span><br>
<span class="quotelev1">&gt; +endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; # Make the output library in this directory, and name it either
</span><br>
<span class="quotelev1">&gt; # mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
</span><br>
<span class="quotelev1">&gt; # (for static builds).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp-public/openib-cpc/ompi/mca/btl/openib/configure.m4
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp-public/openib-cpc/ompi/mca/btl/openib/configure.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp-public/openib-cpc/ompi/mca/btl/openib/configure.m4	 
</span><br>
<span class="quotelev1">&gt; 2007-12-14 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev1">&gt; @@ -18,6 +18,14 @@
</span><br>
<span class="quotelev1">&gt; # $HEADER$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +# MCA_btl_openib_POST_CONFIG([should_build])
</span><br>
<span class="quotelev1">&gt; +# ------------------------------------------
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([MCA_btl_openib_POST_CONFIG], [
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test $1 -eq 0 -a &quot;$enable_dist&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +          [AC_MSG_ERROR([BTL openib is disabled but --enable-dist  
</span><br>
<span class="quotelev1">&gt; specifed.  This will result in a bad tarball.  Aborting configure.])])
</span><br>
<span class="quotelev1">&gt; +    AM_CONDITIONAL([MCA_btl_openib_have_xrc], [test $1 -eq 1 -a &quot;x 
</span><br>
<span class="quotelev1">&gt; $btl_openib_have_xrc&quot; = &quot;x1&quot; -a &quot;x$ompi_want_connectx_xrc&quot; = &quot;x1&quot;])
</span><br>
<span class="quotelev1">&gt; +])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # MCA_btl_openib_CONFIG([action-if-can-compile],
</span><br>
<span class="quotelev1">&gt; #                      [action-if-cant-compile])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_base.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_base.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_base.c	2007-12-14 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev1">&gt; @@ -34,7 +34,9 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; static ompi_btl_openib_connect_base_funcs_t *all[] = {
</span><br>
<span class="quotelev1">&gt;     &amp;ompi_btl_openib_connect_oob,
</span><br>
<span class="quotelev1">&gt; +#if HAVE_XRC
</span><br>
<span class="quotelev1">&gt;     &amp;ompi_btl_openib_connect_xoob,
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;     &amp;ompi_btl_openib_connect_rdma_cm,
</span><br>
<span class="quotelev1">&gt;     &amp;ompi_btl_openib_connect_ibcm,
</span><br>
<span class="quotelev1">&gt;     NULL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_xoob.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_xoob.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp-public/openib-cpc/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_xoob.c	2007-12-14 12:10:23 EST (Fri, 14 Dec 2007)
</span><br>
<span class="quotelev1">&gt; @@ -42,8 +42,6 @@
</span><br>
<span class="quotelev1">&gt;     xoob_finalize,
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#if HAVE_XRC
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; typedef enum {
</span><br>
<span class="quotelev1">&gt;     SEND,
</span><br>
<span class="quotelev1">&gt;     RECV
</span><br>
<span class="quotelev1">&gt; @@ -831,24 +829,3 @@
</span><br>
<span class="quotelev1">&gt;         free(rem_info-&gt;rem_srqs);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -/* In case if the XRC was disabled during compilation we will print  
</span><br>
<span class="quotelev1">&gt; message and return error */
</span><br>
<span class="quotelev1">&gt; -static int xoob_init(void)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    printf(&quot;xoob init\n&quot;);
</span><br>
<span class="quotelev1">&gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static int xoob_start_connect(mca_btl_base_endpoint_t *e)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    printf(&quot;xoob start connect\n&quot;);
</span><br>
<span class="quotelev1">&gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static int xoob_finalize(void)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    printf(&quot;xoob finalize\n&quot;);
</span><br>
<span class="quotelev1">&gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -#endif
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
<li><strong>Next message:</strong> <a href="2854.php">Jeff Squyres: "[OMPI devel] Gnu #ident"</a>
<li><strong>Previous message:</strong> <a href="2852.php">Brian W. Barrett: "Re: [OMPI devel] IPv4 mapped IPv6 addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2863.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Reply:</strong> <a href="2863.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
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
