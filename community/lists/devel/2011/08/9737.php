<?
$subject_val = "[OMPI devel] RFC: make hwloc be a 1st-class citizen";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 31 15:05:48 2011" -->
<!-- isoreceived="20110831190548" -->
<!-- sent="Wed, 31 Aug 2011 15:05:40 -0400" -->
<!-- isosent="20110831190540" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: make hwloc be a 1st-class citizen" -->
<!-- id="5C912F71-5027-44D4-ADAC-C5C0B679202D_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: make hwloc be a 1st-class citizen<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-31 15:05:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9738.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Previous message:</strong> <a href="9736.php">teng ma: "[OMPI devel] a performance issue of Open MPI Reduce on infiniband cluster."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9743.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9743.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9755.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Move hwloc up to be a first-class citizen in OPAL (while still making it possible to compile it out for platforms that don't need it)
<br>
<p>WHY: I previously sent a similar RFC to this one, but it got shot down in favor of hiding hwloc's functionality under abstraction.  After playing with this for some time, we're now firmly in the belief that the additional abstraction doesn't buy OMPI anything.
<br>
<p>WHERE: A new compile-time-one-of-many framework like libevent: opal/mca/hwloc.
<br>
<p>WHEN: as part of the paffinity changes being worked on by Jeff, Josh, Terry, and Ralph.
<br>
<p>TIMEOUT: Teleconf, Tuesday, Sep 6.  
<br>
<p>--&gt; Short timeout because I *think* the only person that objected to the prior RFC (Ralph) has now been converted. Hence, I think this will be non-controversial.  See below.
<br>
<p>--------------------------------------
<br>
<p>MORE DETAIL:
<br>
<p>There are many people who want to use hwloc within the OMPI code base for many different reasons.  We've struggled how to do so for two reasons:
<br>
<p>1. avoid a complete dependence on hwloc
<br>
2. be able to compile it out for platforms that don't want/need it (e.g., Cray)
<br>
<p>The initial objection to my long-ago RFC was that you could hide hwloc under some abstraction and therefore easily be able to handle compiling hwloc out, supporting platforms that hwloc doesn't support, and potentially be able to replace hwloc with something else someday, if desired.
<br>
<p>After wrestling with this for a good long while, none of those goals seem workable via a thin layer of abstraction.
<br>
<p>Instead, let's just call a spade a spade: we'll be dependent upon hwloc.  We'll provide a mechanism to compile it out for Cray and other embedded platforms.  
<br>
<p>Here's the plan:
<br>
<p>1. Make a new framework opal/mca/hwloc.  We'll initially have 3 components:
<br>
&nbsp;&nbsp;- hwloc121: hwloc distribution v1.2.1
<br>
&nbsp;&nbsp;- system: the system-installed hwloc
<br>
&nbsp;&nbsp;- none: for platforms that don't want hwloc support
<br>
<p>Just like the libevent framework, we can introduce new versions of hwloc (e.g., 1.3) as new components.  Old versions/components can be deleted as new versions/components are stabilized.
<br>
<p>2. The hwloc framework will be like the libevent framework; only one of these components will be compiled.  The component's hwloc API will be directly available (via name-shifting) to the rest of OPAL/ORTE/OMPI.  No need for the usual structs of function pointers and whatnot.
<br>
<p>3. The rest of the OPAL / ORTE / OMPI code base can use the hwloc API in the following way:
<br>
<p>3a. opal_init() will initialize hwloc and load a central copy of the local machine's topology in a global variable. Anyone in the code base can use this global variable; its use does not need to be protected by #if _whatever_. However, its value may be NULL for platforms that hwloc doesn't support or installations that used the &quot;none&quot; hwloc component.
<br>
<p>3b. opal_config.h will contain the macro OPAL_HAVE_HWLOC, which will be either 0 or 1.  Any code that uses the hwloc API must protect itself with #if OPAL_HAVE_HWLOC, because installations that use the &quot;none&quot; hwloc component won't be able to link resolve any of the hwloc symbols.  
<br>
<p>Meaning that you could do something like:
<br>
<p>&nbsp;&nbsp;&nbsp;if (NULL != opal_hwloc_topology) {
<br>
#if OPAL_HAVE_HWLOC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// ...use hwloc API, etc.
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>4. After steps 1-3 are all done, the paffinity and maffinity frameworks can be deleted and replaced with the corresponding hwloc calls.  
<br>
<p>Meaning: if we've got hwloc, the paffinity and maffinity frameworks now become redundant.  So let's whack them. This can happen after 1-3 are done and stable in the trunk, however.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9738.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Previous message:</strong> <a href="9736.php">teng ma: "[OMPI devel] a performance issue of Open MPI Reduce on infiniband cluster."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9743.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9743.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9755.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
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
