<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 19:12:45 2016" -->
<!-- isoreceived="20160602231245" -->
<!-- sent="Thu, 2 Jun 2016 16:12:41 -0700" -->
<!-- isosent="20160602231241" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="17BC4BFF-B1F3-49C8-B102-08D7BB428CAF_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 19:12:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29358.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29356.php">Cabral, Matias A: "Re: [OMPI users] PSM vs PSM2"</a>
<li><strong>In reply to:</strong> <a href="29355.php">Rob Nagler: "[OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29358.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29358.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m afraid I&#226;&#128;&#153;m not familiar with JupyterHub at all, or Salt. All you really need is:
<br>
<p>* a scheduler that understands the need to start all the procs at the same time - i.e., as a block
<br>
<p>* wireup support for the MPI procs themselves
<br>
<p>If JupyterHub can do the first, then you could just have it launch the set of ORTE daemons by creating a hostfile with the IP addresses of the Docket containers and using the &#226;&#128;&#156;orte-dvm&#226;&#128;&#157; command, and then use &#226;&#128;&#156;mpiexec&#226;&#128;&#157; to start the application against those daemons. The daemons would provide the wireup support. This could then be streamlined later by adding a plugin to ORTE to get the &#226;&#128;&#156;names&#226;&#128;&#157; of the Docker containers without putting them in a hostfile.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Jun 2, 2016, at 3:58 PM, Rob Nagler &lt;openmpi-wooxi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We would like to use MPI on Docker with arbitrarily configured clusters (e.g. created with StarCluster or bare metal). What I'm curious about is if there is a queue manager that understands Docker, file systems, MPI, and OpenAuth. JupyterHub does a lot of this, but it doesn't interface with MPI. Ideally, we'd like users to be able to queue up jobs directly from JupyterHub.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently, we can configure and initiate an MPI-compatible Docker cluster running on a VPC using Salt. What's missing is the ability to manage a queue of these clusters. Here's a list of requirements:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; JupyterHub users do not have Unix user ids
</span><br>
<span class="quotelev1">&gt; Containers must be started as a non-root guest user (--user)
</span><br>
<span class="quotelev1">&gt; JupyterHub user's data directory is mounted in container
</span><br>
<span class="quotelev1">&gt; Data is shared via NFS or other cluster file system
</span><br>
<span class="quotelev1">&gt; sshd runs in container for MPI as guest user
</span><br>
<span class="quotelev1">&gt; Results have to be reported back to GitHub user
</span><br>
<span class="quotelev1">&gt; MPI network must be visible (--net=host)
</span><br>
<span class="quotelev1">&gt; Queue manager must be compatible with the above
</span><br>
<span class="quotelev1">&gt; JupyterHub user is not allowed to interact with Docker directly
</span><br>
<span class="quotelev1">&gt; Docker images are user selectable (from an approved list)
</span><br>
<span class="quotelev1">&gt; Jupyter and MPI containers started from same image
</span><br>
<span class="quotelev1">&gt; Know of a system which supports this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our code and config are open source, and your feedback would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Salt configuration: <a href="https://github.com/radiasoft/salt-conf">https://github.com/radiasoft/salt-conf</a> &lt;<a href="https://github.com/radiasoft/salt-conf">https://github.com/radiasoft/salt-conf</a>&gt;
</span><br>
<span class="quotelev1">&gt; Container builders: <a href="https://github.com/radiasoft/containers/tree/master/radiasoft">https://github.com/radiasoft/containers/tree/master/radiasoft</a> &lt;<a href="https://github.com/radiasoft/containers/tree/master/radiasoft">https://github.com/radiasoft/containers/tree/master/radiasoft</a>&gt;
</span><br>
<span class="quotelev1">&gt; Early phase wiki: <a href="https://github.com/radiasoft/devops/wiki/DockerMPI">https://github.com/radiasoft/devops/wiki/DockerMPI</a> &lt;<a href="https://github.com/radiasoft/devops/wiki/DockerMPI">https://github.com/radiasoft/devops/wiki/DockerMPI</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rob
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29355.php">http://www.open-mpi.org/community/lists/users/2016/06/29355.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29358.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29356.php">Cabral, Matias A: "Re: [OMPI users] PSM vs PSM2"</a>
<li><strong>In reply to:</strong> <a href="29355.php">Rob Nagler: "[OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29358.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29358.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
