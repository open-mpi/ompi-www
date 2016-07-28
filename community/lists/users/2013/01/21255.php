<?
$subject_val = "Re: [OMPI users] Checkpointing an MPI application with OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 16:00:53 2013" -->
<!-- isoreceived="20130128210053" -->
<!-- sent="Mon, 28 Jan 2013 16:00:48 -0500" -->
<!-- isosent="20130128210048" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing an MPI application with OMPI" -->
<!-- id="CAMJJpkU3RwR4G46Z57zrKTjm6-SSzmsc=h2R-1c-044A9TdCuw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5106E3B2.7060004_at_calculquebec.ca" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 16:00:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21256.php">Brian Budge: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="21254.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21254.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21264.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on the paper you linked the answer is quite obvious. The
<br>
proposed CRFS mechanism supports all of the checkpoint-enabled MPI
<br>
implementation, thus you just have to go with the one providing and
<br>
caring about the services you need.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Mon, Jan 28, 2013 at 3:46 PM, Maxime Boissonneault
<br>
&lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt; The problem here is not the bandwidth, but the number of IOPs. I wrote to
</span><br>
<span class="quotelev1">&gt; the BLCR list, and they confirmed that :
</span><br>
<span class="quotelev1">&gt; &quot;While ideally the checkpoint would be written in sizable chunks, the
</span><br>
<span class="quotelev1">&gt; current code in BLCR will issue a single write operation for each contiguous
</span><br>
<span class="quotelev1">&gt; range of user memory, and many quite small writes for various meta-data and
</span><br>
<span class="quotelev1">&gt; non-memory state (registers, signal-handlers,etc).  As show in Table 1 of
</span><br>
<span class="quotelev1">&gt; the paper cited above, the writes in the 10s of KB range will dominate
</span><br>
<span class="quotelev1">&gt; performance.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Reference being : X. Ouyang, R. Rajachandrasekhar, X. Besseron, H. Wang, J.
</span><br>
<span class="quotelev1">&gt; Huang and D. K. Panda, CRFS: A Lightweight User-Level Filesystem for Generic
</span><br>
<span class="quotelev1">&gt; Checkpoint/Restart, Int'l Conference on Parallel Processing (ICPP '11),
</span><br>
<span class="quotelev1">&gt; Sept. 2011. (PDF))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We did run parallel IO benchmarks. Our filesystem can reach a speed of
</span><br>
<span class="quotelev1">&gt; ~15GB/s, but only with large IO operations (at least bigger than 1MB,
</span><br>
<span class="quotelev1">&gt; optimally in the 100MB-1GB range). For small (&lt;1MB) operations, the
</span><br>
<span class="quotelev1">&gt; filesystem is considerably slower. I believe this is precisely what is
</span><br>
<span class="quotelev1">&gt; killing the performance here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure there is anything to be done about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2013-01-28 15:40, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the scale you address you should have no trouble with the C/R if
</span><br>
<span class="quotelev1">&gt; the file system is correctly configured. We get more bandwidth per
</span><br>
<span class="quotelev1">&gt; node out of an NFS over 1Gb/s at 32 nodes. Have you run some parallel
</span><br>
<span class="quotelev1">&gt; benchmarks on your cluster ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: You can some MPI I/O benchmarks at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/~thakur/pio-benchmarks.html">http://www.mcs.anl.gov/~thakur/pio-benchmarks.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 28, 2013 at 2:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 10:53 AM, Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2013-01-28 13:15, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 9:52 AM, Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2013-01-28 12:46, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 8:25 AM, Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; I agree that ideally, someone would implement checkpointing in the
</span><br>
<span class="quotelev1">&gt; application itself, but that is not always possible (commercial
</span><br>
<span class="quotelev1">&gt; applications, use of complicated libraries, algorithms with no clear
</span><br>
<span class="quotelev1">&gt; progression points at which you can interrupt the algorithm and start it
</span><br>
<span class="quotelev1">&gt; back from there).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm...well, most apps can be adjusted to support it - we have some very
</span><br>
<span class="quotelev1">&gt; complex apps that were updated that way. Commercial apps are another story,
</span><br>
<span class="quotelev1">&gt; but we frankly don't find much call for checkpointing those as they
</span><br>
<span class="quotelev1">&gt; typically just don't run long enough - especially if you are only running
</span><br>
<span class="quotelev1">&gt; 256 ranks, so your cluster is small. Failure rates just don't justify it in
</span><br>
<span class="quotelev1">&gt; such cases, in our experience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some particular reason why you feel you need checkpointing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This specific case is that the jobs run for days. The risk of a hardware or
</span><br>
<span class="quotelev1">&gt; power failure for that kind of duration goes too high (we allow for no more
</span><br>
<span class="quotelev1">&gt; than 48 hours of run time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm surprised by that - we run with UPS support on the clusters, but for a
</span><br>
<span class="quotelev1">&gt; small one like you describe, we find the probability that a job will be
</span><br>
<span class="quotelev1">&gt; interrupted even during a multi-week app is vanishingly small.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I do work with the financial industry where we regularly run apps that
</span><br>
<span class="quotelev1">&gt; execute non-stop for about a month with no reported failures. Are you
</span><br>
<span class="quotelev1">&gt; actually seeing failures, or are you anticipating them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While our filesystem and management nodes are on UPS, our compute nodes are
</span><br>
<span class="quotelev1">&gt; not. With one average generic (power/cooling mostly) failure every one or
</span><br>
<span class="quotelev1">&gt; two months, running for weeks is just asking for trouble.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wow, that is high
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you add to that typical dimm/cpu/networking failures (I estimated about 1
</span><br>
<span class="quotelev1">&gt; node goes down per day because of some sort hardware failure, for a cluster
</span><br>
<span class="quotelev1">&gt; of 960 nodes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is incredibly high
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With these numbers, a job running on 32 nodes for 7 days has a ~35% chance
</span><br>
<span class="quotelev1">&gt; of failing before it is done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've never seen anything like that behavior in practice - a 32 node cluster
</span><br>
<span class="quotelev1">&gt; typically runs for quite a few months without a failure. It is a typical
</span><br>
<span class="quotelev1">&gt; size for the financial sector, so we have a LOT of experience with such
</span><br>
<span class="quotelev1">&gt; clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect you won't see anything like that behavior...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having 24GB of ram per node, even if a 32 nodes job takes close to 100% of
</span><br>
<span class="quotelev1">&gt; the ram, that's merely 640 GB of data. Writing that on a lustre filesystem
</span><br>
<span class="quotelev1">&gt; capable of reaching ~15GB/s should take no more than a few minutes if
</span><br>
<span class="quotelev1">&gt; written correctly. Right now, I am getting a few minutes for a hundredth of
</span><br>
<span class="quotelev1">&gt; this amount of data!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed - but I don't think you'll get that bandwidth for checkpointing. I
</span><br>
<span class="quotelev1">&gt; suspect you'll find that checkpointing really has troubles when scaling,
</span><br>
<span class="quotelev1">&gt; which is why you don't see it used in production (at least, I haven't).
</span><br>
<span class="quotelev1">&gt; Mostly used for research by a handful of organizations, which is why we
</span><br>
<span class="quotelev1">&gt; haven't been too concerned about its loss.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While it is true we can dig through the code of the library to make it
</span><br>
<span class="quotelev1">&gt; checkpoint, BLCR checkpointing just seemed easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see - just be aware that checkpoint support in OMPI will disappear in v1.7
</span><br>
<span class="quotelev1">&gt; and there is no clear timetable for restoring it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is very good to know. Thanks for the information. It is too bad though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There certainly must be a better way to write the information down on disc
</span><br>
<span class="quotelev1">&gt; though. Doing 500 IOPs seems to be completely broken. Why isn't there
</span><br>
<span class="quotelev1">&gt; buffering involved ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know - that's all done in BLCR, I believe. Either way, it isn't
</span><br>
<span class="quotelev1">&gt; something we can address due to the loss of our supporter for c/r.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suppose I should contact BLCR instead then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the disk op problem, I think that's the way to go - though like I said,
</span><br>
<span class="quotelev1">&gt; I could be wrong and the disk writes could be something we do inside OMPI.
</span><br>
<span class="quotelev1">&gt; I'm not familiar enough with the c/r code to state it with certainty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry we can't be of more help :-(
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2013-01-28 10:58, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our c/r person has moved on to a different career path, so we may not have
</span><br>
<span class="quotelev1">&gt; anyone who can answer this question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What we can say is that checkpointing at any significant scale will always
</span><br>
<span class="quotelev1">&gt; be a losing proposition. It just takes too long and hammers the file system.
</span><br>
<span class="quotelev1">&gt; People have been working on extending the capability with things like &quot;burst
</span><br>
<span class="quotelev1">&gt; buffers&quot; (basically putting an SSD in front of the file system to absorb the
</span><br>
<span class="quotelev1">&gt; checkpoint surge), but that hasn't become very common yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Frankly, what people have found to be the &quot;best&quot; solution is for your app to
</span><br>
<span class="quotelev1">&gt; periodically write out its intermediate results, and then take a flag that
</span><br>
<span class="quotelev1">&gt; indicates &quot;read prior results&quot; when it starts. This minimizes the amount of
</span><br>
<span class="quotelev1">&gt; data being written to the disk. If done correctly, you would only lose
</span><br>
<span class="quotelev1">&gt; whatever work was done since the last intermediate result was written -
</span><br>
<span class="quotelev1">&gt; which is about equivalent to losing whatever works was done since the last
</span><br>
<span class="quotelev1">&gt; checkpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 7:47 AM, Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am doing checkpointing tests (with BLCR) with an MPI application compiled
</span><br>
<span class="quotelev1">&gt; with OpenMPI 1.6.3, and I am seeing behaviors that are quite strange.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, some details about the tests :
</span><br>
<span class="quotelev1">&gt; - The only filesystem available on the nodes are 1) one tmpfs, 2) one lustre
</span><br>
<span class="quotelev1">&gt; shared filesystem (tested to be able to provide ~15GB/s for writing and
</span><br>
<span class="quotelev1">&gt; support ~40k IOPs).
</span><br>
<span class="quotelev1">&gt; - The job was running with 8 or 16 MPI ranks on nodes with 8 cores (1 or 2
</span><br>
<span class="quotelev1">&gt; nodes). Each MPI rank was using approximately 200MB of memory.
</span><br>
<span class="quotelev1">&gt; - I was doing checkpoints with ompi-checkpoint and restarting with
</span><br>
<span class="quotelev1">&gt; ompi-restart.
</span><br>
<span class="quotelev1">&gt; - I was starting with mpirun -am ft-enable-cr
</span><br>
<span class="quotelev1">&gt; - The nodes are monitored by ganglia, which allows me to see the number of
</span><br>
<span class="quotelev1">&gt; IOPs and the read/write speed on the filesystem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried a few different mca settings, but I consistently observed that :
</span><br>
<span class="quotelev1">&gt; - The checkpoints lasted ~4-5 minutes each time
</span><br>
<span class="quotelev1">&gt; - During checkpoint, each node (8 ranks) was doing ~500 IOPs, and writing at
</span><br>
<span class="quotelev1">&gt; ~15MB/s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am worried by the number of IOPs and the very slow writing speed. This was
</span><br>
<span class="quotelev1">&gt; a very small test. We have jobs running with 128 or 256 MPI ranks, each
</span><br>
<span class="quotelev1">&gt; using 1-2 GB of ram per rank. With such jobs, the overall number of IOPs
</span><br>
<span class="quotelev1">&gt; would reach tens of thousands and would completely overload our lustre
</span><br>
<span class="quotelev1">&gt; filesystem. Moreover, with 15MB/s per node, the checkpointing process would
</span><br>
<span class="quotelev1">&gt; take hours.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I improve on that ? Is there an MCA setting that I am missing ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21256.php">Brian Budge: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="21254.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21254.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21264.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
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
