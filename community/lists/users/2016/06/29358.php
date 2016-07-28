<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 22:30:54 2016" -->
<!-- isoreceived="20160603023054" -->
<!-- sent="Thu, 2 Jun 2016 20:30:12 -0600" -->
<!-- isosent="20160603023012" -->
<!-- name="Rob Nagler" -->
<!-- email="openmpi-wooxi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAJB=V01NV=t-DpHPG8Ns91oBk5jS7UtyU-ktqs+WUsds+8+XFQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="17BC4BFF-B1F3-49C8-B102-08D7BB428CAF_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-06-02 22:30:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29359.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29357.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29357.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29359.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph. I'm not sure I explained the problem clearly. Salt and
<br>
JupyterHub are distractions, sorry.
<br>
<p>I have code which &quot;wires up&quot; a cluster for MPI. What I need is scheduler
<br>
that allows users to:
<br>
<p>* Select which Docker image they'd like to wire up
<br>
* Request a number of nodes/cores
<br>
* Understands that clusters can be dynamically created
<br>
* Invokes an external command to create the cluster
<br>
<p>Here's what I'd like the user be able to do:
<br>
<p>$ queue-job --image=radiasoft/beamsim --cores=5000 my-script.sh
<br>
<p>queue-job would then have to be able to call a 3rd-party module to get the
<br>
user:
<br>
<p># 3rd-party-environ-collector
<br>
<p>This command would return a logical user and a network-accessible
<br>
directory. This info would be added to the queue, and then when the
<br>
scheduler decided to start the job, it would call:
<br>
<p># 3rd-party-start --image=radiasoft/beamsim --cores=5000 --user=robnagler
<br>
--mount=nfs://
<br>
intra.server.com/var/nfs/bla/robnagler/foo/bar:/home/docker-user/run
<br>
&nbsp;my-script.sh
<br>
<p>The bit that I need is the scheduling. For example, the scheduler would
<br>
have give the user a maximum number of core hours. It would maybe give the
<br>
job a unique group id (a la Grid Engine) to manage disk quotas. These
<br>
constraints would need to be passed to the 3rd-party programs so they could
<br>
constrain the doctor container.
<br>
<p>What I have now is 3rd-party-environ-collector (JupyterHub) and
<br>
3rd-party-start (Salt). What I need is a scheduler that has an architecture
<br>
that supports dynamic clusters and users who have no local credentials
<br>
(non-Unix user -- just a name and a home directory).
<br>
<p>TIA,
<br>
Rob
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29358/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29359.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29357.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29357.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29359.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
