<?
$subject_val = "Re: [OMPI users] how to benchmark a server with openmpi?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 14:51:36 2016" -->
<!-- isoreceived="20160124195136" -->
<!-- sent="Sun, 24 Jan 2016 19:51:33 +0000" -->
<!-- isosent="20160124195133" -->
<!-- name="Ibrahim Ikhlawi" -->
<!-- email="ibrahim_22s_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to benchmark a server with openmpi?" -->
<!-- id="DUB125-W707AED1A08024A6B42051497C60_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKWfTCc79cbKWo8fF71nUVE7bCyKRr5ANJpP4DKtQ-mLaA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ibrahim Ikhlawi (<em>ibrahim_22s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-24 14:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28356.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Previous message:</strong> <a href="28354.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>In reply to:</strong> <a href="28354.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28356.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Reply:</strong> <a href="28356.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Reply:</strong> <a href="28362.php">Mark Santcroos: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reply.
<br>
<p>But I want to have an imagination about the behaviour of my server. Therefore I need an Code which I can run it on my server.
<br>
Could anyone give me an example for any code? My last code was a simple example and not enough to get an imagination.
<br>
<p>Thanx in advance
<br>
Date: Sun, 24 Jan 2016 10:21:07 -0500
<br>
From: esaliya_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] how to benchmark a server with openmpi?
<br>
<p>We've looked at performance in detail with regard to OpenMPI Java for large scale real data analytics. Here's a paper still in submission that identifies 5 rules you'd find useful to get good performance. It talks about how the number of processes affect performance as well. Tests were done up 3072 cores on a large Intel Haswell HPC cluster
<br>
<a href="https://www.researchgate.net/publication/291695527_SPIDAL_Java_High_Performance_Data_Analytics_with_Java_and_MPI_on_Large_Multicore_HPC_Clusters">https://www.researchgate.net/publication/291695527_SPIDAL_Java_High_Performance_Data_Analytics_with_Java_and_MPI_on_Large_Multicore_HPC_Clusters</a>
<br>
<p>Thank you,Saliya
<br>
On Sun, Jan 24, 2016 at 9:41 AM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
<br>
*All* codes scale differently. So you should do these tests with your own code, and not a different code (such as MM).
<br>
<p>2016-01-24 15:38 GMT+01:00 Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;:
<br>
<p><p>Hallo,
<br>
<p>I am working on a server and run java codes with OpenMPI. I want to know which number of process is the fastest to run my code with?
<br>
For this reason I wrote a code that multiply two matrices but the differences between the results is not significant. 
<br>
<p>Therefore I want to know how can I benchmark my server? Or is there any example which I can run many times on a different number of processes, so that I can see which number of process is the best?
<br>
<p>Or is there examples with results which I can compare with my results?
<br>
<p>Thanx in advance
<br>
Ibrahim
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br>
_______________________________________________
<br>
<p><p><p><p><p><p><pre>
-- 
Kind regards Nick


_______________________________________________
-- 
Saliya EkanayakePh.D. Candidate | Research AssistantSchool of Informatics and Computing | Digital Science CenterIndiana University, Bloomington
Cell 812-391-4914<a href="http://saliya.org">http://saliya.org</a>


_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28354.php">http://www.open-mpi.org/community/lists/users/2016/01/28354.php</a> 		 	   		  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28355/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28356.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Previous message:</strong> <a href="28354.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>In reply to:</strong> <a href="28354.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28356.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Reply:</strong> <a href="28356.php">Saliya Ekanayake: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Reply:</strong> <a href="28362.php">Mark Santcroos: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
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
