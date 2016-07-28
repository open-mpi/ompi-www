<?
$subject_val = "Re: [OMPI devel] rankfile questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 19 05:37:04 2008" -->
<!-- isoreceived="20080319093704" -->
<!-- sent="Wed, 19 Mar 2008 11:36:57 +0200" -->
<!-- isosent="20080319093657" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rankfile questions" -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE14CBA_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] rankfile questions" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-19 05:36:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3474.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Previous message:</strong> <a href="3472.php">George Bosilca: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Maybe in reply to:</strong> <a href="3452.php">Jeff Squyres: "[OMPI devel] rankfile questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3474.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Reply:</strong> <a href="3474.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, March 19, 2008 3:19 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] rankfile questions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not trying to pile on here...but I do have a question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This commit inserted a bunch of affinity-specific code in
</span><br>
ompi_mpi_init.c.
<br>
<span class="quotelev1">&gt; Was this truly necessary?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to me this violates our code architecture. Affinity-specific
</span><br>
code
<br>
<span class="quotelev1">&gt; belongs in the opal_p[m]affinity functions. Why aren't we just calling
</span><br>
a
<br>
<span class="quotelev1">&gt; &quot;opal_paffinity_set_my_processor&quot; function (or whatever name you like)
</span><br>
in
<br>
<span class="quotelev1">&gt; mpi_init, and doing all this paffinity stuff there?
</span><br>
<p>This is the only place where this code is used. These functions process
<br>
the info from ODLS and set paffinity appropriately. Moving this code to
<br>
OPAL will cause unnecessary changes in paffinity base API.  
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would make mpi_init a lot cleaner, and preserve the code standards
</span><br>
we
<br>
<span class="quotelev1">&gt; have had since the beginning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition, the code that has been added returns ORTE error and
</span><br>
success
<br>
<span class="quotelev1">&gt; codes. Given the location, it should be OMPI error and success codes -
</span><br>
if
<br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev1">&gt; move it to where I think it belongs (in OPAL), then those codes should
</span><br>
<span class="quotelev1">&gt; obviously be OPAL codes.
</span><br>
<p><p>Will be cleaned up,
<br>
thanks.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I'm missing some reason why these things can't be done, please
</span><br>
<span class="quotelev1">&gt; enlighten
</span><br>
<span class="quotelev1">&gt; me. Otherwise, it would be nice if this could be cleaned up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/18/08 8:39 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 18, 2008, at 9:32 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I notice that rankfile didn't compile properly on some platforms
</span><br>
and
<br>
<span class="quotelev3">&gt; &gt;&gt; issued warnings on other platforms.  Thanks to Ralph for cleaning
</span><br>
it
<br>
<span class="quotelev3">&gt; &gt;&gt; up...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. I see a getenv(&quot;slot_list&quot;) in the MPI side of the code; it
</span><br>
looks
<br>
<span class="quotelev3">&gt; &gt;&gt; like $slot_list is set by the odls for the MPI process.  Why isn't
</span><br>
it
<br>
<span class="quotelev3">&gt; &gt;&gt; an MCA parameter?  That's what all other values passed by the orted
</span><br>
to
<br>
<span class="quotelev3">&gt; &gt;&gt; the MPI process appear to be.
</span><br>
<p>&quot;slot_list&quot; consist of socket:core pair for the rank to be bind to. This
<br>
info changes according to rankfile and different for each node and rank,
<br>
therefore it cannot be passed via mca parameter.
<br>
<p><span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. I see that ompi_mpi_params.c is now registering 2 rmaps-level
</span><br>
MCA
<br>
<span class="quotelev3">&gt; &gt;&gt; parameters.  Why?  Shouldn't these be in ORTE somewhere?
</span><br>
<p>If you mean paffinity_alone and rank_file_debug, then 
<br>
1. paffinity_alone was there before.
<br>
2. After getting some answers from Ralph about orte_debug in
<br>
ompi_mpi_init I intend to introduce ompi_debug mca parameter that will
<br>
be used in this library and rank_file_debug will be removed.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A few more notes:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. Most of the files in orte/mca/rmaps/rankfile do not obey the
</span><br>
prefix
<br>
<span class="quotelev2">&gt; &gt; rule.  I think that they should be renamed.
</span><br>
<p>Rank_file component was copied from round_robin, I thought it would be
<br>
strange if it would look differently.
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4. A quick look through rankfile_lex.l seems to show that there are
</span><br>
<span class="quotelev2">&gt; &gt; global variables that are not protected by the prefix rule (or
</span><br>
<span class="quotelev2">&gt; &gt; static).  Ditto in rmaps_rf.c.  These should be fixed.
</span><br>
<p>What do you mean?
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 5. rank_file_done was instantiated in both rankfile_lex.l and
</span><br>
<span class="quotelev2">&gt; &gt; ramps_rf.c (causing a duplicate symbol linker error on OS X).  I
</span><br>
<span class="quotelev2">&gt; &gt; removed it from rmaps_rf.c (it was declared &quot;extern&quot; in
</span><br>
<span class="quotelev2">&gt; &gt; rankfile_lex.h, assumedly to indicate that it is &quot;owned&quot; by the
</span><br>
lex.l
<br>
<span class="quotelev2">&gt; &gt; file...?).
</span><br>
thanks
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 6. svn:ignore was not set in the new rankfile directory.
</span><br>
Will be fixed.
<br>
<p><p>I guess due to the heavy network traffic nowadays, all these comments
<br>
came now and not 2 weeks ago when I sent the code for reviews :) :) :).
<br>
&nbsp;
<br>
Best Regards,
<br>
Lenny.
<br>
<p><span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3474.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Previous message:</strong> <a href="3472.php">George Bosilca: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Maybe in reply to:</strong> <a href="3452.php">Jeff Squyres: "[OMPI devel] rankfile questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3474.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Reply:</strong> <a href="3474.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
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
