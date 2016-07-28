<?
$subject_val = "Re: [OMPI users] maximising bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 31 10:40:34 2011" -->
<!-- isoreceived="20110131154034" -->
<!-- sent="Mon, 31 Jan 2011 15:40:25 +0000" -->
<!-- isosent="20110131154025" -->
<!-- name="Bill Rankin" -->
<!-- email="Bill.Rankin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] maximising bandwidth" -->
<!-- id="76097BB0C025054786EFAB631C4A2E3C094FB587_at_MERCMBX03R.na.SAS.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinMx+X_EshaK3VrMN+F6BjJmU_UgLJ2T481zJXu_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] maximising bandwidth<br>
<strong>From:</strong> Bill Rankin (<em>Bill.Rankin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-31 10:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15455.php">Eugene Loh: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Previous message:</strong> <a href="15453.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>In reply to:</strong> <a href="15453.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15455.php">Eugene Loh: "Re: [OMPI users] maximising bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you thought about trying out MPI_Scatter/Gather and at least seeing how efficient the internal algorithms are?
<br>
<p>If you are always going to be running on the same platform and want to tune-n-tweak for that, then have at it.  If you are going to run this code on different platforms w/ different network architectures then I would be concerned about the performance &quot;portability&quot;.  In other words a solution that ran well on one cluster may not run well on another, due to a number of factors.
<br>
<p>Good luck,
<br>
<p>-bill
<br>
<p><p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Toon Knapen
<br>
Sent: Monday, January 31, 2011 5:05 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] maximising bandwidth
<br>
<p><p>So when you say you want your master to send &quot;as fast as possible&quot;, I suppose you meant get back to running your code as soon as possible.  In that case you would want nonblocking.  However when you say you want the slaves to receive data faster, it seems you're implying the actual data transmission across the network.  I believe the data transmission speed is not dependent on whether the it is blocking or nonblocking.
<br>
Sorry I did not express myself clearly. With 'as fast as possible' I meant that I want to have all data ASAP available in my slave nodes. The master has nothing to do but sending so I do not care if the sends are blocking or non-blocking. Actually the master will use seperate threads for the sending anyway so either I launch a thread per blocking-send or just 1 thread to do all the sending using nonblocking sends.
<br>
<p>I do think there is plenty of reason for a difference (in the timing for receiving the data in the slaves). If OpenMPI is not able to offload the sending to some dedicated card (which in my case is probably the case since I'm on a stock linux with stock ethernet cards) and OpenMPI will try to send the data that it was requested to send by multiple nonblocking send's simultaneously, OpenMPI itself probably needs to multi-thread the sending of each message himself.
<br>
<p>Well, I do not know anything about the internals of OpenMPI so I actually have no clue how OpenMPI would do this really and how it will try to optimise the use of BW on the network.
<br>
<p>toon
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15454/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15455.php">Eugene Loh: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Previous message:</strong> <a href="15453.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>In reply to:</strong> <a href="15453.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15455.php">Eugene Loh: "Re: [OMPI users] maximising bandwidth"</a>
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
