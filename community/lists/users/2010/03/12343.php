<?
$subject_val = "Re: [OMPI users] Open MPI performance on Amazon Cloud";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 20:47:16 2010" -->
<!-- isoreceived="20100313014716" -->
<!-- sent="Fri, 12 Mar 2010 20:47:11 -0500" -->
<!-- isosent="20100313014711" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI performance on Amazon Cloud" -->
<!-- id="428810f21003121747p62d19f39o9f46f6169ecc4c69_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 20:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12344.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12342.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12331.php">Hammad Siddiqi: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12385.php">Jeff Squyres: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Hammad,
<br>
Can you please have a RUN with &quot;sufficiently Larger Problem Instance&quot;? Then
<br>
see what happens!!
<br>
Sufficient----may be 10 times greater than that you used.
<br>
<p>best regards,
<br>
Amjad Ali.
<br>
<p>On Fri, Mar 12, 2010 at 3:10 AM, Hammad Siddiqi &lt;hammad.siddiqi_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; Is this the correct forum for sending these kind of emails. please let me
</span><br>
<span class="quotelev1">&gt; know if there is some other mailing list.
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
<span class="quotelev1">&gt; Web: <a href="http://hpc.seecs.nust.edu.pk/~hammad/<http://hpc.seecs.nust.edu.pk/%7Ehammad/">http://hpc.seecs.nust.edu.pk/~hammad/<http://hpc.seecs.nust.edu.pk/%7Ehammad/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Feb 27, 2010 at 10:07 PM, Hammad Siddiqi &lt;
</span><br>
<span class="quotelev1">&gt; hammad.siddiqi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am facing very wierd results of OpenMPI 1.4.1 on Amazon EC2. I have
</span><br>
<span class="quotelev2">&gt;&gt; used Small Instance and  and High CPU medium instance for benchmarking
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
<span class="quotelev2">&gt;&gt; Data:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-BandwidthData.jpg<http://hpc.seecs.nust.edu.pk/%7Ehammad/OpenMPI,Latency-BandwidthData.jpg">http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-BandwidthData.jpg<http://hpc.seecs.nust.edu.pk/%7Ehammad/OpenMPI,Latency-BandwidthData.jpg</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Graphs:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-Bandwidth.jpg<http://hpc.seecs.nust.edu.pk/%7Ehammad/OpenMPI,Latency-Bandwidth.jpg">http://hpc.seecs.nust.edu.pk/~hammad/OpenMPI,Latency-Bandwidth.jpg<http://hpc.seecs.nust.edu.pk/%7Ehammad/OpenMPI,Latency-Bandwidth.jpg</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Please have a look on them.
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12343/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12344.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12342.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12331.php">Hammad Siddiqi: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12385.php">Jeff Squyres: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
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
