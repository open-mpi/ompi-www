<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 05:08:10 2016" -->
<!-- isoreceived="20160606090810" -->
<!-- sent="Mon, 6 Jun 2016 10:07:37 +0100" -->
<!-- isosent="20160606090737" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAPqNE2Ud3eJram4VPNVr3=KX=AbJMHuTQFf=6Uo=uC9yuDkFOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJB=V00J6iv5QxsuoJCJU8qBYbbnn87hqBt3H1CcEY=Q3T_x+g_at_mail.gmail.com" -->
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
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-06 05:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29378.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29376.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29369.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29378.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29378.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29381.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob, I am not familair with wakari.io
<br>
<p>However what you say about the Unix userid problem is very relevant to many
<br>
'shared infrastructure' projects and is a topic which comes up in
<br>
discussions about them.
<br>
Teh concern there is, as you say, if the managers of the system have a
<br>
global filesystem, with shared datasets, then if virtual clusters are
<br>
created on the shared infrastructure, or if containers are used, then if
<br>
the user have root access they can have privileges over the global
<br>
filesystem.
<br>
<p>You are making some very relevant points here.
<br>
<p><p><p><p><p>On 5 June 2016 at 01:51, Rob Nagler &lt;openmpi-wooxi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks! SLURM Elastic Computing seems like it might do the trick. I need
</span><br>
<span class="quotelev1">&gt; to try it out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xCAT is interesting, too. It seems to be the HPC version of Salt'ed
</span><br>
<span class="quotelev1">&gt; Cobbler. :)  I don't know that it's so important for our problem. We have a
</span><br>
<span class="quotelev1">&gt; small cluster for testing against the cloud, primarily. I could see xCAT
</span><br>
<span class="quotelev1">&gt; being quite powerful for large clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure how to explain the Unix user id problem other than a gmail
</span><br>
<span class="quotelev1">&gt; account does not have a corresponding Unix user id. Nor do you have one for
</span><br>
<span class="quotelev1">&gt; your representation on this mailing list. That decoupling is important. The
</span><br>
<span class="quotelev1">&gt; actual execution of unix processes on behalf of users of gmail, this
</span><br>
<span class="quotelev1">&gt; mailing list, etc. run as a Unix single user. That's how JupyterHub
</span><br>
<span class="quotelev1">&gt; containers run. When you click &quot;Start Server&quot; in JupyterHub, it starts a
</span><br>
<span class="quotelev1">&gt; docker container as some system user (uid=1000 in our case), and the
</span><br>
<span class="quotelev1">&gt; container is given access to the user's files via a Docker volume. The
</span><br>
<span class="quotelev1">&gt; container cannot see any other user's files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a typical HPC context, the files are all in /home/&lt;unix-user&gt;. The
</span><br>
<span class="quotelev1">&gt; &quot;containment&quot; is done by normal Unix file permissions. It's very easy, but
</span><br>
<span class="quotelev1">&gt; it doesn't work for web apps as described above. Even being able to list
</span><br>
<span class="quotelev1">&gt; all the other users on a system (via &quot;ls /home&quot;) is a privacy breach in a
</span><br>
<span class="quotelev1">&gt; web app.
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29369.php">http://www.open-mpi.org/community/lists/users/2016/06/29369.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29378.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29376.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29369.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29378.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29378.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29381.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
