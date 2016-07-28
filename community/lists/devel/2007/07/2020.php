<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 15:43:08 2007" -->
<!-- isoreceived="20070726194308" -->
<!-- sent="Thu, 26 Jul 2007 14:43:12 -0500 (CDT)" -->
<!-- isosent="20070726194312" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="59961.128.107.248.220.1185478992.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A50DCBB7-9F82-43AC-8557-DEDAD6FF1B19_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-26 15:43:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2021.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2019.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2019.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, July 26, 2007 2:07 pm, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Jul 26, 2007, at 1:01 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, July 26, 2007 1:18 pm, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 26, 2007, at 12:00 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) I think it would be better to always have the flags and macros
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; available (like OMPI_GROUP_SPORADIC and OMPI_GROUP_IS_SPORADIC)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; even
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when sparse groups are disabled.  They dont' take up any space, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mean less #ifs in the general code base
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's what i actually was proposing.. keep the flags (there are no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; macros, just the GROUP_GET_PROC_POINTER) and the sparse parameters
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; group strucutre, and this will mean, only 1 maybe 2 #ifs..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why would this mean having the sparse parameters in the group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; structure?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; not sure if i understood your question right, but in the group
</span><br>
<span class="quotelev2">&gt;&gt; struct we
</span><br>
<span class="quotelev2">&gt;&gt; added 5 integers and 3 pointer.. if we want to compile these out,
</span><br>
<span class="quotelev2">&gt;&gt; we would
</span><br>
<span class="quotelev2">&gt;&gt; then need all the #ifs around the code where we use these parameters..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't follow why you would need all the sparse stuff in
</span><br>
<span class="quotelev1">&gt; ompi_group_t when OMPI_GROUP_SPARSE is 0.  The OMPI_GROUP_IS and
</span><br>
<span class="quotelev1">&gt; OMPI_GROU_SET macros only modify grp_flags, which is always present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I don't need them, right now they are compiled out.. but since they are,
<br>
all functions using these parameters (example: translate_ranks_strided,
<br>
the long lookup function) have to be also compiled out, and other common
<br>
functions that changed (like translate ranks, where we now check if sparse
<br>
groups are  enabled so we use an easier translate_ranks corresponding to
<br>
the storage type) have to have the #ifs to compile stuff out.
<br>
<p><span class="quotelev1">&gt; Like the ompi_group_peer_lookup, much can be hidden inside the
</span><br>
<span class="quotelev1">&gt; functions rather than exposed through the interface, if you're
</span><br>
<span class="quotelev1">&gt; concerned about the other functionality currently #if'ed in the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
in the ompi_group_peer_lookup that u suggested, we have an #if, so the
<br>
same way with all functions that use sparse parameters..
<br>
<p>I think i get what u are saying, Im don't want any functionality from
<br>
including the sparse stuff when they are disabled, just easier code to
<br>
look at..
<br>
<p><p><span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="2021.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2019.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2019.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
