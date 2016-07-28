<?
$subject_val = "[OMPI users] Sending MPI-message from master to master";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 12:58:53 2011" -->
<!-- isoreceived="20110103175853" -->
<!-- sent="Tue, 4 Jan 2011 01:58:48 +0800" -->
<!-- isosent="20110103175848" -->
<!-- name="&#243;&#197;&#210;&#199;&#197;&#202; &#242;&#197;&#202;&#205;&#197;&#210;&#207;&#215;" -->
<!-- email="sergeyreym_at_[hidden]" -->
<!-- subject="[OMPI users] Sending MPI-message from master to master" -->
<!-- id="AANLkTi=MPJntMDs+5EKQ6Gn=ySOn9bZtKt9UidwNtkRJ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Sending MPI-message from master to master<br>
<strong>From:</strong> &#243;&#197;&#210;&#199;&#197;&#202; &#242;&#197;&#202;&#205;&#197;&#210;&#207;&#215; (<em>sergeyreym_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 12:58:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15258.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Previous message:</strong> <a href="15256.php">Brock Palen: "[OMPI users] Sending large boradcasts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've not found any helpful information about possibility of sending
<br>
messages from a node of cluster to the same node (for example
<br>
MPI_Send(&amp;f, 1, MPI_UNSIGNED_LONG_LONG, 0, 0, MPI_COMM_WORLD) from
<br>
node #0).
<br>
I wrote program with two threads and one thread MPI_Send message to
<br>
another thread that must it MPI_Recv. And such program freezes because
<br>
interlock occurs sometime (not always).
<br>
If it's possible I've attached cpp-file with example of problem.
<br>
Thanks a lot for your attantion.
<br>
<p>
<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15257/self_sending.cpp">self_sending.cpp</a>
</ul>
<!-- attachment="self_sending.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15258.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Previous message:</strong> <a href="15256.php">Brock Palen: "[OMPI users] Sending large boradcasts"</a>
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
