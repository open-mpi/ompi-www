<?
$subject_val = "Re: [OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 03:23:08 2008" -->
<!-- isoreceived="20080731072308" -->
<!-- sent="Thu, 31 Jul 2008 00:22:22 -0700" -->
<!-- isosent="20080731072222" -->
<!-- name="Scott Beardsley" -->
<!-- email="scott_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing F90 modules" -->
<!-- id="4891682E.90602_at_cse.ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1217485815.7282.44.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing F90 modules<br>
<strong>From:</strong> Scott Beardsley (<em>scott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 03:22:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6232.php">David Robson: "[OMPI users] MPI_BCast problem on multiple networks."</a>
<li><strong>Previous message:</strong> <a href="6230.php">Ashley Pittman: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6230.php">Ashley Pittman: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; Nothing to do with fortran but I think I'm right in saying a lot of
</span><br>
<span class="quotelev1">&gt; these command line options aren't needed, you simply set --prefix and
</span><br>
<span class="quotelev1">&gt; the rest of the options default to be relative to that.
</span><br>
<p>Ya, I stole it from the OFED rpmbuild log. I wanted to reproduce exactly 
<br>
what I had installed already elsewhere via RPM just in case it was some 
<br>
strange side effect. I don't normally make my configure options that 
<br>
redundant.
<br>
<p>Drifting OT... OFED doesn't support the QLogic InfiniPath cards (ala 
<br>
--with-psm-dir) directly in their install.pl (at least in v1.3.1). I'll 
<br>
send them a note tomorrow errr later today. It was also amusing, to say 
<br>
the least, to watch the QLogic RPMs battle it out with both kernel.org 
<br>
and OFED ib_ipath kernel modules over who gets loaded last. I'd reboot 
<br>
and poof a new one would show up. Fun times. QLogic seems to have caught 
<br>
onto this and attempts to disable/supersede the others. I'm not sure 
<br>
which one is best these days but they all seem to work reasonably well.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6232.php">David Robson: "[OMPI users] MPI_BCast problem on multiple networks."</a>
<li><strong>Previous message:</strong> <a href="6230.php">Ashley Pittman: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6230.php">Ashley Pittman: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
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
