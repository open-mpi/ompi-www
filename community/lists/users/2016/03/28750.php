<?
$subject_val = "Re: [OMPI users] Dynamically throttle/scale processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 19:59:18 2016" -->
<!-- isoreceived="20160317235918" -->
<!-- sent="Fri, 18 Mar 2016 08:59:15 +0900" -->
<!-- isosent="20160317235915" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamically throttle/scale processes" -->
<!-- id="56EB44D3.7000105_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="33EF877B-DB1B-41D2-9DA5-4B37FDF26FD3_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 19:59:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28751.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<li><strong>Previous message:</strong> <a href="28749.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<li><strong>In reply to:</strong> <a href="28745.php">Ralph Castain: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28755.php">Andrus, Brian Contractor: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Reply:</strong> <a href="28755.php">Andrus, Brian Contractor: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>unlike Ralph, i will assume all your processes are MPI tasks.
<br>
<p>at first glance, the MPI philosophy is the other way around :
<br>
start with mpirun -np 1 traffic_cop, and then MPI_Comm_spawn(&quot;child&quot;) 
<br>
when you need more workers.
<br>
<p>that being said, if you are fine with having idle children (e.g. 
<br>
children that consume no CPU resources, but do keep memory, network and 
<br>
other system resources allocated), then you can start 256 mpi tasks, 
<br>
either with
<br>
mpirun -np 256 cop_children
<br>
or
<br>
mpirun -np 1 traffic_cop : -np 255 children
<br>
/*i am not 100% sure about the syntax here ... */
<br>
<p>there is no MPI way to signal a task, but you can have your children 
<br>
wait for a message from the master.
<br>
unless you are using a TCP interconnect, i do no think OpenMPI is 
<br>
production ready for MPI_THREAD_MULTIPLE,
<br>
so one option is to have your children MPI_Recv() information from the 
<br>
traffic cop in the main process, and do the real job is an other pthread 
<br>
(so the main process can kill the working thread when MPI_Recv returns)
<br>
an other option is to MPI_Irecv(), do the job and periodically 
<br>
MPI_Test() to check if there is any order from the traffic cop.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/18/2016 8:38 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm&#133;.I haven&#146;t heard of that specific use-case, but I have seen some 
</span><br>
<span class="quotelev1">&gt; similar things. Did you want the processes to be paused, or killed, 
</span><br>
<span class="quotelev1">&gt; when you scale down? Obviously, I&#146;m assuming they are not MPI procs, yes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can certainly see a way to make mpirun do it without too much fuss, 
</span><br>
<span class="quotelev1">&gt; though it would require a message as opposed to a signal so you can 
</span><br>
<span class="quotelev1">&gt; indicate how many procs to &#147;idle/kill&#148;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2016, at 3:22 PM, Andrus, Brian Contractor 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bdandrus_at_[hidden] &lt;mailto:bdandrus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt; I have an mpi-based program that has a master process that acts as a 
</span><br>
<span class="quotelev2">&gt;&gt; &#145;traffic cop&#146; in that it hands out work to child processes.
</span><br>
<span class="quotelev2">&gt;&gt; I want to be able to dynamically throttle how many child processes 
</span><br>
<span class="quotelev2">&gt;&gt; are in use at any given time.
</span><br>
<span class="quotelev2">&gt;&gt; For instance, if I start it with &#147;mpirun -n 512&#148; I could send a 
</span><br>
<span class="quotelev2">&gt;&gt; signal to tell it to only use 256 of them for a bit and then tell it 
</span><br>
<span class="quotelev2">&gt;&gt; to scale back up. The upper limit being the number of processes 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was launched with.
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone done anything like this? Maybe a better way to do it?
</span><br>
<span class="quotelev2">&gt;&gt; Basically my program is crunching through a large text file, 
</span><br>
<span class="quotelev2">&gt;&gt; examining each line for various things.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any insight,
</span><br>
<span class="quotelev2">&gt;&gt; Brian Andrus
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28744.php">http://www.open-mpi.org/community/lists/users/2016/03/28744.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28745.php">http://www.open-mpi.org/community/lists/users/2016/03/28745.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28750/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28751.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<li><strong>Previous message:</strong> <a href="28749.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<li><strong>In reply to:</strong> <a href="28745.php">Ralph Castain: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28755.php">Andrus, Brian Contractor: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Reply:</strong> <a href="28755.php">Andrus, Brian Contractor: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
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
