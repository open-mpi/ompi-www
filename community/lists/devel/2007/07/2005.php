<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 22:47:45 2007" -->
<!-- isoreceived="20070726024745" -->
<!-- sent="Wed, 25 Jul 2007 21:47:51 -0500 (CDT)" -->
<!-- isosent="20070726024751" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="40037.128.107.248.219.1185418071.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="27705.128.107.248.220.1185417932.squirrel_at_mail.cs.uh.edu" -->
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
<strong>Date:</strong> 2007-07-25 22:47:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2006.php">Jeff Squyres: "[OMPI devel] static rate / connection modularity"</a>
<li><strong>Previous message:</strong> <a href="2004.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2004.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2014.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry the additional parameters are 5 integers and 3 pointers..
<br>
<p>Mohamad
<br>
<p>On Wed, July 25, 2007 9:45 pm, Mohamad Chaarawi wrote:
<br>
<span class="quotelev1">&gt; In the current code, almost all #ifs are due to the fact that we don't
</span><br>
<span class="quotelev1">&gt; want to add the extra memory by the sparse parameters that are added to
</span><br>
<span class="quotelev1">&gt; the group structure.
</span><br>
<span class="quotelev1">&gt; The additional parameters are 5 pointers and 3 integers.
</span><br>
<span class="quotelev1">&gt; If nobody objects, i would actually keep those extra parameters, even if
</span><br>
<span class="quotelev1">&gt; sparse groups are disabled (in the default case on configure), because it
</span><br>
<span class="quotelev1">&gt; would reduce the number of #ifs in the code to only 2 (as i recall that i
</span><br>
<span class="quotelev1">&gt; had it before) ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mohamad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, July 25, 2007 4:23 pm, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 25, 2007, at 3:14 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 25, 2007, at 5:07 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It just adds a lot of #if's throughout the code.  Other than that,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there's no reason to remove it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I agree, lots of #ifs are bad.  But I guess I don't see the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The only real important thing people were directly accessing in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_group_t is the array of proc pointers.  Indexing into them could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be done with a static inline function that just has slightly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different time complexity based on compile options.  Static inline
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function that just does an index in the group proc pointer would have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; almost no added overhead (none if the compiler doesn't suck).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ya, that's what I proposed.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I did also propose removing the extra #if's so that the sparse
</span><br>
<span class="quotelev3">&gt;&gt;&gt; group code would be available and we'd add an extra &quot;if&quot; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; critical code path.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But we can do it this way instead:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Still use the MACRO to access proc_t's.  In the --disable-sparse-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; groups scenario, have it map to comm.group.proc[i].  In the --enable-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sparse-groups scenario, have it like I listed in the original
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proposal:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      static inline ompi_proc_t lookup_group(ompi_group_t *group, int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if (group_is_dense(group)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              return group-&gt;procs[index];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              return sparse_group_lookup(group, index);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) groups are always dense if --enable and an MCA parameter turns off
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sparse groups, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) there's an added check in the inline function for whether the MCA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter is on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm personally in favor of a) because it means only one conditional
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the critical path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't really care about the sparse groups turned on case.  I just
</span><br>
<span class="quotelev2">&gt;&gt; want minimal #ifs in the global code and to not have an if() { ... }
</span><br>
<span class="quotelev2">&gt;&gt; in the critical path when sparse groups are disabled :).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev1">&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev1">&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
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
<li><strong>Next message:</strong> <a href="2006.php">Jeff Squyres: "[OMPI devel] static rate / connection modularity"</a>
<li><strong>Previous message:</strong> <a href="2004.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2004.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2014.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
