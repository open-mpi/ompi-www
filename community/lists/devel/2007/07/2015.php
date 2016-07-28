<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 13:59:58 2007" -->
<!-- isoreceived="20070726175958" -->
<!-- sent="Thu, 26 Jul 2007 13:00:03 -0500 (CDT)" -->
<!-- isosent="20070726180003" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="37490.128.107.248.220.1185472803.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C3497762-11B8-4A38-A639-804293BCA7B7_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-26 14:00:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2016.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2014.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2014.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2016.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2016.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, July 26, 2007 12:20 pm, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Mohamad -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple of comments / questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Why do you need the #if OMPI_GROUP_SPARSE in communicator/comm.c?
</span><br>
<span class="quotelev1">&gt; That seems like
</span><br>
<span class="quotelev1">&gt;     part of the API that should under no conditions change based on
</span><br>
<span class="quotelev1">&gt; sparse/not sparse
</span><br>
<span class="quotelev1">&gt;
</span><br>
I don't, there was one #if that i just removed..
<br>
but we do need to check in some cases like in ompi_comm_get_rprocs that we
<br>
are not using the direct access to the pointers list. like for example:
<br>
<p>if(OMPI_GROUP_IS_DENSE(local_comm-&gt;c_local_group)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ompi_proc_pack(local_comm-&gt;c_local_group-&gt;grp_proc_pointers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_size, sbuf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* get the proc list for the sparse implementations */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc_list = (ompi_proc_t **) calloc
<br>
(local_comm-&gt;c_local_group-&gt;grp_proc_count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof (ompi_proc_t *));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0 ; i&lt;local_comm-&gt;c_local_group-&gt;grp_proc_count ; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc_list[i] =
<br>
GROUP_GET_PROC_POINTER(local_comm-&gt;c_local_group,i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ompi_proc_pack (proc_list, local_size, sbuf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>here if sparse groups are disabled, we don't really want to allocate and
<br>
set this list of pointers that already exists (not to waste more memory
<br>
and time)..
<br>
<p><span class="quotelev1">&gt; 2) I think it would be better to always have the flags and macros
</span><br>
<span class="quotelev1">&gt; available (like OMPI_GROUP_SPORADIC and OMPI_GROUP_IS_SPORADIC) even
</span><br>
<span class="quotelev1">&gt; when sparse groups are disabled.  They dont' take up any space, and
</span><br>
<span class="quotelev1">&gt; mean less #ifs in the general code base
</span><br>
<span class="quotelev1">&gt;
</span><br>
That's what i actually was proposing.. keep the flags (there are no
<br>
macros, just the GROUP_GET_PROC_POINTER) and the sparse parameters in the
<br>
group strucutre, and this will mean, only 1 maybe 2 #ifs..
<br>
<p><span class="quotelev1">&gt; 3) Instead of the GROU_GET_PROC_POINTER macro, why not just change
</span><br>
<span class="quotelev1">&gt; the behavior of the ompi_group_peer_lookup() function, so that there
</span><br>
<span class="quotelev1">&gt; is symmetry with how you get a proc from a communicator?  static
</span><br>
<span class="quotelev1">&gt; inline functions (especially short ones like that) are basically
</span><br>
<span class="quotelev1">&gt; free.  We'll still have to fix all the places in the code where the
</span><br>
<span class="quotelev1">&gt; macro is used or people poke directly at the group structure, but I
</span><br>
<span class="quotelev1">&gt; like static inline over macros whenever possible.  So much easier t
</span><br>
<span class="quotelev1">&gt; debug.
</span><br>
<p>Actually i never knew till this morning that this function was in the
<br>
code.. I have an inline function ompi_group_lookup (which does the same
<br>
thing), that actually checks if the group is dense or not and act
<br>
accordingly.. but to use the inline function instead of the macro, means
<br>
again that we need to compile in all the sparse parameters/code, which im
<br>
for..
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than that, I think you've got my concerns pretty much addressed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2007, at 8:45 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the current code, almost all #ifs are due to the fact that we don't
</span><br>
<span class="quotelev2">&gt;&gt; want to add the extra memory by the sparse parameters that are
</span><br>
<span class="quotelev2">&gt;&gt; added to
</span><br>
<span class="quotelev2">&gt;&gt; the group structure.
</span><br>
<span class="quotelev2">&gt;&gt; The additional parameters are 5 pointers and 3 integers.
</span><br>
<span class="quotelev2">&gt;&gt; If nobody objects, i would actually keep those extra parameters,
</span><br>
<span class="quotelev2">&gt;&gt; even if
</span><br>
<span class="quotelev2">&gt;&gt; sparse groups are disabled (in the default case on configure),
</span><br>
<span class="quotelev2">&gt;&gt; because it
</span><br>
<span class="quotelev2">&gt;&gt; would reduce the number of #ifs in the code to only 2 (as i recall
</span><br>
<span class="quotelev2">&gt;&gt; that i
</span><br>
<span class="quotelev2">&gt;&gt; had it before) ..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mohamad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, July 25, 2007 4:23 pm, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 25, 2007, at 3:14 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 25, 2007, at 5:07 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It just adds a lot of #if's throughout the code.  Other than that,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; there's no reason to remove it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I agree, lots of #ifs are bad.  But I guess I don't see the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The only real important thing people were directly accessing in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_group_t is the array of proc pointers.  Indexing into them
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be done with a static inline function that just has slightly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different time complexity based on compile options.  Static inline
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function that just does an index in the group proc pointer would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; almost no added overhead (none if the compiler doesn't suck).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ya, that's what I proposed.  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I did also propose removing the extra #if's so that the sparse
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; group code would be available and we'd add an extra &quot;if&quot; in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; critical code path.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But we can do it this way instead:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Still use the MACRO to access proc_t's.  In the --disable-sparse-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; groups scenario, have it map to comm.group.proc[i].  In the --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enable-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sparse-groups scenario, have it like I listed in the original
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proposal:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      static inline ompi_proc_t lookup_group(ompi_group_t *group, int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; index) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          if (group_is_dense(group)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              return group-&gt;procs[index];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              return sparse_group_lookup(group, index);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a) groups are always dense if --enable and an MCA parameter turns
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; off
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sparse groups, or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; b) there's an added check in the inline function for whether the MCA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameter is on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm personally in favor of a) because it means only one conditional
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the critical path.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't really care about the sparse groups turned on case.  I just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want minimal #ifs in the global code and to not have an if() { ... }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the critical path when sparse groups are disabled :).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev2">&gt;&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2016.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2014.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2014.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2016.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2016.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
