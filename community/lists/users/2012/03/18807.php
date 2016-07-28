<?
$subject_val = "[OMPI users] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 10:07:04 2012" -->
<!-- isoreceived="20120320140704" -->
<!-- sent="Tue, 20 Mar 2012 14:06:56 +0000" -->
<!-- isosent="20120320140656" -->
<!-- name="Gunter, David O" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI users] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?" -->
<!-- id="8F7B8C59-0ED3-46B1-AA3F-1F50216C5DA3_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?<br>
<strong>From:</strong> Gunter, David O (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 10:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18808.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18806.php">Jeffrey Squyres: "Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18808.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18808.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I need to build ompi-1.4.3 (or the newer 1.4.5) with an older Intel 10.0 compiler, but on a newer system in which the default g++ headers are incompatible with Intel. Thus the C and Fortran compilers function normally but the Intel C++ compiler fails to build even a simple &quot;hello world&quot; code.
<br>
<p>Is there a way to build OMPI without a C++ compiler?  I tried using the --disable-mpi-cxx and --disable-mpi-cxx-seek flags but these are just for the resulting bindings. The configure step still continues to search for a working C++ compiler.
<br>
<p>Yes, I know I can upgrade the Intel compiler but we don't have that as an option in this case.
<br>
<p>Thanks,
<br>
david
<br>
<pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18808.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18806.php">Jeffrey Squyres: "Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18808.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18808.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
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
