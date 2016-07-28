<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 16:09:27 2012" -->
<!-- isoreceived="20120209210927" -->
<!-- sent="Thu, 09 Feb 2012 22:09:20 +0100" -->
<!-- isosent="20120209210920" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun" -->
<!-- id="4F343600.6000508_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="451E5C6E-8B9A-494E-B1DF-DF70943BFDD0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 16:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10375.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10373.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10371.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10375.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10375.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That doesn't really work with the hwloc model unfortunately. Also, when
<br>
you get to smaller objects (cores, threads, ...) there are multiple
<br>
&quot;closest&quot; objects at each depth.
<br>
<p>We have one &quot;closest&quot; object at some depth (usually Machine or NUMA
<br>
node). If you need something higher, you just walk the parent links. If
<br>
you need something smaller, you look at children.
<br>
<p>Also, each I/O device isn't directly attached to such a closest object.
<br>
It's usually attached under some bridge objects. There's a tree of hwloc
<br>
PCI bus objects exactly like you have a tree of hwloc
<br>
sockets/cores/threads/etc. At the top of the I/O tree, one (bridge)
<br>
object is attached to a regular object as explained earlier. So, when
<br>
you have a random hwloc PCI object, you get its locality by walking up
<br>
its parent link until you find a non-I/O object (one whose cpuset isn't
<br>
NULL). hwloc/helper.h gives you hwloc_get_non_io_ancestor_obj() to do that.
<br>
<p>Brice
<br>
<p><p><p>Le 09/02/2012 14:34, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Ah, okay - in that case, having the I/O device attached to the
</span><br>
<span class="quotelev1">&gt; &quot;closest&quot; object at each depth would be ideal from an OMPI perspective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2012, at 6:30 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The bios usually tells you which numa location is close to each
</span><br>
<span class="quotelev2">&gt;&gt; host-to-pci bridge. So the answer is yes.
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I'm not sure I understand this comment. A PCI device is attached
</span><br>
<span class="quotelev2">&gt;&gt;     to the node, not to any specific location within the node, isn't
</span><br>
<span class="quotelev2">&gt;&gt;     it? Can you really say that a PCI device is &quot;attached&quot; to a
</span><br>
<span class="quotelev2">&gt;&gt;     specific NUMA location, for example?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Feb 9, 2012, at 6:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     That doesn't seem too attractive from an OMPI perspective,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     though.  We'd want to know where the PCI devices are actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     rooted.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10374/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10375.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10373.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10371.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10375.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10375.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
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
