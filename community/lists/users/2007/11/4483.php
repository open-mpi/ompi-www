<?
$subject_val = "Re: [OMPI users] Error on running large number of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 13:39:11 2007" -->
<!-- isoreceived="20071115183911" -->
<!-- sent="Thu, 15 Nov 2007 10:38:30 -0800" -->
<!-- isosent="20071115183830" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error on running large number of processes" -->
<!-- id="473C9226.2060801_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4121DD33-046D-4C32-A4BB-850A1FD023DC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error on running large number of processes<br>
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 13:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4484.php">Murat Knecht: "[OMPI users] MPI daemons suspend running job"</a>
<li><strong>Previous message:</strong> <a href="4482.php">Brock Palen: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>In reply to:</strong> <a href="4477.php">Jeff Squyres: "Re: [OMPI users] Error on running large number of processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am assuming all the processes are running on a single SMP? Not sure if 
<br>
you have tried it but you may want to set the mpool_sm_max_size to 
<br>
something other than the default 512MB, since you seem to be using 
<br>
shared memory?
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; My guess is that this is similar to the last post: you are  
</span><br>
<span class="quotelev1">&gt; oversubscribing the nodes so heavily that the OS is running out of  
</span><br>
<span class="quotelev1">&gt; some resources (perhaps regular or registered memory?) such that Open  
</span><br>
<span class="quotelev1">&gt; MPI is unable to setup its network transport layers properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 15, 2007, at 6:35 AM, Clement Kam Man Chu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I am using openmpi 1.2.3 under ia64 machine and uses pbs job
</span><br>
<span class="quotelev2">&gt;&gt; scheduler.  I can successfully run 100 processes on 16 cpus, but I got
</span><br>
<span class="quotelev2">&gt;&gt; an error If run 200 processes on the same number of cpus.  The error  
</span><br>
<span class="quotelev2">&gt;&gt; is :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned &quot;Temporarily out of resource&quot; (-3) instead of  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Clement
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Clement Kam Man Chu
</span><br>
<span class="quotelev2">&gt;&gt; Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; Faculty of Information Technology
</span><br>
<span class="quotelev2">&gt;&gt; Monash University, Caulfield Campus
</span><br>
<span class="quotelev2">&gt;&gt; Ph: 61 3 9903 2355
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>- Pak Lui
<br>
pak.lui_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4484.php">Murat Knecht: "[OMPI users] MPI daemons suspend running job"</a>
<li><strong>Previous message:</strong> <a href="4482.php">Brock Palen: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>In reply to:</strong> <a href="4477.php">Jeff Squyres: "Re: [OMPI users] Error on running large number of processes"</a>
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
