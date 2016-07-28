<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 17:35:11 2011" -->
<!-- isoreceived="20111107223511" -->
<!-- sent="Mon, 7 Nov 2011 22:34:45 +0000" -->
<!-- isosent="20111107223445" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="CADDAA1E.9768%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A8766EF2-9180-41E4-B90C-5A3C807112CE_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 17:34:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9924.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9924.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9924.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9925.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/7/11 3:27 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 7, 2011, at 10:37 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 7, 2011, at 10:16 AM, Nathan T. Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, and I completely agree. I was simply trying to keep it consistent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case there is something I don't know about the heterogeneous case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I increased the size of the 64 bit member because there is no uint128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;type.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ah, I see.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would put the other sizes back, at a minimum.  There should be no
</span><br>
<span class="quotelev2">&gt;&gt;need to increase those.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George -- comments?  Should this be a new key fields (128, with 2
</span><br>
<span class="quotelev2">&gt;&gt;uint64_t's)?  If this is only for large messages, is the extra 8 bytes a
</span><br>
<span class="quotelev2">&gt;&gt;concern?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Without the vader documentation it is difficult to asses the needs for
</span><br>
<span class="quotelev1">&gt;the 128 bits key. I tried to find the documentation online, but every
</span><br>
<span class="quotelev1">&gt;this I found they use a __s64 type.
</span><br>
<p>I'm not sure why they called it vader, but vader is a fairly straight
<br>
forward shared memory BTL.  It differs from sm in two important ways: 1)
<br>
it uses the XPMEM driver instead of SysV for shared memory and 2) it uses
<br>
the the Nemesis queue structure from MPICH instead of ring buffers.  XPMEM
<br>
allows you to map large quantities of memory from other processes into
<br>
your memory space, so you can do single copy for long messages, and the
<br>
Nemesis queue seems to give better scaling on our larger SMPs.  The Vader
<br>
BTL does not require the 128 bit keys.
<br>
<p><span class="quotelev1">&gt;Which function exactly requires 128bits integers? Where is the call to
</span><br>
<span class="quotelev1">&gt;this function in the vader BTL?
</span><br>
<p>A number of OMPI developer institutions are working on a new BTL
<br>
(different from vader) for the Cray XE series using the uGNI upper layer.
<br>
The rkeys in uGNI are 128 bytes.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9924.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9924.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9924.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9925.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
