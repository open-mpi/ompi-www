<?
$subject_val = "[OMPI users] Question on checkpoint overhead in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 12:25:59 2010" -->
<!-- isoreceived="20100707162559" -->
<!-- sent="Thu, 8 Jul 2010 01:25:52 +0900" -->
<!-- isosent="20100707162552" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="[OMPI users] Question on checkpoint overhead in Open MPI" -->
<!-- id="AANLkTilthgFkDIHRbMnAG_UEeUSPrpa0LB9s8ucPC98L_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Question on checkpoint overhead in Open MPI<br>
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 12:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13506.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13504.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13641.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Reply:</strong> <a href="13641.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Reply:</strong> <a href="13672.php">Josh Hursey: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
I have a question concerning the checkpoint overhead in Open MPI, which is
<br>
the difference taken from the runtime of application execution with and
<br>
without checkpoint.
<br>
I observe that when the data size and the number of processes increases, the
<br>
runtime of BLCR is very small compared to the overall checkpoint overhead in
<br>
Open MPI. Is it because of the increase of coordination time for checkpoint?
<br>
And what is included in the overall checkpoint overhead besides the BLCR's
<br>
checkpoint overhead and coordination time?
<br>
Thank you.
<br>
<p>Best Regards,
<br>
Nguyen Toan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13506.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13504.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13641.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Reply:</strong> <a href="13641.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Reply:</strong> <a href="13672.php">Josh Hursey: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
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
