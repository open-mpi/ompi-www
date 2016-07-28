<?
$subject_val = "Re: [OMPI users] Question about Asynchronous collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 10:55:17 2010" -->
<!-- isoreceived="20100923145517" -->
<!-- sent="Thu, 23 Sep 2010 10:54:59 -0400" -->
<!-- isosent="20100923145459" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about Asynchronous collectives" -->
<!-- id="OFE58838BB.88550785-ON852577A7.0050BAEA-852577A7.0051F0E2_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E8BD1BDD-B7E0-420F-91ED-FEE412923B6A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about Asynchronous collectives<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 10:54:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14295.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14293.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14293.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14295.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14295.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14297.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
request_1 and request_2 are just local variable names. 
<br>
<p>The only thing that determines matching order is CC issue order on the 
<br>
communicator.  At each process, some CC is issued first and some CC is 
<br>
issued second.  The first issued CC at each process will try to match the 
<br>
first issued CC at the other processes.  By this rule,
<br>
rank 0: 
<br>
MPI_Ibcast; MPI_Ibcast 
<br>
Rank 1;
<br>
MPI_Ibcast; MPI_Ibcast 
<br>
is well defined and
<br>
<p>rank 0: 
<br>
MPI_Ibcast; MPI_Ireduce
<br>
Rank 1;
<br>
MPI_Ireducet; MPI_Ibcast 
<br>
is incorrect.
<br>
<p>I do not agree with Jeff on this below.   The Proc 1 case where the 
<br>
MPI_Waits are reversed simply requires the MPI implementation to make 
<br>
progress on both MPI_Ibcast operations in the first MPI_Wait. The second 
<br>
MPI_Wait call will simply find that the first MPI_Ibcast is already done. 
<br>
The second MPI_Wait call becomes, effectively, a query function.
<br>
<p>proc 0:
<br>
MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
<br>
MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
<br>
MPI_Wait(&amp;request_1, ...);
<br>
MPI_Wait(&amp;request_2, ...);
<br>
<p>proc 1:
<br>
MPI_IBcast(MPI_COMM_WORLD, request_2) // first Bcast
<br>
MPI_IBcast(MPI_COMM_WORLD, request_1) // second Bcast
<br>
MPI_Wait(&amp;request_1, ...);
<br>
MPI_Wait(&amp;request_2, ...);
<br>
<p>That may/will deadlock.
<br>
<p><p><p><p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p><p>From:
<br>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
09/23/2010 10:13 AM
<br>
Subject:
<br>
Re: [OMPI users] Question about Asynchronous collectives
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>
<p><p><p>On Sep 23, 2010, at 10:00 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; to be sure, if i have one processor who does:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it means that i can't have another process who does the follow:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // firt Bcast for another process
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // second Bcast for another 
</span><br>
process
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because first Bcast of second process matches with first Bcast of first 
</span><br>
process, and it's wrong.
<br>
<p>If you did a &quot;waitall&quot; on both requests, it would probably work because 
<br>
MPI would just &quot;figure it out&quot;.  But if you did something like:
<br>
<p>proc 0:
<br>
MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
<br>
MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
<br>
MPI_Wait(&amp;request_1, ...);
<br>
MPI_Wait(&amp;request_2, ...);
<br>
<p>proc 1:
<br>
MPI_IBcast(MPI_COMM_WORLD, request_2) // first Bcast
<br>
MPI_IBcast(MPI_COMM_WORLD, request_1) // second Bcast
<br>
MPI_Wait(&amp;request_1, ...);
<br>
MPI_Wait(&amp;request_2, ...);
<br>
<p>That may/will deadlock.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14295.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14293.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14293.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14295.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14295.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14297.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
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
