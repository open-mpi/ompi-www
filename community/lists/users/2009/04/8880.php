<?
$subject_val = "[OMPI users] all2all algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 12 15:20:06 2009" -->
<!-- isoreceived="20090412192006" -->
<!-- sent="Sun, 12 Apr 2009 12:20:10 -0700" -->
<!-- isosent="20090412192010" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] all2all algorithms" -->
<!-- id="1239564010.1288.15.camel_at_alder.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] all2all algorithms<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-12 15:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8881.php">Graham Mark: "[OMPI users] help: seg fault when freeing communicator"</a>
<li><strong>Previous message:</strong> <a href="8879.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8912.php">Jeff Squyres: "Re: [OMPI users] all2all algorithms"</a>
<li><strong>Reply:</strong> <a href="8912.php">Jeff Squyres: "Re: [OMPI users] all2all algorithms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am curious about the algorithm(s) used in the OpenMPI implementations
<br>
of the all2all and all2allv.  As many of you know, there are alternate
<br>
algorithms for all2all type operations, such as that of Plimpton, et al
<br>
(2006), that basically exchange latency costs for bandwidth costs, which
<br>
pays big dividends for large processor numbers, e.g. 100's or 1000's.
<br>
Does OpenMPI, or any other MPI distributions, test for processor count
<br>
and switch to such an all2all algorithm at some point?  I realize the
<br>
switchover point would be very much a function of the architecture, and
<br>
so could be a risky decision in some cases.  Nevertheless, has it been
<br>
considered?
<br>
<p>Tom R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8881.php">Graham Mark: "[OMPI users] help: seg fault when freeing communicator"</a>
<li><strong>Previous message:</strong> <a href="8879.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8912.php">Jeff Squyres: "Re: [OMPI users] all2all algorithms"</a>
<li><strong>Reply:</strong> <a href="8912.php">Jeff Squyres: "Re: [OMPI users] all2all algorithms"</a>
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
