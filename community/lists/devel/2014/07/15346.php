<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 00:41:34 2014" -->
<!-- isoreceived="20140730044134" -->
<!-- sent="Wed, 30 Jul 2014 13:41:24 +0900" -->
<!-- isosent="20140730044124" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="53D87774.90405_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15ATKc75NzUdSWvm3-82TZ_15+C918ZhHtc9JHJ5KhP+w_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 00:41:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15347.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15345.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15344.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15347.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15347.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>i am sorry i missed that.
<br>
<p>and you are right, 1.8.1 and 1.8 from svn differs :
<br>
<p>from svn (config/ompi_setup_mpi_fortran.m4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# Per <a href="https://svn.open-mpi.org/trac/ompi/ticket/4590">https://svn.open-mpi.org/trac/ompi/ticket/4590</a>, if the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# Fortran compiler doesn't support PROCEDURE in the way we
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# want/need, disable the mpi_f08 module.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI_FORTRAN_HAVE_PROCEDURE=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test $OMPI_WANT_FORTRAN_USEMPIF08_BINDINGS -eq 1 -a \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS -eq 1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ # Does the compiler support &quot;procedure&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_FORTRAN_CHECK_PROCEDURE(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[OMPI_FORTRAN_HAVE_PROCEDURE=1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[OMPI_FORTRAN_HAVE_PROCEDURE=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS=0])])
<br>
<p>1.8.1 does not disqualify f08 bindings if PROCEDURE is not supported.
<br>
/* for the sake of completion, in some cases, 1.8.1 *might* disqualify
<br>
f08 bindings if PROCEDURE *is* supported :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# Per <a href="https://svn.open-mpi.org/trac/ompi/ticket/4157">https://svn.open-mpi.org/trac/ompi/ticket/4157</a>, temporarily
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# disqualify the fortran compiler if it exhibits the behavior
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# described in that ticket.  Short version: OMPI does something
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# non-Fortran that we don't have time to fix 1.7.4.  So we just
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# disqualify Fortran compilers who actually enforce this issue,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# and we'll fix OMPI to be Fortran-compliant after 1.7.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test $OMPI_WANT_FORTRAN_USEMPIF08_BINDINGS -eq 1 &amp;&amp; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test $OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS -eq 1 &amp;&amp; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test $OMPI_FORTRAN_HAVE_PROCEDURE -eq 1 &amp;&amp; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test $OMPI_FORTRAN_HAVE_ABSTRACT -eq 1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ # Check for ticket 4157
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_FORTRAN_CHECK_TICKET_4157(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ # If we don't have this, don't build the mpi_f08 module
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS=0])])
<br>
<p><p>from the sources and #4590, f08 binding is intentionally disabled since
<br>
PGI compilers does not support PROCEDURE.
<br>
i agree this is really bad for PGI users :-(
<br>
<p>Jeff, can you comment on that ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/07/30 13:25, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Giles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you look more carefully at the output I provided you will see that 1.8.1
</span><br>
<span class="quotelev1">&gt; *does* test for PROCEDURE support and finds it lacking.  BOTH outputs
</span><br>
<span class="quotelev1">&gt; include:
</span><br>
<span class="quotelev1">&gt;  checking if Fortran compiler supports PROCEDURE... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However in the 1.8.1 case that is apparently not sufficient to disqualify
</span><br>
<span class="quotelev1">&gt; building the f08 module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test does fail in both 1.8.1 and 1.8.2rc2.
</span><br>
<span class="quotelev1">&gt; Here is the related portion of config.log from one of them:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:57708: checking if Fortran compiler supports PROCEDURE
</span><br>
<span class="quotelev1">&gt; configure:57735: pgf90 -c -g conftest.f90 &gt;&amp;5 PGF90-S-0155-Illegal
</span><br>
<span class="quotelev1">&gt; procedure interface - mpi_user_function (conftest.f90: 12)
</span><br>
<span class="quotelev1">&gt; PGF90-S-0155-Illegal procedure interface - mpi_user_function (conftest.f90:
</span><br>
<span class="quotelev1">&gt; 12) 0 inform, 0 warnings, 2 severes, 0 fatal for test_proc configure:57735:
</span><br>
<span class="quotelev1">&gt; $? = 2 configure: failed program was: | MODULE proc_mod | INTERFACE |
</span><br>
<span class="quotelev1">&gt; SUBROUTINE MPI_User_function | END SUBROUTINE | END INTERFACE | END MODULE
</span><br>
<span class="quotelev1">&gt; proc_mod | | PROGRAM test_proc | INTERFACE | SUBROUTINE binky(user_fn) |
</span><br>
<span class="quotelev1">&gt; USE proc_mod | PROCEDURE(MPI_User_function) :: user_fn | END SUBROUTINE |
</span><br>
<span class="quotelev1">&gt; END INTERFACE | END PROGRAM configure:57751: result: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than the line numbers the 1.8.1 and 1.8.2rc2 output are identical in
</span><br>
<span class="quotelev1">&gt; this respect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test also fails run manually:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {hargrove_at_hopper04 OMPI}$ pgf90 -c -g conftest.f90 PGF90-S-0155-Illegal
</span><br>
<span class="quotelev1">&gt; procedure interface - mpi_user_function (conftest.f90: 12)
</span><br>
<span class="quotelev1">&gt; PGF90-S-0155-Illegal procedure interface - mpi_user_function (conftest.f90:
</span><br>
<span class="quotelev1">&gt; 12) 0 inform, 0 warnings, 2 severes, 0 fatal for test_proc
</span><br>
<span class="quotelev1">&gt; {hargrove_at_hopper04 OMPI}$ pgf90 -V pgf90 13.10-0 64-bit target on x86-64
</span><br>
<span class="quotelev1">&gt; Linux -tp shanghai The Portland Group - PGI Compilers and Tools Copyright
</span><br>
<span class="quotelev1">&gt; (c) 2013, NVIDIA CORPORATION. All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 29, 2014 at 9:09 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; from the logs, the only difference i see is about Fortran PROCEDURE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; openpmi 1.8 (svn checkout) does not build the usempif08 bindings if
</span><br>
<span class="quotelev2">&gt;&gt; PROCEDURE is not supported.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; from the logs, openmpi 1.8.1 does not check whether PROCEDURE is supported
</span><br>
<span class="quotelev2">&gt;&gt; or not
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is the sample program to check PROCEDURE (from
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_fortran_check_procedure.m4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MODULE proc_mod
</span><br>
<span class="quotelev2">&gt;&gt; INTERFACE
</span><br>
<span class="quotelev2">&gt;&gt; SUBROUTINE MPI_User_function
</span><br>
<span class="quotelev2">&gt;&gt; END SUBROUTINE
</span><br>
<span class="quotelev2">&gt;&gt; END INTERFACE
</span><br>
<span class="quotelev2">&gt;&gt; END MODULE proc_mod
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PROGRAM test_proc
</span><br>
<span class="quotelev2">&gt;&gt; INTERFACE
</span><br>
<span class="quotelev2">&gt;&gt; SUBROUTINE binky(user_fn)
</span><br>
<span class="quotelev2">&gt;&gt;   USE proc_mod
</span><br>
<span class="quotelev2">&gt;&gt;   PROCEDURE(MPI_User_function) :: user_fn
</span><br>
<span class="quotelev2">&gt;&gt; END SUBROUTINE
</span><br>
<span class="quotelev2">&gt;&gt; END INTERFACE
</span><br>
<span class="quotelev2">&gt;&gt; END PROGRAM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i do not have a PGI license, could you please confirm the PGI compiler
</span><br>
<span class="quotelev2">&gt;&gt; fails compiling the test above ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/07/30 12:54, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 29, 2014 at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Tue, Jul 29, 2014 at 6:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I am trying again with an explicit --enable-mpi-fortran=usempi at
</span><br>
<span class="quotelev2">&gt;&gt; configure time to see what happens.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Of course that should have said --enable-mpi-fortran=usempif08
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I've switched to using PG13.6 for my testing.
</span><br>
<span class="quotelev2">&gt;&gt; I find that even when I pass that flag I see that use_mpi_f08 is NOT
</span><br>
<span class="quotelev2">&gt;&gt; enabled:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking Fortran compiler ignore TKR syntax... not cached; checking variants
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$
</span><br>
<span class="quotelev2">&gt;&gt; IGNORE_TKR
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports ISO_C_BINDING... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports SUBROUTINE BIND(C)... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports TYPE, BIND(C)... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports TYPE(type), BIND(C, NAME=&quot;name&quot;)...
</span><br>
<span class="quotelev2">&gt;&gt; yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports PROCEDURE... no
</span><br>
<span class="quotelev2">&gt;&gt; *checking if building Fortran 'use mpi_f08' bindings... no*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Contrast that to openmpi-1.8.1 and the same compiler:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking Fortran compiler ignore TKR syntax... not cached; checking variants
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$
</span><br>
<span class="quotelev2">&gt;&gt; IGNORE_TKR
</span><br>
<span class="quotelev2">&gt;&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports ISO_C_BINDING... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports SUBROUTINE BIND(C)... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports TYPE, BIND(C)... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports TYPE(type), BIND(C, NAME=&quot;name&quot;)...
</span><br>
<span class="quotelev2">&gt;&gt; yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports optional arguments... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports PRIVATE... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports PROTECTED... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports ABSTRACT... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports ASYNCHRONOUS... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports PROCEDURE... no
</span><br>
<span class="quotelev2">&gt;&gt; checking size of Fortran type(test_mpi_handle)... 4
</span><br>
<span class="quotelev2">&gt;&gt; checking Fortran compiler F08 assumed rank syntax... not cached; checking
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(..)... no
</span><br>
<span class="quotelev2">&gt;&gt; checking Fortran compiler F08 assumed rank syntax... no
</span><br>
<span class="quotelev2">&gt;&gt; checking which mpi_f08 implementation to build... &quot;good&quot; compiler, no array
</span><br>
<span class="quotelev2">&gt;&gt; subsections
</span><br>
<span class="quotelev2">&gt;&gt; *checking if building Fortran 'use mpi_f08' bindings... yes*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, somewhere between 1.8.1 and 1.8.2rc2 something has happened in the
</span><br>
<span class="quotelev2">&gt;&gt; configure logic to disqualify the pgf90 compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also surprised to see 1.8.2rc2 performing *fewer* tests of FC then 1.8.1
</span><br>
<span class="quotelev2">&gt;&gt; did (unless they moved elsewhere?).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the end I cannot reproduce the originally reported problem for the
</span><br>
<span class="quotelev2">&gt;&gt; simple reason that I instead see:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {hargrove_at_hopper04 openmpi-1.8.2rc2-linux-x86_64-pgi-14.4}$
</span><br>
<span class="quotelev2">&gt;&gt; ./INST/bin/mpif90 ../test.f
</span><br>
<span class="quotelev2">&gt;&gt; PGF90-F-0004-Unable to open MODULE file mpi_f08.mod (../test.f: 2)
</span><br>
<span class="quotelev2">&gt;&gt; PGF90/x86-64 Linux 14.4-0: compilation aborted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya Mishima,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible that your installation of 1.8.2rc2 was to the same prefix as
</span><br>
<span class="quotelev2">&gt;&gt; an older build?
</span><br>
<span class="quotelev2">&gt;&gt; It that is the case, you may have the mpi_f08.mod from the older build even
</span><br>
<span class="quotelev2">&gt;&gt; though no f08 support is in the new build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15342.php">http://www.open-mpi.org/community/lists/devel/2014/07/15342.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15343.php">http://www.open-mpi.org/community/lists/devel/2014/07/15343.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15344.php">http://www.open-mpi.org/community/lists/devel/2014/07/15344.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15346/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15347.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15345.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15344.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15347.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15347.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
