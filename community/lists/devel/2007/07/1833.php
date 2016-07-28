<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 10:17:25 2007" -->
<!-- isoreceived="20070710141725" -->
<!-- sent="Tue, 10 Jul 2007 08:17:17 -0600" -->
<!-- isosent="20070710141717" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Bproc support" -->
<!-- id="C2B8F10D.9DAC%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 10:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1832.php">Brian Barrett: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1839.php">Jeff Squyres: "Re: [OMPI devel] Bproc support"</a>
<li><strong>Reply:</strong> <a href="1839.php">Jeff Squyres: "Re: [OMPI devel] Bproc support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>I have upgraded the support for Bproc on the Open MPI trunk as of r15328.
<br>
<p>We now support Bproc environments that do not utilize resource managers - in
<br>
these cases, we will allow the user to launch on all nodes upon which they
<br>
have execution authorities. Please note that, if you login to your system
<br>
via multiple windows, any applications you execute in the different windows
<br>
may well overlap their use of resources as Open MPI has no way of knowing
<br>
what an mpirun in another window is doing.
<br>
<p>I also have attempted to provide BJS support, but I have no way of testing
<br>
it - I would appreciate feedback from anyone that does.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1832.php">Brian Barrett: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1839.php">Jeff Squyres: "Re: [OMPI devel] Bproc support"</a>
<li><strong>Reply:</strong> <a href="1839.php">Jeff Squyres: "Re: [OMPI devel] Bproc support"</a>
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
