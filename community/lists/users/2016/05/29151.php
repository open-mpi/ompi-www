<?
$subject_val = "[OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 01:28:14 2016" -->
<!-- isoreceived="20160510052814" -->
<!-- sent="Tue, 10 May 2016 07:27:56 +0200" -->
<!-- isosent="20160510052756" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c" -->
<!-- id="49ce3a94-621f-2fce-a191-b657e123b50a_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 01:27:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29152.php">Gilles Gouaillardet: "Re: [OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Previous message:</strong> <a href="29150.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29152.php">Gilles Gouaillardet: "Re: [OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Reply:</strong> <a href="29152.php">Gilles Gouaillardet: "Re: [OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to install openmpi-dev-4010-g6c9d65c on my &quot;SUSE Linux
<br>
Enterprise Server 12 (x86_64)&quot; with Sun C 5.14 beta. Unfortunately
<br>
&quot;make&quot; breaks with the following error.
<br>
<p>make[2]: Entering directory '/export2/src/openmpi-master/openmpi-dev-4010-g6c9d6
<br>
&nbsp;&nbsp;&nbsp;GENERATE mpi-ignore-tkr-sizeof.h
<br>
&nbsp;&nbsp;&nbsp;GENERATE mpi-ignore-tkr-sizeof.f90
<br>
&nbsp;&nbsp;&nbsp;PPFC     mpi-ignore-tkr.lo
<br>
&nbsp;&nbsp;&nbsp;FCLD     libmpi_usempi_ignore_tkr.la
<br>
f90: Warning: Option -shared passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -soname passed to ld, if ld is invoked, ignored otherwise
<br>
/usr/bin/ld: unrecognized option '-path'
<br>
/usr/bin/ld: use the --help option for usage information
<br>
Makefile:1909: recipe for target 'libmpi_usempi_ignore_tkr.la' failed
<br>
make[2]: *** [libmpi_usempi_ignore_tkr.la] Error 2
<br>
make[2]: Leaving directory '/export2/src/openmpi-master/openmpi-dev-4010-g6c9d65
<br>
Makefile:3433: recipe for target 'all-recursive' failed
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory '/export2/src/openmpi-master/openmpi-dev-4010-g6c9d65
<br>
Makefile:1898: recipe for target 'all-recursive' failed
<br>
make: *** [all-recursive] Error 1
<br>
loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 132
<br>
<p><p>loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 135 ld -version
<br>
GNU ld (GNU Binutils; SUSE Linux Enterprise 12) 2.25.0
<br>
Copyright (C) 2014 Free Software Foundation, Inc.
<br>
This program is free software; you may redistribute it under the terms of
<br>
the GNU General Public License version 3 or (at your option) a later version.
<br>
This program has absolutely no warranty.
<br>
loki openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 136
<br>
<p><p>I could built it with &quot;Sun C 5.13&quot;. Can somebody fix the problem? Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29152.php">Gilles Gouaillardet: "Re: [OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Previous message:</strong> <a href="29150.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29152.php">Gilles Gouaillardet: "Re: [OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Reply:</strong> <a href="29152.php">Gilles Gouaillardet: "Re: [OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
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
