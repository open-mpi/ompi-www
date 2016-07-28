<?
$subject_val = "Re: [OMPI users] maximising bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 31 12:38:40 2011" -->
<!-- isoreceived="20110131173840" -->
<!-- sent="Mon, 31 Jan 2011 18:38:35 +0100" -->
<!-- isosent="20110131173835" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] maximising bandwidth" -->
<!-- id="AANLkTi=5YY0LMinmJ+vpN66MWP=9CpNFvM4PNUKxwYWQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D46F0C9.5040801_at_oracle.com" -->
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
<strong>Date:</strong> 2011-01-31 12:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15457.php">Bibrak Qamar: "[OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Previous message:</strong> <a href="15455.php">Eugene Loh: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>In reply to:</strong> <a href="15455.php">Eugene Loh: "Re: [OMPI users] maximising bandwidth"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree with Bill that performance portability is an issue.  That is, the
</span><br>
<span class="quotelev1">&gt; MPI standard itself doesn't really provide any guarantees here about what is
</span><br>
<span class="quotelev1">&gt; fastest.  Perhaps polling this mailing list will be helpful, but if you are
</span><br>
<span class="quotelev1">&gt; looking for &quot;the fastest&quot; solution regardless of which MPI implementation
</span><br>
<span class="quotelev1">&gt; you use (and which interconnect you use... which might be determined at run
</span><br>
<span class="quotelev1">&gt; time) you will probably be disappointed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I was afraid that was going to be the case :-( So if I'm concerned about
<br>
being network-BW-bound and being performant on different types of
<br>
architectures I should design my application such that it is able to use any
<br>
of the above communication patterns such that I can tell the
<br>
app which comm-pattern to use depending on the middleware/hardware it will
<br>
run on (to optimise for BW usage) ?
<br>
<p>toon
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15457.php">Bibrak Qamar: "[OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Previous message:</strong> <a href="15455.php">Eugene Loh: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>In reply to:</strong> <a href="15455.php">Eugene Loh: "Re: [OMPI users] maximising bandwidth"</a>
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
