<?
$subject_val = "Re: [OMPI users] maximising bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 31 05:05:17 2011" -->
<!-- isoreceived="20110131100517" -->
<!-- sent="Mon, 31 Jan 2011 11:05:12 +0100" -->
<!-- isosent="20110131100512" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] maximising bandwidth" -->
<!-- id="AANLkTinMx+X_EshaK3VrMN+F6BjJmU_UgLJ2T481zJXu_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinmDQD9a+qGurjGhk2wqKifChX4mR+UH0e+s=HP_at_mail.gmail.com" -->
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
<strong>From:</strong> Toon Knapen (<em>toon.knapen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-31 05:05:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15454.php">Bill Rankin: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Previous message:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>In reply to:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15454.php">Bill Rankin: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Reply:</strong> <a href="15454.php">Bill Rankin: "Re: [OMPI users] maximising bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So when you say you want your master to send &quot;as fast as possible&quot;, I
</span><br>
<span class="quotelev1">&gt; suppose you meant get back to running your code as soon as possible.  In
</span><br>
<span class="quotelev1">&gt; that case you would want nonblocking.  However when you say you want the
</span><br>
<span class="quotelev1">&gt; slaves to receive data faster, it seems you're implying the actual data
</span><br>
<span class="quotelev1">&gt; transmission across the network.  I believe the data transmission speed is
</span><br>
<span class="quotelev1">&gt; not dependent on whether the it is blocking or nonblocking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sorry I did not express myself clearly. With 'as fast as possible' I meant
<br>
that I want to have all data ASAP available in my slave nodes. The master
<br>
has nothing to do but sending so I do not care if the sends are blocking or
<br>
non-blocking. Actually the master will use seperate threads for the sending
<br>
anyway so either I launch a thread per blocking-send or just 1 thread to do
<br>
all the sending using nonblocking sends.
<br>
<p>I do think there is plenty of reason for a difference (in the timing for
<br>
receiving the data in the slaves). If OpenMPI is not able to offload the
<br>
sending to some dedicated card (which in my case is probably the case since
<br>
I'm on a stock linux with stock ethernet cards) and OpenMPI will try to send
<br>
the data that it was requested to send by multiple nonblocking send's
<br>
simultaneously, OpenMPI itself probably needs to multi-thread the sending of
<br>
each message himself.
<br>
<p>Well, I do not know anything about the internals of OpenMPI so I actually
<br>
have no clue how OpenMPI would do this really and how it will try to
<br>
optimise the use of BW on the network.
<br>
<p>toon
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15453/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15454.php">Bill Rankin: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Previous message:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>In reply to:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15454.php">Bill Rankin: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Reply:</strong> <a href="15454.php">Bill Rankin: "Re: [OMPI users] maximising bandwidth"</a>
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
