<?
$subject_val = "Re: [OMPI users] how to benchmark a server with openmpi?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 05:13:39 2016" -->
<!-- isoreceived="20160125101339" -->
<!-- sent="Mon, 25 Jan 2016 11:13:35 +0100" -->
<!-- isosent="20160125101335" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to benchmark a server with openmpi?" -->
<!-- id="F6DB623D-FAE7-43E2-B0E7-11949DA3CE88_at_rutgers.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 05:13:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28363.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Previous message:</strong> <a href="28361.php">Marko Blatzheim: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>In reply to:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another canonical benchmarking suite can be found at <a href="http://www.nas.nasa.gov/publications/npb.html">http://www.nas.nasa.gov/publications/npb.html</a>
<br>
<p><span class="quotelev1">&gt; On 24 Jan 2016, at 20:51 , Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I want to have an imagination about the behaviour of my server. Therefore I need an Code which I can run it on my server.
</span><br>
<span class="quotelev1">&gt; Could anyone give me an example for any code? My last code was a simple example and not enough to get an imagination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanx in advance
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
<span class="quotelev1">&gt; We've looked at performance in detail with regard to OpenMPI Java for large scale real data analytics. Here's a paper still in submission that identifies 5 rules you'd find useful to get good performance. It talks about how the number of processes affect performance as well. Tests were done up 3072 cores on a large Intel Haswell HPC cluster
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
<span class="quotelev1">&gt; *All* codes scale differently. 
</span><br>
<span class="quotelev1">&gt; So you should do these tests with your own code, and not a different code (such as MM).
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
<span class="quotelev1">&gt; Hallo,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on a server and run java codes with OpenMPI. I want to know which number of process is the fastest to run my code with?
</span><br>
<span class="quotelev1">&gt; For this reason I wrote a code that multiply two matrices but the differences between the results is not significant. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore I want to know how can I benchmark my server? Or is there any example which I can run many times on a different number of processes, so that I can see which number of process is the best?
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28352.php">http://www.open-mpi.org/community/lists/users/2016/01/28352.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28353.php">http://www.open-mpi.org/community/lists/users/2016/01/28353.php</a>
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
<span class="quotelev1">&gt; _______________________________________________ users mailing list users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28354.php">http://www.open-mpi.org/community/lists/users/2016/01/28354.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28355.php">http://www.open-mpi.org/community/lists/users/2016/01/28355.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28363.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Previous message:</strong> <a href="28361.php">Marko Blatzheim: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>In reply to:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
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
