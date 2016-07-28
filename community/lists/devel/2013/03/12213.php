<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 11:24:21 2013" -->
<!-- isoreceived="20130322152421" -->
<!-- sent="Fri, 22 Mar 2013 15:23:55 +0000" -->
<!-- isosent="20130322152355" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux" -->
<!-- id="CD71D2ED.FACE%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BF520435-5639-4968-925C-83833D4AE7E0_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-03-22 11:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12214.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Previous message:</strong> <a href="12212.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>In reply to:</strong> <a href="12211.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12214.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Reply:</strong> <a href="12214.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/22/13 9:17 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I'm afraid this still doesn't work for me - on my Centos box:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;`opal_memory_linux_malloc_init_hook'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I tried it with a brand new checkout of the trunk. Any ideas?
</span><br>
<p>Can you run nm on the built libopen-pal and see if
<br>
opal_memory_linux_malloc_init_hook() is in there (and whether it's public
<br>
or private)?
<br>
<p><span class="quotelev1">&gt;IIRC, we wound up here because we were trying to avoid rolling libopal
</span><br>
<span class="quotelev1">&gt;into liborte into libmpi and instead having three completely separable
</span><br>
<span class="quotelev1">&gt;libraries. Given that we haven't been able to make that work across
</span><br>
<span class="quotelev1">&gt;platforms, is it time to give up and return to what worked?
</span><br>
<p>No. It's important to the no orte case and I'm not giving it up because
<br>
OFED can't get it's act together and solve this properly (i.e., put
<br>
uumunotify in their stack).  I'll take the bandwidth hit for IB before
<br>
I'll go back to broken library building.
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
<li><strong>Next message:</strong> <a href="12214.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Previous message:</strong> <a href="12212.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>In reply to:</strong> <a href="12211.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12214.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
<li><strong>Reply:</strong> <a href="12214.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28202 - in trunk: ompi/runtime opal/mca/memory/linux"</a>
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
