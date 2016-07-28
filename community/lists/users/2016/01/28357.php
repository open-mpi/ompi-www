<?
$subject_val = "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 15:22:01 2016" -->
<!-- isoreceived="20160124202201" -->
<!-- sent="Sun, 24 Jan 2016 20:21:58 +0000" -->
<!-- isosent="20160124202158" -->
<!-- name="Steve O'Hara" -->
<!-- email="sohara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM" -->
<!-- id="DB4PR05MB08149A5788345D2B1AD7E93DD0C60_at_DB4PR05MB0814.eurprd05.prod.outlook.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAPqNE2U9-uU0BMmKa6s1T9w1nhQ6STOs0efYJ2LN79vOPa+iHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM<br>
<strong>From:</strong> Steve O'Hara (<em>sohara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-24 15:21:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28358.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28356.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>In reply to:</strong> <a href="28350.php">John Hearns: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28351.php">Gilles Gouaillardet: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>

<br>
Yes I did, in fact the master node is an NFS server and the other 9 nodes auto-mount it on startup.  The NFS partition on the master is also a RAMdisk.
<br>
The initial method was to create the OpenFOAM case in the NFS partition and then just point the nodes at it using wdir on the mpirun command line. It worked, but wow that lit up the network switch!
<br>
So I changed the method so that it actually copied the case process folders to each node prior to running mpirun.  It improved things, but still enormous amounts of IP traffic.
<br>

<br>
From: John Hearns [mailto:hearnsj_at_[hidden]]
<br>
Sent: 24 January 2016 09:28
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM
<br>

<br>
Hi Steve.
<br>
Regarding Step 3, have you thought of using some shared storage?
<br>
NFS shared drive perhaps, or there are many alternatives!
<br>

<br>
On 23 January 2016 at 20:47, Steve O'Hara &lt;sohara_at_[hidden]&lt;mailto:sohara_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>

<br>
I&#226;&#128;&#153;m afraid I&#226;&#128;&#153;m pretty new to both OpenFOAM and openMPI so please excuse me if my questions are either stupid or badly framed.
<br>

<br>
I&#226;&#128;&#153;ve created a 10 Raspberry pi beowulf cluster for testing out MPI concepts and see how they are harnessed in OpenFOAM.  After a helluva lot of hassle, I&#226;&#128;&#153;ve got the thing running using OpneMPI to run a solver in parallel.
<br>
The problem I have is that if I switch the server node to not use the cluster (still use 3 cores in an MPI job) the job finishes in x minutes. If I tell it to use the 9 other members of the cluster, the same job takes x times 3!
<br>

<br>
This is what I&#226;&#128;&#153;m doing;
<br>

<br>

<br>
1.       Create a mesh, adjust it with some other OF stuff
<br>

<br>
2.       Run the process to split the job into processes for each node
<br>

<br>
3.       Copy the process directories to each of the affected nodes using scp
<br>

<br>
4.       Run mpirun with a hosts file
<br>

<br>
5.       Re-constitute the case directory by copying back the processor folders
<br>

<br>
6.       Re-construct the case
<br>

<br>
Only step 4 Uses MPI and the other steps have a reasonably linear response time.
<br>
Step 4 is characterised by a flurry of network activity, followed by all the Pis lighting up with CPU activity followed a long time of no CPU activity but huge network action.
<br>
It&#226;&#128;&#153;s this last bit that is consuming all the time &#226;&#128;&#147; is this a tear-down phase of MPI?
<br>
Each of the Pi nodes is set up as slots=4 max_slots=4
<br>

<br>
What is all the network activity?  It seems to happen after the solver has completed its job so I&#226;&#128;&#153;m guessing it has to be MPI.
<br>
The network interface on the Pi is not a stellar performer so is there anything I can do to minimise the network traffic?
<br>

<br>
Thanks,
<br>
Steve
<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28349.php">http://www.open-mpi.org/community/lists/users/2016/01/28349.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28358.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28356.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>In reply to:</strong> <a href="28350.php">John Hearns: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28351.php">Gilles Gouaillardet: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
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
