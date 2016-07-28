<?
$subject_val = "Re: [OMPI users] using MPI_Recv in two different threads.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 08:09:11 2012" -->
<!-- isoreceived="20120111130911" -->
<!-- sent="Wed, 11 Jan 2012 08:09:06 -0500" -->
<!-- isosent="20120111130906" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using MPI_Recv in two different threads." -->
<!-- id="4F0D89F2.5060105_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1326284356.19452.YahooMailNeo_at_web113102.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] using MPI_Recv in two different threads.<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 08:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18136.php">Ralph Castain: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Previous message:</strong> <a href="18134.php">Jeff Squyres: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>In reply to:</strong> <a href="18133.php">Hamilton Fischer: "[OMPI users] using MPI_Recv in two different threads."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18176.php">Hamilton Fischer: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>Reply:</strong> <a href="18176.php">Hamilton Fischer: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am a little confused by your problem statement.  Are you saying you 
<br>
want to have each MPI process to have multiple threads that can call MPI 
<br>
concurrently?  If so you'll want to read up on the MPI_Init_thread 
<br>
function.
<br>
<p>--td
<br>
<p>On 1/11/2012 7:19 AM, Hamilton Fischer wrote:
<br>
<span class="quotelev1">&gt; Hi, I'm actually using mpi4py but my question should be similar to normal MPI in spirit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simply, I want to do a MPMD application with a dedicated thread for each node (I have a small network). I was wondering if it was okay to do a blocking recv in each independent thread. Of course, since each thread has one node, there is no problem with wrong recv's being picked up by other threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; noobermin
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
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18135/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18136.php">Ralph Castain: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Previous message:</strong> <a href="18134.php">Jeff Squyres: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>In reply to:</strong> <a href="18133.php">Hamilton Fischer: "[OMPI users] using MPI_Recv in two different threads."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18176.php">Hamilton Fischer: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>Reply:</strong> <a href="18176.php">Hamilton Fischer: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
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
