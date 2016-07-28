<?
$subject_val = "[OMPI devel] PMIX on 2.0.0rc1 and cygwin build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 23 13:42:31 2015" -->
<!-- isoreceived="20151223184231" -->
<!-- sent="Wed, 23 Dec 2015 19:42:17 +0100" -->
<!-- isosent="20151223184217" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI devel] PMIX on 2.0.0rc1 and cygwin build" -->
<!-- id="567AEB09.1050901_at_gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] PMIX on 2.0.0rc1 and cygwin build<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-23 13:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18454.php">Ralph Castain: "[OMPI devel] OMPI 1.10.2rc2"</a>
<li><strong>Previous message:</strong> <a href="18452.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18456.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Reply:</strong> <a href="18456.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
building 2.0.0rc1 on cygwin I was stacked on
<br>
opal/mca/pmix/pmix1xx/pmix
<br>
<p>Question:
<br>
- as pmix depends on hwloc and libevents, is it supposed to
<br>
&nbsp;&nbsp;&nbsp;link against opal shared lib, is it supposed to be included
<br>
&nbsp;&nbsp;&nbsp;in the opal shared lib or is it a circular dependency ?
<br>
<p>I solved the build changing from shared to convenience library.
<br>
<p>-lib_LTLIBRARIES = libpmix.la
<br>
+noinst_LTLIBRARIES = libpmix.la
<br>
<p>as circular dependency will be a hell to manage with the
<br>
no-undefined flag.
<br>
<p>The attached patch solves also
<br>
<p>- several lacks of declaration for opal_output functions
<br>
&nbsp;&nbsp;&nbsp;used in the ompi tree.
<br>
&nbsp;&nbsp;&nbsp;They also require libmpi link vs lib_at_OPAL_LIB_PREFIX_at_[hidden]
<br>
<p>- lack of declaration for several &lt;unistd.h&gt; functions
<br>
&nbsp;&nbsp;&nbsp;like access, gethostname, usleep, ..
<br>
<p>- add !defined(__CYGWIN__) on libevent2022/libevent/event.h
<br>
&nbsp;&nbsp;&nbsp;as for current 1.8 and 1.10 code.
<br>
<p><p>Please also note that usleep is marked as obsolescent on
<br>
Open Group Base Specifications Issue 6
<br>
&nbsp;&nbsp;&nbsp;<a href="http://pubs.opengroup.org/onlinepubs/009695399/functions/usleep.html">http://pubs.opengroup.org/onlinepubs/009695399/functions/usleep.html</a>
<br>
and it is missing on Issue7
<br>
<p>With this patch it builds on cygwin 64 bit and passes the
<br>
same tests of 1.10.x code
<br>
<p>Regards
<br>
Marco
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18453/openmpi-2.0.0rc1.patch">openmpi-2.0.0rc1.patch</a>
</ul>
<!-- attachment="openmpi-2.0.0rc1.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18454.php">Ralph Castain: "[OMPI devel] OMPI 1.10.2rc2"</a>
<li><strong>Previous message:</strong> <a href="18452.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18456.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
<li><strong>Reply:</strong> <a href="18456.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX on 2.0.0rc1 and cygwin build"</a>
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
