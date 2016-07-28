<?
$subject_val = "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 09:47:24 2016" -->
<!-- isoreceived="20160125144724" -->
<!-- sent="Mon, 25 Jan 2016 14:47:19 +0000" -->
<!-- isosent="20160125144719" -->
<!-- name="Kuhl, Spencer J" -->
<!-- email="spencer-kuhl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM" -->
<!-- id="BY2PR04MB71266F0CF0C47A8EFC511EC8EC70_at_BY2PR04MB712.namprd04.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Kuhl, Spencer J (<em>spencer-kuhl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 09:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28367.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>In reply to:</strong> <a href="28358.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28370.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Reply:</strong> <a href="28370.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve,
<br>
<p><p>I am curious as to how you set the cpu0 activity on the LED0.  Do you have a quick read on how you did that?
<br>
<p><p>Thanks,
<br>
<p><p>Spencer
<br>
<p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Steve O'Hara &lt;sohara_at_[hidden]&gt;
<br>
Sent: Sunday, January 24, 2016 2:39 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM
<br>
<p><p>Hi Gilles,
<br>
<p><p><p>Yes that's correct - one node with 3 cores is about 1.5 minutes for a 10 second simulation, this turns into 4 minutes when I send the job to 36 cores on 9 IP connected nodes.
<br>
<p><p><p>I haven't setup an x86 cluster to do a comparison, I know this would be a lot easier than setting up the Pis but to be honest, this is more about figuring out the performance characteristics of the technology and the one thing that the Pi gives you, is total visibility of each of the components and how they perform.
<br>
<p><p><p>I'll try a different strategy and come back to the list with some results.
<br>
<p><p><p>No I haven't tried the osu and imb tools, I'll do some reading and try and figure it out.
<br>
<p><p><p>For those that are interested, the attached PDF shows what I'm up to. I'll be happy to share the images for both the master and slaves.
<br>
<p><p><p>Thanks,
<br>
<p>Steve
<br>
<p><p><p><p><p><p><p>From: Gilles Gouaillardet [mailto:gilles.gouaillardet_at_[hidden]]
<br>
Sent: 24 January 2016 13:26
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM
<br>
<p><p><p>Steve,
<br>
<p><p><p>if I understand correctly, running on one node with 4 MPI tasks is three times faster than running on 10 nodes with 40 (10 ?) tasks.
<br>
<p><p><p>did you try this test on a x86 cluster and with tcp interconnect, and did you get better performance when increasing the number of nodes ?
<br>
<p><p><p>can you try to run on the pi cluster with one task per node, and increase the number of nodes one step at a time. does the performance improve ?
<br>
<p>then you can increase the number of tasks per node and see how it impacts performances.
<br>
<p><p><p>you can also run some standard MPI benchmark (osu, imb) and see if you get the performance you expect.
<br>
<p><p><p>Cheers,
<br>
<p><p><p>Gilles
<br>
<p>On Sunday, January 24, 2016, Steve O'Hara &lt;sohara_at_[hidden]&lt;mailto:sohara_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi,
<br>
<p><p><p>I'm afraid I'm pretty new to both OpenFOAM and openMPI so please excuse me if my questions are either stupid or badly framed.
<br>
<p><p><p>I've created a 10 Raspberry pi beowulf cluster for testing out MPI concepts and see how they are harnessed in OpenFOAM.  After a helluva lot of hassle, I've got the thing running using OpneMPI to run a solver in parallel.
<br>
<p>The problem I have is that if I switch the server node to not use the cluster (still use 3 cores in an MPI job) the job finishes in x minutes. If I tell it to use the 9 other members of the cluster, the same job takes x times 3!
<br>
<p><p><p>This is what I'm doing;
<br>
<p><p><p>1.       Create a mesh, adjust it with some other OF stuff
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
<p><p><p>Only step 4 Uses MPI and the other steps have a reasonably linear response time.
<br>
<p>Step 4 is characterised by a flurry of network activity, followed by all the Pis lighting up with CPU activity followed a long time of no CPU activity but huge network action.
<br>
<p>It's this last bit that is consuming all the time - is this a tear-down phase of MPI?
<br>
<p>Each of the Pi nodes is set up as slots=4 max_slots=4
<br>
<p><p><p>What is all the network activity?  It seems to happen after the solver has completed its job so I'm guessing it has to be MPI.
<br>
<p>The network interface on the Pi is not a stellar performer so is there anything I can do to minimise the network traffic?
<br>
<p><p><p>Thanks,
<br>
<p>Steve
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28367.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>In reply to:</strong> <a href="28358.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28370.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Reply:</strong> <a href="28370.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
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
