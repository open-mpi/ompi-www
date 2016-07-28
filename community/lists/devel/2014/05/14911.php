<?
$subject_val = "[OMPI devel] fortran types alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 04:57:07 2014" -->
<!-- isoreceived="20140530085707" -->
<!-- sent="Fri, 30 May 2014 17:57:04 +0900" -->
<!-- isosent="20140530085704" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] fortran types alignment" -->
<!-- id="CAAkFZ5umPsdzGbY8FtGsvYQ8cQLr9TDmOUWM6U_DxhFWAqXtcg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] fortran types alignment<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 04:57:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14912.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14910.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14914.php">George Bosilca: "Re: [OMPI devel] fortran types alignment"</a>
<li><strong>Reply:</strong> <a href="14914.php">George Bosilca: "Re: [OMPI devel] fortran types alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>i recently had to solve a tricky issue that involves alignment of fortran
<br>
types.
<br>
<p>the attached program can be used and ran on two tasks in order to evidence
<br>
the issue.
<br>
<p>if gfortran is used (to build both openmpi and the test case), then the
<br>
test is successful
<br>
if ifort (Intel compiler) is used (to build both openmpi and the test
<br>
case), then the test fails.
<br>
<p>this was mentionned in the openmpi users list quite a while ago at
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/07/13857.php">http://www.open-mpi.org/community/lists/users/2010/07/13857.php</a>
<br>
<p>the root cause is gfortran considers mpi_real8 must be aligned on 8 bytes
<br>
whereas ifort considers mpi_real8 does not need to be aligned.
<br>
consequently, the derived data type ddt is built with an extent of 16
<br>
(gfortran) or 12 (ifort)
<br>
<p><p>in order to determine the type aligment, configure builds a simple program
<br>
with c and fortran that involves common.
<br>
the default behaviour of ifort is to :
<br>
- *not* align common
<br>
- align records (aka the real8_int fortran type)
<br>
hence the mismatch and the failure.
<br>
<p>the default behaviour of gfortran is to align both common and records,
<br>
hence the success.
<br>
<p>/* i &quot;extracted&quot; from configure conftest.c and conftestf.f that can be used
<br>
to build the conftest binary. conftest will store the alignment in the
<br>
conftestval file */
<br>
<p>i am wondering how this should be dealt by OpenMPI.
<br>
<p><p>here is a non exhaustive list of option :
<br>
<p>a) do nothing, this is not related to openmpi, and even if we do something,
<br>
application built with -noalign will break.
<br>
b) advise ifort users to configure with FCFLAGS=&quot;-align zcommons&quot; since it
<br>
is likely this is what they want
<br>
c) advise ifort users to build their application with &quot;-noalign&quot; to be on
<br>
the safe side (modulo a performance penalty)
<br>
d) update OpenMPI so fortran type alignment is determined via a record
<br>
instead of a common if fortran &gt;= 90 is used
<br>
(so far, i could not find any drawback in doing that)
<br>
e) advise ifort users to create ddt with MPI_DOUBLE instead of mpi_real8
<br>
(because this works (!), i did not dig to find out why)
<br>
f) other ...
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14911/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14911/bcast_types.f90">bcast_types.f90</a>
</ul>
<!-- attachment="bcast_types.f90" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14911/conftestf.f">conftestf.f</a>
</ul>
<!-- attachment="conftestf.f" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14911/conftest.c">conftest.c</a>
</ul>
<!-- attachment="conftest.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14912.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14910.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14914.php">George Bosilca: "Re: [OMPI devel] fortran types alignment"</a>
<li><strong>Reply:</strong> <a href="14914.php">George Bosilca: "Re: [OMPI devel] fortran types alignment"</a>
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
