<?
$subject_val = "Re: [OMPI users] OpenMPI and valgrind";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 18 22:01:23 2011" -->
<!-- isoreceived="20111219030123" -->
<!-- sent="Sun, 18 Dec 2011 20:01:15 -0700" -->
<!-- isosent="20111219030115" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and valgrind" -->
<!-- id="15C7613D-7BFC-49E8-8171-0A8920A41F05_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1324232877.74491.YahooMailNeo_at_web121702.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and valgrind<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-18 22:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18002.php">Addepalli, Srirangam V: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="18000.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17996.php">Mudassar Majeed: "[OMPI users] OpenMPI and valgrind"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should be able to just run valgrind on your application. Just execute your job with:
<br>
<p>mpirun &lt;options&gt; valgrind &lt;valgrind-options&gt; &lt;your-application&gt;
<br>
<p><p>On Dec 18, 2011, at 11:27 AM, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; Dear people, 
</span><br>
<span class="quotelev1">&gt;                       I am using MPI over a supercomputing center. I don't have access to install OpenMPI again with enabling valgrind. I need to check the memory leaks in my application. How can I see in which line of my code of MPI application there is memory leak ??? Supercomputing center replies me with no more memory problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Mudassar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18001/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18002.php">Addepalli, Srirangam V: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="18000.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17996.php">Mudassar Majeed: "[OMPI users] OpenMPI and valgrind"</a>
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
