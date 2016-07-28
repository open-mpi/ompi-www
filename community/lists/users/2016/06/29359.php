<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  3 02:54:16 2016" -->
<!-- isoreceived="20160603065416" -->
<!-- sent="Fri, 3 Jun 2016 07:53:43 +0100" -->
<!-- isosent="20160603065343" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAPqNE2VsnRk=RsvRgjwxsShuuxad3dbARdJZnWpDWQZSN-ehpg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJB=V02GagbENZjyzMNb5iOngvuGTqN_ewpWoHyt5QnBJaOr2w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-03 02:53:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29360.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29358.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29355.php">Rob Nagler: "[OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29360.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29360.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
have you looked at Singularity
<br>
<a href="https://github.com/gmkurtzer/singularity/releases/tag/2.0">https://github.com/gmkurtzer/singularity/releases/tag/2.0</a>
<br>
<p>It is a new containerisation framework aimed squarely at HPC.
<br>
<p>Also you mention Juyputer. I am learning Julia at the moment, and I looked
<br>
at the parallel facilities yesterday
<br>
<a href="https://github.com/JuliaParallel">https://github.com/JuliaParallel</a>
<br>
<p>I was gobsmacked to see how easy it was to install Juia ClusterManagers and
<br>
get Slurm integration.
<br>
<p>I think we are living in interesting times.
<br>
<p><p>ps. Also have you looked at Bright Cluster Manager?
<br>
<a href="http://www.brightcomputing.com/whats-new-in-7.2">http://www.brightcomputing.com/whats-new-in-7.2</a>
<br>
<p>I can put you in touch with the guys there
<br>
<p><p><p><p>On 2 June 2016 at 23:58, Rob Nagler &lt;openmpi-wooxi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We would like to use MPI on Docker with arbitrarily configured clusters
</span><br>
<span class="quotelev1">&gt; (e.g. created with StarCluster or bare metal). What I'm curious about is if
</span><br>
<span class="quotelev1">&gt; there is a queue manager that understands Docker, file systems, MPI, and
</span><br>
<span class="quotelev1">&gt; OpenAuth. JupyterHub does a lot of this, but it doesn't interface with MPI.
</span><br>
<span class="quotelev1">&gt; Ideally, we'd like users to be able to queue up jobs directly from
</span><br>
<span class="quotelev1">&gt; JupyterHub.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, we can configure and initiate an MPI-compatible Docker cluster
</span><br>
<span class="quotelev1">&gt; running on a VPC using Salt. What's missing is the ability to manage a
</span><br>
<span class="quotelev1">&gt; queue of these clusters. Here's a list of requirements:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - JupyterHub users do not have Unix user ids
</span><br>
<span class="quotelev1">&gt;    - Containers must be started as a non-root guest user (--user)
</span><br>
<span class="quotelev1">&gt;    - JupyterHub user's data directory is mounted in container
</span><br>
<span class="quotelev1">&gt;    - Data is shared via NFS or other cluster file system
</span><br>
<span class="quotelev1">&gt;    - sshd runs in container for MPI as guest user
</span><br>
<span class="quotelev1">&gt;    - Results have to be reported back to GitHub user
</span><br>
<span class="quotelev1">&gt;    - MPI network must be visible (--net=host)
</span><br>
<span class="quotelev1">&gt;    - Queue manager must be compatible with the above
</span><br>
<span class="quotelev1">&gt;    - JupyterHub user is not allowed to interact with Docker directly
</span><br>
<span class="quotelev1">&gt;    - Docker images are user selectable (from an approved list)
</span><br>
<span class="quotelev1">&gt;    - Jupyter and MPI containers started from same image
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Know of a system which supports this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our code and config are open source, and your feedback would be greatly
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Salt configuration: <a href="https://github.com/radiasoft/salt-conf">https://github.com/radiasoft/salt-conf</a>
</span><br>
<span class="quotelev1">&gt; Container builders:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/radiasoft/containers/tree/master/radiasoft">https://github.com/radiasoft/containers/tree/master/radiasoft</a>
</span><br>
<span class="quotelev1">&gt; Early phase wiki: <a href="https://github.com/radiasoft/devops/wiki/DockerMPI">https://github.com/radiasoft/devops/wiki/DockerMPI</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29355.php">http://www.open-mpi.org/community/lists/users/2016/06/29355.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29359/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29360.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29358.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29355.php">Rob Nagler: "[OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29360.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29360.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
