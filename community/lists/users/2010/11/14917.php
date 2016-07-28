<?
$subject_val = "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 14:53:19 2010" -->
<!-- isoreceived="20101129195319" -->
<!-- sent="Mon, 29 Nov 2010 11:53:12 -0800" -->
<!-- isosent="20101129195312" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits" -->
<!-- id="4CF404A8.6010906_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF3FF74.80201_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 14:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14918.php">Gus Correa: "Re: [OMPI users] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14916.php">Nehemiah Dacres: "[OMPI users] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14915.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14931.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14931.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/29/2010 11:31 AM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Mauricio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check if you have icc (in the Intel compiler bin 
</span><br>
<span class="quotelev1">&gt; directory/subdirectories).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check also if it is in your PATH environment variable.
</span><br>
<span class="quotelev1">&gt; &quot;which icc&quot; will tell.
</span><br>
<span class="quotelev1">&gt; If not, add it to PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, the right way to do it
</span><br>
<span class="quotelev1">&gt; is to run the Intel scripts to set the whole compiler environment,
</span><br>
<span class="quotelev1">&gt; not only PATH.
</span><br>
<span class="quotelev1">&gt; The scripts should be called something like iccvars.csh  iccvars.sh 
</span><br>
<span class="quotelev1">&gt; for C/C++ and  ifortvars.csh  ifortvars.sh for Fortran, and are also 
</span><br>
<span class="quotelev1">&gt; in the Intel bin directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can source these scripts in your .cshrc/.bashrc file,
</span><br>
<span class="quotelev1">&gt; using the correct shell (.sh if you use [ba]sh, .csh if you use [t]csh).
</span><br>
<span class="quotelev1">&gt; This is in the Intel compiler documentation, take a look.
</span><br>
For the icc version mentioned, there is a compilervars.[c]sh which takes 
<br>
care of both C++ and Fortran (if present), as do either of the iccvars 
<br>
or ifortvars, when the compilers are installed in the same directory.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, you can compile OpenMPI with gcc,g++ and gfortran, if you want.
</span><br>
<span class="quotelev1">&gt; If they are not yet installed in your Ubuntu, you can get them with 
</span><br>
<span class="quotelev1">&gt; apt-get, or whatever Ubuntu uses to get packages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
icc ought to work interchangeably with gcc, provided the same g++ 
<br>
version is always on PATH. icc doesn't work without the g++.  Thus, it 
<br>
is entirely reasonable to build openmpi with gcc and use either gcc or 
<br>
icc to build the application.  gfortran and ifort, however, involve 
<br>
incompatible run-time libraries, and the openmpi fortran libraries won't 
<br>
be interchangeable.
<br>
<p>You must take care not to mix 32- and 64-bit compilers/libraries.  
<br>
Normally you would build everything 64-bit, both openmpi and the 
<br>
application.  Ubuntu doesn't follow the standard scheme for location of 
<br>
32-bit vs. 64-bit compilers and libraries, but the Intel compiler 
<br>
version you mentioned should resolve this automatically.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14918.php">Gus Correa: "Re: [OMPI users] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14916.php">Nehemiah Dacres: "[OMPI users] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14915.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14931.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14931.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
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
