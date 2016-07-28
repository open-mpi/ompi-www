<?
$subject_val = "Re: [OMPI users] mpirun command gives ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 19 08:08:19 2012" -->
<!-- isoreceived="20120719120819" -->
<!-- sent="Thu, 19 Jul 2012 14:06:53 +0200" -->
<!-- isosent="20120719120653" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun command gives ERROR" -->
<!-- id="20120719120653.GA25040_at_gridefix.loria.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1342697690.33274.YahooMailNeo_at_web192203.mail.sg3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun command gives ERROR<br>
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-19 08:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19797.php">Iliev, Hristo: "Re: [OMPI users] mpirun command gives ERROR"</a>
<li><strong>Previous message:</strong> <a href="19795.php">Abhra Paul: "[OMPI users] mpirun command gives ERROR"</a>
<li><strong>In reply to:</strong> <a href="19795.php">Abhra Paul: "[OMPI users] mpirun command gives ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19797.php">Iliev, Hristo: "Re: [OMPI users] mpirun command gives ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>
<p>can you give us some additional information 
<br>
- on your compilation command line ?
<br>
- the application you're trying to run ?
<br>
<p>Just in case, did you try checking points 1. and 2. of the error message 
<br>
in the application you're trying to run ? 
<br>
<p><pre>
--
Constantinos
On Thu, Jul 19, 2012 at 07:34:50PM +0800, Abhra Paul wrote:
&gt;    Respected developers and users
&gt;    I am trying to run a parallel program CPMD with the command &quot;
&gt;    /usr/local/bin/mpirun -np 4 ./cpmd.x 1-h2-wave.inp &gt; 1-h2-wave.out &amp;&quot; , it
&gt;    is giving the following error:
&gt;    ======================================================================================================
&gt;    [testcpmd_at_slater CPMD_3_15_3]$ /usr/local/bin/mpirun -np 4 ./cpmd.x
&gt;    1-h2-wave.inp &gt; 1-h2-wave.out &amp;
&gt;    [1] 1769
&gt;    [testcpmd_at_slater CPMD_3_15_3]$
&gt;    --------------------------------------------------------------------------
&gt;    MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
&gt;    with errorcode 999.
&gt; 
&gt;    NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
&gt;    You may or may not see output from other processes, depending on
&gt;    exactly when Open MPI kills them.
&gt;    --------------------------------------------------------------------------
&gt;    --------------------------------------------------------------------------
&gt;    mpirun has exited due to process rank 0 with PID 1770 on
&gt;    node slater.rcamos.iacs exiting improperly. There are two reasons this
&gt;    could occur:
&gt; 
&gt;    1. this process did not call &quot;init&quot; before exiting, but others in
&gt;    the job did. This can cause a job to hang indefinitely while it waits
&gt;    for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
&gt;    then ALL processes must call &quot;init&quot; prior to termination.
&gt; 
&gt;    2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
&gt;    By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
&gt;    exiting or it will be considered an &quot;abnormal termination&quot;
&gt; 
&gt;    This may have caused other processes in the application to be
&gt;    terminated by signals sent by mpirun (as reported here).
&gt;    --------------------------------------------------------------------------
&gt; 
&gt;    [1]+  Exit 231                /usr/local/bin/mpirun -np 4 ./cpmd.x
&gt;    1-h2-wave.inp &gt; 1-h2-wave.out
&gt;    ======================================================================================================
&gt;    I am unable to find out the reason of that error. Please help. My Open-MPI
&gt;    version is 1.6.
&gt;    With regards
&gt;    Abhra Paul
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19797.php">Iliev, Hristo: "Re: [OMPI users] mpirun command gives ERROR"</a>
<li><strong>Previous message:</strong> <a href="19795.php">Abhra Paul: "[OMPI users] mpirun command gives ERROR"</a>
<li><strong>In reply to:</strong> <a href="19795.php">Abhra Paul: "[OMPI users] mpirun command gives ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19797.php">Iliev, Hristo: "Re: [OMPI users] mpirun command gives ERROR"</a>
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
