<?
$subject_val = "[OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 15:57:15 2010" -->
<!-- isoreceived="20100825195715" -->
<!-- sent="Wed, 25 Aug 2010 12:56:50 -0700" -->
<!-- isosent="20100825195650" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C757582.7020707_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 15:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8360.php">Paul H. Hargrove: "[OMPI devel] Some positive test results (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8358.php">Paul H. Hargrove: "[OMPI devel] VT &quot;platform&quot; selection needs documentation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8363.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8363.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In both 1.5rc5 and 1.4.3rc1, README says:
<br>
- Open MPI does not support the Sparc v8 CPU target, which is the
<br>
&nbsp;&nbsp;default on Sun Solaris.  The v8plus (32 bit) or v9 (64 bit)
<br>
&nbsp;&nbsp;targets must be used to build Open MPI on Solaris.  This can be
<br>
&nbsp;&nbsp;done by including a flag in CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS,
<br>
&nbsp;&nbsp;-xarch=v8plus for the Sun compilers, -mv8plus for GCC.
<br>
<p>However, the -mv8plus flag DOES NOT work for me.
<br>
The following occurs for both 1.5rc5 and 1.4.3rc1:
<br>
<p>$ uname -a
<br>
SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
<br>
<p>$ gcc --version
<br>
gcc (GCC) 3.3.2
<br>
Copyright (C) 2003 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>$ [path_to]/configure --disable-mpi-f77 --disable-mpi-f90 
<br>
CFLAGS=-mv8plus CXXFLAGS=-mv8plus
<br>
[...]
<br>
*** Assembler
<br>
[...]
<br>
checking if have Sparc v8+/v9 support... no
<br>
configure: WARNING: Sparc v8 target is not supported in this release of 
<br>
Open MPI.
<br>
configure: WARNING: You must specify the target architecture v8plus
<br>
configure: WARNING: (cc: -xarch=v8plus, gcc: -mcpu=v9) for CFLAGS, CXXFLAGS,
<br>
configure: WARNING: FFLAGS, and FCFLAGS to compile Open MPI in 32 bit 
<br>
mode on
<br>
configure: WARNING: Sparc processors
<br>
configure: error: Can not continue.
<br>
<p><p>Following the recommendation from configure:
<br>
&nbsp;&nbsp;$ [path_to]/configure --disable-mpi-f77 --disable-mpi-f90 
<br>
CFLAGS=-mcpu=v9 CXXFLAGS=-mcpu=v9
<br>
DOES work for both of the current RCs.
<br>
<p>So, I see a few possibilities:
<br>
<p>1) -mv8plus SHOULD work (as -xarch=v8plus appears to w/ Suc C 5.10) but 
<br>
configure is unconditionally too strict.
<br>
OR
<br>
2) My gcc is older than other have tested and configure is mistakenly 
<br>
thinking the ABI is wrong.
<br>
OR
<br>
3) -mcpu=v9 is the proper incantation and README needs correction.
<br>
<p>No matter which of the above is correct, I suspect REAME and configure 
<br>
need to give the user the same information.
<br>
<p>-Paul
<br>
<p>P.S.  I can provide temporary machine access if needed to resolve this.
<br>
P.P.S.  I am /still/ not finished testing all the platforms available to 
<br>
me ;-)
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
<li><strong>Next message:</strong> <a href="8360.php">Paul H. Hargrove: "[OMPI devel] Some positive test results (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8358.php">Paul H. Hargrove: "[OMPI devel] VT &quot;platform&quot; selection needs documentation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8363.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8363.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
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
