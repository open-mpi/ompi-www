<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 20:51:57 2016" -->
<!-- isoreceived="20160605005157" -->
<!-- sent="Sat, 4 Jun 2016 18:51:16 -0600" -->
<!-- isosent="20160605005116" -->
<!-- name="Rob Nagler" -->
<!-- email="openmpi-wooxi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAJB=V00J6iv5QxsuoJCJU8qBYbbnn87hqBt3H1CcEY=Q3T_x+g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4963b0a2-d1b3-9eb8-3090-5b683af80c1b_at_letai.org.il" -->
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
<strong>From:</strong> Rob Nagler (<em>openmpi-wooxi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-04 20:51:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29370.php">Alexander Droste: "[OMPI users] max buffer size"</a>
<li><strong>Previous message:</strong> <a href="29368.php">dani: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29368.php">dani: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29377.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29377.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! SLURM Elastic Computing seems like it might do the trick. I need to
<br>
try it out.
<br>
<p>xCAT is interesting, too. It seems to be the HPC version of Salt'ed
<br>
Cobbler. :)  I don't know that it's so important for our problem. We have a
<br>
small cluster for testing against the cloud, primarily. I could see xCAT
<br>
being quite powerful for large clusters.
<br>
<p>I'm not sure how to explain the Unix user id problem other than a gmail
<br>
account does not have a corresponding Unix user id. Nor do you have one for
<br>
your representation on this mailing list. That decoupling is important. The
<br>
actual execution of unix processes on behalf of users of gmail, this
<br>
mailing list, etc. run as a Unix single user. That's how JupyterHub
<br>
containers run. When you click &quot;Start Server&quot; in JupyterHub, it starts a
<br>
docker container as some system user (uid=1000 in our case), and the
<br>
container is given access to the user's files via a Docker volume. The
<br>
container cannot see any other user's files.
<br>
<p>In a typical HPC context, the files are all in /home/&lt;unix-user&gt;. The
<br>
&quot;containment&quot; is done by normal Unix file permissions. It's very easy, but
<br>
it doesn't work for web apps as described above. Even being able to list
<br>
all the other users on a system (via &quot;ls /home&quot;) is a privacy breach in a
<br>
web app.
<br>
<p>Rob
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29369/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29370.php">Alexander Droste: "[OMPI users] max buffer size"</a>
<li><strong>Previous message:</strong> <a href="29368.php">dani: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29368.php">dani: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29377.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29377.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
