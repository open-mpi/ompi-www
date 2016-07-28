<?
$subject_val = "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 15:29:41 2009" -->
<!-- isoreceived="20090409192941" -->
<!-- sent="Thu, 09 Apr 2009 15:29:31 -0400" -->
<!-- isosent="20090409192931" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022" -->
<!-- id="49DE4C9B.1020303_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b87c422a0904090831q56a98e67w5000c90a94bf8a37_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 15:29:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8851.php">Shaun Jackman: "[OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8849.php">Ralph Castain: "Re: [OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<li><strong>In reply to:</strong> <a href="8847.php">Francesco Pietra: "[OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8860.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Reply:</strong> <a href="8860.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Francesco
<br>
<p>Francesco Pietra wrote:
<br>
<span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; As failure to find &quot;limits.h&quot; in my attempted compilations of Amber of
</span><br>
<span class="quotelev1">&gt; th fast few days (amd64 lenny, openmpi 1.3.1, intel compilers
</span><br>
<span class="quotelev1">&gt; 10.1.015) is probably (or I hope so) a bug of the version used of
</span><br>
<span class="quotelev1">&gt; intel compilers (I made with debian the same observations reported
</span><br>
<span class="quotelev1">&gt; for gentoo, <a href="http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/">http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I made a deb package of 10.1.022, icc and ifort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC icc, CXX icp, 
</span><br>
<p>The Intel C++ compiler is called icpc, not icp.
<br>
Is this a typo on your message, or on the actual configure options?
<br>
<p>F77 and FC ifort --with-libnuma=/usr (not
<br>
<span class="quotelev1">&gt; /usr/lib so that the numa.h issue is not raised), &quot;make clean&quot;, 
</span><br>
<p>If you really did &quot;make clean&quot; you may have removed useful things.
<br>
What did you do, &quot;make&quot; or &quot;make clean&quot;?
<br>
<p>and
<br>
<span class="quotelev1">&gt; &quot;mak install&quot; gave no error signals. However, the compilation tests in
</span><br>
<span class="quotelev1">&gt; the examples did not pass and I really don't understand why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Which compilation tests you are talking about?
<br>
&nbsp;From Amber or from the OpenMPI example programs (connectivity_c and 
<br>
hello_c), or both?
<br>
<p><span class="quotelev1">&gt; The error, with both connectivity_c and hello_c (I was operating on
</span><br>
<span class="quotelev1">&gt; the parallel computer deb64 directly and have access to everything
</span><br>
<span class="quotelev1">&gt; there) was failure to find a shared library, libimf.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>To get the right Intel environment,
<br>
you need to put these commands inside your login files
<br>
(.bashrc or .cshrc), to setup the Intel environment variables correctly:
<br>
<p>source /path/to/your/intel/cce/bin/iccvars.sh
<br>
source /path/to/your/intel/cce/bin/ifortvars.sh
<br>
<p>and perhaps a similar one for mkl.
<br>
(I don't use MKL, I don't know much about it).
<br>
<p>If your home directory is NFS mounted to all the computers you
<br>
use to run parallel programs,
<br>
then the same .bashrc/.csrhc will work on all computers.
<br>
However, if you have a separate home directory on each computer,
<br>
then you need to do this on each of them.
<br>
I.e., you have to include the &quot;source&quot; commands above
<br>
in the .bashrc/.cshrc files on your home directory in EACH computer.
<br>
<p>Also I presume you use bash/sh not tcsh/csh, right?
<br>
Otherwise you need to source iccvars.csh instead of iccvars.sh.
<br>
<p><p><span class="quotelev1">&gt; # dpkg --search libimf.so
</span><br>
<span class="quotelev1">&gt;    /opt/intel/fce/10.1.022/lib/libimf.so  (the same for cce)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which path seems to be correctly sourced by iccvars.sh and
</span><br>
<span class="quotelev1">&gt; ifortvars.sh (incidentally, both files are -rw-r--r-- root root;
</span><br>
<span class="quotelev1">&gt; correct that non executable?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The permissions here are not a problem.
<br>
You are supposed to *source* the files, not to execute them.
<br>
If you execute them instead of sourcing the files,
<br>
your Intel environment will *NOT* be setup.
<br>
<p>BTW, the easy way to check your environment is to type &quot;env&quot; on the
<br>
shell command prompt.
<br>
<p><span class="quotelev1">&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; returned, inter alia,
</span><br>
<span class="quotelev1">&gt; /opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1.022/lib:/opt/intel/fce/10.1.022/lib
</span><br>
<span class="quotelev1">&gt; (why twice the mkl?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hard to tell in which computer you were when you did this,
<br>
and hence what it should affect.
<br>
<p>You man have sourced twice the mkl shell that sets up the MKL 
<br>
environment variables, which would write its library path more than
<br>
once.
<br>
<p>When the environment variables get this much confused,
<br>
with duplicate paths and so on, you may want to logout
<br>
and login again, to start fresh.
<br>
<p>Do you need MKL for Amber?
<br>
If you don't use it, keep things simple, and don't bother about it.
<br>
<p><p><span class="quotelev1">&gt; I surely miss to understand something fundamental. Hope other eyes see better
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Jody helped you run the hello_c program successfully.
<br>
Try to repeat carefully the same steps.
<br>
You should get the same result,
<br>
the OpenMPI test programs should run.
<br>
<p><span class="quotelev1">&gt; A kind person elsewhere suggested me on passing &quot;The use of -rpath
</span><br>
<span class="quotelev1">&gt; during linking is highly recommended as opposed to setting
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH at run time, not the least because it hardcodes the
</span><br>
<span class="quotelev1">&gt; paths to the &quot;right&quot; library files in the executables themselves&quot;
</span><br>
<span class="quotelev1">&gt; Should this be relevant to the present issue, where to learn about
</span><br>
<span class="quotelev1">&gt; -rpath linking?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>If you are talking about Amber,
<br>
you would have to tweak the Makefiles to tweak the linker -rpath.
<br>
And we don't know much about Amber's Makefiles,
<br>
so this may be a very tricky approach.
<br>
<p>If you are talking about the OpenMPI test programs,
<br>
I think it is just a matter of setting the Intel environment variables
<br>
right, sourcing the ifortvars.sh iccvars.sh properly,
<br>
to get the right runtime LD_LIBRARY_PATH.
<br>
<p><span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; francesco pietra
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>I hope this helps.
<br>
Gus Correa
<br>
<p>---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8851.php">Shaun Jackman: "[OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8849.php">Ralph Castain: "Re: [OMPI users] I encoutered Bus Error while running openMPI on IB."</a>
<li><strong>In reply to:</strong> <a href="8847.php">Francesco Pietra: "[OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8860.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Reply:</strong> <a href="8860.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
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
