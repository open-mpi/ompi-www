<?
$subject_val = "Re: [OMPI users] Checkpointing an MPI application with OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 13:15:33 2013" -->
<!-- isoreceived="20130128181533" -->
<!-- sent="Mon, 28 Jan 2013 10:15:26 -0800" -->
<!-- isosent="20130128181526" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing an MPI application with OMPI" -->
<!-- id="29AB11DC-209D-4375-B768-77E5645AA2BE_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5106BAD5.3050202_at_calculquebec.ca" -->
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
<strong>Date:</strong> 2013-01-28 13:15:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21249.php">Shamis, Pavel: "Re: [OMPI users] very low performance over infiniband"</a>
<li><strong>Previous message:</strong> <a href="21247.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21247.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21250.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="21250.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2013, at 9:52 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 2013-01-28 12:46, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2013, at 8:25 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree that ideally, someone would implement checkpointing in the application itself, but that is not always possible (commercial applications, use of complicated libraries, algorithms with no clear progression points at which you can interrupt the algorithm and start it back from there).
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...well, most apps can be adjusted to support it - we have some very complex apps that were updated that way. Commercial apps are another story, but we frankly don't find much call for checkpointing those as they typically just don't run long enough - especially if you are only running 256 ranks, so your cluster is small. Failure rates just don't justify it in such cases, in our experience.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there some particular reason why you feel you need checkpointing?
</span><br>
<span class="quotelev1">&gt; This specific case is that the jobs run for days. The risk of a hardware or power failure for that kind of duration goes too high (we allow for no more than 48 hours of run time).
</span><br>
<p>I'm surprised by that - we run with UPS support on the clusters, but for a small one like you describe, we find the probability that a job will be interrupted even during a multi-week app is vanishingly small.
<br>
<p>FWIW: I do work with the financial industry where we regularly run apps that execute non-stop for about a month with no reported failures. Are you actually seeing failures, or are you anticipating them?
<br>
<p><span class="quotelev1">&gt; While it is true we can dig through the code of the library to make it checkpoint, BLCR checkpointing just seemed easier.
</span><br>
<p>I see - just be aware that checkpoint support in OMPI will disappear in v1.7 and there is no clear timetable for restoring it.
<br>
<p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There certainly must be a better way to write the information down on disc though. Doing 500 IOPs seems to be completely broken. Why isn't there buffering involved ?
</span><br>
<span class="quotelev2">&gt;&gt; I don't know - that's all done in BLCR, I believe. Either way, it isn't something we can address due to the loss of our supporter for c/r.
</span><br>
<span class="quotelev1">&gt; I suppose I should contact BLCR instead then.
</span><br>
<p>For the disk op problem, I think that's the way to go - though like I said, I could be wrong and the disk writes could be something we do inside OMPI. I'm not familiar enough with the c/r code to state it with certainty.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry we can't be of more help :-(
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 2013-01-28 10:58, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Our c/r person has moved on to a different career path, so we may not have anyone who can answer this question.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What we can say is that checkpointing at any significant scale will always be a losing proposition. It just takes too long and hammers the file system. People have been working on extending the capability with things like &quot;burst buffers&quot; (basically putting an SSD in front of the file system to absorb the checkpoint surge), but that hasn't become very common yet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Frankly, what people have found to be the &quot;best&quot; solution is for your app to periodically write out its intermediate results, and then take a flag that indicates &quot;read prior results&quot; when it starts. This minimizes the amount of data being written to the disk. If done correctly, you would only lose whatever work was done since the last intermediate result was written - which is about equivalent to losing whatever works was done since the last checkpoint.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 28, 2013, at 7:47 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am doing checkpointing tests (with BLCR) with an MPI application compiled with OpenMPI 1.6.3, and I am seeing behaviors that are quite strange.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; First, some details about the tests :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - The only filesystem available on the nodes are 1) one tmpfs, 2) one lustre shared filesystem (tested to be able to provide ~15GB/s for writing and support ~40k IOPs).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - The job was running with 8 or 16 MPI ranks on nodes with 8 cores (1 or 2 nodes). Each MPI rank was using approximately 200MB of memory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - I was doing checkpoints with ompi-checkpoint and restarting with ompi-restart.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - I was starting with mpirun -am ft-enable-cr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - The nodes are monitored by ganglia, which allows me to see the number of IOPs and the read/write speed on the filesystem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried a few different mca settings, but I consistently observed that :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - The checkpoints lasted ~4-5 minutes each time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - During checkpoint, each node (8 ranks) was doing ~500 IOPs, and writing at ~15MB/s.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am worried by the number of IOPs and the very slow writing speed. This was a very small test. We have jobs running with 128 or 256 MPI ranks, each using 1-2 GB of ram per rank. With such jobs, the overall number of IOPs would reach tens of thousands and would completely overload our lustre filesystem. Moreover, with 15MB/s per node, the checkpointing process would take hours.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; How can I improve on that ? Is there an MCA setting that I am missing ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21249.php">Shamis, Pavel: "Re: [OMPI users] very low performance over infiniband"</a>
<li><strong>Previous message:</strong> <a href="21247.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21247.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21250.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="21250.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
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
