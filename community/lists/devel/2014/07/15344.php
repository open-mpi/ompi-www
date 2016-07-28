<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 00:25:08 2014" -->
<!-- isoreceived="20140730042508" -->
<!-- sent="Tue, 29 Jul 2014 21:25:06 -0700" -->
<!-- isosent="20140730042506" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="CAAvDA15ATKc75NzUdSWvm3-82TZ_15+C918ZhHtc9JHJ5KhP+w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53D86FF0.2070900_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 00:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15345.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15346.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15346.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Giles,
<br>
<p>If you look more carefully at the output I provided you will see that 1.8.1
<br>
*does* test for PROCEDURE support and finds it lacking.  BOTH outputs
<br>
include:
<br>
&nbsp;checking if Fortran compiler supports PROCEDURE... no
<br>
<p>However in the 1.8.1 case that is apparently not sufficient to disqualify
<br>
building the f08 module.
<br>
<p>The test does fail in both 1.8.1 and 1.8.2rc2.
<br>
Here is the related portion of config.log from one of them:
<br>
<p>configure:57708: checking if Fortran compiler supports PROCEDURE
<br>
configure:57735: pgf90 -c -g conftest.f90 &gt;&amp;5 PGF90-S-0155-Illegal
<br>
procedure interface - mpi_user_function (conftest.f90: 12)
<br>
PGF90-S-0155-Illegal procedure interface - mpi_user_function (conftest.f90:
<br>
12) 0 inform, 0 warnings, 2 severes, 0 fatal for test_proc configure:57735:
<br>
$? = 2 configure: failed program was: | MODULE proc_mod | INTERFACE |
<br>
SUBROUTINE MPI_User_function | END SUBROUTINE | END INTERFACE | END MODULE
<br>
proc_mod | | PROGRAM test_proc | INTERFACE | SUBROUTINE binky(user_fn) |
<br>
USE proc_mod | PROCEDURE(MPI_User_function) :: user_fn | END SUBROUTINE |
<br>
END INTERFACE | END PROGRAM configure:57751: result: no
<br>
<p>Other than the line numbers the 1.8.1 and 1.8.2rc2 output are identical in
<br>
this respect.
<br>
<p>The test also fails run manually:
<br>
<p>{hargrove_at_hopper04 OMPI}$ pgf90 -c -g conftest.f90 PGF90-S-0155-Illegal
<br>
procedure interface - mpi_user_function (conftest.f90: 12)
<br>
PGF90-S-0155-Illegal procedure interface - mpi_user_function (conftest.f90:
<br>
12) 0 inform, 0 warnings, 2 severes, 0 fatal for test_proc
<br>
{hargrove_at_hopper04 OMPI}$ pgf90 -V pgf90 13.10-0 64-bit target on x86-64
<br>
Linux -tp shanghai The Portland Group - PGI Compilers and Tools Copyright
<br>
(c) 2013, NVIDIA CORPORATION. All rights reserved.
<br>
<p>-Paul
<br>
<p>On Tue, Jul 29, 2014 at 9:09 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from the logs, the only difference i see is about Fortran PROCEDURE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openpmi 1.8 (svn checkout) does not build the usempif08 bindings if
</span><br>
<span class="quotelev1">&gt; PROCEDURE is not supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from the logs, openmpi 1.8.1 does not check whether PROCEDURE is supported
</span><br>
<span class="quotelev1">&gt; or not
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is the sample program to check PROCEDURE (from
</span><br>
<span class="quotelev1">&gt; config/ompi_fortran_check_procedure.m4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MODULE proc_mod
</span><br>
<span class="quotelev1">&gt; INTERFACE
</span><br>
<span class="quotelev1">&gt; SUBROUTINE MPI_User_function
</span><br>
<span class="quotelev1">&gt; END SUBROUTINE
</span><br>
<span class="quotelev1">&gt; END INTERFACE
</span><br>
<span class="quotelev1">&gt; END MODULE proc_mod
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PROGRAM test_proc
</span><br>
<span class="quotelev1">&gt; INTERFACE
</span><br>
<span class="quotelev1">&gt; SUBROUTINE binky(user_fn)
</span><br>
<span class="quotelev1">&gt;   USE proc_mod
</span><br>
<span class="quotelev1">&gt;   PROCEDURE(MPI_User_function) :: user_fn
</span><br>
<span class="quotelev1">&gt; END SUBROUTINE
</span><br>
<span class="quotelev1">&gt; END INTERFACE
</span><br>
<span class="quotelev1">&gt; END PROGRAM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i do not have a PGI license, could you please confirm the PGI compiler
</span><br>
<span class="quotelev1">&gt; fails compiling the test above ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/07/30 12:54, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 29, 2014 at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Tue, Jul 29, 2014 at 6:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am trying again with an explicit --enable-mpi-fortran=usempi at
</span><br>
<span class="quotelev1">&gt; configure time to see what happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Of course that should have said --enable-mpi-fortran=usempif08
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I've switched to using PG13.6 for my testing.
</span><br>
<span class="quotelev1">&gt; I find that even when I pass that flag I see that use_mpi_f08 is NOT
</span><br>
<span class="quotelev1">&gt; enabled:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... not cached; checking variants
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$
</span><br>
<span class="quotelev1">&gt; IGNORE_TKR
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports ISO_C_BINDING... yes
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports SUBROUTINE BIND(C)... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports TYPE, BIND(C)... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports TYPE(type), BIND(C, NAME=&quot;name&quot;)...
</span><br>
<span class="quotelev1">&gt; yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports PROCEDURE... no
</span><br>
<span class="quotelev1">&gt; *checking if building Fortran 'use mpi_f08' bindings... no*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Contrast that to openmpi-1.8.1 and the same compiler:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... not cached; checking variants
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$
</span><br>
<span class="quotelev1">&gt; IGNORE_TKR
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports ISO_C_BINDING... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports SUBROUTINE BIND(C)... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports TYPE, BIND(C)... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports TYPE(type), BIND(C, NAME=&quot;name&quot;)...
</span><br>
<span class="quotelev1">&gt; yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports optional arguments... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports PRIVATE... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports PROTECTED... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports ABSTRACT... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports ASYNCHRONOUS... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports PROCEDURE... no
</span><br>
<span class="quotelev1">&gt; checking size of Fortran type(test_mpi_handle)... 4
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler F08 assumed rank syntax... not cached; checking
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(..)... no
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler F08 assumed rank syntax... no
</span><br>
<span class="quotelev1">&gt; checking which mpi_f08 implementation to build... &quot;good&quot; compiler, no array
</span><br>
<span class="quotelev1">&gt; subsections
</span><br>
<span class="quotelev1">&gt; *checking if building Fortran 'use mpi_f08' bindings... yes*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, somewhere between 1.8.1 and 1.8.2rc2 something has happened in the
</span><br>
<span class="quotelev1">&gt; configure logic to disqualify the pgf90 compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also surprised to see 1.8.2rc2 performing *fewer* tests of FC then 1.8.1
</span><br>
<span class="quotelev1">&gt; did (unless they moved elsewhere?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the end I cannot reproduce the originally reported problem for the
</span><br>
<span class="quotelev1">&gt; simple reason that I instead see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {hargrove_at_hopper04 openmpi-1.8.2rc2-linux-x86_64-pgi-14.4}$
</span><br>
<span class="quotelev1">&gt; ./INST/bin/mpif90 ../test.f
</span><br>
<span class="quotelev1">&gt; PGF90-F-0004-Unable to open MODULE file mpi_f08.mod (../test.f: 2)
</span><br>
<span class="quotelev1">&gt; PGF90/x86-64 Linux 14.4-0: compilation aborted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible that your installation of 1.8.2rc2 was to the same prefix as
</span><br>
<span class="quotelev1">&gt; an older build?
</span><br>
<span class="quotelev1">&gt; It that is the case, you may have the mpi_f08.mod from the older build even
</span><br>
<span class="quotelev1">&gt; though no f08 support is in the new build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15342.php">http://www.open-mpi.org/community/lists/devel/2014/07/15342.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15343.php">http://www.open-mpi.org/community/lists/devel/2014/07/15343.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15344/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15345.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15346.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15346.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
