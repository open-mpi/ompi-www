<?
$subject_val = "Re: [OMPI users] Windows mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 31 09:23:27 2011" -->
<!-- isoreceived="20110531132327" -->
<!-- sent="Tue, 31 May 2011 09:23:20 -0400" -->
<!-- isosent="20110531132320" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)" -->
<!-- id="9B683051-C538-40E8-997F-3E0F4181E83E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=fcF-1PcP5DqPb0174=76h3ZmWeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-31 09:23:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16662.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16660.php">hi: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>In reply to:</strong> <a href="16659.php">hi: "[OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16707.php">Shiqing Fan: "Re: [OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are	set to 0 (zero)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid that these are still more questions for the Windows guy (Shiqing) -- he maintains all the cmake stuff...
<br>
<p>On May 31, 2011, at 8:32 AM, hi wrote:
<br>
<p><span class="quotelev1">&gt; Greetings once again !!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Environment:
</span><br>
<span class="quotelev1">&gt; OS: Windows 7 64-bit
</span><br>
<span class="quotelev1">&gt; Compilers: ifort and cl.exe (both 64-bit)
</span><br>
<span class="quotelev1">&gt; CMAKE: version-2.8.4
</span><br>
<span class="quotelev1">&gt; OpenMPI: version 1.5.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As described in the README.WINDOWS.txt, when performing 'First
</span><br>
<span class="quotelev1">&gt; approach:&quot; I am observing following...
</span><br>
<span class="quotelev1">&gt; 1) via cmake-gui.exe clicked 'Configure' and it shown all config
</span><br>
<span class="quotelev1">&gt; options in pink color
</span><br>
<span class="quotelev1">&gt;     see output of this step in attached cmake_gui_output1.txt
</span><br>
<span class="quotelev1">&gt; 2) then I enabled OMPI_WANT_F77_BINDING and OMPI_WANT_F90_BINDING to
</span><br>
<span class="quotelev1">&gt; true and then clicked 'Configure'.
</span><br>
<span class="quotelev1">&gt;     see output of this step in attached cmake_gui_output2.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can observe in cmake_gui_output2.txt file, it succeeded on all
</span><br>
<span class="quotelev1">&gt; Fortran data types (except INTEGER*16 and REAL*2).
</span><br>
<span class="quotelev1">&gt; Now what I am observing is that eventho' fortran compiler supports
</span><br>
<span class="quotelev1">&gt; most of the datatypes, but still mpi.h file reports '0' for
</span><br>
<span class="quotelev1">&gt; corresponding datatype.
</span><br>
<span class="quotelev1">&gt; &lt;from_mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN LOGICAL*1 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_LOGICAL1 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN LOGICAL*2 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_LOGICAL2 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN LOGICAL*4 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_LOGICAL4 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN LOGICAL*8 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_LOGICAL8 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN INTEGER*1 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_INTEGER1 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN INTEGER*16 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_INTEGER16 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN INTEGER*2 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_INTEGER2 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN INTEGER*4 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_INTEGER4 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN INTEGER*8 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_INTEGER8 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN REAL*16 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_REAL16 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN REAL*2 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_REAL2 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN REAL*4 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_REAL4 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether we have FORTRAN REAL*8 or not */
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_REAL8 0
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea on why mpi.h is setting zero for all above fortran datatypes
</span><br>
<span class="quotelev1">&gt; despite fortran compiler supports most of the datatypes (see
</span><br>
<span class="quotelev1">&gt; cmake_gui_output2.txt)???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt; &lt;cmake_gui_output2.txt&gt;&lt;cmake_gui_output1.txt&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16662.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16660.php">hi: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>In reply to:</strong> <a href="16659.php">hi: "[OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are set to 0 (zero)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16707.php">Shiqing Fan: "Re: [OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are	set to 0 (zero)"</a>
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
