<?
$subject_val = "Re: [OMPI users] strange IMB runs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 13:55:27 2009" -->
<!-- isoreceived="20090729175527" -->
<!-- sent="Wed, 29 Jul 2009 19:55:22 +0200" -->
<!-- isosent="20090729175522" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange IMB runs" -->
<!-- id="4A708D0A.3020406_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e75d22a90907291041i1f092711p88bcafd6c30dc8ca_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange IMB runs<br>
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 13:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10130.php">David Doria: "[OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10128.php">Michael Di Domenico: "[OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10128.php">Michael Di Domenico: "[OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10143.php">George Bosilca: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10143.php">George Bosilca: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10154.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>--mca mpi_leave_pinned 1
<br>
<p>might help. Take a look at the FAQ for various tuning parameters.
<br>
<p><p>Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; I'm not sure I understand what's actually happened here.  I'm running
</span><br>
<span class="quotelev1">&gt; IMB on an HP superdome, just comparing the PingPong benchmark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HP-MPI v2.3
</span><br>
<span class="quotelev1">&gt; Max ~ 700-800MB/sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI v1.3
</span><br>
<span class="quotelev1">&gt; -mca btl self,sm - Max ~ 125-150MB/sec
</span><br>
<span class="quotelev1">&gt; -mca btl self,tcp - Max ~ 500-550MB/sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this behavior expected?  Are there any tunables to get the OpenMPI
</span><br>
<span class="quotelev1">&gt; sockets up near HP-MPI?
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10130.php">David Doria: "[OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10128.php">Michael Di Domenico: "[OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10128.php">Michael Di Domenico: "[OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10143.php">George Bosilca: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10143.php">George Bosilca: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10154.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
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
