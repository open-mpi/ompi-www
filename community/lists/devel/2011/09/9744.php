<?
$subject_val = "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 11:46:49 2011" -->
<!-- isoreceived="20110906154649" -->
<!-- sent="Tue, 6 Sep 2011 17:46:50 +0200" -->
<!-- isosent="20110906154650" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen" -->
<!-- id="8ACFAECB-F22F-4ED0-B4DA-9ECC56EF818D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="88754548-C50C-47AE-A3F6-5CD76BE86E21_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 11:46:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9745.php">Jeff Squyres: "[OMPI devel] OMPI v1.4.4rc3 is now up"</a>
<li><strong>Previous message:</strong> <a href="9743.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="9743.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9747.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Reply:</strong> <a href="9747.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess that as long as there is an option to have any need for XML support compiled out, there is no reason to complain.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Sep 6, 2011, at 17:36 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Don't forget that this RFC has a timeout of today.  I didn't think it would be controversial, which is why it had a short timeout.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh brought up a good point on the teleconf today that he'd like to be able to have hwloc without the the additional libxml dependency (i.e., the way it is on the trunk today).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Remember that making hwloc a 1st class citizen is the first step of a multi-sept plan (i.e., part of revamping paffinity in general).  As part of the larger plan, we had planned to -- at least for a short while -- enable XML support in hwloc.  Ralph and I will discuss this; I *think* we should be able to bring in the overall hwloc support without XML.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the future, hwloc is exploring either supporting some other text format that won't have an additional dependency (e.g., JSON), or re-writing its XML support to drop the libxml dependency.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 31, 2011, at 3:05 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Move hwloc up to be a first-class citizen in OPAL (while still making it possible to compile it out for platforms that don't need it)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: I previously sent a similar RFC to this one, but it got shot down in favor of hiding hwloc's functionality under abstraction.  After playing with this for some time, we're now firmly in the belief that the additional abstraction doesn't buy OMPI anything.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: A new compile-time-one-of-many framework like libevent: opal/mca/hwloc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: as part of the paffinity changes being worked on by Jeff, Josh, Terry, and Ralph.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Teleconf, Tuesday, Sep 6.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Short timeout because I *think* the only person that objected to the prior RFC (Ralph) has now been converted. Hence, I think this will be non-controversial.  See below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are many people who want to use hwloc within the OMPI code base for many different reasons.  We've struggled how to do so for two reasons:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. avoid a complete dependence on hwloc
</span><br>
<span class="quotelev2">&gt;&gt; 2. be able to compile it out for platforms that don't want/need it (e.g., Cray)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The initial objection to my long-ago RFC was that you could hide hwloc under some abstraction and therefore easily be able to handle compiling hwloc out, supporting platforms that hwloc doesn't support, and potentially be able to replace hwloc with something else someday, if desired.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After wrestling with this for a good long while, none of those goals seem workable via a thin layer of abstraction.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Instead, let's just call a spade a spade: we'll be dependent upon hwloc.  We'll provide a mechanism to compile it out for Cray and other embedded platforms.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's the plan:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Make a new framework opal/mca/hwloc.  We'll initially have 3 components:
</span><br>
<span class="quotelev2">&gt;&gt; - hwloc121: hwloc distribution v1.2.1
</span><br>
<span class="quotelev2">&gt;&gt; - system: the system-installed hwloc
</span><br>
<span class="quotelev2">&gt;&gt; - none: for platforms that don't want hwloc support
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just like the libevent framework, we can introduce new versions of hwloc (e.g., 1.3) as new components.  Old versions/components can be deleted as new versions/components are stabilized.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. The hwloc framework will be like the libevent framework; only one of these components will be compiled.  The component's hwloc API will be directly available (via name-shifting) to the rest of OPAL/ORTE/OMPI.  No need for the usual structs of function pointers and whatnot.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. The rest of the OPAL / ORTE / OMPI code base can use the hwloc API in the following way:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3a. opal_init() will initialize hwloc and load a central copy of the local machine's topology in a global variable. Anyone in the code base can use this global variable; its use does not need to be protected by #if _whatever_. However, its value may be NULL for platforms that hwloc doesn't support or installations that used the &quot;none&quot; hwloc component.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3b. opal_config.h will contain the macro OPAL_HAVE_HWLOC, which will be either 0 or 1.  Any code that uses the hwloc API must protect itself with #if OPAL_HAVE_HWLOC, because installations that use the &quot;none&quot; hwloc component won't be able to link resolve any of the hwloc symbols.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Meaning that you could do something like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  if (NULL != opal_hwloc_topology) {
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev2">&gt;&gt;      // ...use hwloc API, etc.
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. After steps 1-3 are all done, the paffinity and maffinity frameworks can be deleted and replaced with the corresponding hwloc calls.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Meaning: if we've got hwloc, the paffinity and maffinity frameworks now become redundant.  So let's whack them. This can happen after 1-3 are done and stable in the trunk, however.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="9745.php">Jeff Squyres: "[OMPI devel] OMPI v1.4.4rc3 is now up"</a>
<li><strong>Previous message:</strong> <a href="9743.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="9743.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9747.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Reply:</strong> <a href="9747.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
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
