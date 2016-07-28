<?
$subject_val = "[OMPI users] Fortran code generation error on 1.5 rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  8 16:17:11 2010" -->
<!-- isoreceived="20100808201711" -->
<!-- sent="Sun, 08 Aug 2010 14:16:59 -0600" -->
<!-- isosent="20100808201659" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran code generation error on 1.5 rc5" -->
<!-- id="4C5F10BB.4070902_at_khubla.com" -->
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
<strong>Subject:</strong> [OMPI users] Fortran code generation error on 1.5 rc5<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-08 16:16:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13927.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13932.php">Shiqing Fan: "Re: [OMPI users] Fortran code generation error on 1.5 rc5"</a>
<li><strong>Reply:</strong> <a href="13932.php">Shiqing Fan: "Re: [OMPI users] Fortran code generation error on 1.5 rc5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi all,
<br>
<p>There's a code generation bug in the CMake/Visual Studio build of rc 5 
<br>
on VS 2008.  A release build, with static libs, F77 and F90 support 
<br>
gives an error at line 91 in mpif-config.h :
<br>
<p>parameter (MPI_STATUS_SIZE=)
<br>
<p>This obviously makes the compiler unhappy.
<br>
<p>In older trunk builds this was
<br>
<p>parameter (MPI_STATUS_SIZE=5)
<br>
<p>Damien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13927.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13932.php">Shiqing Fan: "Re: [OMPI users] Fortran code generation error on 1.5 rc5"</a>
<li><strong>Reply:</strong> <a href="13932.php">Shiqing Fan: "Re: [OMPI users] Fortran code generation error on 1.5 rc5"</a>
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
