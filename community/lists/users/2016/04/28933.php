<?
$subject_val = "[OMPI users] system call failed that shouldn't?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 15:17:36 2016" -->
<!-- isoreceived="20160413191736" -->
<!-- sent="Wed, 13 Apr 2016 12:05:34 -0700" -->
<!-- isosent="20160413190534" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] system call failed that shouldn't?" -->
<!-- id="570E987E.4020803_at_reachone.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] system call failed that shouldn't?<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-13 15:05:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28934.php">Matthew Larkin: "[OMPI users] Head Node as a Compute Node"</a>
<li><strong>Previous message:</strong> <a href="28932.php">Gilles Gouaillardet: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28936.php">Gilles Gouaillardet: "Re: [OMPI users] system call failed that shouldn't?"</a>
<li><strong>Reply:</strong> <a href="28936.php">Gilles Gouaillardet: "Re: [OMPI users] system call failed that shouldn't?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>In this thread from the Open-MPI archives:
<br>
<p><a href="https://www.open-mpi.org/community/lists/devel/2014/03/14416.php">https://www.open-mpi.org/community/lists/devel/2014/03/14416.php</a>
<br>
<p>a strange problem with a system call is discussed, and claimed to be 
<br>
solved.  However, in running a simple test program with some new MPI-3 
<br>
functions, the problem seems to be back:  Here is an example message:
<br>
<p>-------------------------------------------------------------------------------------
<br>
<p>A system call failed during shared memory initialization that should
<br>
not have.  It is likely that your MPI job will now either abort or
<br>
experience performance degradation.
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:  cedar.reachone.com
<br>
&nbsp;&nbsp;&nbsp;System call: unlink(2) 
<br>
/tmp/openmpi-sessions-rosmond_at_cedar_0/18624/1/shared_window_4.cedar
<br>
&nbsp;&nbsp;&nbsp;Error:       No such file or directory (errno 2)
<br>
<p>----------------------------------------------------------------------------------------
<br>
<p>The same problem occurs on 2 different systems:
<br>
<p>1. (Open MPI) 1.10.2 : gcc version 4.4.7 20120313 (Red Hat 4.4.7-16) (GCC)
<br>
<p>2. (Open MPI) 1.8.4 : gcc version 4.7.2 (Debian 4.7.2-5)
<br>
<p>Attached are
<br>
1.  ompi_info from the first system above
<br>
2. The source code of the test program (based on code downloaded from an 
<br>
Intel source)
<br>
<p>I simply do
<br>
<p>mpicc shared_mpi.c
<br>
mpirun -np 8 a.out &gt; outp
<br>
<p>The program runs correctly on both system using Intel MPI, but returns 
<br>
the messages above with Open MPI
<br>
<p>T. Rosmond
<br>
<p><p><p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28933/ompi_info_output.gz">ompi_info_output.gz</a>
</ul>
<!-- attachment="ompi_info_output.gz" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28933/shared_mpi.c">shared_mpi.c</a>
</ul>
<!-- attachment="shared_mpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28934.php">Matthew Larkin: "[OMPI users] Head Node as a Compute Node"</a>
<li><strong>Previous message:</strong> <a href="28932.php">Gilles Gouaillardet: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28936.php">Gilles Gouaillardet: "Re: [OMPI users] system call failed that shouldn't?"</a>
<li><strong>Reply:</strong> <a href="28936.php">Gilles Gouaillardet: "Re: [OMPI users] system call failed that shouldn't?"</a>
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
