<?
$subject_val = "Re: [OMPI users] how to benchmark a server with openmpi?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 10:21:08 2016" -->
<!-- isoreceived="20160124152108" -->
<!-- sent="Sun, 24 Jan 2016 10:21:07 -0500" -->
<!-- isosent="20160124152107" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to benchmark a server with openmpi?" -->
<!-- id="CA+ssbKWfTCc79cbKWo8fF71nUVE7bCyKRr5ANJpP4DKtQ-mLaA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc76NO1-Zf5xBzHB9j9Yz9UAun_FcnbvKqMJo00CNhGAzw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-24 10:21:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Previous message:</strong> <a href="28353.php">Nick Papior: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>In reply to:</strong> <a href="28353.php">Nick Papior: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Reply:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've looked at performance in detail with regard to OpenMPI Java for large
<br>
scale real data analytics. Here's a paper still in submission that
<br>
identifies 5 rules you'd find useful to get good performance. It talks
<br>
about how the number of processes affect performance as well. Tests were
<br>
done up 3072 cores on a large Intel Haswell HPC cluster
<br>
<p><a href="https://www.researchgate.net/publication/291695527_SPIDAL_Java_High_Performance_Data_Analytics_with_Java_and_MPI_on_Large_Multicore_HPC_Clusters">https://www.researchgate.net/publication/291695527_SPIDAL_Java_High_Performance_Data_Analytics_with_Java_and_MPI_on_Large_Multicore_HPC_Clusters</a>
<br>
<p>Thank you,
<br>
Saliya
<br>
<p>On Sun, Jan 24, 2016 at 9:41 AM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; *All* codes scale differently.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hallo,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working on a server and run java codes with OpenMPI. I want to know
</span><br>
<span class="quotelev2">&gt;&gt; which number of process is the fastest to run my code with?
</span><br>
<span class="quotelev2">&gt;&gt; For this reason I wrote a code that multiply two matrices but the
</span><br>
<span class="quotelev2">&gt;&gt; differences between the results is not significant.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Therefore I want to know how can I benchmark my server? Or is there any
</span><br>
<span class="quotelev2">&gt;&gt; example which I can run many times on a different number of processes, so
</span><br>
<span class="quotelev2">&gt;&gt; that I can see which number of process is the best?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or is there examples with results which I can compare with my results?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanx in advance
</span><br>
<span class="quotelev2">&gt;&gt; Ibrahim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28352.php">http://www.open-mpi.org/community/lists/users/2016/01/28352.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28354/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Previous message:</strong> <a href="28353.php">Nick Papior: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>In reply to:</strong> <a href="28353.php">Nick Papior: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Reply:</strong> <a href="28355.php">Ibrahim Ikhlawi: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
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
