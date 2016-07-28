<?
$subject_val = "Re: [OMPI devel] psm mtl weirdness";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 14:21:25 2015" -->
<!-- isoreceived="20150908182125" -->
<!-- sent="Tue, 8 Sep 2015 18:20:55 +0000" -->
<!-- isosent="20150908182055" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] psm mtl weirdness" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518DD3A0F_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj4tK++vFp4pBmHOxivs57LpS6yZKhtd1-88+HWPZLDCyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] psm mtl weirdness<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 14:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17983.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Previous message:</strong> <a href="17981.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>In reply to:</strong> <a href="17980.php">Howard Pritchard: "[OMPI devel] psm mtl weirdness"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>

<br>
Is this new behavior?
<br>

<br>
Do you see the error if you set PSM_DEVICES=shm,self ?  The PSM MTL should be setting this on its own, but maybe something changed.
<br>

<br>
Andrew
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Tuesday, September 8, 2015 10:06 AM
<br>
To: Open MPI Developers List
<br>
Subject: [OMPI devel] psm mtl weirdness
<br>

<br>
Hi PSM folks,
<br>

<br>
I'm noticing some weirdness on master using the psm mtl.
<br>
If I run multi-node, I don't see a problem.  If I run using only a
<br>
single node, however, and use more than 1 rank, then I get
<br>
a timeout in psm_ep_connect.
<br>

<br>
On ompi-release I also observe this problem, but it seems
<br>
to be more sporadic.
<br>

<br>
I don't think this has anything to do with the pmix work.
<br>

<br>
I do not have access to a system using psm2, so can't
<br>
check to see if the problem also occurs there.
<br>

<br>
Thanks for any ideas on how to debug this.
<br>

<br>
Howard
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17982/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17983.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Previous message:</strong> <a href="17981.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>In reply to:</strong> <a href="17980.php">Howard Pritchard: "[OMPI devel] psm mtl weirdness"</a>
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
