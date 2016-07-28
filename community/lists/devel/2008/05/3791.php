<?
$subject_val = "Re: [OMPI devel] forgetting to run ./autogen.sh should not be fatal";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 11:35:16 2008" -->
<!-- isoreceived="20080501153516" -->
<!-- sent="Thu, 1 May 2008 11:34:24 -0400" -->
<!-- isosent="20080501153424" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] forgetting to run ./autogen.sh should not be fatal" -->
<!-- id="C7DC6E7E-2DA3-4B98-9836-009953BBF357_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080429184559.GF26023_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] forgetting to run ./autogen.sh should not be fatal<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-01 11:34:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3792.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3790.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3778.php">Ralf Wildenhues: "[OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done -- thanks!
<br>
<p>(config commit coming tonight to avoid US workday hours)
<br>
<p><p>On Apr 29, 2008, at 2:45 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just forgot to run ./autogen.sh after svn update.  It caused aclocal
</span><br>
<span class="quotelev1">&gt; to warn about missing libtool macros, and automake to fail later.  The
</span><br>
<span class="quotelev1">&gt; following change to Makefile.am fixes this by allowing aclocal to find
</span><br>
<span class="quotelev1">&gt; config/libtool.m4 and the other libtool macro files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ompi_functions.m4 change fixes a trivial unnecessary escaping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- Makefile.am	(revision 18324)
</span><br>
<span class="quotelev1">&gt; +++ Makefile.am	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -24,3 +24,5 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dist-hook:
</span><br>
<span class="quotelev1">&gt; 	csh &quot;$(top_srcdir)/config/distscript.csh&quot; &quot;$(top_srcdir)&quot; &quot;$ 
</span><br>
<span class="quotelev1">&gt; (distdir)&quot; &quot;$(OMPI_VERSION)&quot; &quot;$(OMPI_SVN_R)&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +ACLOCAL_AMFLAGS = -I config
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_functions.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_functions.m4	(revision 18324)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_functions.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -132,7 +132,7 @@
</span><br>
<span class="quotelev1">&gt;     echo installing to directory \&quot;$prefix\&quot;
</span><br>
<span class="quotelev1">&gt;     ;;
</span><br>
<span class="quotelev1">&gt;   *)
</span><br>
<span class="quotelev1">&gt; -    AC_MSG_ERROR(prefix \&quot;$prefix\&quot; must be an absolute directory  
</span><br>
<span class="quotelev1">&gt; path)
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_ERROR(prefix &quot;$prefix&quot; must be an absolute directory path)
</span><br>
<span class="quotelev1">&gt;     ;;
</span><br>
<span class="quotelev1">&gt; esac
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3792.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3790.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3778.php">Ralf Wildenhues: "[OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
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
