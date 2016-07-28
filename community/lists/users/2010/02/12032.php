<?
$subject_val = "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  7 11:10:18 2010" -->
<!-- isoreceived="20100207161018" -->
<!-- sent="Sun, 7 Feb 2010 10:10:09 -0600" -->
<!-- isosent="20100207161009" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses" -->
<!-- id="876512661002070810u46c75c5dp49b72417e05eb874_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="876512661002061924r24cd5c5au59cf434cbb73aa13_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses<br>
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-07 11:10:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12033.php">Prentice Bisbal: "[OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>Previous message:</strong> <a href="12031.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="12031.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached is a more general test. Please note that these are very
<br>
sensitive to compilation options with ifort, and probably other
<br>
compilers as well. In many cases openmpi fails test 1 and perhaps some
<br>
of the others. Openmpi is not alone; the version of mvapich on my
<br>
cluster fails a simple &quot;CNTRL/C&quot; at the input leaving zombies!
<br>
<p>On Sat, Feb 6, 2010 at 9:24 PM, Laurence Marks &lt;L-marks_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The following code reproduces the problem for mpif90/ifort
</span><br>
<span class="quotelev1">&gt; 11.1/openmpi-1.4.1. With an empty test.input (touch test.input) some
</span><br>
<span class="quotelev1">&gt; not reproducible number of zombies processes are created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;include &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;call MPI_COMM_RANK(MPI_COMM_WORLD, irank, ierr)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;open (unit=10,file='test.input')
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;if(irank.lt.3)then
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;read(10,1,err=20)ii
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;else
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;read(10,1)ii
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;endif
</span><br>
<span class="quotelev1">&gt; 20 &#194;&#160; &#194;&#160; &#194;&#160;write(6,*)irank,ii
</span><br>
<span class="quotelev1">&gt; 1 &#194;&#160; &#194;&#160; &#194;&#160; format(i4)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; N.B., if I deliberately create a format error for the read no zombies remain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Laurence Marks
</span><br>
<span class="quotelev1">&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev1">&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev1">&gt; Northwestern University
</span><br>
<span class="quotelev1">&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev1">&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev1">&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev1">&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev1">&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev1">&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev1">&gt; Electron crystallography is the branch of science that uses electron
</span><br>
<span class="quotelev1">&gt; scattering and imaging to study the structure of matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Electron crystallography is the branch of science that uses electron
scattering and imaging to study the structure of matter.

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12032/crash_test.f">crash_test.f</a>
</ul>
<!-- attachment="crash_test.f" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12033.php">Prentice Bisbal: "[OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>Previous message:</strong> <a href="12031.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="12031.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
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
