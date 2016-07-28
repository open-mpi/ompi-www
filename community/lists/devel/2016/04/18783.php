<?
$subject_val = "Re: [OMPI devel] PSM2 Intel folks question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 14:25:28 2016" -->
<!-- isoreceived="20160419182528" -->
<!-- sent="Tue, 19 Apr 2016 18:25:25 +0000" -->
<!-- isosent="20160419182525" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PSM2 Intel folks question" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D853FED21_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj5p4xuNXhEAL5Nrs1xnApHFvETJoUv42VdcSbMpstaHzQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PSM2 Intel folks question<br>
<strong>From:</strong> Cabral, Matias A (<em>matias.a.cabral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 14:25:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18784.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Previous message:</strong> <a href="18782.php">Howard Pritchard: "[OMPI devel] PSM2 Intel folks question"</a>
<li><strong>In reply to:</strong> <a href="18782.php">Howard Pritchard: "[OMPI devel] PSM2 Intel folks question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18784.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18784.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18785.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>

<br>
Couple more questions to understand a little better the context:
<br>

<br>
-          What type of job running?
<br>

<br>
-          Is this also under srun?
<br>

<br>
For PSM2 you may find more details in the programmer&#226;&#128;&#153;s guide:
<br>
<a href="http://www.intel.com/content/dam/support/us/en/documents/network/omni-adptr/sb/Intel_PSM2_PG_H76473_v1_0.pdf">http://www.intel.com/content/dam/support/us/en/documents/network/omni-adptr/sb/Intel_PSM2_PG_H76473_v1_0.pdf</a>
<br>

<br>
To disable shared memory:
<br>
Section 2.7.1:
<br>
PSM2_DEVICES=&quot;self,fi&quot;
<br>

<br>
Thanks,
<br>
_MAC
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Tuesday, April 19, 2016 11:04 AM
<br>
To: Open MPI Developers List &lt;devel_at_[hidden]&gt;
<br>
Subject: [OMPI devel] PSM2 Intel folks question
<br>

<br>
Hi Folks,
<br>

<br>
I'm making progress with issue #1559 (patches on the mail list didn't help),
<br>
and I'll open a PR to help the PSM2 MTL work on a single node, but I'm
<br>
noticing something more troublesome.
<br>

<br>
If I run on just one node, and I use more than one process, process zero
<br>
consistently hangs in psm2_ep_connect.
<br>

<br>
I've tried using the psm2 code on github - at sha e951cf31, but I still see
<br>
the same behavior.
<br>

<br>
The PSM2 related rpms installed on our system are:
<br>

<br>
infinipath-psm-devel-3.3-0.g6f42cdb1bb8.2.el7.x86_64
<br>
hfi1-psm-0.7-221.ch6.x86_64
<br>
hfi1-psm-devel-0.7-221.ch6.x86_64
<br>
infinipath-psm-3.3-0.g6f42cdb1bb8.2.el7.x86_64
<br>
should we get newer rpms installed?
<br>

<br>
Is there a way to disable the AMSHM path?  I'm wondering if that
<br>
would help since multi-node jobs seems to run fine.
<br>

<br>
Thanks for any help,
<br>

<br>
Howard
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18784.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Previous message:</strong> <a href="18782.php">Howard Pritchard: "[OMPI devel] PSM2 Intel folks question"</a>
<li><strong>In reply to:</strong> <a href="18782.php">Howard Pritchard: "[OMPI devel] PSM2 Intel folks question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18784.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18784.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18785.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
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
