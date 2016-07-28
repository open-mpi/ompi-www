<?
$subject_val = "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 13:06:42 2016" -->
<!-- isoreceived="20160224180642" -->
<!-- sent="Wed, 24 Feb 2016 18:06:38 +0000" -->
<!-- isosent="20160224180638" -->
<!-- name="Steve O'Hara" -->
<!-- email="sohara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM" -->
<!-- id="DB4PR05MB0814E2110F643EB5E010378ED0A50_at_DB4PR05MB0814.eurprd05.prod.outlook.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DB4PR05MB08141926D694A927ED5A9D0AD0C60_at_DB4PR05MB0814.eurprd05.prod.outlook.com" -->
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
<strong>Date:</strong> 2016-02-24 13:06:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28575.php">dpchoudh .: "[OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="28573.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28358.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So, an update on how this all turned out.
<br>

<br>
Basically, everything is working correctly. The problem is the poor Ethernet comms performance of the Pi (and my rather cheap 10Mbit switch).
<br>
The main resolver application I use requires talking to all the other nodes pretty much continuously. The Pi Ethernet port is simply not up to this type of thing and becomes the main bottleneck.
<br>

<br>
It was an interesting exercise to go through and the setup would almost certainly work nicely for MPI applications that are more in the vein of map-reduce type.
<br>

<br>
Steve
<br>

<br>
From: Steve O'Hara
<br>
Sent: 24 January 2016 20:39
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: RE: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM
<br>

<br>
Hi Gilles,
<br>

<br>
Yes that&#226;&#128;&#153;s correct &#226;&#128;&#147; one node with 3 cores is about 1.5 minutes for a 10 second simulation, this turns into 4 minutes when I send the job to 36 cores on 9 IP connected nodes.
<br>

<br>
I haven&#226;&#128;&#153;t setup an x86 cluster to do a comparison, I know this would be a lot easier than setting up the Pis but to be honest, this is more about figuring out the performance characteristics of the technology and the one thing that the Pi gives you, is total visibility of each of the components and how they perform.
<br>

<br>
I&#226;&#128;&#153;ll try a different strategy and come back to the list with some results.
<br>

<br>
No I haven&#226;&#128;&#153;t tried the osu and imb tools, I&#226;&#128;&#153;ll do some reading and try and figure it out.
<br>

<br>
For those that are interested, the attached PDF shows what I&#226;&#128;&#153;m up to. I&#226;&#128;&#153;ll be happy to share the images for both the master and slaves.
<br>

<br>
Thanks,
<br>
Steve
<br>

<br>

<br>

<br>
From: Gilles Gouaillardet [mailto:gilles.gouaillardet_at_[hidden]]
<br>
Sent: 24 January 2016 13:26
<br>
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM
<br>

<br>
Steve,
<br>

<br>
if I understand correctly, running on one node with 4 MPI tasks is three times faster than running on 10 nodes with 40 (10 ?) tasks.
<br>

<br>
did you try this test on a x86 cluster and with tcp interconnect, and did you get better performance when increasing the number of nodes ?
<br>

<br>
can you try to run on the pi cluster with one task per node, and increase the number of nodes one step at a time. does the performance improve ?
<br>
then you can increase the number of tasks per node and see how it impacts performances.
<br>

<br>
you can also run some standard MPI benchmark (osu, imb) and see if you get the performance you expect.
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>

<br>
On Sunday, January 24, 2016, Steve O'Hara &lt;sohara_at_[hidden]&lt;mailto:sohara_at_[hidden]&gt;&gt; wrote:
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28574/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28575.php">dpchoudh .: "[OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="28573.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28358.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
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
