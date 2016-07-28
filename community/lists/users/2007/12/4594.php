<?
$subject_val = "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 02:50:49 2007" -->
<!-- isoreceived="20071205075049" -->
<!-- sent="Wed, 5 Dec 2007 02:50:45 -0500" -->
<!-- isosent="20071205075045" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)" -->
<!-- id="2b5e0c120712042350u5a1925d0u88a5eb27424190b5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2b5e0c120712042250j35c708cfve5095b809ce9399d_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-12-05 02:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4595.php">alireza ghahremanian: "[OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>Previous message:</strong> <a href="4593.php">Brian Dobbins: "[OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>In reply to:</strong> <a href="4593.php">Brian Dobbins: "[OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4598.php">Josh Hursey: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;As a quick follow-up to my own post, I just tried this on a few other
<br>
systems:
<br>
<p>1) One system, on which the nodes have only one ethernet device, running the
<br>
code with the split &quot;-np&quot; arguments works fine.
<br>
2) Another system, which has IB links (as default), runs the code fine.
<br>
3) Two very similar systems, each with two ethernet devices on each node
<br>
(hence the mca parameters), and on both of these systems the code does
<br>
*not*work, giving the connection errors shown earlier.
<br>
<p>&nbsp;&nbsp;I'll try a few more things tomorrow, but I have to imagine other people
<br>
have seen this, or I'm just missing a crucial mca parameter?
<br>
<p>&nbsp;&nbsp;Thanks very much,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p>Brian Dobbins
<br>
Yale University HPC
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4595.php">alireza ghahremanian: "[OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>Previous message:</strong> <a href="4593.php">Brian Dobbins: "[OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>In reply to:</strong> <a href="4593.php">Brian Dobbins: "[OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4598.php">Josh Hursey: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
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
