<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 07:30:11 2016" -->
<!-- isoreceived="20160606113011" -->
<!-- sent="Mon, 6 Jun 2016 20:30:00 +0900" -->
<!-- isosent="20160606113000" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAAkFZ5v_VhbXXs4qH2cRyJ9LeMJg0NYqTqZ2Eeo-Cs7_6ykTCA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B5E24BB5-9DB3-4BD2-A238-34381E2A1B28_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-06 07:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29381.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29379.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29378.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29381.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this really required here ?
<br>
<p>I was under the impression the web server already run user tasks in a
<br>
container.
<br>
all tasks run with the same unix id, but that is fine since isolation is
<br>
provided by the container.
<br>
did I get it right ?
<br>
<p>I was thinking of an other approach, which is run the containers in the
<br>
job, vs run the job in the containers.
<br>
for example, you can wrap orted, so instead of having mpirun
<br>
ssh host orted
<br>
you could basically have
<br>
ssh host run_in_container.sh orted
<br>
that bring said, singularity might already do something similar, so it is
<br>
likely a better fit.
<br>
<p>an other (far fetched) option is to submit two jobs into two clusters.
<br>
- the first job started containers in the bare-bone cluster, each container
<br>
runs slurmd and register itself in an elastic cluster with a per job unique
<br>
resource.
<br>
- the second job &quot;naturally&quot; runs under the elastic container when the
<br>
container-ized resource is available, and then stop slurmd and the
<br>
container.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, June 6, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thought about this some more, and I wonder if there isn&#226;&#128;&#153;t a simpler
</span><br>
<span class="quotelev1">&gt; solution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * create a worker pool of userid&#226;&#128;&#153;s that represents the maximum number of
</span><br>
<span class="quotelev1">&gt; simultaneous users you are willing to support. This could be very large, if
</span><br>
<span class="quotelev1">&gt; you want
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * when a worker id becomes available, pull the next email from the inbox,
</span><br>
<span class="quotelev1">&gt; assign it to that worker id, and submit that job to the scheduler for
</span><br>
<span class="quotelev1">&gt; execution
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * when the job completes, package the results/output and email them back
</span><br>
<span class="quotelev1">&gt; to the original sender. Then mark the worker id as available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You&#226;&#128;&#153;ll still have security issues around the use of Docker, which is why
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;d recommend considering Singularity since it doesn&#226;&#128;&#153;t require nor allow
</span><br>
<span class="quotelev1">&gt; privileged operations - and it doesn&#226;&#128;&#153;t require integration with the
</span><br>
<span class="quotelev1">&gt; resource manager like Docker does. Singularity knows how to fully package
</span><br>
<span class="quotelev1">&gt; OMPI apps, so it is rather simple to automate the procedure for
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;containerizing&#226;&#128;&#157; the user&#226;&#128;&#153;s app prior to submitting to the scheduler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2016, at 2:07 AM, John Hearns &lt;hearnsj_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','hearnsj_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rob, I am not familair with wakari.io
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However what you say about the Unix userid problem is very relevant to
</span><br>
<span class="quotelev1">&gt; many 'shared infrastructure' projects and is a topic which comes up in
</span><br>
<span class="quotelev1">&gt; discussions about them.
</span><br>
<span class="quotelev1">&gt; Teh concern there is, as you say, if the managers of the system have a
</span><br>
<span class="quotelev1">&gt; global filesystem, with shared datasets, then if virtual clusters are
</span><br>
<span class="quotelev1">&gt; created on the shared infrastructure, or if containers are used, then if
</span><br>
<span class="quotelev1">&gt; the user have root access they can have privileges over the global
</span><br>
<span class="quotelev1">&gt; filesystem.
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
<span class="quotelev1">&gt; On 5 June 2016 at 01:51, Rob Nagler &lt;openmpi-wooxi_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','openmpi-wooxi_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks! SLURM Elastic Computing seems like it might do the trick. I need
</span><br>
<span class="quotelev2">&gt;&gt; to try it out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; xCAT is interesting, too. It seems to be the HPC version of Salt'ed
</span><br>
<span class="quotelev2">&gt;&gt; Cobbler. :)  I don't know that it's so important for our problem. We have a
</span><br>
<span class="quotelev2">&gt;&gt; small cluster for testing against the cloud, primarily. I could see xCAT
</span><br>
<span class="quotelev2">&gt;&gt; being quite powerful for large clusters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure how to explain the Unix user id problem other than a gmail
</span><br>
<span class="quotelev2">&gt;&gt; account does not have a corresponding Unix user id. Nor do you have one for
</span><br>
<span class="quotelev2">&gt;&gt; your representation on this mailing list. That decoupling is important. The
</span><br>
<span class="quotelev2">&gt;&gt; actual execution of unix processes on behalf of users of gmail, this
</span><br>
<span class="quotelev2">&gt;&gt; mailing list, etc. run as a Unix single user. That's how JupyterHub
</span><br>
<span class="quotelev2">&gt;&gt; containers run. When you click &quot;Start Server&quot; in JupyterHub, it starts a
</span><br>
<span class="quotelev2">&gt;&gt; docker container as some system user (uid=1000 in our case), and the
</span><br>
<span class="quotelev2">&gt;&gt; container is given access to the user's files via a Docker volume. The
</span><br>
<span class="quotelev2">&gt;&gt; container cannot see any other user's files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In a typical HPC context, the files are all in /home/&lt;unix-user&gt;. The
</span><br>
<span class="quotelev2">&gt;&gt; &quot;containment&quot; is done by normal Unix file permissions. It's very easy, but
</span><br>
<span class="quotelev2">&gt;&gt; it doesn't work for web apps as described above. Even being able to list
</span><br>
<span class="quotelev2">&gt;&gt; all the other users on a system (via &quot;ls /home&quot;) is a privacy breach in a
</span><br>
<span class="quotelev2">&gt;&gt; web app.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29369.php">http://www.open-mpi.org/community/lists/users/2016/06/29369.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29377.php">http://www.open-mpi.org/community/lists/users/2016/06/29377.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29380/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29381.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29379.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29378.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29381.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
