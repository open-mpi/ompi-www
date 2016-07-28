<?
$subject_val = "Re: [OMPI users] broadcasting basic data items in Java";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 10:09:12 2012" -->
<!-- isoreceived="20121221150912" -->
<!-- sent="Fri, 21 Dec 2012 07:09:04 -0800" -->
<!-- isosent="20121221150904" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] broadcasting basic data items in Java" -->
<!-- id="3ECB0886-389B-4090-A62A-4A03DFF5CA63_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212210941.qBL9fSt8007754_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-21 10:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21032.php">Siegmar Gross: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Previous message:</strong> <a href="21030.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21032.php">Siegmar Gross: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak to the other issues, but for these - it looks like something isn't right in the system. Could be an incompatibility with Suse 12.1.
<br>
<p>What the errors are saying is that malloc is failing when used at a very early stage in starting the process. Can you run even a C-based MPI &quot;hello&quot; program?
<br>
<p><p>On Dec 21, 2012, at 1:41 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The program breaks if I use two Linux.x86_64 machines (Open Suse 12.1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 etc 101 mpiexec -np 2 -host linpc0,linpc1 java BcastIntArrayMain
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mca_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [(null):10586] Local abort before MPI_INIT completed successfully; not able to 
</span><br>
<span class="quotelev1">&gt; aggregate error messages, and not able to guarantee that all other processes 
</span><br>
<span class="quotelev1">&gt; were killed!
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status, thus 
</span><br>
<span class="quotelev1">&gt; causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[16706,1],1]
</span><br>
<span class="quotelev1">&gt;  Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use a valid environment on all machines. The problem occurs as well
</span><br>
<span class="quotelev1">&gt; when I compile and run the program directly on the Linux system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 java 101 mpijavac BcastIntMain.java 
</span><br>
<span class="quotelev1">&gt; linpc1 java 102 mpiexec -np 2 -host linpc0,linpc1 java -cp `pwd` BcastIntMain
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mca_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21032.php">Siegmar Gross: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Previous message:</strong> <a href="21030.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21032.php">Siegmar Gross: "Re: [OMPI users] broadcasting basic data items in Java"</a>
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
