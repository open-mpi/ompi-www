<?
$subject_val = "Re: [OMPI users] programming qsn??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 21:41:43 2009" -->
<!-- isoreceived="20090814014143" -->
<!-- sent="Thu, 13 Aug 2009 18:42:24 -0700" -->
<!-- isosent="20090814014224" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] programming qsn??" -->
<!-- id="4A84C100.2010503_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="428810f20908131805x3e5631e4t2cc45b3b7dcc675c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] programming qsn??<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 21:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10359.php">Lee Amy: "[OMPI users] Help: How to accomplish processors affinity"</a>
<li><strong>Previous message:</strong> <a href="10357.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<li><strong>In reply to:</strong> <a href="10357.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10368.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Reply:</strong> <a href="10368.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
amjad ali wrote:
<br>
<p><span class="quotelev1">&gt; Please tell me that if have multiple such ISEND-RECV squrntially for 
</span><br>
<span class="quotelev1">&gt; sending receiving data then DO we need to declare separate 
</span><br>
<span class="quotelev1">&gt; status(MPI_STATUS_SIZE) with for example status1, status2, ....; or a 
</span><br>
<span class="quotelev1">&gt; single declaration of it will work for all??
</span><br>
<p>First of all, it really is good form to post receives as early as possible.
<br>
<p>Anyhow, when you have multiple requests being completed at once, you 
<br>
need more than one status.  So, you declare an array of statuses.  Check 
<br>
the man page for MPI_Waitall.  E.g.,
<br>
<p>INCLUDE 'mpif.h'
<br>
<p>INTEGER REQS(M)
<br>
INTEGER STATS(MPI_STATUS_SIZE,M)
<br>
<p>DO I = 1, M
<br>
&nbsp;&nbsp;CALL MPI_IRECV(BUF?, COUNT?, DATATYPE?, SOURCE?, TAG?, COMM?, REQS(I), 
<br>
IER)
<br>
END DO
<br>
<p>DO I = 1, N
<br>
&nbsp;&nbsp;CALL MPI_SEND(BUF?, COUNT?, DATATYPE?, DEST?, TAG?, COMM?, IER)
<br>
END DO
<br>
<p>CALL MPI_WAITALL(M, REQS, STATS, IER)
<br>
<p>If you don't care about the statuses, don't declare STATS and just use
<br>
<p>CALL MPI_WAITALL(M,REQS,MPI_STATUSES_IGNORE,IER)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10359.php">Lee Amy: "[OMPI users] Help: How to accomplish processors affinity"</a>
<li><strong>Previous message:</strong> <a href="10357.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<li><strong>In reply to:</strong> <a href="10357.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10368.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Reply:</strong> <a href="10368.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
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
