<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 12:35:28 2007" -->
<!-- isoreceived="20071017163528" -->
<!-- sent="Wed, 17 Oct 2007 09:35:24 -0700" -->
<!-- isosent="20071017163524" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling OpenMPI for i386 on a x86_64" -->
<!-- id="df8c8a6d0710170935red13cfat256f3af281896228_at_mail.gmail.com" -->
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
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 12:35:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4232.php">Vittorio Zaccaria: "[OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>Previous message:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4234.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Reply:</strong> <a href="4234.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello:
<br>
<p>I'm trying to rebuild the CentOS OpenMPI rpm (to add torque support)
<br>
on my x86_64 cluster.  I was able to build 64-bit binaries fine, but
<br>
CentOS wants the 32-bit libs and -devel portions installed as well for
<br>
full compatability.  In this area, I'm running into trouble.
<br>
<p>When I try and build the binary with the --target i386 option, the
<br>
configure script fails on the Fortran 90 options:
<br>
<p>*** Fortran 90/95 compiler
<br>
checking for x86_64-redhat-linux-gnu-gfortran... no
<br>
checking for x86_64-redhat-linux-gnu-f95... no
<br>
checking for x86_64-redhat-linux-gnu-fort... no
<br>
checking for x86_64-redhat-linux-gnu-xlf95... no
<br>
checking for x86_64-redhat-linux-gnu-ifort... no
<br>
checking for x86_64-redhat-linux-gnu-ifc... no
<br>
checking for x86_64-redhat-linux-gnu-efc... no
<br>
checking for x86_64-redhat-linux-gnu-pgf95... no
<br>
checking for x86_64-redhat-linux-gnu-lf95... no
<br>
checking for x86_64-redhat-linux-gnu-f90... no
<br>
checking for x86_64-redhat-linux-gnu-xlf90... no
<br>
checking for x86_64-redhat-linux-gnu-pgf90... no
<br>
checking for x86_64-redhat-linux-gnu-epcf90... no
<br>
checking for gfortran... gfortran
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether gfortran accepts -g... yes
<br>
checking if Fortran compiler works... yes
<br>
checking whether gfortran and gfortran compilers are compatible... yes
<br>
checking for Fortran flag to compile .f files... none
<br>
checking for Fortran flag to compile .f90 files... none
<br>
checking for Fortran 90 compiler module include flag... -I
<br>
checking if Fortran 90 compiler supports LOGICAL... yes
<br>
checking size of Fortran 90 LOGICAL... ./configure: line 34070:  7262
<br>
Segmentation fault      ./conftest 1&gt;&amp;5 2&gt;&amp;1
<br>
configure: error: Could not determine size of LOGICAL
<br>
<p>Any suggestions?
<br>
<p>Thanks!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4232.php">Vittorio Zaccaria: "[OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>Previous message:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4234.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Reply:</strong> <a href="4234.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
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
