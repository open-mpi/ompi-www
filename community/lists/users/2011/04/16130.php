<?
$subject_val = "Re: [OMPI users] alltoall messages &gt; 2^26";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 22:17:35 2011" -->
<!-- isoreceived="20110405021735" -->
<!-- sent="Mon, 4 Apr 2011 19:17:10 -0700" -->
<!-- isosent="20110405021710" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] alltoall messages &amp;gt; 2^26" -->
<!-- id="BANLkTinYLjua18FEXjGTC9m0xHd5_0+9GQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTinYPVbdkgvXjfUiXkjdDePRhvi_GA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] alltoall messages &gt; 2^26<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 22:17:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16131.php">Ahsan Ali: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="16129.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16128.php">Michael Di Domenico: "[OMPI users] alltoall messages &gt; 2^26"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16138.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Reply:</strong> <a href="16138.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Reply:</strong> <a href="16144.php">Terry Dontje: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any error messages?  Maybe the nodes ran out of memory?  I know MPI
<br>
implement some kind of buffering under the hood, so even though you're
<br>
sending array's over 2^26 in size, it may require more than that for MPI to
<br>
actually send it.
<br>
<p>On Mon, Apr 4, 2011 at 2:16 PM, Michael Di Domenico
<br>
&lt;mdidomenico4_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone seen an issue where OpenMPI/Infiniband hangs when sending
</span><br>
<span class="quotelev1">&gt; messages over 2^26 in size?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a reason i have not determined just yet machines on my cluster
</span><br>
<span class="quotelev1">&gt; (OpenMPI v1.5 and Qlogic Stack/QDR IB Adapters) is failing to send
</span><br>
<span class="quotelev1">&gt; array's over 2^26 in size via the AllToAll collective. (user code)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Further testing seems to indicate that an MPI message over 2^26 fails
</span><br>
<span class="quotelev1">&gt; (tested with IMB-MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running the same test on a different older IB connected cluster seems
</span><br>
<span class="quotelev1">&gt; to work, which would seem to indicate a problem with the infiniband
</span><br>
<span class="quotelev1">&gt; drivers of some sort rather then openmpi (but i'm not sure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts, directions, or tests?
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16130/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16131.php">Ahsan Ali: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="16129.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16128.php">Michael Di Domenico: "[OMPI users] alltoall messages &gt; 2^26"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16138.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Reply:</strong> <a href="16138.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Reply:</strong> <a href="16144.php">Terry Dontje: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
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
