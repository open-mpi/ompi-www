<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 20:37:13 2015" -->
<!-- isoreceived="20150202013713" -->
<!-- sent="Mon, 02 Feb 2015 12:36:54 +1100" -->
<!-- isosent="20150202013654" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="54CED4B6.3050005_at_unimelb.edu.au" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6E8E54CC-0A35-42A6-9B64-5AEDFC56AD60_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-01 20:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16873.php">Adrian Reber: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16871.php">Dave Turner: "Re: [OMPI devel] devel Digest, Vol 2905, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16857.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16873.php">Adrian Reber: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16873.php">Adrian Reber: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 31/01/15 10:51, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; New tarball posted (same location).  Now featuring 100% fewer &quot;make check&quot; failures.
</span><br>
<p>On our BG/Q front-end node (PPC64, RHEL 6.4) I see:
<br>
<p>../../config/test-driver: line 95: 30173 Segmentation fault      (core dumped) &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
<br>
FAIL: opal_lifo
<br>
<p>Stack trace implies the culprit is in:
<br>
<p>#0  0x0000000010001048 in opal_atomic_swap_32 (addr=0x20, newval=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /vlsci/VLSCI/samuel/tmp/OMPI/openmpi-gitclone/opal/include/opal/sys/atomic_impl.h:51
<br>
51              old = *addr;
<br>
<p>I've attached a script of gdb doing &quot;thread apply all bt full&quot; in
<br>
case that's helpful.
<br>
<p>All the best,
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>

</pre>
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16872/opal-lifo-stack.log">opal-lifo-stack.log</a>
</ul>
<!-- attachment="opal-lifo-stack.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16873.php">Adrian Reber: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16871.php">Dave Turner: "Re: [OMPI devel] devel Digest, Vol 2905, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16857.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16873.php">Adrian Reber: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16873.php">Adrian Reber: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
