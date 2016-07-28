<?
$subject_val = "[OMPI users] proper use of MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  4 12:01:26 2013" -->
<!-- isoreceived="20131104170126" -->
<!-- sent="Mon, 4 Nov 2013 17:01:24 +0000" -->
<!-- isosent="20131104170124" -->
<!-- name="Andrus, Brian Contractor" -->
<!-- email="bdandrus_at_[hidden]" -->
<!-- subject="[OMPI users] proper use of MPI_Abort" -->
<!-- id="ADC981242279AD408816CB7141A2789D77E7E78A_at_HORNET.ern.nps.edu" -->
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
<strong>Subject:</strong> [OMPI users] proper use of MPI_Abort<br>
<strong>From:</strong> Andrus, Brian Contractor (<em>bdandrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-04 12:01:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22903.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="22908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p><p><p>I have some sample code that has a syntax message and then an MPI_Abort call if the program is run without the required parameters.
<br>
<p>------snip---------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (!rank) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while ((i &lt; argc) &amp;&amp; strcmp(&quot;-input&quot;, *argv)) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv++;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i &gt;= argc) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;\n*#  Usage: mpicpy -input &lt;filename&gt; \n\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>----------snip---------------
<br>
<p><p><p>This is all well and good and it does provide the usage line, but it also throws quite a message in addition:
<br>
<p><p><p>--------------------------------------------------------------------------
<br>
<p>MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
<br>
<p>with errorcode 1.
<br>
<p><p><p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
<p>You may or may not see output from other processes, depending on
<br>
<p>exactly when Open MPI kills them.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun has exited due to process rank 0 with PID 40209 on
<br>
<p>node compute-3-3 exiting improperly. There are two reasons this could occur:
<br>
<p><p><p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
<p>the job did. This can cause a job to hang indefinitely while it waits
<br>
<p>for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
<p>then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p><p><p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
<p>By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
<p>exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p><p><p>This may have caused other processes in the application to be
<br>
<p>terminated by signals sent by mpirun (as reported here).
<br>
<p>--------------------------------------------------------------------------
<br>
<p><p><p>Is there a proper way to use MPI_Abort such that it will not trigger such a message?
<br>
<p>It almost seems that MPI_Abort should be calling MPI_Finalize as a rule, or openmpi should recognize MPI_Abort is the exception to requiring MPI_Finalize.
<br>
<p><p><p><p><p>Brian Andrus
<br>
ITACS/Research Computing
<br>
Naval Postgraduate School
<br>
Monterey, California
<br>
voice: 831-656-6238
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22904/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22903.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="22908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
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
