<?
$subject_val = "[OMPI users] debugging performance regressions between versions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 18 12:17:53 2013" -->
<!-- isoreceived="20131018161753" -->
<!-- sent="Fri, 18 Oct 2013 17:17:36 +0100" -->
<!-- isosent="20131018161736" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] debugging performance regressions between versions" -->
<!-- id="87sivy1rkv.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] debugging performance regressions between versions<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-18 12:17:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22803.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22801.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22804.php">Iliev, Hristo: "Re: [OMPI users] debugging performance regressions between versions"</a>
<li><strong>Reply:</strong> <a href="22804.php">Iliev, Hristo: "Re: [OMPI users] debugging performance regressions between versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been testing an application that turns out to be ~30% slower with
<br>
OMPI 1.6.5 than (the Red Hat packaged version of) 1.5.4, with the same
<br>
mca-params and the same binary, just flipping the runtime.  It's running
<br>
over openib, and the profile it prints says that alltoall is a factor of
<br>
four slower in 1.6.5.  (I haven't tried to profile it externally, but
<br>
I've no reason to doubt what it says.)
<br>
<p>How should I go about finding out why and -- I hope -- fixing it?
<br>
<p>A possibly relevant side question:  Is there a way of dumping all the
<br>
MCA parameters in effect?  ompi_info --all doesn't show collective
<br>
algorithms, for instance, though I thought I'd got those out of it at
<br>
one time.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22803.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22801.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22804.php">Iliev, Hristo: "Re: [OMPI users] debugging performance regressions between versions"</a>
<li><strong>Reply:</strong> <a href="22804.php">Iliev, Hristo: "Re: [OMPI users] debugging performance regressions between versions"</a>
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
