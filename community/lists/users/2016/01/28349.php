<?
$subject_val = "[OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 23 15:47:23 2016" -->
<!-- isoreceived="20160123204723" -->
<!-- sent="Sat, 23 Jan 2016 20:47:10 +0000" -->
<!-- isosent="20160123204710" -->
<!-- name="Steve O'Hara" -->
<!-- email="sohara_at_[hidden]" -->
<!-- subject="[OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM" -->
<!-- id="AM3PR05MB0806D892ABD4573E421D887CD0C50_at_AM3PR05MB0806.eurprd05.prod.outlook.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM<br>
<strong>From:</strong> Steve O'Hara (<em>sohara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-23 15:47:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28350.php">John Hearns: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28348.php">Emani, Murali: "[OMPI users] Error in BTL with larger number of nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28350.php">John Hearns: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Reply:</strong> <a href="28350.php">John Hearns: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Reply:</strong> <a href="28351.php">Gilles Gouaillardet: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm afraid I'm pretty new to both OpenFOAM and openMPI so please excuse me if my questions are either stupid or badly framed.
<br>
<p>I've created a 10 Raspberry pi beowulf cluster for testing out MPI concepts and see how they are harnessed in OpenFOAM.  After a helluva lot of hassle, I've got the thing running using OpneMPI to run a solver in parallel.
<br>
The problem I have is that if I switch the server node to not use the cluster (still use 3 cores in an MPI job) the job finishes in x minutes. If I tell it to use the 9 other members of the cluster, the same job takes x times 3!
<br>
<p>This is what I'm doing;
<br>
<p><p>1.       Create a mesh, adjust it with some other OF stuff
<br>
<p>2.       Run the process to split the job into processes for each node
<br>
<p>3.       Copy the process directories to each of the affected nodes using scp
<br>
<p>4.       Run mpirun with a hosts file
<br>
<p>5.       Re-constitute the case directory by copying back the processor folders
<br>
<p>6.       Re-construct the case
<br>
<p>Only step 4 Uses MPI and the other steps have a reasonably linear response time.
<br>
Step 4 is characterised by a flurry of network activity, followed by all the Pis lighting up with CPU activity followed a long time of no CPU activity but huge network action.
<br>
It's this last bit that is consuming all the time - is this a tear-down phase of MPI?
<br>
Each of the Pi nodes is set up as slots=4 max_slots=4
<br>
<p>What is all the network activity?  It seems to happen after the solver has completed its job so I'm guessing it has to be MPI.
<br>
The network interface on the Pi is not a stellar performer so is there anything I can do to minimise the network traffic?
<br>
<p>Thanks,
<br>
Steve
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28349/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28350.php">John Hearns: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28348.php">Emani, Murali: "[OMPI users] Error in BTL with larger number of nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28350.php">John Hearns: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Reply:</strong> <a href="28350.php">John Hearns: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Reply:</strong> <a href="28351.php">Gilles Gouaillardet: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
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
