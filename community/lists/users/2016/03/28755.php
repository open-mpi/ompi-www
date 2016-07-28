<?
$subject_val = "Re: [OMPI users] Dynamically throttle/scale processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 17:25:24 2016" -->
<!-- isoreceived="20160318212524" -->
<!-- sent="Fri, 18 Mar 2016 19:54:23 +0000" -->
<!-- isosent="20160318195423" -->
<!-- name="Andrus, Brian Contractor" -->
<!-- email="bdandrus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamically throttle/scale processes" -->
<!-- id="ADC981242279AD408816CB7141A2789DD79FC140_at_GROWLER.ern.nps.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56EB44D3.7000105_at_rist.or.jp" -->
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
<strong>From:</strong> Andrus, Brian Contractor (<em>bdandrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-18 15:54:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28756.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<li><strong>Previous message:</strong> <a href="28754.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28750.php">Gilles Gouaillardet: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>Yep, that is what I am doing. I have the child processes wait for a message from the master before doing anything.
<br>
Now I have to find a creative way to determine which processes to scale back as I allocate the work. I was just using modulo on the line number from the input, but if my divisor changes, it can cause race conditions I don't want.
<br>
<p>Thanks for the feedback from both of you.
<br>
<p>Brian Andrus
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gilles Gouaillardet
<br>
Sent: Thursday, March 17, 2016 4:59 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Dynamically throttle/scale processes
<br>
<p>Brian,
<br>
<p>unlike Ralph, i will assume all your processes are MPI tasks.
<br>
<p>at first glance, the MPI philosophy is the other way around :
<br>
start with mpirun -np 1 traffic_cop, and then MPI_Comm_spawn(&quot;child&quot;) when you need more workers.
<br>
<p>that being said, if you are fine with having idle children (e.g. children that consume no CPU resources, but do keep memory, network and other system resources allocated), then you can start 256 mpi tasks, either with
<br>
mpirun -np 256 cop_children
<br>
or
<br>
mpirun -np 1 traffic_cop : -np 255 children
<br>
/*i am not 100% sure about the syntax here ... */
<br>
<p>there is no MPI way to signal a task, but you can have your children wait for a message from the master.
<br>
unless you are using a TCP interconnect, i do no think OpenMPI is production ready for MPI_THREAD_MULTIPLE,
<br>
so one option is to have your children MPI_Recv() information from the traffic cop in the main process, and do the real job is an other pthread (so the main process can kill the working thread when MPI_Recv returns)
<br>
an other option is to MPI_Irecv(), do the job and periodically MPI_Test() to check if there is any order from the traffic cop.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
On 3/18/2016 8:38 AM, Ralph Castain wrote:
<br>
Hmmm....I haven't heard of that specific use-case, but I have seen some similar things. Did you want the processes to be paused, or killed, when you scale down? Obviously, I'm assuming they are not MPI procs, yes?
<br>
<p>I can certainly see a way to make mpirun do it without too much fuss, though it would require a message as opposed to a signal so you can indicate how many procs to &quot;idle/kill&quot;.
<br>
<p><p>On Mar 17, 2016, at 3:22 PM, Andrus, Brian Contractor &lt;bdandrus_at_[hidden]&lt;mailto:bdandrus_at_[hidden]&gt;&gt; wrote:
<br>
<p>All,
<br>
<p>I have an mpi-based program that has a master process that acts as a 'traffic cop' in that it hands out work to child processes.
<br>
<p>I want to be able to dynamically throttle how many child processes are in use at any given time.
<br>
<p>For instance, if I start it with &quot;mpirun -n 512&quot; I could send a signal to tell it to only use 256 of them for a bit and then tell it to scale back up. The upper limit being the number of processes mpirun was launched with.
<br>
<p><p>Has anyone done anything like this? Maybe a better way to do it?
<br>
Basically my program is crunching through a large text file, examining each line for various things.
<br>
<p>Thanks in advance for any insight,
<br>
<p>Brian Andrus
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28744.php">http://www.open-mpi.org/community/lists/users/2016/03/28744.php</a>
<br>
<p><p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p>Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28745.php">http://www.open-mpi.org/community/lists/users/2016/03/28745.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28755/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28756.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<li><strong>Previous message:</strong> <a href="28754.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28750.php">Gilles Gouaillardet: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
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
