<?
$subject_val = "Re: [OMPI users] Killing openmpi job via programming language";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 07:24:03 2010" -->
<!-- isoreceived="20100714112403" -->
<!-- sent="Wed, 14 Jul 2010 05:23:48 -0600" -->
<!-- isosent="20100714112348" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Killing openmpi job via programming language" -->
<!-- id="268532C7-532F-4B7C-87EA-733B1418CBC7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikr7ZCiTJgs3DMeGu25tLCiPc_F0PPZuKUx3Gj8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Killing openmpi job via programming language<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-14 07:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13634.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13632.php">Saygin Arkan: "[OMPI users] Killing openmpi job via programming language"</a>
<li><strong>In reply to:</strong> <a href="13632.php">Saygin Arkan: "[OMPI users] Killing openmpi job via programming language"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to call MPI_Abort, not Finalize. Finalize will block until all procs call it. Abort causes the system to terminate everyone immediately.
<br>
<p>On Jul 14, 2010, at 5:06 AM, Saygin Arkan wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm executing an mpi program, using C++ bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if( rank == 0)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; if( !isFileFound){
</span><br>
<span class="quotelev1">&gt;             LOG4CXX_ERROR(log, &quot;There are not any files related with the given probe ID&quot;);
</span><br>
<span class="quotelev1">&gt;             Finalize();
</span><br>
<span class="quotelev1">&gt;             exit(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here rank zero stops working, I print the error log. But the program continues to run.
</span><br>
<span class="quotelev1">&gt; How can I make it stop somehow?
</span><br>
<span class="quotelev1">&gt; program just halts for minutes and then I kill it manually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saygin
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
<li><strong>Next message:</strong> <a href="13634.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13632.php">Saygin Arkan: "[OMPI users] Killing openmpi job via programming language"</a>
<li><strong>In reply to:</strong> <a href="13632.php">Saygin Arkan: "[OMPI users] Killing openmpi job via programming language"</a>
<!-- nextthread="start" -->
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
