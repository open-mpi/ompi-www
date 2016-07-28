<?
$subject_val = "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 04:28:24 2016" -->
<!-- isoreceived="20160124092824" -->
<!-- sent="Sun, 24 Jan 2016 09:27:43 +0000" -->
<!-- isosent="20160124092743" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM" -->
<!-- id="CAPqNE2U9-uU0BMmKa6s1T9w1nhQ6STOs0efYJ2LN79vOPa+iHQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AM3PR05MB0806D892ABD4573E421D887CD0C50_at_AM3PR05MB0806.eurprd05.prod.outlook.com" -->
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
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-24 04:27:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28351.php">Gilles Gouaillardet: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28349.php">Steve O'Hara: "[OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>In reply to:</strong> <a href="28349.php">Steve O'Hara: "[OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28357.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Reply:</strong> <a href="28357.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Steve.
<br>
Regarding Step 3, have you thought of using some shared storage?
<br>
NFS shared drive perhaps, or there are many alternatives!
<br>
<p>On 23 January 2016 at 20:47, Steve O'Hara &lt;sohara_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m afraid I&#226;&#128;&#153;m pretty new to both OpenFOAM and openMPI so please excuse me
</span><br>
<span class="quotelev1">&gt; if my questions are either stupid or badly framed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve created a 10 Raspberry pi beowulf cluster for testing out MPI
</span><br>
<span class="quotelev1">&gt; concepts and see how they are harnessed in OpenFOAM.  After a helluva lot
</span><br>
<span class="quotelev1">&gt; of hassle, I&#226;&#128;&#153;ve got the thing running using OpneMPI to run a solver in
</span><br>
<span class="quotelev1">&gt; parallel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem I have is that if I switch the server node to not use the
</span><br>
<span class="quotelev1">&gt; cluster (still use 3 cores in an MPI job) the job finishes in x minutes. If
</span><br>
<span class="quotelev1">&gt; I tell it to use the 9 other members of the cluster, the same job takes x
</span><br>
<span class="quotelev1">&gt; times 3!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is what I&#226;&#128;&#153;m doing;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.       Create a mesh, adjust it with some other OF stuff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.       Run the process to split the job into processes for each node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3.       Copy the process directories to each of the affected nodes using
</span><br>
<span class="quotelev1">&gt; scp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4.       Run mpirun with a hosts file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5.       Re-constitute the case directory by copying back the processor
</span><br>
<span class="quotelev1">&gt; folders
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6.       Re-construct the case
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only step 4 Uses MPI and the other steps have a reasonably linear response
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step 4 is characterised by a flurry of network activity, followed by all
</span><br>
<span class="quotelev1">&gt; the Pis lighting up with CPU activity followed a long time of no CPU
</span><br>
<span class="quotelev1">&gt; activity but huge network action.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It&#226;&#128;&#153;s this last bit that is consuming all the time &#226;&#128;&#147; is this a tear-down
</span><br>
<span class="quotelev1">&gt; phase of MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each of the Pi nodes is set up as slots=4 max_slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is all the network activity?  It seems to happen after the solver has
</span><br>
<span class="quotelev1">&gt; completed its job so I&#226;&#128;&#153;m guessing it has to be MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The network interface on the Pi is not a stellar performer so is there
</span><br>
<span class="quotelev1">&gt; anything I can do to minimise the network traffic?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28349.php">http://www.open-mpi.org/community/lists/users/2016/01/28349.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28350/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28351.php">Gilles Gouaillardet: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28349.php">Steve O'Hara: "[OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>In reply to:</strong> <a href="28349.php">Steve O'Hara: "[OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28357.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Reply:</strong> <a href="28357.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
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
