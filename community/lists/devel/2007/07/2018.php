<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 15:01:49 2007" -->
<!-- isoreceived="20070726190149" -->
<!-- sent="Thu, 26 Jul 2007 14:01:54 -0500 (CDT)" -->
<!-- isosent="20070726190154" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="23970.128.107.248.220.1185476514.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1C1BABCD-1471-4EE7-B763-E83F8889B9D8_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-26 15:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2019.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2016.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2019.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2019.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, July 26, 2007 1:18 pm, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Jul 26, 2007, at 12:00 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) I think it would be better to always have the flags and macros
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available (like OMPI_GROUP_SPORADIC and OMPI_GROUP_IS_SPORADIC) even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when sparse groups are disabled.  They dont' take up any space, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mean less #ifs in the general code base
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's what i actually was proposing.. keep the flags (there are no
</span><br>
<span class="quotelev2">&gt;&gt; macros, just the GROUP_GET_PROC_POINTER) and the sparse parameters
</span><br>
<span class="quotelev2">&gt;&gt; in the
</span><br>
<span class="quotelev2">&gt;&gt; group strucutre, and this will mean, only 1 maybe 2 #ifs..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why would this mean having the sparse parameters in the group structure?
</span><br>
<p>not sure if i understood your question right, but in the group struct we
<br>
added 5 integers and 3 pointer.. if we want to compile these out, we would
<br>
then need all the #ifs around the code where we use these parameters..
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) Instead of the GROU_GET_PROC_POINTER macro, why not just change
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the behavior of the ompi_group_peer_lookup() function, so that there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is symmetry with how you get a proc from a communicator?  static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inline functions (especially short ones like that) are basically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; free.  We'll still have to fix all the places in the code where the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; macro is used or people poke directly at the group structure, but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like static inline over macros whenever possible.  So much easier t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually i never knew till this morning that this function was in the
</span><br>
<span class="quotelev2">&gt;&gt; code.. I have an inline function ompi_group_lookup (which does the
</span><br>
<span class="quotelev2">&gt;&gt; same
</span><br>
<span class="quotelev2">&gt;&gt; thing), that actually checks if the group is dense or not and act
</span><br>
<span class="quotelev2">&gt;&gt; accordingly.. but to use the inline function instead of the macro,
</span><br>
<span class="quotelev2">&gt;&gt; means
</span><br>
<span class="quotelev2">&gt;&gt; again that we need to compile in all the sparse parameters/code,
</span><br>
<span class="quotelev2">&gt;&gt; which im
</span><br>
<span class="quotelev2">&gt;&gt; for..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, it doesn't.  Just have something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static inline ompi_proc_t*
</span><br>
<span class="quotelev1">&gt; ompi_group_lookup(ompi_group_t *group, int peer)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; #if OMPI_GROUP_SPARSE
</span><br>
<span class="quotelev1">&gt;      /* big long lookup function for sparse groups here */
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;      return group-&gt;grp_proc_pointers[peer]
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
ok, i guess i can do that...
<br>
<p><span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="2019.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2016.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2019.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2019.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
