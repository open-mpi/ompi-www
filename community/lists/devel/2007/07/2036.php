<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 14:03:39 2007" -->
<!-- isoreceived="20070727180339" -->
<!-- sent="Fri, 27 Jul 2007 13:03:44 -0500 (CDT)" -->
<!-- isosent="20070727180344" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="[OMPI devel] FW:  [RFC] Sparse group implementation]" -->
<!-- id="1794.171.70.217.138.1185559424.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 14:03:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2037.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2035.php">Jeff Squyres: "Re: [OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I Updated the RFC..
<br>
<p><span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: July 25, 2007 9:04:44 AM EDT
</span><br>
<span class="quotelev1">&gt; To: Open Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] [RFC] Sparse group implementation
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT:    Merge the sparse groups work to the trunk; get the
</span><br>
<span class="quotelev1">&gt; community's
</span><br>
<span class="quotelev1">&gt;           opinion on one remaining issue.
</span><br>
<span class="quotelev1">&gt; WHY:     For large MPI jobs, it can be memory-prohibitive to fully
</span><br>
<span class="quotelev1">&gt;           represent dense groups; you can save a lot of space by
</span><br>
<span class="quotelev1">&gt; having
</span><br>
<span class="quotelev1">&gt;           &quot;sparse&quot; representations of groups that are (for example)
</span><br>
<span class="quotelev1">&gt;           derived from MPI_COMM_WORLD.
</span><br>
<span class="quotelev1">&gt; WHERE:   Main changes are (might have missed a few in this analysis,
</span><br>
<span class="quotelev1">&gt;           but this is 99% of it):
</span><br>
<span class="quotelev1">&gt;           - Big changes in ompi/group
</span><br>
<span class="quotelev1">&gt;           - Moderate changes in ompi/comm
</span><br>
<span class="quotelev1">&gt;           - Trivial changes in ompi/mpi/c, ompi/mca/pml/[dr|ob1],
</span><br>
<span class="quotelev1">&gt;             ompi/mca/comm/sm
</span><br>
<span class="quotelev1">&gt; WHEN:    The code is ready now in /tmp/sparse (it is passing
</span><br>
<span class="quotelev1">&gt;           all Intel and IBM tests; see below).
</span><br>
<span class="quotelev1">&gt; TIMEOUT: We'll merge all the work to the trunk and enable the
</span><br>
<span class="quotelev1">&gt;           possibility of using sparse groups (dense will still be the
</span><br>
<span class="quotelev1">&gt;           default, of course) if no one objects by COB Tuesday, 31 Aug
</span><br>
<span class="quotelev1">&gt;           2007.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt; ===
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sparse groups work from U. Houston is ready to be brought into the
</span><br>
<p><span class="quotelev1">&gt; trunk.  It is built on the premise that for very large MPI jobs, you
</span><br>
<span class="quotelev1">&gt; don't want to fully represent MPI groups in memory if you don't have
</span><br>
<span class="quotelev1">&gt; to.  Specifically, you can save memory for communicators/groups that
</span><br>
<span class="quotelev1">&gt; are derived from MPI_COMM_WORLD by representing them in a sparse
</span><br>
<span class="quotelev1">&gt; storage format.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sparse groups work introduces 3 new ompi_group_t storage formats:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * dense (i.e., what it is today -- an array of ompi_proc_t pointers)
</span><br>
<span class="quotelev1">&gt; * sparse, where the current group's contents are based on the group
</span><br>
<span class="quotelev1">&gt;    from which the child was derived:
</span><br>
<span class="quotelev1">&gt;    1. range: a series of (offset,length) tuples
</span><br>
<span class="quotelev1">&gt;    2. stride: a single (first,stride,last) tuple
</span><br>
<span class="quotelev1">&gt;    3. bitmap: a bitmap
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, all the sparse groups code must be enabled by configuring
</span><br>
<span class="quotelev1">&gt; with --enable-sparse-groups.  If sparse groups are enabled, each MPI
</span><br>
<span class="quotelev1">&gt; group that is created will automatically use the storage format that
</span><br>
<span class="quotelev1">&gt; takes the least amount of space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Big Issue with the sparse groups is that getting a pointer to an
</span><br>
<span class="quotelev1">&gt; ompi_proc_t may no longer be an O(1) operation -- you can't just
</span><br>
<span class="quotelev1">&gt; access it via comm-&gt;group-&gt;procs[i].  Instead, you have to call a
</span><br>
<span class="quotelev1">&gt; macro.  If sparse groups are enabled, this will call a function to do
</span><br>
<span class="quotelev1">&gt; the resolution and return the proc pointer.  If sparse groups are not
</span><br>
<span class="quotelev1">&gt; enabled, the macro currently resolves to group-&gt;procs[i].
</span><br>
<p>Actually there is no macro anymore. Brian Suggested that we make it and
<br>
inline function (ompi_group_peer_lookup) that checks if sparse groups are
<br>
enabled (#if OMPI_GROUP_SPARSE) and acts accrodingly..
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When sparse groups are enabled, looking up a proc pointer is an
</span><br>
<span class="quotelev1">&gt; iterative process; you have to traverse up through one or more parent
</span><br>
<span class="quotelev1">&gt; groups until you reach a &quot;dense&quot; group to get the pointer.  So the
</span><br>
<span class="quotelev1">&gt; time to lookup the proc pointer (essentially) depends on the group and
</span><br>
<p><span class="quotelev1">&gt; how many times it has been derived from a parent group (there are
</span><br>
<span class="quotelev1">&gt; corner cases where the lookup time is shorter).  Lookup times in
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD are O(1) because it is dense, but it now requires an
</span><br>
<span class="quotelev1">&gt; inline function call rather than directly accessing the data structure
</span><br>
<p><span class="quotelev1">&gt; (see below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the code in /tmp/sparse-groups is currently out-of-date with
</span><br>
<p><span class="quotelev1">&gt; respect to the orte and opal trees due to SVN merge mistakes and
</span><br>
<span class="quotelev1">&gt; problems.  Testing has occurred by copying full orte/opal branches
</span><br>
<span class="quotelev1">&gt; from a trunk checkout into the sparse group tree, so we're confident
</span><br>
<span class="quotelev1">&gt; that it's compatible with the trunk.  Full integration will occur
</span><br>
<span class="quotelev1">&gt; before commiting to the trunk, of course.
</span><br>
<p>A new branch has been created in /tmp/sparse that works perfect..
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The proposal we have for the community is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Remove the --enable-sparse-groups configure option 2. Default to
</span><br>
<span class="quotelev1">&gt; use only dense groups (i.e., same as today) 3. If the new MCA
</span><br>
<span class="quotelev1">&gt; parameter &quot;mpi_use_sparse_groups&quot; is enabled, enable
</span><br>
<span class="quotelev1">&gt;     the use of sparse groups
</span><br>
<p>The configure option will be kept. we will also have a runtime option
<br>
(mpi_use_sparse_groups) that is set by default when the sparse groups are
<br>
enabled on configure.
<br>
<p><span class="quotelev1">&gt; 4. Eliminate the current macro used for group proc lookups and instead
</span><br>
<span class="quotelev1">&gt;     use an inline function of the form:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     static inline ompi_proc_t lookup_group(ompi_group_t *group, int
</span><br>
<span class="quotelev1">&gt; index) {
</span><br>
<span class="quotelev1">&gt;         if (group_is_dense(group)) {
</span><br>
<span class="quotelev1">&gt;             return group-&gt;procs[index];
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt;             return sparse_group_lookup(group, index);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Done, however the inline functions uses #if instead of if()..
<br>
<p><span class="quotelev1">&gt;     *** NOTE: This design adds a single &quot;if&quot; in some
</span><br>
<span class="quotelev1">&gt;         performance-critical paths.  If the group is sparse, it will
</span><br>
<span class="quotelev1">&gt;         add a function call and the overhead to do the lookup.
</span><br>
<span class="quotelev1">&gt;         If the group is dense (which will be the default), the proc
</span><br>
<span class="quotelev1">&gt;         will be returned directly from the inline function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The rationale is that adding a single &quot;if&quot; (perhaps with
</span><br>
<span class="quotelev1">&gt;     OPAL_[UN]LIKELY?) in a few code paths will not be a big deal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Another proposition that i mentioned before is to keep the sparse
<br>
parameters in the group structure (not compile them out) when the sparse
<br>
groups are disabled, which will remove almost all #ifs from the code,
<br>
which will be much easier for the eyes (the main reason).. Brian had some
<br>
objections..
<br>
Again the extra parameters will be 5 integers and 3 pointers.
<br>
<p><span class="quotelev1">&gt; 5. Bring all these changes into the OMPI trunk and therefore into
</span><br>
<span class="quotelev1">&gt;     v1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
Anyone?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
-- 
Mohamad Chaarawi
Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
Department of Computer Science	  University of Houston
4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2037.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2035.php">Jeff Squyres: "Re: [OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS"</a>
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
