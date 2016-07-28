<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 20:19:52 2014" -->
<!-- isoreceived="20140110011952" -->
<!-- sent="Thu, 9 Jan 2014 17:19:50 -0800" -->
<!-- isosent="20140110011950" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure" -->
<!-- id="CAAvDA16s+saAYqJF+Xp64nf+=k7A7=ZoEJ5Xxf-O79pSuce5GQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D6BD4E78-A94F-4DF9-BB46-EC892D903934_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 20:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13658.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc"</a>
<li><strong>Previous message:</strong> <a href="13656.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13656.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13702.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Larry,
<br>
<p>I didn't try pgi-11, but pgi-12.8 *does* have F08 support detected by
<br>
OpenMPI:
<br>
<p>$ openmpi-1.7-latest-linux-x86_64-pgi-12.8/INST/bin/ompi_info --all | grep
<br>
-i f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi_f08: yes
<br>
&nbsp;Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
<br>
limitations in the pgf90 compiler, does not support the following: array
<br>
subsections, PROCEDUREs, direct passthru (where possible) to underlying
<br>
Open MPI's C functionality
<br>
&nbsp;&nbsp;Fort mpi_f08 subarrays: no
<br>
&nbsp;Fort f08 using wrappers: yes
<br>
&nbsp;&nbsp;&nbsp;Fort use mpi_f08 prof: yes
<br>
<p>So, the lack of F08 support in pgi-10.0 is *not* the result of parsing just
<br>
the leading digit of the PGI version number (and, yes, I do seem to recall
<br>
that problem).
<br>
<p>-Paul
<br>
<p><p>On Thu, Jan 9, 2014 at 5:11 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I wonder if the reason PGI V10.x does not use mpi_f08 bindings is that old
</span><br>
<span class="quotelev1">&gt; PGI compiler version number parsing error.  (Unless, of course, if PGI
</span><br>
<span class="quotelev1">&gt; V11.x or V12.x do use mpi_f08 bindings.)  In that old (autoconf?) bug,
</span><br>
<span class="quotelev1">&gt; decisions were made about features supported on PGI compilers by parsing
</span><br>
<span class="quotelev1">&gt; the version number of the compiler.  Trouble was, only the first digit was
</span><br>
<span class="quotelev1">&gt; examined, leading to PGI V10.x, V11.x, V12.x, ..., all being parsed as V1.
</span><br>
<span class="quotelev1">&gt;  My recollection is that some C++ code was affected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9 Jan 2014, at 4:35 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My attempts to build the current 1.7.4rc tarball with versions 8.0 and 9.0
</span><br>
<span class="quotelev1">&gt; of the Portland Group compilers fails miserably on compilation of
</span><br>
<span class="quotelev1">&gt; mpi-f08-types.F90.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sort of surprised by the attempt to build Fortran 2008 support w/
</span><br>
<span class="quotelev1">&gt; such old compilers.
</span><br>
<span class="quotelev1">&gt; I think that fact itself is the real bug here, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With pgi-10.0 I see configure say:
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But pgi-8.0 and 9.0 both get identified as &quot;good&quot; compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pgi-9.0:
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports BIND(C)... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports BIND(C) with LOGICAL params... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports optional arguments... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports private... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports abstract... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports asynchronous... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports procedure... no
</span><br>
<span class="quotelev1">&gt; checking size of Fortran type(test_mpi_handle)... 4
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler F08 assumed rank syntax... not cached; checking
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(..)... no
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler F08 assumed rank syntax... no
</span><br>
<span class="quotelev1">&gt; checking which mpi_f08 implementation to build... &quot;good&quot; compiler, no
</span><br>
<span class="quotelev1">&gt; array subsections
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Temporary development override: forcing the use of F08
</span><br>
<span class="quotelev1">&gt; wrappers
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pgi-8.0 (almost, but not quite, the same):
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports BIND(C)... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports BIND(C) with LOGICAL params... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports optional arguments... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports private... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports abstract... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports asynchronous... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports procedure... no
</span><br>
<span class="quotelev1">&gt; checking size of Fortran type(test_mpi_handle)... 4
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler F08 assumed rank syntax... not cached; checking
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(..)... no
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler F08 assumed rank syntax... no
</span><br>
<span class="quotelev1">&gt; checking which mpi_f08 implementation to build... &quot;good&quot; compiler, no
</span><br>
<span class="quotelev1">&gt; array subsections
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Temporary development override: forcing the use of F08
</span><br>
<span class="quotelev1">&gt; wrappers
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bzip2-compressed config.log files for pgi-8.0 and 9.0 are attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;  &lt;openmpi-1.7-latest-linux-x86_64-pgi-9.0-config.log.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.7-latest-linux-x86_64-pgi-8.0-config.log.bz2&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13657/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13658.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc"</a>
<li><strong>Previous message:</strong> <a href="13656.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13656.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13702.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
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
