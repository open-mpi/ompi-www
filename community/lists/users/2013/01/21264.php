<?
$subject_val = "Re: [OMPI users] Checkpointing an MPI application with OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 21:02:56 2013" -->
<!-- isoreceived="20130130020256" -->
<!-- sent="Tue, 29 Jan 2013 18:02:47 -0800" -->
<!-- isosent="20130130020247" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing an MPI application with OMPI" -->
<!-- id="A7E7E0DF-B5BD-4CC3-9105-5710AF4CF07D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5106C92E.2050909_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing an MPI application with OMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 21:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21263.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>In reply to:</strong> <a href="21250.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21266.php">Constantinos Makassikis: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="21266.php">Constantinos Makassikis: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="21267.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2013, at 10:53 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; While our filesystem and management nodes are on UPS, our compute nodes are not. With one average generic (power/cooling mostly) failure every one or two months, running for weeks is just asking for trouble. If you add to that typical dimm/cpu/networking failures (I estimated about 1 node goes down per day because of some sort hardware failure, for a cluster of 960 nodes). With these numbers, a job running on 32 nodes for 7 days has a ~35% chance of failing before it is done.
</span><br>
<p>I've been running this in my head all day - it just doesn't fit experience, which really bothered me. So I spent a little time running the calculation, and I came up with a number much lower (more like around 5%). I'm not saying my rough number is correct, but it is at least a little closer to what we see in the field.
<br>
<p>Given that there are a lot of assumptions required when doing these calculations, I would like to suggest you conduct a very simply and quick experiment before investing tons of time on FT solutions. All you have to do is:
<br>
<p>1. run your application on your existing cluster using your favorite non-FT version of OMPI (I believe you were using 1.6.3). If you like, you can run multiple copies in parallel using different sets of nodes.
<br>
<p>2. any time you have a failure, add it to your count and record the reason (power failure vs node hardware vs software).
<br>
<p>If you do that for two months, you'll build a very accurate assessment of the true failure rate on your cluster. My expectation is that you might see 0-2 failures over 32 runs (4 running in parallel each week) during that entire period, and learn that FT really isn't an issue for your installation.
<br>
<p>If it turns out you see power failure problems, then a simple, low-cost, ride-thru power stabilizer might be a good solution. Flywheels and capacitor-based systems can provide support for momentary power quality issues at reasonably low costs for a cluster of your size.
<br>
<p>If your node hardware is the problem, or you decide you do want/need to pursue an FT solution, then you might look at the OMPI-based solutions from parties such as <a href="http://fault-tolerance.org">http://fault-tolerance.org</a> or the MPICH2 folks.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21264/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21263.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>In reply to:</strong> <a href="21250.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21266.php">Constantinos Makassikis: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="21266.php">Constantinos Makassikis: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="21267.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
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
