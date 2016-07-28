<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 12:23:33 2007" -->
<!-- isoreceived="20070828162333" -->
<!-- sent="Tue, 28 Aug 2007 10:22:29 -0600" -->
<!-- isosent="20070828162229" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun" -->
<!-- id="21ED1C60-D24D-494E-9512-B1DAF048C998_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070827211429.GE2785_at_avicenna.cc.columbia.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-28 12:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3929.php">Lev Givon: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Previous message:</strong> <a href="3927.php">Prasun Ratn: "Re: [OMPI users] MPI_Type_* calls in ompi_coll_tuned_alltoall_intra_bruck"</a>
<li><strong>In reply to:</strong> <a href="3924.php">Lev Givon: "[OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3929.php">Lev Givon: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Reply:</strong> <a href="3929.php">Lev Givon: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2007, at 3:14 PM, Lev Givon wrote:
<br>
<p><span class="quotelev1">&gt; I have OpenMPI 1.2.3 installed on an XGrid cluster and a separate Mac
</span><br>
<span class="quotelev1">&gt; client that I am using to submit jobs to the head (controller) node of
</span><br>
<span class="quotelev1">&gt; the cluster. The cluster's compute nodes are all connected to the head
</span><br>
<span class="quotelev1">&gt; node via a private network and are not running any firewalls. When I
</span><br>
<span class="quotelev1">&gt; try running jobs with mpirun directly on the cluster's head node, they
</span><br>
<span class="quotelev1">&gt; execute successfully; if I attempt to submit the jobs from the client
</span><br>
<span class="quotelev1">&gt; (which can run jobs on the cluster using the xgrid command line tool)
</span><br>
<span class="quotelev1">&gt; with mpirun, however, they appear to hang indefinitely (i.e., a job ID
</span><br>
<span class="quotelev1">&gt; is created, but the mpirun itself never returns or terminates). Is it
</span><br>
<span class="quotelev1">&gt; nececessary to configure the firewall on the submission client to
</span><br>
<span class="quotelev1">&gt; grant access to the cluster head node in order to remotely submit jobs
</span><br>
<span class="quotelev1">&gt; to the cluster's head node?
</span><br>
<p>Currently, every node on which an MPI process is launched must be  
<br>
able to open a connection to a random port on the machine running  
<br>
mpirun.  So in your case, you'd have to configure the network on the  
<br>
cluster to be able to connect back to your workstation (and the  
<br>
workstation would have to allow connections from all your cluster  
<br>
nodes).  Far from ideal, but it's what it is.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3929.php">Lev Givon: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Previous message:</strong> <a href="3927.php">Prasun Ratn: "Re: [OMPI users] MPI_Type_* calls in ompi_coll_tuned_alltoall_intra_bruck"</a>
<li><strong>In reply to:</strong> <a href="3924.php">Lev Givon: "[OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3929.php">Lev Givon: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Reply:</strong> <a href="3929.php">Lev Givon: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
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
