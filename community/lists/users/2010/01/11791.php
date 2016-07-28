<?
$subject_val = "[OMPI users] dynamic rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 07:54:38 2010" -->
<!-- isoreceived="20100115125438" -->
<!-- sent="Fri, 15 Jan 2010 13:54:33 +0100" -->
<!-- isosent="20100115125433" -->
<!-- name="Roman Martonak" -->
<!-- email="r.martonak_at_[hidden]" -->
<!-- subject="[OMPI users] dynamic rules" -->
<!-- id="d21ea44c1001150454y554cc87ax53acdc195e791217_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] dynamic rules<br>
<strong>From:</strong> Roman Martonak (<em>r.martonak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 07:54:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11792.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11790.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11795.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Reply:</strong> <a href="11795.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Maybe reply:</strong> <a href="11797.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Maybe reply:</strong> <a href="11804.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On my machine I need to use dynamic rules to enforce the bruck or pairwise
<br>
algorithm for alltoall, since unfortunately the default basic linear
<br>
algorithm performs quite poorly on my
<br>
Infiniband network. Few months ago I noticed that in case of VASP,
<br>
however, the use of dynamic
<br>
rules via --mca coll_tuned_use_dynamic_rules 1 -mca
<br>
coll_tuned_dynamic_rules_filename dyn_rules
<br>
has no effect at all. Later it was identified that there was a bug
<br>
causing the dynamic rules to
<br>
apply only to the MPI_COMM_WORLD but not to other communicators. As
<br>
far as I understand, the bug
<br>
was fixed in openmpi-1.3.4. I tried now the openmpi-1.4 version and
<br>
expected that tuning of alltoall via dynamic
<br>
rules would work, but there is still no effect at all. Even worse, now
<br>
it is not even possible to use static rules
<br>
(which worked previously) such as -mca coll_tuned_alltoall_algorithm
<br>
3, because the code would crash (as discussed in the list recently).
<br>
When running with --mca coll_base_verbose 1000, I get messages like
<br>
<p>[compute-0-0.local:08011] coll:sm:comm_query (0/MPI_COMM_WORLD):
<br>
intercomm, comm is too small, or not all peers local; disqualifying
<br>
myself
<br>
[compute-0-0.local:08011] coll:base:comm_select: component not available: sm
<br>
[compute-0-0.local:08011] coll:base:comm_select: component available:
<br>
sync, priority: 50
<br>
[compute-0-3.local:26116] coll:base:comm_select: component available:
<br>
self, priority: 75
<br>
[compute-0-3.local:26116] coll:sm:comm_query (1/MPI_COMM_SELF):
<br>
intercomm, comm is too small, or not all peers local; disqualifying
<br>
myself
<br>
[compute-0-3.local:26116] coll:base:comm_select: component not available: sm
<br>
[compute-0-3.local:26116] coll:base:comm_select: component available:
<br>
sync, priority: 50
<br>
[compute-0-3.local:26116] coll:base:comm_select: component not available: tuned
<br>
[compute-0-0.local:08011] coll:base:comm_select: component available:
<br>
tuned, priority: 30
<br>
<p>Is there now a way to use other alltoall algorithms instead of the
<br>
basic linear algorithm in openmpi-1.4.x ?
<br>
<p>Thanks in advance for any suggestion.
<br>
<p>Best regards
<br>
<p>Roman Martonak
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11792.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11790.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11795.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Reply:</strong> <a href="11795.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Maybe reply:</strong> <a href="11797.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Maybe reply:</strong> <a href="11804.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
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
