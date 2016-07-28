<?
$subject_val = "Re: [OMPI users] How to time data transfers?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 13 16:52:09 2010" -->
<!-- isoreceived="20101013205209" -->
<!-- sent="Wed, 13 Oct 2010 15:52:02 -0500" -->
<!-- isosent="20101013205202" -->
<!-- name="Michael E. Thomadakis" -->
<!-- email="miket7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to time data transfers?" -->
<!-- id="4CB61BF2.6080609_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CB5F907.5070004_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to time data transfers?<br>
<strong>From:</strong> Michael E. Thomadakis (<em>miket7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-13 16:52:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14459.php">Kalin Kanov: "[OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Previous message:</strong> <a href="14457.php">Eugene Loh: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>In reply to:</strong> <a href="14457.php">Eugene Loh: "Re: [OMPI users] How to time data transfers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14463.php">Jeff Squyres: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Reply:</strong> <a href="14463.php">Jeff Squyres: "Re: [OMPI users] How to time data transfers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 10/13/10 13:23, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Ed Peddycoart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need to do some performance tests on my mpi app.  I simply want to 
</span><br>
<span class="quotelev2">&gt;&gt; determine how long it takes for my sends from one process to be 
</span><br>
<span class="quotelev2">&gt;&gt; received by another process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That should work once the code is corrected.  Can you use 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Wtime()?  (Not necessarily a big deal, but should be a portable 
</span><br>
<span class="quotelev2">&gt;&gt; way of getting high-quality timings in MPI programs.)  In what sense 
</span><br>
<span class="quotelev2">&gt;&gt; does it not capture the complete time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
[ .. ]
<br>
<p>Does MPI_Wtime of OMPI 1.4.3/1.5.0 rely on high resolution clocks  (for 
<br>
Linux) or does still rely on gettimeofday() ? How would one request at 
<br>
OMPI built time to let it use high resolution clocks?
<br>
<p><p>thanks ...
<br>
<p>Michael
<br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14458/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14459.php">Kalin Kanov: "[OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Previous message:</strong> <a href="14457.php">Eugene Loh: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>In reply to:</strong> <a href="14457.php">Eugene Loh: "Re: [OMPI users] How to time data transfers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14463.php">Jeff Squyres: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Reply:</strong> <a href="14463.php">Jeff Squyres: "Re: [OMPI users] How to time data transfers?"</a>
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
