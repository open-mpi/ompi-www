<?
$subject_val = "Re: [OMPI users] Checkpointing an MPI application with OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:18:47 2013" -->
<!-- isoreceived="20130130141847" -->
<!-- sent="Wed, 30 Jan 2013 09:18:43 -0500" -->
<!-- isosent="20130130141843" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing an MPI application with OMPI" -->
<!-- id="51092BC3.9080100_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A7E7E0DF-B5BD-4CC3-9105-5710AF4CF07D_at_open-mpi.org" -->
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
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 09:18:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21268.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21266.php">Constantinos Makassikis: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21264.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21303.php">Josh Hursey: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21303.php">Josh Hursey: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 2013-01-29 21:02, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 10:53 AM, Maxime Boissonneault 
</span><br>
<span class="quotelev1">&gt; &lt;maxime.boissonneault_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While our filesystem and management nodes are on UPS, our compute 
</span><br>
<span class="quotelev2">&gt;&gt; nodes are not. With one average generic (power/cooling mostly) 
</span><br>
<span class="quotelev2">&gt;&gt; failure every one or two months, running for weeks is just asking for 
</span><br>
<span class="quotelev2">&gt;&gt; trouble. If you add to that typical dimm/cpu/networking failures (I 
</span><br>
<span class="quotelev2">&gt;&gt; estimated about 1 node goes down per day because of some sort 
</span><br>
<span class="quotelev2">&gt;&gt; hardware failure, for a cluster of 960 nodes). With these numbers, a 
</span><br>
<span class="quotelev2">&gt;&gt; job running on 32 nodes for 7 days has a ~35% chance of failing 
</span><br>
<span class="quotelev2">&gt;&gt; before it is done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been running this in my head all day - it just doesn't fit 
</span><br>
<span class="quotelev1">&gt; experience, which really bothered me. So I spent a little time running 
</span><br>
<span class="quotelev1">&gt; the calculation, and I came up with a number much lower (more like 
</span><br>
<span class="quotelev1">&gt; around 5%). I'm not saying my rough number is correct, but it is at 
</span><br>
<span class="quotelev1">&gt; least a little closer to what we see in the field.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that there are a lot of assumptions required when doing these 
</span><br>
<span class="quotelev1">&gt; calculations, I would like to suggest you conduct a very simply and 
</span><br>
<span class="quotelev1">&gt; quick experiment before investing tons of time on FT solutions. All 
</span><br>
<span class="quotelev1">&gt; you have to do is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thanks for the calculation. However, this is a cluster that I manage, I 
<br>
do not use it per say, and running such statistical jobs on a large part 
<br>
of the cluster for a long period of time is impossible. We do have the 
<br>
numbers however. The cluster has 960 nodes. We experience roughly one 
<br>
power or cooling failure per month or two months. Assuming one such 
<br>
failure per two months, if you run for 1 month, you have a 50% chance 
<br>
your job will be killed before it ends. If you run for 2 weeks, 25%, 
<br>
etc. These are very rough estimates obviously, but it is way more than 5%.
<br>
<p>In addition to that, we have a failure rate of ~0.1%/day, meaning that 
<br>
out of 960, on average, one node will have a hardware failure every day. 
<br>
Most of the time, this is a failure of one of the dimms. Considering 
<br>
each node has 12 dimms of 2GB of memory, it means a dimm failure rate of 
<br>
~0.0001 per day. I don't know if that's bad or not, but this is roughly 
<br>
what we have.
<br>
<span class="quotelev1">&gt; If it turns out you see power failure problems, then a simple, 
</span><br>
<span class="quotelev1">&gt; low-cost, ride-thru power stabilizer might be a good solution. 
</span><br>
<span class="quotelev1">&gt; Flywheels and capacitor-based systems can provide support for 
</span><br>
<span class="quotelev1">&gt; momentary power quality issues at reasonably low costs for a cluster 
</span><br>
<span class="quotelev1">&gt; of your size.
</span><br>
I doubt there is anything low cost for a 330 kW system, and in any case, 
<br>
hardware upgrade is not an option since this a mid-life cluster. Again, 
<br>
as I said, the filesystem (2 x 500 TB lustre partitions) and the 
<br>
management nodes are on UPS, but there is no way to put the compute 
<br>
nodes on UPS.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your node hardware is the problem, or you decide you do want/need 
</span><br>
<span class="quotelev1">&gt; to pursue an FT solution, then you might look at the OMPI-based 
</span><br>
<span class="quotelev1">&gt; solutions from parties such as <a href="http://fault-tolerance.org">http://fault-tolerance.org</a> or the 
</span><br>
<span class="quotelev1">&gt; MPICH2 folks.
</span><br>
Thanks for the tip.
<br>
<p>Best regards,
<br>
<p>Maxime
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21268.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21266.php">Constantinos Makassikis: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21264.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21303.php">Josh Hursey: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21303.php">Josh Hursey: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
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
