<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 11:33:17 2016" -->
<!-- isoreceived="20160606153317" -->
<!-- sent="Mon, 6 Jun 2016 09:32:35 -0600" -->
<!-- isosent="20160606153235" -->
<!-- name="Rob Nagler" -->
<!-- email="openmpi-wooxi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAJB=V02ccu3bQrjXLbCO60eDF_iCn3=JtSZ4TtC9w8zy7RoQVA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="575575BE.8060800_at_letai.org.il" -->
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
<strong>Date:</strong> 2016-06-06 11:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29383.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29381.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29381.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29383.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29383.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29391.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29512.php">Dave Love: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, John. I sometimes wonder if I'm the only one out there with this
<br>
particular problem.
<br>
<p>Ralph, thanks for sticking with me. :) Using a pool of uids doesn't really
<br>
work due to the way cgroups/containers works. It also would require
<br>
changing the permissions of all of the user's files, which would create
<br>
issues for Jupyter/Hub's access to the files, which is used for in situ
<br>
monitoring.
<br>
<p>Docker does not yet handle uid mapping at the container level (1.10 added
<br>
mappings for the daemon). We have solved this problem
<br>
&lt;<a href="https://github.com/radiasoft/containers/blob/fc63d3c0d2ffe7e8a80ed1e2a8dc44a33c08cb46/bin/build-docker.sh#L110">https://github.com/radiasoft/containers/blob/fc63d3c0d2ffe7e8a80ed1e2a8dc44a33c08cb46/bin/build-docker.sh#L110</a>&gt;
<br>
by adding a uid/gid switcher at container startup for our images. The trick
<br>
is to change the uid/gid of the &quot;container user&quot; with usermod and groupmod.
<br>
This only works, however, with images we provide. I'd like a solution that
<br>
allows us to start arbitrary/unsafe images, relying on cgroups to their job.
<br>
<p>Gilles, the containers do lock the user down, but the problem is that the
<br>
file system space has to be dynamically bound to the containers across the
<br>
cluster. JuptyerHub solves this problem by understanding the concept of a
<br>
user, and providing a hook to change the directory to be mounted.
<br>
<p>Daniel, we've had bad experiences with ZoL. It's allocation algorithm
<br>
degrades rapidly when the file system gets over 80% full. It still is not
<br>
integrated into major distros, which leads to dkms nightmares on system
<br>
upgrades. I don't really see Flocker as helping in this regard, because the
<br>
problem is the scheduler, not the file system. We know which directory we
<br>
have to mount from the cluster file system, just need to get the scheduler
<br>
to allow us to mount that with the container that is running slurmd.
<br>
<p>I'll play with Slurm Elastic Compute this week to see how it works.
<br>
<p>Rob
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29382/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29383.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29381.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29381.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29383.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29383.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29391.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29512.php">Dave Love: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
