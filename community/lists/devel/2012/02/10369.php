<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 08:23:23 2012" -->
<!-- isoreceived="20120209132323" -->
<!-- sent="Thu, 9 Feb 2012 06:23:14 -0700" -->
<!-- isosent="20120209132314" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun" -->
<!-- id="56320024-2892-4CCB-A316-17D2BE888255_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F8A3E0E7-7D7D-4D3E-A2E0-3C6130D5946D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 08:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10370.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10368.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10367.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10370.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10370.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I understand this comment. A PCI device is attached to the node, not to any specific location within the node, isn't it? Can you really say that a PCI device is &quot;attached&quot; to a specific NUMA location, for example?
<br>
<p><p>On Feb 9, 2012, at 6:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; That doesn't seem too attractive from an OMPI perspective, though.  We'd want to know where the PCI devices are actually rooted.
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10369/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10370.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10368.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10367.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10370.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10370.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
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
