<?
$subject_val = "Re: [OMPI users] openmpi linking problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 06:47:16 2014" -->
<!-- isoreceived="20140626104716" -->
<!-- sent="Thu, 26 Jun 2014 10:47:14 +0000" -->
<!-- isosent="20140626104714" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi linking problem" -->
<!-- id="E42484CA-EB8D-4107-87DE-FF266A7F6FA9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHaow_-ENWB8XPePJ3J=0_Jbp6g-soR=NVydTu+hCvCsNafkjA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi linking problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-26 06:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24706.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem mpi"</a>
<li><strong>Previous message:</strong> <a href="24704.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24703.php">Sergii Veremieiev: "[OMPI users] Fwd: openmpi linking problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This doesn't sound like a linking problem; this sounds like there's an error in your application that is causing it to abort before completing.
<br>
<p>On Jun 25, 2014, at 12:19 PM, Sergii Veremieiev &lt;s.veremieiev_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Sir/Madam,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run a parallel finite element analysis 64-bit code on my desktop with Windows 7, Cygwin, Open MPI 1.7.5, 64Gb RAM and 6-core Intel Core i7-3930K CPU via &quot;mpirun -np 6 executable&quot; command. The code runs fine, but if I increase the number of elements to a critical one (roughly more than 100k) the built-in Mumps library returns an error message (please see below). Can you possibly advise me what can be a problem? I have checked in Task Manager the code is using about 3-6Gb per process or about 20Gb in total, that is much smaller than the amount of physical memory available on the system 55Gb. Is there possibly a memory limit in Windows available per process? Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sergii
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 6028 on
</span><br>
<span class="quotelev1">&gt; node exiting improperly. There are three reasons this could occur:
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
<span class="quotelev1">&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev1">&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev1">&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev1">&gt; error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can avoid this message by specifying -quiet on the mpirun command line.
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24703.php">http://www.open-mpi.org/community/lists/users/2014/06/24703.php</a>
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
<li><strong>Next message:</strong> <a href="24706.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem mpi"</a>
<li><strong>Previous message:</strong> <a href="24704.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24703.php">Sergii Veremieiev: "[OMPI users] Fwd: openmpi linking problem"</a>
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
