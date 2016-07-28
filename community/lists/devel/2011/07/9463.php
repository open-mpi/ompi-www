<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  3 10:49:50 2011" -->
<!-- isoreceived="20110703144950" -->
<!-- sent="Sun, 03 Jul 2011 17:49:38 +0300" -->
<!-- isosent="20110703144938" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836" -->
<!-- id="4E108182.9060900_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="94BAC0A2-EFD8-4F7A-A659-732D63FEA760_at_cisco.com" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-03 10:49:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9464.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9462.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9445.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks, fixed - see r24852.
<br>
Basically, I did what you wrote here, with some small modifications.
<br>
Hope that this is OK this time.
<br>
<p>-- YK
<br>
<p>On 29-Jun-11 5:59 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; That's still not quite right, per OMPI conventions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't find it, you shouldn't warn, you should have some other AC_MSG_CHECKING and then indicate that that particular check failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E.g.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AC_MSG_CHECKING([if can use dynamic SL support])
</span><br>
<span class="quotelev1">&gt; AS_IF([test &quot;$1_have_dynamic_sl&quot; = &quot;1&quot;],
</span><br>
<span class="quotelev1">&gt;        [AC_MSG_RESULT([yes])],
</span><br>
<span class="quotelev1">&gt;        [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;         AS_IF([test &quot;$enable_openib_dynamic_sl&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;               [AC_MSG_WARN([--enable-openib-dynamic-sl was specified but the])
</span><br>
<span class="quotelev1">&gt;                AC_MSG_WARN([appropriate header files could not be found.])
</span><br>
<span class="quotelev1">&gt;                AC_MSG_ERROR([Cannot continue])])
</span><br>
<span class="quotelev1">&gt;        ])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I just typed that in my mail client; I don't know if all the [] and () match properly)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 29, 2011, at 10:52 AM, kliteyn_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: kliteyn
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-06-29 10:52:11 EDT (Wed, 29 Jun 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 24836
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24836">https://svn.open-mpi.org/trac/ompi/changeset/24836</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Changed default behavior when opensm-devel pachege not found - warn, not exit
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/config/ompi_check_openib.m4 |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/config/ompi_check_openib.m4
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/config/ompi_check_openib.m4	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/config/ompi_check_openib.m4	2011-06-29 10:52:11 EDT (Wed, 29 Jun 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -195,7 +195,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                 # ib_types.h, but it doesn't include any other IB-related files.
</span><br>
<span class="quotelev2">&gt;&gt;                 AC_CHECK_HEADER([infiniband/complib/cl_types_osd.h],
</span><br>
<span class="quotelev2">&gt;&gt;                                 [$1_have_dynamic_sl=1],
</span><br>
<span class="quotelev2">&gt;&gt; -                               [AC_MSG_ERROR([opensm-devel package not found - please install it or disable dynamic SL support with \&quot;--disable-openib-dynamic-sl\&quot;])],
</span><br>
<span class="quotelev2">&gt;&gt; +                               [AC_MSG_WARN([opensm-devel package not found - please install it or disable dynamic SL support with \&quot;--disable-openib-dynamic-sl\&quot;])],
</span><br>
<span class="quotelev2">&gt;&gt;                                 [])
</span><br>
<span class="quotelev2">&gt;&gt;             fi
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9464.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9462.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9445.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836"</a>
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
