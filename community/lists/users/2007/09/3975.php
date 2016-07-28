<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  4 00:19:32 2007" -->
<!-- isoreceived="20070904041932" -->
<!-- sent="Tue, 4 Sep 2007 00:19:24 -0400" -->
<!-- isosent="20070904041924" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun" -->
<!-- id="20070904041923.GA9841_at_avicenna.cc.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3EB28715-76AD-46C4-B168-476E9B3B35C1_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-09-04 00:19:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3976.php">Thompson, Aidan P.: "[OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Previous message:</strong> <a href="3974.php">Corey Putkunz: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3930.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Brian Barrett on Tue, Aug 28, 2007 at 05:07:51PM EDT:
<br>
<span class="quotelev1">&gt; On Aug 28, 2007, at 10:59 AM, Lev Givon wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Received from Brian Barrett on Tue, Aug 28, 2007 at 12:22:29PM EDT:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 27, 2007, at 3:14 PM, Lev Givon wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have OpenMPI 1.2.3 installed on an XGrid cluster and a separate  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Mac
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; client that I am using to submit jobs to the head (controller)  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the cluster. The cluster's compute nodes are all connected to the  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; head
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node via a private network and are not running any firewalls. When I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; try running jobs with mpirun directly on the cluster's head node,  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; they
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; execute successfully; if I attempt to submit the jobs from the  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; client
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (which can run jobs on the cluster using the xgrid command line  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tool)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with mpirun, however, they appear to hang indefinitely (i.e., a  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; job ID
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is created, but the mpirun itself never returns or terminates).  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; nececessary to configure the firewall on the submission client to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; grant access to the cluster head node in order to remotely submit  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; jobs
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to the cluster's head node?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Currently, every node on which an MPI process is launched must be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; able to open a connection to a random port on the machine running
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun.  So in your case, you'd have to configure the network on the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cluster to be able to connect back to your workstation (and the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; workstation would have to allow connections from all your cluster
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes). Far from ideal, but it's what it is.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can this be avoided by submitting the &quot;mpirun -n 10 myProg&quot; command
</span><br>
<span class="quotelev2">&gt; &gt; directly to the controller node with the xgrid command line tool? For
</span><br>
<span class="quotelev2">&gt; &gt; some reason, sending the above command to the cluster results in a
</span><br>
<span class="quotelev2">&gt; &gt; &quot;task: failed with status 255&quot; error even though I can successfully
</span><br>
<span class="quotelev2">&gt; &gt; run other programs or commands to the cluster with the xgrid tool.  I
</span><br>
<span class="quotelev2">&gt; &gt; know that OpenMPI on the cluster is running properly because I can run
</span><br>
<span class="quotelev2">&gt; &gt; programs with mpirun successfully when logged into the controller node
</span><br>
<span class="quotelev2">&gt; &gt; itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI was designed to be the one calling XGrid's scheduling  
</span><br>
<span class="quotelev1">&gt; algorithm, so I'm pretty sure that you can't submit a job that just  
</span><br>
<span class="quotelev1">&gt; runs Open MPI's mpirun.  That wasn't really in our original design  
</span><br>
<span class="quotelev1">&gt; space as an option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p>I see.
<br>
<p>Apart from employing some grid package with more features than Xgrid
<br>
(e.g., perhaps Sun GridEngine), is anyone aware of a mechanism that
<br>
would allow for the submission of MPI jobs to a cluster's head node
<br>
from remote submit hosts without having to provide every user with an
<br>
actual Unix account on the head node?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L.G.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3976.php">Thompson, Aidan P.: "[OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Previous message:</strong> <a href="3974.php">Corey Putkunz: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3930.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- nextthread="start" -->
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
