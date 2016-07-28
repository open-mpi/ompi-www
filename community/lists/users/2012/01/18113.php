<?
$subject_val = "Re: [OMPI users] OpenVMS";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan  8 10:54:23 2012" -->
<!-- isoreceived="20120108155423" -->
<!-- sent="Sun, 8 Jan 2012 08:54:14 -0700" -->
<!-- isosent="20120108155414" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenVMS" -->
<!-- id="D1E1C9EE-7B28-4FA0-91D1-243B7DFEC1E9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1RjtUb-00077a-00.yumashev-mail-ru_at_f255.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenVMS<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-08 10:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18114.php">Thompson, Kelly G: "[OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<li><strong>Previous message:</strong> <a href="18112.php">Vladimir Yumashev: "[OMPI users] OpenVMS"</a>
<li><strong>In reply to:</strong> <a href="18112.php">Vladimir Yumashev: "[OMPI users] OpenVMS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 8, 2012, at 7:13 AM, Vladimir Yumashev wrote:
<br>
<p><span class="quotelev1">&gt; Dear Sirs,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to have a kind of MPI for OpenVMS.
</span><br>
<span class="quotelev1">&gt; There is a need to arrange communications between processes
</span><br>
<span class="quotelev1">&gt; within a single SMP Alpha system driven by OpenVMS using MPI library
</span><br>
<span class="quotelev1">&gt; to preserve existing parallel code based on MPI.
</span><br>
<span class="quotelev1">&gt; Minimum subset of MPI is required: asynchronous
</span><br>
<span class="quotelev1">&gt; point-to-point communications under MPI_COMM_WORLD.
</span><br>
<span class="quotelev1">&gt; Is it possible to port OpenMPI to OpenVMS?
</span><br>
<p>Sure
<br>
<p><span class="quotelev1">&gt; Is it an easy or a sophisticated task?
</span><br>
<span class="quotelev1">&gt; Could I do it myself?
</span><br>
<p>Not entirely sure how to answer these as they are so dependent on your background. In general, it is pretty straightforward to port OMPI to a new environment, assuming you just want TCP transport for MPI. In fact, if you can use ssh to launch things and a hostfile to tell ORTE where to put the procs, then no porting may be required.
<br>
<p>Have you tried simply building OMPI in that environment and running it? Given that OpenVMS is now Posix compliant, it may just work.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any information would be useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Vladimir Yumashev
</span><br>
<span class="quotelev1">&gt; Assoc.Prof.
</span><br>
<span class="quotelev1">&gt; Moscow Inst. of Physics &amp; Technology (MFTI)
</span><br>
<span class="quotelev1">&gt; +7-495-556-6554
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18114.php">Thompson, Kelly G: "[OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<li><strong>Previous message:</strong> <a href="18112.php">Vladimir Yumashev: "[OMPI users] OpenVMS"</a>
<li><strong>In reply to:</strong> <a href="18112.php">Vladimir Yumashev: "[OMPI users] OpenVMS"</a>
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
