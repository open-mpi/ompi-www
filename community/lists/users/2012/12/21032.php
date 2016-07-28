<?
$subject_val = "Re: [OMPI users] broadcasting basic data items in Java";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 10:39:16 2012" -->
<!-- isoreceived="20121221153916" -->
<!-- sent="Fri, 21 Dec 2012 16:32:24 +0100 (CET)" -->
<!-- isosent="20121221153224" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] broadcasting basic data items in Java" -->
<!-- id="201212211532.qBLFWN1g009395_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] broadcasting basic data items in Java" -->
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
<strong>Subject:</strong> Re: [OMPI users] broadcasting basic data items in Java<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-21 10:32:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21033.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Previous message:</strong> <a href="21031.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Maybe in reply to:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21033.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Reply:</strong> <a href="21033.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev1">&gt; I can't speak to the other issues, but for these - it looks like
</span><br>
<span class="quotelev1">&gt; something isn't right in the system. Could be an incompatibility
</span><br>
<span class="quotelev1">&gt; with Suse 12.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What the errors are saying is that malloc is failing when used at
</span><br>
<span class="quotelev1">&gt; a very early stage in starting the process. Can you run even a
</span><br>
<span class="quotelev1">&gt; C-based MPI &quot;hello&quot; program?
</span><br>
<p>Yes. I have implemented more or less the same program in C and Java.
<br>
<p>tyr hello_1 131 mpiexec -np 2 -host linpc0,linpc1 hello_1_mpi
<br>
Process 0 of 2 running on linpc0
<br>
Process 1 of 2 running on linpc1
<br>
<p>Now 1 slave tasks are sending greetings.
<br>
<p>Greetings from task 1:
<br>
&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;msg length:          132 characters
<br>
&nbsp;&nbsp;message:             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hostname:          linpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;operating system:  Linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;release:           3.1.10-1.16-desktop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processor:         x86_64
<br>
<p><p>tyr hello_1 132 mpiexec -np 2 -host linpc0,linpc1 java HelloMainWithBarrier
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
<p><p>Thank you very much for any help in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On Dec 21, 2012, at 1:41 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The program breaks if I use two Linux.x86_64 machines (Open Suse 12.1).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 etc 101 mpiexec -np 2 -host linpc0,linpc1 java BcastIntArrayMain
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  mca_base_open failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt; &gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt; &gt; [(null):10586] Local abort before MPI_INIT completed successfully; not able 
</span><br>
to 
<br>
<span class="quotelev2">&gt; &gt; aggregate error messages, and not able to guarantee that all other processes 
</span><br>
<span class="quotelev2">&gt; &gt; were killed!
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt; &gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec detected that one or more processes exited with non-zero status, 
</span><br>
thus 
<br>
<span class="quotelev2">&gt; &gt; causing
</span><br>
<span class="quotelev2">&gt; &gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Process name: [[16706,1],1]
</span><br>
<span class="quotelev2">&gt; &gt;  Exit code:    1
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I use a valid environment on all machines. The problem occurs as well
</span><br>
<span class="quotelev2">&gt; &gt; when I compile and run the program directly on the Linux system.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 java 101 mpijavac BcastIntMain.java 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 java 102 mpiexec -np 2 -host linpc0,linpc1 java -cp `pwd` 
</span><br>
BcastIntMain
<br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  mca_base_open failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21033.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Previous message:</strong> <a href="21031.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Maybe in reply to:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21033.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Reply:</strong> <a href="21033.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
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
