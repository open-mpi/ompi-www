<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 16:56:24 2007" -->
<!-- isoreceived="20070725205624" -->
<!-- sent="Wed, 25 Jul 2007 16:56:02 -0400" -->
<!-- isosent="20070725205602" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="B378A835-4B9C-499F-9AF5-49D8AF01A5D2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F289E2D2-6514-4256-990C-D22CCAAD2517_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-25 16:56:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="1998.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="1993.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 25, 2007, at 10:39 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; I have an even bigger objection than Rich.  It's near impossible to
</span><br>
<span class="quotelev1">&gt; measure the latency impact of something like this, but it does have
</span><br>
<span class="quotelev1">&gt; an additive effect.  It doesn't make sense to have all that code in
</span><br>
<span class="quotelev1">&gt; the critical path for systems where it's not needed.  We should leave
</span><br>
<span class="quotelev1">&gt; the compile time decision available, unless there's a very good
</span><br>
<span class="quotelev1">&gt; reason (which I did not see in this e-mail) to remove it.
</span><br>
<p>It just adds a lot of #if's throughout the code.  Other than that,  
<br>
there's no reason to remove it.
<br>
<p><span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2007, at 8:00 AM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is good work, so I am happy to see it come over.  My initial
</span><br>
<span class="quotelev2">&gt;&gt; understanding was that
</span><br>
<span class="quotelev2">&gt;&gt;  there would be compile time protection for this.  In the absence
</span><br>
<span class="quotelev2">&gt;&gt; of this, I think we need
</span><br>
<span class="quotelev2">&gt;&gt;  to see performance data on a variety of communication substrates.
</span><br>
<span class="quotelev2">&gt;&gt; It seems like a latency
</span><br>
<span class="quotelev2">&gt;&gt;  measurement is, perhaps, the most sensitive measurement, and
</span><br>
<span class="quotelev2">&gt;&gt; should be sufficient to
</span><br>
<span class="quotelev2">&gt;&gt;  see the impact on the critical path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/25/07 9:04 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT:    Merge the sparse groups work to the trunk; get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; community's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           opinion on one remaining issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:     For large MPI jobs, it can be memory-prohibitive to fully
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           represent dense groups; you can save a lot of space by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           &quot;sparse&quot; representations of groups that are (for example)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           derived from MPI_COMM_WORLD.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE:   Main changes are (might have missed a few in this analysis,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           but this is 99% of it):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           - Big changes in ompi/group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           - Moderate changes in ompi/comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           - Trivial changes in ompi/mpi/c, ompi/mca/pml/[dr|ob1],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ompi/mca/comm/sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN:    The code is ready now in /tmp/sparse-groups (it is passing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           all Intel and IBM tests; see below).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: We'll merge all the work to the trunk and enable the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           possibility of using sparse groups (dense will still be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           default, of course) if no one objects by COB Tuesday, 31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           2007.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The sparse groups work from U. Houston is ready to be brought into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk.  It is built on the premise that for very large MPI jobs, you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't want to fully represent MPI groups in memory if you don't have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to.  Specifically, you can save memory for communicators/groups that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are derived from MPI_COMM_WORLD by representing them in a sparse
</span><br>
<span class="quotelev3">&gt;&gt;&gt; storage format.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The sparse groups work introduces 3 new ompi_group_t storage  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; formats:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * dense (i.e., what it is today -- an array of ompi_proc_t pointers)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * sparse, where the current group's contents are based on the group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    from which the child was derived:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1. range: a series of (offset,length) tuples
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    2. stride: a single (first,stride,last) tuple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    3. bitmap: a bitmap
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently, all the sparse groups code must be enabled by configuring
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with --enable-sparse-groups.  If sparse groups are enabled, each MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; group that is created will automatically use the storage format that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; takes the least amount of space.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Big Issue with the sparse groups is that getting a pointer to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_proc_t may no longer be an O(1) operation -- you can't just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access it via comm-&gt;group-&gt;procs[i].  Instead, you have to call a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; macro.  If sparse groups are enabled, this will call a function  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the resolution and return the proc pointer.  If sparse groups are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enabled, the macro currently resolves to group-&gt;procs[i].
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When sparse groups are enabled, looking up a proc pointer is an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iterative process; you have to traverse up through one or more  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; groups until you reach a &quot;dense&quot; group to get the pointer.  So the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time to lookup the proc pointer (essentially) depends on the group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how many times it has been derived from a parent group (there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corner cases where the lookup time is shorter).  Lookup times in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD are O(1) because it is dense, but it now requires an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inline function call rather than directly accessing the data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; structure (see below).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that the code in /tmp/sparse-groups is currently out-of-date
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; respect to the orte and opal trees due to SVN merge mistakes and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  Testing has occurred by copying full orte/opal branches
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from a trunk checkout into the sparse group tree, so we're confident
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it's compatible with the trunk.  Full integration will occur
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before commiting to the trunk, of course.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The proposal we have for the community is as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Remove the --enable-sparse-groups configure option
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Default to use only dense groups (i.e., same as today)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. If the new MCA parameter &quot;mpi_use_sparse_groups&quot; is enabled,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the use of sparse groups
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. Eliminate the current macro used for group proc lookups and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     use an inline function of the form:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     static inline ompi_proc_t lookup_group(ompi_group_t *group, int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if (group_is_dense(group)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return group-&gt;procs[index];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return sparse_group_lookup(group, index);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *** NOTE: This design adds a single &quot;if&quot; in some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         performance-critical paths.  If the group is sparse, it will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         add a function call and the overhead to do the lookup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         If the group is dense (which will be the default), the proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         will be returned directly from the inline function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The rationale is that adding a single &quot;if&quot; (perhaps with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     OPAL_[UN]LIKELY?) in a few code paths will not be a big deal.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. Bring all these changes into the OMPI trunk and therefore into
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     v1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comments?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="1998.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="1993.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
