<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 12:57:00 2013" -->
<!-- isoreceived="20130322165700" -->
<!-- sent="Fri, 22 Mar 2013 16:56:31 +0000" -->
<!-- isosent="20130322165631" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux" -->
<!-- id="CD71E958.FAEE%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CD71D941.FADF%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 12:56:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12217.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Previous message:</strong> <a href="12215.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>In reply to:</strong> <a href="12215.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12217.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Reply:</strong> <a href="12217.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/22/13 9:53 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On 3/22/13 9:35 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Mar 22, 2013, at 8:23 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/22/13 9:17 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm afraid this still doesn't work for me - on my Centos box:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `opal_memory_linux_malloc_init_hook'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried it with a brand new checkout of the trunk. Any ideas?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you run nm on the built libopen-pal and see if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_memory_linux_malloc_init_hook() is in there (and whether it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;public
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or private)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Perhaps the difference stems from my platform file?
</span><br>
<span class="quotelev2">&gt;&gt;with_memory_manager=no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That would be the issue.  There's a bug in the memory-linux component's
</span><br>
<span class="quotelev1">&gt;configure such that it sets the defines that say it's going to build when
</span><br>
<span class="quotelev1">&gt;it's not actually going to build.  I have a (bad) fix for this problem and
</span><br>
<span class="quotelev1">&gt;am trying to see if I can find a less awful solution.
</span><br>
<p>Ralph -
<br>
<p>Can you try it now?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12217.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Previous message:</strong> <a href="12215.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>In reply to:</strong> <a href="12215.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12217.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Reply:</strong> <a href="12217.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
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
