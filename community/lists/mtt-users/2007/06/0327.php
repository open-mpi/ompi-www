<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 14 22:57:00 2007" -->
<!-- isoreceived="20070615025700" -->
<!-- sent="Thu, 14 Jun 2007 22:56:55 -0400" -->
<!-- isosent="20070615025655" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[MTT users] IBM thread tests" -->
<!-- id="200706142256.55947.tprins_at_cs.indiana.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-14 22:56:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>Previous message:</strong> <a href="0326.php">Tim Prins: "[MTT users] Differentiating builds in the reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0329.php">Jeff Squyres: "Re: [MTT users] IBM thread tests"</a>
<li><strong>Reply:</strong> <a href="0329.php">Jeff Squyres: "Re: [MTT users] IBM thread tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know if there is a better place to post this, but...
<br>
<p>The IBM test suite has 3 very simple tests which just call Init_thread and ask 
<br>
for the thread level. However, these are only run if OMPI_ENABLE_MPI_THREADS 
<br>
is defined. This is causing them to be skipped in our MTT tests with a 
<br>
threaded build. Is there a different define we should be checking for in the 
<br>
tests?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>Previous message:</strong> <a href="0326.php">Tim Prins: "[MTT users] Differentiating builds in the reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0329.php">Jeff Squyres: "Re: [MTT users] IBM thread tests"</a>
<li><strong>Reply:</strong> <a href="0329.php">Jeff Squyres: "Re: [MTT users] IBM thread tests"</a>
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
