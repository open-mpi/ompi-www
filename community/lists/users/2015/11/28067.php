<?
$subject_val = "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 16:19:31 2015" -->
<!-- isoreceived="20151119211931" -->
<!-- sent="Thu, 19 Nov 2015 16:19:27 -0500" -->
<!-- isosent="20151119211927" -->
<!-- name="Saurabh T" -->
<!-- email="saurabh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &amp;lt;= 131072" -->
<!-- id="DUB123-W317A0D11A55AA7F5FB8ADFB11B0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB123-W38301A95B9A7159E155BCBB11B0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072<br>
<strong>From:</strong> Saurabh T (<em>saurabh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 16:19:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28068.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28066.php">Saurabh T: "[OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>In reply to:</strong> <a href="28066.php">Saurabh T: "[OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28069.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
An &quot;strace&quot; showed something related to shared memory use was causing the signal. Sticking
<br>
<p>btl = ^sm
<br>
<p>into the openmpi-mca-params.conf file fixed this issue.
<br>
<p>saurabh
<br>
<p>From: saurabh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072
<br>
Date: Thu, 19 Nov 2015 15:24:08 -0500
<br>
<p><p><p>Sorry my previous email was garbled, sending it again.
<br>
<p><span class="quotelev1">&gt; cd examples
</span><br>
<span class="quotelev1">&gt; make hello_cxx
</span><br>
<p><span class="quotelev1">&gt; ulimit -f 131073
</span><br>
<span class="quotelev1">&gt; orterun -np 3 hello_cxx
</span><br>
Hello, world
<br>
(etc)
<br>
<p><span class="quotelev1">&gt; ulimit -f 131072
</span><br>
<span class="quotelev1">&gt; orterun -np 3 hello_cxx
</span><br>
--------------------------------------------------------------------------
<br>
orterun noticed that process rank 0 with PID 4473 on node sim16 exited on signal 25 (File size limit exceeded).
<br>
--------------------------------------------------------------------------
<br>
<p>Any thoughts? 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28067/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28068.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28066.php">Saurabh T: "[OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>In reply to:</strong> <a href="28066.php">Saurabh T: "[OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28069.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
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
