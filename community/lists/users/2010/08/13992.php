<?
$subject_val = "Re: [OMPI users] Separating output from multiple MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 11:07:40 2010" -->
<!-- isoreceived="20100812150740" -->
<!-- sent="Thu, 12 Aug 2010 09:07:30 -0600" -->
<!-- isosent="20100812150730" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Separating output from multiple MPI processes" -->
<!-- id="11F87A20-242D-48CA-B8E7-B01596A1AF0F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="07E77CF9C426584F8126A762FD1AFEA414888922E4_at_HDXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Separating output from multiple MPI processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 11:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13993.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13991.php">Price, Brian M (N-KCI): "[OMPI users] Separating output from multiple MPI processes"</a>
<li><strong>In reply to:</strong> <a href="13991.php">Price, Brian M (N-KCI): "[OMPI users] Separating output from multiple MPI processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check &quot;mpirun -h&quot; and you'll see options to do exactly that...specifically, you want -output-filename
<br>
<p><p>On Aug 12, 2010, at 8:20 AM, Price, Brian M (N-KCI) wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there a simple way (environment variable or flag) to separate the output of each of my MPI processes into separate log files?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Brian Price
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13992/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13993.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13991.php">Price, Brian M (N-KCI): "[OMPI users] Separating output from multiple MPI processes"</a>
<li><strong>In reply to:</strong> <a href="13991.php">Price, Brian M (N-KCI): "[OMPI users] Separating output from multiple MPI processes"</a>
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
