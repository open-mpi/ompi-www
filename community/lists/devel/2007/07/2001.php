<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 17:14:20 2007" -->
<!-- isoreceived="20070725211420" -->
<!-- sent="Wed, 25 Jul 2007 17:14:02 -0400" -->
<!-- isosent="20070725211402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="D4858DA5-D214-4419-9AF2-4FCAC053B503_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6C9367E8-8607-4E5C-8304-599F7126F8E0_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 17:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2002.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2002.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2002.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 25, 2007, at 5:07 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev2">&gt;&gt; It just adds a lot of #if's throughout the code.  Other than that,
</span><br>
<span class="quotelev2">&gt;&gt; there's no reason to remove it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree, lots of #ifs are bad.  But I guess I don't see the problem.
</span><br>
<span class="quotelev1">&gt; The only real important thing people were directly accessing in the
</span><br>
<span class="quotelev1">&gt; ompi_group_t is the array of proc pointers.  Indexing into them could
</span><br>
<span class="quotelev1">&gt; be done with a static inline function that just has slightly
</span><br>
<span class="quotelev1">&gt; different time complexity based on compile options.  Static inline
</span><br>
<span class="quotelev1">&gt; function that just does an index in the group proc pointer would have
</span><br>
<span class="quotelev1">&gt; almost no added overhead (none if the compiler doesn't suck).
</span><br>
<p>Ya, that's what I proposed.  :-)
<br>
<p>But I did also propose removing the extra #if's so that the sparse  
<br>
group code would be available and we'd add an extra &quot;if&quot; in the  
<br>
critical code path.
<br>
<p>But we can do it this way instead:
<br>
<p>Still use the MACRO to access proc_t's.  In the --disable-sparse- 
<br>
groups scenario, have it map to comm.group.proc[i].  In the --enable- 
<br>
sparse-groups scenario, have it like I listed in the original proposal:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static inline ompi_proc_t lookup_group(ompi_group_t *group, int
<br>
index) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (group_is_dense(group)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return group-&gt;procs[index];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return sparse_group_lookup(group, index);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>With:
<br>
<p>a) groups are always dense if --enable and an MCA parameter turns off  
<br>
sparse groups, or
<br>
b) there's an added check in the inline function for whether the MCA  
<br>
parameter is on
<br>
<p>I'm personally in favor of a) because it means only one conditional  
<br>
in the critical path.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2002.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2002.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2002.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
