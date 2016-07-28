<?
$subject_val = "Re: [OMPI users] Dynamically throttle/scale processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 19:38:31 2016" -->
<!-- isoreceived="20160317233831" -->
<!-- sent="Thu, 17 Mar 2016 16:38:28 -0700" -->
<!-- isosent="20160317233828" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamically throttle/scale processes" -->
<!-- id="33EF877B-DB1B-41D2-9DA5-4B37FDF26FD3_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="ADC981242279AD408816CB7141A2789DD79FB95D_at_GROWLER.ern.nps.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamically throttle/scale processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 19:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28746.php">Lane, William: "[OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?"</a>
<li><strong>Previous message:</strong> <a href="28744.php">Andrus, Brian Contractor: "[OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>In reply to:</strong> <a href="28744.php">Andrus, Brian Contractor: "[OMPI users] Dynamically throttle/scale processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28750.php">Gilles Gouaillardet: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Reply:</strong> <a href="28750.php">Gilles Gouaillardet: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;.I haven&#226;&#128;&#153;t heard of that specific use-case, but I have seen some similar things. Did you want the processes to be paused, or killed, when you scale down? Obviously, I&#226;&#128;&#153;m assuming they are not MPI procs, yes?
<br>
<p>I can certainly see a way to make mpirun do it without too much fuss, though it would require a message as opposed to a signal so you can indicate how many procs to &#226;&#128;&#156;idle/kill&#226;&#128;&#157;.
<br>
<p><p><span class="quotelev1">&gt; On Mar 17, 2016, at 3:22 PM, Andrus, Brian Contractor &lt;bdandrus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have an mpi-based program that has a master process that acts as a &#226;&#128;&#152;traffic cop&#226;&#128;&#153; in that it hands out work to child processes.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I want to be able to dynamically throttle how many child processes are in use at any given time.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For instance, if I start it with &#226;&#128;&#156;mpirun -n 512&#226;&#128;&#157; I could send a signal to tell it to only use 256 of them for a bit and then tell it to scale back up. The upper limit being the number of processes mpirun was launched with.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Has anyone done anything like this? Maybe a better way to do it?
</span><br>
<span class="quotelev1">&gt; Basically my program is crunching through a large text file, examining each line for various things.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any insight,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Brian Andrus
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28744.php">http://www.open-mpi.org/community/lists/users/2016/03/28744.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28744.php">http://www.open-mpi.org/community/lists/users/2016/03/28744.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28745/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28746.php">Lane, William: "[OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?"</a>
<li><strong>Previous message:</strong> <a href="28744.php">Andrus, Brian Contractor: "[OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>In reply to:</strong> <a href="28744.php">Andrus, Brian Contractor: "[OMPI users] Dynamically throttle/scale processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28750.php">Gilles Gouaillardet: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Reply:</strong> <a href="28750.php">Gilles Gouaillardet: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
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
