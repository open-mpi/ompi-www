<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 09:53:38 2006" -->
<!-- isoreceived="20060224145338" -->
<!-- sent="Fri, 24 Feb 2006 15:53:21 +0100" -->
<!-- isosent="20060224145321" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95" -->
<!-- id="200602241553.22249.Keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="43FF177B.1030807_at_obspm.fr" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 09:53:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Previous message:</strong> <a href="0700.php">Benoit Semelin: "[OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>In reply to:</strong> <a href="0700.php">Benoit Semelin: "[OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Reply:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello dear Benoit,
<br>
On Friday 24 February 2006 15:26, Benoit Semelin wrote:
<br>
<span class="quotelev1">&gt; The configuring script fails alltogether with intel fortran. That's
</span><br>
<span class="quotelev1">&gt; presumably because intel fortran works on opterons in 32 bits mode only.
</span><br>
Could You please email the config.log file?
<br>
Also, it would be interesting what version of intel-compiler You are using.
<br>
<p><span class="quotelev1">&gt; The installation works fine with g95 and gfortran (provided I specify
</span><br>
<span class="quotelev1">&gt; the 64 library in LD_LIBRARY_PATH in the case of gfortran)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But then, when I compile my code with mpif90, it takes about 15 minutes.
</span><br>
Can You strace, on where the compiler is hanging?
<br>
<p><span class="quotelev1">&gt; I have the same result on another (quadri dual-core) opteron workstation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand compilation takes only about 10 seconds on a pentium 4
</span><br>
<span class="quotelev1">&gt; 2.6 Ghz PC ( open-mpi + ifort).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone tried open-mpi on Opteron ? Did you have the same problem?
</span><br>
Yes, it is tested to compile and run user code (C and some fortran) on Opteron 
<br>
with gcc, pathscale and pgi compilers, but not intel.
<br>
<p>Thanks,
<br>
Rainer
<br>
<p>PS: When compiling OpenMPI are You using a combination of gcc for C/C++ and 
<br>
ifort for Fortan compilation?
<br>
This will not work, as the compilers have different views on e.g. boolean 
<br>
variables and values, so parameter passing from Your code into OpenMPI will 
<br>
be botched up. Currently, You may only use C / Fortran Compiler from one 
<br>
vendor.
<br>
<pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
  High Performance Computing     Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)        Fax: ++49 (0)711-685 5832
  POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  ACTUAL:Allmandring 30, R. O.030      AIM:rusraink
  70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Previous message:</strong> <a href="0700.php">Benoit Semelin: "[OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>In reply to:</strong> <a href="0700.php">Benoit Semelin: "[OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Reply:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
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
