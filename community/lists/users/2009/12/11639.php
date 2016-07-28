<?
$subject_val = "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 27 14:32:50 2009" -->
<!-- isoreceived="20091227193250" -->
<!-- sent="Sun, 27 Dec 2009 14:32:40 -0500" -->
<!-- isosent="20091227193240" -->
<!-- name="Aaron Knister" -->
<!-- email="aaron.knister_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi" -->
<!-- id="8156B62A-EA75-450C-AB27-5165D2B17EB6_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="351CB273-21AD-4EAF-B050-B0762A6B5C22_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi<br>
<strong>From:</strong> Aaron Knister (<em>aaron.knister_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-27 14:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11640.php">ilya zelenchuk: "[OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11638.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<li><strong>In reply to:</strong> <a href="11638.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot to mention that the undefined references in the shared library only occur of the f90 module was compiled with the &quot;-g&quot; option to pgf90.
<br>
<p>On Dec 27, 2009, at 2:28 PM, Aaron Knister wrote:
<br>
<p><span class="quotelev1">&gt; I don't think this is actually OpenMPI's problem. I know this is getting slightly off topic but before I take this to the PGI folks I'd like to make sure it isn't actually an OpenMPI problem after all.  Here's my best shot at explaining what I think is going on. Please excuse my rusty terminology.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If one uses the PGI compilers to build a shared library based on an f90 module the resulting object file and shared library contain references to any subroutines defined inside any interfaces defined in said module. This can be verified with nm. If you then link against the produced shared library the compilation will fail with &quot;undefined references&quot; to any of the subroutines that were contained inside any defined interfaces (that aren't defined within the code being compiled).  This doesn't seem to happen with the GNU or Intel compilers. I have a small test case that I think reproduces the problem here. Since I'm not by any means a fortran expert I was wondering if somebody on the list who is a little more versed in fortran could verify that this code is correct and should compile (it does with gnu and intel compilers). The makefile can be found here <a href="http://pastebin.com/f7f320b97">http://pastebin.com/f7f320b97</a> and the source files are below. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mymod.f90:
</span><br>
<span class="quotelev1">&gt;      module mymod
</span><br>
<span class="quotelev1">&gt;         interface my_interface
</span><br>
<span class="quotelev1">&gt;            subroutine my_subroutine
</span><br>
<span class="quotelev1">&gt;               integer i
</span><br>
<span class="quotelev1">&gt;            end subroutine my_subroutine
</span><br>
<span class="quotelev1">&gt;         end interface
</span><br>
<span class="quotelev1">&gt;      end module 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main.f90:
</span><br>
<span class="quotelev1">&gt;      program main
</span><br>
<span class="quotelev1">&gt;         print *, &quot;hello world&quot;
</span><br>
<span class="quotelev1">&gt;      end program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 24, 2009, at 6:15 PM, Aaron Knister wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm running into a strange problem with openmpi and the pgi compiler (version 9.0-4). I first stumbled across this when using petsc but have reduced it to a few lines of test code to demonstrate the problem I'm seeing. Essentially it appears as if a shared library contains a fortran-compiled object file that a) was built with &quot;-g&quot; and b) contains &quot;use mpi&quot; will produce errors similar to these when it is linked against:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./libfoo.so: undefined reference to `mpi_sizeof3dch_'
</span><br>
<span class="quotelev2">&gt;&gt; ./libfoo.so: undefined reference to `mpi_sizeof4dl_'
</span><br>
<span class="quotelev2">&gt;&gt; ./libfoo.so: undefined reference to `mpi_sizeof2dl_'
</span><br>
<span class="quotelev2">&gt;&gt; ./libfoo.so: undefined reference to `mpi_sizeof2dch_'
</span><br>
<span class="quotelev2">&gt;&gt; ./libfoo.so: undefined reference to `mpi_sizeof0dl_'
</span><br>
<span class="quotelev2">&gt;&gt; ./libfoo.so: undefined reference to `mpi_sizeof1dch_'
</span><br>
<span class="quotelev2">&gt;&gt; ./libfoo.so: undefined reference to `mpi_sizeof3dl_'
</span><br>
<span class="quotelev2">&gt;&gt; ./libfoo.so: undefined reference to `mpi_sizeof1dl_'
</span><br>
<span class="quotelev2">&gt;&gt; ./libfoo.so: undefined reference to `mpi_sizeof0dch_'
</span><br>
<span class="quotelev2">&gt;&gt; ./libfoo.so: undefined reference to `mpi_sizeof4dch_'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Take the following code-
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; libfoo.f90:
</span><br>
<span class="quotelev2">&gt;&gt;     subroutine printhi()
</span><br>
<span class="quotelev2">&gt;&gt;        use mpi
</span><br>
<span class="quotelev2">&gt;&gt; !	do some mpi stuff
</span><br>
<span class="quotelev2">&gt;&gt;       print *, &quot;Hello&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     end
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; main.f90:
</span><br>
<span class="quotelev2">&gt;&gt;     program myprog
</span><br>
<span class="quotelev2">&gt;&gt;         call printhi()
</span><br>
<span class="quotelev2">&gt;&gt;     end 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And to compile (using openmpi built with pgi):
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -g -c -fPIC libfoo.f90
</span><br>
<span class="quotelev2">&gt;&gt; cc -shared -Wl -o libfoo.so libfoo.o
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -g main.f90 -lfoo -L. -o main
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I remove the &quot;-g&quot; from the first mpif90 command, then the compile finishes and there are no errors about undefined references.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This occurs with openmpi-1.4 but ONLY with the pgi fortran compilers. I can't reproduce this behavior with either gnu gfortran or intel's ifort. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if this is a pgi problem or an openmpi problem or if I'm missing something.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be much appreciated!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Aaron
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11640.php">ilya zelenchuk: "[OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11638.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
<li><strong>In reply to:</strong> <a href="11638.php">Aaron Knister: "Re: [OMPI users] strange undefined references to mpi_sizeofXXX_ errors with pgi"</a>
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
