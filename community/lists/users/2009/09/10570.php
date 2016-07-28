<?
$subject_val = "[OMPI users] Problem specifying compiler (pgi)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 09:28:43 2009" -->
<!-- isoreceived="20090904132843" -->
<!-- sent="Fri, 4 Sep 2009 07:28:37 -0600" -->
<!-- isosent="20090904132837" -->
<!-- name="Ben Mayer" -->
<!-- email="bmayer_at_[hidden]" -->
<!-- subject="[OMPI users] Problem specifying compiler (pgi)" -->
<!-- id="66F175CD-450F-45F8-A1BE-21E7FE32CBD2_at_ucar.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Problem specifying compiler (pgi)<br>
<strong>From:</strong> Ben Mayer (<em>bmayer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 09:28:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10571.php">Greg Fischer: "[OMPI users] error compiling OpenMPI 1.3.3 with Intel compiler suite 11.1 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10569.php">guosong: "Re: [OMPI users] Help!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10572.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Reply:</strong> <a href="10572.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Reply:</strong> <a href="10573.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using PGI 9.0-1 to compile OpenMPI 1.3.3. I use the following  
<br>
command to configure OpenMPI:
<br>
<p>./configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/shared/ben/ 
<br>
openmpi-1.3.3
<br>
<p>The PGI compilers are in the path. The make and make install complete  
<br>
successfully. The problem that I am having is that why I actually run  
<br>
mpif90 (or any of other mpi* executables) it returns a message like  
<br>
&quot;gfortran: no input files&quot;. When I compiler when those files it is  
<br>
calling gcc compilers. There is also some vt* files (vtf90, etc) which  
<br>
appear to be for VampirTrace integration. They point to the proper pgi  
<br>
compilers.
<br>
<p>Any idea what is going on here and how to fix it?
<br>
<p>Thank you,
<br>
<p>Ben Mayer
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10570/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10571.php">Greg Fischer: "[OMPI users] error compiling OpenMPI 1.3.3 with Intel compiler suite 11.1 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10569.php">guosong: "Re: [OMPI users] Help!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10572.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Reply:</strong> <a href="10572.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Reply:</strong> <a href="10573.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
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
