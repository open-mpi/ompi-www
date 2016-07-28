<?
$subject_val = "Re: [OMPI users] proper use of MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 08:10:39 2013" -->
<!-- isoreceived="20131105131039" -->
<!-- sent="Tue, 5 Nov 2013 13:10:37 +0000" -->
<!-- isosent="20131105131037" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] proper use of MPI_Abort" -->
<!-- id="96742B21-11BC-44E6-98C4-BFDF54DC045C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ADC981242279AD408816CB7141A2789D77E7E78A_at_HORNET.ern.nps.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] proper use of MPI_Abort<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 08:10:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22909.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22907.php">Osman Khalid: "[OMPI users] Fwd: experiencing some problems in MPI_reduce usage"</a>
<li><strong>In reply to:</strong> <a href="22904.php">Andrus, Brian Contractor: "[OMPI users] proper use of MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22916.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="22916.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're correct -- you don't need to call MPI_Finalize after MPI_Abort.
<br>
<p>Can you cite what version of Open MPI you are using?
<br>
<p><p>On Nov 4, 2013, at 9:01 AM, &quot;Andrus, Brian Contractor&quot; &lt;bdandrus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have some sample code that has a syntax message and then an MPI_Abort call if the program is run without the required parameters.
</span><br>
<span class="quotelev1">&gt; ------snip---------------
</span><br>
<span class="quotelev1">&gt;     if (!rank) {
</span><br>
<span class="quotelev1">&gt;         i = 1;
</span><br>
<span class="quotelev1">&gt;         while ((i &lt; argc) &amp;&amp; strcmp(&quot;-input&quot;, *argv)) {
</span><br>
<span class="quotelev1">&gt;             i++;
</span><br>
<span class="quotelev1">&gt;             argv++;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if (i &gt;= argc) {
</span><br>
<span class="quotelev1">&gt;             fprintf(stderr, &quot;\n*#  Usage: mpicpy -input &lt;filename&gt; \n\n&quot;);
</span><br>
<span class="quotelev1">&gt;             MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; ----------snip---------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This is all well and good and it does provide the usage line, but it also throws quite a message in addition:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 1.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 40209 on
</span><br>
<span class="quotelev1">&gt; node compute-3-3 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there a proper way to use MPI_Abort such that it will not trigger such a message?
</span><br>
<span class="quotelev1">&gt; It almost seems that MPI_Abort should be calling MPI_Finalize as a rule, or openmpi should recognize MPI_Abort is the exception to requiring MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Brian Andrus
</span><br>
<span class="quotelev1">&gt; ITACS/Research Computing
</span><br>
<span class="quotelev1">&gt; Naval Postgraduate School
</span><br>
<span class="quotelev1">&gt; Monterey, California
</span><br>
<span class="quotelev1">&gt; voice: 831-656-6238
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22909.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22907.php">Osman Khalid: "[OMPI users] Fwd: experiencing some problems in MPI_reduce usage"</a>
<li><strong>In reply to:</strong> <a href="22904.php">Andrus, Brian Contractor: "[OMPI users] proper use of MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22916.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="22916.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
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
