<?
$subject_val = "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 16:23:54 2012" -->
<!-- isoreceived="20120209212354" -->
<!-- sent="Thu, 09 Feb 2012 22:23:47 +0100" -->
<!-- isosent="20120209212347" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun" -->
<!-- id="4F343963.6060507_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D27799F8-ED51-40F0-8844-427718F8F299_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 16:23:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10378.php">Paul H. Hargrove: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10376.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10375.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10379.php">Ralph Castain: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10379.php">Ralph Castain: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's what I would do:
<br>
During init, walk the list of hwloc PCI devices
<br>
(hwloc_get_next_pcidev()) and keep an array of pointers to the
<br>
interesting onces + their locality (the hwloc cpuset of the parent
<br>
non-IO object).
<br>
When you want the I/O device near a core, walk the array and find one
<br>
whose locality contains your core hwloc cpuset.
<br>
<p>If you need help, feel free to contact me offline.
<br>
<p>Brice
<br>
<p><p><p>Le 09/02/2012 22:14, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Hmmm&#133;.guess we'll have to play with it. Our need is to start with a
</span><br>
<span class="quotelev1">&gt; core or some similar object, and quickly determine the closest IO
</span><br>
<span class="quotelev1">&gt; device of a certain type. We wound up having to write &quot;summarizer&quot;
</span><br>
<span class="quotelev1">&gt; code to parse the hwloc tree into a more OMPI-usable form, so we can
</span><br>
<span class="quotelev1">&gt; always do that with the IO tree as well if necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2012, at 2:09 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That doesn't really work with the hwloc model unfortunately. Also,
</span><br>
<span class="quotelev2">&gt;&gt; when you get to smaller objects (cores, threads, ...) there are
</span><br>
<span class="quotelev2">&gt;&gt; multiple &quot;closest&quot; objects at each depth.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have one &quot;closest&quot; object at some depth (usually Machine or NUMA
</span><br>
<span class="quotelev2">&gt;&gt; node). If you need something higher, you just walk the parent links.
</span><br>
<span class="quotelev2">&gt;&gt; If you need something smaller, you look at children.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, each I/O device isn't directly attached to such a closest
</span><br>
<span class="quotelev2">&gt;&gt; object. It's usually attached under some bridge objects. There's a
</span><br>
<span class="quotelev2">&gt;&gt; tree of hwloc PCI bus objects exactly like you have a tree of hwloc
</span><br>
<span class="quotelev2">&gt;&gt; sockets/cores/threads/etc. At the top of the I/O tree, one (bridge)
</span><br>
<span class="quotelev2">&gt;&gt; object is attached to a regular object as explained earlier. So, when
</span><br>
<span class="quotelev2">&gt;&gt; you have a random hwloc PCI object, you get its locality by walking
</span><br>
<span class="quotelev2">&gt;&gt; up its parent link until you find a non-I/O object (one whose cpuset
</span><br>
<span class="quotelev2">&gt;&gt; isn't NULL). hwloc/helper.h gives you hwloc_get_non_io_ancestor_obj()
</span><br>
<span class="quotelev2">&gt;&gt; to do that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 09/02/2012 14:34, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, okay - in that case, having the I/O device attached to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;closest&quot; object at each depth would be ideal from an OMPI perspective.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 9, 2012, at 6:30 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The bios usually tells you which numa location is close to each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host-to-pci bridge. So the answer is yes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I'm not sure I understand this comment. A PCI device is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     attached to the node, not to any specific location within the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     node, isn't it? Can you really say that a PCI device is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &quot;attached&quot; to a specific NUMA location, for example?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On Feb 9, 2012, at 6:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     That doesn't seem too attractive from an OMPI perspective,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     though.  We'd want to know where the PCI devices are actually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     rooted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10378.php">Paul H. Hargrove: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10376.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10375.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10379.php">Ralph Castain: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10379.php">Ralph Castain: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
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
