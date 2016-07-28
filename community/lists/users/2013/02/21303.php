<?
$subject_val = "Re: [OMPI users] Checkpointing an MPI application with OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 10:58:14 2013" -->
<!-- isoreceived="20130205155814" -->
<!-- sent="Tue, 5 Feb 2013 09:58:10 -0600" -->
<!-- isosent="20130205155810" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing an MPI application with OMPI" -->
<!-- id="CAANzjE=Y4eUdbYZ1ejdrhq1D-E5KtSg+kZYgXChfpVBGcSLAcA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51092BC3.9080100_at_calculquebec.ca" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 10:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21267.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a bit late in the thread, but I wanted to add one more note.
<br>
<p>The functionality that made it to v1.6 is fairly basic in terms of C/R
<br>
support in Open MPI. It supported a global checkpoint write, and (for a
<br>
time) a simple staged option (I think that is now broken).
<br>
<p>In the trunk (about 3 years ago is when it was all committed) we extended
<br>
the support to allow the user a bit more control over how the checkpoint
<br>
files are managed (in addition to other features like automatic recovery,
<br>
process migration, and debugging support). These storage techniques allowed
<br>
the user to request that a local tmp disk be used to stage a checkpoint.
<br>
This allows BLCR to write to the local file system and the application to
<br>
continue running while the checkpoint is being moved. Open MPI would stage
<br>
it back to the global file system (there were some quality of service
<br>
controls, and compression options). This effort was to help alleviate some
<br>
of the load on the network file system during the checkpoint burst - since
<br>
we are using a fully coordinated approach. It helped quite a bit in the
<br>
experiments that I ran as part of my PhD.
<br>
<p>Unfortunately, since that initial commit we have not been able to create a
<br>
release that includes those additional features. Most of the blame goes to
<br>
me for not having the resources to sustain support for them after
<br>
completing my PhD until now (as we start to prepare 1.7). So this has lead
<br>
to the unfortunate, but realistic situation where it will not be included
<br>
in 1.7 and is not available as a configuration option in the trunk (most of
<br>
the code is present, but it is know to not function correctly).
<br>
<p>My hope is to bring the C/R support back in the future, but I cannot commit
<br>
to any specific date at this time. As an open-source project, we are always
<br>
looking for developers to help out. So if you (or anyone else on the list)
<br>
are interested in helping bring this support back I am willing to help
<br>
advise where I can.
<br>
<p>Best,
<br>
Josh
<br>
<p>On Wed, Jan 30, 2013 at 8:18 AM, Maxime Boissonneault &lt;
<br>
maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Le 2013-01-29 21:02, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Jan 28, 2013, at 10:53 AM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev1">&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While our filesystem and management nodes are on UPS, our compute nodes
</span><br>
<span class="quotelev1">&gt; are not. With one average generic (power/cooling mostly) failure every one
</span><br>
<span class="quotelev1">&gt; or two months, running for weeks is just asking for trouble. If you add to
</span><br>
<span class="quotelev1">&gt; that typical dimm/cpu/networking failures (I estimated about 1 node goes
</span><br>
<span class="quotelev1">&gt; down per day because of some sort hardware failure, for a cluster of 960
</span><br>
<span class="quotelev1">&gt; nodes). With these numbers, a job running on 32 nodes for 7 days has a ~35%
</span><br>
<span class="quotelev1">&gt; chance of failing before it is done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been running this in my head all day - it just doesn't fit
</span><br>
<span class="quotelev1">&gt; experience, which really bothered me. So I spent a little time running the
</span><br>
<span class="quotelev1">&gt; calculation, and I came up with a number much lower (more like around 5%).
</span><br>
<span class="quotelev1">&gt; I'm not saying my rough number is correct, but it is at least a little
</span><br>
<span class="quotelev1">&gt; closer to what we see in the field.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Given that there are a lot of assumptions required when doing these
</span><br>
<span class="quotelev1">&gt; calculations, I would like to suggest you conduct a very simply and quick
</span><br>
<span class="quotelev1">&gt; experiment before investing tons of time on FT solutions. All you have to
</span><br>
<span class="quotelev1">&gt; do is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for the calculation. However, this is a cluster that I manage, I
</span><br>
<span class="quotelev1">&gt; do not use it per say, and running such statistical jobs on a large part of
</span><br>
<span class="quotelev1">&gt; the cluster for a long period of time is impossible. We do have the numbers
</span><br>
<span class="quotelev1">&gt; however. The cluster has 960 nodes. We experience roughly one power or
</span><br>
<span class="quotelev1">&gt; cooling failure per month or two months. Assuming one such failure per two
</span><br>
<span class="quotelev1">&gt; months, if you run for 1 month, you have a 50% chance your job will be
</span><br>
<span class="quotelev1">&gt; killed before it ends. If you run for 2 weeks, 25%, etc. These are very
</span><br>
<span class="quotelev1">&gt; rough estimates obviously, but it is way more than 5%.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition to that, we have a failure rate of ~0.1%/day, meaning that out
</span><br>
<span class="quotelev1">&gt; of 960, on average, one node will have a hardware failure every day. Most
</span><br>
<span class="quotelev1">&gt; of the time, this is a failure of one of the dimms. Considering each node
</span><br>
<span class="quotelev1">&gt; has 12 dimms of 2GB of memory, it means a dimm failure rate of ~0.0001 per
</span><br>
<span class="quotelev1">&gt; day. I don't know if that's bad or not, but this is roughly what we have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If it turns out you see power failure problems, then a simple, low-cost,
</span><br>
<span class="quotelev1">&gt; ride-thru power stabilizer might be a good solution. Flywheels and
</span><br>
<span class="quotelev1">&gt; capacitor-based systems can provide support for momentary power quality
</span><br>
<span class="quotelev1">&gt; issues at reasonably low costs for a cluster of your size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I doubt there is anything low cost for a 330 kW system, and in any case,
</span><br>
<span class="quotelev1">&gt; hardware upgrade is not an option since this a mid-life cluster. Again, as
</span><br>
<span class="quotelev1">&gt; I said, the filesystem (2 x 500 TB lustre partitions) and the management
</span><br>
<span class="quotelev1">&gt; nodes are on UPS, but there is no way to put the compute nodes on UPS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If your node hardware is the problem, or you decide you do want/need to
</span><br>
<span class="quotelev1">&gt; pursue an FT solution, then you might look at the OMPI-based solutions from
</span><br>
<span class="quotelev1">&gt; parties such as <a href="http://fault-tolerance.org">http://fault-tolerance.org</a> or the MPICH2 folks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the tip.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21267.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
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
