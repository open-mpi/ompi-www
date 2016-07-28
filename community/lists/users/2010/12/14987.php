<?
$subject_val = "Re: [OMPI users] Open MPI vs IBM MPI performance help";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 06:31:41 2010" -->
<!-- isoreceived="20101203113141" -->
<!-- sent="Fri, 3 Dec 2010 17:01:36 +0530" -->
<!-- isosent="20101203113136" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI vs IBM MPI performance help" -->
<!-- id="AANLkTi=fX0+UW=J-+8NLA0QxM6p-A5Swi3tmbbNc+0_q_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="07E77CF9C426584F8126A762FD1AFEA414BE50ABAD_at_HDXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI vs IBM MPI performance help<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 06:31:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14988.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Previous message:</strong> <a href="14986.php">Peter Kjellstr&#246;m: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>In reply to:</strong> <a href="14966.php">Price, Brian M (N-KCI): "[OMPI users] Open MPI vs IBM MPI performance help"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Collecting MPI Profile information might help narrow down the issue. You
<br>
could use some of the tools mentioned here -
<br>
<a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>
<br>
<p>--Nysal
<br>
<p>On Wed, Dec 1, 2010 at 11:59 PM, Price, Brian M (N-KCI) &lt;
<br>
brian.m.price_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  OpenMPI version: 1.4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Platform: IBM P5, 32 processors, 256 GB memory, Symmetric Multi-Threading
</span><br>
<span class="quotelev1">&gt; (SMT) enabled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Application: starts up 48 processes and does MPI using MPI_Barrier,
</span><br>
<span class="quotelev1">&gt; MPI_Get, MPI_Put (lots of transfers, large amounts of data)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Issue:  When implemented using Open MPI vs. IBM&#146;s MPI (&#145;poe&#146; from HPC
</span><br>
<span class="quotelev1">&gt; Toolkit), the application runs 3-5 times slower.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that IBM&#146;s MPI implementation must take advantage of some
</span><br>
<span class="quotelev1">&gt; knowledge that it has about data transfers that Open MPI is not taking
</span><br>
<span class="quotelev1">&gt; advantage of.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Price
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14987/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14988.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Previous message:</strong> <a href="14986.php">Peter Kjellstr&#246;m: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>In reply to:</strong> <a href="14966.php">Price, Brian M (N-KCI): "[OMPI users] Open MPI vs IBM MPI performance help"</a>
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
