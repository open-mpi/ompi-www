<?
$subject_val = "Re: [OMPI devel] bug in mca framework?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 16 12:43:26 2013" -->
<!-- isoreceived="20131216174326" -->
<!-- sent="Mon, 16 Dec 2013 10:43:25 -0700" -->
<!-- isosent="20131216174325" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in mca framework?" -->
<!-- id="20131216174325.GG37237_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A3EBECF67_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in mca framework?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-16 12:43:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13453.php">Nathan Hjelm: "[OMPI devel] RFC: move openib free list initialization to add procs"</a>
<li><strong>Previous message:</strong> <a href="13451.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13450.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13455.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13455.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 16, 2013 at 05:21:05PM +0000, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt; After speaking with Igor Ivanov about this this morning, he summarized his findings as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Valgrind comes up clean.
</span><br>
<p>Thats good to hear but unfortunate since this seems really like a
<br>
stomping-on-memory problem.
<br>
<p><span class="quotelev1">&gt; 2. The issue is not reproduced with a static build.
</span><br>
<p>This is a red-herring. The variable itself contains garbage. The
<br>
mbv_storage pointer looked like it was on the stack, the name was not
<br>
valid, etc. Not sure how we got an mca_base_var_t into that state since
<br>
the only time we touch anything in them is in
<br>
mca_base_var_finalize. That functions cleans up all of the state to two
<br>
calls to it should be harmless.
<br>
<p><span class="quotelev1">&gt; 3. A bisection study reveals that problems first appear after commit: 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/28800/trunk/opal/mca/base/mca_base_var.c">https://svn.open-mpi.org/trac/ompi/changeset/28800/trunk/opal/mca/base/mca_base_var.c</a>
</span><br>
<p>Possibly also a coincidence. That commit only 1) moves the group stuff
<br>
into its own file, and 2) adds the mca_base_pvar interface. Its possible
<br>
I messed something up in the rest of the code but unlikely. I will take
<br>
another look though.
<br>
<p>-Nathan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Monday, December 16, 2013 12:15 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] bug in mca framework?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It might be worthwhile to run this through valgrind and see if something is being freed incorrectly...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 16, 2013, at 12:11 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I took a look at the stacktraces last week and could not identify 
</span><br>
<span class="quotelev2">&gt; &gt; where the bug is. I will dig deeper this week and see if I can come up with the correct fix.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Dec 09, 2013 at 03:17:36PM +0200, Mike Dubman wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Nathan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Could you please comment on the Igor`s observations?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   On Wed, Dec 4, 2013 at 4:44 PM, Igor Ivanov &lt;igor.ivanov_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     On 04.12.2013 17:56, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       On Dec 4, 2013, at 2:52 AM, Igor Ivanov &lt;Igor.Ivanov_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         It is the first mca variable with type as string from btl/openib as
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         'device_param_files'. Actually you can disable it and get failure on
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         the second.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Description of case we see:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         1. openib mca variables are registered during startup as stage at
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         select component phase;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         2. but a winner is cm component and openib mca variables are
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         deregistered as part of mca group;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         3. mca variables are not removed from global mca array but they
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         marked as invalid and memory for string is freed;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         4. shmem needs openib for yoda and does bml initialization;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         5. openib mca variables are registered againusing light mode as
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         searching itself in global array and refreshing their fields 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; again;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Can you explain what you mean by step 5?  I.e., what does &quot;using light
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       mode&quot; mean?  Is the openib component register function invoked again?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     It is correct, it is called twice. &quot;light mode&quot; means that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     mca_base_var_register() does not allocate mca variable object again, it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     seeks this variable in global array and finding it updates fields in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     mca_base_var_t structure (at least mbv_storage).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         6. for unknown reason bml finalization does not clean these vars as
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         it is done in step 2;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         7. mca_btl_openib.so is unloaded;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         8. opal_finalize() destroys mca variables form global array,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         observes openib`s variable, try destroy using non accessed 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; address;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         So a code that is under discussion fixes step 6.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Nathan: it sounds like an MCA var (and entire group) is registered,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       unregistered, and then registered again. Does the MCA var system get
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       confused here when it tries to unregister the group a 2nd time?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Probably issue relates incorrect recognition if variable valid/invalid
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     during second call of mca_base_var_deregister().
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13452/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13453.php">Nathan Hjelm: "[OMPI devel] RFC: move openib free list initialization to add procs"</a>
<li><strong>Previous message:</strong> <a href="13451.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13450.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13455.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13455.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
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
