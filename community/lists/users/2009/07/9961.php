<?
$subject_val = "Re: [OMPI users] 2 to 1 oversubscription";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 22:50:53 2009" -->
<!-- isoreceived="20090715025053" -->
<!-- sent="Tue, 14 Jul 2009 22:50:47 -0400" -->
<!-- isosent="20090715025047" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 to 1 oversubscription" -->
<!-- id="0DDD0CCD-8F21-4F0B-B01B-24348545B571_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="358555ED-E429-4634-9C65-A6EE41EA9641_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2 to 1 oversubscription<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 22:50:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9962.php">Zou, Lin (GE, Research, Consultant): "[OMPI users] questions about tracing OpenMPI program"</a>
<li><strong>Previous message:</strong> <a href="9960.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9960.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9973.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="9973.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2009, at 9:03 PM, Klymak Jody wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14-Jul-09, at 5:14 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to make sure, you did set processor affinity during your test  
</span><br>
<span class="quotelev2">&gt;&gt; right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what that means in the context of OS X.
</span><br>
<p>By setting processor affinity you can force execution of each process  
<br>
on a specific core, thus limiting context switching. I know affinity  
<br>
wasn't supported on MacOS last year, I don't know if the situation  
<br>
has changed.
<br>
But running oversubscription without process affinity might cancel  
<br>
the benefit of SMT because the OS will try to allocate each process  
<br>
to whatever core becomes available, thus increasing context switching.
<br>
<p>In facts, thinking about it, I am not even sure how SMT can be  
<br>
beneficial if the OS is not SMT-aware.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hyperthreading was turned on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 13, 2009, at 9:28 PM, Klymak Jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Robert,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got inspired by your question to run a few more tests.  They  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are crude, and I don't have actual cpu timing information because  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of a library mismatch.  However:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setup:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xserve, 2x2.26 GHz Quad-core Intel Xeon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6.0 Gb memory 1067 MHz DDR3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mac OS X 10.5.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nodes are connected with a dedicated gigabit ethernet switch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running the MITgcm, a nonhydrostatic global circulation  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model.  The grid size is modest: 10x150x1600, so bear that in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mind.  Message passing is on the dimension that is 150x10, and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typically is 3 grid cells in either direction.  I'm not sure how  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many variables are passed, but I would guess on the order of 24.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I turned off all the I/O I knew of to reduce disk latency.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 node:  8 processes:              54 minutes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 node: 16 processes:             40 minutes (oversubscribed)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 nodes, 16 processes:            29 minutes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, oversubscribing was faster (in this case), but it didn't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double the speed.  Certainly spreading the load to another node  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was much faster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I haven't had a chance to implement Warner's suggestion of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; turning hyperthreading off to see what affect that has on the speed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="9962.php">Zou, Lin (GE, Research, Consultant): "[OMPI users] questions about tracing OpenMPI program"</a>
<li><strong>Previous message:</strong> <a href="9960.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9960.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9973.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="9973.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
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
