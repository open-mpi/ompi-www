<?
$subject_val = "[OMPI users] mpirun command gives ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 19 07:34:56 2012" -->
<!-- isoreceived="20120719113456" -->
<!-- sent="Thu, 19 Jul 2012 19:34:50 +0800 (SGT)" -->
<!-- isosent="20120719113450" -->
<!-- name="Abhra Paul" -->
<!-- email="abhra_mica_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun command gives ERROR" -->
<!-- id="1342697690.33274.YahooMailNeo_at_web192203.mail.sg3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpirun command gives ERROR<br>
<strong>From:</strong> Abhra Paul (<em>abhra_mica_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-19 07:34:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19796.php">Constantinos Makassikis: "Re: [OMPI users] mpirun command gives ERROR"</a>
<li><strong>Previous message:</strong> <a href="19794.php">Damien: "Re: [OMPI users] Fortran90 Bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19796.php">Constantinos Makassikis: "Re: [OMPI users] mpirun command gives ERROR"</a>
<li><strong>Reply:</strong> <a href="19796.php">Constantinos Makassikis: "Re: [OMPI users] mpirun command gives ERROR"</a>
<li><strong>Reply:</strong> <a href="19797.php">Iliev, Hristo: "Re: [OMPI users] mpirun command gives ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Respected developers and users

I am trying to run a parallel program CPMD with the command &quot; /usr/local/bin/mpirun -np 4 ./cpmd.x 1-h2-wave.inp &gt; 1-h2-wave.out &amp;&quot; , it 

is giving the following error:
======================================================================================================

[testcpmd_at_slater CPMD_3_15_3]$ /usr/local/bin/mpirun -np 4 ./cpmd.x 1-h2-wave.inp &gt; 1-h2-wave.out &amp;
[1] 1769
[testcpmd_at_slater CPMD_3_15_3]$ --------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
with errorcode 999.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------
--------------------------------------------------------------------------
mpirun has exited due to process rank 0 with PID 1770 on
node slater.rcamos.iacs exiting improperly. There are two reasons this could occur:

1. this process did not call &quot;init&quot; before exiting, but others in
the job did. This can cause a job to hang indefinitely while it waits
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
then ALL processes must call &quot;init&quot; prior to termination.

2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
exiting or it will be considered an &quot;abnormal termination&quot;

This may have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).
--------------------------------------------------------------------------

[1]+&#160; Exit 231&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /usr/local/bin/mpirun -np 4 ./cpmd.x 1-h2-wave.inp &gt; 1-h2-wave.out
======================================================================================================
I am unable to find out the reason of that error. Please help. My Open-MPI version is 1.6.


With regards
Abhra Paul
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19795/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19796.php">Constantinos Makassikis: "Re: [OMPI users] mpirun command gives ERROR"</a>
<li><strong>Previous message:</strong> <a href="19794.php">Damien: "Re: [OMPI users] Fortran90 Bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19796.php">Constantinos Makassikis: "Re: [OMPI users] mpirun command gives ERROR"</a>
<li><strong>Reply:</strong> <a href="19796.php">Constantinos Makassikis: "Re: [OMPI users] mpirun command gives ERROR"</a>
<li><strong>Reply:</strong> <a href="19797.php">Iliev, Hristo: "Re: [OMPI users] mpirun command gives ERROR"</a>
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
