<?
$subject_val = "[OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 11:31:21 2009" -->
<!-- isoreceived="20090409153121" -->
<!-- sent="Thu, 9 Apr 2009 17:31:16 +0200" -->
<!-- isosent="20090409153116" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="[OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022" -->
<!-- id="b87c422a0904090831q56a98e67w5000c90a94bf8a37_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 11:31:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8848.php">Tsung Han Shie: "[OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<li><strong>Previous message:</strong> <a href="8846.php">Ralph Castain: "Re: [OMPI users] mpirun self,sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8850.php">Gus Correa: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Reply:</strong> <a href="8850.php">Gus Correa: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
As failure to find &quot;limits.h&quot; in my attempted compilations of Amber of
<br>
th fast few days (amd64 lenny, openmpi 1.3.1, intel compilers
<br>
10.1.015) is probably (or I hope so) a bug of the version used of
<br>
intel compilers (I made with debian the same observations reported
<br>
for gentoo, <a href="http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/">http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/</a>).
<br>
<p>I made a deb package of 10.1.022, icc and ifort.
<br>
<p>./configure CC icc, CXX icp, F77 and FC ifort --with-libnuma=/usr (not
<br>
/usr/lib so that the numa.h issue is not raised), &quot;make clean&quot;, and
<br>
&quot;mak install&quot; gave no error signals. However, the compilation tests in
<br>
the examples did not pass and I really don't understand why.
<br>
<p>The error, with both connectivity_c and hello_c (I was operating on
<br>
the parallel computer deb64 directly and have access to everything
<br>
there) was failure to find a shared library, libimf.so
<br>
<p># dpkg --search libimf.so
<br>
&nbsp;&nbsp;&nbsp;/opt/intel/fce/10.1.022/lib/libimf.so  (the same for cce)
<br>
<p>which path seems to be correctly sourced by iccvars.sh and
<br>
ifortvars.sh (incidentally, both files are -rw-r--r-- root root;
<br>
correct that non executable?)
<br>
<p>echo $LD_LIBRARY_PATH
<br>
returned, inter alia,
<br>
/opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1.022/lib:/opt/intel/fce/10.1.022/lib
<br>
(why twice the mkl?)
<br>
<p>I surely miss to understand something fundamental. Hope other eyes see better
<br>
<p>A kind person elsewhere suggested me on passing &quot;The use of -rpath
<br>
during linking is highly recommended as opposed to setting
<br>
LD_LIBRARY_PATH at run time, not the least because it hardcodes the
<br>
paths to the &quot;right&quot; library files in the executables themselves&quot;
<br>
Should this be relevant to the present issue, where to learn about
<br>
-rpath linking?
<br>
<p>thanks
<br>
francesco pietra
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8848.php">Tsung Han Shie: "[OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<li><strong>Previous message:</strong> <a href="8846.php">Ralph Castain: "Re: [OMPI users] mpirun self,sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8850.php">Gus Correa: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Reply:</strong> <a href="8850.php">Gus Correa: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
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
