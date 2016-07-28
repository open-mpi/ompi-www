<?
$subject_val = "Re: [OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 11:08:41 2015" -->
<!-- isoreceived="20150612150841" -->
<!-- sent="Fri, 12 Jun 2015 08:08:35 -0700" -->
<!-- isosent="20150612150835" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy" -->
<!-- id="964CA7EE-A85B-42D9-8594-58D42C37A41C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJ6k7aGSKMz1N8SQ+8PMdGX3AnGLW1xbZ5fhAzjwAUvefrfj-g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-12 11:08:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27126.php">Noam Bernstein: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>Previous message:</strong> <a href="27124.php">borno_borno_at_[hidden]: "[OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>In reply to:</strong> <a href="27123.php">kishor sharma: "[OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this a threaded code? If so, you should add &#226;&#128;&#148;bind-to none to your 1.8 series command line
<br>
<p><p><span class="quotelev1">&gt; On Jun 12, 2015, at 7:58 AM, kishor sharma &lt;kishor.iitr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi There,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am facing slowness running numpy code using mpirun with openmpi 1.8.1 version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Open MPI (1.8.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/openmpi/bin/mpirun -version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.8.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  time /usr/lib64/openmpi/bin/mpirun -np 1 python -c 'import numpy; numpy.linalg.svd(numpy.eye(1000))'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real 23.75
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; user 6.95
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sys 16.68
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Open MPI (1.5.4):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/openmpi/bin/mpirun -version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.5.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; time /usr/lib64/openmpi/bin/mpirun -np 1 python -c 'import numpy; numpy.linalg.svd(numpy.eye(1000))'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real 1.35
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; user 2.11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sys 0.71
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you guys have any idea why the above function is 10-15x with openmpi version 1.8.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kishor
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27123.php">http://www.open-mpi.org/community/lists/users/2015/06/27123.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27126.php">Noam Bernstein: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>Previous message:</strong> <a href="27124.php">borno_borno_at_[hidden]: "[OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>In reply to:</strong> <a href="27123.php">kishor sharma: "[OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy"</a>
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
