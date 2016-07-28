<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 10:59:36 2011" -->
<!-- isoreceived="20110629145936" -->
<!-- sent="Wed, 29 Jun 2011 10:59:30 -0400" -->
<!-- isosent="20110629145930" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836" -->
<!-- id="94BAC0A2-EFD8-4F7A-A659-732D63FEA760_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201106291452.p5TEqCpA014077_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 10:59:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9446.php">Ralph Castain: "[OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9444.php">Xin He: "[OMPI devel] TIPC BTL Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9463.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9463.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's still not quite right, per OMPI conventions.
<br>
<p>If you don't find it, you shouldn't warn, you should have some other AC_MSG_CHECKING and then indicate that that particular check failed.
<br>
<p>E.g.
<br>
<p>AC_MSG_CHECKING([if can use dynamic SL support])
<br>
AS_IF([test &quot;$1_have_dynamic_sl&quot; = &quot;1&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$enable_openib_dynamic_sl&quot; = &quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_WARN([--enable-openib-dynamic-sl was specified but the])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([appropriate header files could not be found.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_ERROR([Cannot continue])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
<p>(I just typed that in my mail client; I don't know if all the [] and () match properly)
<br>
<p><p><p>On Jun 29, 2011, at 10:52 AM, kliteyn_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: kliteyn
</span><br>
<span class="quotelev1">&gt; Date: 2011-06-29 10:52:11 EDT (Wed, 29 Jun 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24836
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24836">https://svn.open-mpi.org/trac/ompi/changeset/24836</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Changed default behavior when opensm-devel pachege not found - warn, not exit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/config/ompi_check_openib.m4 |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/config/ompi_check_openib.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/config/ompi_check_openib.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/config/ompi_check_openib.m4	2011-06-29 10:52:11 EDT (Wed, 29 Jun 2011)
</span><br>
<span class="quotelev1">&gt; @@ -195,7 +195,7 @@
</span><br>
<span class="quotelev1">&gt;                # ib_types.h, but it doesn't include any other IB-related files.
</span><br>
<span class="quotelev1">&gt;                AC_CHECK_HEADER([infiniband/complib/cl_types_osd.h],
</span><br>
<span class="quotelev1">&gt;                                [$1_have_dynamic_sl=1],
</span><br>
<span class="quotelev1">&gt; -                               [AC_MSG_ERROR([opensm-devel package not found - please install it or disable dynamic SL support with \&quot;--disable-openib-dynamic-sl\&quot;])],
</span><br>
<span class="quotelev1">&gt; +                               [AC_MSG_WARN([opensm-devel package not found - please install it or disable dynamic SL support with \&quot;--disable-openib-dynamic-sl\&quot;])],
</span><br>
<span class="quotelev1">&gt;                                [])
</span><br>
<span class="quotelev1">&gt;            fi
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9446.php">Ralph Castain: "[OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9444.php">Xin He: "[OMPI devel] TIPC BTL Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9463.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9463.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836"</a>
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
