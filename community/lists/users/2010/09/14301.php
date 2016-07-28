<?
$subject_val = "Re: [OMPI users] Question about Asynchronous collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 14:13:34 2010" -->
<!-- isoreceived="20100923181334" -->
<!-- sent="Thu, 23 Sep 2010 14:13:29 -0400" -->
<!-- isosent="20100923181329" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about Asynchronous collectives" -->
<!-- id="OFA577BFDF.842CEDB1-ON852577A7.0062847F-852577A7.00641D1A_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AANLkTimnvFwx3r7QE43DdFvThu19V35tVQuatcwkKEFn_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-09-23 14:13:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14302.php">Matheus Bersot Siqueira Barros: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Previous message:</strong> <a href="14300.php">Fernando Saez: "[OMPI users] How to know which process is running on which core?"</a>
<li><strong>In reply to:</strong> <a href="14297.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
CC stands for any Collective Communication operation. Every CC occurs on 
<br>
some communicator.
<br>
<p>Every CC is issued (basically the thread the call is on enters the call) 
<br>
at some point in  time.  If two threads are issuing CC calls on the same 
<br>
communicator, the issue order can become ambiguous so making CC calls from 
<br>
different threads but on the same communicator is generally unsafe. There 
<br>
is debate about whether it can be made safe by forcing some kind of thread 
<br>
serialization but since the MPI standard does not discuss thread 
<br>
serialization, the best  advise is to use a different communicator for 
<br>
each thread and be sure you have control of issue order.
<br>
<p>When CC  calls appear in some static order in a block of code that has no 
<br>
branches, issue order is simple to recognize.  An example like this can 
<br>
cause problems unless you are sure every process has the same condition:
<br>
<p>If (condition) {
<br>
&nbsp;&nbsp;MPI_Ibcast
<br>
&nbsp;&nbsp;MPI_Ireduce
<br>
} else {
<br>
&nbsp;&nbsp;MPI_Ireduce
<br>
&nbsp;&nbsp;MPI_Ibcast
<br>
}
<br>
<p>If some ranks take the if and some ranks take the else, there is an &quot;issue 
<br>
order&quot; problem. (I do not have any idea why someone would do this)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick 
<br>
<p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p><p>From:
<br>
Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
09/23/2010 01:02 PM
<br>
Subject:
<br>
Re: [OMPI users] Question about Asynchronous collectives
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>
<p><p><p>Sorry Richard,
<br>
<p>what is CC issue order on the communicator?, in particular, &quot;CC&quot;, what 
<br>
does it mean?
<br>
<p>2010/9/23 Richard Treumann &lt;treumann_at_[hidden]&gt;
<br>
<p>request_1 and request_2 are just local variable names. 
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
&nbsp;The second MPI_Wait call becomes, effectively, a query function. 
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
<p><p><p>From: 
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
<p><p><p><p><p>On Sep 23, 2010, at 10:00 AM, Gabriele Fatigati wrote:
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it           
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14302.php">Matheus Bersot Siqueira Barros: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Previous message:</strong> <a href="14300.php">Fernando Saez: "[OMPI users] How to know which process is running on which core?"</a>
<li><strong>In reply to:</strong> <a href="14297.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
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
