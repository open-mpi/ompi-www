<?
$subject_val = "Re: [OMPI devel] PSM2 Intel folks question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 21:21:27 2016" -->
<!-- isoreceived="20160421012127" -->
<!-- sent="Thu, 21 Apr 2016 01:21:14 +0000" -->
<!-- isosent="20160421012114" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PSM2 Intel folks question" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D853FF470_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj4mEMSnzbHuS4rr9D3rPyNFwnY1axLi114SDMEm97qqrw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-04-20 21:21:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18801.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Previous message:</strong> <a href="18799.php">Paul Hargrove: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>In reply to:</strong> <a href="18792.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18803.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18803.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>

<br>
I&#226;&#128;&#153;ve been playing with the same version of psm (hfi1-psm-0.7-221.ch6.x86_64) but cannot yet reproduce the issue.  Just in case, please share the version of the driver you have installed (hfi1-X.XX-XX.x86_64.rpm, modinfo hfi1).
<br>

<br>
What I can tell so far, is that I still suspect this has  some relation to the job_id, that OMPI uses to generate the unique job key, that psm uses to generate the epid. By looking at the logfile.busted, I see some entries for &#226;&#128;&#152;epid 10000&#226;&#128;&#153;. This can only happen if psm2_ep_open() is called with a unique job key of 1 and having the PSM2 hfi device disabled (only shm communication expected). In your workaround (hfi enabled) the epid generation goes through a different path that includes the HFI LID which ends with different number.  HOWEVER, I hardcoded the above (to get epid 10000) case but I still see the hello_c running with stock OMPI 1.10.2.
<br>

<br>
Would you please try forcing different jobid and share the results?
<br>

<br>
Thanks,
<br>

<br>
_MAC
<br>

<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Wednesday, April 20, 2016 8:49 AM
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Subject: Re: [OMPI devel] PSM2 Intel folks question
<br>

<br>
HI Matias,
<br>

<br>
Actually I found the problem.  I kept wondering why the OFI MTL works fine, but the
<br>
PSM2 MTL doesn't.  When I cranked up the debugging level I noticed that for OFI MTL,
<br>
it doesn't mess with the PSM2_DEVICES env variable.  So the PSM2 tries all three
<br>
&quot;devices&quot; as part of initialization.  However, the PSM2 MTL sets the PSM2_DEVICES
<br>
to not include hfi.  If I comment out those lines of code in the PSM2 MTL, my one-node
<br>
problem vanishes.
<br>

<br>
I suspect there's some setup code when &quot;initializing&quot; the hfi device that is actually
<br>
required even when using the shm device for on-node messages.
<br>

<br>
Is there by an chance some psm2 device driver parameter setting that might
<br>
result in this behavior.
<br>

<br>
Anyway, I set PSM2_TRACEMASK to 0xFFFF and got a bunch of output that
<br>
might be helpful.  I attached the log files to issue 1559.
<br>

<br>
For now, I will open a PR with fixes to get the PSM2 MTL working on our
<br>
omnipath clusters.
<br>

<br>
I don't think this problem has anything to do with SLURM except for the jobid
<br>
manipulation to generate the unique key.
<br>

<br>
Howard
<br>

<br>

<br>
2016-04-19 17:18 GMT-06:00 Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&lt;mailto:matias.a.cabral_at_[hidden]&gt;&gt;:
<br>
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
From: devel [mailto:devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;] On Behalf Of Howard Pritchard
<br>
Sent: Tuesday, April 19, 2016 12:21 PM
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
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

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18787.php">http://www.open-mpi.org/community/lists/devel/2016/04/18787.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18801.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Previous message:</strong> <a href="18799.php">Paul Hargrove: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>In reply to:</strong> <a href="18792.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18803.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Reply:</strong> <a href="18803.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
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
