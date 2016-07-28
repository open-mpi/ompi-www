<?
$subject_val = "Re: [OMPI users] Open MPI performance on Amazon Cloud";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 19 23:17:42 2010" -->
<!-- isoreceived="20100320031742" -->
<!-- sent="Fri, 19 Mar 2010 20:17:36 -0700" -->
<!-- isosent="20100320031736" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI performance on Amazon Cloud" -->
<!-- id="C22E5FA1-7BFD-442C-B53C-17CACF03F1D2_at_penguincomputing.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DDE59537-EC82-4074-93C4-021048205DA5_at_cisco.com" -->
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
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-19 23:17:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12387.php">Damien Hocking: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12385.php">Jeff Squyres: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>In reply to:</strong> <a href="12385.php">Jeff Squyres: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12387.php">Damien Hocking: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Reply:</strong> <a href="12387.php">Damien Hocking: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hammad,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Before we launched the Penguin Computing On-Demand service we  
<br>
conducted several tests that compared the latencies of EC2 with a  
<br>
traditional HPC type setup (much like we have with our POD service). I  
<br>
have a whole suite of tests that I'd be happy to share with you, but  
<br>
to sum it up the EC2 latencies were absolutely terrible. For starters,  
<br>
the EC2 PingPong latencies for a zero byte message was around ~150ms,  
<br>
compared to an completely untuned, Gigabit Ethernet link of 32ms. For  
<br>
something actually useful, say a packet of 4K, EC2 was roughly ~265ms,  
<br>
where as a standard GigE link was a more reasonable (but still high)  
<br>
71ms. One &quot;real-world&quot; application that was very sensitive to latency  
<br>
took almost 30 times longer to run on EC2 then a real cluster  
<br>
configuration such as POD.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have benchmarks from several complete IMB runs, as well as other  
<br>
types of benchmarks such as STREAM and some iobench. If you are  
<br>
interested in any particular type, please let me know as I'd be happy  
<br>
to share.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;pitch&gt;If you really need an on-demand type system where latency is  
<br>
an issue, you should look towards our POD offering. We even offer  
<br>
Inifniband! On the compute side nothing is virtualized so your  
<br>
application runs on the hardware without the overhead of a VM.&lt;/pitch&gt;
<br>
<p>-Joshua Bernstein
<br>
Senior Software Engineer
<br>
Penguin Computing
<br>
<p><p>On Mar 19, 2010, at 11:19 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Yes, it is -- sometimes we get so caught up in other issues that  
</span><br>
<span class="quotelev1">&gt; user emails slip through the cracks.  Sorry about that!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I actually have little experience with EC2 -- other than knowing  
</span><br>
<span class="quotelev1">&gt; that it works, I don't know much about the performance that you can  
</span><br>
<span class="quotelev1">&gt; extract from it.  I have heard issues about non-uniform latency  
</span><br>
<span class="quotelev1">&gt; between MPI processes because you really don't know where the  
</span><br>
<span class="quotelev1">&gt; individual MPI processes may land (network- / VM-wise).  It suggests  
</span><br>
<span class="quotelev1">&gt; to me that EC2 might be best suited for compute-bound jobs (vs.  
</span><br>
<span class="quotelev1">&gt; latency-bound jobs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Amusingly enough, the first time someone reported an issue with Open  
</span><br>
<span class="quotelev1">&gt; MPI on EC2, I tried to submit a help ticket to EC2 support saying,  
</span><br>
<span class="quotelev1">&gt; &quot;I'm one of the Open MPI developers ... blah blah blah ... is there  
</span><br>
<span class="quotelev1">&gt; anything I can do to help?&quot; The answer I got back was along the  
</span><br>
<span class="quotelev1">&gt; lines of, &quot;You need to have a paid EC2 support account before we can  
</span><br>
<span class="quotelev1">&gt; help you.&quot; I think they missed the point, but oh well.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2010, at 12:10 AM, Hammad Siddiqi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt; Is this the correct forum for sending these kind of emails. please  
</span><br>
<span class="quotelev2">&gt;&gt; let me know if there is some other mailing list.
</span><br>
<span class="quotelev2">&gt;&gt; Thank
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Hammad Siddiqi
</span><br>
<span class="quotelev2">&gt;&gt; System Administrator,
</span><br>
<span class="quotelev2">&gt;&gt; Centre for High Performance Scientific Computing,
</span><br>
<span class="quotelev2">&gt;&gt; School of Electrical Engineering and Computer Science,
</span><br>
<span class="quotelev2">&gt;&gt; National University of Sciences and Technology,
</span><br>
<span class="quotelev2">&gt;&gt; H-12, Islamabad.
</span><br>
<span class="quotelev2">&gt;&gt; Office : +92 (51) 90852207
</span><br>
<span class="quotelev2">&gt;&gt; Web: <a href="http://hpc.seecs.nust.edu.pk/~hammad/">http://hpc.seecs.nust.edu.pk/~hammad/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Feb 27, 2010 at 10:07 PM, Hammad Siddiqi &lt;hammad.siddiqi_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am facing very wierd results of OpenMPI 1.4.1 on Amazon EC2. I have
</span><br>
<span class="quotelev2">&gt;&gt; used Small Instance and  and High CPU medium instance for  
</span><br>
<span class="quotelev2">&gt;&gt; benchmarking
</span><br>
<span class="quotelev2">&gt;&gt; latency and bandwidth. The OpenMPI was configured with the default
</span><br>
<span class="quotelev2">&gt;&gt; options. when the code is run in the cluster mode the latency and
</span><br>
<span class="quotelev2">&gt;&gt; bandwidth  of Amazon EC2 Small instance is really less than that of
</span><br>
<span class="quotelev2">&gt;&gt; Amazon EC2 High CPU medium instance. To my understanding the
</span><br>
<span class="quotelev2">&gt;&gt; difference should not be that much. The following are the links to
</span><br>
<span class="quotelev2">&gt;&gt; graphs ad their data:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Data: <a href="http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-BandwidthData.jpg">http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-BandwidthData.jpg</a>
</span><br>
<span class="quotelev2">&gt;&gt; Graphs: <a href="http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-Bandwidth.jpg">http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-Bandwidth.jpg</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please have a look on them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is anyone else facing the same problem. Any guidance in this regard
</span><br>
<span class="quotelev2">&gt;&gt; will highly be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Hammad Siddiqi
</span><br>
<span class="quotelev2">&gt;&gt; System Administrator,
</span><br>
<span class="quotelev2">&gt;&gt; Centre for High Performance Scientific Computing,
</span><br>
<span class="quotelev2">&gt;&gt; School of Electrical Engineering and Computer Science,
</span><br>
<span class="quotelev2">&gt;&gt; National University of Sciences and Technology,
</span><br>
<span class="quotelev2">&gt;&gt; H-12, Islamabad.
</span><br>
<span class="quotelev2">&gt;&gt; Office : +92 (51) 90852207
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12387.php">Damien Hocking: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12385.php">Jeff Squyres: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>In reply to:</strong> <a href="12385.php">Jeff Squyres: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12387.php">Damien Hocking: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Reply:</strong> <a href="12387.php">Damien Hocking: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
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
