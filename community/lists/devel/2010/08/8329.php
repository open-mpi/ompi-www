<?
$subject_val = "[OMPI devel] 1.5rc5 build failure w/ icc-10.1.008 for ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 21:34:37 2010" -->
<!-- isoreceived="20100825013437" -->
<!-- sent="Tue, 24 Aug 2010 18:34:17 -0700" -->
<!-- isosent="20100825013417" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5 build failure w/ icc-10.1.008 for ia64" -->
<!-- id="4C747319.9050804_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5 build failure w/ icc-10.1.008 for ia64<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 21:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8330.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 warnings from gcc on OpenSolaris"</a>
<li><strong>Previous message:</strong> <a href="8328.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
An attempt to compile 1.5rc5 on Linux/IA64 w/ icc-10.0.008 failed:
<br>
<p>$ cat /etc/SuSE-release
<br>
SUSE Linux Enterprise Server 10 (ia64)
<br>
VERSION = 10
<br>
PATCHLEVEL = 1
<br>
<p>$ cat /etc/sgi-release
<br>
SGI ProPack 5SP4 for Linux, Build 504r4-0801072302
<br>
<p>$ uname -a
<br>
Linux tg-login3.pople.psc.teragrid.org 
<br>
2.6.16.60-0.29-default-netboot-lustre-1.6.5.1 #23 SMP Thu Sep 10 
<br>
11:35:37 EDT 2009 ia64 ia64 ia64 GNU/Linux
<br>
<p>$ /lib/libc.so.6.1
<br>
GNU C Library development release version 2.4 (20070503), by Roland 
<br>
McGrath et al.
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.
<br>
There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
<br>
PARTICULAR PURPOSE.
<br>
Configured for ia64-suse-linux.
<br>
Compiled by GNU CC version 4.1.2 20070115 (prerelease) (SUSE Linux).
<br>
Compiled on a Linux 2.6.16 system on 2007-05-03.
<br>
Available extensions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crypt add-on version 2.1 by Michael Glad and others
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU Libidn by Simon Josefsson
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU libio by Per Bothner
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIS(YP)/NIS+ NSS modules 0.19 by Thorsten Kukuk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Native POSIX Threads Library by Ulrich Drepper et al
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIND-8.2.3-T5B
<br>
Thread-local storage support included.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/libc/bugs.html">http://www.gnu.org/software/libc/bugs.html</a>&gt;.
<br>
<p>$ icc --version
<br>
icc (ICC) 10.1 20070913
<br>
Copyright (C) 1985-2007 Intel Corporation.  All rights reserved.
<br>
<p>$ [path_to]/openmpi-1.5rc5/configure  CC=icc CXX=icpc F77=ifort FC=ifort
<br>
[...]
<br>
<p>$ make
<br>
[...]
<br>
Making all in asm
<br>
make[2]: Entering directory 
<br>
`/bessemer/hargrove/openmpi-1.5rc5/BLD-icc-10.1.008/opal/asm'
<br>
&nbsp;&nbsp;CC     asm.lo
<br>
rm -f atomic-asm.S
<br>
ln -s &quot;../../../opal/asm/generated/atomic-ia64-linux-nongas.s&quot; atomic-asm.S
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
/tmp/icchjP8pu.s(1) : error A2040: Unexpected token: Unary Diez Operator 
<br>
at: Start
<br>
/tmp/icchjP8pu.s(2) : error A2040: Unexpected token: Unary Diez Operator 
<br>
at: Start
<br>
/tmp/icchjP8pu.s(3) : error A2040: Unexpected token: Unary Diez Operator 
<br>
at: Start
<br>
/tmp/icchjP8pu.s(4) : error A2040: Unexpected token: Unary Diez Operator 
<br>
at: Start
<br>
.libs/atomic-asm.o - 4 error(s), 0 warning(s)
<br>
make[2]: *** [atomic-asm.lo] Error 1
<br>
<p><p>Here is the Assembler section from the configure output, in case it is 
<br>
relevant:
<br>
*** Assembler
<br>
checking dependency style of icc... gcc3
<br>
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
<br>
checking the name lister (/usr/bin/nm -B) interface... BSD nm
<br>
checking for fgrep... /usr/bin/grep -F
<br>
checking if need to remove -g from CCASFLAGS... no
<br>
checking whether to enable smp locks... yes
<br>
checking if .proc/endp is needed... yes
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... objdump
<br>
checking if .note.GNU-stack is needed... no
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels...
<br>
checking prefix for lsym labels... .L
<br>
checking prefix for function in .type... @
<br>
checking if .size is needed... yes
<br>
checking if .align directive takes logarithmic value... no
<br>
checking if icc supports GCC inline assembly... no
<br>
checking if icc supports DEC inline assembly... no
<br>
checking if icc supports XLC inline assembly... no
<br>
checking if icpc supports GCC inline assembly... no
<br>
checking if icpc supports DEC inline assembly... no
<br>
checking if icpc supports XLC inline assembly... no
<br>
checking for assembly format... default-.text-.globl-:--.L-_at_-1-0-1-1-0
<br>
checking for asssembly architecture... IA64
<br>
checking for perl... perl
<br>
checking for pre-built assembly file... yes (atomic-ia64-linux-nongas.s)
<br>
checking for atomic assembly filename... atomic-ia64-linux-nongas.s
<br>
<p><p>I don't know why atomic-ia64-linux-nongas.s has been selected over 
<br>
atomic-ia64-linux.s, but suspect that may be the root of the problem.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8330.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 warnings from gcc on OpenSolaris"</a>
<li><strong>Previous message:</strong> <a href="8328.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
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
