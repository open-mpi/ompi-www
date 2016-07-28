<?
$subject_val = "Re: [OMPI users] SM btl slows down bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 08:14:53 2008" -->
<!-- isoreceived="20080813121453" -->
<!-- sent="Wed, 13 Aug 2008 08:13:10 -0400" -->
<!-- isosent="20080813121310" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM btl slows down bandwidth?" -->
<!-- id="DEEA7C48-ED43-4E25-97FF-92CB7943499C_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990808130052s48f4cd5agad4d3f68a866bc70_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SM btl slows down bandwidth?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-13 08:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6334.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6332.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6329.php">Lenny Verkhovsky: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6335.php">Ron Brightwell: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, we have made some improvements to shared memory performance in  
<br>
the upcoming v1.3 series.  I won't ask you to test a v1.3 tarball  
<br>
right now because there's a gnarly bug in the shared memory support  
<br>
that George is working to fix -- hopefully he'll fix it soon and you  
<br>
can see if the performance is a bit better in v1.3.
<br>
<p><p>On Aug 13, 2008, at 3:52 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just for the try - can run np 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ( Ping Pong test is for 2 processes only )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/13/08, Dani&#235;l Mantione &lt;daniel.mantione_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 12 Aug 2008, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Daniel and list
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could it be a problem with memory bandwidth / contention in multi- 
</span><br>
<span class="quotelev1">&gt; core?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I believe we are somehow limited by memory performance. Here are
</span><br>
<span class="quotelev1">&gt; some numbers from a dual Opteron 2352 system, which has much more  
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt; bandwidth:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt; # #processes = 2
</span><br>
<span class="quotelev1">&gt; # ( 6 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             0         1000         0.86         0.00
</span><br>
<span class="quotelev1">&gt;             1         1000         0.97         0.98
</span><br>
<span class="quotelev1">&gt;             2         1000         0.95         2.01
</span><br>
<span class="quotelev1">&gt;             4         1000         0.96         3.97
</span><br>
<span class="quotelev1">&gt;             8         1000         0.95         7.99
</span><br>
<span class="quotelev1">&gt;            16         1000         0.96        15.85
</span><br>
<span class="quotelev1">&gt;            32         1000         0.99        30.69
</span><br>
<span class="quotelev1">&gt;            64         1000         0.97        63.09
</span><br>
<span class="quotelev1">&gt;           128         1000         1.02       119.68
</span><br>
<span class="quotelev1">&gt;           256         1000         1.18       207.25
</span><br>
<span class="quotelev1">&gt;           512         1000         1.40       348.77
</span><br>
<span class="quotelev1">&gt;          1024         1000         1.75       556.75
</span><br>
<span class="quotelev1">&gt;          2048         1000         2.59       753.22
</span><br>
<span class="quotelev1">&gt;          4096         1000         5.10       766.23
</span><br>
<span class="quotelev1">&gt;          8192         1000         7.93       985.13
</span><br>
<span class="quotelev1">&gt;         16384         1000        14.60      1070.57
</span><br>
<span class="quotelev1">&gt;         32768         1000        27.92      1119.23
</span><br>
<span class="quotelev1">&gt;         65536          640        46.67      1339.16
</span><br>
<span class="quotelev1">&gt;        131072          320        86.03      1453.06
</span><br>
<span class="quotelev1">&gt;        262144          160       163.16      1532.21
</span><br>
<span class="quotelev1">&gt;        524288           80       310.01      1612.88
</span><br>
<span class="quotelev1">&gt;       1048576           40       730.62      1368.69
</span><br>
<span class="quotelev1">&gt;       2097152           20      1449.72      1379.57
</span><br>
<span class="quotelev1">&gt;       4194304           10      2884.90      1386.53
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, +/- 1200 MB/s (or +/ 1500 MB/s in case of the AMD system)  
</span><br>
<span class="quotelev1">&gt; is not
</span><br>
<span class="quotelev1">&gt; even close to the memory performance limits the systems, so there
</span><br>
<span class="quotelev1">&gt; should be room for optimization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After all, the openib btl manages to tranfer the data from the  
</span><br>
<span class="quotelev1">&gt; memory of
</span><br>
<span class="quotelev1">&gt; oneprocess to the memory of another process just fine with more
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It has been reported in many mailing lists (mpich, beowulf, etc).
</span><br>
<span class="quotelev2">&gt; &gt; Here it seems to happen in dual-processor dual-core with our  
</span><br>
<span class="quotelev1">&gt; memory intensive
</span><br>
<span class="quotelev2">&gt; &gt; programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPICH2 manages to get about 5GB/s in shared memory performance on the
</span><br>
<span class="quotelev1">&gt; Xeon 5420 system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have you checked what happens to the shared memory runs as you
</span><br>
<span class="quotelev2">&gt; &gt; you increase the number of active cores/processes?
</span><br>
<span class="quotelev2">&gt; &gt; Would it help to set the processor affinity in the shared memory  
</span><br>
<span class="quotelev1">&gt; runs?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=building#build-paffinity">http://www.open-mpi.org/faq/?category=building#build-paffinity</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neither has any effect on the scores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dani&#235;l
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6334.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6332.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6329.php">Lenny Verkhovsky: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6335.php">Ron Brightwell: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
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
