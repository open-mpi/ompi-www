<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 00:09:23 2014" -->
<!-- isoreceived="20140730040923" -->
<!-- sent="Wed, 30 Jul 2014 13:09:20 +0900" -->
<!-- isosent="20140730040920" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="53D86FF0.2070900_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17vEBx0WWRsuepLRzkZ2KKEBdjbfDOKXNV2=c-D6Ker_w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-30 00:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15344.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15342.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15342.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15344.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15344.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15345.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>from the logs, the only difference i see is about Fortran PROCEDURE.
<br>
<p>openpmi 1.8 (svn checkout) does not build the usempif08 bindings if
<br>
PROCEDURE is not supported.
<br>
<p>from the logs, openmpi 1.8.1 does not check whether PROCEDURE is
<br>
supported or not
<br>
<p>here is the sample program to check PROCEDURE (from
<br>
config/ompi_fortran_check_procedure.m4)
<br>
<p>MODULE proc_mod
<br>
INTERFACE
<br>
SUBROUTINE MPI_User_function
<br>
END SUBROUTINE
<br>
END INTERFACE
<br>
END MODULE proc_mod
<br>
<p>PROGRAM test_proc
<br>
INTERFACE
<br>
SUBROUTINE binky(user_fn)
<br>
&nbsp;&nbsp;USE proc_mod
<br>
&nbsp;&nbsp;PROCEDURE(MPI_User_function) :: user_fn
<br>
END SUBROUTINE
<br>
END INTERFACE
<br>
END PROGRAM
<br>
<p>i do not have a PGI license, could you please confirm the PGI compiler
<br>
fails compiling the test above ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/07/30 12:54, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; On Tue, Jul 29, 2014 at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 29, 2014 at 6:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying again with an explicit --enable-mpi-fortran=usempi at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure time to see what happens.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course that should have said --enable-mpi-fortran=usempif08
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I've switched to using PG13.6 for my testing.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15342.php">http://www.open-mpi.org/community/lists/devel/2014/07/15342.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15343/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15344.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15342.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15342.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15344.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15344.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15345.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
