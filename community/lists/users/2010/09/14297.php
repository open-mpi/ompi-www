<?
$subject_val = "Re: [OMPI users] Question about Asynchronous collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 12:57:47 2010" -->
<!-- isoreceived="20100923165747" -->
<!-- sent="Thu, 23 Sep 2010 18:57:41 +0200" -->
<!-- isosent="20100923165741" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about Asynchronous collectives" -->
<!-- id="AANLkTimnvFwx3r7QE43DdFvThu19V35tVQuatcwkKEFn_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFE58838BB.88550785-ON852577A7.0050BAEA-852577A7.0051F0E2_at_us.ibm.com" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 12:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14298.php">Bowen Zhou: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14296.php">pooja varshneya: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>In reply to:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14301.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14301.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry Richard,
<br>
<p>what is CC issue order on the communicator?, in particular, &quot;CC&quot;, what does
<br>
it mean?
<br>
<p>2010/9/23 Richard Treumann &lt;treumann_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; request_1 and request_2 are just local variable names.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only thing that determines matching order is CC issue order on the
</span><br>
<span class="quotelev1">&gt; communicator.  At each process, some CC is issued first and some CC is
</span><br>
<span class="quotelev1">&gt; issued second.  The first issued CC at each process will try to match the
</span><br>
<span class="quotelev1">&gt; first issued CC at the other processes.  By this rule,
</span><br>
<span class="quotelev1">&gt; rank 0:
</span><br>
<span class="quotelev1">&gt; MPI_Ibcast; MPI_Ibcast
</span><br>
<span class="quotelev1">&gt; Rank 1;
</span><br>
<span class="quotelev1">&gt; MPI_Ibcast; MPI_Ibcast
</span><br>
<span class="quotelev1">&gt; is well defined and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0:
</span><br>
<span class="quotelev1">&gt; MPI_Ibcast; MPI_Ireduce
</span><br>
<span class="quotelev1">&gt; Rank 1;
</span><br>
<span class="quotelev1">&gt; MPI_Ireducet; MPI_Ibcast
</span><br>
<span class="quotelev1">&gt; is incorrect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not agree with Jeff on this below.   The Proc 1 case where the
</span><br>
<span class="quotelev1">&gt; MPI_Waits are reversed simply requires the MPI implementation to make
</span><br>
<span class="quotelev1">&gt; progress on both MPI_Ibcast operations in the first MPI_Wait. The second
</span><br>
<span class="quotelev1">&gt; MPI_Wait call will simply find that the first MPI_Ibcast is already done.
</span><br>
<span class="quotelev1">&gt;  The second MPI_Wait call becomes, effectively, a query function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; proc 0:
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
</span><br>
<span class="quotelev1">&gt; MPI_Wait(&amp;request_1, ...);
</span><br>
<span class="quotelev1">&gt; MPI_Wait(&amp;request_2, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; proc 1:
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // first Bcast
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // second Bcast
</span><br>
<span class="quotelev1">&gt; MPI_Wait(&amp;request_1, ...);
</span><br>
<span class="quotelev1">&gt; MPI_Wait(&amp;request_2, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That may/will deadlock.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick Treumann  -  MPI Team
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From:
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; Date: 09/23/2010 10:13 AM Subject: Re:
</span><br>
<span class="quotelev1">&gt; [OMPI users] Question about Asynchronous collectives Sent by:
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 23, 2010, at 10:00 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; to be sure, if i have one processor who does:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
</span><br>
<span class="quotelev2">&gt; &gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; it means that i can't have another process who does the follow:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // firt Bcast for another process
</span><br>
<span class="quotelev2">&gt; &gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // second Bcast for another process
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Because first Bcast of second process matches with first Bcast of first
</span><br>
<span class="quotelev1">&gt; process, and it's wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you did a &quot;waitall&quot; on both requests, it would probably work because MPI
</span><br>
<span class="quotelev1">&gt; would just &quot;figure it out&quot;.  But if you did something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; proc 0:
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
</span><br>
<span class="quotelev1">&gt; MPI_Wait(&amp;request_1, ...);
</span><br>
<span class="quotelev1">&gt; MPI_Wait(&amp;request_2, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; proc 1:
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // first Bcast
</span><br>
<span class="quotelev1">&gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // second Bcast
</span><br>
<span class="quotelev1">&gt; MPI_Wait(&amp;request_1, ...);
</span><br>
<span class="quotelev1">&gt; MPI_Wait(&amp;request_2, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That may/will deadlock.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14297/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14298.php">Bowen Zhou: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14296.php">pooja varshneya: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>In reply to:</strong> <a href="14294.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14301.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14301.php">Richard Treumann: "Re: [OMPI users] Question about Asynchronous collectives"</a>
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
