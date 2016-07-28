<?
$subject_val = "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 03:12:17 2016" -->
<!-- isoreceived="20160226081217" -->
<!-- sent="Fri, 26 Feb 2016 16:11:37 +0800" -->
<!-- isosent="20160226081137" -->
<!-- name="Eva" -->
<!-- email="wuzhh01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1" -->
<!-- id="CAHgSaRSP3M1kZWx_qVq94p1v95TK-RVaJfRSE2h57cdNQ=iGOw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHgSaRR=B8DdAuQoRonS_pNCUWTYSBJmmU5_q5xWgustd8Sdpw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1<br>
<strong>From:</strong> Eva (<em>wuzhh01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 03:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28590.php">Blosch, Edwin L: "[OMPI users] Question on OpenMPI backwards compatibility"</a>
<li><strong>Previous message:</strong> <a href="28588.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="28588.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gilles. Got it. I will run it.
<br>
<p>2016-02-26 16:10 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Thanks Gilles. what do you mean &quot; standard MPI benchmark&quot; ? where can I
</span><br>
<span class="quotelev1">&gt; find it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-02-26 14:47 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I measure communication time for MPI_Send and end2end training time
</span><br>
<span class="quotelev2">&gt;&gt; (including model training and communication time).
</span><br>
<span class="quotelev2">&gt;&gt; MPI1.4.1 is faster than MPI1.10.2:
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send+MPI_Recv: 2.83%
</span><br>
<span class="quotelev2">&gt;&gt; end2end training time: 8.89%
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-02-26 14:45 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I measure communication time for MPI_Send and end2end training
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time&#239;&#188;&#136;including model training and communication time&#239;&#188;&#137;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send+MPI_Recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end2end training
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI1.4.1 is faster than MPI1.10.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.83%
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8.89%
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2016-02-24 13:49 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I compile the same program by using 1.4.1 and 1.10.2rc3 and then run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them under the same environment. 1.4.1 is 8.89% faster than 1.10.2rc3. Is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there any official performance report for each version upgrade?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28589/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28590.php">Blosch, Edwin L: "[OMPI users] Question on OpenMPI backwards compatibility"</a>
<li><strong>Previous message:</strong> <a href="28588.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="28588.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
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
