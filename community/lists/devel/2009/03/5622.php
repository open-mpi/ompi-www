<?
$subject_val = "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 13:32:03 2009" -->
<!-- isoreceived="20090311173203" -->
<!-- sent="Wed, 11 Mar 2009 13:31:59 -0400 (EDT)" -->
<!-- isosent="20090311173159" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer" -->
<!-- id="alpine.DEB.1.10.0903111235520.20862_at_marvin.we-be-smart.org" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="C5DCDEAC.309F4%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 13:31:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5623.php">Andrew Lumsdaine: "[OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<li><strong>Previous message:</strong> <a href="5621.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5608.php">Richard Graham: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5646.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5646.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 11 Mar 2009, Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt; Going back over the e-mail trail it seems like you have raised two
</span><br>
<span class="quotelev1">&gt; concerns:
</span><br>
<span class="quotelev1">&gt; - BTL performance after the change, which I would take to be
</span><br>
<span class="quotelev1">&gt;   - btl latency
</span><br>
<span class="quotelev1">&gt;   - btl bandwidth
</span><br>
<span class="quotelev1">&gt; - Code maintainability
</span><br>
<span class="quotelev1">&gt; - repeated code changes that impact a large number of files
</span><br>
<span class="quotelev1">&gt; - A demonstration that the changes actually achieve their goal. As we
</span><br>
<span class="quotelev1">&gt; discussed after you got off the call, there are two separate goals here
</span><br>
<span class="quotelev1">&gt;   - being able to use the btl?s outside the context of mpi, but
</span><br>
<span class="quotelev1">&gt; within the ompi code base
</span><br>
<span class="quotelev1">&gt;   - ability to use the btl?s in the context of a run-time other than
</span><br>
<span class="quotelev1">&gt; orte
</span><br>
<span class="quotelev1">&gt; Another concern I have heard raised by others is
</span><br>
<span class="quotelev1">&gt;   - mpi startup time
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anything else been missed here ? &#160;I would like to make sure that we
</span><br>
<span class="quotelev1">&gt; address all the issues raised in the next version of the RFC.
</span><br>
<p>I think the umbrella concerns for the final success of the change are btl 
<br>
performance (in particular, latency and message rates for cache-unfriendly 
<br>
applications/benchmarks) and code maintainability.  In addition, there are 
<br>
some intermediate change issues I have, in that this project is working 
<br>
different than other large changes.  In particular, there is/was the 
<br>
appearance of being asked to accept changes which only make sense if the 
<br>
btl move is going to move forward, without any way to judge the 
<br>
performance or code impact because critical technical issues still remain.
<br>
<p>The latency/message rate issues are fairly straight forward from an end 
<br>
measure point-of-view.  My concerns on latency/message rate come not from 
<br>
the movement of the BTL to another library (for most operating systems / 
<br>
shared library systems that should be negligible), but from the code 
<br>
changes which surround moving the BTLs.  The BTLs are tightly intertwined 
<br>
with a number of pieces of the OMPI layer, in particular the BML and MPool 
<br>
frameworks and the ompi proc structure.  I had a productive conversation 
<br>
with Rainer this morning explaining why I'm so concerned about the bml and 
<br>
ompi proc structures.  The ompi proc structure currently acts not only as 
<br>
the identifier for a remote endpoint, but stores endpoint specific data 
<br>
for both the PML and BML.  The BML structure actually contains each BTL's 
<br>
per process endpoint information, in the form of the base_endpoint_t* 
<br>
structures returned from add_procs().  Moving these structures around must 
<br>
be done with care, as some of the proposals Jeff, Rainer, and I came up 
<br>
with this morning either induced spaghetti code or greatly increased the 
<br>
spread of information needed for the critical send path through the memory 
<br>
space (thereby likely increasing cache misses on send for real 
<br>
applications).
<br>
<p>The code maintainability issue comes from three separate and independent 
<br>
issues.  First, there is the issue of how the pieces of the OMPI layer 
<br>
will interact after the move.  The BML/BTL/MPool/Rcache dance is already 
<br>
complicated, and care should be taken to minimize that change.  Start-up 
<br>
is also already quite complex, and moving the BTLs to make them 
<br>
independent of starting other pieces of Open MPI can be done well or can 
<br>
be done poorly.  We need to ensure it's done well, obviously.  Second, 
<br>
there is the issue of wire-up.  My impression from conversations with 
<br>
everyone at ORNL was that this move of BTLs would include changes to allow 
<br>
BTLs to wire-up without the RML.  I understand that Rich said this was not 
<br>
the case during the part of the admin meeting I missed yesterday, so 
<br>
that may no longer be a concern.  Finally, there has been some discussion, 
<br>
mainly second hand in my case, about the mechanisms in which the trunk 
<br>
would be modified to allow for using OMPI without ORTE.  I have concerns 
<br>
that we'd add complexity to the BTLs to achieve that, and again that can 
<br>
be done poorly if we're not careful.  Talking with Jeff and Rainer this 
<br>
morning helped reduce my concern in this area, but I think it also added 
<br>
to the technical issues with must be solved to consider this project ready 
<br>
for movement to the trunk.
<br>
<p>There are a couple of technical issues which I believe prevent a 
<br>
reasonable discussion of the performance and maintainability issues based 
<br>
on the current branch.  I talked about some of them in the previous two 
<br>
paragraphs, but so that we have a short bullet list, they are:
<br>
<p>&nbsp;&nbsp;&nbsp;- How will the ompi_proc_t be handled?  In particular,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;where will PML/BML data be stored, and how will we
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avoid adding new cache misses.
<br>
&nbsp;&nbsp;&nbsp;- How will the BML and MPool be handled?  The BML holds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the BTL endpoint data, so changes have to be made if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;it continues to live in OMPI.
<br>
&nbsp;&nbsp;&nbsp;- How will the modex and the intricate dance with adding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new procs from dynamic processes be handled?
<br>
&nbsp;&nbsp;&nbsp;- How will we handle the progress mechanisms in cases where
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the MTLs are used and the BTLs aren't needed by the RTE?
<br>
&nbsp;&nbsp;&nbsp;- If there are users outside of OMPI, but who want to also use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI, how will the library versioning / conflict problem be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solved?
<br>
<p><span class="quotelev1">&gt; As was mentioned before, our time frame for this is measured in weeks,
</span><br>
<span class="quotelev1">&gt; and not in months. &#160;I believe the date of May 1st was mentioned to
</span><br>
<span class="quotelev1">&gt; coincide with the next feature release.
</span><br>
<p>While I understand your deadline, we have in the past been very 
<br>
conservative with such large changes.  The C/R work was delayed for over a 
<br>
year because people were concerned with the impact to performance and 
<br>
maintainability.  ORTE work is consistently delayed in the name of code 
<br>
stability.  I believe that changing our desire for high quality code in 
<br>
the trunk because of an organization's deadline (particularly when other 
<br>
organizations are successfully using branches to meet their deadlines) 
<br>
sets a poor precedent and goes against previous precedents.
<br>
<p>Similarly, my concern with the intermediate changes which have been 
<br>
proposed or occurred come from the slippery-slope argument.  Changes which 
<br>
are really only necessary for the btl move (even general code cleanups) 
<br>
should only occur once we're all sure the btl move will work.  Otherwise, 
<br>
we're impacting other developers (many of who are working on temp branches 
<br>
attempting to get a feature to completion, as our normal process 
<br>
dictates) in order to reach an end point which may not be achievable.  In 
<br>
talking to Rainer this morning with Jeff, I think we came up with a number 
<br>
of ideas on how to mitigate this impact and find a better balance which 
<br>
allows ORNL to answer the critical technical questions (which are not just 
<br>
mine, but are shared by others and are critical to the &quot;make it work&quot; part 
<br>
of the process) and allows the rest of the community some belief that we 
<br>
can avoid any permanent harm if the move doesn't work out.
<br>
<p><span class="quotelev1">&gt; One thing that should help when the naming changes are applied is that
</span><br>
<span class="quotelev1">&gt; this is scripted, and the script can be made available for others that
</span><br>
<span class="quotelev1">&gt; are working on temp branches ? which includes us, also.
</span><br>
<p>That unfortunately doesn't help other developers, if they're trying to 
<br>
strictly follow the version control changes to the trunk.  The problem is 
<br>
that we're going to get all those moves (hopefully the script now svn moves 
<br>
instead of svn rm / svn add) through the version control system.  The 
<br>
script would then cause all the changes to occur a second time, and that 
<br>
could be very problematic.  The problem with the version control changes 
<br>
filtering down is that it is not all-encompassing.  For example, svn will 
<br>
have problems if the btl directory moves but I have my own private special 
<br>
BTL.  Yes, i might be able to use your scripts to handle that, but if they 
<br>
aren't written with that scenario in mind, they won't help.  It also won't 
<br>
help if I've added a particular file to an existing BTL and the BTL then 
<br>
moves.
<br>
<p>I think these cases are worth the pain to non-ORNL developers *IF* all the 
<br>
other issues are addressed.  Otherwise, we're unfairly asking them to deal 
<br>
with a radically changing code base for an incomplete project, a situation 
<br>
we've worked to avoid in the past.
<br>
<p>Hopefully this explains my thoughts on the btl move.  I'm not opposed to 
<br>
the move itself (although I reserve the right to become opposed, based on 
<br>
performance and maintainability issues).  I have a problem with the change 
<br>
in process from previous large, invasive changes.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5623.php">Andrew Lumsdaine: "[OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<li><strong>Previous message:</strong> <a href="5621.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5608.php">Richard Graham: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5646.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5646.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
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
