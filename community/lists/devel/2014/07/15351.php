<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 03:15:39 2014" -->
<!-- isoreceived="20140730071539" -->
<!-- sent="Wed, 30 Jul 2014 16:14:35 +0900" -->
<!-- isosent="20140730071435" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="OF3F60236C.26516CEC-ON49257D25.00270030-49257D25.0027E241_at_jcity.maeda.co.jp" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20openmpi-1.8.2rc2%20and%20f08%20interface%20built%20with%20PGI-14.7%20causes%20link%20error"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-07-30 03:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15352.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15350.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15342.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15376.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15376.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>

<br>
Hi Paul, thank you for your comment.
<br>

<br>
I don't think&#227;&#128;&#128;my mpi_f08.mod is older one, because the time stamp is
<br>
equal to the time when I rebuilt them today.
<br>

<br>
[mishima_at_manage openmpi-1.8.2rc2-pgi14.7]$ ll lib/mpi*
<br>
-rwxr-xr-x 1 mishima mishima    315 Jul 30 12:27 lib/mpi_ext.mod
<br>
-rwxr-xr-x 1 mishima mishima    327 Jul 30 12:27 lib/mpi_f08_ext.mod
<br>
-rwxr-xr-x 1 mishima mishima  11716 Jul 30 12:27
<br>
lib/mpi_f08_interfaces_callbacks.mod
<br>
-rwxr-xr-x 1 mishima mishima 374813 Jul 30 12:27 lib/mpi_f08_interfaces.mod
<br>
-rwxr-xr-x 1 mishima mishima 715615 Jul 30 12:27 lib/mpi_f08.mod
<br>
-rwxr-xr-x 1 mishima mishima  14730 Jul 30 12:27 lib/mpi_f08_sizeof.mod
<br>
-rwxr-xr-x 1 mishima mishima  77141 Jul 30 12:27 lib/mpi_f08_types.mod
<br>
-rwxr-xr-x 1 mishima mishima 878339 Jul 30 12:27 lib/mpi.mod
<br>

<br>
Regards,
<br>
Tetsuya
<br>

<br>
<span class="quotelev1">&gt; On Tue, Jul 29, 2014 at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 29, 2014 at 6:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt; I am trying again with an explicit&#194;&#160;--enable-mpi-fortran=usempi at
</span><br>
configure time to see what happens.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course that should have said&#194;&#160;--enable-mpi-fortran=usempif08
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've switched to using PG13.6 for my testing.
</span><br>
<span class="quotelev1">&gt; I find that even when I pass that flag I see that use_mpi_f08 is NOT
</span><br>
enabled:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... not cached; checking
</span><br>
variants
<br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK...
</span><br>
no
<br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$
</span><br>
IGNORE_TKR
<br>
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
yes
<br>
<span class="quotelev1">&gt; checking if Fortran compiler supports PROCEDURE... no
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Contrast that to openmpi-1.8.1 and the same compiler:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... not cached; checking
</span><br>
variants
<br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK...
</span><br>
no
<br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... yes
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... 1:real, dimension(*):!DIR$
</span><br>
IGNORE_TKR
<br>
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
yes
<br>
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
<span class="quotelev1">&gt; checking which mpi_f08 implementation to build... &quot;good&quot; compiler, no
</span><br>
array subsections
<br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, somewhere between 1.8.1 and 1.8.2rc2 something has happened in the
</span><br>
configure logic to disqualify the pgf90 compiler.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also surprised to see 1.8.2rc2 performing *fewer* tests of FC then
</span><br>
1.8.1 did (unless they moved elsewhere?).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the end I cannot reproduce the originally reported problem for the
</span><br>
simple reason that I instead see:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {hargrove_at_hopper04
</span><br>
openmpi-1.8.2rc2-linux-x86_64-pgi-14.4}$ ./INST/bin/mpif90 ../test.f
<br>
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
<span class="quotelev1">&gt; Is it&#194;&#160;possible&#194;&#160;that your installation of 1.8.2rc2 was to the same prefix
</span><br>
as an older build?
<br>
<span class="quotelev1">&gt; It that is the case, you may have the mpi_f08.mod from the older build
</span><br>
even though no f08 support is in the new build.
<br>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department &#194;&#160; &#194;&#160; Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory &#194;&#160; &#194;&#160; Fax: +1-510-486-6900
</span><br>
_______________________________________________
<br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/develLink">http://www.open-mpi.org/mailman/listinfo.cgi/develLink</a> to
</span><br>
this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15342.php">http://www.open-mpi.org/community/lists/devel/2014/07/15342.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15352.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15350.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15342.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15376.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15376.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
