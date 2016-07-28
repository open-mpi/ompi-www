<?
$subject_val = "[OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 10:27:50 2009" -->
<!-- isoreceived="20090818142750" -->
<!-- sent="Tue, 18 Aug 2009 07:27:45 -0700 (PDT)" -->
<!-- isosent="20090818142745" -->
<!-- name="Julia He" -->
<!-- email="springwater4he_at_[hidden]" -->
<!-- subject="[OMPI users] (no subject)" -->
<!-- id="15705.78265.qm_at_web51311.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] (no subject)<br>
<strong>From:</strong> Julia He (<em>springwater4he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 10:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10404.php">Julia He: "[OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10402.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I found that the subroutine call inside a loop did not
return correct value after certain iterations. In order to simplify the
problem, the inputs to the subroutine are chosen to be constant, so the
output should be the same for every iteration on every computing node.
It is a fortran program, after the initialization the program goes like
this:
<br>
<p>do i = 1, N
<br>
&#160; call my_sub(A, B, C, re)
<br>
&#160; print *,&#160; mypn, A, B, C, re
<br>
end do
<br>
<p>where re is the output value of the my_sub, A, B, C are inputs to my_sub.
<br>
<p>570
is the number of correct iterations. If the combined instances does not
exceed 570, the output is fine. For example, if I requested 10
computing nodes and N were 40, so it gives 10*40=400 instances, the
output would be fine. But if the combined instances exceeded 570, the
first 570 is fine, but the rest will return NaN value. For example, if
the number of computing nodes were 20 and N were 40, which gives
20*40=800 instances, then the first 570 are fine, but the rest are NaN
value.
<br>
<p>Does
someone know what might cause the problem? I googled it, but can't find
a clue where to start. Please also let me know what else you need to
debug the problem.
<br>
<p>Thanks.
<br>
<p>Julia
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10404.php">Julia He: "[OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10402.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
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
