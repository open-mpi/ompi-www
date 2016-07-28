<?
$subject_val = "[OMPI devel] PSM2 Intel folks question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 14:03:56 2016" -->
<!-- isoreceived="20160419180356" -->
<!-- sent="Tue, 19 Apr 2016 12:03:54 -0600" -->
<!-- isosent="20160419180354" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] PSM2 Intel folks question" -->
<!-- id="CAF1Cqj5p4xuNXhEAL5Nrs1xnApHFvETJoUv42VdcSbMpstaHzQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] PSM2 Intel folks question<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 14:03:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18783.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Previous message:</strong> <a href="18781.php">Howard Pritchard: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18783.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18783.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I'm making progress with issue #1559 (patches on the mail list didn't help),
<br>
and I'll open a PR to help the PSM2 MTL work on a single node, but I'm
<br>
noticing something more troublesome.
<br>
<p>If I run on just one node, and I use more than one process, process zero
<br>
consistently hangs in psm2_ep_connect.
<br>
<p>I've tried using the psm2 code on github - at sha e951cf31, but I still see
<br>
the same behavior.
<br>
<p>The PSM2 related rpms installed on our system are:
<br>
<p>infinipath-*psm*-devel-3.3-0.g6f42cdb1bb8.2.el7.x86_64
<br>
<p>hfi1-*psm*-0.7-221.ch6.x86_64
<br>
<p>hfi1-*psm*-devel-0.7-221.ch6.x86_64
<br>
<p>infinipath-*psm*-3.3-0.g6f42cdb1bb8.2.el7.x86_64
<br>
should we get newer rpms installed?
<br>
<p>Is there a way to disable the AMSHM path?  I'm wondering if that
<br>
would help since multi-node jobs seems to run fine.
<br>
<p>Thanks for any help,
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18782/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18783.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Previous message:</strong> <a href="18781.php">Howard Pritchard: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18783.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18783.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
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
