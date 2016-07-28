<?
$subject_val = "Re: [OMPI users] programming qsn??";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 19:47:22 2009" -->
<!-- isoreceived="20090814234722" -->
<!-- sent="Sat, 15 Aug 2009 04:47:18 +0500" -->
<!-- isosent="20090814234718" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] programming qsn??" -->
<!-- id="428810f20908141647s431dd26fta36c431c123f3f5b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A84C100.2010503_at_sun.com" -->
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
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-14 19:47:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10369.php">Alan: "Re: [OMPI users] openmpi with xgrid"</a>
<li><strong>Previous message:</strong> <a href="10367.php">George Bosilca: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators"</a>
<li><strong>In reply to:</strong> <a href="10358.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Mr. Eugene Loh,
<br>
THANK YOU VERY MUCH, IT WORKED. I used both ISEND and IRECV and then a
<br>
combined call to WAITALL with MPI_STATUSES_IGNORE.
<br>
<p>with best regards,
<br>
Amjad Ali.
<br>
<p><p>On Fri, Aug 14, 2009 at 6:42 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; amjad ali wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Please tell me that if have multiple such ISEND-RECV squrntially for
</span><br>
<span class="quotelev2">&gt;&gt; sending receiving data then DO we need to declare separate
</span><br>
<span class="quotelev2">&gt;&gt; status(MPI_STATUS_SIZE) with for example status1, status2, ....; or a single
</span><br>
<span class="quotelev2">&gt;&gt; declaration of it will work for all??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, it really is good form to post receives as early as possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, when you have multiple requests being completed at once, you need
</span><br>
<span class="quotelev1">&gt; more than one status.  So, you declare an array of statuses.  Check the man
</span><br>
<span class="quotelev1">&gt; page for MPI_Waitall.  E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; INCLUDE 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; INTEGER REQS(M)
</span><br>
<span class="quotelev1">&gt; INTEGER STATS(MPI_STATUS_SIZE,M)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DO I = 1, M
</span><br>
<span class="quotelev1">&gt;  CALL MPI_IRECV(BUF?, COUNT?, DATATYPE?, SOURCE?, TAG?, COMM?, REQS(I),
</span><br>
<span class="quotelev1">&gt; IER)
</span><br>
<span class="quotelev1">&gt; END DO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DO I = 1, N
</span><br>
<span class="quotelev1">&gt;  CALL MPI_SEND(BUF?, COUNT?, DATATYPE?, DEST?, TAG?, COMM?, IER)
</span><br>
<span class="quotelev1">&gt; END DO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL MPI_WAITALL(M, REQS, STATS, IER)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't care about the statuses, don't declare STATS and just use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL MPI_WAITALL(M,REQS,MPI_STATUSES_IGNORE,IER)
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10369.php">Alan: "Re: [OMPI users] openmpi with xgrid"</a>
<li><strong>Previous message:</strong> <a href="10367.php">George Bosilca: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators"</a>
<li><strong>In reply to:</strong> <a href="10358.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
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
