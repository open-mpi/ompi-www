<?
$subject_val = "Re: [OMPI users] how to benchmark a server with openmpi?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 14:57:15 2016" -->
<!-- isoreceived="20160124195715" -->
<!-- sent="Sun, 24 Jan 2016 14:57:13 -0500" -->
<!-- isosent="20160124195713" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to benchmark a server with openmpi?" -->
<!-- id="CA+ssbKXkUQ7-1EuNeM8JzFWkyrTHG7fjjVCXLVnTSi6dhyyH3g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DUB125-W707AED1A08024A6B42051497C60_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to benchmark a server with openmpi?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-24 14:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28357.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>In reply to:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28362.php">Mark Santcroos: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The code for the paper with details is in GitHub
<br>
<a href="https://github.com/DSC-SPIDAL/damds">https://github.com/DSC-SPIDAL/damds</a>
<br>
<p>On Sun, Jan 24, 2016 at 2:51 PM, Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I want to have an imagination about the behaviour of my server.
</span><br>
<span class="quotelev1">&gt; Therefore I need an Code which I can run it on my server.
</span><br>
<span class="quotelev1">&gt; Could anyone give me an example for any code? My last code was a simple
</span><br>
<span class="quotelev1">&gt; example and not enough to get an imagination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx in advance
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; Date: Sun, 24 Jan 2016 10:21:07 -0500
</span><br>
<span class="quotelev1">&gt; From: esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] how to benchmark a server with openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've looked at performance in detail with regard to OpenMPI Java for
</span><br>
<span class="quotelev1">&gt; large scale real data analytics. Here's a paper still in submission that
</span><br>
<span class="quotelev1">&gt; identifies 5 rules you'd find useful to get good performance. It talks
</span><br>
<span class="quotelev1">&gt; about how the number of processes affect performance as well. Tests were
</span><br>
<span class="quotelev1">&gt; done up 3072 cores on a large Intel Haswell HPC cluster
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.researchgate.net/publication/291695527_SPIDAL_Java_High_Performance_Data_Analytics_with_Java_and_MPI_on_Large_Multicore_HPC_Clusters">https://www.researchgate.net/publication/291695527_SPIDAL_Java_High_Performance_Data_Analytics_with_Java_and_MPI_on_Large_Multicore_HPC_Clusters</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jan 24, 2016 at 9:41 AM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *All* codes scale differently.
</span><br>
<span class="quotelev1">&gt; So you should do these tests with your own code, and not a different code
</span><br>
<span class="quotelev1">&gt; (such as MM).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-01-24 15:38 GMT+01:00 Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hallo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on a server and run java codes with OpenMPI. I want to know
</span><br>
<span class="quotelev1">&gt; which number of process is the fastest to run my code with?
</span><br>
<span class="quotelev1">&gt; For this reason I wrote a code that multiply two matrices but the
</span><br>
<span class="quotelev1">&gt; differences between the results is not significant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore I want to know how can I benchmark my server? Or is there any
</span><br>
<span class="quotelev1">&gt; example which I can run many times on a different number of processes, so
</span><br>
<span class="quotelev1">&gt; that I can see which number of process is the best?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or is there examples with results which I can compare with my results?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx in advance
</span><br>
<span class="quotelev1">&gt; Ibrahim
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28352.php">http://www.open-mpi.org/community/lists/users/2016/01/28352.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28353.php">http://www.open-mpi.org/community/lists/users/2016/01/28353.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28354.php">http://www.open-mpi.org/community/lists/users/2016/01/28354.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28355.php">http://www.open-mpi.org/community/lists/users/2016/01/28355.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28356/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28357.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>In reply to:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28362.php">Mark Santcroos: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
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
