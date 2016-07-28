<?
$subject_val = "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 24 00:10:09 2015" -->
<!-- isoreceived="20151224051009" -->
<!-- sent="Thu, 24 Dec 2015 14:10:03 +0900" -->
<!-- isosent="20151224051003" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build" -->
<!-- id="567B7E2B.3060606_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="567AEB09.1050901_at_gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-24 00:10:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18457.php">Marco Atzeri: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Previous message:</strong> <a href="18455.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>In reply to:</strong> <a href="18453.php">Marco Atzeri: "[OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18457.php">Marco Atzeri: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Reply:</strong> <a href="18457.php">Marco Atzeri: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marco,
<br>
<p>Thanks for the patch, i will apply the changes related to the missing 
<br>
include files to master and PR to v2.x
<br>
<p>on linux, libpmix.so does not depend on libopen-pal.
<br>
that being said, libpmix.so has undefined symbols related to hwloc and 
<br>
libevent, and these symbols are defined in libopen-pal.so
<br>
i assume that is ok with linux but cygwin does not accept it.
<br>
<p>an other way to do things (and generally speaking, that could become the 
<br>
way to go in a near future) is to use external hwloc and libevent (that 
<br>
assumes of course cygwin provides these libraries and versions meet the 
<br>
ompi requirements)
<br>
<p>could you try to
<br>
configure --with-hwloc=external --with-libevent=external ...
<br>
and see if it helps ?
<br>
<p>fwiw, with master you will soon be able to do the same thing with pmix
<br>
(e.g. configure --with-pmix=external ...)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 12/24/2015 3:42 AM, Marco Atzeri wrote:
<br>
<span class="quotelev1">&gt; building 2.0.0rc1 on cygwin I was stacked on
</span><br>
<span class="quotelev1">&gt; opal/mca/pmix/pmix1xx/pmix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question:
</span><br>
<span class="quotelev1">&gt; - as pmix depends on hwloc and libevents, is it supposed to
</span><br>
<span class="quotelev1">&gt;   link against opal shared lib, is it supposed to be included
</span><br>
<span class="quotelev1">&gt;   in the opal shared lib or is it a circular dependency ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I solved the build changing from shared to convenience library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -lib_LTLIBRARIES = libpmix.la
</span><br>
<span class="quotelev1">&gt; +noinst_LTLIBRARIES = libpmix.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as circular dependency will be a hell to manage with the
</span><br>
<span class="quotelev1">&gt; no-undefined flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached patch solves also
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - several lacks of declaration for opal_output functions
</span><br>
<span class="quotelev1">&gt;   used in the ompi tree.
</span><br>
<span class="quotelev1">&gt;   They also require libmpi link vs lib_at_OPAL_LIB_PREFIX_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - lack of declaration for several &lt;unistd.h&gt; functions
</span><br>
<span class="quotelev1">&gt;   like access, gethostname, usleep, ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - add !defined(__CYGWIN__) on libevent2022/libevent/event.h
</span><br>
<span class="quotelev1">&gt;   as for current 1.8 and 1.10 code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please also note that usleep is marked as obsolescent on
</span><br>
<span class="quotelev1">&gt; Open Group Base Specifications Issue 6
</span><br>
<span class="quotelev1">&gt; <a href="http://pubs.opengroup.org/onlinepubs/009695399/functions/usleep.html">http://pubs.opengroup.org/onlinepubs/009695399/functions/usleep.html</a>
</span><br>
<span class="quotelev1">&gt; and it is missing on Issue7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this patch it builds on cygwin 64 bit and passes the
</span><br>
<span class="quotelev1">&gt; same tests of 1.10.x code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18453.php">http://www.open-mpi.org/community/lists/devel/2015/12/18453.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18457.php">Marco Atzeri: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Previous message:</strong> <a href="18455.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>In reply to:</strong> <a href="18453.php">Marco Atzeri: "[OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18457.php">Marco Atzeri: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Reply:</strong> <a href="18457.php">Marco Atzeri: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
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
