<?
$subject_val = "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 12:38:27 2013" -->
<!-- isoreceived="20130201173827" -->
<!-- sent="Fri, 1 Feb 2013 17:38:20 +0000" -->
<!-- isosent="20130201173820" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting." -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC20EC_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMvdAs+EtYYOSrz6+qFRS=Yd=w-YcDyNnwvqoR5PZVsy1MOYFw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting.<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-01 12:38:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21282.php">Andreas Bok Andersen: "[OMPI users] mmap and MPI_File_Read"</a>
<li><strong>Previous message:</strong> <a href="21280.php">Syed Ahsan Ali: "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="21278.php">Syed Ahsan Ali: "[OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21322.php">Syed Ahsan Ali: "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<li><strong>Reply:</strong> <a href="21322.php">Syed Ahsan Ali: "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is happening is that configure is trying to compile and run a fortran test with gfortran and it is failing because it can't find libgfortran.so.3.  Here's the relevant lines from config.log:
<br>
<p>-----
<br>
configure:28735: gfortran -o conftest   conftest.f  &gt;&amp;5
<br>
configure:28735: $? = 0
<br>
configure:28735: ./conftest
<br>
./conftest: error while loading shared libraries: libgfortran.so.3: cannot open shared object file: No such file or directory
<br>
configure:28735: $? = 127
<br>
configure: program exited with status 127
<br>
configure: failed program was:
<br>
|       program main
<br>
| 
<br>
|       end
<br>
configure:28751: result: no
<br>
configure:28765: error: Could not run a simple Fortran 77 program.  Aborting.
<br>
-----
<br>
<p>Perhaps you need to set your LD_LIBRARY_PATH to point to where libgfortran is located?
<br>
<p>In short: when you can run gfortran manually to compile/run trivial fortran programs, then configure will succeed.
<br>
<p><p>On Feb 1, 2013, at 5:58 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting following error while bulding openmpi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler works... no
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; * It appears that your Fortran 77 compiler is unable to produce working
</span><br>
<span class="quotelev1">&gt; * executables.  A simple test application failed to properly
</span><br>
<span class="quotelev1">&gt; * execute.  Note that this is likely not a problem with Open MPI,
</span><br>
<span class="quotelev1">&gt; * but a problem with the local compiler installation.  More
</span><br>
<span class="quotelev1">&gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev1">&gt; * compiler and what error resulted when the command was executed) is
</span><br>
<span class="quotelev1">&gt; * available in the config.log file in this directory.
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; configure: error: Could not run a simple Fortran 77 program.  Aborting.
</span><br>
<span class="quotelev1">&gt; make: *** No targets specified and no makefile found.  Stop.
</span><br>
<span class="quotelev1">&gt; make: *** No rule to make target `install'.  Stop.
</span><br>
<span class="quotelev1">&gt; [root_at_pmd openmpi-1.6.3]#
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; System has gfortran installed
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21282.php">Andreas Bok Andersen: "[OMPI users] mmap and MPI_File_Read"</a>
<li><strong>Previous message:</strong> <a href="21280.php">Syed Ahsan Ali: "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="21278.php">Syed Ahsan Ali: "[OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21322.php">Syed Ahsan Ali: "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<li><strong>Reply:</strong> <a href="21322.php">Syed Ahsan Ali: "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
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
