<?
$subject_val = "Re: [OMPI devel] rankfile questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 21:19:03 2008" -->
<!-- isoreceived="20080319011903" -->
<!-- sent="Tue, 18 Mar 2008 19:18:43 -0600" -->
<!-- isosent="20080319011843" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rankfile questions" -->
<!-- id="C405C613.4A97%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDCB9472-5D8E-4826-A858-88D4C481FA1E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] rankfile questions<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 21:18:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3472.php">George Bosilca: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3470.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>In reply to:</strong> <a href="3453.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3473.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not trying to pile on here...but I do have a question.
<br>
<p>This commit inserted a bunch of affinity-specific code in ompi_mpi_init.c.
<br>
Was this truly necessary?
<br>
<p>It seems to me this violates our code architecture. Affinity-specific code
<br>
belongs in the opal_p[m]affinity functions. Why aren't we just calling a
<br>
&quot;opal_paffinity_set_my_processor&quot; function (or whatever name you like) in
<br>
mpi_init, and doing all this paffinity stuff there?
<br>
<p>It would make mpi_init a lot cleaner, and preserve the code standards we
<br>
have had since the beginning.
<br>
<p>In addition, the code that has been added returns ORTE error and success
<br>
codes. Given the location, it should be OMPI error and success codes - if we
<br>
move it to where I think it belongs (in OPAL), then those codes should
<br>
obviously be OPAL codes.
<br>
<p>If I'm missing some reason why these things can't be done, please enlighten
<br>
me. Otherwise, it would be nice if this could be cleaned up.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On 3/18/08 8:39 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 18, 2008, at 9:32 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I notice that rankfile didn't compile properly on some platforms and
</span><br>
<span class="quotelev2">&gt;&gt; issued warnings on other platforms.  Thanks to Ralph for cleaning it
</span><br>
<span class="quotelev2">&gt;&gt; up...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. I see a getenv(&quot;slot_list&quot;) in the MPI side of the code; it looks
</span><br>
<span class="quotelev2">&gt;&gt; like $slot_list is set by the odls for the MPI process.  Why isn't it
</span><br>
<span class="quotelev2">&gt;&gt; an MCA parameter?  That's what all other values passed by the orted to
</span><br>
<span class="quotelev2">&gt;&gt; the MPI process appear to be.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. I see that ompi_mpi_params.c is now registering 2 rmaps-level MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameters.  Why?  Shouldn't these be in ORTE somewhere?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A few more notes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Most of the files in orte/mca/rmaps/rankfile do not obey the prefix
</span><br>
<span class="quotelev1">&gt; rule.  I think that they should be renamed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. A quick look through rankfile_lex.l seems to show that there are
</span><br>
<span class="quotelev1">&gt; global variables that are not protected by the prefix rule (or
</span><br>
<span class="quotelev1">&gt; static).  Ditto in rmaps_rf.c.  These should be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. rank_file_done was instantiated in both rankfile_lex.l and
</span><br>
<span class="quotelev1">&gt; ramps_rf.c (causing a duplicate symbol linker error on OS X).  I
</span><br>
<span class="quotelev1">&gt; removed it from rmaps_rf.c (it was declared &quot;extern&quot; in
</span><br>
<span class="quotelev1">&gt; rankfile_lex.h, assumedly to indicate that it is &quot;owned&quot; by the lex.l
</span><br>
<span class="quotelev1">&gt; file...?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. svn:ignore was not set in the new rankfile directory.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3472.php">George Bosilca: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3470.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>In reply to:</strong> <a href="3453.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3473.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile questions"</a>
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
