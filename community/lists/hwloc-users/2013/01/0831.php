<?
$subject_val = "Re: [hwloc-users] hwloc tutorial material";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 09:26:34 2013" -->
<!-- isoreceived="20130122142634" -->
<!-- sent="Tue, 22 Jan 2013 09:26:30 -0500" -->
<!-- isosent="20130122142630" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc tutorial material" -->
<!-- id="CADKQjjcjr76-wZvQJCPhjFriC7FVD5WjB-ZTjgRuwu5sfZsjgg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50FE82D0.3010505_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc tutorial material<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 09:26:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0832.php">Kenneth A. Lloyd: "[hwloc-users] FW:  hwloc tutorial material"</a>
<li><strong>Previous message:</strong> <a href="0830.php">Brice Goglin: "Re: [hwloc-users] hwloc tutorial material"</a>
<li><strong>In reply to:</strong> <a href="0830.php">Brice Goglin: "Re: [hwloc-users] hwloc tutorial material"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My name is not Kenneth, but I won't forego the opportunity to describe the
<br>
needs of MY application (Cactus)...
<br>
<p>Currently, our CUDA functionality is more efficient, but our OpenCL
<br>
functionality is more mature. We would like to use hwloc to obtain the
<br>
following information for GPUs, as we already do for CPUs:
<br>
<p>- number of cores
<br>
- number of PUs per core (&quot;hardware threads&quot;); both for choosing good
<br>
numbers of threads, and for deciding how &quot;close&quot; they should be in terms of
<br>
memory they access. (Neither OpenMP nor OpenCL distinguish between
<br>
multi-core threading and SMT.)
<br>
<p>- cache size of L1, or L2 cache if L1 cache is small
<br>
- cache line size (for array padding)
<br>
- cache stride (or associativity) for memory allocation
<br>
<p>- fastest core / fastest NUMA node from which a GPU can be accessed
<br>
<p>To date, we collect some of this information in a &quot;database&quot; with one entry
<br>
per system that we are using. This works well for development, but in the
<br>
end, we need to collect this information automatically.
<br>
<p>-erik
<br>
<p><p><p>On Tue, Jan 22, 2013 at 7:15 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 22/01/2013 10:27, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Kenneth A. Lloyd, le Mon 21 Jan 2013 22:46:37 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for making this tutorial available.  Using hwloc 1.7, how far
</span><br>
<span class="quotelev1">&gt; down
</span><br>
<span class="quotelev3">&gt; &gt;&gt; into, say, NVIDIA cards can the architecture be reflected?  Global
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; size? SMX cores? None of the above?
</span><br>
<span class="quotelev2">&gt; &gt; None of the above for now.  Both are available in the cuda svn branch,
</span><br>
<span class="quotelev2">&gt; &gt; however.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the question to Kenneth is &quot;what do YOU need?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't merge the GPU internals into the trunk yet because I'd like to
</span><br>
<span class="quotelev1">&gt; see if that matches what we would do with OpenCL and other accelerators
</span><br>
<span class="quotelev1">&gt; such as the Xeon Phi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing is keep in mind is that most hwloc/GPU users will use hwloc to
</span><br>
<span class="quotelev1">&gt; get locality information but they will also still use CUDA to use the
</span><br>
<span class="quotelev1">&gt; GPU. So they will still be able to use CUDA to get in-depth GPU
</span><br>
<span class="quotelev1">&gt; information anyway. Then the question is how much CUDA info do we want
</span><br>
<span class="quotelev1">&gt; to duplicate in hwloc. hwloc could have the basic/uniform GPU
</span><br>
<span class="quotelev1">&gt; information and let users rely on CUDA for everything CUDA-specific for
</span><br>
<span class="quotelev1">&gt; instance. Right now, the basic/uniform part is almost empty (just
</span><br>
<span class="quotelev1">&gt; contain the GPU model name or so).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also the CUDA branch creates hwloc objects inside the GPU to describe
</span><br>
<span class="quotelev1">&gt; the memory/cores/caches/... Would you use these objects in your
</span><br>
<span class="quotelev1">&gt; application ? or would you rather just have a basic GPU attribute
</span><br>
<span class="quotelev1">&gt; structure containing the number of SMX, the memory size, ... One problem
</span><br>
<span class="quotelev1">&gt; with this is that it may be hard to define a structure that works for
</span><br>
<span class="quotelev1">&gt; all GPUs, even only the NVIDIA ones. We may need an union of structs...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am talking about &quot;your application&quot; above because having lstopo draw
</span><br>
<span class="quotelev1">&gt; very nice GPU internals doesn't mean the corresponding hwloc objects are
</span><br>
<span class="quotelev1">&gt; useful to real application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0831/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0832.php">Kenneth A. Lloyd: "[hwloc-users] FW:  hwloc tutorial material"</a>
<li><strong>Previous message:</strong> <a href="0830.php">Brice Goglin: "Re: [hwloc-users] hwloc tutorial material"</a>
<li><strong>In reply to:</strong> <a href="0830.php">Brice Goglin: "Re: [hwloc-users] hwloc tutorial material"</a>
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
