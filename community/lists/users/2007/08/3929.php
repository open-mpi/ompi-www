<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 12:59:44 2007" -->
<!-- isoreceived="20070828165944" -->
<!-- sent="Tue, 28 Aug 2007 12:59:36 -0400" -->
<!-- isosent="20070828165936" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun" -->
<!-- id="20070828165936.GJ26072_at_avicenna.cc.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="21ED1C60-D24D-494E-9512-B1DAF048C998_at_lanl.gov" -->
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
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-28 12:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3930.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Previous message:</strong> <a href="3928.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>In reply to:</strong> <a href="3928.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3930.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Reply:</strong> <a href="3930.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Brian Barrett on Tue, Aug 28, 2007 at 12:22:29PM EDT:
<br>
<span class="quotelev1">&gt; On Aug 27, 2007, at 3:14 PM, Lev Givon wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have OpenMPI 1.2.3 installed on an XGrid cluster and a separate Mac
</span><br>
<span class="quotelev2">&gt; &gt; client that I am using to submit jobs to the head (controller) node of
</span><br>
<span class="quotelev2">&gt; &gt; the cluster. The cluster's compute nodes are all connected to the head
</span><br>
<span class="quotelev2">&gt; &gt; node via a private network and are not running any firewalls. When I
</span><br>
<span class="quotelev2">&gt; &gt; try running jobs with mpirun directly on the cluster's head node, they
</span><br>
<span class="quotelev2">&gt; &gt; execute successfully; if I attempt to submit the jobs from the client
</span><br>
<span class="quotelev2">&gt; &gt; (which can run jobs on the cluster using the xgrid command line tool)
</span><br>
<span class="quotelev2">&gt; &gt; with mpirun, however, they appear to hang indefinitely (i.e., a job ID
</span><br>
<span class="quotelev2">&gt; &gt; is created, but the mpirun itself never returns or terminates). Is it
</span><br>
<span class="quotelev2">&gt; &gt; nececessary to configure the firewall on the submission client to
</span><br>
<span class="quotelev2">&gt; &gt; grant access to the cluster head node in order to remotely submit jobs
</span><br>
<span class="quotelev2">&gt; &gt; to the cluster's head node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently, every node on which an MPI process is launched must be
</span><br>
<span class="quotelev1">&gt; able to open a connection to a random port on the machine running
</span><br>
<span class="quotelev1">&gt; mpirun.  So in your case, you'd have to configure the network on the
</span><br>
<span class="quotelev1">&gt; cluster to be able to connect back to your workstation (and the
</span><br>
<span class="quotelev1">&gt; workstation would have to allow connections from all your cluster
</span><br>
<span class="quotelev1">&gt; nodes). Far from ideal, but it's what it is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p>Can this be avoided by submitting the &quot;mpirun -n 10 myProg&quot; command
<br>
directly to the controller node with the xgrid command line tool? For
<br>
some reason, sending the above command to the cluster results in a
<br>
&quot;task: failed with status 255&quot; error even though I can successfully
<br>
run other programs or commands to the cluster with the xgrid tool.  I
<br>
know that OpenMPI on the cluster is running properly because I can run
<br>
programs with mpirun successfully when logged into the controller node
<br>
itself.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L.G.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3930.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Previous message:</strong> <a href="3928.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>In reply to:</strong> <a href="3928.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3930.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Reply:</strong> <a href="3930.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
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
