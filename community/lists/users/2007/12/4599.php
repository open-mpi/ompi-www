<?
$subject_val = "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 10:47:27 2007" -->
<!-- isoreceived="20071205154727" -->
<!-- sent="Wed, 5 Dec 2007 10:47:22 -0500" -->
<!-- isosent="20071205154722" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)" -->
<!-- id="2b5e0c120712050747u576d4cb0s81fc1bbc8fad8507_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EE95025E-5E29-479F-8B76-10F1C57D6D79_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)<br>
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 10:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4600.php">Tee Wen Kai: "[OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4598.php">Josh Hursey: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>In reply to:</strong> <a href="4598.php">Josh Hursey: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4608.php">Ralph H Castain: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Reply:</strong> <a href="4608.php">Ralph H Castain: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>I believe the problem is that you are only applying the MCA
<br>
<span class="quotelev1">&gt; parameters to the first app context instead of all of them:
</span><br>
<p><p>&nbsp;&nbsp;Thank you *very* much.. applying the parameters with -gmca works fine with
<br>
the test case (and I'll try the actual one soon).   However and this is
<br>
minor since it works with method (1),...
<br>
<p><p><span class="quotelev1">&gt; There are two main ways of doing this:
</span><br>
<p>2) Alternatively you can duplicate the MCA parameters for each app context:
<br>
<p><p>&nbsp;&nbsp;.. This actually doesn't work.  I had thought of that and tried it, and I
<br>
still get the same connection problems.  I just rechecked this again to be
<br>
sure.
<br>
<p>&nbsp;&nbsp;Again, many thanks for the help!
<br>
<p>&nbsp;&nbsp;With best wishes,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p>Brian Dobbins
<br>
Yale University HPC
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4599/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4600.php">Tee Wen Kai: "[OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4598.php">Josh Hursey: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>In reply to:</strong> <a href="4598.php">Josh Hursey: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4608.php">Ralph H Castain: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Reply:</strong> <a href="4608.php">Ralph H Castain: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
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
