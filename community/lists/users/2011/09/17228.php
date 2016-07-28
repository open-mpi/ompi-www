<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 13:05:07 2011" -->
<!-- isoreceived="20110912170507" -->
<!-- sent="Mon, 12 Sep 2011 11:05:02 -0600 (MDT)" -->
<!-- isosent="20110912170502" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem" -->
<!-- id="alpine.OSX.2.00.1109121102040.4026_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275E2E5A40_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 13:05:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17229.php">Blosch, Edwin L: "Re: [OMPI users] qp memory allocation problem"</a>
<li><strong>Previous message:</strong> <a href="17227.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17227.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17237.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Reply:</strong> <a href="17237.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 12 Sep 2011, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; Nathan,   I found this parameters under /sys/module/mlx4_core/parameters.   How do you incorporate a changed value?  What to restart/rebuild?
</span><br>
<p>Add the following line to /etc/modprobe (replace X with the appropriate value for log_mtts_per_seg):
<br>
options mlx4_core log_mtts_per_seg=X
<br>
<p>BTW, what was log_mtts_per_seg set to?
<br>
<p>-Nathan Hjelm
<br>
Los Alamos National Laboratory
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17229.php">Blosch, Edwin L: "Re: [OMPI users] qp memory allocation problem"</a>
<li><strong>Previous message:</strong> <a href="17227.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17227.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17237.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Reply:</strong> <a href="17237.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
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
