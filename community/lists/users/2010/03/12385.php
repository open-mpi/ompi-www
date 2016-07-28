<?
$subject_val = "Re: [OMPI users] Open MPI performance on Amazon Cloud";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 19 22:45:25 2010" -->
<!-- isoreceived="20100320024525" -->
<!-- sent="Fri, 19 Mar 2010 11:19:06 -0700" -->
<!-- isosent="20100319181906" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI performance on Amazon Cloud" -->
<!-- id="DDE59537-EC82-4074-93C4-021048205DA5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6d6866e51003120010n157e565aia1222480075cc116_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-19 14:19:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12386.php">Joshua Bernstein: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12384.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12331.php">Hammad Siddiqi: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12386.php">Joshua Bernstein: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Reply:</strong> <a href="12386.php">Joshua Bernstein: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it is -- sometimes we get so caught up in other issues that user emails slip through the cracks.  Sorry about that!
<br>
<p>I actually have little experience with EC2 -- other than knowing that it works, I don't know much about the performance that you can extract from it.  I have heard issues about non-uniform latency between MPI processes because you really don't know where the individual MPI processes may land (network- / VM-wise).  It suggests to me that EC2 might be best suited for compute-bound jobs (vs. latency-bound jobs).
<br>
<p>Amusingly enough, the first time someone reported an issue with Open MPI on EC2, I tried to submit a help ticket to EC2 support saying, &quot;I'm one of the Open MPI developers ... blah blah blah ... is there anything I can do to help?&quot; The answer I got back was along the lines of, &quot;You need to have a paid EC2 support account before we can help you.&quot; I think they missed the point, but oh well.  :-)
<br>
<p><p><p>On Mar 12, 2010, at 12:10 AM, Hammad Siddiqi wrote:
<br>
<p><span class="quotelev1">&gt; Dear All, 
</span><br>
<span class="quotelev1">&gt; Is this the correct forum for sending these kind of emails. please let me know if there is some other mailing list.
</span><br>
<span class="quotelev1">&gt; Thank
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Hammad Siddiqi
</span><br>
<span class="quotelev1">&gt; System Administrator,
</span><br>
<span class="quotelev1">&gt; Centre for High Performance Scientific Computing,
</span><br>
<span class="quotelev1">&gt; School of Electrical Engineering and Computer Science,
</span><br>
<span class="quotelev1">&gt; National University of Sciences and Technology,
</span><br>
<span class="quotelev1">&gt; H-12, Islamabad.
</span><br>
<span class="quotelev1">&gt; Office : +92 (51) 90852207
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://hpc.seecs.nust.edu.pk/~hammad/">http://hpc.seecs.nust.edu.pk/~hammad/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Feb 27, 2010 at 10:07 PM, Hammad Siddiqi &lt;hammad.siddiqi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am facing very wierd results of OpenMPI 1.4.1 on Amazon EC2. I have
</span><br>
<span class="quotelev1">&gt; used Small Instance and  and High CPU medium instance for benchmarking
</span><br>
<span class="quotelev1">&gt; latency and bandwidth. The OpenMPI was configured with the default
</span><br>
<span class="quotelev1">&gt; options. when the code is run in the cluster mode the latency and
</span><br>
<span class="quotelev1">&gt; bandwidth  of Amazon EC2 Small instance is really less than that of
</span><br>
<span class="quotelev1">&gt; Amazon EC2 High CPU medium instance. To my understanding the
</span><br>
<span class="quotelev1">&gt; difference should not be that much. The following are the links to
</span><br>
<span class="quotelev1">&gt; graphs ad their data:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data: <a href="http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-BandwidthData.jpg">http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-BandwidthData.jpg</a>
</span><br>
<span class="quotelev1">&gt; Graphs: <a href="http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-Bandwidth.jpg">http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-Bandwidth.jpg</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Please have a look on them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is anyone else facing the same problem. Any guidance in this regard
</span><br>
<span class="quotelev1">&gt; will highly be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Hammad Siddiqi
</span><br>
<span class="quotelev1">&gt; System Administrator,
</span><br>
<span class="quotelev1">&gt; Centre for High Performance Scientific Computing,
</span><br>
<span class="quotelev1">&gt; School of Electrical Engineering and Computer Science,
</span><br>
<span class="quotelev1">&gt; National University of Sciences and Technology,
</span><br>
<span class="quotelev1">&gt; H-12, Islamabad.
</span><br>
<span class="quotelev1">&gt; Office : +92 (51) 90852207
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12386.php">Joshua Bernstein: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12384.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12331.php">Hammad Siddiqi: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12386.php">Joshua Bernstein: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Reply:</strong> <a href="12386.php">Joshua Bernstein: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
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
