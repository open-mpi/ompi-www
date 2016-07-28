<?
$subject_val = "Re: [OMPI devel] PSM2 Intel folks question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 19:18:49 2016" -->
<!-- isoreceived="20160419231849" -->
<!-- sent="Tue, 19 Apr 2016 23:18:47 +0000" -->
<!-- isosent="20160419231847" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PSM2 Intel folks question" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D853FEEEB_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj5Pwco+5dMcZt6eTNGNH5VrXrMkA-Cwrj3SnxkBuPPuTw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-04-19 19:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18788.php">Joshua Ladd: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Previous message:</strong> <a href="18786.php">David Shrader: "[OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>In reply to:</strong> <a href="18785.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18792.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18792.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>

<br>
PSM2_DEVICES, I went back to the roots and found that shm is the only device supporting communication between ranks in the same node. Therefore, the below error &#226;&#128;&#156;Endpoint could not be reached&#226;&#128;&#157; would be expected.
<br>

<br>
Back to the psm2_ep_connect() hanging, I cloned the same psm2 as you have from github and have hello_c and ring_c running with 80 ranks on a local node using PSM2 mtl. I do not have any SLURM setup on my system.  I will proceed to setup SLURM to see if I can reproduce the issue with it. In the meantime please share any extra detail you find relevant.
<br>

<br>
Thanks,
<br>

<br>
_MAC
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Tuesday, April 19, 2016 12:21 PM
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Subject: Re: [OMPI devel] PSM2 Intel folks question
<br>

<br>
Hi Matias,
<br>

<br>
My usual favorites in ompi/examples/hello_c.c and ompi/examples/ring_c.c.
<br>
If I disable the shared memory device using the PSM2_DEVICES option
<br>
it looks like psm2 is unhappy:
<br>

<br>

<br>
kit001.localdomain:08222] PSM2 EP connect error (Endpoint could not be reached):
<br>
[kit001.localdomain:08222]  kit001
<br>
[kit001.localdomain:08222] PSM2 EP connect error (unknown connect error):
<br>
[kit001.localdomain:08222]  kit001
<br>
&nbsp;psm2_ep_connect returned 41
<br>
[kit001.localdomain:08221] PSM2 EP connect error (unknown connect error):
<br>
[kit001.localdomain:08221]  kit001
<br>
[kit001.localdomain:08221] PSM2 EP connect error (Endpoint could not be reached):
<br>
[kit001.localdomain:08221]  kit001
<br>
leaving ompi_mtl_psm2_add_procs nprocs 2
<br>

<br>
I went back and tried again with the OFI MTL (without the PSM2_DEVICES set)
<br>
and that works correctly on a single node.
<br>
I get this same psm2_ep_connect timeout using mpirun, so its not a SLURM
<br>
specific problem.
<br>

<br>
2016-04-19 12:25 GMT-06:00 Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&lt;mailto:matias.a.cabral_at_[hidden]&gt;&gt;:
<br>
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
From: devel [mailto:devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;] On Behalf Of Howard Pritchard
<br>
Sent: Tuesday, April 19, 2016 11:04 AM
<br>
To: Open MPI Developers List &lt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
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

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18783.php">http://www.open-mpi.org/community/lists/devel/2016/04/18783.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18787/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18788.php">Joshua Ladd: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Previous message:</strong> <a href="18786.php">David Shrader: "[OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>In reply to:</strong> <a href="18785.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18792.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18792.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
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
