<?
$subject_val = "[OMPI devel] testing if Fortran compiler likes the C++ exception flags";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 20 22:01:30 2012" -->
<!-- isoreceived="20120421020130" -->
<!-- sent="Fri, 20 Apr 2012 22:01:17 -0400" -->
<!-- isosent="20120421020117" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] testing if Fortran compiler likes the C++ exception flags" -->
<!-- id="4F9214ED.1070801_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="27C56E91-32C3-4F69-AD0B-556223FD48AC_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] testing if Fortran compiler likes the C++ exception flags<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-20 22:01:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10897.php">Jeffrey Squyres: "Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<li><strong>Previous message:</strong> <a href="10895.php">Jeffrey Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10890.php">Jeffrey Squyres: "[OMPI devel] Fortran merge complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10897.php">Jeffrey Squyres: "Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<li><strong>Reply:</strong> <a href="10897.php">Jeffrey Squyres: "Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is related to the &quot;Fortran merge.&quot;
<br>
<p>Last night, Oracle MTT tests couldn't build the trunk (r26307) with 
<br>
Intel compilers.  Specifically, configure fails with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking to see if Fortran compiler likes the C++ exception flags... no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure: WARNING: C++ exception flags are different between the C 
<br>
and Fortran compilers; this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure script cannot currently handle this scenario.  Either 
<br>
disable C++ exception support or send mail to the Open MPI users list.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure: error: *** Cannot continue
<br>
<p>Looking in the config.log file, I see this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure:30518: checking to see if Fortran compiler likes the C++ 
<br>
exception flags
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure:30538: icc -c -O3 -DNDEBUG -Wall -static-intel -m32 
<br>
-finline-functions -fno-strict-aliasing -restrict -fexceptions  
<br>
conftest.c &gt;&amp;5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;conftest.c(223): error: identifier &quot;INTEGER&quot; is undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>Looks like the test is failing because configure is trying to compile 
<br>
Fortran source code in a *.c file with the C compiler.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10897.php">Jeffrey Squyres: "Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<li><strong>Previous message:</strong> <a href="10895.php">Jeffrey Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10890.php">Jeffrey Squyres: "[OMPI devel] Fortran merge complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10897.php">Jeffrey Squyres: "Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<li><strong>Reply:</strong> <a href="10897.php">Jeffrey Squyres: "Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
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
