<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 09:05:07 2007" -->
<!-- isoreceived="20070725130507" -->
<!-- sent="Wed, 25 Jul 2007 09:04:44 -0400" -->
<!-- isosent="20070725130444" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="E239B06A-AE8E-411A-B431-DB9381C65836_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-07-25 09:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1992.php">Richard Graham: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="1990.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1992.php">Richard Graham: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="1992.php">Richard Graham: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:    Merge the sparse groups work to the trunk; get the community's
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opinion on one remaining issue.
<br>
WHY:     For large MPI jobs, it can be memory-prohibitive to fully
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;represent dense groups; you can save a lot of space by having
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;sparse&quot; representations of groups that are (for example)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;derived from MPI_COMM_WORLD.
<br>
WHERE:   Main changes are (might have missed a few in this analysis,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but this is 99% of it):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Big changes in ompi/group
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Moderate changes in ompi/comm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Trivial changes in ompi/mpi/c, ompi/mca/pml/[dr|ob1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi/mca/comm/sm
<br>
WHEN:    The code is ready now in /tmp/sparse-groups (it is passing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all Intel and IBM tests; see below).
<br>
TIMEOUT: We'll merge all the work to the trunk and enable the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;possibility of using sparse groups (dense will still be the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default, of course) if no one objects by COB Tuesday, 31 Aug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2007.
<br>
<p>======================================================================== 
<br>
===
<br>
<p>The sparse groups work from U. Houston is ready to be brought into the
<br>
trunk.  It is built on the premise that for very large MPI jobs, you
<br>
don't want to fully represent MPI groups in memory if you don't have
<br>
to.  Specifically, you can save memory for communicators/groups that
<br>
are derived from MPI_COMM_WORLD by representing them in a sparse
<br>
storage format.
<br>
<p>The sparse groups work introduces 3 new ompi_group_t storage formats:
<br>
<p>* dense (i.e., what it is today -- an array of ompi_proc_t pointers)
<br>
* sparse, where the current group's contents are based on the group
<br>
&nbsp;&nbsp;&nbsp;from which the child was derived:
<br>
&nbsp;&nbsp;&nbsp;1. range: a series of (offset,length) tuples
<br>
&nbsp;&nbsp;&nbsp;2. stride: a single (first,stride,last) tuple
<br>
&nbsp;&nbsp;&nbsp;3. bitmap: a bitmap
<br>
<p>Currently, all the sparse groups code must be enabled by configuring
<br>
with --enable-sparse-groups.  If sparse groups are enabled, each MPI
<br>
group that is created will automatically use the storage format that
<br>
takes the least amount of space.
<br>
<p>The Big Issue with the sparse groups is that getting a pointer to an
<br>
ompi_proc_t may no longer be an O(1) operation -- you can't just
<br>
access it via comm-&gt;group-&gt;procs[i].  Instead, you have to call a
<br>
macro.  If sparse groups are enabled, this will call a function to do
<br>
the resolution and return the proc pointer.  If sparse groups are not
<br>
enabled, the macro currently resolves to group-&gt;procs[i].
<br>
<p>When sparse groups are enabled, looking up a proc pointer is an
<br>
iterative process; you have to traverse up through one or more parent
<br>
groups until you reach a &quot;dense&quot; group to get the pointer.  So the
<br>
time to lookup the proc pointer (essentially) depends on the group and
<br>
how many times it has been derived from a parent group (there are
<br>
corner cases where the lookup time is shorter).  Lookup times in
<br>
MPI_COMM_WORLD are O(1) because it is dense, but it now requires an
<br>
inline function call rather than directly accessing the data
<br>
structure (see below).
<br>
<p>Note that the code in /tmp/sparse-groups is currently out-of-date with
<br>
respect to the orte and opal trees due to SVN merge mistakes and
<br>
problems.  Testing has occurred by copying full orte/opal branches
<br>
from a trunk checkout into the sparse group tree, so we're confident
<br>
that it's compatible with the trunk.  Full integration will occur
<br>
before commiting to the trunk, of course.
<br>
<p>The proposal we have for the community is as follows:
<br>
<p>1. Remove the --enable-sparse-groups configure option
<br>
2. Default to use only dense groups (i.e., same as today)
<br>
3. If the new MCA parameter &quot;mpi_use_sparse_groups&quot; is enabled, enable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the use of sparse groups
<br>
4. Eliminate the current macro used for group proc lookups and instead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use an inline function of the form:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;static inline ompi_proc_t lookup_group(ompi_group_t *group, int  
<br>
index) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (group_is_dense(group)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return group-&gt;procs[index];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return sparse_group_lookup(group, index);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;*** NOTE: This design adds a single &quot;if&quot; in some
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;performance-critical paths.  If the group is sparse, it will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add a function call and the overhead to do the lookup.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the group is dense (which will be the default), the proc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;will be returned directly from the inline function.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The rationale is that adding a single &quot;if&quot; (perhaps with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_[UN]LIKELY?) in a few code paths will not be a big deal.
<br>
<p>5. Bring all these changes into the OMPI trunk and therefore into
<br>
&nbsp;&nbsp;&nbsp;&nbsp;v1.3.
<br>
<p>Comments?
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
<li><strong>Next message:</strong> <a href="1992.php">Richard Graham: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="1990.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1992.php">Richard Graham: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="1992.php">Richard Graham: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
