<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 23:54:48 2014" -->
<!-- isoreceived="20140730035448" -->
<!-- sent="Tue, 29 Jul 2014 20:54:46 -0700" -->
<!-- isosent="20140730035446" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="CAAvDA17vEBx0WWRsuepLRzkZ2KKEBdjbfDOKXNV2=c-D6Ker_w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15Q4GMLCZipvrkRRAgShE=Lq9Y+25MYagroibkFGVi9QA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-29 23:54:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15341.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>In reply to:</strong> <a href="15340.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15351.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 29, 2014 at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 29, 2014 at 6:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying again with an explicit --enable-mpi-fortran=usempi at
</span><br>
<span class="quotelev2">&gt;&gt; configure time to see what happens.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course that should have said --enable-mpi-fortran=usempif08
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I've switched to using PG13.6 for my testing.
<br>
I find that even when I pass that flag I see that use_mpi_f08 is NOT
<br>
enabled:
<br>
<p>checking Fortran compiler ignore TKR syntax... not cached; checking variants
<br>
checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
<br>
checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
<br>
checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
<br>
checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
<br>
checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$
<br>
IGNORE_TKR
<br>
checking if Fortran compiler supports ISO_C_BINDING... yes
<br>
checking if building Fortran 'use mpi' bindings... yes
<br>
checking if Fortran compiler supports SUBROUTINE BIND(C)... yes
<br>
checking if Fortran compiler supports TYPE, BIND(C)... yes
<br>
checking if Fortran compiler supports TYPE(type), BIND(C, NAME=&quot;name&quot;)...
<br>
yes
<br>
checking if Fortran compiler supports PROCEDURE... no
<br>
*checking if building Fortran 'use mpi_f08' bindings... no*
<br>
<p>Contrast that to openmpi-1.8.1 and the same compiler:
<br>
<p>checking Fortran compiler ignore TKR syntax... not cached; checking variants
<br>
checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
<br>
checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
<br>
checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
<br>
checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
<br>
checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$
<br>
IGNORE_TKR
<br>
checking if building Fortran 'use mpi' bindings... yes
<br>
checking if Fortran compiler supports ISO_C_BINDING... yes
<br>
checking if Fortran compiler supports SUBROUTINE BIND(C)... yes
<br>
checking if Fortran compiler supports TYPE, BIND(C)... yes
<br>
checking if Fortran compiler supports TYPE(type), BIND(C, NAME=&quot;name&quot;)...
<br>
yes
<br>
checking if Fortran compiler supports optional arguments... yes
<br>
checking if Fortran compiler supports PRIVATE... yes
<br>
checking if Fortran compiler supports PROTECTED... yes
<br>
checking if Fortran compiler supports ABSTRACT... yes
<br>
checking if Fortran compiler supports ASYNCHRONOUS... yes
<br>
checking if Fortran compiler supports PROCEDURE... no
<br>
checking size of Fortran type(test_mpi_handle)... 4
<br>
checking Fortran compiler F08 assumed rank syntax... not cached; checking
<br>
checking for Fortran compiler support of TYPE(*), DIMENSION(..)... no
<br>
checking Fortran compiler F08 assumed rank syntax... no
<br>
checking which mpi_f08 implementation to build... &quot;good&quot; compiler, no array
<br>
subsections
<br>
*checking if building Fortran 'use mpi_f08' bindings... yes*
<br>
<p>So, somewhere between 1.8.1 and 1.8.2rc2 something has happened in the
<br>
configure logic to disqualify the pgf90 compiler.
<br>
<p>I also surprised to see 1.8.2rc2 performing *fewer* tests of FC then 1.8.1
<br>
did (unless they moved elsewhere?).
<br>
<p>In the end I cannot reproduce the originally reported problem for the
<br>
simple reason that I instead see:
<br>
<p>{hargrove_at_hopper04 openmpi-1.8.2rc2-linux-x86_64-pgi-14.4}$
<br>
./INST/bin/mpif90 ../test.f
<br>
PGF90-F-0004-Unable to open MODULE file mpi_f08.mod (../test.f: 2)
<br>
PGF90/x86-64 Linux 14.4-0: compilation aborted
<br>
<p><p>Tetsuya Mishima,
<br>
<p>Is it possible that your installation of 1.8.2rc2 was to the same prefix as
<br>
an older build?
<br>
It that is the case, you may have the mpi_f08.mod from the older build even
<br>
though no f08 support is in the new build.
<br>
<p><p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15342/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15341.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>In reply to:</strong> <a href="15340.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15351.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
