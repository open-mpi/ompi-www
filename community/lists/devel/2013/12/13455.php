<?
$subject_val = "Re: [OMPI devel] bug in mca framework?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 17 10:34:04 2013" -->
<!-- isoreceived="20131217153404" -->
<!-- sent="Tue, 17 Dec 2013 15:33:48 +0000" -->
<!-- isosent="20131217153348" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in mca framework?" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3EBEE6A2_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131216174325.GG37237_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-17 10:33:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13456.php">Jeff Squyres (jsquyres): "[OMPI devel] Results of OMPI developer's meeting last week"</a>
<li><strong>Previous message:</strong> <a href="13454.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM"</a>
<li><strong>In reply to:</strong> <a href="13452.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13457.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13457.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe Devendar Bureddy nailed the root cause. I am providing his excellent analysis below:
<br>
<p><span class="quotelev1">&gt;From Devendar:
</span><br>
<p>with curiosity i looked at this issue. here's my 2 cents
<br>
I think issue is because of BTL components is opened&amp;closed twice(ompi_init, yoda) which leading to incorrect usage of var groups. The following sequence of events creating invalid memory
<br>
<p>1) all openib component parameters registered in ompi_mpi_init
<br>
main &gt; start_pes&gt; shmem_init -&gt; oshmem_shmem_init -&gt; ompi_mpi_init -&gt; mca_base_framework_open -&gt; mca_pml_base_open ..... mca_bml_base_open... -&gt; btl_openib_component_register()
<br>
<p>*	for all string variables it allocated a memory block (var-&gt;mbv_storage = PTR)
<br>
<p>At this time a new var group id:114 (of parent group id: 112) is created for all openib component variables.
<br>
<p>2) This var group is de-registered in ompi_mpi_init. It marks all variables as invalid. but, the group&amp;vars is still exist
<br>
main &gt; start_pes&gt; shmem_init -&gt; oshmem_shmem_init -&gt; mca_pml_base_select -&gt; mca_base_components_close -&gt; ... -&gt; mca_bml_base_close -&gt; mca_base_framework_close -&gt; mca_base_var_group_deregister(groupid: 114) * all string variables memory is deallocated ( set var-&gt;mbv_storage = NULL;)
<br>
<p>3) because of step 2). btl_openib.so shared lib dlclosed
<br>
<p>4) Now we are reopening openib in yoda and registering the openib variables again.
<br>
main &gt; start_pes&gt; shmem_init &gt; oshmem_shmem_init -&gt; _shmem_init -&gt; mca_base_framework_open -&gt; mca_spml_base_open&gt; mca_spml_yoda_component_open-&gt; ..... mca_bml_base_open... -&gt; btl_openib_component_register -&gt; register_variables()
<br>
<p>*	In register_variables(), var_find() finds this variable( from the same old group: 114) and reset the variables.
<br>
*	For string variables, it allocated the buffers again ( (var-&gt;mbv_storage = PTR)
<br>
*	note that group:114 is not belongs to yoda component.
<br>
<p>5) In yoda component close, it never finds above group(114) because this is not belongs to this component. So, do not call mca_base_var_group_deregister() again on the var group. string var memory is not deallocated.
<br>
main &gt; start_pes&gt; shmem_init &gt; oshmem_shmem_init -&gt; _shmem_init -&gt; mca_spml_base_select -&gt;..&gt; mca_spml_yoda_component_close -&gt; mca_bml_base_close -&gt; mca_base_var_group_find().
<br>
<p>6) because of step 5), the btl_openib.so is dlclosed(). This step invalidates, all openib string vars memory ( var-&gt;mbv_storage = PTR) allocated in step 4)
<br>
<p>7) in ompi_mpi_finalize(), it will loop through all vars and finalizes and deallocate the string var memory (var-&gt;mbv_storage = PTR)
<br>
ompi_mpi_finalize &gt;...&gt; mca_base_var_finalize * var-&gt;mbv_storage = PTR is invalid at this stage and causing the SEGFAULT. 
<br>
<p><p>This also explains why Dinar's patch, kostul_fix.patch (<a href="http://bgate.mellanox.com/redmine/attachments/1643/kostul_fix.patch">http://bgate.mellanox.com/redmine/attachments/1643/kostul_fix.patch</a>), resolves the issue. His patch prevents you from finding the invalid already opened params.
<br>
So, I see in a lot of these registration functions the signature has an entry for the project name, but now, NULL, is always passed. I see a note by Nathan in
<br>
<p>../opal/mca/base/mca_base_var.c +1311
<br>
{
<br>
/* XXX -- component_update -- We will stash the project name in the component */
<br>
return mca_base_var_register (NULL, component-&gt;mca_type_name,
<br>
<p><p>Seems knowing the project name, oshmem, would allow us to distinguish between the different BMLs.
<br>
<p>Nathan, please advise.
<br>
<p>Josh
<br>
<p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
<br>
Sent: Monday, December 16, 2013 12:44 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] bug in mca framework?
<br>
<p>On Mon, Dec 16, 2013 at 05:21:05PM +0000, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt; After speaking with Igor Ivanov about this this morning, he summarized his findings as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Valgrind comes up clean.
</span><br>
<p>Thats good to hear but unfortunate since this seems really like a stomping-on-memory problem.
<br>
<p><span class="quotelev1">&gt; 2. The issue is not reproduced with a static build.
</span><br>
<p>This is a red-herring. The variable itself contains garbage. The mbv_storage pointer looked like it was on the stack, the name was not valid, etc. Not sure how we got an mca_base_var_t into that state since the only time we touch anything in them is in mca_base_var_finalize. That functions cleans up all of the state to two calls to it should be harmless.
<br>
<p><span class="quotelev1">&gt; 3. A bisection study reveals that problems first appear after commit: 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/28800/trunk/opal/mca/base">https://svn.open-mpi.org/trac/ompi/changeset/28800/trunk/opal/mca/base</a>
</span><br>
<span class="quotelev1">&gt; /mca_base_var.c
</span><br>
<p>Possibly also a coincidence. That commit only 1) moves the group stuff into its own file, and 2) adds the mca_base_pvar interface. Its possible I messed something up in the rest of the code but unlikely. I will take another look though.
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
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff 
</span><br>
<span class="quotelev1">&gt; Squyres (jsquyres)
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
<span class="quotelev3">&gt; &gt;&gt;         searching itself in global array and refreshing their 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fields again;
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
<span class="quotelev1">&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13456.php">Jeff Squyres (jsquyres): "[OMPI devel] Results of OMPI developer's meeting last week"</a>
<li><strong>Previous message:</strong> <a href="13454.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM"</a>
<li><strong>In reply to:</strong> <a href="13452.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13457.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13457.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
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
