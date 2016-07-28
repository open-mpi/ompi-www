<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 17:23:42 2007" -->
<!-- isoreceived="20070725212342" -->
<!-- sent="Wed, 25 Jul 2007 15:23:12 -0600" -->
<!-- isosent="20070725212312" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="F8B0E4A9-BE45-4C62-911B-763BA475B3F8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D4858DA5-D214-4419-9AF2-4FCAC053B503_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 17:23:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2003.php">Jeff Squyres: "[OMPI devel] openib btl / --enable-progress-threads"</a>
<li><strong>Previous message:</strong> <a href="2001.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2001.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2004.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2004.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 25, 2007, at 3:14 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 25, 2007, at 5:07 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It just adds a lot of #if's throughout the code.  Other than that,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there's no reason to remove it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree, lots of #ifs are bad.  But I guess I don't see the problem.
</span><br>
<span class="quotelev2">&gt;&gt; The only real important thing people were directly accessing in the
</span><br>
<span class="quotelev2">&gt;&gt; ompi_group_t is the array of proc pointers.  Indexing into them could
</span><br>
<span class="quotelev2">&gt;&gt; be done with a static inline function that just has slightly
</span><br>
<span class="quotelev2">&gt;&gt; different time complexity based on compile options.  Static inline
</span><br>
<span class="quotelev2">&gt;&gt; function that just does an index in the group proc pointer would have
</span><br>
<span class="quotelev2">&gt;&gt; almost no added overhead (none if the compiler doesn't suck).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ya, that's what I proposed.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I did also propose removing the extra #if's so that the sparse
</span><br>
<span class="quotelev1">&gt; group code would be available and we'd add an extra &quot;if&quot; in the
</span><br>
<span class="quotelev1">&gt; critical code path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But we can do it this way instead:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still use the MACRO to access proc_t's.  In the --disable-sparse-
</span><br>
<span class="quotelev1">&gt; groups scenario, have it map to comm.group.proc[i].  In the --enable-
</span><br>
<span class="quotelev1">&gt; sparse-groups scenario, have it like I listed in the original  
</span><br>
<span class="quotelev1">&gt; proposal:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      static inline ompi_proc_t lookup_group(ompi_group_t *group, int
</span><br>
<span class="quotelev1">&gt; index) {
</span><br>
<span class="quotelev1">&gt;          if (group_is_dense(group)) {
</span><br>
<span class="quotelev1">&gt;              return group-&gt;procs[index];
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              return sparse_group_lookup(group, index);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) groups are always dense if --enable and an MCA parameter turns off
</span><br>
<span class="quotelev1">&gt; sparse groups, or
</span><br>
<span class="quotelev1">&gt; b) there's an added check in the inline function for whether the MCA
</span><br>
<span class="quotelev1">&gt; parameter is on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm personally in favor of a) because it means only one conditional
</span><br>
<span class="quotelev1">&gt; in the critical path.
</span><br>
<p>I don't really care about the sparse groups turned on case.  I just  
<br>
want minimal #ifs in the global code and to not have an if() { ... }  
<br>
in the critical path when sparse groups are disabled :).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2003.php">Jeff Squyres: "[OMPI devel] openib btl / --enable-progress-threads"</a>
<li><strong>Previous message:</strong> <a href="2001.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2001.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2004.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2004.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
