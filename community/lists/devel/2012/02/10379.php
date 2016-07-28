<?
$subject_val = "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 18:06:54 2012" -->
<!-- isoreceived="20120209230654" -->
<!-- sent="Thu, 9 Feb 2012 16:06:45 -0700" -->
<!-- isosent="20120209230645" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun" -->
<!-- id="7494A345-EB93-4F31-BB4F-5F2E5D0CC52D_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F343963.6060507_at_inria.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 18:06:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10380.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10378.php">Paul H. Hargrove: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10377.php">Brice Goglin: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's pretty much what I had in mind too - will have to play with it a bit until we find the best solution, but it shouldn't be all that hard.
<br>
<p>On Feb 9, 2012, at 2:23 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Here's what I would do:
</span><br>
<span class="quotelev1">&gt; During init, walk the list of hwloc PCI devices (hwloc_get_next_pcidev()) and keep an array of pointers to the interesting onces + their locality (the hwloc cpuset of the parent non-IO object).
</span><br>
<span class="quotelev1">&gt; When you want the I/O device near a core, walk the array and find one whose locality contains your core hwloc cpuset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you need help, feel free to contact me offline.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 09/02/2012 22:14, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#133;.guess we'll have to play with it. Our need is to start with a core or some similar object, and quickly determine the closest IO device of a certain type. We wound up having to write &quot;summarizer&quot; code to parse the hwloc tree into a more OMPI-usable form, so we can always do that with the IO tree as well if necessary.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 9, 2012, at 2:09 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That doesn't really work with the hwloc model unfortunately. Also, when you get to smaller objects (cores, threads, ...) there are multiple &quot;closest&quot; objects at each depth.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have one &quot;closest&quot; object at some depth (usually Machine or NUMA node). If you need something higher, you just walk the parent links. If you need something smaller, you look at children.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, each I/O device isn't directly attached to such a closest object. It's usually attached under some bridge objects. There's a tree of hwloc PCI bus objects exactly like you have a tree of hwloc sockets/cores/threads/etc. At the top of the I/O tree, one (bridge) object is attached to a regular object as explained earlier. So, when you have a random hwloc PCI object, you get its locality by walking up its parent link until you find a non-I/O object (one whose cpuset isn't NULL). hwloc/helper.h gives you hwloc_get_non_io_ancestor_obj() to do that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 09/02/2012 14:34, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ah, okay - in that case, having the I/O device attached to the &quot;closest&quot; object at each depth would be ideal from an OMPI perspective.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 9, 2012, at 6:30 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The bios usually tells you which numa location is close to each host-to-pci bridge. So the answer is yes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not sure I understand this comment. A PCI device is attached to the node, not to any specific location within the node, isn't it? Can you really say that a PCI device is &quot;attached&quot; to a specific NUMA location, for example?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 9, 2012, at 6:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; That doesn't seem too attractive from an OMPI perspective, though.  We'd want to know where the PCI devices are actually rooted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10379/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10380.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10378.php">Paul H. Hargrove: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10377.php">Brice Goglin: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<!-- nextthread="start" -->
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
