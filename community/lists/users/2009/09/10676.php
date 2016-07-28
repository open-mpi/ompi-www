<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 23:36:59 2009" -->
<!-- isoreceived="20090918033659" -->
<!-- sent="Thu, 17 Sep 2009 21:36:48 -0600" -->
<!-- isosent="20090918033648" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="AAA81CC8-38B6-4EA9-9C3D-86C1DD16959A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AB2E5EB.8070700_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multi-threading  with OpenMPI ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 23:36:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10677.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10675.php">Hodgess, Erin: "[OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>In reply to:</strong> <a href="10674.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10679.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10679.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10682.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Only thing I can suggest is to place a thread lock around the call to  
<br>
comm_spawn so that only one thread at a time can execute that  
<br>
function. The call to mpi_init_thread is fine - you just need to  
<br>
explicitly protect the call to comm_spawn.
<br>
<p><p>On Sep 17, 2009, at 7:44 PM, Ashika Umanga Umagiliya wrote:
<br>
<p><span class="quotelev1">&gt; HI Jeff, Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I call MPI_COMM_SPAWN in multiple threads simultaneously.
</span><br>
<span class="quotelev1">&gt; Because I need to expose my parallel algorithm as a web service, I  
</span><br>
<span class="quotelev1">&gt; need multiple clients connect and execute my logic as same time(ie  
</span><br>
<span class="quotelev1">&gt; mutiple threads).
</span><br>
<span class="quotelev1">&gt; For each client , a new thread is created (by Web service framework)  
</span><br>
<span class="quotelev1">&gt; and inside the thread,MPI_Init_Thread() is called if the MPI hasnt  
</span><br>
<span class="quotelev1">&gt; been initialized.
</span><br>
<span class="quotelev1">&gt; The the thread calls MPI_COMM__SPAWN and create new processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So ,if this is the case isn't there any workarounds ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; umanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 16, 2009, at 9:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only the obvious, and not very helpful one: comm_spawn isn't thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; safe at this time. You'll need to serialize your requests to that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is likely the cause of your issues if you are calling  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_SPAWN in multiple threads simultaneously.  Can you verify?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If not, we'll need to dig a little deeper to figure out what's  
</span><br>
<span class="quotelev2">&gt;&gt; going on.  But Ralph is right -- read up on the THREAD_MULTIPLE  
</span><br>
<span class="quotelev2">&gt;&gt; constraints (check the OMPI README file) to see if that's what's  
</span><br>
<span class="quotelev2">&gt;&gt; biting you.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10677.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10675.php">Hodgess, Erin: "[OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>In reply to:</strong> <a href="10674.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10679.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10679.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10682.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
