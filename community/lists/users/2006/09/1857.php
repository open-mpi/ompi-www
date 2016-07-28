<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 13 09:44:53 2006" -->
<!-- isoreceived="20060913134453" -->
<!-- sent="Wed, 13 Sep 2006 19:14:47 +0530 (IST)" -->
<!-- isosent="20060913134447" -->
<!-- name="Jayanta Roy" -->
<!-- email="jroy_at_[hidden]" -->
<!-- subject="[OMPI users] problem with running mpi" -->
<!-- id="Pine.LNX.4.61.0609131906290.7339_at_dhruva1.ncra.tifr.res.in" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060913063733.18019.qmail_at_web37505.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jayanta Roy (<em>jroy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-13 09:44:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1858.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1856.php">Gunnar Johansson: "[OMPI users] OpenMPI + NAT"</a>
<li><strong>In reply to:</strong> <a href="1855.php">imran shaik: "[OMPI users] Perl and  MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1858.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was running mpirun in the linux cluster we have.
<br>
<p>mpirun -n 5 -bynode -hostfile test_nodes a.out
<br>
<p>Sometime occationaly after MPI initialization I have the following error..
<br>
<p>rank:   1       of:     5
<br>
rank:   4       of:     5
<br>
rank:   3       of:     5
<br>
rank:   0       of:     5
<br>
rank:   2       of:     5
<br>
Signal:6 info.si_errno:0(Success) si_code:0(SI_USER)
<br>
[0] func:/opt/openmpi-1.1/lib/libopal.so.0 [0x4011781f]
<br>
[1] func:[(nil)]
<br>
*** End of error message ***
<br>
Signal:6 info.si_errno:0(Success) si_code:0(SI_USER)
<br>
[0] func:/opt/openmpi-1.1/lib/libopal.so.0 [0x4011781f]
<br>
[1] func:[(nil)]
<br>
*** End of error message ***
<br>
<p>And then in after few runns it automatically gets through!
<br>
<p>Can you have some clue?
<br>
<p>Regards,
<br>
Jaynta
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1858.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1856.php">Gunnar Johansson: "[OMPI users] OpenMPI + NAT"</a>
<li><strong>In reply to:</strong> <a href="1855.php">imran shaik: "[OMPI users] Perl and  MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1858.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
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
