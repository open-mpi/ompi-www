<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 08:30:36 2012" -->
<!-- isoreceived="20120209133036" -->
<!-- sent="Thu, 09 Feb 2012 14:30:32 +0100" -->
<!-- isosent="20120209133032" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun" -->
<!-- id="1514decc-de7d-4b20-ac1e-7bf81230ae6d_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56320024-2892-4CCB-A316-17D2BE888255_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 08:30:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10371.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10369.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10369.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10371.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10371.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The bios usually tells you which numa location is close to each host-to-pci bridge. So the answer is yes.
<br>
Brice
<br>
<p><p>Ralph Castain &lt;rhc_at_[hidden]&gt; a &#195;&#169;crit :
<br>
<p>I'm not sure I understand this comment. A PCI device is attached to the node, not to any specific location within the node, isn't it? Can you really say that a PCI device is &quot;attached&quot; to a specific NUMA location, for example?
<br>
<p><p><p>On Feb 9, 2012, at 6:15 AM, Jeff Squyres wrote:
<br>
<p><p>That doesn't seem too attractive from an OMPI perspective, though.  We'd want to know where the PCI devices are actually rooted.
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10370/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10371.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10369.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10369.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10371.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10371.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
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
