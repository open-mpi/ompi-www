<?
$subject_val = "[OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 18:58:51 2016" -->
<!-- isoreceived="20160602225851" -->
<!-- sent="Thu, 2 Jun 2016 16:58:09 -0600" -->
<!-- isosent="20160602225809" -->
<!-- name="Rob Nagler" -->
<!-- email="openmpi-wooxi_at_[hidden]" -->
<!-- subject="[OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAJB=V02GagbENZjyzMNb5iOngvuGTqN_ewpWoHyt5QnBJaOr2w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Docker Cluster Queue Manager<br>
<strong>From:</strong> Rob Nagler (<em>openmpi-wooxi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 18:58:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29356.php">Cabral, Matias A: "Re: [OMPI users] PSM vs PSM2"</a>
<li><strong>Previous message:</strong> <a href="29354.php">dpchoudh .: "[OMPI users] PSM vs PSM2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29357.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29357.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29359.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29365.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We would like to use MPI on Docker with arbitrarily configured clusters
<br>
(e.g. created with StarCluster or bare metal). What I'm curious about is if
<br>
there is a queue manager that understands Docker, file systems, MPI, and
<br>
OpenAuth. JupyterHub does a lot of this, but it doesn't interface with MPI.
<br>
Ideally, we'd like users to be able to queue up jobs directly from
<br>
JupyterHub.
<br>
<p>Currently, we can configure and initiate an MPI-compatible Docker cluster
<br>
running on a VPC using Salt. What's missing is the ability to manage a
<br>
queue of these clusters. Here's a list of requirements:
<br>
<p><p>&nbsp;&nbsp;&nbsp;- JupyterHub users do not have Unix user ids
<br>
&nbsp;&nbsp;&nbsp;- Containers must be started as a non-root guest user (--user)
<br>
&nbsp;&nbsp;&nbsp;- JupyterHub user's data directory is mounted in container
<br>
&nbsp;&nbsp;&nbsp;- Data is shared via NFS or other cluster file system
<br>
&nbsp;&nbsp;&nbsp;- sshd runs in container for MPI as guest user
<br>
&nbsp;&nbsp;&nbsp;- Results have to be reported back to GitHub user
<br>
&nbsp;&nbsp;&nbsp;- MPI network must be visible (--net=host)
<br>
&nbsp;&nbsp;&nbsp;- Queue manager must be compatible with the above
<br>
&nbsp;&nbsp;&nbsp;- JupyterHub user is not allowed to interact with Docker directly
<br>
&nbsp;&nbsp;&nbsp;- Docker images are user selectable (from an approved list)
<br>
&nbsp;&nbsp;&nbsp;- Jupyter and MPI containers started from same image
<br>
<p>Know of a system which supports this?
<br>
<p>Our code and config are open source, and your feedback would be greatly
<br>
appreciated.
<br>
<p>Salt configuration: <a href="https://github.com/radiasoft/salt-conf">https://github.com/radiasoft/salt-conf</a>
<br>
Container builders:
<br>
<a href="https://github.com/radiasoft/containers/tree/master/radiasoft">https://github.com/radiasoft/containers/tree/master/radiasoft</a>
<br>
Early phase wiki: <a href="https://github.com/radiasoft/devops/wiki/DockerMPI">https://github.com/radiasoft/devops/wiki/DockerMPI</a>
<br>
<p>Thanks,
<br>
Rob
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29355/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29356.php">Cabral, Matias A: "Re: [OMPI users] PSM vs PSM2"</a>
<li><strong>Previous message:</strong> <a href="29354.php">dpchoudh .: "[OMPI users] PSM vs PSM2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29357.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29357.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29359.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29365.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
