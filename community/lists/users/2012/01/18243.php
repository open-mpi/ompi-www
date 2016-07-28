<?
$subject_val = "[OMPI users] Running osu benchmark test suite with open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 23 01:26:08 2012" -->
<!-- isoreceived="20120123062608" -->
<!-- sent="Mon, 23 Jan 2012 11:56:03 +0530" -->
<!-- isosent="20120123062603" -->
<!-- name="Venkateswara Rao Dokku" -->
<!-- email="dvrao.584_at_[hidden]" -->
<!-- subject="[OMPI users] Running osu benchmark test suite with open-mpi" -->
<!-- id="CACiOAOBtHu49m5QKno+T26=ers1cU-kYNq+xMTst0vbctkmgHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Running osu benchmark test suite with open-mpi<br>
<strong>From:</strong> Venkateswara Rao Dokku (<em>dvrao.584_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-23 01:26:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18244.php">Paul Kapinos: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>Previous message:</strong> <a href="18242.php">Mike Dubman: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18310.php">Jeff Squyres: "Re: [OMPI users] Running osu benchmark test suite with open-mpi"</a>
<li><strong>Reply:</strong> <a href="18310.php">Jeff Squyres: "Re: [OMPI users] Running osu benchmark test suite with open-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I am trying to run the osu bench-mark suite with the open-mpi on our
<br>
customized OFED, and i was able to run 10 out of the 14 tests in the osu
<br>
bench-mark suite. The tests are
<br>
<p>1. osu_acc_latency
<br>
2. osu_alltoall
<br>
3. osu_bcast
<br>
4.osu_bibw
<br>
5.osu_bw
<br>
6.osu_get_latency
<br>
7.osu_latency
<br>
8.osu_mbw_mr
<br>
9.osu_multi_lat
<br>
10.osu_put_latency
<br>
<p>While trying to run the remaining 4 tests viz.
<br>
osu_get_bw,osu_latency_mt,osu_put_bi_bw,osu_put_bw the test is starting
<br>
fine and the test is hanging there in the middle at message size 524288...
<br>
can we run those osu tests with open mpi or do we need to use mvapich2
<br>
inorder to run these tests.
<br>
<p>Thanks for the reply...
<br>
<p><pre>
-- 
Thanks &amp; Regards,
D.Venkateswara Rao,
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18243/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18244.php">Paul Kapinos: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>Previous message:</strong> <a href="18242.php">Mike Dubman: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18310.php">Jeff Squyres: "Re: [OMPI users] Running osu benchmark test suite with open-mpi"</a>
<li><strong>Reply:</strong> <a href="18310.php">Jeff Squyres: "Re: [OMPI users] Running osu benchmark test suite with open-mpi"</a>
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
