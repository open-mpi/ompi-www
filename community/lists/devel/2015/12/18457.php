<?
$subject_val = "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 24 03:23:13 2015" -->
<!-- isoreceived="20151224082313" -->
<!-- sent="Thu, 24 Dec 2015 09:22:54 +0100" -->
<!-- isosent="20151224082254" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build" -->
<!-- id="567BAB5E.1010202_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="567B7E2B.3060606_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-24 03:22:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18458.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Previous message:</strong> <a href="18456.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>In reply to:</strong> <a href="18456.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18458.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Reply:</strong> <a href="18458.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 24/12/2015 06:10, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Marco,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the patch, i will apply the changes related to the missing
</span><br>
<span class="quotelev1">&gt; include files to master and PR to v2.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on linux, libpmix.so does not depend on libopen-pal.
</span><br>
<span class="quotelev1">&gt; that being said, libpmix.so has undefined symbols related to hwloc and
</span><br>
<span class="quotelev1">&gt; libevent, and these symbols are defined in libopen-pal.so
</span><br>
<span class="quotelev1">&gt; i assume that is ok with linux but cygwin does not accept it.
</span><br>
<p>circular dependency is hard to manage.
<br>
<p><span class="quotelev1">&gt; an other way to do things (and generally speaking, that could become the
</span><br>
<span class="quotelev1">&gt; way to go in a near future) is to use external hwloc and libevent (that
</span><br>
<span class="quotelev1">&gt; assumes of course cygwin provides these libraries and versions meet the
</span><br>
<span class="quotelev1">&gt; ompi requirements)
</span><br>
<p>hwloc is already available as separate library, I will look to pack also 
<br>
libevent.
<br>
<p><span class="quotelev1">&gt; could you try to
</span><br>
<span class="quotelev1">&gt; configure --with-hwloc=external --with-libevent=external ...
</span><br>
<span class="quotelev1">&gt; and see if it helps ?
</span><br>
<p>some time in the coming week
<br>
<p><span class="quotelev1">&gt; fwiw, with master you will soon be able to do the same thing with pmix
</span><br>
<span class="quotelev1">&gt; (e.g. configure --with-pmix=external ...)
</span><br>
<p>I assume no one will really require PMI Exascale on cygwin.
<br>
So this should solve the issue anyway
<br>
<p>Regards
<br>
Marco
<br>
<p><p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/24/2015 3:42 AM, Marco Atzeri wrote:
</span><br>
<span class="quotelev2">&gt;&gt; building 2.0.0rc1 on cygwin I was stacked on
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/pmix/pmix1xx/pmix
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question:
</span><br>
<span class="quotelev2">&gt;&gt; - as pmix depends on hwloc and libevents, is it supposed to
</span><br>
<span class="quotelev2">&gt;&gt;   link against opal shared lib, is it supposed to be included
</span><br>
<span class="quotelev2">&gt;&gt;   in the opal shared lib or is it a circular dependency ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I solved the build changing from shared to convenience library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -lib_LTLIBRARIES = libpmix.la
</span><br>
<span class="quotelev2">&gt;&gt; +noinst_LTLIBRARIES = libpmix.la
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; as circular dependency will be a hell to manage with the
</span><br>
<span class="quotelev2">&gt;&gt; no-undefined flag.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The attached patch solves also
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - several lacks of declaration for opal_output functions
</span><br>
<span class="quotelev2">&gt;&gt;   used in the ompi tree.
</span><br>
<span class="quotelev2">&gt;&gt;   They also require libmpi link vs lib_at_OPAL_LIB_PREFIX_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - lack of declaration for several &lt;unistd.h&gt; functions
</span><br>
<span class="quotelev2">&gt;&gt;   like access, gethostname, usleep, ..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - add !defined(__CYGWIN__) on libevent2022/libevent/event.h
</span><br>
<span class="quotelev2">&gt;&gt;   as for current 1.8 and 1.10 code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please also note that usleep is marked as obsolescent on
</span><br>
<span class="quotelev2">&gt;&gt; Open Group Base Specifications Issue 6
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://pubs.opengroup.org/onlinepubs/009695399/functions/usleep.html">http://pubs.opengroup.org/onlinepubs/009695399/functions/usleep.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; and it is missing on Issue7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this patch it builds on cygwin 64 bit and passes the
</span><br>
<span class="quotelev2">&gt;&gt; same tests of 1.10.x code
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Marco
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/12/18453.php">http://www.open-mpi.org/community/lists/devel/2015/12/18453.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18456.php">http://www.open-mpi.org/community/lists/devel/2015/12/18456.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18458.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Previous message:</strong> <a href="18456.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>In reply to:</strong> <a href="18456.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18458.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Reply:</strong> <a href="18458.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
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
