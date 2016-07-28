<?
$subject_val = "Re: [OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 03:43:59 2016" -->
<!-- isoreceived="20160510074359" -->
<!-- sent="Tue, 10 May 2016 16:43:59 +0900" -->
<!-- isosent="20160510074359" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c" -->
<!-- id="58fa5333-c1c2-a920-6ef0-011e978ba650_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="49ce3a94-621f-2fce-a191-b657e123b50a_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 03:43:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29153.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Previous message:</strong> <a href="29151.php">Siegmar Gross: "[OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
<li><strong>In reply to:</strong> <a href="29151.php">Siegmar Gross: "[OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p><p>this issue was previously reported at 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2016/05/18923.php">http://www.open-mpi.org/community/lists/devel/2016/05/18923.php</a>
<br>
<p>i just pushed the patch
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/10/2016 2:27 PM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to install openmpi-dev-4010-g6c9d65c on my &quot;SUSE Linux
</span><br>
<span class="quotelev1">&gt; Enterprise Server 12 (x86_64)&quot; with Sun C 5.14 beta. Unfortunately
</span><br>
<span class="quotelev1">&gt; &quot;make&quot; breaks with the following error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; '/export2/src/openmpi-master/openmpi-dev-4010-g6c9d6
</span><br>
<span class="quotelev1">&gt;   GENERATE mpi-ignore-tkr-sizeof.h
</span><br>
<span class="quotelev1">&gt;   GENERATE mpi-ignore-tkr-sizeof.f90
</span><br>
<span class="quotelev1">&gt;   PPFC     mpi-ignore-tkr.lo
</span><br>
<span class="quotelev1">&gt;   FCLD     libmpi_usempi_ignore_tkr.la
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -shared passed to ld, if ld is invoked, ignored 
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored 
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored 
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -soname passed to ld, if ld is invoked, ignored 
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: unrecognized option '-path'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev1">&gt; Makefile:1909: recipe for target 'libmpi_usempi_ignore_tkr.la' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi_usempi_ignore_tkr.la] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; '/export2/src/openmpi-master/openmpi-dev-4010-g6c9d65
</span><br>
<span class="quotelev1">&gt; Makefile:3433: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; '/export2/src/openmpi-master/openmpi-dev-4010-g6c9d65
</span><br>
<span class="quotelev1">&gt; Makefile:1898: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 132
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 135 ld -version
</span><br>
<span class="quotelev1">&gt; GNU ld (GNU Binutils; SUSE Linux Enterprise 12) 2.25.0
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2014 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This program is free software; you may redistribute it under the terms of
</span><br>
<span class="quotelev1">&gt; the GNU General Public License version 3 or (at your option) a later 
</span><br>
<span class="quotelev1">&gt; version.
</span><br>
<span class="quotelev1">&gt; This program has absolutely no warranty.
</span><br>
<span class="quotelev1">&gt; loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 136
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could built it with &quot;Sun C 5.13&quot;. Can somebody fix the problem? 
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29151.php">http://www.open-mpi.org/community/lists/users/2016/05/29151.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29153.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Previous message:</strong> <a href="29151.php">Siegmar Gross: "[OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
<li><strong>In reply to:</strong> <a href="29151.php">Siegmar Gross: "[OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
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
