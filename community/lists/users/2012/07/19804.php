<?
$subject_val = "[OMPI users] Efficient polling for both incoming messages and request completion";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 22 18:01:29 2012" -->
<!-- isoreceived="20120722220129" -->
<!-- sent="Sun, 22 Jul 2012 15:01:09 -0700" -->
<!-- isosent="20120722220109" -->
<!-- name="Geoffrey Irving" -->
<!-- email="irving_at_[hidden]" -->
<!-- subject="[OMPI users] Efficient polling for both incoming messages and request completion" -->
<!-- id="CAJ1ofpdNxSVD=_FFN1j3kN9KTzjgJehB0XJF3EyL76ajwvDN2Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Efficient polling for both incoming messages and request completion<br>
<strong>From:</strong> Geoffrey Irving (<em>irving_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-22 18:01:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19805.php">³ÂËÉ: "[OMPI users] checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="19803.php">tiago essex: "[OMPI users] ft-enable-cr + vprotocol"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Is it possible to efficiently poll for both incoming messages and
<br>
request completion using only one thread?  As far as I know, busy
<br>
waiting with alternate MPI_Iprobe and MPI_Testsome calls is the only
<br>
way to do this.  Is that approach dangerous to do performance-wise?
<br>
<p>Background: my application is memory constrained, so when requests
<br>
complete I may suddenly be able to schedule new computation.  At the
<br>
same time, I need to be responding to a variety of asynchronous
<br>
messages from unknown processors with unknown message sizes, which as
<br>
far as I know I can't turn into a request to poll on.
<br>
<p>Thanks,
<br>
Geoffrey
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19805.php">³ÂËÉ: "[OMPI users] checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="19803.php">tiago essex: "[OMPI users] ft-enable-cr + vprotocol"</a>
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
