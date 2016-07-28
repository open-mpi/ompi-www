<?
$subject_val = "Re: [OMPI devel] PSM2 Intel folks question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 15:21:16 2016" -->
<!-- isoreceived="20160419192116" -->
<!-- sent="Tue, 19 Apr 2016 13:21:15 -0600" -->
<!-- isosent="20160419192115" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PSM2 Intel folks question" -->
<!-- id="CAF1Cqj5Pwco+5dMcZt6eTNGNH5VrXrMkA-Cwrj3SnxkBuPPuTw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="39196F20B4590A4A8337B6A6F7F0FD8D853FED21_at_FMSMSX102.amr.corp.intel.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 15:21:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18786.php">David Shrader: "[OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Previous message:</strong> <a href="18784.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>In reply to:</strong> <a href="18783.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18787.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18787.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matias,
<br>
<p>My usual favorites in ompi/examples/hello_c.c and ompi/examples/ring_c.c.
<br>
If I disable the shared memory device using the PSM2_DEVICES option
<br>
it looks like psm2 is unhappy:
<br>
<p><p>kit001.localdomain:08222] PSM2 EP connect error (Endpoint could not be
<br>
reached):
<br>
<p>[kit001.localdomain:08222]  kit001
<br>
<p>[kit001.localdomain:08222] PSM2 EP connect error (unknown connect error):
<br>
<p>[kit001.localdomain:08222]  kit001
<br>
<p>&nbsp;psm2_ep_connect returned 41
<br>
<p>[kit001.localdomain:08221] PSM2 EP connect error (unknown connect error):
<br>
<p>[kit001.localdomain:08221]  kit001
<br>
<p>[kit001.localdomain:08221] PSM2 EP connect error (Endpoint could not be
<br>
reached):
<br>
<p>[kit001.localdomain:08221]  kit001
<br>
<p>leaving ompi_mtl_psm2_add_procs nprocs 2
<br>
<p><p>I went back and tried again with the OFI MTL (without the PSM2_DEVICES set)
<br>
and that works correctly on a single node.
<br>
<p>I get this same psm2_ep_connect timeout using mpirun, so its not a SLURM
<br>
specific problem.
<br>
<p>2016-04-19 12:25 GMT-06:00 Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Couple more questions to understand a little better the context:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -          What type of job running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -          Is this also under srun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For PSM2 you may find more details in the programmer&#226;&#128;&#153;s guide:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.intel.com/content/dam/support/us/en/documents/network/omni-adptr/sb/Intel_PSM2_PG_H76473_v1_0.pdf">http://www.intel.com/content/dam/support/us/en/documents/network/omni-adptr/sb/Intel_PSM2_PG_H76473_v1_0.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To disable shared memory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Section 2.7.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PSM2_DEVICES=&quot;self,fi&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _MAC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Howard
</span><br>
<span class="quotelev1">&gt; Pritchard
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, April 19, 2016 11:04 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers List &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI devel] PSM2 Intel folks question
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm making progress with issue #1559 (patches on the mail list didn't
</span><br>
<span class="quotelev1">&gt; help),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I'll open a PR to help the PSM2 MTL work on a single node, but I'm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; noticing something more troublesome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run on just one node, and I use more than one process, process zero
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; consistently hangs in psm2_ep_connect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried using the psm2 code on github - at sha e951cf31, but I still see
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the same behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The PSM2 related rpms installed on our system are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; infinipath-*psm*-devel-3.3-0.g6f42cdb1bb8.2.el7.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hfi1-*psm*-0.7-221.ch6.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hfi1-*psm*-devel-0.7-221.ch6.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; infinipath-*psm*-3.3-0.g6f42cdb1bb8.2.el7.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should we get newer rpms installed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to disable the AMSHM path?  I'm wondering if that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; would help since multi-node jobs seems to run fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18783.php">http://www.open-mpi.org/community/lists/devel/2016/04/18783.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18785/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18786.php">David Shrader: "[OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Previous message:</strong> <a href="18784.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>In reply to:</strong> <a href="18783.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18787.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18787.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
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
