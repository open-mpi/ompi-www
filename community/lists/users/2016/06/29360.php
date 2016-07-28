<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  3 09:07:01 2016" -->
<!-- isoreceived="20160603130701" -->
<!-- sent="Fri, 3 Jun 2016 07:06:10 -0600" -->
<!-- isosent="20160603130610" -->
<!-- name="Rob Nagler" -->
<!-- email="openmpi-wooxi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAJB=V03aqsX0zezA6Vt-H=+ykaJxhpBJHa6hXuyLNfKsdfe_-Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPqNE2VsnRk=RsvRgjwxsShuuxad3dbARdJZnWpDWQZSN-ehpg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-03 09:06:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29361.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29359.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29359.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29361.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29361.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John,
<br>
<p>Thanks for your thoughts. Lots of new technology out there!
<br>
<p>have you looked at Singularity
<br>
<span class="quotelev1">&gt; <a href="https://github.com/gmkurtzer/singularity/releases/tag/2.0">https://github.com/gmkurtzer/singularity/releases/tag/2.0</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Looks very cool, but it doesn't address our problem. We already have the
<br>
images built with our codes. Our users don't have Unix user ids. We know
<br>
their execution environment. It doesn't handle queueing, which the problem
<br>
I have.
<br>
<p><p><span class="quotelev1">&gt; I was gobsmacked to see how easy it was to install Juia ClusterManagers
</span><br>
<span class="quotelev1">&gt; and get Slurm integration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is very nice, and something many Docker-oriented tools have. What they
<br>
don't have is good multi-user support. Remember, you can't let people run
<br>
Docker directly, because it gives them root access to the machine. The
<br>
queue manager has to control that part. You don't even want to start the
<br>
container as root, because you might be running an arbitrary container.
<br>
<p><p><span class="quotelev1">&gt; ps. Also have you looked at Bright Cluster Manager?
</span><br>
<span class="quotelev1">&gt; <a href="http://www.brightcomputing.com/whats-new-in-7.2">http://www.brightcomputing.com/whats-new-in-7.2</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We want both bare metal and commercial VPCs. Provisioning bare metal is not
<br>
a problem we have right now. Our cluster is small and already provisioned.
<br>
For VPCs, we can use StarCluster to launch the cluster in the cloud, but
<br>
that cluster is standalone. The queue manager needs to know it was created
<br>
and push the user's environment to it.
<br>
<p>The interesting times we are living in are at odds with our
<br>
infrastructure-oriented past. Clusters can come and go, and users can
<br>
package their code portably. The &quot;module load&quot; systems like Bright Cluster
<br>
offers are irrelevant. Let users build their images as they like with only
<br>
a few requirements, and they can run them with JupyterHub AND in an HPC
<br>
environment, which eliminates the need for Singularity.
<br>
<p>Rob
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29360/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29361.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29359.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29359.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29361.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29361.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
