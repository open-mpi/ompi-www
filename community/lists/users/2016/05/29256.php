<?
$subject_val = "[OMPI users] problem with exceptions in Java interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 11:25:57 2016" -->
<!-- isoreceived="20160520152557" -->
<!-- sent="Fri, 20 May 2016 17:25:37 +0200" -->
<!-- isosent="20160520152537" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with exceptions in Java interface" -->
<!-- id="e9537fbc-4fd3-e4f1-17ff-285881a0af3f_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with exceptions in Java interface<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-20 11:25:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29257.php">MM: "[OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<li><strong>Previous message:</strong> <a href="29255.php">Dave Love: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29310.php">Howard Pritchard: "Re: [OMPI users] problem with exceptions in Java interface"</a>
<li><strong>Reply:</strong> <a href="29310.php">Howard Pritchard: "Re: [OMPI users] problem with exceptions in Java interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried MPI.ERRORS_RETURN in a small Java program with Open MPI
<br>
1.10.2 and master. I get the expected behaviour, if I use a
<br>
wrong value for the root process in &quot;bcast&quot;. Unfortunately I
<br>
get an MPI or Java error message if I try to broadcast more data
<br>
than available. Is this intended or is it a problem in the Java
<br>
interface of Open MPI? I would be grateful if somebody can answer
<br>
my question.
<br>
<p>loki java 194 mpijavac Exception_1_Main.java
<br>
loki java 195 mpijavac Exception_2_Main.java
<br>
<p>loki java 196 mpiexec -np 1 java Exception_1_Main
<br>
Set error handler for MPI.COMM_WORLD to MPI.ERRORS_RETURN.
<br>
Call &quot;bcast&quot; with wrong &quot;root&quot; process.
<br>
Caught an exception.
<br>
MPI_ERR_ROOT: invalid root
<br>
<p><p>loki java 197 mpiexec -np 1 java Exception_2_Main
<br>
Set error handler for MPI.COMM_WORLD to MPI.ERRORS_RETURN.
<br>
Call &quot;bcast&quot; with index out-of bounds.
<br>
Exception in thread &quot;main&quot; java.lang.ArrayIndexOutOfBoundsException
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.bcast(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.bcast(Comm.java:1231)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at Exception_2_Main.main(Exception_2_Main.java:44)
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;&nbsp;Process name: [[38300,1],0]
<br>
&nbsp;&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
loki java 198
<br>
<p><p>Kind regards and thank you very much for any help in advance
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29256/Exception_1_Main.java">Exception_1_Main.java</a>
</ul>
<!-- attachment="Exception_1_Main.java" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29256/Exception_2_Main.java">Exception_2_Main.java</a>
</ul>
<!-- attachment="Exception_2_Main.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29257.php">MM: "[OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<li><strong>Previous message:</strong> <a href="29255.php">Dave Love: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29310.php">Howard Pritchard: "Re: [OMPI users] problem with exceptions in Java interface"</a>
<li><strong>Reply:</strong> <a href="29310.php">Howard Pritchard: "Re: [OMPI users] problem with exceptions in Java interface"</a>
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
