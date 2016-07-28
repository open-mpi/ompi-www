<?
$subject_val = "[OMPI users] barrier algorithm 5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 07:02:15 2016" -->
<!-- isoreceived="20160504110215" -->
<!-- sent="Wed, 04 May 2016 12:02:04 +0100" -->
<!-- isosent="20160504110204" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] barrier algorithm 5" -->
<!-- id="87oa8mgk7n.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] barrier algorithm 5<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-04 07:02:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29082.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Previous message:</strong> <a href="29080.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29082.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Reply:</strong> <a href="29082.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With OMPI 1.10.2 and earlier on Infiniband, IMB generally spins with no
<br>
output for the barrier benchmark if you run it with algorithm 5, i.e.
<br>
<p>&nbsp;&nbsp;mpirun --mca coll_tuned_use_dynamic_rules 1 --mca coll_tuned_barrier_algorithm 5 IMB-MPI1 barrier
<br>
<p>This is &quot;two proc only&quot;.  Does that mean it will only work for two
<br>
processes (which seems true experimentally)?  If so, should it report an
<br>
error if used with more?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29082.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Previous message:</strong> <a href="29080.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29082.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Reply:</strong> <a href="29082.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
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
