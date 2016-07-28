<?
$subject_val = "Re: [OMPI users] Mimicking timeout for MPI_Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 15:03:16 2009" -->
<!-- isoreceived="20091204200316" -->
<!-- sent="Fri, 4 Dec 2009 15:03:08 -0500" -->
<!-- isosent="20091204200308" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mimicking timeout for MPI_Wait" -->
<!-- id="OF30A63520.7D6BA731-ON85257682.006CE54F-85257682.006E26B6_at_us.ibm.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="03DE3055-2C3A-459C-AB8F-90851ACFDD98_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mimicking timeout for MPI_Wait<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 15:03:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11425.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11423.php">Jeremiah Willcock: "[OMPI users] Typo in mpirun man page"</a>
<li><strong>In reply to:</strong> <a href="11421.php">Jeff Squyres: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11436.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11436.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are hoping for a return on timeout, almost zero CPU use while
<br>
waiting and fast response you will need to be pretty creative. Here is a
<br>
simple solution that may be OK if you do not need both fast response and
<br>
low CPU load.
<br>

<br>
flag = false;
<br>
for ( ; ! is_time_up(); )
<br>
&nbsp;&nbsp;&nbsp;MPI_Test( ........ &amp;flag, ......);
<br>
&nbsp;&nbsp;&nbsp;if (flag) break;
<br>
&nbsp;&nbsp;&nbsp;usleep(..)
<br>
}
<br>

<br>
Make the sleep short or leave it out and you hog CPU, make it long and your
<br>
lag time for detecting a message that arrives after you enter the loop
<br>
will average 1/2 the sleep plus a bit.
<br>

<br>

<br>

<br>
Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>

<br>

<br>
users-bounces_at_[hidden] wrote on 12/04/2009 01:38:05 PM:
<br>

<br>
<span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Mimicking timeout for MPI_Wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 12/04/2009 01:38 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 3, 2009, at 3:31 AM, Katz, Jacob wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if there is a BKM (efficient and portable) to mimic a
</span><br>
<span class="quotelev1">&gt; timeout with a call to MPI_Wait, i.e. to interrupt it once a given
</span><br>
<span class="quotelev1">&gt; time period has passed if it hasn&#226;&#128;&#153;t returned by then yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pardon my ignorance, but what does BKM stand for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI does not currently implement a timeout-capable MPI_WAIT.
</span><br>
<span class="quotelev1">&gt; Such functionality probably could be implemented (e.g., in the MPIX
</span><br>
<span class="quotelev1">&gt; &quot;experimental&quot; namespace), especially since Open MPI polls for
</span><br>
<span class="quotelev1">&gt; progress -- it could check a timer every so often while polling --
</span><br>
<span class="quotelev1">&gt; but no one has done so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11424/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11425.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11423.php">Jeremiah Willcock: "[OMPI users] Typo in mpirun man page"</a>
<li><strong>In reply to:</strong> <a href="11421.php">Jeff Squyres: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11436.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11436.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
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
