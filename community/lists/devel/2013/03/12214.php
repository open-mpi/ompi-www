<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 11:35:07 2013" -->
<!-- isoreceived="20130322153507" -->
<!-- sent="Fri, 22 Mar 2013 08:35:00 -0700" -->
<!-- isosent="20130322153500" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux" -->
<!-- id="A3B66A02-660C-4F32-ADB1-0A98D76F7FDA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CD71D2ED.FACE%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 11:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12215.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Previous message:</strong> <a href="12213.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>In reply to:</strong> <a href="12213.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12215.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Reply:</strong> <a href="12215.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 22, 2013, at 8:23 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 3/22/13 9:17 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid this still doesn't work for me - on my Centos box:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `opal_memory_linux_malloc_init_hook'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried it with a brand new checkout of the trunk. Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you run nm on the built libopen-pal and see if
</span><br>
<span class="quotelev1">&gt; opal_memory_linux_malloc_init_hook() is in there (and whether it's public
</span><br>
<span class="quotelev1">&gt; or private)?
</span><br>
<p>Here's what I see
<br>
<p>[rhc_at_bend001 .libs]$ nm libopen-pal.so | grep hook
<br>
00000000002f2900 b hooks_support
<br>
00000000000a29fa t opal_hwloc152_hwloc_set_linuxfs_hooks
<br>
000000000002aad5 T opal_mem_hooks_finalize
<br>
000000000002aa2d T opal_mem_hooks_init
<br>
000000000002ad5a T opal_mem_hooks_register_release
<br>
000000000002ac7d T opal_mem_hooks_release_hook
<br>
000000000002ac6b T opal_mem_hooks_set_support
<br>
000000000002ad4e T opal_mem_hooks_support_level
<br>
000000000002af5a T opal_mem_hooks_unregister_release
<br>
<p>Perhaps the difference stems from my platform file?
<br>
with_memory_manager=no
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; IIRC, we wound up here because we were trying to avoid rolling libopal
</span><br>
<span class="quotelev2">&gt;&gt; into liborte into libmpi and instead having three completely separable
</span><br>
<span class="quotelev2">&gt;&gt; libraries. Given that we haven't been able to make that work across
</span><br>
<span class="quotelev2">&gt;&gt; platforms, is it time to give up and return to what worked?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No. It's important to the no orte case and I'm not giving it up because
</span><br>
<span class="quotelev1">&gt; OFED can't get it's act together and solve this properly (i.e., put
</span><br>
<span class="quotelev1">&gt; uumunotify in their stack).  I'll take the bandwidth hit for IB before
</span><br>
<span class="quotelev1">&gt; I'll go back to broken library building.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12215.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Previous message:</strong> <a href="12213.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>In reply to:</strong> <a href="12213.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12215.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Reply:</strong> <a href="12215.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
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
