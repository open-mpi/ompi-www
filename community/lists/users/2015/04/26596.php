<?
$subject_val = "[OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 00:48:49 2015" -->
<!-- isoreceived="20150403044849" -->
<!-- sent="Thu, 2 Apr 2015 23:48:27 -0500" -->
<!-- isosent="20150403044827" -->
<!-- name="Lei Shi" -->
<!-- email="leishi_at_[hidden]" -->
<!-- subject="[OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever" -->
<!-- id="CAEV8=V_uUvLesPPQoSaKT5SyXujctS2dvUYgBcXdHp2T87KESw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever<br>
<strong>From:</strong> Lei Shi (<em>leishi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-03 00:48:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26597.php">Lei Shi: "[OMPI users] Buffered sends are evil?"</a>
<li><strong>Previous message:</strong> <a href="26595.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26598.php">Matthieu Brucher: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26598.php">Matthieu Brucher: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I want to use non-blocking send/rev MPI_Isend/MPI_Irev to do communication.
<br>
But in my case, I don't really care what kind of data I get or it is ready
<br>
to use or not. So I don't want to waste my time to do any synchronization
<br>
&nbsp;by calling MPI_Wait or etc API.
<br>
<p>But when I avoid calling MPI_Wait, my program is freezed several secs after
<br>
running some iterations (after multiple MPI_Isend/Irev callings), then
<br>
continues. It takes even more time than the case with MPI_Wait.  So my
<br>
question is how to do a &quot;true&quot; non-blocking communication without waiting
<br>
for the data ready or not. Thanks.
<br>
<p>Sincerely Yours,
<br>
<p>Lei Shi
<br>
---------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26597.php">Lei Shi: "[OMPI users] Buffered sends are evil?"</a>
<li><strong>Previous message:</strong> <a href="26595.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26598.php">Matthieu Brucher: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26598.php">Matthieu Brucher: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
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
