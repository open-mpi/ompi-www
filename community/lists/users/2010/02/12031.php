<?
$subject_val = "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  6 22:24:55 2010" -->
<!-- isoreceived="20100207032455" -->
<!-- sent="Sat, 6 Feb 2010 21:24:49 -0600" -->
<!-- isosent="20100207032449" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses" -->
<!-- id="876512661002061924r24cd5c5au59cf434cbb73aa13_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="876512661002060612y257f5253h3b9537d8c40b8cec_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-02-06 22:24:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12032.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="12030.php">Jed Brown: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<li><strong>In reply to:</strong> <a href="12028.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12032.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="12032.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following code reproduces the problem for mpif90/ifort
<br>
11.1/openmpi-1.4.1. With an empty test.input (touch test.input) some
<br>
not reproducible number of zombies processes are created.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, irank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open (unit=10,file='test.input')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(irank.lt.3)then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read(10,1,err=20)ii
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read(10,1)ii
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
20      write(6,*)irank,ii
<br>
1       format(i4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>N.B., if I deliberately create a format error for the read no zombies remain.
<br>
<p><pre>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12032.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="12030.php">Jed Brown: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<li><strong>In reply to:</strong> <a href="12028.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12032.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="12032.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
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
