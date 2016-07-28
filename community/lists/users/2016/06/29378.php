<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 05:57:17 2016" -->
<!-- isoreceived="20160606095717" -->
<!-- sent="Mon, 6 Jun 2016 02:57:13 -0700" -->
<!-- isosent="20160606095713" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="B5E24BB5-9DB3-4BD2-A238-34381E2A1B28_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAPqNE2Ud3eJram4VPNVr3=KX=AbJMHuTQFf=6Uo=uC9yuDkFOQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Docker Cluster Queue Manager<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-06 05:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29379.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29377.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29377.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29380.php">Gilles Gouaillardet: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29380.php">Gilles Gouaillardet: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thought about this some more, and I wonder if there isn&#226;&#128;&#153;t a simpler solution:
<br>
<p>* create a worker pool of userid&#226;&#128;&#153;s that represents the maximum number of simultaneous users you are willing to support. This could be very large, if you want
<br>
<p>* when a worker id becomes available, pull the next email from the inbox, assign it to that worker id, and submit that job to the scheduler for execution
<br>
<p>* when the job completes, package the results/output and email them back to the original sender. Then mark the worker id as available.
<br>
<p>You&#226;&#128;&#153;ll still have security issues around the use of Docker, which is why I&#226;&#128;&#153;d recommend considering Singularity since it doesn&#226;&#128;&#153;t require nor allow privileged operations - and it doesn&#226;&#128;&#153;t require integration with the resource manager like Docker does. Singularity knows how to fully package OMPI apps, so it is rather simple to automate the procedure for &#226;&#128;&#156;containerizing&#226;&#128;&#157; the user&#226;&#128;&#153;s app prior to submitting to the scheduler.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><p><span class="quotelev1">&gt; On Jun 6, 2016, at 2:07 AM, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rob, I am not familair with wakari.io &lt;<a href="http://wakari.io/">http://wakari.io/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However what you say about the Unix userid problem is very relevant to many 'shared infrastructure' projects and is a topic which comes up in discussions about them.
</span><br>
<span class="quotelev1">&gt; Teh concern there is, as you say, if the managers of the system have a global filesystem, with shared datasets, then if virtual clusters are created on the shared infrastructure, or if containers are used, then if the user have root access they can have privileges over the global filesystem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are making some very relevant points here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5 June 2016 at 01:51, Rob Nagler &lt;openmpi-wooxi_at_[hidden] &lt;mailto:openmpi-wooxi_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Thanks! SLURM Elastic Computing seems like it might do the trick. I need to try it out. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; xCAT is interesting, too. It seems to be the HPC version of Salt'ed Cobbler. :)  I don't know that it's so important for our problem. We have a small cluster for testing against the cloud, primarily. I could see xCAT being quite powerful for large clusters. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure how to explain the Unix user id problem other than a gmail account does not have a corresponding Unix user id. Nor do you have one for your representation on this mailing list. That decoupling is important. The actual execution of unix processes on behalf of users of gmail, this mailing list, etc. run as a Unix single user. That's how JupyterHub containers run. When you click &quot;Start Server&quot; in JupyterHub, it starts a docker container as some system user (uid=1000 in our case), and the container is given access to the user's files via a Docker volume. The container cannot see any other user's files. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In a typical HPC context, the files are all in /home/&lt;unix-user&gt;. The &quot;containment&quot; is done by normal Unix file permissions. It's very easy, but it doesn't work for web apps as described above. Even being able to list all the other users on a system (via &quot;ls /home&quot;) is a privacy breach in a web app.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29369.php">http://www.open-mpi.org/community/lists/users/2016/06/29369.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29369.php">http://www.open-mpi.org/community/lists/users/2016/06/29369.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29377.php">http://www.open-mpi.org/community/lists/users/2016/06/29377.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29378/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29379.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29377.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29377.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29380.php">Gilles Gouaillardet: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29380.php">Gilles Gouaillardet: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
