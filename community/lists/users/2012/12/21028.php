<?
$subject_val = "[OMPI users] broadcasting basic data items in Java";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 04:49:00 2012" -->
<!-- isoreceived="20121221094900" -->
<!-- sent="Fri, 21 Dec 2012 10:41:28 +0100 (CET)" -->
<!-- isosent="20121221094128" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] broadcasting basic data items in Java" -->
<!-- id="201212210941.qBL9fSt8007754_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] broadcasting basic data items in Java<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-21 04:41:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21029.php">MM: "Re: [OMPI users] OpenMPI with cMake on Windows"</a>
<li><strong>Previous message:</strong> <a href="21027.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21031.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Reply:</strong> <a href="21031.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Maybe reply:</strong> <a href="21032.php">Siegmar Gross: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Maybe reply:</strong> <a href="21035.php">Siegmar Gross: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Maybe reply:</strong> <a href="21041.php">Siegmar Gross: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I'm still using &quot;Open MPI: 1.9a1r27668&quot; and Java 1.7.0_07. Today I
<br>
implemented a few programs to broadcast int, int[], double, or
<br>
double[]. I can compile all four programs without problems, which
<br>
means that &quot;Object buf&quot; as a parameter in &quot;MPI.COMM_WORLD.Bcast&quot;
<br>
isn't a problem for basic datatypes. Unfortunately I only get the
<br>
expected result for arrays of a basic datatype.
<br>
<p>Process 1 doesn't receive an int value (both processes run on
<br>
Solaris 10 Sparc)
<br>
<p>tyr java 159 mpiexec -np 2 java BcastIntMain
<br>
Process 1 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;intValue: 0
<br>
Process 0 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;intValue: 1234567
<br>
<p><p>Process 1 receives all values from an int array.
<br>
<p>tyr java 160 mpiexec -np 2 java BcastIntArrayMain
<br>
Process 0 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;intValues[0]: 1234567    intValues[1]: 7654321
<br>
Process 1 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;intValues[0]: 1234567    intValues[1]: 7654321
<br>
<p><p>The program breaks if I use one little endian and one big endian
<br>
machine.
<br>
<p>tyr java 161 mpiexec -np 2 -host sunpc0,tyr java BcastIntMain
<br>
[tyr:7657] *** An error occurred in MPI_Comm_dup
<br>
[tyr:7657] *** reported by process [3150053377,1]
<br>
[tyr:7657] *** on communicator MPI_COMM_WORLD
<br>
[tyr:7657] *** MPI_ERR_INTERN: internal error
<br>
[tyr:7657] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
<br>
&nbsp;&nbsp;will now abort,
<br>
[tyr:7657] ***    and potentially your MPI job)
<br>
<p><p>The program works if I use two &quot;Solaris 10 x86_64&quot; machines.
<br>
<p>tyr java 163 mpiexec -np 2 -host sunpc0,sunpc1 java BcastIntArrayMain
<br>
Process 1 running on sunpc1.
<br>
&nbsp;&nbsp;intValues[0]: 1234567    intValues[1]: 7654321
<br>
Process 0 running on sunpc0.
<br>
&nbsp;&nbsp;intValues[0]: 1234567    intValues[1]: 7654321
<br>
<p><p>The program breaks if I use two Linux.x86_64 machines (Open Suse 12.1).
<br>
<p>linpc1 etc 101 mpiexec -np 2 -host linpc0,linpc1 java BcastIntArrayMain
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;mca_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value -2 instead of OPAL_SUCCESS
<br>
...
<br>
&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[(null):10586] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
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
mpiexec detected that one or more processes exited with non-zero status, thus 
<br>
causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[16706,1],1]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>I use a valid environment on all machines. The problem occurs as well
<br>
when I compile and run the program directly on the Linux system.
<br>
<p>linpc1 java 101 mpijavac BcastIntMain.java 
<br>
linpc1 java 102 mpiexec -np 2 -host linpc0,linpc1 java -cp `pwd` BcastIntMain
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;mca_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value -2 instead of OPAL_SUCCESS
<br>
<p><p>I get the same errors for the programs with double values. Does anybody
<br>
have any suggestions how to solve the problems. Thank you very much for
<br>
any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>



<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21028/BcastIntMain.java">BcastIntMain.java</a>
</ul>
<!-- attachment="BcastIntMain.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21028/BcastIntArrayMain.java">BcastIntArrayMain.java</a>
</ul>
<!-- attachment="BcastIntArrayMain.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21028/BcastDoubleMain.java">BcastDoubleMain.java</a>
</ul>
<!-- attachment="BcastDoubleMain.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21028/BcastDoubleArrayMain.java">BcastDoubleArrayMain.java</a>
</ul>
<!-- attachment="BcastDoubleArrayMain.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21029.php">MM: "Re: [OMPI users] OpenMPI with cMake on Windows"</a>
<li><strong>Previous message:</strong> <a href="21027.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21031.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Reply:</strong> <a href="21031.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Maybe reply:</strong> <a href="21032.php">Siegmar Gross: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Maybe reply:</strong> <a href="21035.php">Siegmar Gross: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Maybe reply:</strong> <a href="21041.php">Siegmar Gross: "Re: [OMPI users] broadcasting basic data items in Java"</a>
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
