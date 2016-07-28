<?
$subject_val = "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 10:28:30 2008" -->
<!-- isoreceived="20080305152830" -->
<!-- sent="Wed, 5 Mar 2008 10:28:19 -0500" -->
<!-- isosent="20080305152819" -->
<!-- name="Frank Tabakin" -->
<!-- email="tabakin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3" -->
<!-- id="5F8514C3-455E-475F-93A2-F4825A3622B1_at_pitt.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3<br>
<strong>From:</strong> Frank Tabakin (<em>tabakin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 10:28:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5137.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Previous message:</strong> <a href="5135.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Maybe in reply to:</strong> <a href="5126.php">Chase Latta: "[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5137.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Reply:</strong> <a href="5137.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used the info provided on the openmpi users list and used the command
<br>
<p>./configure --prefix=/usr/local --enable-mpi-f77 --enable-mpi-f90  
<br>
F77=gfortran FC=gfortran FFLAGS=&quot;-m32 -std=legacy&quot; --with-wrapper- 
<br>
fflags=&quot;-m32 -std=legacy&quot;  --with-mpi-f90-size=medium --enable-mpirun- 
<br>
prefix-by-default FCFLAGS=&quot;-m32&quot; --with-wrapper-fcflags=&quot;-m32&quot;
<br>
<p>and got
<br>
/usr/local/bin/ompi_info
<br>
....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (single underscore)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;Fortran90 bindings size: medium
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;&nbsp;Fortran77 compiler abs: /usr/local/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;&nbsp;Fortran90 compiler abs: /usr/local/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
--------
<br>
<p>So this looks good.
<br>
Thanks for the postings.
<br>
<p>Now I plan to try to get it working with Absoft and maybe with POOCH
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5137.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Previous message:</strong> <a href="5135.php">Jeff Squyres: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Maybe in reply to:</strong> <a href="5126.php">Chase Latta: "[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5137.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Reply:</strong> <a href="5137.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
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
