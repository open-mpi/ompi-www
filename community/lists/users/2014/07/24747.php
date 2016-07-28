<?
$subject_val = "Re: [OMPI users] mpi_comm_spawn question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 12:48:28 2014" -->
<!-- isoreceived="20140703164828" -->
<!-- sent="Thu, 3 Jul 2014 18:48:26 +0200" -->
<!-- isosent="20140703164826" -->
<!-- name="Milan Hodoscek" -->
<!-- email="milan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_comm_spawn question" -->
<!-- id="21429.35162.404243.823583_at_ala.cmm.ki.si" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVPYGJCgGdD=ZzidbfLREZPr3OXEGDQBZfTq=QQR3Rz+Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_comm_spawn question<br>
<strong>From:</strong> Milan Hodoscek (<em>milan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-03 12:48:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24748.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Previous message:</strong> <a href="24746.php">George Bosilca: "Re: [OMPI users] mpi_comm_spawn question"</a>
<li><strong>In reply to:</strong> <a href="24746.php">George Bosilca: "Re: [OMPI users] mpi_comm_spawn question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;George&quot; == George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;George&gt; Why are you using system() the second time ? As you want
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George&gt; to spawn an MPI application calling MPI_Call_spawn would
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George&gt; make everything simpler.
<br>
<p>Yes, this works! Very good trick... The system routine would be more
<br>
flexible, but for the method we are working now mpi_comm_spawn is also
<br>
OK.
<br>
<p>Thanks -- Milan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24748.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Previous message:</strong> <a href="24746.php">George Bosilca: "Re: [OMPI users] mpi_comm_spawn question"</a>
<li><strong>In reply to:</strong> <a href="24746.php">George Bosilca: "Re: [OMPI users] mpi_comm_spawn question"</a>
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
