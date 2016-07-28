<?
$subject_val = "Re: [OMPI devel] BTL move - the notion";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 10:42:52 2008" -->
<!-- isoreceived="20081205154252" -->
<!-- sent="Fri, 05 Dec 2008 10:41:53 -0500" -->
<!-- isosent="20081205154153" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL move - the notion" -->
<!-- id="C55EB5F1.2BF98%rlgraham_at_ornl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49391559.6070807_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL move - the notion<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 10:41:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5014.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Previous message:</strong> <a href="5012.php">Jeff Squyres: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>In reply to:</strong> <a href="5009.php">Terry Dontje: "Re: [OMPI devel] BTL move - the notion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5011.php">Ralph Castain: "Re: [OMPI devel] BTL move - the notion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/5/08 6:49 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Let me start the e-mail conversation, and see how far we get.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Goal: The goal several of us have is to be able to use the btl&#226;&#128;&#154;&#195;&#132;&#195;&#180;s
</span><br>
<span class="quotelev2">&gt; &gt; outside of the MPI layer in Open MPI. The layer itself is generic, w/o
</span><br>
<span class="quotelev2">&gt; &gt; specific knowledge of Upper Level Protocols, so is well suited for
</span><br>
<span class="quotelev2">&gt; &gt; this sort of use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Technical Approach: What we have suggested is to start the process
</span><br>
<span class="quotelev2">&gt; &gt; with the Open MPI code base, and make it independent of the mpi-layer
</span><br>
<span class="quotelev2">&gt; &gt; (which it is now), and the run-time layer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Before we get into any specific technical details,
</span><br>
<span class="quotelev2">&gt; &gt; the first question I have is are people totally opposed to the notion
</span><br>
<span class="quotelev2">&gt; &gt; of making the btl&#226;&#128;&#154;&#195;&#132;&#195;&#180;s independent of MPI and the run-time ?
</span><br>
<span class="quotelev2">&gt; &gt; This does not mean that it can&#226;&#128;&#154;&#195;&#132;&#195;&#180;t be used by it, but that there are
</span><br>
<span class="quotelev2">&gt; &gt; well defined abstraction layers, i.e., are people against the goal in
</span><br>
<span class="quotelev2">&gt; &gt; the first place ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I am not against the idea of separating the BTLs out from OMPI. However,
</span><br>
<span class="quotelev1">&gt; it would help to know what we are really trying to accomplish this and
</span><br>
<span class="quotelev1">&gt; why using MPI is a non-starter. Is the issue to heavyweight of a
</span><br>
<span class="quotelev1">&gt; protocol or is it the infrastructure. I guess one question I have is if
</span><br>
<span class="quotelev1">&gt; we separate BTLs from OMPI do we lose valuable information needed to
</span><br>
<span class="quotelev1">&gt; establish and maintain the connections and could we run into some
</span><br>
<span class="quotelev1">&gt; chicken/egg problems. I assume the last issue is only of concern if we
</span><br>
<span class="quotelev1">&gt; remove the orte/opal dependencies.
</span><br>
<p>Not quite sure about the MPI question.  The btl's are ULP neutral
<br>
communications
<br>
primitives (by design), and we want to re-use these outside MPI.  Run-time
<br>
(actually for FT in MPI), and other ULP's.
<br>
So OPAL dependencies will be maintained as these are what give us the
<br>
portability
<br>
layer.  What needs to be a bit more generic is how these are used by ULP's,
<br>
and
<br>
specifically issues revolving around indexing.  I am guessing that these are
<br>
issues that will come up when addressing how to use other run-times in the
<br>
context
<br>
of OMPI.
<br>
<p><span class="quotelev1">&gt; What are alternative suggestions to the technical approach ?
</span><br>
<span class="quotelev1">&gt; The technical approach is really the implementation logistics, right?
</span><br>
<span class="quotelev1">&gt; That is how do we apply these changes to the trunk such that they get in
</span><br>
<span class="quotelev1">&gt; asap as to not require significant ongoing maintenance by the
</span><br>
<span class="quotelev1">&gt; implementors and not disturb the community members that are doing other
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<p>Yes.  First, I am advocating a phased approach, to minimize disruption to
<br>
the
<br>
trunk.  The first phase is renaming structures, and moving them in the code
<br>
tree.
<br>
The second is moving the btl and supporting code (mpools, rcache, allocator,
<br>
?,
<br>
and have already gotten feedback that should consider moving the bml, which
<br>
is
<br>
very reasonable) to a new location in the code tree.  These, I expect,
<br>
should
<br>
touch a lot of code, but it either compiles or it does not.  No data
<br>
structure
<br>
changes or any other such changes will be made at this stage.
<br>
<p>The final phase is removing any dependencies on other layers.  At this stage
<br>
all I can think of is the notifier, but I am not doing the work, so there
<br>
could be other changes.  Here we need to talk as a community on how to best
<br>
do this.  It is clear that we need the notifier in this layer, and maybe we
<br>
use
<br>
an approach that Ralph has suggested and use #defines.
<br>
At this stage I do foresee the need to make a change to the btl's, for
<br>
general
<br>
use - we need to add attributes that tell us if a given btl can bootstrap
<br>
itself,
<br>
and if forked processes can also use this btl in the children.
<br>
<p>The larger changes I was concerned about I think have more to do with
<br>
enabling
<br>
other run-time support within the ompi code base, and these will be
<br>
addressed
<br>
in a separate track, as Jeff has suggested.  This is where I expect larger
<br>
changes
<br>
within ompi, but this has more to do with ompi than will others being able
<br>
to use the btl's.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Branch and patch - protects the community members the most until it
</span><br>
<span class="quotelev1">&gt; comes to the flag day of pushing the patch. But as you mention below
</span><br>
<span class="quotelev1">&gt; this has a heavy cost on the implementors and eventually a potentially
</span><br>
<span class="quotelev1">&gt; large blackout period.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Incremental approach - If we believe this project will be large I
</span><br>
<span class="quotelev1">&gt; success we try and map out all the different pieces and try and figure
</span><br>
<span class="quotelev1">&gt; out ways we can compartmentalize each piece such that they can be
</span><br>
<span class="quotelev1">&gt; putback separately from each other. This is similar to the branch and
</span><br>
<span class="quotelev1">&gt; patch approach except we try and do several patchs that each can be
</span><br>
<span class="quotelev1">&gt; reasonably tested and putback separate from the others. The hope is that
</span><br>
<span class="quotelev1">&gt; each patch is not that large and thus easier for the implementors to
</span><br>
<span class="quotelev1">&gt; maintain and merge. But this will require a more thought out plan as to
</span><br>
<span class="quotelev1">&gt; how things are done which might be detrimental to any agile development.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scorched earth - Map a calendar time frame that we say from X to Y the
</span><br>
<span class="quotelev1">&gt; trunk will be under major renovation to move out the BTLs from OMPI.
</span><br>
<span class="quotelev1">&gt; This help the BTL movement developers but could put any other
</span><br>
<span class="quotelev1">&gt; development at risk. It also commits us completely to doing the BTL
</span><br>
<span class="quotelev1">&gt; separation so if things start falling a part it will definitely delay
</span><br>
<span class="quotelev1">&gt; the next release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I personally prefer the Incremental Approach but we will need to have a
</span><br>
<span class="quotelev1">&gt; very well thought out plan to get this to work. This approach could
</span><br>
<span class="quotelev1">&gt; devolve into the other two approaches without careful planning, which I
</span><br>
<span class="quotelev1">&gt; don't believe anyone would really like to to see.
</span><br>
<p>Same here.  The goal is to keep the trunk fully functioning at all time,
<br>
also from a performance perspective.
<br>
<p>Rich
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt; &gt; One suggestion has been to branch and patch. To me this is a long-term
</span><br>
<span class="quotelev2">&gt; &gt; maintenance nightmare.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; What are peoples thoughts here ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rich
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
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
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5014.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Previous message:</strong> <a href="5012.php">Jeff Squyres: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>In reply to:</strong> <a href="5009.php">Terry Dontje: "Re: [OMPI devel] BTL move - the notion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5011.php">Ralph Castain: "Re: [OMPI devel] BTL move - the notion"</a>
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
