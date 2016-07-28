<?
$subject_val = "[OMPI devel] openshmem comments";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 10:19:02 2013" -->
<!-- isoreceived="20130305151902" -->
<!-- sent="Tue, 5 Mar 2013 15:18:58 +0000" -->
<!-- isosent="20130305151858" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openshmem comments" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F6C59E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] openshmem comments<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 10:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12184.php">Jeff Squyres (jsquyres): "[OMPI devel] Style question: // in C code"</a>
<li><strong>Previous message:</strong> <a href="12182.php">Peter Kjellstr&#246;m: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Feedback from call last week:
<br>
-----------------------------
<br>
<p>- make yoda work with all btls
<br>
- pragmas in MPI_Init/Finalize seem sketchy
<br>
- possible conflict between opal and oshmem ptmalloc?
<br>
- be careful of BTL move to OPAL
<br>
<p>Jeff's questions:
<br>
-----------------
<br>
<p>- All the CMake and .windows stuff can now disappear.
<br>
<p>- Why 2 README-SHMEM files?  Seems like they should be part of the main README file.
<br>
<p>- contrib/tau/readme: should be named README, and readable/non-verbatim text should be wrapped to 76 cols
<br>
<p>- has the TAU patch been submitted upstream?
<br>
<p>- The distr/ directory looks like Mellanox-specific release stuff.  Should that be in the community tree?  And if so, why isn't it under contrib/dist/, e.g., contrib/dist/mellanox?
<br>
<p>- Has the knem patch been submitted upstream?
<br>
<p>- If you need to maintain the knem patch in this tree, it should be under the oshmem directory, not the top level
<br>
<p>- I would strongly discourage using &quot;f77&quot; anywhere in openshmem -- there have not been Fortran 77 compilers **in over 25 years**.  MPI has *never* been Fortran-77 compliant.  Use &quot;fortran&quot;, and your wrapper compiler should be &quot;shmemfort&quot;, not &quot;shmemf77&quot; (which parallels the move to &quot;mpifort&quot;).
<br>
<p>- Be aware that Nathan's change to the MCA param system is coming very, very soon.  You will likely need to update to match it.
<br>
<p>- I see Mellanox/coverity-specific paths in trunk/Makefile.am.  Don't do that.  IF you want to add a &quot;cov&quot; target, then put a proper configure check looking for coverity in the path, and make the &quot;cov&quot; target do something sane when coverity is not found in your path.
<br>
<p>- configure.ac: We already AC_CHECK_SIZEOF(long); don't put in a 2nd one.
<br>
<p>- what is the additional memset() for in ompi_free_list.c?  I see it also in a few places in the SM BTL, grdma mpool module, etc.  Why is this necessary?
<br>
<p>*** This is probably my biggest problem: I really, really dislike the insertion of open shmem flags and functionality in the Open MPI layer.  There are very, Very, VERY few abstraction violations between OPAL, ORTE, and OMPI -- and we've worked very, very hard to keep it that way.  You're adding a TON of abstraction violations (i.e., making the MPI layer aware of the openshmem layer above it).
<br>
<p>- btl_openib.c: you have
<br>
<p>#if OSHMEM_ENABLED
<br>
#else
<br>
<p>Temporarily ignoring the fact that this is an abstraction violation, why not use #if !OSHMEM_ENABLED?  Having an empty #if block seems just weird.
<br>
<p>Later, don't use &quot;#if OSHMEM_ENABLED == 0&quot; -- use &quot;#if !OSHMEM_ENABLED&quot; (that's just an OMPI convention).
<br>
<p>- This same block in btl_openib.c, though (and many others like it in the openib BTL) -- why are you removing that code?  Is an openshmem-compiled code base not usable as an MPI code base?
<br>
<p>- What is this random permutation of qp's that you put in connect_oob.c?
<br>
<p>- Do not use // style comments in C code.
<br>
&nbsp;&nbsp;--&gt; Actually this might warrant a larger discussion.  We officially force a C99-compliant compiler now, right?  So do we want to start allowing //-style comments?
<br>
<p>- I see tabs used in btl_sm.c.  Spaces.  Not tabs.  4 space indents.  Always.
<br>
<p>- btl_sm.c: when testing with ==, please put the constants on the left (this is defensive programming):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (BTL_SM_HDR_TYPE_GET_AS_SEND == frag-&gt;hdr-&gt;tag)
<br>
<p>- btl_sm_component.c: what is the MCA param component_use_knem_value for?  The help message string is NULL -- please put in a real message.
<br>
<p>- I can't tell what is an improvement for the KNEM support in the SM BTL vs. what is oshem specific.  If some stuff is just improvements to KNEM SM BTL support, that should come in separately and not be in #if blocks.
<br>
<p>- Warning/Info messages should be output with opal_show_help(), not opal_output().
<br>
<p>- The only changes to trunk/ompi/mca/sbgp/ibnet/Makefile.am are commented out things; they should not be added.
<br>
<p>- Please explain the pragmas in the MPI API functions (I seem to recall you explained these last week, but I don't remember why any more).
<br>
<p>- I don't understand the changes made to ompi_info.  Why wouldn't you create oshmem-info?  (like orte-info)  Or perhaps this is a good opprotunity to re-factor the ompi_info code so that its core can be down in opal, and top-level tools like opal-info, orte-info, ompi_info, and oshmem-info can just call some common subroutines.  
<br>
<p>--&gt; Nathan may have done this in his MCA param base revamp, BTW...  Please check with him.
<br>
<p>- Why was trunk/opal/etc/openmpi-mca-params.conf modified?  It should not include any parameters -- users can put whatever they want in there.
<br>
<p>- orte/etc/Makefile.am -- don't create a file from Makefile.am.  Have the file already created, and Makefile just installs/uninstalls it.  If you need to substitute paths in there, then use the same .in template system that the rest of the tree uses.
<br>
<p>- orte/etc/Makefile.am: is this the Open MPI implementation of Open Shmem, or Mellanox ScaleableSHMEM?
<br>
<p>- Is there an oshmemrun, similar to orterun/mpirun?
<br>
<p>- How will this code be distributed?  Will openmpi tarballs include the openshmem code?  Or will there be separate openshmem tarballs that include all of Open MPI + the openshmem project?
<br>
<p>- What happens when you autogen/configure/make now; does that include openshmem?
<br>
<p>- Related by slightly different: How does one configure openshem vs. openmpi?  It seems like they are two different things, now (since you change a bunch of BTL functionality based on whether openshmem is enabled or not).
<br>
<p>- are there any openshmem tests that should be added to MTT?
<br>
<p>SUMMARY
<br>
<p>- This is much more invasive to the OMPI layer than expected:
<br>
&nbsp;&nbsp;1. Some of the changes seem to be improvements to existing code in OPAL and OMPI.  Please just bring these in separately, outside of OSHMEM.  Such improvements benefit everyone.
<br>
&nbsp;&nbsp;2. Other changes seem to augmentations for OSHMEM support.
<br>
<p>- In general, it seems like Open Shmem was grafted *in to* the MPI layer, rather than *on top of* the MPI layer.  I have a large problem with this.  I'd rather see a *much* cleaner separation between the two.  I'm sure that some level of integration is inevitable -- but the sheer number of #if's all over the place is quite worrysome.  Can you separate these better?
<br>
<p>- If it would help, perhaps the BTL's functionality should be extended to support what openshmem needs, rather than putting in a bunch of #if's in the BTLs that openshmem supports.  This might be significantly cleaner, and also provide better long-term support for openshmem.
<br>
<p>- I don't understand the branding/configury between openshmem and OMPI.  It seems like if you're using openshmem, you should be using openshmem-branded tools (e.g., openshmemrun).  Just like we do with ORTE -- there are many ORTE-only applications out there that use 100% ORTE-branded tools, and never do anything with MPI.  The same should be true with openshmem.  Otherwise, it's very confusing for end users.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12184.php">Jeff Squyres (jsquyres): "[OMPI devel] Style question: // in C code"</a>
<li><strong>Previous message:</strong> <a href="12182.php">Peter Kjellstr&#246;m: "Re: [OMPI devel] 1.7rc8 is posted"</a>
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
