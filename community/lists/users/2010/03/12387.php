<?
$subject_val = "Re: [OMPI users] Open MPI performance on Amazon Cloud";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 19 23:45:17 2010" -->
<!-- isoreceived="20100320034517" -->
<!-- sent="Fri, 19 Mar 2010 21:44:30 -0600" -->
<!-- isosent="20100320034430" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI performance on Amazon Cloud" -->
<!-- id="4BA4449E.7060108_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C22E5FA1-7BFD-442C-B53C-17CACF03F1D2_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI performance on Amazon Cloud<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-19 23:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12388.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<li><strong>Previous message:</strong> <a href="12386.php">Joshua Bernstein: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>In reply to:</strong> <a href="12386.php">Joshua Bernstein: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few people have looked at EC2 for this lately.  This one's a good read.
<br>
<p><a href="http://insidehpc.com/2009/08/03/comparing-hpc-cluster-amazons-ec2-nas-benchmarks-linpack/">http://insidehpc.com/2009/08/03/comparing-hpc-cluster-amazons-ec2-nas-benchmarks-linpack/</a>
<br>
<p>There was another paper published too, if I can find it again I'll post 
<br>
the link.
<br>
<p>Damien
<br>
<p>On 19/03/2010 9:17 PM, Joshua Bernstein wrote:
<br>
<span class="quotelev1">&gt; Hi Hammad,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Before we launched the Penguin Computing On-Demand service we 
</span><br>
<span class="quotelev1">&gt; conducted several tests that compared the latencies of EC2 with a 
</span><br>
<span class="quotelev1">&gt; traditional HPC type setup (much like we have with our POD service). I 
</span><br>
<span class="quotelev1">&gt; have a whole suite of tests that I'd be happy to share with you, but 
</span><br>
<span class="quotelev1">&gt; to sum it up the EC2 latencies were absolutely terrible. For starters, 
</span><br>
<span class="quotelev1">&gt; the EC2 PingPong latencies for a zero byte message was around ~150ms, 
</span><br>
<span class="quotelev1">&gt; compared to an completely untuned, Gigabit Ethernet link of 32ms. For 
</span><br>
<span class="quotelev1">&gt; something actually useful, say a packet of 4K, EC2 was roughly ~265ms, 
</span><br>
<span class="quotelev1">&gt; where as a standard GigE link was a more reasonable (but still high) 
</span><br>
<span class="quotelev1">&gt; 71ms. One &quot;real-world&quot; application that was very sensitive to latency 
</span><br>
<span class="quotelev1">&gt; took almost 30 times longer to run on EC2 then a real cluster 
</span><br>
<span class="quotelev1">&gt; configuration such as POD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have benchmarks from several complete IMB runs, as well as other 
</span><br>
<span class="quotelev1">&gt; types of benchmarks such as STREAM and some iobench. If you are 
</span><br>
<span class="quotelev1">&gt; interested in any particular type, please let me know as I'd be happy 
</span><br>
<span class="quotelev1">&gt; to share.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;pitch&gt;If you really need an on-demand type system where latency is an 
</span><br>
<span class="quotelev1">&gt; issue, you should look towards our POD offering. We even offer 
</span><br>
<span class="quotelev1">&gt; Inifniband! On the compute side nothing is virtualized so your 
</span><br>
<span class="quotelev1">&gt; application runs on the hardware without the overhead of a VM.&lt;/pitch&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Joshua Bernstein
</span><br>
<span class="quotelev1">&gt; Senior Software Engineer
</span><br>
<span class="quotelev1">&gt; Penguin Computing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 19, 2010, at 11:19 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it is -- sometimes we get so caught up in other issues that user 
</span><br>
<span class="quotelev2">&gt;&gt; emails slip through the cracks.  Sorry about that!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I actually have little experience with EC2 -- other than knowing that 
</span><br>
<span class="quotelev2">&gt;&gt; it works, I don't know much about the performance that you can 
</span><br>
<span class="quotelev2">&gt;&gt; extract from it.  I have heard issues about non-uniform latency 
</span><br>
<span class="quotelev2">&gt;&gt; between MPI processes because you really don't know where the 
</span><br>
<span class="quotelev2">&gt;&gt; individual MPI processes may land (network- / VM-wise).  It suggests 
</span><br>
<span class="quotelev2">&gt;&gt; to me that EC2 might be best suited for compute-bound jobs (vs. 
</span><br>
<span class="quotelev2">&gt;&gt; latency-bound jobs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Amusingly enough, the first time someone reported an issue with Open 
</span><br>
<span class="quotelev2">&gt;&gt; MPI on EC2, I tried to submit a help ticket to EC2 support saying, 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;I'm one of the Open MPI developers ... blah blah blah ... is there 
</span><br>
<span class="quotelev2">&gt;&gt; anything I can do to help?&quot; The answer I got back was along the lines 
</span><br>
<span class="quotelev2">&gt;&gt; of, &quot;You need to have a paid EC2 support account before we can help 
</span><br>
<span class="quotelev2">&gt;&gt; you.&quot; I think they missed the point, but oh well.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 12, 2010, at 12:10 AM, Hammad Siddiqi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this the correct forum for sending these kind of emails. please 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; let me know if there is some other mailing list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hammad Siddiqi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System Administrator,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Centre for High Performance Scientific Computing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Electrical Engineering and Computer Science,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; National University of Sciences and Technology,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; H-12, Islamabad.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Office : +92 (51) 90852207
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Web: <a href="http://hpc.seecs.nust.edu.pk/~hammad/">http://hpc.seecs.nust.edu.pk/~hammad/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Feb 27, 2010 at 10:07 PM, Hammad Siddiqi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;hammad.siddiqi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am facing very wierd results of OpenMPI 1.4.1 on Amazon EC2. I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used Small Instance and  and High CPU medium instance for benchmarking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency and bandwidth. The OpenMPI was configured with the default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options. when the code is run in the cluster mode the latency and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bandwidth  of Amazon EC2 Small instance is really less than that of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Amazon EC2 High CPU medium instance. To my understanding the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difference should not be that much. The following are the links to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; graphs ad their data:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-BandwidthData.jpg">http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-BandwidthData.jpg</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Graphs: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-Bandwidth.jpg">http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-Bandwidth.jpg</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please have a look on them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is anyone else facing the same problem. Any guidance in this regard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will highly be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hammad Siddiqi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System Administrator,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Centre for High Performance Scientific Computing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Electrical Engineering and Computer Science,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; National University of Sciences and Technology,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; H-12, Islamabad.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Office : +92 (51) 90852207
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12388.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<li><strong>Previous message:</strong> <a href="12386.php">Joshua Bernstein: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>In reply to:</strong> <a href="12386.php">Joshua Bernstein: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
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
