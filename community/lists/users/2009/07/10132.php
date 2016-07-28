<?
$subject_val = "Re: [OMPI users] Test works with 3 computers, but not 4?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 16:07:04 2009" -->
<!-- isoreceived="20090729200704" -->
<!-- sent="Wed, 29 Jul 2009 16:06:58 -0400" -->
<!-- isosent="20090729200658" -->
<!-- name="David Doria" -->
<!-- email="daviddoria+openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test works with 3 computers, but not 4?" -->
<!-- id="c19fcadc0907291306y13a7cd7aqa04f3946cb1985b5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F3427867-7830-48E4-893F-34E01BC856B1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test works with 3 computers, but not 4?<br>
<strong>From:</strong> David Doria (<em>daviddoria+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 16:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 29, 2009 at 3:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It sounds like perhaps IOF messages aren't getting relayed along the
</span><br>
<span class="quotelev1">&gt; daemons. Note that the daemon on each node does have to be able to send TCP
</span><br>
<span class="quotelev1">&gt; messages to all other nodes, not just mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Couple of things you can do to check:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. -mca routed direct - this will send all messages direct instead of
</span><br>
<span class="quotelev1">&gt; across the daemons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. --leave-session-attached - will allow you to see any errors reported by
</span><br>
<span class="quotelev1">&gt; the daemons, including those from attempting to relay messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ralph, thanks for the quick response.
<br>
<p>With
<br>
-mca routed direct
<br>
it works correctly.
<br>
<p>With this:
<br>
mpirun -H 10.1.2.126,10.1.2.122,10.1.2.123,10.1.2.125
<br>
--leave-session-attached -np 4 /home/doriad/MPITest/hello-mpi
<br>
<p>I still get no output nor errors from the daemons.
<br>
<p>Is there a downside to using 'mca routed direct'? Or should I fix whatever
<br>
is causing this daemon issue? You have any other tests for me to try to see
<br>
what's wrong?
<br>
<p>Thanks,
<br>
<p>David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10131.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
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
