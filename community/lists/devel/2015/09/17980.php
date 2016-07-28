<?
$subject_val = "[OMPI devel] psm mtl weirdness";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 13:05:48 2015" -->
<!-- isoreceived="20150908170548" -->
<!-- sent="Tue, 8 Sep 2015 11:05:47 -0600" -->
<!-- isosent="20150908170547" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] psm mtl weirdness" -->
<!-- id="CAF1Cqj4tK++vFp4pBmHOxivs57LpS6yZKhtd1-88+HWPZLDCyg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] psm mtl weirdness<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 13:05:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17981.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Previous message:</strong> <a href="17979.php">Adrian Reber: "[OMPI devel] MTT failures since the last few days on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17982.php">Friedley, Andrew: "Re: [OMPI devel] psm mtl weirdness"</a>
<li><strong>Reply:</strong> <a href="17982.php">Friedley, Andrew: "Re: [OMPI devel] psm mtl weirdness"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi PSM folks,
<br>
<p>I'm noticing some weirdness on master using the psm mtl.
<br>
If I run multi-node, I don't see a problem.  If I run using only a
<br>
single node, however, and use more than 1 rank, then I get
<br>
a timeout in psm_ep_connect.
<br>
<p>On ompi-release I also observe this problem, but it seems
<br>
to be more sporadic.
<br>
<p>I don't think this has anything to do with the pmix work.
<br>
<p>I do not have access to a system using psm2, so can't
<br>
check to see if the problem also occurs there.
<br>
<p>Thanks for any ideas on how to debug this.
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17980/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17981.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Previous message:</strong> <a href="17979.php">Adrian Reber: "[OMPI devel] MTT failures since the last few days on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17982.php">Friedley, Andrew: "Re: [OMPI devel] psm mtl weirdness"</a>
<li><strong>Reply:</strong> <a href="17982.php">Friedley, Andrew: "Re: [OMPI devel] psm mtl weirdness"</a>
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
