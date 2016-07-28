<?
$subject_val = "[OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 31 08:32:22 2011" -->
<!-- isoreceived="20110531123222" -->
<!-- sent="Tue, 31 May 2011 18:02:15 +0530" -->
<!-- isosent="20110531123215" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="[OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)" -->
<!-- id="BANLkTi=fcF-1PcP5DqPb0174=76h3ZmWeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-31 08:32:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16660.php">hi: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16658.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16661.php">Jeff Squyres: "Re: [OMPI users] Windows mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)"</a>
<li><strong>Reply:</strong> <a href="16661.php">Jeff Squyres: "Re: [OMPI users] Windows mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16707.php">Shiqing Fan: "Re: [OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are	set to 0 (zero)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings once again !!!
<br>
<p>Environment:
<br>
OS: Windows 7 64-bit
<br>
Compilers: ifort and cl.exe (both 64-bit)
<br>
CMAKE: version-2.8.4
<br>
OpenMPI: version 1.5.3
<br>
<p>As described in the README.WINDOWS.txt, when performing 'First
<br>
approach:&quot; I am observing following...
<br>
1) via cmake-gui.exe clicked 'Configure' and it shown all config
<br>
options in pink color
<br>
&#160; &#160; see output of this step in attached cmake_gui_output1.txt
<br>
2) then I enabled OMPI_WANT_F77_BINDING and OMPI_WANT_F90_BINDING to
<br>
true and then clicked 'Configure'.
<br>
&#160; &#160; see output of this step in attached cmake_gui_output2.txt
<br>
<p>As you can observe in cmake_gui_output2.txt file, it succeeded on all
<br>
Fortran data types (except INTEGER*16 and REAL*2).
<br>
Now what I am observing is that eventho' fortran compiler supports
<br>
most of the datatypes, but still mpi.h file reports '0' for
<br>
corresponding datatype.
<br>
&lt;from_mpi.h&gt;
<br>
/* Whether we have FORTRAN LOGICAL*1 or not */
<br>
#define OMPI_HAVE_FORTRAN_LOGICAL1 0
<br>
<p>/* Whether we have FORTRAN LOGICAL*2 or not */
<br>
#define OMPI_HAVE_FORTRAN_LOGICAL2 0
<br>
<p>/* Whether we have FORTRAN LOGICAL*4 or not */
<br>
#define OMPI_HAVE_FORTRAN_LOGICAL4 0
<br>
<p>/* Whether we have FORTRAN LOGICAL*8 or not */
<br>
#define OMPI_HAVE_FORTRAN_LOGICAL8 0
<br>
<p>/* Whether we have FORTRAN INTEGER*1 or not */
<br>
#define OMPI_HAVE_FORTRAN_INTEGER1 0
<br>
<p>/* Whether we have FORTRAN INTEGER*16 or not */
<br>
#define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
<p>/* Whether we have FORTRAN INTEGER*2 or not */
<br>
#define OMPI_HAVE_FORTRAN_INTEGER2 0
<br>
<p>/* Whether we have FORTRAN INTEGER*4 or not */
<br>
#define OMPI_HAVE_FORTRAN_INTEGER4 0
<br>
<p>/* Whether we have FORTRAN INTEGER*8 or not */
<br>
#define OMPI_HAVE_FORTRAN_INTEGER8 0
<br>
<p>/* Whether we have FORTRAN REAL*16 or not */
<br>
#define OMPI_HAVE_FORTRAN_REAL16 0
<br>
<p>/* Whether we have FORTRAN REAL*2 or not */
<br>
#define OMPI_HAVE_FORTRAN_REAL2 0
<br>
<p>/* Whether we have FORTRAN REAL*4 or not */
<br>
#define OMPI_HAVE_FORTRAN_REAL4 0
<br>
<p>/* Whether we have FORTRAN REAL*8 or not */
<br>
#define OMPI_HAVE_FORTRAN_REAL8 0
<br>
======
<br>
<p>Any idea on why mpi.h is setting zero for all above fortran datatypes
<br>
despite fortran compiler supports most of the datatypes (see
<br>
cmake_gui_output2.txt)???
<br>
<p>Thank you in advance.
<br>
-Hiral
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16659/cmake_gui_output2.txt">cmake_gui_output2.txt</a>
</ul>
<!-- attachment="cmake_gui_output2.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16659/cmake_gui_output1.txt">cmake_gui_output1.txt</a>
</ul>
<!-- attachment="cmake_gui_output1.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16660.php">hi: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16658.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16661.php">Jeff Squyres: "Re: [OMPI users] Windows mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)"</a>
<li><strong>Reply:</strong> <a href="16661.php">Jeff Squyres: "Re: [OMPI users] Windows mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16707.php">Shiqing Fan: "Re: [OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are	set to 0 (zero)"</a>
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
