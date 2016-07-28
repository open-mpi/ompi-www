<?
$subject_val = "[OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 17:45:59 2011" -->
<!-- isoreceived="20110830214559" -->
<!-- sent="Tue, 30 Aug 2011 23:45:48 +0200" -->
<!-- isosent="20110830214548" -->
<!-- name="Fabien" -->
<!-- email="potiolot_at_[hidden]" -->
<!-- subject="[OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'" -->
<!-- id="BAY163-ds3CEDD50F2F838BFDB787ED5170_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'<br>
<strong>From:</strong> Fabien (<em>potiolot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-30 17:45:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17127.php">Faisal Shahzad: "[OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>Previous message:</strong> <a href="17125.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17128.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Reply:</strong> <a href="17128.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>I&#146;m trying to compile Open-MPI 1.4.3 using {MinGW;CMake} on a Vista-32-Bits.
<br>
I&#146;m interested in running in parallel a fortran program (compiled with
<br>
C:\MINGW\bin\gfortran.exe )
<br>
<p>I&#146;m aware that a binary package has been released but &#150; unfortunately &#150; it
<br>
has been configured with the Intel compiler (ifort).
<br>
<p>&nbsp;
<br>
<p>So, I configured and generated solution with MinGW makefiles and Native
<br>
compilers.
<br>
<p>Then compiling the generated solutions with mingw32-make leads to the
<br>
following errors :
<br>
<p>1/ config.h is requested in &#133;openmpi-1.4.3\opal\event but not found.
<br>
<p>&#240;  Solved by adding config.h from &#133;openmpi-1.4.3\opal\event\WIN32-Code
<br>
<p>2/ Then : error: redefinition of `struct timezone' &#133; error: conflicting
<br>
types for 'gettimeofday' &#133; error: conflicting types for 'gettimeofday'
<br>
<p>&#240;  Any idea would be more than welcome.
<br>
<p>I&#146;m aware that it has been addressed before in
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/06/9622.php">http://www.open-mpi.org/community/lists/users/2009/06/9622.php</a>.
<br>
<p>&nbsp;
<br>
<p>3/ I also tried to try mingw32-gcc/g++/gfortran.exe compilers. Without
<br>
success.
<br>
<p>4/ I also tried with Visual Studio 2010 without success. I only have Visual
<br>
Studio C++ Express&#133;
<br>
<p>&#240;  Will I be able to build mpif90/mpif77/orterun/mpirun with these Visual
<br>
Studio makefiles coupled with MinGW compilers?
<br>
<p>&nbsp;
<br>
<p>Thanks for your attention &amp; Best regards,
<br>
<p>&nbsp;
<br>
<p>Fabien Decung
<br>
<p>&nbsp;
<br>
<p>Configurations &amp; Tools : 
<br>
<p>-          Open-MPI : 1.4.3
<br>
<p>-          MinGW : latest stable (08/2011), using GCC 4.5.2 &amp; C:\MINGW\bin
<br>
has correctly been updated in PATH.
<br>
<p>-          CMake : 2.8.3
<br>
<p>-           
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17126/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17127.php">Faisal Shahzad: "[OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>Previous message:</strong> <a href="17125.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17128.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Reply:</strong> <a href="17128.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
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
